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
            // Reset accordion on close
            var openSubs = mobileMenu.querySelectorAll('.mob-has-sub.open');
            openSubs.forEach(function (sub) {
                sub.classList.remove('open');
            });
        }
    }

    if (menuBtn) {
        menuBtn.addEventListener('click', openMenu);
    }

    if (closeBtn) {
        closeBtn.addEventListener('click', closeMenu);
    }

    // Close on regular link click (not accordion triggers)
    if (mobileMenu) {
        mobileMenu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                closeMenu();
            });
        });
    }

    /* ── Mobile Accordion (Services sub-menu) ── */
    var accordionTriggers = document.querySelectorAll('.mob-accordion-trigger');
    accordionTriggers.forEach(function (trigger) {
        trigger.addEventListener('click', function () {
            var parent = trigger.closest('.mob-has-sub');
            if (parent) {
                parent.classList.toggle('open');
            }
        });
    });

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

    /* ── Mega Menu Hover ───────────────────── */
    var megaParents = document.querySelectorAll('.mega-menu-parent');
    megaParents.forEach(function (parent) {
        var trigger = parent.querySelector('.mega-trigger');
        var timer = null;

        if (trigger) {
            trigger.addEventListener('click', function (e) {
                e.preventDefault();
                parent.classList.toggle('mega-open');
            });
        }

        parent.addEventListener('mouseenter', function () {
            clearTimeout(timer);
            parent.classList.add('mega-open');
        });

        parent.addEventListener('mouseleave', function () {
            timer = setTimeout(function () {
                parent.classList.remove('mega-open');
            }, 150);
        });
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            megaParents.forEach(function (p) { p.classList.remove('mega-open'); });
            closeMenu();
        }
    });

    document.addEventListener('click', function (e) {
        megaParents.forEach(function (p) {
            if (!p.contains(e.target)) p.classList.remove('mega-open');
        });
    });

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
