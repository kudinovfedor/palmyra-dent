<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">

<?php wp_body(); ?>

<div class="wrapper">

    <header class="header">
        <div class="header-before">
            <div class="container d-flex flex-wrap">
                <?php
                $address = get_theme_mod('bw_additional_address');
                $timeWork = get_theme_mod('bw_additional_work_schedule');
                if (!empty($address)) { ?>
                    <div class="header-item">
                        <i class="fas fa-fw fa-home" aria-hidden="true"></i> <?php echo esc_html($address); ?>
                    </div>
                <?php }
                if (!empty($timeWork)) { ?>
                    <div class="header-item">
                        <i class="far fa-fw fa-clock" aria-hidden="true"></i> <?php echo esc_html($timeWork); ?>
                    </div>
                <?php } ?>
                <?php if (has_phones()) { ?>
                    <div class="header-item header-phone">
                        <ul class="phone">
                            <?php foreach (get_phones() as $phone) {
                                $tel = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
                                ?>
                                <li class="phone-item">
                                    <a href="tel:<?php echo esc_attr(get_phone_number($tel)); ?>"
                                       class="phone-number">
                                        <?php echo str_replace('+38', '', $phone); ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
                <?php if (has_social()) { ?>
                    <div class="header-item header-social">
                        <ul class="social">
                            <?php foreach (get_social() as $social) { ?>
                                <li class="social-item">
                                    <a href="<?php echo esc_attr(esc_url($social['url'])); ?>" class="social-link" target="_blank">
                                        <i class="<?php echo esc_attr($social['icon']); ?>" aria-hidden="true"
                                           aria-label="<?php echo esc_attr($social['text']); ?>"></i>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
                <?php if (function_exists('pll_the_languages')) { ?>
                    <div class="header-item header-lang">
                        <ul class="lang">
                            <?php pll_the_languages(array(
                                'show_flags' => 0,
                                'show_names' => 1,
                                'hide_if_empty' => 0,
                                'display_names_as' => 'slug'
                            )); ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="header-main">
            <div class="container d-flex flex-wrap justify-content-between align-items-center">
                <div class="header-item header-logo">
                    <div class="logo"><?php get_default_logo_link(); ?></div>
                </div>
                <?php if (has_nav_menu('main-nav')) { ?>
                    <nav class="header-item header-nav nav js-menu">
                        <button type="button" tabindex="0" class="menu-item-close menu-close js-menu-close"></button>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'main-nav',
                            'container' => false,
                            'menu_class' => 'menu-container',
                            'menu_id' => '',
                            'fallback_cb' => 'wp_page_menu',
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth' => 3
                        )); ?>
                    </nav>
                <?php } ?>
                <div class="header-item header-btn">
                    <button type="button" class="button-medium <?php the_lang_class('js-appointment'); ?>">
                        <?php _e('Record to reception', 'brainworks'); ?>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div class="container js-container">

        <div class="nav-mobile-header">
            <button class="hamburger js-hamburger" type="button" tabindex="0">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
            </button>
            <div class="logo"><?php get_default_logo_link(); ?></div>
        </div>