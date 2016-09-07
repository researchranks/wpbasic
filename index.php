<?php  wp_head(); ?>


<h1> Custom Field values for car are:

    <?php 
    
    
      /*  $custom_fields = get_post_custom();

foreach ( $custom_fields as $field_key => $field_values ) {
	foreach ( $field_values as $key => $value )
		echo $field_key . ' - ' . $value . '<br />';
}*/

$custom_fields = get_post_custom();

foreach ( $custom_fields as $field_key => $field_values ) {
	if(!isset($field_values[0])) continue;
	if(in_array($field_key,array("_edit_lock","_edit_last"))) continue;
echo '<br>' . $field_key . ':';
//. '=>' . $field_values[0];
}
/*
$custom_field_keys = get_post_custom_keys();
foreach ( $custom_field_keys as $key => $value ) {
    $valuet = trim($value);
    if ( '_' == $valuet{0} )
        continue;
    echo $key . " => " . $value . "<br />";
}*/



        /*$key = get_post_custom();
        echo $key;*/
        $cars = get_post_meta($post->ID, 'car', false); 
            // get_post_meta() is a hook
            // 'car' is the key name for the custom field
            // Note the trick here is the third parameter “false”. 
            // By changing it to false, we tell the function to RETURN AN ARRAY OF THE VALUES for the specified key. 
            // This is a very handy trick for displaying multiple key values.
        
        foreach($cars as $car) { 
            // when $car is read in the loop it should go through all the values in $cars
            
            echo '<br>' . ( '<li>' . $car . '</li>' ) . '<br>';
            
        }
    ?>
    
</h1>

<h1>Twitter Name Is:
    <?php 
        echo  esc_attr( get_theme_mod( 'wpbasic_social_accounts' , $wpbasic_default_value['social_account'] ) );
        // wpbasic_social_accounts is the ID named for the add_setting() created
        // second parameter will set the value from key 'social_account' in an array set up as $wpbasic_default_value() function
        // found in another template (in this case, it's the wpbasic-default-value template file)
    ?>
</h1>

<h1>Email Address Is:
    <?php 
        
        //echo  esc_attr( get_theme_mod( 'wpbasic_social_accounts_email' ) );
        $new_email = (function() {
                    if ( have_posts() ) {
                    	while ( have_posts() ) {
                    		the_post(); 
                    		
                    		//echo get_post_meta( get_the_ID(), '_email', true )[0];
                    		//echo get_post_meta( $GLOBALS['post']->ID, 'my-info', true );
                    	}
                    }else{
                        echo 'no data';
                    }
                    
                    /*global $post;
                
                    print_r( 
                            'customer email is: ' .
                            get_post_meta( $post->ID, '_email' )[0]
                        );*/
                    
                });
                print_r( $new_email );
    ?>
</h1>

<h2>Status:
    <?php echo get_post_meta($post->ID, "_email", true); ?>
</h2>

<?php    
    // A query has to have an argument
    $query_options = array(
        'post_type' => 'post',
    );
    
    // The Query
    $query = new WP_Query($query_options);
    
    // The Loop
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            
            $query->the_post();
            the_title();
            echo '<br>'; // to separate each title, otherwise it will all be in one line (messy)
        }
        
        // Reset the query before the end of the IF statement and the end of the WHILE loop
        wp_reset_query();
        
        // Restore original Post Data
        wp_reset_postdata();
    }
    // End of loop

?>                        
           
