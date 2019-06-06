<?php
/**
 * The admin dashboard settings.
 *
 * Administration Page - JoeD Designer Website Options
 *
 * @package joed_designer
 */

function joed_designer_add_admin_page() {

  // Generate Site Options Admin Page
  add_menu_page(
    'JoeD Designer Website Options', // Page heading
    'Site Options', // Menu bar title
    'manage_options', // User role
    'joed-site-options', // Slug
    'joed_site_options_page', // Callback function
    'dashicons-welcome-widgets-menus', // Dashicon or custom icon path
    110 // Menu bar position
  );

  // Generate Site Options Admin Sub Pages
  add_submenu_page(
    'joed-site-options', // Slug
    'JoeD Designer Website Options', // Page title
    'Settings', // Menu bar title
    'manage_options', // User role
    'joed-site-options', // Subpage slug
    'joed_site_options_page', // Callback function
  );

  // Generate Site Options Admin Sub Pages
  add_submenu_page(
    'joed-site-options', // Slug
    'JoeD Designer Website Styles', // Page title
    'Styles', // Menu bar title
    'manage_options', // User role
    'joed-site-options-styles', // Subpage slug
    'joed_site_options_styles_page', // Callback function
  );

  // Activate

}
add_action( 'admin_menu', 'joed_designer_add_admin_page' );


function joed_site_options_page() {
  require_once( get_template_directory() . '/functions/templates/admin-template.php' );
}


function joed_site_options_styles_page() {
  echo '<h1>Site Options Styles</h1>';
}
