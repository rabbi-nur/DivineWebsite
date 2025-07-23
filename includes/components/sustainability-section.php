<?php
/**
 * Sustainability Section Component
 */
$sustainability_cards = $sustainability_cards ?? [
    ['number' => '01', 'icon' => 'img/1.svg', 'title' => 'Sustainable Fashion', 'description' => 'What You Wear Matters—To You and the World.'],
    ['number' => '02', 'icon' => 'img/3.svg', 'title' => 'GHG Emission Reduction', 'description' => 'Lower Emissions to Protect Our Shared Future.'],
    ['number' => '03', 'icon' => 'img/4.svg', 'title' => 'Reduce Water Consumption', 'description' => 'Conserving Water for a Healthier, Greener Planet.'],
    ['number' => '04', 'icon' => 'img/3.svg', 'title' => 'Sustainable Raw Material', 'description' => 'Responsibly Sourced Materials for Sustainable Products.'],
    ['number' => '05', 'icon' => 'img/2.svg', 'title' => 'Sustainable Packaging', 'description' => 'Packaging with a Conscience.']
];
?>
<section class="dg-sustainable-section">
    <div class="dg-container">
        <?php render_section_title('Sustainability Practices', 'Driving Impact Through Responsible Innovation'); ?>
        <div class="dg-sustainable-cards">
            <?php foreach($sustainability_cards as $card): ?>
            <div class="dg-card">
                <span class="dg-number"><?= $card['number'] ?></span>
                <img src="<?= $card['icon'] ?>" alt="<?= htmlspecialchars($card['title']) ?>" class="dg-icon">
                <h3><?= htmlspecialchars($card['title']) ?></h3>
                <p><?= htmlspecialchars($card['description']) ?></p>
                <!-- <a href="#"><i class="fa fa-leaf sus-btn"></i> Read More</a> -->
                <?php render_cta_button('Explore More'); ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>