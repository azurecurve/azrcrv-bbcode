<?php
/*
	setup
*/

/**
 * Declare the Namespace.
 *
 * @since 1.0.0
 */
namespace azurecurve\BBCode;

/**
 * Setup registration activation hook, actions, filters and shortcodes.
 *
 * @since 1.0.0
 */

// add actions.
add_action( 'admin_menu', __NAMESPACE__ . '\\create_admin_menu' );
add_action( 'plugins_loaded', __NAMESPACE__ . '\\load_languages' );
add_action( 'admin_init', __NAMESPACE__ . '\\register_admin_styles' );
add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\\enqueue_admin_styles' );
add_action( 'admin_init', __NAMESPACE__ . '\\register_admin_scripts' );
add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\\enqueue_admin_scripts' );
add_action( 'init', __NAMESPACE__ . '\\register_frontend_styles' );
add_filter( 'the_posts', __NAMESPACE__ . '\\check_for_shortcode' );

	// add additional actions.

// add filters.
add_filter( 'plugin_action_links', __NAMESPACE__ . '\\add_plugin_action_link', 10, 2 );

$plugin_slug_for_um = plugin_basename( trim( PLUGIN_FILE ) );
add_filter( 'codepotent_update_manager_' . $plugin_slug_for_um . '_image_path', __NAMESPACE__ . '\\custom_image_path' );
add_filter( 'codepotent_update_manager_' . $plugin_slug_for_um . '_image_url', __NAMESPACE__ . '\\custom_image_url' );


	// add additional filters.

// add shortcodes.
add_shortcode( 'b', __NAMESPACE__ . '\\bold' );
add_shortcode( 'B', __NAMESPACE__ . '\\bold' );
add_shortcode( 'i', __NAMESPACE__ . '\\italic' );
add_shortcode( 'I', __NAMESPACE__ . '\\italic' );
add_shortcode( 'u', __NAMESPACE__ . '\\underline' );
add_shortcode( 'U', __NAMESPACE__ . '\\underline' );
add_shortcode( 'ol', __NAMESPACE__ . '\\ol' );
add_shortcode( 'OL', __NAMESPACE__ . '\\ol' );
add_shortcode( 'ul', __NAMESPACE__ . '\\ul' );
add_shortcode( 'UL', __NAMESPACE__ . '\\ul' );
add_shortcode( 'li', __NAMESPACE__ . '\\li' );
add_shortcode( 'LI', __NAMESPACE__ . '\\li' );
add_shortcode( 'table', __NAMESPACE__ . '\\table' );
add_shortcode( 'TABLE', __NAMESPACE__ . '\\table' );
add_shortcode( 'tr', __NAMESPACE__ . '\\tr' );
add_shortcode( 'TR', __NAMESPACE__ . '\\tr' );
add_shortcode( 'th', __NAMESPACE__ . '\\th' );
add_shortcode( 'TH', __NAMESPACE__ . '\\th' );
add_shortcode( 'td', __NAMESPACE__ . '\\td' );
add_shortcode( 'TD', __NAMESPACE__ . '\\td' );
add_shortcode( 'strike', __NAMESPACE__ . '\\strike' );
add_shortcode( 'STRIKE', __NAMESPACE__ . '\\strike' );
add_shortcode( 's', __NAMESPACE__ . '\\strike' );
add_shortcode( 'S', __NAMESPACE__ . '\\strike' );
add_shortcode( 'url', __NAMESPACE__ . '\\url' );
add_shortcode( 'URL', __NAMESPACE__ . '\\url' );
add_shortcode( 'link', __NAMESPACE__ . '\\url' );
add_shortcode( 'LINK', __NAMESPACE__ . '\\url' );
add_shortcode( 'color', __NAMESPACE__ . '\\color' );
add_shortcode( 'COLOR', __NAMESPACE__ . '\\color' );
add_shortcode( 'colour', __NAMESPACE__ . '\\color' );
add_shortcode( 'COLOUR', __NAMESPACE__ . '\\color' );
add_shortcode( 'q', __NAMESPACE__ . '\\quote' );
add_shortcode( 'Q', __NAMESPACE__ . '\\quote' );
add_shortcode( 'quote', __NAMESPACE__ . '\\quote' );
add_shortcode( 'QUOTE', __NAMESPACE__ . '\\quote' );
add_shortcode( 'blockquote', __NAMESPACE__ . '\\quote' );
add_shortcode( 'BLOCKQUOTE', __NAMESPACE__ . '\\quote' );
add_shortcode( 'code', __NAMESPACE__ . '\\code' );
add_shortcode( 'CODE', __NAMESPACE__ . '\\code' );
add_shortcode( 'size', __NAMESPACE__ . '\\size' );
add_shortcode( 'SIZE', __NAMESPACE__ . '\\size' );
add_shortcode( 'img', __NAMESPACE__ . '\\img' );
add_shortcode( 'IMG', __NAMESPACE__ . '\\img' );
add_shortcode( 'center', __NAMESPACE__ . '\\centre' );
add_shortcode( 'CENTER', __NAMESPACE__ . '\\centre' );
add_shortcode( 'centre', __NAMESPACE__ . '\\centre' );
add_shortcode( 'CENTRE', __NAMESPACE__ . '\\centre' );
