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
            'key'          => 'field_testimonials_shortcode',
            'label'        => 'Reviews Widget Shortcode',
            'name'         => 'testimonials_shortcode',
            'type'         => 'text',
            'instructions' => 'Paste Trustindex shortcode, e.g. [starter-starter src="..."]',
            'placeholder'  => '[starter-starter src="..."]',
        ),

        /* ── BRANDS / LOGOS TAB ─────────────────── */
        array(
            'key'   => 'field_tab_brands',
            'label' => 'Brands Slider',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_brands_title',
            'label'         => 'Section Title',
            'name'          => 'brands_title',
            'type'          => 'text',
            'default_value' => 'BRANDS WE SERVICE.',
        ),
        array(
            'key'           => 'field_brands_logos',
            'label'         => 'Brand Logos',
            'name'          => 'brands_logos',
            'type'          => 'gallery',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
            'min'           => 0,
            'max'           => 20,
            'instructions'  => 'Upload brand/partner logos. Recommended: transparent PNG or SVG, ~200px height. Minimum 4 logos for smooth animation.',
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

        /* ── HERO TAB ──────────────────────────── */
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
            'instructions'  => 'e.g. "Precision Service", "Safety First"',
        ),
        array(
            'key'           => 'field_svc_title',
            'label'         => 'Title (Line 1)',
            'name'          => 'svc_title',
            'type'          => 'text',
            'instructions'  => 'e.g. "WHEEL ALIGNMENT"',
        ),
        array(
            'key'           => 'field_svc_subtitle',
            'label'         => 'Title (Line 2, gradient)',
            'name'          => 'svc_subtitle',
            'type'          => 'text',
            'default_value' => 'SERVICE IN LAS VEGAS.',
            'instructions'  => 'Appears below title with gradient effect',
        ),
        array(
            'key'           => 'field_svc_hero_description',
            'label'         => 'Hero Description',
            'name'          => 'svc_hero_description',
            'type'          => 'wysiwyg',
            'tabs'          => 'all',
            'toolbar'       => 'full',
            'media_upload'  => 1,
            'instructions'  => 'Additional description displayed in the hero section above the appointment button.',
        ),
        array(
            'key'           => 'field_svc_hero_image',
            'label'         => 'Hero Background Image',
            'name'          => 'svc_hero_image',
            'type'          => 'image',
            'return_format' => 'url',
            'preview_size'  => 'medium',
            'instructions'  => 'Recommended: 1920x1080px',
        ),

        /* ── INTRO TAB ────────────────────────── */
        array(
            'key'   => 'field_svc_tab_intro',
            'label' => 'Intro Section',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_svc_intro_title',
            'label'         => 'Intro Title',
            'name'          => 'svc_intro_title',
            'type'          => 'text',
            'instructions'  => 'e.g. "DRIVE STRAIGHT, SAVE TIRES, STAY SAFE"',
        ),
        array(
            'key'           => 'field_svc_intro_text',
            'label'         => 'Intro Text',
            'name'          => 'svc_intro_text',
            'type'          => 'textarea',
            'rows'          => 4,
            'instructions'  => 'Paragraph describing the service.',
        ),

        /* ── INDICATORS TAB ────────────────────── */
        array(
            'key'   => 'field_svc_tab_indicators',
            'label' => 'Indicators (When To Get)',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_svc_indicators_title',
            'label'         => 'Section Title',
            'name'          => 'svc_indicators_title',
            'type'          => 'text',
            'instructions'  => 'e.g. "WHEN TO GET A WHEEL ALIGNMENT"',
        ),
        array(
            'key'           => 'field_svc_indicators_subtitle',
            'label'         => 'Section Subtitle',
            'name'          => 'svc_indicators_subtitle',
            'type'          => 'text',
            'instructions'  => 'e.g. "You should schedule a wheel alignment if you notice:"',
        ),
        array(
            'key'          => 'field_svc_indicators',
            'label'        => 'Indicator Cards',
            'name'         => 'svc_indicators',
            'type'         => 'repeater',
            'min'          => 1,
            'max'          => 9,
            'layout'       => 'table',
            'button_label' => 'Add Indicator',
            'sub_fields'   => array(
                array(
                    'key'           => 'field_svc_indicator_icon',
                    'label'         => 'Icon',
                    'name'          => 'icon',
                    'type'          => 'text',
                    'default_value' => 'fa-arrows-alt-h',
                    'instructions'  => 'FontAwesome class (e.g. fa-arrows-alt-h)',
                    'wrapper'       => array( 'width' => '25' ),
                ),
                array(
                    'key'     => 'field_svc_indicator_text',
                    'label'   => 'Text (use <strong> for bold)',
                    'name'    => 'text',
                    'type'    => 'text',
                    'instructions'  => 'e.g. "Your car <strong>pulls to one side</strong> while driving straight."',
                    'wrapper' => array( 'width' => '75' ),
                ),
            ),
        ),

        /* ── WHAT'S INCLUDED TAB ───────────────── */
        array(
            'key'   => 'field_svc_tab_included',
            'label' => "What's Included",
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_svc_included_title',
            'label'         => 'Section Title',
            'name'          => 'svc_included_title',
            'type'          => 'text',
            'default_value' => "What's Included",
        ),
        array(
            'key'          => 'field_svc_included_items',
            'label'        => 'Included Items',
            'name'         => 'svc_included_items',
            'type'         => 'repeater',
            'min'          => 1,
            'max'          => 8,
            'layout'       => 'row',
            'button_label' => 'Add Item',
            'sub_fields'   => array(
                array(
                    'key'     => 'field_svc_included_text',
                    'label'   => 'Text',
                    'name'    => 'text',
                    'type'    => 'text',
                    'wrapper' => array( 'width' => '50' ),
                ),
                array(
                    'key'           => 'field_svc_included_img',
                    'label'         => 'Image',
                    'name'          => 'image',
                    'type'          => 'image',
                    'return_format' => 'url',
                    'preview_size'  => 'medium',
                    'instructions'  => 'Shows when user hovers this item',
                    'wrapper'       => array( 'width' => '50' ),
                ),
            ),
        ),
        array(
            'key'           => 'field_svc_included_default_img',
            'label'         => 'Default Image',
            'name'          => 'svc_included_default_img',
            'type'          => 'image',
            'return_format' => 'url',
            'preview_size'  => 'medium',
            'instructions'  => 'Shown before user hovers any item',
        ),

        /* ── WHY CHOOSE TAB ──────────────────── */
        array(
            'key'   => 'field_svc_tab_why',
            'label' => 'Why Choose Us',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_svc_why_title',
            'label'         => 'Section Title',
            'name'          => 'svc_why_title',
            'type'          => 'text',
            'default_value' => 'WHY CHOOSE MMM AUTOMOTIVE',
        ),
        array(
            'key'          => 'field_svc_why_items',
            'label'        => 'Advantages',
            'name'         => 'svc_why_items',
            'type'         => 'repeater',
            'min'          => 1,
            'max'          => 8,
            'layout'       => 'row',
            'button_label' => 'Add Advantage',
            'sub_fields'   => array(
                array(
                    'key'     => 'field_svc_why_item_title',
                    'label'   => 'Title',
                    'name'    => 'title',
                    'type'    => 'text',
                    'wrapper' => array( 'width' => '40' ),
                ),
                array(
                    'key'     => 'field_svc_why_item_desc',
                    'label'   => 'Description',
                    'name'    => 'description',
                    'type'    => 'textarea',
                    'rows'    => 2,
                    'wrapper' => array( 'width' => '60' ),
                ),
            ),
        ),

        /* ── CONTENT TAB ───────────────────────── */
        array(
            'key'   => 'field_svc_tab_content',
            'label' => 'Extra Content',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_svc_content',
            'label'         => 'Additional Content (WYSIWYG)',
            'name'          => 'svc_content',
            'type'          => 'wysiwyg',
            'tabs'          => 'all',
            'toolbar'       => 'full',
            'media_upload'  => 1,
            'instructions'  => 'Optional rich content block. Displays between gallery and CTA if filled.',
        ),

        /* ── GALLERY TAB ───────────────────────── */
        array(
            'key'   => 'field_svc_tab_gallery',
            'label' => 'Work Gallery',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_svc_gallery',
            'label'         => 'Gallery Images',
            'name'          => 'svc_gallery',
            'type'          => 'gallery',
            'return_format' => 'array',
            'preview_size'  => 'medium',
            'min'           => 0,
            'max'           => 8,
            'instructions'  => 'Work gallery photos. Image alt text is used as caption.',
        ),

        /* ── CTA TAB ───────────────────────────── */
        array(
            'key'   => 'field_svc_tab_cta',
            'label' => 'CTA Section',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_svc_cta_title',
            'label'         => 'CTA Title',
            'name'          => 'svc_cta_title',
            'type'          => 'text',
            'instructions'  => 'Big uppercase call-to-action text',
        ),
        array(
            'key'           => 'field_svc_cta_subtitle',
            'label'         => 'CTA Subtitle',
            'name'          => 'svc_cta_subtitle',
            'type'          => 'text',
            'instructions'  => 'Smaller text below CTA title',
        ),
        array(
            'key'           => 'field_svc_cta_image',
            'label'         => 'CTA Background Image',
            'name'          => 'svc_cta_image',
            'type'          => 'image',
            'return_format' => 'url',
            'preview_size'  => 'medium',
        ),

        /* ── FAQ TAB ───────────────────────────── */
        array(
            'key'   => 'field_svc_tab_faq',
            'label' => 'FAQ',
            'type'  => 'tab',
        ),
        array(
            'key'          => 'field_svc_faq',
            'label'        => 'FAQ Items',
            'name'         => 'svc_faq',
            'type'         => 'repeater',
            'min'          => 0,
            'max'          => 15,
            'layout'       => 'row',
            'button_label' => 'Add FAQ',
            'sub_fields'   => array(
                array(
                    'key'     => 'field_svc_faq_q',
                    'label'   => 'Question',
                    'name'    => 'q',
                    'type'    => 'text',
                ),
                array(
                    'key'     => 'field_svc_faq_a',
                    'label'   => 'Answer',
                    'name'    => 'a',
                    'type'    => 'textarea',
                    'rows'    => 3,
                ),
            ),
        ),

        /* ── BOOKING TAB ───────────────────────── */
        array(
            'key'   => 'field_svc_tab_booking',
            'label' => 'Booking',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_svc_precheck',
            'label'         => 'Pre-checked Service',
            'name'          => 'svc_precheck',
            'type'          => 'select',
            'choices'       => array(
                ''                       => '— None —',
                'General Auto Repair'    => 'General Auto Repair',
                'Oil Change & Maintenance' => 'Oil Change & Maintenance',
                'Wheel Alignment'        => 'Wheel Alignment',
                'Brakes Service'         => 'Brakes Service',
                'AC & Heating'           => 'AC & Heating',
                'Diagnostics'            => 'Diagnostics',
                'Battery Service'        => 'Battery Service',
                'Tires / Wheels'         => 'Tires / Wheels',
                'Suspension'             => 'Suspension',
                'Scheduled Maintenance'  => 'Scheduled Maintenance',
                'Pre-purchase Inspection' => 'Pre-purchase Inspection',
                'Electrical Repair'      => 'Electrical Repair',
                'Other'                  => 'Other',
            ),
            'default_value' => '',
            'instructions'  => 'Which checkbox to auto-check in the booking form',
        ),
    ),
) );
