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
            <div class="hero-buttons animate-fade-in-up" style="animation-delay: 0.2s;">
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
