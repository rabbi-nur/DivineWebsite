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

<?php include('head.php'); ?>

<!-- Swiper CSS -->


<style>
  h1,h2,h3,h4 {
  font-weight: 700;
}
/* Parallax Hero */
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

</head>
<body>
<!-- Loader -->
<!-- <div id="loader-wrapper">
  <div class="loader-logo">
    <img src="img/Divine Logo.png" alt="Divine Logo" />
  </div>
</div> -->

<?php include('header.php'); ?>

<!-- Hero Section -->
<section class="ab_hero">
  <div class="ab_hero-content" data-animate>
    <h1>We Weave Innovation</h1>
    <p>Premium textile solutions, sustainability, and trust at heart.</p>
    <a href="#" class="cta-btn"><i class="fa-solid fa-leaf "></i>Explore More</a><br><br>
  </div>
</section>

<!-- About -->
<section class="ab_about-section" id="about">
  <div class="ab_container">
    <div class="ab_about-content" data-animate>
      <img src="img/DJI_0178.webp" alt="About Divine Textile" class="ab_about-img">
      <h2 class="ab_section-title">Who We Are</h2>
      <span class="ab_title-line"></span>
      <p class="ab_about-text">
        Since 2000, <strong>Divine Textile</strong> has been at the forefront of innovation,
        blending traditional craftsmanship with cutting-edge technology. Our unwavering
        commitment to <em>quality, sustainability, and customer trust</em> has earned us
        recognition as a global leader in the textile industry.
      </p>
    </div>
  </div>
</section>

<!-- Mission, Vision, Values -->
<section class="ab_container" id="mvv">
  <div class="row g-4 ab_text-center">
    <div class="col-md-4" data-animate>
      <div class="ab_mvv-card">
        <i class="fas fa-bullseye"></i>
        <h3>Mission</h3>
        <p>To produce world-class textiles that combine comfort, durability, and style.</p>
      </div>
    </div>
    <div class="col-md-4" data-animate>
      <div class="ab_mvv-card">
        <i class="fas fa-eye"></i>
        <h3>Vision</h3>
        <p>To be the global leader in sustainable textile solutions.</p>
      </div>
    </div>
    <div class="col-md-4" data-animate>
      <div class="ab_mvv-card">
        <i class="fas fa-heart"></i>
        <h3>Values</h3>
        <p>Integrity, innovation, and customer satisfaction drive everything we do.</p>
      </div>
    </div>
  </div>
</section>

<!-- Our Concerns (Group Companies) -->
<section class="ab_showcase" id="concerns">
  <div class="ab_container">
    <h2 class="ab_title" data-animate>Our Group Companies</h2>
    <p class="ab_subtitle" data-animate>
      Innovation across industries, driven by one vision: Excellence.
    </p>

    <div class="ab_scroll-strip">
      <!-- Each Concern -->
      <div class="ab_card" style="background-image: url('img/Concerns/Fabrics.JPG');">
        <div class="ab_overlay">
          <img src="img/Concerns/fabrics-logo.png" alt="Fabrics Logo" class="ab_logo" />
          <h5>Divine Fabrics Ltd.</h5>
          <p>Premium Knit Fabrics for Global Brands</p>
        </div>
      </div>

      <div class="ab_card" style="background-image: url('img/Concerns/textile.JPG');">
        <div class="ab_overlay">
          <img src="img/Concerns/textile-logo.png" alt="Textile Logo" class="ab_logo" />
          <h5>Divine Textile Ltd.</h5>
          <p>End-to-End Textile Solutions</p>
        </div>
      </div>
      <div class="ab_card" style="background-image: url('img/Concerns/yarn.JPG');">
        <div class="ab_overlay">
          <img src="img/Concerns/yarn-logo.png" alt="Yarn Logo" class="ab_logo" />
          <h5>Divine Yarn Ltd.</h5>
          <p>High-Quality Yarn Production</p>
        </div>
      </div>
      <div class="ab_card" style="background-image: url('img/Concerns/dyeing.JPG');">
        <div class="ab_overlay">
          <img src="img/Concerns/dyeing-logo.png" alt="Dyeing Logo" class="ab_logo" />
          <h5>Divine Dyeing Ltd.</h5>
          <p>Advanced Dyeing & Finishing Solutions</p>
        </div>
      </div>
      <div class="ab_card" style="background-image: url('img/Concerns/apparel.JPG');">
        <div class="ab_overlay">
          <img src="img/Concerns/apparel-logo.png" alt="Apparel Logo" class="ab_logo" />
          <h5>Divine Apparel Ltd.</h5>
          <p>Ready-Made Garments for Global Markets</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ab_container ab_md-section" id="md-message">
  <h3 class="ab_text-center mb-5" data-animate>Message from Our Managing Director</h3>
  <div class="ab_md-wrapper">
    <!-- Photo -->
    <div class="ab_md-photo" data-animate>
      <img src="img/MD Sir.png" alt="Managing Director" />
    </div>

    <!-- Text -->
    <div class="ab_md-text" data-animate>
      <div class="ab_quote-icon"><i class="fas fa-quote-left"></i></div>
      <h3 class="ab_md-name">Md. Hasanuzzaman</h3>
      <p class="ab_md-title">Managing Director</p>
      <blockquote>
        “Ever since our inception in 1997 it has been our sole purpose to produce high quality apparels made to meet the needs of the buyer, with inch-perfect accuracy and high reliablity
