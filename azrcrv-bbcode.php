<?php
/**
 * ------------------------------------------------------------------------------
 * Plugin Name: BBCode
 * Description: Allows bb code to be used to format posts and pages.
 * Version: 1.2.0
 * Author: azurecurve
 * Author URI: https://development.azurecurve.co.uk/classicpress-plugins/
 * Plugin URI: https://development.azurecurve.co.uk/classicpress-plugins/bbcode/
 * Text Domain: bbcode
 * Domain Path: /languages
 * ------------------------------------------------------------------------------
 * This is free software released under the terms of the General Public License,
 * version 2, or later. It is distributed WITHOUT ANY WARRANTY; without even the
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. Full
 * text of the license is available at https://www.gnu.org/licenses/gpl-2.0.html.
 * ------------------------------------------------------------------------------
 */

// Prevent direct access.
if (!defined('ABSPATH')){
	die();
}

// include plugin menu
require_once(dirname( __FILE__).'/pluginmenu/menu.php');
add_action('admin_init', 'azrcrv_create_plugin_menu_bbc');

// include update client
require_once(dirname(__FILE__).'/libraries/updateclient/UpdateClient.class.php');

/**
 * Setup actions, filters and shortcodes.
 *
 * @since 1.0.0
 *
 */
// add actions
add_action('admin_menu', 'azrcrv_bbc_create_admin_menu');
add_action('admin_enqueue_scripts', 'azrcrv_bbc_load_css');
add_action('wp_enqueue_scripts', 'azrcrv_bbc_load_css');
//add_action('the_posts', 'azrcrv_bbc_check_for_shortcode');
add_action('plugins_loaded', 'azrcrv_bbc_load_languages');

// add filters
add_filter('plugin_action_links', 'azrcrv_bbc_add_plugin_action_link', 10, 2);

// add shortcodes
add_shortcode('b', 'azrcrv_bbc_bold');
add_shortcode('B', 'azrcrv_bbc_bold');
add_shortcode('i', 'azrcrv_bbc_italic');
add_shortcode('I', 'azrcrv_bbc_italic');
add_shortcode('u', 'azrcrv_bbc_underline');
add_shortcode('U', 'azrcrv_bbc_underline');
add_shortcode('ol', 'azrcrv_bbc_ol');
add_shortcode('OL', 'azrcrv_bbc_ol');
add_shortcode('ul', 'azrcrv_bbc_ul');
add_shortcode('UL', 'azrcrv_bbc_ul');
add_shortcode('li', 'azrcrv_bbc_li');
add_shortcode('LI', 'azrcrv_bbc_li');
add_shortcode('table', 'azrcrv_bbc_table');
add_shortcode('TABLE', 'azrcrv_bbc_table');
add_shortcode('tr', 'azrcrv_bbc_tr');
add_shortcode('TR', 'azrcrv_bbc_tr');
add_shortcode('th', 'azrcrv_bbc_th');
add_shortcode('TH', 'azrcrv_bbc_th');
add_shortcode('td', 'azrcrv_bbc_td');
add_shortcode('TD', 'azrcrv_bbc_td');
add_shortcode('strike', 'azrcrv_bbc_strike');
add_shortcode('STRIKE', 'azrcrv_bbc_strike');
add_shortcode('s', 'azrcrv_bbc_strike');
add_shortcode('S', 'azrcrv_bbc_strike');
add_shortcode('url', 'azrcrv_bbc_url');
add_shortcode('URL', 'azrcrv_bbc_url');
add_shortcode('link', 'azrcrv_bbc_url');
add_shortcode('LINK', 'azrcrv_bbc_url');
add_shortcode('color', 'azrcrv_bbc_color');
add_shortcode('COLOR', 'azrcrv_bbc_color');
add_shortcode('colour', 'azrcrv_bbc_color');
add_shortcode('COLOUR', 'azrcrv_bbc_color');
add_shortcode('q', 'azrcrv_bbc_quote');
add_shortcode('Q', 'azrcrv_bbc_quote');
add_shortcode('quote', 'azrcrv_bbc_quote');
add_shortcode('QUOTE', 'azrcrv_bbc_quote');
add_shortcode('blockquote', 'azrcrv_bbc_quote');
add_shortcode('BLOCKQUOTE', 'azrcrv_bbc_quote');
add_shortcode('code', 'azrcrv_bbc_code');
add_shortcode('CODE', 'azrcrv_bbc_code');
add_shortcode('size', 'azrcrv_bbc_size');
add_shortcode('SIZE', 'azrcrv_bbc_size');
add_shortcode('img', 'azrcrv_bbc_img');
add_shortcode('IMG', 'azrcrv_bbc_img');
add_shortcode('center', 'azrcrv_bbc_centre');
add_shortcode('CENTER', 'azrcrv_bbc_centre');
add_shortcode('centre', 'azrcrv_bbc_centre');
add_shortcode('CENTRE', 'azrcrv_bbc_centre');

