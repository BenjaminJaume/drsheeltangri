<?php get_header(); ?>

<?php if (get_the_post_thumbnail_url()) { ?>
    <style>
        .container-bg-img::before {
            background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);
        }
    </style>

    <div class="container-bg-img">
        <div class="container-bg-img-inner">
            <h1 class="h1 text-center font-kollektif text-uppercase font-weight-bold title-header-page text-success py-1 py-sm-4 px-1 px-sm-4">
                <?php echo wp_title(''); ?>
            </h1>
        </div>
    </div>

    <!-- <div class="responsive-background background-position-fixed" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
        <div class="color-brand-filter">
            <div class="container-fluid py-5 px-lg-5">
                <div class="row h-100">
                    <div class="col-12">
                        <?php echo wp_title(''); ?>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="container-bg-img bg-header bg-cover opacity-0-75 m-0 p-0" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
        <div class="container-bg-img-inner">
            <h1 class="h1 text-center font-kollektif text-uppercase font-weight-bold title-header-page frame py-1 py-sm-4 px-1 px-sm-4">
                <?php echo wp_title(''); ?>
            </h1>
        </div>
    </div> -->
<?php } else { ?>
    <h1 class="h1 text-center font-kollektif text-uppercase my-5">
        <?php echo wp_title(''); ?>
    </h1>
<?php } ?>

<div class="container my-5">
    <div class="row">
        <div class="col-12 font-big font-weight-light line-height-big">
            <?php
            the_post();
            the_content();
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>