<?php

/*
Template Name: Blog
*/

get_header();

?>

<?php echo do_shortcode('[top_banner url="' . wp_get_attachment_url(get_post_thumbnail_id($wp_query->queried_object->ID)) . '" title="' .  ucfirst($wp_query->queried_object->post_name) . '"]'); ?>

<div class="container my-5">
    <?php
    while (have_posts()) {
        the_post(); ?>
        <div class="row align-items-center">
            <?php if (has_post_thumbnail()) { ?>
                <div class="col-12 col-md-4 text-center mb-3 mb-md-0 mx-auto">
                    <a href="<?php echo the_permalink(); ?>" alt="" class="h1 font-weight-light">
                        <?php echo the_post_thumbnail('medium', 'class=img-fluid frame-hover'); ?>
                    </a>
                </div>
            <?php } ?>
            <div class="col-12 col-md-8 mx-auto">
                <p class="text-center text-md-left m-0">
                    <a href="<?php echo the_permalink(); ?>" alt="" class="h1 text-success font-weight-light text-uppercase">
                        <?php echo get_the_title(); ?>
                    </a>
                </p>

                <div class="mt-3">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </div>
        <hr class="w-75 my-5" />
    <?php } ?>
</div>

<?php get_footer(); ?>