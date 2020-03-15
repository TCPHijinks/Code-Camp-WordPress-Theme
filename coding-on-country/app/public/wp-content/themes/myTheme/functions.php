<?php

// Load Stylesheets
function load_css(){
    wp_register_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', 
        array(), false, 'all');
    wp_enqueue_style( 'bootstrap_css' );

    wp_register_style('main_css', get_template_directory_uri() . '/css/main.css', 
    array(), false, 'all');
wp_enqueue_style( 'main_css' );
}
add_action('wp_enqueue_scripts', 'load_css');


// Load Javascript.
function load_js(){
    wp_enqueue_script( 'jquery' );

    wp_register_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js',
        'jquery', false, true );

        wp_enqueue_script( 'bootstrap_js' );
}
add_action( 'wp_enqueue_scripts', 'load_js' );


// Theme Options.
add_theme_support('menus');


// Menus.
register_nav_menus(  
    // id => name its called.
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )
);