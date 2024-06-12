<?php

/*
Template Name: uw-artist 
*/
get_header();
$title = get_field('title');
?>
<?php get_template_part('parts/pages/artist/content', 'none'); ?>

<?php get_footer();
