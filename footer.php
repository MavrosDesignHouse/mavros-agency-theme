<?php

/**
 * Footer template.
 *
 * @package Mavros_Agency
 */

if (!defined('ABSPATH')) {
    exit;
}

$mv_footer_logo_url = 'https://staging.mavrosagency.com/wp-content/uploads/2026/06/MAVROS_AGENCy_logos-18.png';

$mv_footer_links = array(
    array(
        'label' => 'Početna',
        'url'   => home_url('/#hero'),
    ),
    array(
        'label' => 'Usluge',
        'url'   => home_url('/#usluge'),
    ),
    array(
        'label' => 'Proces',
        'url'   => home_url('/#proces'),
    ),
    array(
        'label' => 'Cjenik',
        'url'   => home_url('/cjenik/'),
    ),
    array(
        'label' => 'Radovi',
        'url'   => home_url('/#radovi'),
    ),
    array(
        'label' => 'O Mavrosu',
        'url'   => home_url('/#o-meni'),
    ),
    array(
        'label' => 'Audit',
        'url'   => home_url('/#audit'),
    ),
    array(
        'label' => 'FAQ',
        'url'   => home_url('/#faq'),
    ),
    array(
        'label' => 'Kontakt',
        'url'   => home_url('/#kontakt'),
    ),
);

$mv_footer_socials = array(
    array(
        'label' => 'Instagram',
        'url'   => 'https://www.instagram.com/mavros.agency',
        'icon'  => 'instagram',
    ),
    array(
        'label' => 'Facebook',
        'url'   => 'https://www.facebook.com/mavrosagency',
        'icon'  => 'facebook',
    ),
    array(
        'label' => 'TikTok',
        'url'   => 'https://www.tiktok.com/@mavros.agency',
        'icon'  => 'tiktok',
    ),
    array(
        'label' => 'WhatsApp',
        'url'   => 'https://wa.me/385953700095',
        'icon'  => 'whatsapp',
    ),
);

$mv_privacy_policy_url = function_exists('get_privacy_policy_url') ? get_privacy_policy_url() : '';
$mv_shop_page_id       = (int) get_option('woocommerce_shop_page_id');
$mv_has_shop           = class_exists('WooCommerce') && $mv_shop_page_id > 0;
$mv_shop_url           = $mv_has_shop ? get_permalink($mv_shop_page_id) : '';
?>

