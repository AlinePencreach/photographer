<?php

function charles_cantin_register_assets()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script(
        'charles_cantin_js',
        get_template_directory_uri() . '/js/app.js'
    );
    wp_enqueue_style(
        'charles_cantin_css',
        get_template_directory_uri() . '/css/style.css'
    );
}

add_action('wp_enqueue_scripts', 'charles_cantin_register_assets');



/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

wp_nav_menu( array(
    'theme_location'  => 'main',
    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse text-end me-xl-5 position-lg-absolute',
    'container_id'    => 'navbarSupportedContent',
    'menu_class'      => 'navbar-nav',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
) );

function charles_cantin_register_post_types() {
	
    // CPT prestations
    $labels = array(
        'name' => 'Prestations',
        'all_items' => 'Toutes les prestations',  // affiché dans le sous menu
        'singular_name' => 'Prestation',
        'add_new_item' => 'Ajouter une prestation',
        'edit_item' => 'Modifier la prestation',
        'menu_name' => 'Prestations'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'custom-fields'),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-products',
	);

	register_post_type( 'Prestations', $args );
}
add_action( 'init', 'charles_cantin_register_post_types' ); // Le hook init lance la fonction

