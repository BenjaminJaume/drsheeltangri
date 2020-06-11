<?php

/*
Template Name: Attention & Intention
*/

get_header(); ?>

<style>
    .bg-header {
        background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);
    }
</style>

<?php if (get_the_post_thumbnail_url()) { ?>
    <div class="container-fluid img-text-container bg-header bg-cover m-0 p-0">
        <div class="centered">
            <h1 class="h1 text-center font-manrope text-uppercase text-success font-weight-bold title-header-page frame py-1 py-sm-4 px-1 px-sm-4">
                <?php echo wp_title(''); ?>
            </h1>
        </div>
    </div>
<?php } else { ?>
    <h1 class="h1 text-center font-manrope text-uppercase text-success my-5">
        <?php echo wp_title(''); ?>
    </h1>
<?php } ?>

<div class="container my-5">
    <div class="row my-5">
        <div class="col-12 text-center">
            <h1 class="font-manrope text-brand font-weight-light">
                This page is dedicated to the Attention & Intention process.<br />
                Listen to Dr. Sheel Tangri and read the material below.
            </h1>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center my-5 mx-lg-5">
        <div class="col-12 text-center mb-5 mb-xl-0">
            <h4 class="text-success">
                Attention & Intention
            </h4>

            <?php // echo do_shortcode('[audio src="' . wp_get_attachment_url(1197) . '"][/audio]'); 
            ?>

            <!-- <a href="<?php echo wp_get_attachment_url(1197); ?>" class="btn btn-success rounded-0 mt-3" download="">
                Download the audio file
            </a> -->
            <p>Not yet available</p>
        </div>
        <div class="col-12 text-center mb-5 mb-xl-0">
            <h4 class="text-success">
                Guided prayer
            </h4>

            <?php // echo do_shortcode('[audio src="' . wp_get_attachment_url(1130) . '"][/audio]'); 
            ?>

            <!-- <a href="<?php echo wp_get_attachment_url(1130); ?>" class="btn btn-success rounded-0 mt-3" download="">
                Download the audio file
            </a> -->
            <p>Not yet available</p>
        </div>
        <div class="col-12 text-center">
            <h4 class="text-success">
                How to use the Power of Attention and Intention
            </h4>

            <?php echo do_shortcode('[audio src="' . wp_get_attachment_url(1203) . '"][/audio]'); ?>

            <a href="<?php echo wp_get_attachment_url(1203); ?>" class="btn btn-success rounded-0 mt-3" download="">
                Download the audio file
            </a>
        </div>
    </div>
</div>
<div class="container my-5">
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