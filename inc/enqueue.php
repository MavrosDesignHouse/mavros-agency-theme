<?php
/**
 * Enqueue scripts and styles.
 *
 * @package Mavros_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function mavros_agency_asset_version( $relative_path ) {
    $file = MAVROS_AGENCY_DIR . $relative_path;
    return file_exists( $file ) ? filemtime( $file ) : MAVROS_AGENCY_VERSION;
}

function mavros_agency_enqueue_assets() {
    wp_enqueue_style(
        'mavros-agency-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'mavros-agency-main',
        MAVROS_AGENCY_URI . '/assets/css/main.css',
        array( 'mavros-agency-fonts' ),
        mavros_agency_asset_version( '/assets/css/main.css' )
    );

    wp_enqueue_script(
        'mavros-agency-main',
        MAVROS_AGENCY_URI . '/assets/js/main.js',
        array(),
        mavros_agency_asset_version( '/assets/js/main.js' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'mavros_agency_enqueue_assets' );
