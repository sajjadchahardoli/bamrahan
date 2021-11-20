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

//Add custom logo support to your theme
add_theme_support( 'custom-logo'); 

// Support post thumbnails
add_theme_support( 'post-thumbnails');