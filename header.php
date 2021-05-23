<?php
/**
 * The template for displaying the header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PetoBear
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>

	<div id="page" class="site">
		<header>
			<section class="search">
				<div class="container">
					Search
				</div>
			</section>
			<section class="top-bar">
				<div class="container">
					<div class="row">
						<div class="brand col-3 col-sm-6">Logo</div>
						<div class="second-column col-9 col-sm-6">
							<div class="account">Account</div>
							<nav class="main-menu"></nav>
						</div>
						
					</div>
				</div>
			</section>
		</header>