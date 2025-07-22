<?php
/**
 * Certifications Section Component
 */
$certifications = $certifications ?? [
    'img/crt1.png', 'img/crt2.png', 'img/crt3.png', 'img/crt4.png', 'img/crt5.png'
];
?>
<section class="dg-certificate ">
    <?php render_section_title('Certifications', 'Driving Impact Through Responsible Innovation'); ?>
    <div class="dg-certificate overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel dg-certificate-slider">
                        <?php foreach($certifications as $cert): ?>
                        <div class="single-dg-certificate">
                            <img src="<?= $cert ?>" alt="Certification">
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>