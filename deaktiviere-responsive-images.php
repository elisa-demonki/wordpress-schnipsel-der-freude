
<? php

// Plugin Name: WP-Schnipsel der Freude - Deaktiviere responsive Images

add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );

?>
