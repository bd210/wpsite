<?php
/**
 * Fast Food Truck functions and definitions
 * @package Fast Food Truck
 */
 /* Breadcrumb Begin */
 function fast_food_truck_the_breadcrumb() {
 	if (!is_home()) {
 		echo '<a href="';
 			echo esc_url( home_url() );
 		echo '">';
 			bloginfo('name');
 		echo "</a> ";
 		if (is_category() || is_single()) {
 			the_category(',');
 			if (is_single()) {
 				echo "<span> ";
 					the_title();
 				echo "</span> ";
 			}
 		} elseif (is_page()) {
 			echo "<span> ";
 				the_title();
 		}
 	}
 }
/* Theme Setup */
if ( ! function_exists( 'fast_food_truck_setup' ) ) :

function fast_food_truck_setup() {
	
	$GLOBALS['content_width'] = apply_filters( 'fast_food_truck_content_width', 640 );

	load_theme_textdomain( 'fast-food-truck', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 140,
		'width'       => 140,
		'flex-height' => true,
	) );
	add_image_size('fast-food-truck-homepage-thumb',240,145,true);

	register_nav_menus( array(
		'left-menu' => __( 'Left Menu', 'fast-food-truck' ),
		'right-menu' => __( 'Right Menu', 'fast-food-truck' ),
		'responsive-menu' => __( 'Responsive Menu', 'fast-food-truck' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support('responsive-embeds');
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', fast_food_truck_font_url() ) );
}
endif; // fast_food_truck_setup
add_action( 'after_setup_theme', 'fast_food_truck_setup' );

/* Theme Widgets Setup */
function fast_food_truck_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'fast-food-truck' ),
		'description'   => __( 'Appears on posts and pages', 'fast-food-truck' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Posts and Pages Sidebar', 'fast-food-truck' ),
		'description'   => __( 'Appears on posts and pages', 'fast-food-truck' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Third Column Sidebar', 'fast-food-truck' ),
		'description'   => __( 'Appears on posts and pages', 'fast-food-truck' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$fast_food_truck_widget_areas = get_theme_mod('fast_food_truck_footer_widget_areas', '4');
	for ($i=1; $i<=$fast_food_truck_widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer Widget ', 'fast-food-truck' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) ); 
	}

	register_sidebar( array(
		'name'          => __( 'Shop Page Sidebar', 'fast-food-truck' ),
		'description'   => __( 'Appears on shop page', 'fast-food-truck' ),
		'id'            => 'woocommerce_sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Single Product Page Sidebar', 'fast-food-truck' ),
		'description'   => __( 'Appears on single product page', 'fast-food-truck' ),
		'id'            => 'woocommerce-single-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'fast_food_truck_widgets_init' );

/* Footer Widget */
add_theme_support( 'starter-content', array(
	'widgets' => array(
		'footer-1' => array(
			'archives',
		),
		'footer-2' => array(
			'meta',
		),
		'footer-3' => array(
			'categories',
		),
		'footer-4' => array(
			'search',
		),
	),
));

// edit

if (!function_exists('fast_food_truck_edit_link')) :

    function fast_food_truck_edit_link($view = 'default')
    {
        global $post;
            edit_post_link(
                sprintf(
                    wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                        __('Edit <span class="screen-reader-text">%s</span>', 'fast-food-truck'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                ),
                '<span class="edit-link"><i class="fa-solid fa-pen mx-2"></i>',
                '</span>'
            );

    }
endif;

/* Theme Font URL */
function fast_food_truck_font_url() {
	$font_family   = array(
		'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Bad Script',
		'Bebas Neue',
		'Fjalla One',
		'PT Sans:ital,wght@0,400;0,700;1,400;1,700',
		'PT Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900',
		'Roboto Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Alex Brush',
		'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Playball',
		'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Julius Sans One',
		'Arsenal:ital,wght@0,400;0,700;1,400;1,700',
		'Slabo 13px',
		'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900',
		'Overpass Mono:wght@300;400;500;600;700',
		'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
		'Raleway:ital,wght@0,100..900;1,100..900',
		'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
		'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700',
		'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Quicksand:wght@300..700',
		'Padauk:wght@400;700',
		'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
		'Inconsolata:wght@200;300;400;500;600;700;800;900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
		'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
		'Pacifico',
		'Indie Flower',
		'VT323',
		'Dosis:wght@200;300;400;500;600;700;800',
		'Frank Ruhl Libre:wght@300;400;500;700;900',
		'Fjalla One',
		'Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Oxygen:wght@300;400;700',
		'Arvo:ital,wght@0,400;0,700;1,400;1,700',
		'Noto Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Lobster',
		'Crimson Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700',
		'Yanone Kaffeesatz:wght@200;300;400;500;600;700',
		'Anton',
		'Libre Baskerville:ital,wght@0,400;0,700;1,400',
		'Bree Serif',
		'Gloria Hallelujah',
		'Abril Fatface',
		'Varela Round',
		'Vampiro One',
		'Shadows Into Light',
		'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Rokkitt:wght@100;200;300;400;500;600;700;800;900',
		'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Francois One',
		'Orbitron:wght@400;500;600;700;800;900',
		'Patua One',
		'Acme',
		'Satisfy',
		'Josefin Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
		'Quattrocento Sans:ital,wght@0,400;0,700;1,400;1,700',
		'Architects Daughter',
		'Russo One',
		'Monda:wght@400;700',
		'Righteous',
		'Lobster Two:ital,wght@0,400;0,700;1,400;1,700',
		'Hammersmith One',
		'Courgette',
		'Permanent Marke',
		'Cherry Swash:wght@400;700',
		'Cormorant Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700',
		'Poiret One',
		'BenchNine:wght@300;400;700',
		'Economica:ital,wght@0,400;0,700;1,400;1,700',
		'Handlee',
		'Cardo:ital,wght@0,400;0,700;1,400',
		'Alfa Slab One',
		'Averia Serif Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Cookie',
		'Chewy',
		'Great Vibes',
		'Coming Soon',
		'Philosopher:ital,wght@0,400;0,700;1,400;1,700',
		'Days One',
		'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Shrikhand',
		'Tangerine:wght@400;700',
		'IM Fell English SC',
		'Boogaloo',
		'Bangers',
		'Fredoka One',
		'Volkhov:ital,wght@0,400;0,700;1,400;1,700',
		'Shadows Into Light Two',
		'Marck Script',
		'Sacramento',
		'Unica One',
		'Dancing Script:wght@400;500;600;700',
		'Exo 2:ital,wght@0,100..900;1,100..900',
		'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'DM Serif Display:ital@0;1',
		'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
		'Jost:ital,wght@0,100..900;1,100..900'
	);

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

/* Theme enqueue scripts */
function fast_food_truck_scripts() {
	wp_enqueue_style( 'fast-food-truck-font', fast_food_truck_font_url(), array() );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'owl.carousel-style', get_template_directory_uri().'/css/owl.carousel.css' );
	// blocks-css
	wp_enqueue_style( 'fast-food-truck-block-style', get_theme_file_uri('/css/blocks.css') );
	wp_style_add_data( 'fast-food-truck-style', 'rtl', 'replace' );	
	wp_enqueue_style( 'fast-food-truck-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/fontawesome-all.css' );
	// body
	$fast_food_truck_body_color       = get_theme_mod('fast_food_truck_body_color', '');
	$fast_food_truck_body_font_family = get_theme_mod('fast_food_truck_body_font_family', '');
	$fast_food_truck_body_font_size   = get_theme_mod('fast_food_truck_body_font_size', '');
	$fast_food_truck_body_font_weight   = get_theme_mod('fast_food_truck_body_font_weight', '');

	// Paragraph
	$fast_food_truck_paragraph_color       = get_theme_mod('fast_food_truck_paragraph_color', '');
	$fast_food_truck_paragraph_font_family = get_theme_mod('fast_food_truck_paragraph_font_family', '');
	$fast_food_truck_paragraph_font_size   = get_theme_mod('fast_food_truck_paragraph_font_size', '');
	$fast_food_truck_paragraph_font_weight   = get_theme_mod('fast_food_truck_paragraph_font_weight', '');
	// "a" tag
	$fast_food_truck_atag_color       = get_theme_mod('fast_food_truck_atag_color', '');
	$fast_food_truck_atag_font_family = get_theme_mod('fast_food_truck_atag_font_family', '');
	// "li" tag
	$fast_food_truck_li_color       = get_theme_mod('fast_food_truck_li_color', '');
	$fast_food_truck_li_font_family = get_theme_mod('fast_food_truck_li_font_family', '');

	// H1
	$fast_food_truck_h1_color       = get_theme_mod('fast_food_truck_h1_color', '');
	$fast_food_truck_h1_font_family = get_theme_mod('fast_food_truck_h1_font_family', '');
	$fast_food_truck_h1_font_size   = get_theme_mod('fast_food_truck_h1_font_size', '');
	$fast_food_truck_h1_font_weight   = get_theme_mod('fast_food_truck_h1_font_weight', '');
	// H2
	$fast_food_truck_h2_color       = get_theme_mod('fast_food_truck_h2_color', '');
	$fast_food_truck_h2_font_family = get_theme_mod('fast_food_truck_h2_font_family', '');
	$fast_food_truck_h2_font_size   = get_theme_mod('fast_food_truck_h2_font_size', '');
	$fast_food_truck_h2_font_weight   = get_theme_mod('fast_food_truck_h2_font_weight', '');
	// H3
	$fast_food_truck_h3_color       = get_theme_mod('fast_food_truck_h3_color', '');
	$fast_food_truck_h3_font_family = get_theme_mod('fast_food_truck_h3_font_family', '');
	$fast_food_truck_h3_font_size   = get_theme_mod('fast_food_truck_h3_font_size', '');
	$fast_food_truck_h3_font_weight   = get_theme_mod('fast_food_truck_h3_font_weight', '');
	// H4
	$fast_food_truck_h4_color       = get_theme_mod('fast_food_truck_h4_color', '');
	$fast_food_truck_h4_font_family = get_theme_mod('fast_food_truck_h4_font_family', '');
	$fast_food_truck_h4_font_size   = get_theme_mod('fast_food_truck_h4_font_size', '');
	$fast_food_truck_h4_font_weight   = get_theme_mod('fast_food_truck_h4_font_weight', '');
	// H5
	$fast_food_truck_h5_color       = get_theme_mod('fast_food_truck_h5_color', '');
	$fast_food_truck_h5_font_family = get_theme_mod('fast_food_truck_h5_font_family', '');
	$fast_food_truck_h5_font_size   = get_theme_mod('fast_food_truck_h5_font_size', '');
	$fast_food_truck_h5_font_weight   = get_theme_mod('fast_food_truck_h5_font_weight', '');
	// H6
	$fast_food_truck_h6_color       = get_theme_mod('fast_food_truck_h6_color', '');
	$fast_food_truck_h6_font_family = get_theme_mod('fast_food_truck_h6_font_family', '');
	$fast_food_truck_h6_font_size   = get_theme_mod('fast_food_truck_h6_font_size', '');
	$fast_food_truck_h6_font_weight   = get_theme_mod('fast_food_truck_h6_font_weight', '');

	$fast_food_truck_custom_css = '
		body{
		    color:'.esc_html($fast_food_truck_body_color).'!important;
		    font-family: '.esc_html($fast_food_truck_body_font_family).';
		    font-size: '.esc_html($fast_food_truck_body_font_size).'px;
			font-weight: '.esc_html($fast_food_truck_h1_font_weight).'!important;
		}
		p,span{
		    color:'.esc_html($fast_food_truck_paragraph_color).'!important;
		    font-family: '.esc_html($fast_food_truck_paragraph_font_family).';
		    font-size: '.esc_html($fast_food_truck_paragraph_font_size).'px !important;
			font-weight: '.esc_html($fast_food_truck_paragraph_font_weight).'!important;
		}
		a{
		    color:'.esc_html($fast_food_truck_atag_color).'!important;
		    font-family: '.esc_html($fast_food_truck_atag_font_family).';
		}
		li{
		    color:'.esc_html($fast_food_truck_li_color).'!important;
		    font-family: '.esc_html($fast_food_truck_li_font_family).';
		}
		h1{
		    color:'.esc_html($fast_food_truck_h1_color).'!important;
		    font-family: '.esc_html($fast_food_truck_h1_font_family).'!important;
		    font-size: '.esc_html($fast_food_truck_h1_font_size).'px!important;
			font-weight: '.esc_html($fast_food_truck_h1_font_weight).'!important;
		}
		h2{
		    color:'.esc_html($fast_food_truck_h2_color).'!important;
		    font-family: '.esc_html($fast_food_truck_h2_font_family).'!important;
		    font-size: '.esc_html($fast_food_truck_h2_font_size).'px!important;
			font-weight: '.esc_html($fast_food_truck_h2_font_weight).'!important;
		}
		h3{
		    color:'.esc_html($fast_food_truck_h3_color).'!important;
		    font-family: '.esc_html($fast_food_truck_h3_font_family).'!important;
		    font-size: '.esc_html($fast_food_truck_h3_font_size).'px!important;
			font-weight: '.esc_html($fast_food_truck_h3_font_weight).'!important;
		}
		h4{
		    color:'.esc_html($fast_food_truck_h4_color).'!important;
		    font-family: '.esc_html($fast_food_truck_h4_font_family).'!important;
		    font-size: '.esc_html($fast_food_truck_h4_font_size).'px!important;
			font-weight: '.esc_html($fast_food_truck_h4_font_weight).'!important;
		}
		h5{
		    color:'.esc_html($fast_food_truck_h5_color).'!important;
		    font-family: '.esc_html($fast_food_truck_h5_font_family).'!important;
		    font-size: '.esc_html($fast_food_truck_h5_font_size).'px!important;
			font-weight: '.esc_html($fast_food_truck_h5_font_weight).'!important;
		}
		h6{
		    color:'.esc_html($fast_food_truck_h6_color).'!important;
		    font-family: '.esc_html($fast_food_truck_h6_font_family).'!important;
		    font-size: '.esc_html($fast_food_truck_h6_font_size).'px!important;
			font-weight: '.esc_html($fast_food_truck_h6_font_weight).'!important;
		}
	';
	wp_add_inline_style('fast-food-truck-basic-style', $fast_food_truck_custom_css);

	/* Theme Color sheet */
	require get_parent_theme_file_path( '/theme-color-option.php' );
	wp_add_inline_style( 'fast-food-truck-basic-style',$fast_food_truck_custom_css );
	wp_enqueue_script( 'tether-js', get_template_directory_uri() . '/js/tether.js', array('jquery') ,'',true);
	wp_enqueue_script( 'owl.carousel-js', get_template_directory_uri(). '/js/owl.carousel.js', array('jquery') ,'',true);
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery') ,'',true);
	wp_enqueue_script( 'jquery-superfish', get_template_directory_uri() . '/js/jquery.superfish.js', array('jquery') ,'',true);
	wp_enqueue_script( 'fast-food-truck-custom-scripts-jquery', (get_template_directory_uri()) . '/js/custom.js', array('jquery') );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fast_food_truck_scripts' );

define('FAST_FOOD_TRUCK_LIVE_DEMO',__('https://demos.buywptemplates.com/fast-food-truck-pro/', 'fast-food-truck'));
define('FAST_FOOD_TRUCK_BUY_PRO',__('https://www.buywptemplates.com/products/food-truck-wordpress-theme', 'fast-food-truck'));
define('FAST_FOOD_TRUCK_PRO_DOC',__('https://demos.buywptemplates.com/demo/docs/fast-food-truck-pro/', 'fast-food-truck'));
define('FAST_FOOD_TRUCK_FREE_DOC',__('https://demos.buywptemplates.com/demo/docs/free-fast-food-truck/', 'fast-food-truck'));
define('FAST_FOOD_TRUCK_PRO_SUPPORT',__('https://buywptemplates.com/pages/community', 'fast-food-truck'));
define('FAST_FOOD_TRUCK_FREE_SUPPORT',__('https://wordpress.org/support/theme/fast-food-truck/', 'fast-food-truck'));
define('FAST_FOOD_TRUCK_REVIEW',__('https://wordpress.org/support/theme/fast-food-truck/reviews/#new-post', 'fast-food-truck'));
define('FAST_FOOD_TRUCK_CREDIT',__('https://www.buywptemplates.com/products/free-food-truck-wordpress-theme', 'fast-food-truck'));


if ( ! function_exists( 'fast_food_truck_credit' ) ) {
	function fast_food_truck_credit(){
		echo "<a href=".esc_url(FAST_FOOD_TRUCK_CREDIT).">".esc_html__('Food Truck WordPress Theme','fast-food-truck')."</a>";
	}
}

/* Excerpt Limit Begin */
function fast_food_truck_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

/*radio button sanitization*/
function fast_food_truck_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function fast_food_truck_sanitize_checkbox( $input ) {
	// Boolean check
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function fast_food_truck_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

/* Integer sanitization */
if ( ! function_exists( 'fast_food_truck_sanitize_integer' ) ) {
	function fast_food_truck_sanitize_integer( $input ) {
		return (int) $input;
	}
}

// Change number or products per row to 4
add_filter('loop_shop_columns', 'fast_food_truck_loop_columns');
if (!function_exists('fast_food_truck_loop_columns')) {
	function fast_food_truck_loop_columns() {
		$fast_food_truck_columns = get_theme_mod( 'fast_food_truck_per_columns', 4 );
		return $fast_food_truck_columns; // 4 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'fast_food_truck_shop_per_page', 20 );
function fast_food_truck_shop_per_page( $fast_food_truck_cols ) {
  	$cols = get_theme_mod( 'fast_food_truck_product_per_page', 9 );
	return $cols;
}

function fast_food_truck_sanitize_dropdown_pages( $page_id, $setting ) {
	// Ensure $input is an absolute integer.
	$page_id = absint( $page_id );
	// If $page_id is an ID of a published page, return it; otherwise, return the default.
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

//Display the related posts
if ( ! function_exists( 'fast_food_truck_related_posts' ) ) {
	function fast_food_truck_related_posts() {
		wp_reset_postdata();
		global $post;
		$args = array(
			'no_found_rows'          => true,
			'update_post_meta_cache' => false,
			'update_post_term_cache' => false,
			'ignore_sticky_posts'    => 1,
			'orderby'                => 'rand',
			'post__not_in'           => array( $post->ID ),
			'posts_per_page'         => absint( get_theme_mod( 'fast_food_truck_related_posts_count_number', '3' ) ),
		);
		// Categories
		if ( get_theme_mod( 'fast_food_truck_related_posts_taxanomies', 'categories' ) == 'categories' ) {

			$cats = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $cats ) {
				$cats                 = wp_get_post_categories( $post->ID, array( 'fields' => 'ids' ) );
				$args['category__in'] = $cats;
			} else {
				$args['cat'] = $cats;
			}
		}
		// Tags
		if ( get_theme_mod( 'fast_food_truck_related_posts_taxanomies', 'categories' ) == 'tags' ) {

			$tags = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $tags ) {
				$tags            = wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) );
				$args['tag__in'] = $tags;
			} else {
				$args['tag_slug__in'] = explode( ',', $tags );
			}
			if ( ! $tags ) {
				$break = true;
			}
		}
		$query = ! isset( $break ) ? new WP_Query( $args ) : new WP_Query();
		return $query;
	}
}

function fast_food_truck_enable_post_featured_image(){
	if(get_theme_mod('fast_food_truck_post_featured_image') == 'Image' ) {
		return true;
	}
	return false;
}

function fast_food_truck_post_color_enabled(){
	if(get_theme_mod('fast_food_truck_post_featured_image') == 'Color' ) {
		return true;
	}
	return false;
}

function fast_food_truck_enable_post_image_custom_dimention(){
	if(get_theme_mod('fast_food_truck_post_featured_image_dimention') == 'Custom' ) {
		return true;
	}
	return false;
}

function fast_food_truck_show_post_color(){
	if(get_theme_mod('fast_food_truck_post_featured_image') == 'Color' ) {
		return true;
	}
	return false;
}

//variable products
function fast_food_truck_enqueue_custom_scripts() {
    wp_register_script('custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true);

    $fast_food_truck_script_params = array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('wc_add_to_cart_nonce'),
    );

    if (class_exists('WooCommerce')) {
        $fast_food_truck_script_params['cart_url'] = wc_get_cart_url();
    }

    wp_localize_script('custom-js', 'wc_add_to_cart_params', $fast_food_truck_script_params);

    wp_enqueue_script('custom-js');
}
add_action('wp_enqueue_scripts', 'fast_food_truck_enqueue_custom_scripts');

function fast_food_truck_add_to_cart_callback() {
    check_ajax_referer('wc_add_to_cart_nonce', 'security');

    $fast_food_truck_product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;
    $fast_food_truck_quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;
    $fast_food_truck_variation_id = isset($_POST['variation_id']) ? intval($_POST['variation_id']) : 0;

    if ($fast_food_truck_product_id > 0) {
        if ($fast_food_truck_variation_id > 0) {
            $fast_food_truck_cart_item_key = WC()->cart->add_to_cart($fast_food_truck_product_id, $fast_food_truck_quantity, $fast_food_truck_variation_id);
        } else {
            $fast_food_truck_cart_item_key = WC()->cart->add_to_cart($fast_food_truck_product_id, $fast_food_truck_quantity);
        }

        if ($fast_food_truck_cart_item_key) {
            wp_send_json_success(array('message' => 'Product added to cart successfully.'));
        } else {
            wp_send_json_error(array('message' => 'Failed to add product to cart.'));
        }
    } else {
        wp_send_json_error(array('message' => 'Invalid product or variation.'));
    }
}
add_action('wp_ajax_add_to_cart', 'fast_food_truck_add_to_cart_callback');
add_action('wp_ajax_nopriv_add_to_cart', 'fast_food_truck_add_to_cart_callback');

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Load Customizer file. */
require get_template_directory() . '/inc/customizer.php';

/* Load Customizer file. */
require get_template_directory() . '/wptt-webfont-loader.php';

/* Load welcome message.*/
require get_template_directory() . '/inc/dashboard/get_started_info.php';

/* TGM */
require get_template_directory() . '/inc/tgm/tgm.php';