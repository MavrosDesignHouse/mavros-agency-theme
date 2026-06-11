<?php
/**
 * Single post template.
 *
 * @package Mavros_Agency
 */

get_header();
?>
<section class="page-section section-spacing">
    <div class="container page-section__inner">
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'content-single' ); ?>>
                <p class="eyebrow"><?php esc_html_e( 'Insight', 'mavros-agency' ); ?></p>
                <h1 class="page-title"><?php the_title(); ?></h1>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</section>
<?php
get_footer();
