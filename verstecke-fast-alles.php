<?php

// Plugin Name: WP-Schnipsel der Freude - Vertsecke Fast Alles

add_action('wp_before_admin_bar_render', 'wpse74389_check_username');
function wpse74389_check_username() {
    $user = wp_get_current_user();

    if($user && isset($user->user_login) && 'USERNAME' == $user->user_login) {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');          // Remove the WordPress logo
 // $wp_admin_bar->remove_menu('about');            // Remove the about WordPress link
    $wp_admin_bar->remove_menu('wporg');            // Remove the WordPress.org link
    $wp_admin_bar->remove_menu('documentation');    // Remove the WordPress documentation link
    $wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
    $wp_admin_bar->remove_menu('feedback');         // Remove the feedback link
    $wp_admin_bar->remove_menu('site-name');        // Remove the site name menu
    $wp_admin_bar->remove_menu('view-site');        // Remove the view site link
    $wp_admin_bar->remove_menu('updates');          // Remove the updates link
    $wp_admin_bar->remove_menu('comments');         // Remove the comments link
    $wp_admin_bar->remove_menu('new-content');      // Remove the content link
    $wp_admin_bar->remove_menu('w3tc');             // If you use w3 total cache remove the performance link
    $wp_admin_bar->remove_menu('my-account');       // Remove the user details tab

  // Development Menü
	$args = array(
		'id'    => 'dev_menu',
		'title' => '<div style="cursor:pointer">Menü</div>'
	);
	$wp_admin_bar->add_node( $args );


     // Website ansehen
	$args = array(
		'id'     => 'website-ansehen',
		'title'  => 'Website ansehen',
		'parent' => 'dev_menu',
                'href' => get_site_url().'/'
	);
	 $wp_admin_bar->add_node( $args );

    // Abmelden
	$args = array(
		'id'     => 'abmelden',
		'title'  => 'Abmelden',
		'parent' => 'dev_menu',
                'href' => get_site_url().'/wp-login.php?action=logout'
	);
	$wp_admin_bar->add_node( $args );

        // Beitrag
	$args = array(
		'id'     => 'neuer_beitrag',
		'title'  => 'Beiträge bearbeiten',
		'parent' => 'dev_menu',
                'href' => get_site_url().'/wp-admin/edit.php'
	);
	 $wp_admin_bar->add_node( $args );

	// Seite
        $args = array(
		'id'     => 'neue_seite',
		'title'  => 'Seiten bearbeiten',
		'parent' => 'dev_menu',
                'href' => get_site_url().'/wp-admin/edit.php?post_type=page'
	);
	 $wp_admin_bar->add_node( $args );

 	// Upload
        $args = array(
		'id'     => 'neue_medien',
		'title'  => 'Medien hochladen',
		'parent' => 'dev_menu',
                'href' => get_site_url().'/wp-admin/media-new.php'
	);
	$wp_admin_bar->add_node( $args );

 
        // Menue bearbeiten
	$args = array(
		'id'     => 'zum-menu',
		'title'  => 'Navigation bearbeiten',
		'parent' => 'dev_menu',
                'href' => get_site_url().'/wp-admin/nav-menus.php'
	);
	$wp_admin_bar->add_node( $args );

        // Farben anpassen
	$args = array(
		'id'     => 'farbe-anpassen',
		'title'  => 'Farbe und Schrift ver&auml;ndern',
		'parent' => 'dev_menu',
                'href' => get_site_url().'/wp-admin/customize.php'
	);
	$wp_admin_bar->add_node( $args );

	// Alle Plugins
	$args = array(
		'id'     => 'alle_plugins',
		'title'  => 'Alle Plugins',
		'parent' => 'dev_menu',
                'href' => get_site_url().'/wp-admin/plugins.php'
	);
	$wp_admin_bar->add_node( $args );


echo '<style type="text/css">#collapse-menu, #adminmenu, #adminmenuback, #wpfooter, #wp-admin-bar-customize, #welcome-panel, #dashboard-widgets-wrap, .update-nag { display: none; visibility: hidden; }</style>';

    }
}


 // Wenn nicht ueber CSS ausgeschaltet werden soll:

/*
add_action('admin_init', 'delete_menues_user_check');
 function delete_menues_user_check() {
    $user = wp_get_current_user();

    if($user && isset($user->user_login) && 'USERNAME' == $user->user_login) {
    
  remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'jetpack' );                    //Jetpack* 
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'upload.php' );                 //Media
  remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  remove_menu_page( 'themes.php' );                 //Appearance
  remove_menu_page( 'plugins.php' );                //Plugins
  remove_menu_page( 'users.php' );                  //Users
  remove_menu_page( 'tools.php' );                  //Tools
  remove_menu_page( 'options-general.php' );        //Settings

    }
 } 
*/
?>
