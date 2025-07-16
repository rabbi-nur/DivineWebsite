<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>

<body>
    <!-- Loader -->
<div id="loader-wrapper">
    <div class="loader-logo">
         <img src="img/Divine Logo.png" alt="Divine Logo" />
    </div>
</div>

    <?php include('header.php'); ?>

<section class="hero">
  <div class="hero-slider">
    <button class="slider-btn prev-btn"><i class="fas fa-chevron-left"></i></button>
    <button class="slider-btn next-btn"><i class="fas fa-chevron-right"></i></button>
    <?php
      $slides = [
        ['image' => './img/DJI_0178.JPG'],
        ['image' => './img/11.webp'],
        ['image' => './img/12.webp'],
        ['image' => './img/DSC00115.webp'],
      ];

      foreach ($slides as $slide) {
    ?>
    <div class="slide" style="background-image: url('<?php echo $slide['image']; ?>');">
        <div class="hero-content">
            <div class="hero-texts">
                <svg xmlns="http://www.w3.org/2000/svg"
                viewBox="-5 0 45 30"
                fill="none"
                stroke="#75983C"
                stroke-width="2"
                stroke-linecap="square"
                stroke-miterlimit="10"
                style="height: 1.5em; width: auto; vertical-align: middle; margin-right: 6px; margin-top: -8px;">
                <g transform="scale(1.5)">
                <polyline points="0,17 8,8 18,17 27,8"/>
                </g>
                </svg>
                <span style="color: #79B905; display: inline-flex; align-items: center; font-size: 19px; font-weight: 400;">We Chase The Future</span>
                <h2 style="color: #fff; margin-top:25px;">REDEFINING KNITWEAR <br>EXCELLENCE WITH SUSTAINABLE <br> FABRIC INNOVATION</h2>
                <p class="subtext">Founded in 1996, we are vertically integrated, driven by R&D excellence, <br>and focused on shaping the future of fashion</p>
                <a href="#" class="cta-btn"><i class="fa-solid fa-leaf "></i>Explore More</a><br><br>
            </div>

            <!--new content start-->
                <!-- <div class="container-counter">
                    <div class="row mt-5 text-center text-white stats-row">
                        <div class="col-md-3 mb-4 mb-md-0 stat-col border-start" style="text-align: left";>
                            <h4 class="fw-bold text-white">8,000+</h4>
                            <small>Clients served</small>
                        </div>

                        <div class="col-md-3 mb-4 mb-md-0 stat-col border-start" style="text-align: left";>
                            <h4 class="fw-bold text-white">3%</h4>
                            <small>Flat platform fee</small>
                        </div>

                        <div class="col-md-3 mb-4 mb-md-0 stat-col border-start" style="text-align: left";>
                            <h4 class="fw-bold text-white">99.9%</h4>
                            <small>Uptime guarantee</small>
                        </div>

                        <div class="col-md-3 stat-col border-start" style="text-align: left";>
                            <h4 class="fw-bold text-white">$70M</h4>
                            <small>Total export revenue</small>
                        </div>
                    </div>
                </div> -->
                <div class="container-counter mt-3">
  <div class="row mt-5 text-white stats-row">
    <div class="col-6 col-md-3 mb-4 stat-col text-start border-start">
      <h4 class="fw-bold text-white">8,000+</h4>
      <small>Clients served</small>
    </div>
    <div class="col-6 col-md-3 mb-4 stat-col text-start border-start">
      <h4 class="fw-bold text-white">3%</h4>
      <small>Flat platform fee</small>
    </div>
    <div class="col-6 col-md-3 mb-4 stat-col text-start border-start">
      <h4 class="fw-bold text-white">99.9%</h4>
      <small>Uptime guarantee</small>
    </div>
    <div class="col-6 col-md-3 mb-4 stat-col text-start border-start">
      <h4 class="fw-bold text-white">$70M</h4>
      <small>Total export revenue</small>
    </div>
  </div>
</div>

                <!--new content end-->
        </div>      
    </div>
    
    <?php } ?>
    

  
