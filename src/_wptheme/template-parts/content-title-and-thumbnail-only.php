<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package joed_designer
 */

?>

<?php
		$articleBgStyles = 'background: url('.get_the_post_thumbnail_url().') center/48%;'
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="<?php echo $articleBgStyles; ?>">
		<div class="post-wrapper__outer">
					<div class="post-wrapper__inner">
							<?php joed_designer_post_thumbnail(); ?>

							<header class="entry-header">
									<?php
									if ( is_singular() ) :
										the_title( '<h1 class="entry-header__title">', '</h1>' );
									else :
										the_title( '<h2 class="entry-header__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
									endif;

									if ( 'post' === get_post_type() ) :
									?><?php
									endif; ?>
							</header><!-- .entry-header -->
					</div><!-- .post-wrapper -->

					<footer class="entry-footer">
							<a href="<?php the_permalink(); ?>" class="entry-footer__permalink">View work</a>
					</footer>
		</div><!-- .post-wrapper__outer -->
</article><!-- #post-<?php the_ID(); ?> -->
