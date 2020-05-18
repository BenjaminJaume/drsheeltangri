<?php

get_header();

// Get all the articles
$args = [
    'post_type'      => 'articles',
    'posts_per_page' => -1,
    'post_name_in'  => ['articles'],
    'fields'         => 'ids'
];
$q = get_posts($args);

$events_articles_page_id = 75;

?>

<div class="container-fluid my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 font-manrope text-primary text-uppercase mt-0 pt-0">
                <?php echo get_the_title($events_articles_page_id);
                ?>
            </h1>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5" id="card-deck-events">
        <?php
        $i = 0;
        foreach ($q as $id) {
            // if ($e['image']) {
            //     if ($e['image']['ID']) {
            //         $id_image = $e['image']['ID'];
            //     } else {
            //         $id_image = $e['image'];
            //     }
        ?>
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h5 class="card-title font-manrope my-auto">
                            <?php echo get_field('title', $id); ?>
                        </h5>
                    </div>

                    <?php
                    $images = get_field('images', $id);

                    if ($images) :
                    ?>
                        <a data-toggle="modal" data-target="#modal-<?php echo $i; ?>">
                            <div style="background-image: url(<?php echo wp_get_attachment_url($images['1']['image']); ?>);" class="card-img-top bg-cover">
                            </div>

                        </a>
                    <?php
                    endif;
                    ?>

                    <div class="card-body text-center">
                        <p class="card-text font-weight-light"><?php echo get_field('description', $id); ?></p>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success rounded-0 hvr-grow" data-toggle="modal" data-target="#modal-<?php echo $i; ?>">
                            More
                        </button>
                    </div>
                    <?php if ($e['date']) { ?>
                        <div class="card-footer text-center text-muted">
                            <i class="far fa-clock"></i>
                            <?php echo $e['date'] ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php
        }
        $i++;
        ?>
    </div>
</div>

<?php get_footer(); ?>