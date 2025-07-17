<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>About Us | Divine Textile</title>

<meta name="description" content="Learn about Divine Textile, a leader in premium, sustainable textile solutions with over 25 years of experience and a global presence.">
<meta property="og:title" content="About Us | Divine Textile" />
<meta property="og:description" content="Delivering premium textiles with sustainability and innovation at heart." />
<meta property="og:image" content="img/Divine Logo.png" />
<meta property="og:type" content="website" />

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

<style>
  h1,h2,h3,h4 {
  font-weight: 700;
}
.ab_hero {
  position: relative;
  height: 100vh;
  background:
    linear-gradient(rgba(8, 39, 18, 0.2), rgba(139, 230, 151, 0.2)),
    url('img/DSC00115.webp') center/cover no-repeat fixed;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: #fff;
  animation: fadeIn 1.5s ease forwards;
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity: 1;}
}
.ab_hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.5);
}
.ab_hero-content {
  position: relative;
  z-index: 2;
  max-width: 900px;
}
.ab_hero-content h1 {
  font-size: 3.5rem;
  margin-bottom: 20px;
}
.ab_hero-content p {
  font-size: 1.3rem;
  margin-bottom: 30px;
}
.ab_btn-primary-custom {
  background: #f57c00;
  border: none;
  color: #fff;
  padding: 14px 36px;
  border-radius: 30px;
  font-size: 1.1rem;
  transition: background-color 0.3s ease;
}
.ab_btn-primary-custom:hover {
  background: #e66900;
}

/* Section General */

.ab_about-section {
  background: #f9f9f9; /* Light section background */
  padding: 80px 20px;
  text-align: center;
}

.ab_section-title {
  font-size: 2.8rem;
  font-weight: 700;
  color: #002219; /* Brand dark green */
  margin-bottom: 15px;
}

.ab_title-line {
  display: block;
  width: 70px;
  height: 4px;
  background: #f57c00; /* Brand orange */
  margin: 0 auto 25px;
  border-radius: 2px;
}

.ab_about-text {
  font-size: 1.2rem;
  max-width: 850px;
  margin: 0 auto;
  line-height: 1.8;
  color: #444;
}

.ab_section {
  padding: 60px 20px;
}
.ab_text-center p {
  max-width: 750px;
  margin: auto;
}
/* MVV Cards */
.ab_mvv-card {
  background: #fff;
  border-radius: 10px;
  padding: 30px;
  text-align: center;
  box-shadow: 0 4px 10px rgba(0,0,0,0.08);
  transition: transform 0.3s ease;
}
.ab_mvv-card:hover {
  transform: translateY(-8px);
}
.ab_mvv-card i {
  font-size: 2rem;
  color: #f57c00;
  margin-bottom: 15px;
}



/* Team */
.ab_team-member img {
  width: 100%;
  border-radius: 10px;
  object-fit: cover;
  height: 320px;
}
.ab_team-member h4 {
  margin-top: 15px;
}
.ab_team-member p {
  font-style: italic;
  color: #555;
}


/*our concern 4*/
.ab_showcase {
  position: relative;
  background: linear-gradient(135deg, #0a0a0a, #151515);
  padding: 100px 0;
  color: #fff;
  overflow: hidden;
}

.ab_title {
  text-align: center;
  font-size: 2.8rem;
  font-weight: 800;
  margin-bottom: 10px;
}

.ab_subtitle {
  text-align: center;
  max-width: 600px;
  margin: 0 auto 50px;
  color: #aaa;
}

.ab_scroll-strip {
  display: flex;
  gap: 30px;
  overflow-x: auto;
  scroll-behavior: smooth;
  padding: 10px 0;
}

.ab_scroll-strip::-webkit-scrollbar {
  display: none;
}

.ab_card {
  flex: 0 0 320px;
  height: 400px;
  background-size: cover;
  background-position: center;
  border-radius: 18px;
  position: relative;
  transform-style: preserve-3d;
  transition: transform 0.3s ease;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
}

.ab_card:hover {
  transform: rotateY(10deg) scale(1.05);
}

.ab_overlay {
  position: absolute;
  bottom: 0;
  width: 100%;
  padding: 20px;
  background: rgba(0, 0, 0, 0.6);
  backdrop-filter: blur(8px);
  text-align: center;
}

.ab_overlay .ab_logo {
  height: 50px;
  margin-bottom: 15px;
}

.ab_overlay h5 {
  font-size: 1.2rem;
  margin-bottom: 6px;
}

.ab_overlay p {
  font-size: 0.95rem;
  color: #ddd;
}
/* Our Concerns - group companies carousel 2*/
.ab_concerns-section {
  background: #f9f9f9;
  padding: 80px 20px;
  text-align: center;
}

.ab_concern-card {
  background: #fff;
  border-radius: 12px;
  padding: 25px 20px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.ab_concern-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 6px 18px rgba(0,0,0,0.12);
}

.ab_concern-card img {
  max-height: 80px;
  object-fit: contain;
  margin-bottom: 15px;
  transition: transform 0.3s ease;
}

.ab_concern-card:hover img {
  transform: scale(1.1);
}

.ab_concern-card h5 {
  font-weight: 700;
  color: #002219;
  margin-bottom: 8px;
}

.ab_concern-card p {
  font-size: 0.95rem;
  color: #666;
}

.swiper-button-next,
.swiper-button-prev {
  color: #f57c00;
  font-weight: bold;
}

/*Our concern 1*/
.ab_concern-slide {
  background: #fff;
  border-radius: 12px;
  padding: 20px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  text-align: center;
}
.ab_concern-slide img {
  max-height: 80px;
  margin-bottom: 12px;
  object-fit: contain;
}
.ab_concern-slide h5 {
  font-weight: 600;
  margin-bottom: 8px;
}
.ab_concern-slide p {
  font-size: 0.9rem;
  color: #666;
}

.ab_team-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 30px;
  justify-items: center;
}

