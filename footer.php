<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="supplementary">
				<?php do_action( 'twentyeleven_credits' ); ?>
				<div>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> | <a href="http://oit.ncsu.edu/itaccess/legislation-and-policies" target="Accessibility Statement">Accessibility</a> | <a href="http://www.ncsu.edu/privacy/" target="Privacy Statement">Privacy</a> | <a href="http://policies.ncsu.edu/" target="University Policies">University Policies</a></div>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>