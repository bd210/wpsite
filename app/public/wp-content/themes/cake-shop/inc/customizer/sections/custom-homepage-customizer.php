<?php
	$wp_customize->add_panel( 'wpdevart_cake_shop_custom_homepage_panel', 
    array(
		'title'	=> esc_html__('Custom Homepage','cake-shop'),
        'description'	=> esc_html__('Customize the theme custom homepage','cake-shop'),		
		'priority'		=> 28
    ) 
	);
	$wp_customize->add_section('wpdevart_cake_shop_custom_homepage_section',array(
		'title'	=> esc_html__('Enable Custom Homepage','cake-shop'),
		'priority'		=> null,
		'panel'         => 'wpdevart_cake_shop_custom_homepage_panel'
	));
    $wp_customize->add_setting( 'wpdevart_cake_shop_custom_homepage_display_option',
    array(
       'default' => esc_html('1'),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_cake_shop_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_display_option',
        array(
        'label' => esc_html__( 'Enable custom homepage', 'cake-shop' ),
		'description' => esc_html__( 'Display custom homepage instead of the latest posts', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_custom_homepage_section'
        )
    ) );

	$wp_customize->add_section('wpdevart_cake_shop_custom_homepage_banner_section',array(
		'title'	=> esc_html__('Banner Section','cake-shop'),
		'priority'		=> null,
		'panel'         => 'wpdevart_cake_shop_custom_homepage_panel'
	));
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_theme',array(
		'default'	=> esc_html('banner-first-theme'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));

	$wp_customize->add_control('wpdevart_cake_shop_custom_homepage_banner_theme',array(
			'label'	=> esc_html__('Banner Theme','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_custom_homepage_banner_section',
			'setting'	=> 'wpdevart_cake_shop_custom_homepage_banner_theme',
			'type' => 'select',
			'choices' => array(
				'banner-first-theme' => esc_html__('First Theme', 'cake-shop'),
				'banner-second-theme' => esc_html__('Second Theme', 'cake-shop'),
				)
	));	
	$wp_customize->add_setting('wpdevart_cake_shop_homepage_large_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_homepage_large_banner_bg_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_homepage_large_banner_bg_color', array(
        'label' => esc_html__('Banner background color','cake-shop'),
        'section' => 'wpdevart_cake_shop_custom_homepage_banner_section',
        'settings' => 'wpdevart_cake_shop_homepage_large_banner_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_homepage_large_banner_bg_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_cake_shop_homepage_large_banner_bg_gradient_type',array(
			'label'	=> esc_html__('Gradient type','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_custom_homepage_banner_section',
			'setting'	=> 'wpdevart_cake_shop_homepage_large_banner_bg_gradient_type',
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
	$wp_customize->add_setting('wpdevart_cake_shop_homepage_large_banner_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_homepage_large_banner_bg_gradient_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_homepage_large_banner_bg_gradient_color', array(
        'label' => esc_html__('Banner background gradient color','cake-shop'),
        'section' => 'wpdevart_cake_shop_custom_homepage_banner_section',
        'settings' => 'wpdevart_cake_shop_homepage_large_banner_bg_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_short_description',array(
		'default'	=> esc_html('Another year older, another reason to celebrate with cake!'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_cake_shop_custom_homepage_banner_short_description',
            array(
                'label'    => esc_html__('Banner short description','cake-shop'),
                'section'  => 'wpdevart_cake_shop_custom_homepage_banner_section',
                'settings' => 'wpdevart_cake_shop_custom_homepage_banner_short_description',
                'type'     => 'text'
            )
        )
    );
    $wp_customize->add_setting( 'wpdevart_cake_shop_custom_homepage_banner_short_description_font_size',
    array(
       'default' => esc_html('17'),
       'sanitize_callback' => 'wpdevart_cake_shop_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_banner_short_description_font_size',
		array(
		'label' => esc_html__( 'Short description font-size (px)', 'cake-shop' ),
		'section' => 'wpdevart_cake_shop_custom_homepage_banner_section',
		'input_attrs' => array(
			'min' => esc_html('1'),
			'max' => esc_html('35'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_short_description_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_custom_homepage_banner_short_description_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_banner_short_description_color', array(
        'label' => esc_html__('Short description color','cake-shop'),
        'section' => 'wpdevart_cake_shop_custom_homepage_banner_section',
        'settings' => 'wpdevart_cake_shop_custom_homepage_banner_short_description_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_title',array(
		'default'	=> esc_html('Cake Shop'),'cake-shop',
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_cake_shop_custom_homepage_banner_title',
            array(
                'label'    => esc_html__('Banner title','cake-shop'),
                'section'  => 'wpdevart_cake_shop_custom_homepage_banner_section',
                'settings' => 'wpdevart_cake_shop_custom_homepage_banner_title',
                'type'     => 'text'
            )
        )
    );
    $wp_customize->add_setting( 'wpdevart_cake_shop_custom_homepage_banner_title_font_size',
    array(
       'default' => esc_html('43'),
       'sanitize_callback' => 'wpdevart_cake_shop_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_banner_title_font_size',
		array(
		'label' => esc_html__( 'Title font-size (px)', 'cake-shop' ),
		'section' => 'wpdevart_cake_shop_custom_homepage_banner_section',
		'input_attrs' => array(
			'min' => esc_html('1'),
			'max' => esc_html('90'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_custom_homepage_banner_title_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_banner_title_color', array(
        'label' => esc_html__('Banner title color','cake-shop'),
        'section' => 'wpdevart_cake_shop_custom_homepage_banner_section',
        'settings' => 'wpdevart_cake_shop_custom_homepage_banner_title_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_sliding_first_text',array(
		'default'	=> esc_html('Express Delivery'),'cake-shop',
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_cake_shop_custom_homepage_banner_sliding_first_text',
            array(
                'label'    => esc_html__('First sliding text','cake-shop'),
                'section'  => 'wpdevart_cake_shop_custom_homepage_banner_section',
                'settings' => 'wpdevart_cake_shop_custom_homepage_banner_sliding_first_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_sliding_second_text',array(
		'default'	=> esc_html('Freshness Guarantee'),'cake-shop',
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_cake_shop_custom_homepage_banner_sliding_second_text',
            array(
                'label'    => esc_html__('Second sliding text','cake-shop'),
                'section'  => 'wpdevart_cake_shop_custom_homepage_banner_section',
                'settings' => 'wpdevart_cake_shop_custom_homepage_banner_sliding_second_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_sliding_third_text',array(
		'default'	=> esc_html('24/7 Support'),'cake-shop',
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_cake_shop_custom_homepage_banner_sliding_third_text',
            array(
                'label'    => esc_html__('Third sliding text','cake-shop'),
                'section'  => 'wpdevart_cake_shop_custom_homepage_banner_section',
                'settings' => 'wpdevart_cake_shop_custom_homepage_banner_sliding_third_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_sliding_fourth_text',array(
		'default'	=> esc_html('Unique Cakes'),'cake-shop',
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_cake_shop_custom_homepage_banner_sliding_fourth_text',
            array(
                'label'    => esc_html__('Fourth sliding text','cake-shop'),
                'section'  => 'wpdevart_cake_shop_custom_homepage_banner_section',
                'settings' => 'wpdevart_cake_shop_custom_homepage_banner_sliding_fourth_text',
                'type'     => 'text'
            )
        )
    );
    $wp_customize->add_setting( 'wpdevart_cake_shop_custom_homepage_banner_sliding_text_font_size',
    array(
       'default' => esc_html('37'),
       'sanitize_callback' => 'wpdevart_cake_shop_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_banner_sliding_text_font_size',
		array(
		'label' => esc_html__( 'Sliding text font-size (px)', 'cake-shop' ),
		'section' => 'wpdevart_cake_shop_custom_homepage_banner_section',
		'input_attrs' => array(
			'min' => esc_html('35'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_sliding_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_custom_homepage_banner_sliding_text_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_banner_sliding_text_color', array(
        'label' => esc_html__('Sliding text title color','cake-shop'),
        'section' => 'wpdevart_cake_shop_custom_homepage_banner_section',
        'settings' => 'wpdevart_cake_shop_custom_homepage_banner_sliding_text_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_content',array(
		'default'	=> esc_html('We offer all services in one place including express delivery, pastries and desserts, event catering, and individual approach. Use the navigation buttons below to find out more information about us and our services. Share and tell your friends about it.'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_cake_shop_custom_homepage_banner_content',
            array(
                'label'    => esc_html__('Banner content text','cake-shop'),
                'section'  => 'wpdevart_cake_shop_custom_homepage_banner_section',
                'settings' => 'wpdevart_cake_shop_custom_homepage_banner_content',
                'type'     => 'text'
            )
        )
    );
    $wp_customize->add_setting( 'wpdevart_cake_shop_custom_homepage_banner_content_font_size',
    array(
       'default' => esc_html('17'),
       'sanitize_callback' => 'wpdevart_cake_shop_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_banner_content_font_size',
		array(
		'label' => esc_html__( 'Content text font-size (px)', 'cake-shop' ),
		'section' => 'wpdevart_cake_shop_custom_homepage_banner_section',
		'input_attrs' => array(
			'min' => esc_html('1'),
			'max' => esc_html('35'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_content_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_custom_homepage_banner_content_color', esc_html('#717171')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_banner_content_color', array(
        'label' => esc_html__('Banner content text color','cake-shop'),
        'section' => 'wpdevart_cake_shop_custom_homepage_banner_section',
        'settings' => 'wpdevart_cake_shop_custom_homepage_banner_content_color'
    )));
	$wp_customize->add_setting( 'wpdevart_cake_shop_custom_homepage_show_banner_first_button',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_cake_shop_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_show_banner_first_button',
        array(
        'label' => esc_html__( 'Hide the first button', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_custom_homepage_banner_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_first_button_text',array(
		'default'	=> esc_html('More Details'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_cake_shop_custom_homepage_banner_first_button_text',
            array(
                'label'    => esc_html__('First button text','cake-shop'),
                'section'  => 'wpdevart_cake_shop_custom_homepage_banner_section',
                'settings' => 'wpdevart_cake_shop_custom_homepage_banner_first_button_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_first_button_url',array(
		'default'	=> esc_url('#'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_url_sanitization'
	));
	$wp_customize->add_control('wpdevart_cake_shop_custom_homepage_banner_first_button_url',array(
			'label'	=> esc_html__('First button URL','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_custom_homepage_banner_section',
			'setting'	=> 'wpdevart_cake_shop_custom_homepage_banner_first_button_url'
	));	
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_first_button_style',array(
		'default'	=> esc_html('wpdevart_cake_shop_ninth_button_slide ninth_btn_slide_right'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));

	$wp_customize->add_control('wpdevart_cake_shop_custom_homepage_banner_first_button_style',array(
			'label'	=> esc_html__('First button style','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_custom_homepage_banner_section',
			'setting'	=> 'wpdevart_cake_shop_custom_homepage_banner_first_button_style',
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
	$wp_customize->add_setting( 'wpdevart_cake_shop_custom_homepage_show_banner_second_button',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_cake_shop_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_show_banner_second_button',
        array(
        'label' => esc_html__( 'Hide the second button', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_custom_homepage_banner_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_second_button_text',array(
		'default'	=> esc_html('Shop Now'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_cake_shop_custom_homepage_banner_second_button_text',
            array(
                'label'    => esc_html__('Second button text','cake-shop'),
                'section'  => 'wpdevart_cake_shop_custom_homepage_banner_section',
                'settings' => 'wpdevart_cake_shop_custom_homepage_banner_second_button_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_second_button_url',array(
		'default'	=> esc_url('#'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_url_sanitization'
	));
	$wp_customize->add_control('wpdevart_cake_shop_custom_homepage_banner_second_button_url',array(
			'label'	=> esc_html__('Second button URL','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_custom_homepage_banner_section',
			'setting'	=> 'wpdevart_cake_shop_custom_homepage_banner_second_button_url'
	));	
	
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_second_button_style',array(
		'default'	=> esc_html('wpdevart_cake_shop_second_button_slide second_btn_slide_right'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));

	$wp_customize->add_control('wpdevart_cake_shop_custom_homepage_banner_second_button_style',array(
			'label'	=> esc_html__('Second button style','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_custom_homepage_banner_section',
			'setting'	=> 'wpdevart_cake_shop_custom_homepage_banner_second_button_style',
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
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_image_1',array(
		'default'	=> esc_url(get_theme_file_uri('/images/banner-homepage-image-1.jpg')),
		'sanitize_callback'	=> 'wpdevart_cake_shop_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_banner_image_1', array(
        'label' => esc_html__('Banner Main Image','cake-shop'),
		'description' => esc_html__( 'Recommended image size ~800*800', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_custom_homepage_banner_section',
        'settings' => 'wpdevart_cake_shop_custom_homepage_banner_image_1',
        'button_labels' => array(
                    'select' => esc_html__('Select Image','cake-shop'),
                    'remove' => esc_html__('Remove Image','cake-shop'),
                    'change' => esc_html__('Change Image','cake-shop'),
                    )
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_image_2',array(
		'default'	=> esc_url(get_theme_file_uri('/images/banner-homepage-image-2.png')),
		'sanitize_callback'	=> 'wpdevart_cake_shop_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_banner_image_2', array(
        'label' => esc_html__('Banner Second Image','cake-shop'),
		'description' => esc_html__( 'Recommended image size ~800*800', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_custom_homepage_banner_section',
        'settings' => 'wpdevart_cake_shop_custom_homepage_banner_image_2',
        'button_labels' => array(
                    'select' => esc_html__('Select Image','cake-shop'),
                    'remove' => esc_html__('Remove Image','cake-shop'),
                    'change' => esc_html__('Change Image','cake-shop'),
                    )
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_image_3',array(
		'default'	=> esc_url(get_theme_file_uri('/images/banner-homepage-image-3.jpg')),
		'sanitize_callback'	=> 'wpdevart_cake_shop_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_banner_image_3', array(
        'label' => esc_html__('Banner Third Image','cake-shop'),
		'description' => esc_html__( 'Recommended image size ~250*400', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_custom_homepage_banner_section',
        'settings' => 'wpdevart_cake_shop_custom_homepage_banner_image_3',
        'button_labels' => array(
                    'select' => esc_html__('Select Image','cake-shop'),
                    'remove' => esc_html__('Remove Image','cake-shop'),
                    'change' => esc_html__('Change Image','cake-shop'),
                    )
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_banner_image_4',array(
		'default'	=> esc_url(get_theme_file_uri('/images/banner-homepage-image-4.jpg')),
		'sanitize_callback'	=> 'wpdevart_cake_shop_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_banner_image_4', array(
        'label' => esc_html__('Banner Fourth Image','cake-shop'),
		'description' => esc_html__( 'Recommended image size ~250*400', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_custom_homepage_banner_section',
        'settings' => 'wpdevart_cake_shop_custom_homepage_banner_image_4',
        'button_labels' => array(
                    'select' => esc_html__('Select Image','cake-shop'),
                    'remove' => esc_html__('Remove Image','cake-shop'),
                    'change' => esc_html__('Change Image','cake-shop'),
                    )
    )));

	$wp_customize->add_section('wpdevart_cake_shop_custom_homepage_general_section',array(
		'title'	=> esc_html__('General','cake-shop'),
		'priority'		=> null,
		'panel'         => 'wpdevart_cake_shop_custom_homepage_panel'
	));
	$wp_customize->add_setting('wpdevart_cake_shop_homepage_sections_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_homepage_sections_title_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_homepage_sections_title_color', array(
        'label' => esc_html__('Sections Title Color','cake-shop'),
        'section' => 'wpdevart_cake_shop_custom_homepage_general_section',
        'settings' => 'wpdevart_cake_shop_homepage_sections_title_color'
    )));

	$wp_customize->add_section('wpdevart_cake_shop_custom_homepage_call_action_section',array(
		'title'	=> esc_html__('Call to Action Section','cake-shop'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_cake_shop_custom_homepage_panel'
	));

	$wp_customize->add_setting( 'wpdevart_cake_shop_custom_homepage_hide_call_action',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_cake_shop_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_hide_call_action',
        array(
        'label' => esc_html__( 'Hide Call to Action section', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_custom_homepage_call_action_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_call_action_title',array(
		'default'	=> esc_html('Best Offer'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_cake_shop_custom_homepage_call_action_title',
            array(
                'label'    => esc_html__('Call to action title','cake-shop'),
                'section'  => 'wpdevart_cake_shop_custom_homepage_call_action_section',
                'settings' => 'wpdevart_cake_shop_custom_homepage_call_action_title',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_call_action_desc',array(
		'default'	=> esc_html('A brief description of the section below.'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_cake_shop_custom_homepage_call_action_desc',
            array(
                'label'    => esc_html__('Call to action description','cake-shop'),
                'section'  => 'wpdevart_cake_shop_custom_homepage_call_action_section',
                'settings' => 'wpdevart_cake_shop_custom_homepage_call_action_desc',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_call_to_action_image',array(
		'default'	=> esc_url(get_theme_file_uri('/images/call-to-action.jpg')),
		'sanitize_callback'	=> 'wpdevart_cake_shop_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_call_to_action_image', array(
        'label' => esc_html__('Call To Action Image','cake-shop'),
		'description' => esc_html__( 'Recommended image size ~1200*600', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_custom_homepage_call_action_section',
        'settings' => 'wpdevart_cake_shop_custom_homepage_call_to_action_image',
        'button_labels' => array(
                    'select' => esc_html__('Select Image','cake-shop'),
                    'remove' => esc_html__('Remove Image','cake-shop'),
                    'change' => esc_html__('Change Image','cake-shop'),
                    )
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_call_action_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_call_action_bg_color', esc_html('#fffcfd')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_call_action_bg_color', array(
        'label' => esc_html__('Call to action background color','cake-shop'),
        'section' => 'wpdevart_cake_shop_custom_homepage_call_action_section',
        'settings' => 'wpdevart_cake_shop_call_action_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_call_action_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_call_action_gradient_type',array(
			'label'	=> esc_html__('Gradient type','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_custom_homepage_call_action_section',
			'setting'	=> 'wpdevart_cake_shop_call_action_gradient_type',
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
	$wp_customize->add_setting('wpdevart_cake_shop_call_action_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_call_action_bg_gradient_color', esc_html('#fffcfd')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_call_action_bg_gradient_color', array(
        'label' => esc_html__('Call to action background gradient color','cake-shop'),
        'section' => 'wpdevart_cake_shop_custom_homepage_call_action_section',
        'settings' => 'wpdevart_cake_shop_call_action_bg_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_call_action_sub_title',array(
		'default'	=> esc_html('Call to Action Title'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_cake_shop_custom_homepage_call_action_sub_title',
            array(
                'label'    => esc_html__('Call to action subtitle','cake-shop'),
                'section'  => 'wpdevart_cake_shop_custom_homepage_call_action_section',
                'settings' => 'wpdevart_cake_shop_custom_homepage_call_action_sub_title',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_cake_shop_call_action_sub_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_call_action_sub_title_color', esc_html('#717171')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_call_action_sub_title_color', array(
        'label' => esc_html__('Call to action subtitle color','cake-shop'),
        'section' => 'wpdevart_cake_shop_custom_homepage_call_action_section',
        'settings' => 'wpdevart_cake_shop_call_action_sub_title_color'
    )));

    $wp_customize->add_setting( 'wpdevart_cake_shop_call_action_sub_title_font_size',
    array(
       'default' => esc_html('30'),
       'sanitize_callback' => 'wpdevart_cake_shop_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_cake_shop_call_action_sub_title_font_size',
		array(
		'label' => esc_html__( 'Call to action subtitle font-size (px)', 'cake-shop' ),
		'section' => 'wpdevart_cake_shop_custom_homepage_call_action_section',
		'input_attrs' => array(
			'min' => esc_html('25'),
			'max' => esc_html('45'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_call_action_text',array(
		'default'	=> esc_html('This is sample text for a call to action section. You can use this section to encourage users to click a button and find out more information about your services.'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_cake_shop_custom_homepage_call_action_text',
            array(
                'label'    => esc_html__('Call to action text','cake-shop'),
                'section'  => 'wpdevart_cake_shop_custom_homepage_call_action_section',
                'settings' => 'wpdevart_cake_shop_custom_homepage_call_action_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_cake_shop_call_action_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_call_action_text_color', esc_html('#717171')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_call_action_text_color', array(
        'label' => esc_html__('Call to action text color','cake-shop'),
        'section' => 'wpdevart_cake_shop_custom_homepage_call_action_section',
        'settings' => 'wpdevart_cake_shop_call_action_text_color'
    )));

    $wp_customize->add_setting( 'wpdevart_cake_shop_call_action_text_font_size',
    array(
       'default' => esc_html('16'),
       'sanitize_callback' => 'wpdevart_cake_shop_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_cake_shop_call_action_text_font_size',
		array(
		'label' => esc_html__( 'Call to action text font-size (px)', 'cake-shop' ),
		'section' => 'wpdevart_cake_shop_custom_homepage_call_action_section',
		'input_attrs' => array(
			'min' => esc_html('15'),
			'max' => esc_html('45'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_call_action_button_text',array(
		'default'	=> esc_html('Check More Details'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_cake_shop_custom_homepage_call_action_button_text',
            array(
                'label'    => esc_html__('Call to action button text','cake-shop'),
                'section'  => 'wpdevart_cake_shop_custom_homepage_call_action_section',
                'settings' => 'wpdevart_cake_shop_custom_homepage_call_action_button_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_call_action_button_url',array(
		'default'	=> esc_url('#'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_url_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_custom_homepage_call_action_button_url',array(
			'label'	=> esc_html__('Call to action button URL','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_custom_homepage_call_action_section',
			'setting'	=> 'wpdevart_cake_shop_custom_homepage_call_action_button_url'
	));		

	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_call_action_button_style',array(
		'default'	=> esc_html('wpdevart_cake_shop_fourth_button_slide fourth_btn_slide_right'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));

	$wp_customize->add_control('wpdevart_cake_shop_custom_homepage_call_action_button_style',array(
			'label'	=> esc_html__('Call to action button style','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_custom_homepage_call_action_section',
			'setting'	=> 'wpdevart_cake_shop_custom_homepage_call_action_button_style',
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
	$wp_customize->add_section('wpdevart_cake_shop_custom_homepage_latest_posts_section',array(
		'title'	=> esc_html__('Latest Posts Section','cake-shop'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_cake_shop_custom_homepage_panel'
	));

	$wp_customize->add_setting( 'wpdevart_cake_shop_custom_homepage_hide_latest_post_section',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_cake_shop_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_hide_latest_post_section',
        array(
        'label' => esc_html__( 'Hide Latest Posts section', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_custom_homepage_latest_posts_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_latest_post_title',array(
		'default'	=> esc_html('Latest Posts'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_cake_shop_custom_homepage_latest_post_title',
            array(
                'label'    => esc_html__('Latest Posts section title','cake-shop'),
                'section'  => 'wpdevart_cake_shop_custom_homepage_latest_posts_section',
                'settings' => 'wpdevart_cake_shop_custom_homepage_latest_post_title',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_latest_post_desctiption',array(
		'default'	=> esc_html('Latest posts from our blog'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_cake_shop_custom_homepage_latest_post_desctiption',
            array(
                'label'    => esc_html__('Latest Posts section description','cake-shop'),
                'section'  => 'wpdevart_cake_shop_custom_homepage_latest_posts_section',
                'settings' => 'wpdevart_cake_shop_custom_homepage_latest_post_desctiption',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting( 'wpdevart_cake_shop_custom_homepage_number_of_latest_posts',
    array(
       'default' => esc_html('6'),
       'sanitize_callback' => 'wpdevart_cake_shop_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_number_of_latest_posts',
		array(
		'label' => esc_html__( 'The number of posts', 'cake-shop' ),
		'section' => 'wpdevart_cake_shop_custom_homepage_latest_posts_section',
		'input_attrs' => array(
			'min' => esc_html('1'),
			'max' => esc_html('20'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_latest_posts_block_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_custom_homepage_latest_posts_block_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_latest_posts_block_color', array(
        'label' => esc_html__('Latest posts block bg color','cake-shop'),
        'section' => 'wpdevart_cake_shop_custom_homepage_latest_posts_section',
        'settings' => 'wpdevart_cake_shop_custom_homepage_latest_posts_block_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_latest_posts_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_custom_homepage_latest_posts_title_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_latest_posts_title_color', array(
        'label' => esc_html__('Latest posts title color','cake-shop'),
        'section' => 'wpdevart_cake_shop_custom_homepage_latest_posts_section',
        'settings' => 'wpdevart_cake_shop_custom_homepage_latest_posts_title_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_custom_homepage_latest_posts_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_custom_homepage_latest_posts_text_color', esc_html('#717171')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_custom_homepage_latest_posts_text_color', array(
        'label' => esc_html__('Latest posts text color','cake-shop'),
        'section' => 'wpdevart_cake_shop_custom_homepage_latest_posts_section',
        'settings' => 'wpdevart_cake_shop_custom_homepage_latest_posts_text_color'
    )));