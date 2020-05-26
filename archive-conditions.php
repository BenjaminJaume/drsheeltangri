<?php

/*
Template Name: Conditions Treated
*/

get_header();

$condition_treated_page_id = 61;

?>

<style>
    .bg-header {
        background-image: url(<?php echo get_the_post_thumbnail_url($condition_treated_page_id); ?>);
        height: 400px;
    }
</style>

<?php if (get_the_post_thumbnail_url($condition_treated_page_id)) { ?>
    <div class="container-fluid img-text-container bg-header bg-cover m-0 p-0">
        <div class="centered">
            <h1 class="h1 text-center font-manrope text-uppercase text-primary font-weight-bold title-header-page frame py-1 py-sm-4 px-1 px-sm-4">
                <?php echo get_the_title($condition_treated_page_id); ?>
            </h1>
        </div>
    </div>
<?php } else { ?>
    <h1 class="h1 text-center font-manrope text-uppercase text-primary my-5">
        <?php echo get_the_title($condition_treated_page_id); ?>
    </h1>
<?php } ?>


<!-- <div class="container-fluid bg-header bg-cover m-0 p-0">
</div> -->

<div class="container my-5">
    <!-- <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 font-manrope text-primary text-uppercase mt-0 pt-0">
                <?php echo get_the_title($condition_treated_page_id);
                ?>
            </h1>
        </div>
    </div> -->
    <div class="row">
        <div class="col-12 text-center">
            <?php get_search_form(); ?>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">

                    <?php echo do_shortcode("[display_conditions]"); ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>