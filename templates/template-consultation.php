<?php

/*
Template Name: Consultation
*/

get_header();

$page_ID = get_the_ID();

?>

<?php echo do_shortcode('[top_banner url="' . get_the_post_thumbnail_url($page_ID) . '" title="' . get_the_title(get_the_ID()) . '"]'); ?>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <?php
            the_post();
            the_content();
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>