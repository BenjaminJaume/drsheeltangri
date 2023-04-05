<?php

// function display_conditions()
// {
//     $str =        loop_category('Defense system');
//     $str = $str . loop_category('Digestive/Immune System');
//     $str = $str . loop_category('Hormonal System');
//     $str = $str . loop_category('Learning Disabilities');
//     $str = $str . loop_category('Advanced Conditions');

//     return $str;
// }
// // register shortcode
// add_shortcode('display_conditions', 'display_conditions');

function loop_category($category)
{
    $args = [
        'post_type'          => 'conditions',
        'posts_per_page'     => -1,
        'post_name_in'       => ['conditions'],
        'meta_key'           => 'category',
        'meta_value'         => $category,
        'orderby'            => 'order',
        'order'              => 'ASC'
    ];

    $query = get_posts($args);

    $str = '<ul class="list-group">';
    $str = $str . '<li class="list-group-item bg-success text-uppercase font-bigger font-weight-light" style="height: 130px">' . $category . '</li>';

    for ($i = 0; $i < count($query); $i++) {
        $str = $str . '
        <li class="list-group-item">
            <a href="' . get_the_permalink($query[$i]) . '" alt="" class="text-dark text-uppercase">
                ' . get_the_title($query[$i]) . '
            </a>
        </li>';
    }

    $str = $str . '</ul>';

    return $str;
}
