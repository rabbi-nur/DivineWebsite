<?php
/**
 * About Section Component
 */
$about_data = $about_data ?? [
    'title' => '5 Reasons We are special',
    'description' => 'Ever since our inception in 1997 it has been our sole purpose to produce high quality apparels made to meet the needs of the buyer, with inch-perfect accuracy and high reliablity',
    'image' => 'img/about.JPG',
    'features' => [
        'Fabric Innovation & Advanced R&D',
        'Sustainability Commitment',
        'Technology Integration',
        'Superior Product Quality',
        'Global Certifications & Standards'
    ]
];
?>
<div class="container-fluid bg-light overflow-hidden px-lg-0">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="section-title position-relative pb-3 mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="-5 0 45 30"
                    fill="none"
                    stroke="#75983C"
                    stroke-width="1.5"
                    stroke-linecap="square"
                    stroke-miterlimit="10"
                    style="height: 1.5em; width: auto; vertical-align: middle; margin-right: 6px; margin-top: -8px;">
                    <g transform="scale(1.5)">
                    <polyline points="0,17 8,8 18,17 27,8"/>
                    </g>
                    </svg>
                    <span style="color: #79B905; display: inline-flex; align-items: center; font-size: 19px; font-weight: 400;">About Divine Group</span>
                    <h2 class="mb-0 mt-2"><?= htmlspecialchars($about_data['title']) ?></h2>
                </div>
                <p class="mb-4" style="color:#000;"><?= htmlspecialchars($about_data['description']) ?></p>
                <div class="row g-0 mb-3">
                    <?php 
                    $half = ceil(count($about_data['features']) / 2);
                    $chunks = array_chunk($about_data['features'], $half);
                    foreach($chunks as $chunk): 
                    ?>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <?php foreach($chunk as $feature): ?>
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?= htmlspecialchars($feature) ?></h6>
                        <?php endforeach; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php render_cta_button('About Us'); ?>
            </div>
            <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="<?= $about_data['image'] ?>" style="object-fit: cover;" alt="About Divine Group">
                </div>
            </div>
        </div>
    </div>
</div>