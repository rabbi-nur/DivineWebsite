// Hide loader when page fully loads
window.addEventListener('load', function () {
  const loader = document.getElementById('loader-wrapper');
  if (loader) {
    loader.classList.add('hidden');
  }
});
document.addEventListener('DOMContentLoaded', function () {
    // Slider
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const sliderDotsContainer = document.querySelector('.slider-dots');
    let currentSlide = 0;
    let slideInterval;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === index) {
                slide.classList.add('active');
            }
        });
        updateDots(index);
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }

    function startAutoSlide() {
        slideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
    }

    function stopAutoSlide() {
        clearInterval(slideInterval);
    }

    function createDots() {
        slides.forEach((_, i) => {
            const dot = document.createElement('span');
            dot.classList.add('dot');
            dot.addEventListener('click', () => {
                stopAutoSlide();
                currentSlide = i;
                showSlide(currentSlide);
                startAutoSlide();
            });
            sliderDotsContainer.appendChild(dot);
        });
    }

    function updateDots(activeIndex) {
        const dots = document.querySelectorAll('.dot');
        dots.forEach((dot, i) => {
            dot.classList.remove('active');
            if (i === activeIndex) {
                dot.classList.add('active');
            }
        });
    }

    if (slides.length > 0) {
        createDots();
        showSlide(currentSlide);
        startAutoSlide();
    }

    if (prevBtn && nextBtn) {
        prevBtn.addEventListener('click', () => {
            stopAutoSlide();
            prevSlide();
            startAutoSlide();
        });
        nextBtn.addEventListener('click', () => {
            stopAutoSlide();
            nextSlide();
            startAutoSlide();
        });
    }

    // Hamburger Menu
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links-de');

    if (hamburger && navLinks) {
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            hamburger.classList.toggle('active');
        });
    }
});
(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: true,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            }
        }
    });


    // Portfolio isotope and filter
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });
    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('active');
        $(this).addClass('active');

        portfolioIsotope.isotope({filter: $(this).data('filter')});
    });
    
})(jQuery);


// JavaScript for new product section


document.querySelectorAll('.product-card').forEach(card => {
  const primaryImg = card.querySelector('img.primary');
  const secondaryImg = card.querySelector('img.secondary');

  card.querySelectorAll('.thumb').forEach(thumb => {
    thumb.addEventListener('mouseenter', () => {
      const img1 = thumb.getAttribute('data-img1');
      const img2 = thumb.getAttribute('data-img2');

      // ✅ Update main image
      primaryImg.src = img1;
      secondaryImg.src = img2;
    });

    // Optional: Make it persistent on click
    thumb.addEventListener('click', () => {
      const img1 = thumb.getAttribute('data-img1');
      const img2 = thumb.getAttribute('data-img2');

      primaryImg.src = img1;
      secondaryImg.src = img2;
    });
  });

  // Auto-scroll for swatches (optional)
  const slider = card.querySelector('.swatch-slider');
  let scrollAmount = 0;
  setInterval(() => {
    scrollAmount += 1;
    if (scrollAmount > slider.scrollWidth - slider.clientWidth) scrollAmount = 0;
    slider.scrollTo({ left: scrollAmount, behavior: 'smooth' });
  }, 60);
});
    
    //for accordion section
const accPanels = document.querySelectorAll('.acc-panel');

function resizeAccPanels(activePanel) {
    accPanels.forEach(panel => {
        const flexValue = (panel === activePanel) ? '65%' : `${35 / (accPanels.length - 1)}%`;
        gsap.to(panel, { flexBasis: flexValue, duration: 0.5 });
    });
}
resizeAccPanels(document.querySelector('.acc-panel.acc-active'));

accPanels.forEach(panel => {
    panel.addEventListener('click', () => {
        if (panel.classList.contains('acc-active')) return;
        accPanels.forEach(p => {
            p.classList.remove('acc-active');
            gsap.to(p.querySelector('.acc-content'), { opacity: 0, duration: 0.3 });
        });
        panel.classList.add('acc-active');
        resizeAccPanels(panel);
        gsap.to(panel.querySelector('.acc-content'), { opacity: 1, duration: 0.5, delay: 0.3 });
    });
});

