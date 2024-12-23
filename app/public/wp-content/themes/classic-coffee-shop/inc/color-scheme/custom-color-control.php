<?php 

$classic_coffee_shop_first_color = get_theme_mod('classic_coffee_shop_first_color');
$classic_coffee_shop_second_color = get_theme_mod('classic_coffee_shop_second_color');
$classic_coffee_shop_color_scheme_css = "";

/*------------------ Global First Color -----------*/

$classic_coffee_shop_color_scheme_css .='.bg-color, #button{';
  $classic_coffee_shop_color_scheme_css .='background: '.esc_attr($classic_coffee_shop_first_color).'!important;';
$classic_coffee_shop_color_scheme_css .='}';

$classic_coffee_shop_color_scheme_css .='#footer h1.site-title a:hover, .slider-box h1 a:hover, h3.product-text a:hover{';
  $classic_coffee_shop_color_scheme_css .='color: '.esc_attr($classic_coffee_shop_first_color).'!important;';
$classic_coffee_shop_color_scheme_css .='}';

/*------------------ Global Second Color -----------*/

$classic_coffee_shop_color_scheme_css .='.rsvp_button a:hover, .pagemore a:hover, .woocommerce ul.products li.product .button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce a.button:hover,
.woocommerce button.button:hover, #commentform input#submit:hover,.woocommerce a.added_to_cart:hover, #product_cat_slider button.owl-dot.active, span.page-numbers.current, .nav-links .page-numbers:hover, #sidebar input.search-submit, #footer input.search-submit, form.woocommerce-product-search button, .widget_calendar caption, .widget_calendar #today, span.onsale, nav.woocommerce-MyAccount-navigation ul li:hover, .breadcrumb .current-breadcrumb, .breadcrumb a:hover, button.wc-block-components-checkout-place-order-button:hover {';
  $classic_coffee_shop_color_scheme_css .='background: '.esc_attr($classic_coffee_shop_second_color).'!important;';
$classic_coffee_shop_color_scheme_css .='}';

$classic_coffee_shop_color_scheme_css .='.site-main .wp-block-button__link, .postsec-list .wp-block-button__link, .header::-webkit-scrollbar-thumb, .page-links .post-page-numbers.current, .page-links a:hover, .slider-img-color, .postsec-list .search-form input.search-submit, input.search-submit, .tagcloud a:hover, #footer, nav.woocommerce-MyAccount-navigation ul li, .wpcf7 input[type="submit"]{';
  $classic_coffee_shop_color_scheme_css .='background-color: '.esc_attr($classic_coffee_shop_second_color).'!important;';
$classic_coffee_shop_color_scheme_css .='}';

$classic_coffee_shop_color_scheme_css .='.postsec-list .wp-block-button a:hover, .postsec-list .wp-block-button.is-style-outline .wp-block-button__link:not(.has-background):hover,  h1,h2,h3,h4,h5,h6, .postsec-list .wp-block-button.is-style-outline a, h1.site-title a, p.site-title a, #button, .rsvp_button a, .woocommerce a.added_to_cart,.woocommerce ul.products li.product .button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce a.button, .woocommerce button.button, .woocommerce #respond input#submit, #commentform input#submit, .main-nav a:hover, .listarticle h2 a, .nav-links .page-numbers, #sidebar ul li::before, 
#sidebar .widget a:active, #sidebar .widget,#sidebar li a:hover, .breadcrumb a, .postmeta a:hover, #comments a, .added_to_cart, .posted_in a, .onsale, .postmeta a:hover,  #sidebar li a:hover,  .nav-links a, .edit-link a, button.wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button.contained {';
  $classic_coffee_shop_color_scheme_css .='color: '.esc_attr($classic_coffee_shop_second_color).'!important;';
$classic_coffee_shop_color_scheme_css .='}';

$classic_coffee_shop_color_scheme_css .='.postsec-list .wp-block-button a:hover, .postsec-list .wp-block-button.is-style-outline .wp-block-button__link:not(.has-background):hover, .site-main .wp-block-button a:hover, .site-main .wp-block-button.is-style-outline .wp-block-button__link:not(.has-background):hover, .site-main .wp-block-button__link, .postsec-list .wp-block-button__link, .postsec-list .wp-block-button.is-style-outline a, .site-main .wp-block-button.is-style-outline a, .rsvp_button a, .nav-links .page-numbers, span.page-numbers.current, .nav-links .page-numbers:hover, .widget .tagcloud a:hover, button.wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button.contained{';
  $classic_coffee_shop_color_scheme_css .='border: 1px solid'.esc_attr($classic_coffee_shop_second_color).'!important;';
$classic_coffee_shop_color_scheme_css .='}';

