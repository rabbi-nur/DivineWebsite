<?php
/**
 * Sustainability Page Content
 * Only contains the body content - layout is handled by framework
 */

// Include page helpers
require_once __DIR__ . '/../includes/page-helper.php';
?>

<!-- Sustainability Hero Section -->
<section class="sustainability-hero py-5" style="background: linear-gradient(135deg, #79B905 0%, #5a8a04 100%); color: white;">
    <div class="container text-center">
        <h1 class="display-4 mb-3">Sustainability</h1>
        <p class="lead">Our commitment to environmental responsibility and sustainable practices</p>
        <?php render_cta_button('Learn More', '#sustainability-practices', 'fa-solid fa-leaf'); ?>
    </div>
</section>

<!-- Sustainability Overview -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <?php render_section_title('Our Commitment', 'Building a sustainable future'); ?>
                <p class="lead">At Divine Group, sustainability isn't just a buzzword—it's at the core of everything we do. We're committed to reducing our environmental impact while maintaining the highest quality standards.</p>
                
                <div class="sustainability-stats row g-3 mt-4">
                    <div class="col-6">
                        <div class="stat-card text-center p-3 bg-light rounded">
                            <h3 class="text-primary mb-1">50%</h3>
                            <small>Water Usage Reduction</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card text-center p-3 bg-light rounded">
                            <h3 class="text-primary mb-1">30%</h3>
                            <small>Energy Savings</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card text-center p-3 bg-light rounded">
                            <h3 class="text-primary mb-1">100%</h3>
                            <small>Renewable Energy</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card text-center p-3 bg-light rounded">
                            <h3 class="text-primary mb-1">Zero</h3>
                            <small>Waste to Landfill</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <img src="img/sustainability.jpg" alt="Sustainability" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Sustainability Practices -->
<section id="sustainability-practices" class="py-5 bg-light">
    <div class="container">
        <?php include_component('sustainability-section'); ?>
    </div>
</section>

<!-- Environmental Initiatives -->
<section class="py-5">
    <div class="container">
        <?php render_section_title('Environmental Initiatives', 'Leading the way in eco-friendly manufacturing'); ?>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="initiative-card h-100 p-4 bg-white rounded shadow-sm border-start border-primary border-4">
                    <div class="initiative-icon mb-3">
                        <i class="fas fa-tint fa-3x text-primary"></i>
                    </div>
                    <h4>Water Conservation</h4>
                    <p>Advanced water recycling systems and efficient dyeing processes that reduce water consumption by 50%.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-success me-2"></i> Closed-loop water systems</li>
                        <li><i class="fas fa-check text-success me-2"></i> Rainwater harvesting</li>
                        <li><i class="fas fa-check text-success me-2"></i> Wastewater treatment</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="initiative-card h-100 p-4 bg-white rounded shadow-sm border-start border-success border-4">
                    <div class="initiative-icon mb-3">
                        <i class="fas fa-solar-panel fa-3x text-success"></i>
                    </div>
                    <h4>Renewable Energy</h4>
                    <p>Transitioning to 100% renewable energy sources including solar and wind power for all our facilities.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-success me-2"></i> Solar panel installations</li>
                        <li><i class="fas fa-check text-success me-2"></i> Energy-efficient machinery</li>
                        <li><i class="fas fa-check text-success me-2"></i> Smart energy management</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="initiative-card h-100 p-4 bg-white rounded shadow-sm border-start border-warning border-4">
                    <div class="initiative-icon mb-3">
                        <i class="fas fa-recycle fa-3x text-warning"></i>
                    </div>
                    <h4>Waste Reduction</h4>
                    <p>Comprehensive waste management program achieving zero waste to landfill through recycling and reuse.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-success me-2"></i> Fabric waste recycling</li>
                        <li><i class="fas fa-check text-success me-2"></i> Chemical recovery systems</li>
                        <li><i class="fas fa-check text-success me-2"></i> Packaging optimization</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certifications -->
<section class="py-5 bg-light">
    <div class="container">
        <?php include_component('certifications-section'); ?>
    </div>
</section>

