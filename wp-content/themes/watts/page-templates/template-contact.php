<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>


<div id="internal_main" class="one_col">

<h1 class="centered"><?php the_title();?></h1>
	
<div class="internal_container contact_wrapper">
	
	
	
	<div class="iframe_map">
		
		<?php the_field( 'iframe_map' ); ?>
		
	</div><!-- iframe_map -->
	
	<div class="contact_bottom">
		
		<div class="contact_left">
			
			<div class="logo_consult_wrapper">
				
				<?php $footer_logo = get_field( 'footer_logo','option'); ?>
		
				<img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>" />
			
				<div class="contact_consult_wrapper">
				
					<span><?php the_field( 'free_consultation_section_one_header_verbige','option'); ?></span>
				
					<a href="tel:<?php the_field( 'firm_phone' ); ?>"><?php the_field( 'firm_phone','options'); ?></a>
					
				</div><!-- contact_consult_wrapper -->
			
			</div><!-- logo_consult_wrapper -->
			
			<div class="contact_left_content content">
				
				<?php the_field( 'contact_content' ); ?>

			</div><!-- contact_left_content -->
			
		</div><!-- contact_left -->
		
		<div class="contact_right">
			
			
			<?php if(get_field('locations','option')): ?>
		 
			<?php while(has_sub_field('locations','option')): ?>
		 
				<?php if( get_sub_field('address_phone_number_or_copyright') == 'New Location' ) { ?>
				
					
					<div class="single_location">
				
						<span class="location_title"><?php the_sub_field( 'location_title' ); ?></span><!-- location_title -->
				
						<span class="address"><?php the_sub_field( 'address' ); ?></span><!-- address -->
				
						<a class="directions" href="<?php the_sub_field( 'directions_link' ); ?>" target="_blank" rel="noopener">Directions</a>
				
					</div><!-- loc_col -->

				
				<?php } ?>
				
									
		   <?php endwhile; ?>
		 
		<?php endif; ?>	

				
			
		</div><!-- contact_right -->
		
	</div><!-- contact_bottom -->

</div><!-- internal_container -->


</div><!-- internal_main -->


<?php get_footer(); ?>
