<?php

    // assets principali
	function ufs11_main_assets() {
		wp_enqueue_style('main', get_template_directory_uri() . '/assets/styles/main.css', array(), '1.0.0', false);
		wp_enqueue_script('global', get_template_directory_uri() . '/assets/scripts/global.js', array('jquery'), '1.0.0', true);
	}
	add_action('wp_enqueue_scripts', 'ufs11_main_assets');

    // REGISTRO assets da caricare se il blocco viene usato
    function ufs11_register_assets() {
		wp_register_style('slick', get_template_directory_uri() . '/vendor/slick/slick.css', array(), '1.0.0', false);
        wp_register_script('slick', get_template_directory_uri() . '/vendor/slick/slick.js', array('jquery'), '1.0.0', true);
        wp_register_script('carousel', get_template_directory_uri() . '/assets/scripts/carousel.js', array('global', 'slick'), '1.0.0', true);
        wp_register_script('carousel', get_template_directory_uri() . '/assets/styles/carousel.css', array(''), '1.0.0', false);
	}
	add_action('wp_enqueue_scripts', 'ufs11_register_assets');