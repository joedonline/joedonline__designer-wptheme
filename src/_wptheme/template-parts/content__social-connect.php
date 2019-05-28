<?php
/**
 * Social Connect template part, displays at the top of page above the site header
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package joed_designer
 */

?>


<ul class="connect">
    <?php
        $joed_socialconnect_Query_args = array(
            'post_type' => 'joed_socialconnect',
            'post_status' => 'publish',
            'posts_per_page' => '-1'
        )
    ?>
    <?php $joed_socialconnect_Query = new WP_Query( $joed_socialconnect_Query_args ); ?>
    <?php if ( $joed_socialconnect_Query->have_posts() ) : ?>
        <?php while ( $joed_socialconnect_Query->have_posts() ) : $joed_socialconnect_Query->the_post(); ?>
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
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'joed_designer' ); ?></p>
    <?php endif; ?>
</ul>
