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

// function loop_category($category)
// {
//     $header_table = '
//         <div class="table-responsive">
//             <table class="table table-striped table-bordered table-hover">
//             <tbody>';

//     $footer_table = '</table></div>';

//     $header_condition = '
//     <div class="bg-success border-top border-right border-left text-center py-3">
//         <p class="text-muted m-0 p-0">Category:</p>
//         <h1 class="text-uppercase font-weight-light text-center m-0">' . $category . '</h1>
//     </div>';

//     $args = [
//         'post_type'          => 'conditions',
//         'posts_per_page'     => -1,
//         'post_name_in'       => ['conditions'],
//         'meta_key'           => 'category',
//         'meta_value'         => $category,
//         'orderby'            => 'order',
//         'order'              => 'ASC'
//     ];

//     $query = get_posts($args);

//     $str = '';
//     for ($i = 0; $i < count($query); $i++) {
//         $str = $str . '
//     <tr>
//         <td class="align-middle">
//             <a href="' . get_post_permalink($query[$i]) . '" alt="" class="font-manrope text-uppercase">
//                 ' . get_the_title($query[$i]) . '
//             </a>
//         </td>
//         <td class="align-middle text-center">
//             <a href="' . get_post_permalink($query[$i]) . '" alt="" class="btn btn-primary font-manrope text-uppercase hvr-icon-forward rounded-0">
//                 <span class="is-medium">
//                     More
//                 </span>
//                 <span class="is-default">
//                     More
//                 </span>
//                 <i class="fas fa-chevron-right ml-md-2 px-1 px-md-0 hvr-icon"></i>
//             </a>
//         </td>
//     </tr>';
//     }

//     $str = $header_condition . $header_table . $str . $footer_table;

//     return $str;
}
