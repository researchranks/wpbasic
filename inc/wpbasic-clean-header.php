<?php

function remove_header_info(){
    
    // remove some of the html tags in the head tag that comes with wordpress themes
    remove_action('wp_head' , 'rest_output_link_wp_head', 10 ); // remove wp-json (see link on next line)
    // (link: https://wordpress.org/support/topic/wp-44-remove-json-api-and-x-pingback-from-http-headers)
    remove_action('wp_head' , 'rsd_link'); // remove really simple discovery link
    remove_action('wp_head' , 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
    remove_action('wp_head' , 'wp_generator'); // remove wordpress version
    
    // remove emoji code from head tag
    // see link: https://wordpress.org/support/topic/removing-emoji-code-from-header
    
    remove_action( 'wp_head' , 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    
}

// In update_option: 0 turns ON, and 1 turns OFF the tags in the head tag
// This gives us the option to add code in the head
// Link: https://codex.wordpress.org/Function_Reference/update_option

update_option('blog_public', '1');

// removes the admin bar
// https://wordpress.org/support/topic/remove-open-sans-and-add-custom-fonts
// https://davidwalsh.name/remove-wordpress-admin-bar-css (see the comments section)

add_filter( 'show_admin_bar', '__return_false' );

?>