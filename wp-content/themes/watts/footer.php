<footer id="footer_trigger">
	
		
<div id="consultation" class="form_wrapper">
	
	<div class="form_inner">
	
		<span class="small_header"><?php the_field( 'form_sub_header','option'); ?></span><!-- small_header -->
	
		<span class="large_header"><?php the_field( 'form_large_header','option'); ?></span><!-- large_header -->
	
		<?php gravity_form(1, false, false, false, '', true, 355); ?>
	
		<span class="required"><span>*</span>Required</span><!-- required -->
	
	</div><!-- form_inner -->
	
</div><!-- form_wrapper -->

<div class="locations_wrapper">
	
	<div class="locations_inner">
		
		<?php $footer_logo = get_field( 'footer_logo','option'); ?>
		
		<img class="footer_logo" src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>" />
		
		<div class="location_columns">
			
		<?php if(get_field('locations','option')): ?>
		 
			<?php while(has_sub_field('locations','option')): ?>
		 
				<?php if( get_sub_field('address_phone_number_or_copyright') == 'New Location' ) { ?>
				
					<div class="single_location loc_col">
				
						<span class="location_title"><?php the_sub_field( 'location_title' ); ?></span><!-- location_title -->
				
						<span class="address"><?php the_sub_field( 'address' ); ?></span><!-- address -->
				
						<a class="directions" href="<?php the_sub_field( 'directions_link' ); ?>" target="_blank" rel="noopener">Directions</a>
				
					</div><!-- loc_col -->

				
				
				<?php }
				
					if( get_sub_field('address_phone_number_or_copyright') == 'Phone' ) { ?>
					
					
					<div class="loc_col">
				
						<a class="loc_phone" href="tel:<?php the_field( 'firm_phone','options'); ?>"><?php the_field( 'firm_phone','options'); ?></a><!-- loc_phone -->
				
					</div><!-- loc_col -->
				
				
				<?php } 
					
					if( get_sub_field('address_phone_number_or_copyright') == 'Copyright Verbiage' ) { ?>
					
						
						<div class="loc_col copyright_col">
				
							<span class="copyright_title"><?php the_field( 'copyright_title','option'); ?></span>

							<span class="copyright_disclaimer"><?php the_field( 'copyright','option'); ?></span>
				
						</div><!-- loc_col -->
				
				
				<?php } ?>
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>	
			
						
		</div><!-- location_columns -->
		
		<a class="button locations_button" href="<?php the_field( 'view_all_locations_link','option'); ?>"><?php the_field( 'view_all_locations_verbiage','option'); ?></a>
		
	</div><!-- locations_inner -->
	
</div><!-- locations_wrapper -->

<div class="social_bar">
	
	<div class="social_bar_inner">
		
		<div class="mobile_disclaimer">
			
			<span class="copyright_title"><?php the_field( 'copyright_title','option'); ?></span>

			<span class="copyright_disclaimer"><?php the_field( 'copyright','option'); ?></span>
			
		</div><!-- mobile_disclaimer -->
		
	<ul>
		
		<?php if(get_field('google_plus_link','option')) { ?>
		
		<li>
			<a href="<?php the_field( 'google_plus_link', 'option'); ?>" target="_blank" rel="noopener">
				
				<?php echo file_get_contents("wp-content/themes/watts/images/googleplus.svg"); ?>
				
			</a>
		</li>
		
		<?php } 
			
			if(get_field('facebook_link','option')) { ?>
		
		<li>
			<a href="<?php the_field( 'facebook_link', 'option'); ?>" target="_blank" rel="noopener">
				
				<?php echo file_get_contents("wp-content/themes/watts/images/facebook.svg"); ?>
				
			</a>
		</li>
		
		<?php }
			
			if(get_field('twitter_link','option')) { ?>
		
		<li>
			<a href="<?php the_field( 'twitter_link', 'option'); ?>" target="_blank" rel="noopener">
				
				<?php echo file_get_contents("wp-content/themes/watts/images/twitter.svg"); ?>
				
			</a>
		</li>
		
		<?php } 
		
			if(get_field('linked_in_link','option')) { ?>
		
		<li>
			<a href="<?php the_field( 'linked_in_link', 'option'); ?>" target="_blank" rel="noopener">
				
				<?php echo file_get_contents("wp-content/themes/watts/images/linkedin.svg"); ?>
				
			</a>
		</li>
		
		<?php }?>
		
	</ul>
	
	<a class="ilawyer" href="//ilawyermarketing.com" target="_blank" rel="noopener">
		
		<img alt="iLawyer Marketing Logo" src="<?php bloginfo('template_directory');?>/images/ilawyer.svg"/>
		
	</a>
	
	</div><!-- social_bar_inner -->
	
</div><!-- social_bar -->

</footer>


<?php wp_footer();?>


</body>
</html>
