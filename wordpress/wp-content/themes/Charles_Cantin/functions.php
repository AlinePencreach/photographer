<?php

function load_styles()
{
    wp_enqueue_style(
        'maincss',
        get_template_directory_uri().'/css/style.css', 
    );
}

function charles_cantin_register_assets()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
}


add_action('wp_enqueue_scripts', 'load_styles', 1);
add_action('wp_enqueue_scripts', 'charles_cantin_register_assets');



