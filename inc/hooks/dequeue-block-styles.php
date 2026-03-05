<?php
/**
 * Dequeue core block styles.
 *
 * @package wdsbt
 */

namespace WebDevStudios\wdsbt;

/**
 * Dequeue specific core block styles.
 *
 * This function prevents WordPress from loading default styles for specific blocks,
 * allowing the theme to have full control over block styling without having to
 * override default styles.
 *
 * @return void
 */
function dequeue_core_block_styles() {
	wp_dequeue_style( 'wp-block-navigation' );
	wp_dequeue_style( 'wp-block-site-logo' );
	wp_dequeue_style( 'wp-block-search' );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\dequeue_core_block_styles', 100 );

/**
 * Remove default block styles from the Block Editor and Site Editor
 *
 * Reference: https://fullsiteediting.com/lessons/how-to-remove-default-block-styles/
 *
 * @return void
 */
add_action(
	'wp_default_styles',
	function ( $styles ) {
		$handles = [ 'wp-block-library', 'wp-block-library-theme' ];

		foreach ( $handles as $handle ) {
			$style = $styles->query( $handle, 'registered' );
			if ( ! $style ) {
				continue;
			}
			$styles->remove( $handle );
			$styles->add( $handle, false, [] );
		}
	},
	PHP_INT_MAX
);
