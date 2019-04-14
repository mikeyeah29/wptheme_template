<?php

	function add_theme_scripts() {
		wp_enqueue_style( 'style', get_stylesheet_uri() );
		wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Josefin+Slab|Viga|Yatra+One' );
	}
	add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>