<?php

$nutritional_nuggets_page_id = 1301;

get_header(); ?>

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
                <div class="col-12 font-big line-height-big">
                    <div class="page-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>

        <?php
        // if this is the Nutritional Nuggets page
        if (get_the_ID() == $nutritional_nuggets_page_id) {
            load_template(get_template_directory() . '/templates/template-nutritional-nuggets.php');
        } ?>
<?php endwhile;
endif;
?>

<?php get_footer(); ?>