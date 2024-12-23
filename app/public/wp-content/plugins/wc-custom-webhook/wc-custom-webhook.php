<?php
/*
Plugin Name: WooCommerce Custom Webhooks
Plugin URI: http://wpsite.local/
Description: Plugin za automatsko kreiranje WooCommerce webhookova.
Version: 1.0
Author: Boris
License: GPL2
*/
if (!defined('ABSPATH')) {
    exit; // Direktan pristup fajlu nije dozvoljen
}

require_once plugin_dir_path(__FILE__) . 'includes/class-create-table.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-add-to-cart.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-api-endpoint.php';


// Funkcija koja registruje Webhookove
function wc_custom_register_webhooks() {
//    if ( class_exists( 'WC_Webhook' ) ) {
//        error_log('WC_Webhook klasa je dostupna');
//    } else {
//        error_log('WC_Webhook klasa nije dostupna ');
//    }
    // Proveri da li su Webhook-ovi već registrovani
//    if ( ! class_exists( 'WC_Webhooks' ) ) {
//        error_log('WooCommerce Webhooks class not found');
//        return;
//    }

    // Proveri da li je WooCommerce aktiviran
//    if ( ! class_exists( 'WooCommerce' ) ) {
//        error_log('WooCommerce nije aktiviran');
//        return; // Ako WooCommerce nije aktiviran, ne nastavljaj sa registracijom Webhookova
//    }
//
//    if ( ! class_exists( 'WC_Webhook' ) ) {
//        error_log('WC_Webhook klasa nije pronađena');
//        return;
//    }
//    error_log('Registering Webhooks');

    // Kreiraj "Add to Cart" Webhook
    $webhook_url = 'http://wpsite.local/wp-json/wc-custom-webhook/v1/receive-payload'; // URL za endpoint koji prima podatke
    $webhook_data = array(
        'name'               => 'Add to Cart Webhook',
        'topic'              => 'woocommerce_cart_updated', // Ovaj topic se aktivira kada se proizvod doda u korpu
        'delivery_url'       => $webhook_url,
        'secret'             => '', // Ovdje možeš dodati sekret za sigurnost (ako je potrebno)
        'status'             => 'active', // Aktiviraj Webhook
    );

    $webhook = new WC_Webhook();
    $webhook->set_props( $webhook_data );
    $webhook->save();

    // Kreiraj "Process to Checkout" Webhook
    $webhook_data_checkout = array(
        'name'               => 'Process to Checkout Webhook',
        'topic'              => 'woocommerce_checkout_order_processed', // Ovaj topic se aktivira kada korisnik pređe na checkout
        'delivery_url'       => $webhook_url,
        'secret'             => '',
        'status'             => 'active',
    );

    $webhook_checkout = new WC_Webhook();
    $webhook_checkout->set_props( $webhook_data_checkout );
    $webhook_checkout->save();

    // Kreiraj "Order Complete" Webhook (ako želiš da koristiš)
    $webhook_data_order_complete = array(
        'name'               => 'Order Complete Webhook',
        'topic'              => 'woocommerce_order_status_completed', // Ovaj topic se aktivira kada je porudžbina kompletirana
        'delivery_url'       => $webhook_url,
        'secret'             => '',
        'status'             => 'active',
    );

    $webhook_order_complete = new WC_Webhook();
    $webhook_order_complete->set_props( $webhook_data_order_complete );
    $webhook_order_complete->save();
}

// Registruj Webhookove kada je plugin aktiviran
//register_activation_hook( __FILE__, 'wc_custom_register_webhooks' );
add_action( 'woocommerce_init', 'wc_custom_register_webhooks' );