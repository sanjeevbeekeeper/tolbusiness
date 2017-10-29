<?php

/* =================================================
    PLUGIN: wp-bootstrap-navwalker
==================================================== */
// Register Custom Navigation Walker
require_once('/../wp_bootstrap_navwalker.php');
// Declaring the menu
register_nav_menus( array(
    'primary-menu' => __( 'Primary Menu', 'tolbusiness' ),
    ));
