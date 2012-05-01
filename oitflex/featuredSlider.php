<?php
/**
 * Template Name: Feature Slider Template
 * Description: A Page Template that displays a full-width slider of all images attached to the page.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(oneCol); ?>

		<div id="primary">
			
			<?php get_page ($page_id); ?>
			 <?php echo do_shortcode('[portfolio_slideshow id=' . $page_id . ']'); ?>
             
             <div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->


<?php get_footer(); ?>