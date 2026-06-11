<?php
/**
 * Contact section.
 *
 * @package Mavros_Agency
 */
?>
<section id="contact" class="section section-contact">
    <div class="container">
        <?php
        get_template_part( 'template-parts/components/section-header', null, array(
            'eyebrow' => __( 'START A PROJECT', 'mavros-agency' ),
            'title'   => __( 'Reci nam što gradiš.', 'mavros-agency' ),
            'text'    => __( 'Ovdje ide kontakt forma s GDPR checkboxom i honeypotom.', 'mavros-agency' ),
        ) );
        ?>

        <div class="section-contact__content">
            <!-- TODO: Add contact content. -->
        </div>
    </div>
</section>
