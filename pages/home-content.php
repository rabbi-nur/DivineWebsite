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
     <div class="dg-section-title text-center">
        <h2 class="dg-title">Our Process</h2>
        <p class="dg-subtitle">Driving Impact Through Responsible Innovation</p>
    </div>
    <div class="acc-container">
        <!-- Spinning (Always open) -->
        <!-- Spinning -->
        <div class="acc-panel acc-spinning " style="background-image:url('img/spinning.webp')">
            <div class="acc-overlay-inactive"></div>
            <div class="acc-heading-vertical">SPINNING</div>
            <div class="acc-content">
                <div class="acc-left">
                    <div class="acc-text-box">
                        <h2>Spinning</h2>
                        <p>Spinning is the fundamental process in textile manufacturing where raw fibers are transformed into yarn. 
                        This process begins with cleaning and preparing fibers like cotton, polyester, or viscose. </p><br>
                        <?php render_cta_button('Explore More'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Yarn Dyeing -->
        <div class="acc-panel acc-yarn" style="background-image:url('img/yarn dyeing-min.webp')">
            <div class="acc-overlay-inactive"></div>
            <div class="acc-heading-vertical">YARN DYEING</div>
            <div class="acc-content">
                <div class="acc-left">
                    <div class="acc-text-box">
                        <h2>Yarn Dyeing</h2>
                        <p>Yarn Dyeing is a process in which yarns are dyed before they are woven or knitted into fabrics. This method allows for
                         greater color penetration and is commonly used to create patterned fabrics such as stripes, checks, and plaids.</p> <br>
                        <?php render_cta_button('Explore More'); ?>
                    </div>
                </div>
            </div>
        </div>


        <!-- Knitting -->
        <div class="acc-panel acc-knitting" style="background-image:url('img/knitting.webp')">
            <div class="acc-overlay-inactive"></div>
            <div class="acc-heading-vertical">CIRCULAR KNITTING</div>
            <div class="acc-content">
                <div class="acc-left">
                    <div class="acc-text-box">
                        <h2>Circular Knitting</h2>
                        <p>Knitting is a fabric construction method in which yarns are looped together using needles to form a textile. Unlike weaving, 
                        which uses intersecting yarns, knitting creates fabrics with interconnected loops, providing natural stretch and flexibility.</p> <br>
                        <?php render_cta_button('Explore More'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dyeing -->
        <div class="acc-panel acc-dyeing" style="background-image:url('img/dyeing.webp')">
            <div class="acc-overlay-inactive"></div>
            <div class="acc-heading-vertical">DYEING</div>
            <div class="acc-content">
                <div class="acc-left">
                    <div class="acc-text-box">
                        <h2>Dyeing</h2>
                        <p>Dyeing is the process of applying color to textile materials such as fibers, yarns, fabrics, or even finished garments. It is a 
                        crucial step that determines the final appearance and aesthetic appeal of a textile product. Depending on the type of fiber and environmental impact.</p> <br>v
                        <?php render_cta_button('Explore More'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!--Finishing -->
        <div class="acc-panel acc-finishing" style="background-image:url('img/dyeing & finishing.webp')">
            <div class="acc-overlay-inactive"></div>
            <div class="acc-heading-vertical">FINISHING</div>
            <div class="acc-content">
                <div class="acc-left">
                    <div class="acc-text-box">
                        <h2>Finishing</h2>
                        <p>Finishing is a crucial stage in textile manufacturing that enhances both the appearance and functionality of fabrics. 
                        Dyeing involves applying color to fibers, yarns, or fabrics using various techniques such as reactive, disperse, or vat dyeing,at meet both.</p> <br>
                        <?php render_cta_button('Explore More'); ?>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- All Over Printing -->
        <div class="acc-panel acc-aop" style="background-image:url('img/aop.webp')">
            <div class="acc-overlay-inactive"></div>
            <div class="acc-heading-vertical">ALL OVER PRINTING</div>
            <div class="acc-content">
                <div class="acc-left">
                    <div class="acc-text-box">
                        <h2>All Over Printing</h2>
                        <p>All Over Printing (AOP) is a technique where a design or pattern is printed across the entire surface of the fabric or garment,
                        covering seams, edges, and every visible part. This method allows for bold, continuous designs that wrap around the garment</p><br>
                        <?php render_cta_button('Explore More'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Placement Printing -->
        <div class="acc-panel acc-placement" style="background-image:url('img/1.webp')">
            <div class="acc-overlay-inactive"></div>
            <div class="acc-heading-vertical">PLACEMENT PRINTING</div>
            <div class="acc-content">
                <div class="acc-left">
                    <div class="acc-text-box">
                        <h2>Placement Printing</h2>
                        <p>Placement printing is a textile printing technique where a design is printed on a specific, predetermined area of a garment or 
                        fabric. This method is often used to apply logos, artwork, or branding elements on particular spots like the chest, back, or sleeves of t-shirts/p><br>
                        <?php render_cta_button('Explore More'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Embroidery -->
        <div class="acc-panel acc-embroidery" style="background-image:url('img/embroidery.webp')">
            <div class="acc-overlay-inactive"></div>
                        <div class="acc-heading-vertical">EMBROIDERY</div>
            <div class="acc-content">
                <div class="acc-left">
                    <div class="acc-text-box">
                        <h2>Embroidery</h2>
                        <p>Embroidery is the art of decorating fabric or other materials using a needle to apply thread or yarn. It enhances the visual 
                        appeal of garments and textiles with intricate patterns, logos, or motifs. Embroidery can be done by hand for artisanal detailing</p> <br>
                        <?php render_cta_button('Explore More'); ?>
                    </div>
                </div>
            </div>
        </div>

     <!--Sewing -->
        <div class="acc-panel acc-finishing" style="background-image:url('img/sewing.webp')">
            <div class="acc-overlay-inactive"></div>
                        <div class="acc-heading-vertical">SEWING</div>
            <div class="acc-content">
                <div class="acc-left">
                    <div class="acc-text-box">
                        <h2>Sewing</h2>
                        <p>Sewing is a crucial stage in textile manufacturing that enhances both the appearance and functionality of fabrics. Dyeing involves
                        applying color to fibers, yarns, or fabrics using various techniques such as reactive, disperse, or vat dyeing, depending on the</p> <br>
                        <?php render_cta_button('Explore More'); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Sustainability Section -->
<?php include_component('sustainability-section'); ?>

<!-- Premium Products Section -->
<section>
    <?php render_section_title('Our Premium Products', 'Exceptional Quality for Discerning Clients'); ?>
    <?php include 'includes/components/products.php'; ?>
    
    <!-- View All Products CTA -->
    <!-- <div class="text-center mt-5">
        <a href="/?page=products" class="btn btn-outline-primary btn-lg px-5 py-3">
            <i class="fas fa-th-large me-2"></i>View All Products
        </a>
    </div> -->
</section>

<!-- Clients Section -->
<?php include_component('clients-section'); ?>

<!-- Certifications Section -->
<?php include_component('certifications-section'); ?>