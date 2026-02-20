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

    <!-- Preconnect to critical origins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://images.unsplash.com">

    <!-- Preload hero LCP image -->
    <?php
    $is_front = ( is_front_page() || is_home() );
    if ( $is_front ) {
        $lcp_img = mmm_get( 'mmm_hero_image', '' );
        if ( $lcp_img ) {
            echo '<link rel="preload" as="image" href="' . esc_url( $lcp_img ) . '">' . "\n";
        }
    }
    ?>

    <?php wp_head(); ?>
</head>
<body <?php body_class( 'antialiased' ); ?>>
<?php wp_body_open(); ?>

<!-- Navigation -->
<nav class="site-nav glass-panel">
    <div class="nav-inner">
        <!-- Logo -->
        <?php if ( has_custom_logo() ) : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo nav-logo-custom">
                <?php
                $logo_id  = get_theme_mod( 'custom_logo' );
                $logo_url = wp_get_attachment_image_url( $logo_id, 'full' );
                ?>
                <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="nav-logo-img" width="200" height="48">
            </a>
        <?php else : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo">
                <div class="nav-logo-icon">M</div>
                <div class="nav-logo-text">
                    <span class="brand">MMM</span>
                    <span class="sub">Automotive</span>
                </div>
            </a>
        <?php endif; ?>

        <!-- Desktop Menu -->
        <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-menu',
                'fallback_cb'    => false,
                'depth'          => 2,
                'walker'         => new MMM_Mega_Walker(),
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
            <a href="#appointment" class="nav-cta">Book Appointment</a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="mobile-menu-btn" aria-label="Toggle menu">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu" class="mob-overlay">

    <!-- Header -->
    <div class="mob-header">
        <?php if ( has_custom_logo() ) : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo nav-logo-custom">
                <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="nav-logo-img" width="200" height="40">
            </a>
        <?php else : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mob-logo">
                <div class="mob-logo-icon">M</div>
                <span class="mob-logo-text">MMM</span>
            </a>
        <?php endif; ?>
        <button id="mobile-menu-close" class="mob-close" aria-label="Close menu">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <!-- Scrollable Content -->
    <div class="mob-scroll">

        <!-- Navigation -->
        <nav class="mob-nav">
            <?php
            $mob_location = has_nav_menu( 'mobile' ) ? 'mobile' : 'primary';
            $mob_menu_items = wp_get_nav_menu_items( get_nav_menu_locations()[ $mob_location ] ?? 0 );
            $current_parent = 0;
            $in_sub = false;

            if ( $mob_menu_items ) :
                foreach ( $mob_menu_items as $mitem ) :
                    $is_mega  = get_post_meta( $mitem->ID, '_mmm_mega_parent', true );
                    $icon     = get_post_meta( $mitem->ID, '_mmm_icon_class', true );
                    $is_top   = get_post_meta( $mitem->ID, '_mmm_is_top', true );

                    // Top-level item
                    if ( intval( $mitem->menu_item_parent ) === 0 ) :

                        // Close previous sub-menu if open
                        if ( $in_sub ) {
                            echo '</div></div>';
                            $in_sub = false;
                        }

                        if ( $is_mega ) :
                            $current_parent = $mitem->ID;
                            ?>
                            <div class="mob-item mob-has-sub" data-delay="0.2">
                                <div class="mob-accordion-trigger">
                                    <span class="mob-link-big"><?php echo esc_html( $mitem->title ); ?></span>
                                    <i class="fas fa-chevron-down mob-chevron"></i>
                                </div>
                                <div class="mob-sub-menu">
                            <?php
                            $in_sub = true;
                        else :
                            ?>
                            <div class="mob-item">
                                <a href="<?php echo esc_url( $mitem->url ); ?>" class="mob-link-big mob-link-muted"><?php echo esc_html( $mitem->title ); ?></a>
                            </div>
                            <?php
                        endif;

                    // Sub-item (child of mega parent)
                    elseif ( $in_sub && intval( $mitem->menu_item_parent ) == $current_parent ) :
                        ?>
                        <a href="<?php echo esc_url( $mitem->url ); ?>" class="mob-service-link<?php echo $is_top ? ' mob-service-popular' : ''; ?>">
                            <?php if ( $icon ) : ?>
                                <i class="<?php echo esc_attr( $icon ); ?> mob-service-icon<?php echo $is_top ? ' mob-icon-active' : ''; ?>"></i>
                            <?php else : ?>
                                <i class="fas fa-cog mob-service-icon"></i>
                            <?php endif; ?>
                            <div>
                                <span class="mob-service-name"><?php echo esc_html( $mitem->title ); ?></span>
                                <?php if ( $is_top ) : ?>
                                    <span class="mob-popular-label">Popular Service</span>
                                <?php endif; ?>
                            </div>
                        </a>
                        <?php
                    endif;
                endforeach;

                // Close last sub if open
                if ( $in_sub ) {
                    echo '</div></div>';
                }
            endif;
            ?>
        </nav>

        <!-- Divider -->
        <div class="mob-divider"></div>

        <!-- Footer Info -->
        <div class="mob-footer-info">
            <div class="mob-info-block">
                <p class="mob-info-label">Phone</p>
                <a href="tel:<?php echo esc_attr( mmm_get( 'mmm_phone_link', '+17029549773' ) ); ?>" class="mob-info-value">
                    <?php echo esc_html( mmm_get( 'mmm_phone', '(702) 954-9773' ) ); ?>
                </a>
            </div>
            <div class="mob-info-block">
                <p class="mob-info-label">Location</p>
                <p class="mob-info-address">
                    <?php echo nl2br( esc_html( mmm_get( 'mmm_address', "2585 S Maryland Pkwy, Suite D,\nLas Vegas, NV 89109" ) ) ); ?>
                </p>
            </div>
            <div class="mob-socials">
                <?php
                $ig = mmm_get( 'mmm_instagram', '#' );
                $fb = mmm_get( 'mmm_facebook', '#' );
                $wa = mmm_get( 'mmm_whatsapp', '#' );
                ?>
                <a href="<?php echo esc_url( $ig ); ?>" class="mob-social-btn" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="<?php echo esc_url( $fb ); ?>" class="mob-social-btn" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="<?php echo esc_url( $wa ); ?>" class="mob-social-btn" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>

    </div>

    <!-- Sticky Bottom CTA -->
    <div class="mob-sticky-cta">
        <a href="#appointment" class="mob-book-btn">Book Appointment</a>
    </div>
</div>
