<section id="section_four">
	
	<div class="sec_four_left">
		
		<div class="sec_four_left_inner">
		
			<img class="bull" src="<?php bloginfo('template_directory');?>/images/ico-bull.svg"/>	
			
			<span class="sec_four_title"><?php the_field( 'section_four_title' ); ?></span><!-- sec_four_title -->
			
			<span class="sec_four_description"><?php the_field( 'section_four_description' ); ?></span><!-- sec_four_description -->
			
			<a class="sec_four_read_more button" href="<?php the_field( 'section_four_read_more_link' ); ?>"><?php the_field( 'section_four_read_more_verbiage' ); ?></a>
			
		</div><!-- sec_four_left_inner -->
		
		<img class="sec_four_bg desktop" src="<?php bloginfo('template_directory');?>/images/img-test.jpg"/>
		
		<img class="sec_four_bg tablet" src="<?php bloginfo('template_directory');?>/images/img-test-ipad.jpg"/>
		
	</div><!-- sec_four_left -->
	
	<div id="sec_four_right_trigger" class="sec_four_right">
		
		<div class="sec_four_right_inner">
			
			<div class="sec_four_slider">
				
				<?php if(get_field('section_four_slider')): ?>
				 
					<?php while(has_sub_field('section_four_slider')): ?>
				 
						<div class="sec_four_single_slide">
					
							<div class="sec_four_inner_slide">
					
								<img src="<?php bloginfo('template_directory');?>/images/ico-stars.svg"/>
					
								<span class="sec_four_slide_description"><?php the_sub_field( 'description' ); ?></span><!-- sec_four_slide_description -->
					
								<span class="sec_four_name"><?php the_sub_field( 'name' ); ?></span><!-- sec_four_name -->
					
							</div><!-- sec_four_inner_slide -->
					
						</div><!-- sec_four_single_slide -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			</div><!-- sec_four_slider -->
			
		</div><!-- sec_four_right_inner -->
		
		<div class="sec_four_buttons">
				
			<div class="sec_four_left_button sec_four_button">
					
				<?php echo file_get_contents("wp-content/themes/watts/images/arrow.svg"); ?>
					
			</div><!-- sec_four_left_button -->
				
			<div class="sec_four_right_button sec_four_button">
					
				<?php echo file_get_contents("wp-content/themes/watts/images/arrow.svg"); ?>
					
			</div><!-- sec_four_right_button -->
			
		</div><!-- sec_four_buttons -->
		
	</div><!-- sec_four_right -->
	
	
</section><!-- section_four -->