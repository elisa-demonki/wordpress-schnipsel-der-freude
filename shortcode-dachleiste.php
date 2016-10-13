<?php
Plugin Name: Shortcode Dachleiste

function dachleiste_shortcode( $atts, $content = null ) {
 return '<h4>' . $content . '</h4>';
}
add_shortcode( 'dachleiste', 'dachleiste_shortcode' );
