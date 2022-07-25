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
 * Bold BB Code shortcode.
 *
 * @since 1.0.0
 */
function bold( $atts, $content = null ) {
	return "<span class='azrcrv-bbc-bold'>" . do_shortcode( $content ) . '</span>';
}

/**
 * Italic BB Code shortcode.
 *
 * @since 1.0.0
 */
function italic( $atts, $content = null ) {
	return "<span class='azrcrv-bbc-italic'>" . do_shortcode( $content ) . '</span>';
}

/**
 * Underline BB Code shortcode.
 *
 * @since 1.0.0
 */
function underline( $atts, $content = null ) {
	return "<span class='azrcrv-bbc-underline'>" . do_shortcode( $content ) . '</span>';
}

/**
 * Ordered list BB Code shortcode.
 *
 * @since 1.0.0
 */
function ol( $atts, $content = null ) {
	return "<ol class='azrcrv-bbc-ol'>" . do_shortcode( $content ) . '</ol>';
}

/**
 * Unordered list BB Code shortcode.
 *
 * @since 1.0.0
 */
function ul( $atts, $content = null ) {
	return "<ul class='azrcrv-bbc-ul'>" . do_shortcode( $content ) . '</ul>';
}

/**
 * List item BB Code shortcode.
 *
 * @since 1.0.0
 */
function li( $atts, $content = null ) {
	return "<li class='azrcrv-bbc-li'>" . do_shortcode( $content ) . '</li>';
}

/**
 * Table BB Code shortcode.
 *
 * @since 1.0.0
 */
function table( $atts, $content = null ) {
	return "<table class='azrcrv-bbc-table'>" . do_shortcode( $content ) . '</table>';
}

/**
 * Table Row BB Code shortcode.
 *
 * @since 1.0.0
 */
function tr( $atts, $content = null ) {
	return "<tr class='azrcrv-bbc-tr'>" . do_shortcode( $content ) . '</tr>';
}

/**
 * Table header BB Code shortcode.
 *
 * @since 1.0.0
 */
function th( $atts, $content = null ) {
	return "<th class='azrcrv-bbc-th'>" . do_shortcode( $content ) . '</th>';
}

/**
 * Table cell BB Code shortcode.
 *
 * @since 1.0.0
 */
function td( $atts, $content = null ) {
	return "<td class='azrcrv-bbc-td'>" . do_shortcode( $content ) . '</td>';
}

/**
 * Strikethrough BB Code shortcode.
 *
 * @since 1.0.0
 */
function strike( $atts, $content = null ) {
	return "<span class='azrcrv-bbc-strike'>" . do_shortcode( $content ) . '</span>';
}

/**
 * Url/Link BB Code shortcode.
 *
 * @since 1.0.0
 */
function url( $atts, $content = null ) {
	if ( empty( $atts ) ) {
		$return = "<a href='" . esc_url( $content ) . "' class='azrcrv-bbc-url'>" . $content . '</a>';
	} else {
		$attribs = implode( '', $atts );
		$url     = substr( $attribs, 1 );
		$url     = str_replace( "'", '', str_replace( '"', '', $url ) );

		$return = "<a href='" . esc_url( $url ) . "' class='azrcrv-bbc-url'>" . $content . '</a>';
	}
	return $return;
}

/**
 * Color BB Code shortcode.
 *
 * @since 1.0.0
 */
function color( $atts, $content = null ) {
	if ( empty( $atts ) ) {
		$color = 'black';
	} else {
		$attribs = implode( '', $atts );
		$color   = str_replace( "'", '', str_replace( '"', '', substr( $attribs, 1 ) ) );
		if ( ctype_xdigit( $color ) ) {
			$color = '#' . $color;
		}
	}
	return "<span style='color: " . esc_html( $color ) . "; '>" . do_shortcode( $content ) . '</span>';
}

/**
 * Blockquote BB Code shortcode.
 *
 * @since 1.0.0
 */
function quote( $atts, $content = null ) {
	if ( empty( $atts ) ) {
		$return_quote = "<blockquote class='azrcrv-bbc-quote'>" . do_shortcode( $content ) . '</blockquote>';
	} else {
		$attribs      = implode( '', $atts );
		$cite         = str_replace( "'", '', str_replace( '"', '', substr( $attribs, 1 ) ) );
		$return_quote = "<div class='azrcrv-bbc-quote'>" . esc_html( $cite ) . " wrote:<blockquote class='azrcrv-bbc-quote'>" . do_shortcode( $content ) . '</blockquote></div>';
	}
	return $return_quote;
}

/**
 * Code BB Code shortcode.
 *
 * @since 1.0.0
 */
function code( $atts, $content = null ) {
	return "<pre class='azrcrv-bbc-code'><span class='azrcrv-bbc-code'>" . do_shortcode( $content ) . '</span></pre>';
}

/**
 * Font Size BB Code shortcode.
 *
 * @since 1.0.0
 */
function size( $atts, $content = null ) {
	if ( empty( $atts ) ) {
		$size = '1em';
	} else {
		$attribs = implode( '', $atts );
		$size    = str_replace( "'", '', str_replace( '"', '', substr( $attribs, 1 ) ) );
	}
	return "<span style='font-size: " . esc_html( $size ) . ";'>" . $content . '</span>';
}

/**
 * Bold BB Code shortcode.
 *
 * @since 1.0.0
 */
function img( $atts, $content = null ) {
	if ( empty( $atts ) ) {
		$alt = '';
	} else {
		$attribs = implode( '', $atts );
		$alt     = str_replace( "'", '', str_replace( '"', '', substr( $attribs, 1 ) ) );
	}
	if ( strlen( $alt ) > 0 ) {
		$alt = "alt='$alt'"; }
	return "<img class='azrcrv-bbc-image' src='" . esc_url( $content ) . "' " . esc_html( $alt ) . ' />';
}

/**
 * Centre BB Code shortcode.
 *
 * @since 1.0.0
 */
function centre( $atts, $content = null ) {
	return "<center class='azrcrv-bbc-center'>" . do_shortcode( $content ) . '</center>';
}
