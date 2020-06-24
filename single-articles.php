<?php get_header();

$id = get_the_ID();

?>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 font-kollektif text-uppercase text-brand mb-0">
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

    <?php

    $images = get_field('images');
    $i = 0;

    if ($images) :
        foreach ($images as $image) :
            // ID of the image
            if ($image['image']) {
                if ($image['image']['ID']) {
                    $id_image = $image['image']['ID'];
                } else {
                    $id_image = $image['image'];
                }

    ?>
                <div class="row <?php if ($image['title']) {
                                    echo 'my-5';
                                } ?>">
                    <div class="col-12">
                        <?php if (!$image['title']) { ?>
                            <hr class="w-75 my-5" />
                        <?php } else { ?>
                            <h1 class="text-center font-kollektif text-brand">
                                <?php echo $image['title']; ?>
                            </h1>
                        <?php } ?>
                        <img src="<?php echo wp_get_attachment_url($id_image); ?>" class="img-fluid" />
                    </div>
                </div>
    <?php
            }
            $i++;
        endforeach;
    endif;
    ?>
</div>


<?php get_footer(); ?>