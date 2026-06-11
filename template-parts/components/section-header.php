<?php
/**
 * Section header component placeholder.
 *
 * Expected args:
 * - eyebrow
 * - title
 * - text
 *
 * @package Mavros_Agency
 */

$args = wp_parse_args( $args ?? array(), array(
    'eyebrow' => '',
    'title'   => '',
    'text'    => '',
) );
?>
<div class="section-header">
    <?php if ( $args['eyebrow'] ) : ?>
        <p class="eyebrow"><?php echo esc_html( $args['eyebrow'] ); ?></p>
    <?php endif; ?>

    <?php if ( $args['title'] ) : ?>
        <h2 class="section-title"><?php echo esc_html( $args['title'] ); ?></h2>
    <?php endif; ?>

    <?php if ( $args['text'] ) : ?>
        <p class="section-text"><?php echo esc_html( $args['text'] ); ?></p>
    <?php endif; ?>
</div>
