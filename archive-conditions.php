<?php

/*
Template Name: Conditions Treated
*/

get_header();

$page_id = 61;

?>

<style>
    .bg-header {
        background-image: url(<?php echo get_the_post_thumbnail_url($page_id); ?>);
    }
</style>

<?php if (get_the_post_thumbnail_url($page_id)) { ?>
    <div class="container-fluid img-text-container bg-header bg-cover m-0 p-0">
        <div class="centered">
            <h1 class="h1 text-center font-manrope text-uppercase font-weight-bold title-header-page frame py-1 py-sm-4 px-1 px-sm-4">
                <?php echo get_the_title($page_id); ?>
            </h1>
        </div>
    </div>
<?php } else { ?>
    <h1 class="h1 text-center font-manrope text-uppercase text-primary my-5">
        <?php echo get_the_title($page_id); ?>
    </h1>
<?php } ?>


<div class="container my-5">
    <div class="row">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 text-center mx-auto">
            <h1 class="font-manrope font-weight-light text-center">
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