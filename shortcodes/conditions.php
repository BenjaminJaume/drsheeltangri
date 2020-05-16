<?php

function display_conditions($atts)
{
    extract(shortcode_atts(array(
        'number' => '',
    ), $atts));

    if (empty($atts['number'])) {
        $number = -1;
    } else {
        $number = $atts['number'];
    }

    // Get the first $number conditions
    $atts = [
        'post_type'      => 'conditions',
        'posts_per_page' => $number,
        'post_name_in'  => ['conditions'],
        'fields'         => 'ids'
    ];
    $q = get_posts($atts);

    $str = '
    <thead class="thead-dark">
    
        <tr>
            <th scope="col" class="align-middle text-center">
                <span class="font-manrope text-uppercase text-center m-0 p-0">
                    Condition
                </span>
            </th>
            <th scope="col" class="align-middle text-center">
                <span class="font-manrope text-uppercase text-center my-0 p-0">
                    Description
                </span>
            </th>
            <th scope="col" class="align-middle text-center">
                <span class="font-manrope text-uppercase text-center my-0 p-0">
                    More
                </span>
            </th>
        </tr>
    </thead>
    <tbody>';

    for ($i = 0; $i < count($q); $i++) {
        $str = $str . ' 
        <tr>
            <td class="align-middle">
                <a href="' . get_post_permalink($q[$i]) . '" alt="" class="font-manrope text-uppercase">
                    ' . get_field('name', $q[$i]) . '
                </a>
            </td>
            <td class="align-middle">
                <span class="font-weight-light">' . get_field('description', $q[$i]) . '</span>
            </td>
            <td class="align-middle text-center">
                <a href="' . get_post_permalink($q[$i]) . '" alt="" class="btn btn-primary font-manrope text-uppercase hvr-icon-forward rounded-0">
                    <span class="is-medium">
                        More
                    </span>
                    <span class="is-default">
                        More
                    </span>
                    <i class="fas fa-chevron-right ml-md-2 hvr-icon"></i>
                </a>
                <a href="' . get_post_permalink($q[$i]) . '#video" alt="" class="btn btn-outline-primary font-manrope text-uppercase hvr-glow rounded-0">
                    <i class="fas fa-video"></i>
                </a>
            </td>
        </tr>';
    }

    return $str;
}
// register shortcode
add_shortcode('display_conditions', 'display_conditions');
