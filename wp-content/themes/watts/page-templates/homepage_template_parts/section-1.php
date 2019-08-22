<section id="section_one">
	
	<div class="fix_header_track"></div><!-- fix_header_track -->
	
	<div class="sec_one_left">
		
		<div class="sec_left_inner">
			
			<a class="logo" href="<?php bloginfo('url');?>">
				
				<img src="<?php bloginfo('template_directory');?>/images/logo-white.svg"/>
				
			</a>
			
			<div class="sec_one_content">
				
				<span><?php the_field( 'section_header' ); ?> </span>
				
				<a class="free_consultation button" href="#consultation"><?php the_field( 'request_button_verbiage' ); ?></a><!-- free_consultation -->
				
			</div><!-- sec_one_content -->
			
		</div><!-- sec_left_inner -->
		
		<img class="desktop" src="<?php bloginfo('template_directory');?>/images/hero.jpg"/>
		
		<img class="tablet" src="<?php bloginfo('template_directory');?>/images/hero-tablet.jpg"/>
		
		
	</div><!-- sec_one_left -->
	
	<div class="sec_one_right">
		
		<div class="free_consult_bar">
			
			<span><?php the_field( 'free_consultation_section_one_header_verbige','option'); ?></span>
			
			<a href="tel:<?php the_field( 'firm_phone','option'); ?>"><?php the_field( 'firm_phone','option'); ?></a>
			
		</div><!-- free_consult_bar -->
		
		<div class="sec_one_slide_wrapper">
				
			<div class="sec_one_slider">
				
				
				<?php if(get_field('section_one_case_results')): ?>
				 
					<?php while(has_sub_field('section_one_case_results')): ?>
				 
						<div class="sec_one_single_slide">
							
							<?php $svg = get_sub_field( 'svg' ); ?>
						
							<img class="results_svg" src="<?php echo $svg['url']; ?>" alt="<?php echo $svg['alt']; ?>" /><!-- results_svg -->
					
							<span class="amount"><?php the_sub_field( 'amount' ); ?></span><!-- amount -->
					
							<span class="case_type"><?php the_sub_field( 'type' ); ?></span><!-- case_type -->
					
							<span class="info_title"><?php the_sub_field( 'fees_title' ); ?></span><!-- info_title -->
							<span class="info_amount"><?php the_sub_field( 'fees_amount' ); ?></span><!-- info_amount -->
					
							<span class="info_title"><?php the_sub_field( 'fees_title_two' ); ?></span><!-- info_title -->
							<span class="info_amount"><?php the_sub_field( 'fees_amount_two' ); ?></span><!-- info_amount -->
							
							<span class="info_title"><?php the_sub_field( 'fees_title_three' ); ?></span><!-- info_title -->
							<span class="info_amount"><?php the_sub_field( 'fees_amount_three' ); ?></span><!-- info_amount -->
						
						</div><!-- sec_one_single_slide -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
					
					
			</div><!-- sec_one_slider -->
				
			<div class="sec_one_buttons">
					
				<div class="sec_one_button_left sec_one_button">
					
					<?php echo file_get_contents("wp-content/themes/watts/images/arrow.svg"); ?>
					
				</div><!-- sec_one_button_left -->
					
				<div class="sec_one_button_right sec_one_button">
					
					<?php echo file_get_contents("wp-content/themes/watts/images/arrow.svg"); ?>
					
				</div><!-- sec_one_button_right -->
					
			</div><!-- sec_one_buttons -->
				
		</div><!-- sec_one_slide_wrapper -->
		
		<a class="button view_more_button" href="<?php the_field( 'section_one_view_more_results_page_link' ); ?>">
<?php the_field( 'section_one_view_more_results_verbiage' ); ?></a>
		
		<span class="results_disclaimer"><?php the_field( 'section_one_case_results_disclaimer' ); ?></span><!-- results_disclaimer -->
	
	</div><!-- sec_one_right -->

	
</section><!-- section_one -->

