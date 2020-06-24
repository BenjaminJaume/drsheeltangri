<?php

$introduction = get_field('introduction');

$section_1 = get_field('section_1');
$section_2 = get_field('section_2');
$section_3 = get_field('section_3');
$section_4 = get_field('section_4');
$section_5 = get_field('section_5');
$section_6 = get_field('section_6');
$section_7 = get_field('section_7');

?>

<?php get_header(); ?>

<div class="container-fluid my-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-lg-6">
            <div class="text-center py-5">
                <h1 class="h1 font-kollektif text-uppercase text-dark font-weight-bold m-0">
                    <?php echo $introduction['title']; ?>
                </h1>

                <hr class="w-50 bg-secondary">

                <h3 class="font-lato w-100 w-md-75 mx-auto mt-4">
                    <span class="text-grey">
                        Specialist in
                    </span>
                    <br />
                    <span class="text-brand text-md-nowrap">Neural Organization Technique</span>
                </h3>

                <h1 class="">
                    <?php echo wp_get_attachment_image(1327, [28, 28], true, "class=img-fluid"); ?>
                </h1>

                <div class="col-12 col-sm-10 col-md-8 text-center mx-auto">
                    <q class="font-merriweather letter-spacing-big text-light-grey font-italic">
                        N.O.T. resets your body’s nervous system “programs”, much like rebooting or resetting a computer.
                    </q>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <iframe width="100%" height="400" src="<?php echo $introduction['video']; ?>" frameborder="0" allow="autoplay">
            </iframe>
        </div>
    </div>
</div>

<div class="bg-light">
    <article class="container bg-light py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="font-kollektif text-grey text-uppercase font-weight-bold">
                    Download the free eBook
                </h1>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-sm-4 col-lg-6 text-center">
                <a href="<?php echo get_site_url() . '/book'; ?>" alt="">
                    <?php echo wp_get_attachment_image(1372, '', true, "class=img-fluid frame-hover"); ?>
                </a>
            </div>
            <div class="col-12 col-sm-8 col-lg-6 text-center">
                <h1 class="text-brand font-kollektif font-weight-bold mb-1">
                    Let It Flow
                </h1>
                <h4 class="text-light-grey font-italic font-merriweather mb-3">
                    Hands-on techniques for healing body, mind and spirit
                </h4>
                <p class="text-light-grey">
                    Dr. Sheel Tangri BSc. D.C. S.K.
                </p>
                <a href="<?php echo get_site_url() . '/book'; ?>" alt="" class="btn btn-dark btn-lg rounded-0 hvr-icon-forward mb-3">
                    Download
                    <i class="fas fa-book hvr-icon ml-1"></i>
                </a>
            </div>
        </div>
    </article>
</div>

<article class="container-fluid my-5">
    <div class="row">
        <div class="col-12">
            <div style="background-image: url(<?php echo wp_get_attachment_url(1409); ?>); height: 250px" class="bg-cover">
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-sm-10 col-md-8 text-center mx-auto">
            <h1 class="h1 font-kollektif text-uppercase text-center text-brand font-weight-bold mb-5">
                <?php echo $section_1['title']; ?>
            </h1>
            <p>
                <?php echo $section_1['content_1']; ?>
            </p>

            <p>
                <?php echo $section_1['content_2']; ?>
            </p>
        </div>
    </div>
</article>

