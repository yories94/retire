<!DOCTYPE html>
<html class="no-js" <?php language_attributes() ?>>

<head>
    <!-- Title -->
    <title><?php bloginfo( 'title' ); ?></title>

    <!-- Metas -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />

    <!-- browser icon -->
    <link rel="icon" type="image/x-icon" href="<?php bloginfo( 'template_url' ) ?>/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo( 'template_url' ) ?>/favicon.ico">

    <!-- apple touch icon -->
    <link rel="apple-touch-icon" href="<?php bloginfo( 'template_url' ); ?>/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo( 'template_url' ); ?>/apple-touch-icon-152x152.png">

    <!-- safari and mac icon -->
    <link rel="manifest" href="<?php bloginfo( 'template_url' ); ?>/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo( 'template_url' ); ?>/safari-pinned-tab.svg" color="#2260b4">
    
    <!-- microsoft icon -->
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-TileImage" content="<?php bloginfo( 'template_url' ); ?>/mstile-144x144.png">
    <meta name="msapplication-square70x70logo" content="<?php bloginfo( 'template_url' ); ?>/mstile-70x70.png">
    <meta name="msapplication-square150x150logo" content="<?php bloginfo( 'template_url' ); ?>/mstile-150x150.png">
    <meta name="msapplication-square310x310logo" content="<?php bloginfo( 'template_url' ); ?>/mstile-310x310.png">
    <meta name="msapplication-wide310x150logo" content="<?php bloginfo( 'template_url' ); ?>/mstile-310x150.png">
    <meta name="msapplication-config" content="<?php bloginfo( 'template_url' ) ?>/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <meta name="application-name" content="HappyLife Indonesia">

    <!-- Google fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Cabin|Playfair+Display&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">

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

    <?php
    // $halaman = is_front_page();
    $halaman = get_the_title( );

    if ($halaman == 'Homepage Happylife') :
    ?>

    <!-- Headermenu -->
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <!-- Brand/logo -->
            <a class="logo-happylife" href="#">
                <img src="<?php bloginfo( 'template_url' ); ?>/images/happylife_logo.png">
            </a>
            
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <i class="icofont-navigation-menu" style="color: #1d7dbe;font-size: 34px;"></i>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                
                <?php
                // Display main navigation
                wp_nav_menu( array(
                    'theme_location' => 'header_menu',
                    'menu_class'     => 'navbar-nav navigasi-utama',
                    'menu_id'        => '',
                    'container'      => ''
                ) );
                ?>

            </div>
        </div>
    </nav>    

    <?php
    else:
    ?>

    <!-- Mainmenu-Area -->
    <nav class="navbar navbar-expand-md half-transparent fixed-top">
        <div class="container">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>" style="margin-right: 1.5rem;">
                <img src="<?php bloginfo( 'template_url' ); ?>/images/HappyLife-putih.png">
            </a>
    
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <i class="icofont-navigation-menu"></i>
            </button>
                
            <!-- Links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <?php
                // Display main navigation
                wp_nav_menu( array(
                    'theme_location' => 'header_menu',
                    'menu_class'     => 'navbar-nav navigasi-fixed',
                    'menu_id'        => '',
                    'container'      => ''
                ) );
                ?>
            </div>
        </div>
    </nav>
    <!-- Mainmenu-Area-/ -->

    <?php
    endif;
    ?>