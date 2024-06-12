<?php

/*
Template Name: News
*/
get_header();
$title = get_field('title');
?>
<?php get_template_part('parts/pages/news/content', 'none'); ?>

<?php get_footer();
