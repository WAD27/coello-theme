<?php
function abogados() {
  // etiquetas backend
  $labels = array(
    'name'                => _x( 'Abogados', 'Post Type General Name', 'coello-theme' ),
    'singular_name'       => _x( 'Abogado', 'Post Type Singular Name', 'coello-theme' ),
    'menu_name'           => __( 'Abogados', 'coello-theme' ),
    'parent_item_colon'   => __( 'Abogado padre', 'coello-theme' ),
    'all_items'           => __( 'Todos los Abogados', 'coello-theme' ),
    'view_item'           => __( 'Ver Abogado', 'coello-theme' ),
    'add_new_item'        => __( 'Agrega Abogado', 'coello-theme' ),
    'add_new'             => __( 'Nuevo Abogado', 'coello-theme' ),
    'edit_item'           => __( 'Edita Abogado', 'coello-theme' ),
    'update_item'         => __( 'Actualiza Abogado', 'coello-theme' ),
    'search_items'        => __( 'Busca Abogado', 'coello-theme' ),
    'not_found'           => __( 'No existe', 'coello-theme' ),
    'not_found_in_trash'  => __( 'No existe en la basura', 'coello-theme' ),
  );

  // Set other options for Custom Post Type

  $args = array(
    'label'               => __( 'Abogados', 'coello-theme' ),
    'description'         => __( 'Abogados  Coello Trejo', 'coello-theme' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'thumbnail'),
    'menu_icon'           => 'dashicons-admin-users',
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
  register_post_type( 'abogados-cpt', $args );

}

add_action( 'init', 'abogados', 0 );
