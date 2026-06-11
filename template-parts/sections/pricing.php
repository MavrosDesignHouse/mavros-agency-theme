<?php
/**
 * Pricing section.
 *
 * @package Mavros_Agency
 */
?>
<section id="pricing" class="section section-pricing">
    <div class="container">
        <?php
        get_template_part( 'template-parts/components/section-header', null, array(
            'eyebrow' => __( 'PACKAGES', 'mavros-agency' ),
            'title'   => __( 'Odaberi razinu digitalnog nastupa koja odgovara tvom biznisu.', 'mavros-agency' ),
            'text'    => __( 'Ovdje idu pricing cards.', 'mavros-agency' ),
        ) );
        ?>

        <div class="section-pricing__content">
            <!-- TODO: Add pricing content. -->
        </div>
    </div>
</section>
