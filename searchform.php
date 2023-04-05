<?php

/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */

?>

<form role="search" method="get" class="form-inline justify-content-center my-2 my-lg-0" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="search" class="form-control form-control-lg rounded-0 mr-2" placeholder="Keywords" value="<?php echo get_search_query(); ?>" name="s" />
    <button type="submit" class="btn btn-dark btn-lg rounded-0 hvr-icon-wobble-horizontal my-2">
        Search
        <i class="fas fa-search hvr-icon ml-1"></i>
    </button>
</form>