.ab_team-card {
  text-align: center;
  position: relative;
  overflow: hidden;
}

.ab_team-photo {
  position: relative;
  overflow: hidden;
  border-radius: 12px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

.ab_team-photo img {
  width: 100%;
  height: auto;
  display: block;
  transition: transform 0.4s ease;
}

.ab_team-photo:hover img {
  transform: scale(1.1);
}

.ab_team-overlay {
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background: rgba(0,0,0,0.7);
  color: #fff;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  opacity: 0;
  transition: opacity 0.4s ease;
  padding: 15px;
  text-align: center;
}

.ab_team-photo:hover .ab_team-overlay {
  opacity: 1;
}

.ab_team-overlay p {
  font-size: 0.9rem;
  margin-bottom: 10px;
}

.ab_team-social a {
  color: #fff;
  font-size: 1rem;
  margin: 0 5px;
  transition: color 0.3s ease;
}

.ab_team-social a:hover {
  color: #ffd700;
}

.ab_team-card h4 {
  margin-top: 15px;
  font-weight: 600;
}

.ab_role {
  font-size: 0.9rem;
  color: #777;
}

/* MD Message */
.ab_md-section {
  background: #f9f9f9;
  padding: 80px 0;
}

.ab_md-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 50px;
  flex-wrap: wrap;
}

.ab_md-photo img {
  width: 320px;
  height: 320px;
  object-fit: cover;
  border-radius: 50%;
  border: 6px solid #fff;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.ab_md-text {
  max-width: 600px;
  position: relative;
  text-align: left;
}

.ab_md-text blockquote {
  font-size: 1.2rem;
  font-style: italic;
  color: #444;
  line-height: 1.6;
  margin: 20px 0;
}

.ab_quote-icon {
  font-size: 3rem;
  color: rgba(0, 0, 0, 0.05);
  position: absolute;
  top: -20px;
  left: -40px;
  z-index: 0;
}

.ab_md-name {
  font-size: 1.8rem;
  font-weight: 700;
  margin-bottom: 5px;
}

.ab_md-title {
  font-size: 1rem;
  color: #777;
  margin-bottom: 15px;
}

.ab_signature {
  font-family: 'Great Vibes', cursive;
  font-size: 1.5rem;
  color: #333;
  margin-top: 20px;
}

/* Grid Layout */
.ab_why-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 30px;
  text-align: center;
}

/* Card Styling */
.ab_why-card {
  background: #fff;
  border-radius: 16px;
  padding: 30px 20px;
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.ab_why-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
}

