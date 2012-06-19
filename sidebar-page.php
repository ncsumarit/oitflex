<?php
/**
 * Template Name: Sidebar Template
 * Description: A Page Template that adds a custom sidebar to pages
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

		<div id="secondary" class="widget-area" role="complementary">
			<?php if ( ! dynamic_sidebar( 'sidebar-6' ) ) : ?>

               

            <?php endif; // end sidebar widget area ?>
        </div><!-- #secondary .widget-area -->
<?php get_footer(); ?>