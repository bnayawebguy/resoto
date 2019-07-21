<?php
	/** Footer Options **/
	function resoto_footer_options( $wp_customize ) {

		/** Footer Section **/
		Kirki::add_section( 'resoto_footer_options', array(
		    'title'          => esc_html__( 'Footer', 'resoto' ),
		) );

			/** Social Icons Heading Text **/
			Kirki::add_field( 'resoto_social_heading', [
				'type'     => 'text',
				'settings' => 'resoto_social_heading',
				'label'    => esc_html__( 'Social Icons Heading', 'resoto' ),
				'section'  => 'resoto_footer_options',
			] );

			/** Facebook Link **/
			Kirki::add_field( 'resoto_footer_facebook', [
				'type'     => 'link',
				'settings' => 'resoto_footer_facebook',
				'label'    => __( 'Facebook Link', 'resoto' ),
				'section'  => 'resoto_footer_options',
				'default'  => '',
			] );

			/** Facebook Text **/
			Kirki::add_field( 'resoto_footer_facebook_text', [
				'type'     => 'text',
				'settings' => 'resoto_footer_facebook_text',
				'label'    => esc_html__( 'Facebook Text', 'resoto' ),
				'section'  => 'resoto_footer_options',
			] );

			/** Twitter Link **/
			Kirki::add_field( 'resoto_footer_twitter', [
				'type'     => 'link',
				'settings' => 'resoto_footer_twitter',
				'label'    => __( 'Twitter Link', 'resoto' ),
				'section'  => 'resoto_footer_options',
				'default'  => '',
			] );

			/** Twitter Text **/
			Kirki::add_field( 'resoto_footer_twitter_text', [
				'type'     => 'text',
				'settings' => 'resoto_footer_twitter_text',
				'label'    => esc_html__( 'Twitter Text', 'resoto' ),
				'section'  => 'resoto_footer_options',
			] );

			/** Instagram Link **/
			Kirki::add_field( 'resoto_footer_instagram', [
				'type'     => 'link',
				'settings' => 'resoto_footer_instagram',
				'label'    => __( 'Instagram Link', 'resoto' ),
				'section'  => 'resoto_footer_options',
				'default'  => '',
			] );

			/** Twitter Text **/
			Kirki::add_field( 'resoto_footer_instagram_text', [
				'type'     => 'text',
				'settings' => 'resoto_footer_instagram_text',
				'label'    => esc_html__( 'Instagram Text', 'resoto' ),
				'section'  => 'resoto_footer_options',
			] );

			/** Youtube Link **/
			Kirki::add_field( 'resoto_footer_youtube', [
				'type'     => 'link',
				'settings' => 'resoto_footer_youtube',
				'label'    => __( 'Youtube Link', 'resoto' ),
				'section'  => 'resoto_footer_options',
				'default'  => '',
			] );

			/** Youtube Text **/
			Kirki::add_field( 'resoto_footer_youtube_text', [
				'type'     => 'text',
				'settings' => 'resoto_footer_youtube_text',
				'label'    => esc_html__( 'Youtube Text', 'resoto' ),
				'section'  => 'resoto_footer_options',
			] );

			Kirki::add_field( 'resoto_copyright_text', [
				'type'     => 'textarea',
				'settings' => 'resoto_copyright_text',
				'label'    => esc_html__( 'Copyright Text', 'kirki' ),
				'section'  => 'resoto_footer_options',
			] );

	}

	add_filter( 'kirki/fields', 'resoto_footer_options' );