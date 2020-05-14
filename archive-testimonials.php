<?php

/*
Template Name: Questions & Answers
*/

get_header();

// Get all the custom posts
$args = [
    'post_type'      => 'testimonials',
    'posts_per_page' => 10,
    'post_name_in'  => ['testimonials'],
    'fields'         => 'ids'
];
$q = get_posts($args);

$condition_treated_page_id = 33;

?>

<style>
    .bg-header {
        background-image: url(<?php echo get_the_post_thumbnail_url($condition_treated_page_id); ?>);
        height: 400px;
    }
</style>

<div class="container-fluid bg-header bg-cover m-0 p-0">
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 font-manrope text-primary text-uppercase mt-0 pt-0">
                <?php echo get_the_title($condition_treated_page_id);
                ?>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?php
            for ($i = 0; $i < count($q); $i++) { ?>
                <div class="my-5">
                    <p class="font-italic font-big font-weight-light mb-3">
                        "<?php echo get_field('content', $q[$i]); ?>"
                    </p>
                    <div>
                        <span class="h5 font-manrope text-emerald">
                            <?php echo get_field('full_name', $q[$i]); ?>
                        </span>
                        -
                        <span class="h6 font-weight-light">
                            <?php echo get_field('location', $q[$i]); ?>
                        </span>
                    </div>

                    <p class="m-0">
                        <?php
                        $position = get_field('position', $q[$i]);
                        if ($position['position_title']) {
                            echo $position['position_title'];
                        } ?>
                    </p>

                    <p>
                        <?php
                        if ($position['company_name']) {
                            echo $position['company_name'];
                        }
                        ?>
                    </p>

                    <h6 class="text-muted">
                        <i class="far fa-clock"></i>
                        <?php the_field('date_testimonial'); ?>
                    </h6>

                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>