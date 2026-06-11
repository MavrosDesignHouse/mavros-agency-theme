<?php
/**
 * Structured data helpers.
 *
 * @package Mavros_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function mavros_agency_output_organization_schema() {
    if ( ! is_front_page() ) {
        return;
    }

    $schema = array(
        '@context' => 'https://schema.org',
        '@type'    => 'ProfessionalService',
        'name'     => 'Mavros Agency',
        'url'      => home_url( '/' ),
        'areaServed' => array(
            '@type' => 'Country',
            'name'  => 'Croatia',
        ),
        'address' => array(
            '@type'           => 'PostalAddress',
            'addressLocality' => 'Zagreb',
            'addressCountry'  => 'HR',
        ),
        'serviceType' => array(
            'Web Design',
            'UX/UI Design',
            'WordPress Development',
            'Branding',
            'SEO Setup',
            'Digital Assets',
            'Website Maintenance',
        ),
    );

    echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "
";
}
add_action( 'wp_head', 'mavros_agency_output_organization_schema' );
