<footer class="<?php 
                    if (!get_theme_mod( 'wpdevart_cake_shop_footer_template' )) { echo esc_attr('wpdevart-footer-one'); }
                    $wpdevartFooterStyle = get_theme_mod( 'wpdevart_cake_shop_footer_template' ); echo esc_attr($wpdevartFooterStyle);
                ?>">

        <?php if ( ( is_active_sidebar( 'wpdevart_cake_shop_footer_widget_01' ) ) OR ( is_active_sidebar( 'wpdevart_cake_shop_footer_widget_02' ) ) OR ( is_active_sidebar( 'wpdevart_cake_shop_footer_widget_03' ) ) OR ( is_active_sidebar( 'wpdevart_cake_shop_footer_widget_04' ) ) ) { ?>

            <div class="wpdevart-footer-container">

                    <div class="site-footer-four-widgets-group">
                        <div class="wpdevart-footer-col-layout-four">
                        <div class="wpdevart-widgets-inner">
                        <?php        
                                if ( is_active_sidebar( 'wpdevart_cake_shop_footer_widget_01' ) ) {
                                    dynamic_sidebar( 'wpdevart_cake_shop_footer_widget_01' ); 
                                }
                        ?>
                        </div>
                        </div>

                        <div class="wpdevart-footer-col-layout-four">
                        <div class="wpdevart-widgets-inner">
                        <?php
                                if ( is_active_sidebar( 'wpdevart_cake_shop_footer_widget_02' ) ) {
                                    dynamic_sidebar( 'wpdevart_cake_shop_footer_widget_02' ); 
                                } 
                        ?>    
                        </div>
                        </div>
                    </div>
                    <div class="site-footer-four-widgets-group">
                        <div class="wpdevart-footer-col-layout-four">
                        <div class="wpdevart-widgets-inner">
                        <?php        
                                if ( is_active_sidebar( 'wpdevart_cake_shop_footer_widget_03' ) ) {
                                    dynamic_sidebar( 'wpdevart_cake_shop_footer_widget_03' ); 
                                }
                        ?>
                        </div>
                        </div>

                        <div class="wpdevart-footer-col-layout-four">
                        <div class="wpdevart-widgets-inner">
                        <?php
                                if ( is_active_sidebar( 'wpdevart_cake_shop_footer_widget_04' ) ) {
                                    dynamic_sidebar( 'wpdevart_cake_shop_footer_widget_04' ); 
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