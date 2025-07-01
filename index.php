<!DOCTYPE html>
<html lang="en">
  <?php include('head.php'); ?>
  <body>
    <?php include('header.php'); ?>

<section class="hero">
  <div class="hero-slider">
    <button class="slider-btn prev-btn"><i class="fas fa-chevron-left"></i></button>
    <button class="slider-btn next-btn"><i class="fas fa-chevron-right"></i></button>
    <?php
      $slides = [
        ['image' => './img/DSC00115.webp'],
        ['image' => './img/DJI_0178.JPG'],
        ['image' => './img/DJI_0188.JPG'],
      ];

      foreach ($slides as $slide) {
    ?>
    <div class="slide" style="background-image: url('<?php echo $slide['image']; ?>');">
      <div class="hero-content">
        <span style="color: #79B905">🪡Sustainably Crafted. Naturally Yours</span>
        <h1>TRANSFORMING HABITS<br />
      ONE SUSTAINABLE<br />
      PRODUCT AT A TIME</h1>
        <p class="subtext">Collaborating globally with sustainable products to promote
      eco-conscious choices while supporting ethical practices and
      environmental preservation.</p>
        <a href="#" class="cta-btn"><i class="fa-solid fa-play" style="color: #fff"></i>Explore More</a>
      </div>
    </div>
    <?php } ?>
  </div>
  <div class="slider-dots"></div>
</section>

    
    <?php include('footer.php'); ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>
