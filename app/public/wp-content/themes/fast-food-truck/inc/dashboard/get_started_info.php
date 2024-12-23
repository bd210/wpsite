<?php

add_action( 'admin_menu', 'fast_food_truck_gettingstarted' );
function fast_food_truck_gettingstarted() {
	add_theme_page( esc_html__('About Theme', 'fast-food-truck'), esc_html__('About Theme', 'fast-food-truck'), 'edit_theme_options', 'fast-food-truck-guide-page', 'fast_food_truck_guide');
}

function fast_food_truck_admin_theme_style() {
   wp_enqueue_style('fast-food-truck-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
}
add_action('admin_enqueue_scripts', 'fast_food_truck_admin_theme_style');

function fast_food_truck_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Fast Food Truck, you rock!', 'fast-food-truck' ) ?> </h2>
			<p><?php esc_html_e( 'Take benefit of a variety of features, functionalities, elements, and an exclusive set of customization options to build your own professional food truck website. Please Click on the link below to know the theme setup information.', 'fast-food-truck' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=fast-food-truck-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Getting Started', 'fast-food-truck' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'fast_food_truck_notice');

/**
 * Theme Info Page
 */
function fast_food_truck_guide() {

	// Theme info
	$fast_food_truck_return = add_query_arg( array()) ;
	$fast_food_truck_theme = wp_get_theme( 'fast-food-truck' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
	    	<div>
                <h2 class="tgmpa-notice-warning"></h2>
            </div>
			<div class="row">
				<div class="col-md-5 intro">
					<div class="pad-box">
						<h2><?php esc_html_e( 'Welcome to Fast Food Truck', 'fast-food-truck' ); ?></h2>
						<p>Version: <?php echo esc_html($fast_food_truck_theme['Version']);?></p>
						<span class="intro__version"><?php esc_html_e( 'Congratulations! You are about to use the most easy to use and flexible WordPress theme.', 'fast-food-truck' ); ?>
						</span>
						<div class="powered-by">
							<p><strong><?php esc_html_e( 'Theme created by Buy WP Templates', 'fast-food-truck' ); ?></strong></p>
							<p>
								<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/theme-logo.png'); ?>"/>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="pro-links">
				    	<a href="<?php echo esc_url( FAST_FOOD_TRUCK_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'fast-food-truck'); ?></a>
						<a href="<?php echo esc_url( FAST_FOOD_TRUCK_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'fast-food-truck'); ?></a>
						<a href="<?php echo esc_url( FAST_FOOD_TRUCK_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'fast-food-truck'); ?></a>
					</div>
					<div class="install-plugins">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive1.png'); ?>" alt="" />
					</div>
				</div>
			</div>
			<h2 class="tg-docs-section intruction-title" id="section-4"><?php esc_html_e( '1). Setup Fast Food Truck Theme', 'fast-food-truck' ); ?></h2>
			<div class="row">
					<div class="theme-instruction-block col-md-7">
						<div class="pad-box">
		           	<p><?php esc_html_e( 'Fast Food Truck is the perfect solution for fast food businesses looking to establish a robust online presence. Designed specifically for food trucks, this theme is ideal for gourmet food trucks, street food vendors, snacks, vending, cuisine, meals, kitchen, catering, roadside, burger, fries, takeaway, service and mobile kitchens. Whether youre running a taco truck, burger truck, pizza truck, sushi truck, BBQ truck, grill truck, seafood truck, fish and chips truck, lobster truck, or shrimp truck, this theme caters to create a perfect website for fast food. The Fast Food Truck WordPress Theme is packed with features to help you showcase your delicious offerings and attract more customers. Its sleek, responsive design ensures your website looks great on any device, providing a seamless browsing experience for users on the go. With dedicated pages for menus, reservations, and online ordering, you can streamline your operations and enhance customer convenience. Highlight your top dishes with the Top Seller section. The Free Food Truck can also be integrated with the popular plugins such as Woocommerce, Contact Form7, Jetpack, Yoast SEO and Product Filter Plugins to give your website more functionality with proper payment gateways and support. Whether youre offering food truck catering or serving delicious street food, the Fast Food Truck WordPress Theme empowers you to create a professional and enticing online presence. Transform your food truck business today and start reaching more customers with this dynamic, feature-rich theme. ', 'fast-food-truck' ); ?><p><br>
				        	<ol>
							   <li><?php esc_html_e( 'Start','fast-food-truck'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','fast-food-truck'); ?></a> <?php esc_html_e( 'your website.','fast-food-truck'); ?> </l>
							   <li><?php esc_html_e( 'Fast Food Truck','fast-food-truck'); ?> <a target="_blank" href="<?php echo esc_url( FAST_FOOD_TRUCK_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','fast-food-truck'); ?></a> </li>
						   </ol>
	         </div>
	      </div>
				 <div class="col-md-5">
						<div class="pad-box">
								<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
						</div>
						
	      </div>
      </div>
			  <div class="col-md-12 text-block">
					<h2 class="dashboard-install-title"><?php esc_html_e( '2.) Premium Theme Information.','fast-food-truck'); ?></h2>
				   	<div class="row">
						<div class="col-md-7">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
							<div class="pad-box">
								<h3><?php esc_html_e( 'Pro Theme Description','fast-food-truck'); ?></h3>
                    			<p class="pad-box-p"><?php esc_html_e( 'The Fast Food Truck is the perfect solution for fast food businesses looking to establish a robust online presence. Designed specifically for food trucks, this theme is ideal for gourmet food trucks, street food vendors, and mobile kitchens. Whether youre running a taco truck, burger truck, pizza truck, sushi truck, BBQ truck, grill truck, seafood truck, fish and chips truck, lobster truck, or shrimp truck, this theme caters to create a perfect website for fast food. The Fast Food Truck WordPress Theme is packed with features to help you showcase your delicious offerings and attract more customers. Its sleek, responsive design ensures your website looks great on any device, providing a seamless browsing experience for users on the go. With dedicated pages for menus, reservations, and online ordering, you can streamline your operations and enhance customer convenience. Highlight your top dishes with the Top Seller section. The Free Food Truck can also be integrated with the popular plugins such as Woocommerce, Contact Form7, Jetpack, Yoast SEO and Product Filter Plugins to give your website more functionality with proper payment gateways and support. Whether youre offering food truck catering or serving delicious street food, the Fast Food Truck WordPress Theme empowers you to create a professional and enticing online presence. Transform your food truck business today and start reaching more customers with this dynamic, feature-rich theme.', 'fast-food-truck' ); ?><p>
	                    	</div>
						</div>
						<div class="col-md-5 install-plugin-right">
							<div class="pad-box">
								<h3><?php esc_html_e( 'Pro Theme Features','fast-food-truck'); ?></h3>
								<div class="dashboard-install-benefit">
									<ul>
										<li><?php esc_html_e( 'Theme options using Customizer API','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Responsive design','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Site Icon and Logo option','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Header Images option','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Favicon, Logo, title, and tagline customization','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Advanced Color options and color pallets','fast-food-truck'); ?></li>
										<li><?php esc_html_e( '100+ Font Family Options','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Pagination option','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Demo Importer','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Enable-Disable options on All sections','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Main Slider','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Woocommerce Compatible','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Unlimited Slides','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Section to show categories','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Product Listing based on category','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Top Categories Section','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Best Seller Tab','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Testimonial with custom post type','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Promotional Banners','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Partner Listing','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Shortcodes for Testimonials','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Newsletter with the help of contact form 7.','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Well-sanitized as per WordPress standards.','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Responsive layout for all devices','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Typography for the complete website','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Global Color pallete','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Section specific Color pallete','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Fully integrated with Font Awesome Icon','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Instagram Section','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Partner Listing','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Background Image Option','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Custom page templates','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Allow setting site title, tagline, logo','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Left and Right Sidebar','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Sticky post & Comment threads','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Customizable Home Page','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Multiple inner page templates','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Contact Page Template','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Blog Full width and right and left sidebar','fast-food-truck'); ?></li>
										<li><?php esc_html_e( 'Recent post widget with images, Related post','fast-food-truck'); ?></li>
									</ul>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="dashboard__blocks">
			<div class="row">
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Get Support','fast-food-truck'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( FAST_FOOD_TRUCK_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','fast-food-truck'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( FAST_FOOD_TRUCK_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','fast-food-truck'); ?></a></li>
					</ol>
				</div>

				<div class="col-md-3">
					<h3><?php esc_html_e( 'Getting Started','fast-food-truck'); ?></h3>
					<ol>
						<li><?php esc_html_e( 'Start','fast-food-truck'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','fast-food-truck'); ?></a> <?php esc_html_e( 'your website.','fast-food-truck'); ?> </li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Help Docs','fast-food-truck'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( FAST_FOOD_TRUCK_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','fast-food-truck'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( FAST_FOOD_TRUCK_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','fast-food-truck'); ?></a></li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Buy Premium','fast-food-truck'); ?></h3>
					<ol>
						<a href="<?php echo esc_url( FAST_FOOD_TRUCK_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'fast-food-truck'); ?></a>
					</ol>
				</div>
			</div>
		</div>
	</div>

<?php }?>
