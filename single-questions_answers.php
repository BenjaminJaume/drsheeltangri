<?php get_header();

$id = get_the_ID();
?>

<div class="container my-5">
    <?php
    $question = get_field('q_a', $id);
    $i = 1;

    if ($q_a) : ?>
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="font-kollektif text-uppercase text-center text-brand font-weight-bold mb-0">
                    <?php
                    if (count($q_a) == 1) {
                        echo count($q_a) . ' Question & Answer found';
                    } else {
                        echo count($q_a) . ' Questions & Answers found';
                    } ?>
                </h1>
            </div>
        </div>
    <?php endif; ?>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="font-kollektif text-uppercase text-brand mb-0">
                <?php echo get_the_title($id); ?>
            </h1>
            <p class="text-muted text-capitalize text-center">
                <?php
                $postType = get_post_type_object(get_post_type());
                echo esc_html($postType->labels->singular_name);
                ?>
            </p>

            <?php

            $post_type = get_post_type();
            $post_type_data = get_post_type_object($post_type);
            $post_type_slug = $post_type_data->rewrite['slug'];
            $post_type_name = $post_type_data->labels->name;

            ?>
            <a href="<?php echo get_site_url() . '/' . $post_type_slug; ?>" alt="" class="btn btn-outline-dark rounded-0 hvr-icon-back my-3">
                <i class="fas fa-arrow-left hvr-icon"></i>
                Back to <?php echo strtolower($post_type_name); ?>
            </a>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-12">
            <h1 class="font-kollektif text-brand text-uppercase text-center">
                Question:
            </h1>
            <p class="font-big">
                <?php echo the_field('question', $id); ?>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h1 class="font-kollektif text-dark text-uppercase text-center">
                Answer:
            </h1>
            <p class="font-big">
                <?php echo the_field('answer', $id); ?>
            </p>
        </div>
    </div>


    <!-- <div class="row">
        <div class="col-12 my-4">
            <h1 class="font-kollektif text-brand text-center text-uppercase">Question:</h1>
            <p class="font-big font-weight-light text-center m-0">
                <?php echo the_field('question', $id); ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 my-4">
            <h1 class="font-kollektif text-warning text-center text-uppercase">Answer:</h1>
            <p class="font-big font-weight-light text-center m-0">
                <?php echo the_field('answer', $id); ?>
            </p>
        </div>
    </div> -->
</div>


<?php get_footer(); ?>