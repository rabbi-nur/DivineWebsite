<?php
/**
 * Products Page Content
 * Only contains the body content - layout is handled by framework
 */

// Include page helpers
require_once __DIR__ . '/../includes/page-helper.php';
?>

<!-- Products Hero Section -->
<section class="products-hero py-5" style="background: linear-gradient(135deg, #79B905 0%, #5a8a04 100%); color: white;">
    <div class="container text-center">
        <h1 class="display-4 mb-3">Our Products</h1>
        <p class="lead">Discover our comprehensive range of premium textile solutions</p>
        <?php render_cta_button('View Catalog', '#products', 'fa-solid fa-eye'); ?>
    </div>
</section>

<!-- Products Section -->
<section id="products" class="py-5">
    <div class="container">
        <?php render_section_title('Product Showcase', 'Premium Quality Textiles for Global Markets'); ?>
        <?php include 'products.php'; ?>
    </div>
</section>

<!-- Product Categories -->
<section class="py-5 bg-light">
    <div class="container">
        <?php render_section_title('Product Categories', 'Comprehensive Textile Solutions'); ?>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="category-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="category-icon mb-3">
                        <img src="img/spinning.webp" alt="Spinning" class="img-fluid rounded" style="height: 200px; width: 100%; object-fit: cover;">
                    </div>
                    <h4>Spinning</h4>
                    <p>High-quality yarn production with advanced spinning technology for superior strength and consistency.</p>
                    <a href="#" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="category-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="category-icon mb-3">
                        <img src="img/knitting.webp" alt="Knitting" class="img-fluid rounded" style="height: 200px; width: 100%; object-fit: cover;">
                    </div>
                    <h4>Knitting</h4>
                    <p>Premium knit fabrics manufactured with precision for comfort, durability, and style.</p>
                    <a href="#" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="category-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="category-icon mb-3">
                        <img src="img/dyeing.webp" alt="Dyeing" class="img-fluid rounded" style="height: 200px; width: 100%; object-fit: cover;">
                    </div>
                    <h4>Dyeing & Finishing</h4>
                    <p>Advanced dyeing processes ensuring vibrant colors and superior fabric finishing.</p>
                    <a href="#" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="category-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="category-icon mb-3">
                        <img src="img/aop.webp" alt="AOP" class="img-fluid rounded" style="height: 200px; width: 100%; object-fit: cover;">
                    </div>
                    <h4>All Over Print (AOP)</h4>
                    <p>Innovative printing solutions for unique designs and patterns on various fabric types.</p>
                    <a href="#" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="category-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="category-icon mb-3">
                        <img src="img/embroidery.webp" alt="Embroidery" class="img-fluid rounded" style="height: 200px; width: 100%; object-fit: cover;">
                    </div>
                    <h4>Embroidery</h4>
                    <p>Exquisite embroidery work adding elegance and sophistication to textile products.</p>
                    <a href="#" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="category-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="category-icon mb-3">
                        <img src="img/yarn dyeing-min.webp" alt="Yarn Dyeing" class="img-fluid rounded" style="height: 200px; width: 100%; object-fit: cover;">
                    </div>
                    <h4>Yarn Dyeing</h4>
                    <p>Specialized yarn dyeing services for consistent color quality and superior results.</p>
                    <a href="#" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quality Standards -->
<section class="py-5">
    <div class="container">
        <?php render_section_title('Quality Standards', 'Certified Excellence in Every Product'); ?>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h3>Our Commitment to Quality</h3>
                <p class="lead">Every product undergoes rigorous quality control processes to ensure it meets international standards.</p>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> ISO 9001:2015 Certified</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> OEKO-TEX Standard 100</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> GOTS Certified Organic</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> WRAP Certified Facility</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> BSCI Compliant</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="img/sustainability.jpg" alt="Quality Standards" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5" style="background: linear-gradient(135deg, #79B905 0%, #5a8a04 100%); color: white;">
    <div class="container text-center">
        <h2 class="mb-3">Ready to Partner with Us?</h2>
        <p class="lead mb-4">Contact our team to discuss your textile requirements and discover how we can help bring your vision to life.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <?php render_cta_button('Get Quote', '/contact', 'fa-solid fa-envelope'); ?>
            <a href="/catalog" class="btn btn-outline-light btn-lg">
                <i class="fa-solid fa-download me-2"></i>Download Catalog
            </a>
        </div>
    </div>
</section>