$classic_coffee_shop_color_scheme_css .='.postsec-list .search-form input.search-submit, #sidebar input[type="text"], #sidebar input[type="search"], #footer input[type="search"], .woocommerce .quantity .qty, .woocommerce table.shop_table, nav.woocommerce-MyAccount-navigation ul li{';
  $classic_coffee_shop_color_scheme_css .='border: 2px solid'.esc_attr($classic_coffee_shop_second_color).'!important;';
$classic_coffee_shop_color_scheme_css .='}';

$classic_coffee_shop_color_scheme_css .='.entry-content table th, .comment-body table th, .entry-content table td, .comment-body table td{';
  $classic_coffee_shop_color_scheme_css .='border-bottom: 2px solid'.esc_attr($classic_coffee_shop_second_color).'!important;';
$classic_coffee_shop_color_scheme_css .='}';

$classic_coffee_shop_color_scheme_css .='.logo, .social-icons{';
  $classic_coffee_shop_color_scheme_css .='border-bottom: 4px solid'.esc_attr($classic_coffee_shop_second_color).'!important;';
$classic_coffee_shop_color_scheme_css .='}';

$classic_coffee_shop_color_scheme_css .='.social-icons{';
  $classic_coffee_shop_color_scheme_css .='border-top: 4px solid'.esc_attr($classic_coffee_shop_second_color).'!important;';
$classic_coffee_shop_color_scheme_css .='}';

$classic_coffee_shop_color_scheme_css .='.rsvp_button a:hover, .tagcloud a:hover{';
  $classic_coffee_shop_color_scheme_css .='border-color: '.esc_attr($classic_coffee_shop_second_color).'!important;';
$classic_coffee_shop_color_scheme_css .='}';

$classic_coffee_shop_color_scheme_css .='.main-nav li ul{';
  $classic_coffee_shop_color_scheme_css .='border-top: 3px solid'.esc_attr($classic_coffee_shop_second_color).'!important;';
$classic_coffee_shop_color_scheme_css .='}';

$classic_coffee_shop_color_scheme_css .='blockquote{';
  $classic_coffee_shop_color_scheme_css .='border-left: 5px solid'.esc_attr($classic_coffee_shop_second_color).'!important;';
$classic_coffee_shop_color_scheme_css .='}';

