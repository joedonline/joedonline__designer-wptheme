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

  // Activate Custom Settings
  add_action( 'admin_init', 'joed_designer_custom_settings' );

}
add_action( 'admin_menu', 'joed_designer_add_admin_page' );


function joed_designer_custom_settings() {
  register_setting(
    'joed_designer-settings-group', // Option group
    'main_website_url', // Option name
  );

  add_settings_section(
    'joed_designer-website-options', // String id
    'Website Options Settings', // String title
    'joed_designer_website_options', // String callback
    'joed-site-options' // String page
  );

  add_settings_field(
    'main-website-url', // Id
    'My Main Website URL', // Title
    'main_website_url', // Callback
    'joed-site-options', // Page
    'joed_designer-website-options', // Section
    // '' // Arguments/parameters
  );
}

function joed_designer_website_options() {
  echo 'Customize your main website settings.';
}

function main_website_url() {
  $mywebsiteurl = esc_attr( get_option( 'main_website_url' ) );
  echo '<input type="text" name="main_website_url" value="'.$mywebsiteurl.'" placeholder="https//yourwebsite.url" />';
}


function joed_site_options_page() {
  require_once( get_template_directory() . '/functions/templates/admin-template.php' );
}


function joed_site_options_styles_page() {
  echo '<h1>Site Options Styles</h1>';
}
