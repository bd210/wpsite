<?php
class WC_Custom_Add_To_Cart {
    public static function init() {
        add_action('woocommerce_add_to_cart', [__CLASS__, 'trigger_webhook'], 10, 5);
    }

    public static function trigger_webhook($cart_item_key, $product_id, $quantity, $variation_id, $cart_item_data) {
        $cart = WC()->cart->get_cart();
        $payload = [];

        foreach ($cart as $item) {

            $line_total = isset($item['line_total']) ? $item['line_total'] : (isset($item['quantity']) && isset($item['data']) ? $item['quantity'] * $item['data']->get_price() : 0.0);

            $payload[] = [
                'product_id'   => isset($item['product_id']) ? $item['product_id'] : 0,
                'quantity'     => isset($item['quantity']) ? $item['quantity'] : 0,
                'line_total'   => $line_total,
                'variation_id' => isset($item['variation_id']) ? $item['variation_id'] : 0,
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
