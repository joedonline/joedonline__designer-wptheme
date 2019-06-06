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
  padding: 2.5vmax;
  display: flex;
  flex-direction: column;
}

.site-options-settings {
  background: ivory;
  padding: 0;
  border: 1px solid teal;
}

</style>


<div class="site-options-settings__wrapper">
  <div class="site-options-settings">
    <h1>Site Options Admin</h1>
    <h3>Settings</h3>
    <p>All website settings such as general-use ACF fields, some graphics perhaps, and external url's, etc. will be addressed in the admin page.</p>
  </div>

  <h2><?php echo get_field( 'my_website_url' ); ?> - my website url<h2>
</div>
