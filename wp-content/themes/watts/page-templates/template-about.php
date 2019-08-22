<?php 

/* Template Name: About */

get_header(); ?>

<div id="internal_main">


	
<div class="internal_container about_wrapper">
	
		<div class="about_top">
			
			
			<div class="about_left content">
				
				<h1><?php the_title();?></h1>
				
				<div class="about_intro">
				
					<?php the_field( 'about_intro' ); ?>
				
				</div><!-- about_intro -->
				
				<?php the_field( 'about_content' ); ?>
				
			</div><!--about_left -->
			
			<div class="about_right">
				
				<div class="about_video">
					
					<a class="" href="//player.vimeo.com/video/<?php the_field( 'about_vimeo_id' ); ?>?portrait=0&autoplay=1" data-lity>
					
						<div class="about_image_overlay">
						
							<?php $video_image = get_field( 'video_image' ); ?>

							<img src="<?php echo $video_image['url']; ?>" alt="<?php echo $video_image['alt']; ?>" />

						
						</div><!-- about_image_overlay -->
						
						<div class="about_video_text">
							
							<div class="play_button_wrapper">
								
								<div class="play_button"></div><!-- play_button -->
								
							</div><!-- play_button_wrapper -->
							
							<span class="about_video_title"><?php the_field( 'video_call_to_action' ); ?></span><!-- about_video_title -->
							
						</div><!-- about_video_text -->
					
					</a>
					
				</div><!-- about_video -->
				
			</div><!--about_right -->
		
		
		</div><!-- about_top -->
		
		
		<div class="about_pa">
			
			
			<?php if(get_field('about_selling_points')): ?>
			 
				<?php while(has_sub_field('about_selling_points')): ?>
			 
					<div class="about_single_pa">
						
						
				
						<div class="single_pa_content">
				
							<?php $svg = get_sub_field( 'svg' ); ?>
							
							<img src="<?php echo $svg['url']; ?>" alt="<?php echo $svg['alt']; ?>" />
							
							<span class="single_pa_title"><?php the_sub_field( 'selling_point_type' ); ?></span><!-- single_pa_title -->
					
							<span class="aboutline"></span><!-- aboutline -->
				
						</div><!-- single_pa_content -->
				
						<div class="single_pa_hover">
							
							<a href="<?php the_sub_field( 'selling_points_link' ); ?>">
					
								<?php $svg_hover = get_sub_field( 'svg_hover' ); ?>
		
								<img src="<?php echo $svg_hover['url']; ?>" alt="<?php echo $svg_hover['alt']; ?>" />
		
								<span class="single_pa_hover_content"><?php the_sub_field( 'selling_points_content' ); ?></span><!-- single_pa_hover_content -->
						
							</a>
					
					</div><!-- single_pa_hover -->
					
					
				
				</div><!-- about_single_pa -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
					
		</div><!-- about_pa -->
		
		<div class="about_sellingpoints">
			
			<div class="about_sp_col">
				
				<h2><?php the_field( 'about_bottom_content_header' ); ?></h2>
				
				
				<?php if(get_field('about_spelling_points_verbiage_col_one')): ?>
				 
					<?php while(has_sub_field('about_spelling_points_verbiage_col_one')): ?>
				 
						<div class="single_sp">
					
							<span class="single_sp_title"><?php the_sub_field( 'selling_point_header' ); ?></span><!-- single_sp_title -->
					
							<span class="single_sp_conten content"><?php the_sub_field( 'selling_point_verbiage' ); ?></span><!-- single_sp_content -->
					
						</div><!-- single_sp -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
								
			</div><!-- about_sp_col -->
			
			<div class="about_sp_col">
				
				<?php if(get_field('about_spelling_points_verbiage_col_two')): ?>
				 
					<?php while(has_sub_field('about_spelling_points_verbiage_col_two')): ?>
				 
						<div class="single_sp">
					
							<span class="single_sp_title"><?php the_sub_field( 'selling_point_header' ); ?></span><!-- single_sp_title -->
					
							<span class="single_sp_conten content"><?php the_sub_field( 'selling_point_verbiage' ); ?></span><!-- single_sp_content -->
					
						</div><!-- single_sp -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
				
			</div><!-- about_sp_col -->
			
		</div><!-- about_sellingpoints -->
		
		
</div><!-- internal_container -->


</div><!-- internal_main -->


<?php get_footer(); ?>

