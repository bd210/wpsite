<?php

$tea_cafe_delight_first_color = get_theme_mod('tea_cafe_delight_first_color');
$tea_cafe_delight_second_color = get_theme_mod('tea_cafe_delight_second_color');
$tea_cafe_delight_third_color = get_theme_mod('tea_cafe_delight_third_color');
$tea_cafe_delight_color_scheme_css = '';

/*------------------ Global First Color -----------*/
$tea_cafe_delight_color_scheme_css .='.header, .service-content {';
  $tea_cafe_delight_color_scheme_css .='background-color: '.esc_attr($tea_cafe_delight_first_color).'!important;';
$tea_cafe_delight_color_scheme_css .='}';

/*------------------ Global Second Color -----------*/
$tea_cafe_delight_color_scheme_css .='.header::-webkit-scrollbar-thumb, .woocommerce ul.products li.product .onsale, .page-links .post-page-numbers.current, .page-links a:hover, .slider-img-color, .postsec-list .search-form input.search-submit, .widget_calendar caption, .widget_calendar #today, span.page-numbers.current, .nav-links .page-numbers:hover, #footer, #sidebar input.search-submit, #footer input.search-submit, form.woocommerce-product-search button, nav.woocommerce-MyAccount-navigation ul li, .site-main .wp-block-button__link{';
  $tea_cafe_delight_color_scheme_css .='background-color: '.esc_attr($tea_cafe_delight_second_color).'!important;';
$tea_cafe_delight_color_scheme_css .='}';

$tea_cafe_delight_color_scheme_css .='.postsec-list .wp-block-button__link, .breadcrumb .current-breadcrumb, .breadcrumb a:hover, span.onsale{';
  $tea_cafe_delight_color_scheme_css .='background: '.esc_attr($tea_cafe_delight_second_color).'!important;';
$tea_cafe_delight_color_scheme_css .='}';

$tea_cafe_delight_color_scheme_css .='.postsec-list .wp-block-button.is-style-outline a, .breadcrumb a, h1.site-title, p.site-title, h1.site-title a, p.site-title a, span.site-description, .postmeta a:hover, .rsvp_button a, #catsliderarea .rsvp_button a, .woocommerce a.added_to_cart,.woocommerce ul.products li.product .button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce a.button, .woocommerce button.button, .woocommerce #respond input#submit, #commentform input#submit, .woocommerce a.added_to_cart,.woocommerce ul.products li.product .button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce a.button, .woocommerce button.button, .woocommerce #respond input#submit, #commentform input#submi, a.wc-block-components-totals-coupon-link,a.components-button.wc-block-components-button.wp-element-button.wc-block-cart__submit-button.contained,
a.wc-block-components-checkout-return-to-cart-button,.wc-block-components-totals-coupon__button.contained,button.wc-block-components-checkout-place-order-button, .main-nav a, .page-links a, .page-links span, #sidebar ul li::before, #sidebar .widget a:hover, #sidebar .widget a:active, .listarticle h2 a, .woocommerce-message::before, a,  .site-main .wp-block-button__link:hover  {';
  $tea_cafe_delight_color_scheme_css .='color: '.esc_attr($tea_cafe_delight_second_color).'!important;';
$tea_cafe_delight_color_scheme_css .='}';

