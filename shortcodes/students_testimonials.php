<?php

function students_testimonials()
{
    ob_start();

    // Get all the custom posts
    $args = [
        'post_type'      => 'testimonials',
        'posts_per_page' => -1,
        'meta_key'        => 'is_student',
        'meta_value'    => 'yes'
    ];
    $query = get_posts($args);
?>
    <hr class="w-75 my-5" />

    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h1 class="h1 text-brand text-uppercase font-kollektif font-weight-bold text-center">
                    Students testimonials
                </h1>
            </div>
        </div>
        <?php foreach ($query as $student_testimonial) {
            // $testimonial = get_field('is_student', $id);
            $testimonial_id = $student_testimonial->ID;
        ?>
            <div class="row">
                <?php if (get_field('video', $testimonial_id)) { ?>
                    <?php
                    // Transform the url for video format
                    $url_video = do_shortcode('[video_embeded url=' . get_field('video', $testimonial_id) . ']');
                    ?>

                    <div class="col-12 col-sm-10 col-md-8 col-lg-6 text-center mx-auto">
                        <div class="embed-responsive embed-responsive-16by9 border" id="video">
                            <iframe class="embed-responsive-item" src="<?php echo $url_video; ?>" allowfullscreen></iframe>
                        </div>
                    <?php } else { ?>
                        <div class="col-12">
                            <p class="font-italic font-big font-weight-light mb-3">
                                <?php the_field('content', $testimonial_id); ?>
                            </p>
                        <?php } ?>

                        <div class="text-center mt-3">
                            <span class="h5 font-kollektif text-brand">
                                <?php the_field('full_name', $testimonial_id); ?>
                            </span>
                            <?php if (get_field('location', $testimonial_id)) { ?>
                                -
                                <span class="h6 font-weight-light">
                                    <?php the_field('location', $testimonial_id); ?>
                                </span>
                            <?php } ?>

                            <?php
                            $position = get_field('position', $testimonial_id);
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

                            <?php if (get_field('date_testimonial', $testimonial_id)) { ?>
                                <h6 class="text-muted my-2">
                                    <i class="far fa-clock"></i>
                                    <?php the_field('date_testimonial', $testimonial_id); ?>
                                </h6>
                            <?php } ?>
                        </div>
                        </div>
                    </div>

                    <hr class="w-75 my-5" />
                <?php } ?>
            </div>

        <?php return ob_get_clean();
    }
    // register shortcode
    add_shortcode('students_testimonials', 'students_testimonials');
