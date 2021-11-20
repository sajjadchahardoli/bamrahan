<?php

require_once WP_CONTENT_DIR . '/themes/bamrahan/inc/theme-support.php';

function bamrahan_register_styles(){
	wp_enqueue_style('tailwind', get_template_directory_uri() . '/assets/css/tailwind.css', array(), 'all');
    wp_enqueue_style('font-awesome','https://pro.fontawesome.com/releases/v5.10.0/css/all.css', array(), 'all');
    wp_enqueue_style('style',get_template_directory_uri() . '/assets/css/style.css', array(), 'all');
}
add_action('wp_enqueue_scripts', 'bamrahan_register_styles');

function bamrahan_register_script(){
    wp_enqueue_script('navbar', get_template_directory_uri() . '/assets/js/navbar.js', array(), 'all', true);
}
add_action('wp_enqueue_scripts', 'bamrahan_register_script');


// Register a navigation menu location for a theme
function bamrahan_register_nav_menu(){
	register_nav_menu('primary','primary Header Navigation Menu');
	register_nav_menu('secondary','secondary Header Navigation Menu');
}
add_action('after_setup_theme','bamrahan_register_nav_menu');



//Add class on li in nav
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

//Add class on a in nav
function add_additional_class_on_a($classes, $item, $args) {
    if(isset($args->add_a_class)) {
        $classes[] = $args->add_a_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_a', 1, 3);