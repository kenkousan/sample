<?php

	/*---------------------------Width Layout -------------------*/
	$gym_training_coach_theme_lay = get_theme_mod( 'gym_training_coach_width_layout_options','Default');
    if($gym_training_coach_theme_lay == 'Default'){
		$gym_training_coach_custom_css .='body{';
			$gym_training_coach_custom_css .='max-width: 100%;';
		$gym_training_coach_custom_css .='}';
	}else if($gym_training_coach_theme_lay == 'Container Layout'){
		$gym_training_coach_custom_css .='body{';
			$gym_training_coach_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$gym_training_coach_custom_css .='}';
		$gym_training_coach_custom_css .='.page-template-home-page #header{';
			$gym_training_coach_custom_css .='position: static; background-color: #000;';
		$gym_training_coach_custom_css .='}';
	}else if($gym_training_coach_theme_lay == 'Box Layout'){
		$gym_training_coach_custom_css .='body{';
			$gym_training_coach_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$gym_training_coach_custom_css .='}';
		$gym_training_coach_custom_css .='.page-template-home-page #header{';
			$gym_training_coach_custom_css .='position: static; background-color: #000;';
		$gym_training_coach_custom_css .='}';
	}

	/*-------------- Footer Text -------------------*/
	$gym_training_coach_footer_text_align = get_theme_mod('gym_training_coach_footer_text_align');
	$gym_training_coach_custom_css .='.copyright-wrapper{';
		$gym_training_coach_custom_css .='text-align: '.esc_attr($gym_training_coach_footer_text_align).';';
	$gym_training_coach_custom_css .='}';

	$gym_training_coach_footer_text_padding = get_theme_mod('gym_training_coach_footer_text_padding');
	$gym_training_coach_custom_css .='.copyright-wrapper{';
		$gym_training_coach_custom_css .='padding-top: '.esc_attr($gym_training_coach_footer_text_padding).'px !important; padding-bottom: '.esc_attr($gym_training_coach_footer_text_padding).'px !important;';
	$gym_training_coach_custom_css .='}';

	$gym_training_coach_footer_bg_color = get_theme_mod('gym_training_coach_footer_bg_color');
	$gym_training_coach_custom_css .='.footer-wp{';
		$gym_training_coach_custom_css .='background-color: '.esc_attr($gym_training_coach_footer_bg_color).';';
	$gym_training_coach_custom_css .='}';

	$gym_training_coach_footer_bg_image = get_theme_mod('gym_training_coach_footer_bg_image');
	if($gym_training_coach_footer_bg_image != false){
		$gym_training_coach_custom_css .='.footer-wp{';
			$gym_training_coach_custom_css .='background: url('.esc_attr($gym_training_coach_footer_bg_image).');';
		$gym_training_coach_custom_css .='}';
	}

	$gym_training_coach_copyright_text_font_size = get_theme_mod('gym_training_coach_copyright_text_font_size', 15);
	$gym_training_coach_custom_css .='.copyright-wrapper p, .copyright-wrapper a{';
		$gym_training_coach_custom_css .='font-size: '.esc_attr($gym_training_coach_copyright_text_font_size).'px;';
	$gym_training_coach_custom_css .='}';

	/*------------- Back to Top  -------------------*/
	$gym_training_coach_back_to_top_border_radius = get_theme_mod('gym_training_coach_back_to_top_border_radius');
	$gym_training_coach_custom_css .='#scrollbutton {';
		$gym_training_coach_custom_css .='border-radius: '.esc_attr($gym_training_coach_back_to_top_border_radius).'px;';
	$gym_training_coach_custom_css .='}';

	$gym_training_coach_scroll_icon_font_size = get_theme_mod('gym_training_coach_scroll_icon_font_size', 22);
	$gym_training_coach_custom_css .='#scrollbutton {';
		$gym_training_coach_custom_css .='font-size: '.esc_attr($gym_training_coach_scroll_icon_font_size).'px;';
	$gym_training_coach_custom_css .='}';

	$gym_training_coach_top_bottom_scroll_padding = get_theme_mod('gym_training_coach_top_bottom_scroll_padding', 7);
	$gym_training_coach_custom_css .='#scrollbutton {';
		$gym_training_coach_custom_css .='padding-top: '.esc_attr($gym_training_coach_top_bottom_scroll_padding).'px; padding-bottom: '.esc_attr($gym_training_coach_top_bottom_scroll_padding).'px;';
	$gym_training_coach_custom_css .='}';

	$gym_training_coach_left_right_scroll_padding = get_theme_mod('gym_training_coach_left_right_scroll_padding', 17);
	$gym_training_coach_custom_css .='#scrollbutton {';
		$gym_training_coach_custom_css .='padding-left: '.esc_attr($gym_training_coach_left_right_scroll_padding).'px; padding-right: '.esc_attr($gym_training_coach_left_right_scroll_padding).'px;';
	$gym_training_coach_custom_css .='}';

	/*-------------- Post Button  -------------------*/
	$gym_training_coach_post_button_padding_top = get_theme_mod('gym_training_coach_post_button_padding_top');
	$gym_training_coach_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$gym_training_coach_custom_css .='padding-top: '.esc_attr($gym_training_coach_post_button_padding_top).'px; padding-bottom: '.esc_attr($gym_training_coach_post_button_padding_top).'px;';
	$gym_training_coach_custom_css .='}';

	$gym_training_coach_post_button_padding_right = get_theme_mod('gym_training_coach_post_button_padding_right');
	$gym_training_coach_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$gym_training_coach_custom_css .='padding-left: '.esc_attr($gym_training_coach_post_button_padding_right).'px; padding-right: '.esc_attr($gym_training_coach_post_button_padding_right).'px;';
	$gym_training_coach_custom_css .='}';

	$gym_training_coach_post_button_border_radius = get_theme_mod('gym_training_coach_post_button_border_radius');
	$gym_training_coach_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$gym_training_coach_custom_css .='border-radius: '.esc_attr($gym_training_coach_post_button_border_radius).'px;';
	$gym_training_coach_custom_css .='}';

	$gym_training_coach_post_comment_enable = get_theme_mod('gym_training_coach_post_comment_enable',true);
	if($gym_training_coach_post_comment_enable == false){
		$gym_training_coach_custom_css .='#comments{';
			$gym_training_coach_custom_css .='display: none;';
		$gym_training_coach_custom_css .='}';
	}

	/*----------- Preloader Color Option  ----------------*/
	$gym_training_coach_preloader_bg_color_option = get_theme_mod('gym_training_coach_preloader_bg_color_option');
	$gym_training_coach_preloader_icon_color_option = get_theme_mod('gym_training_coach_preloader_icon_color_option');
	$gym_training_coach_custom_css .='.frame{';
		$gym_training_coach_custom_css .='background-color: '.esc_attr($gym_training_coach_preloader_bg_color_option).';';
	$gym_training_coach_custom_css .='}';
	$gym_training_coach_custom_css .='.dot-1,.dot-2,.dot-3{';
		$gym_training_coach_custom_css .='background-color: '.esc_attr($gym_training_coach_preloader_icon_color_option).';';
	$gym_training_coach_custom_css .='}';

	// preloader type
	$gym_training_coach_theme_lay = get_theme_mod( 'gym_training_coach_preloader_type','First Preloader Type');
    if($gym_training_coach_theme_lay == 'First Preloader Type'){
		$gym_training_coach_custom_css .='.dot-1, .dot-2, .dot-3{';
			$gym_training_coach_custom_css .='';
		$gym_training_coach_custom_css .='}';
	}else if($gym_training_coach_theme_lay == 'Second Preloader Type'){
		$gym_training_coach_custom_css .='.dot-1, .dot-2, .dot-3{';
			$gym_training_coach_custom_css .='border-radius:0;';
		$gym_training_coach_custom_css .='}';
	}

	/*------------------ Skin Option  -------------------*/
	$gym_training_coach_theme_lay = get_theme_mod( 'gym_training_coach_background_skin','Without Background');
    if($gym_training_coach_theme_lay == 'With Background'){
		$gym_training_coach_custom_css .='.inner-service,#sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin{';
			$gym_training_coach_custom_css .='background-color: #fff; padding:20px;';
		$gym_training_coach_custom_css .='}';
		$gym_training_coach_custom_css .='.login-box a{';
			$gym_training_coach_custom_css .='background-color: #fff;';
		$gym_training_coach_custom_css .='}';
	}else if($gym_training_coach_theme_lay == 'Without Background'){
		$gym_training_coach_custom_css .='{';
			$gym_training_coach_custom_css .='background-color: transparent;';
		$gym_training_coach_custom_css .='}';
	}

	/*-------------- Woocommerce Button  -------------------*/
	$gym_training_coach_woocommerce_button_padding_top = get_theme_mod('gym_training_coach_woocommerce_button_padding_top',12);
	$gym_training_coach_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$gym_training_coach_custom_css .='padding-top: '.esc_attr($gym_training_coach_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($gym_training_coach_woocommerce_button_padding_top).'px;';
	$gym_training_coach_custom_css .='}';
	

	$gym_training_coach_woocommerce_button_padding_right = get_theme_mod('gym_training_coach_woocommerce_button_padding_right',15);
	$gym_training_coach_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$gym_training_coach_custom_css .='padding-left: '.esc_attr($gym_training_coach_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($gym_training_coach_woocommerce_button_padding_right).'px;';
	$gym_training_coach_custom_css .='}';

	$gym_training_coach_woocommerce_button_border_radius = get_theme_mod('gym_training_coach_woocommerce_button_border_radius',0);
	$gym_training_coach_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce a.added_to_cart{';
		$gym_training_coach_custom_css .='border-radius: '.esc_attr($gym_training_coach_woocommerce_button_border_radius).'px;';
	$gym_training_coach_custom_css .='}';

	$gym_training_coach_related_product_enable = get_theme_mod('gym_training_coach_related_product_enable',true);
	if($gym_training_coach_related_product_enable == false){
		$gym_training_coach_custom_css .='.related.products{';
			$gym_training_coach_custom_css .='display: none;';
		$gym_training_coach_custom_css .='}';
	}

	$gym_training_coach_woocommerce_product_border_enable = get_theme_mod('gym_training_coach_woocommerce_product_border_enable',false);
	if($gym_training_coach_woocommerce_product_border_enable == false){
		$gym_training_coach_custom_css .='.products li{';
			$gym_training_coach_custom_css .='border: none;';
		$gym_training_coach_custom_css .='}';
	}else if($gym_training_coach_woocommerce_product_border_enable == true){
		$gym_training_coach_custom_css .='.products li{';
			$gym_training_coach_custom_css .='border: 1px solid #ccc;';
		$gym_training_coach_custom_css .='}';
	}

	$gym_training_coach_woocommerce_product_padding_top = get_theme_mod('gym_training_coach_woocommerce_product_padding_top',0);
	$gym_training_coach_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$gym_training_coach_custom_css .='padding-top: '.esc_attr($gym_training_coach_woocommerce_product_padding_top).'px !important; padding-bottom: '.esc_attr($gym_training_coach_woocommerce_product_padding_top).'px !important;';
	$gym_training_coach_custom_css .='}';

	$gym_training_coach_woocommerce_product_padding_right = get_theme_mod('gym_training_coach_woocommerce_product_padding_right',0);
	$gym_training_coach_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$gym_training_coach_custom_css .='padding-left: '.esc_attr($gym_training_coach_woocommerce_product_padding_right).'px !important; padding-right: '.esc_attr($gym_training_coach_woocommerce_product_padding_right).'px !important;';
	$gym_training_coach_custom_css .='}';

	$gym_training_coach_woocommerce_product_border_radius = get_theme_mod('gym_training_coach_woocommerce_product_border_radius',3);
	$gym_training_coach_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$gym_training_coach_custom_css .='border-radius: '.esc_attr($gym_training_coach_woocommerce_product_border_radius).'px;';
	$gym_training_coach_custom_css .='}';

	$gym_training_coach_woocommerce_product_box_shadow = get_theme_mod('gym_training_coach_woocommerce_product_box_shadow', 0);
	$gym_training_coach_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$gym_training_coach_custom_css .='box-shadow: '.esc_attr($gym_training_coach_woocommerce_product_box_shadow).'px '.esc_attr($gym_training_coach_woocommerce_product_box_shadow).'px '.esc_attr($gym_training_coach_woocommerce_product_box_shadow).'px #ddd;';
	$gym_training_coach_custom_css .='}';

	$gym_training_coach_woo_product_sale_top_bottom_padding = get_theme_mod('gym_training_coach_woo_product_sale_top_bottom_padding', 0);
	$gym_training_coach_woo_product_sale_left_right_padding = get_theme_mod('gym_training_coach_woo_product_sale_left_right_padding', 0);
	$gym_training_coach_custom_css .='.woocommerce span.onsale{';
		$gym_training_coach_custom_css .='padding-top: '.esc_attr($gym_training_coach_woo_product_sale_top_bottom_padding).'px; padding-bottom: '.esc_attr($gym_training_coach_woo_product_sale_top_bottom_padding).'px; padding-left: '.esc_attr($gym_training_coach_woo_product_sale_left_right_padding).'px; padding-right: '.esc_attr($gym_training_coach_woo_product_sale_left_right_padding).'px; display:inline-block;';
	$gym_training_coach_custom_css .='}';

	$gym_training_coach_woo_product_sale_border_radius = get_theme_mod('gym_training_coach_woo_product_sale_border_radius',0);
	$gym_training_coach_custom_css .='.woocommerce span.onsale {';
		$gym_training_coach_custom_css .='border-radius: '.esc_attr($gym_training_coach_woo_product_sale_border_radius).'px;';
	$gym_training_coach_custom_css .='}';

	$gym_training_coach_woo_product_sale_position = get_theme_mod('gym_training_coach_woo_product_sale_position', 'Left');
	if($gym_training_coach_woo_product_sale_position == 'Right' ){
		$gym_training_coach_custom_css .='.woocommerce ul.products li.product .onsale{';
			$gym_training_coach_custom_css .=' left:auto; right:0;';
		$gym_training_coach_custom_css .='}';
	}elseif($gym_training_coach_woo_product_sale_position == 'Left' ){
		$gym_training_coach_custom_css .='.woocommerce ul.products li.product .onsale{';
			$gym_training_coach_custom_css .=' left:0; right:auto;';
		$gym_training_coach_custom_css .='}';
	}

	$gym_training_coach_wooproduct_sale_font_size = get_theme_mod('gym_training_coach_wooproduct_sale_font_size',14);
	$gym_training_coach_custom_css .='.woocommerce span.onsale{';
		$gym_training_coach_custom_css .='font-size: '.esc_attr($gym_training_coach_wooproduct_sale_font_size).'px;';
	$gym_training_coach_custom_css .='}';

	// Responsive Media
	$gym_training_coach_post_date = get_theme_mod( 'gym_training_coach_display_post_date',true);
	if($gym_training_coach_post_date == true && get_theme_mod( 'gym_training_coach_metafields_date',true) != true){
    	$gym_training_coach_custom_css .='.metabox .entry-date{';
			$gym_training_coach_custom_css .='display:none;';
		$gym_training_coach_custom_css .='} ';
	}
    if($gym_training_coach_post_date == true){
    	$gym_training_coach_custom_css .='@media screen and (max-width:575px) {';
		$gym_training_coach_custom_css .='.metabox .entry-date{';
			$gym_training_coach_custom_css .='display:inline-block;';
		$gym_training_coach_custom_css .='} }';
	}else if($gym_training_coach_post_date == false){
		$gym_training_coach_custom_css .='@media screen and (max-width:575px){';
		$gym_training_coach_custom_css .='.metabox .entry-date{';
			$gym_training_coach_custom_css .='display:none;';
		$gym_training_coach_custom_css .='} }';
	}

	$gym_training_coach_post_author = get_theme_mod( 'gym_training_coach_display_post_author',true);
	if($gym_training_coach_post_author == true && get_theme_mod( 'gym_training_coach_metafields_author',true) != true){
    	$gym_training_coach_custom_css .='.metabox .entry-author{';
			$gym_training_coach_custom_css .='display:none;';
		$gym_training_coach_custom_css .='} ';
	}
    if($gym_training_coach_post_author == true){
    	$gym_training_coach_custom_css .='@media screen and (max-width:575px) {';
		$gym_training_coach_custom_css .='.metabox .entry-author{';
			$gym_training_coach_custom_css .='display:inline-block;';
		$gym_training_coach_custom_css .='} }';
	}else if($gym_training_coach_post_author == false){
		$gym_training_coach_custom_css .='@media screen and (max-width:575px){';
		$gym_training_coach_custom_css .='.metabox .entry-author{';
			$gym_training_coach_custom_css .='display:none;';
		$gym_training_coach_custom_css .='} }';
	}

	$gym_training_coach_post_comment = get_theme_mod( 'gym_training_coach_display_post_comment',true);
	if($gym_training_coach_post_comment == true && get_theme_mod( 'gym_training_coach_metafields_comment',true) != true){
    	$gym_training_coach_custom_css .='.metabox .entry-comments{';
			$gym_training_coach_custom_css .='display:none;';
		$gym_training_coach_custom_css .='} ';
	}
    if($gym_training_coach_post_comment == true){
    	$gym_training_coach_custom_css .='@media screen and (max-width:575px) {';
		$gym_training_coach_custom_css .='.metabox .entry-comments{';
			$gym_training_coach_custom_css .='display:inline-block;';
		$gym_training_coach_custom_css .='} }';
	}else if($gym_training_coach_post_comment == false){
		$gym_training_coach_custom_css .='@media screen and (max-width:575px){';
		$gym_training_coach_custom_css .='.metabox .entry-comments{';
			$gym_training_coach_custom_css .='display:none;';
		$gym_training_coach_custom_css .='} }';
	}

	$gym_training_coach_post_time = get_theme_mod( 'gym_training_coach_display_post_time',false);
	if($gym_training_coach_post_time == true && get_theme_mod( 'gym_training_coach_metafields_time',false) != true){
    	$gym_training_coach_custom_css .='.metabox .entry-time{';
			$gym_training_coach_custom_css .='display:none;';
		$gym_training_coach_custom_css .='} ';
	}
    if($gym_training_coach_post_time == true){
    	$gym_training_coach_custom_css .='@media screen and (max-width:575px) {';
		$gym_training_coach_custom_css .='.metabox .entry-time{';
			$gym_training_coach_custom_css .='display:inline-block;';
		$gym_training_coach_custom_css .='} }';
	}else if($gym_training_coach_post_time == false){
		$gym_training_coach_custom_css .='@media screen and (max-width:575px){';
		$gym_training_coach_custom_css .='.metabox .entry-time{';
			$gym_training_coach_custom_css .='display:none;';
		$gym_training_coach_custom_css .='} }';
	}

	if($gym_training_coach_post_date == false && $gym_training_coach_post_author == false && $gym_training_coach_post_comment == false && $gym_training_coach_post_time == false){
		$gym_training_coach_custom_css .='@media screen and (max-width:575px) {';
    	$gym_training_coach_custom_css .='.metabox {';
			$gym_training_coach_custom_css .='display:none;';
		$gym_training_coach_custom_css .='} }';
	}

	$gym_training_coach_metafields_date = get_theme_mod( 'gym_training_coach_metafields_date',true);
	$gym_training_coach_metafields_author = get_theme_mod( 'gym_training_coach_metafields_author',true);
	$gym_training_coach_metafields_comment = get_theme_mod( 'gym_training_coach_metafields_comment',true);
	$gym_training_coach_metafields_time = get_theme_mod( 'gym_training_coach_metafields_time',true);
	if($gym_training_coach_metafields_date == false && $gym_training_coach_metafields_author == false && $gym_training_coach_metafields_comment == false && $gym_training_coach_metafields_time == false){
		$gym_training_coach_custom_css .='@media screen and (min-width:576px) {';
    	$gym_training_coach_custom_css .='.metabox {';
			$gym_training_coach_custom_css .='display:none;';
		$gym_training_coach_custom_css .='} }';
	}

	$gym_training_coach_slider = get_theme_mod( 'gym_training_coach_display_slider',false);
	if($gym_training_coach_slider == true && get_theme_mod( 'gym_training_coach_slider_hide', false) == false){
    	$gym_training_coach_custom_css .='#slider{';
			$gym_training_coach_custom_css .='display:none;';
		$gym_training_coach_custom_css .='} ';
	}
    if($gym_training_coach_slider == true){
    	$gym_training_coach_custom_css .='@media screen and (max-width:575px) {';
		$gym_training_coach_custom_css .='#slider{';
			$gym_training_coach_custom_css .='display:block;';
		$gym_training_coach_custom_css .='} }';
	}else if($gym_training_coach_slider == false){
		$gym_training_coach_custom_css .='@media screen and (max-width:575px){';
		$gym_training_coach_custom_css .='#slider{';
			$gym_training_coach_custom_css .='display:none;';
		$gym_training_coach_custom_css .='} }';
	}

	$gym_training_coach_sidebar = get_theme_mod( 'gym_training_coach_display_sidebar',true);
    if($gym_training_coach_sidebar == true){
    	$gym_training_coach_custom_css .='@media screen and (max-width:575px) {';
		$gym_training_coach_custom_css .='#sidebar{';
			$gym_training_coach_custom_css .='display:block;';
		$gym_training_coach_custom_css .='} }';
	}else if($gym_training_coach_sidebar == false){
		$gym_training_coach_custom_css .='@media screen and (max-width:575px) {';
		$gym_training_coach_custom_css .='#sidebar{';
			$gym_training_coach_custom_css .='display:none;';
		$gym_training_coach_custom_css .='} }';
	}

	$gym_training_coach_scroll = get_theme_mod( 'gym_training_coach_display_scrolltop',true);
	if($gym_training_coach_scroll == true && get_theme_mod( 'gym_training_coach_hide_show_scroll',true) != true){
    	$gym_training_coach_custom_css .='#scrollbutton {';
			$gym_training_coach_custom_css .='display:none;';
		$gym_training_coach_custom_css .='} ';
	}
    if($gym_training_coach_scroll == true){
    	$gym_training_coach_custom_css .='@media screen and (max-width:575px) {';
		$gym_training_coach_custom_css .='#scrollbutton {';
			$gym_training_coach_custom_css .='display:block;';
		$gym_training_coach_custom_css .='} }';
	}else if($gym_training_coach_scroll == false){
		$gym_training_coach_custom_css .='@media screen and (max-width:575px){';
		$gym_training_coach_custom_css .='#scrollbutton {';
			$gym_training_coach_custom_css .='display:none;';
		$gym_training_coach_custom_css .='} }';
	}

	$gym_training_coach_preloader = get_theme_mod( 'gym_training_coach_display_preloader',false);
	if($gym_training_coach_preloader == true && get_theme_mod( 'gym_training_coach_preloader',false) == false){
		$gym_training_coach_custom_css .='@media screen and (min-width:575px) {';
    	$gym_training_coach_custom_css .='.frame{';
			$gym_training_coach_custom_css .=' visibility: hidden;';
		$gym_training_coach_custom_css .='} }';
	}
    if($gym_training_coach_preloader == true){
    	$gym_training_coach_custom_css .='@media screen and (max-width:575px) {';
		$gym_training_coach_custom_css .='.frame{';
			$gym_training_coach_custom_css .='visibility:visible;';
		$gym_training_coach_custom_css .='} }';
	}else if($gym_training_coach_preloader == false){
		$gym_training_coach_custom_css .='@media screen and (max-width:575px){';
		$gym_training_coach_custom_css .='.frame{';
			$gym_training_coach_custom_css .='visibility: hidden;';
		$gym_training_coach_custom_css .='} }';
	}

	$gym_training_coach_search = get_theme_mod( 'gym_training_coach_display_search_category',true);
	if($gym_training_coach_search == true && get_theme_mod( 'gym_training_coach_search_enable_disable',true) != true){
    	$gym_training_coach_custom_css .='.search-cat-box{';
			$gym_training_coach_custom_css .='display:none;';
		$gym_training_coach_custom_css .='} ';
	}
    if($gym_training_coach_search == true){
    	$gym_training_coach_custom_css .='@media screen and (max-width:575px) {';
		$gym_training_coach_custom_css .='.search-cat-box{';
			$gym_training_coach_custom_css .='display:block;';
		$gym_training_coach_custom_css .='} }';
	}else if($gym_training_coach_search == false){
		$gym_training_coach_custom_css .='@media screen and (max-width:575px){';
		$gym_training_coach_custom_css .='.search-cat-box{';
			$gym_training_coach_custom_css .='display:none;';
		$gym_training_coach_custom_css .='} }';
	}

	$gym_training_coach_myaccount = get_theme_mod( 'gym_training_coach_display_myaccount',true);
	if($gym_training_coach_myaccount == true && get_theme_mod( 'gym_training_coach_myaccount_enable_disable',true) != true){
    	$gym_training_coach_custom_css .='.login-box{';
			$gym_training_coach_custom_css .='display:none;';
		$gym_training_coach_custom_css .='} ';
	}
    if($gym_training_coach_myaccount == true){
    	$gym_training_coach_custom_css .='@media screen and (max-width:575px) {';
		$gym_training_coach_custom_css .='.login-box{';
			$gym_training_coach_custom_css .='display:block;';
		$gym_training_coach_custom_css .='} }';
	}else if($gym_training_coach_myaccount == false){
		$gym_training_coach_custom_css .='@media screen and (max-width:575px){';
		$gym_training_coach_custom_css .='.login-box{';
			$gym_training_coach_custom_css .='display:none;';
		$gym_training_coach_custom_css .='} }';
	}

	// menu settings
	$gym_training_coach_menu_font_size_option = get_theme_mod('gym_training_coach_menu_font_size_option');
	$gym_training_coach_custom_css .='.primary-navigation ul li a{';
		$gym_training_coach_custom_css .='font-size: '.esc_attr($gym_training_coach_menu_font_size_option).'px;';
	$gym_training_coach_custom_css .='}';

	$gym_training_coach_menu_padding = get_theme_mod('gym_training_coach_menu_padding');
	$gym_training_coach_custom_css .='.primary-navigation ul li a{';
		$gym_training_coach_custom_css .='padding: '.esc_attr($gym_training_coach_menu_padding).'px;';
	$gym_training_coach_custom_css .='}';

	$gym_training_coach_theme_lay = get_theme_mod( 'gym_training_coach_text_tranform_menu','Capitalize');
    if($gym_training_coach_theme_lay == 'Uppercase'){
		$gym_training_coach_custom_css .='.primary-navigation ul li a{';
			$gym_training_coach_custom_css .='text-transform: uppercase;';
		$gym_training_coach_custom_css .='}';
	}else if($gym_training_coach_theme_lay == 'Lowercase'){
		$gym_training_coach_custom_css .='.primary-navigation ul li a{';
			$gym_training_coach_custom_css .='text-transform: lowercase;';
		$gym_training_coach_custom_css .='}';
	}
	else if($gym_training_coach_theme_lay == 'Capitalize'){
		$gym_training_coach_custom_css .='.primary-navigation ul li a{';
			$gym_training_coach_custom_css .='text-transform: capitalize;';
		$gym_training_coach_custom_css .='}';
	}

	//  comment form width
	$gym_training_coach_comment_form_width = get_theme_mod( 'gym_training_coach_comment_form_width');
	$gym_training_coach_custom_css .='#comments textarea{';
		$gym_training_coach_custom_css .='width: '.esc_attr($gym_training_coach_comment_form_width).'%;';
	$gym_training_coach_custom_css .='}';

	$gym_training_coach_title_comment_form = get_theme_mod('gym_training_coach_title_comment_form', 'Leave a Reply');
	if($gym_training_coach_title_comment_form == ''){
		$gym_training_coach_custom_css .='#comments h2#reply-title {';
			$gym_training_coach_custom_css .='display: none;';
		$gym_training_coach_custom_css .='}';
	}

	$gym_training_coach_comment_form_button_content = get_theme_mod('gym_training_coach_comment_form_button_content', 'Post Comment');
	if($gym_training_coach_comment_form_button_content == ''){
		$gym_training_coach_custom_css .='#comments p.form-submit {';
			$gym_training_coach_custom_css .='display: none;';
		$gym_training_coach_custom_css .='}';
	}

	// featured image setting
	$gym_training_coach_image_border_radius = get_theme_mod('gym_training_coach_image_border_radius', 0);
	$gym_training_coach_custom_css .='.box-image img, .content_box img{';
		$gym_training_coach_custom_css .='border-radius: '.esc_attr($gym_training_coach_image_border_radius).'%;';
	$gym_training_coach_custom_css .='}';

	$gym_training_coach_image_box_shadow = get_theme_mod('gym_training_coach_image_box_shadow',0);
	$gym_training_coach_custom_css .='.box-image img, .content_box img{';
		$gym_training_coach_custom_css .='box-shadow: '.esc_attr($gym_training_coach_image_box_shadow).'px '.esc_attr($gym_training_coach_image_box_shadow).'px '.esc_attr($gym_training_coach_image_box_shadow).'px #b5b5b5;';
	$gym_training_coach_custom_css .='}';

	// Post Block
	$gym_training_coach_post_block_option = get_theme_mod( 'gym_training_coach_post_block_option','By Block');
    if($gym_training_coach_post_block_option == 'By Without Block'){
		$gym_training_coach_custom_css .='.gridbox .inner-service, .related-inner-box, .mainbox-post, .layout2, .layout1, .post_format-post-format-video,.post_format-post-format-image,.post_format-post-format-audio, .post_format-post-format-gallery, .mainbox{';
			$gym_training_coach_custom_css .='border:none; margin:30px 0;';
		$gym_training_coach_custom_css .='}';
	}

	// post image 
	$gym_training_coach_post_featured_color = get_theme_mod('gym_training_coach_post_featured_color', '#F6551C');
	$gym_training_coach_post_featured_image = get_theme_mod('gym_training_coach_post_featured_image','Image');
	if($gym_training_coach_post_featured_image == 'Color'){
		$gym_training_coach_custom_css .='.post-color{';
			$gym_training_coach_custom_css .='background-color: '.esc_attr($gym_training_coach_post_featured_color).';';
		$gym_training_coach_custom_css .='}';
	}

	// featured image dimention
	$gym_training_coach_post_featured_image_dimention = get_theme_mod('gym_training_coach_post_featured_image_dimention', 'Default');
	$gym_training_coach_post_featured_image_custom_width = get_theme_mod('gym_training_coach_post_featured_image_custom_width');
	$gym_training_coach_post_featured_image_custom_height = get_theme_mod('gym_training_coach_post_featured_image_custom_height');
	if($gym_training_coach_post_featured_image_dimention == 'Custom'){
		$gym_training_coach_custom_css .='.box-image img{';
			$gym_training_coach_custom_css .='width: '.esc_attr($gym_training_coach_post_featured_image_custom_width).'px; height: '.esc_attr($gym_training_coach_post_featured_image_custom_height).'px;';
		$gym_training_coach_custom_css .='}';
	}

	// featured image dimention
	$gym_training_coach_custom_post_color_width = get_theme_mod('gym_training_coach_custom_post_color_width');
	$gym_training_coach_custom_post_color_height = get_theme_mod('gym_training_coach_custom_post_color_height');
	if($gym_training_coach_post_featured_image == 'Color'){
		$gym_training_coach_custom_css .='.post-color{';
			$gym_training_coach_custom_css .='width: '.esc_attr($gym_training_coach_custom_post_color_width).'px; height: '.esc_attr($gym_training_coach_custom_post_color_height).'px;';
		$gym_training_coach_custom_css .='}';
	}

	// site title font size
	$gym_training_coach_site_title_font_size = get_theme_mod('gym_training_coach_site_title_font_size', 25);
	$gym_training_coach_custom_css .='.logo .site-title{';
	$gym_training_coach_custom_css .='font-size: '.esc_attr($gym_training_coach_site_title_font_size).'px;';
	$gym_training_coach_custom_css .='}';

	// site tagline font size
	$gym_training_coach_site_tagline_font_size = get_theme_mod('gym_training_coach_site_tagline_font_size', 13);
	$gym_training_coach_custom_css .='p.site-description{';
	$gym_training_coach_custom_css .='font-size: '.esc_attr($gym_training_coach_site_tagline_font_size).'px;';
	$gym_training_coach_custom_css .='}';

	// woocommerce Product Navigation
	$gym_training_coach_wooproducts_nav = get_theme_mod('gym_training_coach_wooproducts_nav', 'Yes');
	if($gym_training_coach_wooproducts_nav == 'No'){
		$gym_training_coach_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$gym_training_coach_custom_css .='display: none;';
		$gym_training_coach_custom_css .='}';
	}

	// site title color
	$gym_training_coach_site_title_color = get_theme_mod('gym_training_coach_site_title_color');
	$gym_training_coach_custom_css .='.site-title a{';
		$gym_training_coach_custom_css .='color: '.esc_attr($gym_training_coach_site_title_color).' !important;';
	$gym_training_coach_custom_css .='}';

	// site tagline color
	$gym_training_coach_site_tagline_color = get_theme_mod('gym_training_coach_site_tagline_color');
	$gym_training_coach_custom_css .='.site-description{';
		$gym_training_coach_custom_css .='color: '.esc_attr($gym_training_coach_site_tagline_color).' !important;';
	$gym_training_coach_custom_css .='}';

	// logo padding
	$gym_training_coach_logo_padding = get_theme_mod('gym_training_coach_logo_padding', 20);
	$gym_training_coach_custom_css .='.logo{';
		$gym_training_coach_custom_css .='padding: '.esc_attr($gym_training_coach_logo_padding).'px;';
	$gym_training_coach_custom_css .='}';
	
	// site toggle button color
	$gym_training_coach_toggle_button_color = get_theme_mod('gym_training_coach_toggle_button_color');
	$gym_training_coach_custom_css .='.toggle-menu i{';
		$gym_training_coach_custom_css .='color: '.esc_attr($gym_training_coach_toggle_button_color).' !important;';
	$gym_training_coach_custom_css .='}';

	//Copyright background css
	$gym_training_coach_copyright_text_background = get_theme_mod('gym_training_coach_copyright_text_background');
	$gym_training_coach_custom_css .='.copyright-wrapper{';
		$gym_training_coach_custom_css .='background-color: '.esc_attr($gym_training_coach_copyright_text_background).';';
	$gym_training_coach_custom_css .='}';

	// menu font weight
	$gym_training_coach_font_weight_option_menu = get_theme_mod( 'gym_training_coach_font_weight_option_menu','600');
	if($gym_training_coach_font_weight_option_menu != ''){
		$gym_training_coach_custom_css .='.primary-navigation ul li a{';
			$gym_training_coach_custom_css .='font-weight: '.esc_attr($gym_training_coach_font_weight_option_menu).'!important;';
		$gym_training_coach_custom_css .='}';
	}

	// menu color
	$gym_training_coach_menu_color = get_theme_mod('gym_training_coach_menu_color');

	$gym_training_coach_custom_css .='.primary-navigation a, .primary-navigation ul li a, #site-navigation li a{';
			$gym_training_coach_custom_css .='color: '.esc_attr($gym_training_coach_menu_color).' !important;';
	$gym_training_coach_custom_css .='}';

// Sub menu color
	$gym_training_coach_sub_menu_color = get_theme_mod('gym_training_coach_sub_menu_color');

	$gym_training_coach_custom_css .='.primary-navigation ul.sub-menu a, .primary-navigation ul.sub-menu li a, #site-navigation ul.sub-menu li a{';
			$gym_training_coach_custom_css .='color: '.esc_attr($gym_training_coach_sub_menu_color).' !important;';
	$gym_training_coach_custom_css .='}';

// menu hover color
	$gym_training_coach_menu_hover_color = get_theme_mod('gym_training_coach_menu_hover_color');

	$gym_training_coach_custom_css .='.primary-navigation a:hover, .primary-navigation ul li a:hover, .primary-navigation .current_page_item > a:hover, .primary-navigation .current-menu-item > a:hover, .primary-navigation .current_page_ancestor > a:hover, #site-navigation li a:hover{';
			$gym_training_coach_custom_css .='color: '.esc_attr($gym_training_coach_menu_hover_color).' !important;';
	$gym_training_coach_custom_css .='}';

	/*----------------- Slider -----------------*/

	$gym_training_coach_slider_hide = get_theme_mod('gym_training_coach_slider_hide');
	if($gym_training_coach_slider_hide == false){
		$gym_training_coach_custom_css .='.page-template-home-page #header{';
			$gym_training_coach_custom_css .='position: static; background-color: #000;';
		$gym_training_coach_custom_css .='}';
	}

	/*----------------- Topbar -----------------*/

	$gym_training_coach_show_topbar = get_theme_mod('gym_training_coach_show_topbar');
	if($gym_training_coach_show_topbar == false){
		$gym_training_coach_custom_css .='.logo{';
			$gym_training_coach_custom_css .='padding: 15px;';
		$gym_training_coach_custom_css .='}';
		$gym_training_coach_custom_css .='.page-template-home-page #header, #header{';
			$gym_training_coach_custom_css .='padding: 20px;';
		$gym_training_coach_custom_css .='}';
	}

	/*----------------- Social Links -----------------*/

	$gym_training_coach_social_links = get_theme_mod('gym_training_coach_social_links');
	if($gym_training_coach_social_links == false){
		$gym_training_coach_custom_css .='.topbar{';
			$gym_training_coach_custom_css .='padding: 10px;';
		$gym_training_coach_custom_css .='}';
		
	}

	/*----------------- Call us -----------------*/

	$gym_training_coach_phone_number = get_theme_mod('gym_training_coach_phone_number');
	if($gym_training_coach_phone_number == false){
		$gym_training_coach_custom_css .='.main-header{';
			$gym_training_coach_custom_css .='padding: 10px;';
		$gym_training_coach_custom_css .='}';
	}