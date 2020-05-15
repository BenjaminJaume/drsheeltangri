<?php get_header();

$post_id = get_the_ID();

?>

<style>
    video::before {
        height: 250px;
        content: "";
        display: block;
    }
</style>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 font-manrope text-uppercase text-primary mb-0">
                <?php echo the_field('name', $post_id); ?>
            </h1>
            <h3 class="text-muted font-weight-light">
                Category: <?php echo the_field('category', $post_id); ?>
            </h3>

            <a href="conditions-treated" alt="" class="btn btn-outline-success rounded-0 hvr-icon-back my-3">
                <i class="fas fa-arrow-left hvr-icon"></i>
                Back to conditions
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 my-4">
            <p class="font-big font-weight-light text-center m-0">
                <?php echo the_field('description', $post_id); ?>
            </p>
        </div>
    </div>

    <?php

    $videos = get_field('videos');
    $i = 1;

    if ($videos) :
        foreach ($videos as $video) :
            // ID of the video
            $id = $video->ID;
            $url_video = get_field('link', $id);

            // extracting the video ID if it's a Youtube video
            if (strpos($url_video, 'watch?v=')) {
                parse_str(parse_url($url_video, PHP_URL_QUERY), $a);
                $url_video = 'https://www.youtube.com/embed/' . $a['v'];
            }
    ?>
            <div class="row my-5">
                <div class="col-12">
                    <h1 class="text-center font-manrope text-uppercase text-primary">Video: <?php echo get_field('title', $id); ?></h1>
                    <div class="embed-responsive embed-responsive-16by9 border" id="video">
                        <iframe class="embed-responsive-item" src="<?php echo $url_video; ?>" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
    <?php
        endforeach;
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
                <h1 class="font-manrope text-uppercase text-center text-primary font-weight-bold mb-0">
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
                            <h1 class="text-success font-manrope text-uppercase">
                                Question <?php echo $i ?>:
                            </h1>
                            <p class="font-big">
                                &quot;<?php the_field('question', $qa->ID); ?>&quot;
                            </p>
                        </div>

                        <div>
                            <h1 class="text-success text-center font-manrope text-uppercase">
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