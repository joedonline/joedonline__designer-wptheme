<?php
/*
 * @package joed_designer
 *
 * =======================
 * ADMIN HTML/PHP TEMPLATE
 * =======================
 *
**/
?>

<div class="site-options-settings__wrapper">
  <header class="site-options-settings__header">
    <h1>Site Options Admin</h1>
    <?php settings_errors(); ?>
    <h2>Description</h2>
    <p>All website settings such as general-use ACF fields, some graphics perhaps, and external url's, etc. will be addressed in the admin page.</p>
  </header>

  <section class="site-options-settings__section">
    <form class="site-options-settings__form" action="options.php" method="post">
      <?php settings_fields( 'joed_designer-settings-group' ); ?>
      <?php do_settings_sections( 'joed-site-options' ); ?>
      <?php submit_button(); ?>
    </form>
  </section>
</div>
