<?php
/**
 * ACF Field Registration
 * All custom fields for MMM Theme
 * @package MMM_Theme
 */

if ( ! function_exists( 'acf_add_local_field_group' ) ) {
    return;
}

/* ══════════════════════════════════════════════
   HOMEPAGE FIELDS
   ══════════════════════════════════════════════ */

acf_add_local_field_group( array(
    'key'      => 'group_homepage',
    'title'    => 'Homepage Settings',
    'location' => array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'front-page.php',
            ),
        ),
        array(
            array(
                'param'    => 'page_type',
                'operator' => '==',
                'value'    => 'front_page',
            ),
        ),
    ),
    'menu_order' => 0,
    'style'      => 'default',
    'fields'     => array(

        /* ── HERO TAB ──────────────────────────── */
        array(
            'key'   => 'field_tab_hero',
            'label' => 'Hero',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_hero_badge',
            'label'         => 'Badge Text',
            'name'          => 'hero_badge',
            'type'          => 'text',
            'default_value' => 'Premium Auto Care Las Vegas',
            'instructions'  => 'Small text above the title',
        ),
        array(
            'key'           => 'field_hero_title_line1',
            'label'         => 'Title Line 1',
            'name'          => 'hero_title_line1',
            'type'          => 'text',
            'default_value' => 'OTHERS',
        ),
        array(
            'key'           => 'field_hero_title_highlight',
            'label'         => 'Title Highlight (gradient)',
            'name'          => 'hero_title_highlight',
            'type'          => 'text',
            'default_value' => 'PROMISE.',
            'instructions'  => 'This word appears with gradient effect',
        ),
        array(
            'key'           => 'field_hero_title_line3',
            'label'         => 'Title Line 3',
            'name'          => 'hero_title_line3',
            'type'          => 'text',
            'default_value' => 'WE PERFORM.',
        ),
        array(
            'key'           => 'field_hero_subtitle',
            'label'         => 'Subtitle',
            'name'          => 'hero_subtitle',
            'type'          => 'textarea',
            'rows'          => 3,
            'default_value' => 'From routine maintenance to complex repairs — we deliver precision, quality, and trust every time.',
        ),
        array(
            'key'           => 'field_hero_image',
            'label'         => 'Background Image',
            'name'          => 'hero_image',
            'type'          => 'image',
            'return_format' => 'url',
            'preview_size'  => 'medium',
            'instructions'  => 'Recommended: 2000x1200px',
        ),
        array(
            'key'           => 'field_hero_btn_primary',
            'label'         => 'Primary Button Text',
            'name'          => 'hero_btn_primary',
            'type'          => 'text',
            'default_value' => 'Request an appointment',
        ),
        array(
            'key'           => 'field_hero_btn_secondary',
            'label'         => 'Secondary Button Text',
            'name'          => 'hero_btn_secondary',
            'type'          => 'text',
            'default_value' => 'Our Services',
        ),

        /* ── FEATURES TAB ──────────────────────── */
        array(
            'key'   => 'field_tab_features',
            'label' => 'Features Strip',
            'type'  => 'tab',
        ),
        array(
            'key'          => 'field_features',
            'label'        => 'Features',
            'name'         => 'features',
            'type'         => 'repeater',
            'min'          => 1,
            'max'          => 6,
            'layout'       => 'table',
            'button_label' => 'Add Feature',
            'sub_fields'   => array(
                array(
                    'key'           => 'field_feature_icon',
                    'label'         => 'Icon',
                    'name'          => 'icon',
                    'type'          => 'text',
                    'default_value' => 'fa-tools',
                    'instructions'  => 'FontAwesome class (e.g. fa-tools)',
                    'wrapper'       => array( 'width' => '30' ),
                ),
                array(
                    'key'           => 'field_feature_title',
                    'label'         => 'Title',
                    'name'          => 'title',
                    'type'          => 'text',
                    'default_value' => 'Professional Service',
                    'wrapper'       => array( 'width' => '70' ),
                ),
            ),
        ),

        /* ── ABOUT TAB ─────────────────────────── */
        array(
            'key'   => 'field_tab_about',
            'label' => 'About Section',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_about_label',
            'label'         => 'Section Label',
            'name'          => 'about_label',
            'type'          => 'text',
            'default_value' => 'About Us',
        ),
        array(
            'key'           => 'field_about_title',
            'label'         => 'Title',
            'name'          => 'about_title',
            'type'          => 'text',
            'default_value' => 'Precision, Quality,',
        ),
        array(
            'key'           => 'field_about_title_muted',
            'label'         => 'Title (muted line)',
            'name'          => 'about_title_muted',
            'type'          => 'text',
            'default_value' => 'And Trust',
        ),
        array(
            'key'           => 'field_about_text',
            'label'         => 'Description',
            'name'          => 'about_text',
            'type'          => 'textarea',
            'rows'          => 4,
            'default_value' => 'From routine maintenance to complex repairs — we deliver precision, quality, and trust every time. Our facility is designed to handle modern vehicles with the care they deserve.',
        ),
        array(
            'key'           => 'field_about_image',
            'label'         => 'Image',
            'name'          => 'about_image',
            'type'          => 'image',
            'return_format' => 'url',
            'preview_size'  => 'medium',
        ),
        array(
            'key'          => 'field_about_stats',
            'label'        => 'Stats',
            'name'         => 'about_stats',
            'type'         => 'repeater',
            'min'          => 1,
            'max'          => 4,
            'layout'       => 'table',
            'button_label' => 'Add Stat',
            'sub_fields'   => array(
                array(
                    'key'           => 'field_stat_number',
                    'label'         => 'Number',
                    'name'          => 'number',
                    'type'          => 'text',
                    'default_value' => '15+',
                    'wrapper'       => array( 'width' => '30' ),
                ),
                array(
                    'key'           => 'field_stat_label',
                    'label'         => 'Label',
                    'name'          => 'label',
                    'type'          => 'text',
                    'default_value' => 'Years Experience',
                    'wrapper'       => array( 'width' => '70' ),
                ),
            ),
        ),

        /* ── SERVICES TAB ──────────────────────── */
        array(
            'key'   => 'field_tab_services',
            'label' => 'Services',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_services_title',
            'label'         => 'Section Title',
            'name'          => 'services_title',
            'type'          => 'text',
            'default_value' => 'OUR SERVICES.',
        ),
        array(
            'key'          => 'field_services',
            'label'        => 'Services List',
            'name'         => 'services',
            'type'         => 'repeater',
            'min'          => 1,
            'max'          => 16,
            'layout'       => 'row',
            'button_label' => 'Add Service',
            'sub_fields'   => array(
                array(
                    'key'           => 'field_service_image',
                    'label'         => 'Image',
                    'name'          => 'image',
                    'type'          => 'image',
                    'return_format' => 'url',
                    'preview_size'  => 'medium',
                    'instructions'  => 'Recommended: 600x400px',
                ),
                array(
                    'key'           => 'field_service_title',
                    'label'         => 'Title',
                    'name'          => 'title',
                    'type'          => 'text',
                    'wrapper'       => array( 'width' => '40' ),
                ),
                array(
                    'key'   => 'field_service_desc',
                    'label' => 'Description',
                    'name'  => 'description',
                    'type'  => 'text',
                    'wrapper' => array( 'width' => '40' ),
                ),
                array(
                    'key'           => 'field_service_link',
                    'label'         => 'Link',
                    'name'          => 'link',
                    'type'          => 'text',
                    'default_value' => '#appointment',
                    'instructions'  => 'URL or #anchor',
                    'wrapper'       => array( 'width' => '20' ),
                ),
            ),
        ),

        /* ── TESTIMONIALS TAB ──────────────────── */
        array(
            'key'   => 'field_tab_testimonials',
            'label' => 'Testimonials',
            'type'  => 'tab',
        ),
        array(
            'key'          => 'field_testimonials',
            'label'        => 'Reviews',
            'name'         => 'testimonials',
            'type'         => 'repeater',
            'min'          => 1,
            'max'          => 10,
            'layout'       => 'row',
            'button_label' => 'Add Review',
            'sub_fields'   => array(
                array(
                    'key'     => 'field_testimonial_name',
                    'label'   => 'Name',
                    'name'    => 'name',
                    'type'    => 'text',
                    'wrapper' => array( 'width' => '30' ),
                ),
                array(
                    'key'     => 'field_testimonial_initial',
                    'label'   => 'Initial',
                    'name'    => 'initial',
                    'type'    => 'text',
                    'wrapper' => array( 'width' => '10' ),
                    'instructions' => 'First letter for avatar',
                ),
                array(
                    'key'     => 'field_testimonial_date',
                    'label'   => 'Date',
                    'name'    => 'date',
                    'type'    => 'text',
                    'wrapper' => array( 'width' => '20' ),
                    'instructions' => 'e.g. 2025-09-20',
                ),
                array(
                    'key'     => 'field_testimonial_text',
                    'label'   => 'Review Text',
                    'name'    => 'text',
                    'type'    => 'textarea',
                    'rows'    => 3,
                    'wrapper' => array( 'width' => '40' ),
                ),
            ),
        ),

        /* ── BOOKING FORM TAB ──────────────────── */
        array(
            'key'   => 'field_tab_booking',
            'label' => 'Booking',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_booking_title',
            'label'         => 'Booking Title',
            'name'          => 'booking_title',
            'type'          => 'text',
            'default_value' => 'NEED SERVICE TODAY?',
        ),
        array(
            'key'           => 'field_booking_status_text',
            'label'         => 'Status Text',
            'name'          => 'booking_status_text',
            'type'          => 'textarea',
            'rows'          => 2,
            'default_value' => 'Our team is currently accepting new appointments. Please fill out the form for a quick response.',
        ),
        array(
            'key'           => 'field_booking_cf7',
            'label'         => 'Contact Form 7 Shortcode',
            'name'          => 'booking_cf7_shortcode',
            'type'          => 'text',
            'instructions'  => 'Paste the CF7 shortcode, e.g. [contact-form-7 id="123" title="Booking"]',
            'placeholder'   => '[contact-form-7 id="" title="Booking Form"]',
        ),

        /* ── GALLERY TAB ──────────────────────── */
        array(
            'key'   => 'field_tab_gallery',
            'label' => 'Gallery',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_gallery_title',
            'label'         => 'Gallery Title',
            'name'          => 'gallery_title',
            'type'          => 'text',
            'default_value' => 'SERVICE IN PROGRESS.',
        ),
        array(
            'key'           => 'field_gallery_images',
            'label'         => 'Gallery Images',
            'name'          => 'gallery_images',
            'type'          => 'gallery',
            'return_format' => 'array',
            'preview_size'  => 'medium',
            'min'           => 1,
            'max'           => 8,
            'instructions'  => 'Recommended: 4 images, 1000x700px',
        ),
    ),
) );


