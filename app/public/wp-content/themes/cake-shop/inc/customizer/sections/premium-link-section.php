<?php

##################------ Pro Button Section ------##################
	$wp_customize->register_section_type( 'wpdevart_cake_shop_Section_Premium' );

	$wp_customize->add_section(
		new wpdevart_cake_shop_Section_Premium(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__('Cake Shop','cake-shop'),
				'pro_text' => esc_html__('Premium','cake-shop'),
				'pro_url'  => esc_url('https://wpdevart.com/wordpress-cake-shop-theme'),
				'priority'  => 10,
			)
		)
	);