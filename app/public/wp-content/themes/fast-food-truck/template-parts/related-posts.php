<?php
$fast_food_truck_archive_year  = get_the_time('Y'); 
$fast_food_truck_archive_month = get_the_time('m'); 
$fast_food_truck_archive_day   = get_the_time('d');
?>
<?php $fast_food_truck_related_posts = fast_food_truck_related_posts();
if(get_theme_mod('fast_food_truck_related_enable_disable',true)==1){ ?>
<?php if ( $fast_food_truck_related_posts->have_posts() ): ?>
    <div class="related-posts">
        <h3 class="mb-3"><?php echo esc_html(get_theme_mod('fast_food_truck_related_title',__('Related Post','fast-food-truck')));?></h3>
        <div class="row">
            <?php while ( $fast_food_truck_related_posts->have_posts() ) : $fast_food_truck_related_posts->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="related-inner-box mb-3 p-3">
                        <?php if (get_theme_mod('fast_food_truck_related_post_featured_image', true) && has_post_thumbnail()) { ?>
                            <div class="box-image mb-3">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php }?>
                        <h4 class="mb-2"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h4>
                        <div class="metabox mb-3">
                            <span class="entry-date me-1"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_post_date_icon','far fa-calendar-alt')); ?> me-1 my-2"></i> <a href="<?php echo esc_url( get_day_link( $fast_food_truck_archive_year, $fast_food_truck_archive_month, $fast_food_truck_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
                            <span class="entry-author mx-1"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_post_author_icon','fas fa-user')); ?> me-1 my-2"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a>
                        </div>
                        <p class="mb-4"><?php $fast_food_truck_excerpt = get_the_excerpt(); echo esc_html( fast_food_truck_string_limit_words( $fast_food_truck_excerpt, esc_attr(get_theme_mod('fast_food_truck_related_post_excerpt_number','15')))); ?> <?php echo esc_html( get_theme_mod('fast_food_truck_post_discription_suffix','[...]') ); ?></p>
                        <?php if( get_theme_mod('fast_food_truck_button_text','Read More') != ''){ ?>
                            <div class="postbtn mt-2 text-start">
                                <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('fast_food_truck_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('fast_food_truck_button_text','Read More'));?></span></a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); }?>