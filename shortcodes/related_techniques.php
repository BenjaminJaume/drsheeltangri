<?php

function related_techniques($atts)
{
    ob_start();

    // NOT page ID = 19;
    // NET page ID = 23;
    // Energetic Rebalancing page ID = 27;
    // Chiropractic page ID = 21;
    // Nutrition page ID = 25;

    $techniques_ID = [19, 23, 27, 21, 25];
?>
    <hr class="w-75 my-5" />

    <h1 class="text-success text-center text-uppercase mb-5">
        Related techniques
    </h1>

    <div class="container-fluid">
        <div class="row justify-content-start">
            <?php foreach ($techniques_ID as $id) { ?>
                <?php
                if ($id != get_the_ID()) { ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mx-auto">
                        <a href="<?php echo get_the_permalink($id); ?>" alt="" class="text-success">
                            <?php echo get_the_post_thumbnail($id, 'thumbnail', "class=img-fluid frame-hover") ?>
                        </a>
                        <br />
                        <p class="text-uppercase font-weight-normal mt-3">
                            <a href="<?php echo get_the_permalink($id); ?>" alt="" class="text-success">
                                <?php echo get_the_title($id); ?>
                            </a>
                        </p>
                    </div>
            <?php }
            } ?>
        </div>
    </div>

<?php
    return ob_get_clean();
}

// register shortcode
add_shortcode('related_techniques', 'related_techniques');  ?>