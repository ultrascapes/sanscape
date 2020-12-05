<?php

// Add Theme Support

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );


add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );

//add_theme_support( 'custom-background' );
$args = array(
  'default-color' => 'c4c4c4',
  'default-image' => get_template_directory_uri() . '/img/home.jpg',
  'default-repeat' => 'no-repeat',
);
add_theme_support( 'custom-background', $args );


add_theme_support( 'custom-header');


add_theme_support( 'custom-logo' );


function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_theme_support( 'customize-selective-refresh-widget' );
add_theme_support( 'starter-content' );

// Load in CSS
function sanscape_enqueue_styles() {
    //Change time() to version number when in production
    wp_enqueue_style( 'google-font-css', "https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,400&display=swap", [], '', 'all' );
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' ); 
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/css/template.css', ['google-font-css'], time(), 'all' ); 
}
add_action( 'wp_enqueue_scripts', 'sanscape_enqueue_styles' );

// Load in JS
function sanscape_enqueue_scripts() {
  //Change time() to version number when in production
    wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/js/template.js', [], '0.1', true );
}
add_action( 'wp_enqueue_scripts', 'sanscape_enqueue_scripts');


// Register Menu Locations
register_nav_menus( [
    'top-menu' => esc_html__( 'Top Menu', 'sanscape' ),
    'main-menu' => esc_html__( 'Main Menu', 'sanscape' ),
    'footer-top-menu' => esc_html__( 'Footer Top Menu', 'sanscape' ),
    'footer-main-menu' => esc_html__( 'Footer Main Menu', 'sanscape' )
]);

// Setup Widget Areas
function sanscape_widgets_init() {
    register_sidebar([
      'name'          => esc_html__( 'Home One', 'Sanscape' ),
      'id'            => 'home-one',
      'description'   => esc_html__( 'Add widgets for home page position one', 'Sanscape' ),
      'before_widget' => '<section class="home-one-sidebar">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>',
    ]);  

    register_sidebar([
      'name'          => esc_html__( 'Footer Top', 'Sanscape' ),
      'id'            => 'footer-top',
      'description'   => esc_html__( 'Add widgets for home page position two', 'Sanscape' ),
      'before_widget' => '<section class="home-two-sidebar">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>',
    ]);  

    register_sidebar([
      'name'          => esc_html__( 'Main Sidebar', 'Sanscape' ),
      'id'            => 'main-sidebar',
      'description'   => esc_html__( 'Add widgets for main sidebar here', 'Sanscape' ),
      'before_widget' => '<section>',
      'after_widget'  => '</section>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>',
    ]);  
    register_sidebar([
        'name'          => esc_html__( 'Footer Main', 'Sanscape' ),
        'id'            => 'footer-main',
        'description'   => esc_html__( 'Add widgets for Footer position one', 'Sanscape' ),
        'before_widget' => '<section>',
        'after_widget'  => '</section>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
      ]);  
  }
  add_action( 'widgets_init', 'sanscape_widgets_init' );

