<?php
/**
 * Portfolio section.
 *
 * @package Mavros_Agency
 */
?>
<section id="portfolio" class="section section-portfolio">
    <div class="container">
        <?php
        get_template_part( 'template-parts/components/section-header', null, array(
            'eyebrow' => __( 'SELECTED WORK', 'mavros-agency' ),
            'title'   => __( 'Radovi koji izgledaju kao brend, ne kao template.', 'mavros-agency' ),
            'text'    => __( 'Ovdje idu project cards.', 'mavros-agency' ),
        ) );
        ?>

        <div class="section-portfolio__content">
            <!-- TODO: Add portfolio content. -->
        </div>
    </div>
</section>
