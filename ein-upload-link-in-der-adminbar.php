<?php

// Plugin Name: WP-Schnipsel der Freude - Ein Upload Link in der Adminbar

function bau_ein_upload_link_in_der_adminbar() {

  global $wp_admin_bar;
  
  if (current_user_can( 'manage_options' ) ) {
    
  $wp_admin_bar->add_menu( array(
		'id'      => 'medien-hochladen',
		'title'   => 'Medien hochladen',
		'href'    => admin_url( 'media-new.php')
	));
}
}

add_action( 'wp_before_admin_bar_render', 'bau_ein_upload_link_in_der_adminbar' );

?>
