<?php
/**
 * The template part for displaying audio post
 * @package Fast Food Truck
 * @subpackage fast_food_truck
 * @since 1.0
 */

$fast_food_truck_archive_year  = get_the_time('Y'); 
$fast_food_truck_archive_month = get_the_time('m'); 
$fast_food_truck_archive_day   = get_the_time('d');
?>

<?php
  $fast_food_truck_content = apply_filters( 'the_content', get_the_content() );
  $fast_food_truck_audio = false;

  // Only get audio from the content if a playlist isn't present.
  if ( false === strpos( $fast_food_truck_content, 'wp-playlist-script' ) ) {
    $fast_food_truck_audio = get_media_embedded_in_content( $fast_food_truck_content, array( 'audio' ) );
  }
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="box-image">
    <?php
      if ( ! is_single() ) {
        // If not a single post, highlight the audio file.
        if ( ! empty( $fast_food_truck_audio ) ) {
          foreach ( $fast_food_truck_audio as $fast_food_truck_audio_html ) {
            echo '<div class="entry-audio">';
              echo $fast_food_truck_audio_html;
            echo '</div><!-- .entry-audio -->';
          }
        };
      };
    ?>
  </div>
  <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
  <?php if( get_theme_mod('fast_food_truck_metafields_date', true) != '' || get_theme_mod('fast_food_truck_metafields_author', true) != '' || get_theme_mod('fast_food_truck_metafields_comment', true) != '' || get_theme_mod('fast_food_truck_metafields_time', true) != '' &&  get_theme_mod('fast_food_truck_display_post_date', true) != '' || get_theme_mod('fast_food_truck_display_post_author', true) != '' || get_theme_mod('fast_food_truck_display_post_comment', true) != '' || get_theme_mod('fast_food_truck_display_post_time', true) != ''){ ?>
      <div class="metabox mb-3">
        <?php if( get_theme_mod( 'fast_food_truck_metafields_date',true) != '' || get_theme_mod( 'fast_food_truck_display_post_date',true) != '') { ?>
          <span class="entry-date me-1"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_post_date_icon','far fa-calendar-alt')); ?> me-1"></i> <a href="<?php echo esc_url( get_day_link( $fast_food_truck_archive_year, $fast_food_truck_archive_month, $fast_food_truck_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span class="ms-1"><?php echo esc_html( get_theme_mod('fast_food_truck_blog_post_meta_seperator','|') ); ?></span>
        <?php }?>
        <?php if( get_theme_mod( 'fast_food_truck_metafields_author',true) != '' || get_theme_mod( 'fast_food_truck_display_post_author',true) != '') { ?>
          <span class="entry-author mx-1"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_post_author_icon','fas fa-user')); ?> me-1"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></span><span class="ms-1"><?php echo esc_html( get_theme_mod('fast_food_truck_blog_post_meta_seperator','|') ); ?></span>
        <?php }?>
        <?php if( get_theme_mod( 'fast_food_truck_metafields_comment',true) != '' || get_theme_mod( 'fast_food_truck_display_post_comment',true) != '') { ?>
          <span class="entry-comments mx-1"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_post_comment_icon','fas fa-comments')); ?> me-1"></i> <?php comments_number( __('0 Comment', 'fast-food-truck'), __('0 Comments', 'fast-food-truck'), __('% Comments', 'fast-food-truck') ); ?></span><span class="ms-1"><?php echo esc_html( get_theme_mod('fast_food_truck_blog_post_meta_seperator','|') ); ?></span>
        <?php }?>
        <?php if( get_theme_mod( 'fast_food_truck_metafields_time',true) != '' || get_theme_mod( 'fast_food_truck_display_post_time',true) != '') { ?>
          <span class="entry-time mx-1"><i class="<?php echo esc_attr(get_theme_mod('fast_food_truck_post_time_icon','fas fa-clock')); ?> me-1"></i> <?php echo esc_html( get_the_time() ); ?></span>
        <?php }?>
        <?php echo esc_html (fast_food_truck_edit_link()); ?>
      </div>
    <?php }?>
  <div class="new-text">
    <?php $fast_food_truck_theme_lay = get_theme_mod( 'fast_food_truck_content_settings','Excerpt');
    if($fast_food_truck_theme_lay == 'Content'){ ?>
      <?php the_content(); ?>
    <?php }
    if($fast_food_truck_theme_lay == 'Excerpt'){ ?>
      <?php if(get_the_excerpt()) { ?>
        <?php $fast_food_truck_excerpt = get_the_excerpt(); echo esc_html( fast_food_truck_string_limit_words( $fast_food_truck_excerpt, esc_attr(get_theme_mod('fast_food_truck_post_excerpt_number','30')))); ?> <?php echo esc_html( get_theme_mod('fast_food_truck_post_discription_suffix','[...]') ); ?>
      <?php }?>
    <?php }?>
  </div>
  <?php if( get_theme_mod('fast_food_truck_button_text','Read More') != ''){ ?>
    <div class="postbtn mt-4 text-start">
      <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('fast_food_truck_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('fast_food_truck_button_text','Read More'));?></span></a>
    </div>
  <?php }?>
</article>