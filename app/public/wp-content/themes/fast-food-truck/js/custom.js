jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
	});
});

function fast_food_truck_menu_open() {
	jQuery(".menu-brand.primary-nav").addClass('show');
}
function fast_food_truck_menu_close() {
	jQuery(".menu-brand.primary-nav").removeClass('show');
}

var fast_food_truck_Keyboard_loop = function (elem) {
    var fast_food_truck_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');

    var fast_food_truck_firstTabbable = fast_food_truck_tabbable.first();
    var fast_food_truck_lastTabbable = fast_food_truck_tabbable.last();

    /*redirect last tab to first input*/
    fast_food_truck_lastTabbable.on('keydown', function (e) {
        if ((e.which === 9 && !e.shiftKey)) {
            e.preventDefault();
            fast_food_truck_firstTabbable.focus();
        }
    });

    /*redirect first shift+tab to last input*/
    fast_food_truck_firstTabbable.on('keydown', function (e) {
        if ((e.which === 9 && e.shiftKey)) {
            e.preventDefault();
            fast_food_truck_lastTabbable.focus();
        }
    });

    /* allow escape key to close insiders div */
    elem.on('keyup', function (e) {
        if (e.keyCode === 27) {
            elem.hide();
        }
        ;
    });
};

// scroll
jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
	    if (jQuery(this).scrollTop() > 0) {
	        jQuery('#scrollbutton').fadeIn();
	    } else {
	        jQuery('#scrollbutton').fadeOut();
	    }
	});
	jQuery(window).on("scroll", function () {
	   document.getElementById("scrollbutton").style.display = "block";
	});
	jQuery('#scrollbutton').click(function () {
	    jQuery("html, body").animate({
	        scrollTop: 0
	    }, 600);
	    return false;
	});
});

jQuery(function($){
	$('.mobiletoggle').click(function () {
        fast_food_truck_Keyboard_loop($('.menu-brand.resp-menu'));
    });
});

// preloader
jQuery(function($){
    setTimeout(function(){
        $(".frame").delay(1000).fadeOut("slow");
    });
});

jQuery('document').ready(function($){
    $('.main-search span a').click(function(){
        $(".searchform_page").slideDown(500);
        fast_food_truck_Keyboard_loop($('.searchform_page'));
    });

    $('.close a').click(function(){
        $(".searchform_page").slideUp(500);
    });
}); 

jQuery(document).ready(function () {
    
    function fast_food_truck_search_loop_focus(element) {
        var fast_food_truck_focus = element.find('select, input, textarea, button, a[href]');
        var fast_food_truck_firstFocus = fast_food_truck_focus[0];  
        var fast_food_truck_lastFocus = fast_food_truck_focus[fast_food_truck_focus.length - 1];
        var KEYCODE_TAB = 9;

        element.on('keydown', function fast_food_truck_search_loop_focus(e) {
            var isTabPressed = (e.key === 'Tab' || e.keyCode === KEYCODE_TAB);

            if (!isTabPressed) { 
              return; 
            }

            if ( e.shiftKey ) /* shift + tab */ {
              if (document.activeElement === fast_food_truck_firstFocus) {
            fast_food_truck_lastFocus.focus();
              e.preventDefault();
            }
          } else /* tab */ {
            if (document.activeElement === fast_food_truck_lastFocus) {
                fast_food_truck_firstFocus.focus();
              e.preventDefault();
            }
          }
        });
    }
});

