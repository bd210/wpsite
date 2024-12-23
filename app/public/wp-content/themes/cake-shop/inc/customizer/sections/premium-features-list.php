<?php

    $wp_customize->register_section_type( 'Wpdevart_Premium_Features_List' );


	##################------ Premium Features Sections ------##################

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_cake_shop_theme_general_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'cake-shop' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_cake_shop_premium_features_url', esc_url('https://wpdevart.com/wordpress-cake-shop-theme')),
				'premium_features_list' => array(
					esc_html__( '+40 Other Popular Fonts', 'cake-shop' ),
					esc_html__( 'Preloader', 'cake-shop' ),
					esc_html__( 'Wide and Full-width Layouts', 'cake-shop' ),
					esc_html__( 'Customizable Search Overlay', 'cake-shop' ),
					esc_html__( 'Back To Top Button', 'cake-shop' ),
					esc_html__( '... and Other Premium Features', 'cake-shop' ),
				),
				'panel'         => 'wpdevart_cake_shop_general_settings_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_cake_shop_theme_header_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'cake-shop' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_cake_shop_premium_features_url', esc_url('https://wpdevart.com/wordpress-cake-shop-theme')),
				'premium_features_list' => array(
					esc_html__( 'Sticky Header Feature', 'cake-shop' ),
					esc_html__( 'Sticky Header Feature for Mobile', 'cake-shop' ),
                    esc_html__( 'Wide and Full-width Layouts', 'cake-shop' ),
					esc_html__( 'Logo Animations', 'cake-shop' ),
					esc_html__( 'Search Button Animations', 'cake-shop' ),
                    esc_html__( 'Woo Cart Animations', 'cake-shop' ),
					esc_html__( '... and Other Premium Features', 'cake-shop' ),
				),
				'panel'         => 'wpdevart_cake_shop_header_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_cake_shop_theme_single_post_page_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'cake-shop' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_cake_shop_premium_features_url', esc_url('https://wpdevart.com/wordpress-cake-shop-theme')),
				'premium_features_list' => array(
					esc_html__( 'Post/Page Title Animations', 'cake-shop' ),
					esc_html__( 'Post/Page Banner Animations', 'cake-shop' ),
					esc_html__( 'Breadcrumbs', 'cake-shop' ),
                    esc_html__( '4 Animated Banner Elements', 'cake-shop' ),
					esc_html__( 'Animated Elements Colors', 'cake-shop' ),
					esc_html__( '... and Other Premium Features', 'cake-shop' ),
				),
				'panel'         => 'wpdevart_cake_shop_single_post_page_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_cake_shop_theme_blog_archive_search_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'cake-shop' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_cake_shop_premium_features_url', esc_url('https://wpdevart.com/wordpress-cake-shop-theme')),
				'premium_features_list' => array(
					esc_html__( 'Images Hover Effects', 'cake-shop' ),
					esc_html__( 'Archive/Search Page Title Animations', 'cake-shop' ),
                    esc_html__( 'Archive/Search Page Banner Animations', 'cake-shop' ),
					esc_html__( '4 Animated Elements', 'cake-shop' ),
                    esc_html__( 'Animated Elements Colors', 'cake-shop' ),
					esc_html__( '... and Other Premium Features', 'cake-shop' ),
				),
				'panel'         => 'wpdevart_cake_shop_blog_archive_search_panel',
				'priority'      => 7777,
			)
		)
	);

    $wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_cake_shop_theme_custom_homepage_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'cake-shop' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_cake_shop_premium_features_url', esc_url('https://wpdevart.com/wordpress-cake-shop-theme')),
				'premium_features_list' => array(
                    esc_html__( '+4 Beautiful Banner Themes', 'cake-shop' ),
					esc_html__( 'WooCommerce Section', 'cake-shop' ),
					esc_html__( 'Sales Section', 'cake-shop' ),
					esc_html__( 'Achievements Section', 'cake-shop' ),
					esc_html__( 'Advantages Section', 'cake-shop' ),
					esc_html__( 'Services Section', 'cake-shop' ),
					esc_html__( 'Wide and Full-width Layouts', 'cake-shop' ),
					esc_html__( 'Sections Description Color', 'cake-shop' ),
					esc_html__( 'Sections Title Lines Color', 'cake-shop' ),
					esc_html__( '... and Other Premium Features', 'cake-shop' ),
				),
				'panel'         => 'wpdevart_cake_shop_custom_homepage_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_cake_shop_theme_woo_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'cake-shop' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_cake_shop_premium_features_url', esc_url('https://wpdevart.com/wordpress-cake-shop-theme')),
				'premium_features_list' => array(
                    esc_html__( 'WooCommerce Search Bar Section', 'cake-shop' ),
					esc_html__( 'Customizable Header Cart', 'cake-shop' ),
					esc_html__( 'Breadcrumbs', 'cake-shop' ),
					esc_html__( 'Wide and Full-width Layouts', 'cake-shop' ),
                    esc_html__( 'Customizable Category List and Search Bar', 'cake-shop' ),
					esc_html__( 'WooCommerce Sidebar Options', 'cake-shop' ),
					esc_html__( '... and Other Premium Features', 'cake-shop' ),
				),
				'panel'         => 'wpdevart_cake_shop_woocommerce_settings_panel',
				'priority'      => 7777,
			)
		)
	);
        
    ##################------ Premium Features Controls------##################

    $wp_customize->add_setting( 'wpdevart_cake_shop_logo_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_cake_shop_text_sanitization',
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_cake_shop_logo_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'cake-shop' ),
        'section' => 'title_tagline',
        'priority' => 50,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Text Logo animations', 'cake-shop' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Text Logo font-size', 'cake-shop' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Text Logo font weight', 'cake-shop' )
            ),
            'feature4' => array(
                'name' => esc_html__( '... and Other Premium Features', 'cake-shop' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_cake_shop_font_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_cake_shop_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_cake_shop_font_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_fonts_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+40 Other Popular Fonts', 'cake-shop' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'cake-shop' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_cake_shop_header_general_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_cake_shop_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_cake_shop_header_general_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_header_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Sticky Header Feature', 'cake-shop' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Sticky Header Feature for Mobile', 'cake-shop' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Animations for Header Elements', 'cake-shop' )
            ),
            'feature4' => array(
                'name' => esc_html__( '... and Other Premium Features', 'cake-shop' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_cake_shop_top_header_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_cake_shop_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_cake_shop_top_header_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_top_header_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Address Section', 'cake-shop' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Phone/Email/Address Icon Color', 'cake-shop' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Animations for Top Header Elements', 'cake-shop' )
            ),
            'feature4' => array(
                'name' => esc_html__( '... and Other Premium Features', 'cake-shop' )
            ),
        )
    )
    ) );
    
    $wp_customize->add_setting( 'wpdevart_cake_shop_header_menu_search_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_cake_shop_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_cake_shop_header_menu_search_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_header_menu_search_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Search Button Animations', 'cake-shop' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'cake-shop' )
            ),
        )
    )
    ) );

	if ( class_exists( 'WooCommerce' ) ) {
    $wp_customize->add_setting( 'wpdevart_cake_shop_header_woo_cart_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_cake_shop_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_cake_shop_header_woo_cart_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_header_woo_cart',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Woo Cart Animations', 'cake-shop' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'cake-shop' )
            ),
        )
    )
    ) );
    };

    $wp_customize->add_setting( 'wpdevart_cake_shop_single_post_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_cake_shop_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_cake_shop_single_post_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_single_post_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Title Animations', 'cake-shop' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Banner Animations', 'cake-shop' )
            ),
            'feature3' => array(
                'name' => esc_html__( '4 Animated Elements', 'cake-shop' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'cake-shop' )
            ),
            'feature5' => array(
                'name' => esc_html__( '... and Other Premium Features', 'cake-shop' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_cake_shop_single_page_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_cake_shop_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_cake_shop_single_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_single_page_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Title Animations', 'cake-shop' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Banner Animations', 'cake-shop' )
            ),
            'feature3' => array(
                'name' => esc_html__( '4 Animated Elements', 'cake-shop' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'cake-shop' )
            ),
            'feature5' => array(
                'name' => esc_html__( '... and Other Premium Features', 'cake-shop' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_cake_shop_blog_archive_page_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_cake_shop_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_cake_shop_blog_archive_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_blog_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Title Animations', 'cake-shop' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Banner Animations', 'cake-shop' )
            ),
            'feature3' => array(
                'name' => esc_html__( '4 Animated Elements', 'cake-shop' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'cake-shop' )
            ),
            'feature5' => array(
                'name' => esc_html__( '... and Other Premium Features', 'cake-shop' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_cake_shop_search_page_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_cake_shop_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_cake_shop_search_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_search_page_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Title Animations', 'cake-shop' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Banner Animations', 'cake-shop' )
            ),
            'feature3' => array(
                'name' => esc_html__( '4 Animated Elements', 'cake-shop' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'cake-shop' )
            ),
            'feature5' => array(
                'name' => esc_html__( '... and Other Premium Features', 'cake-shop' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_cake_shop_blog_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_cake_shop_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_cake_shop_blog_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_blog_archive_search_general_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Images Hover Effects', 'cake-shop' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'cake-shop' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_cake_shop_custom_homepage_banner_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_cake_shop_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_cake_shop_custom_homepage_banner_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_custom_homepage_banner_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+4 Beautiful Banner Themes', 'cake-shop' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'cake-shop' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_cake_shop_custom_homepage_general_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_cake_shop_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_cake_shop_custom_homepage_general_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_custom_homepage_general_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Sections Description Color', 'cake-shop' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Sections Title Lines Color', 'cake-shop' )
            ),
            'feature3' => array(
                'name' => esc_html__( '... and Other Premium Features', 'cake-shop' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_cake_shop_footer_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_cake_shop_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_cake_shop_footer_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_footer_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+4 Beautiful Footer Themes', 'cake-shop' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Copyright section image', 'cake-shop' )
            ),
            'feature3' => array(
                'name' => esc_html__( '... and Other Premium Features', 'cake-shop' )
            ),
        )
    )
    ) );