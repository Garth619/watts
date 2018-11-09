<?php 

/* Template Name: Testimonials */

get_header(); ?>

<div id="banner_trigger" class="internal_banner">
	
		<div class="internal_banner_inner">
		
			<h1><?php the_title();?></h1>
			
			<a class="button" href="#consultation"><?php the_field( 'request_button_verbiage',10); ?></a><!-- button -->
			
		</div><!-- internal_banner_inner -->
	
		<?php $reviews_banner = get_field( 'reviews_banner' ); ?>

		<img src="<?php echo $reviews_banner['url']; ?>" alt="<?php echo $reviews_banner['alt']; ?>" />
	
	</div><!-- internal_banner -->

<div id="internal_main">

<div class="reviews_slider_wrapper">
	
	<div class="reviews_slider_inner">
		
		<div class="reviews_slider_left reviews_slider_button">
			
			<?php echo file_get_contents("wp-content/themes/watts/images/arrow.svg"); ?>
			
			<span class="review_blue_line"></span><!-- review_blue_line -->
			
		</div><!-- reviews_slider_left -->
		
		<div class="reviews_slider">
			
			<?php if(get_field('reviews_slider_page')): ?>
			 
				<?php while(has_sub_field('reviews_slider_page')): ?>
			 
					<div class="reviews_single_slide">
				
					<?php $logo = get_sub_field( 'logo' ); ?>
					
					<img class="reviews_logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
		
				
					<span class="reviews_description"><?php the_sub_field( 'testimonial_intro_page' ); ?></span><!-- reviews_description -->
				
					<span class="reviews_date"><?php the_sub_field( 'date' ); ?></span><!-- reviews_date -->
				
			</div><!-- reviews_single_slide -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- reviews_slider -->
		
		<div class="reviews_slider_right reviews_slider_button">
			
			<span class="review_blue_line"></span><!-- review_blue_line -->
			
			<?php echo file_get_contents("wp-content/themes/watts/images/arrow.svg"); ?>
			
		</div><!-- reviews_slider_right -->
		
	</div><!-- reviews_slider_inner -->
	
</div><!-- reviews_slider_wrapper -->


<div class="internal_container reviews_wrapper">
	
	<div class="review_col">
		
		<?php if(get_field('reviews_lower_slider')): ?>
		 
			<?php while(has_sub_field('reviews_lower_slider')): ?>
		 
				<div class="single_review">
		
					<div class="single_review_inner">
		
						<span class="single_review_content"><?php the_sub_field( 'testimonial' ); ?></span><!-- single_review_content -->
		
						<span class="single_review_name"><?php the_sub_field( 'name' ); ?></span><!-- single_review_name -->
		
					</div><!-- single_review_inner -->
		
			</div><!-- single_review -->
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
	
		
	</div><!-- review_col -->
	
	<div class="review_col">
	
	<?php if(get_field('reviews_lower_slider_two')): ?>
		 
			<?php while(has_sub_field('reviews_lower_slider_two')): ?>
		 
				<div class="single_review">
		
					<div class="single_review_inner">
		
						<span class="single_review_content"><?php the_sub_field( 'testimonial' ); ?></span><!-- single_review_content -->
		
						<span class="single_review_name"><?php the_sub_field( 'name' ); ?></span><!-- single_review_name -->
		
					</div><!-- single_review_inner -->
		
			</div><!-- single_review -->
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>

	</div><!-- review_col -->
		
</div><!-- internal_container -->


</div><!-- internal_main -->


<?php get_footer(); ?>