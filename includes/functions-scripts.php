<?php
/*
	tab output on settings page
*/

/**
 * Declare the Namespace.
 *
 * @since 1.0.0
 */
namespace azurecurve\BBCode;

/**
 * Prevent direct access.
 */
if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/**
 * Register admin scripts.
 *
 * @since 2.0.0
 */
function register_admin_scripts() {
	wp_register_script( 'azrcrv-admin-standard-js', esc_url_raw( plugins_url( '../assets/js/admin-standard.js', __FILE__ ) ), array(), '26.6.8', true );
}

/**
 * Enqueue admin styles.
 *
 * @since 2.0.0
 */
function enqueue_admin_scripts() {

	// phpcs:ignore WordPress.Security.NonceVerification.Recommended
	if ( isset( $_GET['page'] ) && ( $_GET['page'] == PLUGIN_HYPHEN || $_GET['page'] == 'azrcrv-plugin-menu' ) ) {
		wp_enqueue_script( 'azrcrv-admin-standard-js' );
	}
}
