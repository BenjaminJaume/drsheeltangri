<?php

/*
Template Name: Attention & Intention
*/

get_header();

?>

<div class="container my-5">
    <div class="row my-5">
        <div class="col-12">
            <?php echo do_shortcode('[audio src="' . wp_get_attachment_url(1129) . '"]'); ?>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-12">
            <?php echo do_shortcode('[audio src="' . wp_get_attachment_url(1130) . '"]'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?php
            the_post();
            the_content();
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>