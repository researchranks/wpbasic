<?php

// Custom Post Type (CPT) 'Customers'
function my_custom_post_customer() {
  
  // More options and explanation for arguments is found here:
  // https://codex.wordpress.org/Function_Reference/register_post_type
  // for e.g. if you want to find more options for 'supports', 
  // go to the link and CTRL Shift F to find, and type supports
  // results should lead you to the find more options
  
  $labels = array(
    
    'name'                => 'Customers', // this is the actual label or name on the wp-admin menu bar (try changing it)
    'singular_name'       => 'Customer',
    'menu name'           => 'Customers', // without the 'name' argument, 'menu_name' is the actual menu name
    'name_admin_bar'      => 'Customers',
    'add_new'             => ' --> Click here to add a new customer', // the label to your dropdown to add new post for current CPT
    'add_new_item'        => 'Add New Customer', // label to add post title for new post
    'new_item'            => 'New Customer',
    'edit_item'           => 'Edit Customer',
    'view_item'           => 'View Customer',
    'all_items'           => 'All Customers',
    'search_items'        => 'Search Customers',
    'parent_item_colon'   => 'Parent Customers:',
    'not_found'           => 'No custumers found',
    'not_found_in_trash'  => 'No customers found in Trash',
    
  );
  
  $args = array(
    'labels'              => $labels,
    'public'              => true,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'register_meta_box_cb' => 'add_customers_metaboxes',
    // add css class for fontawesome replacemet
    'menu_icon'           => 'dashicons-wpbasic-customer',
    // can also use url to an image to display an icon
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'customers' ),
    // this is why we needed to add the rewrite_flush function down below.
    // We set whatever slug we want for our current custom post type. 
    // The slug is what appears inside the URL when you go to a specific post
    'capability_type'     => 'post',
    'has_archive'         => true,
    'hierarchical'        => false,
    'supports'            => 'title' //array( 'title', 'editor', 'thumbnail' )
  );

  register_post_type( 'customers', $args );   
  
}


?>