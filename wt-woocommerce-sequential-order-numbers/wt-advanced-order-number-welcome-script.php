<?php
// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
} 

add_action('admin_init', 'wt_sequential_order_number_activation_redirect');

/**
 * Set transient for activation redirect only when it's a normal single-plugin activation.
 * Do not set when: bulk activation, network activation (Multisite), WP-CLI, or cron (e.g. auto-update).
 */
function wt_sequential_order_number_activation_check() {
    // phpcs:disable WordPress.Security.NonceVerification.Recommended
    $action         = isset($_GET['action']) ? sanitize_key(wp_unslash($_GET['action'])) : '';
    $activate_multi = isset($_GET['activate-multi']) ? sanitize_key(wp_unslash($_GET['activate-multi'])) : '';
    // phpcs:enable WordPress.Security.NonceVerification.Recommended

    // Bulk activation: form request uses action=activate-multi
    if ($action === 'activate-multi') {
        return;
    }
    if (!empty($activate_multi)) {
        return;
    }
    if (is_network_admin()) {
        return;
    }
    if (defined('WP_CLI') && WP_CLI) {
        return;
    }
    if (defined('DOING_CRON') && DOING_CRON) {
        return;
    }
    set_transient('_sequential_order_number_welcome_screen_activation_redirect', true, 30);
}

function wt_sequential_order_number_activation_redirect() {
    if (!get_transient('_sequential_order_number_welcome_screen_activation_redirect')) {
        return;
    }

    // Bulk activation: result page has activate-multi=true; also catch action=activate-multi
    // phpcs:disable WordPress.Security.NonceVerification.Recommended
    $action         = isset($_GET['action']) ? sanitize_key(wp_unslash($_GET['action'])) : '';
    $activate_multi = isset($_GET['activate-multi']) ? sanitize_key(wp_unslash($_GET['activate-multi'])) : '';
    // phpcs:enable WordPress.Security.NonceVerification.Recommended
    if (!empty($activate_multi) || $action === 'activate-multi') {
        delete_transient('_sequential_order_number_welcome_screen_activation_redirect');
        return;
    }
    // Referer from plugins page (bulk/single activate) – avoid redirect when another plugin already sent us here
    $referer = isset($_SERVER['HTTP_REFERER']) ? sanitize_url(wp_unslash($_SERVER['HTTP_REFERER'])) : '';
    if ($referer && strpos($referer, 'plugins.php') !== false && (strpos($referer, 'activate-multi') !== false || strpos($referer, 'action=activate') !== false)) {
        delete_transient('_sequential_order_number_welcome_screen_activation_redirect');
        return;
    }

    if (is_network_admin()) {
        delete_transient('_sequential_order_number_welcome_screen_activation_redirect');
        return;
    }
    if (defined('WP_CLI') && WP_CLI) {
        delete_transient('_sequential_order_number_welcome_screen_activation_redirect');
        return;
    }
    if (!current_user_can('manage_woocommerce')) {
        delete_transient('_sequential_order_number_welcome_screen_activation_redirect');
        return;
    }
    if (defined('DOING_CRON') && DOING_CRON) {
        delete_transient('_sequential_order_number_welcome_screen_activation_redirect');
        return;
    }

    delete_transient('_sequential_order_number_welcome_screen_activation_redirect');
    wp_safe_redirect(add_query_arg(array(
        'page' => 'wc-settings',
        'tab'  => 'wts_settings',
    ), admin_url('admin.php')));
    exit;
}
