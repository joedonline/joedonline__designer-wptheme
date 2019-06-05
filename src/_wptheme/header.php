<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package joed_designer
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">

		<!-- SITE SOCIAL -->
		<ul class="connect">
				<?php cpt_query__while(
												'joed_socialconnect', // $postType
												'publish', // $postStatus
												'-1', // $postsPerPage
												'template-parts/content__social-connect', // $templatePart
												'Sorry, no posts matched your criteria.' // $message
										);
				?>
		</ul>

		<!-- SITE BRANDING -->
		<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$joed_designer_description = get_bloginfo( 'description', 'display' );
				if ( $joed_designer_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $joed_designer_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
		</div><!-- .site-branding -->

		<!-- SITE LOGO -->
		<?php cpt_query__while(
										'joed_sitegraphics', // $postType
										'publish', // $postStatus
										'-1', // $postsPerPage
										'template-parts/graphics__sitelogo', // $templatePart
										'Sorry, no posts matched your criteria.' // $message
								);
		?>

		<!-- SITE HEADER, CATEGORIES -->
		<?php cpt_query__while(
										'post', // $postType
										'publish', // $postStatus
										'-1', // $postsPerPage
										'template-parts/content__header-categories', // $templatePart
										'Sorry, no categories found.' // $message
								);
		?>

		<!-- SITE HEADER, NAVIGATION -->
		<?php cpt_query__while(
										'joed_sitegraphics', // $postType
										'publish', // $postStatus
										'-1', // $postsPerPage
										'template-parts/content__header-navigation', // $templatePart
										'Sorry, no navigation items found.' // $message
								);
		?>


	</header><!-- #masthead -->

	<div id="content" class="site-content">
