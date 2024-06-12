<?php

/*
Template Name: Liveboard
*/
get_header();
$title = get_field('title');
?>
<?php get_template_part('parts/pages/liveboard/content', 'none'); ?>

<?php get_footer();
