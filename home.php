<?php
/*
Template Name: Home page
*/
 get_header();?>

    <?php get_template_part('home-sections/section', '1') ;?>
    <?php get_template_part('home-sections/section', '2') ;?>
    <?php get_template_part('home-sections/section', '3') ;?>
    <?php get_template_part('home-sections/section', '4') ;?>
    <?php get_template_part('home-sections/section', '5') ;?>

<?php get_footer();?>