<!DOCTYPE html>
<html class="no-js" <?php language_attributes() ?>>

<head>
    <!-- Title -->
    <title><?php bloginfo( 'title' ); ?></title>

    <!-- Metas -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="<?php bloginfo( 'template_url' ); ?>/images/HappyLife-putih.png">
    <link rel="shortcut icon" type="image/ico" href="<?php bloginfo( 'template_url' ); ?>/images/HappyLife-2.png" />

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <!--Preloader-->
    <!-- <div class="preloader">
        <div class="spinner"></div>
    </div> -->

    <!-- Mainmenu-Area -->
    <nav class="navbar navbar-expand-md half-transparent fixed-top">
        <div class="container">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="#" style="margin-right: 1.5rem;">
                <img src="<?php bloginfo( 'template_url' ); ?>/images/HappyLife-putih.png">
            </a>
    
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <i class="fa fa-bars" style="font-size: 24px;"></i>
            </button>
                
            <!-- Links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <?php
                // Display main navigation
                wp_nav_menu( array(
                    'theme_location' => 'header_menu',
                    'menu_class'     => 'navbar-nav',
                    'menu_id'        => '',
                    'container'      => ''
                ) );
                ?>
            </div>
        </div>
    </nav>
    <!-- Mainmenu-Area-/ -->