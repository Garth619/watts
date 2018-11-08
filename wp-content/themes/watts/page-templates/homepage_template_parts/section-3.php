<section id="section_three">
	
	
	<div class="sec_three_inner content">
		
		<h1><?php the_field( 'section_three_header' ); ?></h1>
		
		<div class="sec_three_top">
			
			<div class="sec_three_left">
				
				<?php $section_three_image = get_field( 'section_three_image' ); ?>
				
				<img src="<?php echo $section_three_image['url']; ?>" alt="<?php echo $section_three_image['alt']; ?>" />
				
			</div><!-- sec_three_left -->
			
			<div class="sec_three_right">
				
				<?php the_field( 'section_three_content' ); ?>
						
			</div><!-- sec_three_right -->
			
		</div><!-- sec_three_top -->
		
		<div class="sec_three_middle">
			
			<div class="sec_three_middle_inner">
			
				<div class="sec_three_middle_left">
				
					<span><?php the_field( 'section_three_middle_left' ); ?></span>
				
				</div><!-- sec_three_middle_left -->
			
				<div class="sec_three_middle_right">
				
					<span><?php the_field( 'section_three_middle_right' ); ?></span>
				
				</div><!-- sec_three_middle_right -->
			
			</div><!-- sec_three_middle_inner -->
			
		</div><!-- sec_three_middle -->
		
		
		<div class="sec_three_bottom">
			
			<?php the_field( 'section_three_bottom' ); ?>			
		
		</div><!-- sec_three_bottom -->
		
	</div><!-- sec_three_inner -->
	
	
</section><!-- section_three -->