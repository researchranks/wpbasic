<?php



// =========== add_action SECTION ===================

add_action( 'init', 'my_custom_post_customer' );


add_action( 'init', 'remove_header_info' );



add_action( 'after_setup_theme', 'custom_theme_setup' ); // custom_theme_setup parameter is the function name created
//add_action( 'init', 'wpbasic_custom_post_type' );

add_action('admin_head','change_admin_dashboard_icon_to_fontawesome');
add_action('admin_init', 'add_fontawesome_to_admin_dashboard');

//add_action('wp_dashboard_setup', 'get_meta_boxes');

// save the custom fields
add_action('save_post', 'save_customer_email_meta', 1, 2);

add_action('save_post', 'save_customer_status_meta', 1, 2);

add_action('save_post', 'save_customer_image_meta', 1, 2);

add_action( 'save_post', 'status_save_postdata' );

add_action( 'init', 'restaurant_menu_custom_post' ); // Custom post type for restaurant:  Menu Items

add_action( 'init', 'restaurant_menu_taxonomies' ); // Taxonomies of custom post type for restaurant:  Menu Items


?>