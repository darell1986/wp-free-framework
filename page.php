<?php
/**
 * Ariel functions and definitions
 *
 * @package    Ariel
 * @author     wphobby
 * @link       https://wphobby.com
 */

get_header();

while ( have_posts() ) : the_post();
    get_template_part( 'template-parts/content', 'page' );
endwhile; // End of the loop.

get_footer(); ?>
