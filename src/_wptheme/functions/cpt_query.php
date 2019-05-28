<?php
/**
 * Wrapper functions to query custom post types that uses Advanced Custom Fields
 * -- requires a custom template part.
 *
 * @link https://github.com/joedonline
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
      get_template_part( $templatePart );
    endwhile;
    wp_reset_postdata();
  else : ?>
    <p>_e( $message, 'joed_designer' ); ?></p>
    <?php
  endif;
}
