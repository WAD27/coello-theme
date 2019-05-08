<?php
add_filter( 'show_admin_bar', '__return_false' );
//
add_theme_support( 'menus' );
add_theme_support('post-thumbnails');
// Dependencias
add_action( 'wp_enqueue_scripts', 'dependencias' );
function dependencias() {
  // wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/bower_components/slick-carousel/slick/slick.css');
  // wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/bower_components/slick-carousel/slick/slick-theme.css');
  wp_enqueue_style( 'app-styles', get_template_directory_uri() . '/assets/css/app.css');
  wp_enqueue_style( 'wp-styles', get_template_directory_uri() . '/style.css');
  //
  // wp_enqueue_script( 'jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.js' );
  // wp_enqueue_script( 'slick-carousel', get_template_directory_uri() .'/bower_components/slick-carousel/slick/slick.js', array('jquery') );
  // wp_enqueue_script( 'imgLiquid', get_template_directory_uri() . '/bower_components/imgLiquid/js/imgLiquid-min.js', array('jquery') );
  // wp_enqueue_script( 'parallax', get_template_directory_uri() . '/bower_components/parallax.js/parallax.js', array('jquery') );
  wp_enqueue_script( 'app-js', get_template_directory_uri() . '/assets/js/app.prod.js', array('jquery'));

  // wp_localize_script('app-master','ajax',array('ajax_url'=> admin_url( 'admin-ajax.php' )));

}
