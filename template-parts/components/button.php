<?php
/**
 * Button component placeholder.
 *
 * Expected args:
 * - text
 * - url
 * - variant: primary|secondary
 *
 * @package Mavros_Agency
 */

$args = wp_parse_args( $args ?? array(), array(
    'text'    => '',
    'url'     => '#',
    'variant' => 'primary',
) );

$classes = 'btn btn-' . sanitize_html_class( $args['variant'] );
?>
<a class="<?php echo esc_attr( $classes ); ?>" href="<?php echo esc_url( $args['url'] ); ?>">
    <?php echo esc_html( $args['text'] ); ?>
</a>
