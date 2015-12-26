<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title('&laquo;', true, 'right'); ?> Vuong Nguyen (Harvey)</title>
        <meta name="description" content="">

        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/dist/images/favicon.png">
        <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/dist/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/dist/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/dist/images/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="256x256" href="<?php bloginfo('template_url'); ?>/dist/images/apple-touch-icon-256x256.png">
        <link rel="apple-touch-icon" sizes="512x512" href="<?php bloginfo('template_url'); ?>/dist/images/apple-touch-icon-512x512.png">

        <link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_url'); ?>/dist/images/favicon.png"/>
        <link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_url'); ?>/dist/images/apple-touch-icon.png"/>

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/vendor/slick/slick.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/vendor/slick/slick-theme.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/css/style.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/vendor/animsition/dist/css/animsition.css">
        
        
        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>
        <div class="animsition" >
            <nav>
                <div class="container">
                    <h1 class="nav-title">Harvey</h1>

                    <div class="menu hamburger-button js-btn" data-action="slide-down">
                        <span class="menu-global menu-top"></span>
                        <span class="menu-global menu-middle"></span>
                        <span class="menu-global menu-bottom"></span>
                    </div>
                </div>
            </nav>

            <div class="nav-block pos-f full-height bottom-up">
                <?php if ( has_nav_menu( 'header_menu' ) ) : ?>
                        <?php
                        // Primary navigation menu.
                        wp_nav_menu( array(
                                'menu_class'     => 'header-menu pos-a',
                                'theme_location' => 'header_menu',
                        ) );
                        ?>
                <?php endif; ?>
                <div class="social-menu">
                    <ul>
                        <a href="<?php the_field('twitter', 'option'); ?>"><li class="fa fa-twitter"></li></a>
                        <a href="<?php the_field('linkedin', 'option'); ?>"><li class="fa fa-linkedin"></li></a>
                        <a href="<?php the_field('github', 'option'); ?>"><li class="fa fa-github-alt"></li></a>
                        <a href="mailto:<?php the_field('mail', 'option'); ?>"><li class="fa fa-envelope"></li></a>
                    </ul>
                </div>
            </div>
