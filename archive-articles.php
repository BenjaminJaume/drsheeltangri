<?php

/*
Template Name: Articles
*/

get_header();

// Get all the articles
$args = [
    'post_type'      => 'articles',
    'posts_per_page' => -1,
    'post_name_in'  => ['articles'],
    'fields'         => 'ids'
];
$q = get_posts($args);

?>

<style>
    .bg-header {
        background-image: url(<?php echo wp_get_attachment_url(268); ?>);
    }
</style>

<div class="container-fluid img-text-container bg-header bg-cover m-0 p-0">
    <div class="centered">
        <h1 class="h1 text-center font-kollektif text-uppercase font-weight-bold title-header-page frame py-1 py-sm-4 px-1 px-sm-4">
            Past Events & Articles
        </h1>
    </div>
</div>

<div class="container-fluid my-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-center" id="card-deck-events">
        <?php
        foreach ($q as $id) {
        ?>
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5 class="card-title font-kollektif my-auto">
                            <?php the_field('title', $id); ?>
                        </h5>
                    </div>

                    <?php
                    $images = get_field('images', $id);

                    if ($images['1']['image']['ID']) {
                        $id_image = $images['1']['image']['ID'];
                    } else {
                        $id_image = $images['1']['image'];
                    }
                    ?>
                    <a href="<?php echo the_permalink($id); ?>">
                        <img src="<?php echo wp_get_attachment_url($id_image); ?>" class="img-fluid" />
                    </a>

                    <div class="card-body text-center">
                        <p class="card-text font-weight-light">
                            <?php echo wp_trim_words(get_field('description', $id), 15); ?>
                        </p>

                        <!-- Button trigger modal -->
                        <a href="<?php echo the_permalink($id); ?>" class="btn btn-success rounded-0 hvr-grow">
                            More
                        </a>
                    </div>
                    <?php if (get_field('date_article', $id)) { ?>
                        <div class="card-footer text-center text-muted">
                            <i class="far fa-clock"></i>
                            <?php the_field('date_article', $id) ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php get_footer(); ?>