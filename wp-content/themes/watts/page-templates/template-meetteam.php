<?php 

/* Template Name: Attorney Directory */

get_header(); ?>

<div id="internal_main">
		
	<h1 class="centered"><?php the_title();?></h1>
	
	<div class="att_partners">
		
		<?php $post_object = get_field( 'mikal_c_watts_post' ); ?>
		
		<?php if ( $post_object ): ?>
		
			<?php $post = $post_object; ?>
		
			<?php setup_postdata( $post ); ?> 
			
				<div class="single_attorney">
			
					<a href="<?php the_permalink();?>">
				
						<div class="attorney_image">
					
							<?php $attorney_image = get_field( 'attorney_image' ); ?>
							
							<?php if ( $attorney_image ) : ?>
							
							<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
							
							<?php else:?>
							
							<img alt="Attoenry Placeholder" src="<?php bloginfo('template_directory');?>/images/placeholder.jpg"/>
							
							<?php endif; ?>
					
							<div class="img_overlay"></div><!-- img_overlay -->
					
						</div><!-- attorney_image -->
				
						<div class="attorney_title_wrapper">
					
							<span class="att_name"><?php the_title();?></span><!-- att_name -->
					
							<span class="att_position"><?php the_field( 'mikal_c_watts_position',79); ?></span><!-- att_position -->
					
						</div><!-- attorney_title_wrapper -->
				
					</a>
			
				</div><!-- single_attorney -->
			
			<?php wp_reset_postdata(); ?>
		
		<?php endif; ?>
		
		<?php $post_object = get_field( 'francisco_guerra' ); ?>
		
		<?php if ( $post_object ): ?>
		
			<?php $post = $post_object; ?>
		
			<?php setup_postdata( $post ); ?> 
			
				<div class="single_attorney">
			
					<a href="<?php the_permalink();?>">
				
						<div class="attorney_image">
					
							<?php $attorney_image = get_field( 'attorney_image' ); ?>
							
							<?php if ( $attorney_image ) : ?>
							
							<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
							
							<?php else:?>
							
							<img alt="Attoenry Placeholder" src="<?php bloginfo('template_directory');?>/images/placeholder.jpg"/>
							
							<?php endif; ?>
					
							<div class="img_overlay"></div><!-- img_overlay -->
					
						</div><!-- attorney_image -->
				
						<div class="attorney_title_wrapper">
					
							<span class="att_name"><?php the_title();?></span><!-- att_name -->
					
							<span class="att_position"><?php the_field( 'francisco_guerra_position',79); ?></span><!-- att_position -->
					
						</div><!-- attorney_title_wrapper -->
				
					</a>
			
				</div><!-- single_attorney -->
			
			<?php wp_reset_postdata(); ?>
		
		<?php endif; ?>
		
				
	</div><!-- att_partners -->

	<div class="internal_container meetteam_wrapper">
		
		<?php if(get_field('our_team_directory')): ?>
		 
			<?php while(has_sub_field('our_team_directory')): ?>
		 
				<div class="meetteam_section">
			
					<div class="meetteam_title_wrapper">
			
						<span class="meetteam_title"><?php the_sub_field( 'section_title' ); ?></span><!-- meetteam_title -->
			
						<span class="meeteam_line"></span><!-- meeteam_line -->
			
					</div><!-- meetteam_title_wrapper -->
			
					<div class="meetteam_members">
				
						<?php $team_members = get_sub_field( 'team_members' ); ?>
				
						<?php if ( $team_members ): ?>
				
							<?php foreach ( $team_members as $post ):  ?>
					
							<?php setup_postdata ( $post ); ?>
						
								<div class="single_attorney">
			
									<a href="<?php the_permalink();?>">
				
										<div class="attorney_image">
					
											<?php $attorney_image = get_field( 'attorney_image' ); ?>
							
											<?php if ( $attorney_image ) : ?>
							
												<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
							
												<?php else:?>
							
												<img alt="Attoenry Placeholder" src="<?php bloginfo('template_directory');?>/images/placeholder.jpg"/>
							
											<?php endif; ?>
					
												<div class="img_overlay"></div><!-- img_overlay -->
					
										</div><!-- attorney_image -->
				
										<div class="attorney_title_wrapper">
					
											<span class="att_name"><?php the_title();?></span><!-- att_name -->
					
										</div><!-- attorney_title_wrapper -->
				
									</a>
			
								</div><!-- single_attorney -->
				
								<?php endforeach; ?>
						
						<?php wp_reset_postdata(); ?>
		
						<?php endif; ?>
				
								
			</div><!-- meetteam_members -->
			
		</div><!-- meetteam_section -->
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		
	
	</div><!-- internal_container -->

</div><!-- internal_main -->


<?php get_footer(); ?>


					 
					 	

