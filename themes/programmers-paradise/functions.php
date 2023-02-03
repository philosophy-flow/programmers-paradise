<?php

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

  $version = wp_get_theme()->get('Version');
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
  wp_enqueue_script(
    'pp_scripts',
    get_template_directory_uri() . '/assets/build/index.js',
    array(),
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'register_pp_scripts');

function register_pp_acf_blocks() {
  // Testimonial
  acf_register_block_type(array(
    'name'              => 'testimonial',
    'title'             => __('Testimonial'),
    'description'       => __('A custom testimonial block.'),
    'render_template'   => 'blocks/testimonial/testimonial.php',
    'category'          => 'formatting',
  ));

  // Banner
  acf_register_block_type(array(
    'name'              => 'banner',
    'title'             => __('Banner'),
    'description'       => __('A page banner.'),
    'render_template'   => 'blocks/banner/banner.php',
    'category'          => 'layout',
    'icon' => 'cover-image',
    'mode'  => 'edit',
    'supports'          => array(
      'align' => false,
      'mode' => false
    )
  ));
}
add_action('acf/init', 'register_pp_acf_blocks');
