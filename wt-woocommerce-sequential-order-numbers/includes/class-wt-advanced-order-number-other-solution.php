<?php
/**
 * Other solutions (cross-sell) section of the Sequential Order Number settings tab.
 *
 * @package Sequential Order Numbers for WooCommerce
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'WT_Sequentialordnum_Other_Solutions' ) ) :

	/**
	 * Renders the "Other solutions" settings section and its assets.
	 */
	class WT_Sequentialordnum_Other_Solutions {

		/**
		 * Handle for this section's stylesheet and script.
		 *
		 * @var string
		 */
		const ASSET_HANDLE = 'wt-seq-other-solutions';

		/**
		 * Register hooks.
		 */
		public function __construct() {
			add_action( 'wt_sequential_other_solution_section', array( $this, 'wt_show_other_solutions' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_assets' ) );
		}

		/**
		 * Output the other solutions section.
		 *
		 * @since 1.4.9
		 */
		public function wt_show_other_solutions() {
			require_once plugin_dir_path( __DIR__ ) . 'admin/views/wt-other-solutions.php';
		}

		/**
		 * Enqueue the stylesheet and script for this section only.
		 *
		 * @since 1.8.0
		 */
		public function enqueue_assets() {

			if ( ! self::is_other_solutions_section() ) {
				return;
			}

			wp_enqueue_style(
				self::ASSET_HANDLE,
				plugins_url( 'admin/css/wt-seq-other-solutions.css', __DIR__ ),
				array(),
				WT_SEQUENCIAL_ORDNUMBER_VERSION,
				'all'
			);

			wp_enqueue_script(
				self::ASSET_HANDLE,
				plugins_url( 'admin/js/wt-seq-other-solutions.js', __DIR__ ),
				array( 'jquery' ),
				WT_SEQUENCIAL_ORDNUMBER_VERSION,
				true
			);
		}

		/**
		 * Whether the current request is the other solutions settings section.
		 *
		 * @since 1.8.0
		 *
		 * @return bool
		 */
		public static function is_other_solutions_section() {

			// phpcs:disable WordPress.Security.NonceVerification.Recommended
			$page    = isset( $_GET['page'] ) ? sanitize_text_field( wp_unslash( $_GET['page'] ) ) : '';
			$tab     = isset( $_GET['tab'] ) ? sanitize_text_field( wp_unslash( $_GET['tab'] ) ) : '';
			$section = isset( $_GET['section'] ) ? sanitize_text_field( wp_unslash( $_GET['section'] ) ) : '';
			// phpcs:enable WordPress.Security.NonceVerification.Recommended

			return 'wc-settings' === $page && 'wts_settings' === $tab && 'other_solution' === $section;
		}

		/**
		 * Whether a card's plugin is already active.
		 *
		 * 'file_path' is a basename, or an array of basenames for a bundle.
		 *
		 * @since 1.8.0
		 *
		 * @param array $card Card definition.
		 * @return bool
		 */
		public static function is_plugin_active_card( $card ) {

			if ( empty( $card['file_path'] ) ) {
				return false;
			}

			if ( is_array( $card['file_path'] ) ) {
				foreach ( $card['file_path'] as $basename ) {
					if ( empty( $basename ) || ! is_plugin_active( $basename ) ) {
						return false;
					}
				}

				return true;
			}

			return is_plugin_active( $card['file_path'] );
		}

		/**
		 * Drop cards whose plugin is active, and any cell paired to them via 'requires_id'.
		 *
		 * @since 1.8.0
		 *
		 * @param array $cards List of card definitions.
		 * @return array Filtered list, re-indexed.
		 */
		public static function filter_cards( $cards ) {

			if ( empty( $cards ) || ! is_array( $cards ) ) {
				return array();
			}

			$kept     = array();
			$kept_ids = array();

			foreach ( $cards as $card ) {
				if ( self::is_plugin_active_card( $card ) ) {
					continue;
				}

				$kept[] = $card;

				if ( ! empty( $card['id'] ) ) {
					$kept_ids[] = $card['id'];
				}
			}

			$result = array();

			foreach ( $kept as $card ) {
				if ( ! empty( $card['requires_id'] ) && ! in_array( $card['requires_id'], $kept_ids, true ) ) {
					continue;
				}

				$result[] = $card;
			}

			return $result;
		}
	}

	new WT_Sequentialordnum_Other_Solutions();

endif;
