<?php
/**
 * Home Page Content
 * Only contains the body content - layout is handled by framework
 */

// Include page helpers
require_once __DIR__ . '/../includes/page-helper.php';

// Hero Section
render_hero_slider();
?>

<!-- About Section -->
<?php include_component('about-section'); ?>

<!-- Process Section -->
<section class="dg-process-section">
    <div class="dg-container">
        <?php render_section_title('Our Process', 'Driving Impact Through Responsible Innovation'); ?>
    </div>
    <?php include 'accordion.php'; ?>
</section>

<!-- Sustainability Section -->
<?php include_component('sustainability-section'); ?>

<!-- Premium Products Section -->
<section>
    <?php render_section_title('Our Premium Products', 'Exceptional Quality for Discerning Clients'); ?>
    <?php include_component('premium-products'); ?>
    
    <!-- View All Products CTA -->
    <div class="text-center mt-5">
        <a href="./?page=products" class="btn btn-outline-primary btn-lg px-5 py-3">
            <i class="fas fa-th-large me-2"></i>View All Products
        </a>
    </div>
</section>

<!-- Clients Section -->
<?php include_component('clients-section'); ?>

<!-- Certifications Section -->
<?php include_component('certifications-section'); ?>