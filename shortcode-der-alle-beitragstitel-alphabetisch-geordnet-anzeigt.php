<?php
// Plugin Name: Shortcode, der alle Beitragstitel alphapetisch geordnet anzeigt
// Description: Shortcode: [beitragstitel-alpha]
// ---------------------------
// Links: 
// http://wordpress.stackexchange.com/questions/61674/how-to-make-archive-shortcode
// https://developer.wordpress.org/reference/functions/wp_get_archives/
// http://codex.wordpress.org/Shortcode_API
function archive_shortcode( $atts ) {
 return wp_get_archives('type=alpha');
}
add_shortcode( 'beitragstitel-alpha', 'archive_shortcode' );
?>
