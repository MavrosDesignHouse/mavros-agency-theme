<?php
/**
 * Footer template.
 *
 * @package Mavros_Agency
 */
?>
</main>

<footer class="site-footer">
    <div class="site-footer__cta container">
        <h2><?php esc_html_e( 'Spreman za web koji ne izgleda kao template?', 'mavros-agency' ); ?></h2>
        <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
            <?php esc_html_e( 'Pošalji brief', 'mavros-agency' ); ?>
        </a>
    </div>

    <div class="site-footer__inner container">
        <div class="site-footer__brand">
            <p class="site-footer__logo">Mavros Agency</p>
            <p><?php esc_html_e( 'Web stranice, vizualni identiteti i digitalni materijali za biznise koji žele izgledati ozbiljno online.', 'mavros-agency' ); ?></p>
        </div>

        <nav class="site-footer__nav" aria-label="<?php esc_attr_e( 'Footer navigation', 'mavros-agency' ); ?>">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer',
                'container'      => false,
                'menu_class'     => 'site-footer__menu',
                'fallback_cb'    => false,
                'depth'          => 1,
            ) );
            ?>
        </nav>
    </div>

    <div class="site-footer__bottom container">
        <p>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php esc_html_e( 'Mavros Agency. All rights reserved.', 'mavros-agency' ); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
