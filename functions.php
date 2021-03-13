<?php

/**
 * Theme functions
 * 
 * @package Victory
 */

// Add dynamic title
add_theme_support('title-tag');

function victory_register_styles() {
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style( "style-css", get_template_directory_uri() . "/assets/css/templatemo-style.css", ['bootstrap-css', 'bootstrap-theme-css'], $version, "all");

    wp_enqueue_style( "bootstrap-css", get_template_directory_uri() . "/assets/css/bootstrap.min.css", [], false, "all");

    wp_enqueue_style( "bootstrap-theme-css", get_template_directory_uri() . "/assets/css/bootstrap-theme.min.css", [], false, "all");

    wp_enqueue_style( "fontAwesome-css", get_template_directory_uri() . "/assets/css/fontAwesome.css", [], false, "all");

    wp_enqueue_style( "hero-slider-css", get_template_directory_uri() . "/assets/css/hero-slider.css", [], false, "all");

    wp_enqueue_style( "owl-carousel-css", get_template_directory_uri() . "/assets/css/owl-carousel.css", [], false, "all");


}

add_action('wp_enqueue_scripts', 'victory_register_styles');


function victory_register_scripts() {

    wp_enqueue_script( 'main-js', get_template_directory_uri() . "/assets/js/main.js", ['jquery'], '1.0', true );
    
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . "/assets/js/vendor/bootstrap.min.js", [], false, true );

    wp_enqueue_script( 'plugins-js', get_template_directory_uri() . "/assets/js/plugins.js", [], false, true );

    wp_enqueue_script( 'modern-js', get_template_directory_uri() . "/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js", [], false, true );

}

add_action('wp_enqueue_scripts', 'victory_register_scripts');


?>