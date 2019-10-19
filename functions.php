<?php

//Include the Wordpress Customizer settings file
include get_stylesheet_directory_uri() . '/inc/customizer.php';



//This function links in the Parent and Child styles. 

function enqueue_theme_styles() {
//Parent Style Sheet(s)
    wp_enqueue_style( 'parent_style', get_template_directory_uri() . '/style.css' );

//Child Style Sheet(s)
	wp_enqueue_style('child_style', get_stylesheet_directory_uri() .'/style.css', array('parent_style'));
}

//Set the hook for the Custom Styles
add_action( 'wp_enqueue_scripts', 'enqueue_theme_styles');




//This function links the JavaScript files for your theme. ~DV
function enqueue_theme_js() {
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js' );
}

//Set the hook for the Custom Java Script files.
add_action( 'wp_enqueue_scripts', 'enqueue_theme_js' );



//This function sets the additional settings for the Customizer.


function create_customize_register($wp_customize) {

    
    $wp_customize->add_section('footer_section', array(
        'title'    => __('Footer', 'themename'),
        'description' => '',
        'priority' => 120,
    ));
 
    //  =============================
    //  = Email Name and Address =
    //  =============================
    $wp_customize->add_setting('to_EAddress', array(
        'default'        => 'webmaster@email.com',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('themename_text_test', array(
        'label'      => __('Webmaster Email Address', 'themename'),
        'section'    => 'themename_color_scheme',
        'settings'   => 'to_EAddress',
    ));

    //  =============================
    //  = Facebook Url =
    //  =============================
    $wp_customize->add_setting('to_Facebook', array(
        'default'        => 'https://www.facebook.com',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('to_Facebook_control', array(
        'label'      => __('Facebook Address', 'themename'),
        'section'    => 'themename_color_scheme',
        'settings'   => 'to_Facebook',
    ));
    //  =============================
    //  = Twitter Url =
    //  =============================
    $wp_customize->add_setting('to_Twitter', array(
        'default'        => 'https://twitter.com',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('to_Twitter_control', array(
        'label'      => __('Twitter Address', 'themename'),
        'section'    => 'themename_color_scheme',
        'settings'   => 'to_Twitter',
    ));
    //  =============================
    //  = Insta  Url =
    //  =============================
    $wp_customize->add_setting('to_Instagram', array(
        'default'        => 'https://www.instagram.com',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('to_Instagram_control', array(
        'label'      => __('instagram Address', 'themename'),
        'section'    => 'themename_color_scheme',
        'settings'   => 'to_Instagram',
    ));
    //  =============================
    //  = Youtube Url =
    //  =============================
    $wp_customize->add_setting('to_Youtube', array(
        'default'        => 'https://www.youtube.com',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('to_Youtube_control', array(
        'label'      => __('Youtube Address', 'themename'),
        'section'    => 'themename_color_scheme',
        'settings'   => 'to_Youtube',
    ));
	
	    //  =============================
    //  = LinkedIn Url =
    //  =============================
    $wp_customize->add_setting('to_LinkedIn', array(
        'default'        => 'https://www.linkedin.com',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('to_LinkedIn_control', array(
        'label'      => __('LinkedIn Address', 'themename'),
        'section'    => 'themename_color_scheme',
        'settings'   => 'to_LinkedIn',
    ));
	
	
    //  =============================
    //  = Contact Name =
    //  =============================
    $wp_customize->add_setting('to_contactName', array(
        'default'        => 'Contact Name',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('to_contactName_control', array(
        'label'      => __('Contact Name', 'themename'),
        'section'    => 'themename_color_scheme',
        'settings'   => 'to_contactName',
    ));
  //  =============================
    //  = Contact Address =
    //  =============================
    $wp_customize->add_setting('to_contactAddress', array(
        'default'        => 'Contact Address',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('to_contactAddress_control', array(
        'label'      => __('Contact Address', 'themename'),
        'section'    => 'themename_color_scheme',
        'settings'   => 'to_contactAddress',
    ));
   //  =============================
    //  = Contact Number =
    //  =============================
    $wp_customize->add_setting('to_contactNumber', array(
        'default'        => 'Contact Number',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('to_contactNumber_control', array(
        'label'      => __('Contact Number', 'themename'),
        'section'    => 'themename_color_scheme',
        'settings'   => 'to_contactNumber',
    ));
  
  
    
}
 
//Set the hook to Customize the Theme Customizer
add_action( 'customize_register', 'create_customize_register');

