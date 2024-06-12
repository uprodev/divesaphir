<?php

/*
Template Name: Contact
*/
get_header();
$title = get_field('title');
?>
<?php get_template_part('parts/pages/contact/content', 'none'); ?>

<?php get_footer('contact');
