<?php
/**
 * Template Name: Contact Page
 * Description: Contact page with info cards, form, and Google Maps
 * @package MMM_Theme
 */

get_header();

// Contact info from Customizer
$phone      = mmm_get( 'mmm_phone', '(702) 954-9773' );
$phone_link = mmm_get( 'mmm_phone_link', '+17029549773' );
$email      = mmm_get( 'mmm_email', 'info@mmmautomotive.com' );
$address    = mmm_get( 'mmm_address', "2585 S Maryland Pkwy,\nSuite D,\nLas Vegas, NV 89109" );

$instagram = mmm_get( 'mmm_instagram', '#' );
$facebook  = mmm_get( 'mmm_facebook', '#' );
$whatsapp  = mmm_get( 'mmm_whatsapp', '#' );

// ACF with fallbacks
$hero_badge    = mmm_acf( 'contact_hero_badge', 'Las Vegas, NV' );
$hero_title1   = mmm_acf( 'contact_hero_title1', 'GET IN' );
$hero_highlight = mmm_acf( 'contact_hero_highlight', 'TOUCH.' );
$hero_subtitle = mmm_acf( 'contact_hero_subtitle', 'Have a question about your vehicle or need a quote? Visit our shop or send us a message. We are here to help.' );

$maps_embed = mmm_acf( 'contact_map_embed', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3222.367174737274!2d-115.13909762423956!3d36.13328227244369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c8c49a60773d4b%3A0x6c6e7f8e8e8e8e8e!2s2585%20S%20Maryland%20Pkwy%20Suite%20D%2C%20Las%20Vegas%2C%20NV%2089109!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus' );
$maps_link  = mmm_acf( 'contact_map_link', 'https://www.google.com/maps/place/2585+S+Maryland+Pkwy+Suite+D,+Las+Vegas,+NV+89109' );
?>

<!-- ═══════════════════════════════════════════
     CONTACT HERO
     ═══════════════════════════════════════════ -->
<section class="contact-hero">
    <div class="contact-hero-inner">
        <div class="contact-hero-grid">
            <div>
                <div class="hero-badge animate-fade-in-up">
                    <span><?php echo esc_html( $hero_badge ); ?></span>
                </div>

                <h1 class="contact-hero-title animate-fade-in-up" style="animation-delay: 0.1s;">
                    <?php echo esc_html( $hero_title1 ); ?><br>
                    <span class="gradient-text"><?php echo esc_html( $hero_highlight ); ?></span>
                </h1>
            </div>
            <div class="contact-hero-subtitle-wrap animate-fade-in-up" style="animation-delay: 0.2s;">
                <p class="hero-subtitle"><?php echo esc_html( $hero_subtitle ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════
     CONTACT CARDS (INFO + FORM)
     ═══════════════════════════════════════════ -->
<section class="contact-cards-section reveal">
    <div class="contact-cards-inner">
        <div class="contact-cards-grid">

            <!-- Left: Info Card -->
            <div class="contact-info-card">
                <div>
                    <div class="contact-block">
                        <h3 class="contact-label">Visit Us</h3>
                        <address class="contact-address">
                            <?php echo nl2br( esc_html( $address ) ); ?>
                        </address>
                        <div class="contact-directions">
                            <a href="<?php echo esc_url( $maps_link ); ?>" target="_blank" rel="noopener noreferrer">
                                Get Directions <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="contact-block">
                        <div class="contact-detail">
                            <h3 class="contact-label">Call Us</h3>
                            <a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="contact-value"><?php echo esc_html( '+1 ' . $phone ); ?></a>
                        </div>
                        <div class="contact-detail">
                            <h3 class="contact-label">Email Us</h3>
                            <a href="mailto:<?php echo esc_attr( $email ); ?>" class="contact-value"><?php echo esc_html( $email ); ?></a>
                        </div>
                    </div>

                    <div class="contact-block">
                        <h3 class="contact-label">Opening Hours</h3>
                        <ul class="contact-hours">
                            <li>
                                <span>Monday - Friday</span>
                                <span class="time">9:00 am - 5:00 pm</span>
                            </li>
                            <li>
                                <span>Saturday</span>
                                <span class="time">By Appointment Only</span>
                            </li>
                            <li>
                                <span>Sunday</span>
                                <span class="closed">Closed</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="contact-socials">
                    <a href="<?php echo esc_url( $instagram ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="<?php echo esc_url( $facebook ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="<?php echo esc_url( $whatsapp ); ?>" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <!-- Right: Contact Form Card -->
            <div class="contact-form-card">
                <h3 class="contact-form-title">Send a Message</h3>
                <div class="cf7-form-wrap">
                    <?php
                    $contact_cf7 = mmm_acf( 'contact_cf7_shortcode', '' );
                    if ( $contact_cf7 ) {
                        echo do_shortcode( $contact_cf7 );
                    } else {
                        echo '<p style="color: var(--color-gray-500);">Configure the contact form in Page Settings → Contact Form tab.</p>';
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════
     GOOGLE MAPS
     ═══════════════════════════════════════════ -->
<section class="contact-map-section">
    <iframe
        src="<?php echo esc_url( $maps_embed ); ?>"
        width="100%"
        height="100%"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        class="contact-map-iframe"
        title="MMM Automotive Location">
    </iframe>
    <div class="contact-map-overlay"></div>
    <div class="contact-map-label">
        <span>Las Vegas Headquarters</span>
    </div>
</section>

<?php get_footer(); ?>
