/**
 * MMM Automotive - Main JavaScript
 * @package MMM_Theme
 */

(function () {
    'use strict';

    /* ── Mobile Menu Toggle ──────────────────── */
    var menuBtn = document.getElementById('mobile-menu-btn');
    var closeBtn = document.getElementById('mobile-menu-close');
    var mobileMenu = document.getElementById('mobile-menu');

    function openMenu() {
        if (mobileMenu) {
            mobileMenu.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeMenu() {
        if (mobileMenu) {
            mobileMenu.classList.remove('active');
            document.body.style.overflow = '';
        }
    }

    if (menuBtn) {
        menuBtn.addEventListener('click', openMenu);
    }

    if (closeBtn) {
        closeBtn.addEventListener('click', closeMenu);
    }

    // Close on link click
    if (mobileMenu) {
        mobileMenu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', closeMenu);
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
                closeMenu();
                target.scrollIntoView({ behavior: 'smooth' });
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
    reveal();

    /* ── Nav background on scroll ────────────── */
    var siteNav = document.querySelector('.site-nav');
    if (siteNav) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 100) {
                siteNav.style.background = 'rgba(5, 5, 5, 0.95)';
            } else {
                siteNav.style.background = '';
            }
        });
    }
})();
