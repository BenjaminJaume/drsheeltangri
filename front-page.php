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

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6 mx-auto my-auto">
            <div class="text-center py-5">
                <h1 class="h1 font-manrope text-uppercase font-white font-weight-bold m-0">
                    <?php echo $introduction['title']; ?>
                </h1>

                <h4 class="font-manrope text-success w-100 w-md-75 mx-auto mt-4">
                    <?php echo $introduction['introduction_content']; ?>
                </h4>

                <div class="pt-5">
                    <a href="<?php echo $introduction['button_1']['link']; ?>" alt="" class="btn btn-success hvr-icon-pulse-grow btn-lg rounded-0">
                        <?php echo $introduction['button_1']['label']; ?>
                        <i class="fas fa-book hvr-icon ml-1"></i>
                    </a>

                    <a href="<?php echo $introduction['button_2']['link']; ?>" alt="" class="btn btn-outline-success hvr-icon-hang btn-lg rounded-0">
                        <?php echo $introduction['button_2']['label']; ?>
                        <i class="fas fa-chevron-down hvr-icon ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 p-0">
            <iframe width="100%" height="500px" src="https://www.youtube.com/embed/KRFdfcNjj5Q?controls=0?autoplay=1?loop=1" frameborder="0" allow="autoplay">
            </iframe>
        </div>
    </div>
</div>

<article class="container-fluid bg-light py-5" id="presentation">
    <div class="row">
        <div class="col-12">
            <h1 class="h1 font-manrope text-uppercase text-center text-success font-weight-bold mt-0">
                <?php echo $section_1['title']; ?>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-auto mx-auto my-auto py-5 py-lg-0">
            <?php echo wp_get_attachment_image($section_1['image']['ID'], '', false, 'class=img-fluid frame'); ?>
        </div>
        <div class="col-12 col-lg-8 my-auto">
            <div class="text-center text-lg-left m-0 p-0 w-100 w-md-75 mx-auto">
                <p>
                    <?php echo $section_1['content_1']; ?>
                </p>

                <p class="font-weight-light">
                    <?php echo $section_1['content_2']; ?>
                </p>
            </div>
        </div>
    </div>
</article>

<article class="container my-5">
    <div class="row">
        <div class="col-12 mb-4">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">

                    <?php echo do_shortcode("[display_conditions number=4]"); ?>

                    <tr>
                        <td class="align-middle">
                            <p class="font-manrope font-weight-bold m-0">
                                <?php echo $section_2['bottom_message']['title']; ?>
                            </p>
                        </td>
                        <td class="align-middle">
                            <span class="font-weight-light"><?php echo get_field('description', $q[$i]); ?></span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="is-medium">
                                <a href="<?php echo $section_2['bottom_message']['link_video']; ?>" alt="" class="btn btn-success font-manrope text-uppercase hvr-glow rounded-0">
                                    <i class="fas fa-info-circle mr-md-1"></i>
                                    More
                                </a>
                            </span>
                            <span class="is-default">
                                <a href="<?php echo $section_2['bottom_message']['link_video']; ?>" alt="" class="btn btn-success font-manrope text-uppercase hvr-glow rounded-0">
                                    <i class="fas fa-info-circle mr-md-1"></i>
                                    Learn more
                                </a>
                            </span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-12 text-center">
            <div class="is-mobile mx-auto mb-4">
                <a href="<?php echo $section_2['condition_5']['link_video']; ?>" alt="" class="btn btn-success btn-lg hvr-glow rounded-0">
                    <i class="fas fa-info-circle mr-1"></i>
                    Learn more
                </a>
            </div>

            <div>
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</article>

<div class="container-fluid bg-light py-5">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <?php echo wp_get_attachment_image(79, '', false, 'class=img-fluid'); ?>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-12 text-center">
            <a href="<?php echo $section_3['button_1']['link']; ?>" alt="" class="btn btn-success btn-lg font-manrope rounded-0 text-uppercase hvr-icon-forward mb-4 mb-sm-auto">
                <?php echo $section_3['button_1']['label']; ?>
                <i class="fas fa-chevron-right ml-2 hvr-icon"></i>
            </a>
            <a href="<?php echo $section_3['button_2']['link']; ?>" alt="" class="btn btn-success btn-lg font-manrope rounded-0 text-uppercase hvr-icon-forward">
                <?php echo $section_3['button_2']['label']; ?>
                <i class="fas fa-chevron-right ml-2 hvr-icon"></i>
            </a>
        </div>
    </div>
