<?php get_header(); ?>

<?php

// Get all the custom posts
$args = [
    'post_type'      => 'conditions',
    'posts_per_page' => 10,
    'post_name_in'  => ['conditions'],
    'fields'         => 'ids'
];
$q = get_posts($args);

?>

<div class="container my-5">
    <?php
    for ($i = 0; $i < count($q); $i++) { ?>
        <div class="row my-5">
            <div class="col-12 text-center">
                <h3 class="font-manrope font-weight-light text-muted m-0 p-0">
                    Condition:
                </h3>
                <h1 class="display-4 font-manrope text-peter-river text-uppercase mt-0 pt-0">
                    <?php echo get_field('name', $q[$i]); ?>
                </h1>
            </div>
            <div class="col-12 text-center">
                <p class="font-weight-light">
                    <?php echo get_field('description', $q[$i]); ?>
                </p>
                <a href="<?php echo get_post_permalink($q[$i]); ?>" alt="" class="btn btn-outline-success">
                    Learn More
                </a>
            </div>
        </div>
    <?php } ?>

</div>

<?php get_footer(); ?>