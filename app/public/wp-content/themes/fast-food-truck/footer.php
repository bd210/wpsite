<?php
/**
 * The template for displaying the footer.
 * @package Fast Food Truck
 */
?>
<?php if( get_theme_mod( 'fast_food_truck_hide_show_scroll',true) != '') { ?>
    <?php $fast_food_truck_theme_lay = get_theme_mod( 'fast_food_truck_footer_options','Right');
    if($fast_food_truck_theme_lay == 'Left align'){ ?>
        <a href="#" id="scrollbutton" class="left"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_back_to_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Back to Top', 'fast-food-truck' ); ?></span></a>
    <?php }else if($fast_food_truck_theme_lay == 'Center align'){ ?>
        <a href="#" id="scrollbutton" class="center"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_back_to_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Back to Top', 'fast-food-truck' ); ?></span></a>
    <?php }else{ ?>
        <a href="#" id="scrollbutton"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_back_to_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Back to Top', 'fast-food-truck' ); ?></span></a>
    <?php }?>
<?php }?>
<footer role="contentinfo">
    <?php if( get_theme_mod( 'fast_food_truck_footer_hide',true) != '') { ?>
    <?php //Set widget areas classes based on user choice
        $fast_food_truck_widget_areas = get_theme_mod('fast_food_truck_footer_widget_areas', '4');
        if ($fast_food_truck_widget_areas == '3') {
            $fast_food_truck_cols = 'col-md-4';
        } elseif ($fast_food_truck_widget_areas == '4') {
            $fast_food_truck_cols = 'col-md-3';
        } elseif ($fast_food_truck_widget_areas == '2') {
            $fast_food_truck_cols = 'col-md-6';
        } else {
            $fast_food_truck_cols = 'col-md-12';
        }
    ?>
    <aside id="sidebar-footer" class="footer-wp" role="complementary">
        <div class="container">
            <div class="row">
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <div class="sidebar-column <?php echo ( $fast_food_truck_cols ) ?>">
                        <?php dynamic_sidebar( 'footer-1'); ?>
                    </div>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                    <div class="sidebar-column <?php echo ( $fast_food_truck_cols ) ?>">
                        <?php dynamic_sidebar( 'footer-2'); ?>
                    </div>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <div class="sidebar-column <?php echo ( $fast_food_truck_cols ) ?>">
                        <?php dynamic_sidebar( 'footer-3'); ?>
                    </div>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                    <div class="sidebar-column <?php echo ( $fast_food_truck_cols ) ?>">
                        <?php dynamic_sidebar( 'footer-4'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </aside>
    <?php }?>
	<div class="copyright-wrapper py-3 px-0">
        <div class="container">
        <p><?php fast_food_truck_credit(); ?> <?php echo esc_html(get_theme_mod('fast_food_truck_footer_copy',__('By Buywptemplate','fast-food-truck'))); ?></p>
            <div class="socialicons mt-2">
                <?php if ( get_theme_mod('fast_food_truck_footer_facebook_url','') != "" ) {?>
                    <a target="_blank" href="<?php echo esc_attr( get_theme_mod('fast_food_truck_footer_facebook_url','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_footer_facebook_icon','fab fa-facebook-f')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Facebook', 'fast-food-truck'); ?></span></a>
                <?php }?>
                <?php if ( get_theme_mod('fast_food_truck_footer_twitter_url','') != "" ) {?>
                    <a target="_blank" href="<?php echo esc_attr( get_theme_mod('fast_food_truck_footer_twitter_url','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_footer_twitter_icon','fab fa-twitter')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Twitter', 'fast-food-truck'); ?></span></a>
                <?php }?>
                <?php if ( get_theme_mod('fast_food_truck_footer_youtube_url','') != "" ) {?>
                    <a target="_blank" href="<?php echo esc_attr( get_theme_mod('fast_food_truck_footer_youtube_url','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_footer_youtube_icon','fa-brands fa-youtube')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Youtube', 'fast-food-truck'); ?></span></a>
                <?php }?>
                <?php if ( get_theme_mod('fast_food_truck_footer_vimeo_url','') != "" ) {?>
                    <a target="_blank" href="<?php echo esc_attr( get_theme_mod('fast_food_truck_footer_vimeo_url','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_footer_vimeo_icon','fa-brands fa-vimeo-v')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Vimeo', 'fast-food-truck'); ?></span></a>
                <?php }?>              
              </div>   
        </div>
        <div class="clear"></div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
