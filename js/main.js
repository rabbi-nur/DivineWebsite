// === About Page Animations & Carousels ===
document.addEventListener('DOMContentLoaded', () => {
  // GSAP fade-up animation for elements with data-animate
  if (window.gsap && window.ScrollTrigger) {
    gsap.utils.toArray('[data-animate]').forEach(elem => {
      gsap.from(elem, {
        opacity: 0,
        y: 30,
        duration: 1,
        scrollTrigger: {
          trigger: elem,
          start: "top 80%",
          toggleActions: "play none none none"
        }
      });
    });
    gsap.from(".ab_team-card", {
      opacity: 0,
      y: 50,
      stagger: 0.2,
      duration: 1,
      scrollTrigger: {
        trigger: ".ab_team-grid",
        start: "top 80%"
      }
    });
    gsap.from(".ab_why-card", {
      opacity: 0,
      y: 40,
      duration: 1,
      stagger: 0.2,
      scrollTrigger: {
        trigger: ".ab_why-grid",
        start: "top 80%"
      }
    });
    gsap.from(".ab_timeline-item", {
      opacity: 0,
      y: 50,
      duration: 1,
      stagger: 0.3,
      scrollTrigger: {
        trigger: ".ab_timeline",
        start: "top 80%"
      }
    });
  }

  // Animated Counters
  document.querySelectorAll('.ab_counter').forEach(counter => {
    let started = false;
    const animate = () => {
      const value = +counter.getAttribute('data-target');
      let current = 0;
      const step = value / 100;
      const update = () => {
        current += step;
        if (current < value) {
          counter.innerText = Math.ceil(current).toLocaleString();
          requestAnimationFrame(update);
        } else {
          counter.innerText = value.toLocaleString();
        }
      };
      update();
    };
    const observer = new IntersectionObserver(entries => {
      if (entries[0].isIntersecting && !started) {
        animate();
        started = true;
        observer.disconnect();
      }
    }, { threshold: 1 });
    observer.observe(counter);
  });

  // 3D Tilt for About Cards
  document.querySelectorAll('.ab_card').forEach(card => {
    card.addEventListener('mousemove', e => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left - rect.width / 2;
      const y = e.clientY - rect.top - rect.height / 2;
      card.style.transform = `rotateY(${x / 25}deg) rotateX(${y / -25}deg) scale(1.05)`;
    });
    card.addEventListener('mouseleave', () => {
      card.style.transform = 'rotateY(0deg) rotateX(0deg) scale(1)';
    });
  });

  // Auto Scroll for About Concerns Strip
  const strip = document.querySelector('.ab_scroll-strip');
  if (strip) {
    let scrollSpeed = 1;
    setInterval(() => {
      strip.scrollLeft += scrollSpeed;
      if (strip.scrollLeft >= strip.scrollWidth - strip.clientWidth) {
        strip.scrollLeft = 0;
      }
    }, 30);
  }

  // Testimonials Carousel (Swiper)
  if (window.Swiper) {
    new Swiper('.ab_testimonials-carousel', {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      autoplay: { delay: 4000 },
      pagination: { el: '.swiper-pagination', clickable: true },
      autoHeight: true,
    });
    // Trusted by Logos Carousel
    new Swiper('.ab_logo-carousel', {
      slidesPerView: 4,
      spaceBetween: 30,
      loop: true,
      autoplay: { delay: 1800 },
      breakpoints: {
        576: { slidesPerView: 2 },
        768: { slidesPerView: 3 },
        992: { slidesPerView: 4 },
      },
    });
  }
});
// ✅ Hide loader after page load
window.addEventListener("load", () => {
  const loader = document.getElementById("loader-wrapper");
  if (loader) loader.classList.add("hidden");
});

