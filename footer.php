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
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
