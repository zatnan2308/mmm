<?php
/**
 * Template Name: About Page
 * Description: About Us page — company story, values, and mission
 * @package MMM_Theme
 */

get_header();

// About hero image
$about_hero_img = 'https://images.unsplash.com/photo-1552930294-6b595f4c2974?ixlib=rb-1.2.1&auto=format&fit=crop&w=2071&q=80';

// Intro image
$intro_img = 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1000&q=80';
?>

<!-- ═══════════════════════════════════════════
     ABOUT HERO
     ═══════════════════════════════════════════ -->
<section class="about-hero-section">
    <div class="hero-bg">
        <img src="<?php echo esc_url( $about_hero_img ); ?>" alt="MMM Automotive Garage">
    </div>

    <div class="about-hero-content">
        <div class="about-hero-inner">
            <div class="hero-badge animate-fade-in-up">
                <span>Est. Las Vegas</span>
            </div>

            <h1 class="about-hero-title animate-fade-in-up" style="animation-delay: 0.1s;">
                WHO WE<br>
                <span class="gradient-text">ARE.</span>
            </h1>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════
     INTRODUCTION
     ═══════════════════════════════════════════ -->
<section class="about-intro-section reveal">
    <div class="about-intro-inner">
        <div class="about-intro-grid">
            <div class="about-intro-image-wrap">
                <div class="about-intro-corner-tl"></div>
                <img src="<?php echo esc_url( $intro_img ); ?>" alt="Mechanic working on engine" class="about-intro-img">
                <div class="about-intro-corner-br"></div>
            </div>

            <div class="about-intro-text">
                <h2 class="about-intro-title">Professional Auto Repair in Las Vegas</h2>
                <p class="about-intro-p">
                    MMM Automotive is a professional auto repair shop in Las Vegas offering a full range of essential vehicle repair and maintenance services. We work with various makes and models, providing precise diagnostics, repairs, and regular maintenance.
                </p>
                <p class="about-intro-p">
                    As a local independent service in Las Vegas, we build our reputation through actions, not words.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════
     CORE PRINCIPLES
     ═══════════════════════════════════════════ -->
<section class="about-values-section reveal">
    <div class="about-values-inner">
        <div class="about-values-header">
            <h2 class="about-values-title">Our Core Principles</h2>
            <div class="about-values-line"></div>
        </div>

        <div class="about-values-grid">
            <?php
            $values = array(
                array(
                    'icon'  => 'fa-handshake',
                    'title' => 'Honesty',
                    'desc'  => 'We believe in transparency. No hidden fees, no unnecessary repairs. We treat your vehicle as if it were our own.',
                ),
                array(
                    'icon'  => 'fa-certificate',
                    'title' => 'Professionalism',
                    'desc'  => 'We uphold high standards, using the latest equipment and quality parts to ensure lasting results for every repair.',
                ),
                array(
                    'icon'  => 'fa-user-friends',
                    'title' => 'Personalized Approach',
                    'desc'  => 'Every vehicle and driver is unique. We provide tailored solutions because we understand that your vehicle deserves the best.',
                ),
            );

            foreach ( $values as $val ) :
            ?>
            <div class="about-value-card">
                <i class="fas <?php echo esc_attr( $val['icon'] ); ?> about-value-icon"></i>
                <h3 class="about-value-title"><?php echo esc_html( $val['title'] ); ?></h3>
                <p class="about-value-desc"><?php echo esc_html( $val['desc'] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════
     MISSION / CTA
     ═══════════════════════════════════════════ -->
<section class="about-mission-section reveal">
    <div class="about-mission-inner">
        <i class="fas fa-quote-left about-mission-quote-icon"></i>
        <h2 class="about-mission-title">
            "Our values shape how we work, serve, and grow - always striving to exceed expectations."
        </h2>
        <p class="about-mission-subtitle">
            We always welcome you to MMM Automotive!
        </p>
        <div class="about-mission-buttons">
            <a href="<?php echo esc_url( home_url( '/#appointment' ) ); ?>" class="hero-btn-primary">
                <div class="btn-bg"></div>
                <span>Book Appointment</span>
            </a>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="hero-btn-secondary">
                Contact Us
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
