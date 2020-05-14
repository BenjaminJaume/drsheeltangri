<?php get_header();

$post_id = get_the_ID();

?>

<style>
    video::before {
        height: 250px;
        content: "";
        display: block;
    }
</style>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 font-manrope text-uppercase text-primary mb-0">
                <?php echo the_field('name', $post_id); ?>
            </h1>
            <h3 class="text-muted font-weight-light">
                Category: <?php echo the_field('category', $post_id); ?>
            </h3>

            <a href="conditions-treated" alt="" class="btn btn-outline-success rounded-0 hvr-icon-back my-3">
                <i class="fas fa-arrow-left hvr-icon"></i>
                Back to conditions
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 my-4">
            <p class="font-big font-weight-light text-center">
                <?php echo the_field('description', $post_id); ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="embed-responsive embed-responsive-16by9 border" id="video">
                <!-- <iframe class="embed-responsive-item" src="<?php echo get_field('link_video', $post_id); ?>" allowfullscreen></iframe> -->
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <?php
    $q_a = get_field('q_a');
    $i = 1;

    if ($q_a) : ?>
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="font-manrope text-uppercase text-center text-primary font-weight-bold mb-0">
                    <?php
                    if (count($q_a) == 1) {
                        echo count($q_a) . ' Question & Answer found';
                    } else {
                        echo count($q_a) . ' Questions & Answers found';
                    } ?>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php foreach ($q_a as $qa) : // variable must NOT be called $post (IMPORTANT)  
                    // ID of the question / answer post
                    // $qa->ID
                ?>
                    <div class="line-height-big">
                        <div class="text-center">
                            <h1 class="text-success font-manrope text-uppercase">
                                Question <?php echo $i ?>:
                            </h1>
                            <p class="font-big">
                                &quot;<?php the_field('question', $qa->ID); ?>&quot;
                            </p>
                        </div>

                        <div>
                            <h1 class="text-success text-center font-manrope text-uppercase">
                                Answer <?php echo $i ?>:
                            </h1>
                            <p class="font-weight-light">
                                <?php the_field('answer', $qa->ID); ?></span>
                            </p>
                        </div>
                    </div>
                <?php
                    $i++;
                endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</div>


<?php get_footer(); ?>