<div class="slider-dots"></div>
</section>

    <!-- Category Start -->
    <!-- <div class="container-xxl py-5 catgry-bg">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp ctgry" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid text-white" src="img/112.png" alt="Icon" width="80px">
                            </div>
                            <h6>Production Capacity</h6>
                            <span style="color:#14a44d;">24 Millions PCS/Year</span>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/13.png" alt="Icon" width="80px">
                            </div>
                            <h6>Annual Revenue</h6>
                            <span style="color:#14a44d;">$40 Million</span>
                        </div>
                    </a>
                </div> 
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/114.png" alt="Icon" width="80px">
                            </div>
                            <h6>Total Export</h6>
                            <span style="color:#14a44d;">$60 Million</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/114.png" alt="Icon" width="80px">
                            </div>
                            <h6>Total Export</h6>
                            <span style="color:#14a44d;">$60 Million</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Category End -->

    <!-- Why us Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title position-relative pb-3 mb-5">
                        
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="-5 0 45 30"
                                fill="none"
                                stroke="#75983C"
                                stroke-width="2"
                                stroke-linecap="square"
                                stroke-miterlimit="10"
                                style="height: 20px; width: auto; vertical-align: middle; margin-right: 6px;">
                                <g transform="scale(1.5)"><polyline points="0,17 8,8 18,17 27,8"/></g>
                            </svg>
                            <span style="color: #79B905; display: inline-flex; align-items: center; font-size: 19px; font-weight: 400;">About Divine Group</span>

                        <!-- <h5 class="fw-bold text-primary text-uppercase">About Divine Group</h5> -->
                        <h2 class="mb-0">5 Reasons We are special</h2>
                    </div>
                    <p class="mb-4" style="color:#000;">Ever since our inception in 1997 it has been our sole purpose to produce high quality apparels made to meet the needs of the buyer, with inch-perfect accuracy and high reliablity</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fabric Innovation & Advanced R&D</h6>
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Sustainability Commitmentf</h6>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Technology Integration</h6>
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Superior Product Quality</h6>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Global Certifications & Standards</h6>
                        </div>
                        
                    </div>
                    <!-- <a href="#" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn about-btn" data-wow-delay="0.9s">About Us</a> -->
                    <a href="#" class="cta-btn"><i class="fa-solid fa-leaf "></i>About Us</a><br><br>
                </div>

                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about.JPG" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why us End -->

    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <!-- <div class="section-title text-center">
                <h1 class="display-5 mb-5">Our Process</h1>
            </div>  -->
            <div class="dg-section-title text-center">
                <h2 class="dg-title">Our Process</h2>
                <p class="dg-subtitle">Driving Impact Through Responsible Innovation</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/spinning.JPG" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Spinning</h4>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/knitting.JPG" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Knitting</h4>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/dyeing.JPG" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Dyeing</h4>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/aop.JPG" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">All Over Printing</h4>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/1.webp" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Placement Printing</h4>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/embroidery.JPG" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Embroidery</h4>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/yarn dyeing-min.JPG" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Yarn Dyeing</h4>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/dyeing & finishing.JPG" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Dyeing & Finishing</h4>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
    <!-- Process End -->
    <!--Sustainability Section Start-->
    <!-- <div class="section-title text-center">
        <h1 class="display-5 mb-5">Sustainability Practices</h1>
    </div> -->
<!-- <section class="sustainability-section">
	<div class="sustainability-container">
	  <div class="sustainability-card mt-5 mb-3">
		<img src="img/ghm-sus.webp" alt="Economic Sustainability Icon" class="sustainability-icon">
		<h3>GHG Emission Reduction</h3>
		<p>Divine Group achieved a 21% reduction in GHG emissions from 15,071,600 
            kg in 2019 to 10,377,250 kg in 2023, driven by continuous monitoring of CO₂</p>
		<a href="#" class="read-more-btn">Read More</a>
	  </div>
	  <div class="sustainability-card mt-5 mb-3">
		<img src="img/water-sus.webp" alt="Environmental Sustainability Icon" class="sustainability-icon">
		<h3>Reduce Water Consumption</h3>
		<p>We are dedicated to the conscientious and harmonious utilization of natural resources, as well as the safeguarding of our environment…</p>
		<a href="#" class="read-more-btn">Read More</a>
	  </div>
	  <div class="sustainability-card mt-5 mb-3">
		<img src="img/raw-sus.webp" alt="Social Sustainability Icon" class="sustainability-icon">
		<h3>Sustainable Raw Material</h3>
		<p>There is no beauty in our finest cloth or profit if we cannot contribute strong roles against hunger, poverty, and unhappiness of our people working…</p>
		<a href="#" class="read-more-btn">Read More</a>
	  </div>
	</div>
  </section> -->
<!--Sustainabilities section end-->

