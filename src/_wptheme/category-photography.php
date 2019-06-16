<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package joed_designer
 */

get_header();
?>

	<div id="primary" class="archive content-area">
		<header class="page-header">
			<?php
			the_archive_title( '<h2 class="page-title">', '</h2>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</header><!-- .page-header -->

		<main id="main" class="site-main">
		<?php if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'title-and-thumbnail-only' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<h1>I AM CATEGORY-PHOTOGRAPHY.PHP</h1>

<?php
get_sidebar();
get_footer();
