<?php

// Added below code to show the Menu option in Appearance for wp_admin
// Link: http://wordpress.stackexchange.com/questions/160593/menu-is-not-visible-in-appearance

function custom_theme_setup() {
  register_nav_menus( array( 
    'header' => 'Header menu', 
    'footer' => 'Footer menu' 
  ) );
}

?>