<?php
	/** Typography Options **/
	function resoto_typography_options( $wp_customize ) {

		/** Typography Panel **/
		Kirki::add_panel( 'resoto_typography_panel', array(
		    'title'       => esc_html__( 'Typography', 'resoto' ),
		    'description' => esc_html__( 'Configure Typography for the site', 'resoto' ),
		    'priority'    => 30
		) );

			/** Heading Section **/
			Kirki::add_section( 'resoto_heading_typo', array(
			    'title'          => esc_html__( 'Heading (H1 - H6)', 'resoto' ),
			    'panel'          => 'resoto_typography_panel',
			) );

				/** Heading 1 Typography **/
				Kirki::add_field( 'resoto_heading1a', [
					'type'        => 'typography',
					'settings'    => 'resoto_heading1a',
					'label'       => esc_html__( 'Heading 1', 'resoto' ),
					'section'     => 'resoto_heading_typo',
					'choices' => [
						'fonts' => [
							'google' => [ 'Roboto', 'Open Sans', 'Lato', 'Noto Serif', 'Noto Sans' ],
						],
					],
					'default'     => [
						'font-family'    => 'Roboto',
						'variant'        => 'regular',
						'color'          => '#333333',
						'text-transform' => 'none',
					],
					'transport'   => 'auto',
					'output'      => [
						[
							'element' => 'h1',
						],
					],
				] );

			/** Body Section **/
			Kirki::add_section( 'resoto_body_typo', array(
			    'title'          => esc_html__( 'Body', 'resoto' ),
			    'panel'          => 'resoto_typography_panel',
			) );

				/** Heading 1 Typography **/
				Kirki::add_field( 'resoto_body', [
					'type'        => 'typography',
					'settings'    => 'resoto_body',
					'label'       => esc_html__( 'Body', 'resoto' ),
					'section'     => 'resoto_body_typo',
					'choices' => [
						'fonts' => [
							'google' => [ 'Roboto', 'Open Sans', 'Lato', 'Noto Serif', 'Noto Sans' ],
						],
					],
					'default'     => [
						'font-family'    => 'Roboto',
						'variant'        => 'regular',
						'color'          => '#333333',
						'text-transform' => 'none',
					],
					'transport'   => 'auto',
					'output'      => [
						[
							'element' => 'body',
						],
					],
				] );

			/** Widget Section **/
			Kirki::add_section( 'resoto_widget_typo', array(
			    'title'          => esc_html__( 'Widget Title', 'resoto' ),
			    'panel'          => 'resoto_typography_panel',
			) );

				/** Widget Title Typography **/
				Kirki::add_field( 'resoto_widget_title', [
					'type'        => 'typography',
					'settings'    => 'resoto_widget_title',
					'label'       => esc_html__( 'Widget Title', 'resoto' ),
					'section'     => 'resoto_widget_typo',
					'choices' => [
						'fonts' => [
							'google' => [ 'Roboto', 'Open Sans', 'Lato', 'Noto Serif', 'Noto Sans' ],
						],
					],
					'default'     => [
						'font-family'    => 'Roboto',
						'variant'        => 'regular',
						'color'          => '#333333',
						'text-transform' => 'none',
					],
					'transport'   => 'auto',
					'output'      => [
						[
							'element' => '.widget-title',
						],
					],
				] );

	}

	add_filter( 'kirki/fields', 'resoto_typography_options' );