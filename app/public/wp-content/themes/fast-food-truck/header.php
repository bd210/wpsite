<?php
/**
 * The Header for our theme.
 * @package Fast Food Truck
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  } ?>
  <?php if(get_theme_mod('fast_food_truck_preloader',false) != '' || get_theme_mod( 'fast_food_truck_display_preloader',false) != ''){ ?>
    <div class="frame w-100 h-100">
      <div class="loader">
        <div class="dot-1"></div>
        <div class="dot-2"></div>
        <div class="dot-3"></div>
      </div>
    </div>
  <?php }?>
<header role="banner" class="header-box">
  <a class="screen-reader-text skip-link" href="#skip_content"><?php esc_html_e( 'Skip to content', 'fast-food-truck' ); ?></a>
  <div id="header">
    <div class="toggle-menu responsive-menu text-center">
      <button role="tab" onclick="fast_food_truck_menu_open()" class="mobiletoggle"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_responsive_menu_open_icon','fas fa-bars')); ?>"></i><?php echo esc_html( get_theme_mod('fast_food_truck_open_menu_label')); ?><span class="screen-reader-text"><?php esc_html_e('Open Menu','fast-food-truck'); ?></span>
      </button>
    </div>
    <div id="navbar-header" class="menu-brand primary-nav resp-menu">
      <nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'fast-food-truck' ); ?>">
        <?php
          wp_nav_menu( array( 
            'theme_location' => 'responsive-menu',
            'container_class' => 'main-menu-navigation clearfix' ,
            'menu_class' => 'main-menu-navigation clearfix',
            'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 ps-0">%3$s</ul>',
            'fallback_cb' => 'wp_page_menu',
          ) ); 
        ?>
      </nav>
      <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="fast_food_truck_menu_close()"><?php echo esc_html( get_theme_mod('fast_food_truck_close_menu_label')); ?><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_responsive_menu_close_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','fast-food-truck'); ?></span></a>
    </div>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-4">
            <div id="navbar-header" class="menu-brand primary-nav">
              <nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'fast-food-truck' ); ?>">
                <?php
                  wp_nav_menu( array( 
                    'theme_location' => 'left-menu',
                    'container_class' => 'main-menu-navigation clearfix' ,
                    'menu_class' => 'main-menu-navigation clearfix',
                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 ps-0">%3$s</ul>',
                    'fallback_cb' => 'wp_page_menu',
                  ) ); 
                ?>
              </nav>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="logo text-md-center text-center">
              <div class="row">
                <div class="<?php if( get_theme_mod( 'fast_food_truck_site_logo_inline') != '') { ?>col-lg-5 col-md-5 col-5<?php } else { ?>col-lg-12 col-md-12 p-2 <?php } ?>">
                  <?php if ( has_custom_logo() ) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                  <?php endif; ?>
                </div>
                <div class="<?php if( get_theme_mod( 'fast_food_truck_site_logo_inline') != '') { ?>col-lg-7 col-md-7 col-7 site-logo-inline"<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                  <?php $fast_food_truck_blog_info = get_bloginfo( 'name' ); ?>
                  <?php if ( ! empty( $fast_food_truck_blog_info ) ) : ?>
                    <?php if( get_theme_mod('fast_food_truck_site_title_enable',true) != ''){ ?>
                      <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title pb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                      <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                      <?php endif; ?>
                    <?php }?>
                  <?php endif; ?>
                  <?php
                  $fast_food_truck_description = get_bloginfo( 'description', 'display' );
                  if ( $fast_food_truck_description || is_customize_preview() ) : ?>
                    <?php if( get_theme_mod('fast_food_truck_site_tagline_enable',false) != ''){ ?>
                      <p class="site-description"><?php echo esc_html($fast_food_truck_description); ?></p>
                    <?php }?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-4">
            <div id="navbar-header" class="menu-brand primary-nav">
              <nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'fast-food-truck' ); ?>">
                <?php
                  wp_nav_menu( array( 
                    'theme_location' => 'right-menu',
                    'container_class' => 'main-menu-navigation clearfix' ,
                    'menu_class' => 'main-menu-navigation clearfix',
                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 ps-0 text-lg-end">%3$s</ul>',
                    'fallback_cb' => 'wp_page_menu',
                  ) ); 
                ?>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php if( get_theme_mod( 'fast_food_truck_show_header') != '') { ?>
      <div class="bottom-header py-3 px-md-0 px-3">
        <div class="container">
          <div class="row">
            <div class="col-xl-2 col-lg-3 col-md-3 col-7 align-self-center phone mb-md-0 mb-3 text-start">
              <?php if (get_theme_mod('fast_food_truck_phone_number') != '' || get_theme_mod('fast_food_truck_phone_text') != '') {?>
                <div class="row">
                  <div class="col-xl-2 col-lg-2 col-md-2 col-3 align-self-center text-end">
                    <i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_phone_icon','fa-solid fa-phone')); ?>"></i>
                  </div>
                  <div class="col-xl-10 col-lg-10 col-md-10 col-9 align-self-center">
                    <p><?php echo esc_html(get_theme_mod('fast_food_truck_phone_text')); ?></p>
                    <a href="tel:<?php echo esc_attr(get_theme_mod('fast_food_truck_phone_number')); ?>"><?php echo esc_html(get_theme_mod('fast_food_truck_phone_number')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('fast_food_truck_phone_number')); ?></span></a>
                  </div>
                </div>
              <?php }?>
            </div>
            <div class="col-xl-3 col-lg-2 col-md-3 col-5 align-self-center text-lg-start text-center px-md-0">
              <?php if( get_theme_mod('fast_food_truck_social_links') != ''){ ?>
                <div class="social-icon">
                  <?php if(get_theme_mod('fast_food_truck_facebook_url') != ''){ ?>
                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('fast_food_truck_facebook_url')); ?>"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_facebook_icon','fab fa-facebook-f')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Facebook', 'fast-food-truck'); ?></span></a>
                  <?php }?>
                  <?php if(get_theme_mod('fast_food_truck_twitter_url') != ''){ ?>
                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('fast_food_truck_twitter_url')); ?>"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_twitter_icon','fab fa-twitter')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Twitter', 'fast-food-truck'); ?></span></a>
                  <?php }?>
                  <?php if(get_theme_mod('fast_food_truck_youtube_url') != ''){ ?>
                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('fast_food_truck_youtube_url')); ?>"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_youtube_icon','fa-brands fa-youtube')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Instagram', 'fast-food-truck'); ?></span></a>
                  <?php }?>
                  <?php if(get_theme_mod('fast_food_truck_vimeo_url') != ''){ ?>
                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('fast_food_truck_vimeo_url')); ?>"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_vimeo_icon','fa-brands fa-vimeo-v')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Pinterest', 'fast-food-truck'); ?></span></a>
                  <?php }?>
                </div>
              <?php }?>
            </div>
            <div class="offset-xl-2 offset-lg-2 col-lg-3 col-md-3 col-6 woo-icons align-self-center text-lg-end text-md-end text-center my-md-0 my-3">
              <?php if(class_exists('woocommerce')){ ?>
                <?php if( get_theme_mod( 'fast_food_truck_display_search', false) != '' ) { ?>
                  <div class="main-search d-inline-block me-4">
                    <span><a href="#"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_search_icon','fas fa-search')); ?>"></i></a></span>
                  </div>
                <?php }?>
                <div class="searchform_page w-100 h-100">
                  <div class="close w-100 text-end me-lg-4 me-3"><a href="#maincontent"><i class="fa fa-times"></i></a></div>
                  <div class="search_input">
                    <div class="header-search">
                      <?php get_product_search_form(); ?>
                    </div>
                  </div>
                </div>
              <?php }?>
              <?php if ( class_exists('woocommerce') ) { ?>
                <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" class="my-account me-lg-4 me-3"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_my_account_icon','fas fa-user')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'My Account','fast-food-truck' );?></span></a>
                <?php if(defined('YITH_WCWL')){ ?>
                <a class="wishlist_view position-relative me-lg-4 me-3" href="<?php echo YITH_WCWL()->get_wishlist_url(); ?>"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_wishlist_icon','fa-regular fa-heart')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Wishlist','fast-food-truck' );?></span></a>
                <?php }?>
                <a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" class="cart-icon"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_cart_icon','fa-solid fa-bag-shopping')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'shopping cart','fast-food-truck' );?></span></a>
              <?php }?>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3 col-6 align-self-center text-center text-md-end text-lg-end">
              <?php if(get_theme_mod('fast_food_truck_header_btn_text') != ''){ ?>
                <a href="<?php echo esc_url(get_theme_mod('fast_food_truck_header_btn_url')); ?>" class="pizza-btn"><?php echo esc_html(get_theme_mod('fast_food_truck_header_btn_text')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('fast_food_truck_header_btn_text')); ?></span></a>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    <?php }?>
  </div>
</header>
