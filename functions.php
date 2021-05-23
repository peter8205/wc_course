<?php
/**
 * PetoBear lab functions and definitionws
 *
 * @link https://developer.wordpress.org/themes/basics/theme-function
 *
 * @package PetoBear Lab
 */

function PetoBear_lab_scripts() {
	wp_enqueue_style('PetoBear-lab-style', get_stylesheet_uri(), array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'PetoBear_lab_scripts');