<?php

//Add CPT Customer Email MetaBox
// The Customer Personal Email Metabox
function customer_personal_email() {

    global $post;

    print_r( 
            'current customer email is: ' .
            get_post_meta( $post->ID, '_email' )[0]
        );
    
    // Noncename needed to verify where the data originated
    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
    
    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

    // Get the location data if its already been entered
    
    //$email = '';
    $email = get_post_meta($post->ID, '_email', true);//
    
    // $post->ID = get_the_ID() = ?? what is get_the_ID()??

    // Echo out the field
    echo '<input type="text"  placeholder="Enter personal email here" name="_email" value="' . $email . '" class="widefat" />';

}

// The Customer Mailing Address Metabox
function customer_mailing_address() {

    global $post;

    // Noncename needed to verify where the data originated
    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
    
    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

    // Get the location data if its already been entered
    $address = get_post_meta($post->ID, '_address', true);// $post->ID = get_the_ID() = ?? what is get_the_ID()??

    // Echo out the field
    echo '<input type="text"  placeholder="Enter mailing address here" name="_address" value="' . $address  . '" class="widefat" />';

}

// The Customer Status Metabox
function customer_status() {

    global $post;

    //print_r( get_post_meta($post->ID, '_status', true) );

    // Noncename needed to verify where the data originated
    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

    // Get the location data if its already been entered
    $status = get_post_meta($post->ID, '_status', true);// $post->ID = get_the_ID() = ?? what is get_the_ID()??
    

    // $status = get_post_meta($post->ID, '_status');
    // echo $status[0]
    
    
    $option_values = ['bronze','silver','gold'];
    
    echo(
        '<form method="post" action="">' .
        '<select name="status_field">'
    );
    
    foreach( $option_values as $value ){
        
        if( $status === $value){
             
             echo(
                '<option value="' . $value . '" name="_status" selected="selected" >' . $value . '</option>'
            );
            
        }else{
          
            echo(
                '<option value="' . $value . '" name="_status" >' . $value . '</option>'
            );
        }
        
      
    }
    
    echo(
        '</select>' .
        '</form>'
    );
    
    
    // Echo out the field
    // echo '
    //     <form method="post" action="">
    //     <select name="status_field">
    //             <option value="click" name="_status">Click to select</option>
    //             <option value="bronze" name="_status"  >Bronze</option>
    //             <option value="silver" name="_status">Silver</option>
    //             <option value="gold" name="_status">Gold</option>
    //         </select>
    //     </form>
    //     ';    
}













// Images Metabox
function customer_images() {
  
    global $post;
    
    print_r(
            'Image Label: ' .
            get_post_meta( $post->ID, '_image' )[0]
        );

    // Noncename needed to verify where the data originated
    echo '
        
            <input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' 
                . wp_create_nonce( plugin_basename(__FILE__) ) . '" 
            />
        
        ';

    // Get the location data if its already been entered
    
    //$image = '';
    $image = get_post_meta($post->ID, '_image', true);
    
    // Echo out the field
    /*
    echo '
         
             <input type="text"  placeholder="Enter image label here" name="image" value="' . $image . '" class="widefat" />
             
             <div id="customer_image_container">
                <img id="slide-img-1" src="<?php echo get_bloginfo("template_directory");?>/images/money.jpg" class="slide" alt="" />
             </div>
         
         ';
    */
    
    //  <img src="http://az616578.vo.msecnd.net/files/2016/07/01/636029880485120279-651466387_4240713-money.jpg" width="100%">
    echo(
        '<img src="' .
            get_bloginfo('template_directory') .
        '/images/money.jpg width=\"100%"\"></img>'
    );
}

// Custom Field
function custom_field() {

    global $post;

    // Noncename needed to verify where the data originated
    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
    
    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

    // Get the location data if its already been entered
    $toys = get_post_meta($post->ID, '_toys', true);// $post->ID = get_the_ID() = ?? what is get_the_ID()??

    // Echo out the field
    echo ('
            <div class="custom_field_container">
                <div class="custom_field_sub_container">
                    <h2>Name</h2>
                    <input type="text"  placeholder="Enter mailing address here" name="_address" value="' . $toys  . '" class="widefat" />
                </div>
                <div class="custom_field_sub_container">
                    <h2>Value</h2>
                    <input type="text"  placeholder="Enter mailing address here" name="_address" value="' . $toys  . '" class="widefat" />
                </div>
            </div>
         ');

}







?>