I can say with pride that Divine Group is one of the few elite private sector business groups who have been able to balance high levels of quality, production and social responsibility. To the point that maintaining quality and social standards have become second nature to our operating procedures.

In Conclusion, if I was to sum up this company in a few words, it would be that we are a family. From the managerial desks to the production floors, we are a family that synergizes together to be greater than the sum of its individual components, and we excel only through the dedication of all our members.”
      </blockquote>
      <div class="ab_signature">Md. Hasanuzzaman</div>
    </div>
  </div>
</section>

<!-- Top Management -->
<section class="ab_container" id="top-management">
  <h2 class="ab_text-center mb-5" data-animate>Our Leadership</h2>
  <div class="ab_team-grid">
    
    <!-- Team Member -->
    <div class="ab_team-card" data-animate>
      <div class="ab_team-photo">
        <img src="img/7.png" alt="Chairman">
        <div class="ab_team-overlay">
          <p>Visionary leader driving innovation and excellence at Divine Group.</p>
          <div class="ab_team-social">
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
          </div>
        </div>
      </div>
      <h4>Fatema Zaman</h4>
      <span class="ab_role">Chairman</span>
    </div>

    <!-- Repeat for others -->
    <div class="ab_team-card" data-animate>
      <div class="ab_team-photo">
        <img src="img/1.png" alt="Managing Director">
        <div class="ab_team-overlay">
          <p>Strategic leader shaping the future of Divine Textile globally.</p>
          <div class="ab_team-social">
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
          </div>
        </div>
      </div>
      <h4>Md. Hasanuzzaman</h4>
      <span class="ab_role">Managing Director</span>
    </div>
    
    <!-- Add more members similarly -->
    <div class="ab_team-card" data-animate>
      <div class="ab_team-photo">
        <img src="img/3.png" alt="Director">
        <div class="ab_team-overlay">
          <p>Driving operational excellence and efficiency at Divine Group.</p>
          <div class="ab_team-social">
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
          </div>
        </div>
      </div>
      <h4>Saif Hassan</h4>
      <span class="ab_role">Director</span>
    </div>

    <div class="ab_team-card" data-animate>
      <div class="ab_team-photo">
        <img src="img/7.png" alt="Finance Head">
        <div class="ab_team-overlay">
          <p>Expert in financial strategy and risk management.</p>
          <div class="ab_team-social">
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
          </div>
        </div>
      </div>
      <h4>Samaya Hassan</h4>
      <span class="ab_role">Director</span>
    </div>

    <div class="ab_team-card" data-animate>
      <div class="ab_team-photo">
        <img src="img/7.png" alt="Finance Head">
        <div class="ab_team-overlay">
          <p>Expert in financial strategy and risk management.</p>
          <div class="ab_team-social">
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
          </div>
        </div>
      </div>
      <h4>Rifat Haider Niloy</h4>
      <span class="ab_role">Director</span>
    </div>

  </div>
</section>

