<?php
	/** Slider Options **/
	function resoto_slider_options( $wp_customize ) {

		$category_list = resoto_category_list('dropdown');

		/** Slider Section **/
		Kirki::add_section( 'resoto_slider_options', array(
		    'title'          => esc_html__( 'Slider', 'resoto' ),
		) );

			/** Enable/Disable Top Header **/
			Kirki::add_field( 'resoto_enable_slider', [
				'type'        => 'switch',
				'settings'    => 'resoto_enable_slider',
				'label'       => esc_html__( 'Enable Slider', 'resoto' ),
				'section'     => 'resoto_slider_options',
				'default'     => '1',
				'choices'     => [
					'on'  => esc_html__( 'Enable', 'resoto' ),
					'off' => esc_html__( 'Disable', 'resoto' ),
				],
			] );

				/** Slider Category **/
				Kirki::add_field( 'resoto_slider_category', [
					'type'        => 'select',
					'settings'    => 'resoto_slider_category',
					'label'       => esc_html__( 'Slider Category', 'resoto' ),
					'section'     => 'resoto_slider_options',
					'default'     => 0,
					'multiple'    => 1,
					'choices'     => $category_list
				] );

				/** Slider Layout **/
				Kirki::add_field( 'resoto_slider_layout', [
					'type'        => 'radio-image',
					'settings'    => 'resoto_slider_layout',
					'label'       => esc_html__( 'Slider Layout', 'resoto' ),
					'section'     => 'resoto_slider_options',
					'default'     => 'layout1',
					'choices'     => [
						'layout1'   => get_template_directory_uri() . '/assets/images/slider-layout1.png',
						'layout2' => get_template_directory_uri() . '/assets/images/slider-layout2.png',
						'layout3'  => get_template_directory_uri() . '/assets/images/slider-layout3.png',
					],
				] );

				/** Slider Layout **/
				Kirki::add_field( 'resoto_slider_layout', [
					'type'        => 'select',
					'settings'    => 'resoto_slider_layout',
					'label'       => esc_html__( 'Slider Layout', 'resoto' ),
					'section'     => 'resoto_slider_options',
					'default'     => 'layout1',
					'multiple'    => 1,
					'choices'     => [
						'layout1' => esc_html__( 'Left Aligned', 'resoto' ),
						'layout2' => esc_html__( 'Center Aligned', 'resoto' ),
						'layout3' => esc_html__( 'Right Aligned', 'resoto' ),
					],
				] );

	}

	add_filter( 'kirki/fields', 'resoto_slider_options' );