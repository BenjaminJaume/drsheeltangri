<?php get_header(); ?>

<style>
    .bg-header {
        background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);
    }
</style>

<?php if (get_the_post_thumbnail_url()) { ?>
    <div class="container-fluid img-text-container bg-header bg-cover m-0 p-0">
        <div class="centered">
            <h1 class="h1 text-center font-kollektif text-uppercase font-weight-bold title-header-page frame py-1 py-sm-4 px-1 px-sm-4">
                <?php echo wp_title(''); ?>
            </h1>
        </div>
    </div>
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