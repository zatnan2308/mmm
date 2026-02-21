<?php
/**
 * Footer Template
 * @package MMM_Theme
 */

$phone      = mmm_get( 'mmm_phone', '(702) 954-9773' );
$phone_link = mmm_get( 'mmm_phone_link', '+17029549773' );
$email      = mmm_get( 'mmm_email', 'info@mmmautomotive.com' );
$address    = mmm_get( 'mmm_address', "2585 S Maryland Pkwy,\nSuite D,\nLas Vegas, NV 89109" );
$instagram  = mmm_get( 'mmm_instagram', '#' );
$facebook   = mmm_get( 'mmm_facebook', '#' );
$whatsapp   = mmm_get( 'mmm_whatsapp', '#' );
?>

<!-- Footer -->
<footer id="contact" class="site-footer">
    <!-- Big Watermark Text -->
    <div class="footer-watermark">
        <h1>MMM</h1>
    </div>

    <div class="footer-inner">
        <div class="footer-top">
            <!-- Brand & Address -->
            <div class="footer-brand" style="max-width: 24rem;">
                <?php if ( has_custom_logo() ) : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo-custom">
                        <?php
                        $f_logo_id  = get_theme_mod( 'custom_logo' );
                        $f_logo_url = wp_get_attachment_image_url( $f_logo_id, 'full' );
                        ?>
                        <img src="<?php echo esc_url( $f_logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="footer-logo-img" width="250" height="56">
                    </a>
                <?php else : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <span class="brand-mmm">MMM</span><span class="brand-auto">.AUTO</span>
                    </a>
                <?php endif; ?>

                <div>
                    <h5 class="footer-location-label">Location</h5>
                    <address class="footer-address">
                        <?php echo nl2br( esc_html( $address ) ); ?>
                    </address>
                </div>

                <div>
                    <h5 class="footer-contact-label">Contact</h5>
                    <div class="footer-contact">
                        <a href="tel:<?php echo esc_attr( $phone_link ); ?>">+1 <?php echo esc_html( $phone ); ?></a>
                        <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
                    </div>
                </div>
            </div>

            <!-- Map -->
            <div class="footer-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6443.952955056719!2d-115.138439!3d36.142786!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c8c5a10c404dd9%3A0x997f5323bc372a30!2sMMM%20Automotive!5e0!3m2!1sen!2sus!4v1771619204392!5m2!1sen!2sus"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="MMM Automotive Location">
                </iframe>
            </div>

            <!-- Navigation & Hours -->
            <div class="footer-nav-wrap">
                <div class="footer-nav">
                    <h4>Menu</h4>
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/#home' ) ); ?>">Home</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">Services</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">About</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/#appointment' ) ); ?>">Booking</a></li>
                    </ul>
                </div>

                <div class="footer-nav">
                    <h4>Hours</h4>
                    <ul class="footer-hours">
                        <li>
                            <span>Mon - Fri</span>
                            <span class="time">9am - 5pm</span>
                        </li>
                        <li>
                            <span>Sat</span>
                            <span class="time">Appt. Only</span>
                        </li>
                        <li>
                            <span>Sun</span>
                            <span class="closed">Closed</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-socials">
                <a href="<?php echo esc_url( $instagram ); ?>" class="footer-social-link" target="_blank" rel="noopener" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="<?php echo esc_url( $facebook ); ?>" class="footer-social-link" target="_blank" rel="noopener" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="<?php echo esc_url( $whatsapp ); ?>" class="footer-social-link" target="_blank" rel="noopener" aria-label="WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>

            <div class="footer-legal">
                <span>&copy; <?php echo date( 'Y' ); ?> MMM Automotive</span>
                <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy</a>
                <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">Terms</a>
                <a href="<?php echo esc_url( home_url( '/cookie-policy/' ) ); ?>">Cookies</a>
            </div>
            <div class="footer-credit">
                Website by <a href="https://webmarketit.site/" target="_blank" rel="noopener">Alexey Kachan — Web Market IT</a>
            </div>
        </div>
    </div>
</footer>

<!-- Floating Buttons -->
<a href="https://wa.me/message/AGJR3QRL2I5TC1" class="fab-whatsapp" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
    <i class="fab fa-whatsapp"></i>
    <span class="fab-wa-ping"></span>
</a>

<button class="fab-scroll-top" id="fab-scroll-top" aria-label="Back to top">
    <i class="fas fa-chevron-up"></i>
</button>

<!-- Cookie banner injected by JS after page load to avoid LCP impact -->

<?php wp_footer(); ?>
</body>
</html>
