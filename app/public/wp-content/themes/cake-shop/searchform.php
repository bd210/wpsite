<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url()); ?>">
  <div class="wpdevart-search-form">
    <input value="" name="s" id="s" type="text" class="wpdevart-search-sbtxt">
    <input id="searchsubmit" value="<?php echo esc_attr__( 'Search', 'cake-shop'); ?>" type="submit" class="wpdevart_cake_shop_hover_button_small <?php echo esc_attr( get_theme_mod( 'wpdevart_cake_shop_search_page_button_style' ) ); ?>">
  </div>
</form>