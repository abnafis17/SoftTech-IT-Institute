<?php

	add_action('after_setup_theme','bth_functions');

	function bth_functions(){
		add_theme_support('title-tag');
		add_theme_support('custom-background', array(
			'default-image' => get_template_directory_uri().'/images/main.jpg'
		));
		add_theme_support('custom-header', array(
			'default-image'=> get_template_directory_uri().'/images/main.jpg'
		));

		load_theme_textdomain('basictheme1', get_template_directory().'/languages');

		register_nav_menu('main-menu', __('Main Menu', 'basictheme1'));
	}

	add_action('wp_enqueue_scripts','bth_styles');

	function bth_styles(){
		wp_enqueue_style('style',get_stylesheet_uri());
	}

?>