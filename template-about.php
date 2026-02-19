<?php
/**
 * Template Name: About Page
 * Description: About Us page — company story, values, and mission
 * @package MMM_Theme
 */

get_header();

// ACF with fallbacks
$hero_badge     = mmm_acf( 'about_hero_badge', 'Est. Las Vegas' );
$hero_title1    = mmm_acf( 'about_hero_title1', 'WHO WE' );
$hero_highlight = mmm_acf( 'about_hero_highlight', 'ARE.' );
$hero_img       = mmm_acf( 'about_hero_image', 'https://images.unsplash.com/photo-1552930294-6b595f4c2974?ixlib=rb-1.2.1&auto=format&fit=crop&w=2071&q=80' );

$intro_title = mmm_acf( 'about_intro_title', 'Professional Auto Repair in Las Vegas' );
$intro_text  = mmm_acf( 'about_intro_text', "MMM Automotive is a professional auto repair shop in Las Vegas offering a full range of essential vehicle repair and maintenance services. We work with various makes and models, providing precise diagnostics, repairs, and regular maintenance.\n\nAs a local independent service in Las Vegas, we build our reputation through actions, not words." );
$intro_img   = mmm_acf( 'about_intro_image', 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1000&q=80' );

$values_title = mmm_acf( 'about_values_title', 'Our Core Principles' );

$mission_quote    = mmm_acf( 'about_mission_quote', '"Our values shape how we work, serve, and grow - always striving to exceed expectations."' );
$mission_subtitle = mmm_acf( 'about_mission_subtitle', 'We always welcome you to MMM Automotive!' );
?>

<!-- ═══════════════════════════════════════════
     ABOUT HERO
     ═══════════════════════════════════════════ -->
<section class="about-hero-section">
    <div class="hero-bg">
        <img src="<?php echo esc_url( $hero_img ); ?>" alt="MMM Automotive Garage">
    </div>

    <div class="about-hero-content">
        <div class="about-hero-inner">
            <div class="hero-badge animate-fade-in-up">
                <span><?php echo esc_html( $hero_badge ); ?></span>
            </div>

            <h1 class="about-hero-title animate-fade-in-up" style="animation-delay: 0.1s;">
                <?php echo esc_html( $hero_title1 ); ?><br>
                <span class="gradient-text"><?php echo esc_html( $hero_highlight ); ?></span>
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
                <h2 class="about-intro-title"><?php echo esc_html( $intro_title ); ?></h2>
                <?php
                $paragraphs = explode( "\n\n", $intro_text );
                foreach ( $paragraphs as $p ) :
                    $p = trim( $p );
                    if ( $p ) :
                ?>
                <p class="about-intro-p"><?php echo esc_html( $p ); ?></p>
                <?php
                    endif;
                endforeach;
                ?>
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
            <h2 class="about-values-title"><?php echo esc_html( $values_title ); ?></h2>
            <div class="about-values-line"></div>
        </div>

        <div class="about-values-content">
            <?php
            $values_content = null;
            if ( function_exists( 'get_field' ) ) {
                $values_content = get_field( 'about_values_content' );
            }
            if ( ! $values_content ) {
                $values_content = '<p><strong>Honesty</strong> — We believe in transparency. No hidden fees, no unnecessary repairs. We treat your vehicle as if it were our own.</p>
                <p><strong>Professionalism</strong> — We uphold high standards, using the latest equipment and quality parts to ensure lasting results for every repair.</p>
                <p><strong>Personalized Approach</strong> — Every vehicle and driver is unique. We provide tailored solutions because we understand that your vehicle deserves the best.</p>';
            }
            echo $values_content;
            ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════
     MISSION / CTA
     ═══════════════════════════════════════════ -->
<section class="about-mission-section reveal">
    <div class="about-mission-inner">
        <i class="fas fa-quote-left about-mission-quote-icon"></i>
        <h2 class="about-mission-title"><?php echo esc_html( $mission_quote ); ?></h2>
        <p class="about-mission-subtitle"><?php echo esc_html( $mission_subtitle ); ?></p>
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
