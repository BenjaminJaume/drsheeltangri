<?php

$introduction = get_field('introduction', $page_ID);

$section_1 = get_field('section_1', $page_ID);
$section_2 = get_field('section_2', $page_ID);
$section_3 = get_field('section_3', $page_ID);
$section_4 = get_field('section_4', $page_ID);
$section_5 = get_field('section_5', $page_ID);
$section_6 = get_field('section_6', $page_ID);
$section_7 = get_field('section_7', $page_ID);

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
                    <?php echo $introduction['subtitle']; ?>
                </h3>

                <h1 class="">
                    <?php echo wp_get_attachment_image(1327, [28, 28], true, "class=img-fluid"); ?>
                </h1>

                <div class="col-12 col-sm-10 col-md-8 text-center mx-auto">
                    <q class="font-merriweather letter-spacing-big text-light-grey font-italic">
                        <?php echo $introduction['introduction_content']; ?>
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
                <h1 class="font-kollektif text-grey text-uppercase font-weight-bold mb-5">
                    <?php echo $section_1['title']; ?>
                </h1>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 text-center mb-5 mb-lg-0">
                <a href="<?php echo get_permalink($book_page_id); ?>" alt="">
                    <?php if ($section_1['book_picture']['ID']) {
                        $book_picture_id = wp_get_attachment_url($section_1['book_picture']['ID']);
                    } else {
                        $book_picture_id = wp_get_attachment_url($section_1['book_picture']);
                    } ?>
                    <img src="<?php echo $book_picture_id; ?>" alt="" class="img-fluid frame-hover" />
                </a>
            </div>
            <div class="col-12 col-lg-6 text-center">
                <h1 class="text-brand font-kollektif font-weight-bold mb-1">
                    <?php echo $section_1['book_title']; ?>
                </h1>
                <h4 class="text-light-grey font-italic font-merriweather mb-3">
                    <?php echo $section_1['book_subtitle']; ?>
                </h4>
                <p class="text-light-grey">
                    <?php echo $section_1['author']; ?>
                </p>
                <a href="<?php echo get_permalink($book_page_id); ?>" alt="" class="btn btn-dark btn-lg rounded-0 hvr-icon-forward mb-3">
                    <?php echo $section_1['label_download_button']; ?>
                    <i class="fas fa-book hvr-icon ml-1"></i>
                </a>
            </div>
        </div>
    </article>
</div>

<article class="container-fluid my-5">
    <div class="row">
        <div class="col-12">
            <div style="background-image: url(<?php echo wp_get_attachment_url($section_2['top_picture']['ID']); ?>); height: 250px" class="bg-cover">
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-sm-10 col-md-8 text-center mx-auto">
            <h1 class="h1 font-kollektif text-uppercase text-center text-brand font-weight-bold mb-5">
                <?php echo $section_2['title']; ?>
            </h1>
            <p>
                <?php echo $section_2['content']; ?>
            </p>
        </div>
    </div>
</article>

<div class="bg-light">
    <article class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="h1 font-kollektif text-uppercase text-center text-dark font-weight-bold mb-5">
                    <?php echo $section_3['title']; ?>
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
                    <?php echo $section_3['text_more']; ?>
                </h4>
            </div>
            <div class="col-12 text-center">
                <a href="<?php echo get_site_url() . '/conditions-treated'; ?>" alt="" class="btn btn-lg btn-dark font-kollektif text-uppercase hvr-icon-forward rounded-0">
                    <?php echo $section_3['label_button_condition_page']; ?>
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
                    <?php echo $section_3['label_search_condition']; ?>
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
                <?php echo $section_4['title']; ?>
            </h1>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 text-center mx-auto">
            <p class="font-big">
                <?php echo $section_4['content']; ?>
            </p>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-12 text-center">
            <a href="<?php echo $section_4['button_1']['link']; ?>" alt="" class="btn btn-success rounded-0 hvr-icon-forward m-2">
                <?php echo $section_4['button_1']['label']; ?>
                <i class="fas fa-chevron-right ml-2 hvr-icon"></i>
            </a>
            <a href="<?php echo $section_4['button_2']['link']; ?>" alt="" class="btn btn-success rounded-0 hvr-icon-forward m-2">
                <?php echo $section_4['button_2']['label']; ?>
                <i class="fas fa-chevron-right ml-2 hvr-icon"></i>
            </a>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12 text-center">
            <?php echo do_shortcode('[paypal_button][/paypal_button]');
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <a href="<?php echo get_permalink($not_page_id); ?>" alt="">
                <img src="<?php echo wp_get_attachment_url($section_4['image']['ID']); ?>" alt="" class="img-fluid" style="height: 200px" />
            </a>
        </div>
    </div>
