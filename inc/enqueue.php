<?php

/* =================================================
    Base Scripts and Styles
==================================================== */
    function tolbusiness_enqueue() {
        // bootstrap.js
        wp_enqueue_script(
            'bootstrap-script',
            get_template_directory_uri() . '/lib/vendors/bootstrap/bootstrap.min.js',
            array('jquery'),
            '3.3.4',
            true  // show in footer
            );
        // ===== BOOTSTRAP CSS
        wp_enqueue_style (
            'bootstrap-style',
            get_stylesheet_directory_uri() . '/lib/vendors/bootstrap/bootstrap.min.css',
            array(),
            '3.3.4',
            'all'
            );

        // ===== CUSTOM CSS
        wp_enqueue_style (
            'customcss',
            get_stylesheet_directory_uri() . '/lib/css/main.min.css',
            array(),
            '1.0.0',
            'all'
            );
        }
    add_action( 'wp_enqueue_scripts', 'tolbusiness_enqueue' );