<div class="bg-light">
    <article class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-brand text-uppercase mb-5">
                    Examples of Conditions Treated
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php

            // Get the first $number conditions
            $args = [
                'post_type'      => 'conditions',
                'posts_per_page' => 9,
                'order' => 'ASC',
                'post_name_in'  => ['conditions'],
            ];
            $query = get_posts($args);

            for ($i = 0; $i < count($query); $i++) { ?>
                <div class="col-12 col-sm-6 col-md-4 text-center my-3">
                    <a href="<?php echo get_post_permalink($query[$i]); ?>" alt="" class="btn btn-success rounded-0 font-kollektif text-uppercase hvr-icon-forward">
                        <?php echo get_the_title($query[$i]); ?>
                        <i class="fa fa-chevron-right hvr-icon"></i>
                    </a>
                </div>
            <?php } ?>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <h4 class="my-4">
                    And the list continues...
                </h4>
            </div>
            <div class="col-12 text-center">
                <a href="<?php echo get_site_url() . '/conditions-treated'; ?>" alt="" class="btn btn-lg btn-dark font-kollektif text-uppercase hvr-icon-forward rounded-0">
                    See More
                    <i class=" fas fa-chevron-right ml-md-2 px-1 px-md-0 hvr-icon"></i>
                </a>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-12 text-center">
                <h4 class="font-weight-light">
                    - or -
                </h4>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 text-center mx-auto">
                <p class="text-muted">
                    Look for a condition in the list below
                </p>

                <div>
                    <?php echo do_shortcode('[condition_search_form][/condition_search_form]'); ?>
                </div>
            </div>
        </div>
    </article>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="h1 text-brand text-uppercase font-kollektif font-weight-bold">
                Get a treatment
            </h1>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 text-center mx-auto">
            <p class="font-big">
                Contact Dr. Sheel Tangri directly or find a local certified N.O.T. practitioner in your area
            </p>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12 text-center">
            <a href="<?php echo $section_3['button_1']['link']; ?>" alt="" class="btn btn-success rounded-0 hvr-icon-forward mb-sm-auto">
                <?php echo $section_3['button_1']['label']; ?>
                <i class="fas fa-chevron-right ml-2 hvr-icon"></i>
            </a>
            <a href="<?php echo $section_3['button_2']['link']; ?>" alt="" class="btn btn-success rounded-0 hvr-icon-forward">
                <?php echo $section_3['button_2']['label']; ?>
                <i class="fas fa-chevron-right ml-2 hvr-icon"></i>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <a href="<?php echo get_site_url() . '/n-o-t-neural-organization-technique' ?>" alt="">
                <img src="<?php echo wp_get_attachment_url(1355); ?>" alt="" class="img-fluid" style="height: 200px" />
            </a>
        </div>
    </div>
</div>

<div class="bg-success my-5">
    <article class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1 class="h1 font-kollektif text-uppercase text-center text-white font-weight-bold">
                    Looking for something?
                </h1>
                <div class="col-12 col-sm-10 col-md-8 text-center mx-auto">
                    <p class="font-big">
                        What you can find here is a large number of tools to
                        help you, inform you and guide you on what you can positively
                        do to your body and mind, and get involved in N.O.T.
                    </p>
                </div>
            </div>
        </div>
    </article>
