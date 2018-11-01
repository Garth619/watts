<?php get_header(); ?>


<div id="internal_main">


<?php get_template_part( 'internal', 'banner' ); ?>

<div class="internal_container two_col">
	
	
	<div class="container content">
		
		<h1><?php the_title();?></h1>
		
		<?php get_template_part( 'loop', 'page' ); ?>

	</div><!-- container -->

	
	<?php get_sidebar(); ?>


</div><!-- internal_container -->


</div><!-- internal_main -->


<?php get_footer(); ?>
