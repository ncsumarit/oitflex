<?php
/**
 * Template Name: Slider Template
 * Description: A Page Template that displays a small slider of all images attached to the page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(noBanner); ?>

		<div id="primary">
			<div id="content" role="main">

			 <?php get_page ($page_id); ?>
			 <?php echo do_shortcode('[portfolio_slideshow id=' . $page_id . ']'); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	
        
<?php get_footer(); ?>