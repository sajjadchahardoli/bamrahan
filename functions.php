<?php
/*
* Let WordPress manage the document title.
* This theme does not use a hard-coded <title> tag in the document head,
* WordPress will provide it for us.
*/
function bamrahan_setup(){
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'bamrahan_setup');


function bamrahan_register_styles(){
	wp_enqueue_style('tailwind', get_template_directory_uri() . '/assets/css/tailwind.css', array(), 'all');
}
add_action('wp_enqueue_scripts', 'bamrahan_register_styles');


// Register a navigation menu location for a theme
function bamrahan_register_nav_menu(){
	register_nav_menu('primary','primary Header Navigation Menu');
	register_nav_menu('secondary','secondary Header Navigation Menu');
}
add_action('after_setup_theme','bamrahan_register_nav_menu');

//Add custom logo support to your theme
add_theme_support( 'custom-logo'); 
