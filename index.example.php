<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
 
    get_header();  //the Header
    
   //the_content("Continue reading " . the_title('', '', false));

     
     //if (have_posts()) : while (have_posts()) : the_post();
     
//      if (have_posts()) :
//   while (have_posts()) :
//       the_post();
//          the_content();
//   endwhile;
// endif;


    $wp_query = new WP_Query();
    
    print_r( $wp_query );

     
    // if( have_posts() ){
    //     while( have_posts() ){
    //         //the_post();
    //         WP
    //         //the_content();
    //     }
    // }
        
        
        
    // get_template_part( 'menu', 'index' ); //the  menu + logo/site title 
    
    
    
    
    
    // foreach( get_posts() as $wp ){

    //     print_r( $wp->post_content );       
    //     echo '<br>';
        
    //  }
     
     echo '<hr>';
    
    // // Add some text after the header
    
    // add_action( 'special_offer' , 'add_promotional_text' );
    
    // function add_promotional_text() {
    //     get_template_part( 'template/php/promotion' );
    //     include( 'template/html/promotion.html' );
    // }

    // do_action ( 'special_offer' );
    
     //get_template_part( 'loop', 'index' ); //the Loop  
     
    // get_template_part( 'sidebar', 'index' ); //the Sidebar 
            
    // get_footer(); //the Footer 
   
?>                        
           
