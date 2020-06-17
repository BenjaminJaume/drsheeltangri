<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <style>
            .container-bg-img::before {
                background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);
            }
        </style>

        <?php if (get_the_post_thumbnail_url()) { ?>
            <div class="container-bg-img bg-cover m-0 p-0">
                <div class="container-bg-img-inner">
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
                <div class="col-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
<?php endwhile;
endif;
?>

<?php get_footer(); ?>