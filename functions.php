<?php
//------debug---------


function  cpt_menu_parent_metabox_callback(){
     echo 'some data';
}

function cpt_menu_parent_metabox() {
   add_meta_box(
       'id',       // $id
       'Add To Parent Restaurant',                  // $title
       'cpt_menu_parent_metabox_callback',  // $callback
       'menu',                 // $page
       'normal',                  // $context
       'high'                     // $priority
   );
}






function cpt_restaurant() {

  $labels = array(
    'name' => 'Restaurant'
   );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array(
        'slug' => 'restaurant',
        'with_front' => FALSE,
    ),
    'with_front' => false,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => true,
    'menu_position' => 2,
   'supports' => array(
            'page-attributes' /* This will show the post parent field */,
            'title',
            'editor',
            ),
    
    
  ); 

  register_post_type('restaurant',$args, 0);
 
}

function cpt_menu() {

  $labels = array(
    'name' => 'menu'
   );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array(
        'slug' => 'restaurant',
        'with_front' => FALSE,
    ),
    'with_front' => false,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => true,
    'menu_position'=> 3,
    'supports' => array(
                 'page-attributes' /* This will show the post parent field */,
                 'title',
                 'cpt_menu_parent_metabox',
                 ),
     ); 

  register_post_type('menu',$args, 0);
 
}

add_action( 'init', 'cpt_restaurant' , 0);
add_action( 'init', 'cpt_menu' , 0);
add_action('add_meta_boxes', 'cpt_menu_parent_metabox');


  $labels = array(
    'name' => 'menu'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array(
        'slug' => 'author/%authors%',
        'with_front' => FALSE,
    ),
    'with_front' => false,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => true,
    'menu_position' => null,
    'supports' => array( 'title', 'editor' )
  ); 

  register_post_type('books',$args);



//------debug---------



















// This calls in all the necessary templates placed in the one template in require folder
require get_template_directory() . '/inc/wpbasic-require.php';

// add_action functions needed to run functions created in other templates


// --------------------------------------------------
// CPT For Menu Item
function restaurant_menu_item( $menu_item_title_value ){
     $screen = get_current_screen();
     
     $menu_item_id = 'menu_item_id_' . wp_rand(1, 1000000 );
     
     if($menu_item_title_value == ''){
          $menu_item_title_value = 'Enter A New Menu Item';
     }
 
     if  ( 'menu_item' == $screen->post_type ) {
          $menu_item_title_value;
     }
 
     return $menu_item_title_value;
}

add_filter( 'enter_title_here', function() use( $menu_item_title_value ){
     
     return restaurant_menu_item( $menu_item_title_value );
         
});
// --------------------------------------------------




// --------------------------------------------------
// CPT For Customer
function wpbasic_customer_name( $customer_title_value ){
     $screen = get_current_screen();
     
     $customer_id = 'customer_id_' . wp_rand(1, 1000000 );
     
     if($customer_title_value == ''){
          $customer_title_value = 'Enter A Customer Name';
     }
 
     if  ( 'customers' == $screen->post_type ) {
          $customer_title_value;
     }
 
     return $customer_title_value;
}

add_filter( 'enter_title_here', function() use( $customer_title_value ){
     
     //$customer_title_value = 'Enter A Customer Name';
     return wpbasic_customer_name( $customer_title_value );
         
});
// --------------------------------------------------






?>