<?php
add_filter( 'show_admin_bar', '__return_false' );
//
add_theme_support( 'menus' );
add_theme_support('post-thumbnails');
// Dependencias
add_action( 'wp_enqueue_scripts', 'dependencias' );
function dependencias() {
  wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/node_modules/slick-slider/slick/slick.css');
  wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css');
  wp_enqueue_style( 'app-styles', get_template_directory_uri() . '/assets/css/app.css');
  wp_enqueue_style( 'wp-styles', get_template_directory_uri() . '/style.css');
  //
  wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.js', array('jquery'));
  wp_enqueue_script( 'images-script', get_template_directory_uri() .'/js/imgLiquid-min.js', array('jquery') );
  wp_enqueue_script( 'slider-script', get_template_directory_uri() .'/node_modules/slick-slider/slick/slick.min.js', array('jquery') );
  // wp_enqueue_script( 'imgLiquid', get_template_directory_uri() . '/bower_components/imgLiquid/js/imgLiquid-min.js', array('jquery') );
  // wp_enqueue_script( 'parallax', get_template_directory_uri() . '/bower_components/parallax.js/parallax.js', array('jquery') );
  wp_enqueue_script( 'app-js', get_template_directory_uri() . '/assets/js/app.prod.js', array('jquery'));
}
// menus
add_action( 'init', 'menus' );
function menus() {
  register_nav_menu('desktop-menu',__( 'Menú Escritorio' ));
  register_nav_menu('mobile-menu',__( 'Menú Móvil' ));
}
// CPTs
include_once "cpts/slider-home.php";
