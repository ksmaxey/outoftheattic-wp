<?php
// Shortcodes
add_shortcode('heading', 'heading_shortcode'); // You can place [heading] in Pages, Posts now.
//add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability

/* function heading_shortcode($atts, $content = null)
{
    return '<h2 style="color: '. $atts['color'] .';">' . do_shortcode($content) . '</h2>'; // do_shortcode allows for nested Shortcodes
}
*/

// Shortcode Demo with simple <h2> tag
//function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
//{
//    return '<h2>' . $content . '</h2>';
//}
