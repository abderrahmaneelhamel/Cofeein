<?php 

	$coffee_shop_corner_custom_style = '';

	// Logo Size
	$coffee_shop_corner_logo_top_padding = get_theme_mod('coffee_shop_corner_logo_top_padding');
	$coffee_shop_corner_logo_bottom_padding = get_theme_mod('coffee_shop_corner_logo_bottom_padding');
	$coffee_shop_corner_logo_left_padding = get_theme_mod('coffee_shop_corner_logo_left_padding');
	$coffee_shop_corner_logo_right_padding = get_theme_mod('coffee_shop_corner_logo_right_padding');

	if( $coffee_shop_corner_logo_top_padding != '' || $coffee_shop_corner_logo_bottom_padding != '' || $coffee_shop_corner_logo_left_padding != '' || $coffee_shop_corner_logo_right_padding != ''){
		$coffee_shop_corner_custom_style .=' .logo {';
			$coffee_shop_corner_custom_style .=' padding-top: '.esc_attr($coffee_shop_corner_logo_top_padding).'px; padding-bottom: '.esc_attr($coffee_shop_corner_logo_bottom_padding).'px; padding-left: '.esc_attr($coffee_shop_corner_logo_left_padding).'px; padding-right: '.esc_attr($coffee_shop_corner_logo_right_padding).'px;';
		$coffee_shop_corner_custom_style .=' }';
	}