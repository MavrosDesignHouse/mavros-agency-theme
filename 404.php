<?php
/**
 * 404 template.
 *
 * @package Mavros_Agency
 */

get_header();
?>
<section class="error-section section-spacing">
    <div class="container error-section__inner">
        <p class="eyebrow"><?php esc_html_e( '404 / Not Found', 'mavros-agency' ); ?></p>
        <h1 class="page-title"><?php esc_html_e( 'This page does not look like it survived the launch.', 'mavros-agency' ); ?></h1>
        <p><?php esc_html_e( 'The page you are looking for does not exist or has been moved.', 'mavros-agency' ); ?></p>
        <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to homepage', 'mavros-agency' ); ?></a>
    </div>
</section>
<?php
get_footer();
