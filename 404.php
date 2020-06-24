<?php get_header(); ?>

<?php echo do_shortcode('[top_banner url=' . wp_get_attachment_url(1460) . ' title="No such page found."]'); ?>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <a href="<?php echo get_site_url(); ?>" alt="" class="btn btn-outline-dark rounded-0 hvr-icon-back my-3">
                <i class="fas fa-arrow-left hvr-icon"></i>
                Go back to the homepage
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>