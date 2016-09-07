<?php

// Add the CPT Customers Meta Boxes
function add_customers_metaboxes() {
    // Personal Email
    add_meta_box(
        'customer_personal_email', // $id is “customer_personal_email”- or the html id that will be applied to this metabox.
        'Personal Email', // $title is “Personal Email”. This appears at the top of the new metabox when displayed.
        'customer_personal_email', // $callback is the function “customer_personal_email” which will load the html into the metabox.
        
        //============== IMPORTANT!!! =========================================================
        'customers', // $page is “customers”, the name of your Custom Post Type.
        
        'normal', 
        // $context is “side”. If you wanted it to load below the content area, you could put “normal”.
        // When drag and dropped a meta box in wp_admin, this code will be changed
        'default' // $priority controls where the metabox will display in relation to the other metaboxes (“high”, “low” or “default”).
    );

    
    // Mailing Address
    add_meta_box(
        'customer_mailing_address',
        'Mailing Address',
        'customer_mailing_address',
        'customers',
        'normal',
        'default'
    );
    
    // Customer_Status
    add_meta_box(
        'customer_status',
        customer_data(),
        'customer_status',
        'customers',
        'normal',
        'high'
    );
    
    // Custom Field
    add_meta_box(
        'custom_field',
        'Custom Field',
        'custom_field',
        'customers',
        'normal',
        'default'
    );
    
    // Images
    add_meta_box(
        'customer_images',
        'Images',
        'customer_images',
        'customers',
        'side', 
        'default'
    );
    
    // Set And Force Default Values For All Customer MetaBoxes
    // Otherwise, when drag and drop these items around in the admin window, they will stay where you put them
    do_meta_boxes( 'customer_hobbies', 'normal', '' );
    do_meta_boxes( 'customer_personal_email', 'normal', '' );
    do_meta_boxes( 'customer_mailing_address', 'normal', '' );
    
}

?>