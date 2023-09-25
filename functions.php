<?php

    if ( ! function_exists('ufs11_setup') ) {
        function ufs11_setup() {
            require get_template_directory() . '/inc/extend-functions/assets.php';
        }
    }
    add_action('after_setup_theme', 'ufs11_setup');


    add_action( 'init', 'register_acf_blocks' );
    function register_acf_blocks() {
        register_block_type( __DIR__ . '/acf-blocks/carousel' );
    }