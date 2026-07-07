<?php

/**
 * Theme functions.
 *
 * @package Mavros_Agency
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup.
 */
function mavros_agency_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mavros-agency'),
    ));
}
add_action('after_setup_theme', 'mavros_agency_setup');


/**
 * Enqueue styles and scripts.
 */
function mavros_agency_enqueue_assets()
{
    /**
     * Fonts.
     */
    wp_enqueue_style(
        'mavros-agency-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap',
        array(),
        null
    );

    /**
     * Main CSS.
     */
    $main_css_path = get_stylesheet_directory() . '/assets/css/main.css';
    $main_css_uri  = get_stylesheet_directory_uri() . '/assets/css/main.css';

    if (file_exists($main_css_path)) {
        wp_enqueue_style(
            'mavros-agency-main-css',
            $main_css_uri,
            array('mavros-agency-fonts'),
            filemtime($main_css_path),
            'all'
        );
    }

    /**
     * GSAP core.
     */
    wp_enqueue_script(
        'gsap',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js',
        array(),
        '3.12.5',
        true
    );

    /**
     * GSAP ScrollTrigger.
     */
    wp_enqueue_script(
        'gsap-scrolltrigger',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js',
        array('gsap'),
        '3.12.5',
        true
    );

    /**
     * Main JS.
     */
    $main_js_path = get_stylesheet_directory() . '/assets/js/main.js';
    $main_js_uri  = get_stylesheet_directory_uri() . '/assets/js/main.js';

    if (file_exists($main_js_path)) {
        wp_enqueue_script(
            'mavros-agency-main-js',
            $main_js_uri,
            array('gsap', 'gsap-scrolltrigger'),
            filemtime($main_js_path),
            true
        );
    }




    /**
     * Process page (page-proces.php) assets.
     */
    if (is_page_template('page-proces.php')) {

        $process_css_path = get_stylesheet_directory() . '/assets/css/mavros-process.css';
        $process_css_uri  = get_stylesheet_directory_uri() . '/assets/css/mavros-process.css';

        if (file_exists($process_css_path)) {
            wp_enqueue_style(
                'mavros-process-css',
                $process_css_uri,
                array('mavros-agency-main-css'),
                filemtime($process_css_path),
                'all'
            );
        }

        $process_js_path = get_stylesheet_directory() . '/assets/js/mavros-process.js';
        $process_js_uri  = get_stylesheet_directory_uri() . '/assets/js/mavros-process.js';

        if (file_exists($process_js_path)) {
            wp_enqueue_script(
                'mavros-process-js',
                $process_js_uri,
                array('gsap', 'gsap-scrolltrigger'),
                filemtime($process_js_path),
                true
            );
        }
    }

    /**
     * Enqueue styles and scripts.
     */
    function mavros_agency_enqueue_assets()
    {
        /**
         * Fonts.
         */
        wp_enqueue_style(
            'mavros-agency-fonts',
            'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap',
            array(),
            null
        );

        /**
         * Main CSS.
         */
        $main_css_path = get_template_directory() . '/assets/css/main.css';
        $main_css_uri  = get_template_directory_uri() . '/assets/css/main.css';

        if (file_exists($main_css_path)) {
            wp_enqueue_style(
                'mavros-agency-main-css',
                $main_css_uri,
                array('mavros-agency-fonts'),
                filemtime($main_css_path),
                'all'
            );
        }

        /**
         * GSAP core.
         * Used by global homepage animations.
         */
        wp_enqueue_script(
            'gsap',
            'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js',
            array(),
            '3.12.5',
            true
        );

        /**
         * GSAP ScrollTrigger.
         * Used by global homepage animations.
         */
        wp_enqueue_script(
            'gsap-scrolltrigger',
            'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js',
            array('gsap'),
            '3.12.5',
            true
        );

        /**
         * Main JS.
         */
        $main_js_path = get_template_directory() . '/assets/js/main.js';
        $main_js_uri  = get_template_directory_uri() . '/assets/js/main.js';

        if (file_exists($main_js_path)) {
            wp_enqueue_script(
                'mavros-agency-main-js',
                $main_js_uri,
                array('gsap', 'gsap-scrolltrigger'),
                filemtime($main_js_path),
                true
            );
        }

        /**
         * Process page assets.
         * These load only on the Proces page template.
         */
        if (is_page_template('page-proces.php')) {
            $process_css_path = get_template_directory() . '/assets/css/mavros-process.css';
            $process_css_uri  = get_template_directory_uri() . '/assets/css/mavros-process.css';

            if (file_exists($process_css_path)) {
                wp_enqueue_style(
                    'mavros-process-css',
                    $process_css_uri,
                    array('mavros-agency-fonts'),
                    filemtime($process_css_path),
                    'all'
                );
            }

            $process_js_path = get_template_directory() . '/assets/js/mavros-process.js';
            $process_js_uri  = get_template_directory_uri() . '/assets/js/mavros-process.js';

            if (file_exists($process_js_path)) {
                wp_enqueue_script(
                    'mavros-process-js',
                    $process_js_uri,
                    array(),
                    filemtime($process_js_path),
                    true
                );
            }
        }
    }
    add_action('wp_enqueue_scripts', 'mavros_agency_enqueue_assets', 20);
}
add_action('wp_enqueue_scripts', 'mavros_agency_enqueue_assets', 20);


/**
 * Remove default block theme styles that may interfere.
 */
function mavros_agency_cleanup_block_assets()
{
    wp_dequeue_style('wp-block-library-theme');
}
add_action('wp_enqueue_scripts', 'mavros_agency_cleanup_block_assets', 40);


/**
 * Body classes.
 */
function mavros_agency_body_classes($classes)
{
    if (is_front_page()) {
        $classes[] = 'mavros-front-page';
    }

    return $classes;
}
add_filter('body_class', 'mavros_agency_body_classes');


/**
 * Disable emoji scripts/styles.
 */
function mavros_agency_disable_emojis()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');

    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'mavros_agency_disable_emojis');









/**
 * Admin bar anchor offset.
 */
function mavros_agency_admin_bar_anchor_offset()
{
    if (!is_admin_bar_showing()) {
        return;
    }
?>
    <style>
        html {
            scroll-padding-top: 116px;
        }

        @media (max-width: 782px) {
            html {
                scroll-padding-top: 118px;
            }
        }
    </style>
<?php
}
add_action('wp_head', 'mavros_agency_admin_bar_anchor_offset', 30);
