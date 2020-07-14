<?php

/**
Anarchy Boxing & Fitness 
**/
	
// load stylesheets
function load_stylesheets() {
    wp_register_style('style', get_template_directory_uri() . 'assets/styles/style.css', array(), false, 'all');
    wp_enqueue_style('style');
    
   /**  
    wp_register_style('name of file', get_template_directory_uri() . '/css/name of file.css', array(), false, 'all');
    wp_enqueue_style('name of file');
    **/
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

// javascript
function include_jquery() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', '', 1, true);
}
add_action('wp_enqueue_scripts', 'include_jquery');

function loadjs() {
    wp_register_script('bundledjs', get_template_directory_uri() . '/bundled.js', '', 1, true);
    wp_enqueue_script('bundledjs');
}
add_action('wp_enqueue_scripts', 'loadjs');

// add menu support
add_theme_support('menus');

// Menus
register_nav_menus(
    array(
     'Main Header Menu' => __('Main Header Menu', 'theme'),
    
     )
);

// google fonts
function wpb_add_google_fonts() {
   wp_enqueue_style( 'https://fonts.googleapis.com/css?family=Merriweather|Montserrat:900&display=swap', false );
   }
  add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

// support custom logo
add_theme_support( 'custom-logo' );
