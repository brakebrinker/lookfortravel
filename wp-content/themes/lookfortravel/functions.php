<?php 

function enqueue_styles() {
    wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri(), array('style'));
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/lookfortravel.css');
    wp_enqueue_style( 'style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
    wp_register_script('uikit', get_template_directory_uri() . '/uikit/js/uikit.min.js');
    wp_enqueue_script('uikit');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

// WP-postrating use PNG images instead of GIF images
function custom_rating_image_extension() {
    return 'png';
}
add_filter( 'wp_postratings_image_extension', 'custom_rating_image_extension' );

// theme content file require
require get_parent_theme_file_path( '/theme-functions.php' );

