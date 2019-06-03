<?php 

function rabbitheme_customize_register( $wp_customize){
    
    $wp_customize->add_section( 'custom_theme_colour_section', array(
        'title' => __('Main Colours', 'WRRescue'),
        'priority' => 30,
    ));
    $wp_customize->add_setting( 'custom_background_colour_setting', array(
        'default' => '#fffff',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_background_control', array(
        'label' => __('Background Colour', WRRescue),
        'section' => 'custom_theme_colour_section',
        'settings' => 'custom_background_colour_setting',
    )));
    $wp_customize->add_setting( 'custom_nav_colour_setting', array(
        'default' => '#0fdff2',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_nav_control', array(
        'label' => __('Nav Colour', WRRescue),
        'section' => 'custom_theme_colour_section',
        'settings' => 'custom_nav_colour_setting',
    )));
    $wp_customize->add_setting( 'custom_text_colour_setting', array(
        'default' => '#544e50',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_text_control', array(
        'label' => __('Text Colour', WRRescue),
        'section' => 'custom_theme_colour_section',
        'settings' => 'custom_text_colour_setting',
    )));
    // $wp_customize->add_setting( 'custom_h3_colour_setting', array(
    //     'default' => '#da4c44',
    //     'transport' => 'refresh',
    // ));
    // $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_h3_control', array(
    //     'label' => __('Medium Text Colour', WRRescue),
    //     'section' => 'custom_theme_colour_section',
    //     'settings' => 'custom_h3_colour_setting',
    // )));
    $wp_customize->add_setting( 'custom_footer_colour_setting', array(
        'default' => '#0fdff2',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_footer_control', array(
        'label' => __('Footer Colour', WRRescue),
        'section' => 'custom_theme_colour_section',
        'settings' => 'custom_footer_colour_setting',
    )));
    $wp_customize->add_setting( 'custom_title_colour_setting', array(
        'default' => '#da4c44',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_title_control', array(
        'label' => __('Heading Colour', WRRescue),
        'section' => 'custom_theme_colour_section',
        'settings' => 'custom_title_colour_setting',
    )));
    //HEADER IMAGE
    // $wp_customize->add_section( 'custom_header_image_section', array(
    //     'title' => __('Header Image', 'WRRescue'),
    //     'priority' => 30,
    // ));
    // $wp_customize->add_setting( 'custom_header_image_setting', array(
    //     'default' => '#fffff',
    //     'transport' => 'refresh',
    // ));

    // $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'custom_header_image_control', array(
    //     'label' => __('Header Image', WRRescue),
    //     'section' => 'custom_header_image_section',
    //     'settings' => 'custom_header_image_setting',
    // )));


}
add_action( 'customize_register', 'rabbitheme_customize_register');

function rabbitheme_customize_css(){
    ?>
         <style type="text/css">
             body {
                 background-color: <?php echo get_theme_mod('custom_background_colour_setting', '#fffff'); ?>;
                 color: <?php echo get_theme_mod('custom_text_colour_setting', '#544e50'); ?>;
                 font-family: <?php echo get_theme_mod('custom_text_colour_setting', 'opensans'); ?>;
             }
             h2{
                 font-family: <?php echo get_theme_mod('custom_title_colour_setting', 'Poppins'); ?>;
                 color:<?php echo get_theme_mod('custom_title_colour_setting', '#da4c44'); ?>;
             }
             /* h3{
                 font-family: <?php echo get_theme_mod('custom_h3_colour_setting', 'Poppins'); ?>;
                 color:<?php echo get_theme_mod('custom_h3_colour_setting', '#da4c44'); ?>;
             } */

             .custom_nav{
                 background-color: <?php echo get_theme_mod('custom_nav_colour_setting', '#ff4e50'); ?> !important;
             }
             .custom_footer{
                 background-color: <?php echo get_theme_mod('custom_footer_colour_setting', '#ff4e50'); ?> !important;
             }
         </style>
    <?php

}
add_action('wp_head', 'rabbitheme_customize_css');
