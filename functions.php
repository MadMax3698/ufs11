<?php

    add_action('intit', 'register_acf_blocks');
    function register_acf_blocks() {
        register_block_type( __DIR__ . '/acf-blocks/carousel' );
    }