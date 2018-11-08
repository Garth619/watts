<section id="section_six">
	
	<div class="sec_six_inner">
		
		<?php $section_six_svg = get_field( 'section_six_svg' ); ?>
		
		<img class="sp_1" src="<?php echo $section_six_svg['url']; ?>" alt="<?php echo $section_six_svg['alt']; ?>" />
		
		<span class="sec_six_intro"><?php the_field( 'section_six_header' ); ?></span><!-- sec_six_intro -->
		
		<div class="quote_info">
			
			<span><?php the_field( 'section_six_source_name' ); ?></span>
			
			<span><?php the_field( 'section_six_source_year' ); ?></span>
			
		</div><!-- quote_info -->
		
		<div class="sec_six_content content">
			
			<?php the_field( 'section_six_content' ); ?>
			
		</div><!-- sec_six_content -->
		
	</div><!-- sec_six_inner -->
	
	
	
</section><!-- section_six -->