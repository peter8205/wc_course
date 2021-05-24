<?php
/**
 * The Template for display all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-hierarchy
 *
 * @package PetoBear
 */
?>
<?php get_header(); ?>	
		<div class="content-area">
			<main>
				<section class="lab-blog">
					<div class="container">
						<div class="row">
							<?php 
								if(have_posts()):
									while( have_posts() ): the_post();
									?>
										<article>
											<h2> <?php  the_title(); ?> </h2>
											<div> <?php  the_content(); ?> </div>
										</article>
									<?php	
									endwhile;
								else:
									?>
											<p>Nothing to display.</p>
									<?php 
								endif;
							 ?>
						</div>
					</div>
				</section>
			</main>
		</div>
<?php get_footer(); ?>	
