<?php

function load_styles_scripts() {
	wp_enqueue_style( 'webrds_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'webrds_style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all' );
	wp_enqueue_script( 'webrds_script', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'load_styles_scripts' );

add_theme_support( 'post-thumbnails' );

remove_action( 'wp_head', 'wp_generator' ) ;
remove_action( 'wp_head', 'wlwmanifest_link' ) ;
remove_action( 'wp_head', 'rsd_link' ) ;

function mostrar_subcategorias_services($id_categoria_padre) {
  $args = array(
    'child_of' => $id_categoria_padre,
    'hide_empty' => 0
  );

  $subcategorias = get_categories($args);

  if ($subcategorias) {
    foreach ($subcategorias as $subcategoria) {
      echo '<article class="col-6 col-md-4">';
      echo '<a href="' . get_category_link($subcategoria->term_id) . '">';
      echo '<img src="'. z_taxonomy_image_url($subcategoria->term_id) .'" class="img">';
      echo '<h3 class="name">' . $subcategoria->name . '</h3>';
      echo '</a>';
      echo '</article>';
    }
  } else {
    echo 'No hay subcategorías para esta categoría padre.';
  }
}

function mostrar_submenu($id_categoria_padre) {
  $args = array(
    'child_of' => $id_categoria_padre,
    'hide_empty' => 0
  );
  $subcategorias = get_categories($args);

  if ($subcategorias) {
    foreach ($subcategorias as $subcategoria) {
      echo '<li class="nav-item">';
      echo '<a class="dropdown-item" href="' . get_category_link($subcategoria->term_id) . '">';
      echo $subcategoria->name ;
      echo '</a>';
      echo '</li>';
    }
  } else {
    echo 'No hay subcategorías para esta categoría padre.';
  }
}

function mostrar_submenu_footer($id_categoria_padre) {
  $args = array(
    'child_of' => $id_categoria_padre,
    'hide_empty' => 0
  );
  $subcategorias = get_categories($args);

  if ($subcategorias) {
    foreach ($subcategorias as $subcategoria) {
      echo '<li class="nav-item">';
      echo '<a href="' . get_category_link($subcategoria->term_id) . '">';
      echo $subcategoria->name ;
      echo '</a>';
      echo '</li>';
    }
  } else {
    echo 'No hay subcategorías para esta categoría padre.';
  }
}

function mostrar_subcategorias_guide($id_categoria_padre) {
  $args = array(
    'child_of' => $id_categoria_padre,
    'hide_empty' => 0
  );

  $subcategorias = get_categories($args);

  if ($subcategorias) {
    foreach ($subcategorias as $subcategoria) {
      echo '<article class="col-10 col-md-4">';
      echo '<a href="' . get_category_link($subcategoria->term_id) . '">';
      echo '<img src="'. z_taxonomy_image_url($subcategoria->term_id) .'" class="img">';
      echo '<h3 class="name">' . $subcategoria->name . '</h3>';
      echo '</a>';
      echo '</article>';
    }
  } else {
    echo 'No hay subcategorías para esta categoría padre.';
  }
}

function theme_register_nav_menu(){
  register_nav_menus( array(
    'primary_menu' => __( 'Principal', 'text_domain' ),
    'footer_menu'  => __( 'Secundario', 'text_domain' ),
  ) );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu', 0 );



function add_a_class($atts, $item, $args) {
    $atts['class'] = 'nav-link';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_a_class', 1, 3);

?>