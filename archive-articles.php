<?php

/*
Template Name: Articles
*/

get_header();

// Get all the articles
$args = [
    'post_type'      => 'articles',
    'posts_per_page' => -1,
    'post_name_in'  => ['articles'],
    'fields'         => 'ids'
];
$q = get_posts($args);

?>

<?php echo do_shortcode('[top_banner url="' . get_the_post_thumbnail_url() . '" title="' .  get_the_title() . '"]'); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Upcoming Countries / Cities</h1>
            <p class="mb-2"><?php echo do_shortcode('[svg-flag flag="VN" inline="true" size="2"]'); ?> &amp; <?php echo do_shortcode('[svg-flag flag="KH" inline="true" size="2"]'); ?> Vietnam and Cambodia, Sept 15-30, 2020</p>
            <p class="mb-2"><?php echo do_shortcode('[svg-flag flag="LK" inline="true" size="2"]'); ?> Sri Lanka, Oct 1-12, 2020</p>
            <p class="mb-2"><?php echo do_shortcode('[svg-flag flag="IN" inline="true" size="2"]'); ?> Tamil Nadu, india, Oct 13-23, 2020</p>
            <p class="mb-2"><?php echo do_shortcode('[svg-flag flag="AT" inline="true" size="2"]'); ?> Vienna, Austria, Oct 24-26, 2020</p>
            <p class="mb-2"><?php echo do_shortcode('[svg-flag flag="CR" inline="true" size="2"]'); ?> San Jose, Costa Rica, Oct 28-Nov 1, 2020</p>
            <p class="mb-2"><?php echo do_shortcode('[svg-flag flag="MX" inline="true" size="2"]'); ?> Guadalajara, Mexico, Nov 2-12, 2020</p>
            <p class="mb-2"><?php echo do_shortcode('[svg-flag flag="CR" inline="true" size="2"]'); ?> Playa Grande, Costa Rica Nov 15-21, 2020</p>
            <p class="mb-2"><?php echo do_shortcode('[svg-flag flag="CR" inline="true" size="2"]'); ?> Samara, Costa Rica, Nov 23-Dec 18, 2020</p>
            <h1>Seminars and Presentations</h1>
            Now Accepting Reservations: 7 Day Health and Wellness retreat near Tamarindo, Costa Rica Nov. 15-22, 2019
            <div id="lipsum">

                If you have any questions or would like to arrange for Dr Tangri to come to your country and perform treatments, deliver a presentation, or teach a seminar, you can get in touch with him via this <a class="text-primary" href="http://localhost/drsheeltangri/contact/">contact form</a> or sending an email to <a href="mailto:info@kinesiologist.eu">info@kinesiologist.eu</a>

            </div>
        </div>
    </div>
</div>


<div class="container-fluid my-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-center" id="card-deck-events">
        <?php
        foreach ($q as $id) {
        ?>
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5 class="card-title font-kollektif my-auto">
                            <?php the_field('title', $id); ?>
                        </h5>
                    </div>

                    <?php
                    $images = get_field('images', $id);

                    if ($images['1']['image']['ID']) {
                        $id_image = $images['1']['image']['ID'];
                    } else {
                        $id_image = $images['1']['image'];
                    }
                    ?>
                    <a href="<?php echo the_permalink($id); ?>">
                        <img src="<?php echo wp_get_attachment_url($id_image); ?>" class="img-fluid" />
                    </a>

                    <div class="card-body text-center">
                        <p class="card-text font-weight-light">
                            <?php echo wp_trim_words(get_field('description', $id), 15); ?>
                        </p>

                        <!-- Button trigger modal -->
                        <a href="<?php echo the_permalink($id); ?>" class="btn btn-success rounded-0 hvr-grow">
                            More
                        </a>
                    </div>
                    <?php if (get_field('date_article', $id)) { ?>
                        <div class="card-footer text-center text-muted">
                            <i class="far fa-clock"></i>
                            <?php the_field('date_article', $id) ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php get_footer(); ?>