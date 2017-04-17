<?php get_header(); ?>

	<?php if ( have_posts() ) {


    while ( have_posts() ) {
 
        the_post(); ?>

<div style=" background-color: #fafafa; padding-top: 60px; padding-bottom: 20px; text-align: center;">

        <h2><?php the_title(); ?></h2>
        <b class="date-posts"><?php the_date(); ?></b>
 
   	</div>
 
<div class="container" style="padding-top: 20px; padding-bottom: 20px" >
        <?php the_content(); ?>
 
    <?php }
} ?>

	</div>