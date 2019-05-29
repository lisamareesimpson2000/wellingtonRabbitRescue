<?php 

function rabbitheme_customize_register( $wp_customize){
    $wp_customize->add_section( 'custom_theme_colour_section', array(
        'title' => __('Colours', 'WRRescue'),
        'priority' => 30,
    ));
    $wp_customize->add_setting( 'custom_background_colour_setting', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_background_control', array(
        'label' => __('Background Colour', WRRescue),
        'section' => 'custom_theme_colour_section',
        'setting' => 'custom_background_colour_setting',
    )));

}
add_action( 'customize_register', 'rabbitheme_customize_register');

function rabbitheme_customize_css(){
    ?>
         <style type="text/css">
             body {
                 background-color: <?php echo get_theme_mod('custom_background_colour', '#64e3d3'); ?>;
             }

             .custom_nav{
                 background-color: <?php echo get_theme_mod('navigation_background', '#ff4e50'); ?>;
             }
         </style>
    <?php

}
add_action('wp_head', 'rabbitheme_customize_css');
