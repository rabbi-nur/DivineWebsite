<?php
/**
 * About Page Content - Sleek Modern Design
 * Only contains the body content - layout is handled by framework
 */

// Include page helpers
require_once __DIR__ . '/../includes/page-helper.php';
?>

<!-- Modern Hero Section with Parallax Effect -->
<section class="sleek-hero">
    <div class="hero-background">
        <div class="hero-overlay"></div>
        <video autoplay muted loop class="hero-video">
            <source src="img/hero-video.mp4" type="video/mp4">
            <!-- Fallback image if video doesn't load -->
        </video>
        <div class="hero-fallback" style="background-image: url('img/about-hero.jpg');"></div>
    </div>
    <div class="hero-content">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="hero-badge">
                        <span class="badge-text">Since 1997</span>
                    </div>
                    <h1 class="hero-title">
                        Crafting Tomorrow's
                        <span class="gradient-text">Textiles</span>
                    </h1>
                    <p class="hero-subtitle">
                        Where innovation meets tradition, and sustainability shapes the future of fashion
                    </p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <div class="stat-number">25+</div>
                            <div class="stat-label">Years Experience</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">50+</div>
                            <div class="stat-label">Countries Served</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">1000+</div>
                            <div class="stat-label">Global Partners</div>
                        </div>
                    </div>
                    <div class="hero-actions">
                        <?php render_cta_button('Our Story', '#story', 'fa-solid fa-arrow-down'); ?>
                        <a href="./?page=contact" class="btn-secondary">
                            <span>Get in Touch</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-indicator">
        <div class="scroll-line"></div>
    </div>
</section>

<!-- Story Section with Split Layout -->
<section id="story" class="story-section">
    <div class="container-fluid px-0">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6">
                <div class="story-content">
                    <div class="section-badge">Our Story</div>
                    <h2 class="section-title">
                        Weaving Excellence
                        <span class="highlight">Since 1997</span>
                    </h2>
                    <p class="story-text">
                        What began as a vision to revolutionize textile manufacturing has evolved into a global 
                        enterprise that sets industry standards. Divine Group combines decades of expertise with 
                        cutting-edge innovation to deliver textiles that don't just meet expectations—they exceed them.
                    </p>
                    <div class="story-highlights">
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <div class="highlight-content">
                                <h4>Industry Pioneer</h4>
                                <p>First to introduce sustainable practices in Bangladesh textile industry</p>
                            </div>
                        </div>
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div class="highlight-content">
                                <h4>Global Reach</h4>
                                <p>Serving premium brands across 50+ countries worldwide</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="story-visual">
                    <div class="image-stack">
                        <img src="img/about-1.jpg" alt="Divine Group Heritage" class="img-main">
                        <img src="img/about-2.jpg" alt="Modern Facility" class="img-floating">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modern Mission, Vision, Values -->
<section class="mvv-section">
    <div class="container">
        <div class="section-header text-center">
            <div class="section-badge">Our Foundation</div>
            <h2 class="section-title">Built on Strong Values</h2>
        </div>
        <div class="mvv-grid">
            <div class="mvv-card mission-card">
                <div class="card-background"></div>
                <div class="card-content">
                    <div class="card-icon">
                        <div class="icon-wrapper">
                            <i class="fas fa-bullseye"></i>
                        </div>
                    </div>
                    <h3>Mission</h3>
                    <p>To revolutionize textile manufacturing through sustainable innovation, delivering world-class products that enhance lives while protecting our planet.</p>
                    <div class="card-accent"></div>
                </div>
            </div>
            
            <div class="mvv-card vision-card">
                <div class="card-background"></div>
                <div class="card-content">
                    <div class="card-icon">
                        <div class="icon-wrapper">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <h3>Vision</h3>
                    <p>To be the global benchmark for sustainable textile excellence, inspiring industry transformation and setting new standards for responsible manufacturing.</p>
                    <div class="card-accent"></div>
                </div>
            </div>
            
            <div class="mvv-card values-card">
                <div class="card-background"></div>
                <div class="card-content">
                    <div class="card-icon">
                        <div class="icon-wrapper">
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                    <h3>Values</h3>
                    <p>Integrity in every thread, innovation in every process, and unwavering commitment to customer success and environmental stewardship.</p>
                    <div class="card-accent"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sleek Group Companies Section -->
