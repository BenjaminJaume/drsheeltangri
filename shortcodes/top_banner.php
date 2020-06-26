<?php

function top_banner($atts)
{
    extract(shortcode_atts(array(
        'url' => '',
        'title' => '',
    ), $atts));
?>
    <img src="<?php echo $url; ?>" alt="" class="top-banner mb-5" width="100%" />

    <h1 class="h1 text-center text-success font-kollektif text-uppercase font-weight-bold mb-5">
        <?php echo $title; ?>
    </h1>

<?php }

// register shortcode
add_shortcode('top_banner', 'top_banner');  ?>