</div>

<article class="container-fluid my-5">
    <div class="row">
        <div class="col-12 mb-5">
            <h1 class="h1 font-manrope text-uppercase text-center text-success font-weight-bold m-0">
                <?php echo $section_4['title']; ?>
            </h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-md-4 col-lg-3 text-center my-4">
            <a href="/other-techniques" alt="">
                <?php echo wp_get_attachment_image($section_4['category_1']['image']['ID'], '', false, 'class=img-fluid'); ?>
            </a>
            <h1 class="font-manrope font-bigger text-uppercase font-weight-bold">
                <?php echo $section_4['category_1']['title']; ?>
            </h1>
            <a href="/other-techniques" alt="" class="btn btn-success font-manrope hvr-glow rounded-0">
                <i class="fas fa-info-circle mr-1"></i>
                Learn More
            </a>
        </div>
        <div class="col-12 col-md-4 col-lg-3 text-center my-4">
            <a href="/other-techniques" alt="">
                <?php echo wp_get_attachment_image($section_4['category_2']['image']['ID'], '', false, 'class=img-fluid'); ?>
            </a>
            <h1 class="font-manrope font-bigger text-uppercase font-weight-bold">
                <?php echo $section_4['category_2']['title']; ?>
            </h1>
            <a href="/other-techniques" alt="" class="btn btn-success font-manrope hvr-glow rounded-0">
                <i class="fas fa-info-circle mr-1"></i>
                Learn More
            </a>
        </div>
        <div class="col-12 col-md-4 col-lg-3 text-center my-4">
            <a href="/other-techniques" alt="">
                <?php echo wp_get_attachment_image($section_4['category_3']['image']['ID'], '', false, 'class=img-fluid'); ?>
            </a>
            <h1 class="font-manrope font-bigger text-uppercase font-weight-bold">
                <?php echo $section_4['category_3']['title']; ?>
            </h1>
            <a href="/other-techniques" alt="" class="btn btn-success font-manrope hvr-glow rounded-0">
                <i class="fas fa-info-circle mr-1"></i>
                Learn More
            </a>
        </div>
    </div>
</article>

