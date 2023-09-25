<?php

    // main assets

    function ufs11_main_assets () {
        wp_enqueue_style('main', get_template_directory_uri() . '/assets/styles/main.css', array(), '1.0.0', false);
        wp_enqueue_style('global' , get_templates_directory_uri() . '/assets/styles/main.css' , array() , '1.0.0', true)
    }

    add_action('wp_enqueue_scripts' , 'ufs11_main_assets');