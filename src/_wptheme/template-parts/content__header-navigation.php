<?php
/**
 * Site header, navigation - template part
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package joed_designer
 */
?>


<nav id="site-navigation" class="site-navigation">
  <!-- navigation, small screens -->
  <button
    class="menu-toggle"
    style="background: url(<?php echo get_field('icon_hamburger'); ?>) center/contain no-repeat;"
    aria-controls="primary-menu"
    aria-expanded="false">
    <?php esc_html_e( '', 'joed_designer' ); ?>
  </button>

  <!-- navigation menu -->
  <?php
  wp_nav_menu( array(
   'theme_location' => 'menu-1',
   'menu_id'        => 'primary-menu',
  ) );
  ?>
</nav><!-- #site-navigation -->
