<?php

/*
Template Name: Custom Page
*/
get_header();
$title = get_field('title');
?>
<?php get_template_part('parts/pages/custom-page/content', 'none'); ?>

<?php get_footer();
