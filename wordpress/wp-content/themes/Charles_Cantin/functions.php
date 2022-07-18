<?php

function charles_cantin_register_assets()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script(
        'charles_cantin_js',
        get_template_directory_uri().'/js/app.js'
    );
    wp_enqueue_style(
        'charles_cantin_css',
        get_template_directory_uri().'/css/style.css'
    );
}




add_action('wp_enqueue_scripts', 'charles_cantin_register_assets');
