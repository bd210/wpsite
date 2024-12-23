<?php
    $wp_customize->add_section('wpdevart_cake_shop_not_found_section',array(
		'title'	=> esc_html__('404 Page','cake-shop'),					
		'priority'		=> 31
	));
	$wp_customize->add_setting('wpdevart_cake_shop_not_found_page_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_not_found_page_bg_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_not_found_page_bg_color', array(
        'label' => esc_html__('404 Page background color','cake-shop'),
        'section' => 'wpdevart_cake_shop_not_found_section',
        'settings' => 'wpdevart_cake_shop_not_found_page_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_not_found_image',array(
		'default'	=> esc_url(get_theme_file_uri('/images/wpdevart-default-404.png')),
		'sanitize_callback'	=> 'wpdevart_cake_shop_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpdevart_cake_shop_not_found_image', array(
        'label' => esc_html__('404 page Image','cake-shop'),
		'description' => esc_html__( 'Recommended image size ~1080*550', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_not_found_section',
        'settings' => 'wpdevart_cake_shop_not_found_image',
        'button_labels' => array(
                    'select' =>  esc_html__('Select Image', 'cake-shop'),
                    'remove' =>  esc_html__('Remove Image', 'cake-shop'),
                    'change' =>  esc_html__('Change Image', 'cake-shop'),
                    )
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_not_found_page_title',array(
		'default'	=> esc_html('Oops! Page Not Found'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_cake_shop_not_found_page_title',
            array(
                'label'    => esc_html__('404 page title','cake-shop'),
                'section'  => 'wpdevart_cake_shop_not_found_section',
                'settings' => 'wpdevart_cake_shop_not_found_page_title',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_cake_shop_not_found_page_description',array(
		'default'	=> esc_html('The page or URL you are trying to access was not found. Use the homepage link below to navigate to the homepage. You can also use the search function.'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_not_found_page_description',array(
			'label'	=> esc_html__('404 page description','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_not_found_section',
			'setting'	=> 'wpdevart_cake_shop_not_found_page_description'
	));	
	$wp_customize->add_setting('wpdevart_cake_shop_not_found_page_button_text',array(
		'default'	=> esc_html('Back to Homepage'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_not_found_page_button_text',array(
			'label'	=> esc_html__('404 page button text','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_not_found_section',
			'setting'	=> 'wpdevart_cake_shop_not_found_page_button_text'
	));	
	$wp_customize->add_setting('wpdevart_cake_shop_not_found_page_button_url',array(
		'default'	=> esc_url(get_home_url()),
		'sanitize_callback'	=> 'wpdevart_cake_shop_url_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_not_found_page_button_url',array(
			'label'	=> esc_html__('404 page button URL','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_not_found_section',
			'setting'	=> 'wpdevart_cake_shop_not_found_page_button_url'
	));	
	$wp_customize->add_setting('wpdevart_cake_shop_not_found_page_button_style',array(
		'default'	=> esc_html('wpdevart_cake_shop_fourth_button_slide fourth_btn_slide_right'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_not_found_page_button_style',array(
			'label'	=> esc_html__('Back to Homepage button style','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_not_found_section',
			'setting'	=> 'wpdevart_cake_shop_not_found_page_button_style',
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