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
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />


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
				
				<img src="<?php bloginfo('template_directory');?>/images/logo.svg"/>
				
			</a><!-- mobile_logo -->
			
		</div><!-- mobile_logo_wrapper -->
		
		<div class="header_left">
			
			<div class="menu_wrapper">
			
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
			
				<span class="menu_title">Menu</span><!-- menu_title -->
			
		</div><!-- menu_wrapper -->
			
		</div><!-- header_left -->
		
		<div class="header_right">
			
			<a class="tablet_logo" href="<?php bloginfo('url');?>">
				
				<img class="dark_logo" src="<?php bloginfo('template_directory');?>/images/logo.svg"/>
				
				<img class="white_logo" src="<?php bloginfo('template_directory');?>/images/logo-white.svg"/>
			
			</a><!-- tablet_logo -->
			
			<div class="tablet_free_consult_wrapper">
				
				<span class="tablet_free_consult">Free Consultation</span><!-- tablet_free_consult -->
				
				<a class="tablet_phone" href="te:(800) 294-0055">(800) 294-0055</a><!-- tablet_phone -->
				
			</div><!-- tablet_free_consult_wrapper -->
			
		</div><!-- header_right -->
		
		<?php // wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
		
	</header>
	
	<div class="sticky_header"><!-- sticky_header -->
		
		<div class="menu_wrapper">
			
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			
			<span class="menu_title">Menu</span><!-- menu_title -->
			
		</div><!-- menu_wrapper -->
			
		<div class="sticky_email">
			
			<a href="mailto:">
				
				<?php echo file_get_contents("wp-content/themes/watts/images/ico-email-white.svg"); ?>
				
			</a>
			
						
		</div><!-- sticky_middle -->
		
		<div class="sticky_right">
			
			<div class="tablet_free_consult_wrapper">
				
				<span class="tablet_free_consult">Free Consultation</span><!-- tablet_free_consult -->
				
				<a class="tablet_phone" href="te:(800) 294-0055">(800) 294-0055</a><!-- tablet_phone -->
				
			</div><!-- tablet_free_consult_wrapper -->
			
		</div>
		
	</div><!-- sticky_header -->
	
	<div class="fixed_header"><!-- along side -->
		
		<div class="menu_wrapper">
			
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			
			<span class="menu_title">Menu</span><!-- menu_title -->
			
		</div><!-- menu_wrapper -->
		
		<a class="email" href="mailto:">
			
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
			
			<span>Free Consultation</span>
			
			<a href="tel:(800) 294-0055">(800) 294-0055</a>
			
		</div><!-- free_consult_bar -->
		
	</div><!-- internal_header -->
				


			