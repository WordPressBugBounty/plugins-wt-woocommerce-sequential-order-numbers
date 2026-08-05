<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$wt_seq_os_img = WT_SEQUENCIAL_ORDNUMBER_URL . 'admin/images/other_solutions';

/* 'file_path' hides the card when that plugin is active. */
$wt_seq_os_categories = array(
	'ecommerce-promotions' => array(
		'label'      => __( 'E-commerce Promotions', 'wt-woocommerce-sequential-order-numbers' ),
		'subtitle'   => __( 'Create and run successful promotional campaigns with the best marketing tools for WooCommerce', 'wt-woocommerce-sequential-order-numbers' ),
		'icon'       => 'sidebar-ecommerce-promotions.svg',
		'heroes'     => array(),
		'plugins'    => array(
			array(
				'type'      => 'standard',
				'name'      => __( 'Smart Coupons for WooCommerce', 'wt-woocommerce-sequential-order-numbers' ),
				'icon'      => 'smart-coupons-plugin.png',
				'rating'    => '4.9',
				'features'  => array(
					__( 'Advanced BOGO Coupons', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Offer store credits', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Create attractive gift cards', 'wt-woocommerce-sequential-order-numbers' ),
				),
				'url'       => 'https://www.webtoffee.com/product/smart-coupons-for-woocommerce/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=smart_coupons',
				'file_path' => 'wt-smart-coupon-pro/wt-smart-coupon-pro.php',
			),
			array(
				'type'     => 'standard',
				'name'     => __( 'URL Coupons for WooCommerce', 'wt-woocommerce-sequential-order-numbers' ),
				'icon'     => 'url-coupons-plugin.png',
				'rating'   => '5.0',
				'features' => array(
					__( 'Generate custom coupon URLs', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Set up a redirect page', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Automatically add products', 'wt-woocommerce-sequential-order-numbers' ),
				),
				'url'      => 'https://www.webtoffee.com/product/url-coupons-for-woocommerce/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=URL_Coupons',
			),
			array(
				'type'      => 'standard',
				'name'      => __( 'WooCommerce Product Recommendations', 'wt-woocommerce-sequential-order-numbers' ),
				'icon'      => 'product-recommendation-plugin.png',
				'rating'    => '5.0',
				'features'  => array(
					__( 'Automatically generate suggestions based on order history', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Display recommended products on the product pages', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Multiple product recommendation templates', 'wt-woocommerce-sequential-order-numbers' ),
				),
				'url'       => 'https://www.webtoffee.com/product/woocommerce-product-recommendations/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Product_Recommendations',
				'file_path' => 'wt-woocommerce-product-recommendations/wt-woocommerce-product-recommendations.php',
			),
			array(
				'type'     => 'standard',
				'name'     => __( 'WooCommerce Coupon Generator', 'wt-woocommerce-sequential-order-numbers' ),
				'icon'     => 'coupon-generator-plugin.png',
				'rating'   => '5.0',
				'features' => array(
					__( 'Bulk generate WooCommerce coupons', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Bulk export WooCommerce coupons to CSV', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Add usage restrictions to coupons', 'wt-woocommerce-sequential-order-numbers' ),
				),
				'url'      => 'https://www.webtoffee.com/product/woocommerce-coupon-generator/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Coupon_Generator',
			),
			array(
				'type'           => 'standard-with-image',
				'name'           => __( 'WooCommerce Gift Cards', 'wt-woocommerce-sequential-order-numbers' ),
				'icon'           => 'gift-card-plugin.png',
				'rating'         => 'stars',
				'features'       => array(
					__( 'Create unlimited gift cards', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Email gift cards to customers', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Provide refunds to store credit', 'wt-woocommerce-sequential-order-numbers' ),
					__( '20+ predefined gift card templates', 'wt-woocommerce-sequential-order-numbers' ),
				),
				'url'            => 'https://www.webtoffee.com/product/woocommerce-gift-cards/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=WooCommerce_Gift_Cards',
				'image_src'      => 'gift-cards-illustration.svg',
				/* Raise mock to match Figma framing. */
				'image_offset_y' => -6,
				'file_path'      => 'wt-woocommerce-gift-cards/wt-woocommerce-gift-cards.php',
			),
		),
		'standalone' => array(
			'name'       => __( 'ECommerce Marketing Automation App', 'wt-woocommerce-sequential-order-numbers' ),
			'icon'       => 'ema-app-plugin.png',
			'desc'       => __( 'Create signup forms, popups, and automated email campaigns with pre-built workflow templates to capture leads, recover abandoned carts, and grow sales.', 'wt-woocommerce-sequential-order-numbers' ),
			'screenshot' => 'ema-screenshot.svg',
			'url'        => 'https://www.webtoffee.com/product/ecommerce-marketing-automation/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=EMA',
		),
		'bundle'     => array(
			'tag_emoji'    => '📣',
			'tag_color'    => 'yellow',
			'tag'          => __( 'Promotion Bundle', 'wt-woocommerce-sequential-order-numbers' ),
			'title'        => __( 'WooCommerce Promotion Bundle', 'wt-woocommerce-sequential-order-numbers' ),
			'url'          => 'https://www.webtoffee.com/woocommerce-promotions/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Promotion_Bundle',
			'desc'         => __( 'Make powerful promotional campaigns with our WooCommerce promotion bundle. Create coupon promotions, set up gift cards, and implement popular product recommendation strategies.', 'wt-woocommerce-sequential-order-numbers' ),
			'pills'        => array(
				__( 'Smart Coupons', 'wt-woocommerce-sequential-order-numbers' ),
				__( 'Product recommendation', 'wt-woocommerce-sequential-order-numbers' ),
				__( 'Gift cards', 'wt-woocommerce-sequential-order-numbers' ),
			),
			'price_orig'   => '$277',
			'price_sale'   => '$194',
			'savings'      => __( 'Save up to 30% off', 'wt-woocommerce-sequential-order-numbers' ),
			'illustration' => 'promotion-bundle.png',
		),
	),
	'privacy-compliance'   => array(
		'label'      => __( 'Privacy Compliance', 'wt-woocommerce-sequential-order-numbers' ),
		'subtitle'   => __( 'Ensure compliance with major cookie laws, including, GDPR, CCPA, LGPD, CNIL, and more.', 'wt-woocommerce-sequential-order-numbers' ),
		'icon'       => 'sidebar-privacy-compliance.svg',
		'heroes'     => array(
			array(
				'name'        => __( 'GDPR Cookie Consent Plugin (CCPA Ready)', 'wt-woocommerce-sequential-order-numbers' ),
				'icon'        => 'gdpr-plugin.png',
				'rating'      => 'stars',
				'image'       => 'cookie-consent.svg',
				'image_width' => 109.34,
				'tint'        => 'privacy',
				'desc'        => __( 'This Google-certified CMP lets you create a customizable cookie banner, manage user consent, and ensure global privacy compliance with automatic script blocking.', 'wt-woocommerce-sequential-order-numbers' ),
				'url'         => 'https://www.webtoffee.com/product/gdpr-cookie-consent/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=GDPR',
				'file_path'   => 'webtoffee-gdpr-cookie-consent/webtoffee-cookie-consent.php',
			),
			array(
				'name'      => __( 'EU Order Withdrawal Button Plugin for WooCommerce', 'wt-woocommerce-sequential-order-numbers' ),
				'icon'      => 'eu-withdrawal-plugin.png',
				'rating'    => 'stars',
				'image'     => 'eu-withdrawal-illustration.png',
				'tint'      => 'privacy',
				'panel'     => 'flush',
				'features'  => array(
					__( 'Add "Request Withdrawal" button to WooCommerce', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Supports guest withdrawal option', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Two-step confirmation to prevent errors', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Full or partial order withdrawal support', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Dedicated admin dashboard for all requests', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Send email confirmation to customers', 'wt-woocommerce-sequential-order-numbers' ),
				),
				'url'       => 'https://www.webtoffee.com/product/eu-withdrawal-button/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=EU_Withdarawal_Button',
				'file_path' => 'wt-eu-withdrawal-button/wt-eu-withdrawal-button.php',
			),
		),
		'plugins'    => array(),
		'standalone' => null,
		'bundle'     => null,
	),
	'data-import-export'   => array(
		'label'      => __( 'Data Import & Export', 'wt-woocommerce-sequential-order-numbers' ),
		'subtitle'   => __( 'The best-in-class import, export, and migration solutions for your WooCommerce data.', 'wt-woocommerce-sequential-order-numbers' ),
		'icon'       => 'sidebar-data-import-export.svg',
		'heroes'     => array(),
		'plugins'    => array(
			array(
				'type'      => 'standard',
				'name'      => __( 'Product Import Export Plugin', 'wt-woocommerce-sequential-order-numbers' ),
				'icon'      => 'product-ie-plugin.png',
				'rating'    => '4.9',
				'features'  => array(
					__( 'Supports Excel, XML, CSV, and TSV file formats', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Schedule automated import and export', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Support for multiple product types', 'wt-woocommerce-sequential-order-numbers' ),
				),
				'url'       => 'https://www.webtoffee.com/product/product-import-export-woocommerce/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Product_Import_Export',
				'file_path' => 'wt-import-export-for-woo-product/wt-import-export-for-woo-product.php',
			),
			array(
				'type'      => 'standard',
				'name'      => __( 'Order, Coupon, Subscription Export Import', 'wt-woocommerce-sequential-order-numbers' ),
				'icon'      => 'order-ie-plugin.png',
				'rating'    => '4.6',
				'features'  => array(
					__( 'Supports Excel, XML, CSV, and TSV file formats', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Schedule automated import and export', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Email customers on order status change', 'wt-woocommerce-sequential-order-numbers' ),
				),
				'url'       => 'https://www.webtoffee.com/product/order-import-export-plugin-for-woocommerce/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Order_Import_Export',
				'file_path' => 'wt-import-export-for-woo-order/wt-import-export-for-woo-order.php',
			),
			array(
				'type'      => 'standard',
				'name'      => __( 'User Import Export Plugin', 'wt-woocommerce-sequential-order-numbers' ),
				'icon'      => 'user-ie-plugin.png',
				'rating'    => '5.0',
				'features'  => array(
					__( 'Supports Excel, XML, CSV, and TSV file formats', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Schedule automated import and export', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Customize and send emails to new users on import', 'wt-woocommerce-sequential-order-numbers' ),
				),
				'url'       => 'https://www.webtoffee.com/product/wordpress-users-woocommerce-customers-import-export/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=User_Import_Export',
				'file_path' => 'wt-import-export-for-woo-user/wt-import-export-for-woo-user.php',
			),
			array(
				'type'      => 'standard',
				'name'      => __( 'Product Feed & Sync Manager', 'wt-woocommerce-sequential-order-numbers' ),
				'icon'      => 'product-feed-plugin.png',
				'rating'    => '5.0',
				'features'  => array(
					__( 'Generate WooCommerce product feeds for Google Shopping, Facebook Shop, and Instagram Shop', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Supports 25+ sales channels and marketplaces', 'wt-woocommerce-sequential-order-numbers' ),
				),
				'url'       => 'https://www.webtoffee.com/product/woocommerce-product-feed/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=WooCommerce_Product_Feed',
				'file_path' => 'webtoffee-product-feed-pro/webtoffee-product-feed-pro.php',
			),
			array(
				'type'           => 'standard-with-image',
				'name'           => __( 'Import Export Suite for WooCommerce', 'wt-woocommerce-sequential-order-numbers' ),
				'icon'           => 'ie-suite-plugin.png',
				'rating'         => 'stars',
				'features'       => array(
					__( 'Import/export Products, Orders, Subscriptions, Coupons, Customers, WordPress Users, Categories & Tags, Reviews', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Supports Excel, XML, CSV, and TSV file formats', 'wt-woocommerce-sequential-order-numbers' ),
				),
				'url'            => 'https://www.webtoffee.com/product/woocommerce-import-export-suite/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Import_Export_Suite',
				'image_src'      => 'data-io-illustration.svg',
				/* Pull tilted mock toward the CTA (Figma: near the button). */
				'image_zoom'     => 1.15,
				'image_offset_x' => -4,
				'file_path'      => array(
					'wt-import-export-for-woo-product/wt-import-export-for-woo-product.php',
					'wt-import-export-for-woo-user/wt-import-export-for-woo-user.php',
					'wt-import-export-for-woo-order/wt-import-export-for-woo-order.php',
				),
			),
		),
		'standalone' => null,
		'bundle'     => null,
	),
	'accounting-invoicing' => array(
		'label'      => __( 'Accounting & Invoicing', 'wt-woocommerce-sequential-order-numbers' ),
		'subtitle'   => __( 'Automatically generate professional WooCommerce invoices and documents for all your orders.', 'wt-woocommerce-sequential-order-numbers' ),
		'icon'       => 'sidebar-accounting-invoicing.svg',
		'heroes'     => array(
			array(
				'name'        => __( 'PDF Invoices, Packing Slips, & Credit Notes', 'wt-woocommerce-sequential-order-numbers' ),
				'icon'        => 'pdf-invoices-plugin.png',
				'rating'      => 'stars',
				'image'       => 'pdf-invoices-screenshot.svg',
				'image_width' => 105.42,
				'tint'        => 'invoice',
				'desc'        => __( 'Automatically generate, customize, and manage professional WooCommerce invoices, packing slips, and credit notes with advanced automation and tax compliance features.', 'wt-woocommerce-sequential-order-numbers' ),
				'url'         => 'https://www.webtoffee.com/product/woocommerce-pdf-invoices-packing-slips/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=PDF_invoice',
				'file_path'   => 'wt-woocommerce-invoice-addon/wt-woocommerce-invoice-addon.php',
			),
		),
		'plugins'    => array(
			array(
				'type'      => 'standard',
				'name'      => __( 'Shipping Labels, Dispatch Labels, & Delivery Notes', 'wt-woocommerce-sequential-order-numbers' ),
				'icon'      => 'shipping-labels-plugin.png',
				'rating'    => '5.0',
				'features'  => array(
					__( 'Create delivery notes, shipping & dispatch labels', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Enable customers to print the documents from order emails', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Customize shipping label size', 'wt-woocommerce-sequential-order-numbers' ),
				),
				'url'       => 'https://www.webtoffee.com/product/woocommerce-shipping-labels-delivery-notes/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Shipping_Label',
				'file_path' => 'wt-woocommerce-shippinglabel-addon/wt-woocommerce-shippinglabel-addon.php',
			),
			array(
				'type'      => 'standard',
				'name'      => __( 'WooCommerce Picklists plugin', 'wt-woocommerce-sequential-order-numbers' ),
				'icon'      => 'picklists-plugin.png',
				'rating'    => '4.0',
				'features'  => array(
					__( 'Bulk print picklists from the admin order page', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Automatically email picklists based on order status', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Create or customize picklist templates', 'wt-woocommerce-sequential-order-numbers' ),
				),
				'url'       => 'https://www.webtoffee.com/product/woocommerce-picklist/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Picklist',
				'file_path' => 'wt-woocommerce-picklist-addon/wt-woocommerce-picklist-addon.php',
			),
			array(
				'type'      => 'standard',
				'name'      => __( 'Customizer for WooCommerce PDF Invoices', 'wt-woocommerce-sequential-order-numbers' ),
				'icon'      => 'pdf-customizer-plugin.png',
				'rating'    => '5.0',
				'features'  => array(
					__( 'Drag-and-drop easy customization', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Customize individual elements using block editors', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Advanced visual and code editor', 'wt-woocommerce-sequential-order-numbers' ),
				),
				'url'       => 'https://www.webtoffee.com/product/customizer-for-woocommerce-pdf-invoice/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=PDF_Customizer',
				'file_path' => 'wt-advanced-customizer-addon/wt-advanced-customizer-addon.php',
			),
			array(
				'type'      => 'standard',
				'name'      => __( 'WooCommerce Address Labels plugin', 'wt-woocommerce-sequential-order-numbers' ),
				'icon'      => 'address-labels-plugin.png',
				'rating'    => '5.0',
				'features'  => array(
					__( "Generate 'Shipping Address', 'Billing Address', 'From Address', and 'Return Address' labels", 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Customize label sizes', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Bulk print address labels', 'wt-woocommerce-sequential-order-numbers' ),
				),
				'url'       => 'https://www.webtoffee.com/product/woocommerce-address-label/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Address_Label',
				'file_path' => 'wt-woocommerce-addresslabel-addon/wt-woocommerce-addresslabel-addon.php',
			),
			array(
				'type'      => 'standard',
				'name'      => __( 'Proforma Invoice', 'wt-woocommerce-sequential-order-numbers' ),
				'icon'      => 'proforma-invoice-plugin.png',
				'rating'    => '5.0',
				'features'  => array(
					__( 'Create proforma invoices automatically', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Pre-built proforma invoice layouts', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Attach proforma invoice PDF to order emails', 'wt-woocommerce-sequential-order-numbers' ),
				),
				'url'       => 'https://www.webtoffee.com/product/woocommerce-proforma-invoice/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Proforma_Invoice',
				'file_path' => 'wt-woocommerce-proforma-addon/wt-woocommerce-proforma-addon.php',
			),
			array(
				'type'      => 'standard',
				'name'      => __( 'QR Code Add-on for WooCommerce PDF Invoices', 'wt-woocommerce-sequential-order-numbers' ),
				'icon'      => 'qr-code-plugin.png',
				'rating'    => '5.0',
				'features'  => array(
					__( 'Assign QR codes to all generated invoices', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Create QR code that reads order or invoice number', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Add custom data to invoices', 'wt-woocommerce-sequential-order-numbers' ),
				),
				'url'       => 'https://www.webtoffee.com/product/qr-code-addon-for-woocommerce-pdf-invoices/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=QR_Code',
				'file_path' => 'qrcode-addon-for-woocommerce-pdf-invoices/qrcode-addon-for-woocommerce-pdf-invoices.php',
			),
			array(
				'type'      => 'standard',
				'name'      => __( 'WooCommerce Request a Quote', 'wt-woocommerce-sequential-order-numbers' ),
				'icon'      => 'request-quote-plugin.png',
				'rating'    => '5.0',
				'features'  => array(
					__( 'Add quote button to the product & shop pages', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Enable quotation request for selected products', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Automatically send quotes to users', 'wt-woocommerce-sequential-order-numbers' ),
				),
				'url'       => 'https://www.webtoffee.com/product/woocommerce-request-a-quote/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Request_Quote',
				'file_path' => 'wt-woo-request-quote/wt-woo-request-quote.php',
			),
			array(
				'type'      => 'standard-with-image',
				'name'      => __( 'Sequential Order Numbers', 'wt-woocommerce-sequential-order-numbers' ),
				'icon'      => 'sequential-orders-plugin.png',
				'rating'    => 'stars',
				'features'  => array(
					__( 'Auto reset sequence per month/year etc', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Add a custom suffix for order numbers', 'wt-woocommerce-sequential-order-numbers' ),
					__( 'Date suffix in order numbers', 'wt-woocommerce-sequential-order-numbers' ),
				),
				'url'       => 'https://www.webtoffee.com/product/woocommerce-sequential-order-numbers/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Sequential_Order_Numbers',
				'image_src' => 'seq-orders-illustration.svg',
				'file_path' => 'wt-woocommerce-sequential-order-numbers-pro/wt-advanced-order-number-pro.php',
			),
		),
		'standalone' => null,
		'bundle'     => array(
			'tag_emoji'    => '📄',
			'tag_color'    => 'green',
			'tag'          => __( 'Invoice Bundle', 'wt-woocommerce-sequential-order-numbers' ),
			'title'        => __( 'All in one Invoice bundle', 'wt-woocommerce-sequential-order-numbers' ),
			'url'          => 'https://www.webtoffee.com/pdf-invoices-packing-slips-suite-woocommerce/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Invoice_bundle',
			'desc'         => __( 'A complete suite of invoices and shipping documents bundle to create and print PDF invoices, packing slips, shipping and delivery documents in WooCommerce.', 'wt-woocommerce-sequential-order-numbers' ),
			'pills'        => array(
				__( 'Invoice', 'wt-woocommerce-sequential-order-numbers' ),
				__( 'Packing Slips', 'wt-woocommerce-sequential-order-numbers' ),
				__( 'Address Labels', 'wt-woocommerce-sequential-order-numbers' ),
				__( 'Dispatch Labels', 'wt-woocommerce-sequential-order-numbers' ),
				__( 'Shipping Labels', 'wt-woocommerce-sequential-order-numbers' ),
				__( 'Delivery Notes', 'wt-woocommerce-sequential-order-numbers' ),
				__( 'Picklists', 'wt-woocommerce-sequential-order-numbers' ),
				__( 'Proforma Invoice', 'wt-woocommerce-sequential-order-numbers' ),
			),
			'price_orig'   => '$255',
			'price_sale'   => '$179',
			'savings'      => __( 'Save up to 30% off', 'wt-woocommerce-sequential-order-numbers' ),
			'illustration' => 'invoice-bundle.png',
		),
	),
);

/**
 * Filter the Other solutions content model.
 *
 * @since 1.8.0
 *
 * @param array $wt_seq_os_categories Category definitions.
 */
$wt_seq_os_categories = apply_filters( 'wt_seq_other_solutions_categories', $wt_seq_os_categories );

// Drop cards for plugins already active.
foreach ( $wt_seq_os_categories as $wt_seq_os_key => $wt_seq_os_cat ) {
	$wt_seq_os_categories[ $wt_seq_os_key ]['heroes'] = WT_Sequentialordnum_Other_Solutions::filter_cards(
		isset( $wt_seq_os_cat['heroes'] ) ? $wt_seq_os_cat['heroes'] : array()
	);

	$wt_seq_os_categories[ $wt_seq_os_key ]['plugins'] = WT_Sequentialordnum_Other_Solutions::filter_cards(
		isset( $wt_seq_os_cat['plugins'] ) ? $wt_seq_os_cat['plugins'] : array()
	);

	// Drop the category, and its sidebar tab, once every card in it is gone.
	if ( empty( $wt_seq_os_categories[ $wt_seq_os_key ]['heroes'] ) && empty( $wt_seq_os_categories[ $wt_seq_os_key ]['plugins'] ) ) {
		unset( $wt_seq_os_categories[ $wt_seq_os_key ] );
	}
}

if ( empty( $wt_seq_os_categories ) ) {
	return;
}

$wt_seq_os_first = array_key_first( $wt_seq_os_categories );
$wt_seq_os_head  = $wt_seq_os_categories[ $wt_seq_os_first ];
?>

<div class="wt-seq-os-page">

	<div class="wt-seq-os-header">
		<h1 class="wt-seq-os-page-title" id="wt-seq-os-cat-title"><?php echo esc_html( $wt_seq_os_head['label'] ); ?></h1>
		<p class="wt-seq-os-page-subtitle" id="wt-seq-os-cat-subtitle"><?php echo esc_html( $wt_seq_os_head['subtitle'] ); ?></p>
	</div>

	<div class="wt-seq-os-layout">

		<?php /* ---- Sidebar ---- */ ?>
		<div class="wt-seq-os-sidebar">
			<ul class="wt-seq-os-sidebar-nav">
				<?php foreach ( $wt_seq_os_categories as $wt_seq_os_key => $wt_seq_os_cat ) : ?>
					<li>
						<a href="#"
							class="wt-seq-os-cat-link<?php echo ( $wt_seq_os_key === $wt_seq_os_first ) ? ' active' : ''; ?>"
							data-category="<?php echo esc_attr( $wt_seq_os_key ); ?>">
							<img class="wt-seq-os-cat-icon"
								src="<?php echo esc_url( $wt_seq_os_img . '/' . $wt_seq_os_cat['icon'] ); ?>"
								alt="">
							<?php echo esc_html( $wt_seq_os_cat['label'] ); ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>

			<div class="wt-seq-os-trust-badges">
				<div class="wt-seq-os-trust-badge">
					<img src="<?php echo esc_url( $wt_seq_os_img . '/thirty-day-guarantee.png' ); ?>"
						alt="<?php esc_attr_e( '30 Day Money Back Guarantee', 'wt-woocommerce-sequential-order-numbers' ); ?>">
					<span><?php esc_html_e( '30 Day No Risk Money Back Guarantee', 'wt-woocommerce-sequential-order-numbers' ); ?></span>
				</div>
				<div class="wt-seq-os-trust-badge">
					<img src="<?php echo esc_url( $wt_seq_os_img . '/satisfaction-badge.png' ); ?>"
						alt="<?php esc_attr_e( '99% Satisfaction Rating', 'wt-woocommerce-sequential-order-numbers' ); ?>">
					<span><?php esc_html_e( 'Fast Support with 99% Satisfaction Rating', 'wt-woocommerce-sequential-order-numbers' ); ?></span>
				</div>
			</div>
		</div>

		<?php /* ---- Main content ---- */ ?>
		<div class="wt-seq-os-main">

			<?php foreach ( $wt_seq_os_categories as $wt_seq_os_key => $wt_seq_os_cat ) : ?>
				<div id="wt-seq-os-panel-<?php echo esc_attr( $wt_seq_os_key ); ?>"
					class="wt-seq-os-category-panel<?php echo ( $wt_seq_os_key === $wt_seq_os_first ) ? ' active' : ''; ?>"
					data-title="<?php echo esc_attr( $wt_seq_os_cat['label'] ); ?>"
					data-subtitle="<?php echo esc_attr( $wt_seq_os_cat['subtitle'] ); ?>">

					<?php /* -- Hero cards -- */ ?>
					<?php foreach ( $wt_seq_os_cat['heroes'] as $wt_seq_os_hero ) : ?>
						<div class="wt-seq-os-hero-card">
							<div class="wt-seq-os-hero-left">
								<div class="wt-seq-os-hero-title-row">
									<img class="wt-seq-os-hero-icon"
										src="<?php echo esc_url( $wt_seq_os_img . '/' . $wt_seq_os_hero['icon'] ); ?>"
										alt="<?php echo esc_attr( $wt_seq_os_hero['name'] ); ?>">
									<h3 class="wt-seq-os-hero-name"><?php echo esc_html( $wt_seq_os_hero['name'] ); ?></h3>
								</div>
								<div class="wt-seq-os-hero-stars">
									<?php for ( $wt_seq_os_i = 0; $wt_seq_os_i < 5; $wt_seq_os_i++ ) : ?>
										<span class="wt-seq-os-star">&#9733;</span>
									<?php endfor; ?>
								</div>
								<?php if ( ! empty( $wt_seq_os_hero['desc'] ) ) : ?>
									<p class="wt-seq-os-hero-desc"><?php echo esc_html( $wt_seq_os_hero['desc'] ); ?></p>
								<?php endif; ?>
								<?php if ( ! empty( $wt_seq_os_hero['features'] ) ) : ?>
									<ul class="wt-seq-os-card-features wt-seq-os-hero-features">
										<?php foreach ( $wt_seq_os_hero['features'] as $wt_seq_os_feature ) : ?>
											<li>
												<span class="wt-seq-os-check" aria-hidden="true"></span>
												<?php echo esc_html( $wt_seq_os_feature ); ?>
											</li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
								<a href="<?php echo esc_url( $wt_seq_os_hero['url'] ); ?>"
									target="_blank"
									rel="noopener noreferrer"
									class="wt-seq-os-btn-premium wt-seq-os-btn-premium--block">
									<span class="wt-seq-os-crown" aria-hidden="true"></span>
									<?php esc_html_e( 'Get premium', 'wt-woocommerce-sequential-order-numbers' ); ?>
								</a>
							</div>
							<?php if ( ! empty( $wt_seq_os_hero['image'] ) ) : ?>
								<?php
								$wt_seq_os_tint  = ! empty( $wt_seq_os_hero['tint'] ) ? $wt_seq_os_hero['tint'] : 'privacy';
								$wt_seq_os_flush = ( ! empty( $wt_seq_os_hero['panel'] ) && 'flush' === $wt_seq_os_hero['panel'] );
								$wt_seq_os_hw    = ! empty( $wt_seq_os_hero['image_width'] ) ? (float) $wt_seq_os_hero['image_width'] : 100;
								?>
								<div class="wt-seq-os-hero-right wt-seq-os-hero-right--<?php echo esc_attr( $wt_seq_os_tint ); ?><?php echo $wt_seq_os_flush ? ' wt-seq-os-hero-right--flush' : ''; ?>"
									style="--wt-seq-os-hero-w: <?php echo esc_attr( $wt_seq_os_hw ); ?>%;">
									<img src="<?php echo esc_url( $wt_seq_os_img . '/' . $wt_seq_os_hero['image'] ); ?>"
										alt="<?php echo esc_attr( $wt_seq_os_hero['name'] ); ?>">
								</div>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>

					<?php /* -- Plugin card grid -- */ ?>
					<?php if ( ! empty( $wt_seq_os_cat['plugins'] ) ) : ?>
						<?php foreach ( array_chunk( $wt_seq_os_cat['plugins'], 3 ) as $wt_seq_os_row ) : ?>
							<div class="wt-seq-os-card-grid">
								<?php foreach ( $wt_seq_os_row as $wt_seq_os_card ) : ?>

									<?php if ( 'image' === $wt_seq_os_card['type'] ) : ?>

										<div class="wt-seq-os-card-image">
											<img src="<?php echo esc_url( $wt_seq_os_img . '/' . $wt_seq_os_card['src'] ); ?>" alt="">
										</div>

										<?php
									else :
										$wt_seq_os_with_image = ( 'standard-with-image' === $wt_seq_os_card['type'] && ! empty( $wt_seq_os_card['image_src'] ) );
										?>

										<div class="wt-seq-os-card<?php echo $wt_seq_os_with_image ? ' wt-seq-os-card--with-image' : ''; ?>">
											<div class="wt-seq-os-card-body">
												<div class="wt-seq-os-card-header">
													<div class="wt-seq-os-card-icon-name">
														<img class="wt-seq-os-card-icon"
															src="<?php echo esc_url( $wt_seq_os_img . '/' . $wt_seq_os_card['icon'] ); ?>"
															alt="<?php echo esc_attr( $wt_seq_os_card['name'] ); ?>">
														<span class="wt-seq-os-card-name"><?php echo esc_html( $wt_seq_os_card['name'] ); ?></span>
													</div>
													<?php if ( 'stars' === $wt_seq_os_card['rating'] ) : ?>
														<span class="wt-seq-os-card-rating wt-seq-os-card-rating--stars">
															<?php for ( $wt_seq_os_i = 0; $wt_seq_os_i < 5; $wt_seq_os_i++ ) : ?>
																<span class="wt-seq-os-star">&#9733;</span>
															<?php endfor; ?>
														</span>
													<?php else : ?>
														<span class="wt-seq-os-card-rating">
															<?php echo esc_html( $wt_seq_os_card['rating'] ); ?>
															<span class="wt-seq-os-star">&#9733;</span>
														</span>
													<?php endif; ?>
												</div>
												<ul class="wt-seq-os-card-features">
													<?php foreach ( $wt_seq_os_card['features'] as $wt_seq_os_feature ) : ?>
														<li>
															<span class="wt-seq-os-check" aria-hidden="true"></span>
															<?php echo esc_html( $wt_seq_os_feature ); ?>
														</li>
													<?php endforeach; ?>
												</ul>
												<a href="<?php echo esc_url( $wt_seq_os_card['url'] ); ?>"
													target="_blank"
													rel="noopener noreferrer"
													class="wt-seq-os-btn-premium">
													<span class="wt-seq-os-crown" aria-hidden="true"></span>
													<?php esc_html_e( 'Get premium', 'wt-woocommerce-sequential-order-numbers' ); ?>
												</a>
											</div>
											<?php
											if ( $wt_seq_os_with_image ) :
												$wt_seq_os_zoom     = ! empty( $wt_seq_os_card['image_zoom'] ) ? (float) $wt_seq_os_card['image_zoom'] : 1;
												$wt_seq_os_offset_y = isset( $wt_seq_os_card['image_offset_y'] ) ? (float) $wt_seq_os_card['image_offset_y'] : 0;
												$wt_seq_os_offset_x = isset( $wt_seq_os_card['image_offset_x'] ) ? (float) $wt_seq_os_card['image_offset_x'] : 0;
												?>
												<div class="wt-seq-os-card-image-side" style="--wt-seq-os-zoom: <?php echo esc_attr( $wt_seq_os_zoom ); ?>; --wt-seq-os-offset-y: <?php echo esc_attr( $wt_seq_os_offset_y ); ?>%; --wt-seq-os-offset-x: <?php echo esc_attr( $wt_seq_os_offset_x ); ?>%;">
													<img src="<?php echo esc_url( $wt_seq_os_img . '/' . $wt_seq_os_card['image_src'] ); ?>" alt="">
												</div>
											<?php endif; ?>
										</div>

									<?php endif; ?>

								<?php endforeach; ?>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>

					<?php /* -- Bundle -- */ ?>
					<?php
					if ( ! empty( $wt_seq_os_cat['bundle'] ) ) :
						$wt_seq_os_bundle    = $wt_seq_os_cat['bundle'];
						$wt_seq_os_tag_color = ! empty( $wt_seq_os_bundle['tag_color'] ) ? $wt_seq_os_bundle['tag_color'] : 'green';
						?>
						<div class="wt-seq-os-bundle">
							<div class="wt-seq-os-bundle-content">
								<span class="wt-seq-os-bundle-tag wt-seq-os-bundle-tag--<?php echo esc_attr( $wt_seq_os_tag_color ); ?>">
									<?php if ( ! empty( $wt_seq_os_bundle['tag_emoji'] ) ) : ?>
										<span class="wt-seq-os-bundle-tag-emoji"><?php echo esc_html( $wt_seq_os_bundle['tag_emoji'] ); ?></span>
									<?php endif; ?>
									<?php echo esc_html( $wt_seq_os_bundle['tag'] ); ?>
								</span>
								<div class="wt-seq-os-bundle-title">
									<a href="<?php echo esc_url( $wt_seq_os_bundle['url'] ); ?>"
										target="_blank"
										rel="noopener noreferrer">
										<?php echo esc_html( $wt_seq_os_bundle['title'] ); ?>
									</a>
									<span class="wt-seq-os-ext-arrow" aria-hidden="true"></span>
								</div>
								<p class="wt-seq-os-bundle-desc"><?php echo esc_html( $wt_seq_os_bundle['desc'] ); ?></p>
								<div class="wt-seq-os-bundle-pills">
									<?php foreach ( $wt_seq_os_bundle['pills'] as $wt_seq_os_pill ) : ?>
										<span class="wt-seq-os-bundle-pill">
											<span class="wt-seq-os-pill-tick" aria-hidden="true"></span>
											<?php echo esc_html( $wt_seq_os_pill ); ?>
										</span>
									<?php endforeach; ?>
								</div>
								<p class="wt-seq-os-bundle-pricing">
									<?php
									printf(
										wp_kses(
											/* translators: 1: strikethrough original price, 2: bold sale price, 3: savings text */
											__( 'Total : <s>%1$s</s> <strong>%2$s</strong> <span class="wt-seq-os-savings">(%3$s)</span>', 'wt-woocommerce-sequential-order-numbers' ),
											array(
												's'      => array(),
												'strong' => array(),
												'span'   => array( 'class' => array() ),
											)
										),
										esc_html( $wt_seq_os_bundle['price_orig'] ),
										esc_html( $wt_seq_os_bundle['price_sale'] ),
										esc_html( $wt_seq_os_bundle['savings'] )
									);
									?>
								</p>
								<a href="<?php echo esc_url( $wt_seq_os_bundle['url'] ); ?>"
									target="_blank"
									rel="noopener noreferrer"
									class="wt-seq-os-btn-bundle">
									<?php esc_html_e( 'View Bundle', 'wt-woocommerce-sequential-order-numbers' ); ?>
								</a>
							</div>
							<?php if ( ! empty( $wt_seq_os_bundle['illustration'] ) ) : ?>
								<div class="wt-seq-os-bundle-illustration">
									<img src="<?php echo esc_url( $wt_seq_os_img . '/' . $wt_seq_os_bundle['illustration'] ); ?>"
										alt="<?php echo esc_attr( $wt_seq_os_bundle['title'] ); ?>">
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>

					<?php /* -- Standalone card -- */ ?>
					<?php
					if ( ! empty( $wt_seq_os_cat['standalone'] ) ) :
						$wt_seq_os_solo = $wt_seq_os_cat['standalone'];
						?>
						<div class="wt-seq-os-standalone">
							<div class="wt-seq-os-standalone-content">
								<div class="wt-seq-os-standalone-header">
									<img class="wt-seq-os-standalone-icon"
										src="<?php echo esc_url( $wt_seq_os_img . '/' . $wt_seq_os_solo['icon'] ); ?>"
										alt="<?php echo esc_attr( $wt_seq_os_solo['name'] ); ?>">
									<h3 class="wt-seq-os-standalone-name"><?php echo esc_html( $wt_seq_os_solo['name'] ); ?></h3>
								</div>
								<p class="wt-seq-os-standalone-desc"><?php echo esc_html( $wt_seq_os_solo['desc'] ); ?></p>
								<a href="<?php echo esc_url( $wt_seq_os_solo['url'] ); ?>"
									target="_blank"
									rel="noopener noreferrer"
									class="wt-seq-os-btn-premium wt-seq-os-btn-premium--block">
									<span class="wt-seq-os-crown" aria-hidden="true"></span>
									<?php esc_html_e( 'Get premium', 'wt-woocommerce-sequential-order-numbers' ); ?>
								</a>
							</div>
							<?php if ( ! empty( $wt_seq_os_solo['screenshot'] ) ) : ?>
								<div class="wt-seq-os-standalone-screenshot">
									<img src="<?php echo esc_url( $wt_seq_os_img . '/' . $wt_seq_os_solo['screenshot'] ); ?>"
										alt="<?php echo esc_attr( $wt_seq_os_solo['name'] ); ?>">
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>

				</div>
			<?php endforeach; ?>

		</div>
	</div>
</div>
