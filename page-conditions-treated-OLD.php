<?php

/*
*/

get_header();

?>
<!-- Template Name: Conditions Treated -->

<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <h1 class="h1 text-center font-manrope text-uppercase text-peter-river mb-4">
                <?php echo wp_title(''); ?>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?php
            if (have_rows('conditions')) {
                $length = count(the_row());
                for ($i = 1; $i < $length; $i++) {
                    $condition = get_sub_field(strval($i));
                    echo the_permalink();
                    echo ('
                    
                    
                    <div>
                        <p>' . $condition['title'] .

                        ' <a href="condition?id=' . $i . '" alt="" class="btn btn-outline-success">
                            Learn more
                        </a>


                    </div>');
                }
            }
            ?>
        </div>
    </div>

</div>


<!-- https://www.youtube.com/watch?v=d0hD1qjQjJo -->
<?php get_footer(); ?>