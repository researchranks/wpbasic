<?php



// This calls in all the necessary templates placed in the one template in require folder
require get_template_directory() . '/inc/wpbasic-require.php';

// add_action functions needed to run functions created in other templates

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