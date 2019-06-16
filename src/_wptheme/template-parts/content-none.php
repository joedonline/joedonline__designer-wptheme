<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package joed_designer
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h2 class="page-title coming-soon"><?php esc_html_e( 'Coming Soon', 'joed_designer' ); ?></h2>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'joed_designer' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'joed_designer' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p class="page-content coming-soon"><?php esc_html_e( 'It seems the post you&rsquo;re looking for is not here or I&rsquo;m still working on it or possibly updating the files. Come back again soon.', 'joed_designer' ); ?></p>
			<?php

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
