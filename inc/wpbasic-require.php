<?php

//  When should I use require vs. include?
//  The require() function is identical to include(), 
//  except that it handles errors differently. If an error occurs, 
//  the include() function generates a warning, but the script will continue execution. 
//  The require() generates a fatal error, and the script will stop

require get_template_directory() . '/inc/wpbasic-clean-header.php';

// replace dashicons with fontawesome
require get_template_directory() . '/inc/customizer/wpbasic-fontawesome.php';

// require theme default values
require get_template_directory() . '/inc/customizer/wpbasic-default-values.php';

// side menu for custom post type
require get_template_directory() . '/inc/custom-post/wpbasic-custom-post-type.php';

// require somehow not needed for wp-basic-customizer.php to work, interestinly
// for visual purpose, it was included in this code

require get_template_directory() . '/inc/customizer/wpbasic-customizer.php';

require get_template_directory() . '/inc/wpbasic-nav-menu-template.php';

require get_template_directory() . '/inc/custom-post/wpbasic-add-action.php';

require get_template_directory() . '/inc/custom-post/metaboxes/wpbasic-add-meta-box.php';

require get_template_directory() . '/inc/custom-post/metaboxes/wpbasic-customers-create-metabox.php';

require get_template_directory() . '/inc/custom-post/metaboxes/wpbasic-customers-save-data.php';

require get_template_directory() . '/inc/restaurant/restaurant-custom-post-type.php';

require get_template_directory() . '/inc/restaurant/restaurant-menu-taxonomies.php';





?>