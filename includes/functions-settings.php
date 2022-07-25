<?php
/*
	tab output on settings page
*/

/**
 * Declare the Namespace.
 */
namespace azurecurve\BBCode;

/**
 * Display Settings page.
 *
 * @since 1.0.0
 */
function display_options() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( esc_html__( 'You do not have sufficient permissions to access this page.', 'azrcrv-bbc' ) );
	}

	echo '<div id="' . esc_attr( PLUGIN_HYPHEN ) . '-general" class="wrap">';

		echo '<h1>';
			echo '<a href="https://development.azurecurve.co.uk/classicpress-plugins/"><img src="' . esc_url_raw( plugins_url( '../assets/images/logo.svg', __FILE__ ) ) . '" style="padding-right: 6px; height: 20px; width: 20px;" alt="azurecurve" /></a>';
			echo esc_html( get_admin_page_title() );
		echo '</h1>';

		require_once 'tab-instructions.php';
		require_once 'tab-other-plugins.php';
		require_once 'tabs-output.php';
	?>
		
	</div>
	<?php
}
