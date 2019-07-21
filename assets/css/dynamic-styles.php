<?php
	/** Resoto Dynamic Styles **/
	function resoto_dynamic_styles() {

		$custom_css = "";

		/** Page Banner **/
		$banner_bgcolor = get_theme_mod( 'resoto_page_banner_bgcolor', '' );
		$banner_bgimage = get_theme_mod( 'resoto_page_banner_bgimage', '' );
		$banner_textcolor = get_theme_mod( 'resoto_page_banner_textcolor', '' );
		if( $banner_bgcolor ) {
			$custom_css .= "
				.resoto-banner{
					background-color: $banner_bgcolor;
				}
			";
		}

		if( $banner_bgimage ) {
			$custom_css .= "
				.resoto-banner{
					background-image: url($banner_bgimage);
				}
			";
		}

		if( $banner_textcolor ) {
			$custom_css .= "
				.resoto-banner,
				.resoto-banner a{
					color: $banner_textcolor;
				}
			";
		}
		wp_add_inline_style( 'resoto-style', $custom_css );
	}
	add_action( 'wp_enqueue_scripts', 'resoto_dynamic_styles' );