<?php 
	$wp_customize->add_panel( 'wpdevart_cake_shop_single_post_page_panel', 
	array(
		'title'	=> esc_html__('Single Post/Page','cake-shop'),			
		'description'	=> esc_html__('Single Post/Page settings','cake-shop'),		
		'priority'		=> 25
	) 
	);

	##################------ Single Post ------##################

	$wp_customize->add_section('wpdevart_cake_shop_single_post_section',array(
		'title'	=> esc_html__('Single Post','cake-shop'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_cake_shop_single_post_page_panel'
	));

	$wp_customize->add_setting('wpdevart_cake_shop_single_post_banner_width',array(
		'default'	=> esc_html('narrow'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_single_post_banner_width',array(
			'label'	=> esc_html__('Single post banner width','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_single_post_section',
			'setting'	=> 'wpdevart_cake_shop_single_post_banner_width',
			'type' => 'select',
			'choices' => array(
				'narrow' => esc_html__('Narrow','cake-shop'),
				'wide' => esc_html__('Wide','cake-shop')
				)
	));	
	$wp_customize->add_setting('wpdevart_cake_shop_single_post_title_alignment',array(
		'default'	=> esc_html('center'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_single_post_title_alignment',array(
			'label'	=> esc_html__('Position of elements','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_single_post_section',
			'setting'	=> 'wpdevart_cake_shop_single_post_title_alignment',
			'type' => 'select',
			'choices' => array(
				'left' => esc_html__('Left','cake-shop'),
				'center' => esc_html__('Center','cake-shop'),
				'right' => esc_html__('Right','cake-shop')
				)
	));	
	$wp_customize->add_setting('wpdevart_cake_shop_single_post_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_single_post_banner_bg_color', esc_html('#fffcfd')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_single_post_banner_bg_color', array(
        'label' => esc_html__('Single post banner BG color','cake-shop'),
        'section' => 'wpdevart_cake_shop_single_post_section',
        'settings' => 'wpdevart_cake_shop_single_post_banner_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_single_post_banner_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_single_post_banner_gradient_type',array(
			'label'	=> esc_html__('Single post banner gradient type','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_single_post_section',
			'setting'	=> 'wpdevart_cake_shop_single_post_banner_gradient_type',
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
	$wp_customize->add_setting('wpdevart_cake_shop_single_post_banner_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_single_post_banner_gradient_color', esc_html('#fffcfd')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_single_post_banner_gradient_color', array(
        'label' => esc_html__('Single post banner gradient color','cake-shop'),
        'section' => 'wpdevart_cake_shop_single_post_section',
        'settings' => 'wpdevart_cake_shop_single_post_banner_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_single_post_banner_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_single_post_banner_title_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_single_post_banner_title_color', array(
        'label' => esc_html__('Banner/Single Post title color','cake-shop'),
        'section' => 'wpdevart_cake_shop_single_post_section',
        'settings' => 'wpdevart_cake_shop_single_post_banner_title_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_single_post_banner_entry_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_single_post_banner_entry_text_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_single_post_banner_entry_text_color', array(
        'label' => esc_html__('Banner text color','cake-shop'),
        'section' => 'wpdevart_cake_shop_single_post_section',
        'settings' => 'wpdevart_cake_shop_single_post_banner_entry_text_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_single_post_banner_entry_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_single_post_banner_entry_link_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_single_post_banner_entry_link_color', array(
        'label' => esc_html__('Banner link color','cake-shop'),
        'section' => 'wpdevart_cake_shop_single_post_section',
        'settings' => 'wpdevart_cake_shop_single_post_banner_entry_link_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_single_post_banner_entry_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_single_post_banner_entry_link_hover_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_single_post_banner_entry_link_hover_color', array(
        'label' => esc_html__('Banner link hover color','cake-shop'),
        'section' => 'wpdevart_cake_shop_single_post_section',
        'settings' => 'wpdevart_cake_shop_single_post_banner_entry_link_hover_color'
    )));
    $wp_customize->add_setting( 'wpdevart_cake_shop_single_post_layout',
	array(
		'default' => esc_html('sidebarright'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_cake_shop_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_cake_shop_single_post_layout',
	array(
		'label' => esc_html__( 'Single Post Layout', 'cake-shop' ),
		'description' => esc_html__( 'Choose the single post layout.', 'cake-shop' ),
		'section' => 'wpdevart_cake_shop_single_post_section',
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

	##################------ Single Page ------##################

	$wp_customize->add_section('wpdevart_cake_shop_single_page_section',array(
		'title'	=> esc_html__('Single Page','cake-shop'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_cake_shop_single_post_page_panel'
	));

	$wp_customize->add_setting('wpdevart_cake_shop_single_page_banner_width',array(
		'default'	=> esc_html('narrow'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_single_page_banner_width',array(
			'label'	=> esc_html__('Single page banner width','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_single_page_section',
			'setting'	=> 'wpdevart_cake_shop_single_page_banner_width',
			'type' => 'select',
			'choices' => array(
				'narrow' => esc_html__('Narrow','cake-shop'),
				'wide' => esc_html__('Wide','cake-shop')
				)
	));	
	$wp_customize->add_setting('wpdevart_cake_shop_single_page_title_alignment',array(
		'default'	=> esc_html('center'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_single_page_title_alignment',array(
			'label'	=> esc_html__('Position of elements','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_single_page_section',
			'setting'	=> 'wpdevart_cake_shop_single_page_title_alignment',
			'type' => 'select',
			'choices' => array(
				'left' => esc_html__('Left','cake-shop'),
				'center' => esc_html__('Center','cake-shop'),
				'right' => esc_html__('Right','cake-shop')
				)
	));	
	$wp_customize->add_setting('wpdevart_cake_shop_single_page_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_single_page_banner_bg_color', esc_html('#fffcfd')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_single_page_banner_bg_color', array(
        'label' => esc_html__('Single page banner BG color','cake-shop'),
        'section' => 'wpdevart_cake_shop_single_page_section',
        'settings' => 'wpdevart_cake_shop_single_page_banner_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_single_page_banner_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_cake_shop_single_page_banner_gradient_type',array(
			'label'	=> esc_html__('Single page banner gradient type','cake-shop'),
			'section'	=> 'wpdevart_cake_shop_single_page_section',
			'setting'	=> 'wpdevart_cake_shop_single_page_banner_gradient_type',
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
	$wp_customize->add_setting('wpdevart_cake_shop_single_page_banner_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_single_page_banner_gradient_color', esc_html('#fffcfd')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_single_page_banner_gradient_color', array(
        'label' => esc_html__('Single page banner gradient color','cake-shop'),
        'section' => 'wpdevart_cake_shop_single_page_section',
        'settings' => 'wpdevart_cake_shop_single_page_banner_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_single_page_banner_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_single_page_banner_title_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_single_page_banner_title_color', array(
        'label' => esc_html__('Banner/Single page title color','cake-shop'),
        'section' => 'wpdevart_cake_shop_single_page_section',
        'settings' => 'wpdevart_cake_shop_single_page_banner_title_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_single_page_banner_entry_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_single_page_banner_entry_text_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_single_page_banner_entry_text_color', array(
        'label' => esc_html__('Banner text color','cake-shop'),
        'section' => 'wpdevart_cake_shop_single_page_section',
        'settings' => 'wpdevart_cake_shop_single_page_banner_entry_text_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_single_page_banner_entry_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_single_page_banner_entry_link_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_single_page_banner_entry_link_color', array(
        'label' => esc_html__('Banner link color','cake-shop'),
        'section' => 'wpdevart_cake_shop_single_page_section',
        'settings' => 'wpdevart_cake_shop_single_page_banner_entry_link_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_single_page_banner_entry_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_single_page_banner_entry_link_hover_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_single_page_banner_entry_link_hover_color', array(
        'label' => esc_html__('Banner link hover color','cake-shop'),
        'section' => 'wpdevart_cake_shop_single_page_section',
        'settings' => 'wpdevart_cake_shop_single_page_banner_entry_link_hover_color'
    )));
    $wp_customize->add_setting( 'wpdevart_cake_shop_single_page_layout',
	array(
		'default' => esc_html('sidebarnone'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_cake_shop_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_cake_shop_single_page_layout',
	array(
		'label' => esc_html__( 'Single Page Layout', 'cake-shop' ),
		'description' => esc_html__( 'Choose the single page layout.', 'cake-shop' ),
		'section' => 'wpdevart_cake_shop_single_page_section',
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

	##################------ Comments ------##################

	$wp_customize->add_section('wpdevart_cake_shop_comments_settings',array(
		'title'	=> esc_html__('Comments Box','cake-shop'),
		'description'	=> esc_html__('The Comment Box is a block of user responses. Other comments section settings can be managed on the General settings page (for example, the Post Comment button can be controlled in the Primary Button section, or the text colors for Comment*, Name*, Email*, or Website can be controlled in the Colors section).','cake-shop'),	
		'priority'		=> null,
		'panel'         => 'wpdevart_cake_shop_single_post_page_panel'
	));
	$wp_customize->add_setting('wpdevart_cake_shop_comments_reply_box_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_comments_reply_box_bg_color', esc_html('#fcfcfc')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_comments_reply_box_bg_color', array(
        'label' => esc_html__('Comments reply box background color','cake-shop'),
        'section' => 'wpdevart_cake_shop_comments_settings',
        'settings' => 'wpdevart_cake_shop_comments_reply_box_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_comments_reply_box_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_comments_reply_box_text_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_comments_reply_box_text_color', array(
        'label' => esc_html__('Comments reply box text color','cake-shop'),
        'section' => 'wpdevart_cake_shop_comments_settings',
        'settings' => 'wpdevart_cake_shop_comments_reply_box_text_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_comments_reply_box_heading_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_comments_reply_box_heading_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_comments_reply_box_heading_color', array(
        'label' => esc_html__('Comments reply box heading color','cake-shop'),
        'section' => 'wpdevart_cake_shop_comments_settings',
        'settings' => 'wpdevart_cake_shop_comments_reply_box_heading_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_comments_reply_box_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_comments_reply_box_link_color', esc_html('#39a0a7')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_comments_reply_box_link_color', array(
        'label' => esc_html__('Comments reply box link color','cake-shop'),
        'section' => 'wpdevart_cake_shop_comments_settings',
        'settings' => 'wpdevart_cake_shop_comments_reply_box_link_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_comments_reply_box_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_comments_reply_box_link_hover_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_comments_reply_box_link_hover_color', array(
        'label' => esc_html__('Comments reply box link hover color','cake-shop'),
        'section' => 'wpdevart_cake_shop_comments_settings',
        'settings' => 'wpdevart_cake_shop_comments_reply_box_link_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_comments_reply_button_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_comments_reply_button_bg_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_comments_reply_button_bg_color', array(
        'label' => esc_html__('Comments reply button bg color','cake-shop'),
        'section' => 'wpdevart_cake_shop_comments_settings',
        'settings' => 'wpdevart_cake_shop_comments_reply_button_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_comments_reply_button_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_comments_reply_button_link_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_comments_reply_button_link_color', array(
        'label' => esc_html__('Comments reply button link color','cake-shop'),
        'section' => 'wpdevart_cake_shop_comments_settings',
        'settings' => 'wpdevart_cake_shop_comments_reply_button_link_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_comments_reply_button_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_comments_reply_button_bg_hover_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_comments_reply_button_bg_hover_color', array(
        'label' => esc_html__('Comments reply button bg hover color','cake-shop'),
        'section' => 'wpdevart_cake_shop_comments_settings',
        'settings' => 'wpdevart_cake_shop_comments_reply_button_bg_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_cake_shop_comments_reply_button_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_cake_shop_comments_reply_button_link_hover_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_comments_reply_button_link_hover_color', array(
        'label' => esc_html__('Comments reply button link hover color','cake-shop'),
        'section' => 'wpdevart_cake_shop_comments_settings',
        'settings' => 'wpdevart_cake_shop_comments_reply_button_link_hover_color'
    )));