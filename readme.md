# how to find where a particular function in the theme ( e.g. get_theme_mod() ):

Click on the theme folder in c9 to highlight it and press ctrl shift F
Type in the Find filed: get_theme_mod() then press Enter
A list of what was founded will appear as a new tab, telling where it is (folder and line)
Doubleclick on the folder name or the function itself in the opened tab
You will be directed to the exact folder and line where that function is being called
Look for what the function is doing or is calling (for gateway theme it is blog_title()
Now search for blog_title() in the gateway theme with ctrl shift F
You’ll find that it’s customized in the panel of wp-admin
You may need to do extensive research (e.g. in wordpress codex) to understand each wordpress function and to be able to reuse it in your minimal theme you are creating
Helpful sites for research:
```
Wordpress.com
Wordpress.org
http://wptheming.com/
wpseek.com
```


## Wordpress Functions For Removing Header (Used Later / Not For Now)

```wordpress

remove_action('wp_head' , 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head' , 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head' , 'feed_links_extra', 3); // removes all extra rss feed links
remove_action('wp_head' , 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head' , 'index_rel_link'); // remove link to index page
remove_action('wp_head' , 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head' , 'rel_canonical', 10, 0 ); // remove canonical link


```



## Helpful tips to assist you when creating a minimal theme

Get_template_part() used to get other php files (templates)
esc_attr() https://developer.wordpress.org/reference/functions/esc_attr/ (this will escape or ignore the html and only extract the content for use in your code.



# theme api
To interact with wordpress
http://wptheming.com/2012/06/add-options-to-theme-customizer-default-sections/

### needed for wp_customizer()
Link:
https://developer.wordpress.org/themes/advanced-topics/customizer-api/
add_setting() https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_setting
add_section() https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_section
add_control() https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_control

## Question: how to get data from the wp_cutomize->add_setting()?
Go to your index.php
Echo esc_attr( enter in here the id from the add_setting() )
```
<h1>Twitter Name Is:
        <?php 
            echo  esc_attr( get_theme_mod( 'wpbasic_social_accounts' ) );
        ?>
 </h1>

```


# 8-25-16

### questions
1. how do I get the url for the new downloaded zipped file theme in c9 so I can curl it?
2. can we go over what add_setting() and what add_control is doing?

# will eventually write down the steps to curl newly downloaded themes in cloud 9.

Go to wordpress.org
Select themes tab
Select a theme and click on it
Click download (this will download as a zip file)

------------------------------------------------------------------------------------------------------------------

---(code review)---

# Wordpress to remove html tags from head tag

## Wordpress to remove some of the html tags in the head tag that comes with wordpress themes, using remove_action()

Link (from this link there may be some missing, but please look at the code to enter in functions.php):
https://wordpress.org/support/topic/remove-feed-from-wp_head

Enter code in functions.php (notice the comment after each action):
```
remove_action('wp_head' , 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head' , 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head' , 'feed_links_extra', 3); // removes all extra rss feed links
remove_action('wp_head' , 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head' , 'index_rel_link'); // remove link to index page
remove_action('wp_head' , 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head' , 'rel_canonical', 10, 0 ); // remove canonical link
remove_action('wp_head' , 'rest_output_link_wp_head', 10 ); // remove wp-json (see link on next line)
// (link: https://wordpress.org/support/topic/wp-44-remove-json-api-and-x-pingback-from-http-headers)
remove_action('wp_head' , 'rsd_link'); // remove really simple discovery link
remove_action('wp_head' , 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head' , 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
remove_action('wp_head' , 'wp_generator'); // remove wordpress version
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 ); // remove wp-json (see link on next line)
//(link: https://wordpress.org/support/topic/wp-44-remove-json-api-and-x-pingback-from-http-headers)
remove_action('wp_head' , 'wp_shortlink_wp_head', 10, 0 ); // remove shortlink
```

## Wordpress to remove emojis from head tag
See link:
 https://wordpress.org/support/topic/removing-emoji-code-from-header
Enter code in functions.php:
```
    remove_action( 'wp_head' , 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
```

## Wordpress to remove stuff in the head tag
In update_option(): the numbers 0 turns ON, and 1 turns OFF the tags in the head tag
This gives us the option to add code in the head
Link: 

https://codex.wordpress.org/Function_Reference/update_option

Enter code in functions.php:
```
update_option('blog_public', '1');
```

## Wordpress to remove the admin bar
Links:

https://wordpress.org/support/topic/remove-open-sans-and-add-custom-fonts
https://davidwalsh.name/remove-wordpress-admin-bar-css

Enter code in functions.php:
```
add_filter( 'show_admin_bar', '__return_false' );
```

## Wordpress to remove stuff (e.g. style from head tag)
Links:

https://wordpress.org/support/topic/wp-44-remove-json-api-and-x-pingback-from-http-headers
https://codex.wordpress.org/Function_Reference/wp_deregister_style

Enter code in functions.php
```
add_action( 'wp_enqueue_scripts', function(){
     
wp_deregister_style( 'open-sans' );

});
```


Questions: 
Why did you use ‘blog_public’ in update_option('blog_public', '1') because I don’t see it in the link site?
With wp deregister style, how did  you know to enter ‘open-sans’ in the parameter (Name of the registered stylesheet)?
I commented out some of the code and we were still able to delete what was in the head tag, so can we move some of the remove_action() functions, including the wp_deregister_style() function?
