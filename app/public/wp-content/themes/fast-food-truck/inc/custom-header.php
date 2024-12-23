<?php
/**
 * @package Fast Food Truck
 * @subpackage fast-food-truck
 * @since fast-food-truck 1.0
 * Setup the WordPress core custom header feature.
 * @uses fast_food_truck_header_style()
*/

function fast_food_truck_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'fast_food_truck_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1400,
		'height'                 => 70,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'fast_food_truck_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'fast_food_truck_custom_header_setup' );

if ( ! function_exists( 'fast_food_truck_header_style' ) ) :

add_action( 'wp_enqueue_scripts', 'fast_food_truck_header_style' );
function fast_food_truck_header_style() {
	if ( get_header_image() ) :
	$fast_food_truck_custom_css = "
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
			background-size: cover;
		}";
	   	wp_add_inline_style( 'fast-food-truck-basic-style', $fast_food_truck_custom_css );
	endif;
}
endif;