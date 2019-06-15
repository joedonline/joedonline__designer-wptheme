<?php
/**
 * Post categories - template part
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package joed_designer
 */
?>


<div class="site-header__categories">
  <ul class="cat">
  <?php
    $args = array(
      'parent'  => 0,
      'hide_empty' => 0,
    );

    $categories = get_categories( $args );
    $term = get_queried_object();

    function termSlugHelper( $category, $term ) {
      if ( $category->term_id == $term->term_id ) {
        return $term->slug;
      }
      return -1;
    }

    foreach ( $categories as $category ) {
      printf( '<li class="cat-item"><a href="%1$s" aria-current="%4$s">%2$s</a>&nbsp;&nbsp;<sub>%3$s</sub></li>',
          esc_url( get_category_link( $category->term_id ) ),
          esc_html( $category->name ),
          esc_html( $category->count ),
          esc_html( termSlugHelper( $category, $term ) )
      );
    }
  ?>
  </ul>
</div>
