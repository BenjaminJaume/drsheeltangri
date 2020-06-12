<?php get_header();

$id = get_the_ID();

?>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 font-manrope text-uppercase text-success mb-0">
                <?php echo get_the_title($id); ?>
            </h1>
            <h3 class="text-muted font-weight-light">
                Category: <?php echo the_field('category', $id); ?>
            </h3>

            <a href="<?php echo get_site_url() . '/conditions-treated'; ?>" alt="" class="btn btn-outline-primary rounded-0 hvr-icon-back my-3">
                <i class="fas fa-arrow-left hvr-icon"></i>
                Back to conditions
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 my-4">
            <p class="font-big font-weight-light text-center m-0">
                <?php echo the_field('description', $id); ?>
            </p>
        </div>
    </div>

    <?php

    $videos = get_field('videos');
    $i = 1;

    if ($videos) :
        for ($i = 0; $i <= count($videos); $i++) {
            // ID of the video
            $id = $videos[$i]->ID;
            $url_video = do_shortcode('[video_embeded url=' . get_field('link', $id) . ']');
    ?>
            <div class="row my-5">
                <div class="col-12">
                    <h1 class="text-center font-manrope text-uppercase text-success">Video #<?php echo $i + 1; ?></h1>
                    <div class="embed-responsive embed-responsive-16by9 border" id="video">
                        <iframe class="embed-responsive-item" src="<?php echo $url_video; ?>" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
    <?php
        }
    endif;
    ?>
</div>

<div class="container my-5">
    <?php
    $q_a = get_field('q_a');
    $i = 1;

    if ($q_a) : ?>
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="font-manrope text-uppercase text-center text-success font-weight-bold mb-0">
                    <?php
                    if (count($q_a) == 1) {
                        echo count($q_a) . ' Question & Answer found';
                    } else {
                        echo count($q_a) . ' Questions & Answers found';
                    } ?>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php foreach ($q_a as $qa) :
                    // ID of the question / answer
                    // $qa->ID
                ?>
                    <div class="line-height-big">
                        <div class="text-center">
                            <h1 class="text-primary font-manrope text-uppercase">
                                Question <?php echo $i ?>:
                            </h1>
                            <p class="font-big">
                                &quot;<?php the_field('question', $qa->ID); ?>&quot;
                            </p>
                        </div>

                        <div>
                            <h1 class="text-primary text-center font-manrope text-uppercase">
                                Answer <?php echo $i ?>:
                            </h1>
                            <p class="font-weight-light">
                                <?php the_field('answer', $qa->ID); ?></span>
                            </p>
                        </div>
                    </div>
                <?php
                    $i++;
                endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</div>


<?php get_footer(); ?>