<!-- Why Choose Us -->
<section class="ab_container" id="why-choose-us">
  <h2 class="ab_text-center mb-5" data-animate>Why Choose Us</h2>
  <div class="ab_why-grid">
    <!-- Card 1 -->
    <div class="ab_why-card" data-animate>
      <div class="ab_why-icon"><i class="fas fa-check-circle"></i></div>
      <h4>Quality Assurance</h4>
      <p>Strict quality controls to deliver premium products every time.</p>
    </div>
    <!-- Card 2 -->
    <div class="ab_why-card" data-animate>
      <div class="ab_why-icon"><i class="fas fa-leaf"></i></div>
      <h4>Sustainability</h4>
      <p>Committed to eco-friendly processes and materials.</p>
    </div>
    <!-- Card 3 -->
    <div class="ab_why-card" data-animate>
      <div class="ab_why-icon"><i class="fas fa-globe"></i></div>
      <h4>Global Reach</h4>
      <p>Strong international presence and partnerships.</p>
    </div>
  </div>
</section>

<section class="ab_container" id="milestones">
  <h2 class="ab_text-center mb-5" data-animate>Our Milestones</h2>
  <div class="ab_timeline">
    <div class="ab_timeline-line"></div>

    <div class="ab_timeline-item" data-animate>
      <div class="ab_timeline-year">2000</div>
      <div class="ab_timeline-content">
        <p>Company founded with vision to innovate textile industry.</p>
      </div>
    </div>

    <div class="ab_timeline-item" data-animate>
      <div class="ab_timeline-year">2005</div>
      <div class="ab_timeline-content">
        <p>Expanded knitting and dyeing capabilities.</p>
      </div>
    </div>

    <div class="ab_timeline-item" data-animate>
      <div class="ab_timeline-year">2012</div>
      <div class="ab_timeline-content">
        <p>Introduced eco-friendly production lines.</p>
      </div>
    </div>

    <div class="ab_timeline-item" data-animate>
      <div class="ab_timeline-year">2018</div>
      <div class="ab_timeline-content">
        <p>Launched international partnerships.</p>
      </div>
    </div>

    <div class="ab_timeline-item" data-animate>
      <div class="ab_timeline-year">2023</div>
      <div class="ab_timeline-content">
        <p>Reached 12,000 employees worldwide.</p>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="ab_container" id="testimonials">
  <h2 class="ab_text-center ab_mb-5" data-animate>What Our Clients Say</h2>
  <div class="swiper ab_testimonials-carousel" data-animate>
    <div class="swiper-wrapper">
      
      <!-- Testimonial 1 -->
      <div class="swiper-slide ab_testimonial-card">
        <div class="ab_testimonial-content">
          <img src="img/team-1.jpg" alt="Alice Cooper" class="ab_client-photo">
          <p>"Divine Textile consistently delivers top quality fabrics on time. Our partnership is invaluable."</p>
          <div class="ab_client-name">Alice Cooper</div>
          <div class="ab_client-rating">
            ⭐⭐⭐⭐⭐
          </div>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="swiper-slide ab_testimonial-card">
        <div class="ab_testimonial-content">
          <img src="img/testimonial-1.jpg" alt="Michael Green" class="ab_client-photo">
          <p>"Their commitment to sustainability aligns perfectly with our brand values."</p>
          <div class="ab_client-name">Michael Green</div>
          <div class="ab_client-rating">
            ⭐⭐⭐⭐⭐
          </div>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="swiper-slide ab_testimonial-card">
        <div class="ab_testimonial-content">
          <img src="img/testimonial-4.jpg" alt="Sarah Lee" class="ab_client-photo">
          <p>"Excellent customer support and innovative textile solutions."</p>
          <div class="ab_client-name">Sarah Lee</div>
          <div class="ab_client-rating">
            ⭐⭐⭐⭐⭐
          </div>
        </div>
      </div>

    </div>
    <!-- Pagination Dots -->
    <div class="swiper-pagination"></div>
  </div>
</section>

<?php include('footer.php'); ?>

<!-- JS Libraries -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>

<script defer>
  window.addEventListener('DOMContentLoaded', () => {
    // GSAP fade-up animation for elements with data-animate
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

    // Animated Counters
    const counters = document.querySelectorAll('.ab_counter');
    counters.forEach(counter => {
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

    // 3D Tilt
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

// Auto Scroll
const strip = document.querySelector('.ab_scroll-strip');
let scrollSpeed = 1;
setInterval(() => {
  strip.scrollLeft += scrollSpeed;
  if (strip.scrollLeft >= strip.scrollWidth - strip.clientWidth) {
    strip.scrollLeft = 0;
  }
}, 30);

    // Testimonials Carousel
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
</script>

<!-- Font Awesome CDN for icons -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  rel="stylesheet"
/>
</html>
