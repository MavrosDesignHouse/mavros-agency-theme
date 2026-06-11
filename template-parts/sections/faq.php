<?php
/**
 * Faq section.
 *
 * @package Mavros_Agency
 */
?>
<section id="faq" class="section section-faq">
    <div class="container">
        <?php
        get_template_part( 'template-parts/components/section-header', null, array(
            'eyebrow' => __( 'FAQ', 'mavros-agency' ),
            'title'   => __( 'Pitanja prije nego krenemo?', 'mavros-agency' ),
            'text'    => __( 'Ovdje ide accessible FAQ accordion.', 'mavros-agency' ),
        ) );
        ?>

        <div class="section-faq__content">
            <!-- TODO: Add faq content. -->
        </div>
    </div>
</section>
