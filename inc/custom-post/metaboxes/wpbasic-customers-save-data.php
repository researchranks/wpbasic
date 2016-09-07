<?php

function customer_data(){
    global $post;
    $status = get_post_meta($post->ID, '_status', true);
    
    return 'Current Customer Status: ' . $status;
    
    //return 'some data';
    
    //return get_post_meta($post->ID, '_email', true);
    //return $post->ID;
}

// Save the Metabox Data
// comments inside of this function is from 
// link: http://wptheming.com/2010/08/custom-metabox-for-post-type/

function save_customer_email_meta($post_id, $post) {
    if ( array_key_exists('_email', $_POST ) ) {
        update_post_meta( 
            $post_id, 
            '_email', 
            $_POST['_email'] 
            );
    }
}

function save_customer_image_meta($post_id, $post) {

    // verify this came from the our screen and with proper authorization,
    // because save_post can be triggered at other times

    if ( !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
        return $post->ID;
    }

    // Is the user allowed to edit the post or page??
    
    if ( !current_user_can( 'edit_post', $post->ID ))
        return $post->ID;
 
    // OK, we're authenticated: we need to find and save the data
    // We'll put it into an array to make it easier to loop though.
     
    $events_meta['_image'] = $_POST['_image'];

    // Add values of $events_meta as custom fields

    foreach ($events_meta as $key => $value) { // Cycle through the $events_meta array!
        if( $post->post_type == 'revision' ) 
            return; // Don't store custom data twice
            $value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
        
        if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
            update_post_meta($post->ID, $key, $value);
        } else { // If the custom field doesn't have a value
            add_post_meta($post->ID, $key, $value);
        }
        
        if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
    }
}



function save_customer_status_meta($post_id, $post) {

    // verify this came from the our screen and with proper authorization,
    // because save_post can be triggered at other times
    
    
function status_save_postdata( $post_id ) {
    if ( array_key_exists('status_field', $_POST ) ) {
        update_post_meta( 
            $post_id, 
            '_status', 
            $_POST['status_field'] 
        );
    }
}
    
}

?>