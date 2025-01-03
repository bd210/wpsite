<?php
/**
 * The template for displaying search forms in Fast Food Truck
 * @package Fast Food Truck
 */
?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'fast-food-truck' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr( get_theme_mod('fast_food_truck_search_placeholder', __('Search', 'fast-food-truck')) ); ?>" value="<?php echo esc_attr( get_search_query()) ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button','fast-food-truck' ); ?>">
</form>