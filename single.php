<?php get_header(); ?>

<?php

$post_type = get_post_type();

if ($post_type == 'testimonials') {
    $header = "Location: " . get_site_url();
    header($header);

    exit();
}

?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <?php echo do_shortcode('[top_banner url="' . get_the_post_thumbnail_url() . '" title="' .  get_the_title() . '"]'); ?>

        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
<?php endwhile;
endif;
?>

<?php get_footer(); ?>