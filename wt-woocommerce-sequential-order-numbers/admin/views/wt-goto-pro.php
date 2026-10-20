<?php

if (!defined('ABSPATH')) {
    exit;
}

  $seq_order_logo_url=WT_SEQUENCIAL_ORDNUMBER_URL.'assets/images/logo_seq.png';
  $seq_pro_features = array(
    __('Auto reset sequence per month/year etc.','wt-woocommerce-sequential-order-numbers'),
    __('Custom series for orders from a specific date/ID.','wt-woocommerce-sequential-order-numbers'),
    __('Add custom suffix for order numbers','wt-woocommerce-sequential-order-numbers'),
    __('Date suffix in order numbers.','wt-woocommerce-sequential-order-numbers'),
    __('Custom sequence for free orders.','wt-woocommerce-sequential-order-numbers'),
    __('Increment sequence in custom series.','wt-woocommerce-sequential-order-numbers'),
    __('More order number templates.','wt-woocommerce-sequential-order-numbers'),
  );
?>
<style type="text/css">
.wt_seq_settings_left{
  float: left;
  width: 77%;
}
.wt_seq_settings_right{
  float: left;
  width: 23%;
}
.wt-seqpro-card{ box-sizing: border-box; padding: 20px 18px 18px; background: #fff; border: 1px solid #E3E5E8; border-radius: 14px; box-shadow: 0 2px 8px rgba(17, 24, 39, 0.04); font-family: Inter, Roboto, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; container-type: inline-size; }
.wt-seqpro-card p{ margin: 0; }
/* BFCM deal strip — only rendered during the sale. */
.wt-seqpro-card__deal{ display: flex; align-items: center; gap: 8px; margin: 0 0 18px; padding: 0 6px 12px 10px; background: #EBFBEF; }
.wt-seqpro-card__ribbon{ flex: 0 0 auto; align-self: flex-start; width: 46px; padding: 7px 0 14px; background: #EC5A6C; color: #fff; font-family: "Roboto Condensed", "Arial Narrow", "Helvetica Neue", sans-serif; font-stretch: condensed; font-size: 15px; font-weight: 700; line-height: 1.05; letter-spacing: -0.2px; text-align: center; clip-path: polygon( 0 0, 100% 0, 100% 100%, 50% 84%, 0 100% ); }
.wt-seqpro-card__deal > div{ padding-top: 12px; }
.wt-seqpro-card__deal-title{ color: #111827; font-size: 13px; font-weight: 700; line-height: 1.4; }
.wt-seqpro-card__deal-text{ color: #6B7280; font-size: 10px; line-height: 1.5; white-space: nowrap; }
/* One line wherever it fits; a sidebar too narrow for it wraps rather than overflowing the card. */
@container (max-width: 261px){ .wt-seqpro-card__deal-text{ white-space: normal; } }
.wt-seqpro-card__product{ display: flex; align-items: center; gap: 12px; padding-bottom: 16px; border-bottom: 1px solid #E5E7EB; }
.wt-seqpro-card__product img{ flex: 0 0 auto; width: 40px; height: 40px; border-radius: 8px; }
.wt-seqpro-card__product h4{ margin: 0; color: #1F2937; font-size: 15px; font-weight: 600; line-height: 1.35; }
.wt-seqpro-card__features{ margin: 18px 0 0; padding: 0; list-style: none; }
.wt-seqpro-card__features li{ position: relative; margin: 0 0 14px; padding-left: 32px; color: #4B5563; font-size: 13px; line-height: 1.5; }
.wt-seqpro-card__features li::before{ content: ""; position: absolute; top: 1px; left: 0; width: 18px; height: 18px; background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 18 18'%3E%3Cpath d='M3 9.5l4 4L15 5' fill='none' stroke='%236CC04A' stroke-width='2.2' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E") center / 18px no-repeat; }
.wt-seqpro-card__button, .wt-seqpro-card__button:visited, .wt-seqpro-card__button:focus{ display: flex; align-items: center; justify-content: center; gap: 10px; margin: 20px 0 22px; padding: 13px 14px; background: #4F46E5; border-radius: 8px; box-shadow: 0 6px 14px rgba(79, 70, 229, 0.25); color: #fff; font-size: 13px; font-weight: 600; letter-spacing: 0.2px; text-transform: uppercase; text-decoration: none; }
.wt-seqpro-card__button:hover{ background: #4338CA; color: #fff; }
.wt-seqpro-card__button svg{ flex: 0 0 auto; }
.wt-seqpro-card__button-arrow{ font-size: 16px; line-height: 1; }
.wt-seqpro-card__trust{ display: flex; align-items: center; gap: 14px; margin-top: 10px; padding: 0 10px; }
.wt-seqpro-card__trust p{ color: #4B5563; font-size: 12px; line-height: 1.55; }
.wt-seqpro-card__trust strong{ color: #1F2937; font-weight: 600; }
.wt-seqpro-card__trust-icon{ flex: 0 0 auto; display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; border-radius: 8px; }
.wt-seqpro-card__trust-icon--shield{ background: #EEF3FE; color: #2B55CF; }
.wt-seqpro-card__trust-icon--star{ background: #EBFAEF; color: #3FA45B; }
p.submit{float: left; width: 100%;}
</style>
<?php
if(Wt_Advanced_Order_Number_Admin::wt_is_enable_rtl_support()) /* checks the current language need RTL support */
{
  ?>
  <style type="text/css">
    .wt_seq_order_settings_left,.wt_seq_order_settings_right{float: right !important;}
    .wfte_branding{float: left !important;}
  </style>

  <?php
}
?>
<div class="wt_gopro_block" style="margin-bottom: 1em;margin-top: 20px;">
  <div class="wt-seqpro-card">
    <?php if (Wtso_Bfcm_Twenty_Twenty_Six::is_bfcm_season()) { ?>
      <div class="wt-seqpro-card__deal">
        <span class="wt-seqpro-card__ribbon"><?php echo esc_html__('30%','wt-woocommerce-sequential-order-numbers'); ?><br><?php echo esc_html__('OFF','wt-woocommerce-sequential-order-numbers'); ?></span>
        <div>
          <p class="wt-seqpro-card__deal-title"><?php echo esc_html__('BFCM Deal of the Year is Here!','wt-woocommerce-sequential-order-numbers'); ?></p>
          <p class="wt-seqpro-card__deal-text"><?php echo esc_html__('Grab huge offers on our premium plugins.','wt-woocommerce-sequential-order-numbers'); ?></p>
        </div>
      </div>
    <?php } ?>

    <div class="wt-seqpro-card__product">
      <img src="<?php echo esc_url($seq_order_logo_url); ?>" alt="" width="40" height="40">
      <h4><?php echo esc_html__('Sequential Order Number for WooCommerce Pro','wt-woocommerce-sequential-order-numbers'); ?></h4>
    </div>

    <ul class="wt-seqpro-card__features">
      <?php foreach ($seq_pro_features as $seq_pro_feature) { ?>
        <li><?php echo esc_html($seq_pro_feature); ?></li>
      <?php } ?>
    </ul>

    <a href="https://www.webtoffee.com/product/woocommerce-sequential-order-numbers/?utm_source=free_plugin_sidebar&utm_medium=sequential_free&utm_campaign=Sequential_Order_Numbers&utm_content=<?php echo esc_attr(WT_SEQUENCIAL_ORDNUMBER_VERSION);?>" class="wt-seqpro-card__button" target="_blank">
      <svg width="18" height="16" viewBox="0 0 18 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" aria-hidden="true"><path d="M2 4.5l3.6 3L9 2.5l3.4 5L16 4.5l-1.4 7.5H3.4L2 4.5z"/><path d="M3.4 14.5h11.2" stroke-linecap="round"/></svg>
      <?php echo esc_html__('UPGRADE TO PREMIUM','wt-woocommerce-sequential-order-numbers'); ?>
      <span class="wt-seqpro-card__button-arrow" aria-hidden="true">&rarr;</span>
    </a>

    <div class="wt-seqpro-card__trust">
      <span class="wt-seqpro-card__trust-icon wt-seqpro-card__trust-icon--shield" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l7 3v5c0 4.5-3 8.5-7 10-4-1.5-7-5.5-7-10V6l7-3z"/><path d="M9 12l2 2 4-4"/></svg></span>
      <p>
      <?php
        printf(
          // translators: %s: "30-day money back guarantee" in bold.
          esc_html__('You are covered by our %s','wt-woocommerce-sequential-order-numbers'),
          '<strong>' . esc_html__('30-day money back guarantee','wt-woocommerce-sequential-order-numbers') . '</strong>'
        );
      ?>
      </p>
    </div>
    <div class="wt-seqpro-card__trust">
      <span class="wt-seqpro-card__trust-icon wt-seqpro-card__trust-icon--star" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"><path d="M12 3.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8-5.2-2.7-5.2 2.7 1-5.8-4.3-4.1 5.9-.9L12 3.5z"/></svg></span>
      <p>
      <?php
        printf(
          // translators: %s: "99% customer satisfaction score" in bold.
          esc_html__('Supported by a team with %s','wt-woocommerce-sequential-order-numbers'),
          '<strong>' . esc_html__('99% customer satisfaction score','wt-woocommerce-sequential-order-numbers') . '</strong>'
        );
      ?>
      </p>
    </div>
  </div>
</div>
<script type="text/javascript">
  jQuery(document).ready(function($){
    //To add class name to submit button
    $( "p.submit" ).last().addClass("wt_seq_submit_btn");
    $('.wt_seq_goto_pro').insertAfter($('.wt_seq_submit_btn'));
  });
</script>
