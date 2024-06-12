<?php

/*
Template Name: Services Board
*/
get_header();
$title = get_field('title');
?>
<?php get_template_part('parts/pages/services-board/content', 'none'); ?>

<?php get_footer();
