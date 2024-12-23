<div class="wpdevart-header-container">
    <div class="wpdevart-main-header-section">
    <div class="wpdevart-logo-area">
        <div class="wpdevart-main-header-section-mobile-logo">
            <?php 
            if ( has_custom_logo() && is_front_page()) {
            ?><h1 class="mobile-image-logo-resizing wpdevart-header-logo-spaces"><a href="<?php echo esc_url(home_url()) ?>"><?php the_custom_logo() ?></a></h1><?php }
            else if ( has_custom_logo() && !is_front_page()) {
            ?><h2 class="mobile-image-logo-resizing wpdevart-header-logo-spaces"><a href="<?php echo esc_url(home_url()) ?>"><?php the_custom_logo() ?></a></h2><?php }
            else if ( !has_custom_logo() && is_front_page() && get_theme_mod( 'wpdevart_cake_shop_header_logo_gradient_color' )) {
            ?><h1 class="wpdevart-logo-text-gradient"><a href="<?php echo esc_url(home_url()) ?>"><?php echo get_bloginfo('name') ?></a></h1><?php } 
            else if ( !has_custom_logo() && is_front_page() && empty(get_theme_mod( 'wpdevart_cake_shop_header_logo_gradient_color' ))) {
            ?><h1 class="wpdevart-logo-text"><a href="<?php echo esc_url(home_url()) ?>" class="wpdevart-logo-text-simple"><?php echo get_bloginfo('name') ?></a></h1><?php } 
            else if ( !has_custom_logo() && !is_front_page() && get_theme_mod( 'wpdevart_cake_shop_header_logo_gradient_color' )) {
            ?><h2 class="wpdevart-logo-text-gradient"><a href="<?php echo esc_url(home_url()) ?>"><?php echo get_bloginfo('name') ?></a></h2><?php }
            else if ( !has_custom_logo() && !is_front_page() && empty(get_theme_mod( 'wpdevart_cake_shop_header_logo_gradient_color' ))) {
            ?><h2 class="wpdevart-logo-text"><a href="<?php echo esc_url(home_url()) ?>" class="wpdevart-logo-text-simple"><?php echo get_bloginfo('name') ?></a></h2><?php }
            ?>
        </div>
    </div>
    <?php if (get_theme_mod( 'wpdevart_cake_shop_header_show_action_button', '1' )) { } else { ?>
    <div class="header-action-button-mobile-area">
    <div class="wpdevart_cake_shop_hover_button_small wpdevart-header-action-button <?php echo esc_attr( get_theme_mod( 'wpdevart_cake_shop_header_action_button_style' ) ); ?>"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_header_action_button_url' ) );  ?>"><?php echo esc_html( get_theme_mod( 'wpdevart_cake_shop_header_action_button_text' ) );  ?></a></div>
    </div>
    <?php } ?>
    <div class="wpdevart-menu-and-buttons-area">
    <div class="wpdevart-menu-and-buttons-container">
    <div role="navigation" class="<?php if (get_theme_mod( 'wpdevart_cake_shop_header_show_action_button', '1' )) { echo esc_attr('nav-container-without-action-button'); } else { echo esc_attr('nav-container-layout-one'); } ?>">
	                <?php if ( class_exists( 'WooCommerce' ) ) { ?>
						<div class="header-woo-account-icon-mobile">
							<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><i class="fa-regular fa-user wpdevart-woo-account-icon"></i> </a> 
						</div>
					<?php } ?>
                    <div class="wpdevart-search-button-icon-mobile">
                        <button onClick="wpdevartToggleModalSmall()" type="button" id="wpdevartsmallsearchbutton" class="site-header__search-trigger search-menu-buttons"><i class="fa fa-search site-header-font-cursor" aria-hidden="true"></i></button>
                    </div>
					<nav class="navbar-wpdevart" id="wpdevartmobilemenu">
                    <div id="head-mobile" class="<?php if (empty(get_theme_mod( 'wpdevart_cake_shop_mobile_menu_bg_gradient_color' ))) 
                                            { echo esc_attr( 'head-mobile-toolbar' ); } 
                                            else { echo esc_attr('head-mobile-toolbar-gradient'); } ?>"></div>
                    <button onClick="wpdevartMenuToggleModal()" id="wpdevartOpenMenuButton" class="wpdevartmobilemenubutton wpdevart-mobile-icon-button"></button>
                        <?php
                            if ( has_nav_menu( 'primary_menu' ) ) {
                                wp_nav_menu(
                                array(
                                    'theme_location' => 'primary_menu',
                                    'container' => false,
                                    'walker' => new Wpdevart_Walker_Nav_Primary(),
                                )
                                );
                            }
							else {
                                wp_nav_menu(
                                    array(
                                    'theme_location' => 'primary_menu',
                                    'container' => 'ul',
                                    'menu_class'     => 'simple-navbar-wpdevart',
                                    'depth'                => 1,
                                    )
                                );
                                }
                        ?>
            </nav>
    </div>
    <?php if ( class_exists( 'WooCommerce' ) ) { ?>
            <div class="header-woo-account-icon">
                <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><i class="fa-regular fa-user wpdevart-woo-account-icon"></i> </a> 
            </div>
            <div class="header-cart">
                <a class="cart-customlocation" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'cake-shop' ); ?>"><i class="fa-solid fa-cart-arrow-down wpdevart-woo-icon"></i><span class="custom-cart-count"><div id="mini-cart-count"></div></span> </a> 
				<?php wpdevart_header_cart_layout_one() ?>
            </div>   
    <?php } ?>
    <div class="wpdevart-search-button-icon">
        <button onClick="wpdevartToggleModal()" type="button" id="wpdevartwidesearchbutton" class="search-trigger search-menu-buttons"><i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
    <?php if (get_theme_mod( 'wpdevart_cake_shop_header_show_action_button', '1' )) { } else { ?>
        <div class="header-action-button-area">
        <div class="wpdevart_cake_shop_hover_button_small wpdevart-header-action-button <?php echo esc_attr( get_theme_mod( 'wpdevart_cake_shop_header_action_button_style' ) ); ?>"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_cake_shop_header_action_button_url' ) );  ?>"><?php echo esc_html( get_theme_mod( 'wpdevart_cake_shop_header_action_button_text' ) );  ?></a></div>
        </div>
    <?php } ?>
    </div>
    </div>
    </div>
</div>