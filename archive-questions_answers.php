<?php

/*
Template Name: Questions & Answers
*/

get_header();

// Get all the custom posts
$args = [
    'post_type'      => 'questions_answers',
    'posts_per_page' => -1,
    'post_name_in'  => ['questions_answers'],
    'fields'         => 'ids'
];
$q = get_posts($args);

$condition_treated_page_id = 522;

?>

<style>
    .bg-header {
        background-image: url(<?php echo get_the_post_thumbnail_url($condition_treated_page_id); ?>);
        height: 400px;
    }
</style>

<div class="container-fluid bg-header bg-cover m-0 p-0">
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 font-manrope text-primary text-uppercase mt-0 pt-0">
                <?php echo count($q) . ' ' . get_the_title($condition_treated_page_id);
                ?>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?php
            for ($i = 0; $i < count($q); $i++) { ?>
                <div class="line-height-big">
                    <div class="text-center">
                        <h1 class="text-success font-manrope text-uppercase">
                            Question <?php echo $i + 1; ?>:
                        </h1>
                        <p class="font-big">
                            &quot;<?php echo get_field('question', $q[$i]); ?>&quot;
                        </p>
                    </div>

                    <div>
                        <h1 class="text-success text-center font-manrope text-uppercase">
                            Answer <?php echo $i + 1; ?>:
                        </h1>
                        <p class="font-weight-light">
                            <?php echo get_field('answer', $q[$i]); ?>
                        </p>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>

</div>

<?php get_footer(); ?>