<footer class="mv-footer" id="footer" aria-label="Mavros Agency footer">
    <div class="mv-footer__shell">

        <div class="mv-footer__top">
            <a class="mv-footer__logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Mavros Agency početna stranica">
                <?php if (has_custom_logo()) : ?>
                    <?php
                    $mv_footer_custom_logo_id = get_theme_mod('custom_logo');
                    $mv_footer_custom_logo    = wp_get_attachment_image_src($mv_footer_custom_logo_id, 'full');
                    ?>

                    <?php if (!empty($mv_footer_custom_logo[0])) : ?>
                        <img
                            src="<?php echo esc_url($mv_footer_custom_logo[0]); ?>"
                            alt="<?php echo esc_attr(get_bloginfo('name') ?: 'Mavros Agency'); ?>">
                    <?php else : ?>
                        <img
                            src="<?php echo esc_url($mv_footer_logo_url); ?>"
                            alt="Mavros Agency">
                    <?php endif; ?>
                <?php else : ?>
                    <img
                        src="<?php echo esc_url($mv_footer_logo_url); ?>"
                        alt="Mavros Agency">
                <?php endif; ?>
            </a>

            <a class="mv-footer__email" href="mailto:hello@mavrosagency.com">
                hello@mavrosagency.com
            </a>
        </div>

        <div class="mv-footer__content">

            <section class="mv-footer__brief" aria-labelledby="mv-footer-brief-title">
                <span class="mv-footer__label">Brief</span>

                <h3 id="mv-footer-brief-title">
                    Imaš biznis, staru stranicu ili ideju koju treba pretvoriti u jasniji prvi dojam?
                </h3>

                <p>
                    Pošalji mi kratki opis, link ili problem. Ne trebaš imati savršen brief. Dovoljan je smjer.
                </p>

                <a class="mv-footer__cta" href="<?php echo esc_url(home_url('/#kontakt')); ?>">
                    Besplatni mockup
                    <span aria-hidden="true">↗</span>
                </a>
            </section>

            <nav class="mv-footer__nav" aria-label="Footer navigacija">
                <span class="mv-footer__label">Stranica</span>

                <?php foreach ($mv_footer_links as $link) : ?>
                    <a href="<?php echo esc_url($link['url']); ?>">
                        <?php echo esc_html($link['label']); ?>
                    </a>
                <?php endforeach; ?>

                <?php if ($mv_has_shop && !empty($mv_shop_url)) : ?>
                    <a href="<?php echo esc_url($mv_shop_url); ?>">
                        Shop
                    </a>
                <?php endif; ?>
            </nav>

            <section class="mv-footer__contact" aria-label="Kontakt informacije">
                <span class="mv-footer__label">Kontakt</span>

                <a href="mailto:hello@mavrosagency.com">
                    hello@mavrosagency.com
                </a>

                <a href="https://wa.me/385953700095" target="_blank" rel="noopener">
                    095 370 0095
                </a>

                <p>
                    Zagreb, Hrvatska<br>
                    Web dizajn, WordPress, UX/UI, branding i lokalni SEO setup.
                </p>
            </section>

            <section class="mv-footer__social" aria-label="Social media linkovi">
                <span class="mv-footer__label">Social</span>

                <div class="mv-footer__social-grid">
                    <?php foreach ($mv_footer_socials as $social) : ?>
                        <a
                            href="<?php echo esc_url($social['url']); ?>"
                            target="_blank"
                            rel="noopener"
                            aria-label="<?php echo esc_attr('Mavros Agency ' . $social['label']); ?>">

                            <?php if ('instagram' === $social['icon']) : ?>
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <rect x="4" y="4" width="16" height="16" rx="5" fill="none" stroke="currentColor" stroke-width="2" />
                                    <circle cx="12" cy="12" r="4" fill="none" stroke="currentColor" stroke-width="2" />
                                    <circle cx="17" cy="7" r="1.2" fill="currentColor" />
                                </svg>
                            <?php endif; ?>

                            <?php if ('facebook' === $social['icon']) : ?>
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M14 8H16V4H13C9.9 4 8 5.9 8 9V11H5V15H8V22H12V15H15.3L16 11H12V9.2C12 8.4 12.4 8 13.2 8H14Z" fill="currentColor" />
                                </svg>
                            <?php endif; ?>

                            <?php if ('tiktok' === $social['icon']) : ?>
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M14 3V13.2C14 16.6 11.9 19 8.8 19C6.2 19 4 17.1 4 14.5C4 11.9 6.1 10 8.6 10C9.1 10 9.6 10.1 10 10.2V14.2C9.7 14 9.3 13.9 8.9 13.9C8 13.9 7.3 14.5 7.3 15.4C7.3 16.3 8 16.9 8.9 16.9C10 16.9 10.8 16.1 10.8 14.6V3H14ZM15.2 3C15.7 5.5 17.4 7.1 20 7.4V11.1C17.9 11 16.3 10.3 15.2 9.2V3Z" fill="currentColor" />
                                </svg>
                            <?php endif; ?>

                            <?php if ('whatsapp' === $social['icon']) : ?>
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M12 3.8C7.5 3.8 3.8 7.3 3.8 11.7C3.8 13.2 4.2 14.6 5 15.8L4 20.2L8.5 19.1C9.6 19.7 10.8 20 12 20C16.5 20 20.2 16.5 20.2 11.7C20.2 7.3 16.5 3.8 12 3.8Z" fill="none" stroke="currentColor" stroke-width="2" />
                                    <path d="M9.2 8.4C9.4 8.1 9.6 8.1 9.9 8.1H10.5C10.7 8.1 10.9 8.2 11 8.5L11.8 10.3C11.9 10.6 11.8 10.8 11.6 11L11.2 11.4C11.1 11.5 11.1 11.7 11.2 11.8C11.6 12.5 12.2 13.1 12.9 13.5C13.1 13.6 13.2 13.6 13.4 13.4L13.9 12.9C14.1 12.7 14.3 12.7 14.6 12.8L16.3 13.6C16.6 13.7 16.7 13.9 16.7 14.2V14.7C16.7 15.3 16.2 15.9 15.5 16C14.4 16.1 12.7 15.6 11 14.1C9.3 12.6 8.5 10.9 8.6 9.7C8.6 9.2 8.9 8.7 9.2 8.4Z" fill="currentColor" />
                                </svg>
                            <?php endif; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>

        <div class="mv-footer__bottom">
            <p>
                © <?php echo esc_html(date_i18n('Y')); ?> Mavros Agency. Sva prava pridržana.
            </p>

            <p>
                Zagreb / Hrvatska

                <?php if (!empty($mv_privacy_policy_url)) : ?>
                    · <a href="<?php echo esc_url($mv_privacy_policy_url); ?>">Politika privatnosti</a>
                <?php endif; ?>
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>