<?php

/*
Template Name: Conditions Treated
*/

get_header();

$postType = get_queried_object();
$postTypeName = $postType->labels->name;

?>

<?php echo do_shortcode('[top_banner url=' . wp_get_attachment_url(1921) . ' title="Conditions treated"]'); ?>

<div class="container my-5">
    <div class="row">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 text-center mx-auto">
            <h3 class="font-kollektif font-weight-light text-center">
                Type in a condition to see how it can be treated, or look on the lists below
            </h3>
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
            <?php echo loop_category('Digestive / Immune System'); ?>
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