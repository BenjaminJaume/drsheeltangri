<?php

function video_embeded($atts)
{
    extract(shortcode_atts(array(
        'url' => '',
    ), $atts));

    if (empty($atts['url'])) {
        // console('No parameters given');
    } else {
        $url = $atts['url'];
    }

    // extracting the video ID if it's a Youtube video
    if (strpos($url, 'watch?v=')) {
        parse_str(parse_url($url, PHP_URL_QUERY), $a);
        $url = 'https://www.youtube.com/embed/' . $a['v'];
    }

    return $url;
}
// register shortcode
add_shortcode('video_embeded', 'video_embeded');
