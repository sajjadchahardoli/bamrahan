<?php

function bamrahan_register_styles()
{
	wp_enqueue_style('tailwind', get_template_directory_uri() . '/assets/css/tailwind.css', array(), 'all');
}

add_action('wp_enqueue_scripts', 'bamrahan_register_styles');
