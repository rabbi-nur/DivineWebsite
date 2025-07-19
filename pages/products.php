<?php
/**
 * Products Component
 * This file contains the product showcase/grid
 */

$products = [
  [
    "title" => "Premium Knitwear",
    "price" => "Contact for Quote",
    "meta"  => "High Quality • Sustainable",
    "mainImage" => "img/products/knit1.webp",
    "hoverImage" => "img/products/knit1-hover.webp",
    "variants" => [
      [
        "img1" => "img/products/knit1.webp",
        "img2" => "img/products/knit1-hover.webp",
        "thumb" => "img/products/knit1-thumb.webp",
        "title" => "Premium Knitwear",
        "meta" => "Cotton Blend • Sustainable"
      ],
      [
        "img1" => "img/products/knit2.webp",
        "img2" => "img/products/knit2-hover.webp",
        "thumb" => "img/products/knit2-thumb.webp",
        "title" => "Organic Cotton Knit",
        "meta" => "100% Organic • GOTS Certified"
      ]
    ]
  ],
  [
    "title" => "Sustainable Fabrics",
    "price" => "Contact for Quote",
    "meta"  => "Eco-Friendly • Premium Quality",
    "mainImage" => "img/products/fabric1.webp",
    "hoverImage" => "img/products/fabric1-hover.webp",
    "variants" => [
      [
        "img1" => "img/products/fabric1.webp",
        "img2" => "img/products/fabric1-hover.webp",
        "thumb" => "img/products/fabric1-thumb.webp",
        "title" => "Sustainable Fabrics",
        "meta" => "Recycled Materials • Eco-Friendly"
      ]
    ]
  ],
  [
    "title" => "Custom Textiles",
    "price" => "Contact for Quote",
    "meta"  => "Made to Order • Premium",
    "mainImage" => "img/products/custom1.webp",
    "hoverImage" => "img/products/custom1-hover.webp",
    "variants" => [
      [
        "img1" => "img/products/custom1.webp",
        "img2" => "img/products/custom1-hover.webp",
        "thumb" => "img/products/custom1-thumb.webp",
        "title" => "Custom Textiles",
        "meta" => "Bespoke Design • Premium Quality"
      ]
    ]
  ]
];
?>

<div class="container py-5">
    <div class="product-grid">
        <?php foreach ($products as $product): ?>
        <article class="product-card" role="region" aria-label="<?= htmlspecialchars($product['title']) ?>">
            <div class="product-img-container" aria-live="polite">
                <img src="<?= $product['mainImage'] ?>" class="primary" alt="<?= htmlspecialchars($product['title']) ?>" loading="lazy" onerror="this.src='img/placeholder-product.jpg'">
                <img src="<?= $product['hoverImage'] ?>" class="secondary" alt="Alternate view" loading="lazy" onerror="this.src='img/placeholder-product.jpg'">
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
                        <img src="<?= $variant['thumb'] ?>" alt="Variant <?= $i+1 ?>" loading="lazy" onerror="this.src='img/placeholder-thumb.jpg'">
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="arrow right" aria-label="Next">▶</div>
            </div>
            <div class="product-info">
                <div class="product-price"><?= $product['price'] ?></div>
                <div class="product-title"><?= $product['title'] ?></div>
                <div class="product-meta"><?= $product['meta'] ?></div>
                <div class="product-actions mt-3">
                    <a href="/?page=contact" class="btn btn-primary btn-sm">Get Quote</a>
                    <a href="/?page=products" class="btn btn-outline-secondary btn-sm">View Details</a>
                </div>
            </div>
        </article>
        <?php endforeach; ?>
    </div>
</div>

<style>
.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: auto;
}

.product-card {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 12px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
}

.product-card:hover { 
    transform: translateY(-5px); 
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.product-img-container {
    position: relative;
    width: 100%;
    aspect-ratio: 1/1;
    overflow: hidden;
    background: #f8f9fa;
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

.product-info { padding: 20px; }
.product-price { 
    font-weight: bold; 
    margin-bottom: 8px; 
    font-size: 18px; 
    color: #79B905;
}
.product-title { 
    font-weight: 600; 
    font-size: 16px; 
    margin-bottom: 4px; 
    transition: opacity 0.3s; 
}
.product-meta { 
    font-size: 14px; 
    color: #777; 
    margin-bottom: 15px; 
    transition: opacity 0.3s; 
}

/* Swatch Slider */
.swatch-container {
    position: relative;
    padding: 15px;
    background: #f8f9fa;
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

.thumb img { 
    width: 100%; 
    height: 100%; 
    object-fit: cover; 
}

.thumb.active { border-color: #79B905; }
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
    color: #333;
}

.arrow.left { left: 5px; }
.arrow.right { right: 5px; }
.arrow:hover { background: #fff; }

.product-actions {
    display: flex;
    gap: 10px;
}

.product-actions .btn {
    flex: 1;
    text-align: center;
}

@media (max-width: 768px) {
    .product-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }
    
    .product-info {
        padding: 15px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
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
            if (thumbs[index]) {
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
        }

        if (leftArrow) {
            leftArrow.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + thumbs.length) % thumbs.length;
                updateVariant(currentIndex);
                if (slider && thumbs[currentIndex]) {
                    slider.scrollTo({ left: thumbs[currentIndex].offsetLeft - 20, behavior: 'smooth' });
                }
            });
        }

        if (rightArrow) {
            rightArrow.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % thumbs.length;
                updateVariant(currentIndex);
                if (slider && thumbs[currentIndex]) {
                    slider.scrollTo({ left: thumbs[currentIndex].offsetLeft - 20, behavior: 'smooth' });
                }
            });
        }

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
});
</script>