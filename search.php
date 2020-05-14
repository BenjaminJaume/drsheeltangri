<?php

/**
 * Template Name: Search Page
 */

?>

<?php get_header(); ?>

<?php if (have_posts()) :
    while (have_posts()) : the_post();
        echo the_title();
    endwhile;
else :
    echo 'Nope';
endif;

?>

<?php get_footer(); ?>