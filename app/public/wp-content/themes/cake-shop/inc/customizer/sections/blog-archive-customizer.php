<?php 
	$wp_customize->add_panel( 'wpdevart_cake_shop_blog_archive_search_panel', 
	array(
		'title'	=> esc_html__('Blog/Archive/Search','cake-shop'),			
		'description'	=> esc_html__('Blog/Archive/Search pages settings','cake-shop'),		
		'priority'		=> 27
	) 
	);

	##################------ Blog/Archive Page ------##################

	$wp_customize->add_section('wpdevart_cake_shop_blog_section',array(
		'title'	=> esc_html__('Blog/Archive Page','cake-shop'),
		'priority'		=> null,
		'panel'         => 'wpdevart_cake_shop_blog_archive_search_panel'
	));
	$wp_customize->add_setting('wpdevart_cake_shop_archive_banner_width',array(
		'default'	=> esc_html('narrow'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_archive_banner_width',array(
			'label'	=> esc_html__('Blog/Archive banner width','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_blog_section',
			'setting'	=> 'wpdevart_cake_shop_archive_banner_width',
			'type' => 'select',
			'choices' => array(
				'narrow' => esc_html__('Narrow','cake-shop'),
				'wide' => esc_html__('Wide','cake-shop')
				)
	));	
	$wp_customize->add_setting('wpdevart_cake_shop_archive_banner_title_alignment',array(
		'default'	=> esc_html('center'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_archive_banner_title_alignment',array(
			'label'	=> esc_html__('Blog/Archive title alignment','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_blog_section',
			'setting'	=> 'wpdevart_cake_shop_archive_banner_title_alignment',
			'type' => 'select',
			'choices' => array(
				'left' => esc_html__('Left','cake-shop'),
				'center' => esc_html__('Center','cake-shop'),
				'right' => esc_html__('Right','cake-shop')
				)
	));	
	$wp_customize->add_setting('wpdevart_cake_shop_archive_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_archive_banner_bg_color', esc_html('#fffcfd')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_archive_banner_bg_color', array(
        'label' => esc_html__('Blog/Archive banner background color','cake-shop'),
        'section' => 'wpdevart_cake_shop_blog_section',
        'settings' => 'wpdevart_cake_shop_archive_banner_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_archive_banner_bg_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_archive_banner_bg_gradient_type',array(
			'label'	=> esc_html__('Archive pages banner gradient type','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_blog_section',
			'setting'	=> 'wpdevart_cake_shop_archive_banner_bg_gradient_type',
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
	$wp_customize->add_setting('wpdevart_cake_shop_archive_banner_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_archive_banner_bg_gradient_color', esc_html('#fffcfd')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_archive_banner_bg_gradient_color', array(
        'label' => esc_html__('Archive pages banner gradient color','cake-shop'),
        'section' => 'wpdevart_cake_shop_blog_section',
        'settings' => 'wpdevart_cake_shop_archive_banner_bg_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_archive_banner_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_archive_banner_title_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_archive_banner_title_color', array(
        'label' => esc_html__('Blog/Archive title color','cake-shop'),
        'section' => 'wpdevart_cake_shop_blog_section',
        'settings' => 'wpdevart_cake_shop_archive_banner_title_color'
    )));
    $wp_customize->add_setting( 'wpdevart_cake_shop_blog_archive_page_layout',
	array(
		'default' => esc_html('sidebarright'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_cake_shop_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_cake_shop_blog_archive_page_layout',
	array(
		'label' => esc_html__( 'Blog/Archive Page Layout', 'cake-shop' ),
		'description' => esc_html__( 'Choose the blog/archive page layout.', 'cake-shop' ),
		'section' => 'wpdevart_cake_shop_blog_section',
		'choices' => array(
		'sidebarleft' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-left.png',
			'name' => esc_html__( 'Left Sidebar', 'cake-shop' )
		),
		'sidebarnone' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-none.png',
			'name' => esc_html__( 'No Sidebar', 'cake-shop' )
		),
		'sidebarright' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-right.png',
			'name' => esc_html__( 'Right Sidebar', 'cake-shop' )
		)
		)
	)
	) );

	##################------ Search Page ------##################

	$wp_customize->add_section('wpdevart_cake_shop_search_page_section',array(
		'title'	=> esc_html__('Search Page','cake-shop'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_cake_shop_blog_archive_search_panel'
	));


	$wp_customize->add_setting('wpdevart_cake_shop_search_banner_width',array(
		'default'	=> esc_html('narrow'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_search_banner_width',array(
			'label'	=> esc_html__('Search page banner width','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_search_page_section',
			'setting'	=> 'wpdevart_cake_shop_search_banner_width',
			'type' => 'select',
			'choices' => array(
				'narrow' => esc_html__('Narrow','cake-shop'),
				'wide' => esc_html__('Wide','cake-shop')
				)
	));
	$wp_customize->add_setting('wpdevart_cake_shop_search_banner_title_alignment',array(
		'default'	=> esc_html('center'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_search_banner_title_alignment',array(
			'label'	=> esc_html__('Search page title alignment','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_search_page_section',
			'setting'	=> 'wpdevart_cake_shop_search_banner_title_alignment',
			'type' => 'select',
			'choices' => array(
				'left' => esc_html__('Left','cake-shop'),
				'center' => esc_html__('Center','cake-shop'),
				'right' => esc_html__('Right','cake-shop')
				)
	));
	$wp_customize->add_setting('wpdevart_cake_shop_search_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_search_banner_bg_color', esc_html('#fffcfd')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_search_banner_bg_color', array(
		'label' => esc_html__('Search page banner background color','cake-shop'),
		'section' => 'wpdevart_cake_shop_search_page_section',
		'settings' => 'wpdevart_cake_shop_search_banner_bg_color'
	)));
	$wp_customize->add_setting('wpdevart_cake_shop_search_banner_bg_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_search_banner_bg_gradient_type',array(
			'label'	=> esc_html__('Search page banner gradient type','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_search_page_section',
			'setting'	=> 'wpdevart_cake_shop_search_banner_bg_gradient_type',
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
	$wp_customize->add_setting('wpdevart_cake_shop_search_banner_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_search_banner_bg_gradient_color', esc_html('#fffcfd')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_search_banner_bg_gradient_color', array(
        'label' => esc_html__('Search page banner gradient color','cake-shop'),
        'section' => 'wpdevart_cake_shop_search_page_section',
        'settings' => 'wpdevart_cake_shop_search_banner_bg_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_search_banner_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_search_banner_title_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_search_banner_title_color', array(
		'label' => esc_html__('Search page title color','cake-shop'),
		'section' => 'wpdevart_cake_shop_search_page_section',
		'settings' => 'wpdevart_cake_shop_search_banner_title_color'
	)));	
	$wp_customize->add_setting( 'wpdevart_cake_shop_search_page_layout',
	array(
		'default' => esc_html('sidebarright'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_cake_shop_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_cake_shop_search_page_layout',
	array(
		'label' => esc_html__( 'Search Page Layout', 'cake-shop' ),
		'description' => esc_html__( 'Choose the search page layout.', 'cake-shop' ),
		'section' => 'wpdevart_cake_shop_search_page_section',
		'choices' => array(
		'sidebarleft' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-left.png',
			'name' => esc_html__( 'Left Sidebar', 'cake-shop' )
		),
		'sidebarnone' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-none.png',
			'name' => esc_html__( 'No Sidebar', 'cake-shop' )
		),
		'sidebarright' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-right.png',
			'name' => esc_html__( 'Right Sidebar', 'cake-shop' )
		)
		)
	)
	) );
	$wp_customize->add_setting('wpdevart_cake_shop_search_page_button_style',array(
		'default'	=> esc_html('wpdevart_cake_shop_fourth_button_slide fourth_btn_slide_right'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_search_page_button_style',array(
			'label'	=> esc_html__('Search Page button style','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_search_page_section',
			'setting'	=> 'wpdevart_cake_shop_search_page_button_style',
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

	##################------ General ------##################
	
	$wp_customize->add_section('wpdevart_cake_shop_blog_archive_search_general_section',array(
		'title'	=> esc_html__('General','cake-shop'),
		'description'	=> esc_html__('This is the global options page for the Blog/Archive/Search posts lists.','cake-shop'),
		'priority'		=> null,
		'panel'         => 'wpdevart_cake_shop_blog_archive_search_panel'
	));
	$wp_customize->add_setting('wpdevart_cake_shop_blog_settings_posts_list_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_blog_settings_posts_list_bg_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_blog_settings_posts_list_bg_color', array(
        'label' => esc_html__('Summary/Post/Page block background color','cake-shop'),
        'section' => 'wpdevart_cake_shop_blog_archive_search_general_section',
        'settings' => 'wpdevart_cake_shop_blog_settings_posts_list_bg_color'
    )));
	$wp_customize->add_setting( 'wpdevart_cake_shop_blog_archive_display_default_featured_image',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_cake_shop_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_cake_shop_blog_archive_display_default_featured_image',
        array(
        'label' => esc_html__( 'Enable Default Featured Image', 'cake-shop' ),
		'description' => esc_html__( 'Display the default featured image for posts that do not have a selected featured image.', 'cake-shop' ),
        'section' => 'wpdevart_cake_shop_blog_archive_search_general_section'
        )
    ) );
	$wp_customize->add_setting( 'wpdevart_cake_shop_blog_settings_title_font_size',
    array(
       'default' => esc_html('22'),
       'sanitize_callback' => 'wpdevart_cake_shop_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_cake_shop_blog_settings_title_font_size',
		array(
		'label' => esc_html__( 'Title font-size (px)', 'cake-shop' ),
		'section' => 'wpdevart_cake_shop_blog_archive_search_general_section',
		'input_attrs' => array(
			'min' => esc_html('15'),
			'max' => esc_html('50'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_cake_shop_blog_settings_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_blog_settings_title_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_blog_settings_title_color', array(
        'label' => esc_html__('Title color','cake-shop'),
        'section' => 'wpdevart_cake_shop_blog_archive_search_general_section',
        'settings' => 'wpdevart_cake_shop_blog_settings_title_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_blog_settings_title_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_blog_settings_title_hover_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_blog_settings_title_hover_color', array(
        'label' => esc_html__('Title hover color','cake-shop'),
        'section' => 'wpdevart_cake_shop_blog_archive_search_general_section',
        'settings' => 'wpdevart_cake_shop_blog_settings_title_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_blog_settings_title_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_blog_settings_title_border_color', esc_html('#dddddd')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_blog_settings_title_border_color', array(
        'label' => esc_html__('Title border color','cake-shop'),
        'section' => 'wpdevart_cake_shop_blog_archive_search_general_section',
        'settings' => 'wpdevart_cake_shop_blog_settings_title_border_color'
    )));
	$wp_customize->add_setting( 'wpdevart_cake_shop_blog_settings_metas_font_size',
    array(
       'default' => esc_html('12'),
       'sanitize_callback' => 'wpdevart_cake_shop_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_cake_shop_blog_settings_metas_font_size',
		array(
		'label' => esc_html__( 'Entry metas font-size (px)', 'cake-shop' ),
		'section' => 'wpdevart_cake_shop_blog_archive_search_general_section',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('30'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_cake_shop_blog_settings_metas_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_blog_settings_metas_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_blog_settings_metas_color', array(
        'label' => esc_html__('Color of the metas','cake-shop'),
        'section' => 'wpdevart_cake_shop_blog_archive_search_general_section',
        'settings' => 'wpdevart_cake_shop_blog_settings_metas_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_blog_settings_metas_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_blog_settings_metas_hover_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_blog_settings_metas_hover_color', array(
        'label' => esc_html__('Entry metas hover color','cake-shop'),
        'section' => 'wpdevart_cake_shop_blog_archive_search_general_section',
        'settings' => 'wpdevart_cake_shop_blog_settings_metas_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_blog_settings_meta_icons_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_blog_settings_meta_icons_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_blog_settings_meta_icons_color', array(
        'label' => esc_html__('Icons color of the metas','cake-shop'),
        'section' => 'wpdevart_cake_shop_blog_archive_search_general_section',
        'settings' => 'wpdevart_cake_shop_blog_settings_meta_icons_color'
    )));
	$wp_customize->add_setting( 'wpdevart_cake_shop_blog_settings_content_text_font_size',
    array(
       'default' => esc_html('15'),
       'sanitize_callback' => 'wpdevart_cake_shop_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_cake_shop_blog_settings_content_text_font_size',
		array(
		'label' => esc_html__( 'Content font-size (px)', 'cake-shop' ),
		'section' => 'wpdevart_cake_shop_blog_archive_search_general_section',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_cake_shop_blog_settings_content_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_blog_settings_content_text_color', esc_html('#717171')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_blog_settings_content_text_color', array(
        'label' => esc_html__('Content text color','cake-shop'),
        'section' => 'wpdevart_cake_shop_blog_archive_search_general_section',
        'settings' => 'wpdevart_cake_shop_blog_settings_content_text_color'
    )));
	$wp_customize->add_setting( 'wpdevart_cake_shop_blog_settings_category_text_font_size',
    array(
       'default' => esc_html('13'),
       'sanitize_callback' => 'wpdevart_cake_shop_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_cake_shop_blog_settings_category_text_font_size',
		array(
		'label' => esc_html__( 'Category font-size (px)', 'cake-shop' ),
		'section' => 'wpdevart_cake_shop_blog_archive_search_general_section',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_cake_shop_blog_settings_category_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_blog_settings_category_bg_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_blog_settings_category_bg_color', array(
        'label' => esc_html__('Categories background color','cake-shop'),
        'section' => 'wpdevart_cake_shop_blog_archive_search_general_section',
        'settings' => 'wpdevart_cake_shop_blog_settings_category_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_blog_settings_category_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_blog_settings_category_text_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_blog_settings_category_text_color', array(
        'label' => esc_html__('Categories text color','cake-shop'),
        'section' => 'wpdevart_cake_shop_blog_archive_search_general_section',
        'settings' => 'wpdevart_cake_shop_blog_settings_category_text_color'
    )));	
	$wp_customize->add_setting('wpdevart_cake_shop_blog_settings_category_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_blog_settings_category_bg_hover_color', esc_html('#f7f6f4')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_blog_settings_category_bg_hover_color', array(
        'label' => esc_html__('Categories background hover color','cake-shop'),
        'section' => 'wpdevart_cake_shop_blog_archive_search_general_section',
        'settings' => 'wpdevart_cake_shop_blog_settings_category_bg_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_blog_settings_category_text_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_blog_settings_category_text_hover_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_blog_settings_category_text_hover_color', array(
        'label' => esc_html__('Categories text hover color','cake-shop'),
        'section' => 'wpdevart_cake_shop_blog_archive_search_general_section',
        'settings' => 'wpdevart_cake_shop_blog_settings_category_text_hover_color'
    )));

	##################------ Pagination ------##################

	$wp_customize->add_section('wpdevart_cake_shop_pagination_settings',array(
		'title'	=> esc_html__('Pagination','cake-shop'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_cake_shop_blog_archive_search_panel'
	));

	$wp_customize->add_setting('wpdevart_cake_shop_pagination_buttons_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_pagination_buttons_bg_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_pagination_buttons_bg_color', array(
        'label' => esc_html__('Buttons background color','cake-shop'),
        'section' => 'wpdevart_cake_shop_pagination_settings',
        'settings' => 'wpdevart_cake_shop_pagination_buttons_bg_color'
    )));

	$wp_customize->add_setting('wpdevart_cake_shop_pagination_buttons_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_pagination_buttons_link_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_pagination_buttons_link_color', array(
        'label' => esc_html__('Text color of active buttons','cake-shop'),
        'section' => 'wpdevart_cake_shop_pagination_settings',
        'settings' => 'wpdevart_cake_shop_pagination_buttons_link_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_pagination_buttons_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_pagination_buttons_text_color', esc_html('#a8a8a8')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_pagination_buttons_text_color', array(
        'label' => esc_html__('Text color of inactive buttons','cake-shop'),
        'section' => 'wpdevart_cake_shop_pagination_settings',
        'settings' => 'wpdevart_cake_shop_pagination_buttons_text_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_pagination_buttons_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_pagination_buttons_bg_hover_color', esc_html('#f7f6f4')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_pagination_buttons_bg_hover_color', array(
        'label' => esc_html__('Buttons background hover color','cake-shop'),
        'section' => 'wpdevart_cake_shop_pagination_settings',
        'settings' => 'wpdevart_cake_shop_pagination_buttons_bg_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_pagination_buttons_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_pagination_buttons_link_hover_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_pagination_buttons_link_hover_color', array(
        'label' => esc_html__('Text color of active buttons on hover','cake-shop'),
        'section' => 'wpdevart_cake_shop_pagination_settings',
        'settings' => 'wpdevart_cake_shop_pagination_buttons_link_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_pagination_buttons_text_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_pagination_buttons_text_hover_color', esc_html('#a8a8a8')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_pagination_buttons_text_hover_color', array(
        'label' => esc_html__('Text color of inactive buttons on hover','cake-shop'),
        'section' => 'wpdevart_cake_shop_pagination_settings',
        'settings' => 'wpdevart_cake_shop_pagination_buttons_text_hover_color'
    )));