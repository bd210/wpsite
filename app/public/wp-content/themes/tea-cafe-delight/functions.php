<?php
/**
 * Tea Cafe Delight functions and definitions
 *
 * @package Tea Cafe Delight
 */

if ( ! function_exists( 'tea_cafe_delight_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function tea_cafe_delight_setup() {
	global $tea_cafe_delight_content_width;
	if ( ! isset( $tea_cafe_delight_content_width ) )
		$tea_cafe_delight_content_width = 680;

	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'wp-block-styles');
	add_theme_support( 'align-wide' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 100,
		'flex-height' => true,
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_editor_style( 'editor-style.css' );
}
endif; 
add_action( 'after_setup_theme', 'tea_cafe_delight_setup' );

function tea_cafe_delight_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'tea-cafe-delight' ),
		'description'   => __( 'Appears on blog page sidebar', 'tea-cafe-delight' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'tea-cafe-delight' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'tea-cafe-delight' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'tea-cafe-delight' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'tea-cafe-delight' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'tea_cafe_delight_widgets_init' );

function tea_cafe_delight_enqueue_styles() {
    $parenthandle = 'tea-cafe-delight-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, esc_url(get_template_directory_uri()) . '/style.css',
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'tea-cafe-delight-child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
	require get_theme_file_path( 'inc/color-scheme/custom-color-control.php' );
	wp_add_inline_style( 'tea-cafe-delight-child-style',$tea_cafe_delight_color_scheme_css );	
}
add_action( 'wp_enqueue_scripts', 'tea_cafe_delight_enqueue_styles' );

function tea_cafe_delight_sanitize_select( $input, $setting ){
        //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
        $input = sanitize_key($input);
        //get the list of possible select options
        $choices = $setting->manager->get_control( $setting->id )->choices;
        //return input if valid or return default option
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
    }

// customizer css
function tea_cafe_delight_enqueue_customizer_css() {
    wp_enqueue_style( 'tea_cafe_delight-customizer-css', get_stylesheet_directory_uri() . '/css/customize-controls.css' );
}
add_action( 'customize_controls_print_styles', 'tea_cafe_delight_enqueue_customizer_css' );

function tea_cafe_delight_scripts() {
	// Style handle of parent theme.
    	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/css/bootstrap.css' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// font-family
	$tea_cafe_delight_headings_font = esc_html(get_theme_mod('tea_cafe_delight_headings_fonts'));
	$tea_cafe_delight_body_font = esc_html(get_theme_mod('tea_cafe_delight_body_fonts'));

	if( $tea_cafe_delight_headings_font ) {
		wp_enqueue_style( 'tea-cafe-delight-headings-fonts', '//fonts.googleapis.com/css?family='. $tea_cafe_delight_headings_font );
	} else {
		wp_enqueue_style( 'merienda', 'https://fonts.googleapis.com/css?family=Merienda:wght@300;400;500;600;700;800;900');
	}
	if( $tea_cafe_delight_body_font ) {
		wp_enqueue_style( 'inter', '//fonts.googleapis.com/css?family='. $tea_cafe_delight_body_font );
	} else {
		wp_enqueue_style( 'tea-cafe-delight-source-body', 'https://fonts.googleapis.com/css?family=Inter:wght@100;200;300;400;500;600;700;800;900');
	}
}
add_action( 'wp_enqueue_scripts', 'tea_cafe_delight_scripts' );

add_action( 'customize_register', 'tea_cafe_delight_customize_register', 11 );
function tea_cafe_delight_customize_register() {
	global $wp_customize;

	$wp_customize->remove_section( 'classic_coffee_shop_global_color' );
	$wp_customize->remove_setting( 'classic_coffee_shop_youtube_link' );
	$wp_customize->remove_control( 'classic_coffee_shop_youtube_link' );

	$wp_customize->remove_setting( 'classic_coffee_youtube_color' );
	$wp_customize->remove_control( 'classic_coffee_youtube_color' );

	$wp_customize->remove_setting( 'classic_coffee_slider_buttonborder_color' );
	$wp_customize->remove_control( 'classic_coffee_slider_buttonborder_color' );

	$wp_customize->remove_setting( 'classic_coffee_footeryoutube_color' );
	$wp_customize->remove_control( 'classic_coffee_footeryoutube_color' );

	$wp_customize->remove_setting( 'classic_coffee_shop_color_scheme_one' );
	$wp_customize->remove_control( 'classic_coffee_shop_color_scheme_one' );

	$wp_customize->remove_section( 'classic_coffee_shop_two_cols_section' );

}

