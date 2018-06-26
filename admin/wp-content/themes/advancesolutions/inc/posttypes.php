<?php

// remove_post_type_support( 'post', 'revisions' );
// remove_post_type_support( 'post', 'author' );
add_action( 'init', 'custom_post_types' );
function custom_post_types() {

	// This is all related to old content
	// for the time being we shouldn't need this

	register_post_type('staff', array(
		'label' 			=> __('Staff'),
		'singular_label' 	=> __('Staff'),
		'public' 			=> true,
		'capability_type' 	=> 'page',
		'hierarchical' 		=> true,
		'rewrite' 			=> array('slug' => 'people', 'with_front' => false),
		'has_archive' 		=> true,
		'menu_icon'   		=> 'dashicons-calendar-alt',
		'supports' 			=> array('title', 'editor', 'thumbnail', 'excerpt'),
	));

	/*

	Only needs to be called on first registration, can also be done by loading the Permalinks option page through wordpress
	flush_rewrite_rules();

	*/

	 register_taxonomy('staff_category', 'staff', array(
		'label' 			=> 'Staff Categories',
		'singular_label' 	=> 'Staff Category',
		'hierarchical' 		=> true,
		'rewrite' 			=> array('slug' => 'staff', 'with_front' => false),
		'show_admin_column' => true,
        'all_items'         => 'All Staff'

	));

}
