<?php

/*
Template Name: Home Page
*/
get_header();
$title = get_field('title');
?>
<?php get_template_part('parts/pages/home/content', 'none'); ?>

<?php get_footer();
