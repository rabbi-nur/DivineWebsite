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

<!-- Products Section -->
<section>
    <?php render_section_title('Our Products', 'Driving Impact Through Responsible Innovation'); ?>
    <?php include 'products.php'; ?>
</section>

<!-- Clients Section -->
<?php include_component('clients-section'); ?>

<!-- Certifications Section -->
<?php include_component('certifications-section'); ?>