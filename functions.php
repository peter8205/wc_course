<?php
/**
 * petoBear lab functions and definitionws
 *
 * @link https://developer.wordpress.org/themes/basics/theme-function
 *
 * @package petoBear Lab
 */

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'petoBear_lab_woocommerce_header_add_to_cart_fragment' );

function petoBear_lab_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}


function petoBear_lab_scripts() {
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array('jquery'), '5.0.0', true );
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '5.0.0', 'all' );
	wp_enqueue_style('petoBear-lab-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all');
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Rajdhani:400,500,600,700|https://fonts.googleapis.com/css?family=Seaweed+Script' );

		// Flexslider Javascript and CSS files
	wp_enqueue_script( 'flexslider-min-js', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '', true );
	wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/inc/flexslider/flexslider.css', array(), '', 'all' );
	wp_enqueue_script( 'flexslider-js', get_template_directory_uri() . '/inc/flexslider/flexslider.js', array( 'jquery' ), '', true );
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

	add_theme_support( 'custom-logo', array(
			'height' 		=> 85,
			'width'			=> 160,
			'flex_height'	=> true,
			'flex_width'	=> true,
		) );


	if ( ! isset( $content_width ) ) {
	$content_width = 600;
	}
}
add_action( 'after_setup_theme', 'petoBear_lab_config', 0 );
//vystrihni vsetko co tu bolo ctrl + s nahrad riadkom dole 
require get_template_directory() . '/inc/wc-modifications.php';

require_once get_template_directory() . '/inc/customizer.php';