$classic_coffee_shop_color_scheme_css .='
@media screen and (max-width:1000px) {
  .toggle-nav button, .sidenav {';
    $classic_coffee_shop_color_scheme_css .='background: '.esc_attr($classic_coffee_shop_first_color).' !important;';
$classic_coffee_shop_color_scheme_css .='} }';  

$classic_coffee_shop_color_scheme_css .='
@media screen and (max-width:1000px) {
  .main-nav a:hover, .main-nav ul ul a:hover {';
    $classic_coffee_shop_color_scheme_css .='color: '.esc_attr($classic_coffee_shop_first_color).' !important;';
$classic_coffee_shop_color_scheme_css .='} }';

//---------------------------------Logo-Max-height--------- 
  $classic_coffee_shop_logo_width = get_theme_mod('classic_coffee_shop_logo_width');

  if($classic_coffee_shop_logo_width != false){

    $classic_coffee_shop_color_scheme_css .='.logo .custom-logo-link img{';

      $classic_coffee_shop_color_scheme_css .='width: '.esc_html($classic_coffee_shop_logo_width).'px;';

    $classic_coffee_shop_color_scheme_css .='}';
  }

  // social icons hide css
  $classic_coffee_shop_social_media = get_theme_mod( 'classic_coffee_shop_social_media', false);
  if($classic_coffee_shop_social_media != true){
    $classic_coffee_shop_color_scheme_css .='.social-icons{';
      $classic_coffee_shop_color_scheme_css .='border:none;';
    $classic_coffee_shop_color_scheme_css .='}';
  }

  /*---------------------------Slider Height ------------*/

    $classic_coffee_shop_slider_img_height = get_theme_mod('classic_coffee_shop_slider_img_height');
    if($classic_coffee_shop_slider_img_height != false){
        $classic_coffee_shop_color_scheme_css .='.slidesection img{';
            $classic_coffee_shop_color_scheme_css .='height: '.esc_attr($classic_coffee_shop_slider_img_height).' !important;';
        $classic_coffee_shop_color_scheme_css .='}';
    }

  /*--------------------------- Footer background image -------------------*/

    $classic_coffee_shop_footer_bg_image = get_theme_mod('classic_coffee_shop_footer_bg_image');
    if($classic_coffee_shop_footer_bg_image != false){
        $classic_coffee_shop_color_scheme_css .='#footer{';
            $classic_coffee_shop_color_scheme_css .='background: url('.esc_attr($classic_coffee_shop_footer_bg_image).')!important;';
        $classic_coffee_shop_color_scheme_css .='}';
    }

    /*--------------------------- Footer Background Color -------------------*/

    $classic_coffee_shop_footer_bg_color = get_theme_mod('classic_coffee_shop_footer_bg_color');
    if($classic_coffee_shop_footer_bg_color != false){
        $classic_coffee_shop_color_scheme_css .='#footer{';
            $classic_coffee_shop_color_scheme_css .='background-color: '.esc_attr($classic_coffee_shop_footer_bg_color).' !important;';
        $classic_coffee_shop_color_scheme_css .='}';
    }

  /*--------------------------- Scroll to top positions -------------------*/

  $classic_coffee_shop_scroll_position = get_theme_mod( 'classic_coffee_shop_scroll_position','Right');
  if($classic_coffee_shop_scroll_position == 'Right'){
      $classic_coffee_shop_color_scheme_css .='#button{';
          $classic_coffee_shop_color_scheme_css .='right: 20px;';
      $classic_coffee_shop_color_scheme_css .='}';
  }else if($classic_coffee_shop_scroll_position == 'Left'){
      $classic_coffee_shop_color_scheme_css .='#button{';
          $classic_coffee_shop_color_scheme_css .='left: 20px;';
      $classic_coffee_shop_color_scheme_css .='}';
  }else if($classic_coffee_shop_scroll_position == 'Center'){
      $classic_coffee_shop_color_scheme_css .='#button{';
          $classic_coffee_shop_color_scheme_css .='right: 50%;left: 50%;';
      $classic_coffee_shop_color_scheme_css .='}';
  }    

    /*--------------------------- Blog Post Page Image Box Shadow -------------------*/

    $classic_coffee_shop_blog_post_page_image_box_shadow = get_theme_mod('classic_coffee_shop_blog_post_page_image_box_shadow',0);
    if($classic_coffee_shop_blog_post_page_image_box_shadow != false){
        $classic_coffee_shop_color_scheme_css .='.post-thumb img{';
            $classic_coffee_shop_color_scheme_css .='box-shadow: '.esc_attr($classic_coffee_shop_blog_post_page_image_box_shadow).'px '.esc_attr($classic_coffee_shop_blog_post_page_image_box_shadow).'px '.esc_attr($classic_coffee_shop_blog_post_page_image_box_shadow).'px #cccccc;';
        $classic_coffee_shop_color_scheme_css .='}';
    }

    /*--------------------------- Woocommerce Product Image Border Radius -------------------*/

    $classic_coffee_shop_woo_product_img_border_radius = get_theme_mod('classic_coffee_shop_woo_product_img_border_radius');
    if($classic_coffee_shop_woo_product_img_border_radius != false){
        $classic_coffee_shop_color_scheme_css .='.woocommerce ul.products li.product a img{';
            $classic_coffee_shop_color_scheme_css .='border-radius: '.esc_attr($classic_coffee_shop_woo_product_img_border_radius).'px;';
        $classic_coffee_shop_color_scheme_css .='}';
    }

  /*--------------------------- Woocommerce Product Sale Position -------------------*/    

  $classic_coffee_shop_product_sale_position = get_theme_mod( 'classic_coffee_shop_product_sale_position','Left');
  if($classic_coffee_shop_product_sale_position == 'Right'){
      $classic_coffee_shop_color_scheme_css .='.woocommerce ul.products li.product .onsale{';
          $classic_coffee_shop_color_scheme_css .='left:auto !important; right:.5em !important;';
      $classic_coffee_shop_color_scheme_css .='}';
  }else if($classic_coffee_shop_product_sale_position == 'Left'){
      $classic_coffee_shop_color_scheme_css .='.woocommerce ul.products li.product .onsale {';
          $classic_coffee_shop_color_scheme_css .='right:auto !important; left:.5em !important;';
      $classic_coffee_shop_color_scheme_css .='}';
  }        

  /*--------------------------- Shop page pagination -------------------*/

  $classic_coffee_shop_wooproducts_nav = get_theme_mod('classic_coffee_shop_wooproducts_nav', 'Yes');
  if($classic_coffee_shop_wooproducts_nav == 'No'){
    $classic_coffee_shop_color_scheme_css .='.woocommerce nav.woocommerce-pagination{';
      $classic_coffee_shop_color_scheme_css .='display: none;';
    $classic_coffee_shop_color_scheme_css .='}';
  }

  /*--------------------------- Related Product -------------------*/

  $classic_coffee_shop_related_product_enable = get_theme_mod('classic_coffee_shop_related_product_enable',true);
  if($classic_coffee_shop_related_product_enable == false){
    $classic_coffee_shop_color_scheme_css .='.related.products{';
      $classic_coffee_shop_color_scheme_css .='display: none;';
    $classic_coffee_shop_color_scheme_css .='}';
  }    