/**
 * Load language files.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_load_languages() {
    $plugin_rel_path = basename(dirname(__FILE__)).'/languages';
    load_plugin_textdomain('bbcode', false, $plugin_rel_path);
}

/**
 * Check if shortcode on current page and then load css and jqeury.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_check_for_shortcode($posts){
    if (empty($posts)){
        return $posts;
	}
	
	
	// array of shortcodes to search for
	$shortcodes = array(
						'b','B','i','I','u','U','ol','OL','ul','UL','li','LI','table','TABLE','tr','TR','th','TH','td','TD','strike','STRIKE','s','S','url','URL','link','LINK','color','COLOR','colour','COLOUR','q','Q','quote','QUOTE','blockquote','BLOCKQUOTE','code','CODE','img','IMG','centre','CENTRE','center','CENTER'
						);
	
    // loop through posts
    $found = false;
    foreach ($posts as $post){
		// loop through shortcodes
		foreach ($shortcodes as $shortcode){
			// check the post content for the shortcode
			if (has_shortcode($post->post_content, $shortcode)){
				$found = true;
				// break loop as shortcode found in page content
				break 2;
			}
		}
	}
 
    if ($found){
		// as shortcode found call functions to load css and jquery
        azrcrv_bbc_load_css();
    }
    return $posts;
}
	
/**
 * Load plugin css.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_load_css(){
	wp_enqueue_style('azrcrv-bbc', plugins_url('assets/css/style.css', __FILE__));
}

/**
 * Add BB Code action link on plugins page.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_add_plugin_action_link($links, $file){
	static $this_plugin;

	if (!$this_plugin){
		$this_plugin = plugin_basename(__FILE__);
	}

	if ($file == $this_plugin){
		$settings_link = '<a href="'.admin_url('admin.php?page=azrcrv-bbc').'"><img src="'.plugins_url('/pluginmenu/images/Favicon-16x16.png', __FILE__).'" style="padding-top: 2px; margin-right: -5px; height: 16px; width: 16px;" alt="azurecurve" />'.esc_html__('Settings' ,'bbcode').'</a>';
		array_unshift($links, $settings_link);
	}

	return $links;
}

/**
 * Add BBCode menu to plugin menu.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_create_admin_menu(){
	//global $admin_page_hooks;
	
	add_submenu_page("azrcrv-plugin-menu"
						,esc_html__("BBCode Settings", "bbcode")
						,esc_html__("BBCode", "bbcode")
						,'manage_options'
						,'azrcrv-bbc'
						,'azrcrv_bbc_settings');
}

/**
 * Display Settings page.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_settings(){
	if (!current_user_can('manage_options')){
		$error = new WP_Error('not_found', esc_html__('You do not have sufficient permissions to access this page.' , 'bbcode'), array('response' => '200'));
		if(is_wp_error($error)){
			wp_die($error, '', $error->get_error_data());
		}
	}
	?>
	<div id="azrcrv-bbc-general" class="wrap">
			<h1><?php echo esc_html(get_admin_page_title()); ?></h1>

				<table class="form-table">
				
					<tr>
						<th scope="row" colspan="2">
							<label for="explanation">
								<?php esc_html_e('BBCode provides the following shortcodes for converting into BB Codes when used on posts and pages:', 'bbcode'); ?>
							</label>
						</th>
					</tr>
					
					<tr><th scope="row"><?php esc_html_e("Bold", "bbcode"); ?></th><td>[b][/b]</td></tr>
					
					<tr><th scope="row"><?php esc_html_e("Italic", "bbcode"); ?></th><td>[i][/i]</td></tr>
					
					<tr><th scope="row"><?php esc_html_e("Underline", "bbcode"); ?></th><td>[u][/u]</td></tr>
					
					<tr><th scope="row"><?php esc_html_e("Center Text", "bbcode"); ?></th><td>[center]centered text[/center]</td></tr>
					
					<tr><th scope="row"><?php esc_html_e("Strike", "bbcode"); ?></th><td>[s]strike this out[/s] [strike]strike this out[/strike]</td></tr>
					
					<tr><th scope="row"><?php esc_html_e("Quote", "bbcode"); ?></th><td>[quote]Lorem ipsum dolor sit amet, consectetuer adipiscing elit,[/quote] [quote=NAME]Lorem ipsum dolor sit amet[/quote]</td></tr>
					
					<tr><th scope="row"><?php esc_html_e("Color", "bbcode"); ?></th><td>[color="red"]red[/color] [color="ff0000"]hex red[/color] [color=#ff0000]hex red[/color]</td></tr>
					
					<tr><th scope="row"><?php esc_html_e("Font Size", "bbcode"); ?></th><td>[size=12pt]12pt font size[/size] [size=1.2em]1.2em font size[/size] [size=12px]12px font size[/size]</td></tr>
					
					<tr><th scope="row"><?php esc_html_e("Image", "bbcode"); ?></th><td>[img]https://docs.classicpress.net/wp-content/classicpress/logos/icon-gradient-600.png[/img] [img=ClassicPress icon]https://docs.classicpress.net/wp-content/classicpress/logos/icon-gradient-600.png[/img]</td></tr>
					
					<tr><th scope="row"><?php esc_html_e("URL", "bbcode"); ?></th><td>[url]www.classicpress.net/[/url] [url=www.classicpress.net]ClassicPress[/url] [link]www.classicpress.net/[/link] [link=https://www.classicpress.net/]ClassicPress[/link]</td></tr>
					
					<tr><th scope="row"><?php esc_html_e("Ordered List", "bbcode"); ?></th><td>[ol][li][/li][li][/li][/ol]</td></tr>
					
					<tr><th scope="row"><?php esc_html_e("Unordered List", "bbcode"); ?></th><td>[ul][li][/li][li][/li][/ul]</td></tr>
					
					<tr><th scope="row"><?php esc_html_e("Table", "bbcode"); ?></th><td>
					[table][tr][th][/th][th][/th][/tr][tr][td][/td][td][/td][/tr][tr][td][/td][td][/td][/tr][/table]</td></tr>
					
					<tr><th scope="row"><?php esc_html_e("Code", "bbcode"); ?></th><td>[code]function azrcrv_bbcode_bold($atts, $content = null){ return "<span class='azrcrv_bbc_bold'>".do_shortcode($content)."</span>"; }[/code]</td></tr>
					
					<tr>
						<th scope="row" colspan="2">
							<label for="additional-plugins">
								azurecurve <?php esc_html_e('has the following plugins which allow shortcodes to be used in comments and widgets:', 'bbcode'); ?>
							</label>
							<ul class='azrcrv-plugin-index'>
								<li>
									<?php
									if (azrcrv_bbc_is_plugin_active('azrcrv-shortcodes-in-comments/azrcrv-shortcodes-in-comments.php')){
										echo "<a href='admin.php?page=azrcrv-sic' class='azrcrv-plugin-index'>Shortcodes in Comments</a>";
									}else{
										echo "<a href='https://plugins.classicpress.net/shortcodes-in-comments/' class='azrcrv-plugin-index'>Shortcodes in Comments</a>";
									}
									?>
								</li>
								<li>
									<?php
									if (azrcrv_bbc_is_plugin_active('azrcrv-shortcodes-in-widgets/azrcrv-shortcodes-in-widgets.php')){
										echo "<a href='admin.php?page=azrcrv-siw' class='azrcrv-plugin-index'>Shortcodes in Widgets</a>";
									}else{
										echo "<a href='https://plugins.classicpress.net/shortcodes-in-widgets/' class='azrcrv-plugin-index'>Shortcodes in Widgets</a>";
									}
									?>
								</li>
							</ul>
						</th>
					</tr>
				</table>
	</div><?php
}

/**
 * Check if function active (included due to standard function failing due to order of load).
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_is_plugin_active($plugin){
    return in_array($plugin, (array) get_option('active_plugins', array()));
}

/**
 * Bold BB Code shortcode.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_bold($atts, $content = null)
{
	return "<span class='azrcrv-bbc-bold'>".do_shortcode($content)."</span>";
}

/**
 * Italic BB Code shortcode.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_italic($atts, $content = null){
	return "<span class='azrcrv-bbc-italic'>".do_shortcode($content)."</span>";
}

/**
 * Underline BB Code shortcode.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_underline($atts, $content = null){
	return "<span class='azrcrv-bbc-underline'>".do_shortcode($content)."</span>";
}

/**
 * Ordered list BB Code shortcode.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_ol($atts, $content = null){
	return "<ol class='azrcrv-bbc-ol'>".do_shortcode($content)."</ol>";
}

/**
 * Unordered list BB Code shortcode.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_ul($atts, $content = null){
	return "<ul class='azrcrv-bbc-ul'>".do_shortcode($content)."</ul>";
}

/**
 * List item BB Code shortcode.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_li($atts, $content = null){
	return "<li class='azrcrv-bbc-li'>".do_shortcode($content)."</li>";
}

/**
 * Table BB Code shortcode.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_table($atts, $content = null){
	return "<table class='azrcrv-bbc-table'>".do_shortcode($content)."</table>";
}

/**
 * Table Row BB Code shortcode.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_tr($atts, $content = null){
	return "<tr class='azrcrv-bbc-tr'>".do_shortcode($content)."</tr>";
}

/**
 * Table header BB Code shortcode.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_th($atts, $content = null){
	return "<th class='azrcrv-bbc-th'>".do_shortcode($content)."</th>";
}

/**
 * Table cell BB Code shortcode.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_td($atts, $content = null){
	return "<td class='azrcrv-bbc-td'>".do_shortcode($content)."</td>";
}

/**
 * Strikethrough BB Code shortcode.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_strike($atts, $content = null){
	return "<span class='azrcrv-bbc-strike'>".do_shortcode($content)."</span>";
}

/**
 * Url/Link BB Code shortcode.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_url($atts, $content = null){
	if (empty($atts)){
		$return = "<a href='".esc_url($content)."' class='azrcrv-bbc-url'>".$content."</a>";
	}else{
		$attribs = implode('',$atts);
		$url = substr ($attribs, 1);
		$url = str_replace("'", '', str_replace('"', '', $url));
		
		$return = "<a href='".esc_url($url)."' class='azrcrv-bbc-url'>".$content."</a>";
	}
	return $return;
}

/**
 * Color BB Code shortcode.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_color($atts, $content = null){
	if (empty($atts)){
		$color = 'black';
	}else{
		$attribs = implode('',$atts);
		$color = str_replace("'", '', str_replace('"', '', substr ($attribs, 1)));
		if(ctype_xdigit($color)){
			$color = '#'.$color;
		}
	}
	return "<span style='color: ".esc_html($color)."; '>".do_shortcode($content)."</span>";
}

/**
 * Blockquote BB Code shortcode.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_quote($atts, $content = null){
	if (empty($atts)){
		$return_quote = "<blockquote class='azrcrv-bbc-quote'>".do_shortcode($content)."</blockquote>";
	}else{
		$attribs = implode('',$atts);
		$cite = str_replace("'", '', str_replace('"', '', substr ($attribs, 1)));
		$return_quote = "<div class='azrcrv-bbc-quote'>".esc_html($cite)." wrote:<blockquote class='azrcrv-bbc-quote'>".do_shortcode($content)."</blockquote></div>";
	}
	return $return_quote;
}

/**
 * Code BB Code shortcode.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_code($atts, $content = null){
	return "<pre class='azrcrv-bbc-code'><span class='azrcrv-bbc-code'>".do_shortcode($content)."</span></pre>";
}

/**
 * Font Size BB Code shortcode.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_size($atts, $content = null){
	if (empty($atts)){
		$size = '1em';
	}else{
		$attribs = implode('',$atts);
		$size = str_replace("'", '', str_replace('"', '', substr ($attribs, 1)));
	}
	return "<span style='font-size: ".esc_html($size).";'>".$content."</span>";
}

/**
 * Bold BB Code shortcode.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_img($atts, $content = null){
	if (empty($atts)){
		$alt = '';
	}else{
		$attribs = implode('',$atts);
		$alt = str_replace("'", '', str_replace('"', '', substr ($attribs, 1)));
	}
	if (strlen($alt) > 0){ $alt = "alt='$alt'"; }
	return "<img class='azrcrv-bbc-image' src='".esc_url($content)."' ".esc_html($alt)." />";
}

/**
 * Centre BB Code shortcode.
 *
 * @since 1.0.0
 *
 */
function azrcrv_bbc_centre($atts, $content = null){
	return "<center class='azrcrv-bbc-center'>".do_shortcode($content)."</center>";
}

?>