<?php

/*
Template Name: Conditions Treated
*/

get_header();

?>

<style>
    .container-bg-img::before {
        background-image: url(<?php echo wp_get_attachment_url(1422); ?>);
    }
</style>

<div class="container-bg-img  m-0 p-0">
    <div class="container-bg-img-inner">
        <h1 class="h1 text-center font-kollektif text-uppercase font-weight-bold title-header-page frame py-1 py-sm-4 px-1 px-sm-4">
            Conditions
        </h1>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 text-center mx-auto">
            <h1 class="font-kollektif font-weight-light text-center">
                Type a condition to find out what can be treated
            </h1>
            <?php echo do_shortcode('[condition_search_form][/condition_search_form]'); ?>
        </div>
    </div>
</div>

<div class="container-fluid my-5">
    <div class="row row-col-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-start">
        <div class="col-12 text-center my-3">
            <?php echo loop_category('Defense system'); ?>
        </div>
        <div class="col-12 text-center my-3">
            <?php echo loop_category('Digestive/Immune System'); ?>
        </div>
        <div class="col-12 text-center my-3">
            <?php echo loop_category('Hormonal System'); ?>
        </div>
        <div class="col-12 text-center my-3">
            <?php echo loop_category('Learning Disabilities'); ?>
        </div>
        <div class="col-12 text-center my-3">
            <?php echo loop_category('Advanced Conditions'); ?>
        </div>
    </div>
</div>
<!-- </div> -->
</div>

<?php get_footer(); ?>