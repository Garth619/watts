<?php 

/* Template Name: Video Center */

get_header(); ?>


<div id="internal_main" class="one_col">

<h1 class="centered"><?php the_title();?></h1>
	
<div class="internal_container video_wrappper">

		<?php if(get_field('video_center')): ?>
		 
			<?php while(has_sub_field('video_center')): ?>
			
			<div class="video_cat_wrapper">
			
				<div class="video_cat_title_wrapper">
		
					<span class="video_cat_title"><?php the_sub_field( 'video_category_title' ); ?></span>
		
					<span class="blue_line"></span><!-- blue_line -->
		
				</div><!-- video_cat_title_wrapper -->
				
				<?php if(get_sub_field('videos')): ?>
				
					<div class="video_cat">
				 
					<?php while(has_sub_field('videos')): ?>
					
				 
						<div class="single_video">
			
						<a href="//player.vimeo.com/video/<?php the_sub_field( 'vimeo_id' ); ?>?portrait=0&autoplay=1" data-lity>
				
						<div class="img_scale_wrapper">

                            <?php 
                                $url = "https://player.vimeo.com/video/" . get_sub_field('vimeo_id');
                                if(function_exists('grab_vimeo_thumbnail')){
                                    
                                    $thumb = grab_vimeo_thumbnail($url);
                                } else {
                                    $thumb = "grab vimeo didn't work";
                                }
                                
                            ?>
                            <img src="<?php echo $thumb; ?>" />

						</div><!-- img_scale_wrapper -->
				
						<div class="video_text_wrapper">
					
							<div class="play_button_wrapper">
						
								<div class="play_button"></div><!-- play_button -->
						
							</div><!-- play_button_wrapper -->
					
							<span class="video_title"><?php the_sub_field( 'video_title' ); ?></span><!-- video_title -->
					
					</div><!-- video_text_wrapper -->
				
				</a>
			
		</div><!-- single_video -->

				    
					<?php endwhile; ?>
					
					</div><!-- video_cat -->
				 
				<?php endif; ?>

		 
</div><!-- video_cat_wrapper -->
			
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
	

</div><!-- internal_container -->


</div><!-- internal_main -->


<?php get_footer(); ?>