/* Icon Styling */
.ab_why-icon {
  width: 80px;
  height: 80px;
  margin: 0 auto 20px;
  background: linear-gradient(135deg, #009ffd, #2a2a72);
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  color: #fff;
  font-size: 32px;
  box-shadow: 0 6px 12px rgba(0, 159, 253, 0.3);
}

.ab_why-card h4 {
  font-size: 1.3rem;
  margin-bottom: 10px;
  font-weight: 600;
}

.ab_why-card p {
  color: #666;
  font-size: 0.95rem;
}

/* Milestones timeline */
.ab_timeline {
  position: relative;
  padding: 20px 0;
  max-width: 800px;
  margin: 0 auto;
}

.ab_timeline-line {
  position: absolute;
  left: 50%;
  top: 0;
  bottom: 0;
  width: 4px;
  background: linear-gradient(to bottom, #009ffd, #2a2a72);
  transform: translateX(-50%);
}

.ab_timeline-item {
  position: relative;
  width: 50%;
  padding: 20px;
  box-sizing: border-box;
}

.ab_timeline-item:nth-child(odd) {
  left: 0;
  text-align: right;
}

.ab_timeline-item:nth-child(even) {
  left: 50%;
}

.ab_timeline-year {
  font-size: 1.3rem;
  font-weight: bold;
  background: #009ffd;
  color: #fff;
  display: inline-block;
  padding: 10px 15px;
  border-radius: 50px;
  margin-bottom: 10px;
}

.ab_timeline-content {
  background: #fff;
  padding: 15px 20px;
  border-radius: 12px;
  box-shadow: 0 6px 18px rgba(0,0,0,0.08);
  font-size: 0.95rem;
  color: #444;
}

.ab_timeline-item:nth-child(odd) .ab_timeline-content {
  margin-right: 20px;
}

.ab_timeline-item:nth-child(even) .ab_timeline-content {
  margin-left: 20px;
}



/* Differentiators (Why Choose Us) */
.ab_diff-icon {
  font-size: 2.8rem;
  color: #f57c00;
  margin-bottom: 15px;
}
.ab_diff-card {
  background: #fff;
  border-radius: 12px;
  padding: 30px;
  text-align: center;
  box-shadow: 0 6px 15px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}
.ab_diff-card:hover {
  transform: translateY(-8px);
}

/* Testimonials */
.ab_testimonial-card {
  background: #fff;
  padding: 25px 20px;
  border-radius: 16px;
  box-shadow: 0 8px 25px rgba(0,0,0,0.08);
  text-align: center;
  max-width: 350px;
  margin: auto;
}

.ab_client-photo {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  margin-bottom: 15px;
  object-fit: cover;
  border: 3px solid #009ffd;
}

.ab_client-name {
  font-weight: bold;
  color: #222;
  margin-top: 10px;
}

.ab_client-rating {
  color: #f7b500;
  font-size: 18px;
  margin-top: 8px;
}

.swiper-pagination {
  margin-top: 15px;
  position: relative;
}

/* Awards */
.ab_awards-logos img {
  max-height: 70px;
  margin: 0 15px;
  opacity: 0.8;
  transition: opacity 0.3s ease;
}
.ab_awards-logos img:hover {
  opacity: 1;
}

/* Logo Carousel */
.ab_logo-carousel img {
  max-height: 60px;
  opacity: 0.8;
  transition: opacity 0.3s ease;
}
.ab_logo-carousel img:hover {
  opacity: 1;
}

/* CTA */
.ab_cta {
  background: #002219;
  color: #fff;
  border-radius: 10px;
  padding: 40px;
  text-align: center;
}
.ab_cta a.btn {
  font-size: 1.3rem;
  padding: 15px 45px;
  border-radius: 50px;
}

/* Responsive tweaks */
@media (max-width: 767px) {
  .ab_hero-content h1 {
    font-size: 2.4rem;
  }
  .ab_hero-content p {
    font-size: 1rem;
  }
  .ab_md-message {
    flex-direction: column;
    text-align: center;
  }
  .ab_md-text blockquote::before {
    left: 50%;
    transform: translateX(-50%);
  }
  .ab_md-photo {
    max-width: 100%;
  }
}
</style>

</head><body>

<!-- HERO SECTION -->
<section class="ab_hero">
  <div class="ab_hero-content" data-animate>
    <h1 class="ab_hero-title">We Weave Innovation</h1>
    <p class="ab_hero-subtitle">Premium textile solutions, sustainability, and trust at heart.</p>
    <a href="#about" class="ab_btn-primary">Explore Our Story</a>
  </div>
</section>

<!-- WHO WE ARE -->
<section class="ab_section ab_text-center" id="about">
  <h2 class="ab_title" data-animate>Who We Are</h2>
  <p class="ab_desc" data-animate>
    Founded in 2000, <strong>Divine Textile</strong> redefines the textile industry by blending
    craftsmanship with cutting-edge technology. Our commitment to quality, sustainability, and innovation
    has earned us a reputation as a trusted global partner.
  </p>
</section>

<!-- OUR CONCERNS -->
<section class="ab_section" id="concerns">
  <h2 class="ab_title ab_text-center" data-animate>Our Concerns</h2>
  <div class="swiper ab_concerns-carousel" data-animate>
    <div class="swiper-wrapper">
      <!-- Example Concern Card -->
      <div class="swiper-slide ab_concern-card">
        <img src="img/Concerns/Fabrics.JPG" alt="Divine Fabrics Ltd." />
        <h5>Divine Fabrics Ltd.</h5>
        <p>Innovative fabrics with sustainable processes.</p>
      </div>
      <!-- Repeat for others -->
    </div>
  </div>
</section>

<!-- MD MESSAGE -->
<section class="ab_section ab_md-message" id="md-message">
  <h2 class="ab_title ab_text-center" data-animate>Message from Our Managing Director</h2>
  <div class="ab_md-content" data-animate>
    <div class="ab_md-photo">
      <img src="img/md-photo.jpg" alt="Managing Director" />
    </div>
    <div class="ab_md-text">
      <h3>John Smith</h3>
      <blockquote>
        At Divine Textile, we don’t just make fabric; we create experiences woven with passion,
        innovation, and responsibility. Our commitment to sustainable growth and customer success
        drives everything we do.
      </blockquote>
      <div class="ab_signature">John Smith</div>
    </div>
  </div>
</section>

<!-- TOP MANAGEMENT -->
<section class="ab_section" id="top-management">
  <h2 class="ab_title ab_text-center" data-animate>Top Management</h2>
  <div class="ab_team-grid">
    <div class="ab_team-card" data-animate>
      <img src="img/7.png" alt="Chairman" />
      <h4>Fatema Zaman</h4>
      <p>Chairman</p>
    </div>
    <!-- Repeat for others -->
  </div>
</section>

<!-- WHY CHOOSE US -->
<section class="ab_section" id="why-choose-us">
  <h2 class="ab_title ab_text-center" data-animate>Why Choose Us</h2>
  <div class="ab_features-grid">
    <div class="ab_feature-card" data-animate>
      <i class="fas fa-check-circle"></i>
      <h4>Quality Assurance</h4>
      <p>Strict quality controls ensure premium products every time.</p>
    </div>
    <!-- Repeat -->
  </div>
</section>

<!-- MILESTONES -->
<section class="ab_section" id="milestones">
  <h2 class="ab_title ab_text-center" data-animate>Our Milestones</h2>
  <div class="ab_timeline" data-animate>
    <div class="ab_timeline-item"><h5>2000</h5><p>Company founded with a vision to innovate.</p></div>
    <!-- Repeat -->
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="ab_section" id="testimonials">
  <h2 class="ab_title ab_text-center" data-animate>What Our Clients Say</h2>
  <div class="swiper ab_testimonials-carousel" data-animate>
    <div class="swiper-wrapper">
      <div class="swiper-slide ab_testimonial-slide">
        <p>"Divine Textile consistently delivers top quality fabrics on time. Our partnership is invaluable."</p>
        <div class="ab_client-name">— Alice Cooper</div>
      </div>
      <!-- Repeat -->
    </div>
  </div>
</section>

<!-- AWARDS -->
<section class="ab_section ab_text-center" id="awards">
  <h2 class="ab_title" data-animate>Awards & Certifications</h2>
  <div class="ab_awards-logos">
    <img src="img/award1.png" alt="Award 1" />
    <!-- Repeat -->
  </div>
</section>

<!-- BRANDS -->
<section class="ab_section ab_text-center">
  <h3 class="ab_title" data-animate>Trusted by Global Brands</h3>
  <div class="swiper ab_logo-carousel" data-animate>
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="img/brand1.png" alt="Brand 1" /></div>
      <!-- Repeat -->
    </div>
  </div>
</section>

<!-- CALL TO ACTION -->
<section class="ab_section ab_cta">
  <h2 data-animate>Ready to Work with Us?</h2>
  <a href="contact.php" class="ab_btn-primary">Contact Us</a>
</section>


<!-- JS LIBRARIES -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>

<script defer>
  document.addEventListener('DOMContentLoaded', () => {
    // GSAP animations
    gsap.utils.toArray('[data-animate]').forEach(el => {
      gsap.from(el, { opacity: 0, y: 30, duration: 1 });
    });

    // Swipers
    new Swiper('.ab_concerns-carousel', { slidesPerView: 3, spaceBetween: 20, loop: true, autoplay: { delay: 2500 } });
    new Swiper('.ab_testimonials-carousel', { slidesPerView: 1, loop: true, autoplay: { delay: 4000 } });
    new Swiper('.ab_logo-carousel', { slidesPerView: 4, loop: true, autoplay: { delay: 1800 } });
  });
</script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>
</body>
