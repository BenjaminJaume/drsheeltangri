<?php get_header(); ?>

<?php

$header = "Location: " . get_site_url();
header($header);

exit();

?>

<?php get_footer(); ?>