<?php

/*
Template Name: Online Tour
*/
get_header();
$title = get_field('title');
?>
<?php get_template_part('parts/pages/online-tour/content', 'none'); ?>

<?php get_footer();
