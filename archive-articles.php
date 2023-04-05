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
    'fields'         => 'ids',
    'order' => 'ASC'
];
$query = get_posts($args);

$page_ID = 75;

?>

<?php echo do_shortcode('[top_banner url=' . get_the_post_thumbnail_url($page_ID) . ' title="' . get_the_title($page_ID) . '"]'); ?>

<!-- <div class="container">
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
</div> -->


<div class="container-fluid my-5">
    <div class="row bg-success py-5 mb-5">
        <div class="col-12 text-center">
            <h2 class="text-white text-uppercase font-kollektif font-kollektif mb-0">Past events</h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6 col-lg-4 text-center mx-auto mb-5">
            <a href="<?php echo get_the_permalink(2003); ?>" alt="">
                <?php echo wp_get_attachment_image(2003, 'medium', true, "class=img-fluid frame-hover"); ?>
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 text-center mx-auto mb-5">
            <a href="<?php echo get_the_permalink(2002); ?>" alt="">
                <?php echo wp_get_attachment_image(2002, 'medium', true, "class=img-fluid frame-hover"); ?>
            </a>
        </div>
        <div class="col-12 col-lg-4 text-center">
            <p class="text-brand">
                N.O.T. seminar in Guadalajara, Mexico
            </p>
            <p>
                October 2019
            </p>
        </div>
    </div>

    <hr class="w-25 my-5" />

    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6 col-lg-4 text-center order-lg-2 mx-auto mb-5">
            <a href="<?php echo get_the_permalink(1995); ?>" alt="">
                <?php echo wp_get_attachment_image(1995, 'medium', true, "class=img-fluid frame-hover"); ?>
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 text-center order-lg-3 mx-auto mb-5">
            <a href="<?php echo get_the_permalink(1996); ?>" alt="">
                <?php echo wp_get_attachment_image(1996, 'medium', true, "class=img-fluid frame-hover"); ?>
            </a>
        </div>
        <div class="col-12 col-lg-4 text-center order-lg-1">
            <p class="text-brand">
                Presenting N.O.T. to Ayurvedic Association of Kerala, South India
            </p>
            <p>
                October 2018
            </p>
        </div>
    </div>

    <hr class="w-25 my-5" />

    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6 col-lg-4 text-center ml-auto mb-5">
            <a href="<?php echo get_the_permalink(575); ?>" alt="">
                <?php echo wp_get_attachment_image(575, 'medium', true, "class=img-fluid frame-hover"); ?>
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 text-center mr-auto">
            <p class="text-brand">
                N.O.T. seminar - Guadalajara, Mexico
            </p>
            <p>
                October 2018
            </p>
        </div>
    </div>

    <hr class="w-25 my-5" />

    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-auto text-center order-lg-2 mr-auto mb-5">
            <a href="<?php echo get_the_permalink(1999); ?>" alt="">
                <?php echo wp_get_attachment_image(1999, 'medium', true, "class=img-fluid frame-hover"); ?>
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 text-center order-lg-1 ml-auto">
            <p class="text-brand">
                Presentation in Nosara, Costa Rica
            </p>
            <p>
                2009
            </p>
        </div>
    </div>

    <hr class="w-25 my-5" />

    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6 col-lg-4 text-center ml-auto mb-5">
            <a href="<?php echo get_the_permalink(1998); ?>" alt="">
                <?php echo wp_get_attachment_image(1998, 'medium', true, "class=img-fluid frame-hover"); ?>
            </a>
        </div>
        <div class="col-12 col-md-auto text-center mr-auto">
            <p class="text-brand">
                Volunteering in Zanzibar, Africa
            </p>
            <p>
                2003
            </p>
        </div>
    </div>
</div>

<div class="container-fluid my-5">
    <div class="row bg-success py-5 mb-5">
        <div class="col-12 text-center">
            <h2 class="text-white text-uppercase font-kollektif mb-0">Articles</h2>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 justify-content-center">
        <?php
        foreach ($query as $id) {
        ?>
            <div class="col mb-4">
                <div class="card rounded-0">
                    <div class="card-header text-center bg-transparent">
                        <a href="<?php echo the_permalink($id); ?>" class="text-success">
                            <h3 class="card-title font-kollektif">
                                <?php the_field('title', $id); ?>
                            </h3>
                        </a>
                        <?php if (get_field('date_article', $id)) { ?>
                            <i class="far fa-clock"></i>
                            <?php the_field('date_article', $id) ?>
                        <?php } ?>
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
                        <!-- <img src="<?php echo wp_get_attachment_url($id_image); ?>" class="img-fluid" /> -->
                        <?php // echo wp_get_attachment_image($id_image, 'thumbnail', true, "class=card-img-top img-fluid"); 
                        ?>
                        <img src="<?php echo wp_get_attachment_url($id_image); ?>" alt="" class="top-banner" width="100%" />
                    </a>

                    <!-- <div class="card-body text-center">
                        <p class="card-text font-weight-light">
                            <?php echo wp_trim_words(get_field('description', $id), 15); ?>
                        </p>
                    </div> -->
                    <div class="card-footer text-center">
                        <!-- Button trigger modal -->
                        <a href="<?php echo the_permalink($id); ?>" class="btn btn-success rounded-0 hvr-grow">
                            Read more
                        </a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php get_footer(); ?>