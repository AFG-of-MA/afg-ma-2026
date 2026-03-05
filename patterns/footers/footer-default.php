<?php
/**
 * Title: Default footer
 * Slug: wdsbt/footer
 * Categories: footers
 * Block Types: core/template-part/footer
 *
 * @package wdsbt
 */

// Generate the copyright information.
$wdsbt_copyright_info = esc_html__( 'Copyright &copy; ', 'wdsbt' ) . esc_attr( gmdate( 'Y' ) );
?>

<!-- wp:group {"tagName":"footer","metadata":{"name":"Footer"}} -->
<footer class="wp-block-group">

	<!-- wp:social-links {"iconColor":"black","iconColorValue":"#000","iconBackgroundColor":"white","iconBackgroundColorValue":"#fff","className":"is-style-default"} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default">

		<!-- wp:social-link {"url":"https://www.facebook.com/webdevstudios","service":"facebook"} /-->

		<!-- wp:social-link {"url":"https://twitter.com/webdevstudios","service":"x"} /-->

		<!-- wp:social-link {"url":"https://www.instagram.com/webdevstudios/","service":"instagram"} /-->

		<!-- wp:social-link {"url":"https://www.linkedin.com/company/webdevstudios-llc-","service":"linkedin"} /-->

		<!-- wp:social-link {"url":"https://www.youtube.com/channel/UCh3A6k9S5xKIh6nmKsTk0ag","service":"youtube"} /-->

	</ul>
	<!-- /wp:social-links -->

	<!-- wp:paragraph -->
	<p class=""><?php echo wp_kses_post( $wdsbt_copyright_info ); ?></p>
	<!-- /wp:paragraph -->

</footer>
<!-- /wp:group -->
