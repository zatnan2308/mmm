<?php
/**
 * Template Name: Service Page
 * Description: Template for individual service pages (Wheel Alignment, Oil Change, etc.)
 * @package MMM_Theme
 */

get_header();

// ─── Service Data Registry ───────────────────────────────
$services = array(

    /* ── Wheel Alignment ─────────────────────────────── */
    'wheel-alignment' => array(
        'badge'     => 'Precision Service',
        'title'     => 'WHEEL ALIGNMENT',
        'subtitle'  => 'SERVICE IN LAS VEGAS.',
        'hero_img'  => 'https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?auto=format&fit=crop&w=1950&q=80',
        'symptoms_title' => 'Drive Straight, Save Tires.',
        'symptoms_text'  => 'Misaligned wheels compromise safety and fuel efficiency. Here are the clear signs your vehicle needs attention.',
        'symptoms' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-car', 'title' => 'Pulling to Side', 'desc' => 'Does your car drift left or right when you let go of the wheel? This is the most common sign of misalignment.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1578844251758-2f71da645217?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-exclamation-triangle', 'title' => 'Uneven Tire Wear', 'desc' => 'Check your tires. If the inside or outside edge is wearing faster than the rest, your camber needs adjustment.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1517524008697-84bbe3c3fd98?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-road', 'title' => 'Wheel Vibration', 'desc' => 'Shaking in the steering wheel or unusual noises after hitting a pothole indicate suspension trauma.' ),
        ),
        'included_title' => "What's Included",
        'included' => array(
            array( 'text' => 'Computerized Alignment Check', 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Camber, Caster & Toe Adjust',  'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Suspension Inspection',         'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Tire Pressure & Wear Check',    'img' => 'https://images.unsplash.com/photo-1578844251758-2f71da645217?auto=format&fit=crop&w=1000&q=80' ),
        ),
        'included_default_img' => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1000&q=80',
        'gallery' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Precision Alignment' ),
            array( 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Suspension Check' ),
            array( 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Expert Technicians' ),
            array( 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Quality Parts' ),
        ),
        'cta_title'  => 'PROTECT YOUR TIRES AND DRIVE SAFELY WITH A PROFESSIONAL ALIGNMENT.',
        'cta_sub'    => 'Schedule Your Wheel Alignment Today',
        'cta_bg'     => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1950&q=80',
        'faq' => array(
            array( 'q' => 'How often should I get a wheel alignment?', 'a' => 'It is generally recommended to get a wheel alignment every year or every 10,000 to 12,000 miles. However, you should check your vehicle\'s owner manual for specific recommendations.' ),
            array( 'q' => 'How long does a wheel alignment take?', 'a' => 'On average, a standard wheel alignment takes about one hour. If there are damaged suspension parts that need to be replaced, it may take longer.' ),
            array( 'q' => 'Will a wheel alignment fix my car\'s vibration?', 'a' => 'It depends on the cause. While alignment issues can cause vibration, it is more commonly caused by unbalanced tires or bent wheels. Our technicians can diagnose the specific cause during the inspection.' ),
            array( 'q' => 'Do I need an alignment after buying new tires?', 'a' => 'Yes, it is highly recommended. An alignment ensures your new tires wear evenly from day one, protecting your investment and ensuring the manufacturer\'s warranty remains valid.' ),
            array( 'q' => 'What happens if I ignore wheel alignment issues?', 'a' => 'Ignoring alignment issues leads to rapid, uneven tire wear (costing you money on replacements), poor fuel economy, and harder handling, which can be dangerous in emergency maneuvers.' ),
        ),
        'precheck' => 'Wheel Alignment',
    ),

    /* ── General Auto Repair ─────────────────────────── */
    'general-auto-repair' => array(
        'badge'     => 'Full-Service Shop',
        'title'     => 'GENERAL AUTO REPAIR',
        'subtitle'  => 'SERVICE IN LAS VEGAS.',
        'hero_img'  => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1950&q=80',
        'symptoms_title' => 'Something Doesn\'t Feel Right?',
        'symptoms_text'  => 'Modern vehicles give you warning signs before a major failure. Pay attention to these common symptoms.',
        'symptoms' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-exclamation-triangle', 'title' => 'Check Engine Light', 'desc' => 'The check engine light is your car\'s way of telling you something is wrong. Don\'t ignore it.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-volume-up', 'title' => 'Strange Noises', 'desc' => 'Grinding, squealing, or knocking sounds often indicate worn components that need immediate attention.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-tint', 'title' => 'Fluid Leaks', 'desc' => 'Puddles under your car could be oil, coolant, transmission fluid, or brake fluid — all critical.' ),
        ),
        'included_title' => "What's Included",
        'included' => array(
            array( 'text' => 'Full Vehicle Diagnostic Scan', 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Engine & Transmission Check', 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Brake System Inspection', 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Fluid Level & Condition Check', 'img' => 'https://images.unsplash.com/photo-1578844251758-2f71da645217?auto=format&fit=crop&w=1000&q=80' ),
        ),
        'included_default_img' => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1000&q=80',
        'gallery' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Engine Bay Work' ),
            array( 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Under the Hood' ),
            array( 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Professional Tools' ),
            array( 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Quality Service' ),
        ),
        'cta_title'  => 'DON\'T WAIT FOR A BREAKDOWN. GET YOUR CAR CHECKED TODAY.',
        'cta_sub'    => 'Schedule Your General Auto Repair Today',
        'cta_bg'     => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1950&q=80',
        'faq' => array(
            array( 'q' => 'What types of cars do you service?', 'a' => 'We service all makes and models, both domestic and foreign. Our technicians have experience with a wide range of vehicles.' ),
            array( 'q' => 'How long does a typical repair take?', 'a' => 'It depends on the complexity. Simple repairs like brake pads can be done same-day, while more involved work may take 1-3 days.' ),
            array( 'q' => 'Do you provide a warranty on repairs?', 'a' => 'Yes, we stand behind our work with a warranty on parts and labor. Ask us for specific details based on your repair.' ),
            array( 'q' => 'Can I wait while my car is being repaired?', 'a' => 'Yes, we have a comfortable waiting area. For longer repairs, we can help arrange transportation.' ),
        ),
        'precheck' => '',
    ),

    /* ── Oil Change ──────────────────────────────────── */
    'oil-change' => array(
        'badge'     => 'Quick Service',
        'title'     => 'OIL CHANGE',
        'subtitle'  => 'SERVICE IN LAS VEGAS.',
        'hero_img'  => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1950&q=80',
        'symptoms_title' => 'Keep Your Engine Running Smooth.',
        'symptoms_text'  => 'Regular oil changes are the single most important thing you can do for your engine\'s longevity.',
        'symptoms' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-oil-can', 'title' => 'Dark or Dirty Oil', 'desc' => 'Fresh oil is amber and translucent. If yours is dark and gritty, it\'s time for a change.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-tachometer-alt', 'title' => 'Engine Noise', 'desc' => 'Oil lubricates engine parts. When it\'s old, you may hear increased engine noise or knocking.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-exclamation-circle', 'title' => 'Oil Change Light', 'desc' => 'Your dashboard warning is a clear indicator. Don\'t delay — old oil causes irreversible damage.' ),
        ),
        'included_title' => "What's Included",
        'included' => array(
            array( 'text' => 'Premium Synthetic Oil', 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'OEM Quality Oil Filter', 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Multi-Point Inspection', 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Fluid Top-Off & Tire Check', 'img' => 'https://images.unsplash.com/photo-1578844251758-2f71da645217?auto=format&fit=crop&w=1000&q=80' ),
        ),
        'included_default_img' => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1000&q=80',
        'gallery' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Oil Drain' ),
            array( 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Filter Replacement' ),
            array( 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Quality Check' ),
            array( 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Complete Service' ),
        ),
        'cta_title'  => 'PROTECT YOUR ENGINE WITH REGULAR OIL CHANGES.',
        'cta_sub'    => 'Schedule Your Oil Change Today',
        'cta_bg'     => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1950&q=80',
        'faq' => array(
            array( 'q' => 'How often should I change my oil?', 'a' => 'For synthetic oil, every 5,000-7,500 miles is typical. Conventional oil should be changed every 3,000-5,000 miles. Check your owner\'s manual.' ),
            array( 'q' => 'Do you use synthetic oil?', 'a' => 'Yes, we use premium full synthetic oil that meets or exceeds your manufacturer\'s specifications.' ),
            array( 'q' => 'How long does an oil change take?', 'a' => 'A standard oil change takes about 30-45 minutes including our multi-point inspection.' ),
        ),
        'precheck' => 'Oil Change & Maintenance',
    ),

    /* ── Brake Services ──────────────────────────────── */
    'brake-services' => array(
        'badge'     => 'Safety First',
        'title'     => 'BRAKE SERVICES',
        'subtitle'  => 'IN LAS VEGAS.',
        'hero_img'  => 'https://images.unsplash.com/photo-1558618666-fcd25c85f82e?auto=format&fit=crop&w=1950&q=80',
        'symptoms_title' => 'Stop with Confidence.',
        'symptoms_text'  => 'Your brakes are the most critical safety system in your vehicle. Don\'t compromise.',
        'symptoms' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-volume-up', 'title' => 'Squealing Noise', 'desc' => 'High-pitched squealing when braking indicates worn brake pads that need immediate replacement.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-arrows-alt', 'title' => 'Vibrating Pedal', 'desc' => 'A pulsating brake pedal usually means warped rotors that need to be resurfaced or replaced.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-long-arrow-alt-down', 'title' => 'Soft Brake Pedal', 'desc' => 'If your pedal goes to the floor, you may have air in the lines or a brake fluid leak — both dangerous.' ),
        ),
        'included_title' => "What's Included",
        'included' => array(
            array( 'text' => 'Brake Pad Inspection & Replacement', 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Rotor Measurement & Resurfacing', 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Brake Fluid Check & Flush', 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Caliper & Line Inspection', 'img' => 'https://images.unsplash.com/photo-1578844251758-2f71da645217?auto=format&fit=crop&w=1000&q=80' ),
        ),
        'included_default_img' => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1000&q=80',
        'gallery' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Brake Inspection' ),
            array( 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Rotor Work' ),
            array( 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Quality Parts' ),
            array( 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Complete Service' ),
        ),
        'cta_title'  => 'YOUR SAFETY IS NON-NEGOTIABLE. GET YOUR BRAKES CHECKED TODAY.',
        'cta_sub'    => 'Schedule Your Brake Service Today',
        'cta_bg'     => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1950&q=80',
        'faq' => array(
            array( 'q' => 'How do I know if I need new brakes?', 'a' => 'Common signs include squealing, grinding, vibration when braking, a soft pedal, or your car pulling to one side when stopping.' ),
            array( 'q' => 'How long do brake pads last?', 'a' => 'Typically 30,000-70,000 miles depending on driving habits, traffic conditions, and pad material quality.' ),
            array( 'q' => 'Do you replace rotors too?', 'a' => 'Yes. We measure rotor thickness and check for warping. If they\'re below spec, we recommend replacement for optimal safety.' ),
            array( 'q' => 'Can I drive with worn brake pads?', 'a' => 'It is extremely dangerous. Worn pads lead to metal-on-metal contact, which damages rotors and dramatically increases stopping distance.' ),
        ),
        'precheck' => 'Brakes Service',
    ),

    /* ── Tire Service ────────────────────────────────── */
    'tire-service' => array(
        'badge'     => 'Expert Care',
        'title'     => 'TIRE SERVICE',
        'subtitle'  => 'IN LAS VEGAS.',
        'hero_img'  => 'https://images.unsplash.com/photo-1578844251758-2f71da645217?auto=format&fit=crop&w=1950&q=80',
        'symptoms_title' => 'Keep Your Grip On The Road.',
        'symptoms_text'  => 'Your tires are the only thing between you and the road. Don\'t ignore the warning signs.',
        'symptoms' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-circle', 'title' => 'Low Tread Depth', 'desc' => 'Use the penny test — if you can see Lincoln\'s head, your tread is too low for safe driving.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1578844251758-2f71da645217?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-exclamation-triangle', 'title' => 'Sidewall Damage', 'desc' => 'Bulges, cuts, or cracks in the sidewall indicate structural weakness and blowout risk.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1517524008697-84bbe3c3fd98?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-car', 'title' => 'Vibration At Speed', 'desc' => 'Steering wheel vibration at highway speeds often means unbalanced or damaged tires.' ),
        ),
        'included_title' => "What's Included",
        'included' => array(
            array( 'text' => 'Tire Replacement & Installation', 'img' => 'https://images.unsplash.com/photo-1578844251758-2f71da645217?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Tire Rotation & Balancing', 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'TPMS Sensor Check', 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Flat Tire Repair', 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1000&q=80' ),
        ),
        'included_default_img' => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1000&q=80',
        'gallery' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1578844251758-2f71da645217?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Tire Installation' ),
            array( 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Wheel Balancing' ),
            array( 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Tread Check' ),
            array( 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Quality Service' ),
        ),
        'cta_title'  => 'DON\'T RISK A BLOWOUT. GET YOUR TIRES CHECKED TODAY.',
        'cta_sub'    => 'Schedule Your Tire Service Today',
        'cta_bg'     => 'https://images.unsplash.com/photo-1578844251758-2f71da645217?auto=format&fit=crop&w=1950&q=80',
        'faq' => array(
            array( 'q' => 'How often should I rotate my tires?', 'a' => 'Every 5,000-7,500 miles or at every oil change to ensure even wear.' ),
            array( 'q' => 'How do I know when I need new tires?', 'a' => 'When tread depth reaches 2/32", when you see cracks, bulges, or when tires are over 6 years old.' ),
            array( 'q' => 'Do you carry all tire brands?', 'a' => 'We can source any major brand. Tell us your preference and we\'ll order the right tires for your vehicle.' ),
        ),
        'precheck' => 'Tires / Wheels',
    ),

    /* ── Battery Replacement ────────────────────────── */
    'battery-replacement' => array(
        'badge'     => 'Electrical Service',
        'title'     => 'BATTERY REPLACEMENT',
        'subtitle'  => 'SERVICE IN LAS VEGAS.',
        'hero_img'  => 'https://images.unsplash.com/photo-1620905969532-cb7e4e5da29e?auto=format&fit=crop&w=1950&q=80',
        'symptoms_title' => 'Don\'t Get Stranded.',
        'symptoms_text'  => 'Your car\'s battery is the heart of its electrical system. Recognize the warning signs before it fails.',
        'symptoms' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-car-battery', 'title' => 'Slow Cranking', 'desc' => 'Difficulty starting the engine or slow cranking is the most common sign your battery is losing its charge.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-lightbulb', 'title' => 'Dim Lights', 'desc' => 'Dim headlights or flickering interior lights indicate your battery can no longer supply consistent power.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-bolt', 'title' => 'Corrosion on Terminals', 'desc' => 'White or green buildup on battery terminals disrupts electrical connections and accelerates battery failure.' ),
        ),
        'included_title' => "What's Included",
        'included' => array(
            array( 'text' => 'Complete Battery & Charging System Test', 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Premium Battery Replacement', 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Terminal Cleaning & Inspection', 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Electrical System Verification', 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=1000&q=80' ),
        ),
        'included_default_img' => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1000&q=80',
        'gallery' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Battery Testing' ),
            array( 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Terminal Cleaning' ),
            array( 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'New Battery Install' ),
            array( 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1200&q=80', 'caption' => 'System Check' ),
        ),
        'cta_title'  => 'DON\'T LET A DEAD BATTERY LEAVE YOU STRANDED.',
        'cta_sub'    => 'Schedule Your Battery Replacement Today',
        'cta_bg'     => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1950&q=80',
        'faq' => array(
            array( 'q' => 'How long does a car battery last?', 'a' => 'Typically 3-5 years depending on climate, driving habits, and vehicle type. Las Vegas heat can shorten battery life.' ),
            array( 'q' => 'How do I know my battery needs replacing?', 'a' => 'Slow cranking, dim lights, frequent jump-starts, and a battery older than 3 years are all signs it\'s time.' ),
            array( 'q' => 'Do you test the battery before replacing it?', 'a' => 'Yes, we always test the battery and charging system first. We only replace when truly necessary.' ),
            array( 'q' => 'How long does battery replacement take?', 'a' => 'Most battery replacements take about 30 minutes including testing and terminal cleaning.' ),
        ),
        'precheck' => 'Battery Service',
    ),

    /* ── Scheduled Maintenance ────────────────────────── */
    'scheduled-maintenance' => array(
        'badge'     => 'Preventive Care',
        'title'     => 'SCHEDULED MAINTENANCE',
        'subtitle'  => 'SERVICE IN LAS VEGAS.',
        'hero_img'  => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1950&q=80',
        'symptoms_title' => 'Stay Ahead of Repairs.',
        'symptoms_text'  => 'Regular maintenance is the key to keeping your car reliable, safe, and performing at its best.',
        'symptoms' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-calendar-check', 'title' => 'Mileage Interval Due', 'desc' => 'Your owner\'s manual lists specific service intervals. Staying on schedule prevents costly failures.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-road', 'title' => 'Road Trip Prep', 'desc' => 'Planning a long drive? A maintenance check ensures your vehicle is road-ready and safe.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-shield-alt', 'title' => 'Warranty Protection', 'desc' => 'Regular maintenance preserves your manufacturer\'s warranty and protects your investment.' ),
        ),
        'included_title' => "What's Included",
        'included' => array(
            array( 'text' => 'Oil & Filter Change', 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Brake & Tire Inspection', 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'All Fluid Checks & Top-Offs', 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Multi-Point Inspection Report', 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=1000&q=80' ),
        ),
        'included_default_img' => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1000&q=80',
        'gallery' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Oil Service' ),
            array( 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Fluid Check' ),
            array( 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Filter Replace' ),
            array( 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Inspection' ),
        ),
        'cta_title'  => 'PROTECT YOUR INVESTMENT AND KEEP YOUR CAR RUNNING LIKE NEW.',
        'cta_sub'    => 'Schedule Your Maintenance Service Today',
        'cta_bg'     => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1950&q=80',
        'faq' => array(
            array( 'q' => 'How often should I service my car?', 'a' => 'Follow your owner\'s manual intervals, typically every 5,000-7,500 miles or every 6 months.' ),
            array( 'q' => 'What happens if I skip maintenance?', 'a' => 'Skipped maintenance leads to accelerated wear, potential breakdowns, and may void your warranty.' ),
            array( 'q' => 'Do you follow factory recommendations?', 'a' => 'Yes, our ASE-certified technicians follow manufacturer specifications for your specific vehicle.' ),
            array( 'q' => 'How long does a maintenance visit take?', 'a' => 'A standard maintenance service takes 1-2 hours depending on the services included.' ),
        ),
        'precheck' => 'Scheduled Maintenance',
    ),

    /* ── Diagnostic Services ──────────────────────────── */
    'diagnostic-services' => array(
        'badge'     => 'Advanced Technology',
        'title'     => 'DIAGNOSTIC SERVICES',
        'subtitle'  => 'IN LAS VEGAS.',
        'hero_img'  => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1950&q=80',
        'symptoms_title' => 'Find the Problem Fast.',
        'symptoms_text'  => 'Modern vehicles have complex computer systems. Our advanced diagnostics pinpoint issues accurately.',
        'symptoms' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-engine-warning', 'title' => 'Check Engine Light', 'desc' => 'The most common reason for diagnostics. We read and interpret codes to find the root cause.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-gas-pump', 'title' => 'Poor Fuel Economy', 'desc' => 'A sudden drop in MPG often points to sensor failures or engine issues that diagnostics can reveal.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-car-crash', 'title' => 'Performance Issues', 'desc' => 'Stalling, rough idle, or hesitation during acceleration all require professional diagnostic scanning.' ),
        ),
        'included_title' => "What's Included",
        'included' => array(
            array( 'text' => 'Computerized OBD-II Scan', 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Error Code Reading & Interpretation', 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Visual Component Inspection', 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Detailed Report & Repair Estimate', 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=1000&q=80' ),
        ),
        'included_default_img' => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1000&q=80',
        'gallery' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'OBD Scanner' ),
            array( 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Code Reading' ),
            array( 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Engine Analysis' ),
            array( 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Detailed Report' ),
        ),
        'cta_title'  => 'DON\'T IGNORE WARNING LIGHTS. GET ANSWERS TODAY.',
        'cta_sub'    => 'Schedule Your Diagnostic Service Today',
        'cta_bg'     => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1950&q=80',
        'faq' => array(
            array( 'q' => 'What does a diagnostic scan check?', 'a' => 'It reads error codes from your engine, transmission, ABS, airbag, and other onboard computer systems.' ),
            array( 'q' => 'How long does a diagnostic take?', 'a' => 'A standard diagnostic scan takes 30-60 minutes. Complex issues may require additional testing time.' ),
            array( 'q' => 'Will diagnostics fix my car?', 'a' => 'Diagnostics identify the problem. We then provide a clear estimate for the recommended repairs.' ),
            array( 'q' => 'Can I drive with the check engine light on?', 'a' => 'It depends. A steady light means get it checked soon. A flashing light means stop driving and get towed in.' ),
        ),
        'precheck' => 'Diagnostics',
    ),

    /* ── Suspension & Steering ────────────────────────── */
    'suspension-steering' => array(
        'badge'     => 'Ride & Handling',
        'title'     => 'SUSPENSION & STEERING',
        'subtitle'  => 'SERVICE IN LAS VEGAS.',
        'hero_img'  => 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=1950&q=80',
        'symptoms_title' => 'Ride Smooth, Handle Safe.',
        'symptoms_text'  => 'Your suspension and steering keep your vehicle stable and comfortable. Watch for these warning signs.',
        'symptoms' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-car', 'title' => 'Car Pulls to Side', 'desc' => 'If your car drifts left or right, it could be worn tie rods, ball joints, or steering components.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1578844251758-2f71da645217?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-road', 'title' => 'Rough or Bouncy Ride', 'desc' => 'Worn shocks or struts can\'t absorb bumps properly, making every road feel rough.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-volume-up', 'title' => 'Clunking Noises', 'desc' => 'Clunking or knocking sounds over bumps indicate worn bushings, ball joints, or sway bar links.' ),
        ),
        'included_title' => "What's Included",
        'included' => array(
            array( 'text' => 'Full Suspension Inspection', 'img' => 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Steering System Check', 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Shock & Strut Replacement', 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Road Test & Alignment Check', 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1000&q=80' ),
        ),
        'included_default_img' => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1000&q=80',
        'gallery' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Suspension Work' ),
            array( 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Steering Check' ),
            array( 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Strut Replace' ),
            array( 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Road Test' ),
        ),
        'cta_title'  => 'KEEP YOUR RIDE SAFE AND SMOOTH WITH EXPERT SUSPENSION SERVICE.',
        'cta_sub'    => 'Schedule Your Suspension & Steering Service Today',
        'cta_bg'     => 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=1950&q=80',
        'faq' => array(
            array( 'q' => 'How do I know my shocks are worn?', 'a' => 'A bouncy ride, nose-diving when braking, excessive body roll in turns, and uneven tire wear are key signs.' ),
            array( 'q' => 'How long do shocks and struts last?', 'a' => 'Typically 50,000-100,000 miles, but Las Vegas roads and heat can shorten their lifespan.' ),
            array( 'q' => 'Is suspension work expensive?', 'a' => 'It varies by component. We provide transparent estimates and only recommend what\'s truly needed.' ),
            array( 'q' => 'Do I need an alignment after suspension work?', 'a' => 'Yes, we always recommend a wheel alignment after any suspension repair to ensure proper tire wear.' ),
        ),
        'precheck' => 'Suspension',
    ),

    /* ── Pre-Purchase Inspection ──────────────────────── */
    'pre-purchase' => array(
        'badge'     => 'Buyer Protection',
        'title'     => 'PRE-PURCHASE INSPECTION',
        'subtitle'  => 'IN LAS VEGAS.',
        'hero_img'  => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1950&q=80',
        'symptoms_title' => 'Buy with Confidence.',
        'symptoms_text'  => 'A used car may look perfect outside while hiding serious issues. Know what you\'re buying.',
        'symptoms' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-search', 'title' => 'Hidden Mechanical Issues', 'desc' => 'Engine problems, transmission wear, and suspension damage aren\'t visible to the untrained eye.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-car-crash', 'title' => 'Previous Accident Damage', 'desc' => 'Frame damage and improper repairs from past accidents can compromise safety and resale value.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-file-alt', 'title' => 'No Service History', 'desc' => 'Without records, you don\'t know if critical maintenance was performed. Our inspection fills the gap.' ),
        ),
        'included_title' => "What's Included",
        'included' => array(
            array( 'text' => 'Full Visual & Mechanical Inspection', 'img' => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Under-Hood & Under-Car Check', 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Road Test & Handling Evaluation', 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Detailed Written Report', 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1000&q=80' ),
        ),
        'included_default_img' => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1000&q=80',
        'gallery' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Exterior Check' ),
            array( 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Engine Inspection' ),
            array( 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Road Test' ),
            array( 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Written Report' ),
        ),
        'cta_title'  => 'DON\'T RISK BUYING A CAR WITH HIDDEN PROBLEMS.',
        'cta_sub'    => 'Schedule Your Pre-Purchase Inspection Today',
        'cta_bg'     => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1950&q=80',
        'faq' => array(
            array( 'q' => 'How long does a pre-purchase inspection take?', 'a' => 'Usually about 1.5-2 hours depending on the car\'s condition and features.' ),
            array( 'q' => 'Will I get a written report?', 'a' => 'Yes, we provide a detailed report highlighting the vehicle\'s condition, potential issues, and estimated repair costs.' ),
            array( 'q' => 'Can you inspect a car at a dealership?', 'a' => 'Yes, as long as the seller allows the car to be brought to our shop for inspection.' ),
            array( 'q' => 'Do you check for accident history?', 'a' => 'We identify visible signs of accidents, repairs, or frame damage. For full history we recommend a Carfax report.' ),
        ),
        'precheck' => 'Pre-purchase Inspection',
    ),

    /* ── Electrical Services ──────────────────────────── */
    'electrical-services' => array(
        'badge'     => 'Electrical Repair',
        'title'     => 'ELECTRICAL SERVICES',
        'subtitle'  => 'IN LAS VEGAS.',
        'hero_img'  => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=1950&q=80',
        'symptoms_title' => 'Fix It Before It Fails.',
        'symptoms_text'  => 'Even small electrical faults can affect safety and comfort. Here\'s when to bring your car in.',
        'symptoms' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-lightbulb', 'title' => 'Lights Not Working', 'desc' => 'Headlights, brake lights, or turn signals that flicker or don\'t work are a safety hazard.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-window-maximize', 'title' => 'Power Windows Stuck', 'desc' => 'Intermittent power windows or door locks often indicate a failing switch, relay, or motor.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-tachometer-alt', 'title' => 'Dashboard Malfunctions', 'desc' => 'Flickering gauges or warning lights that don\'t make sense point to electrical issues.' ),
        ),
        'included_title' => "What's Included",
        'included' => array(
            array( 'text' => 'Fuse & Relay Diagnosis', 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Light Bulb & Wiring Repair', 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Switch & Motor Replacement', 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Instrument Panel Repair', 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1000&q=80' ),
        ),
        'included_default_img' => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1000&q=80',
        'gallery' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Wiring Check' ),
            array( 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Fuse Box' ),
            array( 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Light Repair' ),
            array( 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1200&q=80', 'caption' => 'System Test' ),
        ),
        'cta_title'  => 'DON\'T PUT OFF ELECTRICAL ISSUES — THEY ONLY GET WORSE.',
        'cta_sub'    => 'Schedule Your Electrical Service Today',
        'cta_bg'     => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=1950&q=80',
        'faq' => array(
            array( 'q' => 'What electrical issues do you handle?', 'a' => 'We handle basic electrical repairs: bulbs, fuses, relays, switches, power windows, door locks, and minor wiring.' ),
            array( 'q' => 'How long does an electrical repair take?', 'a' => 'Simple fixes like fuses and bulbs take 15-30 minutes. More complex wiring issues may take 1-2 hours.' ),
            array( 'q' => 'Can electrical issues drain my battery?', 'a' => 'Yes, parasitic draws from faulty components can drain your battery overnight. We can test for this.' ),
        ),
        'precheck' => 'Electrical Repair',
    ),

    /* ── AC & Heating ────────────────────────────────── */
    'ac-heating' => array(
        'badge'     => 'Climate Control',
        'title'     => 'AC & HEATING',
        'subtitle'  => 'SERVICE IN LAS VEGAS.',
        'hero_img'  => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=1950&q=80',
        'symptoms_title' => 'Stay Comfortable Year-Round.',
        'symptoms_text'  => 'In Las Vegas heat, a working AC isn\'t a luxury — it\'s a necessity. Here\'s when to bring it in.',
        'symptoms' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-thermometer-half', 'title' => 'Weak Airflow', 'desc' => 'Reduced airflow from vents often means a failing blower motor, clogged cabin filter, or duct issue.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-snowflake', 'title' => 'Warm Air Only', 'desc' => 'If your AC blows warm air, you may have a refrigerant leak or a failing compressor.' ),
            array( 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=800&q=80', 'icon' => 'fa-nose', 'title' => 'Bad Smell', 'desc' => 'Musty odors from vents indicate mold growth in the evaporator, requiring professional cleaning.' ),
        ),
        'included_title' => "What's Included",
        'included' => array(
            array( 'text' => 'AC System Performance Test', 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Refrigerant Recharge', 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Compressor & Belt Inspection', 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1000&q=80' ),
            array( 'text' => 'Cabin Air Filter Replacement', 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1000&q=80' ),
        ),
        'included_default_img' => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1000&q=80',
        'gallery' => array(
            array( 'img' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'AC Diagnostics' ),
            array( 'img' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Compressor Work' ),
            array( 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Filter Change' ),
            array( 'img' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1200&q=80', 'caption' => 'System Recharge' ),
        ),
        'cta_title'  => 'DON\'T SUFFER IN THE HEAT. GET YOUR AC FIXED TODAY.',
        'cta_sub'    => 'Schedule Your AC Service Today',
        'cta_bg'     => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?auto=format&fit=crop&w=1950&q=80',
        'faq' => array(
            array( 'q' => 'How often should AC be serviced?', 'a' => 'We recommend having your AC system inspected annually, especially before summer in Las Vegas.' ),
            array( 'q' => 'Why does my AC blow warm air?', 'a' => 'Usually low refrigerant from a leak, a failing compressor, or a malfunctioning blend door actuator.' ),
            array( 'q' => 'Can you fix heater problems too?', 'a' => 'Yes, we service both heating and cooling systems including heater cores, thermostats, and blend doors.' ),
        ),
        'precheck' => 'AC & Heating',
    ),

);

// ─── Get current page slug & data ────────────────────────
$slug = get_post_field( 'post_name', get_post() );
$svc  = isset( $services[ $slug ] ) ? $services[ $slug ] : null;

if ( ! $svc ) {
    foreach ( $services as $key => $data ) {
        if ( strpos( $slug, $key ) !== false || strpos( $key, $slug ) !== false ) {
            $svc = $data;
            break;
        }
    }
}
if ( ! $svc ) {
    $svc = reset( $services );
}

$included_images_json = array();
foreach ( $svc['included'] as $item ) {
    $included_images_json[] = $item['img'];
}
?>

<!-- ═══ SERVICE HERO ═══ -->
<section class="svc-hero">
    <div class="hero-bg">
        <img src="<?php echo esc_url( $svc['hero_img'] ); ?>" alt="<?php echo esc_attr( $svc['title'] ); ?>">
    </div>
    <div class="hero-content">
        <div class="hero-inner">
            <div class="hero-badge animate-fade-in-up">
                <span><?php echo esc_html( $svc['badge'] ); ?></span>
            </div>
            <h1 class="hero-title animate-fade-in-up" style="animation-delay: 0.1s;">
                <?php echo esc_html( $svc['title'] ); ?><br>
                <span class="gradient-text"><?php echo esc_html( $svc['subtitle'] ); ?></span>
            </h1>
            <?php
            $hero_desc = get_field( 'svc_hero_description' );
            if ( $hero_desc ) : ?>
            <div class="svc-hero-description animate-fade-in-up" style="animation-delay: 0.15s;">
                <?php echo $hero_desc; ?>
            </div>
            <?php endif; ?>
            <div class="hero-buttons animate-fade-in-up" style="animation-delay: 0.25s;">
                <a href="#appointment" class="hero-btn-primary">
                    <div class="btn-bg"></div>
                    <span>Request an appointment</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ═══ SYMPTOMS GRID ═══ -->
<section class="symptoms-section reveal">
    <div class="symptoms-inner">
        <div class="symptoms-header">
            <h2><?php echo esc_html( $svc['symptoms_title'] ); ?></h2>
            <p><?php echo esc_html( $svc['symptoms_text'] ); ?></p>
        </div>
        <div class="symptoms-grid">
            <?php foreach ( $svc['symptoms'] as $symptom ) : ?>
            <div class="symptom-card">
                <img src="<?php echo esc_url( $symptom['img'] ); ?>" alt="<?php echo esc_attr( $symptom['title'] ); ?>">
                <div class="overlay"></div>
                <div class="content">
                    <div class="icon-circle"><i class="fas <?php echo esc_attr( $symptom['icon'] ); ?>"></i></div>
                    <h3><?php echo esc_html( $symptom['title'] ); ?></h3>
                    <p><?php echo esc_html( $symptom['desc'] ); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══ WHAT'S INCLUDED ═══ -->
<section class="included-section reveal">
    <div class="included-inner">
        <div class="included-grid">
            <div>
                <h2><?php echo esc_html( $svc['included_title'] ); ?></h2>
                <div class="included-list">
                    <?php foreach ( $svc['included'] as $idx => $item ) : ?>
                    <div class="service-item" data-img-index="<?php echo $idx; ?>">
                        <div class="item-inner">
                            <span class="service-text"><?php echo esc_html( $item['text'] ); ?></span>
                            <i class="fas fa-arrow-right item-arrow"></i>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="included-image">
                <img id="dynamicImage" src="<?php echo esc_url( $svc['included_default_img'] ); ?>" alt="Service">
                <div class="img-overlay"></div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ WORK GALLERY SLIDER ═══ -->
<section class="work-gallery reveal">
    <div class="work-gallery-inner">
        <h2>Our Work Gallery</h2>
        <button class="gallery-arrow prev" id="galleryPrev"><i class="fas fa-chevron-left"></i></button>
        <button class="gallery-arrow next" id="galleryNext"><i class="fas fa-chevron-right"></i></button>
        <div class="gallery-slider scrollbar-hide" id="galleryContainer">
            <?php foreach ( $svc['gallery'] as $slide ) : ?>
            <div class="gallery-slide">
                <img src="<?php echo esc_url( $slide['img'] ); ?>" alt="<?php echo esc_attr( $slide['caption'] ); ?>" loading="lazy">
                <div class="slide-caption"><span><?php echo esc_html( $slide['caption'] ); ?></span></div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="gallery-dots">
            <?php foreach ( $svc['gallery'] as $s ) : ?><span></span><?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══ BIG CTA ═══ -->
<section class="big-cta reveal">
    <div class="cta-bg"><img src="<?php echo esc_url( $svc['cta_bg'] ); ?>" alt=""></div>
    <div class="cta-overlay"></div>
    <div class="cta-content">
        <h2><?php echo esc_html( $svc['cta_title'] ); ?></h2>
        <p><?php echo esc_html( $svc['cta_sub'] ); ?></p>
        <a href="#appointment" class="cta-btn">Book Now</a>
    </div>
</section>

<!-- ═══ FAQ ═══ -->
<section class="faq-section reveal">
    <div class="faq-inner">
        <div class="faq-header">
            <div class="line"></div>
            <h3>FAQ.</h3>
            <div class="line"></div>
        </div>
        <div class="faq-list">
            <?php foreach ( $svc['faq'] as $faq ) : ?>
            <details class="faq-item">
                <summary>
                    <span><?php echo esc_html( $faq['q'] ); ?></span>
                    <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
                </summary>
                <div class="faq-answer"><?php echo esc_html( $faq['a'] ); ?></div>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══ BOOKING FORM ═══ -->
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
                        $checkbox_services = array( 'Oil Change & Maintenance', 'Wheel Alignment', 'Brakes Service', 'AC & Heating', 'Diagnostics', 'Battery Service', 'Tires / Wheels', 'Suspension', 'Scheduled Maintenance', 'Pre-purchase Inspection', 'Electrical Repair', 'Other' );
                        $precheck = isset( $svc['precheck'] ) ? $svc['precheck'] : '';
                        foreach ( $checkbox_services as $csvc ) :
                            $is_checked = ( $csvc === $precheck );
                        ?>
                        <label class="checkbox-label">
                            <div class="checkbox-wrap">
                                <input type="checkbox" name="services[]" value="<?php echo esc_attr( $csvc ); ?>"<?php checked( $is_checked ); ?>>
                                <div class="checkbox-indicator"></div>
                            </div>
                            <span class="checkbox-text<?php echo $is_checked ? ' checked-text' : ''; ?>"><?php echo esc_html( $csvc ); ?></span>
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

<script>var mmmIncludedImages = <?php echo wp_json_encode( $included_images_json ); ?>;</script>

<?php get_footer(); ?>
