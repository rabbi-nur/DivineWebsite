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
  const resizePanels = active => {
    accPanels.forEach(p => gsap.to(p, { flexBasis: (p === active) ? "65%" : `${35 / (accPanels.length - 1)}%`, duration: 0.5 }));
  };
  resizePanels(document.querySelector(".acc-active"));
  accPanels.forEach(panel => panel.addEventListener("click", () => {
    if (panel.classList.contains("acc-active")) return;
    accPanels.forEach(p => {
      p.classList.remove("acc-active");
      gsap.to(p.querySelector(".acc-content"), { opacity: 0, duration: 0.3 });
    });
    panel.classList.add("acc-active");
    resizePanels(panel);
    gsap.to(panel.querySelector(".acc-content"), { opacity: 1, duration: 0.5, delay: 0.3 });
  }));

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
