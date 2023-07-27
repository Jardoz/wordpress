<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php
        bloginfo('name');
        echo " | ";
        bloginfo('description');
        ?>
    </title>
    <meta name="theme-color" content="#c9e0e04d">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/favicon.ico"
        type="image/x-icon">
    <link rel="apple-touch-icon"
        href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57"
        href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72"
        href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76"
        href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
        href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
        href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
        href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon-180x180.png">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <?php
    wp_head();
    ?>
</head>

<body class="no-svg">
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-11 col-sm-12 col-md-12 col-lg-3">
                    <div class="header__logo">
                        <?php
                        the_custom_logo();
                        ?>
                        <span class="header__logo-text">kids world</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-9 offset-lg-0 col-xl-7 offset-xl-2 ">
                    <div class="header__contacts">
                        <div class="header__contacts-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/svg/email.svg" alt="mail"
                                class="header__contacts-logo">
                            <a href="mailto:mirdetstva@gmail.com" class="header__contacts-mail">
                                <?php the_field('mail', 2); ?>
                            </a>
                        </div>
                        <div class="header__contacts-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/svg/phone.svg"
                                alt="phone" class="header__contacts-logo">
                            <div class="header__contacts-tel">
                                <a href="tel:+327867834347">
                                    <?php the_field('phone', 2); ?>
                                </a>
                                <a href="tel:+327867834358">
                                    <?php the_field('phone2', 2); ?>
                                </a>
                            </div>
                        </div>
                        <div class="header__contacts-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/svg/pointer.svg"
                                alt="pointer" class="header__contacts-logo">
                            <address>
                                <?php the_field('address', 2); ?>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="row" data-slide="1">
                <ul class="header__nav">
                    <li>
                        <a class="header__nav-item" href="#about">About</a>
                    </li>
                    <li>
                        <a class="header__nav-item" href="#specialists">Team</a>
                    </li>
                    <li>
                        <a class="header__nav-item" href="#toys">Toys</a>
                    </li>
                    <li>
                        <a class="header__nav-item" href="#aboutus">Our history</a>
                    </li>
                    <li>
                        <a class="header__nav-item" href="#contacts">Contacts and feedbacks</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header__hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>