/* ══════════════════════════════════════════════
   ABOUT PAGE FIELDS
   ══════════════════════════════════════════════ */

acf_add_local_field_group( array(
    'key'      => 'group_about',
    'title'    => 'About Page Settings',
    'location' => array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'template-about.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'fields'     => array(

        /* ── HERO TAB ──────────────────────────── */
        array(
            'key'   => 'field_about_tab_hero',
            'label' => 'Hero',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_about_hero_badge',
            'label'         => 'Badge Text',
            'name'          => 'about_hero_badge',
            'type'          => 'text',
            'default_value' => 'Est. Las Vegas',
        ),
        array(
            'key'           => 'field_about_hero_title1',
            'label'         => 'Title Line 1',
            'name'          => 'about_hero_title1',
            'type'          => 'text',
            'default_value' => 'WHO WE',
        ),
        array(
            'key'           => 'field_about_hero_highlight',
            'label'         => 'Title Highlight',
            'name'          => 'about_hero_highlight',
            'type'          => 'text',
            'default_value' => 'ARE.',
        ),
        array(
            'key'           => 'field_about_hero_image',
            'label'         => 'Background Image',
            'name'          => 'about_hero_image',
            'type'          => 'image',
            'return_format' => 'url',
            'preview_size'  => 'medium',
        ),

        /* ── INTRO TAB ─────────────────────────── */
        array(
            'key'   => 'field_about_tab_intro',
            'label' => 'Introduction',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_about_intro_title',
            'label'         => 'Title',
            'name'          => 'about_intro_title',
            'type'          => 'text',
            'default_value' => 'Professional Auto Repair in Las Vegas',
        ),
        array(
            'key'           => 'field_about_intro_text',
            'label'         => 'Text (use double line break for paragraphs)',
            'name'          => 'about_intro_text',
            'type'          => 'textarea',
            'rows'          => 6,
            'default_value' => "MMM Automotive is a professional auto repair shop in Las Vegas offering a full range of essential vehicle repair and maintenance services. We work with various makes and models, providing precise diagnostics, repairs, and regular maintenance.\n\nAs a local independent service in Las Vegas, we build our reputation through actions, not words.",
        ),
        array(
            'key'           => 'field_about_intro_image',
            'label'         => 'Image',
            'name'          => 'about_intro_image',
            'type'          => 'image',
            'return_format' => 'url',
            'preview_size'  => 'medium',
        ),

        /* ── VALUES TAB ────────────────────────── */
        array(
            'key'   => 'field_about_tab_values',
            'label' => 'Core Principles',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_about_values_title',
            'label'         => 'Section Title',
            'name'          => 'about_values_title',
            'type'          => 'text',
            'default_value' => 'Our Core Principles',
        ),
        array(
            'key'          => 'field_about_values',
            'label'        => 'Values',
            'name'         => 'about_values',
            'type'         => 'repeater',
            'min'          => 1,
            'max'          => 6,
            'layout'       => 'row',
            'button_label' => 'Add Value',
            'sub_fields'   => array(
                array(
                    'key'           => 'field_about_value_icon',
                    'label'         => 'Icon',
                    'name'          => 'icon',
                    'type'          => 'text',
                    'default_value' => 'fa-handshake',
                    'wrapper'       => array( 'width' => '20' ),
                ),
                array(
                    'key'     => 'field_about_value_title',
                    'label'   => 'Title',
                    'name'    => 'title',
                    'type'    => 'text',
                    'wrapper' => array( 'width' => '30' ),
                ),
                array(
                    'key'     => 'field_about_value_desc',
                    'label'   => 'Description',
                    'name'    => 'description',
                    'type'    => 'textarea',
                    'rows'    => 2,
                    'wrapper' => array( 'width' => '50' ),
                ),
            ),
        ),

        /* ── MISSION TAB ───────────────────────── */
        array(
            'key'   => 'field_about_tab_mission',
            'label' => 'Mission / CTA',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_about_mission_quote',
            'label'         => 'Quote',
            'name'          => 'about_mission_quote',
            'type'          => 'textarea',
            'rows'          => 3,
            'default_value' => '"Our values shape how we work, serve, and grow - always striving to exceed expectations."',
        ),
        array(
            'key'           => 'field_about_mission_subtitle',
            'label'         => 'Subtitle',
            'name'          => 'about_mission_subtitle',
            'type'          => 'text',
            'default_value' => 'We always welcome you to MMM Automotive!',
        ),
    ),
) );


