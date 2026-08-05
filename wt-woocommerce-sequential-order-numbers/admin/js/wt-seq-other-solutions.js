/**
 * Category sidebar tab switching for the "Other solutions" settings section.
 *
 * @package Sequential Order Numbers for WooCommerce
 * @since   1.8.0
 */
( function ( $ ) {
	'use strict';

	$( document ).ready( function () {
		// No settings fields here, so hide the tab's Save button.
		$( 'p.submit' ).hide();

		var $links    = $( '.wt-seq-os-cat-link' );
		var $panels   = $( '.wt-seq-os-category-panel' );
		var $title    = $( '#wt-seq-os-cat-title' );
		var $subtitle = $( '#wt-seq-os-cat-subtitle' );

		$links.on( 'click', function ( e ) {
			e.preventDefault();

			var category = $( this ).data( 'category' );

			$links.removeClass( 'active' );
			$( this ).addClass( 'active' );

			$panels.removeClass( 'active' );
			var $panel = $( '#wt-seq-os-panel-' + category );
			$panel.addClass( 'active' );

			$title.text( $panel.data( 'title' ) );
			$subtitle.text( $panel.data( 'subtitle' ) );
		} );
	} );
}( jQuery ) );
