<?php get_header(); ?>

<?php
if (is_search()) {
    global $wp_query;

    if ($s == '') { ?>
        <div class="container my-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="h1 font-kollektif text-brand text-uppercase">
                        Make a search
                    </h1>

                    <div class="my-5">
                        <?php get_search_form(); ?>
                    </div>

                    <a href="<?php echo home_url('/'); ?>" alt="" class="btn btn-outline-success rounded-0 hvr-icon-back my-3">
                        <i class="fas fa-arrow-left hvr-icon"></i>
                        Back to the homepage
                    </a>
                </div>
            </div>
        </div>
        <?php
    } else {
        if ($wp_query->found_posts) {
        ?>
            <div class="container my-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="font-kollektif">
                            <?php
                            if (get_post_type() != 'testimonials') {
                                if ($wp_query->found_posts > 1) { ?>
                                    There are
                                    <span class="text-success"><?php echo $wp_query->found_posts; ?></span>
                                    results for your search
                                <?php
                                } else {
                                ?>
                                    There is
                                    <span class="text-success">
                                        <?php echo $wp_query->found_posts; ?>
                                    </span>
                                    result for
                                    "<?php echo $s; ?>"
                            <?php }
                            } ?>
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center my-5">
                        <?php get_search_form(); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="list-group">
                            <?php while (have_posts()) {
                                the_post();
                                if (get_post_type() != 'testimonials') { ?>
                                    <li class="list-group-item">
                                        <p class="text-muted text-capitalize m-0 p-0">
                                            <?php
                                            $postType = get_post_type_object(get_post_type());
                                            $postTypeName = $postType->name;
                                            $postTypeLabel = $postType->labels->singular_name;
                                            if (
                                                $postTypeName  == "articles" ||
                                                $postTypeName == "questions_answers" ||
                                                $postTypeName == "conditions" ||
                                                $postTypeName == "videos"
                                            ) {
                                            ?>
                                                <a href="<?php echo get_post_type_archive_link($postTypeName); ?>" alt="" class="text-dark">
                                                    #<?php echo esc_html($postTypeLabel); ?>
                                                </a>
                                            <?php } else {
                                                echo esc_html($postTypeLabel);
                                            } ?>
                                        </p>
                                        <a href=" <?php the_permalink(); ?>" title="<?php the_title(); ?>" class="h1 text-brand font-kollektif">
                                            <?php the_title(); ?>
                                        </a>
                                        <p>
                                            <?php the_excerpt(); ?>
                                        </p>
                                        <p>
                                            <a href="<?php the_permalink(); ?>" class="btn btn-dark rounded-0 hvr-icon-forward">
                                                Read More
                                                <i class="fas fa-chevron-right hvr-icon"></i>
                                            </a>
                                        </p>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                    </>
                </div>
            <?php } else { ?>
                <div class="container my-5">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1 class="font-kollektif text-warning">
                                There are no results for "<?php echo $s; ?>"
                            </h1>

                            <div class="my-5">
                                <?php get_search_form(); ?>
                            </div>

                            <a href="<?php echo home_url('/'); ?>" alt="" class="btn btn-outline-dark rounded-0 font-kollektif hvr-icon-back my-3">
                                <i class="fas fa-arrow-left hvr-icon"></i>
                                Back to the homepage
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php }
} else { ?>
        <div class="container my-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="h1 font-kollektif text-brand text-uppercase">
                        Make a search
                    </h1>

                    <div class="my-5">
                        <?php get_search_form(); ?>
                    </div>

                    <a href="<?php echo home_url('/'); ?>" alt="" class="btn btn-outline-success rounded-0 hvr-icon-back my-3">
                        <i class="fas fa-arrow-left hvr-icon"></i>
                        Back to the homepage
                    </a>
                </div>
            </div>
        </div>
    <?php
}

get_footer(); ?>