<?php get_header(); ?>

<?php echo do_shortcode('[top_banner url="' . get_the_post_thumbnail_url() . '" title="' .  get_the_title() . '"]'); ?>

<div class="container my-5">
    <div class="row">
        <div class="col-12 font-big line-height-big">
            <div class="page-content">
                <?php
                the_post();
                the_content();
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>