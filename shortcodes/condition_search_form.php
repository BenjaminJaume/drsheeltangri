<?php

function condition_search_form()
{
    $args = [
        'post_type'      => 'conditions',
        'posts_per_page' => -1,
        'post_name_in'  => ['conditions'],
        'order' => 'ASC'
    ];
    $query = get_posts($args);
?>
    <form role="search" method="get" action="<?php echo get_site_url(); ?>">
        <div class="form-group">
            <select class="custom-select custom-select-lg" type="search" name="s" required="required" data-placeholder="Example: depression, migraines, concussion" data-allow-clear="1">
                <option></option>
                <?php foreach ($query as $id) { ?>
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
<?php }
// register shortcode
add_shortcode('condition_search_form', 'condition_search_form');
