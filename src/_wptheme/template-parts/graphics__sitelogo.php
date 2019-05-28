<?php
/**
 * Website graphics - main logo template part, displays at the top of page above the site header
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package joed_designer
 */
?>


<div class="site-logo">
  <a href="<?php bloginfo('url'); ?>" class="site-logo__link">
    <div class="thelogo" style="background: url(<?php echo esc_url( get_field('joed__site_logo') ); ?>) center/contain no-repeat"></div>
  </a>
</div>
