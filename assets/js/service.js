/**
 * MMM Theme — Service Page JS
 * Gallery slider arrows + dynamic image swap
 */
(function () {
    'use strict';

    // Gallery Slider
    var container = document.getElementById('galleryContainer');
    var prevBtn   = document.getElementById('galleryPrev');
    var nextBtn   = document.getElementById('galleryNext');

    if (container && prevBtn && nextBtn) {
        prevBtn.addEventListener('click', function () {
            container.scrollBy({ left: -400, behavior: 'smooth' });
        });
        nextBtn.addEventListener('click', function () {
            container.scrollBy({ left: 400, behavior: 'smooth' });
        });
    }

    // "What's Included" Image Swap
    var dynamicImage  = document.getElementById('dynamicImage');
    var serviceItems  = document.querySelectorAll('.service-item[data-img-index]');
    var images        = window.mmmIncludedImages || [];

    if (dynamicImage && serviceItems.length && images.length) {
        serviceItems.forEach(function (item) {
            item.addEventListener('mouseenter', function () {
                var idx = parseInt(this.getAttribute('data-img-index'), 10);
                if (images[idx]) {
                    dynamicImage.style.opacity = '0';
                    setTimeout(function () {
                        dynamicImage.src = images[idx];
                        dynamicImage.style.opacity = '1';
                    }, 300);
                }
            });
        });
    }
})();