document.addEventListener("DOMContentLoaded", () => {
  // ✅ Slider
  const slides = document.querySelectorAll(".slide");
  const prevBtn = document.querySelector(".prev-btn");
  const nextBtn = document.querySelector(".next-btn");
  const dotsContainer = document.querySelector(".slider-dots");
  let current = 0, interval;

  const showSlide = i => {
    slides.forEach((s, idx) => s.classList.toggle("active", idx === i));
    document.querySelectorAll(".dot").forEach((d, idx) => d.classList.toggle("active", idx === i));
  };

  const next = () => { current = (current + 1) % slides.length; showSlide(current); };
  const prev = () => { current = (current - 1 + slides.length) % slides.length; showSlide(current); };

  const autoSlide = () => interval = setInterval(next, 5000);
  const stopSlide = () => clearInterval(interval);

  if (slides.length) {
    slides.forEach((_, i) => {
      const dot = document.createElement("span");
      dot.classList.add("dot");
      dot.onclick = () => { stopSlide(); current = i; showSlide(current); autoSlide(); };
      dotsContainer.appendChild(dot);
    });
    showSlide(current);
    autoSlide();
  }

  prevBtn?.addEventListener("click", () => { stopSlide(); prev(); autoSlide(); });
  nextBtn?.addEventListener("click", () => { stopSlide(); next(); autoSlide(); });

  // ✅ Hamburger Menu
  const hamburger = document.querySelector(".hamburger");
  const navLinks = document.querySelector(".nav-links-de");
  hamburger?.addEventListener("click", () => {
    navLinks.classList.toggle("active");
    hamburger.classList.toggle("active");
  });

  // ✅ Sticky Navbar & Back-to-Top
  const navbar = document.querySelector(".sticky-top");
  const backTop = document.querySelector(".back-to-top");
  window.addEventListener("scroll", () => {
    navbar.style.top = window.scrollY > 300 ? "0" : "-100px";
    if (backTop) backTop.style.display = window.scrollY > 300 ? "block" : "none";
  });

  backTop?.addEventListener("click", e => {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: "smooth" });
  });

  // ✅ Accordion
  const accPanels = document.querySelectorAll(".acc-panel");
const container = document.querySelector(".acc-container"); // Add this class to the parent container

const resizePanels = active => {
  if (active) {
    container.classList.add("active");
    accPanels.forEach(p => {
      const basis = (p === active) ? "60%" : `${40 / (accPanels.length - 1)}%`;
      gsap.to(p, { flexBasis: basis, duration: 0.5 });
    });
  } else {
    container.classList.remove("active");
    const basis = `${40 / accPanels.length}%`;
    accPanels.forEach(p => {
      gsap.to(p, { flexBasis: basis, duration: 0.5 });
    });
  }
};

// Initial layout: all inactive
resizePanels(null);

accPanels.forEach(panel => {
  panel.addEventListener("click", () => {
    const isActive = panel.classList.contains("acc-active");

    // Clear all
    accPanels.forEach(p => {
      p.classList.remove("acc-active");
      gsap.to(p.querySelector(".acc-content"), { opacity: 0, duration: 0.3 });
    });

    // If previously active, reset layout
    if (isActive) {
      resizePanels(null);
    } else {
      panel.classList.add("acc-active");
      resizePanels(panel);
      gsap.to(panel.querySelector(".acc-content"), { opacity: 1, duration: 0.5, delay: 0.3 });
    }
  });
});

  // ✅ Product Image Hover
  document.querySelectorAll(".product-card").forEach(card => {
    const primary = card.querySelector("img.primary");
    const secondary = card.querySelector("img.secondary");
    card.querySelectorAll(".thumb").forEach(thumb => {
      const img1 = thumb.dataset.img1;
      const img2 = thumb.dataset.img2;
      thumb.addEventListener("mouseenter", () => { primary.src = img1; secondary.src = img2; });
      thumb.addEventListener("click", () => { primary.src = img1; secondary.src = img2; });
    });
  });
});


//for DG  scirtifications

$('.dg-certificate-slider').owlCarousel({
  items: 5,
  autoplay: true,
  autoplayTimeout: 3500,
  margin: 15,
  smartSpeed: 400,
  autoplayHoverPause: true,
  loop: true,
  nav: false,
  dots: false,
  responsive: {
    300: { items: 1 },
    480: { items: 2 },
    768: { items: 3 },
    1170: { items: 5 }
  }
});
