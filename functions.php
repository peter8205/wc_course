<?php
/**
 * petoBear lab functions and definitionws
 *
 * @link https://developer.wordpress.org/themes/basics/theme-function
 *
 * @package petoBear Lab
 */
function petoBear_lab_scripts() {
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array('jquery'), '5.0.0', true );
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '5.0.0', 'all' );
	wp_enqueue_style('petoBear-lab-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all');
}
add_action('wp_enqueue_scripts', 'petoBear_lab_scripts');

function petoBear_lab_config(){
	register_nav_menus(
		array(
			'petoBear_lab_main_menu' => 'PetoBear Lab Main Menu'
		)
	);
}
add_action('after_setup_theme', 'petoBear_lab_config', 0);