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
        <img src="<?php echo esc_url( $hero_img ); ?>" alt="<?php bloginfo( 'name' ); ?>">
    </div>

    <div class="hero-content">
        <div class="hero-inner">
            <div class="hero-badge animate-fade-in-up" style="animation-delay: 0.1s;">
                <span><?php echo esc_html( $hero_badge ); ?></span>
            </div>

            <h1 class="hero-title animate-fade-in-up" style="animation-delay: 0.2s;">
                <?php echo esc_html( $hero_line1 ); ?> <br>
                <span class="gradient-text"><?php echo esc_html( $hero_highlight ); ?></span> <br>
                <?php echo esc_html( $hero_line3 ); ?>
            </h1>

            <p class="hero-subtitle animate-fade-in-up" style="animation-delay: 0.3s;">
                <?php echo esc_html( $hero_subtitle ); ?>
            </p>

            <div class="hero-buttons animate-fade-in-up" style="animation-delay: 0.4s;">
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
                <img src="<?php echo esc_url( $about_img ); ?>" alt="About MMM Automotive">
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
     TESTIMONIALS
     ═══════════════════════════════════════════ -->
<section class="testimonials-section reveal">
    <div style="max-width: 80rem; margin: 0 auto; padding: 0 1.5rem;">
        <div class="testimonials-label">
            <div class="line"></div>
            <h3>Testimonials</h3>
            <div class="line"></div>
        </div>
    </div>

    <div class="testimonials-carousel scrollbar-hide">
        <?php
        $testimonials = null;
        if ( function_exists( 'get_field' ) ) {
            $testimonials = get_field( 'testimonials' );
        }
        if ( ! $testimonials ) {
            $testimonials = array(
                array(
                    'initial' => 'K',
                    'name'    => 'Kristian Lamb-Griffith',
                    'date'    => '2025-09-20',
                    'text'    => 'LOVE MMM Automotive! They are honest, fair, and most of all KNOWLEDGEABLE! It\'s refreshing and appreciated to have a trustworthy place to take my vehicle! Cannot recommend them enough!!!!',
                ),
                array(
                    'initial' => 'M',
                    'name'    => 'Michael S.',
                    'date'    => '2025-10-02',
                    'text'    => 'Excellent service on my BMW. They diagnosed the issue quickly where other shops failed. The transparency in pricing and timeline was fantastic. Will definitely return.',
                ),
                array(
                    'initial' => 'S',
                    'name'    => 'Sarah Jenkins',
                    'date'    => '2025-08-15',
                    'text'    => 'Professional, clean shop, and great communication. Brought my Audi in for routine maintenance and felt like I was getting dealership quality without the dealership price.',
                ),
            );
        }

        foreach ( $testimonials as $t ) :
        ?>
        <div class="testimonial-card">
            <div class="testimonial-header">
                <div class="testimonial-avatar"><?php echo esc_html( $t['initial'] ); ?></div>
                <div>
                    <p class="testimonial-name"><?php echo esc_html( $t['name'] ); ?></p>
                    <p class="testimonial-date"><?php echo esc_html( $t['date'] ); ?></p>
                </div>
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" class="testimonial-google" alt="Google">
            </div>
            <div class="testimonial-stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <p class="testimonial-text">"<?php echo esc_html( $t['text'] ); ?>"</p>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="testimonials-dots">
        <?php foreach ( $testimonials as $i => $t ) : ?>
        <span></span>
        <?php endforeach; ?>
    </div>
</section>

<!-- ═══════════════════════════════════════════
     BRANDS SLIDER
     ═══════════════════════════════════════════ -->
<div class="brands-slider">
    <div class="brands-track">
        <div class="brands-inner">
            <i class="fab fa-aws"></i>
            <i class="fab fa-google"></i>
            <i class="fab fa-apple"></i>
            <i class="fab fa-microsoft"></i>
            <i class="fab fa-uber"></i>
            <i class="fab fa-lyft"></i>
            <i class="fab fa-bmw"></i>
            <i class="fab fa-aws"></i>
            <i class="fab fa-google"></i>
            <i class="fab fa-apple"></i>
            <i class="fab fa-microsoft"></i>
            <i class="fab fa-uber"></i>
            <i class="fab fa-lyft"></i>
            <i class="fab fa-bmw"></i>
        </div>
    </div>
