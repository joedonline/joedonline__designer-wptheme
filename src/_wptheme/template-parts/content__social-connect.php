<?php
/**
 * Social Connect template part, displays at the top of page above the site header
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package joed_designer
 */

?>


<li class="connect-item">
    <a href="<?php echo esc_url( get_field("icon__instagram_url") ); ?>" title="<?php echo esc_html( get_field("icon__instagram_alt_text") ); ?>" rel="nofollow" target="_blank">
						<img class="icon" src="<?php echo get_field("icon__instagram"); ?>" alt="<?php echo esc_html( get_field("icon__instagram_alt_text") ); ?>">
				</a>
</li>
<li class="connect-item">
    <a href="<?php echo esc_url( get_field("icon__flickr_url") ); ?>" title="<?php echo esc_html( get_field("icon__flickr_alt_text") ); ?>" rel="nofollow" target="_blank">
						<img class="icon" src="<?php echo get_field("icon__flickr"); ?>" alt="<?php echo esc_html( get_field("icon__flickr_alt_text") ); ?>">
				</a>
</li>
<li class="connect-item">
    <a href="<?php echo esc_url( get_field("icon__gmail_url") ); ?>" title="<?php echo esc_html( get_field("icon__gmail_alt_text") ); ?>" rel="nofollow">
						<img class="icon" src="<?php echo get_field("icon__gmail"); ?>" alt="<?php echo esc_html( get_field("icon__gmail_alt_text") ); ?>">
				</a>
</li>
<li class="connect-item">
    <a href="<?php echo esc_url( get_field("icon__home_url") ); ?>" title="<?php echo esc_html( get_field("icon__home_alt_text") ); ?>" rel="nofollow">
						<img class="icon" src="<?php echo get_field("icon__home"); ?>" alt="<?php echo esc_html( get_field("icon__home_alt_text") ); ?>">
				</a>
</li>
