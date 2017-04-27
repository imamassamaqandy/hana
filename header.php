<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Hana
 * @since Hana 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width" />

	<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site container">

	<div class="row">
	
		<header id="masthead" class="site-header span12" role="banner">

			<hgroup id="title" class="clearfix">

				<?php if( !is_home() || !is_front_page() ) { ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<div class="site-description"><?php bloginfo( 'description' ); ?></h2>
				<?php } else { ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<div class="site-description"><?php bloginfo( 'description' ); ?></h2>
				<?php } ?>

			</hgroup><!-- end #title -->

			<div id="site-header">

				<?php $header_image = get_header_image();
					if ( ! empty( $header_image ) ) { ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>">
						</a>
				<?php } ?>

			</div><!-- end #site-header -->

			<nav id="site-navigation" class="navigation-main navbar" role="navigation">
				
				<div class="navbar-inner">
					
						<a class="btn btn-navbar" data-toggle="collapse" data-target="#nav-container">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>

					<div id="nav-container" class="nav-collapse collapse">

						<?php wp_nav_menu( 
							array(  
									
									'container' 		=> 	'',
									'depth'				=>	'5',
									'items_wrap' 		=> 	'<ul id="%1$s" class="%2$s">%3$s</ul>',
									'menu_class' 		=> 	'nav span12',
									'theme_location' 	=> 	'primary',
									'walker'			=>	new hana_nav_walker(),
									'fallback_cb' 		=> '__false_'
								)	 
							); 
						?>

					</div>

				</div>

			</nav><!-- #site-navigation -->

		</header><!-- #masthead -->

		<div id="main" class="site-main clearfix">

				