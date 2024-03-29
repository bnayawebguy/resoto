<?php
	/** Typography Options **/
	function resoto_typography_options( $wp_customize ) {

		$gfonts = array(
			'Montserrat',
			'Poppins',
			'Playfair Display',
			'Open Sans',
			'Merriweather',
		);

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
				Kirki::add_field( 'resoto_heading', array(
					'type'        => 'typography',
					'settings'    => 'resoto_heading',
					'label'       => esc_html__( 'Heading', 'resoto' ),
					'description' => esc_html__( 'configure fonts for heading texts', 'resoto' ),
					'section'     => 'resoto_heading_typo',
					'choices' => array(
						'fonts' => array(
							'google' => $gfonts,
						),
					),
					'default'     => array(
						'font-family'    => 'Poppins',
						'variant'        => '500',
						'color'          => '#616161',
					),
					'transport'   => 'auto',
					'output'      => array(
						array(
							'element' => 'h1',
						),
					),
				) );

			/** Body Section **/
			Kirki::add_section( 'resoto_body_typo', array(
			    'title'          => esc_html__( 'Body', 'resoto' ),
			    'panel'          => 'resoto_typography_panel',
			) );

				/** Body Typography **/
				Kirki::add_field( 'resoto_body', array(
					'type'        => 'typography',
					'settings'    => 'resoto_body',
					'label'       => esc_html__( 'Body', 'resoto' ),
					'description' => esc_html__( 'configure fonts for body texts', 'resoto' ),
					'section'     => 'resoto_body_typo',
					'choices' => array(
						'fonts' => array(
							'google' => $gfonts,
						),
					),
					'default'     => array(
						'font-family'    => 'Montserrat',
						'variant'        => 'regular',
						'color'          => '#616161',
					),
					'transport'   => 'auto',
					'output'      => array(
						array(
							'element' => 'body',
						),
					),
				) );

			/** Widget Section **/
			Kirki::add_section( 'resoto_widget_typo', array(
			    'title'          => esc_html__( 'Widget Title', 'resoto' ),
			    'panel'          => 'resoto_typography_panel',
			) );

				/** Widget Title Typography **/
				Kirki::add_field( 'resoto_widget_title', array(
					'type'        => 'typography',
					'settings'    => 'resoto_widget_title',
					'label'       => esc_html__( 'Widget Title', 'resoto' ),
					'description' => esc_html__( 'configure fonts for widget title', 'resoto' ),
					'section'     => 'resoto_widget_typo',
					'choices' => array(
						'fonts' => array(
							'google' => $gfonts,
						),
					),
					'default'     => array(
						'font-family'    => 'Poppins',
						'variant'        => '600',
						'color'          => '#616161',
					),
					'transport'   => 'auto',
					'output'      => array(
						array(
							'element' => '.right-sidebar #secondary .widget-title, .right-sidebar .widget_hb_widget_cart h3, .sroom-sidebar .widget h3',
						),
					),
				) );

	}

	add_filter( 'kirki/fields', 'resoto_typography_options' );