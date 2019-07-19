<?php
	function resoto_kirki_configuration() {
	    return array( 'url_path' => get_stylesheet_directory_uri() . '/inc/kirki/' );
	}
	add_filter( 'kirki/config', 'resoto_kirki_configuration' );

	require get_template_directory() . '/inc/options/helper.php'; // Helper File	

	require get_template_directory() . '/inc/options/header-options.php'; // Header Options
	require get_template_directory() . '/inc/options/slider-options.php'; // Header Options