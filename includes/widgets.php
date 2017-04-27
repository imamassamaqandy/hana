<?php

	function hana_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'hana' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div></aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1><div class="widget-content">',
	) );
	}
	add_action( 'widgets_init', 'hana_widgets_init' );

?>