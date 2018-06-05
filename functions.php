<?php

function FACS_script_enqueue() {
	//css
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0','all');
	//js
	wp_enqueue_script('jquery');
	wp_enqueue_script('customjs', get_template_directory_uri(). 'js/custom.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts','FACS_script_enqueue');


function FACS_theme_setup() {

	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secoundary', 'Footer Navigation');
}

add_action('init', 'FACS_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));
add_theme_support('html5', array('search-form'));

?>