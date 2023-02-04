<?php 

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