</div>
<article class="container">
    <div class="row">
        <div class="col-12 text-center my-4">
            <h3 class="font-kollektif text-uppercase font-weight-light mb-4">
                N.O.T. and other techniques used
            </h3>
            <p class="m-0">
                <a href="<?php echo get_site_url() . '/conditions-treated'; ?>" class="btn btn-dark btn-lg rounded-0 m-1">List of the conditions treated</a>
                <a href="<?php echo get_site_url() . '/n-o-t-neural-organization-technique'; ?>" class="btn btn-dark btn-lg rounded-0 m-1">N.O.T. – Neural Organization Technique</a>
                <a href="<?php echo get_site_url() . '/n-e-t-neuro-emotional-technique'; ?>" class="btn btn-dark btn-lg rounded-0 m-1">N.E.T. – Neuro-Emotional Technique</a>
                <a href="<?php echo get_site_url() . '/energetic-rebalancing'; ?>" class="btn btn-dark btn-lg rounded-0 m-1">Energetic Rebalancing</a>
                <a href="<?php echo get_site_url() . '/chiropractic'; ?>" class="btn btn-dark btn-lg rounded-0 m-1">Chiropractic</a>
                <a href="<?php echo get_site_url() . '/nutrition'; ?>" class="btn btn-dark btn-lg rounded-0 m-1">Nutrition</a>
            </p>
        </div>
        <div class="col-12 text-center my-4">
            <h3 class="font-kollektif text-uppercase font-weight-light mb-4">
                Materials
            </h3>
            <p class="m-0">
                <a href="<?php echo get_site_url() . '/book'; ?>" class="btn btn-dark btn-lg rounded-0 m-1">Free eBook</a>
                <a href="<?php echo get_site_url() . '/videos'; ?>" class="btn btn-dark btn-lg rounded-0 m-1">Videos serie</a>
                <a href="<?php echo get_site_url() . '/blog'; ?>" class="btn btn-dark btn-lg rounded-0 m-1">Articles</a>
            </p>
        </div>
        <div class="col-12 text-center my-4">
            <h3 class="font-kollektif text-uppercase font-weight-light mb-4">
                Others useful informations
            </h3>
            <p class="m-0">
                <a href="<?php echo get_site_url() . '/consultation'; ?>" class="btn btn-dark btn-lg rounded-0 m-1">Get a consultation</a>
                <a href="<?php echo get_site_url() . '/questions-answers'; ?>" class="btn btn-dark btn-lg rounded-0 m-1">Questions & Answers</a>
                <a href="<?php echo get_site_url() . '/seminars'; ?>" class="btn btn-dark btn-lg rounded-0 m-1">Seminars</a>
                <a href="<?php echo get_site_url() . '/f-a-q'; ?>" class="btn btn-dark btn-lg rounded-0 m-1">F.A.Q.</a>
            </p>
        </div>
        <!-- <div class="col-12 col-sm-6">
                <dl class="font-kollektif text-uppercase">
                    <dd>
                        <a href="<?php echo $section_5['link_1']['link']; ?>" alt="" class="btn hvr-icon-forward border-0">
                            <u class="h4 letter-spacing-big">
                                <?php echo $section_5['link_1']['label']; ?></u>
                            <i class="fas fa-chevron-right hvr-icon align-text-top ml-1"></i>
                        </a>
                    </dd>
                    <dd>
                        <a href="<?php echo $section_5['link_2']['link']; ?>" alt="" class="btn hvr-icon-forward border-0">
                            <u class="h4 letter-spacing-big">
                                <?php echo $section_5['link_2']['label']; ?></u>
                            <i class="fas fa-chevron-right hvr-icon align-text-top ml-1"></i>
                        </a>
                    </dd>
                    <dd>
                        <a href="<?php echo $section_5['link_3']['link']; ?>" alt="" class="btn hvr-icon-forward border-0">
                            <u class="h4 letter-spacing-big">
                                <?php echo $section_5['link_3']['label']; ?></u>
                            <i class="fas fa-chevron-right hvr-icon align-text-top ml-1"></i>
                        </a>
                    </dd>
                    <dd>
                        <a href="<?php echo $section_5['link_4']['link']; ?>" alt="" class="btn hvr-icon-forward border-0">
                            <u class="h4 letter-spacing-big">
                                <?php echo $section_5['link_4']['label']; ?></u>
                            <i class="fas fa-chevron-right hvr-icon align-text-top ml-1"></i>
                        </a>
                    </dd>
                </dl>
            </div>
            <div class="col-12 col-sm-6">
                <dl class="font-kollektif text-uppercase">
                    <dd>
                        <a href="<?php echo $section_5['link_5']['link']; ?>" alt="" class="btn hvr-icon-forward border-0">
                            <u class="h4 letter-spacing-big">
                                <?php echo $section_5['link_5']['label']; ?></u>
                            <i class="fas fa-chevron-right hvr-icon align-text-top ml-1"></i>
                        </a>
                    </dd>
                    <dd>
                        <a href="<?php echo $section_5['link_6']['link']; ?>" alt="" class="btn hvr-icon-forward border-0">
                            <u class="h4 letter-spacing-big">
                                <?php echo $section_5['link_6']['label']; ?></u>
                            <i class="fas fa-chevron-right hvr-icon align-text-top ml-1"></i>
                        </a>
                    </dd>
                    <dd>
                        <a href="<?php echo $section_5['link_7']['link']; ?>" alt="" class="btn hvr-icon-forward border-0">
                            <u class="h4 letter-spacing-big">
                                <?php echo $section_5['link_7']['label']; ?></u>
                            <i class="fas fa-chevron-right hvr-icon align-text-top ml-1"></i>
                        </a>
                    </dd>
                    <dd>
                        <a href="<?php echo $section_5['link_8']['link']; ?>" alt="" class="btn hvr-icon-forward border-0">
                            <u class="h4 letter-spacing-big">
                                <?php echo $section_5['link_8']['label']; ?></u>
                            <i class="fas fa-chevron-right hvr-icon align-text-top ml-1"></i>
                        </a>
                    </dd>
                </dl>
            </div> -->
    </div>
</article>

<!-- <hr class="w-50 my-5 bg-dark" /> -->
<div class="container-fluid my-5">
    <div class="row">
        <div class="col-12">
            <div style="background-image: url(<?php echo wp_get_attachment_url(1356); ?>); height: 250px;" class="bg-cover frame">
            </div>
        </div>
    </div>
</div>