<!--New accordion section-->
<div class="acc-container">

  <!-- Spinning -->
  <div class="acc-panel active ">
    <div class="acc-overlay spinning">
      <div class="svg-container">
        <svg viewBox="0 0 96 96" fill="none" stroke="#6cbf00" stroke-width="1.3">
          <style>
            .spin-shaft { animation: rotateShaft 3s linear infinite; transform-origin: 48px 48px; }
            @keyframes rotateShaft {
              0% { transform: rotate(0deg); }
              100% { transform: rotate(360deg); }
            }
          </style>
          <circle cx="48" cy="48" r="30" />
          <rect class="spin-shaft" x="44" y="24" width="8" height="48" rx="2" />
          <line x1="30" y1="48" x2="66" y2="48" />
        </svg>
      </div>
      <h2>Spinning</h2>
      <p>High-quality combed & carded yarns with cutting-edge auto-coner tech. 16 tons/day capacity.</p>
    </div>
  </div>

  <!-- Knitting -->
 <div class="acc-heading-vertical"><h2>Knitting</h2></div>
  <div class="acc-panel">
    <div class="acc-overlay">
      <div class="svg-container">
        <svg viewBox="0 0 96 96" fill="none" stroke="#2563EB" stroke-width="1.2">
          <style>
            .needle1, .needle2 {
              animation: pulseStroke 3s ease-in-out infinite;
              transform-origin: center;
            }
            .needle2 { animation-delay: 1.5s; }
            .yarn1, .yarn2 {
              animation: fadeOpacity 4s ease-in-out infinite;
            }
            .yarn2 { animation-delay: 2s; }
            @keyframes pulseStroke {
              0%, 100% { stroke-width: 1.2; }
              50% { stroke-width: 2; }
            }
            @keyframes fadeOpacity {
              0%, 100% { opacity: 1; }
              50% { opacity: 0.5; }
            }
          </style>
          <circle cx="48" cy="48" r="28" />
          <path class="yarn1" d="M20 48c20-20 56 20 20 0" />
          <path class="yarn2" d="M48 20c-20 20 20 56 0 20" />
          <path d="M36 36l24 24" />
          <path d="M60 36l-24 24" />
          <line class="needle1" x1="30" y1="70" x2="66" y2="26" stroke-linecap="round" />
          <line class="needle2" x1="66" y1="70" x2="30" y2="26" stroke-linecap="round" />
        </svg>
      </div>
      <h2>Knitting</h2>
      <p>Precision circular knitting machines and advanced yarn control delivering 20,000kg/day.</p>
    </div>
  </div>

  <!-- Dyeing -->
 <div class="acc-heading-vertical"><h2>Dyeing</h2></div>

  <div class="acc-panel">
    <div class="acc-overlay">
      <div class="svg-container">
        <svg viewBox="0 0 96 96" fill="none" stroke="#9333EA" stroke-width="1.4">
          <style>
            .drop {
              animation: drip 2s ease-in-out infinite;
            }
            @keyframes drip {
              0%, 100% { transform: translateY(0); }
              50% { transform: translateY(6px); }
            }
          </style>
          <circle cx="48" cy="48" r="28" />
          <path class="drop" d="M48 20c4 8 8 12 0 20c-8-8-4-12 0-20z" />
          <line x1="38" y1="50" x2="58" y2="50" />
        </svg>
      </div>
      <h2>Dyeing</h2>
      <p>Swiss & Turkish dyeing lines producing 35 tons/day of AZO-free, eco-conscious colors.</p>
    </div>
  </div>

  <!-- All Over Printing -->
 <div class="acc-heading-vertical"><h2>All Over Printing</h2></div>

  <div class="acc-panel">
    <div class="acc-overlay">
      <div class="svg-container">
        <svg viewBox="0 0 96 96" fill="none" stroke="#D97706" stroke-width="1.2">
          <style>
            .pattern line {
              animation: blink 1s infinite alternate;
            }
            @keyframes blink {
              0% { opacity: 1; }
              100% { opacity: 0.3; }
            }
          </style>
          <rect x="20" y="20" width="56" height="56" rx="6" />
          <g class="pattern">
            <line x1="28" y1="28" x2="40" y2="28" />
            <line x1="28" y1="36" x2="40" y2="36" />
            <line x1="28" y1="44" x2="40" y2="44" />
            <line x1="50" y1="28" x2="62" y2="28" />
            <line x1="50" y1="36" x2="62" y2="36" />
            <line x1="50" y1="44" x2="62" y2="44" />
          </g>
        </svg>
      </div>
      <h2>All Over Printing</h2>
      <p>Digital + rotary systems blend automation with creativity for vibrant fabric-wide designs.</p>
    </div>
  </div>
  
  <!-- Placement Printing -->
 <div class="acc-heading-vertical"><h2>Placement Printing</h2></div>

  <div class="acc-panel">
    <div class="acc-overlay">
      <div class="svg-container">
        <svg viewBox="0 0 96 96" fill="none" stroke="#14B8A6" stroke-width="1.2">
          <style>
            .stamp {
              animation: pop 2s ease-in-out infinite;
            }
            @keyframes pop {
              0%, 100% { transform: scale(1); }
              50% { transform: scale(1.2); }
            }
          </style>
          <rect x="30" y="30" width="36" height="36" rx="4" />
          <rect class="stamp" x="40" y="40" width="16" height="16" rx="2" />
        </svg>
      </div>
      <h2>Placement Printing</h2>
      <p>Precision-engineered digital printing for defined motifs and logos — placement perfect.</p>
    </div>
  </div>

  <!-- Embroidery -->
 <div class="acc-heading-vertical"><h2>Embroidery</h2></div>

  <div class="acc-panel">
    <div class="acc-overlay">
      <div class="svg-container">
        <svg viewBox="0 0 96 96" fill="none" stroke="#EC4899" stroke-width="1.2">
          <style>
            .needle {
              animation: sew 2.5s ease-in-out infinite;
            }
            @keyframes sew {
              0% { transform: translateY(0); }
              50% { transform: translateY(4px); }
              100% { transform: translateY(0); }
            }
          </style>
          <circle cx="48" cy="48" r="28" />
          <path d="M28 48 Q48 28 68 48" />
          <line class="needle" x1="48" y1="20" x2="48" y2="76" stroke-linecap="round" />
        </svg>
      </div>
      <h2>Embroidery</h2>
      <p>Intricate stitching brought to life by industrial Tajima embroidery heads — detailed excellence.</p>
    </div>
  </div>

  <!-- Yarn Dyeing -->
 <div class="acc-heading-vertical"><h2>Yarn Dyeing</h2></div>

  <div class="acc-panel">
    <div class="acc-overlay">
      <div class="svg-container">
        <svg viewBox="0 0 96 96" fill="none" stroke="#3B82F6" stroke-width="1.2">
          <style>
            .circle1, .circle2 {
              animation: bounce 3s ease-in-out infinite;
            }
            .circle2 { animation-delay: 1.5s; }
            @keyframes bounce {
              0%, 100% { transform: scale(1); }
              50% { transform: scale(1.1); }
            }
          </style>
          <circle class="circle1" cx="36" cy="48" r="12" />
          <circle class="circle2" cx="60" cy="48" r="12" />
          <line x1="36" y1="36" x2="60" y2="36" />
          <line x1="36" y1="60" x2="60" y2="60" />
        </svg>
      </div>
      <h2>Yarn Dyeing</h2>
      <p>Uniform color penetration with cone-dye machines. Ideal for stripers and space-dyed effects.</p>
    </div>
  </div>

  <!-- Dyeing & Finishing -->
 <div class="acc-heading-vertical"><h2>Dyeing & Finishing</h2></div>

  <div class="acc-panel">
    <div class="acc-overlay">
      <div class="svg-container">
        <svg viewBox="0 0 96 96" fill="none" stroke="#F59E0B" stroke-width="1.3">
          <style>
            .wave {
              stroke-dasharray: 8;
              animation: dashmove 2s linear infinite;
            }
            @keyframes dashmove {
              to { stroke-dashoffset: -16; }
            }
          </style>
          <rect x="22" y="22" width="52" height="52" rx="6" />
          <path class="wave" d="M26 58c8-6 12 6 20 0s12 6 20 0" />
        </svg>
      </div>
      <h2>Dyeing & Finishing</h2>
      <p>Heat setting, compacting, and calendaring for ready-to-sew finishes. Soft feel, sharp look.</p>
    </div>
  </div>

