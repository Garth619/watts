<section id="section_seven">
	
	<div class="sec_seven_inner">
		
		<div class="sec_seven_title_wrapper">
			
			<span class="sec_seven_title"><?php the_field( 'section_seven_title' ); ?></span><!-- sec_seven_title -->
			
			<span class="sec_seven_blueline"></span><!-- sec_seven_blueline -->
			
		</div><!-- sec_seven_title_wrapper -->
		
		<div class="sec_seven_pa">
			
			<?php if(get_field('section_seven_pas')): ?>
			 
				<?php while(has_sub_field('section_seven_pas')): ?>
			 
						<div class="sec_seven_single_pa">
				
							<a href="<?php the_sub_field( 'pa_page_link' ); ?>">
					
								<div class="sec_seven_reg">
									
									<?php $svg_gradient = get_sub_field( 'svg_gradient' ); ?>
									
									<img class="grad_svg" src="<?php echo $svg_gradient['url']; ?>" alt="<?php echo $svg_gradient['alt']; ?>" />
					
									<span class="single_pa_title"><?php the_sub_field( 'pa_title' ); ?></span><!-- single_pa_title -->
					
								</div><!-- sec_seven_reg -->
					
								<div class="sec_seven_hover">
									
									<?php $svg_white = get_sub_field( 'svg_white' ); ?>
									
									<img class="white_svg" src="<?php echo $svg_white['url']; ?>" alt="<?php echo $svg_white['alt']; ?>" />
						
								</div><!-- sec_seven_hover -->
					
							</a>
				
						</div><!-- sec_seven_single_pa -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
						
		</div><!-- sec_seven_pa -->
		
		<a class="button pa_view_all" href="<?php the_field( 'section_seven_view_all_link' ); ?>"><?php the_field( 'section_seven_view_all_verbiage' ); ?></a>
		
	</div><!-- sec_seven_inner -->
	
</section><!-- section_seven -->