<?php
function add_custom_files(){
    wp_enqueue_style('my_bootstrap_file', get_template_directory_uri() . '/assets/css/bootstrap.min.css' , array(), '4.3.1');

    wp_enqueue_style('my_custom_stylesheet', get_template_directory_uri() . '/assets/css/custom_theme_style.css' , array(), '0.1');

    wp_enqueue_script('jquery');

    wp_enqueue_script('my_bootstrap_script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.3.1', true);
};
add_action('wp_enqueue_scripts', 'add_custom_files');
//not closing php

function register_my_menu() {
    // remember to link 'header_menu' in wp_nav_menu
    register_nav_menu('header_menu','The menu which appears at the top of the page');
}
add_action( 'init', 'register_my_menu' );

//gutenbergs style
add_theme_support( 'wp-block-styles' );

// Register Custom Navigation Walker
require_once get_template_directory() . '/assets/class-wp-bootstrap-navwalker.php';

// wp_nav_menu( array(
// 	'theme_location'  => 'primary',
// 	'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
// 	'container'       => 'div',
// 	'container_class' => 'collapse navbar-collapse',
// 	'container_id'    => 'bs-example-navbar-collapse-1',
// 	'menu_class'      => 'navbar-nav mr-auto',
// 	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
// 	'walker'          => new WP_Bootstrap_Navwalker(),
// ) );

//registering widgets
add_action( 'widgets_init', 'add_sidebar' );

function add_sidebar() {

    register_sidebar( array(
        'name' => __( 'Main Sidebar', '18wdwu07monday' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', '18wdwu07monday' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
    	'after_widget'  => '</li>',
    	'before_title'  => '<h2 class="widgettitle">',
    	'after_title'   => '</h2>',
        )
    );

}