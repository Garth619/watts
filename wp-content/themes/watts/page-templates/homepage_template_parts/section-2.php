<section id="section_two">
	
	<div class="sec_two_sp_slider_wrapper">
		
		<div class="sec_two_left_button sec_two_button">
			
			<?php echo file_get_contents("wp-content/themes/watts/images/arrow.svg"); ?>
			
		</div><!-- sec_two_left_button -->
	
	<div class="sec_two_sp_slider">
		
		
		<?php if(get_field('section_two_selling_points')): ?>
		 
			<?php while(has_sub_field('section_two_selling_points')): ?>
		 
				<div class="sec_two_single_sp">
			
					<a href="<?php the_sub_field( 'sp_link' ); ?>">
				
						<div class="sec_two_sp_content">
					
							<div class="sec_two_sp_header">
						
								<span class="sec_two_sp_title"><?php the_sub_field( 'sp_title' ); ?></span><!-- sec_two_sp_title -->
						
								<?php $sp_svg = get_sub_field( 'sp_svg' ); ?>
								
								<img src="<?php echo $sp_svg['url']; ?>" alt="<?php echo $sp_svg['alt']; ?>" />
						
							</div><!-- sec_two_sp_header -->
					
							<span class="white_header"><?php the_sub_field( 'sp_one' ); ?></span><!-- white_header -->
					
							<span class="grey_content"><?php the_sub_field( 'sp_two' ); ?> </span><!-- grey_content -->
					
						</div><!-- sec_two_single_sp_content -->
				
						<div class="sec_two_single_sp_hover"></div><!-- sec_two_single_sp_hover -->
				
					</a>
			
			</div><!-- sec_two_single_sp -->
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
	
		
	</div><!-- sec_two_sp_slider -->
	
	<div class="sec_two_right_button sec_two_button">
			
		<?php echo file_get_contents("wp-content/themes/watts/images/arrow.svg"); ?>
		
	</div><!-- sec_two_right_button -->
	
	
	
	</div><!-- sec_two_sp_slider_wrapper -->
	
	
</section><!-- section_two -->