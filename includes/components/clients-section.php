<?php
/**
 * Clients Section Component
 */
$client_logos = $client_logos ?? [
    'img/logo-1.png', 'img/logo-2.png', 'img/logo-3.png', 'img/logo-4.png',
    'img/logo-5.png', 'img/logo-6.png', 'img/logo-7.png', 'img/logo-8.png'
];
?>
<section class="container-xxl client-logos py-5 buyer container-fluid buyer-bg">
    <?php render_section_title('Our Clients', 'Driving Impact Through Responsible Innovation'); ?>
    <div class="logo-grid">
        <?php foreach($client_logos as $index => $logo): ?>
        <img src="<?= $logo ?>" alt="Client Logo <?= $index + 1 ?>" class="logo fade-in" width="200px">
        <?php endforeach; ?>
    </div>
</section>