<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>

    <!-- grid guide -->
    <!-- <section class="gridguide">
        <div class="visible-lg">lg / 1200 </div>
        <div class="visible-sm">sm / 992 </div>
        <div class="visible-md">md / 768</div>
        <div class="visible-xs">xs / &lt; 768 </div>
    </section> -->
    <!-- Container fluid -->
    <div class="container">

        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">

                <!-- header -->
                <header>

                    <div class="brand_container">
                        <img src="<?php bloginfo("template_directory"); ?>/resources/img/logo.jpg" alt="branding.jpg">
                    </div>
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                            </div> <!-- // navbar-header -->
                            <?php
                                wp_nav_menu( array(
                                    'menu'              => 'primary-menu',
                                    'theme_location'    => 'primary',
                                    'depth'             => 2,
                                    'container'         => 'div',
                                    'container_class'   => 'collapse navbar-collapse',
                                    'container_id'      => 'bs-example-navbar-collapse-1',
                                    'menu_class'        => 'nav navbar-nav navbar-right',
                                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                    'walker'            => new wp_bootstrap_navwalker())
                                );
                            ?>
                        </div> <!-- // container-fluid -->
                    </nav> <!-- // navbar navbar-default -->
                    <p class="company_email text-muted"><span>business</span>@tolbusiness.com</p>
                </header>
