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
    <?php
    while (have_posts()) {
        the_post(); ?>
        <div class="row align-items-center">
            <?php if (has_post_thumbnail()) { ?>
                <div class="col-12 col-md-4 text-center mb-3 mb-md-0 mx-auto">
                    <a href="<?php echo the_permalink(); ?>" alt="" class="h1 font-weight-light">
                        <?php echo the_post_thumbnail('medium', 'class=img-fluid frame-hover'); ?>
                    </a>
                </div>
            <?php } ?>
            <div class="col-12 col-md-8 mx-auto">
                <p class="text-center text-md-left m-0">
                    <a href="<?php echo the_permalink(); ?>" alt="" class="h1 font-weight-light text-uppercase">
                        <?php echo get_the_title(); ?>
                    </a>
                </p>

                <div class="mt-3">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </div>
        <hr class="w-75 my-5" />
    <?php } ?>
</div>

<?php get_footer(); ?>