<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function montheme_supports()
{
    add_theme_support('menu');
    register_nav_menu('header', 'en tête menu');
}
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent twenty twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', );
}