if ( ! defined( 'CLASSIC_COFFEE_SHOP_PREMIUM_PAGE' ) ) {
	define('CLASSIC_COFFEE_SHOP_PREMIUM_PAGE',__(' https://www.theclassictemplates.com/products/tea-wordpress-theme ','tea-cafe-delight'));
}

if ( ! defined( 'CLASSIC_COFFEE_SHOP_PRO_NAME' ) ) {
	define( 'CLASSIC_COFFEE_SHOP_PRO_NAME', __( 'About Tea Cafe Delight', 'tea-cafe-delight' ));
}

if ( ! defined( 'CLASSIC_COFFEE_SHOP_THEME_PAGE' ) ) {
define('CLASSIC_COFFEE_SHOP_THEME_PAGE',__('https://www.theclassictemplates.com/collections/best-wordpress-templates','tea-cafe-delight'));
}
if ( ! defined( 'CLASSIC_COFFEE_SHOP_SUPPORT' ) ) {
define('CLASSIC_COFFEE_SHOP_SUPPORT',__('https://wordpress.org/support/theme/tea-cafe-delight/','tea-cafe-delight'));
}
if ( ! defined( 'CLASSIC_COFFEE_SHOP_REVIEW' ) ) {
define('CLASSIC_COFFEE_SHOP_REVIEW',__('https://wordpress.org/support/theme/tea-cafe-delight/reviews/#new-post','tea-cafe-delight'));
}
if ( ! defined( 'CLASSIC_COFFEE_SHOP_PRO_DEMO' ) ) {
define('CLASSIC_COFFEE_SHOP_PRO_DEMO',__('https://live.theclassictemplates.com/tea-cafe-delight-pro/','tea-cafe-delight'));
}
if ( ! defined( 'CLASSIC_COFFEE_SHOP_THEME_DOCUMENTATION' ) ) {
define('CLASSIC_COFFEE_SHOP_THEME_DOCUMENTATION',__('https://live.theclassictemplates.com/demo/docs/tea-cafe-delight-free/','tea-cafe-delight'));
}

