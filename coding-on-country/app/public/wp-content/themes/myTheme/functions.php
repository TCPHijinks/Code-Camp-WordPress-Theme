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
add_theme_support( 'post-thumbnails' );
add_theme_support( 'widgets' );

// Menus.
register_nav_menus(  
    // id => name its called.
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )
);






// Custom Image Sizes - Crops images down to closest size 
// If "fale"/no hard-crop -- finds closest aspect ratio inside size constraints.
add_image_size("blog-large", 800, 400, true); // If size > 800x400, cut & ignore aspect ratio for consistent sizes.
add_image_size("blog-small", 300, 200, true); // If size > 800x400, cut & ignore aspect ratio for consistent sizes.





// Register Sidebars for Widgets
function my_sidebars()
{
    // Normal page sidebar.
    register_sidebar( 
        array(
            'name'=> 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_widget' => '<div class="widget-item">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );

    // Blog specific sidebar.
    register_sidebar( 
        array(
            'name'=> 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_widget' => '<div class=”widget-item”>',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );
}
add_action('widgets_init', 'my_sidebars');



function my_first_post_test_type()
{

    $args = array(
        'labels' => array(
            'name' => 'Cars',
            'singular_name' => 'Car',
        ),
        'hierarchical' => true, // Set false to make like a post.
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-tickets-alt',
        'supports' => array('title', 'editor', 'thumbnail'),
        //'rewrite' => array('slug' => 'test-url-4-cars'),
    );

    register_post_type( 'cars_test', $args );

}
add_action( 'init', 'my_first_post_test_type' );





function my_first_taxonomy()
{
   
    $args = array(
        'labels' => array(
            'name' => 'Brands',
            'singular_name' => 'Brand',
        ),
        'public' => true,
        'hierarchical' => false, // If true, act more like a category. Otherwise similar to tag.
    );


    register_taxonomy( 'brands', array('cars_test'), $args);

}
add_action( 'init', 'my_first_taxonomy' );