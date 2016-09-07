<?php

// Add dustybuns first custom post type item for Menu
add_action( 'init', 'dustybuns_menu_custom_post' );

function dustybuns_menu_custom_post(){
    
    $labels = array(
    
    'name'                => 'Menu Items',
    'singular_name'       => 'Menu Item',
    'menu_name'           => 'Menu Item',
    'name_admin_bar'      => 'Menu Item',
    'add_new'             => ' --> Click here to add a new items',
    'add_new_item'   => 'Add New Menu Item',
    'new_item'            => 'New Menu Item',
    'edit_item'           => 'Edit Menu Item',
    'view_item'           => 'View Menu Item',
    'all_items'           => 'All Menu Items',
    'search_items'        => 'Search Menu Items',
    'parent_item_colon'   => 'Parent Menu Items:',
    'not_found'           => 'No menu items found',
    'not_found_in_trash'  => 'No menu items found in Trash'
    
    );
    
    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        //'register_meta_box_cb' => 'add_customers_metaboxes',
        'menu_icon'           => 'dashicons-list-view',
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'menu_items' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' )
    );
    
    register_post_type( 'menu_items', $args );
    
}

// Add custom taxonomies
add_action( 'init', 'menu_items_taxonomies' );

function menu_items_taxonomies(){
    
    // Food Menu Items
    
    $sandwich_labels = array(
        'name'              => 'Sandwiches',
        'singular_name'     => 'Sandwich',
        'search_items'      => 'Search in sandwiches',
        'all_items'         => 'All Sandwiches',
        'most_used_items'   => null,
        'parent_item'       => null,
        'parent_item_colon' => null,
        'edit_item'         => 'Edit sandwich',
        'update_item'       => 'Update sandwich',
        'add_new_item'      => 'Add new sandwich',
        'new_item_name'     => 'New sandwich',
        'menu_name'         => 'Sandwiches',
    );
    
    register_taxonomy( 
        'Sandwiches',
        'menu_items', // name of post type to attach this to, if more than one use an array
        array(
            'hierarchical'  => true,
            'label'         => 'test label' , //print_r( $sandwich_labels) ,
            'show_ui'       => true,
            'query_var'     => true,
            'rewrite'       => array( 'slug' => 'sandwiches')
        )
    );
}



?>