/* ══════════════════════════════════════════════
   CONTACT PAGE FIELDS
   ══════════════════════════════════════════════ */

acf_add_local_field_group( array(
    'key'      => 'group_contact',
    'title'    => 'Contact Page Settings',
    'location' => array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'template-contact.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'fields'     => array(

        array(
            'key'   => 'field_contact_tab_hero',
            'label' => 'Hero',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_contact_hero_badge',
            'label'         => 'Badge Text',
            'name'          => 'contact_hero_badge',
            'type'          => 'text',
            'default_value' => 'Las Vegas, NV',
        ),
        array(
            'key'           => 'field_contact_hero_title1',
            'label'         => 'Title Line 1',
            'name'          => 'contact_hero_title1',
            'type'          => 'text',
            'default_value' => 'GET IN',
        ),
        array(
            'key'           => 'field_contact_hero_highlight',
            'label'         => 'Title Highlight',
            'name'          => 'contact_hero_highlight',
            'type'          => 'text',
            'default_value' => 'TOUCH.',
        ),
        array(
            'key'           => 'field_contact_hero_subtitle',
            'label'         => 'Subtitle',
            'name'          => 'contact_hero_subtitle',
            'type'          => 'textarea',
            'rows'          => 2,
            'default_value' => 'Have a question about your vehicle or need a quote? Visit our shop or send us a message. We are here to help.',
        ),

        array(
            'key'   => 'field_contact_tab_form',
            'label' => 'Contact Form',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_contact_cf7',
            'label'         => 'Contact Form 7 Shortcode',
            'name'          => 'contact_cf7_shortcode',
            'type'          => 'text',
            'instructions'  => 'Paste the CF7 shortcode, e.g. [contact-form-7 id="456" title="Contact"]',
            'placeholder'   => '[contact-form-7 id="" title="Contact Form"]',
        ),

        array(
            'key'   => 'field_contact_tab_map',
            'label' => 'Map',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_contact_map_embed',
            'label'         => 'Google Maps Embed URL',
            'name'          => 'contact_map_embed',
            'type'          => 'url',
            'instructions'  => 'Go to Google Maps → Share → Embed → copy the src URL',
        ),
        array(
            'key'           => 'field_contact_map_link',
            'label'         => 'Google Maps Link',
            'name'          => 'contact_map_link',
            'type'          => 'url',
            'instructions'  => 'Direct link to Google Maps for "Get Directions"',
        ),
    ),
) );


