<style>

* {
 margin: 0;
 padding: 0;
 -webkit-font-smoothing: antialiased;
 -moz-osx-font-smoothing: grayscale;
 outline: none;
}

*,
*::before,
*::after {
 box-sizing: inherit;
}

html {
 scroll-behavior: smooth;
 box-sizing: border-box;
 font-size: 62.5%;

 @media screen (max-width: 1120px) {
  font-size: 50%;
 }
}

body {
 font-weight: 400;
 line-height: 1.414;
}

.site-options-settings__wrapper {
  background: white;
  width: 96%;
  height: 100vmax;
  padding: 2.5vmax;
  display: flex;
  flex-direction: column;
}

.site-options-settings__header {
  background: ivory;
  padding: 2vmax;
  border-radius: 2rem;
  border: 1px solid teal;
}

</style>


<div class="site-options-settings__wrapper">
  <header class="site-options-settings__header">
    <h1>Site Options Admin</h1>
    <?php settings_errors(); ?>
    <h2>Settings</h2>
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
