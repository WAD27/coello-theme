<?php
function slider() {
  // etiquetas backend
  $labels = array(
    'name'                => _x( 'Slides', 'Post Type General Name', 'coello-theme' ),
    'singular_name'       => _x( 'Slide', 'Post Type Singular Name', 'coello-theme' ),
    'menu_name'           => __( 'Slider Inicio', 'coello-theme' ),
    'parent_item_colon'   => __( 'Slide padre', 'coello-theme' ),
    'all_items'           => __( 'Todos los Slides', 'coello-theme' ),
    'view_item'           => __( 'Ver Slide', 'coello-theme' ),
    'add_new_item'        => __( 'Agrega Slide', 'coello-theme' ),
    'add_new'             => __( 'Nuevo Slide', 'coello-theme' ),
    'edit_item'           => __( 'Edita Slide', 'coello-theme' ),
    'update_item'         => __( 'Actualiza Slide', 'coello-theme' ),
    'search_items'        => __( 'Busca Slide', 'coello-theme' ),
    'not_found'           => __( 'No existe', 'coello-theme' ),
    'not_found_in_trash'  => __( 'No existe en la basura', 'coello-theme' ),
  );

  // Set other options for Custom Post Type

  $args = array(
    'label'               => __( 'Slides', 'coello-theme' ),
    'description'         => __( 'Slides Inicio Coello Trejo', 'coello-theme' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'thumbnail'),
    'menu_icon'           => 'dashicons-format-gallery',
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 2,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );

  // Registra
  register_post_type( 'slider-cpt', $args );

}

add_action( 'init', 'slider', 0 );
