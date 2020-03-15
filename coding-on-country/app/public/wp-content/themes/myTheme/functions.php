<?php

function load_css(){
    wp_register_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', 
        array(), false, 'all');
    wp_enqueue_style( 'bootstrap_css' );
}
add_action('wp_enqueue_scripts', 'load_css');


function load_js(){
    wp_enqueue_script( 'jquery' );

    wp_register_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js',
        'jquery', false, true );

        wp_enqueue_script( 'bootstrap_js' );
}
add_action( 'wp_enqueue_scripts', 'load_js' );