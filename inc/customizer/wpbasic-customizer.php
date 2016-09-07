<?php

/**
 * See below link for additional information on The WordPress Theme Customizer
 * Link:  http://themefoundation.com/wordpress-theme-customizer/
 */
 
 /**
 * Adds the Social Account section in WP-Admin with its settings and controls to the theme customizer
 */
function wpbasic_customizer( $wp_customize ) {

    // Social Account - Section
    // Please note: You will not be able to see the settings section until it contains at least one setting
    $wp_customize->add_section(
      'wpbasic_social_accounts',
      array(
            'title' => 'Social Account',
            'priority' => 10
        )
    );
    
    // Twitter Setting and Control (these go hand in hand like two peas in a pod)
    // Please note: You will not be able to see this new setting until it has it’s own control
    $wp_customize->add_setting(
        'wpbasic_social_accounts', // The unique ID of this setting
        array(
            //default option that is registerd under choices
            'default' => '@Facebook',
            'type'       => 'theme_mod',
        )
    );
    
    
    // Controls are simply the interface used to change a setting
    $wp_customize->add_control(
        'wpbasic_social_accounts',
        array(
            
            'type' => 'select',
            
            'label' => 'Social Accounts:',
            'section' => 'wpbasic_social_accounts',
            
            'choices' => array(
                '@Twitter' => '@Twitter',
                '@Facebook' => '@Facebook',
                '@Instagram' => '@Instagram',
            ),
        )
    );
    
    // Email Setting and Control
    $wp_customize->add_setting(
        "wpbasic_social_accounts_email", // The unique ID of this setting
        array(
            'default'    => 'kao@kao.com',
        )
    );
	
	$wp_customize->add_control(
		"wpbasic_social_accounts_email",
		array(
			"label" => "Email",
			"section" => "wpbasic_social_accounts",
			"type" => "email",
		)
	);
	
}

/*
--- Add Actions To Theme ---
*/

add_action( 'customize_register', 'wpbasic_customizer' );

?>