<?php
/**
 * Wrapper function for querying custom post types that implements Advanced Custom Fields plugin.
 * NOTE -- requires a custom template part.
 *
 * @link https://github.com/joedonline/joedonline__designer-wptheme
 *
 * @package joed_designer
 */


function cpt_query__while($postType, $postStatus, $postsPerPage, $templatePart, $message) {
  $joed__args = array(
    'post_type' => $postType,
    'post_status' => $postStatus,
    'posts_per_page' => $postsPerPage
  );

  $joed__Query = new WP_Query( $joed__args );
  if ( $joed__Query->have_posts() ) :
    while ( $joed__Query->have_posts() ) : $joed__Query->the_post();

      get_template_part( $templatePart, get_post_type() );

    endwhile;
    wp_reset_postdata();
  else : ?>
    <p>_e( $message, 'joed_designer' ); ?></p>
    <?php
  endif;
}
