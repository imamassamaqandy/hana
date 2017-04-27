<?php

	if ( ! isset( $content_width ) )
		$content_width = 640;

	if ( ! function_exists( 'hana_setup' ) ) :

		function hana_setup() {

			require_once get_template_directory() . '/includes/enqueue.php';
			require_once get_template_directory() . '/includes/templates.php';
			require_once get_template_directory() . '/includes/extensions.php';
			require_once get_template_directory() . '/includes/filters.php';
			require_once get_template_directory() . '/includes/widgets.php';

			$args = array(
				'default-color' => 'ffffff',
				'default-image' => '',
			);	
			add_theme_support( 'custom-background', $args );

			$defaults = array(
				'default-image'          => get_template_directory_uri() . '/img/header.jpg',
				'random-default'         => false,
				'width'                  => 1170,
				'height'                 => 300,
				'flex-height'            => true,
				'flex-width'             => true,
				'default-text-color'     => '',
				'header-text'            => false,
				'uploads'                => true,
				'wp-head-callback'       => '',
				'admin-head-callback'    => '',
				'admin-preview-callback' => '',
			);
			add_theme_support( 'custom-header', $defaults );

			register_nav_menus( 
				array(
					'primary' 		=> 'Navigation',
				)
			);

			add_theme_support( 'post-thumbnails' );

			add_theme_support( 'automatic-feed-links' );

			add_theme_support( 'post-formats', array( 'aside', 'quote', 'link' ) );

				add_post_type_support( 'aside', 'post-formats' );

				add_post_type_support( 'quote', 'post-formats' );

				add_post_type_support( 'link', 'post-formats' );

			add_image_size( 'thumb', 200, 200 );

			add_editor_style( 'css/editor-style.css' );

		}

	endif;
	add_action( 'after_setup_theme', 'hana_setup' );

?>