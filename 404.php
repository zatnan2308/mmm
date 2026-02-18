<?php
/**
 * 404 Page
 * @package MMM_Theme
 */

get_header();
?>

<main style="min-height: 80vh; display: flex; align-items: center; justify-content: center; text-align: center; padding: 6rem 1.5rem;">
    <div>
        <h1 class="font-display" style="font-size: 8rem; font-weight: 700; color: #1F2937; line-height: 1;">404</h1>
        <p style="font-size: 1.5rem; color: #6B7280; margin-bottom: 2rem;">Page not found</p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="display: inline-block; padding: 1rem 2.5rem; background: #fff; color: #000; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; text-decoration: none; font-size: 0.875rem;">
            Back to Home
        </a>
    </div>
</main>

<?php get_footer(); ?>