</div>


 <!--New another section-->
      <section class="dg-sustainable-section">
            <div class="dg-container">
            <div class="dg-section-title text-center">
                <h2 class="dg-title">Sustainability Practices</h2>
                <p class="dg-subtitle">Driving Impact Through Responsible Innovation</p>
            </div>
            <div class="dg-sustainable-cards">
            <div class="dg-card">
                <span class="dg-number">01</span>
                <img src="img/1.svg" alt="Sustainable Fashion" class="dg-icon">
                <h3>Sustainable Fashion</h3>
                <p>What You Wear Matters—To You and the World.</p>
                <a href="#"><i class="fa fa-leaf"></i> Read More</a>
            </div>
            <div class="dg-card">
                <span class="dg-number">02</span>
                <img src="img/3.svg" alt="GHG Emission Reduction" class="dg-icon">
                <h3>GHG Emission Reduction</h3>
                <p>Lower Emissions to Protect Our Shared Future.</p>
                <a href="#"><i class="fa fa-leaf"></i> Read More</a>
            </div>
            <div class="dg-card">
                <span class="dg-number">03</span>
                <img src="img/4.svg" alt="Reduce Water Consumption" class="dg-icon">
                <h3>Reduce Water Consumption</h3>
                <p>Conserving Water for a Healthier, Greener Planet.</p>
                <a href="#"><i class="fa fa-leaf"></i> Read More</a>
            </div>
            <div class="dg-card">
                <span class="dg-number">04</span>
                <img src="img/3.svg" alt="Sustainable Raw Material" class="dg-icon">
                <h3>Sustainable Raw Material</h3>
                <p>Responsibly Sourced Materials for Sustainable Products.</p>
                <a href="#"><i class="fa fa-leaf"></i> Read More</a>
            </div>
            <div class="dg-card">
                <span class="dg-number">05</span>
                <img src="img/2.svg" alt="Sustainable Packaging" class="dg-icon">
                <h3>Sustainable Packaging</h3>
                <p>Packaging with a Conscience.</p>
                <a href="#"><i class="fa fa-leaf"></i> Read More</a>
            </div>
            </div>
        </div>