// Customizer Section
function tea_cafe_delight_customizer ( $wp_customize ) {

	// Services Section
	$wp_customize->add_section('tea_cafe_delight_below_slider_section', array(
		'title'	=> __('Manage Services Section','tea-cafe-delight'),
		'description'	=> __('<p class="sec-title">Manage Services Section</p> Select Pages from the dropdown for Services.','tea-cafe-delight'),
		'priority'	=> 888,
		'panel' => 'classic_coffee_shop_panel_area',
	));

	$wp_customize->add_setting('tea_cafe_delight_disabled_pgboxes',array(
		'default' => false,
		'sanitize_callback' => 'classic_coffee_shop_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'tea_cafe_delight_disabled_pgboxes', array(
	   'settings' => 'tea_cafe_delight_disabled_pgboxes',
	   'section'   => 'tea_cafe_delight_below_slider_section',
	   'label'     => __('Check To Enable This Section','tea-cafe-delight'),
	   'type'      => 'checkbox'
	));

	$wp_customize->add_setting('tea_cafe_delight_main_serv_title',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'tea_cafe_delight_main_serv_title', array(
	   'settings' => 'tea_cafe_delight_main_serv_title',
	   'section'   => 'tea_cafe_delight_below_slider_section',
	   'label' => __('Add Main Title', 'tea-cafe-delight'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('tea_cafe_delight_main_serv_content',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'tea_cafe_delight_main_serv_content', array(
	   'settings' => 'tea_cafe_delight_main_serv_content',
	   'section'   => 'tea_cafe_delight_below_slider_section',
	   'label' => __('Add Main Content', 'tea-cafe-delight'),
	   'type'      => 'text'
	));

	// Add a category dropdown Slider Coloumn
	$wp_customize->add_setting( 'tea_cafe_delight_services_cat', array(
		'default'	=> '0',
		'sanitize_callback'	=> 'absint'
	) );
	$wp_customize->add_control( new Classic_Coffee_Shop_Category_Dropdown_Custom_Control( $wp_customize, 'tea_cafe_delight_services_cat', array(
		'section' => 'tea_cafe_delight_below_slider_section',
		'label' => __('Select category to show Services', 'tea-cafe-delight'),
		'settings'   => 'tea_cafe_delight_services_cat',
	) ) );

	$wp_customize->add_setting( 'tea_cafe_delight_serv_setting_upgraded_features',array(
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('tea_cafe_delight_serv_setting_upgraded_features', array(
	    'type'=> 'hidden',
	    'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
	        <a target='_blank' href='". esc_url('https://www.theclassictemplates.com/products/tea-wordpress-theme') ." '>Upgrade to Pro</a></span>",
	    'section' => 'tea_cafe_delight_below_slider_section'
	));

	//Global Color
	$wp_customize->add_section('tea_cafe_delight_global_color', array(
		'title'    => __('Manage Global Color Section', 'tea-cafe-delight'),
		'panel'    => 'classic_coffee_shop_panel_area',
	));
	$wp_customize->add_setting('tea_cafe_delight_first_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tea_cafe_delight_first_color', array(
		'label'    => __('Theme Color One', 'tea-cafe-delight'),
		'section'  => 'tea_cafe_delight_global_color',
		'settings' => 'tea_cafe_delight_first_color',
	)));	
	$wp_customize->add_setting('tea_cafe_delight_second_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tea_cafe_delight_second_color', array(
		'label'    => __('Theme Color Two', 'tea-cafe-delight'),
		'section'  => 'tea_cafe_delight_global_color',
		'settings' => 'tea_cafe_delight_second_color',
	)));	
	$wp_customize->add_setting('tea_cafe_delight_third_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tea_cafe_delight_third_color', array(
		'label'    => __('Theme Color Three', 'tea-cafe-delight'),
		'section'  => 'tea_cafe_delight_global_color',
		'settings' => 'tea_cafe_delight_third_color',
	)));	
	$wp_customize->add_setting( 'tea_cafe_delight_global_color_setting_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	));	
	$wp_customize->add_control('tea_cafe_delight_global_color_setting_upgraded_features', array(
		'type'=> 'hidden',
		'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
			<a target='_blank' href='". esc_url('https://www.theclassictemplates.com/products/tea-wordpress-theme') ." '>Upgrade to Pro</a></span>",
		'section' => 'tea_cafe_delight_global_color'
	));

}
add_action( 'customize_register', 'tea_cafe_delight_customizer' );

/*-- Custom metafield --*/
  function tea_cafe_delight_custom_price() {
      add_meta_box( 'bn_meta', __( 'Tea Cafe Delight Meta Fields', 'tea-cafe-delight' ), 'tea_cafe_delight_render_custom_icon_meta_field', 'post', 'normal', 'high' );
  }
  if (is_admin()){
      add_action('admin_menu', 'tea_cafe_delight_custom_price');
  }

  function tea_cafe_delight_render_custom_icon_meta_field($post) {
      wp_nonce_field(basename(__FILE__), 'tea_cafe_delight_custom_icon_meta_nonce');
      $custom_icon_value = get_post_meta($post->ID, 'tea_cafe_delight_custom_icon', true);
      ?>

      <label for="tea_cafe_delight_custom_icon_field">Icon Class:</label>
      <input type="text" name="tea_cafe_delight_custom_icon_field" id="tea_cafe_delight_custom_icon_field" value="<?php echo esc_attr($custom_icon_value); ?>" />
      <p>Example: fas fa-globe</p>

      <?php if (!empty($custom_icon_value)) : ?>
          <div class="custom-icon-preview">
              <i class="<?php echo esc_attr($custom_icon_value); ?>"></i>
          </div>
      <?php endif; ?>

      <?php
  }

  function tea_cafe_delight_save_custom_icon_meta($post_id) {
      if (!isset($_POST['tea_cafe_delight_custom_icon_meta_nonce']) || !wp_verify_nonce($_POST['tea_cafe_delight_custom_icon_meta_nonce'], basename(__FILE__))) {
          return;
      }
      
      if (!current_user_can('edit_post', $post_id)) {
          return;
      }
      
      if (isset($_POST['tea_cafe_delight_custom_icon_field'])) {
          update_post_meta($post_id, 'tea_cafe_delight_custom_icon', sanitize_text_field($_POST['tea_cafe_delight_custom_icon_field']));
      }
  }
  add_action('save_post', 'tea_cafe_delight_save_custom_icon_meta');