<?php
/**
 * Page Helper Functions
 * Common functions used across pages
 */

/**
 * Render a section title with consistent styling
 */
function render_section_title($title, $subtitle = '', $show_icon = true) {
    ?>
    <div class="dg-section-title text-center">
        <?php if($show_icon): ?>
        <svg xmlns="http://www.w3.org/2000/svg"
            viewBox="-5 0 45 30"
            fill="none"
            stroke="#75983C"
            stroke-width="1.5"
            stroke-linecap="square"
            stroke-miterlimit="10"
            style="height: 24px; width: auto; vertical-align: middle; margin-right: 6px; margin-top: -8px;">
            <g transform="scale(1.5)">
            <polyline points="0,17 8,8 18,17 27,8"/>
            </g>
        </svg>
        <?php endif; ?>
        <h2 class="dg-title"><?= htmlspecialchars($title) ?></h2>
        <?php if($subtitle): ?>
        <p class="dg-subtitle"><?= htmlspecialchars($subtitle) ?></p>
        <?php endif; ?>
    </div>
    <?php
}

/**
 * Render CTA button with consistent styling
 */
function render_cta_button($text, $url = '#', $icon = 'fa-solid fa-leaf') {
    ?>
    <a href="<?= htmlspecialchars($url) ?>" class="cta-btn">
        <i class="<?= htmlspecialchars($icon) ?>"></i><?= htmlspecialchars($text) ?>
    </a>
    <?php
}

/**
 * Render hero slider
 */
function render_hero_slider($slides = []) {
    if(empty($slides)) {
        $slides = [
            ['image' => './img/DJI_0178.webp'],
            ['image' => './img/11.webp'],
            ['image' => './img/12.webp'],
            ['image' => './img/DSC00115.webp'],
        ];
    }
    ?>
    <section class="hero">
        <div class="hero-slider">
            <button class="slider-btn prev-btn"><i class="fas fa-chevron-left"></i></button>
            <button class="slider-btn next-btn"><i class="fas fa-chevron-right"></i></button>
            <?php foreach ($slides as $slide): ?>
            <div class="slide" style="background-image: url('<?php echo $slide['image']; ?>');">
                <div class="hero-content">
                    <div class="hero-texts">
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
                        <span style="color: #79B905; display: inline-flex; align-items: center; font-size: 19px; font-weight: 400;">We Chase The Future</span>
                        <h2 style="color: #fff; margin-top:25px;">Redefining Knitwear <br> Excellence With Sustainable <br> Fabric Innovation</h2>
                        <p class="subtext">Founded in 1996, we are vertically integrated, driven by R&D excellence, <br>and focused on shaping the future of fashion</p>
                        <?php render_cta_button('Explore More'); ?>
                    </div>
                    <!--counter texts-->   
                    <div class="container-counter mt-3">
                        <div class="row mt-5 text-white stats-row">
                            <div class="col-6 col-md-3 mb-4 stat-col text-start border-start">
                                <h4 class="fw-bold text-white">15,000+ </h4>
                                <small>Team Members</small>
                            </div>
                            <div class="col-6 col-md-3 mb-4 stat-col text-start border-start">
                                <h4 class="fw-bold text-white">$100M</h4>
                                <small>Total Revenue</small>
                            </div>
                            <div class="col-6 col-md-3 mb-4 stat-col text-start border-start">
                                <h4 class="fw-bold text-white">24 Million</h4>
                                <small>Apparel Produced</small>
                            </div>
                            <div class="col-6 col-md-3 mb-4 stat-col text-start border-start">
                                <h4 class="fw-bold text-white">109 Tons</h4>
                                <small>Packaging Recycled</small>
                            </div>
                        </div>
                    </div>
                    <!--counter texts end-->
                </div>      
            </div>
            <?php endforeach; ?>
            <div class="slider-dots"></div>
        </div>
    </section>
    <?php
}

/**
 * Include a component/section
 */
function include_component($component_name, $data = []) {
    $component_file = __DIR__ . '/components/' . $component_name . '.php';
    if(file_exists($component_file)) {
        extract($data);
        include $component_file;
    }
}
?>