<?php
	/** Blog Options **/
	function resoto_blog_options( $wp_customize ) {

		$category_list = resoto_category_list('dropdown');
		$category_list_chk = resoto_category_list('checkbox');

		/** Blog Section **/
		Kirki::add_section( 'resoto_blog_options', array(
		    'title'          => esc_html__( 'Blogs', 'resoto' ),
		) );

			/** Blog Layout **/
			Kirki::add_field( 'resoto_blog_layout', [
				'type'        => 'radio-image',
				'settings'    => 'resoto_blog_layout',
				'label'       => esc_html__( 'Blog Layout', 'resoto' ),
				'section'     => 'resoto_blog_options',
				'default'     => 'layout1',
				'choices'     => [
					'layout1'   => get_template_directory_uri() . '/assets/images/layout1.png',
					'layout2' => get_template_directory_uri() . '/assets/images/layout2.png',
					'layout3'  => get_template_directory_uri() . '/assets/images/layout3.png',
				],
			] );

			/** Blog Sidebar Layout **/
			Kirki::add_field( 'resoto_blog_sidebar_layout', [
				'type'        => 'radio-image',
				'settings'    => 'resoto_blog_sidebar_layout',
				'label'       => esc_html__( 'Sidebar Layout', 'resoto' ),
				'section'     => 'resoto_blog_options',
				'default'     => 'no-sidebar',
				'choices'     => [
					'no-sidebar'   => get_template_directory_uri() . '/assets/images/no-sidebar.png',
					'right-sidebar' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
				],
			] );

			/** Exclude Categories **/
			Kirki::add_field( 'resoto_blog_exclude_categories', [
				'type'        => 'multicheck',
				'settings'    => 'resoto_blog_exclude_categories',
				'label'       => esc_html__( 'Exclude Categories', 'resoto' ),
				'section'     => 'resoto_blog_options',
				'default'     => array(),
				'choices'     => $category_list_chk,
			] );

			/** Excerpt Length **/
			Kirki::add_field( 'resoto_blog_excerpt_length', [
				'type'        => 'slider',
				'settings'    => 'resoto_blog_excerpt_length',
				'label'       => esc_html__( 'Excerpt Length (In Chars)', 'resoto' ),
				'section'     => 'resoto_blog_options',
				'choices'     => [
					'min'  => 0,
					'max'  => 500,
					'step' => 1,
				],
			] );

			/** ReadMore Text **/
			Kirki::add_field( 'resoto_blog_readmore_text', [
				'type'     => 'text',
				'settings' => 'resoto_blog_readmore_text',
				'label'    => esc_html__( 'Read More Text', 'resoto' ),
				'section'  => 'section_id',
			] );

	}

	add_filter( 'kirki/fields', 'resoto_blog_options' );