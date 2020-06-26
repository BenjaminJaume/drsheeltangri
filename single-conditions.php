<?php get_header();

$id = get_the_ID();

$videos = get_field('videos');
$audios = get_field('audios');
$q_a = get_field('q_a');
$testimonials = get_field('testimonials');

?>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 font-kollektif text-uppercase text-brand mb-0">
                <?php echo get_the_title($id); ?>
            </h1>
            <h3 class="text-muted font-weight-light">
                Category: <?php echo the_field('category', $id); ?>
            </h3>

            <?php

            $post_type = get_post_type();
            $post_type_data = get_post_type_object($post_type);
            $post_type_slug = $post_type_data->rewrite['slug'];
            $post_type_name = $post_type_data->labels->name;

            ?>
            <a href="<?php echo get_site_url() . '/' . $post_type_slug; ?>" alt="" class="btn btn-outline-dark rounded-0 hvr-icon-back my-3">
                <i class="fas fa-arrow-left hvr-icon"></i>
                Back to <?php echo strtolower($post_type_name); ?>
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
        <div class="col-12 text-center">
            <h1 class="text-success">Content available</h1>
            <?php if (!$videos) { ?>
                <a href="#" alt="" class="btn btn-success rounded-0 disabled">
                    0 videos
                </a>
            <?php } else { ?>
                <a href="#videos" alt="" class="btn btn-success rounded-0">
                    <?php
                    if (count($videos) == 1) {
                        echo count($videos) . ' video';
                    } else {
                        echo count($videos) . ' videos';
                    } ?>
                </a>
            <?php } ?>
            <?php if (!$audios) { ?>
                <a href="#" alt="" class="btn btn-success rounded-0 disabled">
                    0 audios
                </a>
            <?php } else { ?>
                <a href="#audios" alt="" class="btn btn-success rounded-0">
                    <?php
                    if (count($audios) == 1) {
                        echo count($audios) . ' audio';
                    } else {
                        echo count($audios) . ' audios';
                    } ?>
                </a>
            <?php } ?>
            <?php if (!$q_a) { ?>
                <a href="#" alt="" class="btn btn-success rounded-0 disabled">
                    0 questions & answers
                </a>
            <?php } else { ?>
                <a href="#questions&answers" alt="" class="btn btn-success rounded-0">
                    <?php
                    if (count($q_a) == 1) {
                        echo count($q_a) . ' question & answer';
                    } else {
                        echo count($q_a) . ' questions & answers';
                    } ?>
                </a>
            <?php } ?>
            <?php if (!$testimonials) { ?>
                <a href="#" alt="" class="btn btn-success rounded-0 disabled">
                    0 testimonials
                </a>
            <?php } else { ?>
                <a href="#testimonials" alt="" class="btn btn-success rounded-0">
                    <?php
                    if (count($testimonials) == 1) {
                        echo count($testimonials) . ' testimonial';
                    } else {
                        echo count($testimonials) . ' testimonials';
                    } ?>
                </a>
            <?php } ?>
        </div>
    </div>
</div>

<hr class="w-75 my-5" />

<div class="container my-5" id="videos">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="font-kollektif text-uppercase text-center text-brand font-weight-bold mb-0">
                <i class="fa fa-video"></i>
                <?php
                if (count($videos) == 1) {
                    echo 'Video (' . count($videos) . ')';
                } else {
                    echo 'Videos (' . count($videos) . ')';
                } ?>
            </h1>
        </div>
    </div>
    <div class="row">
        <?php
        if ($videos) :
            for ($i = 0; $i < count($videos); $i++) {
                // ID of the video
                $id = $videos[$i]->ID;
                $url_video = do_shortcode('[video_embeded url=' . get_field('link', $id) . ']');
        ?>
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 text-center mx-auto">
                    <h1 class="text-center font-kollektif text-uppercase text-brand">Video #<?php echo $i + 1; ?></h1>
                    <div class="embed-responsive embed-responsive-16by9 border" id="video">
                        <iframe class="embed-responsive-item" src="<?php echo $url_video; ?>" allowfullscreen></iframe>
                    </div>
                </div>
        <?php
            }
        endif;
        ?>
    </div>
</div>

<?php if ($audios) :
    $i = 1;