<?php
if ($section_6['displayed'] == "Yes") { ?>
    <article class="container my-5">
        <div class="row">
            <div class="col-12 mb-5">
                <h1 class="h1 font-kollektif text-uppercase text-center text-brand font-weight-bold m-0">
                    <?php echo $section_6['title']; ?>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="carousel-front-page" class="carousel slide bg-light" data-ride="carousel">
                    <div class="carousel-inner h-100">

                        <?php
                        $iteration = 0;

                        // Select all testimonials with a short_description in it
                        $args = array(
                            'posts_per_page'    => 5,
                            'post_type'         => 'testimonials',
                            'meta_key'          => 'short_testimonial',
                            'meta_query'    => array(
                                array(
                                    'key'        => 'short_testimonial',
                                    'compare'    => '!=',
                                    'value'        => null,
                                )
                            )
                        );
                        $testimonials = get_posts($args);

                        if ($testimonials) {
                            foreach ($testimonials as $testimonial) {
                                // setup_postdata($testimonial);
                                $testimonial_id = $testimonial->ID;
                                $iteration++; ?>
                                <div class="carousel-item<?php if ($iteration == 1) echo ' active' ?> h-100" data-interval="10000">
                                    <div class="carousel-caption text-center">
                                        <p class="font-italic font-big mb-3">
                                            <?php the_field('short_testimonial', $testimonial_id, $testimonial_id) ?>
                                        </p>
                                        <div>
                                            <span class="h5 font-kollektif text-brand">
                                                <?php the_field('full_name', $testimonial_id); ?>
                                            </span>

                                            <?php if (get_field('location', $testimonial_id)) { ?>
                                                -
                                                <span class="h6">
                                                    <?php the_field('location', $testimonial_id); ?>
                                                </span>
                                            <?php } ?>
                                        </div>


                                        <?php
                                        if (have_rows('position')) { ?>
                                            <?php while (have_rows('position')) {
                                                the_row();
                                                $position_title = get_sub_field('position_title');
                                                $company_name = get_sub_field('company_name');
                                                if ($position_title !== '' || $company_name !== '') {
                                                    echo '<p>' . $position_title . '<br />' . $company_name . '</p>';
                                                }
                                            }
                                            ?>
                                        <?php } ?>

                                        <?php if (get_field('date_testimonial', $testimonial_id)) { ?>
                                            <h6 class="text-muted">
                                                <i class="far fa-clock"></i>
                                                <?php the_field('date_testimonial', $testimonial_id); ?>
                                            </h6>
                                        <?php } ?>

                                    </div>
                                </div>
                        <?php }
                        }
                        wp_reset_query(); ?>


                    </div>
                    <a class="carousel-control-prev" href="#carousel-front-page" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-front-page" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </article>
<?php } ?>

<div class="bg-success py-5 my-5">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12 col-lg-5">
                <h1 class="font-kollektif text-white text-uppercase text-sm-center">
                    <i class="far fa-envelope mr-1"></i>
                    <?php echo $section_7['title'] ?>
                </h1>
            </div>
            <div class="col-12 col-lg-7">
                <!-- <form class="form-inline justify-content-center">
                    <div class="form-group mb-2">
                        <input type="text" class="form-control rounded-0" value="<?php echo $section_7['name_placeholder'] ?>">
                    </div>
                    <div class="form-group mx-md-1 mx-lg-3 mb-2">
                        <input type="email" class="form-control rounded-0" id="inputPassword2" placeholder="<?php echo $section_7['email_placeholder'] ?>">
                    </div>
                    <button type="submit" class="btn btn-dark rounded-0 hvr-icon-forward mb-2">
                        <?php echo $section_7['submit_button_label'] ?>
                        <i class="fas fa-chevron-right hvr-icon ml-1"></i>
                    </button>
                </form> -->

                <form>
                    <div class="form-row">
                        <div class="col-12 col-sm-8 col-md-5 col-lg-4 form-group text-center mx-auto">
                            <input type="email" class="form-control rounded-0" id="inputPassword2" placeholder="<?php echo $section_7['email_placeholder'] ?>">
                        </div>
                        <div class="col-12 col-sm-8 col-md-5 col-lg-4 form-group text-center mx-auto">
                            <input type="email" class="form-control rounded-0" id="inputPassword2" placeholder="<?php echo $section_7['email_placeholder'] ?>">
                        </div>
                        <div class="col-12 col-lg-4 text-center text-lg-left mt-3 mt-lg-0 form-group  mx-auto">
                            <button type="submit" class="btn btn-dark rounded-0 hvr-icon-forward mb-2">
                                <?php echo $section_7['submit_button_label'] ?>
                                <i class="fas fa-chevron-right hvr-icon ml-1"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>