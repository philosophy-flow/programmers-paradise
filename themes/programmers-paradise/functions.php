<?php

// Initialize Timber
include get_template_directory() . '/includes/timber.php';

// Initialize custom blocks
include get_template_directory() . '/includes/blocks.php';

function register_pp_theme_support() {
  add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'register_pp_theme_support');

function register_pp_menus() {
  register_nav_menus(array(
    'header-menu' => 'Header Menu'
  ));
}
add_action('init', 'register_pp_menus');

function register_pp_styles() {
  wp_enqueue_style(
    'pp-fonts',
    'https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,300;0,700;1,400&display=swap',
    array(),
    '1.0',
    'all'
  );

  $version = rand(111,9999);
  wp_enqueue_style(
    'pp-custom-styles',
    get_stylesheet_uri(),
    array('pp-fonts'),
    $version,
    'all'
  );
}
add_action('wp_enqueue_scripts', 'register_pp_styles');

function register_pp_scripts() {
  $version = rand(111,9999);
  wp_enqueue_script(
    'pp_scripts',
    get_template_directory_uri() . '/assets/build/index.js',
    array(),
    $version,
    true
  );
}
add_action('wp_enqueue_scripts', 'register_pp_scripts');

