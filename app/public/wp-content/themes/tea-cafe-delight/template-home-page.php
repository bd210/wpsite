<?php
/**
 * The Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Tea Cafe Delight
 */

get_header(); ?>

<div id="content">
  <?php
    $classic_coffee_shop_hidcatslide = get_theme_mod('classic_coffee_shop_hide_categorysec', false);
    $classic_coffee_shop_slidersection = get_theme_mod('classic_coffee_shop_slidersection');

    if ($classic_coffee_shop_hidcatslide && $classic_coffee_shop_slidersection) { ?>
    <section id="catsliderarea">
      <div class="catwrapslider">
        <div class="owl-carousel">
          <?php if( get_theme_mod('classic_coffee_shop_slidersection',false) ) { ?>
          <?php $classic_coffee_shop_queryvar = new WP_Query('cat='.esc_attr(get_theme_mod('classic_coffee_shop_slidersection',false)));
            while( $classic_coffee_shop_queryvar->have_posts() ) : $classic_coffee_shop_queryvar->the_post(); ?>
              <div class="slidesection">
                <?php if(has_post_thumbnail()){
                  the_post_thumbnail('full');
                  } else{?>
                  <img src="<?php echo esc_url(get_theme_file_uri()); ?>/images/slider.png" alt=""/>
                <?php } ?>
                <div class="slider-box text-center">
                  <h1><a href="<?php echo esc_url( get_permalink() );?>"><?php the_title(); ?></a></h1>
                  <?php
                    $classic_coffee_shop_trimexcerpt = get_the_excerpt();
                    $classic_coffee_shop_shortexcerpt = wp_trim_words( $classic_coffee_shop_trimexcerpt, $num_words = 15 );
                    echo '<p class="mt-4">' . esc_html( $classic_coffee_shop_shortexcerpt ) . '</p>';
                  ?>
                  <div class="rsvp_button mt-0 mt-md-5">
                    <?php 
                    $classic_coffee_shop_button_text = get_theme_mod('classic_coffee_shop_button_text', 'SHOP HERE');
                    $classic_coffee_shop_button_link_slider = get_theme_mod('classic_coffee_shop_button_link_slider', ''); 
                    if (empty($classic_coffee_shop_button_link_slider)) {
                        $classic_coffee_shop_button_link_slider = get_permalink();
                    }
                    if ($classic_coffee_shop_button_text || !empty($classic_coffee_shop_button_link_slider)) { ?>
                      <?php if(get_theme_mod('classic_coffee_shop_button_text', 'SHOP HERE') != ''){ ?>
                        <a href="<?php echo esc_url($classic_coffee_shop_button_link_slider); ?>" class="button redmor">
                          <?php echo esc_html($classic_coffee_shop_button_text); ?>
                            <span class="screen-reader-text"><?php echo esc_html($classic_coffee_shop_button_text); ?></span>
                        </a>
                      <?php } ?>
                    <?php } ?>
                  </div>
                </div>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
          <?php } ?>
        </div>
      </div>
    </section>
  <?php } ?>

  <?php
    $tea_cafe_delight_hidepageboxes = get_theme_mod('tea_cafe_delight_disabled_pgboxes',false);
    $tea_cafe_delight_services_cat = get_theme_mod('tea_cafe_delight_services_cat');
    if( $tea_cafe_delight_hidepageboxes && $tea_cafe_delight_services_cat){
  ?>
    <section id="serives_box" class="py-4">
      <div class="container">
        <div class="serv-box text-center">
          <?php if ( get_theme_mod('tea_cafe_delight_main_serv_title') != "") { ?>
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()) . '/images/head.png' ?>" alt="">
            <h2 class="main_text text-center w-md-50 w-80 mx-auto my-2"><?php echo esc_html(get_theme_mod('tea_cafe_delight_main_serv_title','')); ?></h2>
          <?php }?>
          <?php if ( get_theme_mod('tea_cafe_delight_main_serv_content') != "") { ?>
            <p class="text-center my-2 w-50 mx-auto"><?php echo esc_html(get_theme_mod('tea_cafe_delight_main_serv_content','')); ?></p>
          <?php }?>
        </div>
        <div class="mb-5 mt-4">
          <div class="row">
            <?php if( get_theme_mod('tea_cafe_delight_services_cat',false) ) { ?>
              <?php $queryvar = new WP_Query('cat='.esc_attr(get_theme_mod('tea_cafe_delight_services_cat',false)));
                while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>
                  <div class="col-lg-4 col-md-6 mb-5 services">
                    <div class="service-content">
                      <?php if( get_post_meta(get_the_ID(), 'tea_cafe_delight_custom_icon', true) ) {?>
                        <div class="meta-feilds text-center">
                          <?php if( get_post_meta($post->ID, 'tea_cafe_delight_custom_icon', true) ) {?>
                            <i class="<?php echo esc_html(get_post_meta($post->ID, 'tea_cafe_delight_custom_icon', true)); ?>"></i>
                          <?php }?>
                        </div>
                      <?php }?>
                      <div class="services_inner_box text-center pt-3">
                        <?php if(has_post_thumbnail()){
                          the_post_thumbnail('full');
                          } else{?>
                          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/images/head.png" alt=""/>
                        <?php } ?>
                        <h3 class="my-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php
                          $trimexcerpt = get_the_excerpt();
                          $shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 15 );
                          echo '<p class="mb-3">' . esc_html( $shortexcerpt ) . '</p>'; 
                        ?>
                      </div>
                    </div>
                  </div>
                <?php endwhile; wp_reset_postdata(); ?>
              <?php } ?>
            <?php }?>
          </div>
        </div>
      </div>
    </section>
</div>

<?php get_footer(); ?>
