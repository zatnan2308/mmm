/**
 * MMM Automotive - Main JavaScript
 * @package MMM_Theme
 */

(function () {
    'use strict';

    /* ── Mobile Menu Toggle ──────────────────── */
    const menuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', function () {
            mobileMenu.classList.toggle('active');

            const icon = menuBtn.querySelector('i');
            if (mobileMenu.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // Close mobile menu on link click
        mobileMenu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                mobileMenu.classList.remove('active');
                const icon = menuBtn.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            });
        });
    }

    /* ── Smooth Scroll for Anchor Links ──────── */
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            var href = this.getAttribute('href');
            if (href === '#') return;

            var target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });

                // Close mobile menu if open
                if (mobileMenu && mobileMenu.classList.contains('active')) {
                    mobileMenu.classList.remove('active');
                    var icon = menuBtn.querySelector('i');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            }
        });
    });

    /* ── Scroll Reveal Animation ─────────────── */
    function reveal() {
        var reveals = document.querySelectorAll('.reveal');
        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 150;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add('active');
            }
        }
    }

    window.addEventListener('scroll', reveal);
    reveal(); // Initial check on load

    /* ── Booking Form AJAX ───────────────────── */
    var bookingForm = document.getElementById('mmm-booking-form');

    if (bookingForm) {
        bookingForm.addEventListener('submit', function (e) {
            e.preventDefault();

            var formData = new FormData(bookingForm);
            formData.append('action', 'mmm_booking');
            formData.append('nonce', typeof mmmAjax !== 'undefined' ? mmmAjax.nonce : '');

            var submitBtn = bookingForm.querySelector('.submit-btn');
            var msgDiv = document.getElementById('form-message');

            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;

            var ajaxUrl = typeof mmmAjax !== 'undefined' ? mmmAjax.ajaxurl : '/wp-admin/admin-ajax.php';

            fetch(ajaxUrl, {
                method: 'POST',
                body: formData,
            })
                .then(function (response) {
                    return response.json();
                })
                .then(function (data) {
                    if (msgDiv) {
                        msgDiv.style.display = 'block';
                        if (data.success) {
                            msgDiv.style.color = '#22c55e';
                            msgDiv.textContent = data.data.message;
                            bookingForm.reset();
                        } else {
                            msgDiv.style.color = '#ef4444';
                            msgDiv.textContent = data.data.message || 'Something went wrong.';
                        }
                    }
                })
                .catch(function () {
                    if (msgDiv) {
                        msgDiv.style.display = 'block';
                        msgDiv.style.color = '#ef4444';
                        msgDiv.textContent = 'Network error. Please try again or call us.';
                    }
                })
                .finally(function () {
                    submitBtn.textContent = 'Submit Request';
                    submitBtn.disabled = false;
                });
        });
    }

    /* ── Contact Form AJAX ────────────────────── */
    var contactForm = document.getElementById('mmm-contact-form');

    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            var formData = new FormData(contactForm);
            formData.append('action', 'mmm_contact');
            formData.append('nonce', contactForm.querySelector('[name="mmm_contact_nonce_field"]').value);

            var submitBtn = contactForm.querySelector('.contact-submit-btn');
            var msgDiv = document.getElementById('contact-form-message');

            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;

            var ajaxUrl = typeof mmmAjax !== 'undefined' ? mmmAjax.ajaxurl : '/wp-admin/admin-ajax.php';

            fetch(ajaxUrl, {
                method: 'POST',
                body: formData,
            })
                .then(function (response) {
                    return response.json();
                })
                .then(function (data) {
                    if (msgDiv) {
                        msgDiv.style.display = 'block';
                        if (data.success) {
                            msgDiv.className = 'contact-form-msg success';
                            msgDiv.textContent = data.data.message;
                            contactForm.reset();
                        } else {
                            msgDiv.className = 'contact-form-msg error';
                            msgDiv.textContent = data.data.message || 'Something went wrong.';
                        }
                    }
                })
                .catch(function () {
                    if (msgDiv) {
                        msgDiv.style.display = 'block';
                        msgDiv.className = 'contact-form-msg error';
                        msgDiv.textContent = 'Network error. Please try again or call us.';
                    }
                })
                .finally(function () {
                    submitBtn.textContent = 'Send Message';
                    submitBtn.disabled = false;
                });
        });
    }

    /* ── Nav background on scroll ────────────── */
    var siteNav = document.querySelector('.site-nav');
    if (siteNav) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 100) {
                siteNav.style.background = 'rgba(5, 5, 5, 0.95)';
            } else {
                siteNav.style.background = 'rgba(5, 5, 5, 0.8)';
            }
        });
    }
})();
