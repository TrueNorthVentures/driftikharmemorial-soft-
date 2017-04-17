<?php get_header(); ?>

<div class="content-container">

	
		<?php if(have_posts()) : ?>
		   <?php while(have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		 		
<div style=" background-color: #fafafa; padding-top: 60px; padding-bottom: 60px; margin-top: -20px;">

<div class="container" style="padding-top: 40px;">

		 		<div class ="col-md-6 col-sm-12 com-xs-12 opening-content" style="margin-top: -40px;">
		 		<?php the_content(); ?>
		 	</div>
	<div class ="col-md-6 col-sm-12 com-xs-12">
<?php echo do_shortcode('[metaslider id=132]'); ?>
	</div>
</div>
	</div>

	<div class="container testimonial-class" style="margin-top: 80px; margin-bottom: 80px;"
	
		<hr>
<div class="container" style="margin-top: 60px; margin-bottom: 60px;">
	<?php echo do_shortcode('[show_testimonials]'); ?>
	</div>
	</div>

<div class="container" style="margin-top: 20px; margin-bottom: 60px;">
<?php 
    echo do_shortcode("[metaslider id=238]"); 
?>
	<center> <a href="mailto:info@softpakistan.org" target="_top"><button id="submit-btn" style="margin-top: 60px; margin-bottom: 60px;"> Submit Thoughts </button> </center>

	</div>

<div style=" background-color: #fafafa; padding-top: 20px; padding-bottom: 20px; margin-top: -20px;">

	<div class="container" style="margin-top: 80px; margin-bottom: 80px;">
	<?php echo do_shortcode('[TABS_R id=102]'); ?>
	</div>
	</div>

<div style=" padding-top: 20px; padding-bottom: 20px; margin-top: -20px;">
		<center><h1>Family Life</h1></center>
	
		<hr>
		
<div class="container" style="margin-top: 60px; margin-bottom: 60px;">
<?php 
    echo do_shortcode("[metaslider id=167]"); 
?>
	</div>



	</div>
<div style=" background-color: #fafafa; padding-top: 20px; padding-bottom: 20px; margin-top: -20px;">
<div class="container" style="margin-top: 60px; margin-bottom: 60px;">
	<center><h1>Your Memories with Dr. Iftikhar Ahmad</h1></center>
	
		<hr>
		<center><div style="margin-top: 40px; margin-bottom: 40px;">

		<?php echo do_shortcode('[contact-form-7 id="187" title="Contact form 1"]'); ?>
	</div></center>
	</div>
	</div>
		 	</div>
			</div>
	
		   <?php endwhile; ?>


		<?php endif; ?>



<?php get_footer(); ?>