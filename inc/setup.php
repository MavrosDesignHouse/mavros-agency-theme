<?php
/**
 * Theme setup.
 *
 * @package Mavros_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function mavros_agency_setup() {
    load_theme_textdomain( 'mavros-agency', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );

    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'mavros-agency' ),
        'footer'  => esc_html__( 'Footer Menu', 'mavros-agency' ),
    ) );

    add_image_size( 'mavros_project_large', 1440, 960, true );
    add_image_size( 'mavros_project_card', 800, 600, true );
}
add_action( 'after_setup_theme', 'mavros_agency_setup' );
