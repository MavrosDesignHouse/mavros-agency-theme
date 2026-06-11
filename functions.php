<?php
/**
 * Mavros Agency Theme functions.
 *
 * @package Mavros_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'MAVROS_AGENCY_VERSION', '1.0.0' );
define( 'MAVROS_AGENCY_DIR', get_template_directory() );
define( 'MAVROS_AGENCY_URI', get_template_directory_uri() );

require_once MAVROS_AGENCY_DIR . '/inc/setup.php';
require_once MAVROS_AGENCY_DIR . '/inc/enqueue.php';
require_once MAVROS_AGENCY_DIR . '/inc/security.php';
require_once MAVROS_AGENCY_DIR . '/inc/cpt.php';
require_once MAVROS_AGENCY_DIR . '/inc/schema.php';