</section>
<!--New another section end-->

    <!-- Products Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="dg-section-title text-center">
                <h2 class="dg-title">Our Products</h2>
                <p class="dg-subtitle">Driving Impact Through Responsible Innovation</p>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">General </li>
                        <li class="mx-2" data-filter=".second">Custom </li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/1 (1).png" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/1 (1).png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">100% Cotton</p>
                            <h5 class="lh-base mb-0">Single Jersey</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/2.png" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/2.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">Cotton/Elastane</p>
                            <h5 class="lh-base mb-0">Single Jersey</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/3 (1).png" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/3 (1).png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">100% Cotton</p>
                            <h5 class="lh-base mb-0">Terry</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/4.png" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/4.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">Recycle polyester Fleece (CVC)</p>
                            <h5 class="lh-base mb-0">Fleece, Inside Brush</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/5.png" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/5.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">Pique polo</p>
                            <h5 class="lh-base mb-0">pique polo</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/6.png" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/6.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">Special Knit Structure</p>
                            <h5 class="lh-base mb-0">Waffle Jersey</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Products End -->

    <!--New Products section Start -->
<section>
    <div class="dg-section-title text-center py-5">
        <h2 class="dg-title">Our Products</h2>
        <p class="dg-subtitle">Driving Impact Through Responsible Innovation</p>
    </div>

    <div class="product-grid">
        <div class="product-card" data-id="1">
            <div class="product-img-container col-md-4">
                <img src="img/lrg1.jpg" class="primary" alt="Main">
                <img src="img/lrg2.jpg" class="secondary" alt="">
                <img src="img/lrg3.jpg" class="secondary" alt="">
            </div>
            <div class="product-info">
                <div class="product-price">$80</div>
                <div class="product-title">Wales Bonner 3-Stripes Socks</div>
                <div class="product-meta">2 pack • Originals</div>

                <div class="swatch-slider">
                <div class="thumb" 
                    data-img1="img/thm1.jpg" 
                    data-img2="img/thm2.jpg">
                    <img src="img/thm3.jpg">
                </div>

                <div class="thumb" 
                    data-img1="img/thm4.jpg" 
                    data-img2="img/thm5.jpg">
                    <img src="img/thm1.jpg">
                </div>
                <div class="thumb" 
                    data-img1="img/thm1.jpg" 
                    data-img2="img/thm2.jpg">
                    <img src="img/thm3.jpg">
                </div>
                </div>
            </div>
            </div>

            <div class="product-card" data-id="1">
            <div class="product-img-container col-md-4">
                <img src="img/lrg1.jpg" class="primary" alt="Main">
                <img src="img/lrg2.jpg" class="secondary" alt="">
                <img src="img/lrg3.jpg" class="secondary" alt="">
            </div>
            <div class="product-info">
                <div class="product-price">$80</div>
                <div class="product-title">Wales Bonner 3-Stripes Socks</div>
                <div class="product-meta">2 pack • Originals</div>

                <div class="swatch-slider">
                <div class="thumb" 
                    data-img1="img/thm1.jpg" 
                    data-img2="img/thm2.jpg">
                    <img src="img/thm3.jpg">
                </div>

                <div class="thumb" 
                    data-img1="img/thm4.jpg" 
                    data-img2="img/thm5.jpg">
                    <img src="img/thm1.jpg">
                </div>
                <div class="thumb" 
                    data-img1="img/thm1.jpg" 
                    data-img2="img/thm2.jpg">
                    <img src="img/thm3.jpg">
                </div>
                </div>
            </div>
            </div>

            <div class="product-card" data-id="1">
                <div class="product-img-container col-md-4">
                    <img src="img/lrg1.jpg" class="primary" alt="Main">
                    <img src="img/lrg2.jpg" class="secondary" alt="">
                    <img src="img/lrg3.jpg" class="secondary" alt="">
                </div>
            <div class="product-info">
                <div class="product-price">$80</div>
                <div class="product-title">Wales Bonner 3-Stripes Socks</div>
                <div class="product-meta">2 pack • Originals</div>

                <div class="swatch-slider">
                    <div class="thumb" 
                        data-img1="img/thm1.jpg" 
                        data-img2="img/thm2.jpg">
                        <img src="img/thm3.jpg">
                    </div>

                    <div class="thumb" 
                        data-img1="img/thm4.jpg" 
                        data-img2="img/thm5.jpg">
                        <img src="img/thm1.jpg">
                    </div>
                    <div class="thumb" 
                        data-img1="img/thm1.jpg" 
                        data-img2="img/thm2.jpg">
                        <img src="img/thm3.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!--New Products End -->




    <!--Buyer section Start  -->
    <section class="container-xxl client-logos py-5 buyer container-fluid buyer-bg">
        <!-- <div class="section-title text-center">
            <h1 class="display-5 mb-5">Our Clients Around The World</h1>
        </div> -->
            <div class="dg-section-title text-center">
                <h2 class="dg-title">Our Clients</h2>
                <p class="dg-subtitle">Driving Impact Through Responsible Innovation</p>
            </div>
	    <div class="logo-grid">
		    <img src="img/logo-1.png" alt="Client Logo 1" class="logo fade-in-left" width="200px">
		    <img src="img/logo-2.png" alt="Client Logo 2" class="logo fade-in">
		    <img src="img/logo-3.png" alt="Client Logo 3" class="logo fade-in">
		    <img src="img/logo-4.png" alt="Client Logo 4" class="logo fade-in-right">
		    <img src="img/logo-5.png" alt="Client Logo 5" class="logo fade-in-left">
		    <img src="img/logo-6.png" alt="Client Logo 6" class="logo fade-in">
		    <img src="img/logo-7.png" alt="Client Logo 7" class="logo fade-in">
		    <img src="img/logo-8.png" alt="Client Logo 8" class="logo fade-in-right">
	    </div>
    </section>

<!--Buyer section End  -->

 <!-- Certifications Start -->
    <section>
        <div class="container-fluid py-5 wow fadeInUp clients scirtificate-new" data-wow-delay="0.1s" >
            <div class="container py-3 mb-5">
                <!-- <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h1 class="display-5 mb-5">Certifications</h1>

                </div> -->
                <div class="dg-section-title text-center">
                <h2 class="dg-title">Certifications</h2>
                <p class="dg-subtitle">Driving Impact Through Responsible Innovation</p>
            </div>
                <div class="bg-white">
                    <div class="owl-carousel vendor-carousel certifications">
                        <img src="img/crt1.png" alt="">
                        <img src="img/crt2.png" alt="">
                        <img src="img/crt3.png" alt="">
                        <img src="img/crt4.png" alt="">
                        <img src="img/crt5.png" alt="">
                        <img src="img/crt1.png" alt="">
                        <img src="img/crt2.png" alt="">
                        

                    </div>
                </div>
            </div>
        </div>
    </section>     
    <!-- Certifications End -->

    

    <!-- Footer Start -->
    <?php include('footer.php'); ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-lg-square rounded-0 back-to-top" style="background-color:#002219;"><i class="bi bi-arrow-up" style="color:#fff;"></i></a> -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>