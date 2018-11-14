<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



<style>

@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700|Unna');

<?php the_field( 'review_css','option'); ?>

</style>

<?php wp_head(); ?>

<?php the_field('schema_code', 'option'); ?>

<?php the_field('analytics_code', 'option'); ?>

</head>

<body <?php body_class(); ?>>
	
	
	<header><!-- fromt page header -->
		
		<div class="mobile_logo_wrapper">
			
			<a class="mobile_logo" href="<?php bloginfo('url');?>">
				
				<?php 
					
							$desktop_logo = get_field( 'desktop_logo','option');
				
							$desktop_logo_white = get_field( 'desktop_logo_white','option');
				
				?>
				
				<img src="<?php echo $desktop_logo['url']; ?>" alt="<?php echo $desktop_logo['alt']; ?>" />
				
			</a><!-- mobile_logo -->
			
		</div><!-- mobile_logo_wrapper -->
		
		<div class="header_left">
			
			<div class="nav_close_wrapper">
			
				<div class="close_x">
			
					<span class="close_bar"></span>
					<span class="close_bar"></span>
			
				</div><!-- close_x -->
			
				<span class="close_title">Close</span>
			
			</div><!-- nav_close_wrapper -->
			
			<div class="menu_wrapper">
			
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
			
				<span class="menu_title">Menu</span><!-- menu_title -->
			
		</div><!-- menu_wrapper -->
			
		</div><!-- header_left -->
		
		<div class="header_right">
			
			<a class="tablet_logo" href="<?php bloginfo('url');?>">
				
				<img class="dark_logo" src="<?php echo $desktop_logo['url']; ?>" alt="<?php echo $desktop_logo['alt']; ?>" />
				
				<img class="white_logo" src="<?php echo $desktop_logo_white['url']; ?>" alt="<?php echo $desktop_logo_white['alt']; ?>" />
							
			</a><!-- tablet_logo -->
			
			<div class="tablet_free_consult_wrapper">
				
				<span class="tablet_free_consult"><?php the_field( 'free_consultation_section_one_header_verbige','option'); ?></span><!-- tablet_free_consult -->
				
				<a class="tablet_phone" href="tel:<?php the_field( 'firm_phone','option'); ?>"><?php the_field( 'firm_phone','option'); ?></a><!-- tablet_phone -->
				
			</div><!-- tablet_free_consult_wrapper -->
			
		</div><!-- header_right -->
		
		
		
	</header>
	
	<div class="sticky_header"><!-- sticky_header -->
	
		<div class="nav_close_wrapper">
			
			<div class="close_x">
			
			<span class="close_bar"></span>
			<span class="close_bar"></span>
			
			</div><!-- close_x -->
			
			<span class="close_title">Close</span>
			
		</div><!-- nav_close_wrapper -->
		
		<div class="menu_wrapper">
			
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			
			<span class="menu_title">Menu</span><!-- menu_title -->
			
		</div><!-- menu_wrapper -->
			
		<div class="sticky_email">
			
			<a href="#consultation">
				
				<?php echo file_get_contents("wp-content/themes/watts/images/ico-email-white.svg"); ?>
				
			</a>
			
						
		</div><!-- sticky_middle -->
		
		<div class="sticky_right">
			
			<div class="tablet_free_consult_wrapper">
				
				<span class="tablet_free_consult"><?php the_field( 'free_consultation_section_one_header_verbige','option'); ?></span><!-- tablet_free_consult -->
				
				<a class="tablet_phone" href="tel:<?php the_field( 'firm_phone','option'); ?>"><?php the_field( 'firm_phone','option'); ?></a><!-- tablet_phone -->
				
			</div><!-- tablet_free_consult_wrapper -->
			
		</div>
		
	</div><!-- sticky_header -->
	
	<div class="fixed_header"><!-- along side -->
	
		<div class="nav_close_wrapper">
			
			<div class="close_x">
			
			<span class="close_bar"></span>
			<span class="close_bar"></span>
			
			</div><!-- close_x -->
			
			<span class="close_title">Close</span>
			
		</div><!-- nav_close_wrapper -->

		
		<div class="menu_wrapper">
			
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			
			<span class="menu_title">Menu</span><!-- menu_title -->
			
		</div><!-- menu_wrapper -->
		
		<a class="email" href="#consultation">
			
			<?php echo file_get_contents("wp-content/themes/watts/images/ico-email.svg"); ?>
			
		</a>
		
	</div><!-- fixed_header -->
	
	
	<div class="internal_header">
		
		<div class="menu_wrapper">
			
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			
			<span class="menu_title">Menu</span><!-- menu_title -->
			
		</div><!-- menu_wrapper -->
		
		<div class="internal_logo">
		
			<a class="" href="<?php bloginfo('url');?>">
			
				<img src="<?php bloginfo('template_directory');?>/images/logo-white.svg"/>
			
			</a>
		
		</div><!-- internal_logo -->
		
		<div class="free_consult_bar">
			
			<span><?php the_field( 'free_consultation_section_one_header_verbige','option'); ?></span>
			
			<a href="tel:<?php the_field( 'firm_phone','option'); ?>"><?php the_field( 'firm_phone','option'); ?></a>
			
		</div><!-- free_consult_bar -->
		
	</div><!-- internal_header -->
				
	<nav>
		
				
		<div class="nav_left">
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
			
		</div><!-- nav_left -->
		
		<div class="nav_right">
			
			<div class="sub_menu_container"></div><!-- sub_menu_container -->
			
		</div><!-- nav_right -->
		
	</nav>

			