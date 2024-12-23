<?php 
    function wpdevart_cake_shop_woo_enqueue() {
        wp_enqueue_style('wpdevart_cake_shop_woocommerce_styles', get_theme_file_uri('/assets/css/front-end/wpdevart-woocommerce.css'));
    }
    add_action('wp_enqueue_scripts', 'wpdevart_cake_shop_woo_enqueue');
    function wpdevart_cake_shop_woo_footer_style() {
		wp_enqueue_style('wpdevart-woo-footer-styles', get_theme_file_uri('/assets/css/front-end/wpdevart-woocommerce-additional.css'));
	};
	add_action( 'get_footer', 'wpdevart_cake_shop_woo_footer_style' );

    
    add_filter( 'body_class','wpdevart_cake_shop_body_class' );
    function wpdevart_cake_shop_body_class( $classes ) {
        if ( wpdevart_cake_shop_is_woocommerce_activated() ) {
            $classes[] = 'woocommerce';
        }
        return $classes;
    }
    if ( ! function_exists( 'wpdevart_cake_shop_is_woocommerce_activated' ) ) {
        function wpdevart_cake_shop_is_woocommerce_activated() {
            if ( class_exists( 'woocommerce' ) ) { return true; } else { return false; }
        }
    }
    add_action( 'wp_enqueue_scripts', 'wpdevart_cake_shop_custom_enqueue_wc_cart_fragments' );
    function wpdevart_cake_shop_custom_enqueue_wc_cart_fragments() {
        wp_enqueue_script( 'wc-cart-fragments' );
    }
    add_filter( 'woocommerce_add_to_cart_fragments', 'wpdevart_cake_shop_mini_cart_count');
    function wpdevart_cake_shop_mini_cart_count($fragments){
        ob_start();
        ?>
        <div id="mini-cart-count">
            <?php echo esc_html(WC()->cart->get_cart_contents_count()); ?>
        </div>
        <?php
            $fragments['#mini-cart-count'] = ob_get_clean();
        return $fragments;
    }

    add_filter( 'woocommerce_add_to_cart_fragments', 'wpdevart_cake_shop_refresh_cart_total');
    function wpdevart_cake_shop_refresh_cart_total( $fragments ) {
            ob_start();
        ?>
            <div id="mini-cart-total">
                <?php echo esc_html_e('Total', 'cake-shop'); ?>
                    <div class="clear"></div>
                    <?php echo wp_kses_post(WC()->cart->get_cart_total()); ?>
            </div>
            <?php
                    $fragments['#mini-cart-total'] = ob_get_clean();
            return $fragments;
    }
    if ( !function_exists( 'wpdevart_header_cart_layout_one' ) ) {
        function wpdevart_header_cart_layout_one() {
            if (!is_cart() && !is_checkout()) { ?>
                <div class="wpdevart-shopping-cart">
                    <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
                </div>
            <?php }
        }
    }
    if ( !function_exists( 'wpdevart_header_add_to_cart_fragment_one' ) ) {
        function wpdevart_header_add_to_cart_fragment_one( $fragments ) {
            ob_start();
            wpdevart_header_cart_layout_one();
            $fragments['a.wpdevart-shopping-cart'] = ob_get_clean();
            return $fragments;
        }
        add_filter( 'woocommerce_add_to_cart_fragments', 'wpdevart_header_add_to_cart_fragment_one' );
    }
    if ( !function_exists( 'wpdevart_header_cart_layout_two' ) ) {
        function wpdevart_header_cart_layout_two() {
            if (!is_cart() && !is_checkout()) { ?>
                <div class="wpdevart-shopping-cart wpdevart-shopping-cart-layout-two">
                    <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
                </div>
            <?php }
        }
    }
    if ( !function_exists( 'wpdevart_header_add_to_cart_fragment_two' ) ) {
        function wpdevart_header_add_to_cart_fragment_two( $fragments ) {
            ob_start();
            wpdevart_header_cart_layout_two();
            $fragments['a.wpdevart-shopping-cart'] = ob_get_clean();
            return $fragments;
        }
        add_filter( 'woocommerce_add_to_cart_fragments', 'wpdevart_header_add_to_cart_fragment_two' );
    }