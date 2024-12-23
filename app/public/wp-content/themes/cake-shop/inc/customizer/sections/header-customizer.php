<?php
	$wp_customize->add_panel( 'wpdevart_cake_shop_header_panel', 
	array(
		'title'	=> esc_html__('Header','cake-shop'),			
		'description'	=> esc_html__('Customize the theme header options','cake-shop'),		
		'priority'		=> 24
	) 
	);
    $wp_customize->add_section('wpdevart_cake_shop_header_section',array(
		'title'	=> esc_html__('General','cake-shop'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_cake_shop_header_panel'
	));

	$wp_customize->add_setting( 'wpdevart_cake_shop_header_layout',
	array(
		'default' => esc_html('headerlayoutone'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_cake_shop_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_cake_shop_header_layout',
	array(
		'label' => esc_html__( 'Header layout', 'cake-shop' ),
		'description' => esc_html__( 'Select the position of the header elements', 'cake-shop' ),
		'section' => 'wpdevart_cake_shop_header_section',
		'choices' => array(
		'headerlayoutone' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/header-layout-one.jpg',
			'name' => esc_html__( 'All header elements on one line', 'cake-shop' )
		),
		'headerlayouttwo' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/header-layout-two.jpg',
			'name' => esc_html__( 'Logo on the top side of the menu', 'cake-shop' )
		),
		)
	)
	) );
	$wp_customize->add_setting('wpdevart_cake_shop_header_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_header_bg_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_header_bg_color', array(
        'label' => esc_html__('Header background color','cake-shop'),
        'section' => 'wpdevart_cake_shop_header_section',
        'settings' => 'wpdevart_cake_shop_header_bg_color'
    )));

	$wp_customize->add_setting('wpdevart_cake_shop_header_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_header_gradient_type',array(
			'label'	=> esc_html__('Gradient type','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_header_section',
			'setting'	=> 'wpdevart_cake_shop_header_gradient_type',
			'type' => 'select',
			'choices' => array(
				'to right' => esc_html__('To right','cake-shop'),
				'to left' => esc_html__('To left','cake-shop'),
				'to bottom' => esc_html__('To bottom','cake-shop'),
				'to top' => esc_html__('To top','cake-shop'),
				'to bottom right' => esc_html__('To bottom right','cake-shop'),
				'to bottom left' => esc_html__('To bottom left','cake-shop'),
				'to top right' => esc_html__('To top right','cake-shop'),
				'to top left' => esc_html__('To top left','cake-shop'),
				)
	));	
	$wp_customize->add_setting('wpdevart_cake_shop_header_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_header_bg_gradient_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_header_bg_gradient_color', array(
        'label' => esc_html__('Header gradient color','cake-shop'),
        'section' => 'wpdevart_cake_shop_header_section',
        'settings' => 'wpdevart_cake_shop_header_bg_gradient_color'
    )));
	$wp_customize->add_setting( 'wpdevart_cake_shop_enable_main_header_border',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_cake_shop_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_cake_shop_enable_main_header_border',
        array(
        'label' => esc_html__( 'Hide the header border', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_cake_shop_main_header_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_main_header_border_color', esc_html('#fbf8f8')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_main_header_border_color', array(
        'label' => esc_html__('Header border color','cake-shop'),
        'section' => 'wpdevart_cake_shop_header_section',
        'settings' => 'wpdevart_cake_shop_main_header_border_color'
    )));
	$wp_customize->add_setting( 'wpdevart_cake_shop_header_show_action_button',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_cake_shop_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_cake_shop_header_show_action_button',
        array(
        'label' => esc_html__( 'Hide the action button', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_cake_shop_header_action_button_text',array(
		'default'	=> esc_html('Join Us'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_cake_shop_header_action_button_text',
            array(
                'label'    => esc_html__('Header action button text','cake-shop'),
                'section'  => 'wpdevart_cake_shop_header_section',
                'settings' => 'wpdevart_cake_shop_header_action_button_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_cake_shop_header_action_button_url',array(
		'default'	=> esc_url('#'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_url_sanitization'
	));
	$wp_customize->add_control('wpdevart_cake_shop_header_action_button_url',array(
			'label'	=> esc_html__('Header action button URL','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_header_section',
			'setting'	=> 'wpdevart_cake_shop_header_action_button_url'
	));	
	$wp_customize->add_setting('wpdevart_cake_shop_header_action_button_style',array(
		'default'	=> esc_html('wpdevart_cake_shop_ninth_button_slide ninth_btn_slide_right'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_header_action_button_style',array(
			'label'	=> esc_html__('Header action button style','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_header_section',
			'setting'	=> 'wpdevart_cake_shop_header_action_button_style',
			'type' => 'select',
			'choices' => array(
				'wpdevart_cake_shop_first_button_slide first_btn_slide_right' => esc_html__('Style 1 - WpDevArt Color', 'cake-shop'),
				'wpdevart_cake_shop_second_button_slide second_btn_slide_right' => esc_html__('Style 2 - Grapefruit Red', 'cake-shop'),
				'wpdevart_cake_shop_third_button_slide third_btn_slide_right' => esc_html__('Style 3 - Blue', 'cake-shop'),
				'wpdevart_cake_shop_fourth_button_slide fourth_btn_slide_right' => esc_html__('Style 4 - Black', 'cake-shop'),
				'wpdevart_cake_shop_fifth_button_slide fifth_btn_slide_right' => esc_html__('Style 5 - Green', 'cake-shop'),
				'wpdevart_cake_shop_sixth_button_slide sixth_btn_slide_right' => esc_html__('Style 6 - Yellow', 'cake-shop'),
				'wpdevart_cake_shop_seventh_button_slide seventh_btn_slide_right' => esc_html__('Style 7 - Custom Green', 'cake-shop'),
				'wpdevart_cake_shop_eighth_button_slide eighth_btn_slide_right' => esc_html__('Style 8 - White', 'cake-shop'),
				'wpdevart_cake_shop_ninth_button_slide ninth_btn_slide_right' => esc_html__('Style 9 - Custom Primary', 'cake-shop'),
				'wpdevart_cake_shop_tenth_button_slide tenth_btn_slide_right' => esc_html__('Style 10 - Custom Secondary', 'cake-shop'),
				)
	));

	$wp_customize->add_section('wpdevart_cake_shop_header_menu_search_section',array(
		'title'	=> esc_html__('Menu and Search','cake-shop'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_cake_shop_header_panel'
	));
	$wp_customize->add_setting('wpdevart_cake_shop_header_search_button_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_header_search_button_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_header_search_button_color', array(
        'label' => esc_html__('Search button color','cake-shop'),
        'section' => 'wpdevart_cake_shop_header_menu_search_section',
        'settings' => 'wpdevart_cake_shop_header_search_button_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_header_menu_items_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_header_menu_items_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_header_menu_items_color', array(
        'label' => esc_html__('Menu items color','cake-shop'),
        'section' => 'wpdevart_cake_shop_header_menu_search_section',
        'settings' => 'wpdevart_cake_shop_header_menu_items_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_main_header_sub_menu_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_main_header_sub_menu_bg_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_main_header_sub_menu_bg_color', array(
        'label' => esc_html__('Sub menu background color','cake-shop'),
        'section' => 'wpdevart_cake_shop_header_menu_search_section',
        'settings' => 'wpdevart_cake_shop_main_header_sub_menu_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_main_header_sub_menu_items_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_main_header_sub_menu_items_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_main_header_sub_menu_items_color', array(
        'label' => esc_html__('Sub menu items color','cake-shop'),
        'section' => 'wpdevart_cake_shop_header_menu_search_section',
        'settings' => 'wpdevart_cake_shop_main_header_sub_menu_items_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_main_header_sub_menu_top_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_main_header_sub_menu_top_border_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_main_header_sub_menu_top_border_color', array(
        'label' => esc_html__('Sub menu border color','cake-shop'),
        'section' => 'wpdevart_cake_shop_header_menu_search_section',
        'settings' => 'wpdevart_cake_shop_main_header_sub_menu_top_border_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_header_mobile_menu_background_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_header_mobile_menu_background_color', esc_html('#fffcfd')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_header_mobile_menu_background_color', array(
        'label' => esc_html__('Mobile toolbar background color','cake-shop'),
        'section' => 'wpdevart_cake_shop_header_menu_search_section',
        'settings' => 'wpdevart_cake_shop_header_mobile_menu_background_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_mobile_menu_bg_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_mobile_menu_bg_gradient_type',array(
			'label'	=> esc_html__('Gradient type','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_header_menu_search_section',
			'setting'	=> 'wpdevart_cake_shop_mobile_menu_bg_gradient_type',
			'type' => 'select',
			'choices' => array(
				'to right' => esc_html__('To right','cake-shop'),
				'to left' => esc_html__('To left','cake-shop'),
				'to bottom' => esc_html__('To bottom','cake-shop'),
				'to top' => esc_html__('To top','cake-shop'),
				'to bottom right' => esc_html__('To bottom right','cake-shop'),
				'to bottom left' => esc_html__('To bottom left','cake-shop'),
				'to top right' => esc_html__('To top right','cake-shop'),
				'to top left' => esc_html__('To top left','cake-shop'),
				)
	));	
	$wp_customize->add_setting('wpdevart_cake_shop_mobile_menu_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_mobile_menu_bg_gradient_color', esc_html('#fffcfd')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_mobile_menu_bg_gradient_color', array(
        'label' => esc_html__('Mobile toolbar background gradient color','cake-shop'),
        'section' => 'wpdevart_cake_shop_header_menu_search_section',
        'settings' => 'wpdevart_cake_shop_mobile_menu_bg_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_header_descktop_search_button_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_header_descktop_search_button_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_header_descktop_search_button_color', array(
        'label' => esc_html__('Mobile search button color','cake-shop'),
        'section' => 'wpdevart_cake_shop_header_menu_search_section',
        'settings' => 'wpdevart_cake_shop_header_descktop_search_button_color'
    )));

	$wp_customize->add_setting('wpdevart_cake_shop_header_mobile_menu_button_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_header_mobile_menu_button_color', esc_html('#39a0a7')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_header_mobile_menu_button_color', array(
        'label' => esc_html__('Mobile menu button color','cake-shop'),
        'section' => 'wpdevart_cake_shop_header_menu_search_section',
        'settings' => 'wpdevart_cake_shop_header_mobile_menu_button_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_main_header_mobile_menu_background_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_main_header_mobile_menu_background_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_main_header_mobile_menu_background_color', array(
        'label' => esc_html__('Mobile menu background color','cake-shop'),
        'section' => 'wpdevart_cake_shop_header_menu_search_section',
        'settings' => 'wpdevart_cake_shop_main_header_mobile_menu_background_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_main_header_mobile_menu_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_main_header_mobile_menu_link_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_main_header_mobile_menu_link_color', array(
        'label' => esc_html__('Mobile menu link color','cake-shop'),
        'section' => 'wpdevart_cake_shop_header_menu_search_section',
        'settings' => 'wpdevart_cake_shop_main_header_mobile_menu_link_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_main_header_mobile_menu_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_main_header_mobile_menu_border_color', esc_html('#dddddd')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_main_header_mobile_menu_border_color', array(
        'label' => esc_html__('Mobile menu borders color','cake-shop'),
        'section' => 'wpdevart_cake_shop_header_menu_search_section',
        'settings' => 'wpdevart_cake_shop_main_header_mobile_menu_border_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_main_header_mobile_sub_menu_button_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_main_header_mobile_sub_menu_button_bg_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_main_header_mobile_sub_menu_button_bg_color', array(
        'label' => esc_html__('Mobile sub-menu button BG color','cake-shop'),
        'section' => 'wpdevart_cake_shop_header_menu_search_section',
        'settings' => 'wpdevart_cake_shop_main_header_mobile_sub_menu_button_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_main_header_mobile_sub_menu_button_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_main_header_mobile_sub_menu_button_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_main_header_mobile_sub_menu_button_color', array(
        'label' => esc_html__('Mobile sub-menu button color','cake-shop'),
        'section' => 'wpdevart_cake_shop_header_menu_search_section',
        'settings' => 'wpdevart_cake_shop_main_header_mobile_sub_menu_button_color'
    )));

	if ( class_exists( 'WooCommerce' ) ) {
		$wp_customize->add_section('wpdevart_cake_shop_header_woo_cart',array(
			'title'	=> esc_html__('WooCommerce','cake-shop'),					
			'priority'		=> null,
			'panel'         => 'wpdevart_cake_shop_header_panel'
		));
		$wp_customize->add_setting('wpdevart_cake_shop_woocommerce_account_icon_color',array(
			'default'	=> apply_filters( 'parent_wpdevart_cake_shop_woocommerce_account_icon_color', esc_html('#ff5952')),
			'sanitize_callback'	=> 'sanitize_hex_color'	
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_woocommerce_account_icon_color', array(
			'label' => esc_html__('WooCommerce account icon color','cake-shop'),
			'section' => 'wpdevart_cake_shop_header_woo_cart',
			'settings' => 'wpdevart_cake_shop_woocommerce_account_icon_color'
		)));
		$wp_customize->add_setting('wpdevart_cake_shop_woocommerce_cart_icon_color',array(
			'default'	=> apply_filters( 'parent_wpdevart_cake_shop_woocommerce_cart_icon_color', esc_html('#ff5952')),
			'sanitize_callback'	=> 'sanitize_hex_color'	
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_woocommerce_cart_icon_color', array(
			'label' => esc_html__('WooCommerce cart icon color','cake-shop'),
			'section' => 'wpdevart_cake_shop_header_woo_cart',
			'settings' => 'wpdevart_cake_shop_woocommerce_cart_icon_color'
		)));
		$wp_customize->add_setting('wpdevart_cake_shop_woocommerce_cart_icon_number_color',array(
			'default'	=> apply_filters( 'parent_wpdevart_cake_shop_woocommerce_cart_icon_number_color', esc_html('#ffffff')),
			'sanitize_callback'	=> 'sanitize_hex_color'	
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_woocommerce_cart_icon_number_color', array(
			'label' => esc_html__('WooCommerce cart number color','cake-shop'),
			'section' => 'wpdevart_cake_shop_header_woo_cart',
			'settings' => 'wpdevart_cake_shop_woocommerce_cart_icon_number_color'
		)));
	};