<footer class="<?php 
                    if (!get_theme_mod( 'wpdevart_cake_shop_footer_template' )) { echo esc_attr('wpdevart-footer-one'); }
                    $wpdevartFooterStyle = get_theme_mod( 'wpdevart_cake_shop_footer_template' ); echo esc_attr($wpdevartFooterStyle);
                ?>">
				
			<?php if ( ( is_active_sidebar( 'wpdevart_cake_shop_footer_large_widget' ) ) OR ( is_active_sidebar( 'wpdevart_cake_shop_footer_widget_01' ) ) OR ( is_active_sidebar( 'wpdevart_cake_shop_footer_widget_02' ) ) ) { ?>
			
				<div class="wpdevart-footer-container">

						<div class="site-footer__col-one">
						<div class="wpdevart-widgets-inner">
						<?php
								if ( is_active_sidebar( 'wpdevart_cake_shop_footer_large_widget' ) ) {
									dynamic_sidebar( 'wpdevart_cake_shop_footer_large_widget' ); 
								}
						?>
						</div>
						</div>
			 
						<div class="site-footer__col-two-three-group">
							<div class="site-footer__col-two">
							<div class="wpdevart-widgets-inner">
							<?php        
									if ( is_active_sidebar( 'wpdevart_cake_shop_footer_widget_01' ) ) {
										dynamic_sidebar( 'wpdevart_cake_shop_footer_widget_01' ); 
									}
							?>
							</div>
							</div>

							<div class="site-footer__col-three">
							<div class="wpdevart-widgets-inner">
							<?php
									if ( is_active_sidebar( 'wpdevart_cake_shop_footer_widget_02' ) ) {
										dynamic_sidebar( 'wpdevart_cake_shop_footer_widget_02' ); 
									} 
							?>    
							</div>
							</div>
						</div>

				</div>

			<?php } ?>

			<div class="wpdevart-footer-copyright-section">
				<div class="<?php if ( get_theme_mod( 'wpdevart_cake_shop_footer_image_display_option' ) == '1' ) {echo esc_attr( 'wpdevart-footer-copyright-text' );} else {echo esc_attr( 'wpdevart-footer-copyright-only-text' );} ?>">
					<?php
					$wpdevartFooterOption = get_theme_mod( 'wpdevart_cake_shop_footer_copyright_text' );
					$wpdevartFooterWP = sprintf( esc_html__( ' %s Powered by WordPress.', 'cake-shop' ), '<a target="_blank" title="WordPress Cake Shop Theme" href="'. esc_url( 'https://wordpress.org/themes/cake-shop' ) .'">Cake Shop</a>' );
					?>
					<p><?php echo esc_html($wpdevartFooterOption); echo $wpdevartFooterWP; ?></p>
				</div>
			</div>

</footer>