/* ══════════════════════════════════════════════
   SERVICE PAGE FIELDS
   ══════════════════════════════════════════════ */

acf_add_local_field_group( array(
    'key'      => 'group_service',
    'title'    => 'Service Page Settings',
    'location' => array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'template-service.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'fields'     => array(

        array(
            'key'   => 'field_svc_tab_hero',
            'label' => 'Hero',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_svc_badge',
            'label'         => 'Badge Text',
            'name'          => 'svc_badge',
            'type'          => 'text',
            'instructions'  => 'Leave empty to use default from template',
        ),
        array(
            'key'           => 'field_svc_title',
            'label'         => 'Title Override',
            'name'          => 'svc_title',
            'type'          => 'text',
            'instructions'  => 'Leave empty to use auto-detected title',
        ),
        array(
            'key'           => 'field_svc_subtitle',
            'label'         => 'Subtitle Override',
            'name'          => 'svc_subtitle',
            'type'          => 'textarea',
            'rows'          => 2,
        ),
        array(
            'key'           => 'field_svc_hero_image',
            'label'         => 'Hero Background Image',
            'name'          => 'svc_hero_image',
            'type'          => 'image',
            'return_format' => 'url',
            'preview_size'  => 'medium',
        ),

        array(
            'key'   => 'field_svc_tab_gallery',
            'label' => 'Gallery',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_svc_gallery',
            'label'         => 'Work Gallery Images',
            'name'          => 'svc_gallery',
            'type'          => 'gallery',
            'return_format' => 'array',
            'preview_size'  => 'medium',
            'min'           => 0,
            'max'           => 8,
        ),
    ),
) );
