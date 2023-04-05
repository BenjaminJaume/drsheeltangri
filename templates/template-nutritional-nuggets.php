<?php
$image_1 = get_field('image_1', $nutritional_nuggets_page_id);
$image_2 = get_field('image_2', $nutritional_nuggets_page_id);
?>

<div class="container my-5">
    <div class="row">
        <div class="col-12 col-lg-6 text-center mx-auto mb-5 mb-lg-0">
            <h3 class="font-kollektif text-brand"><?php echo get_the_title($image_1['img']['id']); ?></h3>
            <a href="<?php echo wp_get_attachment_url($image_1['img']['id']); ?>" alt="">
                <?php echo wp_get_attachment_image($image_1['img']['id'], '', true, "class=img-fluid frame-hover"); ?>
            </a>
            <a href="<?php echo wp_get_attachment_url($image_1['img']['id']); ?>" alt="" class="btn btn-success rounded-0 mt-3" download>
                <?php echo $image_1['download_button_image']; ?>
            </a>
            <a href="<?php echo $image_1['pdf_file']['url']; ?>" alt="" class="btn btn-outline-success rounded-0 mt-3" download>
                <?php echo $image_1['download_button_pdf']; ?>
            </a>
        </div>
        <div class="col-12 col-lg-6 text-center mx-auto">
            <h3 class="font-kollektif text-brand"><?php echo get_the_title($image_2['img']['id']); ?></h3>
            <?php echo wp_get_attachment_image($image_2['img']['id'], '', true, "class=img-fluid frame"); ?>
            <a href="<?php echo wp_get_attachment_url($image_2['img']['id']); ?>" alt="" class="btn btn-success rounded-0 mt-3" download>
                <?php echo $image_2['download_button_image']; ?>
            </a>
            <a href="<?php echo $image_2['pdf_file']['url']; ?>" alt="" class="btn btn-outline-success rounded-0 mt-3" download>
                <?php echo $image_2['download_button_pdf']; ?>
            </a>
        </div>
    </div>
</div>