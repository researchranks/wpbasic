<?php


// Creates Custom Post Type
// Taken from link: https://www.elegantthemes.com/blog/tips-tricks/creating-custom-post-types-in-wordpress

function add_fontawesome_to_admin_dashboard(){
    wp_enqueue_style(
        'fontawesome',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css',
         '',
         '4.5.0',
         'all'
    );
}

function change_admin_dashboard_icon_to_fontawesome() {
    
    // 'education-course' in line 22 is from the register_post_type( 'education-course', $args ); 
    // found in wpbasic-custom-post-type.php template
    // on line 24, for code '\\f19c' make sure there are no spaces in between characters or code will break
 
 
    // echo "<style type='text/css' media='screen'>
    //         #adminmenu #menu-posts-education-course div.wp-menu-image:before {
	   //         font-family:'FontAwesome' !important; content:'\\f19c';
    //         }	
	   // </style>";
	    
	    
	   echo "<style type='text/css' media='screen'>
            .dashicons-wpbasic-customer:before{
	            font-family:'FontAwesome'!important;
	            content:'\\f217'; 
            }	
	    </style>";    
	    
	    

	    
}

?>