import { addFilter } from '@wordpress/hooks';
import { createHigherOrderComponent } from '@wordpress/compose';

/**
 * Disable resizable box for site logo block.
 *
 * This filter removes the resizing functionality from the site logo block
 * in the WordPress block editor by modifying the block's supports.
 */
addFilter(
	'blocks.registerBlockType',
	'wdsbt/site-logo-disable-resize',
	(settings, name) => {
		if (name !== 'core/site-logo') {
			return settings;
		}

		return {
			...settings,
			supports: {
				...settings.supports,
				// Disable the resizable box
				__experimentalLayout: false,
			},
		};
	}
);

/**
 * Remove resize handles from site logo block editor.
 *
 * This higher-order component wraps the site logo block editor
 * and adds a CSS class to hide resize handles.
 */
addFilter(
	'editor.BlockEdit',
	'wdsbt/site-logo-disable-resize',
	createHigherOrderComponent((BlockEdit) => {
		return (props) => {
			if (props.name !== 'core/site-logo') {
				return <BlockEdit {...props} />;
			}
			// Add custom class to disable resizing UI
			return (
				<div className="wdsbt-site-logo-no-resize">
					<BlockEdit {...props} />
				</div>
			);
		};
	}, 'withSiteLogoNoResize')
);
