<?php 

// Plugin Name: Ein Upload Link in der Adminbar

function bau_ein_upload_link_in_der_adminbar() {

  global $wp_admin_bar;
  $wp_admin_bar->add_menu( array(
		'parent'  => 'new-content',
		'id'      => 'new_media',
		'title'   => 'Media',
		'href'    => admin_url( 'media-new.php')
		'meta'    => false
	));
}

add_action( 'wp_before_admin_bar_render', 'bau_ein_upload_link_in_der_adminbar' );

?>
