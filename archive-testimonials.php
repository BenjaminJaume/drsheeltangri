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
    'meta_query'    => array(
        array(
            'key'         => 'is_student',
            'value'          => 'no',
            'compare'     => 'NOT',
        )
    ),
];
$q = get_posts($args);

$postType = get_queried_object();
$postTypeName = $postType->labels->name;

?>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="h1 text-success font-kollektif text-uppercase font-weight-bold">
                <?php echo $postTypeName; ?>
            </h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1>
                Here is what people have to say about their experience
            </h1>
        </div>
    </div>

    <?php
    for ($i = 0; $i < count($q); $i++) { ?>
        <div class="row">
            <?php if (get_field('video', $q[$i])) { ?>
                <?php
                // Transform the url for video format
                $url_video = do_shortcode('[video_embeded url=' . get_field('video', $q[$i]) . ']');
                ?>

                <div class="col-12 col-sm-10 col-md-8 col-lg-6 text-center mx-auto">
                    <div class="embed-responsive embed-responsive-16by9 border" id="video">
                        <iframe class="embed-responsive-item" src="<?php echo $url_video; ?>" allowfullscreen></iframe>
                    </div>
                <?php } else { ?>
                    <div class="col-12">
                        <p class="font-italic font-big font-weight-light mb-3">
                            <?php the_field('content', $q[$i]); ?>
                        </p>
                    <?php } ?>

                    <div class="text-center mt-3">
                        <span class="h5 font-kollektif text-brand">
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