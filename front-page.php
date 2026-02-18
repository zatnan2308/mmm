<?php
/**
 * Front Page Template
 * @package MMM_Theme
 */

get_header();

// Hero image
$hero_img = mmm_get( 'mmm_hero_image' );
if ( ! $hero_img ) {
    $hero_img = 'https://images.unsplash.com/photo-1617788138017-80ad40651399?q=80&w=2070&auto=format&fit=crop';
}

// About image
$about_img = mmm_get( 'mmm_about_image' );
if ( ! $about_img ) {
    $about_img = 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80';
}
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
                <span>Premium Auto Care Las Vegas</span>
            </div>

            <h1 class="hero-title animate-fade-in-up" style="animation-delay: 0.2s;">
                OTHERS <br>
                <span class="gradient-text">PROMISE.</span> <br>
                WE PERFORM.
            </h1>

            <p class="hero-subtitle animate-fade-in-up" style="animation-delay: 0.3s;">
                From routine maintenance to complex repairs — we deliver precision, quality, and trust every time.
            </p>

            <div class="hero-buttons animate-fade-in-up" style="animation-delay: 0.4s;">
                <a href="#appointment" class="hero-btn-primary">
                    <div class="btn-bg"></div>
                    <span>Request an appointment</span>
                </a>
                <a href="#services" class="hero-btn-secondary">Our Services</a>
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
        <div class="feature-item">
            <i class="fas fa-tools"></i>
            <h3>Professional Service</h3>
        </div>
        <div class="feature-item">
            <i class="fas fa-cube"></i>
            <h3>Quality Parts</h3>
        </div>
        <div class="feature-item">
            <i class="fas fa-shield-alt"></i>
            <h3>Customer Trust</h3>
        </div>
        <div class="feature-item">
            <i class="fas fa-check-double"></i>
            <h3>Complete Care</h3>
        </div>
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
            <span class="about-label">About Us</span>
            <h2 class="about-title">
                Precision, Quality, <br>
                <span class="muted">And Trust</span>
            </h2>
            <p class="about-text">
                From routine maintenance to complex repairs — we deliver precision, quality, and trust every time. Our facility is designed to handle modern vehicles with the care they deserve.
            </p>
            <div class="about-stats">
                <div>
                    <span class="about-stat-number">15+</span>
                    <span class="about-stat-label">Years Experience</span>
                </div>
                <div>
                    <span class="about-stat-number">5k+</span>
                    <span class="about-stat-label">Clients Served</span>
                </div>
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
            <h2 class="services-title">OUR SERVICES.</h2>
        </div>
        <div class="services-line"></div>
    </div>

    <div class="services-grid reveal">
        <?php
        $services = array(
            array(
                'icon'  => 'fa-wrench',
                'title' => 'General Auto Repair',
                'desc'  => 'General diagnostics and repairs for all makes and models.',
                'link'  => '#appointment',
            ),
            array(
                'icon'  => 'fa-dharmachakra',
                'title' => 'Tire Service',
                'desc'  => 'Tire replacement, rotation, and balancing for a smooth drive.',
                'link'  => '#appointment',
            ),
            array(
                'icon'  => 'fa-snowflake',
                'title' => 'AC & Heating',
                'desc'  => 'Inspection and repair of air conditioning and heating systems.',
                'link'  => '#appointment',
            ),
            array(
                'icon'  => 'fa-arrows-alt-h',
                'title' => 'Wheel Alignment',
                'desc'  => 'Precision wheel alignment to enhance driving stability.',
                'link'  => '#appointment',
            ),
            array(
                'icon'  => 'fa-compact-disc',
                'title' => 'Brake Services',
                'desc'  => 'Full brake inspection, pad replacement, and repairs.',
                'link'  => '#appointment',
            ),
            array(
                'icon'  => 'fa-car-battery',
                'title' => 'Battery Service',
                'desc'  => 'Testing, replacement, and installation of batteries.',
                'link'  => '#appointment',
            ),
            array(
                'icon'  => 'fa-laptop-medical',
                'title' => 'Diagnostics',
                'desc'  => 'Advanced diagnostic tools to accurately identify any issues.',
                'link'  => '#appointment',
            ),
            array(
                'icon'  => 'fa-clipboard-check',
                'title' => 'Pre-purchase',
                'desc'  => 'A full inspection to help you make a confident decision.',
                'link'  => '#appointment',
            ),
            array(
                'icon'  => 'fa-oil-can',
                'title' => 'Oil Change',
                'desc'  => 'Fast and professional oil & filter changes.',
                'link'  => '#appointment',
            ),
            array(
                'icon'  => 'fa-calendar-check',
                'title' => 'Maintenance',
                'desc'  => 'Routine factory-recommended services.',
                'link'  => '#appointment',
            ),
            array(
                'icon'  => 'fa-tachometer-alt',
                'title' => 'Suspension',
                'desc'  => 'Repair and replacement of shocks and struts.',
                'link'  => '#appointment',
            ),
            array(
                'icon'  => 'fa-bolt',
                'title' => 'Electrical',
                'desc'  => 'Basic electrical checks and minor fixes.',
                'link'  => '#appointment',
            ),
        );

        foreach ( $services as $service ) :
        ?>
        <div class="service-card">
            <div class="service-card-arrow">
                <i class="fas fa-arrow-right"></i>
            </div>
            <i class="fas <?php echo esc_attr( $service['icon'] ); ?> service-card-icon"></i>
            <h3><?php echo esc_html( $service['title'] ); ?></h3>
            <p><?php echo esc_html( $service['desc'] ); ?></p>
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
        <span></span><span></span><span></span>
    </div>
