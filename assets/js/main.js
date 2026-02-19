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

    /* ── Lightbox ─────────────────────────────── */
    (function () {
        var lb = document.getElementById('mmm-lightbox');
        if (!lb) return;

        var img      = lb.querySelector('.lb-img');
        var counter  = lb.querySelector('.lb-counter');
        var caption  = lb.querySelector('.lb-caption');
        var btnClose = lb.querySelector('.lb-close');
        var btnPrev  = lb.querySelector('.lb-prev');
        var btnNext  = lb.querySelector('.lb-next');
        var overlay  = lb.querySelector('.lb-overlay');

        var items = document.querySelectorAll('.gallery-item[data-lightbox]');
        var slides = [];
        var current = 0;

        // Build slides array
        items.forEach(function (el) {
            slides.push({
                src: el.getAttribute('data-full') || el.querySelector('img').src,
                alt: el.getAttribute('data-alt') || el.querySelector('img').alt || ''
            });
        });

        if (!slides.length) return;

        function showSlide(idx, direction) {
            current = idx;
            lb.classList.add('lb-loading');
            img.classList.remove('lb-img-loaded', 'lb-slide-left', 'lb-slide-right');

            counter.textContent = (current + 1) + ' / ' + slides.length;
            caption.textContent = slides[current].alt;

            // Hide arrows at edges
            btnPrev.style.display = current === 0 ? 'none' : '';
            btnNext.style.display = current === slides.length - 1 ? 'none' : '';

            var newImg = new Image();
            newImg.onload = function () {
                img.src = slides[current].src;
                img.alt = slides[current].alt;
                lb.classList.remove('lb-loading');

                // Add slide animation
                if (direction === 'next') {
                    img.classList.add('lb-slide-left');
                } else if (direction === 'prev') {
                    img.classList.add('lb-slide-right');
                } else {
                    img.classList.add('lb-img-loaded');
                }
            };
            newImg.onerror = function () {
                lb.classList.remove('lb-loading');
                img.src = slides[current].src;
                img.classList.add('lb-img-loaded');
            };
            newImg.src = slides[current].src;
        }

        function openLb(idx) {
            showSlide(idx, null);
            lb.classList.add('lb-active');
            lb.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }

        function closeLb() {
            lb.classList.remove('lb-active');
            lb.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }

        function goPrev() {
            if (current > 0) showSlide(current - 1, 'prev');
        }

        function goNext() {
            if (current < slides.length - 1) showSlide(current + 1, 'next');
        }

        // Click gallery items
        items.forEach(function (el) {
            el.addEventListener('click', function () {
                var idx = parseInt(el.getAttribute('data-lightbox'), 10);
                openLb(idx);
            });
        });

        // Controls
        btnClose.addEventListener('click', closeLb);
        overlay.addEventListener('click', closeLb);
        btnPrev.addEventListener('click', function (e) { e.stopPropagation(); goPrev(); });
        btnNext.addEventListener('click', function (e) { e.stopPropagation(); goNext(); });

        // Keyboard
        document.addEventListener('keydown', function (e) {
            if (!lb.classList.contains('lb-active')) return;
            if (e.key === 'Escape') closeLb();
            if (e.key === 'ArrowLeft') goPrev();
            if (e.key === 'ArrowRight') goNext();
        });

        // Touch swipe
        var touchStartX = 0;
        var touchStartY = 0;
        var touchDiffX = 0;
        var swiping = false;

        lb.addEventListener('touchstart', function (e) {
            touchStartX = e.touches[0].clientX;
            touchStartY = e.touches[0].clientY;
            swiping = true;
        }, { passive: true });

        lb.addEventListener('touchmove', function (e) {
            if (!swiping) return;
            touchDiffX = e.touches[0].clientX - touchStartX;
            var touchDiffY = e.touches[0].clientY - touchStartY;
            // If more horizontal than vertical, prevent scroll
            if (Math.abs(touchDiffX) > Math.abs(touchDiffY) && Math.abs(touchDiffX) > 10) {
                e.preventDefault();
            }
        }, { passive: false });

        lb.addEventListener('touchend', function () {
            if (!swiping) return;
            swiping = false;
            if (touchDiffX > 50) {
                goPrev();
            } else if (touchDiffX < -50) {
                goNext();
            }
            touchDiffX = 0;
        }, { passive: true });
    })();
})();