<section class="companies-section">
    <div class="container">
        <div class="section-header text-center">
            <div class="section-badge">Our Ecosystem</div>
            <h2 class="section-title">Integrated Excellence</h2>
            <p class="section-subtitle">Five specialized companies, one unified vision of textile innovation</p>
        </div>
        
        <div class="companies-showcase">
            <div class="company-card" data-company="fabrics">
                <div class="company-visual">
                    <div class="company-bg" style="background-image: url('img/fabrics-bg.jpg');"></div>
                    <div class="company-overlay"></div>
                    <div class="company-logo">
                        <img src="img/Concerns/fabrics-logo.png" alt="Divine Fabrics" />
                    </div>
                </div>
                <div class="company-content">
                    <h3>Divine Fabrics Ltd.</h3>
                    <p>Premium knit fabrics engineered for global fashion brands</p>
                    <div class="company-features">
                        <span class="feature-tag">Premium Quality</span>
                        <span class="feature-tag">Global Brands</span>
                    </div>
                </div>
            </div>

            <div class="company-card" data-company="textile">
                <div class="company-visual">
                    <div class="company-bg" style="background-image: url('img/textile-bg.jpg');"></div>
                    <div class="company-overlay"></div>
                    <div class="company-logo">
                        <img src="img/Concerns/textile-logo.png" alt="Divine Textile" />
                    </div>
                </div>
                <div class="company-content">
                    <h3>Divine Textile Ltd.</h3>
                    <p>Comprehensive textile solutions from concept to completion</p>
                    <div class="company-features">
                        <span class="feature-tag">End-to-End</span>
                        <span class="feature-tag">Innovation</span>
                    </div>
                </div>
            </div>

            <div class="company-card" data-company="yarn">
                <div class="company-visual">
                    <div class="company-bg" style="background-image: url('img/yarn-bg.jpg');"></div>
                    <div class="company-overlay"></div>
                    <div class="company-logo">
                        <img src="img/Concerns/yarn-logo.png" alt="Divine Yarn" />
                    </div>
                </div>
                <div class="company-content">
                    <h3>Divine Yarn Ltd.</h3>
                    <p>Superior yarn production with advanced spinning technology</p>
                    <div class="company-features">
                        <span class="feature-tag">High Quality</span>
                        <span class="feature-tag">Advanced Tech</span>
                    </div>
                </div>
            </div>

            <div class="company-card" data-company="dyeing">
                <div class="company-visual">
                    <div class="company-bg" style="background-image: url('img/dyeing-bg.jpg');"></div>
                    <div class="company-overlay"></div>
                    <div class="company-logo">
                        <img src="img/Concerns/dyeing-logo.png" alt="Divine Dyeing" />
                    </div>
                </div>
                <div class="company-content">
                    <h3>Divine Dyeing Ltd.</h3>
                    <p>Eco-friendly dyeing and finishing with vibrant results</p>
                    <div class="company-features">
                        <span class="feature-tag">Eco-Friendly</span>
                        <span class="feature-tag">Vibrant Colors</span>
                    </div>
                </div>
            </div>

            <div class="company-card" data-company="apparel">
                <div class="company-visual">
                    <div class="company-bg" style="background-image: url('img/apparel-bg.jpg');"></div>
                    <div class="company-overlay"></div>
                    <div class="company-logo">
                        <img src="img/Concerns/apparel-logo.png" alt="Divine Apparel" />
                    </div>
                </div>
                <div class="company-content">
                    <h3>Divine Apparel Ltd.</h3>
                    <p>Ready-made garments crafted for international markets</p>
                    <div class="company-features">
                        <span class="feature-tag">Global Markets</span>
                        <span class="feature-tag">Premium Craft</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modern Leadership Message -->
<section class="leadership-message">
    <div class="container">
        <div class="message-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="leader-visual">
                        <div class="leader-frame">
                            <img src="img/MD Sir.png" alt="Md. Hasanuzzaman - Managing Director" class="leader-photo">
                            <div class="leader-decoration"></div>
                        </div>
                        <div class="leader-info">
                            <h3>Md. Hasanuzzaman</h3>
                            <p>Managing Director</p>
                            <div class="leader-credentials">
                                <span class="credential">25+ Years Experience</span>
                                <span class="credential">Industry Pioneer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="message-content">
                        <div class="quote-mark">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="message-text">
                            <p class="lead-quote">
                                "Since our inception in 1997, our unwavering commitment has been to deliver 
                                exceptional textiles that exceed buyer expectations through precision and reliability."
                            </p>
                            <p>
                                Divine Group stands among the elite private sector organizations that have 
                                successfully balanced quality excellence, production efficiency, and social 
                                responsibility. These values have become integral to our operational DNA.
                            </p>
                            <p class="closing-quote">
                                "We are more than a company—we are a family. From executive leadership to 
                                production floors, our collective synergy creates something greater than 
                                the sum of our parts, powered by the dedication of every team member."
                            </p>
                        </div>
                        <div class="message-signature">
                            <div class="signature-line"></div>
                            <span class="signature-name">Md. Hasanuzzaman</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modern Leadership Team -->
