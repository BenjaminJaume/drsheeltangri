<?php get_header(); ?>

<?php

$args = [
    'post_type'      => 'conditions',
    'posts_per_page' => 10,
    'post_name_in'  => ['conditions'],
    'fields'         => 'ids'
];
$q = get_posts($args);

echo get_the_permalink();

?>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h3 class="font-manrope font-weight-light text-muted m-0 p-0">
                Condition:
            </h3>
            <h1 class="display-4 font-manrope text-peter-river text-uppercase mt-0 pt-0">
                <?php echo get_field('name', $q[0]); ?>
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <p class="font-weight-light">
                <?php echo get_field('description', $q[0]); ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#video">
                Watch Video
            </button>
        </div>

        <div>
            <!-- Modal -->
            <div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="videoTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="videoTitle"><?php echo get_field('name', $q[0]); ?> - Dr. Sheel Tangri</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo get_field('link_video', $q[0]); ?>" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary rounded-0 hvr-shrink" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>

<?php get_footer(); ?>