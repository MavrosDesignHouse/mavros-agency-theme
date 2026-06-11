<?php
/**
 * Hero section.
 *
 * @package Mavros_Agency
 */
?>
<section id="home" class="section section-home">
    <div class="container">
        <?php
        get_template_part( 'template-parts/components/section-header', null, array(
            'eyebrow' => __( 'MAVROS / WEB DESIGN / BRAND SYSTEMS / DIGITAL ASSETS', 'mavros-agency' ),
            'title'   => __( 'WEB STRANICE KOJE NE IZGLEDAJU KAO TEMPLATE.', 'mavros-agency' ),
            'text'    => __( 'Mavros Agency dizajnira i razvija web stranice, vizualne identitete i digitalne materijale za biznise koji žele izgledati ozbiljno online.', 'mavros-agency' ),
        ) );
        ?>

        <div class="section-home__content">
            <!-- TODO: Add hero content. -->
        </div>
    </div>
</section>
