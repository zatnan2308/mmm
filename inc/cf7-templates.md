# Contact Form 7 — Form Templates for MMM Theme

## 1. BOOKING FORM (Homepage)

Create new form in WP Admin → Contact → Add New → Title: "Booking Form"

### Form tab — paste this:

```
<div class="cf7-row cf7-row-2">
    <div class="cf7-field">
        <label class="cf7-label">First Name*</label>
        [text* fname class:cf7-input placeholder "First Name"]
    </div>
    <div class="cf7-field">
        <label class="cf7-label">Last Name*</label>
        [text* lname class:cf7-input placeholder "Last Name"]
    </div>
</div>

<div class="cf7-row cf7-row-2">
    <div class="cf7-field">
        <label class="cf7-label">Phone*</label>
        [tel* phone class:cf7-input placeholder "Phone"]
    </div>
    <div class="cf7-field">
        <label class="cf7-label">Email*</label>
        [email* email class:cf7-input placeholder "Email"]
    </div>
</div>

<div class="cf7-row cf7-row-3">
    <div class="cf7-field">
        <label class="cf7-label">Make*</label>
        [text* make class:cf7-input placeholder "Make"]
    </div>
    <div class="cf7-field">
        <label class="cf7-label">Model*</label>
        [text* model class:cf7-input placeholder "Model"]
    </div>
    <div class="cf7-field">
        <label class="cf7-label">Year*</label>
        [text* year class:cf7-input placeholder "Year"]
    </div>
</div>

<div class="cf7-checkboxes-section">
    <span class="cf7-section-label">Service Needed*</span>
    <div class="cf7-checkbox-grid">
        [checkbox services use_label_element "Oil Change & Maintenance" "Wheel Alignment" "Brakes Service" "AC & Heating" "Diagnostics" "Battery Service" "Tires / Wheels" "Suspension" "Scheduled Maintenance" "Pre-purchase Inspection" "Electrical Repair" "Other"]
    </div>
</div>

<div class="cf7-field">
    <label class="cf7-label">VIN (Optional)</label>
    [text vin class:cf7-input placeholder "VIN Number"]
</div>

<div class="cf7-consent">
    [acceptance consent] I agree to be contacted about my appointment. See our <a href="/privacy-policy/">Privacy Policy</a> [/acceptance]
</div>

[submit class:cf7-submit "Submit Request"]
```

### Mail tab:
- To: info@mmmautomotive.com
- Subject: New Booking Request from [fname] [lname]
- Body:
```
New Booking Request

Name: [fname] [lname]
Phone: [phone]
Email: [email]

Vehicle: [make] [model] [year]
VIN: [vin]

Services Needed: [services]

---
Sent from MMM Automotive website
```

---

## 2. CONTACT FORM (Contact Page)

Create new form → Title: "Contact Form"

### Form tab — paste this:

```
<div class="cf7-row cf7-row-2">
    <div class="cf7-field">
        <label class="cf7-label">Name*</label>
        [text* contact-name class:cf7-input placeholder "Your Name"]
    </div>
    <div class="cf7-field">
        <label class="cf7-label">Email*</label>
        [email* contact-email class:cf7-input placeholder "Your Email"]
    </div>
</div>

<div class="cf7-field">
    <label class="cf7-label">Subject</label>
    [text contact-subject class:cf7-input placeholder "Subject"]
</div>

<div class="cf7-field">
    <label class="cf7-label">Message*</label>
    [textarea* contact-message class:cf7-input cf7-textarea placeholder "Your Message"]
</div>

[submit class:cf7-submit "Send Message"]
```

### Mail tab:
- To: info@mmmautomotive.com
- Subject: Contact Message: [contact-subject]
- Body:
```
New Contact Message

Name: [contact-name]
Email: [contact-email]
Subject: [contact-subject]

Message:
[contact-message]

---
Sent from MMM Automotive website
```

---

## 3. After creating both forms:
1. Copy the shortcode (e.g. `[contact-form-7 id="123" title="Booking Form"]`)
2. Go to Pages → Homepage → Booking tab → paste shortcode
3. Go to Pages → Contact → Contact Form tab → paste shortcode
