<?php
class WC_Custom_Add_To_Cart {
    public static function init() {
        add_action('woocommerce_add_to_cart', [__CLASS__, 'trigger_webhook'], 10, 5);
    }

    public static function trigger_webhook($cart_item_key, $product_id, $quantity, $variation_id, $cart_item_data) {
        $cart = WC()->cart->get_cart();
        $payload = [];

        foreach ($cart as $key => $item) {
            $payload[] = [
                'product_id'   => $item['product_id'],
                'quantity'     => $item['quantity'],
                'line_total'   => isset($item['line_total']) ? $item['line_total'] : 0,
                'variation_id' => $item['variation_id'],
            ];
        }

        $webhook_url = site_url('/wp-json/wc-custom-webhook/v1/receive');
        wp_remote_post($webhook_url, [
            'method'      => 'POST',
            'headers'     => ['Content-Type' => 'application/json'],
            'body'        => json_encode(['cart' => $payload]),
        ]);
        error_log( 'Received payload: ' . print_r( $payload, true ) );
    }
}
WC_Custom_Add_To_Cart::init();
