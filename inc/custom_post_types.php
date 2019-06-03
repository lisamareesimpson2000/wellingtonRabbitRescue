<?php
function add_care_post_type(){
    $labels = array(
		'name'               => _x( 'Care Posts', 'post type general name', 'WRRescue' ),
		'singular_name'      => _x( 'Care', 'post type singular name', 'WRRescue' ),
		'menu_name'          => _x( 'Care Posts', 'admin menu', 'WRRescue' ),
		'name_admin_bar'     => _x( 'Care', 'add new on admin bar', 'WRRescue' ),
		'add_new'            => _x( 'Add New', 'care', 'WRRescue' ),
		'add_new_item'       => __( 'Add New Care', 'WRRescue' ),
		'new_item'           => __( 'New Care', 'WRRescue' ),
		'edit_item'          => __( 'Edit Care', 'WRRescue' ),
		'view_item'          => __( 'View Care', 'WRRescue' ),
		'all_items'          => __( 'All Care Posts', 'WRRescue' ),
		'search_items'       => __( 'Search Care Posts', 'WRRescue' ),
		'parent_item_colon'  => __( 'Parent Care Posts:', 'WRRescue' ),
		'not_found'          => __( 'No care posts found.', 'WRRescue' ),
		'not_found_in_trash' => __( 'No care posts found in Trash.', 'WRRescue' )
	);
    $args = array(
        'labels' => $labels,
        'description' => 'A list of cares instructions',
        'public' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 6,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-carrot',
        'supports' => array('title', 'editor')
    );
    register_post_type('Care', $args);
}
add_action('init', 'add_care_post_type');


function add_adoption_post_type(){
    $labels = array(
		'name'               => _x( 'Adoption Posts', 'post type general name', 'WRRescue' ),
		'singular_name'      => _x( 'Adoption', 'post type singular name', 'WRRescue' ),
		'menu_name'          => _x( 'Adoption Posts', 'admin menu', 'WRRescue' ),
		'name_admin_bar'     => _x( 'Adoption', 'add new on admin bar', 'WRRescue' ),
		'add_new'            => _x( 'Add New', 'Adoption', 'WRRescue' ),
		'add_new_item'       => __( 'Add New Adoption', 'WRRescue' ),
		'new_item'           => __( 'New Adoption', 'WRRescue' ),
		'edit_item'          => __( 'Edit Adoption', 'WRRescue' ),
		'view_item'          => __( 'View Adoption', 'WRRescue' ),
		'all_items'          => __( 'All Adoption Posts', 'WRRescue' ),
		'search_items'       => __( 'Search Adoption Posts', 'WRRescue' ),
		'parent_item_colon'  => __( 'Parent Adoption Posts:', 'WRRescue' ),
		'not_found'          => __( 'No adoption posts found.', 'WRRescue' ),
		'not_found_in_trash' => __( 'No adoption posts found in Trash.', 'WRRescue' )
	);
    $args = array(
        'labels' => $labels,
        'description' => 'A list rabbits available for adoption',
        'public' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 6,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-star-empty',
        'supports' => array('title', 'editor')
    );
    register_post_type('Adoption', $args);
}
add_action('init', 'add_adoption_post_type');