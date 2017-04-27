<?php 

	/* 	Load Hana Scripts */
	function hana_scripts() {

		wp_enqueue_style( 'style', get_stylesheet_uri() );

		wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.0', false ); 
		wp_enqueue_script( 'bootstrap' );

		if ( is_singular() ) wp_enqueue_script( "comment-reply" );

	}
	add_action( 'wp_enqueue_scripts', 'hana_scripts' );

?>