<section class="leadership-team">
    <div class="container">
        <div class="section-header text-center">
            <div class="section-badge">Leadership</div>
            <h2 class="section-title">Visionary Leaders</h2>
            <p class="section-subtitle">Meet the exceptional minds driving Divine Group's success</p>
        </div>
        
        <div class="leadership-grid">
            <div class="leader-card featured-leader">
                <div class="leader-image">
                    <img src="img/7.png" alt="Fatema Zaman">
                    <div class="leader-overlay">
                        <div class="leader-social">
                            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
                <div class="leader-info">
                    <h3>Fatema Zaman</h3>
                    <p class="leader-role">Chairman</p>
                    <p class="leader-bio">Visionary leader driving innovation and sustainable excellence across Divine Group's global operations.</p>
                    <div class="leader-achievements">
                        <span class="achievement">Industry Pioneer</span>
                        <span class="achievement">Sustainability Advocate</span>
                    </div>
                </div>
            </div>

            <div class="leader-card">
                <div class="leader-image">
                    <img src="img/1.png" alt="Md. Hasanuzzaman">
                    <div class="leader-overlay">
                        <div class="leader-social">
                            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
                <div class="leader-info">
                    <h3>Md. Hasanuzzaman</h3>
                    <p class="leader-role">Managing Director</p>
                    <p class="leader-bio">Strategic leader shaping Divine Group's global expansion and technological advancement.</p>
                </div>
            </div>

            <div class="leader-card">
                <div class="leader-image">
                    <img src="img/3.png" alt="Saif Hassan">
                    <div class="leader-overlay">
                        <div class="leader-social">
                            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
                <div class="leader-info">
                    <h3>Saif Hassan</h3>
                    <p class="leader-role">Director</p>
                    <p class="leader-bio">Driving operational excellence and efficiency across all manufacturing processes.</p>
                </div>
            </div>

            <div class="leader-card">
                <div class="leader-image">
                    <img src="img/7.png" alt="Samaya Hassan">
                    <div class="leader-overlay">
                        <div class="leader-social">
                            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
                <div class="leader-info">
                    <h3>Samaya Hassan</h3>
                    <p class="leader-role">Director</p>
                    <p class="leader-bio">Expert in financial strategy and sustainable business growth initiatives.</p>
                </div>
            </div>

            <div class="leader-card">
                <div class="leader-image">
                    <img src="img/7.png" alt="Rifat Haider Niloy">
                    <div class="leader-overlay">
                        <div class="leader-social">
                            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
                <div class="leader-info">
                    <h3>Rifat Haider Niloy</h3>
                    <p class="leader-role">Director</p>
                    <p class="leader-bio">Leading innovation in technology integration and digital transformation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us - Modern Design -->
<section class="why-choose-section">
    <div class="container">
        <div class="section-header text-center">
            <div class="section-badge">Our Advantage</div>
            <h2 class="section-title">Why Industry Leaders Choose Us</h2>
        </div>
        
        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-visual">
                    <div class="advantage-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="advantage-number">01</div>
                </div>
                <div class="advantage-content">
                    <h3>Uncompromising Quality</h3>
                    <p>ISO-certified processes and rigorous quality controls ensure every product meets the highest international standards.</p>
                    <ul class="advantage-features">
                        <li>Multi-stage quality checks</li>
                        <li>International certifications</li>
                        <li>Zero-defect commitment</li>
                    </ul>
                </div>
            </div>

            <div class="advantage-card">
                <div class="advantage-visual">
                    <div class="advantage-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <div class="advantage-number">02</div>
                </div>
                <div class="advantage-content">
                    <h3>Sustainability Leadership</h3>
                    <p>Pioneering eco-friendly manufacturing with renewable energy, water conservation, and zero-waste initiatives.</p>
                    <ul class="advantage-features">
                        <li>Carbon-neutral operations</li>
                        <li>Sustainable materials</li>
                        <li>Circular economy practices</li>
                    </ul>
                </div>
            </div>

            <div class="advantage-card">
                <div class="advantage-visual">
                    <div class="advantage-icon">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <div class="advantage-number">03</div>
                </div>
                <div class="advantage-content">
                    <h3>Global Excellence</h3>
                    <p>Serving 50+ countries with localized support, ensuring seamless international partnerships and delivery.</p>
                    <ul class="advantage-features">
                        <li>Worldwide presence</li>
                        <li>Local expertise</li>
                        <li>Cultural understanding</li>
                    </ul>
                </div>
            </div>

            <div class="advantage-card">
                <div class="advantage-visual">
                    <div class="advantage-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="advantage-number">04</div>
                </div>
                <div class="advantage-content">
                    <h3>Innovation Drive</h3>
                    <p>Continuous R&D investment in cutting-edge technology and sustainable manufacturing processes.</p>
                    <ul class="advantage-features">
                        <li>Advanced machinery</li>
                        <li>Research partnerships</li>
                        <li>Future-ready solutions</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modern Timeline -->
