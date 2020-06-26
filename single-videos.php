<?php get_header();

$id = get_the_ID();

?>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="font-kollektif text-uppercase text-brand mb-0">
                <?php echo get_the_title($id); ?>
            </h1>
            <p class="text-muted text-capitalize text-center m-0 p-0">
                <?php
                $postType = get_post_type_object(get_post_type());
                echo esc_html($postType->labels->singular_name);
                ?>
            </p>

            <a href="<?php echo get_site_url() . '/videos'; ?>" alt="" class="btn btn-outline-dark rounded-0 hvr-icon-back my-3">
                <i class="fas fa-arrow-left hvr-icon"></i>
                Back to the videos
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 my-4">
            <p class="font-big text-center m-0">
                <?php echo the_field('description', $id); ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 my-5">
            <?php
            // Transform the url for video format
            $url_video = do_shortcode('[video_embeded url=' . get_field('link', $id) . ']');
            ?>

            <div class="embed-responsive embed-responsive-16by9 border" id="video">
                <iframe class="embed-responsive-item" src="<?php echo $url_video; ?>" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>