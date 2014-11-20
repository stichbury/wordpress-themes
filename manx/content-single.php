<?php
/**
 * @package GovPress
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'govpress' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	

	<footer class="entry-meta">
		<ul class="entry-meta-taxonomy">
			<?php
				$categories =  wp_get_post_categories( get_the_ID() );
				foreach ( $categories as $category ) {
					$cat = get_category( $category );
					echo '<li class="category-link"><a href="' . get_category_link( $cat->cat_ID ) . '">' . $cat->name . '</a></li>';
				}
			?>
			<?php echo get_the_tag_list('<li class="tag-link">','</li><li>','</li>'); ?>
			
		</ul>
	</footer><!-- .entry-meta -->
</article><!-- #post-# -->
