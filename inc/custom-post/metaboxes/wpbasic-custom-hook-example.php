<?php


/**
 * Hook Example:  Register a Custom Menu in the Admin
 * 
*/


function register_my_custom_menu_page() {
 add_menu_page( 
     'custom menu title',
     'custom menu',
     'manage_options',
     'myplugin/myplugin-admin.php',
     '',
     'dashicons-admin-site',
     6 
 );
}

add_action( 'admin_menu', 'register_my_custom_menu_page' );

function excerpt_length_example( $words ) {
 return 15;
}
add_filter( 'excerpt_length', 'excerpt_length_example' );






?>