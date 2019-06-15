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

    foreach ( $categories as $category ) {
      printf( '<li class="cat-item"><a href="%1$s">%2$s</a>&nbsp;(%3$s)</li>',
          esc_url( get_category_link( $category->term_id ) ),
          esc_html( $category->name ),
          esc_html( $category->count )
      );
    }
  ?>
  </ul>
</div>
