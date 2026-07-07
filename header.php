<?php

/**
 * Header template.
 *
 * @package Mavros_Agency
 */

if (!defined('ABSPATH')) {
    exit;
}

$mv_logo_url = 'https://staging.mavrosagency.com/wp-content/uploads/2026/06/MAVROS_AGENCy_logos-18.png';

$mv_primary_links = array(
    array(
        'label'      => 'Početna',
        'url'        => home_url('/#hero'),
        'section_id' => 'hero',
    ),
    array(
        'label'      => 'Usluge',
        'url'        => home_url('/#usluge'),
        'section_id' => 'usluge',
    ),
    array(
        'label'      => 'O nama',
        'url'        => home_url('/o-nama/'),
        'section_id' => '',
    ),
    array(
        'label'      => 'Proces',
        'url'        => home_url('/#proces'),
        'section_id' => 'proces',
    ),
    array(
        'label'      => 'Radovi',
        'url'        => home_url('/#radovi'),
        'section_id' => 'radovi',
    ),
    array(
        'label'      => 'Audit',
        'url'        => home_url('/#audit'),
        'section_id' => 'audit',
    ),
    array(
        'label'      => 'Cjenik',
        'url'        => home_url('/cjenik/'),
        'section_id' => '',
    ),
    array(
        'label'      => 'Kontakt',
        'url'        => home_url('/#kontakt'),
        'section_id' => 'kontakt',
    ),
);

$mv_drawer_links = array(
    array(
        'label'      => 'Početna',
        'url'        => home_url('/#hero'),
        'section_id' => 'hero',
        'number'     => '01',
    ),
    array(
        'label'      => 'Usluge',
        'url'        => home_url('/#usluge'),
        'section_id' => 'usluge',
        'number'     => '02',
    ),
    array(
        'label'      => 'Proces',
        'url'        => home_url('/#proces'),
        'section_id' => 'proces',
        'number'     => '03',
    ),
    array(
        'label'      => 'Cjenik',
        'url'        => home_url('/cjenik/'),
        'section_id' => '',
        'number'     => '04',
    ),
    array(
        'label'      => 'Radovi',
        'url'        => home_url('/#radovi'),
        'section_id' => 'radovi',
        'number'     => '05',
    ),
    array(
        'label'      => 'O Mavrosu',
        'url'        => home_url('/o-nama'),
        'section_id' => 'o-nama',
        'number'     => '06',
    ),
    array(
        'label'      => 'Audit',
        'url'        => home_url('/#audit'),
        'section_id' => 'audit',
        'number'     => '07',
    ),
    array(
        'label'      => 'Kontakt',
        'url'        => home_url('/#kontakt'),
        'section_id' => 'kontakt',
        'number'     => '08',
    ),
);

$mv_shop_page_id = (int) get_option('woocommerce_shop_page_id');
$mv_has_shop     = class_exists('WooCommerce') && $mv_shop_page_id > 0;
$mv_shop_url     = $mv_has_shop ? get_permalink($mv_shop_page_id) : home_url('/shop/');
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <meta name="color-scheme" content="light">

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <a class="mv-skip-link" href="#primary">
        Preskoči na sadržaj
    </a>

    <header class="mv-header" data-mv-header>
        <div class="mv-header__inner">

            <a class="mv-header__brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Mavros Agency početna stranica">
                <?php if (has_custom_logo()) : ?>
                    <?php
                    $mv_custom_logo_id = get_theme_mod('custom_logo');
                    $mv_custom_logo    = wp_get_attachment_image_src($mv_custom_logo_id, 'full');
                    ?>

                    <?php if (!empty($mv_custom_logo[0])) : ?>
                        <img
                            class="mv-header__logo"
                            src="<?php echo esc_url($mv_custom_logo[0]); ?>"
                            alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                    <?php else : ?>
                        <img
                            class="mv-header__logo"
                            src="<?php echo esc_url($mv_logo_url); ?>"
                            alt="Mavros Agency">
                    <?php endif; ?>
                <?php else : ?>
                    <img
                        class="mv-header__logo"
                        src="<?php echo esc_url($mv_logo_url); ?>"
                        alt="Mavros Agency">
                <?php endif; ?>

                <span class="mv-header__wordmark">
                    <?php echo esc_html(get_bloginfo('name') ?: 'Mavros Agency'); ?>
                </span>
            </a>

            <nav class="mv-header__nav" aria-label="Glavna navigacija">
                <?php foreach ($mv_primary_links as $link) : ?>
                    <a
                        href="<?php echo esc_url($link['url']); ?>"
                        data-mv-section-link="<?php echo esc_attr($link['section_id']); ?>">
                        <?php echo esc_html($link['label']); ?>
                    </a>
                <?php endforeach; ?>

                <?php if ($mv_has_shop) : ?>
                    <a href="<?php echo esc_url($mv_shop_url); ?>">
                        Shop
                    </a>
                <?php endif; ?>
            </nav>

            <div class="mv-header__actions">
                <a class="mv-header__cta" href="<?php echo esc_url(home_url('/#kontakt')); ?>">
                    Besplatni mockup
                </a>

                <button
                    class="mv-header__toggle"
                    type="button"
                    data-mv-drawer-toggle
                    aria-controls="mv-site-drawer"
                    aria-expanded="false"
                    aria-label="Otvori navigaciju">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <div class="mv-drawer-backdrop" data-mv-drawer-backdrop hidden></div>

    <aside class="mv-drawer" id="mv-site-drawer" data-mv-drawer hidden aria-label="Mobilna navigacija">
        <div class="mv-drawer__inner">
            <div class="mv-drawer__top">
                <span>Mavros Agency</span>
                <span>Zagreb / Web Studio</span>
            </div>

            <nav class="mv-drawer__nav" aria-label="Mobilna navigacija linkovi">
                <?php foreach ($mv_drawer_links as $link) : ?>
                    <a
                        href="<?php echo esc_url($link['url']); ?>"
                        data-drawer-link
                        data-mv-section-link="<?php echo esc_attr($link['section_id']); ?>">
                        <span>
                            <?php echo esc_html($link['label']); ?>
                        </span>

                        <small>
                            <?php echo esc_html($link['number']); ?>
                        </small>
                    </a>
                <?php endforeach; ?>

                <?php if ($mv_has_shop) : ?>
                    <a href="<?php echo esc_url($mv_shop_url); ?>" data-drawer-link>
                        <span>Shop</span>
                        <small>08</small>
                    </a>
                <?php endif; ?>
            </nav>

            <div class="mv-drawer__bottom">
                <a href="mailto:hello@mavrosagency.com">
                    hello@mavrosagency.com
                </a>

                <a href="https://wa.me/385953700095" target="_blank" rel="noopener">
                    WhatsApp: 095 370 0095
                </a>

                <a href="https://www.instagram.com/mavros.agency" target="_blank" rel="noopener">
                    Instagram
                </a>
            </div>
        </div>
    </aside>