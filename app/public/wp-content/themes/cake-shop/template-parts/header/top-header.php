<?php 
    if (get_theme_mod( 'wpdevart_cake_shop_top_header_layout') == 'phoneleft') {
    ?>
        <div class="wpdevart-top-header <?php if (empty(get_theme_mod( 'wpdevart_cake_shop_top_header_bg_gradient_color' ))) 
                    { echo esc_attr( 'wpdevart-top-header-bg-color' ); } 
                    else { echo esc_attr('wpdevart-top-header-gradient-color'); } ?>
                    <?php if (get_theme_mod( 'wpdevart_cake_shop_enable_top_header_border', '1' )) { } 
                    else { echo esc_attr( 'wpdevart-top-header-border' ); } ?>">

        <div class="wpdevart-top-header-section">
        <div class="wpdevart-top-header-left">
            <?php if ( get_theme_mod( 'wpdevart_cake_shop_top_header_phone_number' ) OR (get_theme_mod( 'wpdevart_cake_shop_top_header_phone_number' ) != '') ) { ?>
                    <span class="wpdevart-top-header-phone">
                        <span class="wpdevart-phone-email-icon"><i class="fa-solid fa-phone-volume top-header-icons"></i></span>
                        <span class="wpdevart-phone-email-text"><?php echo esc_html( get_theme_mod( 'wpdevart_cake_shop_top_header_phone_number' ) );  ?></span>
                    </span>
            <?php }   ?>
            <?php if ( get_theme_mod( 'wpdevart_cake_shop_top_header_email' ) OR (get_theme_mod( 'wpdevart_cake_shop_top_header_email' ) != '') ) { ?>
                    <span class="wpdevart-top-header-email">
                        <span class="wpdevart-phone-email-icon"><i class="far fa-envelope top-header-icons"></i></span>
                        <span class="wpdevart-phone-email-text"><?php echo esc_html( get_theme_mod( 'wpdevart_cake_shop_top_header_email' ) );  ?></span>
                    </span>
            <?php }   ?>
        </div>
        <div class="wpdevart-top-header-right">
        <div class="wpdevart-top-header-right-content">
            <?php if (get_theme_mod( 'wpdevart_cake_shop_top_header_disable_twitter', '1' )) { } else { ?><span class="wpdevart-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_top_header_twitter_url' ) );  ?>" target="_blank"></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'wpdevart_cake_shop_top_header_disable_facebook', '1' )) { } else { ?> <span class="wpdevart-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_top_header_facebook_url' ) );  ?>" target="_blank"></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'wpdevart_cake_shop_top_header_disable_linkedin', '1' )) { } else { ?> <span class="wpdevart-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_top_header_linkedin_url' ) );  ?>" target="_blank"></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'wpdevart_cake_shop_top_header_disable_youtube', '1' )) { } else { ?> <span class="wpdevart-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_top_header_youtube_url' ) );  ?>" target="_blank"></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'wpdevart_cake_shop_top_header_disable_instagram', '1' )) { } else { ?> <span class="wpdevart-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_top_header_instagram_url' ) );  ?>" target="_blank"></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'wpdevart_cake_shop_top_header_disable_tiktok', '1' )) { } else { ?> <span class="wpdevart-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_top_header_tiktok_url' ) );  ?>" target="_blank"></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'wpdevart_cake_shop_top_header_disable_pinterest', '1' )) { } else { ?> <span class="wpdevart-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_top_header_pinterest_url' ) );  ?>" target="_blank"></a></span> <?php }; ?>
        </div>
        </div>
        </div>
        </div>
    <?php  
    }  
    else if (get_theme_mod( 'wpdevart_cake_shop_top_header_layout') == 'phonesocialcenter') {
    ?>
        <div class="wpdevart-top-header <?php if (empty(get_theme_mod( 'wpdevart_cake_shop_top_header_bg_gradient_color' ))) 
        { echo esc_attr( 'wpdevart-top-header-bg-color' ); } 
        else { echo esc_attr('wpdevart-top-header-gradient-color'); } ?>
        <?php if (get_theme_mod( 'wpdevart_cake_shop_enable_top_header_border', '1' )) { } 
        else { echo esc_attr( 'wpdevart-top-header-border' ); } ?>">
        <div class="wpdevart-top-header-section">
        <div class="wpdevart-top-header-left-content">
            <?php if ( get_theme_mod( 'wpdevart_cake_shop_top_header_phone_number' ) OR (get_theme_mod( 'wpdevart_cake_shop_top_header_phone_number' ) != '') ) { ?>
                    <span class="wpdevart-top-header-phone">
                        <span class="wpdevart-phone-email-icon"><i class="fa-solid fa-phone-volume top-header-icons"></i></span>
                        <span class="wpdevart-phone-email-text"><?php echo esc_html( get_theme_mod( 'wpdevart_cake_shop_top_header_phone_number' ) );  ?></span>
                    </span>
            <?php }   ?>
            <?php if ( get_theme_mod( 'wpdevart_cake_shop_top_header_email' ) OR (get_theme_mod( 'wpdevart_cake_shop_top_header_email' ) != '') ) { ?>
                    <span class="wpdevart-top-header-email">
                        <span class="wpdevart-phone-email-icon"><i class="far fa-envelope top-header-icons"></i></span>
                        <span class="wpdevart-phone-email-text"><?php echo esc_html( get_theme_mod( 'wpdevart_cake_shop_top_header_email' ) );  ?></span>
                    </span>
            <?php }   ?>
        </div>
        <div class="wpdevart-top-header-right-content">
            <?php if (get_theme_mod( 'wpdevart_cake_shop_top_header_disable_twitter', '1' )) { } else { ?><span class="wpdevart-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_top_header_twitter_url' ) );  ?>" target="_blank"></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'wpdevart_cake_shop_top_header_disable_facebook', '1' )) { } else { ?> <span class="wpdevart-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_top_header_facebook_url' ) );  ?>" target="_blank"></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'wpdevart_cake_shop_top_header_disable_linkedin', '1' )) { } else { ?> <span class="wpdevart-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_top_header_linkedin_url' ) );  ?>" target="_blank"></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'wpdevart_cake_shop_top_header_disable_youtube', '1' )) { } else { ?> <span class="wpdevart-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_top_header_youtube_url' ) );  ?>" target="_blank"></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'wpdevart_cake_shop_top_header_disable_instagram', '1' )) { } else { ?> <span class="wpdevart-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_top_header_instagram_url' ) );  ?>" target="_blank"></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'wpdevart_cake_shop_top_header_disable_tiktok', '1' )) { } else { ?> <span class="wpdevart-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_top_header_tiktok_url' ) );  ?>" target="_blank"></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'wpdevart_cake_shop_top_header_disable_pinterest', '1' )) { } else { ?> <span class="wpdevart-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_top_header_pinterest_url' ) );  ?>" target="_blank"></a></span> <?php }; ?>
        </div>
        </div>
        </div>
    <?php  
    }  
    else if (get_theme_mod( 'wpdevart_cake_shop_top_header_layout') == 'phoneright') {
    ?>
        <div class="wpdevart-top-header <?php if (empty(get_theme_mod( 'wpdevart_cake_shop_top_header_bg_gradient_color' ))) 
        { echo esc_attr( 'wpdevart-top-header-bg-color' ); } 
        else { echo esc_attr('wpdevart-top-header-gradient-color'); } ?>
        <?php if (get_theme_mod( 'wpdevart_cake_shop_enable_top_header_border', '1' )) { } 
        else { echo esc_attr( 'wpdevart-top-header-border' ); } ?>">
        <div class="wpdevart-top-header-section">
        <div class="wpdevart-top-header-left-icons">
        <div class="wpdevart-top-header-left-icons-content">
            <?php if (get_theme_mod( 'wpdevart_cake_shop_top_header_disable_twitter', '1' )) { } else { ?><span class="wpdevart-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_top_header_twitter_url' ) );  ?>" target="_blank"></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'wpdevart_cake_shop_top_header_disable_facebook', '1' )) { } else { ?> <span class="wpdevart-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_top_header_facebook_url' ) );  ?>" target="_blank"></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'wpdevart_cake_shop_top_header_disable_linkedin', '1' )) { } else { ?> <span class="wpdevart-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_top_header_linkedin_url' ) );  ?>" target="_blank"></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'wpdevart_cake_shop_top_header_disable_youtube', '1' )) { } else { ?> <span class="wpdevart-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_top_header_youtube_url' ) );  ?>" target="_blank"></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'wpdevart_cake_shop_top_header_disable_instagram', '1' )) { } else { ?> <span class="wpdevart-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_top_header_instagram_url' ) );  ?>" target="_blank"></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'wpdevart_cake_shop_top_header_disable_tiktok', '1' )) { } else { ?> <span class="wpdevart-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_top_header_tiktok_url' ) );  ?>" target="_blank"></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'wpdevart_cake_shop_top_header_disable_pinterest', '1' )) { } else { ?> <span class="wpdevart-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_top_header_pinterest_url' ) );  ?>" target="_blank"></a></span> <?php }; ?>
        </div>
        </div>
        <div class="wpdevart-top-header-right-content">
            <?php if ( get_theme_mod( 'wpdevart_cake_shop_top_header_phone_number' ) OR (get_theme_mod( 'wpdevart_cake_shop_top_header_phone_number' ) != '') ) { ?>
                    <span class="wpdevart-top-header-phone">
                        <span class="wpdevart-phone-email-icon"><i class="fa-solid fa-phone-volume top-header-icons"></i></span>
                        <span class="wpdevart-phone-email-text"><?php echo esc_html( get_theme_mod( 'wpdevart_cake_shop_top_header_phone_number' ) );  ?></span>
                    </span>
            <?php }   ?>
            <?php if ( get_theme_mod( 'wpdevart_cake_shop_top_header_email' ) OR (get_theme_mod( 'wpdevart_cake_shop_top_header_email' ) != '') ) { ?>
                    <span class="wpdevart-top-header-email">
                        <span class="wpdevart-phone-email-icon"><i class="far fa-envelope top-header-icons"></i></span>
                        <span class="wpdevart-phone-email-text"><?php echo esc_html( get_theme_mod( 'wpdevart_cake_shop_top_header_email' ) );  ?></span>
                    </span>
            <?php }   ?>
        </div>
        </div>
        </div>
    <?php  
    }  
?>