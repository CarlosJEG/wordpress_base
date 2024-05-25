<?php 

function custom_post_type_support() {
  add_post_type_support('page', 'excerpt'); 
}

function my_styles() {
  $version_css = date('YmdHis');
  wp_enqueue_style('bootstrap_style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), $version_css, 'all');
  wp_enqueue_style('my_style', get_template_directory_uri().'/style.css', array(), $version_css, 'all');
}

function my_scripts() {
  $version_css = date('YmdHis');
  wp_enqueue_script('bootstrap_script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), $version_css, true);
  wp_enqueue_script('my_script', get_template_directory_uri().'/javascript.js', array(), $version_css, true);
}

add_action('wp_enqueue_scripts', 'my_styles');
add_action('wp_enqueue_scripts', 'my_scripts');

add_theme_support('post-thumbnails');
add_action('init', 'custom_post_type_support');

?>
