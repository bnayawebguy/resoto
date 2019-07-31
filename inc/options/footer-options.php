<?php
	/** Footer Options **/
	function resoto_footer_options( $wp_customize ) {

		/** Footer Section **/
		Kirki::add_section( 'resoto_footer_options', array(
		    'title'          => esc_html__( 'Footer', 'resoto' ),
		) );

			/** Footer Layout **/
			Kirki::add_field( 'resoto_footer_layout', [
				'type'        => 'select',
				'settings'    => 'resoto_footer_layout',
				'label'       => esc_html__( 'Footer Layout', 'resoto' ),
				'section'     => 'resoto_footer_options',
				'default'     => 'layout1',
				'multiple'    => 1,
				'choices'     => [
					'layout1' => esc_html__( 'Layout 1', 'resoto' ),
					'layout2' => esc_html__( 'Layout 2', 'resoto' ),
				],
			] );

			/** Footer Logo **/
			Kirki::add_field( 'resoto_footer_logo', [
				'type'        => 'image',
				'settings'    => 'resoto_footer_logo',
				'label'       => esc_html__( 'Footer Logo', 'resoto' ),
				'section'     => 'resoto_footer_options',
				'default'     => '',
			] );

			/** Facebook Link **/
			Kirki::add_field( 'resoto_footer_facebook', [
				'type'     => 'link',
				'settings' => 'resoto_footer_facebook',
				'label'    => __( 'Facebook Link', 'resoto' ),
				'section'  => 'resoto_footer_options',
				'default'  => '',
			] );

			/** Twitter Link **/
			Kirki::add_field( 'resoto_footer_twitter', [
				'type'     => 'link',
				'settings' => 'resoto_footer_twitter',
				'label'    => __( 'Twitter Link', 'resoto' ),
				'section'  => 'resoto_footer_options',
				'default'  => '',
			] );

			/** Instagram Link **/
			Kirki::add_field( 'resoto_footer_instagram', [
				'type'     => 'link',
				'settings' => 'resoto_footer_instagram',
				'label'    => __( 'Instagram Link', 'resoto' ),
				'section'  => 'resoto_footer_options',
				'default'  => '',
			] );

			/** Youtube Link **/
			Kirki::add_field( 'resoto_footer_youtube', [
				'type'     => 'link',
				'settings' => 'resoto_footer_youtube',
				'label'    => __( 'Youtube Link', 'resoto' ),
				'section'  => 'resoto_footer_options',
				'default'  => '',
			] );

			/** Copyright Text **/
			Kirki::add_field( 'resoto_copyright_text', [
				'type'     => 'textarea',
				'settings' => 'resoto_copyright_text',
				'label'    => esc_html__( 'Copyright Text', 'resoto' ),
				'section'  => 'resoto_footer_options',
			] );

			/** Enable Go to Top option **/
			Kirki::add_field( 'resoto_goto_top_link', [
				'type'        => 'switch',
				'settings'    => 'resoto_goto_top_link',
				'label'       => esc_html__( 'This is the label', 'resoto' ),
				'section'     => 'resoto_footer_options',
				'default'     => '1',
				'choices'     => [
					'on'  => esc_html__( 'Show', 'resoto' ),
					'off' => esc_html__( 'Hide', 'resoto' ),
				],
			] );

	}

	add_filter( 'kirki/fields', 'resoto_footer_options' );