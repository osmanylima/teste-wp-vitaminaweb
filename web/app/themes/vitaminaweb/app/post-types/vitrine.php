<?php
  add_action('init', 'type_post_slider');

  function type_post_slider() { 
    $labels = array(
      'name' => _x('Vitrine', 'post type general name'),
      'singular_name' => _x('Vitrine', 'post type singular name')
    );

    $args = array(
      'labels' => $labels,
      'public' => true,            
      'supports' => array('title', 'custom-fields'),
      'has_archive' => true,
      'menu_position' => 2,
      'menu_icon' => 'dashicons-slides',
      'rewrite' => array (
        'slug' => 'vitrine',
      ),
    );

    register_post_type('vitrine', $args);
    flush_rewrite_rules();  
  }
