<?php 

/* Template Name: Att Bio */

get_header(); ?>


<div id="internal_main" class="one_col">
	
	<div class="att_bio_video mobile">
					
					<a class="" href="">
						
						<div class="bio_img_wrapper">
					
							<?php $attorney_image = get_field( 'attorney_image' ); ?>
							
							<?php if ( $attorney_image ) : ?>
							
							<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
							
							<?php else:?>
							
							<img alt="Attoenry Placeholder" src="<?php bloginfo('template_directory');?>/images/placeholder.jpg"/>
							
							<?php endif; ?>
						
						</div><!-- bio_img_wrapper -->
						
						<div class="bio_video_title_wrapper">
							
							<div class="bio_play_wrapper"></div><!-- bio_play_wrapper -->
							
							<span class="bio_video_title">Hear from the Attorney</span><!-- bio_video_title -->
							
						</div><!-- bio_video_title_wrapper -->
					
					</a>
					
				</div><!-- att_bio_video -->
		
	<h1 class="centered"><?php the_title();?></h1>

	<div class="internal_container bio_wrapper">
		
		<div class="att_bio_intro">
			
			<div class="bio_blueline_wrapper">
				
				<span class="bio_blueline"></span><!-- bio_blueline -->
				
			</div><!-- bio_blueline_wrapper -->
			
			<div class="att_bio_intro_left">
				
				<div class="att_bio_video">
					
					<a class="" href="">
						
						<div class="bio_img_wrapper">
					
							<?php $attorney_image = get_field( 'attorney_image' ); ?>
							
							<?php if ( $attorney_image ) : ?>
							
							<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
							
							<?php else:?>
							
							<img alt="Attoenry Placeholder" src="<?php bloginfo('template_directory');?>/images/placeholder.jpg"/>
							
							<?php endif; ?>

						
						</div><!-- bio_img_wrapper -->
						
						<div class="bio_video_title_wrapper">
							
							<div class="bio_play_wrapper"></div><!-- bio_play_wrapper -->
							
							<span class="bio_video_title">Hear from the Attorney</span><!-- bio_video_title -->
							
						</div><!-- bio_video_title_wrapper -->
					
					</a>
					
				</div><!-- att_bio_video -->
				
			</div><!-- att_bio_intro_left -->
			
			<div class="att_bio_intro_right content">
				
				<?php the_field( 'att_bio_intro' ); ?>
				
			</div><!-- att_bio_intro_right -->
			
		</div><!-- att_bio_intro -->
		
		<div class="att_bio_content content">
			
		<?php the_field( 'att_bio_content' ); ?>
			
		</div><!-- att_bio_content -->
	
	</div><!-- internal_container -->

</div><!-- internal_main -->


<?php get_footer(); ?>


					 
					 	

