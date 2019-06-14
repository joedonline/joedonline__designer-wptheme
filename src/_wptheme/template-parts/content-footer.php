<?php
/**
 * The website footer template part
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package joed_designer
 */

?>


<div class="site-info">
  <?php $joedurl = get_option('main_website_url'); ?>
  <a href="<?php echo esc_url( __( $joedurl, 'joed_designer' ) ); ?>">
   <?php
   /* translators: %s: CMS name, i.e. WordPress. */
   printf( esc_html__( '&copy; %s', 'joed_designer' ), '2018  |  Joe Domingo' );
   ?>
  </a>

  <?php
  /* translators: 1: Theme name, 2: Theme author. */
  printf( esc_html__( '%1$s %2$s', '' ), '', '<a href="#topofpage">&uarr; Back to top</a>' );
  ?>
</div><!-- .site-info -->
