<?php


$ecommerce_mega_store_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$ecommerce_mega_store_text_transform = get_theme_mod( 'menu_text_transform_ecommerce_mega_store','UPPERCASE');
    if($ecommerce_mega_store_text_transform == 'CAPITALISE'){

		$ecommerce_mega_store_custom_css .='#main-menu ul li a{';

			$ecommerce_mega_store_custom_css .='text-transform: capitalize ; font-size: 13px !important;';

		$ecommerce_mega_store_custom_css .='}';

	}else if($ecommerce_mega_store_text_transform == 'UPPERCASE'){

		$ecommerce_mega_store_custom_css .='#main-menu ul li a{';

			$ecommerce_mega_store_custom_css .='text-transform: uppercase ; font-size: 13px !important';

		$ecommerce_mega_store_custom_css .='}';

	}else if($ecommerce_mega_store_text_transform == 'LOWERCASE'){

		$ecommerce_mega_store_custom_css .='#main-menu ul li a{';

			$ecommerce_mega_store_custom_css .='text-transform: lowercase ; font-size: 13px !important';

		$ecommerce_mega_store_custom_css .='}';
	}
