<?php
/*
	other plugins tab on settings page
*/

/**
 * Declare the Namespace.
 */
namespace azurecurve\BBCode;

/**
 * Instructions tab.
 */
$tab_instructions_label = esc_html__( 'Instructions', 'azrcrv-bbc' );
$tab_instructions       = '
<table class="form-table azrcrv-settings">

	<tr>
	
		<td scope="row" colspan=2>
		
			<p>' .
				esc_html__( 'BBCode provides the following shortcodes for converting into BB Codes when used on posts and pages or other locations where shortcodes can be used.', 'azrcrv-bbc' ) . '
					
			</p>
		
		</td>
	
	</tr>

	<tr>
	
		<th scope="row" colspan=2 class="azrcrv-settings-section-heading">
			
				<h2 class="azrcrv-settings-section-heading">' . esc_html__( 'Available BB Codes', 'azrcrv-bbc' ) . '</h2>
			
		</th>

	</tr>

	<tr>
		
		<th class="azrcrv-bbcode-heading">
			
			' . esc_html__( 'BB Code', 'azrcrv-bbc' ) . '
			
		</th>
	
		<th scope="row">
		
			' . esc_html__( 'Example Usage.', 'azrcrv-bbc' ) . '
		
		</th>
	
	</tr>

	<tr>
		
		<th>
			
			' . esc_html__( 'Bold', 'azrcrv-bbc' ) . '
			
		</th>
	
		<td scope="row">
		
			' . sprintf( esc_html__( '%1$sBold text%2$s.', 'azrcrv-bbc' ), '<strong>[b]</strong>', '<strong>[/b]</strong>' ) . '
		
		</td>
	
	</tr>

	<tr>
		
		<th>
			
			' . esc_html__( 'Italic', 'azrcrv-bbc' ) . '
			
		</th>
	
		<td scope="row">
		
			' . sprintf( esc_html__( '%1$sItalic text%2$s.', 'azrcrv-bbc' ), '<strong>[i]</strong>', '<strong>[/i]</strong>' ) . '
		
		</td>
	
	</tr>

	<tr>
		
		<th>
			
			' . esc_html__( 'Underline', 'azrcrv-bbc' ) . '
			
		</th>
	
		<td scope="row">
		
			' . sprintf( esc_html__( '%1$sUnderlined text%2$s.', 'azrcrv-bbc' ), '<strong>[u]</strong>', '<strong>[/u]</strong>' ) . '
		
		</td>
	
	</tr>

	<tr>
		
		<th>
			
			' . esc_html__( 'Center Text', 'azrcrv-bbc' ) . '
			
		</th>
	
		<td scope="row">
		
			' . sprintf( esc_html__( '%1$sCenter justified text%2$s.', 'azrcrv-bbc' ), '<strong>[center]</strong>', '<strong>[/center]</strong>' ) . '
		
		</td>
	
	</tr>

	<tr>
		
		<th>
			
			' . esc_html__( 'Strikethrough', 'azrcrv-bbc' ) . '
			
		</th>
	
		<td scope="row">
		
			' . sprintf( esc_html__( '%1$sStrikethrough text%2$s.', 'azrcrv-bbc' ), '<strong>[strike]</strong>', '<strong>[/strike]</strong>' ) . '
		
		</td>
	
	</tr>

	<tr>
		
		<th>
			
			' . esc_html__( 'Color', 'azrcrv-bbc' ) . '
			
		</th>
	
		<td scope="row">
		
			' . sprintf( esc_html__( '%1$sText colour changed to red%2$s%3$s%4$stext color changed to blue%5$s.', 'azrcrv-bbc' ), '<strong>[color=#ff0000]</strong>', '<strong>[/color]</strong>', '<br />', '<strong>[color=blue]</strong>', '<strong>[/color]</strong>' ) . '
		
		</td>
	
	</tr>

	<tr>
		
		<th>
			
			' . esc_html__( 'Font Size', 'azrcrv-bbc' ) . '
			
		</th>
	
		<td scope="row">
		
			' . sprintf( esc_html__( '%1$s1.2em font sized%2$s%3$s%4$s12px font size%5$s.', 'azrcrv-bbc' ), '<strong>[size=1.2em]</strong>', '<strong>[/size]</strong>', '<br />', '<strong>[size=12px]</strong>', '<strong>[/size]</strong>' ) . '
		
		</td>
	
	</tr>

	<tr>
		
		<th>
			
			' . esc_html__( 'Image', 'azrcrv-bbc' ) . '
			
		</th>
	
		<td scope="row">
		
			<strong>[img]</strong>https://docs.classicpress.net/wp-content/classicpress/logos/icon-gradient-600.png<strong>[/img]</strong><br /><strong>[img=</strong>ClassicPress icon<strong>]</strong>https://docs.classicpress.net/wp-content/classicpress/logos/icon-gradient-600.png<strong>[/img]</strong>
		
		</td>
	
	</tr>

	<tr>
		
		<th>
			
			' . esc_html__( 'Url/Link', 'azrcrv-bbc' ) . '
			
		</th>
	
		<td scope="row">
		
			<strong>[url]</strong>www.classicpress.net/<strong>[/url]</strong><br /><strong>[url=</strong>www.classicpress.net<strong>]</strong>ClassicPress<strong>[/url]</strong><br /><strong>[link]</strong>www.classicpress.net/<strong>[/link]</strong><br /><strong>[link=</strong>www.classicpress.net<strong>]</strong>ClassicPress<strong>[/link]</strong>
		
		</td>
	
	</tr>

	<tr>
		
		<th>
			
			' . esc_html__( 'Quote', 'azrcrv-bbc' ) . '
			
		</th>
	
		<td scope="row">
		
			<strong>[quote]</strong>Time and money are largely interchangeable terms.<strong>[/quote]</strong><br /><strong>[quote=</strong>Winston Churchill<strong>]</strong>Time and money are largely interchangeable terms.<strong>[/quote]</strong>
		
		</td>
	
	</tr>

	<tr>
		
		<th>
			
			' . esc_html__( 'Code', 'azrcrv-bbc' ) . '
			
		</th>
	
		<td scope="row">
		
			' . '<strong>[code]</strong>function azrcrv_bbcode_bold($atts, $content = null){<br />
					&nbsp;&nbsp;&nbsp;return \'&lt;span class="azrcrv-bbc-bold"&gt;\' . do_shortcode($content) . \'&lt;/span&gt;\';<br />
				}<strong>[/code]</strong>' . '
		
		</td>
	
	</tr>

	<tr>
		
		<th>
			
			' . esc_html__( 'Ordered List', 'azrcrv-bbc' ) . '
			
		</th>
	
		<td scope="row">
		
			' . '<strong>[ol]</strong><br />
			&nbsp;&nbsp;&nbsp;<strong>[li]</strong>Lorem<strong>[/li]</strong><br />
			&nbsp;&nbsp;&nbsp;<strong>[li]</strong>Ispum<strong>[/li]</strong><br />
			&nbsp;&nbsp;&nbsp;<strong>[li]</strong>Dolor<strong>[/li]</strong><br />
			&nbsp;&nbsp;&nbsp;<strong>[li]</strong>Sit<strong>[/li]</strong><br />
			&nbsp;&nbsp;&nbsp;<strong>[li]</strong>Amet<strong>[/li]</strong><br />
			<strong>[/ol]</strong>' . '
		
		</td>
	
	</tr>

	<tr>
		
		<th>
			
			' . esc_html__( 'Unordered List', 'azrcrv-bbc' ) . '
			
		</th>
	
		<td scope="row">
		
			' . '<strong>[ul]</strong><br />
			&nbsp;&nbsp;&nbsp;<strong>[li]</strong>Lorem<strong>[/li]</strong><br />
			&nbsp;&nbsp;&nbsp;<strong>[li]</strong>Ispum<strong>[/li]</strong><br />
			&nbsp;&nbsp;&nbsp;<strong>[li]</strong>Dolor<strong>[/li]</strong><br />
			&nbsp;&nbsp;&nbsp;<strong>[li]</strong>Sit<strong>[/li]</strong><br />
			&nbsp;&nbsp;&nbsp;<strong>[li]</strong>Amet<strong>[/li]</strong><br />
			<strong>[/ul]</strong>' . '
		
		</td>
	
	</tr>

	<tr>
		
		<th>
			
			' . esc_html__( 'Table', 'azrcrv-bbc' ) . '
			
		</th>
	
		<td scope="row">
		
			' . '<strong>[table]</strong><br />
			&nbsp;&nbsp;&nbsp;<strong>[tr]</strong><br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>[th]</strong>Lorem<strong>[/th]</strong><strong>[th]</strong>Ipsum<strong>[/th]</strong><br />
			&nbsp;&nbsp;&nbsp;<strong>[/tr]</strong><br />
			&nbsp;&nbsp;&nbsp;<strong>[tr]</strong><br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>[td]</strong>Dolor<strong>[/td]</strong><strong>[td]</strong>Sit<strong>[/td]</strong><br />
			&nbsp;&nbsp;&nbsp;<strong>[/tr]</strong><br />
			&nbsp;&nbsp;&nbsp;<strong>[tr]</strong><br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>[td]</strong>Amet<strong>[/td]</strong><strong>[td]</strong>consectetur<strong>[/td]</strong><br />
			&nbsp;&nbsp;&nbsp;<strong>[/tr]</strong><br />
			<strong>[/table]</strong>' . '
		
		</td>
	
	</tr>

	<tr>
	
		<th scope="row" colspan=2 class="azrcrv-settings-section-heading">
			
				<h2 class="azrcrv-settings-section-heading">' . esc_html__( 'Complimentary Plugins', 'azrcrv-bbc' ) . '</h2>
			
		</th>

	</tr>

	<tr>
	
		<td scope="row" colspan=2>
		
			<p>
			
				azurecurve | Development ' . esc_html__( 'has the following plugins which allow shortcodes to be used in comments and widgets:', 'azrcrv-bbc' ) . '
				
			</p>
		
		</td>
	
	</tr>

	<tr>
	
		<td scope="row" colspan=2>
		
			<ul class="azrcrv-plugin-index">
				<li>';

if ( is_plugin_active( 'azrcrv-shortcodes-in-comments/azrcrv-shortcodes-in-comments.php' ) ) {
	$tab_instructions .= '<a href="admin.php?page=azrcrv-sic" class="azrcrv-plugin-index">Shortcodes in Comments</a>';
} else {
	$tab_instructions .= '<a href="https://development.azurecurve.co.uk/classicpress-plugins/shortcodes-in-comments" class="azrcrv-plugin-index">Shortcodes in Comments</a>';
}

				$tab_instructions .=
				'</li>
				<li>';

if ( is_plugin_active( 'azrcrv-shortcodes-in-widgets/azrcrv-shortcodes-in-widgets.php' ) ) {
	$tab_instructions .= '<a href="admin.php?page=azrcrv-siw" class="azrcrv-plugin-index">Shortcodes in Widgets</a>';
} else {
	$tab_instructions .= '<a href="https://development.azurecurve.co.uk/classicpress-plugins/shortcodes-in-widgets/" class="azrcrv-plugin-index">Shortcodes in Widgets</a>';
}

				$tab_instructions .=
				'</li>
			</ul>
		
		</td>
	
	</tr>
	
</table>';
