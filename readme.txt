=== BBCode ===
Contributors: azurecurve
Tags: bbcode,posts,pages
Donate link: https://development.azurecurve.co.uk/support-development/
Requires at least: 1.0.0
Tested up to: 1.0.0
Requires PHP: 5.6
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allows users to use standard bbcodes in posts and pages in place of HTML tags.

== Description ==
Allows users to use standard bbcodes in posts and pages in place of HTML tags.

The following bbcodes can be used:
	Bold:
		[b]bold[/b]
	Italic:
		[i]italics[/i]
	Underline:
		[u]underline[/u]
	Center Text:
		[center]centered text[/center]
	Strike:
		[strike]strike[/strike]
	Quote:
		[quote]quote[/quote]
	Color:
		[color=blue]color[/color]
	Font size:
		[size=12pt]12pt font size[/size]
		[size=1.2em]1.2em font size[/size]
		[size=12px]12px font size[/size]
	Image:
		[img]http://s.wordpress.org/style/images/codeispoetry.png[/img]
		[img=Code is Poetry]http://s.wordpress.org/style/images/codeispoetry.png[/img]
	URL:
		[url]https://development.org/[/url]
		[url=https://development.org/]WordPress[/url]
		[link]https://development.org/[/link]
		[link=https://development.org/]WordPress[/link]
	Ordered lists:
		[ol]ordered list[/ol]
	Unordered lists:
		[ul]unordered list[/ul]
	List items:
		[li]list item[/li]
	Table:
		[table][/table]
	Table Row:
		[tr][/tr]
	Table Header:
		[th][/th]
	Table data (cell):
		[td][/td]
	Code:
		[code]function azc_bbcode_bold($atts, $content = null){ return "<span class='azc_bbc_bold'>".do_shortcode($content)."</span>"; }[/code]

Allows users to use standard bbcodes in posts and pages; <a href='https://development.azurecurve.co.uk/classicpress-plugins/shortcode-in-comments/'>Shortcodes In Comments</a> can be used to allow bbcodes in comments and <a href='https://development.azurecurve.co.uk/classicpress-plugins/shortcode-in-widgets/'>Shortcodes In Widgets</a> can allow them in widgets.

== Installation ==
To install the BBCode plugin:
* Download the plugin from <a href='https://github.com/azurecurve/azrcrv-bbcode/'>GitHub</a>.
* Upload the entire zip file using the Plugins upload function in your ClassicPress admin panel.
* Activate the plugin.

== Changelog ==
Changes and feature additions for the BBCode plugin:
= 1.0.0 =
* First version for ClassicPress forked from azurecurve BBCode WordPress Plugin.

== Frequently Asked Questions ==
= Can I translate this plugin? =
* Yes, the .pot fie is in the plugin's languages folder and can also be downloaded from the plugin page on https://development.azurecurve.co.uk; if you do translate this plugin please sent the .po and .mo files to translations@azurecurve.co.uk for inclusion in the next version (full credit will be given).
= Is this plugin compatible with both WordPress and ClassicPress? =
* This plugin is developed for ClassicPress, but will likely work on WordPress.