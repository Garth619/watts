<?php 

/* Template Name: PA Directory */

get_header(); ?>


<div id="internal_main" class="one_col">

<h1 class="centered"><?php the_title();?></h1>
	
<div class="internal_container pa_directory">
	
	<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>

</div><!-- internal_container -->


</div><!-- internal_main -->


<?php get_footer(); ?>

