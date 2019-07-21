<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Resoto
 */

?>
		</div><!-- .rcontainer -->
	</div><!-- #content -->

	<?php
		$social_heading = get_theme_mod( 'resoto_social_heading', '' );
		$facebook_link = get_theme_mod( 'resoto_footer_facebook', '' );
		$facebook_text = get_theme_mod( 'resoto_footer_facebook_text', '' );
		$twitter_link = get_theme_mod( 'resoto_footer_twitter', '' );
		$twitter_text = get_theme_mod( 'resoto_footer_twitter_text', '' );
		$instagram_link = get_theme_mod( 'resoto_footer_instagram', '' );
		$instagram_text = get_theme_mod( 'resoto_footer_instagram_text', '' );
		$youtube_link = get_theme_mod( 'resoto_footer_youtube', '' );
		$youtube_text = get_theme_mod( 'resoto_footer_youtube_text', '' );
		$copyright_text = get_theme_mod( 'resoto_copyright_text', '' );
	?>

	<footer id="colophon" class="site-footer">
		<?php if( $facebook_link || $twitter_link || $instagram_link || $youtube_link ) : ?>
			<div class="footer-social-links">
				<div class="rcontainer">
					<?php if( $social_heading ) : ?>
						<h3 class="social-links-heading">
							<?php echo esc_html_e( $social_heading ); ?>
						</h3>
					<?php endif; ?>

					<ul>
						<?php if( $facebook_link ) : ?>	
							<li>
								<a href="<?php echo esc_url( $facebook_link ); ?>"><span class="lni-facebook"></span></a>
								<?php if( $facebook_text ) : ?>
									<span class="social-link-text"><?php echo esc_html( $facebook_text ); ?></span>
								<?php endif; ?>
							</li>
						<?php endif; ?>
						<?php if( $twitter_link ) : ?>
							<li>
								<a href="<?php echo esc_url( $twitter_link ); ?>"><span class="lni-twitter"></span></a>
								<?php if( $twitter_text ) : ?>
									<span class="social-link-text"><?php echo esc_html( $twitter_text ); ?></span>
								<?php endif; ?>
							</li>
						<?php endif; ?>
						<?php if( $instagram_link ) : ?>	
							<li>
								<a href="<?php echo esc_url( $instagram_link ); ?>"><span class="lni-instagram"></span></a>
								<?php if( $instagram_text ) : ?>
									<span class="social-link-text"><?php echo esc_html( $instagram_text ); ?></span>
								<?php endif; ?>
							</li>
						<?php endif; ?>
						<?php if( $youtube_link ) : ?>
							<li>
								<a href="<?php echo esc_url( $youtube_link ); ?>"><span class="lni-youtube"></span></a>
								<?php if( $youtube_text ) : ?>
									<span class="social-link-text"><?php echo esc_html( $youtube_text ); ?></span>
								<?php endif; ?>
							</li>
						<?php endif; ?>
					</ul>
				</div> <!-- .rcontainer -->
			</div>
		<?php endif; ?>
		<div class="bottom-footer">
			<div class="rcontainer">
				
				<?php
					wp_nav_menu( array(
					    'theme_location' => 'footer-menu',
					    'container' => false
					) );
				?>

				<div class="site-info">
					<div>
					<?php
						if( $copyright_text ) {
							echo wp_kses_post( $copyright_text );
						}
						else {
					?>
					<?php echo esc_html__( '&copy; 2019 | All Rights Reserved', 'resoto' ); ?>
					<span class="sep"> | </span>
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'resoto' ), 'resoto', '<a href="https://mysticalthemes.com/">MysticalThemes</a>' );
						?>
					<?php
						}
					?>
					</div>
				</div>
			</div> <!-- .rcontainer -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
