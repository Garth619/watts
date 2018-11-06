<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="blog_post">
		
		<span class="meta"><?php $pfx_date = get_the_date(); echo $pfx_date ?> in <?php echo get_the_category_list();?></span>
		
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		
		<div class="blog_excerpt">
		
			<?php the_content();?>
		
		</div><!-- blog_excerpt -->
			
		<?php edit_post_link( __( 'Edit'), '', '' ); ?>
	
	</div><!-- blog_post -->
			



<?php endwhile; // end of loop ?>

<?php endif; ?>