?>
    <hr class="w-75 my-5" />

    <div class="container my-5" id="audios">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="font-kollektif text-uppercase text-center text-brand font-weight-bold mb-0">
                    <i class="fa fa-microphone-alt"></i>
                    <?php
                    if (count($audios) == 1) {
                        echo 'Audio (' . count($audios) . ')';
                    } else {
                        echo 'Audios (' . count($audios) . ')';
                    } ?>
                </h1>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 text-center mx-auto">
                <ul class="list-group">
                    <?php foreach ($audios as $audio) :
                        $audio_file = get_field('file', $audio);
                    ?> <li class="list-group-item"> <?php echo $audio_file['title']; ?> </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 text-center mx-auto">
                <?php
                $ids = '';

                foreach ($audios as $audio) :
                    $audio_file = get_field('file', $audio);

                    $ids = $ids . $audio_file['ID'] . ',';
                endforeach; ?>
                <?php echo do_shortcode('[playlist ids="' . $ids . '" style="dark"]'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="#" alt="" class="btn btn-success rounded-0">
                    Go back to the top
                </a>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if ($q_a) :
    $i = 1;
?>
    <hr class="w-75 my-5" />

    <div class="container my-5" id="questions&answers">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="font-kollektif text-uppercase text-center text-brand font-weight-bold mb-0">
                    <i class="fa fa-question-circle"></i>
                    <?php
                    if (count($q_a) == 1) {
                        echo 'Question & Answer (' . count($q_a) . ')';
                    } else {
                        echo 'Questions & Answers (' . count($q_a) . ')';
                    } ?>
                </h1>
            </div>
        </div>
        <?php foreach ($q_a as $qa) :
            // ID of the question / answer
            // $qa->ID
        ?>
            <div class="row my-5">
                <div class="col-12">
                    <div class="line-height-big">
                        <div class="text-center">
                            <h1 class="text-success font-kollektif text-uppercase">
                                Question <?php echo $i ?>:
                            </h1>
                            <p class="font-big">
                                &quot;<?php the_field('question', $qa->ID); ?>&quot;
                            </p>
                        </div>

                        <div>
                            <h1 class="text-dark text-center font-kollektif text-uppercase">
                                Answer <?php echo $i ?>:
                            </h1>
                            <p>
                                <?php the_field('answer', $qa->ID); ?></span>
                            </p>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="#" alt="" class="btn btn-success rounded-0">
                            Go back to the top
                        </a>
                    </div>
                </div>
            </div>
        <?php
            $i++;
        endforeach; ?>
    </div>
<?php endif; ?>

<?php if ($testimonials) :
    $i = 1;
?>
    <hr class="w-75 my-5" />

    <div class="container my-5" id="testimonials">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="font-kollektif text-uppercase text-center text-brand font-weight-bold mb-0">
                    <i class="fa fa-pen-fancy"></i>
                    <?php
                    if (count($testimonials) == 1) {
                        echo 'Testimonial (' . count($testimonials) . ')';
                    } else {
                        echo 'Testimonials (' . count($testimonials) . ')';
                    } ?>
                </h1>
            </div>
        </div>
        <?php foreach ($testimonials as $testimonial) : ?>
            <div class="row">
                <?php if (get_field('video', $testimonial)) { ?>
                    <?php
                    // Transform the url for video format
                    $url_video = do_shortcode('[video_embeded url=' . get_field('video', $testimonial) . ']');
                    ?>

                    <div class="col-12 col-sm-10 col-md-8 col-lg-6 text-center mx-auto">
                        <div class="embed-responsive embed-responsive-16by9 border" id="video">
                            <iframe class="embed-responsive-item" src="<?php echo $url_video; ?>" allowfullscreen></iframe>
                        </div>
                    <?php } else { ?>
                        <div class="col-12">
                            <p class="font-italic font-big font-weight-light mb-3">
                                <?php the_field('content', $testimonial); ?>
                            </p>
                        <?php } ?>

                        <div class="text-center mt-3">
                            <span class="h5 font-kollektif text-brand">
                                <?php the_field('full_name', $testimonial); ?>
                            </span>
                            <?php if (get_field('location', $testimonial)) { ?>
                                -
                                <span class="h6 font-weight-light">
                                    <?php the_field('location', $testimonial); ?>
                                </span>
                            <?php } ?>

                            <?php
                            $position = get_field('position', $testimonial);
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

                            <?php if (get_field('date_testimonial', $testimonial)) { ?>
                                <h6 class="text-muted my-2">
                                    <i class="far fa-clock"></i>
                                    <?php the_field('date_testimonial', $testimonial); ?>
                                </h6>
                            <?php } ?>
                        </div>
                        </div>
                    </div>

                    <hr class="w-75 my-5" />
                <?php endforeach; ?>

                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" alt="" class="btn btn-success rounded-0">
                            Go back to the top
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>


        <?php get_footer(); ?>