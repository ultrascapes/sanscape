<?php

// Add Theme Support

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

//This is not working
//add_theme_support( 'post_formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
//

add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widget' );
add_theme_support( 'starter-content' );

// Load in CSS
function sanscape_enqueue_styles() {
    //Change time() to version number when in production
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' ); 
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/dist/app.css', [], time(), 'all' ); 
}
add_action( 'wp_enqueue_scripts', 'sanscape_enqueue_styles' );
/*
function scripts()
{
  wp_register_style('style', get_template_directory_uri(), '/dist/app.css', [], 1, 'all');
  wp_enqueue_style('style');
  wp_register_script('app', get_template_directory_uri(), '/dist/app.js', [], 1, true);
  wp_enqueue_script('app');
}
add_action('wp_enqueue_scripts', 'scripts');
*/


// Register Menu Locations
register_nav_menus( [
    'main-menu' => esc_html__( 'Main Menu', 'sanscape' ),
    'footer-menu' => esc_html__( 'Footer Menu', 'sanscape' )
]);

// Setup Widget Areas
function sanscape_widgets_init() {
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
        'name'          => esc_html__( 'Footer One', 'Sanscape' ),
        'id'            => 'footer-one',
        'description'   => esc_html__( 'Add widgets for Footer position one', 'Sanscape' ),
        'before_widget' => '<section>',
        'after_widget'  => '</section>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
      ]);  
      register_sidebar([
        'name'          => esc_html__( 'Footer Two', 'Sanscape' ),
        'id'            => 'footer-two',
        'description'   => esc_html__( 'Add widgets for Footer position two', 'Sanscape' ),
        'before_widget' => '<section>',
        'after_widget'  => '</section>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
      ]);  
      register_sidebar([
        'name'          => esc_html__( 'Footer Three', 'Sanscape' ),
        'id'            => 'footer-three',
        'description'   => esc_html__( 'Add widgets for Footer position three', 'Sanscape' ),
        'before_widget' => '<section>',
        'after_widget'  => '</section>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
      ]);  
      register_sidebar([
        'name'          => esc_html__( 'Footer Four', 'Sanscape' ),
        'id'            => 'footer-four',
        'description'   => esc_html__( 'Add widgets for Footer position four', 'Sanscape' ),
        'before_widget' => '<section>',
        'after_widget'  => '</section>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
      ]);
  }
  add_action( 'widgets_init', 'sanscape_widgets_init' );

