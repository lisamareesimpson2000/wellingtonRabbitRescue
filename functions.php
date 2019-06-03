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
    register_nav_menu('header_menu','The menu which appears at the top of the page');
}
add_action( 'init', 'register_my_menu' );

add_theme_support( 'wp-block-styles' );
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('image'));
add_theme_support( 'custom-header' );

// Register Custom Navigation Walker
require_once get_template_directory() . '/assets/class-wp-bootstrap-navwalker.php';

//excerpt
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//REGISTERING WIDGETS
add_action( 'widgets_init', 'add_sidebar' );
function add_sidebar() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'WRRescue' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'WRRescue' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget'  => '</div>',
    	'before_title'  => '<h2 class="widgettitle">',
    	'after_title'   => '</h2>',
        )
    );
}
// unregister all widgets
function unregister_default_widgets() {
    unregister_widget('WP_Widget_Pages');
    // unregister_widget('WP_Widget_Calendar');
    unregister_widget('WP_Widget_Archives');
    unregister_widget('WP_Widget_Links');
    unregister_widget('WP_Widget_Meta');
    //unregister_widget('WP_Widget_Search');
    unregister_widget('WP_Widget_Text');
    unregister_widget('WP_Widget_Categories');
    unregister_widget('WP_Widget_Recent_Posts');
    unregister_widget('WP_Widget_Recent_Comments');
    unregister_widget('WP_Widget_RSS');
    unregister_widget('WP_Widget_Tag_Cloud');
    unregister_widget('WP_Nav_Menu_Widget');
    unregister_widget('Twenty_Eleven_Ephemera_Widget');
    unregister_widget('WP_Widget_Custom_HTML');
    unregister_widget('WP_Widget_Media_Audio');
    //unregister_widget('WP_Widget_Media_Gallery');
    unregister_widget('WP_Widget_Media_Image');
    unregister_widget('WP_Widget_Media_Video');

}
add_action('widgets_init', 'unregister_default_widgets', 11);

//CUSTOM LOGO

function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

//CUSTOM HEADER IMAGE

$header_info = array(
    'width'         => 980,
    'height'        => 400,
    'default-image' => get_template_directory_uri() . '/assets/img/adoptForeverFriend.png',
);
add_theme_support( 'custom-header', $header_info );
 
$header_images = array(
    'rabbit' => array(
            'url'           => get_template_directory_uri() . '/assets/img/adoptForeverFriend.png',
            'thumbnail_url' => get_template_directory_uri() . '/assets/img/adoptForeverFriend.png',
            'description'   => 'Rabbits',
    ),
    'rabbit2' => array(
            'url'           => get_template_directory_uri() . '/assets/img/foreverFriend.png',
            'thumbnail_url' => get_template_directory_uri() . '/assets/img/foreverFriend.png',
            'description'   => 'Rabbits',
    ),  
);
register_default_headers( $header_images );

// $wp_customize->add_control(
//     new WP_Customize_Control(
//         $wp_customize,
//         'your_setting_id',
//         array(
//             'label'          => __( 'Dark or light theme version?', 'WRRescue' ),
//             'section'        => 'your_section_id',
//             'settings'       => 'your_setting_id',
//             'type'           => 'radio',
//             'choices'        => array(
//                 'dark'   => __( 'Dark' ),
//                 'light'  => __( 'Light' )
//             )
//         )
//     )
// );


require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/custom_post_types.php';


//search filter
function myplugin_register_query_vars( $vars ) {
    $vars[] = 'author';
    $vars[] = 'editor';
    return $vars;
}
add_filter( 'query_vars', 'myplugin_register_query_vars' );


// function SearchFilter($query) {
// if ($query->is_search) {
// $query->set('post_type', 'post');
// }
// return $query;
// }
// add_filter('pre_get_posts','SearchFilter');

//get logo

// function get_custom_logo( $blog_id = 0 ) {
//     $html          = '';
//     $switched_blog = false;
 
//     if ( is_multisite() && ! empty( $blog_id ) && (int) $blog_id !== get_current_blog_id() ) {
//         switch_to_blog( $blog_id );
//         $switched_blog = true;
//     }
 
//     $custom_logo_id = get_theme_mod( 'custom_logo' );
 
//     // We have a logo. Logo is go.
//     if ( $custom_logo_id ) {
//         $custom_logo_attr = array(
//             'class' => 'custom-logo',
//         );
 
//         /*
//          * If the logo alt attribute is empty, get the site title and explicitly
//          * pass it to the attributes used by wp_get_attachment_image().
//          */
//         $image_alt = get_post_meta( $custom_logo_id, '_wp_attachment_image_alt', true );
//         if ( empty( $image_alt ) ) {
//             $custom_logo_attr['alt'] = get_bloginfo( 'name', 'display' );
//         }
 
//         /*
//          * If the alt attribute is not empty, there's no need to explicitly pass
//          * it because wp_get_attachment_image() already adds the alt attribute.
//          */
//         $html = sprintf(
//             '<a href="%1$s" class="custom-logo-link" rel="home">%2$s</a>',
//             esc_url( home_url( '/' ) ),
//             wp_get_attachment_image( $custom_logo_id, 'full', false, $custom_logo_attr )
//         );
//     } elseif ( is_customize_preview() ) {
//         // If no logo is set but we're in the Customizer, leave a placeholder (needed for the live preview).
//         $html = sprintf(
//             '<a href="%1$s" class="custom-logo-link" style="display:none;"><img class="custom-logo"/></a>',
//             esc_url( home_url( '/' ) )
//         );
//     }
 
//     if ( $switched_blog ) {
//         restore_current_blog();
//     }
 
//     /**
//      * Filters the custom logo output.
//      *
//      * @since 4.5.0
//      * @since 4.6.0 Added the `$blog_id` parameter.
//      *
//      * @param string $html    Custom logo HTML output.
//      * @param int    $blog_id ID of the blog to get the custom logo for.
//      */
//     return apply_filters( 'get_custom_logo', $html, $blog_id );
// }

