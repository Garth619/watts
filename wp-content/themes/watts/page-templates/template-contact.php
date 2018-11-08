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
			
			<div class="single_location">
				
				<span class="location_title">San Antonio</span><!-- location_title -->
				
				<span class="address">4 Dominion Dr.<br/> Bld 3, Suite 100<br/> San Antonio, TX 78257</span><!-- address -->
				
				<a class="directions" href="" target="_blank" rel="noopener">Directions</a>

			</div><!-- single_location -->
			
			<div class="single_location">
				
				<span class="location_title">Brownsville</span><!-- location_title -->
				
				<span class="address">2406 Thor’s Hammer Blvd<br/> Suite 200<br/> Brownsville, TX 78256</span><!-- address -->
				
				<a class="directions" href="" target="_blank" rel="noopener">Directions</a>

			</div><!-- single_location -->
			
			<div class="single_location">
				
				<span class="location_title">Brownsville</span><!-- location_title -->
				
				<span class="address">2406 Thor’s Hammer Blvd<br/> Suite 200<br/> Brownsville, TX 78256</span><!-- address -->
				
				<a class="directions" href="" target="_blank" rel="noopener">Directions</a>

			</div><!-- single_location -->
			
			<div class="single_location">
				
				<span class="location_title">Brownsville</span><!-- location_title -->
				
				<span class="address">2406 Thor’s Hammer Blvd<br/> Suite 200<br/> Brownsville, TX 78256</span><!-- address -->
				
				<a class="directions" href="" target="_blank" rel="noopener">Directions</a>

			</div><!-- single_location -->
			
			<div class="single_location">
				
				<span class="location_title">Brownsville</span><!-- location_title -->
				
				<span class="address">2406 Thor’s Hammer Blvd<br/> Suite 200<br/> Brownsville, TX 78256</span><!-- address -->
				
				<a class="directions" href="" target="_blank" rel="noopener">Directions</a>

			</div><!-- single_location -->
			
			<div class="single_location">
				
				<span class="location_title">Brownsville</span><!-- location_title -->
				
				<span class="address">2406 Thor’s Hammer Blvd<br/> Suite 200<br/> Brownsville, TX 78256</span><!-- address -->
				
				<a class="directions" href="" target="_blank" rel="noopener">Directions</a>

			</div><!-- single_location -->
			
			<div class="single_location">
				
				<span class="location_title">Brownsville</span><!-- location_title -->
				
				<span class="address">2406 Thor’s Hammer Blvd<br/> Suite 200<br/> Brownsville, TX 78256</span><!-- address -->
				
				<a class="directions" href="" target="_blank" rel="noopener">Directions</a>

			</div><!-- single_location -->
			
			
		</div><!-- contact_right -->
		
	</div><!-- contact_bottom -->

</div><!-- internal_container -->


</div><!-- internal_main -->


<?php get_footer(); ?>
