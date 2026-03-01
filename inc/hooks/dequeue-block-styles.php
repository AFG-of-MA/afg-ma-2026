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
	// Dequeue navigation block styles (includes hover/submenu behavior).
	wp_dequeue_style( 'wp-block-navigation' );

	// Deregister to prevent re-enqueueing.
	wp_deregister_style( 'wp-block-navigation' );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\dequeue_core_block_styles', 100 );
