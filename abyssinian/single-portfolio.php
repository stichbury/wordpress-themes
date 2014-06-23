<?php
/**
 * The Template for displaying single portfolio custom post types.
 *
 * @package Onesie Pro
 * @since Onesie Pro 1.0
 */

get_header(); ?>

	<section id="primary">

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<!-- JCS Override of parent theme to add extra nav above the images -->
					<?php onesie_pro_content_nav( 'nav-below' ); ?> 
					<?php do_action( 'onesie_pro_before_title' ); ?>
					<?php if ( is_singular() ) { ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php } else { ?>
						<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php esc_attr( sprintf( __( 'Permalink to %s', 'onesie_pro' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<?php } ?>
					<?php do_action( 'onesie_pro_after_title' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>

				</div><!-- .entry-content -->

				<?php get_template_part( 'entry', 'footer' ); ?>

			</article><!-- #post-<?php the_ID(); ?> -->

			<?php onesie_pro_content_nav( 'nav-below' ); ?>

			<?php comments_template( '', true ); ?>

		<?php endwhile; // end of the loop. ?>

	</section><!-- #primary -->

<?php get_footer(); ?>