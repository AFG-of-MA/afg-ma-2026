<?php
/**
 * Title: Default nav
 * Slug: wdsbt/nav
 * Categories: navs
 * Block Types: core/template-part/nav
 *
 * @package wdsbt
 */

// Determine whether to display site logo or site title.
$wdsbt_site_info = has_custom_logo() ? '<!-- wp:site-logo {"width":150,"shouldSyncIcon":true,"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->' : '<!-- wp:site-title /-->';
?>

<!--
wp:group {
	"layout":{"type":"default"},
	"templateLock":"all",
	"lock": {
		"move": true,
		"remove": true
	},
	"metadata":{
		"name":"Nav Inner"
	}
} -->
<div id="top" class="wp-block-group">
	<?php echo wp_kses_post( $wdsbt_site_info ); ?>
	<!--
	wp:group {
		"metadata": {
			"name": "Menu"
		}
	} -->
	<div class="wp-block-group">
		<!--
		wp:navigation {
			"ref":2461,
			"layout":{
				"type":"default",
				"allowSizingOnChildren":false
			},
			"fontSize":"medium",
			"interactivity": false,
			"overlayMenu":"mobile"
		} /-->
	</div><!-- /wp:group -->
</div><!-- /wp:group -->
