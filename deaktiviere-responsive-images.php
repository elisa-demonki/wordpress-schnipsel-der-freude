
<? php

// Plugin Name: WP-Schnipsel der Freude - Deaktiviere von WP aufgezwungene responsive Images

add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );

?>
