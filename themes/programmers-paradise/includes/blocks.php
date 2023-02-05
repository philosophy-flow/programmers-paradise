<?php

function register_pp_acf_blocks() {
  // Banner
  acf_register_block_type(array(
    'name'              => 'banner',
    'title'             => __('Banner'),
    'description'       => __('A page banner.'),
    'render_callback' => 'acf_block_render_callback',
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

// This function renders all blocks
function acf_block_render_callback($block, $content = '', $is_preview = false) {
  $context = Timber::context();

  // Store block values.
  $context['block'] = $block;

  // Store field values.
  $context['fields'] = get_fields();

  // Store $is_preview value.
  $context['is_preview'] = $is_preview;


  // Render the block.
  Timber::render('blocks/' . $block['title'] . '.twig', $context);
}
