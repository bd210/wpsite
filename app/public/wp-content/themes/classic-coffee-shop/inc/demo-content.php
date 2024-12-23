<div class="theme-offer">
   <?php
     // POST and update the customizer and other related data of Classic Coffee Shop
    if ( isset( $_POST['submit'] ) ) {

        // WooCommerce installation and activation
        if (!is_plugin_active('woocommerce/woocommerce.php')) {
            $classic_coffee_shop_plugin_slug = 'woocommerce';
            $classic_coffee_shop_plugin_file = 'woocommerce/woocommerce.php';
            $classic_coffee_shop_installed_plugins = get_plugins();
            if (!isset($classic_coffee_shop_installed_plugins[$classic_coffee_shop_plugin_file])) {
                include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
                include_once(ABSPATH . 'wp-admin/includes/file.php');
                include_once(ABSPATH . 'wp-admin/includes/misc.php');
                include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
                $classic_coffee_shop_upgrader = new Plugin_Upgrader();
                $classic_coffee_shop_upgrader->install('https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip');
            }
            activate_plugin($classic_coffee_shop_plugin_file);
        }

        // ------- Create Main Menu --------
        $classic_coffee_shop_menuname = 'Primary Menu';
        $classic_coffee_shop_bpmenulocation = 'primary';
        $classic_coffee_shop_menu_exists = wp_get_nav_menu_object( $classic_coffee_shop_menuname );
    
        if ( !$classic_coffee_shop_menu_exists ) {
            $classic_coffee_shop_menu_id = wp_create_nav_menu( $classic_coffee_shop_menuname );

            // Create Home Page
            $classic_coffee_shop_home_title = 'Home';
            $classic_coffee_shop_home = array(
                'post_type'    => 'page',
                'post_title'   => $classic_coffee_shop_home_title,
                'post_content' => '',
                'post_status'  => 'publish',
                'post_author'  => 1,
                'post_slug'    => 'home'
            );
            $classic_coffee_shop_home_id = wp_insert_post($classic_coffee_shop_home);
            // Assign Home Page Template
            add_post_meta($classic_coffee_shop_home_id, '_wp_page_template', '/template-home-page.php');
            // Update options to set Home Page as the front page
            update_option('page_on_front', $classic_coffee_shop_home_id);
            update_option('show_on_front', 'page');
            // Add Home Page to Menu
            wp_update_nav_menu_item($classic_coffee_shop_menu_id, 0, array(
                'menu-item-title' => __('Home', 'classic-coffee-shop'),
                'menu-item-classes' => 'home',
                'menu-item-url' => home_url('/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $classic_coffee_shop_home_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Create a new Page 
            $classic_coffee_shop_pages_title = 'Pages';
            $classic_coffee_shop_pages_content = '<p>Explore all the pages we have on our website...</p>';
            $classic_coffee_shop_pages = array(
                'post_type'    => 'page',
                'post_title'   => $classic_coffee_shop_pages_title,
                'post_content' => $classic_coffee_shop_pages_content,
                'post_status'  => 'publish',
                'post_author'  => 1,
                'post_slug'    => 'pages'
            );
            $classic_coffee_shop_pages_id = wp_insert_post($classic_coffee_shop_pages);
            // Add Pages Page to Menu
            wp_update_nav_menu_item($classic_coffee_shop_menu_id, 0, array(
                'menu-item-title' => __('Pages', 'classic-coffee-shop'),
                'menu-item-classes' => 'pages',
                'menu-item-url' => home_url('/pages/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $classic_coffee_shop_pages_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Create About Us Page 
            $classic_coffee_shop_about_title = 'About Us';
            $classic_coffee_shop_about_content = 'Lorem ipsum dolor sit amet...';
            $classic_coffee_shop_about = array(
                'post_type'    => 'page',
                'post_title'   => $classic_coffee_shop_about_title,
                'post_content' => $classic_coffee_shop_about_content,
                'post_status'  => 'publish',
                'post_author'  => 1,
                'post_slug'    => 'about-us'
            );
            $classic_coffee_shop_about_id = wp_insert_post($classic_coffee_shop_about);
            // Add About Us Page to Menu
            wp_update_nav_menu_item($classic_coffee_shop_menu_id, 0, array(
                'menu-item-title' => __('About Us', 'classic-coffee-shop'),
                'menu-item-classes' => 'about-us',
                'menu-item-url' => home_url('/about-us/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $classic_coffee_shop_about_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Assign the menu to the primary location if not already set
            if ( ! has_nav_menu( $classic_coffee_shop_bpmenulocation ) ) {
                $classic_coffee_shop_locations = get_theme_mod( 'nav_menu_locations' );
                if ( empty( $classic_coffee_shop_locations ) ) {
                    $classic_coffee_shop_locations = array();
                }
                $classic_coffee_shop_locations[ $classic_coffee_shop_bpmenulocation ] = $classic_coffee_shop_menu_id;
                set_theme_mod( 'nav_menu_locations', $classic_coffee_shop_locations );
            }
        }

        //Header Section
        set_theme_mod( 'classic_coffee_shop_the_custom_logo', esc_url( get_template_directory_uri().'/images/Logo.png'));
        set_theme_mod( 'classic_coffee_shop_fb_link', '#');
        set_theme_mod( 'classic_coffee_shop_insta_link', '#');
        set_theme_mod( 'classic_coffee_shop_twitt_link', '#');
        set_theme_mod( 'classic_coffee_shop_linked_link', '#');
        set_theme_mod( 'classic_coffee_shop_youtube_link', '#');

        //Slider Section
        set_theme_mod( 'classic_coffee_shop_button_text', 'SHOP HERE');
        set_theme_mod( 'classic_coffee_shop_button_link_slider', '#');
        
        // Create the 'Coffee Shop' category and retrieve its ID
        $classic_coffee_shop_slider_category_id = wp_create_category('Coffee Shop');

        set_theme_mod('classic_coffee_shop_slidersection', $classic_coffee_shop_slider_category_id); 
        
        // Create three demo posts and assign them to the 'Coffee Shop' category
        for ($classic_coffee_shop_i = 1; $classic_coffee_shop_i <= 3; $classic_coffee_shop_i++) {
            $classic_coffee_shop_title = 'Coffee Heaven';
            $classic_coffee_shop_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

            // Prepare the post object
            $classic_coffee_shop_my_post = array(
                'post_title'    => wp_strip_all_tags($classic_coffee_shop_title),
                'post_content'  => $classic_coffee_shop_content,
                'post_status'   => 'publish',
                'post_type'     => 'post',
                'post_category' => array($classic_coffee_shop_slider_category_id),
            );
    
            // Insert the post into the database
            $classic_coffee_shop_post_id = wp_insert_post($classic_coffee_shop_my_post);
    
            // If the post was successfully created, set the featured image
            if ($classic_coffee_shop_post_id && !is_wp_error($classic_coffee_shop_post_id)) {
                // Set the image URL
                $classic_coffee_shop_image_url = esc_url(get_template_directory_uri() . '/images/slider.png');
                $classic_coffee_shop_upload_dir = wp_upload_dir();
    
                // Download the image data using wp_remote_get()
                $classic_coffee_shop_response = wp_remote_get($classic_coffee_shop_image_url);
                if (!is_wp_error($classic_coffee_shop_response)) {
                    $classic_coffee_shop_image_data = wp_remote_retrieve_body($classic_coffee_shop_response);
    
                    if (!empty($classic_coffee_shop_image_data)) {
                        // Handle the file upload process
                        $classic_coffee_shop_image_name = 'blog' . $classic_coffee_shop_i . '.png';
                        $classic_coffee_shop_unique_file_name = wp_unique_filename($classic_coffee_shop_upload_dir['path'], $classic_coffee_shop_image_name);
                        $classic_coffee_shop_file = $classic_coffee_shop_upload_dir['path'] . '/' . $classic_coffee_shop_unique_file_name;
    
                        // Save the image file to the uploads directory
                        global $wp_filesystem;
                        WP_Filesystem();
                        $wp_filesystem->put_contents($classic_coffee_shop_file, $classic_coffee_shop_image_data);
    
                        // Check file type and prepare for attachment
                        $classic_coffee_shop_wp_filetype = wp_check_filetype($classic_coffee_shop_unique_file_name, null);
                        $classic_coffee_shop_attachment = array(
                            'post_mime_type' => $classic_coffee_shop_wp_filetype['type'],
                            'post_title'     => sanitize_file_name($classic_coffee_shop_unique_file_name),
                            'post_content'   => '',
                            'post_status'    => 'inherit',
                        );
    
                        // Insert the image into the media library and set it as the post's featured image
                        $classic_coffee_shop_attach_id = wp_insert_attachment($classic_coffee_shop_attachment, $classic_coffee_shop_file, $classic_coffee_shop_post_id);
                        $classic_coffee_shop_attach_data = wp_generate_attachment_metadata($classic_coffee_shop_attach_id, $classic_coffee_shop_file);
                        wp_update_attachment_metadata($classic_coffee_shop_attach_id, $classic_coffee_shop_attach_data);
                        set_post_thumbnail($classic_coffee_shop_post_id, $classic_coffee_shop_attach_id);
                    }
                }
            }
        }

        // Products Section
        set_theme_mod('classic_coffee_shop_product_title', 'Our Hot Products');
        set_theme_mod('classic_coffee_shop_product_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore tempor incididunt.');

        // Create the 'Coffee' WooCommerce product category
        $classic_coffee_shop_hot_products_cat = wp_insert_term(
            'Coffee', // The name of the category
            'product_cat', // The taxonomy for WooCommerce product categories
            array(
                'description' => 'A category for coffee products',
                'slug'        => 'coffee'
            )
        );

        // Check if the category was created successfully
        if (!is_wp_error($classic_coffee_shop_hot_products_cat)) {
            $classic_coffee_shop_hot_products_cat_id = $classic_coffee_shop_hot_products_cat['term_id'];

            // Set the category in theme mods to be selected in the Customizer
            set_theme_mod('classic_coffee_shop_hot_products_cat', 'Coffee');

            // Define product titles
            $classic_coffee_shop_titles = array('Black Coffee', 'Hot Coffee', 'Dark Coffee');

            // Loop through and create each product post
            for ($classic_coffee_shop_i = 0; $classic_coffee_shop_i < count($classic_coffee_shop_titles); $classic_coffee_shop_i++) {
                // Create the product post
                $classic_coffee_shop_post_data = array(
                    'post_title'    => wp_strip_all_tags($classic_coffee_shop_titles[$classic_coffee_shop_i]),
                    'post_content'  => '',
                    'post_status'   => 'publish',
                    'post_type'     => 'product', // WooCommerce 'product' post type
                );

                // Insert the post into the database
                $classic_coffee_shop_post_id = wp_insert_post($classic_coffee_shop_post_data);

                if (!is_wp_error($classic_coffee_shop_post_id)) {
                    // Assign the product to the 'Coffee' category
                    wp_set_object_terms($classic_coffee_shop_post_id, $classic_coffee_shop_hot_products_cat_id, 'product_cat');

                    // Set the product image
                    $classic_coffee_shop_image_url = get_template_directory_uri() . '/images/products/product' . ($classic_coffee_shop_i + 1) . '.png';
                    $classic_coffee_shop_image_id = media_sideload_image($classic_coffee_shop_image_url, $classic_coffee_shop_post_id, null, 'id');
                    if (!is_wp_error($classic_coffee_shop_image_id)) {
                        set_post_thumbnail($classic_coffee_shop_post_id, $classic_coffee_shop_image_id);
                    } else {
                        error_log('Failed to set post thumbnail for post ID: ' . $classic_coffee_shop_post_id);
                    }
                } else {
                    error_log('Failed to create product post: ' . print_r($classic_coffee_shop_post_id, true));
                }
            }
        } else {
            error_log('Failed to create product category: ' . print_r($classic_coffee_shop_hot_products_cat, true));
        }
      
    //Footer Copyright Text
    set_theme_mod( 'classic_coffee_shop_copyright_line', 'Coffee Shop WordPress Theme' );

    // Show success message and the "View Site" button
         echo '<div class="success">Demo Import Successful</div>';
    }
     ?>
    <ul>
        <li>
        <hr>
        <?php 
        // Check if the form is submitted
        if ( !isset( $_POST['submit'] ) ) : ?>
           <!-- Show demo importer form only if it's not submitted -->
           <?php echo esc_html( 'Click on the below content to get demo content installed.', 'classic-coffee-shop' ); ?>
          <br>
          <small><b><?php echo esc_html('Please take a backup if your website is already live with data. This importer will overwrite existing data.', 'classic-coffee-shop' ); ?></b></small>
          <br><br>

          <form id="demo-importer-form" action="" method="POST" onsubmit="return confirm('Do you really want to do this?');">
            <input type="submit" name="submit" value="<?php echo esc_attr('Run Importer','classic-coffee-shop'); ?>" class="button button-primary button-large">
          </form>
        <?php 
        endif; 

        // Show "View Site" button after form submission
        if ( isset( $_POST['submit'] ) ) {
        echo '<div class="view-site-btn">';
        echo '<a href="' . esc_url(home_url()) . '" class="button button-primary button-large" style="margin-top: 10px;" target="_blank">View Site</a>';
        echo '</div>';
        }
        ?>

        <hr>
        </li>
    </ul>
 </div>