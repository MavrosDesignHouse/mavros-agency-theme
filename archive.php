<?php
/**
 * Archive template.
 *
 * @package Mavros_Agency
 */

get_header();
?>
<section class="archive-section section-spacing">
    <div class="container">
        <p class="eyebrow"><?php esc_html_e( 'Archive', 'mavros-agency' ); ?></p>
        <h1 class="page-title"><?php the_archive_title(); ?></h1>

        <div class="archive-grid">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'card archive-card' ); ?>>
                        <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php echo esc_html( get_the_excerpt() ); ?></p>
                    </article>
                <?php endwhile; ?>
                <?php the_posts_pagination(); ?>
            <?php else : ?>
                <p><?php esc_html_e( 'No posts found.', 'mavros-agency' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php
get_footer();
