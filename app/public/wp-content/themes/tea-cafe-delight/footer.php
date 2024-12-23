<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Tea Cafe Delight
 */
?>       
    <div class="clear"></div>
    <div id="footer">
      <div class="container">
        <div class="logo text-center pt-5 pt-md-5">
          <?php classic_coffee_shop_the_custom_logo(); ?>
          <?php $tea_cafe_delight_blog_info = get_bloginfo( 'name' ); ?>
          <?php if ( ! empty( $tea_cafe_delight_blog_info ) ) : ?>
            <p class="site-title mt-3"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></p>
            <?php $tea_cafe_delight_description = get_bloginfo( 'description', 'display' );
            if ( $tea_cafe_delight_description || is_customize_preview() ) : ?>
              <span class="site-description"><?php echo esc_html( $tea_cafe_delight_description ); ?></span>
            <?php endif; ?>
          <?php endif; ?>
        </div>
        <div class="social-icons text-center my-3">
          <?php if ( get_theme_mod('tea_cafe_delight_fb_link') != "") { ?>
            <a title="<?php esc_attr('facebook', 'tea-cafe-delight'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('tea_cafe_delight_fb_link')); ?>"><i class="fab fa-facebook-f"></i></a> 
          <?php } ?>
          <?php if ( get_theme_mod('tea_cafe_delight_insta_link') != "") { ?>
            <a title="<?php esc_attr('instagram', 'tea-cafe-delight'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('tea_cafe_delight_insta_link')); ?>"><i class="fab fa-instagram"></i></a>
          <?php } ?>
          <?php if ( get_theme_mod('tea_cafe_delight_twitt_link') != "") { ?>
            <a title="<?php esc_attr('twitter', 'tea-cafe-delight'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('tea_cafe_delight_twitt_link')); ?>"><i class="fab fa-twitter"></i></a>
          <?php } ?>
          <?php if ( get_theme_mod('tea_cafe_delight_linked_link') != "") { ?>
            <a title="<?php esc_attr('linkedin', 'tea-cafe-delight'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('tea_cafe_delight_linked_link')); ?>"><i class="fab fa-linkedin-in"></i></a>
          <?php } ?>
        </div>
        <div class="copywrap text-center">
          <div class="container">
            <p>
            <a href="<?php 
              $classic_coffee_shop_copyright_link = get_theme_mod('classic_coffee_shop_copyright_link', '');
              if (empty($classic_coffee_shop_copyright_link)) {
                  echo esc_url('https://www.theclassictemplates.com/products/free-cafe-wordpress-theme');
              } else {
                  echo esc_url($classic_coffee_shop_copyright_link);
              } ?>" target="_blank">
              <?php echo esc_html(get_theme_mod('tea_cafe_delight_copyright_line', __('Tea Cafe WordPress Theme', 'tea-cafe-delight'))); ?>
            </a> 
            <?php echo esc_html('By Classic Templates', 'tea-cafe-delight'); ?>
            </p>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>

<?php if(get_theme_mod('classic_coffee_shop_scroll_hide',true)){ ?>
 <a id="button"><?php esc_html_e('TOP', 'tea-cafe-delight'); ?></a>
<?php } ?>

<?php wp_footer(); ?>

</div>
</div>
</body>
</html>