<?php
/**
 * One-time script to create all 12 service pages.
 * Upload to theme root, visit: yoursite.com/wp-content/themes/mmm-theme/create-services.php
 * DELETE THIS FILE AFTER USE.
 */

require_once( dirname(__FILE__) . '/../../../wp-load.php' );

if ( ! current_user_can( 'manage_options' ) ) {
    die( 'You must be logged in as admin.' );
}

$services = array(
    'wheel-alignment'       => 'Wheel Alignment',
    'general-auto-repair'   => 'General Auto Repair',
    'oil-change'            => 'Oil Change',
    'brake-services'        => 'Brake Services',
    'tire-service'          => 'Tire Service',
    'battery-replacement'   => 'Battery Replacement',
    'scheduled-maintenance' => 'Scheduled Maintenance',
    'diagnostic-services'   => 'Diagnostic Services',
    'suspension-steering'   => 'Suspension & Steering',
    'pre-purchase'          => 'Pre-Purchase Inspection',
    'electrical-services'   => 'Electrical Services',
    'ac-heating'            => 'AC & Heating Services',
);

echo '<h1>Creating Service Pages</h1><pre>';

foreach ( $services as $slug => $title ) {
    // Check if page already exists
    $existing = get_page_by_path( $slug );
    if ( $existing ) {
        // Make sure it uses the right template
        update_post_meta( $existing->ID, '_wp_page_template', 'template-service.php' );
        echo "✓ EXISTS: {$title} (/{$slug}/) — template updated\n";
        continue;
    }

    $page_id = wp_insert_post( array(
        'post_title'   => $title,
        'post_name'    => $slug,
        'post_status'  => 'publish',
        'post_type'    => 'page',
        'post_content' => '',
    ) );

    if ( is_wp_error( $page_id ) ) {
        echo "✗ ERROR: {$title} — " . $page_id->get_error_message() . "\n";
    } else {
        update_post_meta( $page_id, '_wp_page_template', 'template-service.php' );
        echo "✓ CREATED: {$title} (/{$slug}/) — ID: {$page_id}\n";
    }
}

echo "\n\n=== DONE! All 12 service pages created. ===\n";
echo "⚠️  DELETE THIS FILE NOW: create-services.php\n";
echo '</pre>';
