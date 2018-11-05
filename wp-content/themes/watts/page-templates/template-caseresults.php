<?php 

/* Template Name: Case Results */

get_header(); ?>

<div id="banner_trigger" class="internal_banner">
	
		<div class="internal_banner_inner">
		
			<h1><?php the_title();?></h1>
			
			<a class="button" href="#consultation">Request Free Consultation Here</a><!-- button -->
			
		</div><!-- internal_banner_inner -->
	
		<?php $case_results_banner = get_field( 'case_results_banner' ); ?>
		
		<img src="<?php echo $case_results_banner['url']; ?>" alt="<?php echo $case_results_banner['alt']; ?>" />

	
	</div><!-- internal_banner -->

<div id="internal_main" class="one_col">


<div class="internal_container case_results_wrapper">
	
	
	<?php if(get_field('case_results_page')): ?>
	 
		<?php while(has_sub_field('case_results_page')): ?>
	 
			<div class="single_case_results">
		
				<div class="single_case_results_inner">
					
					<?php $svg = get_sub_field( 'svg' ); ?>
		
					<img class="cr_svg" src="<?php echo $svg['url']; ?>" alt="<?php echo $svg['alt']; ?>" />
		
					<span class="cr_single_title"><?php the_sub_field( 'case_results_description' ); ?></span><!-- cr_single_title -->
		
					<div class="cr_stats">
			
						<div class="single_stat">
				
							<span class="stat_title"><?php the_sub_field( 'fees_title' ); ?></span><!-- stat_title -->
				
							<span class="stat_amount"><?php the_sub_field( 'fees_amount' ); ?></span><!-- stat_amount -->
				
						</div><!-- single_stat -->
			
						<div class="single_stat">
				
							<span class="stat_title"><?php the_sub_field( 'expenses_title' ); ?></span><!-- stat_title -->
				
							<span class="stat_amount"><?php the_sub_field( 'expenses_amount' ); ?></span><!-- stat_amount -->
				
						</div><!-- single_stat -->
			
						<div class="single_stat">
				
							<span class="stat_title"><?php the_sub_field( 'net_to_client_title' ); ?></span><!-- stat_title -->
				
							<span class="stat_amount"><?php the_sub_field( 'net_to_client_amount' ); ?></span><!-- stat_amount -->
				
						</div><!-- single_stat -->
			
					</div><!-- cr_stats -->
		
					<div class="cr_single_content content">
			
						<?php the_sub_field( 'case_results_intro' ); ?>
			
						<a class="cr_read_more"><?php the_sub_field( 'case_results_read_more_verboage' ); ?></a>
			
						<div class="read_more_cr_content">
				
							<?php the_sub_field( 'case_results_additional_content' ); ?>
				
					</div><!-- read_more_content -->
		
				</div><!-- cr_single_content -->
		
			</div><!-- single_case_results_inner -->
	
		</div><!-- single_case_results -->
	    
		<?php endwhile; ?>
	 
	<?php endif; ?>
	
		
</div><!-- internal_container -->


</div><!-- internal_main -->


<?php get_footer(); ?>