<section class="timeline-section">
    <div class="container">
        <div class="section-header text-center">
            <div class="section-badge">Our Journey</div>
            <h2 class="section-title">Milestones of Excellence</h2>
            <p class="section-subtitle">25+ years of innovation, growth, and industry leadership</p>
        </div>
        
        <div class="modern-timeline">
            <div class="timeline-track"></div>
            
            <div class="timeline-milestone" data-year="1997">
                <div class="milestone-marker">
                    <div class="marker-dot"></div>
                    <div class="marker-year">1997</div>
                </div>
                <div class="milestone-content">
                    <h3>Foundation</h3>
                    <p>Divine Group established with a vision to revolutionize textile manufacturing in Bangladesh.</p>
                </div>
            </div>

            <div class="timeline-milestone" data-year="2005">
                <div class="milestone-marker">
                    <div class="marker-dot"></div>
                    <div class="marker-year">2005</div>
                </div>
                <div class="milestone-content">
                    <h3>Expansion</h3>
                    <p>Expanded operations with advanced knitting and dyeing facilities, doubling production capacity.</p>
                </div>
            </div>

            <div class="timeline-milestone" data-year="2012">
                <div class="milestone-marker">
                    <div class="marker-dot"></div>
                    <div class="marker-year">2012</div>
                </div>
                <div class="milestone-content">
                    <h3>Sustainability Pioneer</h3>
                    <p>First in Bangladesh to introduce comprehensive eco-friendly production lines and renewable energy.</p>
                </div>
            </div>

            <div class="timeline-milestone" data-year="2018">
                <div class="milestone-marker">
                    <div class="marker-dot"></div>
                    <div class="marker-year">2018</div>
                </div>
                <div class="milestone-content">
                    <h3>Global Partnerships</h3>
                    <p>Launched strategic international partnerships, expanding to 50+ countries worldwide.</p>
                </div>
            </div>

            <div class="timeline-milestone" data-year="2023">
                <div class="milestone-marker">
                    <div class="marker-dot"></div>
                    <div class="marker-year">2023</div>
                </div>
                <div class="milestone-content">
                    <h3>Industry Leader</h3>
                    <p>Achieved 12,000+ employees globally and recognized as a sustainability leader in textile manufacturing.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modern Testimonials -->
<section class="testimonials-section">
    <div class="container">
        <div class="section-header text-center">
            <div class="section-badge">Client Success</div>
            <h2 class="section-title">Trusted by Industry Leaders</h2>
            <p class="section-subtitle">Hear from our global partners about their Divine Group experience</p>
        </div>
        
        <div class="testimonials-showcase">
            <div class="testimonial-card featured">
                <div class="testimonial-content">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-text">
                        "Divine Group has been our trusted partner for over 8 years. Their commitment to quality, 
                        sustainability, and innovation consistently exceeds our expectations. They don't just deliver 
                        products—they deliver solutions."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="img/testimonial-1.jpg" alt="Sarah Johnson">
                        </div>
                        <div class="author-info">
                            <h4>Sarah Johnson</h4>
                            <p>Global Sourcing Director</p>
                            <span class="company">Premium Fashion Co.</span>
                        </div>
                    </div>
                    <div class="testimonial-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="rating-text">Exceptional Partnership</span>
                    </div>
                </div>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p>"Their sustainable practices align perfectly with our brand values. Quality never compromised."</p>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="img/testimonial-2.jpg" alt="Michael Chen">
                            </div>
                            <div class="author-info">
                                <h4>Michael Chen</h4>
                                <p>Sustainability Manager</p>
                                <span class="company">EcoFashion Ltd.</span>
                            </div>
                        </div>
                        <div class="testimonial-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p>"Exceptional customer support and innovative solutions. They understand our global needs."</p>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="img/testimonial-3.jpg" alt="Emma Rodriguez">
                            </div>
                            <div class="author-info">
                                <h4>Emma Rodriguez</h4>
                                <p>Operations Director</p>
                                <span class="company">Global Textiles Inc.</span>
                            </div>
                        </div>
                        <div class="testimonial-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p>"Consistent quality, on-time delivery, and competitive pricing. A reliable partner for growth."</p>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="img/testimonial-4.jpg" alt="David Kim">
                            </div>
                            <div class="author-info">
                                <h4>David Kim</h4>
                                <p>Procurement Head</p>
                                <span class="company">Fashion Forward</span>
                            </div>
                        </div>
                        <div class="testimonial-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="cta-text">
                        <h2>Ready to Experience Divine Excellence?</h2>
                        <p>Join industry leaders who trust Divine Group for their textile needs. Let's create something extraordinary together.</p>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="cta-actions">
                        <a href="./?page=contact" class="btn-primary">
                            <span>Start Partnership</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="./?page=products" class="btn-secondary">
                            <span>View Products</span>
                            <i class="fas fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>