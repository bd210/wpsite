<?php
// class-api-endpoint.php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Zabrana direktnog pristupa
}

class WC_Custom_Webhook_API_Endpoint {

    public function __construct() {
        // Registracija rute kada je REST API inicijalizovan
        add_action( 'rest_api_init', array( $this, 'register_routes' ) );
    }

    /**
     * Registracija rute za prijem webhook payload-a.
     */
    public function register_routes() {
        register_rest_route( 'wc-custom-webhook/v1', '/receive', array(
            'methods'             => 'POST',
            'callback'            => array( $this, 'handle_webhook_payload' ),
            'permission_callback' => '__return_true', // Možete postaviti ovde odgovarajuće dozvole
        ) );
    }

    /**
     * Callback funkcija za obradu payload-a od Webhook-a.
     *
     * @param WP_REST_Request $request
     * @return WP_REST_Response
     */
    public function handle_webhook_payload( WP_REST_Request $request ) {
        // Dohvati JSON payload
        $payload = $request->get_json_params();

        // Logovanje za testiranje
        error_log( 'Received payload: ' . print_r( $payload, true ) );

        if (empty($payload)) {
            error_log('Nedostaje payload podataka.');
            return new WP_Error( 'no_payload', 'Payload je prazan', [ 'status' => 400 ] );
        }

        global $wpdb;
        $table_name = $wpdb->prefix . 'custom_cart_data';

        foreach ($payload['cart'] as $item) {
            if (!isset($item['product_id']) || !isset($item['quantity']) || !isset($item['line_total'])) {
                error_log('Nedostaju neki ključni podaci u payload-u: ' . print_r($item, true));
                continue;
            }
            $insert_result = $wpdb->insert($table_name, [
                'product_id'   => $item['product_id'],
                'quantity'     => $item['quantity'],
                'line_total'   => isset($item['line_total']) ? $item['line_total'] : 0,
                'variation_id' => isset($item['variation_id']) ? $item['variation_id'] : 0,
                'created_at'   => current_time('mysql'),
            ]);
            if ($insert_result === false)
                error_log('Greška pri upisu u bazu: ' . print_r($wpdb->last_error, true));

        }

        error_log("Podaci su uspesno obradjeni i upisani u bazu.");
        return new WP_REST_Response(['status' => 'success', 'message' => 'Data processed successfully.'], 200);
    }

}

// Inicijalizacija klase kada se plugin učita
new WC_Custom_Webhook_API_Endpoint();