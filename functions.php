<?php
add_filter( 'show_admin_bar', '__return_false' );
//
add_theme_support( 'custom-logo', array('header-text' => array('Coello Trejo', 'Abogados')) );
add_theme_support( 'menus' );
add_theme_support('post-thumbnails');
// Dependencias
add_action( 'wp_enqueue_scripts', 'dependencias' );
function dependencias() {
  wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/node_modules/slick-slider/slick/slick.css');
  wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/node_modules/slick-slider/slick/slick-theme.css');
  wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css');
  wp_enqueue_style( 'app-styles', get_template_directory_uri() . '/assets/css/app.css');
  wp_enqueue_style( 'wp-styles', get_template_directory_uri() . '/style.css');
  //
  wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.js', array('jquery'));
  wp_enqueue_script( 'slider-script', get_template_directory_uri() .'/node_modules/slick-slider/slick/slick.min.js', array('jquery') );
  wp_enqueue_script( 'app-js', get_template_directory_uri() . '/assets/js/app.prod.js', array('jquery'));
}
// menus
add_action( 'init', 'menus' );
function menus() {
  register_nav_menus(
    array(
      'desktop-menu' => __( 'Menú Escritorio' ),
      'mobile-menu' => __( 'Menú Móvil' )
    )
  );
}
//
function remove_backend_menus() {
  remove_menu_page('edit-comments.php');          //Comments
  remove_menu_page('edit.php');                   //Posts
  // remove_menu_page('upload.php');                 //Media
	// remove_menu_page( 'index.php' );                  //Dashboard
	// remove_menu_page( 'jetpack' );                    //Jetpack*
	// remove_menu_page( 'edit.php?post_type=page' );    //Pages
	// remove_menu_page( 'themes.php' );                 //Appearance
	// remove_menu_page( 'plugins.php' );                //Plugins
	// remove_menu_page( 'users.php' );                  //Users
	// remove_menu_page( 'tools.php' );                  //Tools
	// remove_menu_page( 'options-general.php' );     //Settings
}
add_action('admin_menu','remove_backend_menus');
// CPTs
include_once "cpts/slider-home.php";
include_once "cpts/asesoria-juridica.php";
include_once "cpts/abogados.php";
