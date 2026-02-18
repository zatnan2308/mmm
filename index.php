<?php
/**
 * Main Template (Fallback)
 * @package MMM_Theme
 */

get_header();
?>

<main style="min-height: 60vh; padding-top: 8rem; max-width: 80rem; margin: 0 auto; padding-left: 1.5rem; padding-right: 1.5rem;">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article style="margin-bottom: 3rem;">
                <h2 class="font-display" style="font-size: 2rem; margin-bottom: 1rem;">
                    <a href="<?php the_permalink(); ?>" style="color: #fff; text-decoration: none;"><?php the_title(); ?></a>
                </h2>
                <div style="color: #9CA3AF; line-height: 1.7;">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p style="color: #6B7280;">No content found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
