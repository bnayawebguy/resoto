<?php
	/** Resoto Slider **/
	function resoto_slider_cb() {
		if( !is_front_page() ) {
			return;
		}

		$slider_category = get_theme_mod( 'resoto_slider_category', 0 );
		$slider_layout = get_theme_mod( 'resoto_slider_layout', 'layout1' );

		$slider_query = new WP_Query( array( 'category_name' => $slider_category ) );

		if( $slider_query->have_posts() ) {
			?>
			<div class="resoto-slider owl-carousel <?php echo esc_attr( $slider_layout ); ?>">
				<?php
					while( $slider_query->have_posts() ) {
						$slider_query->the_post();

						$style = '';
						if( has_post_thumbnail() ) {
							$slide_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
							$style = 'background-image: url("' . $slide_image[0] . '")';
						}
						?>
						<div class="slide" style="<?php echo esc_attr( $style ); ?>">
							<div class="rcontainer">
								<div class="caption-text">
									<h2 class="slide-title">
										<?php echo wp_kses( get_the_title(), array( 'span' => array()) ); ?>
									</h2>
									<div class="text"><?php the_content(); ?></div>
									<a href="<?php the_permalink(); ?>" class="slide-btn">
										<i class="lni-enter"></i><?php esc_html_e( 'Book Rooms', 'resoto' ); ?>
									</a>
								</div>
							</div>
						</div>
						<?php
					}
				?>
			</div>
			<?php
		}
	}
	add_action( 'resoto_slider', 'resoto_slider_cb' );

	/** Resoto Hotel Search Rooms **/
	function resoto_hb_search_rooms_cb() {
		if( !is_front_page() ) {
			return;
		}

		$show_search_rooms_form = get_theme_mod( 'resoto_show_hb_search_rooms', 1 );

		if( $show_search_rooms_form && is_active_sidebar( 'hb-search-rooms' ) ) {
			?>
			<div class="resoto-hb-search-room">
				<?php dynamic_sidebar( 'hb-search-rooms' ); ?>
			</div>
			<?php
		}
	}
	add_action( 'resoto_hb_search_rooms', 'resoto_hb_search_rooms_cb' );

	/** Resoto Page Banner **/
	function resoto_page_banner_cb() {
		if( !is_front_page() ) {
			$banner_color = get_theme_mod( 'resoto_page_banner_bgcolor', '' );
			$banner_image = get_theme_mod( 'resoto_page_banner_bgimage', '' );
			$display_breadcrumb = get_theme_mod( 'resoto_display_breadcrumb', 1 );
			?>
				<div class="resoto-banner">
					<div class="rcontainer">
						<h2 class="page-title"><?php echo esc_html(resoto_get_page_title()); ?></h2>
						<?php
							resoto_breadcrumb_trail( array(
								'container' => '',
								'show_browse' => false,
							) );
						?>
					</div>
				</div>
			<?php
		}
	}
	add_action( 'resoto_page_banner', 'resoto_page_banner_cb' );

	function resoto_category_slug_to_id( $cats ) {
		$cat_ids = array();

		if( empty( $cats ) ) {
			return array();
		}

		foreach( $cats as $cat => $slug ) {
			$category = get_category_by_slug( $slug );

			$cat_ids[] = $category->term_id;
		}

		return $cat_ids;
	}

	/** Exclude Categories from Blog Page **/
    function resoto_exclude_cat_from_blog($query) {
        $exclude_cats = get_theme_mod('resoto_blog_exclude_categories', '');
        
        $avoid_categories = resoto_category_slug_to_id($exclude_cats);
        
        if ( $query->is_home() ) {
            $query->set('category__not_in', $avoid_categories);
        }
        
        return $query;
    }
    add_filter('pre_get_posts', 'resoto_exclude_cat_from_blog');