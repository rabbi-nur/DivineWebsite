<?php
/**
 * Process Page Content
 * Only contains the body content - layout is handled by framework
 */

// Include page helpers
require_once __DIR__ . '/../includes/page-helper.php';
?>

<!-- Process Hero Section -->
<section class="process-hero py-5" style="background: linear-gradient(135deg, #79B905 0%, #5a8a04 100%); color: white;">
    <div class="container text-center">
        <h1 class="display-4 mb-3">Our Process</h1>
        <p class="lead">From fiber to finished product - our comprehensive manufacturing process</p>
    </div>
</section>

<!-- Process Overview -->
<section class="py-5">
    <div class="container">
        <?php render_section_title('Manufacturing Excellence', 'End-to-end textile production process'); ?>
        
        <!-- Process Steps -->
        <!-- <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="process-step text-center p-4">
                    <div class="step-number mb-3">
                        <span class="badge bg-primary rounded-circle p-3 fs-4">1</span>
                    </div>
                    <img src="img/spinning.webp" alt="Spinning" class="img-fluid rounded mb-3" style="height: 200px; width: 100%; object-fit: cover;">
                    <h4>Spinning</h4>
                    <p>High-quality yarn production using advanced spinning technology for superior strength and consistency.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="process-step text-center p-4">
                    <div class="step-number mb-3">
                        <span class="badge bg-primary rounded-circle p-3 fs-4">2</span>
                    </div>
                    <img src="img/knitting.webp" alt="Knitting" class="img-fluid rounded mb-3" style="height: 200px; width: 100%; object-fit: cover;">
                    <h4>Circular Knitting</h4>
                    <p>Precision knitting processes creating premium fabrics with optimal comfort and durability.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="process-step text-center p-4">
                    <div class="step-number mb-3">
                        <span class="badge bg-primary rounded-circle p-3 fs-4">3</span>
                    </div>
                    <img src="img/dyeing.webp" alt="Dyeing" class="img-fluid rounded mb-3" style="height: 200px; width: 100%; object-fit: cover;">
                    <h4>Dyeing</h4>
                    <p>Advanced dyeing processes ensuring vibrant, long-lasting colors with minimal environmental impact.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="process-step text-center p-4">
                    <div class="step-number mb-3">
                        <span class="badge bg-primary rounded-circle p-3 fs-4">4</span>
                    </div>
                    <img src="img/aop.webp" alt="AOP" class="img-fluid rounded mb-3" style="height: 200px; width: 100%; object-fit: cover;">
                    <h4>All Over Print</h4>
                    <p>Innovative printing solutions for unique designs and patterns on various fabric types.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="process-step text-center p-4">
                    <div class="step-number mb-3">
                        <span class="badge bg-primary rounded-circle p-3 fs-4">5</span>
                    </div>
                    <img src="img/embroidery.webp" alt="Embroidery" class="img-fluid rounded mb-3" style="height: 200px; width: 100%; object-fit: cover;">
                    <h4>Embroidery</h4>
                    <p>Exquisite embroidery work adding elegance and sophistication to finished products.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="process-step text-center p-4">
                    <div class="step-number mb-3">
                        <span class="badge bg-primary rounded-circle p-3 fs-4">6</span>
                    </div>
                    <img src="img/dyeing & finishing.webp" alt="Finishing" class="img-fluid rounded mb-3" style="height: 200px; width: 100%; object-fit: cover;">
                    <h4>Finishing</h4>
                    <p>Final quality checks and finishing touches ensuring every product meets our high standards.</p>
                </div>
            </div>
        </div> -->
    </div>
</section>

<!-- Detailed Process Section -->
<section class="py-5 bg-light">
    <div class="container">
        <?php render_section_title('Detailed Process Flow', 'How we ensure quality at every step'); ?>
        
        <!-- Include the existing accordion -->
        <?php include 'accordion.php'; ?>
    </div>
</section>

<!-- Quality Control -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2>Quality Control & Testing</h2>
                <p class="lead">Our rigorous quality control process ensures every product meets international standards.</p>
                
                <div class="quality-features">
                    <div class="feature-item d-flex align-items-start mb-3">
                        <i class="fas fa-microscope fa-2x text-primary me-3 mt-1"></i>
                        <div>
                            <h5>Laboratory Testing</h5>
                            <p>Comprehensive fabric testing for strength, colorfastness, and durability.</p>
                        </div>
                    </div>
                    
                    <div class="feature-item d-flex align-items-start mb-3">
                        <i class="fas fa-shield-alt fa-2x text-primary me-3 mt-1"></i>
                        <div>
                            <h5>Quality Assurance</h5>
                            <p>Multi-stage quality checks throughout the production process.</p>
                        </div>
                    </div>
                    
                    <div class="feature-item d-flex align-items-start mb-3">
                        <i class="fas fa-certificate fa-2x text-primary me-3 mt-1"></i>
                        <div>
                            <h5>Certification Compliance</h5>
                            <p>All products meet international quality and safety standards.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <img src="img/sustainability.jpg" alt="Quality Control" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5" style="background: linear-gradient(135deg, #79B905 0%, #5a8a04 100%); color: white;">
    <div class="container text-center">
        <h2 class="mb-3">Experience Our Process</h2>
        <p class="lead mb-4">Visit our facilities and see our advanced manufacturing process in action.</p>
        <?php render_cta_button('Schedule a Visit', '/contact', 'fa-solid fa-calendar'); ?>
    </div>
</section>