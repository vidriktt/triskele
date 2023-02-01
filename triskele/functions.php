<?php

function add_jquery()
{
   if (!is_admin()) {
      wp_deregister_script('jquery');
      wp_register_script('jquery', get_template_directory_uri() . '/assets/jquery/jquery.min.js');
      wp_enqueue_script('jquery');
   }
}
add_action('init', 'add_jquery');

function add_css()
{
   wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.css');
   wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.css');
   wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
   wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.bundle.min.js');
   wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/assets/jquery-easing/jquery.easing.min.js');
   wp_enqueue_script('grayscale', get_template_directory_uri() . '/assets/js/grayscale.js');
}
add_action('wp_enqueue_scripts', 'add_script');
