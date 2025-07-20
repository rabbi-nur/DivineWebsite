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