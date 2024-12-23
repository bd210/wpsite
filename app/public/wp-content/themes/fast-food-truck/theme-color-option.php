<?php

	$fast_food_truck_first_color = get_theme_mod('fast_food_truck_first_color');
	$fast_food_truck_second_color = get_theme_mod('fast_food_truck_second_color');
	$fast_food_truck_custom_css ='';

	/*------------------ Global First Color -----------*/
	$fast_food_truck_custom_css .='input[type="submit"], input[type="submit"]:hover, .topbar, .bottom-header .header-search button, .bottom-header .header-search button, .bottom-header .close i, .left-banner, .product-main-div .main-product-section, #product-sec .variations .reset_variations, .single-product-section .reset_variations, .yith-wcwl-add-to-wishlist a:before, .woocommerce .widget_price_filter .ui-slider .ui-slider-range,.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .wishlist_table th, .single-post-page .category a, #sidebar .widget_block .wp-block-tag-cloud a:hover, .inner-service .wp-block-tag-cloud a:hover, .footer-wp .widget_block .wp-block-tag-cloud a:hover, #sidebar ul li:before, #sidebar .tagcloud a:hover, .footer-wp .tagcloud a:hover, #tag-cloud a:hover, .widget_calendar tbody a, .copyright-wrapper, #banner .right-banner .read-more a, .postbtn a  {';
		$fast_food_truck_custom_css .='background-color: '.esc_attr($fast_food_truck_first_color).';';
	$fast_food_truck_custom_css .='}';	

	$fast_food_truck_custom_css .='.primary-navigation ul ul li, .nav-previous a, .nav-next a, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span, .woocommerce ul.products li.product .button, .woocommerce a.added_to_cart, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .postbtn:hover i, .woocommerce .product a.button:hover, .woocommerce .product button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, nav.woocommerce-MyAccount-navigation ul li, .woocommerce-account .addresses .title .edit, .woocommerce span.posted_in a, .wp-block-woocommerce-cart .wc-block-components-totals-coupon a, .wp-block-woocommerce-cart .wc-block-cart__submit-container a, .wp-block-woocommerce-checkout .wc-block-components-totals-coupon a, .wp-block-woocommerce-checkout .wc-block-checkout__actions_row a, .wp-block-woocommerce-checkout .wc-block-components-checkout-place-order-button, .wp-block-woocommerce-cart .wc-block-components-totals-coupon__button, .wp-block-woocommerce-checkout .wc-block-components-totals-coupon__button, .wp-block-woocommerce-cart .wc-block-components-totals-coupon a:hover, .wp-block-woocommerce-cart .wc-block-cart__submit-container a:hover, .wp-block-woocommerce-checkout .wc-block-components-totals-coupon a:hover, .wp-block-woocommerce-checkout .wc-block-checkout__actions_row a:hover, .wp-block-woocommerce-empty-cart-block .wp-block-button a, .wp-block-woocommerce-empty-cart-block .wc-block-grid__product-onsale, .wishlist_table .product-add-to-cart a, .bradcrumbs a, .bradcrumbs span, .metabox i:before, #comments input[type="submit"].submit, #comments a.comment-reply-link, #sidebar input[type="submit"], #sidebar button:hover, #sidebar .custom_read_more a, .page-content .read-moresec a.button, .frame, #scrollbutton, .footer-wp input[type="submit"], .footer-wp button, #sidebar button, #sidebar button:hover, .footer-wp button:hover, .pagination .current, .page-links .post-page-numbers.current span, .tags a:hover, #scrollbutton {';
		$fast_food_truck_custom_css .='background: '.esc_attr($fast_food_truck_first_color).';';
	$fast_food_truck_custom_css .='}';	

	$fast_food_truck_custom_css .='a.button.wc-forward:hover, .pagination a:hover, .page-links a:hover, #comments a time, .bradcrumbs span, .bradcrumbs a, .tags, .pagination .current, #sidebar .textwidget p a, #sidebar .textwidget a:hover,.footer-wp .woocommerce a.button:hover, .woocommerce .widget_price_filter .price_slider_amount .button:hover, #sidebar h3.widget-title a.rsswidget, .page-content .read-moresec a.button, a.button, #sidebar ul li a:hover, .widget_calendar caption, #comments a.comment-reply-link:hover, .new-text p a,.comment p a, a.r_button, input[type="submit"], td.product-name a, .bottom-header .phone i:hover, .bottom-header .phone p:hover, .bottom-header .phone a:hover, .bottom-header .social-icon a:hover, .main-search i:hover, .woo-icons a:hover, #banner .right-banner h1, .product-main-div .product-icon, #product-sec .cart-button a, #product-sec .added_to_cart, .bottom-header a.pizza-btn:hover, #banner .right-banner .read-more a:hover, .postbtn a:hover, .woocommerce ul.products li.product .add_to_cart_button:hover, .woocommerce a.added_to_cart:hover, .wishlist_table .product-add-to-cart a:hover, .woocommerce div.product form.cart .single_add_to_cart_button:hover, .wp-block-woocommerce-cart .wc-block-cart__submit-container a:hover, .footer-wp input[type="submit"]:hover, .footer-wp button:hover, #sidebar button:hover, .wp-block-woocommerce-cart .wc-block-components-totals-coupon__button:hover, .wp-block-woocommerce-checkout .wc-block-checkout__actions_row a:hover, .wp-block-woocommerce-checkout .wc-block-components-checkout-place-order-button:hover, #comments a.comment-reply-link:hover, #comments input[type="submit"].submit:hover, .bottom-header .header-search button:hover, #product-sec .variations .reset_variations:hover, .single-product-section .reset_variations:hover, .single-product-section .single_add_to_cart_button:hover, .single-product-section .button.wc-forward:hover, .woocommerce #respond input#submit:hover, .bradcrumbs a:hover, .wp-block-woocommerce-checkout .wc-block-components-totals-coupon__button:hover, .wp-block-woocommerce-empty-cart-block .wp-block-button a:hover, input[type="submit"]:hover, .nav-next a:hover, .nav-previous a:hover, .woocommerce ul.products li.product .view_cart_button:hover, .woocommerce .quantity .qty, .woocommerce-message::before, .category span, .metabox span i, p.logged-in-as a, .new-text a, .wp-block-button.is-style-outline .wp-block-button__link, #sidebar ul li a:hover {';
		$fast_food_truck_custom_css .='color: '.esc_attr($fast_food_truck_first_color).';';
	$fast_food_truck_custom_css .='}';	

	$fast_food_truck_custom_css .=' input[type="submit"]:hover, .woocommerce ul.products li.product .add_to_cart_button:hover{';
	$fast_food_truck_custom_css .='color: '.esc_attr($fast_food_truck_first_color).'!important;';
	$fast_food_truck_custom_css .='}';	

	$fast_food_truck_custom_css .='#product-sec .cart-button a, #product-sec .added_to_cart, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span, .yith-wcwl-add-to-wishlist a:before, .related-inner-box, input[type="search"], .wp-block-button__link{';
		$fast_food_truck_custom_css .='border: 1px solid'.esc_attr($fast_food_truck_first_color).';';
	$fast_food_truck_custom_css .='}';	

	$fast_food_truck_custom_css .='input[type="submit"], .bottom-header a.pizza-btn, #banner .right-banner .read-more a, .postbtn a, #product-sec .variations .reset_variations, .single-product-section .reset_variations, .nav-next a, .nav-previous a, .single-product-section .single_add_to_cart_button, .single-product-section .button.wc-forward, .woocommerce ul.products li.product .button, .woocommerce a.added_to_cart, .bottom-header a.pizza-btn:hover, #banner .right-banner .read-more a:hover, .postbtn a:hover, .woocommerce ul.products li.product .add_to_cart_button:hover, .woocommerce a.added_to_cart:hover, .wishlist_table .product-add-to-cart a:hover, .woocommerce div.product form.cart .single_add_to_cart_button:hover, .wp-block-woocommerce-cart .wc-block-cart__submit-container a:hover, .footer-wp input[type="submit"]:hover, .footer-wp button:hover, #sidebar button:hover, .wp-block-woocommerce-cart .wc-block-components-totals-coupon__button:hover, .wp-block-woocommerce-checkout .wc-block-checkout__actions_row a:hover, .wp-block-woocommerce-checkout .wc-block-components-checkout-place-order-button:hover, #comments a.comment-reply-link:hover, #comments input[type="submit"].submit:hover, .bottom-header .header-search button:hover, #product-sec .variations .reset_variations:hover, .single-product-section .reset_variations:hover, .single-product-section .single_add_to_cart_button:hover, .single-product-section .button.wc-forward:hover, .woocommerce #respond input#submit:hover, .bradcrumbs a:hover, .wp-block-woocommerce-checkout .wc-block-components-totals-coupon__button:hover, .wp-block-woocommerce-empty-cart-block .wp-block-button a:hover, input[type="submit"]:hover, .nav-next a:hover, .nav-previous a:hover, .woocommerce ul.products li.product .view_cart_button:hover, .woocommerce #respond input#submit, .wp-block-woocommerce-cart .wc-block-components-totals-coupon a, .wp-block-woocommerce-cart .wc-block-cart__submit-container a, .wp-block-woocommerce-checkout .wc-block-components-totals-coupon a, .wp-block-woocommerce-checkout .wc-block-checkout__actions_row a, .wp-block-woocommerce-checkout .wc-block-components-checkout-place-order-button, .wp-block-woocommerce-cart .wc-block-components-totals-coupon__button, .wp-block-woocommerce-checkout .wc-block-components-totals-coupon__button, .wp-block-woocommerce-empty-cart-block .wp-block-button a, .wishlist_table .product-add-to-cart a, .bradcrumbs a, .bradcrumbs span, #comments input[type="submit"].submit, #comments a.comment-reply-link, .wp-block-button.is-style-outline .wp-block-button__link, .footer-wp .custom-contact-us div.wpcf7-validation-errors, .footer-wp .custom-contact-us div.wpcf7-acceptance-missing, .page-content .read-moresec a.button, #scrollbutton, .footer-wp input[type="submit"], .footer-wp button, #sidebar button {';
		$fast_food_truck_custom_css .='border: 2px solid'.esc_attr($fast_food_truck_first_color).';';
	$fast_food_truck_custom_css .='}';	

	$fast_food_truck_custom_css .='.wp-block-woocommerce-empty-cart-block .wc-block-grid__product-onsale, .woocommerce ul.products li.product:hover {';
		$fast_food_truck_custom_css .='border-color: '.esc_attr($fast_food_truck_first_color).';';
	$fast_food_truck_custom_css .='}';	

	$fast_food_truck_custom_css .='.woocommerce-message, .woocommerce ul.products li.product:hover, .woocommerce ul.products li.product:hover img{';
		$fast_food_truck_custom_css .='border-top-color: '.esc_attr($fast_food_truck_first_color).';';
	$fast_food_truck_custom_css .='}';	

	$fast_food_truck_custom_css .= '
	@media screen and (max-width: 1000px) {
		#banner .owl-carousel .owl-nav .owl-prev i, #banner .owl-carousel .owl-nav .owl-next i{
			background-color: ' . esc_attr($fast_food_truck_first_color) . ' !important;
		}
		.primary-navigation ul ul a:hover, .primary-navigation ul ul a:focus, .primary-navigation ul ul a:before, .main-menu-navigation a:focus, .primary-navigation ul ul a:hover, .primary-navigation ul ul a:focus, .primary-navigation ul ul, .main-menu-navigation,.primary-navigation .current_page_item > a,.primary-navigation .current-menu-item > a,.primary-navigation .current_page_ancestor > a{
			color: ' . esc_attr($fast_food_truck_first_color) . ' !important;
	    }		
		.main-menu-navigation a:focus, a.closebtn:focus{
			outline: 1px solid ' . esc_attr($fast_food_truck_first_color) . ' !important;
		}
	}
	';

	/*------------------ Global Second Color -----------*/
	$fast_food_truck_custom_css .='#header, .right-banner{';
		$fast_food_truck_custom_css .='background-color: '.esc_attr($fast_food_truck_second_color).';';
	$fast_food_truck_custom_css .='}';	

	$fast_food_truck_custom_css .='.postbtn a:hover{';
		$fast_food_truck_custom_css .='background: '.esc_attr($fast_food_truck_second_color).';';
	$fast_food_truck_custom_css .='}';	

	$fast_food_truck_custom_css .='.logo .site-title a, .logo p.site-description, .primary-navigation .current-menu-item a, .primary-navigation li.current-menu-item:before, .primary-navigation ul li a:hover{';
		$fast_food_truck_custom_css .='color: '.esc_attr($fast_food_truck_second_color).';';
	$fast_food_truck_custom_css .='}';	

	$fast_food_truck_custom_css .='
	@media screen and (max-width:1000px) {
		.toggle-menu i, .bottom-header{';
			$fast_food_truck_custom_css .='background: '.esc_attr($fast_food_truck_second_color).' !important;';
	$fast_food_truck_custom_css .='} }';

	/*---------------------------Width Layout -------------------*/
	$fast_food_truck_theme_lay = get_theme_mod( 'fast_food_truck_width_layout_options','Default');
    if($fast_food_truck_theme_lay == 'Default'){
		$fast_food_truck_custom_css .='body{';
			$fast_food_truck_custom_css .='max-width: 100%;';
		$fast_food_truck_custom_css .='}';
	}else if($fast_food_truck_theme_lay == 'Container Layout'){
		$fast_food_truck_custom_css .='body{';
			$fast_food_truck_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$fast_food_truck_custom_css .='}';
		$fast_food_truck_custom_css .='.page-template-home-page #header{';
			$fast_food_truck_custom_css .='position: static; background-color: #000;';
		$fast_food_truck_custom_css .='}';
	}else if($fast_food_truck_theme_lay == 'Box Layout'){
		$fast_food_truck_custom_css .='body{';
			$fast_food_truck_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$fast_food_truck_custom_css .='}';
		$fast_food_truck_custom_css .='.page-template-home-page #header{';
			$fast_food_truck_custom_css .='position: static; background-color: #000;';
		$fast_food_truck_custom_css .='}';
	}

	/*-------------- Footer Text -------------------*/
	$fast_food_truck_footer_text_align = get_theme_mod('fast_food_truck_footer_text_align');
	$fast_food_truck_custom_css .='.copyright-wrapper{';
		$fast_food_truck_custom_css .='text-align: '.esc_attr($fast_food_truck_footer_text_align).';';
	$fast_food_truck_custom_css .='}';
	$fast_food_truck_custom_css .='
	@media screen and (max-width:575px) {
		.copyright-wrapper{';
			$fast_food_truck_custom_css .='text-align: center;'.esc_attr($fast_food_truck_footer_text_align).'';
	$fast_food_truck_custom_css .='} }';

	$fast_food_truck_footer_text_padding = get_theme_mod('fast_food_truck_footer_text_padding');
	$fast_food_truck_custom_css .='.copyright-wrapper{';
		$fast_food_truck_custom_css .='padding-top: '.esc_attr($fast_food_truck_footer_text_padding).'px !important; padding-bottom: '.esc_attr($fast_food_truck_footer_text_padding).'px !important;';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_footer_bg_color = get_theme_mod('fast_food_truck_footer_bg_color');
	$fast_food_truck_custom_css .='.footer-wp{';
		$fast_food_truck_custom_css .='background-color: '.esc_attr($fast_food_truck_footer_bg_color).';';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_footer_bg_image = get_theme_mod('fast_food_truck_footer_bg_image');
	if($fast_food_truck_footer_bg_image != false){
		$fast_food_truck_custom_css .='.footer-wp{';
			$fast_food_truck_custom_css .='background: url('.esc_attr($fast_food_truck_footer_bg_image).'); background-size: cover;';
		$fast_food_truck_custom_css .='}';
	}

	// Footer Attatchment
	$fast_food_truck_theme_lay = get_theme_mod( 'fast_food_truck_footer_attatchment','scroll');
	if($fast_food_truck_theme_lay == 'fixed'){
		$fast_food_truck_custom_css .='.footer-wp{';
			$fast_food_truck_custom_css .='background-attachment: fixed;';
		$fast_food_truck_custom_css .='}';
	}elseif ($fast_food_truck_theme_lay == 'scroll'){
		$fast_food_truck_custom_css .='.footer-wp{';
			$fast_food_truck_custom_css .='background-attachment: scroll;';
		$fast_food_truck_custom_css .='}';
	}

    // footer image position
	$fast_food_truck_footer_img_position = get_theme_mod('fast_food_truck_footer_img_position','center center');
	if($fast_food_truck_footer_img_position != false){
		$fast_food_truck_custom_css .='.footer-wp{';
			$fast_food_truck_custom_css .='background-position: '.esc_attr($fast_food_truck_footer_img_position).'!important;';
		$fast_food_truck_custom_css .='}';
	}		

	//footer heading letter spacing
	$fast_food_truck_footer_heading_letter_spacing = get_theme_mod('fast_food_truck_footer_heading_letter_spacing',);
	$fast_food_truck_custom_css .='.footer-wp h3 {';
		$fast_food_truck_custom_css .='letter-spacing: '.esc_attr($fast_food_truck_footer_heading_letter_spacing).'px;';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_copyright_text_font_size = get_theme_mod('fast_food_truck_copyright_text_font_size', 15);
	$fast_food_truck_custom_css .='.copyright-wrapper p, .copyright-wrapper a{';
		$fast_food_truck_custom_css .='font-size: '.esc_attr($fast_food_truck_copyright_text_font_size).'px;';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_footer_heading_font_size = get_theme_mod('fast_food_truck_footer_heading_font_size');
	$fast_food_truck_custom_css .='.footer-wp h3{';
		$fast_food_truck_custom_css .='font-size: '.esc_attr($fast_food_truck_footer_heading_font_size).'px;';
	$fast_food_truck_custom_css .='}';

	// footer padding
	$fast_food_truck_footer_padding = get_theme_mod('fast_food_truck_footer_padding');
	$fast_food_truck_custom_css .='.footer-wp{';
		$fast_food_truck_custom_css .='padding: '.esc_attr($fast_food_truck_footer_padding).'px;';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_footer_heading = get_theme_mod( 'fast_food_truck_footer_heading','Left');
    if($fast_food_truck_footer_heading == 'Left'){
		$fast_food_truck_custom_css .='.footer-wp h3, .footer-wp .wp-block-search .wp-block-search__label{';
		$fast_food_truck_custom_css .='text-align: left;';
		$fast_food_truck_custom_css .='}';
	}else if($fast_food_truck_footer_heading == 'Center'){
		$fast_food_truck_custom_css .='.footer-wp h3, .footer-wp .wp-block-search .wp-block-search__label{';
			$fast_food_truck_custom_css .='text-align: center;';
		$fast_food_truck_custom_css .='}';
		$fast_food_truck_custom_css .='.footer-wp h3:after, .footer-wp .wp-block-heading:after{';
			$fast_food_truck_custom_css .='margin: 7px auto;';
		$fast_food_truck_custom_css .='}';
		$fast_food_truck_custom_css .='
		@media screen and (max-width:767px) {
			.footer-wp h3, .footer-wp .wp-block-search .wp-block-search__label{';
				$fast_food_truck_custom_css .='text-align: left;';
				$fast_food_truck_custom_css .='}
			.footer-wp h3:after, .footer-wp .wp-block-heading:after{';
				$fast_food_truck_custom_css .='margin: 7px 0 0;';
				$fast_food_truck_custom_css .='}
		}';
	}else if($fast_food_truck_footer_heading == 'Right'){
		$fast_food_truck_custom_css .='.footer-wp h3, .footer-wp .wp-block-search .wp-block-search__label{';
			$fast_food_truck_custom_css .='text-align: right; padding-bottom: 25px;';
		$fast_food_truck_custom_css .='}';
		$fast_food_truck_custom_css .='.footer-wp .widget, .footer-wp aside{';
			$fast_food_truck_custom_css .='position: relative;';
		$fast_food_truck_custom_css .='}';
		$fast_food_truck_custom_css .='.footer-wp h3:after, .footer-wp .wp-block-heading:after{';
			$fast_food_truck_custom_css .='position: absolute; right: 0;';
		$fast_food_truck_custom_css .='}';
		$fast_food_truck_custom_css .='
		@media screen and (max-width:767px) {
			.footer-wp h3, .footer-wp .wp-block-search .wp-block-search__label{';
				$fast_food_truck_custom_css .='text-align: left;';
				$fast_food_truck_custom_css .='}
			.footer-wp h3:after, .footer-wp .wp-block-heading:after{';
				$fast_food_truck_custom_css .='left: 0;';
				$fast_food_truck_custom_css .='}
		}';
	}

	$fast_food_truck_footer_content = get_theme_mod( 'fast_food_truck_footer_content','Left');
    if($fast_food_truck_footer_content == 'Left'){
		$fast_food_truck_custom_css .='.footer-wp .widget{';
		$fast_food_truck_custom_css .='text-align: left;';
		$fast_food_truck_custom_css .='}';
	}else if($fast_food_truck_footer_content == 'Center'){
		$fast_food_truck_custom_css .='.footer-wp .widget{';
			$fast_food_truck_custom_css .='text-align: center;';
		$fast_food_truck_custom_css .='}';
		$fast_food_truck_custom_css .='
		@media screen and (max-width:767px) {
			.footer-wp .widget{';
				$fast_food_truck_custom_css .='text-align: left;';
				$fast_food_truck_custom_css .='} }';
	}else if($fast_food_truck_footer_content == 'Right'){
		$fast_food_truck_custom_css .='.footer-wp .widget{';
			$fast_food_truck_custom_css .='text-align: right;';
		$fast_food_truck_custom_css .='}';
		$fast_food_truck_custom_css .='
		@media screen and (max-width:767px) {
			.footer-wp .widget{';
				$fast_food_truck_custom_css .='text-align: left;';
				$fast_food_truck_custom_css .='} }';
	}

   //Footer Style 
	$fast_food_truck_theme_lay = get_theme_mod( 'fast_food_truck_footer_template','fast_food_truck-footer-one');
    if($fast_food_truck_theme_lay == 'fast_food_truck-footer-one'){
		$fast_food_truck_custom_css .='.footer-wp{';
			$fast_food_truck_custom_css .='';
		$fast_food_truck_custom_css .='}';

	}else if($fast_food_truck_theme_lay == 'fast_food_truck-footer-two'){
		$fast_food_truck_custom_css .='.footer-wp {';
			$fast_food_truck_custom_css .='background: #E3F2FD !important;';
		$fast_food_truck_custom_css .='}';
		$fast_food_truck_custom_css .='.footer-wp p,.footer-wp span,.footer-wp li a,.footer-wp #wp-calendar caption,.footer-wp #wp-calendar td,.footer-wp #wp-calendar th, .footer-wp, .footer-wp h3, .footer-wp a.rsswidget, .footer-wp #wp-calendar a, .copyright a, .footer-wp .custom_details, .footer-wp ins span, .footer-wp .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, .footer-wp ul li a, .footer-wp table, .footer-wp th, .footer-wp td, .footer-wp caption, #sidebar caption,.footer-wp nav.wp-calendar-nav a,.footer-wp .search-form .search-field, .footer-wp .rssSummary, .footer-wp ul li{';
			$fast_food_truck_custom_css .='color:#000 !important;';
		$fast_food_truck_custom_css .='}';
		$fast_food_truck_custom_css .='.footer-wp p{';
			$fast_food_truck_custom_css .='color:#000 !important;';
		$fast_food_truck_custom_css .='}';
		$fast_food_truck_custom_css .='.footer-wp ul li::before{';
			$fast_food_truck_custom_css .='background:#000;';
		$fast_food_truck_custom_css .='}';
		$fast_food_truck_custom_css .='.footer-wp table, .footer-wp th, .footer-wp td,.footer-wp.search-form .search-field,.footer-wp .tagcloud a{';
			$fast_food_truck_custom_css .='border: 1px solid #000;';
		$fast_food_truck_custom_css .='}';

	}else if($fast_food_truck_theme_lay == 'fast_food_truck-footer-three'){
		$fast_food_truck_custom_css .='.footer-wp {';
			$fast_food_truck_custom_css .='background: #0A0A1F !important;;';
		$fast_food_truck_custom_css .='}';
	}
	else if($fast_food_truck_theme_lay == 'fast_food_truck-footer-four'){
		$fast_food_truck_custom_css .='.footer-wp {';
			$fast_food_truck_custom_css .='background: #F5F5DC !important;;';
		$fast_food_truck_custom_css .='}';
		$fast_food_truck_custom_css .='.footer-wp p,.footer-wp span,.footer-wp li a,.footer-wp #wp-calendar caption,.footer-wp #wp-calendar td,.footer-wp #wp-calendar th, .footer-wp, .footer-wp h3, .footer-wp a.rsswidget, .footer-wp #wp-calendar a, .copyright a, .footer-wp .custom_details, .footer-wp ins span, .footer-wp .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, .footer-wp ul li a, .footer-wp table, .footer-wp th, .footer-wp td, .footer-wp caption, #sidebar caption,.footer-wp nav.wp-calendar-nav a,.footer-wp .search-form .search-field, .footer-wp .rssSummary, .footer-wp ul li{';
			$fast_food_truck_custom_css .='color:#000 !important;';
		$fast_food_truck_custom_css .='}';
		$fast_food_truck_custom_css .='.footer-wp p{';
			$fast_food_truck_custom_css .='color:#000 !important;';
		$fast_food_truck_custom_css .='}';
		$fast_food_truck_custom_css .='.footer-wp ul li::before{';
			$fast_food_truck_custom_css .='background:#000;';
		$fast_food_truck_custom_css .='}';
		$fast_food_truck_custom_css .='.footer-wp table, .footer-wp th, .footer-wp td,.footer-wp.search-form .search-field,.footer-wp .tagcloud a{';
			$fast_food_truck_custom_css .='border: 1px solid #000;';
		$fast_food_truck_custom_css .='}';
	}
    else if($fast_food_truck_theme_lay == 'fast_food_truck-footer-five'){
	$fast_food_truck_custom_css .='.footer-wp {';
		$fast_food_truck_custom_css .='background: #333333 !important;;';
	$fast_food_truck_custom_css .='}';
   }		

	//Footer social icons font size
	$fast_food_truck_footer_social_icons_size = get_theme_mod('fast_food_truck_footer_social_icons_size', 15);
	$fast_food_truck_custom_css .='.copyright-wrapper a i{';
		$fast_food_truck_custom_css .='font-size: '.esc_attr($fast_food_truck_footer_social_icons_size).'px;';
	$fast_food_truck_custom_css .='}';	
	
	//Footer Social Icon Alignment
	$fast_food_truck_footer_icon_alignment = get_theme_mod( 'fast_food_truck_footer_icon_alignment','center');
    if($fast_food_truck_footer_icon_alignment == 'left'){
		$fast_food_truck_custom_css .='footer .socialicons{';
			$fast_food_truck_custom_css .='text-align:left !important;';
		$fast_food_truck_custom_css .='}';
	}else if($fast_food_truck_footer_icon_alignment == 'center'){
		$fast_food_truck_custom_css .='footer .socialicons{';
			$fast_food_truck_custom_css .='text-align:center !important;';
		$fast_food_truck_custom_css .='}';
	}else if($fast_food_truck_footer_icon_alignment == 'right'){
		$fast_food_truck_custom_css .='footer .socialicons{';
			$fast_food_truck_custom_css .='text-align:right !important;';
		$fast_food_truck_custom_css .='}';
	}	
	
	//Social icon color
	$fast_food_truck_social_icon_color = get_theme_mod('fast_food_truck_social_icon_color');
	$fast_food_truck_custom_css .='.social-icon i{';
			$fast_food_truck_custom_css .='color: '.esc_attr($fast_food_truck_social_icon_color).' !important;';
	$fast_food_truck_custom_css .='}';   	

	/*------------- Back to Top  -------------------*/
	$fast_food_truck_back_to_top_border_radius = get_theme_mod('fast_food_truck_back_to_top_border_radius');
	$fast_food_truck_custom_css .='#scrollbutton {';
		$fast_food_truck_custom_css .='border-radius: '.esc_attr($fast_food_truck_back_to_top_border_radius).'px;';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_scroll_icon_font_size = get_theme_mod('fast_food_truck_scroll_icon_font_size', 22);
	$fast_food_truck_custom_css .='#scrollbutton {';
		$fast_food_truck_custom_css .='font-size: '.esc_attr($fast_food_truck_scroll_icon_font_size).'px;';
	$fast_food_truck_custom_css .='}';

	// back to top icon color
	$fast_food_truck_scroll_icon_color = get_theme_mod('fast_food_truck_scroll_icon_color');
	$fast_food_truck_custom_css .='#scrollbutton i{';
		$fast_food_truck_custom_css .='color: '.esc_attr($fast_food_truck_scroll_icon_color).';';
	$fast_food_truck_custom_css .='}';

	// back to top icon hover color
	$fast_food_truck_scroll_icon_hover_color = get_theme_mod('fast_food_truck_scroll_icon_hover_color');
	$fast_food_truck_custom_css .='#scrollbutton i:hover{';
		$fast_food_truck_custom_css .='color: '.esc_attr($fast_food_truck_scroll_icon_hover_color).';';
	$fast_food_truck_custom_css .='}';

	// back to top bg color
	$fast_food_truck_scroll_icon_background = get_theme_mod('fast_food_truck_scroll_icon_background');
	$fast_food_truck_custom_css .='#scrollbutton{';
		$fast_food_truck_custom_css .='background-color: '.esc_attr($fast_food_truck_scroll_icon_background).';';
		$fast_food_truck_custom_css .='border-color: '.esc_attr($fast_food_truck_scroll_icon_background).';';
	$fast_food_truck_custom_css .='}';

	// back to top bg hover color
	$fast_food_truck_scroll_icon_background_hover = get_theme_mod('fast_food_truck_scroll_icon_background_hover');
	$fast_food_truck_custom_css .='#scrollbutton:hover{';
		$fast_food_truck_custom_css .='background-color: '.esc_attr($fast_food_truck_scroll_icon_background_hover).';';
		$fast_food_truck_custom_css .='border-color: '.esc_attr($fast_food_truck_scroll_icon_background_hover).';';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_top_bottom_scroll_padding = get_theme_mod('fast_food_truck_top_bottom_scroll_padding', 7);
	$fast_food_truck_custom_css .='#scrollbutton {';
		$fast_food_truck_custom_css .='padding-top: '.esc_attr($fast_food_truck_top_bottom_scroll_padding).'px; padding-bottom: '.esc_attr($fast_food_truck_top_bottom_scroll_padding).'px;';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_left_right_scroll_padding = get_theme_mod('fast_food_truck_left_right_scroll_padding', 17);
	$fast_food_truck_custom_css .='#scrollbutton {';
		$fast_food_truck_custom_css .='padding-left: '.esc_attr($fast_food_truck_left_right_scroll_padding).'px; padding-right: '.esc_attr($fast_food_truck_left_right_scroll_padding).'px;';
	$fast_food_truck_custom_css .='}';

	//First Cap
	$fast_food_truck_show_first_caps = get_theme_mod('fast_food_truck_show_first_caps', 'false');
	if($fast_food_truck_show_first_caps == 'true' ){
	$fast_food_truck_custom_css .='.blog-section .mainbox .new-text p:nth-of-type(1)::first-letter{';
	$fast_food_truck_custom_css .=' font-size: 55px; font-weight: 600;';
	$fast_food_truck_custom_css .=' margin-right: 6px;';
	$fast_food_truck_custom_css .=' line-height: 1;';
	$fast_food_truck_custom_css .='}';
	}elseif($fast_food_truck_show_first_caps == 'false' ){
	$fast_food_truck_custom_css .='.blog-section .mainbox .new-text p:nth-of-type(1)::first-letter {';
	$fast_food_truck_custom_css .='display: none;';
	$fast_food_truck_custom_css .='}';
	}

	/*-------------- Post Button  -------------------*/

	$fast_food_truck_btn_font_size_option = get_theme_mod('fast_food_truck_btn_font_size_option');
	$fast_food_truck_custom_css .='.postbtn a{';
		$fast_food_truck_custom_css .='font-size: '.esc_attr($fast_food_truck_btn_font_size_option).'px !important;';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_theme_lay = get_theme_mod( 'fast_food_truck_button_text_tranform','Uppercase');
    if($fast_food_truck_theme_lay == 'Uppercase'){
		$fast_food_truck_custom_css .='.postbtn a{';
			$fast_food_truck_custom_css .='text-transform: uppercase;';
		$fast_food_truck_custom_css .='}';
	}else if($fast_food_truck_theme_lay == 'Lowercase'){
		$fast_food_truck_custom_css .='.postbtn a{';
			$fast_food_truck_custom_css .='text-transform: lowercase;';
		$fast_food_truck_custom_css .='}';
	}
	else if($fast_food_truck_theme_lay == 'Capitalize'){
		$fast_food_truck_custom_css .='.postbtn a{';
			$fast_food_truck_custom_css .='text-transform: capitalize;';
		$fast_food_truck_custom_css .='}';
	}

	// button font weight
	$fast_food_truck_button_font_weight = get_theme_mod( 'fast_food_truck_button_font_weight','600');
	if($fast_food_truck_button_font_weight != ''){
		$fast_food_truck_custom_css .='.postbtn a{';
			$fast_food_truck_custom_css .='font-weight: '.esc_attr($fast_food_truck_button_font_weight).';';
		$fast_food_truck_custom_css .='}';
	}

	$fast_food_truck_post_button_padding_top = get_theme_mod('fast_food_truck_post_button_padding_top');
	$fast_food_truck_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$fast_food_truck_custom_css .='padding-top: '.esc_attr($fast_food_truck_post_button_padding_top).'px !important; padding-bottom: '.esc_attr($fast_food_truck_post_button_padding_top).'px !important;';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_post_button_padding_right = get_theme_mod('fast_food_truck_post_button_padding_right');
	$fast_food_truck_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$fast_food_truck_custom_css .='padding-left: '.esc_attr($fast_food_truck_post_button_padding_right).'px !important; padding-right: '.esc_attr($fast_food_truck_post_button_padding_right).'px !important;';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_post_button_border_radius = get_theme_mod('fast_food_truck_post_button_border_radius');
	$fast_food_truck_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$fast_food_truck_custom_css .='border-radius: '.esc_attr($fast_food_truck_post_button_border_radius).'px !important;';
	$fast_food_truck_custom_css .='}';

	// button letter spacing
	$fast_food_truck_button_letter_spacing = get_theme_mod('fast_food_truck_button_letter_spacing', '0');
	$fast_food_truck_custom_css .='.postbtn a {';
		$fast_food_truck_custom_css .='letter-spacing: '.esc_attr($fast_food_truck_button_letter_spacing).'px;';
	$fast_food_truck_custom_css .='}';		

	$fast_food_truck_post_comment_enable = get_theme_mod('fast_food_truck_post_comment_enable',true);
	if($fast_food_truck_post_comment_enable == false){
		$fast_food_truck_custom_css .='#comments{';
			$fast_food_truck_custom_css .='display: none;';
		$fast_food_truck_custom_css .='}';
	}

	/*----------- Preloader Color Option  ----------------*/
	$fast_food_truck_preloader_bg_color_option = get_theme_mod('fast_food_truck_preloader_bg_color_option');
	$fast_food_truck_preloader_icon_color_option = get_theme_mod('fast_food_truck_preloader_icon_color_option');
	$fast_food_truck_custom_css .='.frame{';
		$fast_food_truck_custom_css .='background-color: '.esc_attr($fast_food_truck_preloader_bg_color_option).';';
	$fast_food_truck_custom_css .='}';
	$fast_food_truck_custom_css .='.dot-1,.dot-2,.dot-3{';
		$fast_food_truck_custom_css .='background-color: '.esc_attr($fast_food_truck_preloader_icon_color_option).';';
	$fast_food_truck_custom_css .='}';

	// preloader type
	$fast_food_truck_theme_lay = get_theme_mod( 'fast_food_truck_preloader_type','First Preloader Type');
    if($fast_food_truck_theme_lay == 'First Preloader Type'){
		$fast_food_truck_custom_css .='.dot-1, .dot-2, .dot-3{';
			$fast_food_truck_custom_css .='';
		$fast_food_truck_custom_css .='}';
	}else if($fast_food_truck_theme_lay == 'Second Preloader Type'){
		$fast_food_truck_custom_css .='.dot-1, .dot-2, .dot-3{';
			$fast_food_truck_custom_css .='border-radius:0;';
		$fast_food_truck_custom_css .='}';
	}

    // preloader background image
	$fast_food_truck_preloader_bg_img = get_theme_mod('fast_food_truck_preloader_bg_img');
	if($fast_food_truck_preloader_bg_img != false){
		$fast_food_truck_custom_css .='.frame {';
			$fast_food_truck_custom_css .='background: url('.esc_attr($fast_food_truck_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$fast_food_truck_custom_css .='}';
	}	

	/*------------------ Skin Option  -------------------*/
	$fast_food_truck_theme_lay = get_theme_mod( 'fast_food_truck_background_skin','Without Background');
    if($fast_food_truck_theme_lay == 'With Background'){
		$fast_food_truck_custom_css .='.inner-service,#sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin{';
			$fast_food_truck_custom_css .='background-color: #F6F6F6; padding:20px;';
		$fast_food_truck_custom_css .='}';
		$fast_food_truck_custom_css .='.login-box a{';
			$fast_food_truck_custom_css .='background-color: #fff;';
		$fast_food_truck_custom_css .='}';
	}else if($fast_food_truck_theme_lay == 'Without Background'){
		$fast_food_truck_custom_css .='{';
			$fast_food_truck_custom_css .='background-color: transparent;';
		$fast_food_truck_custom_css .='}';
	}

	/*-------------- Woocommerce Button  -------------------*/
	$fast_food_truck_woocommerce_button_padding_top = get_theme_mod('fast_food_truck_woocommerce_button_padding_top',12);
	$fast_food_truck_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$fast_food_truck_custom_css .='padding-top: '.esc_attr($fast_food_truck_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($fast_food_truck_woocommerce_button_padding_top).'px;';
	$fast_food_truck_custom_css .='}';
	

	$fast_food_truck_woocommerce_button_padding_right = get_theme_mod('fast_food_truck_woocommerce_button_padding_right',15);
	$fast_food_truck_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$fast_food_truck_custom_css .='padding-left: '.esc_attr($fast_food_truck_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($fast_food_truck_woocommerce_button_padding_right).'px;';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_woocommerce_button_border_radius = get_theme_mod('fast_food_truck_woocommerce_button_border_radius',3);
	$fast_food_truck_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce a.added_to_cart{';
		$fast_food_truck_custom_css .='border-radius: '.esc_attr($fast_food_truck_woocommerce_button_border_radius).'px;';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_related_product_enable = get_theme_mod('fast_food_truck_related_product_enable',true);
	if($fast_food_truck_related_product_enable == false){
		$fast_food_truck_custom_css .='.related.products{';
			$fast_food_truck_custom_css .='display: none;';
		$fast_food_truck_custom_css .='}';
	}

	$fast_food_truck_woocommerce_product_border_enable = get_theme_mod('fast_food_truck_woocommerce_product_border_enable',false);
	if($fast_food_truck_woocommerce_product_border_enable == false){
		$fast_food_truck_custom_css .='.products li{';
			$fast_food_truck_custom_css .='border: none;';
		$fast_food_truck_custom_css .='}';
	}else if($fast_food_truck_woocommerce_product_border_enable == true){
		$fast_food_truck_custom_css .='.products li{';
			$fast_food_truck_custom_css .='border: 1px solid #ccc;';
		$fast_food_truck_custom_css .='}';
	}

	$fast_food_truck_woocommerce_product_padding_top = get_theme_mod('fast_food_truck_woocommerce_product_padding_top',0);
	$fast_food_truck_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$fast_food_truck_custom_css .='padding-top: '.esc_attr($fast_food_truck_woocommerce_product_padding_top).'px; padding-bottom: '.esc_attr($fast_food_truck_woocommerce_product_padding_top).'px;';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_woocommerce_product_padding_right = get_theme_mod('fast_food_truck_woocommerce_product_padding_right',0);
	$fast_food_truck_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$fast_food_truck_custom_css .='padding-left: '.esc_attr($fast_food_truck_woocommerce_product_padding_right).'px; padding-right: '.esc_attr($fast_food_truck_woocommerce_product_padding_right).'px;';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_woocommerce_product_border_radius = get_theme_mod('fast_food_truck_woocommerce_product_border_radius');
	$fast_food_truck_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$fast_food_truck_custom_css .='border-radius: '.esc_attr($fast_food_truck_woocommerce_product_border_radius).'px;';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_woocommerce_product_box_shadow = get_theme_mod('fast_food_truck_woocommerce_product_box_shadow');
	$fast_food_truck_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$fast_food_truck_custom_css .='box-shadow: '.esc_attr($fast_food_truck_woocommerce_product_box_shadow).'px '.esc_attr($fast_food_truck_woocommerce_product_box_shadow).'px '.esc_attr($fast_food_truck_woocommerce_product_box_shadow).'px #ddd;';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_woo_product_sale_top_bottom_padding = get_theme_mod('fast_food_truck_woo_product_sale_top_bottom_padding', 0);
	$fast_food_truck_woo_product_sale_left_right_padding = get_theme_mod('fast_food_truck_woo_product_sale_left_right_padding', 0);
	$fast_food_truck_custom_css .='.woocommerce span.onsale{';
		$fast_food_truck_custom_css .='padding-top: '.esc_attr($fast_food_truck_woo_product_sale_top_bottom_padding).'px; padding-bottom: '.esc_attr($fast_food_truck_woo_product_sale_top_bottom_padding).'px; padding-left: '.esc_attr($fast_food_truck_woo_product_sale_left_right_padding).'px; padding-right: '.esc_attr($fast_food_truck_woo_product_sale_left_right_padding).'px; display:inline-block;';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_woo_product_sale_border_radius = get_theme_mod('fast_food_truck_woo_product_sale_border_radius',3);
	$fast_food_truck_custom_css .='.woocommerce span.onsale {';
		$fast_food_truck_custom_css .='border-radius: '.esc_attr($fast_food_truck_woo_product_sale_border_radius).'px;';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_woo_product_sale_position = get_theme_mod('fast_food_truck_woo_product_sale_position', 'Left');
	if($fast_food_truck_woo_product_sale_position == 'Right' ){
		$fast_food_truck_custom_css .='.woocommerce ul.products li.product .onsale{';
			$fast_food_truck_custom_css .=' left:auto; right:0;';
		$fast_food_truck_custom_css .='}';
	}elseif($fast_food_truck_woo_product_sale_position == 'Left' ){
		$fast_food_truck_custom_css .='.woocommerce ul.products li.product .onsale{';
			$fast_food_truck_custom_css .=' left:0; right:auto;';
		$fast_food_truck_custom_css .='}';
	}

	$fast_food_truck_wooproduct_sale_font_size = get_theme_mod('fast_food_truck_wooproduct_sale_font_size',14);
	$fast_food_truck_custom_css .='.woocommerce span.onsale{';
		$fast_food_truck_custom_css .='font-size: '.esc_attr($fast_food_truck_wooproduct_sale_font_size).'px;';
	$fast_food_truck_custom_css .='}';

	// Responsive Media
	$fast_food_truck_post_date = get_theme_mod( 'fast_food_truck_display_post_date',true);
	if($fast_food_truck_post_date == true && get_theme_mod( 'fast_food_truck_metafields_date',true) != true){
    	$fast_food_truck_custom_css .='.metabox .entry-date{';
			$fast_food_truck_custom_css .='display:none;';
		$fast_food_truck_custom_css .='} ';
	}
    if($fast_food_truck_post_date == true){
    	$fast_food_truck_custom_css .='@media screen and (max-width:575px) {';
		$fast_food_truck_custom_css .='.metabox .entry-date{';
			$fast_food_truck_custom_css .='display:inline-block;';
		$fast_food_truck_custom_css .='} }';
	}else if($fast_food_truck_post_date == false){
		$fast_food_truck_custom_css .='@media screen and (max-width:575px){';
		$fast_food_truck_custom_css .='.metabox .entry-date{';
			$fast_food_truck_custom_css .='display:none;';
		$fast_food_truck_custom_css .='} }';
	}

	$fast_food_truck_post_author = get_theme_mod( 'fast_food_truck_display_post_author',true);
	if($fast_food_truck_post_author == true && get_theme_mod( 'fast_food_truck_metafields_author',true) != true){
    	$fast_food_truck_custom_css .='.metabox .entry-author{';
			$fast_food_truck_custom_css .='display:none;';
		$fast_food_truck_custom_css .='} ';
	}
    if($fast_food_truck_post_author == true){
    	$fast_food_truck_custom_css .='@media screen and (max-width:575px) {';
		$fast_food_truck_custom_css .='.metabox .entry-author{';
			$fast_food_truck_custom_css .='display:inline-block;';
		$fast_food_truck_custom_css .='} }';
	}else if($fast_food_truck_post_author == false){
		$fast_food_truck_custom_css .='@media screen and (max-width:575px){';
		$fast_food_truck_custom_css .='.metabox .entry-author{';
			$fast_food_truck_custom_css .='display:none;';
		$fast_food_truck_custom_css .='} }';
	}

	$fast_food_truck_post_comment = get_theme_mod( 'fast_food_truck_display_post_comment',true);
	if($fast_food_truck_post_comment == true && get_theme_mod( 'fast_food_truck_metafields_comment',true) != true){
    	$fast_food_truck_custom_css .='.metabox .entry-comments{';
			$fast_food_truck_custom_css .='display:none;';
		$fast_food_truck_custom_css .='} ';
	}
    if($fast_food_truck_post_comment == true){
    	$fast_food_truck_custom_css .='@media screen and (max-width:575px) {';
		$fast_food_truck_custom_css .='.metabox .entry-comments{';
			$fast_food_truck_custom_css .='display:inline-block;';
		$fast_food_truck_custom_css .='} }';
	}else if($fast_food_truck_post_comment == false){
		$fast_food_truck_custom_css .='@media screen and (max-width:575px){';
		$fast_food_truck_custom_css .='.metabox .entry-comments{';
			$fast_food_truck_custom_css .='display:none;';
		$fast_food_truck_custom_css .='} }';
	}

	$fast_food_truck_post_time = get_theme_mod( 'fast_food_truck_display_post_time',true);
	if($fast_food_truck_post_time == true && get_theme_mod( 'fast_food_truck_metafields_time',true) != true){
    	$fast_food_truck_custom_css .='.metabox .entry-time{';
			$fast_food_truck_custom_css .='display:none;';
		$fast_food_truck_custom_css .='} ';
	}
    if($fast_food_truck_post_time == true){
    	$fast_food_truck_custom_css .='@media screen and (max-width:575px) {';
		$fast_food_truck_custom_css .='.metabox .entry-time{';
			$fast_food_truck_custom_css .='display:inline-block;';
		$fast_food_truck_custom_css .='} }';
	}else if($fast_food_truck_post_time == false){
		$fast_food_truck_custom_css .='@media screen and (max-width:575px){';
		$fast_food_truck_custom_css .='.metabox .entry-time{';
			$fast_food_truck_custom_css .='display:none;';
		$fast_food_truck_custom_css .='} }';
	}

	if($fast_food_truck_post_date == false && $fast_food_truck_post_author == false && $fast_food_truck_post_comment == false && $fast_food_truck_post_time == false){
		$fast_food_truck_custom_css .='@media screen and (max-width:575px) {';
    	$fast_food_truck_custom_css .='.metabox {';
			$fast_food_truck_custom_css .='display:none;';
		$fast_food_truck_custom_css .='} }';
	}

	$fast_food_truck_metafields_date = get_theme_mod( 'fast_food_truck_metafields_date',true);
	$fast_food_truck_metafields_author = get_theme_mod( 'fast_food_truck_metafields_author',true);
	$fast_food_truck_metafields_comment = get_theme_mod( 'fast_food_truck_metafields_comment',true);
	$fast_food_truck_metafields_time = get_theme_mod( 'fast_food_truck_metafields_time',true);
	if($fast_food_truck_metafields_date == false && $fast_food_truck_metafields_author == false && $fast_food_truck_metafields_comment == false && $fast_food_truck_metafields_time == false){
		$fast_food_truck_custom_css .='@media screen and (min-width:576px) {';
    	$fast_food_truck_custom_css .='.metabox {';
			$fast_food_truck_custom_css .='display:none;';
		$fast_food_truck_custom_css .='} }';
	}

	$fast_food_truck_sidebar = get_theme_mod( 'fast_food_truck_display_sidebar',true);
    if($fast_food_truck_sidebar == true){
    	$fast_food_truck_custom_css .='@media screen and (max-width:575px) {';
		$fast_food_truck_custom_css .='#sidebar{';
			$fast_food_truck_custom_css .='display:block;';
		$fast_food_truck_custom_css .='} }';
	}else if($fast_food_truck_sidebar == false){
		$fast_food_truck_custom_css .='@media screen and (max-width:575px) {';
		$fast_food_truck_custom_css .='#sidebar{';
			$fast_food_truck_custom_css .='display:none;';
		$fast_food_truck_custom_css .='} }';
	}

	$fast_food_truck_preloader = get_theme_mod( 'fast_food_truck_display_preloader',false);
	if($fast_food_truck_preloader == true && get_theme_mod( 'fast_food_truck_preloader',false) == false){
		$fast_food_truck_custom_css .='@media screen and (min-width:575px) {';
    	$fast_food_truck_custom_css .='.frame{';
			$fast_food_truck_custom_css .=' visibility: hidden;';
		$fast_food_truck_custom_css .='} }';
	}
    if($fast_food_truck_preloader == true){
    	$fast_food_truck_custom_css .='@media screen and (max-width:575px) {';
		$fast_food_truck_custom_css .='.frame{';
			$fast_food_truck_custom_css .='visibility:visible;';
		$fast_food_truck_custom_css .='} }';
	}else if($fast_food_truck_preloader == false){
		$fast_food_truck_custom_css .='@media screen and (max-width:575px){';
		$fast_food_truck_custom_css .='.frame{';
			$fast_food_truck_custom_css .='visibility: hidden;';
		$fast_food_truck_custom_css .='} }';
	}

	$fast_food_truck_search = get_theme_mod( 'fast_food_truck_display_search_category',true);
	if($fast_food_truck_search == true && get_theme_mod( 'fast_food_truck_search_enable_disable',true) != true){
    	$fast_food_truck_custom_css .='.search-cat-box{';
			$fast_food_truck_custom_css .='display:none;';
		$fast_food_truck_custom_css .='} ';
	}
    if($fast_food_truck_search == true){
    	$fast_food_truck_custom_css .='@media screen and (max-width:575px) {';
		$fast_food_truck_custom_css .='.search-cat-box{';
			$fast_food_truck_custom_css .='display:block;';
		$fast_food_truck_custom_css .='} }';
	}else if($fast_food_truck_search == false){
		$fast_food_truck_custom_css .='@media screen and (max-width:575px){';
		$fast_food_truck_custom_css .='.search-cat-box{';
			$fast_food_truck_custom_css .='display:none;';
		$fast_food_truck_custom_css .='} }';
	}

	$fast_food_truck_myaccount = get_theme_mod( 'fast_food_truck_display_myaccount',true);
	if($fast_food_truck_myaccount == true && get_theme_mod( 'fast_food_truck_myaccount_enable_disable',true) != true){
    	$fast_food_truck_custom_css .='.login-box{';
			$fast_food_truck_custom_css .='display:none;';
		$fast_food_truck_custom_css .='} ';
	}
    if($fast_food_truck_myaccount == true){
    	$fast_food_truck_custom_css .='@media screen and (max-width:575px) {';
		$fast_food_truck_custom_css .='.login-box{';
			$fast_food_truck_custom_css .='display:block;';
		$fast_food_truck_custom_css .='} }';
	}else if($fast_food_truck_myaccount == false){
		$fast_food_truck_custom_css .='@media screen and (max-width:575px){';
		$fast_food_truck_custom_css .='.login-box{';
			$fast_food_truck_custom_css .='display:none;';
		$fast_food_truck_custom_css .='} }';
	}

	// menu settings
	$fast_food_truck_menu_font_size_option = get_theme_mod('fast_food_truck_menu_font_size_option');
	$fast_food_truck_custom_css .='.primary-navigation ul li a{';
		$fast_food_truck_custom_css .='font-size: '.esc_attr($fast_food_truck_menu_font_size_option).'px;';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_menu_padding = get_theme_mod('fast_food_truck_menu_padding');
	$fast_food_truck_custom_css .='.primary-navigation ul li a{';
		$fast_food_truck_custom_css .='padding: '.esc_attr($fast_food_truck_menu_padding).'px;';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_theme_lay = get_theme_mod( 'fast_food_truck_text_tranform_menu','Capitalize');
    if($fast_food_truck_theme_lay == 'Uppercase'){
		$fast_food_truck_custom_css .='.primary-navigation ul li a{';
			$fast_food_truck_custom_css .='text-transform: uppercase;';
		$fast_food_truck_custom_css .='}';
	}else if($fast_food_truck_theme_lay == 'Lowercase'){
		$fast_food_truck_custom_css .='.primary-navigation ul li a{';
			$fast_food_truck_custom_css .='text-transform: lowercase;';
		$fast_food_truck_custom_css .='}';
	}
	else if($fast_food_truck_theme_lay == 'Capitalize'){
		$fast_food_truck_custom_css .='.primary-navigation ul li a{';
			$fast_food_truck_custom_css .='text-transform: capitalize;';
		$fast_food_truck_custom_css .='}';
	}

	//  comment form width
	$fast_food_truck_comment_form_width = get_theme_mod( 'fast_food_truck_comment_form_width');
	$fast_food_truck_custom_css .='#comments textarea{';
		$fast_food_truck_custom_css .='width: '.esc_attr($fast_food_truck_comment_form_width).'%;';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_title_comment_form = get_theme_mod('fast_food_truck_title_comment_form', 'Leave a Reply');
	if($fast_food_truck_title_comment_form == ''){
		$fast_food_truck_custom_css .='#comments h2#reply-title {';
			$fast_food_truck_custom_css .='display: none;';
		$fast_food_truck_custom_css .='}';
	}

	$fast_food_truck_comment_form_button_content = get_theme_mod('fast_food_truck_comment_form_button_content', 'Post Comment');
	if($fast_food_truck_comment_form_button_content == ''){
		$fast_food_truck_custom_css .='#comments p.form-submit {';
			$fast_food_truck_custom_css .='display: none;';
		$fast_food_truck_custom_css .='}';
	}

	// featured image setting
	$fast_food_truck_image_border_radius = get_theme_mod('fast_food_truck_image_border_radius', 0);
	$fast_food_truck_custom_css .='.box-image img, .content_box img{';
		$fast_food_truck_custom_css .='border-radius: '.esc_attr($fast_food_truck_image_border_radius).'%;';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_image_box_shadow = get_theme_mod('fast_food_truck_image_box_shadow',0);
	$fast_food_truck_custom_css .='.box-image img, .content_box img{';
		$fast_food_truck_custom_css .='box-shadow: '.esc_attr($fast_food_truck_image_box_shadow).'px '.esc_attr($fast_food_truck_image_box_shadow).'px '.esc_attr($fast_food_truck_image_box_shadow).'px #b5b5b5;';
	$fast_food_truck_custom_css .='}';

	// Post Block
	$fast_food_truck_post_block_option = get_theme_mod( 'fast_food_truck_post_block_option','By Block');
    if($fast_food_truck_post_block_option == 'By Without Block'){
		$fast_food_truck_custom_css .='.gridbox .inner-service, .related-inner-box, .mainbox-post, .layout2, .layout1, .post_format-post-format-video,.post_format-post-format-image,.post_format-post-format-audio, .post_format-post-format-gallery, .mainbox{';
			$fast_food_truck_custom_css .='border:none; margin:30px 0;';
		$fast_food_truck_custom_css .='}';
	}

	// post image 
	$fast_food_truck_post_featured_color = get_theme_mod('fast_food_truck_post_featured_color', '#BE2424');
	$fast_food_truck_post_featured_image = get_theme_mod('fast_food_truck_post_featured_image','Image');
	if($fast_food_truck_post_featured_image == 'Color'){
		$fast_food_truck_custom_css .='.post-color{';
			$fast_food_truck_custom_css .='background-color: '.esc_attr($fast_food_truck_post_featured_color).';';
		$fast_food_truck_custom_css .='}';
	}

	// featured image dimention
	$fast_food_truck_post_featured_image_dimention = get_theme_mod('fast_food_truck_post_featured_image_dimention', 'Default');
	$fast_food_truck_post_featured_image_custom_width = get_theme_mod('fast_food_truck_post_featured_image_custom_width');
	$fast_food_truck_post_featured_image_custom_height = get_theme_mod('fast_food_truck_post_featured_image_custom_height');
	if($fast_food_truck_post_featured_image_dimention == 'Custom'){
		$fast_food_truck_custom_css .='.box-image img{';
			$fast_food_truck_custom_css .='width: '.esc_attr($fast_food_truck_post_featured_image_custom_width).'px; height: '.esc_attr($fast_food_truck_post_featured_image_custom_height).'px;';
		$fast_food_truck_custom_css .='}';
	}

	// featured image dimention
	$fast_food_truck_custom_post_color_width = get_theme_mod('fast_food_truck_custom_post_color_width');
	$fast_food_truck_custom_post_color_height = get_theme_mod('fast_food_truck_custom_post_color_height');
	if($fast_food_truck_post_featured_image == 'Color'){
		$fast_food_truck_custom_css .='.post-color{';
			$fast_food_truck_custom_css .='width: '.esc_attr($fast_food_truck_custom_post_color_width).'px; height: '.esc_attr($fast_food_truck_custom_post_color_height).'px;';
		$fast_food_truck_custom_css .='}';
	}

	// site title font size
	$fast_food_truck_site_title_font_size = get_theme_mod('fast_food_truck_site_title_font_size', 25);
	$fast_food_truck_custom_css .='.logo .site-title{';
	$fast_food_truck_custom_css .='font-size: '.esc_attr($fast_food_truck_site_title_font_size).'px;';
	$fast_food_truck_custom_css .='}';

	// site tagline font size
	$fast_food_truck_site_tagline_font_size = get_theme_mod('fast_food_truck_site_tagline_font_size', 13);
	$fast_food_truck_custom_css .='p.site-description{';
	$fast_food_truck_custom_css .='font-size: '.esc_attr($fast_food_truck_site_tagline_font_size).'px;';
	$fast_food_truck_custom_css .='}';

	// woocommerce Product Navigation
	$fast_food_truck_wooproducts_nav = get_theme_mod('fast_food_truck_wooproducts_nav', 'Yes');
	if($fast_food_truck_wooproducts_nav == 'No'){
		$fast_food_truck_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$fast_food_truck_custom_css .='display: none;';
		$fast_food_truck_custom_css .='}';
	}

	// site title color
	$fast_food_truck_site_title_color = get_theme_mod('fast_food_truck_site_title_color');
	$fast_food_truck_custom_css .='.site-title a{';
		$fast_food_truck_custom_css .='color: '.esc_attr($fast_food_truck_site_title_color).' !important;';
	$fast_food_truck_custom_css .='}';

	// site tagline color
	$fast_food_truck_site_tagline_color = get_theme_mod('fast_food_truck_site_tagline_color');
	$fast_food_truck_custom_css .='.site-description{';
		$fast_food_truck_custom_css .='color: '.esc_attr($fast_food_truck_site_tagline_color).' !important;';
	$fast_food_truck_custom_css .='}';
	
	// site toggle button color
	$fast_food_truck_toggle_button_color = get_theme_mod('fast_food_truck_toggle_button_color');
	$fast_food_truck_custom_css .='.toggle-menu i{';
		$fast_food_truck_custom_css .='color: '.esc_attr($fast_food_truck_toggle_button_color).' !important;';
	$fast_food_truck_custom_css .='}';

	//Copyright text color
	$fast_food_truck_copyright_text_color = get_theme_mod('fast_food_truck_copyright_text_color');
	$fast_food_truck_custom_css .='.copyright-wrapper, .copyright-wrapper p a{';
		$fast_food_truck_custom_css .='color: '.esc_attr($fast_food_truck_copyright_text_color).';';
	$fast_food_truck_custom_css .='}';

	//Copyright text hover color
	$fast_food_truck_copyright_text_hover_color = get_theme_mod('fast_food_truck_copyright_text_hover_color');
	$fast_food_truck_custom_css .='.copyright-wrapper, .copyright-wrapper p a:hover{';
		$fast_food_truck_custom_css .='color: '.esc_attr($fast_food_truck_copyright_text_hover_color).';';
	$fast_food_truck_custom_css .='}';	

	//Copyright background css
	$fast_food_truck_copyright_text_background = get_theme_mod('fast_food_truck_copyright_text_background');
	$fast_food_truck_custom_css .='.copyright-wrapper{';
		$fast_food_truck_custom_css .='background-color: '.esc_attr($fast_food_truck_copyright_text_background).';';
	$fast_food_truck_custom_css .='}';

	// menu font weight
	$fast_food_truck_font_weight_option_menu = get_theme_mod( 'fast_food_truck_font_weight_option_menu');
	if($fast_food_truck_font_weight_option_menu != ''){
		$fast_food_truck_custom_css .='.primary-navigation ul li a{';
			$fast_food_truck_custom_css .='font-weight: '.esc_attr($fast_food_truck_font_weight_option_menu).'!important;';
		$fast_food_truck_custom_css .='}';
	}

	// Menu Item Hover Style	
	$fast_food_truck_menus_item = get_theme_mod( 'fast_food_truck_menus_item_style','None');
	if($fast_food_truck_menus_item == 'None'){
		$fast_food_truck_custom_css .='.primary-navigation ul li a{';
			$fast_food_truck_custom_css .='';
		$fast_food_truck_custom_css .='}';
	}else if($fast_food_truck_menus_item == 'Zoom In'){
		$fast_food_truck_custom_css .='.primary-navigation ul li a:hover{';
			$fast_food_truck_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important;';
		$fast_food_truck_custom_css .='}';
	}

	// menu color
	$fast_food_truck_menu_color = get_theme_mod('fast_food_truck_menu_color');

	$fast_food_truck_custom_css .='.primary-navigation a, .primary-navigation ul li a, #site-navigation li a{';
			$fast_food_truck_custom_css .='color: '.esc_attr($fast_food_truck_menu_color).' !important;';
	$fast_food_truck_custom_css .='}';

// Sub menu color
	$fast_food_truck_sub_menu_color = get_theme_mod('fast_food_truck_sub_menu_color');

	$fast_food_truck_custom_css .='.primary-navigation ul.sub-menu a, .primary-navigation ul.sub-menu li a, #site-navigation ul.sub-menu li a, .primary-navigation ul.children a, .primary-navigation ul.children li a, #site-navigation ul.children li a{';
			$fast_food_truck_custom_css .='color: '.esc_attr($fast_food_truck_sub_menu_color).' !important;';
	$fast_food_truck_custom_css .='}';

// menu hover color
	$fast_food_truck_menu_hover_color = get_theme_mod('fast_food_truck_menu_hover_color');

	$fast_food_truck_custom_css .='.primary-navigation a:hover, .primary-navigation ul li a:hover, .primary-navigation .current_page_item > a:hover, .primary-navigation .current-menu-item > a:hover, .primary-navigation .current_page_ancestor > a:hover, #site-navigation li a:hover{';
			$fast_food_truck_custom_css .='color: '.esc_attr($fast_food_truck_menu_hover_color).' !important;';
	$fast_food_truck_custom_css .='}';

// Sub menu hover color
	$fast_food_truck_sub_menu_hover_color = get_theme_mod('fast_food_truck_sub_menu_hover_color');

	$fast_food_truck_custom_css .='.primary-navigation ul.sub-menu a:hover, .primary-navigation ul.sub-menu li a:hover, .primary-navigation .current_page_item > a:hover, .primary-navigation .current-menu-item > a:hover, .primary-navigation .current_page_ancestor > a:hover, #site-navigation ul.sub-menu li a:hover, .primary-navigation ul.children a:hover, .primary-navigation ul.children li a:hover, #site-navigation ul.children li a:hover{';
			$fast_food_truck_custom_css .='color: '.esc_attr($fast_food_truck_sub_menu_hover_color).' !important;';
	$fast_food_truck_custom_css .='}';	

	/*----------------- Slider -----------------*/

	$fast_food_truck_left_banner_bg_color_option = get_theme_mod('fast_food_truck_left_banner_bg_color_option');
	$fast_food_truck_custom_css .='#banner .left-banner{';
		$fast_food_truck_custom_css .='background-color: '.esc_attr($fast_food_truck_left_banner_bg_color_option).';';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_right_banner_bg_color_option = get_theme_mod('fast_food_truck_right_banner_bg_color_option');
	$fast_food_truck_custom_css .='#banner .right-banner{';
		$fast_food_truck_custom_css .='background-color: '.esc_attr($fast_food_truck_right_banner_bg_color_option).';';
	$fast_food_truck_custom_css .='}';

	$fast_food_truck_slider_hide = get_theme_mod('fast_food_truck_slider_hide');
	if($fast_food_truck_slider_hide == false){
		$fast_food_truck_custom_css .='.page-template-home-page #header{';
			$fast_food_truck_custom_css .='position: static; background-color: #F1AA52;';
		$fast_food_truck_custom_css .='}';
	}

	//slider button icon bg color
	$fast_food_truck_slider_btn_iconbg_color = get_theme_mod('fast_food_truck_slider_btn_iconbg_color');
	$fast_food_truck_custom_css .='#slider .read-more i{';
		$fast_food_truck_custom_css .='background-color: '.esc_attr($fast_food_truck_slider_btn_iconbg_color).';';
	$fast_food_truck_custom_css .='}';

	/*--------------------------- Slider Opacity -------------------*/
	$fast_food_truck_slider_layout = get_theme_mod( 'fast_food_truck_slider_opacity_color','0.9');
	if($fast_food_truck_slider_layout == '0'){
		$fast_food_truck_custom_css .='#banner .banner-img img{';
			$fast_food_truck_custom_css .='opacity:0';
		$fast_food_truck_custom_css .='}';
		}else if($fast_food_truck_slider_layout == '0.1'){
		$fast_food_truck_custom_css .='#banner .banner-img img{';
			$fast_food_truck_custom_css .='opacity:0.1';
		$fast_food_truck_custom_css .='}';
		}else if($fast_food_truck_slider_layout == '0.2'){
		$fast_food_truck_custom_css .='#banner .banner-img img{';
			$fast_food_truck_custom_css .='opacity:0.2';
		$fast_food_truck_custom_css .='}';
		}else if($fast_food_truck_slider_layout == '0.3'){
		$fast_food_truck_custom_css .='#banner .banner-img img{';
			$fast_food_truck_custom_css .='opacity:0.3';
		$fast_food_truck_custom_css .='}';
		}else if($fast_food_truck_slider_layout == '0.4'){
		$fast_food_truck_custom_css .='#banner .banner-img img{';
			$fast_food_truck_custom_css .='opacity:0.4';
		$fast_food_truck_custom_css .='}';
		}else if($fast_food_truck_slider_layout == '0.5'){
		$fast_food_truck_custom_css .='#banner .banner-img img{';
			$fast_food_truck_custom_css .='opacity:0.5';
		$fast_food_truck_custom_css .='}';
		}else if($fast_food_truck_slider_layout == '0.6'){
		$fast_food_truck_custom_css .='#banner .banner-img img{';
			$fast_food_truck_custom_css .='opacity:0.6';
		$fast_food_truck_custom_css .='}';
		}else if($fast_food_truck_slider_layout == '0.7'){
		$fast_food_truck_custom_css .='#banner .banner-img img{';
			$fast_food_truck_custom_css .='opacity:0.7';
		$fast_food_truck_custom_css .='}';
		}else if($fast_food_truck_slider_layout == '0.8'){
		$fast_food_truck_custom_css .='#banner .banner-img img{';
			$fast_food_truck_custom_css .='opacity:0.8';
		$fast_food_truck_custom_css .='}';
		}else if($fast_food_truck_slider_layout == '0.9'){
		$fast_food_truck_custom_css .='#banner .banner-img img{';
			$fast_food_truck_custom_css .='opacity:0.9';
		$fast_food_truck_custom_css .='}';
		}	