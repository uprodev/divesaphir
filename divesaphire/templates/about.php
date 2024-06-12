<?php

/*
Template Name: About
*/
get_header();
$title = get_field('title');
?>
<?php get_template_part('parts/pages/about/content', 'none'); ?>

<?php get_footer();
