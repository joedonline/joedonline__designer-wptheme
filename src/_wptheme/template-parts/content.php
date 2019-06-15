<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package joed_designer
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<!-- done on purpose - entry_footer() switched with posted_on() and posted_by() -->
				<?php joed_designer_entry_footer(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php joed_designer_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		if ( !is_single() ) {
				the_excerpt();
		} else {
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'joed_designer' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );
		}


		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'joed_designer' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<!-- done on purpose - entry_footer() switched with posted_on() and posted_by() -->
		<?php
		joed_designer_posted_on();
		joed_designer_posted_by();
		?>
	</footer><!-- .entry-footer -->

	<?php
	if ( !is_single() ) {
			get_template_part( 'template-parts/content', 'read-more' );
	}
	?>
</article><!-- #post-<?php the_ID(); ?> -->
