<?php
/**
 * Header Template
 * @package MMM_Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'antialiased' ); ?>>
<?php wp_body_open(); ?>

<!-- Navigation -->
<nav class="site-nav glass-panel">
    <div class="nav-inner">
        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo">
            <div class="nav-logo-icon">M</div>
            <div class="nav-logo-text">
                <span class="brand">MMM</span>
                <span class="sub">Automotive</span>
            </div>
        </a>

        <!-- Desktop Menu -->
        <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-menu',
                'fallback_cb'    => false,
                'depth'          => 1,
            ) );
            ?>
        <?php else : ?>
            <ul class="nav-menu">
                <li><a href="<?php echo esc_url( home_url( '/#home' ) ); ?>">Home</a></li>
                <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">Services</a></li>
                <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a></li>
                <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
            </ul>
        <?php endif; ?>

        <!-- Desktop Actions -->
        <div class="nav-actions">
            <a href="tel:<?php echo esc_attr( mmm_get( 'mmm_phone_link', '+17029549773' ) ); ?>" class="nav-phone">
                <?php echo esc_html( mmm_get( 'mmm_phone', '(702) 954-9773' ) ); ?>
            </a>
            <a href="<?php echo esc_url( home_url( '/#appointment' ) ); ?>" class="nav-cta">Book Appointment</a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="mobile-menu-btn" aria-label="Toggle menu">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="mobile-menu-overlay">
        <a href="<?php echo esc_url( home_url( '/#home' ) ); ?>">Home</a>
        <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">Services</a>
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
        <a href="#appointment" class="mobile-cta">Book Now</a>
    </div>
</nav>
