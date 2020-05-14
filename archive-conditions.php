<?php

/*
Template Name: Conditions Treated
*/

get_header();

// Get all the custom posts
$args = [
    'post_type'      => 'conditions',
    'posts_per_page' => 10,
    'post_name_in'  => ['conditions'],
    'fields'         => 'ids'
];
$q = get_posts($args);

$condition_treated_page_id = 61;

?>

<style>
    .bg-header {
        background-image: url(<?php echo get_the_post_thumbnail_url($condition_treated_page_id); ?>);
        height: 400px;
    }
</style>

<div class="container-fluid bg-header bg-cover m-0 p-0">
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 font-manrope text-primary text-uppercase mt-0 pt-0">
                <?php echo get_the_title($condition_treated_page_id);
                ?>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form class="form-inline justify-content-center my-2 my-lg-0">
                <input class="form-control form-control-lg rounded-0 mr-2" type="search" placeholder="Condition keyword" aria-label="Search">
                <button class="btn btn-success btn-lg rounded-0 hvr-icon-wobble-horizontal my-2" type="submit">
                    Search
                    <i class="fas fa-search hvr-icon ml-1"></i>
                </button>
            </form>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="align-middle text-center">
                                <span class="font-manrope text-uppercase text-center m-0 p-0">
                                    Condition
                                </span>
                            </th>
                            <th scope="col" class="align-middle text-center">
                                <span class="font-manrope text-uppercase text-center my-0 p-0">
                                    Description
                                </span>
                            </th>
                            <th scope="col" class="align-middle text-center">
                                <span class="font-manrope text-uppercase text-center my-0 p-0">
                                    More
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < count($q); $i++) { ?>
                            <tr>
                                <td class="align-middle">
                                    <a href="<?php echo get_post_permalink($q[$i]); ?>" alt="" class="font-manrope text-uppercase">
                                        <?php echo get_field('name', $q[$i]); ?>
                                    </a>
                                </td>
                                <td class="align-middle">
                                    <span class="font-weight-light"><?php echo get_field('description', $q[$i]); ?></span>
                                </td>
                                <td class="align-middle text-center">
                                    <a href="<?php echo get_post_permalink($q[$i]); ?>" alt="" class="btn btn-success font-manrope text-uppercase hvr-icon-forward rounded-0">
                                        <span class="is-medium">
                                            More
                                        </span>
                                        <span class="is-default">
                                            More
                                        </span>
                                        <i class="fas fa-info-circle ml-md-2 hvr-icon"></i>
                                    </a>
                                    <a href="<?php echo get_post_permalink($q[$i]); ?>#video" alt="" class="btn btn-warning font-manrope text-uppercase hvr-glow rounded-0">
                                        <i class="fas fa-video text-white"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>




            <!-- <ul>

                <li class="font-manrope my-3">
                    <a href="<?php echo get_post_permalink($q[$i]); ?>" alt="" class="font-manrope text-uppercase">
                        <?php echo get_field('name', $q[$i]); ?>
                    </a>
                    <span class="font-weight-light">: <?php echo get_field('description', $q[$i]); ?></span>
                    <a href="<?php echo get_post_permalink($q[$i]); ?>" alt="" class="ml-3 btn btn-success rounded-0 font-manrope hvr-icon-forward">
                        Learn More
                        <i class="fa fa-info-circle ml-2 hvr-icon"></i>
                    </a>
                    <a href="<?php echo get_post_permalink($q[$i]); ?>#video" alt="" class="ml-3 btn btn-outline-primary rounded-0 font-manrope hvr-icon-forward">
                        Watch video
                        <i class="fa fa-info-circle ml-2 hvr-icon"></i>
                    </a>
                </li>
            </ul> -->
        </div>
    </div>

</div>

<?php get_footer(); ?>