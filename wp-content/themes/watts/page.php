<?php get_header(); ?>

	<div id="banner_trigger" class="internal_banner">
	
		<div class="internal_banner_inner">
		
			<span>Trial lawyers achieving serious high-value results </span>
			
			<a class="button" href="#consultation">Request Free Consultation Here</a><!-- button -->
			
		</div><!-- internal_banner_inner -->
	
		<img src="<?php bloginfo('template_directory');?>/images/hero-intl.jpg"/>
	
	</div><!-- internal_banner -->


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
