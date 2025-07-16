<?php
$products = [
  [
    "title" => "Wales Bonner 3-Stripes Socks",
    "price" => "$80",
    "meta"  => "2 pack • Originals",
    "mainImage" => "img/products/card1/item_normal.webp",
    "hoverImage" => "img/products/card1/item_hover.webp",
    "variants" => [
      [
        "img1" => "img/products/card1/item_normal.webp",
        "img2" => "img/products/card1/item_hover.webp",
        "thumb" => "img/products/card1/item_thumb.webp",
        "title" => "Wales Bonner 3-Stripes Socks",
        "meta" => "Original White • 2 pack"
      ],
      [
        "img1" => "img/products/card1/item_black_normal.webp",
        "img2" => "img/products/card1/item_black_hover.webp",
        "thumb" => "img/products/card1/item_black_thumb.webp",
        "title" => "Wales Bonner Black Socks",
        "meta" => "Black Edition • Originals"
      ],
      [
        "img1" => "img/products/card1/item_vintage_normal.webp",
        "img2" => "img/products/card1/item_vintage_hover.webp",
        "thumb" => "img/products/card1/item_vintage_thumb.webp",
        "title" => "Wales Bonner Vintage Socks",
        "meta" => "Retro Style • Limited"
      ]
    ]
      ],[
    "title" => "Wales Bonner 3-Stripes Socks",
    "price" => "$80",
    "meta"  => "2 pack • Originals",
    "mainImage" => "img/products/card1/item_normal.webp",
    "hoverImage" => "img/products/card1/item_hover.webp",
    "variants" => [
      [
        "img1" => "img/products/card1/item_normal.webp",
        "img2" => "img/products/card1/item_hover.webp",
        "thumb" => "img/products/card1/item_thumb.webp",
        "title" => "Wales Bonner 3-Stripes Socks",
        "meta" => "Original White • 2 pack"
      ],
      [
        "img1" => "img/products/card1/item_black_normal.webp",
        "img2" => "img/products/card1/item_black_hover.webp",
        "thumb" => "img/products/card1/item_black_thumb.webp",
        "title" => "Wales Bonner Black Socks",
        "meta" => "Black Edition • Originals"
      ],
      [
        "img1" => "img/products/card1/item_vintage_normal.webp",
        "img2" => "img/products/card1/item_vintage_hover.webp",
        "thumb" => "img/products/card1/item_vintage_thumb.webp",
        "title" => "Wales Bonner Vintage Socks",
        "meta" => "Retro Style • Limited"
      ]
    ]
      ],[
    "title" => "Wales Bonner 3-Stripes Socks",
    "price" => "$80",
    "meta"  => "2 pack • Originals",
    "mainImage" => "img/products/card1/item_normal.webp",
    "hoverImage" => "img/products/card1/item_hover.webp",
    "variants" => [
      [
        "img1" => "img/products/card1/item_normal.webp",
        "img2" => "img/products/card1/item_hover.webp",
        "thumb" => "img/products/card1/item_thumb.webp",
        "title" => "Wales Bonner 3-Stripes Socks",
        "meta" => "Original White • 2 pack"
      ],
      [
        "img1" => "img/products/card1/item_black_normal.webp",
        "img2" => "img/products/card1/item_black_hover.webp",
        "thumb" => "img/products/card1/item_black_thumb.webp",
        "title" => "Wales Bonner Black Socks",
        "meta" => "Black Edition • Originals"
      ],
      [
        "img1" => "img/products/card1/item_vintage_normal.webp",
        "img2" => "img/products/card1/item_vintage_hover.webp",
        "thumb" => "img/products/card1/item_vintage_thumb.webp",
        "title" => "Wales Bonner Vintage Socks",
        "meta" => "Retro Style • Limited"
      ]
    ]
  ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dynamic Product Showcase</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
<style>
  .product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 40px;
    max-width: 1200px;
    margin: auto;
  }
  .product-card {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 12px;
    overflow: hidden;
    transition: transform 0.3s ease;
    position: relative;
  }
  .product-card:hover { transform: scale(1.02); }
  
  .product-img-container {
    position: relative;
    width: 100%;
    aspect-ratio: 1/1;
    overflow: hidden;
  }
  .product-img-container img {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: opacity 0.4s ease;
  }
  .product-img-container img.secondary { opacity: 0; }
  .product-card:hover .product-img-container img.primary { opacity: 0; }
  .product-card:hover .product-img-container img.secondary { opacity: 1; }

  .product-info { padding: 16px; }
  .product-price { font-weight: bold; margin-bottom: 4px; font-size: 18px; }
  .product-title { font-weight: 600; font-size: 16px; margin-bottom: 4px; transition: opacity 0.3s; }
  .product-meta { font-size: 14px; color: #777; margin-bottom: 10px; transition: opacity 0.3s; }

  /* Swatch Slider */
  .swatch-container {
    position: relative;
    padding: 10px;
  }
  .swatch-slider {
    display: flex;
    gap: 8px;
    scroll-behavior: smooth;
    overflow: hidden;
  }
  .thumb {
    flex: 0 0 auto;
    width: 50px;
    height: 50px;
    border: 2px solid transparent;
    border-radius: 6px;
    overflow: hidden;
    cursor: pointer;
    transition: border-color 0.3s ease;
  }
  .thumb img { width: 100%; height: 100%; object-fit: cover; }
  .thumb.active { border-color: #000; }
  .thumb:hover { border-color: #666; }

  /* Arrows */
  .arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 28px;
    height: 28px;
    background: rgba(255,255,255,0.9);
    border-radius: 50%;
    box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    user-select: none;
    font-size: 14px;
    z-index: 2;
  }
  .arrow.left { left: 0; }
  .arrow.right { right: 0; }
</style>
</head>
<body>

<div class="product-grid">
<?php foreach ($products as $product): ?>
  <article class="product-card" role="region" aria-label="<?= htmlspecialchars($product['title']) ?>">
    <div class="product-img-container" aria-live="polite">
      <img src="<?= $product['mainImage'] ?>" class="primary" alt="<?= htmlspecialchars($product['title']) ?>" loading="lazy">
      <img src="<?= $product['hoverImage'] ?>" class="secondary" alt="Alternate view" loading="lazy">
    </div>
    <div class="swatch-container">
      <div class="arrow left" aria-label="Previous">◀</div>
      <div class="swatch-slider" role="listbox">
        <?php foreach ($product['variants'] as $i => $variant): ?>
          <div class="thumb <?= $i === 0 ? 'active' : '' ?>" 
            data-img1="<?= $variant['img1'] ?>" 
            data-img2="<?= $variant['img2'] ?>"
            data-title="<?= htmlspecialchars($variant['title'] ?? $product['title']) ?>"
            data-meta="<?= htmlspecialchars($variant['meta'] ?? $product['meta']) ?>"
            role="option">
            <img src="<?= $variant['thumb'] ?>" alt="Variant <?= $i+1 ?>" loading="lazy">
          </div>
        <?php endforeach; ?>
      </div>
      <div class="arrow right" aria-label="Next">▶</div>
    </div>
    <div class="product-info">
      <div class="product-price"><?= $product['price'] ?></div>
      <div class="product-title"><?= $product['title'] ?></div>
      <div class="product-meta"><?= $product['meta'] ?></div>
    </div>
  </article>
<?php endforeach; ?>
</div>

<script>
document.querySelectorAll('.product-card').forEach(card => {
  const primaryImg = card.querySelector('img.primary');
  const secondaryImg = card.querySelector('img.secondary');
  const titleEl = card.querySelector('.product-title');
  const metaEl = card.querySelector('.product-meta');
  const thumbs = card.querySelectorAll('.thumb');
  const slider = card.querySelector('.swatch-slider');
  const leftArrow = card.querySelector('.arrow.left');
  const rightArrow = card.querySelector('.arrow.right');

  let currentIndex = 0;

  function updateVariant(index) {
    thumbs.forEach(t => t.classList.remove('active'));
    thumbs[index].classList.add('active');
    primaryImg.src = thumbs[index].dataset.img1;
    secondaryImg.src = thumbs[index].dataset.img2;

    titleEl.style.opacity = 0;
    metaEl.style.opacity = 0;
    setTimeout(() => {
      titleEl.textContent = thumbs[index].dataset.title;
      metaEl.textContent = thumbs[index].dataset.meta;
      titleEl.style.opacity = 1;
      metaEl.style.opacity = 1;
    }, 300);
  }

  leftArrow.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + thumbs.length) % thumbs.length;
    updateVariant(currentIndex);
    slider.scrollTo({ left: thumbs[currentIndex].offsetLeft - 20, behavior: 'smooth' });
  });

  rightArrow.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % thumbs.length;
    updateVariant(currentIndex);
    slider.scrollTo({ left: thumbs[currentIndex].offsetLeft - 20, behavior: 'smooth' });
  });

  thumbs.forEach((thumb, i) => {
    thumb.addEventListener('mouseenter', () => {
      primaryImg.src = thumb.dataset.img1;
      secondaryImg.src = thumb.dataset.img2;
    });
    thumb.addEventListener('click', () => {
      currentIndex = i;
      updateVariant(currentIndex);
    });
  });
});
</script>

</body>
</html>
