<?php 

/* Template Name: Att Bio */

get_header(); ?>


<div id="internal_main" class="one_col">
	
	<div class="att_bio_video mobile">
					
					<?php if(get_field('vimeo_id_att')) : ?>
					
					<!-- shows video -->
					
					<a href="//player.vimeo.com/video/<?php the_field( 'vimeo_id_att' ); ?>?portrait=0&autoplay=1" data-lity>
						
						<div class="bio_img_wrapper">
					
							<?php $attorney_image = get_field( 'attorney_image' ); ?>
							
							<?php if ( $attorney_image ) : ?>
							
							<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
							
							<?php else:?>
							
							<img alt="Attorney Placeholder" src="<?php bloginfo('template_directory');?>/images/placeholder.jpg"/>
							
							<?php endif; ?>

						</div><!-- bio_img_wrapper -->
						
						<div class="bio_video_title_wrapper">
							
							<div class="bio_play_wrapper"></div><!-- bio_play_wrapper -->
							
							<span class="bio_video_title"><?php the_field( 'att_video_title'); ?></span><!-- bio_video_title -->
							
						</div><!-- bio_video_title_wrapper -->
					
					</a>
					
					<?php else:?>
					
					<!-- shows just image if there isn't a vimeo -->
					
					<div class="bio_img_wrapper">
					
							<?php $attorney_image = get_field( 'attorney_image' ); ?>
							
							<?php if ( $attorney_image ) : ?>
							
							<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
							
							<?php else:?>
							
							<img alt="Attorney Placeholder" src="<?php bloginfo('template_directory');?>/images/placeholder.jpg"/>
							
							<?php endif; ?>

						
						</div><!-- bio_img_wrapper -->					
					
					<?php endif;?>
					
				</div><!-- att_bio_video -->
		
	<h1 class="centered"><?php the_title();?></h1>

	<div class="internal_container bio_wrapper">
		
		<div class="att_bio_intro">
			
			<div class="bio_blueline_wrapper">
				
				<span class="bio_blueline"></span><!-- bio_blueline -->
				
			</div><!-- bio_blueline_wrapper -->
			
			<div class="att_bio_intro_left">
				
				<div class="att_bio_video">
					
					<?php if(get_field('vimeo_id_att')) : ?>
					
					<!-- shows video -->
					
					<a href="//player.vimeo.com/video/<?php the_field( 'vimeo_id_att' ); ?>?portrait=0&autoplay=1" data-lity>
						
						<div class="bio_img_wrapper">
					
							<?php $attorney_image = get_field( 'attorney_image' ); ?>
							
							<?php if ( $attorney_image ) : ?>
							
							<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
							
							<?php else:?>
							
							<img alt="Attorney Placeholder" src="<?php bloginfo('template_directory');?>/images/placeholder.jpg"/>
							
							<?php endif; ?>

						</div><!-- bio_img_wrapper -->
						
						<div class="bio_video_title_wrapper">
							
							<div class="bio_play_wrapper"></div><!-- bio_play_wrapper -->
							
							<span class="bio_video_title"><?php the_field( 'att_video_title'); ?></span><!-- bio_video_title -->
							
						</div><!-- bio_video_title_wrapper -->
					
					</a>
					
					<?php else:?>
					
					<!-- shows just image if there isn't a vimeo -->
					
					<div class="bio_img_wrapper">
					
							<?php $attorney_image = get_field( 'attorney_image' ); ?>
							
							<?php if ( $attorney_image ) : ?>
							
							<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
							
							<?php else:?>
							
							<img alt="Attorney Placeholder" src="<?php bloginfo('template_directory');?>/images/placeholder.jpg"/>
							
							<?php endif; ?>

						
						</div><!-- bio_img_wrapper -->					
					
					<?php endif;?>
					
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


					 
					 	

