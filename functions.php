<?php

add_action('wp_enqueue_scripts', function(){

  wp_register_script('yo', get_stylesheet_directory_uri() . '/blah/yo.js', [], '1.0', true);

  wp_localize_script('yo', 'ADMIN_STUFF', [
    'ajax_url' => admin_url('admin-ajax.php'),
    'name' => 'alex'
  ]);

  wp_enqueue_script('blah', get_stylesheet_directory_uri() . '/blah/blah.js', ['yo'], '1.1', true);

});





// plugin land

add_action('wp_enqueue_scripts', function(){

  if(!is_home()){
    wp_deregister_script('blah');
  }

});









