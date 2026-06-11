<?php
/**
 * Custom post types.
 *
 * @package Mavros_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function mavros_agency_register_case_studies_cpt() {
    $labels = array(
        'name'               => esc_html__( 'Case Studies', 'mavros-agency' ),
        'singular_name'      => esc_html__( 'Case Study', 'mavros-agency' ),
        'menu_name'          => esc_html__( 'Case Studies', 'mavros-agency' ),
        'add_new_item'       => esc_html__( 'Add New Case Study', 'mavros-agency' ),
        'edit_item'          => esc_html__( 'Edit Case Study', 'mavros-agency' ),
        'new_item'           => esc_html__( 'New Case Study', 'mavros-agency' ),
        'view_item'          => esc_html__( 'View Case Study', 'mavros-agency' ),
        'search_items'       => esc_html__( 'Search Case Studies', 'mavros-agency' ),
        'not_found'          => esc_html__( 'No case studies found', 'mavros-agency' ),
    );

    register_post_type( 'case_study', array(
        'labels'       => $labels,
        'public'       => true,
        'has_archive'  => true,
        'rewrite'      => array( 'slug' => 'portfolio' ),
        'menu_icon'    => 'dashicons-portfolio',
        'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
        'show_in_rest' => true,
    ) );
}
add_action( 'init', 'mavros_agency_register_case_studies_cpt' );