</section>

<!-- ═══════════════════════════════════════════
     BRANDS SLIDER
     ═══════════════════════════════════════════ -->
<div class="brands-slider">
    <div class="brands-track">
        <div class="brands-inner">
            <!-- Original Set -->
            <i class="fab fa-aws"></i>
            <i class="fab fa-google"></i>
            <i class="fab fa-apple"></i>
            <i class="fab fa-microsoft"></i>
            <i class="fab fa-uber"></i>
            <i class="fab fa-lyft"></i>
            <i class="fab fa-bmw"></i>
            <!-- Duplicate Set (for seamless loop) -->
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
            <h2 class="booking-title">NEED SERVICE TODAY?</h2>

            <div class="booking-status">
                <div class="booking-status-header">
                    <div class="status-dot"></div>
                    <span class="booking-status-title">Shop Status: Open</span>
                </div>
                <p class="booking-status-text">Our team is currently accepting new appointments. Please fill out the form for a quick response.</p>
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
                        $checkbox_services = array(
                            'Oil Change & Maintenance',
                            'Wheel Alignment',
                            'Brakes Service',
                            'AC & Heating',
                            'Diagnostics',
                            'Battery Service',
                            'Tires / Wheels',
                            'Suspension',
                            'Scheduled Maintenance',
                            'Pre-purchase Inspection',
                            'Electrical Repair',
                            'Other',
                        );
                        foreach ( $checkbox_services as $svc ) :
                        ?>
                        <label class="checkbox-label">
                            <div class="checkbox-wrap">
                                <input type="checkbox" name="services[]" value="<?php echo esc_attr( $svc ); ?>">
                                <div class="checkbox-indicator"></div>
                            </div>
                            <span class="checkbox-text"><?php echo esc_html( $svc ); ?></span>
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
    <h2 class="gallery-title">SERVICE IN PROGRESS.</h2>
    <div class="gallery-grid">
        <?php
        $gallery_images = array(
            array(
                'src' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?q=80&w=1974&auto=format&fit=crop',
                'alt' => 'BMW on lift',
            ),
            array(
                'src' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?q=80&w=1974&auto=format&fit=crop',
                'alt' => 'Car Parts and Oil',
            ),
            array(
                'src' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?q=80&w=2070&auto=format&fit=crop',
                'alt' => 'Car on lift low angle',
            ),
            array(
                'src' => 'https://images.unsplash.com/photo-1552930294-6b595f4c2974?q=80&w=2071&auto=format&fit=crop',
                'alt' => 'Engine bay open',
            ),
        );
        foreach ( $gallery_images as $img ) :
        ?>
        <div class="gallery-item">
            <img src="<?php echo esc_url( $img['src'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" loading="lazy">
        </div>
        <?php endforeach; ?>
    </div>
</section>

<?php get_footer(); ?>
