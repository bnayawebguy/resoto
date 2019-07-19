<?php
	/** Resoto Slider **/
	function resoto_slider_cb() {
		$slider_category = get_theme_mod( 'resoto_slider_category', 0 );

		$slider_query = new WP_Query( array( 'category_name' => $slider_category ) );

		if( $slider_query->have_posts() ) {
			?>
			<div class="resoto-slider owl-carousel">
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
									<span class="subtitle"><?php echo esc_html( get_the_title() ); ?></span>
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