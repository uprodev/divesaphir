<?php

/*
Template Name: Faq
*/
get_header();
$title = get_field('title');
?>
<?php get_template_part('parts/pages/faq/content', 'none'); ?>

<?php get_footer();
