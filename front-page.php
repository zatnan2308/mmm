<?php
/**
 * Front Page Template
 * @package MMM_Theme
 */

get_header();

// Hero
$hero_badge     = mmm_acf( 'hero_badge', 'Premium Auto Care Las Vegas' );
$hero_line1     = mmm_acf( 'hero_title_line1', 'OTHERS' );
$hero_highlight = mmm_acf( 'hero_title_highlight', 'PROMISE.' );
$hero_line3     = mmm_acf( 'hero_title_line3', 'WE PERFORM.' );
$hero_subtitle  = mmm_acf( 'hero_subtitle', 'From routine maintenance to complex repairs — we deliver precision, quality, and trust every time.' );
$hero_img       = mmm_acf( 'hero_image', '' );
if ( ! $hero_img ) {
    $hero_img = mmm_get( 'mmm_hero_image', 'https://images.unsplash.com/photo-1617788138017-80ad40651399?q=80&w=2070&auto=format&fit=crop' );
}
$hero_btn1 = mmm_acf( 'hero_btn_primary', 'Request an appointment' );
$hero_btn2 = mmm_acf( 'hero_btn_secondary', 'Our Services' );

// About
$about_label      = mmm_acf( 'about_label', 'About Us' );
$about_title      = mmm_acf( 'about_title', 'Precision, Quality,' );
$about_title_muted = mmm_acf( 'about_title_muted', 'And Trust' );
$about_text       = mmm_acf( 'about_text', 'From routine maintenance to complex repairs — we deliver precision, quality, and trust every time. Our facility is designed to handle modern vehicles with the care they deserve.' );
$about_img        = mmm_acf( 'about_image', '' );
if ( ! $about_img ) {
    $about_img = mmm_get( 'mmm_about_image', 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80' );
}

// Services title
$services_title = mmm_acf( 'services_title', 'OUR SERVICES.' );

// Booking
$booking_title  = mmm_acf( 'booking_title', 'NEED SERVICE TODAY?' );
$booking_status = mmm_acf( 'booking_status_text', 'Our team is currently accepting new appointments. Please fill out the form for a quick response.' );

// Gallery title
$gallery_title = mmm_acf( 'gallery_title', 'SERVICE IN PROGRESS.' );
?>

<!-- ═══════════════════════════════════════════
     HERO SECTION
     ═══════════════════════════════════════════ -->
<section id="home" class="hero-section">
    <div class="hero-bg">
        <img src="<?php echo esc_url( $hero_img ); ?>" alt="<?php bloginfo( 'name' ); ?>" width="1920" height="1080" fetchpriority="high">
    </div>

    <div class="hero-content">
        <div class="hero-inner">
            <div class="hero-badge animate-fade-in-up">
                <span><?php echo esc_html( $hero_badge ); ?></span>
            </div>

            <h1 class="hero-title animate-fade-in-up">
                <?php echo esc_html( $hero_line1 ); ?> <br>
                <span class="gradient-text"><?php echo esc_html( $hero_highlight ); ?></span> <br>
                <?php echo esc_html( $hero_line3 ); ?>
            </h1>

            <p class="hero-subtitle animate-fade-in-up" style="animation-delay: 0.1s;">
                <?php echo esc_html( $hero_subtitle ); ?>
            </p>

            <div class="hero-buttons animate-fade-in-up" style="animation-delay: 0.2s;">
                <a href="#appointment" class="hero-btn-primary">
                    <div class="btn-bg"></div>
                    <span><?php echo esc_html( $hero_btn1 ); ?></span>
                </a>
                <a href="#services" class="hero-btn-secondary"><?php echo esc_html( $hero_btn2 ); ?></a>
            </div>
        </div>
    </div>

    <div class="hero-scroll-indicator">
        <div></div>
    </div>
</section>

<!-- ═══════════════════════════════════════════
     FEATURES STRIP
     ═══════════════════════════════════════════ -->
<div class="features-strip">
    <div class="features-grid">
        <?php
        $features = null;
        if ( function_exists( 'get_field' ) ) {
            $features = get_field( 'features' );
        }
        if ( ! $features ) {
            $features = array(
                array( 'icon' => 'fa-tools',        'title' => 'Professional Service' ),
                array( 'icon' => 'fa-cube',          'title' => 'Quality Parts' ),
                array( 'icon' => 'fa-shield-alt',    'title' => 'Customer Trust' ),
                array( 'icon' => 'fa-check-double',  'title' => 'Complete Care' ),
            );
        }
        foreach ( $features as $f ) :
        ?>
        <div class="feature-item">
            <i class="fas <?php echo esc_attr( $f['icon'] ); ?>"></i>
            <h3><?php echo esc_html( $f['title'] ); ?></h3>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- ═══════════════════════════════════════════
     ABOUT SECTION
     ═══════════════════════════════════════════ -->
<section id="about" class="about-section reveal">
    <div class="about-grid">
        <div class="about-image-wrap">
            <div class="about-image">
                <img src="<?php echo esc_url( $about_img ); ?>" alt="About MMM Automotive" width="800" height="900" loading="lazy">
            </div>
        </div>
        <div>
            <span class="about-label"><?php echo esc_html( $about_label ); ?></span>
            <h2 class="about-title">
                <?php echo esc_html( $about_title ); ?> <br>
                <span class="muted"><?php echo esc_html( $about_title_muted ); ?></span>
            </h2>
            <p class="about-text">
                <?php echo esc_html( $about_text ); ?>
            </p>
            <div class="about-stats">
                <?php
                $stats = null;
                if ( function_exists( 'get_field' ) ) {
                    $stats = get_field( 'about_stats' );
                }
                if ( ! $stats ) {
                    $stats = array(
                        array( 'number' => '15+', 'label' => 'Years Experience' ),
                        array( 'number' => '5k+', 'label' => 'Clients Served' ),
                    );
                }
                foreach ( $stats as $stat ) :
                ?>
                <div>
                    <span class="about-stat-number"><?php echo esc_html( $stat['number'] ); ?></span>
                    <span class="about-stat-label"><?php echo esc_html( $stat['label'] ); ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════
     SERVICES GRID
     ═══════════════════════════════════════════ -->
<section id="services" class="services-section">
    <div class="services-header reveal">
        <div>
            <h2 class="services-title"><?php echo esc_html( $services_title ); ?></h2>
        </div>
        <div class="services-line"></div>
    </div>

    <div class="services-grid reveal">
        <?php
        $services = null;
        if ( function_exists( 'get_field' ) ) {
            $services = get_field( 'services' );
        }
        if ( ! $services ) {
            $services = array(
                array( 'image' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=600&q=80', 'title' => 'General Auto Repair',  'description' => 'General diagnostics and repairs for all makes and models.', 'link' => '#appointment' ),
                array( 'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85f82e?auto=format&fit=crop&w=600&q=80', 'title' => 'Tire Service',          'description' => 'Tire replacement, rotation, and balancing for a smooth drive.', 'link' => '#appointment' ),
                array( 'image' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=600&q=80', 'title' => 'AC & Heating',          'description' => 'Inspection and repair of air conditioning and heating systems.', 'link' => '#appointment' ),
                array( 'image' => 'https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?auto=format&fit=crop&w=600&q=80', 'title' => 'Wheel Alignment',       'description' => 'Precision wheel alignment to enhance driving stability.', 'link' => '#appointment' ),
                array( 'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85f82e?auto=format&fit=crop&w=600&q=80', 'title' => 'Brake Services',        'description' => 'Full brake inspection, pad replacement, and repairs.', 'link' => '#appointment' ),
                array( 'image' => 'https://images.unsplash.com/photo-1552930294-6b595f4c2974?auto=format&fit=crop&w=600&q=80', 'title' => 'Battery Service',       'description' => 'Testing, replacement, and installation of batteries.', 'link' => '#appointment' ),
                array( 'image' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=600&q=80', 'title' => 'Diagnostics',           'description' => 'Advanced diagnostic tools to accurately identify any issues.', 'link' => '#appointment' ),
                array( 'image' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=600&q=80', 'title' => 'Pre-purchase',          'description' => 'A full inspection to help you make a confident decision.', 'link' => '#appointment' ),
                array( 'image' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=600&q=80', 'title' => 'Oil Change',            'description' => 'Fast and professional oil & filter changes.', 'link' => '#appointment' ),
                array( 'image' => 'https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?auto=format&fit=crop&w=600&q=80', 'title' => 'Maintenance',           'description' => 'Routine factory-recommended services.', 'link' => '#appointment' ),
                array( 'image' => 'https://images.unsplash.com/photo-1552930294-6b595f4c2974?auto=format&fit=crop&w=600&q=80', 'title' => 'Suspension',            'description' => 'Repair and replacement of shocks and struts.', 'link' => '#appointment' ),
                array( 'image' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=600&q=80', 'title' => 'Electrical',            'description' => 'Basic electrical checks and minor fixes.', 'link' => '#appointment' ),
            );
        }

        foreach ( $services as $service ) :
            $img_url = isset( $service['image'] ) ? $service['image'] : '';
        ?>
        <div class="service-card">
            <?php if ( $img_url ) : ?>
            <div class="service-card-image">
                <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $service['title'] ); ?>" loading="lazy">
                <div class="service-card-arrow">
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
            <?php endif; ?>
            <h3><?php echo esc_html( $service['title'] ); ?></h3>
            <p><?php echo esc_html( $service['description'] ); ?></p>
            <a href="<?php echo esc_url( $service['link'] ); ?>" class="service-card-link">Learn More</a>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- ═══════════════════════════════════════════
     TESTIMONIALS (Trustindex Widget)
     ═══════════════════════════════════════════ -->
<?php
$reviews_shortcode = mmm_acf( 'testimonials_shortcode', '' );
if ( $reviews_shortcode ) :
?>
<section class="testimonials-section reveal">
    <div style="max-width: 80rem; margin: 0 auto; padding: 0 1.5rem;">
        <div class="testimonials-label">
            <div class="line"></div>
            <h3>Testimonials</h3>
            <div class="line"></div>
        </div>
    </div>
    <div class="trustindex-wrap">
        <?php echo do_shortcode( $reviews_shortcode ); ?>
    </div>
</section>
<?php else : ?>
<section class="testimonials-section reveal">
    <div style="max-width: 80rem; margin: 0 auto; padding: 0 1.5rem;">
        <div class="testimonials-label">
            <div class="line"></div>
            <h3>Testimonials</h3>
            <div class="line"></div>
        </div>
        <p style="text-align: center; color: var(--color-gray-500); padding: 3rem 0;">Configure Google Reviews in Page Settings → Testimonials tab.</p>
    </div>
</section>
<?php endif; ?>

<!-- ═══════════════════════════════════════════
     BRANDS SLIDER
     ═══════════════════════════════════════════ -->
<?php
$brands_logos = null;
if ( function_exists( 'get_field' ) ) {
    $brands_logos = get_field( 'brands_logos' );
}
if ( $brands_logos && count( $brands_logos ) >= 1 ) :
$brands_title = mmm_acf( 'brands_title', 'BRANDS WE SERVICE.' );
?>
<div class="brands-slider">
    <h2 class="brands-title"><?php echo esc_html( $brands_title ); ?></h2>
    <div class="brands-track">
        <div class="brands-inner">
            <?php foreach ( $brands_logos as $logo ) : ?>
            <div class="brand-logo-item">
                <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ?: $logo['title'] ); ?>" loading="lazy">
            </div>
            <?php endforeach; ?>
            <?php /* Duplicate for infinite scroll */ ?>
            <?php foreach ( $brands_logos as $logo ) : ?>
            <div class="brand-logo-item">
                <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ?: $logo['title'] ); ?>" loading="lazy">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- ═══════════════════════════════════════════
     BOOKING FORM
     ═══════════════════════════════════════════ -->
<section id="appointment" class="booking-section reveal">
    <div class="booking-grid">
        <div>
            <span class="booking-label">Booking</span>
            <h2 class="booking-title"><?php echo esc_html( $booking_title ); ?></h2>

            <div class="booking-status">
                <div class="booking-status-header">
                    <div class="status-dot"></div>
                    <span class="booking-status-title">Shop Status: Open</span>
                </div>
                <p class="booking-status-text"><?php echo esc_html( $booking_status ); ?></p>
            </div>
        </div>

        <div class="cf7-form-wrap">
            <?php
            $booking_cf7 = mmm_acf( 'booking_cf7_shortcode', '' );
            if ( $booking_cf7 ) {
                echo do_shortcode( $booking_cf7 );
            } else {
                echo '<p style="color: var(--color-gray-500);">Configure the booking form in Page Settings → Booking tab.</p>';
            }
            ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════
     SERVICE IN PROGRESS GALLERY
     ═══════════════════════════════════════════ -->
<section class="gallery-section">
    <h2 class="gallery-title"><?php echo esc_html( $gallery_title ); ?></h2>
    <div class="gallery-grid">
        <?php
        $gallery = null;
        if ( function_exists( 'get_field' ) ) {
            $gallery = get_field( 'gallery_images' );
        }

        $gallery_items = array();
        if ( $gallery ) {
            foreach ( $gallery as $img ) {
                $gallery_items[] = array(
                    'src'  => $img['url'],
                    'full' => isset( $img['sizes']['large'] ) ? $img['sizes']['large'] : $img['url'],
                    'alt'  => $img['alt'],
                );
            }
        } else {
            $gallery_items = array(
                array( 'src' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?q=80&w=600&auto=format&fit=crop', 'full' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?q=80&w=1974&auto=format&fit=crop', 'alt' => 'BMW on lift' ),
                array( 'src' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?q=80&w=600&auto=format&fit=crop', 'full' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?q=80&w=1974&auto=format&fit=crop', 'alt' => 'Car Parts and Oil' ),
                array( 'src' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?q=80&w=600&auto=format&fit=crop', 'full' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?q=80&w=2070&auto=format&fit=crop', 'alt' => 'Car on lift low angle' ),
                array( 'src' => 'https://images.unsplash.com/photo-1552930294-6b595f4c2974?q=80&w=600&auto=format&fit=crop', 'full' => 'https://images.unsplash.com/photo-1552930294-6b595f4c2974?q=80&w=2071&auto=format&fit=crop', 'alt' => 'Engine bay open' ),
            );
        }

        foreach ( $gallery_items as $idx => $img ) :
        ?>
        <div class="gallery-item" data-lightbox="<?php echo $idx; ?>" data-full="<?php echo esc_url( $img['full'] ); ?>" data-alt="<?php echo esc_attr( $img['alt'] ); ?>">
            <img src="<?php echo esc_url( $img['src'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" loading="lazy">
            <div class="gallery-item-zoom"><i class="fas fa-expand"></i></div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Lightbox -->
<div id="mmm-lightbox" class="lb" aria-hidden="true" role="dialog" aria-label="Image gallery">
    <div class="lb-overlay"></div>
    <div class="lb-wrap">
        <div class="lb-topbar">
            <span class="lb-counter"></span>
            <button class="lb-close" aria-label="Close gallery"><i class="fas fa-times"></i></button>
        </div>
        <button class="lb-arrow lb-prev" aria-label="Previous image"><i class="fas fa-chevron-left"></i></button>
        <button class="lb-arrow lb-next" aria-label="Next image"><i class="fas fa-chevron-right"></i></button>
        <div class="lb-stage">
            <img class="lb-img" src="" alt="" draggable="false">
            <div class="lb-spinner"><div></div></div>
        </div>
        <p class="lb-caption"></p>
    </div>
</div>

<?php get_footer(); ?>
