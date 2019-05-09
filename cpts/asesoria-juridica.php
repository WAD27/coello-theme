<?php
function asesorias() {
  // etiquetas backend
  $labels = array(
    'name'                => _x( 'Asesorias', 'Post Type General Name', 'coello-theme' ),
    'singular_name'       => _x( 'Asesoria', 'Post Type Singular Name', 'coello-theme' ),
    'menu_name'           => __( 'Asesoria Jurídica', 'coello-theme' ),
    'parent_item_colon'   => __( 'Asesoria padre', 'coello-theme' ),
    'all_items'           => __( 'Todos los Asesorias', 'coello-theme' ),
    'view_item'           => __( 'Ver Asesoria', 'coello-theme' ),
    'add_new_item'        => __( 'Agrega Asesoria', 'coello-theme' ),
    'add_new'             => __( 'Nuevo Asesoria', 'coello-theme' ),
    'edit_item'           => __( 'Edita Asesoria', 'coello-theme' ),
    'update_item'         => __( 'Actualiza Asesoria', 'coello-theme' ),
    'search_items'        => __( 'Busca Asesoria', 'coello-theme' ),
    'not_found'           => __( 'No existe', 'coello-theme' ),
    'not_found_in_trash'  => __( 'No existe en la basura', 'coello-theme' ),
  );

  // Set other options for Custom Post Type

  $args = array(
    'label'               => __( 'Asesorias', 'coello-theme' ),
    'description'         => __( 'Asesorias Inicio Coello Trejo', 'coello-theme' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'thumbnail'),
    'menu_icon'           => 'dashicons-welcome-learn-more',
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
  register_post_type( 'asesorias-cpt', $args );

}

add_action( 'init', 'asesorias', 0 );
