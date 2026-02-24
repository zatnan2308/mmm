<?php
/**
 * Template Name: Thank You Page
 * Description: Thank you page after form submission
 * @package MMM_Theme
 */

get_header();

// ACF fields
$ty_title       = get_field( 'ty_title' ) ?: 'Thank You';
$ty_description = get_field( 'ty_description' ) ?: 'Your request has been received. We will get back to you shortly.';
$ty_btn_text    = get_field( 'ty_button_text' ) ?: 'Back to Home';
$ty_btn_url     = get_field( 'ty_button_url' ) ?: home_url( '/' );
$ty_bg_image    = get_field( 'ty_background_image' );
$ty_bg_url      = '';

if ( $ty_bg_image ) {
    $ty_bg_url = is_array( $ty_bg_image ) ? $ty_bg_image['url'] : wp_get_attachment_image_url( $ty_bg_image, 'full' );
}
?>

<main class="ty-page">

    <!-- Background -->
    <div class="ty-bg" aria-hidden="true">
        <?php if ( $ty_bg_url ) : ?>
            <img src="<?php echo esc_url( $ty_bg_url ); ?>"
                 alt=""
                 loading="eager"
                 fetchpriority="high">
        <?php endif; ?>
        <div class="ty-bg-overlay"></div>
    </div>

    <!-- Content -->
    <div class="ty-content">
        <div class="ty-inner">

            <!-- Animated check icon -->
            <div class="ty-icon-wrap">
                <div class="ty-icon-circle">
                    <svg class="ty-checkmark" viewBox="0 0 52 52" xmlns="http://www.w3.org/2000/svg">
                        <circle class="ty-checkmark-circle" cx="26" cy="26" r="25" fill="none"/>
                        <path class="ty-checkmark-check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                    </svg>
                </div>
            </div>

            <!-- Title -->
            <h1 class="ty-title font-display"><?php echo esc_html( $ty_title ); ?></h1>

            <!-- Description -->
            <p class="ty-desc"><?php echo wp_kses_post( $ty_description ); ?></p>

            <!-- CTA Button -->
            <a href="<?php echo esc_url( $ty_btn_url ); ?>" class="ty-btn">
                <span class="ty-btn-bg"></span>
                <span class="ty-btn-text"><?php echo esc_html( $ty_btn_text ); ?></span>
            </a>

            <!-- Decorative line -->
            <div class="ty-line" aria-hidden="true"></div>

        </div>
    </div>

</main>

<?php get_footer(); ?>
