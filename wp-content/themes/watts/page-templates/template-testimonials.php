<?php 

/* Template Name: Testimonials */

get_header(); ?>

<div class="internal_banner">
	
		<div class="internal_banner_inner">
		
			<h1><?php the_title();?></h1>
			
			<a class="button" href="#consultation">Request Free Consultation Here</a><!-- button -->
			
		</div><!-- internal_banner_inner -->
	
		<?php $reviews_banner = get_field( 'reviews_banner' ); ?>

		<img src="<?php echo $reviews_banner['url']; ?>" alt="<?php echo $reviews_banner['alt']; ?>" />
	
	</div><!-- internal_banner -->

<div id="internal_main">

<div class="reviews_slider_wrapper">
	
	<div class="reviews_slider_inner">
		
		<div class="reviews_slider_left reviews_slider_button">
			
			<?php echo file_get_contents("wp-content/themes/watts/images/arrow.svg"); ?>
			
		</div><!-- reviews_slider_left -->
		
		<div class="reviews_slider">
			
			<div class="reviews_single_slide">
				
				<img class="reviews_logo" src="<?php bloginfo('template_directory');?>/images/news-usa.jpg"/><!-- reviews_logo -->
				
				<span class="reviews_description">“Watts has soared to the top of the highly competitive personal injury law business.” </span><!-- reviews_description -->
				
				<span class="reviews_date">March 12, 2003</span><!-- reviews_date -->
				
			</div><!-- reviews_single_slide -->
			
			<div class="reviews_single_slide">
				
				<img class="reviews_logo" src="<?php bloginfo('template_directory');?>/images/news-usa.jpg"/><!-- reviews_logo -->
				
				<span class="reviews_description">“Watts has soared to the top of the highly competitive personal injury law business.”</span><!-- reviews_description -->
				
				<span class="reviews_date">March 12, 2003</span><!-- reviews_date -->
				
			</div><!-- reviews_single_slide -->
			
		</div><!-- reviews_slider -->
		
		<div class="reviews_slider_right reviews_slider_button">
			
			<?php echo file_get_contents("wp-content/themes/watts/images/arrow.svg"); ?>
			
		</div><!-- reviews_slider_right -->
		
	</div><!-- reviews_slider_inner -->
	
</div><!-- reviews_slider_wrapper -->


<div class="internal_container">
	
	
		
</div><!-- internal_container -->


</div><!-- internal_main -->


<?php get_footer(); ?>