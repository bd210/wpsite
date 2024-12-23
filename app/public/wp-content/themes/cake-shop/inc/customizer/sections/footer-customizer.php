<?php 
        $wp_customize->add_section('wpdevart_cake_shop_footer_section',array(
            'title'	=> esc_html__('Footer','cake-shop'),
            'priority'		=> 30
        ));
        $wp_customize->add_setting( 'wpdevart_cake_shop_footer_layout',
        array(
            'default' => esc_html('wpdevartthreewidgetsleft'),
            'transport' => 'refresh',
            'sanitize_callback' => 'wpdevart_cake_shop_text_sanitization'
        )
        );
        $wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_cake_shop_footer_layout',
        array(
            'label' => esc_html__( 'Footer layout', 'cake-shop' ),
            'description' => esc_html__( 'Select the layout of the footer', 'cake-shop' ),
            'section' => 'wpdevart_cake_shop_footer_section',
            'choices' => array(
            'wpdevartthreewidgetsleft' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-one.jpg',
                'name' => esc_html__( 'Large widget on the left', 'cake-shop' )
            ),
            'wpdevartthreewidgetscenter' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-two.jpg',
                'name' => esc_html__( 'Large widget in the center', 'cake-shop' )
            ),
            'wpdevartthreewidgetsright' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-three.jpg',
                'name' => esc_html__( 'Large widget on the right', 'cake-shop' )
            ),
            'wpdevartfourwidgets' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-four.jpg',
                'name' => esc_html__( 'Four widgets', 'cake-shop' )
            )
            )
        )
        ) );
        $wp_customize->add_setting('wpdevart_cake_shop_footer_copyright_section_border',array(
            'default'	=> apply_filters( 'parent_wpdevart_cake_shop_footer_copyright_section_border', esc_html('#dddddd')),
            'sanitize_callback'	=> 'sanitize_hex_color'	
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_cake_shop_footer_copyright_section_border', array(
            'label' => esc_html__('Copyright section border color','cake-shop'),
            'section' => 'wpdevart_cake_shop_footer_section',
            'settings' => 'wpdevart_cake_shop_footer_copyright_section_border'
        )));
        $wp_customize->add_setting('wpdevart_cake_shop_footer_copyright_text',array(
            'default'	=> esc_html('Copyright ©2023. All rights reserved.'),
            'sanitize_callback'	=> 'wpdevart_cake_shop_text_sanitization'	
        ));
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'wpdevart_cake_shop_footer_copyright_text',
                array(
                    'label'    => esc_html__('Copyright text','cake-shop'),
                    'section'  => 'wpdevart_cake_shop_footer_section',
                    'settings' => 'wpdevart_cake_shop_footer_copyright_text',
                    'type'     => 'text'
                )
            )
        );