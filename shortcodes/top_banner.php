<?php

function top_banner($atts)
{
    extract(shortcode_atts(array(
        'url' => '',
        'title' => '',
    ), $atts));
?>
    <style>
        .top-banner {
            background-image: url(<?php echo $url; ?>);
        }
    </style>

    <div class="top-banner bg-cover mb-5"></div>

    <h1 class="h1 text-center text-success font-kollektif text-uppercase font-weight-bold mb-5">
        <?php echo $title; ?>
    </h1>

<?php }

// register shortcode
add_shortcode('top_banner', 'top_banner');  ?>