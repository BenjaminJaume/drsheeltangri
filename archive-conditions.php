<?php

/*
Template Name: Conditions Treated
*/

// Get all the conditions
$args = [
    'post_type'      => 'conditions',
    'posts_per_page' => -1,
    'post_name_in'  => ['conditions'],
    'fields'         => 'ids'
];
$q = get_posts($args);

get_header();

$page_id = 61;

?>

<style>
    .bg-header {
        background-image: url(<?php echo get_the_post_thumbnail_url($page_id); ?>);
    }
</style>

<?php if (get_the_post_thumbnail_url($page_id)) { ?>
    <div class="container-fluid img-text-container bg-header bg-cover m-0 p-0">
        <div class="centered">
            <h1 class="h1 text-center font-manrope text-uppercase text-primary font-weight-bold title-header-page frame py-1 py-sm-4 px-1 px-sm-4">
                <?php echo get_the_title($page_id); ?>
            </h1>
        </div>
    </div>
<?php } else { ?>
    <h1 class="h1 text-center font-manrope text-uppercase text-primary my-5">
        <?php echo get_the_title($page_id); ?>
    </h1>
<?php } ?>


<div class="container my-5">
    <div class="row">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 text-center mx-auto">
            <h1 class="font-manrope font-weight-light text-center">
                Type a condition to find out what can be treated
            </h1>
            <form role="search" method="get" action="<?php echo get_site_url(); ?>">
                <div class="form-group">
                    <select class="custom-select custom-select-lg" type="search" name="s" required="required" data-placeholder="Example: depression, migraines, concussion" data-allow-clear="1">
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
    <div class="row my-5">
        <div class="col-12">
            <?php echo do_shortcode("[display_conditions]"); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>