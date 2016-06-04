<?php 
// Plugin Name: Bleibe eingeloggt
// Description: Wenn WP sich selbstständig ausloggt, gibt es manchmal Probleme mit dem Speichern, wenn man gerade an einem Beitrag oder an einer Seite schreibt.
// Links: http://www.labnol.org/internet/wordpress-optimization-guide/3931

add_filter( 'auth_cookie_expiration', 'bleibe_viele_jahre_eingeloggt' );
function bleibe_viele_jahre_eingeloggt( $expire ) {
  return 3155692600; // 100 Jahre
}
