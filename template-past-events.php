<?php

/*
Template Name: Past Events
*/

get_header();

$events_articles_page_id = 75;
$events_articles = get_field('events_articles');

?>

<?php
$i = 0;

foreach ($events_articles as $e) {
    if ($e['image']) {
        if ($e['image']['ID']) {
            $id = $e['image']['ID'];
        } else {
            $id = $e['image'];
        }
?>
        <!-- Modal -->
        <div class="modal fade mx-auto" id="modal-<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-<?php echo $i; ?>-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content modal-content-events rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title mx-auto font-manrope text-primary" id="modal-<?php echo $i; ?>-label">
                            <?php echo $e['title'] ?>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <a class="close" data-dismiss="modal" aria-label="Close" style="opacity:1">
                            <?php
                            echo wp_get_attachment_image($id, '', false, 'class=img-fluid');
                            ?>
                        </a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-lg rounded-0 font-manrope text-uppercase" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
<?php }
    $i++;
} ?>


<div class="container-fluid my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 font-manrope text-primary text-uppercase mt-0 pt-0">
                <?php echo get_the_title($events_articles_page_id);
                ?>
            </h1>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5" id="card-deck-events">
        <?php
        $i = 0;
        foreach ($events_articles as $e) {
            if ($e['image']) {
                if ($e['image']['ID']) {
                    $id = $e['image']['ID'];
                } else {
                    $id = $e['image'];
                }
        ?>
                <div class="col mb-4">
                    <div class="card h-100">
                        <div class="card-header text-center">
                            <h5 class="card-title font-manrope my-auto">
                                <?php echo $e['title'] ?>
                            </h5>
                        </div>

                        <a data-toggle="modal" data-target="#modal-<?php echo $i; ?>">
                            <div style="background-image: url(<?php echo wp_get_attachment_url($id); ?>);" class="card-img-top bg-cover">
                            </div>
                        </a>

                        <div class="card-body text-center">
                            <p class="card-text font-weight-light"><?php echo $e['description']; ?></p>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success rounded-0 hvr-grow" data-toggle="modal" data-target="#modal-<?php echo $i; ?>">
                                See picture
                            </button>
                        </div>
                        <?php if ($e['date']) { ?>
                            <div class="card-footer text-center text-muted">
                                <i class="far fa-clock"></i>
                                <?php echo $e['date'] ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
        <?php
            }
            $i++;
        } ?>
    </div>
</div>

<?php get_footer(); ?>