$tea_cafe_delight_color_scheme_css .='.postsec-list .wp-block-button.is-style-outline a, .rsvp_button a, .woocommerce a.added_to_cart,.woocommerce ul.products li.product .button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce a.button, .woocommerce button.button, .woocommerce #respond input#submit, #commentform input#submit, a.wc-block-components-totals-coupon-link,a.components-button.wc-block-components-button.wp-element-button.wc-block-cart__submit-button.contained,
a.wc-block-components-checkout-return-to-cart-button,.wc-block-components-totals-coupon__button.contained,button.wc-block-components-checkout-place-order-button, .page-links a, .page-links span,  .site-main .wp-block-button__link:hover   {';
  $tea_cafe_delight_color_scheme_css .='border: 1px solid'.esc_attr($tea_cafe_delight_second_color).'!important;';
$tea_cafe_delight_color_scheme_css .='}';

$tea_cafe_delight_color_scheme_css .='.postsec-list .search-form input.search-submit, #sidebar input[type="text"], #sidebar input[type="search"], #footer input[type="search"], nav.woocommerce-MyAccount-navigation ul li, .woocommerce-message, span.page-numbers.current, .nav-links .page-numbers:hover{';
  $tea_cafe_delight_color_scheme_css .='border-color: '.esc_attr($tea_cafe_delight_second_color).'!important;';
$tea_cafe_delight_color_scheme_css .='}';

$tea_cafe_delight_color_scheme_css .='#sidebar .widget{';
  $tea_cafe_delight_color_scheme_css .='border-bottom: 3px solid'.esc_attr($tea_cafe_delight_second_color).'!important;';
$tea_cafe_delight_color_scheme_css .='}';

$tea_cafe_delight_color_scheme_css .='
@media screen and (max-width:1000px) {
  .sidenav, .toggle-nav button {';
    $tea_cafe_delight_color_scheme_css .='background-color: '.esc_attr($tea_cafe_delight_second_color).' !important;';
$tea_cafe_delight_color_scheme_css .='} }';  

/*------------------ Global Third Color -----------*/
$tea_cafe_delight_color_scheme_css .='.postsec-list .wp-block-button a:hover, 
.site-main .wp-block-button.is-style-outline .wp-block-button__link:not(.has-background):hover, .main-nav a:hover{';
  $tea_cafe_delight_color_scheme_css .='background-color: '.esc_attr($tea_cafe_delight_third_color).'!important;';
$tea_cafe_delight_color_scheme_css .='}';

$tea_cafe_delight_color_scheme_css .='h1.site-title a:hover, p.site-title a:hover, #footer p.site-title a:hover, .social-icons i:hover, #footer .social-icons i:hover, .main-nav ul ul a, .serv-box h2, .meta-feilds i{';
  $tea_cafe_delight_color_scheme_css .='color: '.esc_attr($tea_cafe_delight_third_color).'!important;';
$tea_cafe_delight_color_scheme_css .='}';

$tea_cafe_delight_color_scheme_css .='#button, .rsvp_button a:hover, #catsliderarea .rsvp_button a:hover, .pagemore a:hover, .woocommerce ul.products li.product .button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, #commentform input#submit:hover,.woocommerce a.added_to_cart:hover, button.wc-block-components-checkout-place-order-button:hover,
a.wc-block-components-totals-coupon-link:hover, a.components-button.wc-block-components-button.wp-element-button.wc-block-cart__submit-button.contained:hover,
a.wc-block-components-checkout-return-to-cart-button:hover{';
  $tea_cafe_delight_color_scheme_css .='background: '.esc_attr($tea_cafe_delight_third_color).'!important;';
$tea_cafe_delight_color_scheme_css .='}';

$tea_cafe_delight_color_scheme_css .='.logo, .social-icons{';
  $tea_cafe_delight_color_scheme_css .='border-bottom: 4px solid'.esc_attr($tea_cafe_delight_third_color).'!important;';
$tea_cafe_delight_color_scheme_css .='}';

$tea_cafe_delight_color_scheme_css .='.social-icons, .main-nav li ul{';
  $tea_cafe_delight_color_scheme_css .='border-top: 3px solid'.esc_attr($tea_cafe_delight_third_color).'!important;';
$tea_cafe_delight_color_scheme_css .='}';

$tea_cafe_delight_color_scheme_css .='.social-icons{';
  $tea_cafe_delight_color_scheme_css .='border-top: 4px solid'.esc_attr($tea_cafe_delight_third_color).'!important;';
$tea_cafe_delight_color_scheme_css .='}';

$tea_cafe_delight_color_scheme_css .='.rsvp_button a:hover, #catsliderarea .rsvp_button a:hover, .pagemore a:hover, .woocommerce ul.products li.product .button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, #commentform input#submit:hover,.woocommerce a.added_to_cart:hover{';
  $tea_cafe_delight_color_scheme_css .='border: 1px solid'.esc_attr($tea_cafe_delight_third_color).'!important;';
$tea_cafe_delight_color_scheme_css .='}';

$tea_cafe_delight_color_scheme_css .='.service-content{';
  $tea_cafe_delight_color_scheme_css .='border: 2px dashed'.esc_attr($tea_cafe_delight_third_color).'!important;';
$tea_cafe_delight_color_scheme_css .='}';