<?php

/**
 * Main fallback template.
 *
 * WordPress uses front-page.php for the homepage. This file is only a safe fallback.
 *
 * @package Mavros_Agency
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main mav-homepage">
    <section class="mav-home-section mav-home-section--hero">
        <div class="mav-home-section__inner">
            <p class="mav-home-section__eyebrow">Mavros Agency</p>
            <h1 class="mav-home-section__title">Page ready.</h1>
            <p class="mav-home-section__text">
                This is the fallback template. Use front-page.php for the homepage design.
            </p>
        </div>
    </section>
</main>

<?php
get_footer();
