<?php
/**
 * Search template.
 *
 * @package Mavros_Agency
 */

get_header();
?>
<section class="search-section section-spacing">
    <div class="container">
        <p class="eyebrow"><?php esc_html_e( 'Search', 'mavros-agency' ); ?></p>
        <h1 class="page-title">
            <?php
            printf(
                esc_html__( 'Search results for: %s', 'mavros-agency' ),
                '<span>' . esc_html( get_search_query() ) . '</span>'
            );
            ?>
        </h1>

        <?php get_search_form(); ?>

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
                <p><?php esc_html_e( 'No results found.', 'mavros-agency' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php
get_footer();
