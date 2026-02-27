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

    /* ── Scroll to Top ────────────────────── */
    var scrollTopBtn = document.getElementById('fab-scroll-top');
    if (scrollTopBtn) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 600) {
                scrollTopBtn.classList.add('visible');
            } else {
                scrollTopBtn.classList.remove('visible');
            }
        });

        scrollTopBtn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
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

    /* ── Work Gallery Carousel + Lightbox ── */
    (function () {
        var track = document.getElementById('wgTrack');
        if (!track) return;

        var slides    = track.querySelectorAll('.wg-slide');
        var prevBtn   = track.parentElement.querySelector('.wg-prev');
        var nextBtn   = track.parentElement.querySelector('.wg-next');
        var dots      = document.querySelectorAll('.wg-dot');
        var total     = slides.length;
        if (!total) return;

        // ── Carousel scroll ──
        function scrollToSlide(idx) {
            if (idx < 0) idx = 0;
            if (idx >= total) idx = total - 1;
            slides[idx].scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'start' });
        }

        function updateDots() {
            var scrollLeft = track.scrollLeft;
            var slideW = slides[0].offsetWidth + (parseInt(getComputedStyle(track).gap) || 16);
            var active = Math.round(scrollLeft / slideW);
            dots.forEach(function (d, i) {
                d.classList.toggle('active', i === active);
            });
            // Arrow states
            if (prevBtn) prevBtn.classList.toggle('wg-disabled', scrollLeft <= 5);
            if (nextBtn) nextBtn.classList.toggle('wg-disabled', scrollLeft + track.clientWidth >= track.scrollWidth - 5);
        }

        if (prevBtn) prevBtn.addEventListener('click', function () {
            var slideW = slides[0].offsetWidth + (parseInt(getComputedStyle(track).gap) || 16);
            track.scrollBy({ left: -slideW, behavior: 'smooth' });
        });
        if (nextBtn) nextBtn.addEventListener('click', function () {
            var slideW = slides[0].offsetWidth + (parseInt(getComputedStyle(track).gap) || 16);
            track.scrollBy({ left: slideW, behavior: 'smooth' });
        });

        dots.forEach(function (dot) {
            dot.addEventListener('click', function () {
                var idx = parseInt(dot.getAttribute('data-index'), 10);
                scrollToSlide(idx);
            });
        });

        track.addEventListener('scroll', updateDots, { passive: true });
        updateDots();

        // ── Lightbox ──
        var lb       = document.getElementById('wg-lightbox');
        if (!lb) return;
        var lbImg    = lb.querySelector('.lb-img');
        var lbCount  = lb.querySelector('.lb-counter');
        var lbCap    = lb.querySelector('.lb-caption');
        var lbClose  = lb.querySelector('.lb-close');
        var lbPrev   = lb.querySelector('.lb-prev');
        var lbNext   = lb.querySelector('.lb-next');
        var lbOver   = lb.querySelector('.lb-overlay');
        var lbSlides = [];
        var current  = 0;

        slides.forEach(function (s) {
            lbSlides.push({
                src: s.getAttribute('data-full') || s.querySelector('img').src,
                alt: s.getAttribute('data-caption') || ''
            });
        });

        function showLb(idx, dir) {
            current = idx;
            lb.classList.add('lb-loading');
            lbImg.classList.remove('lb-img-loaded', 'lb-slide-left', 'lb-slide-right');
            lbCount.textContent = (current + 1) + ' / ' + lbSlides.length;
            lbCap.textContent   = lbSlides[current].alt;
            lbPrev.style.display = current === 0 ? 'none' : '';
            lbNext.style.display = current === lbSlides.length - 1 ? 'none' : '';

            var tmp = new Image();
            tmp.onload = function () {
                lbImg.src = lbSlides[current].src;
                lbImg.alt = lbSlides[current].alt;
                lb.classList.remove('lb-loading');
                lbImg.classList.add(dir === 'next' ? 'lb-slide-left' : dir === 'prev' ? 'lb-slide-right' : 'lb-img-loaded');
            };
            tmp.onerror = function () {
                lb.classList.remove('lb-loading');
                lbImg.src = lbSlides[current].src;
                lbImg.classList.add('lb-img-loaded');
            };
            tmp.src = lbSlides[current].src;
        }

        function openLb(idx) { showLb(idx, null); lb.classList.add('lb-active'); lb.setAttribute('aria-hidden','false'); document.body.style.overflow='hidden'; }
        function closeLb()   { lb.classList.remove('lb-active'); lb.setAttribute('aria-hidden','true'); document.body.style.overflow=''; }
        function goPrev()    { if (current > 0) showLb(current - 1, 'prev'); }
        function goNext()    { if (current < lbSlides.length - 1) showLb(current + 1, 'next'); }

        slides.forEach(function (s) {
            s.addEventListener('click', function () {
                openLb(parseInt(s.getAttribute('data-wg-index'), 10));
            });
        });

        lbClose.addEventListener('click', closeLb);
        lbOver.addEventListener('click', closeLb);
        lbPrev.addEventListener('click', function (e) { e.stopPropagation(); goPrev(); });
        lbNext.addEventListener('click', function (e) { e.stopPropagation(); goNext(); });

        document.addEventListener('keydown', function (e) {
            if (!lb.classList.contains('lb-active')) return;
            if (e.key === 'Escape') closeLb();
            if (e.key === 'ArrowLeft') goPrev();
            if (e.key === 'ArrowRight') goNext();
        });

        // Touch swipe in lightbox
        var tx = 0, td = 0;
        lb.addEventListener('touchstart', function (e) { tx = e.touches[0].clientX; }, { passive: true });
        lb.addEventListener('touchmove', function (e) { td = e.touches[0].clientX - tx; }, { passive: true });
        lb.addEventListener('touchend', function () {
            if (td > 50) goPrev(); else if (td < -50) goNext(); td = 0;
        }, { passive: true });
    })();

    /* ── Two-Step Form Navigation ───────── */
    (function() {
        function initStepForms() {
            document.querySelectorAll('.cf7-form-wrap').forEach(function(wrap) {
                if (wrap.dataset.stepsInit) return;
                var steps = wrap.querySelectorAll('.form-step');
                if (steps.length < 2) return;

                wrap.dataset.stepsInit = '1';
                var indicators = wrap.querySelectorAll('.step-ind');
                var line = wrap.querySelector('.step-line');
                var current = 0;

                /* Ensure only first step visible */
                for (var i = 0; i < steps.length; i++) {
                    steps[i].classList.remove('active');
                }
                steps[0].classList.add('active');
                if (indicators[0]) indicators[0].classList.add('active');

                function goTo(n) {
                    steps[current].classList.remove('active');
                    steps[n].classList.add('active');

                    indicators.forEach(function(ind, idx) {
                        ind.classList.remove('active', 'completed');
                        if (idx < n) ind.classList.add('completed');
                        if (idx === n) ind.classList.add('active');
                    });

                    if (line) {
                        line.classList.toggle('filled', n > 0);
                    }

                    current = n;
                    var section = wrap.closest('.booking-section') || wrap;
                    section.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }

                /* Use event delegation on the wrapper — survives CF7 DOM changes */
                wrap.addEventListener('click', function(e) {
                    var nextBtn = e.target.closest('.step-next-btn');
                    var backBtn = e.target.closest('.step-back-btn');

                    if (nextBtn) {
                        e.preventDefault();
                        e.stopPropagation();
                        /* Validate current step */
                        var valid = true;
                        var fields = steps[current].querySelectorAll(
                            'input[aria-required="true"], .wpcf7-validates-as-required'
                        );
                        fields.forEach(function(f) {
                            /* Remove old error if exists */
                            var group = f.closest('.form-group');
                            if (group) {
                                var oldErr = group.querySelector('.step-error');
                                if (oldErr) oldErr.remove();
                            }

                            if (!f.value || !f.value.trim()) {
                                valid = false;
                                f.style.setProperty('border-bottom-color', '#ef4444', 'important');

                                /* Add error message */
                                if (group) {
                                    var err = document.createElement('span');
                                    err.className = 'step-error';
                                    err.textContent = 'This field is required';
                                    group.appendChild(err);
                                }

                                f.addEventListener('input', function handler() {
                                    f.style.removeProperty('border-bottom-color');
                                    var g = f.closest('.form-group');
                                    if (g) { var e = g.querySelector('.step-error'); if (e) e.remove(); }
                                    f.removeEventListener('input', handler);
                                });
                            }
                        });
                        if (valid && current < steps.length - 1) goTo(current + 1);
                        return;
                    }

                    if (backBtn) {
                        e.preventDefault();
                        e.stopPropagation();
                        if (current > 0) goTo(current - 1);
                        return;
                    }
                }, true); /* capture phase — fires before CF7 */
            });
        }

        /* Run on DOM ready + delays for CF7 */
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initStepForms);
        } else {
            initStepForms();
        }
        setTimeout(initStepForms, 500);
        setTimeout(initStepForms, 1500);
        setTimeout(initStepForms, 3000);
    })();

    /* ── Cookie Consent Banner (injected after load to avoid LCP) ── */
    (function() {
        /* Skip entirely if consent already given */
        if (localStorage.getItem('mmm_cookie_consent')) return;

        function initCookieBanner() {
            var banner = document.createElement('div');
            banner.className = 'cookie-banner';
            banner.id = 'cookie-banner';
            banner.innerHTML =
                '<div class="cookie-banner-inner">' +
                    '<p class="cookie-banner-text">We use cookies to enhance your browsing experience, serve personalized ads or content, and analyze our traffic. By clicking &ldquo;Accept&rdquo;, you consent to our use of cookies. <a href="/cookie-policy/">Read Cookie Policy</a>.</p>' +
                    '<div class="cookie-banner-actions">' +
                        '<button class="cookie-btn cookie-btn-accept" id="cookie-accept">ACCEPT</button>' +
                        '<button class="cookie-btn-close" id="cookie-decline" aria-label="Close">&times;</button>' +
                    '</div>' +
                '</div>';
            document.body.appendChild(banner);

            /* Show after short delay */
            setTimeout(function() {
                banner.classList.add('visible');
                document.body.classList.add('cookie-banner-active');
            }, 300);

            function hideBanner() {
                banner.classList.remove('visible');
                document.body.classList.remove('cookie-banner-active');
            }

            banner.querySelector('#cookie-accept').addEventListener('click', function() {
                localStorage.setItem('mmm_cookie_consent', 'accepted');
                hideBanner();
            });

            banner.querySelector('#cookie-decline').addEventListener('click', function() {
                localStorage.setItem('mmm_cookie_consent', 'declined');
                hideBanner();
            });
        }

        /* Wait for window.load so banner doesn't affect LCP */
        if (document.readyState === 'complete') {
            initCookieBanner();
        } else {
            window.addEventListener('load', initCookieBanner);
        }
    })();

    /* ── Auto-select default service in CF7 booking form ── */
    (function() {
        var wrap = document.querySelector('.cf7-form-wrap[data-default-service]');
        if (!wrap) return;
        var defaultSvc = wrap.getAttribute('data-default-service');
        if (!defaultSvc) return;

        function setDefault() {
            var sel = wrap.querySelector('select[name="service"]');
            if (!sel) return;
            for (var i = 0; i < sel.options.length; i++) {
                if (sel.options[i].value === defaultSvc) {
                    sel.selectedIndex = i;
                    break;
                }
            }
        }

        setDefault();
        setTimeout(setDefault, 500);
        setTimeout(setDefault, 1500);
    })();

    /* ── Smart Booking Button ───────────────── */
    document.querySelectorAll('[data-booking]').forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            var target = document.getElementById('appointment');
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });
            } else {
                e.preventDefault();
                window.location.href = '/#appointment';
            }
        });
    });
})();

/* ══════════════════════════════════════════════
   CF7 → THANK YOU PAGE REDIRECT
   ══════════════════════════════════════════════ */

document.addEventListener('wpcf7mailsent', function () {
    window.location.href = '/thank-you-page/';
}, false);
