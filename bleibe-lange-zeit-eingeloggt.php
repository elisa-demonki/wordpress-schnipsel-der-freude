<?php 
// Plugin Name: Bleibe eingeloggt
// Description: WP loggt dich jetzt nicht mehr automatisch nach 2 Wochen aus.
// Links: 
// https://developer.wordpress.org/reference/hooks/auth_cookie_expiration/

add_filter( 'auth_cookie_expiration', 'bleibe_viele_jahre_eingeloggt' );
function bleibe_viele_jahre_eingeloggt( $expire ) {
  return 3155692600; // 100 Jahre in Sekunden
}
