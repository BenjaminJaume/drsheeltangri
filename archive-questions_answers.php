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

$postType = get_queried_object();
$postTypeName = $postType->labels->name;

?>

<?php echo do_shortcode('[top_banner url="' . wp_get_attachment_url(1918) . '" title="' .  $postTypeName . '"]'); ?>


<div class="container my-5">
    <div class="row mb-5">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 text-center mx-auto">
            <h3 class="font-kollektif font-weight-light text-center">
                Type a keyword to find the answer you are looking for
            </h3>
            <form role="search" method="get" action="<?php echo get_site_url(); ?>">
                <div class="form-group">
                    <select class="custom-select custom-select-lg" type="search" name="s" required="required" data-placeholder="Example: Low blood, Grind teeth, Short Leg Syndrome" data-allow-clear="1">
                        <option></option>
                        <?php foreach ($q as $id) { ?>
                            <option value="<?php echo get_the_title($id); ?>">
                                <?php echo get_the_title($id); ?>
                            </option>
                        <?php } ?>
                    </select>

                    <button type="submit" class="btn btn-success rounded-0 hvr-icon-forward mt-3">
                        Search
                        <i class="fas fa-search hvr-icon ml-1"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="accordion" id="accordionQuestionsAnswers">
                <?php
                for ($i = 0; $i < count($q); $i++) { ?>

                    <div class="card">
                        <div class="card-header" id="headingAccordionQuestionsAnswers-<?php echo $i; ?>">
                            <h2 class="mb-0">
                                <button class="btn text-dark text-uppercase font-big text-left" type="button" data-toggle="collapse" data-target="#collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                    <?php echo get_the_title($q[$i]); ?>
                                </button>
                            </h2>
                        </div>

                        <div id="collapse-<?php echo $i; ?>" class="collapse" aria-labelledby="headingAccordionQuestionsAnswers-<?php echo $i; ?>" data-parent="#accordionQuestionsAnswers">
                            <div class="card-body">
                                <div class="mb-5">
                                    <h1 class="font-kollektif text-brand text-uppercase font-weight-light">
                                        Question:
                                    </h1>
                                    <?php the_field('question', $q[$i]); ?>
                                </div>

                                <div>
                                    <h1 class="font-kollektif text-dark text-uppercase font-weight-light">
                                        Answer:
                                    </h1>
                                    <?php the_field('answer', $q[$i]); ?>
                                </div>

                                <button class="btn btn-warning rounded-0 text-uppercase mt-5" type="button" data-toggle="collapse" data-target="#collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                    <i class="far fa-times-circle"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>