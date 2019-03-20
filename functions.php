<?php

// Load CSS

function enqueue_style() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'enqueue_style');

// Load fonts

function load_fonts() {
     wp_enqueue_style('Exo', 'https://fonts.googleapis.com/css?family=Exo:500,500i,700,700i&subset=latin-ext');
}
add_action('wp_enqueue_scripts', 'load_fonts');

// Activate featured images
add_theme_support( 'post-thumbnails' );

