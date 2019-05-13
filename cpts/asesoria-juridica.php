<?php
function asesorias() {
  // etiquetas backend
  $labels = array(
    'name'                => _x( 'Asesorías', 'Post Type General Name', 'coello-theme' ),
    'singular_name'       => _x( 'Asesoría', 'Post Type Singular Name', 'coello-theme' ),
    'menu_name'           => __( 'Asesorías Jurídicas', 'coello-theme' ),
    'parent_item_colon'   => __( 'Asesoría padre', 'coello-theme' ),
    'all_items'           => __( 'Todas las Asesorías', 'coello-theme' ),
    'view_item'           => __( 'Ver Asesoría', 'coello-theme' ),
    'add_new_item'        => __( 'Agrega Asesoría', 'coello-theme' ),
    'add_new'             => __( 'Nueva Asesoría', 'coello-theme' ),
    'edit_item'           => __( 'Edita Asesoría', 'coello-theme' ),
    'update_item'         => __( 'Actualiza Asesoría', 'coello-theme' ),
    'search_items'        => __( 'Busca Asesoría', 'coello-theme' ),
    'not_found'           => __( 'No existe', 'coello-theme' ),
    'not_found_in_trash'  => __( 'No existe en la basura', 'coello-theme' ),
  );

  // Set other options for Custom Post Type

  $args = array(
    'label'               => __( 'Asesorías', 'coello-theme' ),
    'description'         => __( 'Asesorías Jurídicas Coello Trejo', 'coello-theme' ),
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