<!-- Sustainable Materials -->
<section class="py-5">
    <div class="container">
        <?php render_section_title('Sustainable Materials', 'Responsibly sourced and eco-friendly options'); ?>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="material-card text-center p-4 h-100 bg-light rounded">
                    <img src="img/raw-sus.webp" alt="Organic Cotton" class="img-fluid rounded mb-3" style="height: 150px; width: 100%; object-fit: cover;">
                    <h5>Organic Cotton</h5>
                    <p>GOTS certified organic cotton grown without harmful pesticides or chemicals.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="material-card text-center p-4 h-100 bg-light rounded">
                    <img src="img/ghm-sus.webp" alt="Recycled Fibers" class="img-fluid rounded mb-3" style="height: 150px; width: 100%; object-fit: cover;">
                    <h5>Recycled Fibers</h5>
                    <p>High-quality recycled polyester and cotton fibers reducing waste and resource consumption.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="material-card text-center p-4 h-100 bg-light rounded">
                    <img src="img/water-sus.webp" alt="Bamboo Fiber" class="img-fluid rounded mb-3" style="height: 150px; width: 100%; object-fit: cover;">
                    <h5>Bamboo Fiber</h5>
                    <p>Naturally antibacterial and biodegradable bamboo fibers for sustainable textile production.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="material-card text-center p-4 h-100 bg-light rounded">
                    <img src="img/sc-1.webp" alt="Low Impact Dyes" class="img-fluid rounded mb-3" style="height: 150px; width: 100%; object-fit: cover;">
                    <h5>Low Impact Dyes</h5>
                    <p>Eco-friendly dyes and chemicals that minimize environmental impact while maintaining color quality.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sustainability Goals -->
<section class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <div class="container">
        <?php render_section_title('Our 2030 Goals', 'Ambitious targets for a sustainable future'); ?>
        
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="goal-card p-4 bg-white rounded shadow-sm h-100">
                    <h4 class="text-primary mb-3">Environmental Goals</h4>
                    <div class="goal-item d-flex align-items-center mb-3">
                        <div class="goal-progress me-3">
                            <div class="progress" style="width: 100px; height: 8px;">
                                <div class="progress-bar bg-success" style="width: 75%"></div>
                            </div>
                        </div>
                        <div>
                            <strong>75% Carbon Neutral</strong>
                            <small class="d-block text-muted">Target: 100% by 2030</small>
                        </div>
                    </div>
                    
                    <div class="goal-item d-flex align-items-center mb-3">
                        <div class="goal-progress me-3">
                            <div class="progress" style="width: 100px; height: 8px;">
                                <div class="progress-bar bg-primary" style="width: 60%"></div>
                            </div>
                        </div>
                        <div>
                            <strong>60% Water Reduction</strong>
                            <small class="d-block text-muted">Target: 80% by 2030</small>
                        </div>
                    </div>
                    
                    <div class="goal-item d-flex align-items-center mb-3">
                        <div class="goal-progress me-3">
                            <div class="progress" style="width: 100px; height: 8px;">
                                <div class="progress-bar bg-warning" style="width: 90%"></div>
                            </div>
                        </div>
                        <div>
                            <strong>90% Waste Diversion</strong>
                            <small class="d-block text-muted">Target: 100% by 2030</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="goal-card p-4 bg-white rounded shadow-sm h-100">
                    <h4 class="text-primary mb-3">Social Goals</h4>
                    <div class="goal-item d-flex align-items-center mb-3">
                        <div class="goal-progress me-3">
                            <div class="progress" style="width: 100px; height: 8px;">
                                <div class="progress-bar bg-info" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <strong>85% Fair Trade Certified</strong>
                            <small class="d-block text-muted">Target: 100% by 2030</small>
                        </div>
                    </div>
                    
                    <div class="goal-item d-flex align-items-center mb-3">
                        <div class="goal-progress me-3">
                            <div class="progress" style="width: 100px; height: 8px;">
                                <div class="progress-bar bg-success" style="width: 70%"></div>
                            </div>
                        </div>
                        <div>
                            <strong>70% Women Leadership</strong>
                            <small class="d-block text-muted">Target: 80% by 2030</small>
                        </div>
                    </div>
                    
                    <div class="goal-item d-flex align-items-center mb-3">
                        <div class="goal-progress me-3">
                            <div class="progress" style="width: 100px; height: 8px;">
                                <div class="progress-bar bg-primary" style="width: 95%"></div>
                            </div>
                        </div>
                        <div>
                            <strong>95% Employee Satisfaction</strong>
                            <small class="d-block text-muted">Target: 98% by 2030</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5" style="background: linear-gradient(135deg, #79B905 0%, #5a8a04 100%); color: white;">
    <div class="container text-center">
        <h2 class="mb-3">Join Our Sustainability Journey</h2>
        <p class="lead mb-4">Partner with us to create a more sustainable future for the textile industry.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <?php render_cta_button('Partner With Us', '/contact', 'fa-solid fa-handshake'); ?>
            <a href="#" class="btn btn-outline-light btn-lg">
                <i class="fa-solid fa-download me-2"></i>Sustainability Report
            </a>
        </div>
    </div>
</section>