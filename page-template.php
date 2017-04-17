<?php
/*
Template Name: page-template
*/
//Display the header
get_header()?>

<div class="container">
<?php the_post();
the_content(); ?>
    </div>
<?php get_footer();
?>
