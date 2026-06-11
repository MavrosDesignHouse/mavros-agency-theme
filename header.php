<?php
/**
 * Header template.
 *
 * @package Mavros_Agency
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main-content"><?php esc_html_e( 'Skip to content', 'mavros-agency' ); ?></a>

<header class="site-header" data-site-header>
    <div class="site-header__inner container">
        <a class="site-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Mavros Agency home', 'mavros-agency' ); ?>">
            <span class="site-brand__mark" aria-hidden="true">M.</span>
            <span class="site-brand__text">Mavros Agency</span>
        </a>

        <nav class="primary-nav" aria-label="<?php esc_attr_e( 'Primary navigation', 'mavros-agency' ); ?>">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'primary-nav__list',
                'fallback_cb'    => false,
                'depth'          => 2,
            ) );
            ?>
        </nav>

        <a class="btn btn-primary site-header__cta" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
            <?php esc_html_e( 'Pošalji brief', 'mavros-agency' ); ?>
        </a>

        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu" data-menu-toggle>
            <span class="menu-toggle__label"><?php esc_html_e( 'Menu', 'mavros-agency' ); ?></span>
        </button>
    </div>

    <div class="mobile-menu" id="mobile-menu" hidden data-mobile-menu>
        <nav aria-label="<?php esc_attr_e( 'Mobile navigation', 'mavros-agency' ); ?>">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'mobile-menu__list',
                'fallback_cb'    => false,
                'depth'          => 1,
            ) );
            ?>
        </nav>
        <a class="btn btn-primary mobile-menu__cta" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
            <?php esc_html_e( 'Pošalji brief', 'mavros-agency' ); ?>
        </a>
    </div>
</header>

<main id="main-content" class="site-main">
