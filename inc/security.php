<?php
/**
 * Security and hardening helpers.
 *
 * @package Mavros_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Remove WordPress version from the public head output.
remove_action( 'wp_head', 'wp_generator' );

/**
 * Add basic security-related headers when possible.
 * Note: stronger CSP should be configured carefully on the server/CDN after testing.
 */
function mavros_agency_security_headers() {
    if ( headers_sent() ) {
        return;
    }

    header( 'X-Content-Type-Options: nosniff' );
    header( 'X-Frame-Options: SAMEORIGIN' );
    header( 'Referrer-Policy: strict-origin-when-cross-origin' );
    header( 'Permissions-Policy: camera=(), microphone=(), geolocation=()' );
}
add_action( 'send_headers', 'mavros_agency_security_headers' );
