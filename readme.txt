=== BBCode ===

Description:	Allows users to use standard bbcodes in posts and pages in place of HTML tags.
Version:		1.1.3
Tags:			bbcode,posts,pages
Author:			azurecurve
Author URI:		https://development.azurecurve.co.uk/
Plugin URI:		https://development.azurecurve.co.uk/classicpress-plugins/bbcode/
Download link:	https://github.com/azurecurve/azrcrv-bbcode/releases/download/v1.1.3/azrcrv-bbcode.zip
Donate link:	https://development.azurecurve.co.uk/support-development/
Requires PHP:	5.6
Requires:		1.0.0
Tested:			4.9.99
Text Domain:	bbcode
Domain Path:	/languages
License: 		GPLv2 or later
License URI: 	http://www.gnu.org/licenses/gpl-2.0.html

Allows users to use standard bbcodes in posts and pages in place of HTML tags.

== Description ==

# Description

Allows users to use standard bbcodes in posts and pages in place of HTML tags.

The following bbcodes can be used:
```	Bold:
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
		[img]https://docs.classicpress.net/wp-content/classicpress/logos/icon-gradient-600.png[/img]
		[img=ClassicPress logo]https://docs.classicpress.net/wp-content/classicpress/logos/icon-gradient-600.png[/img]
	URL:
		[url]https://www.classicpress.net/[/url]
		[url=https://www.classicpress.net/]ClassicPress[/url]
		[link]https://www.classicpress.net/[/link]
		[link=https://www.classicpress.net/]ClassicPress[/link]
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
		[code]function azc_bbcode_bold($atts, $content = null){ return "".do_shortcode($content).""; }[/code]```

Allows users to use standard bbcodes in posts and pages; [Shortcodes in Comments](https://development.azurecurve.co.uk/classicpress-plugins/shortcode-in-comments/'>Shortcodes In Comments) can be used to allow bbcodes in comments and [Shortcodes in Widgets]https://development.azurecurve.co.uk/classicpress-plugins/shortcode-in-widgets/) can allow them in widgets.

This plugin is multisite compatible.

== Installation ==

# Installation Instructions

 * Download the plugin from [GitHub](https://github.com/azurecurve/azrcrv-bbcode/releases/latest/).
 * Upload the entire zip file using the Plugins upload function in your ClassicPress admin panel.
 * Activate the plugin.

== Frequently Asked Questions ==

# Frequently Asked Questions

### Can I translate this plugin?
Yes, the .pot fie is in the plugins languages folder and can also be downloaded from the plugin page on https://development.azurecurve.co.uk; if you do translate this plugin, please sent the .po and .mo files to translations@azurecurve.co.uk for inclusion in the next version (full credit will be given).

### Is this plugin compatible with both WordPress and ClassicPress?
This plugin is developed for ClassicPress, but will likely work on WordPress.

== Changelog ==

# Changelog
### [Version 1.1.3](https://github.com/azurecurve/azrcrv-bbcode/releases/tag/v1.1.3)
 * Upgrade azurecurve plugin to store available plugins in options.
 
### [Version 1.1.2](https://github.com/azurecurve/azrcrv-bbcode/releases/tag/v1.1.2)
 * Update Update Manager class to v2.0.0.
 * Update action link.
 * Update azurecurve menu icon with compressed image.

### [Version 1.1.1](https://github.com/azurecurve/azrcrv-bbcode/releases/tag/v1.1.1)
 * Fix bug with incorrect language load text domain.

### [Version 1.1.0](https://github.com/azurecurve/azrcrv-bbcode/releases/tag/v1.1.0)
 * Add integration with Update Manager for automatic updates.
 * Fix issue with display of azurecurve menu.
 * Change settings page heading.
 * Add load_plugin_textdomain to handle translations.

### [Version 1.0.1](https://github.com/azurecurve/azrcrv-bbcode/releases/tag/v1.0.1)
 * Update azurecurve menu for easier maintenance.
 * Move require of azurecurve menu below security check.
 * Localization fixes.

### [Version 1.0.0](https://github.com/azurecurve/azrcrv-bbcode/releases/tag/v1.0.0)
 * Initial release for ClassicPress forked from azurecurve BBCode WordPress Plugin.

== Other Notes ==

# About azurecurve

**azurecurve** was one of the first plugin developers to start developing for Classicpress; all plugins are available from [azurecurve Development](https://development.azurecurve.co.uk/) and are integrated with the [Update Manager plugin](https://codepotent.com/classicpress/plugins/update-manager/) by [CodePotent](https://codepotent.com/) for fully integrated, no hassle, updates.

Some of the top plugins available from **azurecurve** are:
* [Add Twitter Cards](https://development.azurecurve.co.uk/classicpress-plugins/add-twitter-cards/)
* [Breadcrumbs](https://development.azurecurve.co.uk/classicpress-plugins/breadcrumbs/)
* [Series Index](https://development.azurecurve.co.uk/classicpress-plugins/series-index/)
* [To Twitter](https://development.azurecurve.co.uk/classicpress-plugins/to-twitter/)
* [Theme Switches](https://development.azurecurve.co.uk/classicpress-plugins/theme-switcher/)
* [Toggle Show/Hide](https://development.azurecurve.co.uk/classicpress-plugins/toggle-showhide/)