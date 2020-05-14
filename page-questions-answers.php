<?php get_header(); ?>

<?php

$args = [
    'post_type'      => 'questions_answers',
    'posts_per_page' => 1,
    'post_name_in'  => ['questions_answers'],
    'fields'         => 'ids'
];
$q = get_posts($args);

echo $q[0];

?>

<?php get_footer(); ?>