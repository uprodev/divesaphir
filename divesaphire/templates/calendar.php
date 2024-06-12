<?php

/*
Template Name: Calendar
*/
get_header();
$title = get_field('title');
?>
<?php get_template_part('parts/pages/calendar/content', 'none'); ?>

<?php get_footer();
