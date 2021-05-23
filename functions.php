<?php
/**
 * PetoBear lab functions and definitionws
 *
 * @link https://developer.wordpress.org/themes/basics/theme-function
 *
 * @package PetoBear Lab
 */

function petoBear_lab_scripts() {						//'1.0', 
	wp_enqueue_style('petoBear-lab-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all');
}
add_action('wp_enqueue_scripts', 'petoBear_lab_scripts');