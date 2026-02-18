<?php
/**
 * Page Template
 * @package MMM_Theme
 */

get_header();
?>

<main style="min-height: 60vh; padding-top: 10rem; padding-bottom: 6rem;">
    <div style="max-width: 80rem; margin: 0 auto; padding: 0 1.5rem;">
        <?php while ( have_posts() ) : the_post(); ?>
            <h1 class="font-display" style="font-size: 3rem; font-weight: 700; text-transform: uppercase; margin-bottom: 2rem; color: #fff;">
                <?php the_title(); ?>
            </h1>
            <div style="color: #9CA3AF; line-height: 1.8; font-size: 1.125rem; font-weight: 300;">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
