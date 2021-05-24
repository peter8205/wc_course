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
			'petoBear_lab_main_menu' => 'PetoBear Lab Main Menu',
			'petoBear_lab_footer_menu' => 'PetoBear Lab Footer Menu'
		)
	);
add_theme_support('woocommerce', array(
		'thumbnail_image_width' => 255,
		'single_image_width' => 255,
		'product_grid' => array(
			'default_row' => 10,
			'min_row' => 5,
			'max_row' => 10,
			'default_columns' => 2,
			'min_columns' => 1,
			'max_columns' => 4,

		)

	));
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');

	if ( ! isset( $content_width ) ) {
	$content_width = 600;
	}
}
add_action( 'after_setup_theme', 'petoBear_lab_config', 0 );


add_action( 'woocommerce_before_main_content', 'petoBear_open_container_row', 5 );
function petoBear_open_container_row(){
	echo '<div class="container shop-content"><div class="row">';
}

add_action( 'woocommerce_after_main_content', 'petoBear_close_container_row', 5 );
function petoBear_close_container_row(){
	echo '</div></div>';
}

add_action( 'woocommerce_before_main_content', 'petoBear_add_sidebar_tags', 6 );
function petoBear_add_sidebar_tags(){
	echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
}

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );
add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7 );

add_action( 'woocommerce_before_main_content', 'petoBear_close_sidebar_tags', 8 );
function petoBear_close_sidebar_tags(){
	echo '</div>';
}

add_action( 'woocommerce_before_main_content', 'petoBear_add_shop_tags', 9 );
function petoBear_add_shop_tags(){
	echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
}

add_action( 'woocommerce_after_main_content', 'petoBear_close_shop_tags', 4 );
function petoBear_close_shop_tags(){
	echo '</div>';
}