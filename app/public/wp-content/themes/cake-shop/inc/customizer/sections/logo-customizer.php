<?php
	$wp_customize->get_setting( 'custom_logo' )->transport = 'refresh';
	$wp_customize->get_setting( 'blogname' )->transport = 'refresh';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'refresh';
    $wp_customize->add_setting( 'wpdevart_cake_shop_header_logo_max_height',
    array(
    'default' => esc_html('60'),
    'sanitize_callback' => 'wpdevart_cake_shop_sanitize_integer'
        )
    );
    $wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_cake_shop_header_logo_max_height',
        array(
        'label' => esc_html__( 'Logo (image) max-height (px)', 'cake-shop' ),
        'section' => 'title_tagline',
        'input_attrs' => array(
            'min' => esc_html('50'),
            'max' => esc_html('300'),
            'step' => esc_html('1'),
        ),
        )
    ) );
    $wp_customize->add_setting( 'wpdevart_cake_shop_header_logo_mobile_max_height',
    array(
    'default' => esc_html('70'),
    'sanitize_callback' => 'wpdevart_cake_shop_sanitize_integer'
        )
    );
    $wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_cake_shop_header_logo_mobile_max_height',
        array(
        'label' => esc_html__( 'Mobile Logo (image) max-height (px)', 'cake-shop' ),
        'section' => 'title_tagline',
        'input_attrs' => array(
            'min' => esc_html('50'),
            'max' => esc_html('300'),
            'step' => esc_html('1'),
        ),
        )
    ) );
    $wp_customize->add_setting('wpdevart_cake_shop_header_logo_text_color',array(
        'default'	=> apply_filters( 'parent_wpdevart_cake_shop_header_logo_text_color', esc_html('#ff5952')),
        'sanitize_callback'	=> 'sanitize_hex_color'	
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_header_logo_text_color', array(
        'label' => esc_html__('Text Logo color','cake-shop'),
        'section' => 'title_tagline',
        'settings' => 'wpdevart_cake_shop_header_logo_text_color'
    )));
    $wp_customize->add_setting('wpdevart_cake_shop_header_logo_gradient_type',array(
        'default'	=> esc_html('to right'),
        'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
    ));
    $wp_customize->add_control('wpdevart_cake_shop_header_logo_gradient_type',array(
            'label'	=> esc_html__('Text Logo gradient type','cake-shop'),
            'section'	=> 'title_tagline',
            'setting'	=> 'wpdevart_cake_shop_header_logo_gradient_type',
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
    $wp_customize->add_setting('wpdevart_cake_shop_header_logo_gradient_color',array(
        'default'	=> apply_filters( 'parent_wpdevart_cake_shop_header_logo_gradient_color', esc_html('#ff5952')),
        'sanitize_callback'	=> 'sanitize_hex_color'	
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_header_logo_gradient_color', array(
        'label' => esc_html__('Text Logo gradient color','cake-shop'),
        'section' => 'title_tagline',
        'settings' => 'wpdevart_cake_shop_header_logo_gradient_color'
    )));