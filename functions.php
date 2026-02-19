<?php
/**
 * MMM Automotive Theme Functions
 *
 * @package MMM_Theme
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'MMM_THEME_VERSION', '1.0.0' );
define( 'MMM_THEME_DIR', get_template_directory() );
define( 'MMM_THEME_URI', get_template_directory_uri() );

/* ── Mega Menu System ─────────────────────── */
require_once MMM_THEME_DIR . '/inc/mega-menu.php';

/* ── Theme Setup ──────────────────────────── */
function mmm_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    register_nav_menus( array(
        'primary'       => __( 'Desktop Menu', 'mmm-theme' ),
        'mobile'        => __( 'Mobile Menu', 'mmm-theme' ),
        'footer-menu'   => __( 'Footer Menu', 'mmm-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'mmm_theme_setup' );

/* ── Enqueue Styles & Scripts ─────────────── */
function mmm_enqueue_assets() {
    // Google Fonts — preload for speed
    wp_enqueue_style(
        'mmm-google-fonts',
        'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Syne:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    // Font Awesome — loaded as non-render-blocking below via mmm_defer_fa
    wp_enqueue_style(
        'mmm-font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        array(),
        '6.4.0'
    );

    // Above-fold CSS (nav + hero) — render-blocking, ~5 KiB gzip
    wp_enqueue_style(
        'mmm-above-fold',
        MMM_THEME_URI . '/assets/css/above-fold.css',
        array(),
        MMM_THEME_VERSION
    );

    // Theme stylesheet — deferred via mmm_defer_fontawesome filter
    wp_enqueue_style(
        'mmm-style',
        get_stylesheet_uri(),
        array( 'mmm-above-fold' ),
        MMM_THEME_VERSION
    );

    // Main JS
    wp_enqueue_script(
        'mmm-main',
        MMM_THEME_URI . '/assets/js/main.js',
        array(),
        MMM_THEME_VERSION,
        true
    );

    // Service page JS (gallery slider + image swap)
    if ( is_page_template( 'template-service.php' ) ) {
        wp_enqueue_script(
            'mmm-service',
            MMM_THEME_URI . '/assets/js/service.js',
            array(),
            MMM_THEME_VERSION,
            true
        );
    }

    // Pass AJAX URL to JS
    wp_localize_script( 'mmm-main', 'mmmAjax', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'mmm_booking_nonce' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'mmm_enqueue_assets' );

/* ── Defer non-critical CSS (non-render-blocking) ── */
function mmm_defer_fontawesome( $tag, $handle ) {
    // Defer main style.css (above-fold.css covers initial paint)
    if ( 'mmm-style' === $handle ) {
        $tag = str_replace(
            "rel='stylesheet'",
            "rel='preload' as='style' onload=\"this.onload=null;this.rel='stylesheet'\"",
            $tag
        );
        return $tag . '<noscript>' . str_replace( "rel='preload' as='style' onload=\"this.onload=null;this.rel='stylesheet'\"", "rel='stylesheet'", $tag ) . '</noscript>';
    }
    // Defer Contact Form 7 CSS
    if ( 'contact-form-7' === $handle ) {
        $tag = str_replace(
            "rel='stylesheet'",
            "rel='preload' as='style' onload=\"this.onload=null;this.rel='stylesheet'\"",
            $tag
        );
        return $tag . '<noscript>' . str_replace( "rel='preload' as='style' onload=\"this.onload=null;this.rel='stylesheet'\"", "rel='stylesheet'", $tag ) . '</noscript>';
    }
    if ( 'mmm-font-awesome' === $handle ) {
        // Load as preload + onload swap — removes render-blocking
        $tag = str_replace(
            "rel='stylesheet'",
            "rel='preload' as='style' onload=\"this.onload=null;this.rel='stylesheet'\"",
            $tag
        );
        // Add noscript fallback
        $noscript = '<noscript>' . str_replace(
            array( "rel='preload' as='style' onload=\"this.onload=null;this.rel='stylesheet'\"", ),
            "rel='stylesheet'",
            $tag
        ) . '</noscript>';
        return $tag . $noscript;
    }
    return $tag;
}
add_filter( 'style_loader_tag', 'mmm_defer_fontawesome', 10, 2 );

/* ── Add font-display:swap + font fallback overrides ── */
function mmm_font_overrides() {
    echo '<style>' .
        '@font-face{font-family:"Font Awesome 6 Free";font-display:swap;}' .
        '@font-face{font-family:"Font Awesome 6 Brands";font-display:swap;}' .
        '@font-face{font-family:"Space Grotesk Fallback";src:local("Arial");size-adjust:107%;ascent-override:90%;descent-override:22%;line-gap-override:0%;}' .
        '@font-face{font-family:"Syne Fallback";src:local("Arial Black");size-adjust:95%;ascent-override:100%;descent-override:22%;line-gap-override:0%;}' .
        '</style>' . "\n";
}
add_action( 'wp_head', 'mmm_font_overrides', 5 );

/* ── Add defer to all scripts ─────────────── */
function mmm_defer_scripts( $tag, $handle, $src ) {
    if ( is_admin() ) return $tag;
    // Don't defer jQuery core
    if ( 'jquery-core' === $handle || 'jquery' === $handle ) return $tag;
    // Add defer if not already present
    if ( strpos( $tag, 'defer' ) === false && strpos( $tag, 'async' ) === false ) {
        $tag = str_replace( ' src=', ' defer src=', $tag );
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'mmm_defer_scripts', 10, 3 );

/* ── Remove jQuery migrate on frontend ─────── */
function mmm_remove_jquery_migrate( $scripts ) {
    if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
        $script = $scripts->registered['jquery'];
        if ( $script->deps ) {
            $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
        }
    }
}
add_action( 'wp_default_scripts', 'mmm_remove_jquery_migrate' );

/* ── Defer Google Fonts (non-render-blocking) ── */
function mmm_defer_google_fonts( $tag, $handle ) {
    if ( 'mmm-google-fonts' === $handle ) {
        $tag = str_replace(
            "rel='stylesheet'",
            "rel='preload' as='style' onload=\"this.onload=null;this.rel='stylesheet'\"",
            $tag
        );
        $noscript = '<noscript>' . str_replace(
            array( "rel='preload' as='style' onload=\"this.onload=null;this.rel='stylesheet'\"", ),
            "rel='stylesheet'",
            $tag
        ) . '</noscript>';
        return $tag . $noscript;
    }
    return $tag;
}
add_filter( 'style_loader_tag', 'mmm_defer_google_fonts', 10, 2 );

/* ── Dequeue bloat CSS/JS on frontend ──────── */
function mmm_dequeue_bloat() {
    // Hostinger Reach subscription block
    wp_dequeue_style( 'hostinger-reach-subscription-block' );
    wp_deregister_style( 'hostinger-reach-subscription-block' );
    wp_dequeue_script( 'hostinger-reach-subscription-block-view' );
    wp_deregister_script( 'hostinger-reach-subscription-block-view' );

    // WP Block Library (not using Gutenberg on frontend)
    wp_dequeue_style( 'wp-block-library' );
    wp_deregister_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_deregister_style( 'wp-block-library-theme' );

    // Global styles / Classic theme styles
    wp_dequeue_style( 'global-styles' );
    wp_deregister_style( 'global-styles' );
    wp_dequeue_style( 'classic-theme-styles' );
    wp_deregister_style( 'classic-theme-styles' );
}
add_action( 'wp_enqueue_scripts', 'mmm_dequeue_bloat', 999 );
add_action( 'wp_print_styles', 'mmm_dequeue_bloat', 999 );
add_action( 'wp_print_scripts', 'mmm_dequeue_bloat', 999 );

/* ── Disable WP emoji scripts ─────────────── */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );

/* ── AJAX Booking Form Handler ────────────── */
function mmm_handle_booking() {
    check_ajax_referer( 'mmm_booking_nonce', 'nonce' );

    $fields = array(
        'fname'    => sanitize_text_field( $_POST['fname'] ?? '' ),
        'lname'    => sanitize_text_field( $_POST['lname'] ?? '' ),
        'phone'    => sanitize_text_field( $_POST['phone'] ?? '' ),
        'email'    => sanitize_email( $_POST['email'] ?? '' ),
        'make'     => sanitize_text_field( $_POST['make'] ?? '' ),
        'model'    => sanitize_text_field( $_POST['model'] ?? '' ),
        'year'     => sanitize_text_field( $_POST['year'] ?? '' ),
        'vin'      => sanitize_text_field( $_POST['vin'] ?? '' ),
        'services' => array_map( 'sanitize_text_field', $_POST['services'] ?? array() ),
    );

    // Build email
    $to      = get_option( 'admin_email' );
    $subject = 'New Appointment Request from ' . $fields['fname'] . ' ' . $fields['lname'];
    $headers = array( 'Content-Type: text/html; charset=UTF-8' );

    $body  = '<h2>New Appointment Request</h2>';
    $body .= '<p><strong>Name:</strong> ' . esc_html( $fields['fname'] ) . ' ' . esc_html( $fields['lname'] ) . '</p>';
    $body .= '<p><strong>Phone:</strong> ' . esc_html( $fields['phone'] ) . '</p>';
    $body .= '<p><strong>Email:</strong> ' . esc_html( $fields['email'] ) . '</p>';
    $body .= '<p><strong>Vehicle:</strong> ' . esc_html( $fields['year'] ) . ' ' . esc_html( $fields['make'] ) . ' ' . esc_html( $fields['model'] ) . '</p>';
    if ( $fields['vin'] ) {
        $body .= '<p><strong>VIN:</strong> ' . esc_html( $fields['vin'] ) . '</p>';
    }
    if ( ! empty( $fields['services'] ) ) {
        $body .= '<p><strong>Services:</strong> ' . esc_html( implode( ', ', $fields['services'] ) ) . '</p>';
    }

    $sent = wp_mail( $to, $subject, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( array( 'message' => 'Thank you! We will contact you shortly.' ) );
    } else {
        wp_send_json_error( array( 'message' => 'Something went wrong. Please call us directly.' ) );
    }
}
/* ── Contact Form 7 tweaks ────────────────── */
add_filter( 'wpcf7_autop_or_not', '__return_false' );

/* ── Custom Image Sizes ───────────────────── */
function mmm_custom_image_sizes() {
    add_image_size( 'mmm-hero', 1920, 1080, true );
    add_image_size( 'mmm-about', 800, 900, true );
    add_image_size( 'mmm-gallery', 600, 500, true );
}
add_action( 'after_setup_theme', 'mmm_custom_image_sizes' );

/* ── Theme Customizer ─────────────────────── */
function mmm_customize_register( $wp_customize ) {
    // --- Contact Info Section ---
    $wp_customize->add_section( 'mmm_contact', array(
        'title'    => __( 'Contact Info', 'mmm-theme' ),
        'priority' => 30,
    ) );

    // Phone
    $wp_customize->add_setting( 'mmm_phone', array(
        'default'           => '(702) 954-9773',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'mmm_phone', array(
        'label'   => __( 'Phone Number', 'mmm-theme' ),
        'section' => 'mmm_contact',
        'type'    => 'text',
    ) );

    // Phone Link
    $wp_customize->add_setting( 'mmm_phone_link', array(
        'default'           => '+17029549773',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'mmm_phone_link', array(
        'label'   => __( 'Phone Link (no spaces)', 'mmm-theme' ),
        'section' => 'mmm_contact',
        'type'    => 'text',
    ) );

    // Email
    $wp_customize->add_setting( 'mmm_email', array(
        'default'           => 'info@mmmautomotive.com',
        'sanitize_callback' => 'sanitize_email',
    ) );
    $wp_customize->add_control( 'mmm_email', array(
        'label'   => __( 'Email Address', 'mmm-theme' ),
        'section' => 'mmm_contact',
        'type'    => 'email',
    ) );

    // Address
    $wp_customize->add_setting( 'mmm_address', array(
        'default'           => "2585 S Maryland Pkwy,\nSuite D,\nLas Vegas, NV 89109",
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'mmm_address', array(
        'label'   => __( 'Address', 'mmm-theme' ),
        'section' => 'mmm_contact',
        'type'    => 'textarea',
    ) );

    // --- Social Links Section ---
    $wp_customize->add_section( 'mmm_social', array(
        'title'    => __( 'Social Links', 'mmm-theme' ),
        'priority' => 35,
    ) );

    $socials = array( 'instagram', 'facebook', 'whatsapp' );
    foreach ( $socials as $social ) {
        $wp_customize->add_setting( 'mmm_' . $social, array(
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'mmm_' . $social, array(
            'label'   => ucfirst( $social ) . ' URL',
            'section' => 'mmm_social',
            'type'    => 'url',
        ) );
    }

    // --- Hero Section ---
    $wp_customize->add_section( 'mmm_hero', array(
        'title'    => __( 'Hero Section', 'mmm-theme' ),
        'priority' => 40,
    ) );

    $wp_customize->add_setting( 'mmm_hero_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mmm_hero_image', array(
        'label'   => __( 'Hero Background Image', 'mmm-theme' ),
        'section' => 'mmm_hero',
    ) ) );

    // About Image
    $wp_customize->add_setting( 'mmm_about_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mmm_about_image', array(
        'label'   => __( 'About Section Image', 'mmm-theme' ),
        'section' => 'mmm_hero',
    ) ) );
}
add_action( 'customize_register', 'mmm_customize_register' );

/* ── Helper: Get customizer value ─────────── */
function mmm_get( $key, $default = '' ) {
    return get_theme_mod( $key, $default );
}

/* ── Add body class for service pages ──────── */
function mmm_body_classes( $classes ) {
    if ( is_page_template( 'template-service.php' ) ) {
        $classes[] = 'service-page';
    }
    if ( is_page_template( 'template-contact.php' ) ) {
        $classes[] = 'contact-page';
    }
    if ( is_page_template( 'template-about.php' ) ) {
        $classes[] = 'about-page';
    }
    return $classes;
}
add_filter( 'body_class', 'mmm_body_classes' );

/* ── ACF Helper: get field with fallback ── */
function mmm_acf( $field, $fallback = '' ) {
    if ( function_exists( 'get_field' ) ) {
        $val = get_field( $field );
        if ( $val ) return $val;
    }
    return $fallback;
}

/* ── ACF Fields Registration ──────────────── */
add_action( 'acf/init', function() {
    require_once get_template_directory() . '/inc/acf-fields.php';
} );

/* ── Remove WordPress Emoji ───────────────── */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/* ── Disable Gutenberg on front page ──────── */
function mmm_disable_gutenberg( $can_edit, $post ) {
    if ( $post && $post->ID == get_option( 'page_on_front' ) ) {
        return false;
    }
    // Also disable for service page template
    if ( $post && get_page_template_slug( $post->ID ) === 'template-service.php' ) {
        return false;
    }
    // Disable for contact page template
    if ( $post && get_page_template_slug( $post->ID ) === 'template-contact.php' ) {
        return false;
    }
    // Disable for about page template
    if ( $post && get_page_template_slug( $post->ID ) === 'template-about.php' ) {
        return false;
    }
    return $can_edit;
}
add_filter( 'use_block_editor_for_post', 'mmm_disable_gutenberg', 10, 2 );

/* ── AJAX Contact Form Handler ────────────── */
function mmm_handle_contact() {
    check_ajax_referer( 'mmm_contact_nonce', 'nonce' );

    $name    = sanitize_text_field( $_POST['contact_name'] ?? '' );
    $email   = sanitize_email( $_POST['contact_email'] ?? '' );
    $subject = sanitize_text_field( $_POST['contact_subject'] ?? '' );
    $message = sanitize_textarea_field( $_POST['contact_message'] ?? '' );

    if ( ! $name || ! $email || ! $message ) {
        wp_send_json_error( array( 'message' => 'Please fill in all required fields.' ) );
    }

    $to       = get_option( 'admin_email' );
    $subj     = $subject ? 'Contact: ' . $subject : 'New Contact Message from ' . $name;
    $headers  = array(
        'Content-Type: text/html; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    $body  = '<h2>New Contact Message</h2>';
    $body .= '<p><strong>Name:</strong> ' . esc_html( $name ) . '</p>';
    $body .= '<p><strong>Email:</strong> ' . esc_html( $email ) . '</p>';
    if ( $subject ) {
        $body .= '<p><strong>Subject:</strong> ' . esc_html( $subject ) . '</p>';
    }
    $body .= '<p><strong>Message:</strong></p>';
    $body .= '<p>' . nl2br( esc_html( $message ) ) . '</p>';

    $sent = wp_mail( $to, $subj, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( array( 'message' => 'Thank you! Your message has been sent.' ) );
    } else {
        wp_send_json_error( array( 'message' => 'Something went wrong. Please call us directly.' ) );
    }
}
/* Contact form now handled by Contact Form 7 plugin */
