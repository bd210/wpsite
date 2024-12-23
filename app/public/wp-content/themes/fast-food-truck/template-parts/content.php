<?php
/**
 * The template part for displaying content
 * @package Fast Food Truck
 * @subpackage fast_food_truck
 * @since 1.0
 */
?>

<?php $fast_food_truck_theme_lay = get_theme_mod( 'fast_food_truck_post_layouts','Layout 2');
if($fast_food_truck_theme_lay == 'Layout 1'){ 
	get_template_part('template-parts/Post-layouts/layout1'); 
}else if($fast_food_truck_theme_lay == 'Layout 2'){ 
	get_template_part('template-parts/Post-layouts/layout2'); 
}else if($fast_food_truck_theme_lay == 'Layout 3'){ 
	get_template_part('template-parts/Post-layouts/layout3'); 
}else{ 
	get_template_part('template-parts/Post-layouts/layout2'); 
}