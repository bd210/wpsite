<div role="complementary" class="wpdevart-woo-sidebar-container">
    <div class="wpdevart-woo-sidebar-container-inside <?php if ( !get_theme_mod( 'wpdevart_woocommerce_sidebar_shadow_color' ) ) {} else { echo esc_attr( 'wpdevart-woo-sidebar-container-shadow' ); } ?>">
        <?php if (!is_active_sidebar('wpdevart_cake_shop_woocommerce_sidebar')) { ?>
            <section id="search" class="widget widget_search">
                <h3 class="widget-title"><?php esc_html_e('Search', 'cake-shop'); ?></h3>
                <?php get_search_form(); ?>
            </section>
            <section id="tags" class="widget widget_tag_cloud">
                <h3 class="widget-title"><?php esc_html_e('Tag Cloud', 'cake-shop'); ?></h3>
                <?php wp_tag_cloud(); ?>
            </section>
            <section id="archives" class="widget widget_archive">
                <h3 class="widget-title"><?php esc_html_e('Archives', 'cake-shop'); ?></h3>
                    <?php wp_get_archives(); ?>
            </section>
        <?php } else { dynamic_sidebar( 'wpdevart_cake_shop_woocommerce_sidebar' ); } ?>
    </div>
</div>