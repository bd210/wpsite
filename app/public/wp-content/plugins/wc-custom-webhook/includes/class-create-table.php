<?php
class WC_Custom_Create_Table {
    public static function create_table() {
        global $wpdb;

        $table_name = $wpdb->prefix . 'custom_cart_data';
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table_name (
            id BIGINT(20) NOT NULL AUTO_INCREMENT,
            product_id BIGINT(20) NOT NULL,
            quantity INT(11) NOT NULL,
            line_total DECIMAL(10,2) NOT NULL,
            variation_id BIGINT(20),
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (id)
        ) $charset_collate;";

        if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
            // Ako tabela ne postoji, kreiraj je
            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($sql); // Kreira tabelu ili ažurira ako je potrebno
            error_log("Tabela $table_name je uspešno kreirana.");
        } else {
            error_log("Tabela $table_name već postoji.");
        }

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
}