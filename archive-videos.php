<?php

/*
Template Name: Videos
*/

get_header();

// Get all the conditions
$args = [
    'post_type'      => 'videos',
    'posts_per_page' => -1,
    'post_name_in'  => ['videos'],
    'fields'         => 'ids'
];
$q = get_posts($args);

$condition_treated_page_id = 13;

?>

<style>
    .bg-header {
        background-image: url(<?php echo get_the_post_thumbnail_url($condition_treated_page_id); ?>);
        height: 400px;
    }
</style>

<div class="container-fluid bg-header bg-cover m-0 p-0">
</div>

<div class="container-fluid my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 font-manrope text-success text-uppercase mt-0 pt-0">
                <?php echo get_the_title($condition_treated_page_id);
                ?>
            </h1>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
        <?php
        // For each video
        foreach ($q as $id) {
        ?>
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <a href="<?php echo get_the_permalink($id); ?>" alt="" class="text-success">
                            <h5 class="card-title font-manrope my-auto">
                                <?php echo get_field('title', $id); ?>
                            </h5>
                        </a>
                    </div>

                    <?php
                    // Transform the url for video format
                    $url_video = do_shortcode('[video_embeded url=' . get_field('link', $id) . ']');
                    ?>

                    <div class="embed-responsive embed-responsive-16by9 border" id="video">
                        <iframe class="embed-responsive-item" src="<?php echo $url_video; ?>" allowfullscreen></iframe>
                    </div>

                    <div class="card-body text-center">
                        <p class="card-text font-weight-light"><?php echo wp_trim_words(get_field('description', $id), 15); ?></p>
                    </div>
                    <div class="card-footer d-inline-flex justify-content-between align-items-center">
                        <a href="<?php echo get_the_permalink($id); ?>" alt="" class="btn btn-primary font-manrope text-uppercase hvr-icon-forward rounded-0">
                            More
                            <i class="fas fa-chevron-right ml-md-2 hvr-icon"></i>
                        </a>
                        <span class="text-muted">
                            <?php if (get_field('date', $id)) { ?>
                                <i class="far fa-clock"></i>
                                <?php echo get_field('date', $id) ?>
                            <?php } ?>
                        </span>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

</div>

<?php get_footer(); ?>