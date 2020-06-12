<?php

/*
Template Name: Testimonials
*/

get_header();

// Get all the custom posts
$args = [
    'post_type'      => 'testimonials',
    'posts_per_page' => -1,
    'post_name_in'  => ['testimonials'],
    'fields'         => 'ids',
];
$q = get_posts($args);

$page_id = 33;

?>

<style>
    .bg-header {
        background-image: url(<?php echo get_the_post_thumbnail_url($page_id); ?>);
    }
</style>

<div class="container-fluid img-text-container bg-header bg-cover m-0 p-0">
    <div class="centered">
        <h1 class="h1 text-center font-manrope text-uppercase font-weight-bold title-header-page frame py-1 py-sm-4 px-1 px-sm-4">
            <?php echo wp_title(''); ?>
        </h1>
    </div>
</div>

<div class="container my-5">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="font-manrope font-weight-light text-uppercase mt-0 pt-0">
                Here is what people have to say about their experience
            </h1>
        </div>
    </div>

    <?php
    for ($i = 0; $i < count($q); $i++) { ?>
        <div class="row">
            <div class="col-12">
                <?php if (get_field('video', $q[$i])) { ?>
                    <?php
                    // Transform the url for video format
                    $url_video = do_shortcode('[video_embeded url=' . get_field('video', $q[$i]) . ']');
                    ?>

                    <div class="embed-responsive embed-responsive-16by9 border" id="video">
                        <iframe class="embed-responsive-item" src="<?php echo $url_video; ?>" allowfullscreen></iframe>
                    </div>
                <?php } else { ?>
                    <p class="font-italic font-big font-weight-light mb-3">
                        <?php the_field('content', $q[$i]); ?>
                    </p>
                <?php } ?>

                <div class="text-center mt-3">
                    <span class="h5 font-manrope text-emerald">
                        <?php the_field('full_name', $q[$i]); ?>
                    </span>
                    <?php if (get_field('location', $q[$i])) { ?>
                        -
                        <span class="h6 font-weight-light">
                            <?php the_field('location', $q[$i]); ?>
                        </span>
                    <?php } ?>

                    <?php
                    $position = get_field('position', $q[$i]);
                    if ($position['position_title']) { ?>
                        <p class="m-0">
                            <?php echo $position['position_title']; ?>
                        </p>
                    <?php } ?>

                    <?php if ($position['company_name']) { ?>
                        <p>
                            <?php echo $position['company_name']; ?>
                        </p>
                    <?php } ?>

                    <?php if (get_field('date_testimonial', $q[$i])) { ?>
                        <h6 class="text-muted my-2">
                            <i class="far fa-clock"></i>
                            <?php the_field('date_testimonial', $q[$i]); ?>
                        </h6>
                    <?php } ?>
                </div>
            </div>
        </div>

        <hr class="w-75 my-5" />
    <?php } ?>
</div>

<?php get_footer(); ?>