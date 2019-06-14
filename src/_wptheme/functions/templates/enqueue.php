<?php
 /*

  @package joed_designer

  ===========================
  ADMIN.PHP ENQUEUE FUNCTIONS
  ===========================

 **/

function joed_designer_load_admin_scripts() {
  wp_register_style(
    'joed_designer_admin', // Handle
    get_template_directory_uri() . '/style.css', // src
    array(), // Deps
    '1.0.0', // Version
    'all' // Media
  );

  wp_enqueue_style(
    'joed_designer_admin',
    get_template_directory_uri() . '/style.css'
  );
}
add_action('admin_enqueue_scripts', 'joed_designer_load_admin_scripts');
