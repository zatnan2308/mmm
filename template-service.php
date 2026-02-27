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
        'intro_title' => 'DRIVE STRAIGHT, SAVE TIRES, STAY SAFE',
        'intro_text'  => 'Proper wheel alignment is essential for your vehicle\'s safety, comfort, and performance. Misaligned wheels can cause uneven tire wear, poor handling, reduced fuel efficiency, and even compromise your safety on the road. At MMM Automotive in Las Vegas, we provide precise wheel alignment services to keep your car driving straight, smooth, and safe.',
        'indicators_title'    => 'WHEN TO GET A WHEEL ALIGNMENT',
        'indicators_subtitle' => 'You should schedule a wheel alignment if you notice:',
        'indicators' => array(
            array( 'icon' => 'fa-arrows-alt-h', 'text' => 'Your car <strong>pulls to one side</strong> while driving straight.' ),
            array( 'icon' => 'fa-circle-notch', 'text' => 'The <strong>steering wheel is off-center</strong> when driving.' ),
            array( 'icon' => 'fa-exclamation-triangle', 'text' => 'Uneven or <strong>rapid tire wear</strong> on the edges or center.' ),
            array( 'icon' => 'fa-sliders-h', 'text' => '<strong>Vibration</strong> in the steering wheel at certain speeds.' ),
            array( 'icon' => 'fa-wrench', 'text' => 'After <strong>recent suspension</strong> or new tire replacement.' ),
            array( 'icon' => 'fa-mountain', 'text' => 'After <strong>hitting a pothole</strong> or curb forcefully.' ),
        ),
        'why_title' => 'WHY CHOOSE MMM AUTOMOTIVE',
        'why_items' => array(
            array( 'title' => 'Advanced Equipment', 'description' => 'Advanced computerized alignment equipment for precise results.' ),
            array( 'title' => 'ASE-Certified', 'description' => 'Technicians with expertise in suspension and steering systems.' ),
            array( 'title' => 'Honest Recommendations', 'description' => 'We align your car only if it\'s needed. No unnecessary upsells.' ),
            array( 'title' => 'Competitive Pricing', 'description' => 'Competitive pricing with premium customer service.' ),
            array( 'title' => 'Premium Waiting Area', 'description' => 'Comfortable waiting area with coffee and Wi-Fi while we service your vehicle. Relax while we work.' ),
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
        'intro_title' => 'EXPERT AUTO REPAIR YOU CAN TRUST',
        'intro_text'  => 'When something feels off with your vehicle, you need a team you can rely on. At MMM Automotive in Las Vegas, we diagnose and repair all makes and models with precision and transparency. From engine issues to electrical problems, our experienced technicians get it right the first time.',
        'indicators_title'    => 'WHEN TO BRING YOUR CAR IN',
        'indicators_subtitle' => 'Visit our shop if you experience any of these warning signs:',
        'indicators' => array(
            array( 'icon' => 'fa-exclamation-triangle', 'text' => 'The <strong>check engine light</strong> is on or flashing.' ),
            array( 'icon' => 'fa-volume-up', 'text' => '<strong>Strange noises</strong> like grinding, squealing, or knocking.' ),
            array( 'icon' => 'fa-tint', 'text' => '<strong>Fluid leaks</strong> under your vehicle (oil, coolant, brake fluid).' ),
            array( 'icon' => 'fa-thermometer-half', 'text' => 'Engine <strong>overheating</strong> or temperature gauge rising.' ),
            array( 'icon' => 'fa-car-crash', 'text' => '<strong>Difficulty starting</strong> or stalling while driving.' ),
            array( 'icon' => 'fa-tachometer-alt', 'text' => 'Unusual <strong>vibrations</strong> or loss of power.' ),
        ),
        'why_title' => 'WHY CHOOSE MMM AUTOMOTIVE',
        'why_items' => array(
            array( 'title' => 'Advanced Equipment', 'description' => 'State-of-the-art diagnostic and repair equipment for precise results.' ),
            array( 'title' => 'ASE-Certified', 'description' => 'Experienced technicians with expertise across all vehicle systems.' ),
            array( 'title' => 'Honest Recommendations', 'description' => 'We only recommend services your vehicle actually needs. No upsells.' ),
            array( 'title' => 'Competitive Pricing', 'description' => 'Competitive pricing with premium customer service.' ),
            array( 'title' => 'Premium Waiting Area', 'description' => 'Comfortable waiting area with coffee and Wi-Fi while we service your vehicle.' ),
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
        'intro_title' => 'PROTECT YOUR ENGINE, EXTEND ITS LIFE',
        'intro_text'  => 'Regular oil changes are the single most important maintenance service for your engine. Fresh oil reduces friction, removes contaminants, and keeps internal components running smoothly. At MMM Automotive in Las Vegas, we use premium synthetic oils and OEM-quality filters to keep your engine performing at its best.',
        'indicators_title'    => 'WHEN TO GET AN OIL CHANGE',
        'indicators_subtitle' => 'Schedule an oil change if you notice:',
        'indicators' => array(
            array( 'icon' => 'fa-oil-can', 'text' => 'Oil is <strong>dark, dirty, or gritty</strong> on the dipstick.' ),
            array( 'icon' => 'fa-tachometer-alt', 'text' => 'Increased <strong>engine noise</strong> or knocking sounds.' ),
            array( 'icon' => 'fa-exclamation-circle', 'text' => 'The <strong>oil change light</strong> or check engine light is on.' ),
            array( 'icon' => 'fa-road', 'text' => 'You have driven <strong>5,000+ miles</strong> since last change.' ),
            array( 'icon' => 'fa-calendar-alt', 'text' => 'It has been <strong>6+ months</strong> since your last service.' ),
            array( 'icon' => 'fa-smog', 'text' => '<strong>Exhaust smoke</strong> or burning oil smell.' ),
        ),
        'why_title' => 'WHY CHOOSE MMM AUTOMOTIVE',
        'why_items' => array(
            array( 'title' => 'Advanced Equipment', 'description' => 'State-of-the-art diagnostic and repair equipment for precise results.' ),
            array( 'title' => 'ASE-Certified', 'description' => 'Experienced technicians with expertise across all vehicle systems.' ),
            array( 'title' => 'Honest Recommendations', 'description' => 'We only recommend services your vehicle actually needs. No upsells.' ),
            array( 'title' => 'Competitive Pricing', 'description' => 'Competitive pricing with premium customer service.' ),
            array( 'title' => 'Premium Waiting Area', 'description' => 'Comfortable waiting area with coffee and Wi-Fi while we service your vehicle.' ),
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
        'intro_title' => 'YOUR SAFETY STARTS WITH YOUR BRAKES',
        'intro_text'  => 'Your brakes are the most critical safety system in your vehicle. Worn pads, damaged rotors, or low brake fluid can dramatically increase stopping distance and put you at risk. At MMM Automotive in Las Vegas, we provide thorough brake inspections and professional repairs to keep you stopping with confidence.',
        'indicators_title'    => 'WHEN TO GET BRAKE SERVICE',
        'indicators_subtitle' => 'Bring your car in if you notice:',
        'indicators' => array(
            array( 'icon' => 'fa-volume-up', 'text' => '<strong>Squealing or grinding</strong> noise when braking.' ),
            array( 'icon' => 'fa-arrows-alt', 'text' => '<strong>Vibrating brake pedal</strong> or pulsating when stopping.' ),
            array( 'icon' => 'fa-long-arrow-alt-down', 'text' => 'Brake pedal feels <strong>soft or sinks</strong> to the floor.' ),
            array( 'icon' => 'fa-car', 'text' => 'Car <strong>pulls to one side</strong> when braking.' ),
            array( 'icon' => 'fa-exclamation-triangle', 'text' => '<strong>Brake warning light</strong> is illuminated.' ),
            array( 'icon' => 'fa-ruler-vertical', 'text' => 'It has been <strong>30,000+ miles</strong> since last brake service.' ),
        ),
        'why_title' => 'WHY CHOOSE MMM AUTOMOTIVE',
        'why_items' => array(
            array( 'title' => 'Advanced Equipment', 'description' => 'State-of-the-art diagnostic and repair equipment for precise results.' ),
            array( 'title' => 'ASE-Certified', 'description' => 'Experienced technicians with expertise across all vehicle systems.' ),
            array( 'title' => 'Honest Recommendations', 'description' => 'We only recommend services your vehicle actually needs. No upsells.' ),
            array( 'title' => 'Competitive Pricing', 'description' => 'Competitive pricing with premium customer service.' ),
            array( 'title' => 'Premium Waiting Area', 'description' => 'Comfortable waiting area with coffee and Wi-Fi while we service your vehicle.' ),
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
        'intro_title' => 'SAFE TIRES, CONFIDENT DRIVING',
        'intro_text'  => 'Your tires are the only contact between your vehicle and the road. Worn, damaged, or improperly inflated tires compromise handling, braking, and fuel efficiency. At MMM Automotive in Las Vegas, we provide complete tire services including replacement, rotation, balancing, and TPMS repair.',
        'indicators_title'    => 'WHEN TO SERVICE YOUR TIRES',
        'indicators_subtitle' => 'Schedule tire service if you notice:',
        'indicators' => array(
            array( 'icon' => 'fa-circle', 'text' => '<strong>Low tread depth</strong> — penny test shows Lincoln\'s head.' ),
            array( 'icon' => 'fa-exclamation-triangle', 'text' => '<strong>Sidewall damage</strong> — bulges, cuts, or cracks.' ),
            array( 'icon' => 'fa-car', 'text' => '<strong>Vibration at speed</strong> in the steering wheel.' ),
            array( 'icon' => 'fa-tachometer-alt', 'text' => '<strong>TPMS warning light</strong> is on.' ),
            array( 'icon' => 'fa-exchange-alt', 'text' => '<strong>Uneven tire wear</strong> across the tread.' ),
            array( 'icon' => 'fa-calendar-alt', 'text' => 'Tires are <strong>over 6 years old</strong>.' ),
        ),
        'why_title' => 'WHY CHOOSE MMM AUTOMOTIVE',
        'why_items' => array(
            array( 'title' => 'Advanced Equipment', 'description' => 'State-of-the-art diagnostic and repair equipment for precise results.' ),
            array( 'title' => 'ASE-Certified', 'description' => 'Experienced technicians with expertise across all vehicle systems.' ),
            array( 'title' => 'Honest Recommendations', 'description' => 'We only recommend services your vehicle actually needs. No upsells.' ),
            array( 'title' => 'Competitive Pricing', 'description' => 'Competitive pricing with premium customer service.' ),
            array( 'title' => 'Premium Waiting Area', 'description' => 'Comfortable waiting area with coffee and Wi-Fi while we service your vehicle.' ),
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
        'intro_title' => 'RELIABLE POWER FOR YOUR VEHICLE',
        'intro_text'  => 'Your car\'s battery powers everything from starting the engine to running electronics. In Las Vegas heat, batteries degrade faster than average. At MMM Automotive, we test your battery and charging system thoroughly before recommending replacement, ensuring you only pay for what you need.',
        'indicators_title'    => 'WHEN TO REPLACE YOUR BATTERY',
        'indicators_subtitle' => 'Watch for these warning signs:',
        'indicators' => array(
            array( 'icon' => 'fa-car-battery', 'text' => '<strong>Slow cranking</strong> when starting the engine.' ),
            array( 'icon' => 'fa-lightbulb', 'text' => '<strong>Dim headlights</strong> or flickering interior lights.' ),
            array( 'icon' => 'fa-bolt', 'text' => '<strong>Corrosion</strong> on battery terminals.' ),
            array( 'icon' => 'fa-calendar-check', 'text' => 'Battery is <strong>3+ years old</strong>.' ),
            array( 'icon' => 'fa-redo', 'text' => 'Needing <strong>frequent jump-starts</strong>.' ),
            array( 'icon' => 'fa-exclamation-circle', 'text' => '<strong>Battery warning light</strong> on dashboard.' ),
        ),
        'why_title' => 'WHY CHOOSE MMM AUTOMOTIVE',
        'why_items' => array(
            array( 'title' => 'Advanced Equipment', 'description' => 'State-of-the-art diagnostic and repair equipment for precise results.' ),
            array( 'title' => 'ASE-Certified', 'description' => 'Experienced technicians with expertise across all vehicle systems.' ),
            array( 'title' => 'Honest Recommendations', 'description' => 'We only recommend services your vehicle actually needs. No upsells.' ),
            array( 'title' => 'Competitive Pricing', 'description' => 'Competitive pricing with premium customer service.' ),
            array( 'title' => 'Premium Waiting Area', 'description' => 'Comfortable waiting area with coffee and Wi-Fi while we service your vehicle.' ),
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
        'intro_title' => 'PREVENT PROBLEMS BEFORE THEY START',
        'intro_text'  => 'Regular scheduled maintenance is the best way to keep your vehicle reliable, safe, and performing at its peak. Following manufacturer-recommended service intervals prevents costly breakdowns and preserves your warranty. At MMM Automotive in Las Vegas, we tailor each service to your vehicle\'s specific needs.',
        'indicators_title'    => 'WHEN TO SCHEDULE MAINTENANCE',
        'indicators_subtitle' => 'It\'s time for service if:',
        'indicators' => array(
            array( 'icon' => 'fa-calendar-check', 'text' => '<strong>Mileage interval</strong> is due per owner\'s manual.' ),
            array( 'icon' => 'fa-road', 'text' => 'You are <strong>planning a road trip</strong> or long drive.' ),
            array( 'icon' => 'fa-shield-alt', 'text' => 'You want to <strong>protect your warranty</strong>.' ),
            array( 'icon' => 'fa-clock', 'text' => 'It has been <strong>6+ months</strong> since last service.' ),
            array( 'icon' => 'fa-car', 'text' => 'You notice <strong>reduced performance</strong> or efficiency.' ),
            array( 'icon' => 'fa-snowflake', 'text' => '<strong>Seasonal change</strong> — prepare for summer or winter.' ),
        ),
        'why_title' => 'WHY CHOOSE MMM AUTOMOTIVE',
        'why_items' => array(
            array( 'title' => 'Advanced Equipment', 'description' => 'State-of-the-art diagnostic and repair equipment for precise results.' ),
            array( 'title' => 'ASE-Certified', 'description' => 'Experienced technicians with expertise across all vehicle systems.' ),
            array( 'title' => 'Honest Recommendations', 'description' => 'We only recommend services your vehicle actually needs. No upsells.' ),
            array( 'title' => 'Competitive Pricing', 'description' => 'Competitive pricing with premium customer service.' ),
            array( 'title' => 'Premium Waiting Area', 'description' => 'Comfortable waiting area with coffee and Wi-Fi while we service your vehicle.' ),
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
        'intro_title' => 'ACCURATE DIAGNOSTICS, FAST ANSWERS',
        'intro_text'  => 'Modern vehicles rely on complex computer systems to manage everything from engine performance to emissions. When something goes wrong, you need precise diagnostics to find the root cause. At MMM Automotive in Las Vegas, we use advanced scanning tools to read and interpret error codes accurately.',
        'indicators_title'    => 'WHEN TO GET A DIAGNOSTIC SCAN',
        'indicators_subtitle' => 'Bring your car in if you experience:',
        'indicators' => array(
            array( 'icon' => 'fa-exclamation-triangle', 'text' => '<strong>Check engine light</strong> is on or flashing.' ),
            array( 'icon' => 'fa-gas-pump', 'text' => 'Sudden drop in <strong>fuel economy</strong>.' ),
            array( 'icon' => 'fa-car-crash', 'text' => 'Engine <strong>stalling or rough idle</strong>.' ),
            array( 'icon' => 'fa-tachometer-alt', 'text' => '<strong>Hesitation</strong> during acceleration.' ),
            array( 'icon' => 'fa-smog', 'text' => 'Failed <strong>emissions test</strong>.' ),
            array( 'icon' => 'fa-cogs', 'text' => 'Transmission <strong>shifting problems</strong>.' ),
        ),
        'why_title' => 'WHY CHOOSE MMM AUTOMOTIVE',
        'why_items' => array(
            array( 'title' => 'Advanced Equipment', 'description' => 'State-of-the-art diagnostic and repair equipment for precise results.' ),
            array( 'title' => 'ASE-Certified', 'description' => 'Experienced technicians with expertise across all vehicle systems.' ),
            array( 'title' => 'Honest Recommendations', 'description' => 'We only recommend services your vehicle actually needs. No upsells.' ),
            array( 'title' => 'Competitive Pricing', 'description' => 'Competitive pricing with premium customer service.' ),
            array( 'title' => 'Premium Waiting Area', 'description' => 'Comfortable waiting area with coffee and Wi-Fi while we service your vehicle.' ),
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
        'intro_title' => 'SMOOTH RIDE, PRECISE HANDLING',
        'intro_text'  => 'Your suspension and steering systems work together to keep your vehicle stable, comfortable, and safe. Worn components can compromise handling, increase stopping distance, and cause accelerated tire wear. At MMM Automotive in Las Vegas, we inspect and repair all suspension and steering components.',
        'indicators_title'    => 'WHEN TO SERVICE SUSPENSION & STEERING',
        'indicators_subtitle' => 'Schedule a check if you notice:',
        'indicators' => array(
            array( 'icon' => 'fa-car', 'text' => 'Car <strong>pulls to one side</strong> while driving.' ),
            array( 'icon' => 'fa-road', 'text' => '<strong>Rough or bouncy ride</strong> over bumps.' ),
            array( 'icon' => 'fa-volume-up', 'text' => '<strong>Clunking noises</strong> over bumps or turns.' ),
            array( 'icon' => 'fa-arrows-alt', 'text' => 'Excessive <strong>body roll</strong> in corners.' ),
            array( 'icon' => 'fa-long-arrow-alt-down', 'text' => 'Front end <strong>nose-dives</strong> when braking.' ),
            array( 'icon' => 'fa-tire', 'text' => '<strong>Uneven tire wear</strong> patterns.' ),
        ),
        'why_title' => 'WHY CHOOSE MMM AUTOMOTIVE',
        'why_items' => array(
            array( 'title' => 'Advanced Equipment', 'description' => 'State-of-the-art diagnostic and repair equipment for precise results.' ),
            array( 'title' => 'ASE-Certified', 'description' => 'Experienced technicians with expertise across all vehicle systems.' ),
            array( 'title' => 'Honest Recommendations', 'description' => 'We only recommend services your vehicle actually needs. No upsells.' ),
            array( 'title' => 'Competitive Pricing', 'description' => 'Competitive pricing with premium customer service.' ),
            array( 'title' => 'Premium Waiting Area', 'description' => 'Comfortable waiting area with coffee and Wi-Fi while we service your vehicle.' ),
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
        'intro_title' => 'KNOW WHAT YOU\'RE BUYING',
        'intro_text'  => 'A used car may look great on the outside while hiding expensive mechanical problems underneath. A pre-purchase inspection gives you the full picture before you commit. At MMM Automotive in Las Vegas, we provide thorough multi-point inspections with a detailed written report.',
        'indicators_title'    => 'WHEN TO GET A PRE-PURCHASE INSPECTION',
        'indicators_subtitle' => 'Get an inspection before buying if:',
        'indicators' => array(
            array( 'icon' => 'fa-search', 'text' => 'The car has <strong>no service history</strong> or incomplete records.' ),
            array( 'icon' => 'fa-car-crash', 'text' => 'You suspect <strong>previous accident damage</strong>.' ),
            array( 'icon' => 'fa-dollar-sign', 'text' => 'The price seems <strong>too good to be true</strong>.' ),
            array( 'icon' => 'fa-user-friends', 'text' => 'Buying from a <strong>private seller</strong>.' ),
            array( 'icon' => 'fa-car', 'text' => 'The vehicle has <strong>high mileage</strong>.' ),
            array( 'icon' => 'fa-file-alt', 'text' => 'You want a <strong>professional written report</strong>.' ),
        ),
        'why_title' => 'WHY CHOOSE MMM AUTOMOTIVE',
        'why_items' => array(
            array( 'title' => 'Advanced Equipment', 'description' => 'State-of-the-art diagnostic and repair equipment for precise results.' ),
            array( 'title' => 'ASE-Certified', 'description' => 'Experienced technicians with expertise across all vehicle systems.' ),
            array( 'title' => 'Honest Recommendations', 'description' => 'We only recommend services your vehicle actually needs. No upsells.' ),
            array( 'title' => 'Competitive Pricing', 'description' => 'Competitive pricing with premium customer service.' ),
            array( 'title' => 'Premium Waiting Area', 'description' => 'Comfortable waiting area with coffee and Wi-Fi while we service your vehicle.' ),
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
        'intro_title' => 'RELIABLE ELECTRICAL REPAIR',
        'intro_text'  => 'Even small electrical faults can affect your vehicle\'s safety, comfort, and reliability. From blown fuses to complex wiring issues, electrical problems tend to get worse over time. At MMM Automotive in Las Vegas, we diagnose and repair automotive electrical systems efficiently.',
        'indicators_title'    => 'WHEN TO GET ELECTRICAL SERVICE',
        'indicators_subtitle' => 'Bring your car in if you notice:',
        'indicators' => array(
            array( 'icon' => 'fa-lightbulb', 'text' => '<strong>Lights not working</strong> — headlights, brake lights, signals.' ),
            array( 'icon' => 'fa-window-maximize', 'text' => '<strong>Power windows stuck</strong> or intermittent.' ),
            array( 'icon' => 'fa-tachometer-alt', 'text' => '<strong>Dashboard malfunctions</strong> — flickering gauges.' ),
            array( 'icon' => 'fa-car-battery', 'text' => '<strong>Battery draining</strong> overnight.' ),
            array( 'icon' => 'fa-lock', 'text' => '<strong>Door locks</strong> not responding.' ),
            array( 'icon' => 'fa-plug', 'text' => '<strong>Fuses blowing</strong> repeatedly.' ),
        ),
        'why_title' => 'WHY CHOOSE MMM AUTOMOTIVE',
        'why_items' => array(
            array( 'title' => 'Advanced Equipment', 'description' => 'State-of-the-art diagnostic and repair equipment for precise results.' ),
            array( 'title' => 'ASE-Certified', 'description' => 'Experienced technicians with expertise across all vehicle systems.' ),
            array( 'title' => 'Honest Recommendations', 'description' => 'We only recommend services your vehicle actually needs. No upsells.' ),
            array( 'title' => 'Competitive Pricing', 'description' => 'Competitive pricing with premium customer service.' ),
            array( 'title' => 'Premium Waiting Area', 'description' => 'Comfortable waiting area with coffee and Wi-Fi while we service your vehicle.' ),
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
        'intro_title' => 'STAY COOL IN LAS VEGAS HEAT',
        'intro_text'  => 'In Las Vegas, a working AC isn\'t a luxury — it\'s a necessity. Whether your system blows warm air or has a strange smell, our technicians can diagnose and fix the problem quickly. At MMM Automotive, we service both heating and cooling systems to keep you comfortable year-round.',
        'indicators_title'    => 'WHEN TO SERVICE YOUR AC & HEATING',
        'indicators_subtitle' => 'Schedule a service if you notice:',
        'indicators' => array(
            array( 'icon' => 'fa-thermometer-half', 'text' => '<strong>Weak airflow</strong> from vents.' ),
            array( 'icon' => 'fa-snowflake', 'text' => 'AC blows <strong>warm air only</strong>.' ),
            array( 'icon' => 'fa-nose', 'text' => '<strong>Musty or bad smell</strong> from vents.' ),
            array( 'icon' => 'fa-volume-up', 'text' => '<strong>Unusual noises</strong> when AC is on.' ),
            array( 'icon' => 'fa-fire', 'text' => '<strong>Heater not working</strong> in winter.' ),
            array( 'icon' => 'fa-tint', 'text' => '<strong>Water</strong> pooling under the dashboard.' ),
        ),
        'why_title' => 'WHY CHOOSE MMM AUTOMOTIVE',
        'why_items' => array(
            array( 'title' => 'Advanced Equipment', 'description' => 'State-of-the-art diagnostic and repair equipment for precise results.' ),
            array( 'title' => 'ASE-Certified', 'description' => 'Experienced technicians with expertise across all vehicle systems.' ),
            array( 'title' => 'Honest Recommendations', 'description' => 'We only recommend services your vehicle actually needs. No upsells.' ),
            array( 'title' => 'Competitive Pricing', 'description' => 'Competitive pricing with premium customer service.' ),
            array( 'title' => 'Premium Waiting Area', 'description' => 'Comfortable waiting area with coffee and Wi-Fi while we service your vehicle.' ),
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

// ─── ACF Overrides (ACF wins if filled) ──────────────────
if ( function_exists( 'get_field' ) ) {
    // Hero
    $acf_badge = get_field( 'svc_badge' );
    if ( $acf_badge ) $svc['badge'] = $acf_badge;

    $acf_title = get_field( 'svc_title' );
    if ( $acf_title ) $svc['title'] = $acf_title;

    $acf_subtitle = get_field( 'svc_subtitle' );
    if ( $acf_subtitle ) $svc['subtitle'] = $acf_subtitle;

    $acf_hero_img = get_field( 'svc_hero_image' );
    if ( $acf_hero_img ) $svc['hero_img'] = $acf_hero_img;

    // Intro
    $acf_intro_title = get_field( 'svc_intro_title' );
    if ( $acf_intro_title ) $svc['intro_title'] = $acf_intro_title;

    $acf_intro_text = get_field( 'svc_intro_text' );
    if ( $acf_intro_text ) $svc['intro_text'] = $acf_intro_text;

    // Indicators
    $acf_ind_title = get_field( 'svc_indicators_title' );
    if ( $acf_ind_title ) $svc['indicators_title'] = $acf_ind_title;

    $acf_ind_sub = get_field( 'svc_indicators_subtitle' );
    if ( $acf_ind_sub ) $svc['indicators_subtitle'] = $acf_ind_sub;

    $acf_indicators = get_field( 'svc_indicators' );
    if ( $acf_indicators ) {
        $svc['indicators'] = array();
        foreach ( $acf_indicators as $ind ) {
            $svc['indicators'][] = array(
                'icon' => isset( $ind['icon'] ) ? $ind['icon'] : 'fa-check',
                'text' => isset( $ind['text'] ) ? $ind['text'] : '',
            );
        }
    }

    // Why Choose
    $acf_why_title = get_field( 'svc_why_title' );
    if ( $acf_why_title ) $svc['why_title'] = $acf_why_title;

    $acf_why_items = get_field( 'svc_why_items' );
    if ( $acf_why_items ) $svc['why_items'] = $acf_why_items;

    // What's Included
    $acf_inc_title = get_field( 'svc_included_title' );
    if ( $acf_inc_title ) $svc['included_title'] = $acf_inc_title;

    $acf_included = get_field( 'svc_included_items' );
    if ( $acf_included ) {
        $svc['included'] = array();
        foreach ( $acf_included as $item ) {
            $svc['included'][] = array(
                'text' => isset( $item['text'] ) ? $item['text'] : '',
                'img'  => isset( $item['image'] ) ? $item['image'] : '',
            );
        }
    }

    $acf_def_img = get_field( 'svc_included_default_img' );
    if ( $acf_def_img ) $svc['included_default_img'] = $acf_def_img;

    // Gallery — ACF only, no hardcoded fallback
    $acf_gallery = get_field( 'svc_gallery' );
    if ( $acf_gallery && is_array( $acf_gallery ) ) {
        $svc['gallery'] = array();
        foreach ( $acf_gallery as $g ) {
            $svc['gallery'][] = array(
                'img'     => isset( $g['sizes']['large'] ) ? $g['sizes']['large'] : $g['url'],
                'caption' => $g['alt'] ? $g['alt'] : $g['title'],
            );
        }
    } else {
        $svc['gallery'] = array(); // hide if ACF gallery not filled
    }

    // CTA
    $acf_cta_title = get_field( 'svc_cta_title' );
    if ( $acf_cta_title ) $svc['cta_title'] = $acf_cta_title;

    $acf_cta_sub = get_field( 'svc_cta_subtitle' );
    if ( $acf_cta_sub ) $svc['cta_sub'] = $acf_cta_sub;

    $acf_cta_bg = get_field( 'svc_cta_image' );
    if ( $acf_cta_bg ) $svc['cta_bg'] = $acf_cta_bg;

    // FAQ
    $acf_faq = get_field( 'svc_faq' );
    if ( $acf_faq ) $svc['faq'] = $acf_faq;

    // Precheck
    $acf_precheck = get_field( 'svc_precheck' );
    if ( $acf_precheck ) $svc['precheck'] = $acf_precheck;
}

// Build images array for JS
$included_images_json = array();
foreach ( $svc['included'] as $item ) {
    $included_images_json[] = $item['img'];
}
?>

<!-- ═══ SERVICE HERO ═══ -->
<section class="svc-hero">
    <div class="hero-bg">
        <img src="<?php echo esc_url( $svc['hero_img'] ); ?>" alt="<?php echo esc_attr( $svc['title'] ); ?>" width="1920" height="1080" fetchpriority="high">
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

<!-- ═══ INTRO SECTION ═══ -->
<?php if ( ! empty( $svc['intro_title'] ) ) : ?>
<section class="svc-intro reveal">
    <div class="svc-intro-inner">
        <h2 class="svc-intro-title"><?php echo esc_html( $svc['intro_title'] ); ?></h2>
        <?php if ( ! empty( $svc['intro_text'] ) ) : ?>
        <p class="svc-intro-text"><?php echo esc_html( $svc['intro_text'] ); ?></p>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<!-- ═══ INDICATORS GRID ═══ -->
<?php if ( ! empty( $svc['indicators'] ) ) : ?>
<section class="svc-indicators reveal">
    <div class="svc-indicators-inner">
        <?php if ( ! empty( $svc['indicators_title'] ) ) : ?>
        <h2 class="svc-indicators-title"><?php echo esc_html( $svc['indicators_title'] ); ?></h2>
        <?php endif; ?>
        <?php if ( ! empty( $svc['indicators_subtitle'] ) ) : ?>
        <p class="svc-indicators-subtitle"><?php echo esc_html( $svc['indicators_subtitle'] ); ?></p>
        <?php endif; ?>
        <div class="svc-indicators-grid">
            <?php foreach ( $svc['indicators'] as $ind ) : ?>
            <div class="svc-indicator-card">
                <div class="svc-indicator-icon"><i class="fas <?php echo esc_attr( $ind['icon'] ); ?>"></i></div>
                <p class="svc-indicator-text"><?php echo wp_kses( $ind['text'], array( 'strong' => array(), 'b' => array(), 'em' => array() ) ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

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

<!-- ═══ WHY CHOOSE ═══ -->
<?php if ( ! empty( $svc['why_items'] ) ) : ?>
<section class="svc-why-choose reveal">
    <div class="svc-why-inner">
        <?php if ( ! empty( $svc['why_title'] ) ) : ?>
        <h2 class="svc-why-title"><?php echo esc_html( $svc['why_title'] ); ?></h2>
        <?php endif; ?>
        <div class="svc-why-grid">
            <?php foreach ( $svc['why_items'] as $idx => $item ) : ?>
            <div class="svc-why-card">
                <div class="svc-why-number"><?php echo $idx + 1; ?></div>
                <h3 class="svc-why-card-title"><?php echo esc_html( $item['title'] ); ?></h3>
                <p class="svc-why-card-desc"><?php echo esc_html( $item['description'] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
// Optional extra content block
$svc_content = get_field( 'svc_content' );
if ( $svc_content ) : ?>
<section class="svc-extra-content reveal">
    <div style="max-width: 80rem; margin: 0 auto; padding: 4rem 1.5rem;">
        <?php echo $svc_content; ?>
    </div>
</section>
<?php endif; ?>

<!-- ═══ WORK GALLERY ═══ -->
<?php if ( ! empty( $svc['gallery'] ) ) : ?>
<section class="work-gallery reveal">
    <div class="work-gallery-inner">
        <h2>Our Work Gallery</h2>
        <div class="wg-carousel">
            <button class="wg-arrow wg-prev" aria-label="Previous"><i class="fas fa-chevron-left"></i></button>
            <button class="wg-arrow wg-next" aria-label="Next"><i class="fas fa-chevron-right"></i></button>
            <div class="wg-track" id="wgTrack">
                <?php foreach ( $svc['gallery'] as $idx => $slide ) : ?>
                <div class="wg-slide" data-wg-index="<?php echo $idx; ?>" data-full="<?php echo esc_url( $slide['img'] ); ?>" data-caption="<?php echo esc_attr( $slide['caption'] ); ?>">
                    <img src="<?php echo esc_url( $slide['img'] ); ?>" alt="<?php echo esc_attr( $slide['caption'] ); ?>" loading="lazy">
                    <div class="wg-zoom"><i class="fas fa-search-plus"></i></div>
                    <div class="wg-caption"><span><?php echo esc_html( $slide['caption'] ); ?></span></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="wg-dots">
            <?php foreach ( $svc['gallery'] as $idx => $s ) : ?>
            <button class="wg-dot<?php echo $idx === 0 ? ' active' : ''; ?>" data-index="<?php echo $idx; ?>"></button>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Lightbox -->
<div id="wg-lightbox" class="lb" aria-hidden="true" role="dialog" aria-label="Work gallery">
    <div class="lb-overlay"></div>
    <div class="lb-wrap">
        <div class="lb-topbar">
            <span class="lb-counter"></span>
            <button class="lb-close" aria-label="Close gallery"><i class="fas fa-times"></i></button>
        </div>
        <button class="lb-arrow lb-prev" aria-label="Previous image"><i class="fas fa-chevron-left"></i></button>
        <button class="lb-arrow lb-next" aria-label="Next image"><i class="fas fa-chevron-right"></i></button>
        <div class="lb-stage">
            <img class="lb-img" src="" alt="" draggable="false">
            <div class="lb-spinner"><div></div></div>
        </div>
        <p class="lb-caption"></p>
    </div>
</div>
<?php endif; ?>

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
<?php if ( ! empty( $svc['faq'] ) ) : ?>
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
<?php endif; ?>

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
        <?php
        $default_svc = isset( $svc['precheck'] ) ? $svc['precheck'] : '';
        if ( function_exists( 'get_field' ) ) {
            $acf_default = get_field( 'svc_default_service' );
            if ( $acf_default ) $default_svc = $acf_default;
        }
        ?>
        <div class="cf7-form-wrap" data-default-service="<?php echo esc_attr( $default_svc ); ?>">
            <?php
            $booking_cf7 = '';
            if ( function_exists( 'get_field' ) ) {
                $booking_cf7 = get_field( 'booking_cf7_shortcode' );
            }
            if ( $booking_cf7 ) {
                echo do_shortcode( $booking_cf7 );
            } else {
                echo '<p style="color: var(--color-gray-500);">Configure the booking form in Page Settings → Booking tab.</p>';
            }
            ?>
        </div>
    </div>
</section>

<script>var mmmIncludedImages = <?php echo wp_json_encode( $included_images_json ); ?>;</script>

<?php get_footer(); ?>
