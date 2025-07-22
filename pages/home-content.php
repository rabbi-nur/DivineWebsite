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
    <div class="acc-container">
        <!-- Spinning (Always open) -->
        <div class="acc-panel acc-spinning active" style="background-image:url('img/spinning.webp')">
            <div class="acc-overlay-inactive"></div>
            <div class="acc-heading-vertical stair-heading stair-1">SPINNING</div>
            <div class="acc-content" style="display:block;">
                <div class="acc-left">
                    <div class="acc-text-box">
                        <h2>Spinning</h2>
                        <p>Spinning is the fundamental process in textile manufacturing where raw fibers are transformed into yarn. This process begins with cleaning and preparing fibers like cotton, polyester, or viscose. The fibers are then carded and combed to align them and remove impurities. Next, they are drawn out and twisted to form continuous strands called yarn. The quality of the spinning process directly affects the strength, smoothness, and durability of the yarn, which in turn influences the quality of the final fabric. There are various spinning methods including ring spinning, rotor spinning, and air-jet spinning, each suitable for different types of fibers and end uses. Spinning is essential in both woven and knitted fabric production and sets the foundation for the entire textile value chain.</p><br>
                        <?php render_cta_button('Explore More'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Yarn Dyeing -->
        <!-- Yarn Dyeing -->
        <div class="acc-panel acc-yarn" style="background-image:url('img/yarn dyeing-min.webp')">
            <div class="acc-overlay-inactive"></div>
            <div class="acc-heading-vertical stair-heading stair-2">YARN DYEING</div>
            <div class="acc-content">
                <div class="acc-left">
                    <div class="acc-text-box">
                        <h2>Yarn Dyeing</h2>
                        <p>Yarn Dyeing is a process in which yarns are dyed before they are woven or knitted into fabrics. This method allows for greater color penetration and is commonly used to create patterned fabrics such as stripes, checks, and plaids. Yarn dyeing is typically done using techniques like package dyeing, hank dyeing, or beam dyeing. It offers excellent colorfastness and enables designers to produce intricate designs with multiple colors. This process is widely used in the production of shirting fabrics, upholstery, and other high-quality textiles where precise and consistent coloration is essential for aesthetic and design purposes.</p> <br>
                        <?php render_cta_button('Explore More'); ?>
                    </div>
                </div>
            </div>
        </div>


        <!-- Knitting -->
        <div class="acc-panel acc-knitting" style="background-image:url('img/knitting.webp')">
            <div class="acc-overlay-inactive"></div>
            <div class="acc-heading-vertical stair-heading stair-3">CIRCULAR KNITTING</div>
            <div class="acc-content">
                <div class="acc-left">
                    <div class="acc-text-box">
                        <h2>Circular Knitting</h2>
                        <p>Knitting is a fabric construction method in which yarns are looped together using needles to form a textile. Unlike weaving, which uses intersecting yarns, knitting creates fabrics with interconnected loops, providing natural stretch and flexibility. Knitted fabrics are known for their comfort, softness, and breathability, making them ideal for clothing items such as t-shirts, sweaters, socks, and sportswear. Knitting can be done by hand or by machine, and it comes in two main types: weft knitting (commonly used in circular machines) and warp knitting (often used in tricot and raschel machines). The design possibilities in knitting are vast, allowing for various textures, weights, and patterns, making it a preferred technique in fashion and functional textiles.</p> <br>
                        <?php render_cta_button('Explore More'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dyeing -->
        <div class="acc-panel acc-dyeing" style="background-image:url('img/dyeing.webp')">
            <div class="acc-overlay-inactive"></div>
            <div class="acc-heading-vertical stair-heading stair-4">DYEING</div>
            <div class="acc-content">
                <div class="acc-left">
                    <div class="acc-text-box">
                        <h2>Dyeing</h2>
                        <p>Dyeing is the process of applying color to textile materials such as fibers, yarns, fabrics, or even finished garments. It is a crucial step that determines the final appearance and aesthetic appeal of a textile product. Depending on the type of fiber and desired effect, various dyeing methods are used, including reactive dyeing, vat dyeing, acid dyeing, and disperse dyeing. Dyeing can be performed at different stages—fiber dyeing (top dyeing), yarn dyeing, fabric dyeing (piece dyeing), or garment dyeing. Each method has its own advantages and applications. The goal is to achieve colorfastness, uniformity, and vibrant hues. Modern dyeing processes are increasingly focused on sustainability, using water-efficient methods and eco-friendly dyes to minimize environmental impact.</p> <br>v
                        <?php render_cta_button('Explore More'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!--Finishing -->
        <div class="acc-panel acc-finishing" style="background-image:url('img/dyeing & finishing.webp')">
            <div class="acc-overlay-inactive"></div>
            <div class="acc-heading-vertical stair-heading stair-5">FINISHING</div>
            <div class="acc-content">
                <div class="acc-left">
                    <div class="acc-text-box">
                        <h2>Finishing</h2>
                        <p>Finishing is a crucial stage in textile manufacturing that enhances both the appearance and functionality of fabrics. Dyeing involves applying color to fibers, yarns, or fabrics using various techniques such as reactive, disperse, or vat dyeing, depending on the fiber type. It ensures uniform color, colorfastness, and visual appeal. Finishing processes follow dyeing and include treatments like softening, shrinking, water repellent coating, and anti-pilling. These treatments improve fabric performance, durability, and feel. Together, dyeing and finishing play a vital role in delivering high-quality, market-ready textiles that meet both aesthetic and functional demands in fashion and industrial applications.</p> <br>
                        <?php render_cta_button('Explore More'); ?>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- All Over Printing -->
        <div class="acc-panel acc-aop" style="background-image:url('img/aop.webp')">
            <div class="acc-overlay-inactive"></div>
            <div class="acc-heading-vertical stair-heading stair-6">ALL OVER PRINTING</div>
            <div class="acc-content">
                <div class="acc-left">
                    <div class="acc-text-box">
                        <h2>All Over Printing</h2>
                        <p>All Over Printing (AOP) is a technique where a design or pattern is printed across the entire surface of the fabric or garment, covering seams, edges, and every visible part. This method allows for bold, continuous designs that wrap around the garment, making it ideal for vibrant, eye-catching fashion. AOP is often achieved through methods like rotary screen printing, sublimation printing, or digital textile printing. Unlike placement printing, which is restricted to certain areas, AOP creates a seamless design experience, often used in t-shirts, leggings, dresses, and activewear. It requires careful alignment and planning during production to maintain design consistency. AOP is popular in high-street fashion and custom apparel for its visual impact and full-fabric design freedom.</p><br>
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
                        <p>Placement printing is a textile printing technique where a design is printed on a specific, predetermined area of a garment or fabric. This method is often used to apply logos, artwork, or branding elements on particular spots like the chest, back, or sleeves of t-shirts, hoodies, and jackets. It offers designers precise control over the location and size of the print. Unlike all-over printing, placement printing focuses on visual emphasis and is ideal for bold, minimalistic, or statement designs. Techniques used include screen printing, digital printing, and heat transfer. It is widely used in fashion, promotional clothing, and sportswear, where the design position plays a critical role in aesthetics and brand visibility.</p><br>
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
                        <p>Embroidery is the art of decorating fabric or other materials using a needle to apply thread or yarn. It enhances the visual appeal of garments and textiles with intricate patterns, logos, or motifs. Embroidery can be done by hand for artisanal detailing or by machine for mass production and precision. Common stitches include chain stitch, satin stitch, and cross-stitch. In modern textile manufacturing, computer-controlled embroidery machines are widely used to achieve detailed and consistent designs. Embroidery adds texture, color, and value to clothing, home décor, accessories, and branding items, making it a popular choice in fashion and textile industries.</p> <br>
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
                        <p>Sewing is a crucial stage in textile manufacturing that enhances both the appearance and functionality of fabrics. Dyeing involves applying color to fibers, yarns, or fabrics using various techniques such as reactive, disperse, or vat dyeing, depending on the fiber type. It ensures uniform color, colorfastness, and visual appeal. Finishing processes follow dyeing and include treatments like softening, shrinking, water repellent coating, and anti-pilling. These treatments improve fabric performance, durability, and feel. Together, dyeing and finishing play a vital role in delivering high-quality, market-ready textiles that meet both aesthetic and functional demands in fashion and industrial applications.</p> <br>
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