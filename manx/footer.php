<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package GovPress
 */
?>

		</div><!-- #content -->
	</div><!-- .col-width -->

	<?php
		/*
		 * A sidebar in the footer? Yep. You can can customize
		 * your footer with three columns of widgets.
		 */
		if ( ! is_404() )
			get_sidebar( 'footer' );
	?>

	<?php
	$fclass = 'site-footer no-widgets';
	if ( is_active_sidebar( 'footer-text' ) ) {
		$fclass = 'site-footer widgets';
	} ?>

	<footer class="<?php echo $fclass; ?>" role="contentinfo">
		<div class="col-width">
			<?php if ( is_active_sidebar( 'footer-text' ) ) { ?>
				<div class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'footer-text' ); ?>
				</div>
			<?php } else { ?>
				<?php printf( __( 'Website © The Inner City Centre. All rights reserved. Registered Charity No 1060874 Limited Company No 3316511. Powered by %1$s using %2$s and Manx, developed by %3$s.'), '<a href="http://wordpress.org/" rel="generator">WordPress</a>', '<a href="http://govpress.co/" rel="generator">GovPress</a>', '<a href="https://www.linkedin.com/profile/view?id=431296" rel="generator">Jo Stichbury</a>' ); ?>
			<?php } ?>
		</div><!-- .col-width -->
	</footer><!-- .site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
