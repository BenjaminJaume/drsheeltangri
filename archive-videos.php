<?php

/*
Template Name: Videos
*/

get_header();

// Get all the videos
$args = [
    'post_type'      => 'videos',
    'posts_per_page' => -1,
    'meta_key'            => 'order',
    'orderby'            => 'meta_value_num',
    'order'                => 'ASC',
    'type'        => 'NUMERIC',
];
$query = get_posts($args);

$postType = get_queried_object();
$postTypeName = $postType->labels->name;

?>

<?php echo do_shortcode('[top_banner url="' . wp_get_attachment_url(1919) . '" title="' . $postTypeName . '"]'); ?>

<div class="container-fluid my-5">
    <div class="row">
        <div class="col-12 col-md-8 mx-auto text-center">
            <h3 class="font-kollektif font-weight-light">
                In order to get the most out of the information presented in the videos, it is advisable to watch them in the sequence that they are presented
            </h3>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 mx-auto text-center">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/videoseries?list=PL4qYlxnLHbo_8fEMj76Ot8GWu3tqZI7jc" allowfullscreen></iframe>
            </div>

            <a href="https://www.youtube.com/playlist?list=PL4qYlxnLHbo_8fEMj76Ot8GWu3tqZI7jc" alt="" target="_blank" class="btn btn-link rounded-0">
                Watch the playlist on Youtube
            </a>

            <!-- <iframe width="100%" height="500px" src="https://www.youtube.com/embed/videoseries?list=PL4qYlxnLHbo_8fEMj76Ot8GWu3tqZI7jc" frameborder="0" allow="autoplay">
            </iframe> -->
        </div>
    </div>
</div>

<hr class="w-50 my-5" />

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h3 class="font-kollektif">Watch the ordered list of each individual video:</h3>
        </div>
    </div>
    <!-- <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3"> -->
    <?php
    // For each video
    for ($i = 0; $i < count($query); $i++) {

        // foreach ($query as $query[$i]) {
    ?>
        <div class="row align-items-center my-3">

            <div class="col-12 col-md-6 text-center text-md-left order-md-2 mx-auto">
                <p class="text-muted m-0">
                    <?php echo 'Video #' . ($i + 1); ?>
                </p>
                <h1 class="text-brand font-weight-light mt-0">
                    <?php echo get_the_title($query[$i]); ?>
                </h1>
                <p>
                    <?php the_field('description', $query[$i]); ?>
                </p>
            </div>
            <div class="col-12 col-md-6 text-center order-md-1 mt-5 mt-md-0 mx-auto">
                <?php
                // Transform the url for video format
                $url_video = do_shortcode('[video_embeded url=' . get_field('link', $query[$i]) . ']');
                ?>

                <div class="embed-responsive embed-responsive-16by9 border">
                    <iframe width="100" height="200" class="embed-responsive-item" src="<?php echo $url_video; ?>" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <hr class="w-75 my-5" />
    <?php } ?>
</div>

<?php get_footer(); ?>