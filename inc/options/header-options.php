<?php
	/** Header Options **/
	function resoto_header_options( $wp_customize ) {

		/** Header Panel **/
		Kirki::add_panel( 'resoto_header_panel', array(
		    'title'       => esc_html__( 'Header', 'resoto' ),
		    'description' => esc_html__( 'Configure Header', 'resoto' ),
		) );

			/** Top Header **/
			Kirki::add_section( 'resoto_top_header', array(
			    'title'          => esc_html__( 'Top Header', 'resoto' ),
			    'panel'          => 'resoto_header_panel',
			) );

				/** Enable/Disable Top Header **/
				Kirki::add_field( 'resoto_enable_top_header', [
					'type'        => 'switch',
					'settings'    => 'resoto_enable_top_header',
					'label'       => esc_html__( 'Enable Top Header', 'resoto' ),
					'section'     => 'resoto_top_header',
					'default'     => '1',
					'choices'     => [
						'on'  => esc_html__( 'Enable', 'resoto' ),
						'off' => esc_html__( 'Disable', 'resoto' ),
					],
				] );

				/** Contact Number **/
				Kirki::add_field( 'resoto_contact_number', [
					'type'     => 'text',
					'settings' => 'resoto_contact_number',
					'label'    => esc_html__( 'Contact No.', 'resoto' ),
					'section'  => 'resoto_top_header',
				] );

				/** Email **/
				Kirki::add_field( 'resoto_email', [
					'type'     => 'text',
					'settings' => 'resoto_email',
					'label'    => esc_html__( 'Email ID', 'resoto' ),
					'section'  => 'resoto_top_header',
				] );

				/** Time **/
				Kirki::add_field( 'resoto_time', [
					'type'     => 'text',
					'settings' => 'resoto_time',
					'label'    => esc_html__( 'Time', 'resoto' ),
					'section'  => 'resoto_top_header',
				] );

				/** Facebook Link **/
				Kirki::add_field( 'resoto_facebook', [
					'type'     => 'link',
					'settings' => 'resoto_facebook',
					'label'    => __( 'Facebook', 'resoto' ),
					'section'  => 'resoto_top_header',
					'default'  => '',
				] );

				/** Twitter Link **/
				Kirki::add_field( 'resoto_twitter', [
					'type'     => 'link',
					'settings' => 'resoto_twitter',
					'label'    => __( 'Twitter', 'resoto' ),
					'section'  => 'resoto_top_header',
					'default'  => '',
				] );

				/** Instagram Link **/
				Kirki::add_field( 'resoto_instagram', [
					'type'     => 'link',
					'settings' => 'resoto_instagram',
					'label'    => __( 'Instagram', 'resoto' ),
					'section'  => 'resoto_top_header',
					'default'  => '',
				] );

				/** Youtube Link **/
				Kirki::add_field( 'resoto_youtube', [
					'type'     => 'link',
					'settings' => 'resoto_youtube',
					'label'    => __( 'Youtube', 'resoto' ),
					'section'  => 'resoto_top_header',
					'default'  => '',
				] );

				/** Background Color **/
				Kirki::add_field( 'resoto_top_header_bgcolor', [
					'type'        => 'color',
					'settings'    => 'resoto_top_header_bgcolor',
					'label'       => __( 'Background Color', 'resoto' ),
					'description' => esc_html__( 'Background color for top header.', 'resoto' ),
					'section'     => 'resoto_top_header',
					'default'     => '#0088CC',
				] );

			/** Main Header **/
			Kirki::add_section( 'title_tagline', array(
			    'title'          => esc_html__( 'Main Header', 'resoto' ),
			    'panel'          => 'resoto_header_panel',
			) );

				/** Header Layout **/
				Kirki::add_field( 'resoto_header_layout', [
					'type'        => 'radio-image',
					'settings'    => 'resoto_header_layout',
					'label'       => esc_html__( 'Header Layout', 'resoto' ),
					'section'     => 'title_tagline',
					'default'     => 'layout1',
					'choices'     => [
						'layout1'   => get_template_directory_uri() . '/assets/images/layout1.png',
						'layout2' => get_template_directory_uri() . '/assets/images/layout2.png',
					],
				] );

				/** Header Background Color **/
				Kirki::add_field( 'resoto_header_bgcolor', [
					'type'        => 'color',
					'settings'    => 'color_setting_rgba',
					'label'       => __( 'Background Color', 'resoto' ),
					'description' => esc_html__( 'Set background color for main header.', 'resoto' ),
					'section'     => 'title_tagline',
					'default'     => '#0088CC',
					'choices'     => [
						'alpha' => true,
					],
				] );

				/** Show Search Icon **/
				Kirki::add_field( 'resoto_show_search', [
					'type'        => 'switch',
					'settings'    => 'resoto_show_search',
					'label'       => esc_html__( 'Display Search in Header', 'resoto-companion' ),
					'section'     => 'section_id',
					'default'     => '1',
					'choices'     => [
						'on'  => esc_html__( 'Show', 'resoto-companion' ),
						'off' => esc_html__( 'Hide', 'resoto-companion' ),
					],
				] );

				/** Show Hotel Cart **/
				Kirki::add_field( 'resoto_show_hotelcart', [
					'type'        => 'switch',
					'settings'    => 'resoto_show_hotelcart',
					'label'       => esc_html__( 'Display Hotel Cart in Header', 'resoto-companion' ),
					'section'     => 'section_id',
					'default'     => '1',
					'choices'     => [
						'on'  => esc_html__( 'Enable', 'resoto-companion' ),
						'off' => esc_html__( 'Disable', 'resoto-companion' ),
					],
				] );

			/** Page Banner **/
			Kirki::add_section( 'resoto_hb_search_room', array(
			    'title'          => esc_html__( 'Hotel Search Room', 'resoto' ),
			    'panel'          => 'resoto_header_panel',
			) );

				/** Enable/Disable search room **/
				Kirki::add_field( 'resoto_show_hb_search_rooms', [
					'type'        => 'switch',
					'settings'    => 'resoto_show_hb_search_rooms',
					'label'       => esc_html__( 'Show/Hide Search Rooms Form', 'resoto' ),
					'section'     => 'resoto_hb_search_room',
					'default'     => '1',
					'choices'     => [
						'on'  => esc_html__( 'Show', 'resoto' ),
						'off' => esc_html__( 'Hide', 'resoto' ),
					],
				] );

			/** Page Banner **/
			Kirki::add_section( 'resoto_page_banner', array(
			    'title'          => esc_html__( 'Page Banner', 'resoto' ),
			    'panel'          => 'resoto_header_panel',
			) );

				/** Page Banner Color **/
				Kirki::add_field( 'resoto_page_banner_bgcolor', [
					'type'        => 'color',
					'settings'    => 'resoto_page_banner_bgcolor',
					'label'       => __( 'Background Color', 'resoto' ),
					'description' => esc_html__( 'Set Banner Color for the Inner Pages.', 'resoto' ),
					'section'     => 'resoto_page_banner',
					'default'     => '#0088CC',
				] );

				/** Page Banner Image **/
				Kirki::add_field( 'resoto_page_banner_bgimage', [
					'type'        => 'image',
					'settings'    => 'resoto_page_banner_bgimage',
					'label'       => esc_html__( 'Banner Image', 'resoto' ),
					'description' => esc_html__( 'Set Banner Images for the Inner Pages.', 'resoto' ),
					'section'     => 'resoto_page_banner',
					'default'     => '',
				] );

				/** Page Banner Text Color **/
				Kirki::add_field( 'resoto_page_banner_textcolor', [
					'type'        => 'color',
					'settings'    => 'resoto_page_banner_textcolor',
					'label'       => __( 'Text Color', 'resoto' ),
					'description' => esc_html__( 'Set color for the banner text.', 'resoto' ),
					'section'     => 'resoto_page_banner',
					'default'     => '#0088CC',
				] );

				/** Enable/Disable Breadcrumb **/
				Kirki::add_field( 'resoto_display_breadcrumb', [
					'type'        => 'switch',
					'settings'    => 'resoto_display_breadcrumb',
					'label'       => esc_html__( 'Show/Hide Breadcrumb', 'resoto' ),
					'section'     => 'resoto_page_banner',
					'default'     => '1',
					'choices'     => [
						'on'  => esc_html__( 'Show', 'resoto' ),
						'off' => esc_html__( 'Hide', 'resoto' ),
					],
				] );

	}

	add_filter( 'kirki/fields', 'resoto_header_options' );