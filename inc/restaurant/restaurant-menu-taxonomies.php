<?php

// Add custom taxonomies for restaurant custom post type: Menu Items
function restaurant_menu_taxonomies() {
    
    $sandwich_labels = array(
        'name'              => 'Sandwiches',
        'singular_name'     => 'Sandwich',
        'search_items'      => 'Search Sandwiches',
        'all_items'         => 'All Sandwiches',
        'edit_item'         => 'Edit Sandwich',
        'update_item'       => 'Update Sandwich',
        'add_new_item'      => 'Add New Sandwich',
        'new_item_name'     => 'New Sandwich',
        'menu_name'         => 'Sandwiches',
    );
    
	$drinks_labels = array(
        'name'              => 'Drinks',
        'singular_name'     => 'Drink',
        'search_items'      => 'Search Drinks',
        'all_items'         => 'All Drinks',
        'edit_item'         => 'Edit Drink',
        'update_item'       => 'Update Drink',
        'add_new_item'      => 'Add New Drink',
        'new_item_name'     => 'New Drink',
        'menu_name'         => 'Drinks',
    );
    
	$sides_labels = array(
        'name'              => 'Sides',
        'singular_name'     => 'Side',
        'search_items'      => 'Search Sides',
        'all_items'         => 'All Sides',
        'edit_item'         => 'Edit Side',
        'update_item'       => 'Update Side',
        'add_new_item'      => 'Add New Side',
        'new_item_name'     => 'New Side',
        'menu_name'         => 'Sides',
    );
    
	$dessert_labels = array(
        'name'              => 'Dessert',
        'singular_name'     => 'Dessert',
        'search_items'      => 'Search Dessert',
        'all_items'         => 'All Dessert',
        'edit_item'         => 'Edit Dessert',
        'update_item'       => 'Update Dessert',
        'add_new_item'      => 'Add New Dessert',
        'new_item_name'     => 'New Dessert',
        'menu_name'         => 'Dessert',
    );
    
    register_taxonomy(
		'sandwich', // Sandwich taxonomy
		'menu_items',
		array(
			'label' => 'sandwich',
			'labels' => $sandwich_labels,
			'show_admin_column' => true
		)
	);
	
	register_taxonomy(
		'drink', // Drinks taxonomy
		'menu_items',
		array(
			'label' => 'drink',
			'labels' => $drinks_labels,
			'show_admin_column' => true
		)
	);
    
    register_taxonomy(
		'side', // Sides taxonomy
		'menu_items',
		array(
			'label' => 'side',
			'labels' => $sides_labels,
			'show_admin_column' => true
		)
	);
    
	register_taxonomy(
		'dessert', // Dessert taxonomy
		'menu_items',
		array(
			'label' => 'dessert',
			'labels' => $dessert_labels,
			'show_admin_column' => true
		)
	);
	
}

?>