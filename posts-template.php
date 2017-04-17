<?php 
/*
	Template Name: posts-template
*/
?>
<?php get_header(); ?>
<div style=" background-color: #fafafa; padding-top: 120px; padding-bottom: 60px; margin-bottom: 20px; margin-top: -20px;">
	<center><h1 style="font-weight: 600; font-size: 3.6em;">Updates</h1></center>
<hr>
</div>

<div class="container">

		<?php // Display blog posts on any page @ https://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<div class="col-md-12  col-xs-12 col-xs-12">
	<div class="row">
<div class="col-md-12  col-xs-12 col-xs-12">
&nbsp;	<b class="date-posts"><?php the_date(); ?></b>
	<br>
	<br>
	</div>
<div class="col-md-12 col-xs-12 col-xs-12">
&nbsp;&nbsp;<?php the_post_thumbnail('thumbnail', array('class' => 'thumb,img-responsive')); ?>
	</div>
	<div class="col-md-12  col-xs-12 col-xs-12">
	<h2><a href="<?php the_permalink(); ?>" title="Read more">&nbsp;<?php the_title(); ?></a></h2>
	</div>
	
	<div class="col-md-12  col-xs-12 col-xs-12">
		<a class="excerpt-read" href="<?php the_permalink(); ?>" title="Read more">&nbsp;<?php the_excerpt(); ?> </a>
		<br>
	</div>
	</div>
	</div>
<hr>
		<?php endwhile; ?>

		<?php if ($paged > 1) { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
		</nav>

		<?php } else { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
		</nav>

		<?php } ?>

		<?php wp_reset_postdata(); ?>

	</div>

<?php get_footer(); ?>