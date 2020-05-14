<?php

/*
 Template Name: Template Condition
 */

$content = get_field('content');

get_header();

?>

<style>
    .bg-header {
        background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);
        height: 400px;
    }
</style>

<div class="container-fluid bg-header bg-cover m-0 p-0">
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <h1 class="h1 text-center font-manrope text-uppercase text-peter-river mb-4">
                <?php echo wp_title(''); ?>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 font-big font-weight-light">
            <?php echo $content; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>