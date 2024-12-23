<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); 

?>

<main role="main" id="skip_content">
  <?php do_action( 'fast_food_truck_above_slider' ); ?>
  <?php if( get_theme_mod( 'fast_food_truck_banner_bg_image') != '') { ?>
    <section id="banner" class="wow bounceInLeft delay-1000 position-relative" data-wow-duration="3s">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-12 align-self-center left-banner">
          <?php if(get_theme_mod('fast_food_truck_banner_bg_image') != '') {?>
            <div class="banner-img">
              <img src="<?php echo esc_url(get_theme_mod('fast_food_truck_banner_bg_image')); ?>" alt="" />
            </div>
          <?php }?>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-12 right-banner text-start">
          <div class="banner-content px-5 ms-3">
            <?php if(get_theme_mod('fast_food_truck_banner_title') != '') {?>
              <h1><?php echo esc_html(get_theme_mod('fast_food_truck_banner_title')) ?></h1>
            <?php }?>
            <?php if(get_theme_mod('fast_food_truck_banner_text') != '') {?>
              <p class="banner-content pt-3"><?php echo esc_html(get_theme_mod('fast_food_truck_banner_text')) ?></p>
            <?php }?>
            <div class="align-items-center banner-btn mt-3 pt-4">
              <?php if ( get_theme_mod('fast_food_truck_banner_btn_text') != '') {?>
                <div class ="read-more">
                  <a href="<?php echo esc_url(get_theme_mod('fast_food_truck_banner_btn_url',false));?>"><?php echo esc_html(get_theme_mod('fast_food_truck_banner_btn_text'));?><span class="screen-reader-text"><?php esc_html_e( 'icon','fast-food-truck');?></span>
                  </a>
                </div>
              <?php }?>
            </div>
            <div class="row">
              <div class="owl-carousel">
                <?php if ( class_exists( 'WooCommerce' ) && get_theme_mod('fast_food_truck_product_page') != '' ) {?>
                  <?php $args = array(
                    'post_type' => 'product',
                    'product_cat' => get_theme_mod('fast_food_truck_product_page'),
                    'order' => 'ASC',
                    'hide_empty' => 0,
                  );
                  $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-4 py-4 product-main-div text-center">
                      <div class="main-product-section mx-md-0 mx-lg-0 mx-2 p-3">
                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" />'; ?>
                        <div class="product-content">
                          <h2 class="pb-1"><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h2>
                          <a class="product-icon" href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  <?php endwhile; wp_reset_postdata(); ?>
                  <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="banner-triangle"></div>
      <div class="clearfix"></div>
    </section>
  <?php }?>
  <?php do_action( 'fast_food_truck_below_slider' ); ?>

<!-- Product Section -->
  <?php if( get_theme_mod( 'fast_food_truck_section_title') != '' || get_theme_mod( 'fast_food_truck_products_section') != '') { ?>
    <section id="product-sec" class="py-5">
      <div class="container">
        <div class="heading-box text-center mb-1">
          <?php if( get_theme_mod( 'fast_food_truck_section_title') != '') { ?>
            <h3 class="py-2"><?php echo esc_html(get_theme_mod('fast_food_truck_section_title',''));?></h3>  
          <?php } ?>
        </div>
        <div class="row">
          <?php if (class_exists('WooCommerce') && get_theme_mod('fast_food_truck_products_section') != '') { ?>
              <?php
              $args = array(
                  'post_type' => 'product',
                  'product_cat' => get_theme_mod('fast_food_truck_products_section'),
                  'orderby' => 'menu_order',
                  'order' => 'ASC',
              );
              $loop = new WP_Query($args);
              while ($loop->have_posts()) : $loop->the_post();
                  global $product;
              ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12 pt-0 pb-4 px-3 product-main">
                    <div class="product-section mx-md-0 mx-lg-0 mx-2 p-4">
                    <?php
                    if (has_post_thumbnail($loop->post->ID)) {
                        echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                    } else {
                        echo '<img src="' . esc_url(woocommerce_placeholder_img_src()) . '" />';
                    }
                    ?>
                    <div class="product-content">
                      <h4 class="my-2"><a href="<?php echo esc_url(get_permalink($loop->post->ID)); ?>"><?php the_title(); ?></a></h4>
                      <div class="row">
                        <div class="col-12">
                          <?php if ($product->is_type('variable')) : ?>
                            <form class="variations_form cart" method="post" enctype='multipart/form-data'
                                  data-product_id="<?php echo esc_attr($product->get_id()); ?>"
                                  data-product_variations="<?php echo htmlspecialchars(json_encode($product->get_available_variations())) ?>">
                              <?php
                              woocommerce_variable_add_to_cart();
                              ?>
                            </form>
                            <?php
                            $fast_food_truck_available_variations = $product->get_available_variations();
                            $fast_food_truck_prices = array();
                            foreach ($fast_food_truck_available_variations as $fast_food_truck_variation) {
                                $fast_food_truck_variation_obj = wc_get_product($fast_food_truck_variation['variation_id']);
                                $fast_food_truck_prices[] = $fast_food_truck_variation_obj->get_price();
                            }
                            $fast_food_truck_min_price = min($fast_food_truck_prices);
                            $fast_food_truck_max_price = max($fast_food_truck_prices);
                            ?>
                            <div class="row">
                              <div class="col-xl-6 col-lg-6 col-md-6 col-6 align-self-center">
                                <p class="pro-price"><?php echo wc_price($fast_food_truck_min_price) . ' - ' . wc_price($fast_food_truck_max_price); ?></p>
                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-6 col-6 text-end p-0">
                                <div class="cart-button">
                                  <a href="#" class="button add_to_cart ajax_add_to_cart" data-product_id="<?php echo esc_attr($product->get_id()); ?>" data-product_sku="<?php echo esc_attr($product->get_sku()); ?>" aria-label="Add to cart"><?php echo esc_html('Add to Cart','fast-food-truck');?></a>
                                </div>
                              </div>
                            </div>
                          <?php else : ?>
                            <div class="row">
                              <div class="col-6">
                                <p class="pro-price"><?php
                                  if ($product->is_on_sale()) {
                                      $fast_food_truck_sale_price = $product->get_sale_price();
                                      echo wc_price($fast_food_truck_sale_price);
                                  } else {
                                      echo wc_price($product->get_regular_price());
                                  }
                                ?></p>
                              </div>
                              <div class="col-6 text-end">
                                <div class="cart-button">
                                  <?php woocommerce_template_loop_add_to_cart(); ?>
                                </div>
                              </div>
                            </div>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile;
              wp_reset_postdata(); ?>
          <?php } ?>
        </div>
      </div>
    </section>
  <?php }?>

  <div class="container front-page-content">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="new-text"><?php the_content(); ?></div>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>