<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PetoBear
 */
?>
	<section class="footer-widgets">
				<div class="container">
					<div class="row">Footer Widgets</div>
				</div>
			</section>
			<section class="copyright">
				<div class="container">
					<div class="row">
						<div class="copy-right-text col-12 col-md-6">Copyright</div>
						<nav class="footer-menu col-12 cl-md6 text-left text-md-right">
								<?php wp_nav_menu(
									array(
										'thme_location' => 'petoBear_lab_footer_menu'
									)
								); ?>
						</nav>
					</div>
				</div>
			</section>
		</footer>
	</div>
	<?php wp_footer() ?>
</body>
</html>