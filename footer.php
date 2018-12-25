</div><!-- .page-wrapper end-->

<footer class="footer js-footer">
    <?php if (is_active_sidebar('footer-widget-area')) : ?>
        <div class="pre-footer">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar('footer-widget-area'); ?>
                </div>
            </div>
        </div><!-- .pre-footer end-->
    <?php endif; ?>

    <div class="footer-main">
        <div class="container">
            <div class="footer-before d-flex flex-wrap justify-content-between align-items-center">
                <div class="footer-item footer-logo">
                    <div class="logo"><?php get_default_logo_link('logo-f.png'); ?></div>
                </div>
                <?php if (has_nav_menu('second-menu')) { ?>
                    <nav class="footer-item footer-nav nav">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'second-menu',
                            'container' => false,
                            'menu_class' => 'menu-container',
                            'menu_id' => '',
                            'fallback_cb' => false,
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth' => 1
                        )); ?>
                    </nav>
                <?php } ?>
                <div class="footer-item footer-btn">
                    <button type="button" class="button-medium button-inverse <?php the_lang_class('js-appointment'); ?>">
                        <?php _e('Record to reception', 'brainworks'); ?>
                    </button>
                </div>
            </div>
            <div class="footer-after d-flex flex-wrap justify-content-between">
                <?php
                $address = get_theme_mod('bw_additional_address');
                $email = get_theme_mod('bw_additional_email');
                if (!empty($address)) { ?>
                    <div class="footer-item">
                        <i class="fas fa-fw fa-home" aria-hidden="true"></i> <?php echo esc_html($address); ?>
                    </div>
                <?php }
                if (!empty($email)) { ?>
                    <div class="footer-item">
                        <i class="fas fa-fw fa-envelope" aria-hidden="true"></i>
                        <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
                    </div>
                <?php } ?>
                <?php if (has_phones()) { ?>
                    <div class="footer-item footer-phone">
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
                    <div class="footer-item footer-social">
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
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="footer-item col-sm-6">
                    &copy; <?php bloginfo('name') ?> - <?php _e('All rights reserved', 'brainworks') ?>
                </div>
                <div class="footer-item col-sm-6 text-right">
                    <?php _e('Developed by', 'brainworks') ?>
                    <a href="https://brainworks.com.ua" target="_blank">Brain Works</a>
                    &copy; <?php echo date('Y'); ?>
                </div>
            </div>
        </div>
    </div>
</footer>

</div><!-- .wrapper end-->

<?php scroll_top(); ?>

<?php if (is_customize_preview()) { ?>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_scroll_top_display" }'>
        <?php esc_html_e('Edit Scroll Top', 'brainworks'); ?>
    </button>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_analytics_google_placed" }'>
        <?php esc_html_e('Edit Analytics Tracking Code', 'brainworks'); ?>
    </button>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_login_logo" }'>
        <?php esc_html_e('Edit Login Logo', 'brainworks'); ?>
    </button>
<?php } ?>

<div class="is-hide"><?php svg_sprite(); ?></div>

<?php wp_footer(); ?>

</body>
</html>