</div>

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

        <div>
            <form id="mmm-booking-form" class="booking-form" novalidate>
                <?php wp_nonce_field( 'mmm_booking_nonce', 'mmm_nonce' ); ?>

                <div class="form-row form-row-2" style="margin-bottom: 2.5rem;">
                    <div class="form-group">
                        <input type="text" id="fname" name="fname" class="form-input" placeholder="Name" required>
                        <label for="fname" class="form-label">First name*</label>
                    </div>
                    <div class="form-group">
                        <input type="text" id="lname" name="lname" class="form-input" placeholder="Last Name" required>
                        <label for="lname" class="form-label">Last name*</label>
                    </div>
                </div>

                <div class="form-row form-row-2" style="margin-bottom: 2.5rem;">
                    <div class="form-group">
                        <input type="tel" id="phone" name="phone" class="form-input" placeholder="Phone" required>
                        <label for="phone" class="form-label">Phone*</label>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" class="form-input" placeholder="Email" required>
                        <label for="email" class="form-label">Email*</label>
                    </div>
                </div>

                <div class="form-row form-row-3" style="margin-bottom: 2.5rem;">
                    <div class="form-group">
                        <input type="text" id="make" name="make" class="form-input" placeholder="Make" required>
                        <label for="make" class="form-label">Make*</label>
                    </div>
                    <div class="form-group">
                        <input type="text" id="model" name="model" class="form-input" placeholder="Model" required>
                        <label for="model" class="form-label">Model*</label>
                    </div>
                    <div class="form-group">
                        <input type="text" id="year" name="year" class="form-input" placeholder="Year" required>
                        <label for="year" class="form-label">Year*</label>
                    </div>
                </div>

                <div style="margin-bottom: 2.5rem;">
                    <span class="booking-label" style="margin-bottom: 1.5rem;">Service needed*</span>
                    <div class="service-checkboxes">
                        <?php
                        $booking_services = null;
                        if ( function_exists( 'get_field' ) ) {
                            $booking_services = get_field( 'booking_services' );
                        }
                        if ( ! $booking_services ) {
                            $booking_services = array(
                                array( 'service_name' => 'Oil Change & Maintenance' ),
                                array( 'service_name' => 'Wheel Alignment' ),
                                array( 'service_name' => 'Brakes Service' ),
                                array( 'service_name' => 'AC & Heating' ),
                                array( 'service_name' => 'Diagnostics' ),
                                array( 'service_name' => 'Battery Service' ),
                                array( 'service_name' => 'Tires / Wheels' ),
                                array( 'service_name' => 'Suspension' ),
                                array( 'service_name' => 'Scheduled Maintenance' ),
                                array( 'service_name' => 'Pre-purchase Inspection' ),
                                array( 'service_name' => 'Electrical Repair' ),
                                array( 'service_name' => 'Other' ),
                            );
                        }
                        foreach ( $booking_services as $svc ) :
                        ?>
                        <label class="checkbox-label">
                            <div class="checkbox-wrap">
                                <input type="checkbox" name="services[]" value="<?php echo esc_attr( $svc['service_name'] ); ?>">
                                <div class="checkbox-indicator"></div>
                            </div>
                            <span class="checkbox-text"><?php echo esc_html( $svc['service_name'] ); ?></span>
                        </label>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="form-group" style="margin-bottom: 2.5rem;">
                    <input type="text" id="vin" name="vin" class="form-input" placeholder="VIN">
                    <label for="vin" class="form-label">VIN (Optional)</label>
                </div>

                <div class="consent-row">
                    <div class="checkbox-wrap">
                        <input type="checkbox" id="consent" name="consent" required>
                        <div class="checkbox-indicator"></div>
                    </div>
                    <label for="consent" class="consent-label">
                        I agree to be contacted about my appointment. See our <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a>
                    </label>
                </div>

                <button type="submit" class="submit-btn">Submit Request</button>

                <div id="form-message" style="margin-top: 1rem; text-align: center; display: none;"></div>
            </form>
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

        if ( $gallery ) :
            foreach ( $gallery as $img ) :
        ?>
        <div class="gallery-item">
            <img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" loading="lazy">
        </div>
        <?php
            endforeach;
        else :
            $fallback_gallery = array(
                array( 'src' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?q=80&w=1974&auto=format&fit=crop', 'alt' => 'BMW on lift' ),
                array( 'src' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?q=80&w=1974&auto=format&fit=crop', 'alt' => 'Car Parts and Oil' ),
                array( 'src' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?q=80&w=2070&auto=format&fit=crop', 'alt' => 'Car on lift low angle' ),
                array( 'src' => 'https://images.unsplash.com/photo-1552930294-6b595f4c2974?q=80&w=2071&auto=format&fit=crop', 'alt' => 'Engine bay open' ),
            );
            foreach ( $fallback_gallery as $img ) :
        ?>
        <div class="gallery-item">
            <img src="<?php echo esc_url( $img['src'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" loading="lazy">
        </div>
        <?php
            endforeach;
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>
