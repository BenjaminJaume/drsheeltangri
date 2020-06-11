<?php

function display_conditions()
{
    $str =        loop_category('Defense system');
    $str = $str . loop_category('Digestive/Immune System');
    $str = $str . loop_category('Hormonal System');
    $str = $str . loop_category('Learning Disabilities');
    $str = $str . loop_category('Advanced Conditions');

    return $str;
}
// register shortcode
add_shortcode('display_conditions', 'display_conditions');

function loop_category($category)
{
    $header_table = '
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
            </thead>
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="align-middle text-center">
                        <span class="font-manrope text-uppercase text-center m-0 p-0">
                            Conditions
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

    $footer_table = '</table></div>';

    $header_condition = '
    <div class="border-top border-right border-left text-center py-3">
        <p class="text-muted m-0 p-0">Category:</p>
        <h1 class="font-roboto text-uppercase font-weight-light text-center m-0">' . $category . '</h1>
    </div>';

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

    $str = '';
    for ($i = 0; $i < count($query); $i++) {
        $str = $str . '
    <tr>
        <td class="align-middle">
            <a href="' . get_post_permalink($query[$i]) . '" alt="" class="font-manrope text-uppercase">
                ' . get_the_title($query[$i]) . '
            </a>
        </td>
        <td class="align-middle text-center">
            <a href="' . get_post_permalink($query[$i]) . '" alt="" class="btn btn-primary font-manrope text-uppercase hvr-icon-forward rounded-0">
                <span class="is-medium">
                    More
                </span>
                <span class="is-default">
                    More
                </span>
                <i class="fas fa-chevron-right ml-md-2 px-1 px-md-0 hvr-icon"></i>
            </a>
            <a href="' . get_post_permalink($query[$i]) . '#video" alt="" class="btn btn-outline-primary font-manrope text-uppercase hvr-glow rounded-0  mt-2 mt-lg-0">
                <i class="fas fa-video"></i>
            </a>
        </td>
    </tr>';
    }

    $str = $header_condition . $header_table . $str . $footer_table;

    return $str;
}
