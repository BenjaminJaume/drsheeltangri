<?php get_header();

$id = get_the_ID();

?>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="font-kollektif text-uppercase text-brand mb-0">
                <?php echo the_field('title', $id); ?>
            </h1>
            <p class="text-muted">
                <i class="far fa-clock"></i>
                <?php echo the_field('date_article', $id); ?>
            </p>

            <?php console($seminars_page_id); ?>
            <a href="<?php echo get_the_permalink($seminars_page_id); ?>" alt="" class="btn btn-outline-dark rounded-0 hvr-icon-back my-3">
                <i class="fas fa-arrow-left hvr-icon"></i>
                Back to <?php echo strtolower(get_the_title($seminars_page_id)); ?>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 my-4">
            <div class="font-big font-weight-light text-center m-0">
                <?php echo the_field('description', $id); ?>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 justify-content-center">
        <?php

        $images = get_field('images');

        if ($images) {
            // print_r($images);
            for ($i = 1; $i <= count($images); $i++) {
                if ($images[$i]['image']['ID']) {
                    $image_id = $images[$i]['image']['ID'];
                } else {
                    $image_id = $images[$i]['image'];
                }

                if ($image_id) {
        ?>
                    <div class="col-12 mb-4 text-center">
                        <p>
                            <a href="#" class="btn btn-link text-success" data-toggle="modal" data-target="#modal-<?php echo $i; ?>">
                                <?php echo $images[$i]['title']; ?>
                            </a>
                        </p>
                        <!-- Button trigger modal -->
                        <a href="#" data-toggle="modal" data-target="#modal-<?php echo $i; ?>">
                            <?php echo wp_get_attachment_image($image_id, 'medium', true, "class=card-img-top img-fluid frame-hover"); ?>
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="modal-<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $images[$i]['title']; ?>" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title font-kollektif text-brand" id="<?php echo $images[$i]['title']; ?>"><?php echo $images[$i]['title']; ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <a href="<?php echo get_the_permalink($image_id); ?>" alt="">
                                            <img src="<?php echo wp_get_attachment_url($image_id); ?>" class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-success rounded-0 hvr-shrink" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <?php
                }
            }
        }
        ?>
    </div>
</div>


<?php get_footer(); ?>