</div>

<hr class="w-50 my-5" />

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

<div class="bg-brand my-5">
    <article class="container py-5">
        <div class="row mb-5">
            <div class="col-12 text-center mx-auto">
                <h1 class="h1 font-kollektif text-uppercase text-center font-weight-bold m-0">
                    Latest posts
                </h1>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 justify-content-center">
            <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 4, // Number of recent posts thumbnails to display
                'post_status' => 'publish' // Show only the published posts
            ));
            foreach ($recent_posts as $post) : ?>
                <div class="col text-center mb-5 mb-lg-0">
                    <a href="<?php echo get_permalink($post['ID']) ?>">
                        <?php echo get_the_post_thumbnail($post['ID'], 'thumbnail', 'class=img-fluid frame-hover text-decoration-none mb-3'); ?>
                    </a>

                    <a href="<?php echo get_permalink($post['ID']) ?>" class="h5 btn-link text-dark">
                        <p><?php echo $post['post_title'] ?></p>
                    </a>
                </div>
            <?php endforeach;
            wp_reset_query(); ?>
        </div>
    </article>
</div>

<div class="container-fluid my-5">
    <div class="row">
        <div class="col-12">
            <div style="background-image: url(<?php echo wp_get_attachment_url($section_6['image']['ID']); ?>); height: 250px;" class="bg-cover frame">
            </div>
        </div>
    </div>
</div>

<article class="container my-5">
    <div class="row">
        <div class="col-12 text-center my-4">
            <h3 class="font-kollektif text-uppercase font-weight-light mb-4">
                <?php echo $section_5['sub_section_1']['title']; ?>
            </h3>
            <p class="m-0">
                <?php for ($i = 1; $i <= count($section_5['sub_section_1']['links']); $i++) { ?>
                    <a href="<?php echo $section_5['sub_section_1']['links'][$i]['link']; ?>" class="btn btn-dark btn-lg rounded-0 m-1">
                        <?php echo $section_5['sub_section_1']['links'][$i]['title']; ?>
                    </a>
                <?php } ?>
            </p>
        </div>
        <div class="col-12 text-center my-4">
            <h3 class="font-kollektif text-uppercase font-weight-light mb-4">
                <?php echo $section_5['sub_section_2']['title']; ?>
            </h3>
            <p class="m-0">
                <?php for ($i = 1; $i <= count($section_5['sub_section_2']['links']); $i++) { ?>
                    <a href="<?php echo $section_5['sub_section_2']['links'][$i]['link']; ?>" class="btn btn-dark btn-lg rounded-0 m-1">
                        <?php echo $section_5['sub_section_2']['links'][$i]['title']; ?>
                    </a>
                <?php } ?>
            </p>
        </div>
        <div class="col-12 text-center my-4">
            <h3 class="font-kollektif text-uppercase font-weight-light mb-4">
                <?php echo $section_5['sub_section_3']['title']; ?>
            </h3>
            <p class="m-0">
                <?php
                $the_query = new WP_Query('posts_per_page=5');

                while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                    <a href="<?php echo the_permalink(); ?>" class="btn btn-dark btn-lg rounded-0 m-1">
                        <?php echo the_title(); ?>
                    </a>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </p>
        </div>
    </div>
</article>

<?php if ($section_7['display'] == 'Yes') { ?>
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
<?php } ?>

<?php get_footer(); ?>