<div class="bg-light py-5">
    <article class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h1 class="h1 font-manrope text-uppercase text-center text-success font-weight-bold m-0">
                    <?php echo $section_5['title']; ?>
                </h1>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12 col-sm-6 text-center">
                <dl class="font-manrope text-uppercase">
                    <dd>
                        <a href="<?php echo $section_5['link_1']['link']; ?>" alt="" class="btn btn-light hvr-icon-forward border-0">
                            <u class="h4 letter-spacing-big">
                                <?php echo $section_5['link_1']['label']; ?></u>
                            <i class="fas fa-chevron-right hvr-icon align-text-top ml-1"></i>
                        </a>
                    </dd>
                    <dd>
                        <a href="<?php echo $section_5['link_2']['link']; ?>" alt="" class="btn btn-light hvr-icon-forward border-0">
                            <u class="h4 letter-spacing-big">
                                <?php echo $section_5['link_2']['label']; ?></u>
                            <i class="fas fa-chevron-right hvr-icon align-text-top ml-1"></i>
                        </a>
                    </dd>
                    <dd>
                        <a href="<?php echo $section_5['link_3']['link']; ?>" alt="" class="btn btn-light hvr-icon-forward border-0">
                            <u class="h4 letter-spacing-big">
                                <?php echo $section_5['link_3']['label']; ?></u>
                            <i class="fas fa-chevron-right hvr-icon align-text-top ml-1"></i>
                        </a>
                    </dd>
                    <dd>
                        <a href="<?php echo $section_5['link_4']['link']; ?>" alt="" class="btn btn-light hvr-icon-forward border-0">
                            <u class="h4 letter-spacing-big">
                                <?php echo $section_5['link_4']['label']; ?></u>
                            <i class="fas fa-chevron-right hvr-icon align-text-top ml-1"></i>
                        </a>
                    </dd>
                </dl>
            </div>
            <div class="col-12 col-sm-6 text-center">
                <dl class="font-manrope text-uppercase">
                    <dd>
                        <a href="<?php echo $section_5['link_5']['link']; ?>" alt="" class="btn btn-light hvr-icon-forward border-0">
                            <u class="h4 letter-spacing-big">
                                <?php echo $section_5['link_5']['label']; ?></u>
                            <i class="fas fa-chevron-right hvr-icon align-text-top ml-1"></i>
                        </a>
                    </dd>
                    <dd>
                        <a href="<?php echo $section_5['link_6']['link']; ?>" alt="" class="btn btn-light hvr-icon-forward border-0">
                            <u class="h4 letter-spacing-big">
                                <?php echo $section_5['link_6']['label']; ?></u>
                            <i class="fas fa-chevron-right hvr-icon align-text-top ml-1"></i>
                        </a>
                    </dd>
                    <dd>
                        <a href="<?php echo $section_5['link_7']['link']; ?>" alt="" class="btn btn-light hvr-icon-forward border-0">
                            <u class="h4 letter-spacing-big">
                                <?php echo $section_5['link_7']['label']; ?></u>
                            <i class="fas fa-chevron-right hvr-icon align-text-top ml-1"></i>
                        </a>
                    </dd>
                    <dd>
                        <a href="<?php echo $section_5['link_8']['link']; ?>" alt="" class="btn btn-light hvr-icon-forward border-0">
                            <u class="h4 letter-spacing-big">
                                <?php echo $section_5['link_8']['label']; ?></u>
                            <i class="fas fa-chevron-right hvr-icon align-text-top ml-1"></i>
                        </a>
                    </dd>
                </dl>
            </div>
        </div>
    </article>
</div>

<?php
if ($section_6['displayed'] == "Yes") { ?>
    <article class="container my-5">
        <div class="row">
            <div class="col-12 mb-5">
                <h1 class="h1 font-manrope text-uppercase text-center text-success font-weight-bold m-0">
                    <?php echo $section_6['title']; ?>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="carousel-front-page" class="carousel slide bg-light vh-100" data-ride="carousel">
                    <div class="carousel-inner h-100">

                        <?php
                        $iteration = 0;
                        $args = array('post_type' => 'testimonials', 'posts_per_page' => 5);
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();
                            $iteration++; ?>
                            <div class="carousel-item<?php if ($iteration == 1) echo ' active' ?> h-100" data-interval="10000">
                                <div class="carousel-caption text-center">
                                    <p class="font-italic font-big font-weight-light mb-3">
                                        "<?php the_field('content'); ?>"
                                    </p>
                                    <div>
                                        <span class="h5 font-manrope text-emerald">
                                            <?php the_field('full_name'); ?>
                                        </span>
                                        -
                                        <span class="h6 font-weight-light">
                                            <?php the_field('location'); ?>
                                        </span>
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

                                    <h6 class="text-muted">
                                        <i class="far fa-clock"></i>
                                        <?php the_field('date_testimonial'); ?>
                                    </h6>
                                </div>
                            </div>
                        <?php endwhile;
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

<div class="bg-dark py-5 my-5">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12 col-sm-6">
                <h1 class="font-manrope text-white text-uppercase text-sm-center">
                    <i class="far fa-envelope mr-1"></i>
                    <?php echo $section_7['title'] ?>
                </h1>
            </div>
            <div class="col-12 col-sm-6">
                <form class="form-inline justify-content-center">
                    <div class="form-group mb-2">
                        <input type="text" class="form-control rounded-0" value="<?php echo $section_7['name_placeholder'] ?>">
                    </div>
                    <div class="form-group mx-md-1 mx-lg-3 mb-2">
                        <input type="email" class="form-control rounded-0" id="inputPassword2" placeholder="<?php echo $section_7['email_placeholder'] ?>">
                    </div>
                    <div>

                        <button type="submit" class="btn btn-success rounded-0 hvr-icon-forward mb-2">
                            <?php echo $section_7['submit_button_label'] ?>
                            <i class="fas fa-chevron-right hvr-icon ml-1"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>