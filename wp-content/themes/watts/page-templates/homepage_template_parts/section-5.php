<section id="section_five">
	
	<div class="sec_five_inner">
		
		<div class="sec_five_title_wrapper">
			
			<span class="sec_five_title"><?php the_field( 'section_five_title' ); ?></span><!-- sec_five_title -->
			
			<span class="sec_five_line"></span><!-- sec_five_line -->
			
		</div><!-- sec_five_title_wrapper -->
		
		<div class="sec_five_video_wrapper">
			
			
			<?php if(get_field('section_five_videos')): ?>
			 
				<?php while(has_sub_field('section_five_videos')): ?>
			 
					<div class="sec_five_single_video">
					
					<a href="//player.vimeo.com/video/<?php the_sub_field( 'vimeo_id' ); ?>?portrait=0&autoplay=1" data-lity >
						
						<div class="sec_five_img_overlay">
							
							<?php $video_thumbnail = get_sub_field( 'video_thumbnail' ); ?>
							
							<img src="<?php echo $video_thumbnail['url']; ?>" alt="<?php echo $video_thumbnail['alt']; ?>" />
							
						</div><!-- sec_five_img_overlay -->
						
						<div class="sec_five_video_text">
							
							<div class="play_button_wrapper">
						
								<div class="play_button"></div><!-- play_button -->
						
							</div><!-- play_button_wrapper -->
							
							<span><?php the_sub_field( 'video_title' ); ?></span>
							
						</div><!-- sec_five_video_text -->
						
					</a>
					
				</div><!-- sec_five_single_video -->

			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
								
			</div><!-- video_wrapper -->
			
			<a class="button sec_five_learn_more" href="<?php the_field( 'section_five_learn_more_link' ); ?>"><?php the_field( 'section_five_learn_more_verbiage' ); ?></a>
		
	</div><!-- sec_five_inner -->
	
</section><!-- section_five -->