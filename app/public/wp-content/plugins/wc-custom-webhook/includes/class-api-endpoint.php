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
        register_rest_route( 'wc-custom-webhook/v1', '/receive-payload', array(
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

        // Provera da li je payload ispravan
        if ( isset( $payload['product_id'] ) && isset( $payload['quantity'] ) ) {
            $this->insert_into_database( $payload );
            return new WP_REST_Response( 'Data processed successfully', 200 );
        } else {
            return new WP_REST_Response( 'Invalid payload', 400 );
        }
    }

    /**
     * Funkcija za upisivanje podataka u bazu
     */
    private function insert_into_database( $payload ) {
        global $wpdb;

        $table_name = $wpdb->prefix . 'custom_cart_data';

        // Ubacivanje podataka u tabelu
        $wpdb->insert(
            $table_name,
            array(
                'product_id' => $payload['product_id'],
                'quantity'   => $payload['quantity'],
                'user_id'    => get_current_user_id(),
                'time'       => current_time('mysql'),
            )
        );

        error_log( 'Data successfully inserted into the database' );
    }
}

// Inicijalizacija klase kada se plugin učita
new WC_Custom_Webhook_API_Endpoint();