// Owl Carousal
jQuery(document).ready(function() {
    var owl = jQuery('#banner .owl-carousel');

    function initializeOwlCarousel() {
        if (!owl.hasClass('owl-loaded')) {
            owl.owlCarousel({
                nav: true,
                dots: false,
                autoplay: false,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                loop: true,
                navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    768: {
                        items: 2
                    }
                },
                mouseDrag: true
            });
        }
    }

    function destroyOwlCarousel() {
        if (owl.hasClass('owl-loaded')) {
            owl.trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded');
            owl.find('.owl-stage-outer').children().unwrap();
        }
    }

    function checkScreenWidth() {
        var windowWidth = jQuery(window).width();
        if (windowWidth < 1000) {
            initializeOwlCarousel();
        } else {
            destroyOwlCarousel();
            // Apply grid layout
            owl.find('.item').css({
                'flex': '1 1 calc(33.333% - 20px)',
                'margin': '10px'
            });
        }
    }

    // Initial check
    checkScreenWidth();

    // On window resize
    jQuery(window).resize(function() {
        checkScreenWidth();
    });
});

// Variable products
jQuery(document).ready(function($) {
    function fast_food_truck_addtocart(product_id, variation_id, quantity, $fast_food_truck_button) {
        var data = {
            action: 'add_to_cart',
            product_id: product_id,
            quantity: quantity,
            security: wc_add_to_cart_params.nonce
        };

        if (variation_id) {
            data.variation_id = variation_id;
        }

        $.ajax({
            type: 'POST',
            url: wc_add_to_cart_params.ajax_url,
            data: data,
            success: function(response) {
                if (response.success) {
                    console.log('Product added to cart successfully!');
                    if (!$fast_food_truck_button.siblings('.view_cart_button').length) {
                        var cart_url = wc_add_to_cart_params.cart_url; 
                        $fast_food_truck_button.parent().append('<a href="' + cart_url + '" class="button view_cart_button">View Cart</a>');
                    }
                } else {
                    console.log('Failed to add product to cart:', response.data.message);
                }
            },
            error: function(errorThrown) {
                console.log('Error adding to cart:', errorThrown);
            }
        });
    }

    $('.variations_form').on('change', 'select', function() {
        var $fast_food_truck_form = $(this).closest('.variations_form');
        var variation_data = $fast_food_truck_form.data('product_variations');
        var attributes = {};

        $fast_food_truck_form.find('select').each(function() {
            var attribute_name = $(this).attr('name');
            var attribute_value = $(this).val();
            attributes[attribute_name] = attribute_value;
        });

        var selectedVariationID = findMatchingVariationID(variation_data, attributes);

        $fast_food_truck_form.data('selected_variation_id', selectedVariationID);

        if (selectedVariationID) {
            console.log('Matching variation ID found:', selectedVariationID);
        } else {
            console.log('No matching variation found for selected attributes.');
        }
    });

    function findMatchingVariationID(variation_data, attributes) {
        for (var i = 0; i < variation_data.length; i++) {
            var variation = variation_data[i];
            var matches = true;

            for (var attr_name in attributes) {
                if (attributes.hasOwnProperty(attr_name)) {
                    if (variation.attributes[attr_name] !== attributes[attr_name]) {
                        matches = false;
                        break;
                    }
                }
            }

            if (matches) {
                return variation.variation_id;
            }
        }
        return null; 
    }

    $('body').on('click', '.add_to_cart_button', function(e) {
        var $fast_food_truck_button = $(this);
        var product_id = $fast_food_truck_button.data('product_id');
        var product_type = $fast_food_truck_button.hasClass('product_type_variable') ? 'variable' : 'simple';

        if (product_type === 'simple') {
            e.preventDefault();
            var quantity = 1; 
            fast_food_truck_addtocart(product_id, null, quantity, $fast_food_truck_button);
        }
        //  default behavior
    });

    $('body').on('click', '.add_to_cart', function(e) {
        e.preventDefault();

        var $fast_food_truck_button = $(this);
        var $fast_food_truck_form = $fast_food_truck_button.closest('.product-main').find('.variations_form');
        var product_id = $fast_food_truck_button.data('product_id');
        var quantity = 1; 
        var selectedVariationID = $fast_food_truck_form.data('selected_variation_id');

        if (selectedVariationID) {
            fast_food_truck_addtocart(product_id, selectedVariationID, quantity, $fast_food_truck_button);
        } else {
            console.log('No variation selected. Please select a variation.');
        }
    });
});