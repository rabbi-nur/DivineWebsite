<?php
/**
 * Products Component
 * This file contains the product showcase/grid
 */

$products = [
  [
    "title" => "Premium Textile Collection",
    "price" => "Contact for Quote",
    "meta"  => "High Quality • Sustainable",
    "mainImage" => "img/products/card1/item_normal.webp",
    "hoverImage" => "img/products/card1/item_hover.webp",
    "variants" => [
      [
        "img1" => "img/products/card1/item_normal.webp",
        "img2" => "img/products/card1/item_hover.webp",
        "thumb" => "img/products/card1/item_thumb.webp",
        "title" => "Premium Textile Collection",
        "meta" => "Original White • Premium Quality"
      ],
      [
        "img1" => "img/products/card1/item_black_normal.webp",
        "img2" => "img/products/card1/item_black_hover.webp",
        "thumb" => "img/products/card1/item_black_thumb.webp",
        "title" => "Black Edition Collection",
        "meta" => "Black Edition • Premium"
      ],
      [
        "img1" => "img/products/card1/item_pink_normal.webp",
        "img2" => "img/products/card1/item_pink_hover.webp",
        "thumb" => "img/products/card1/item_pink_thumb.webp",
        "title" => "Pink Collection",
        "meta" => "Pink Edition • Stylish"
      ],
      [
        "img1" => "img/products/card1/item_vintage_normal.webp",
        "img2" => "img/products/card1/item_vintage_hover.webp",
        "thumb" => "img/products/card1/item_vintage_thumb.webp",
        "title" => "Vintage Collection",
        "meta" => "Vintage Style • Limited Edition"
      ]
    ]
  ],
  [
    "title" => "Knitting Solutions",
    "price" => "Contact for Quote",
    "meta"  => "Premium Knit • Eco-Friendly",
    "mainImage" => "img/knitting.webp",
    "hoverImage" => "img/knitting.JPG",
    "variants" => [
      [
        "img1" => "img/knitting.webp",
        "img2" => "img/knitting.JPG",
        "thumb" => "img/knitting.webp",
        "title" => "Knitting Solutions",
        "meta" => "Premium Knit Fabrics"
      ]
    ]
  ],
  [
    "title" => "Spinning Services",
    "price" => "Contact for Quote",
    "meta"  => "High-Quality Yarn • Sustainable",
    "mainImage" => "img/spinning.webp",
    "hoverImage" => "img/spinning.JPG",
    "variants" => [
      [
        "img1" => "img/spinning.webp",
        "img2" => "img/spinning.JPG",
        "thumb" => "img/spinning.webp",
        "title" => "Spinning Services",
        "meta" => "Premium Yarn Production"
      ]
    ]
  ],
  [
    "title" => "Dyeing & Finishing",
    "price" => "Contact for Quote",
    "meta"  => "Advanced Dyeing • Color Excellence",
    "mainImage" => "img/dyeing.webp",
    "hoverImage" => "img/dyeing.JPG",
    "variants" => [
      [
        "img1" => "img/dyeing.webp",
        "img2" => "img/dyeing.JPG",
        "thumb" => "img/dyeing.webp",
        "title" => "Dyeing & Finishing",
        "meta" => "Advanced Color Solutions"
      ]
    ]
  ],
  [
    "title" => "All Over Print (AOP)",
    "price" => "Contact for Quote",
    "meta"  => "Custom Printing • Innovative Designs",
    "mainImage" => "img/aop.webp",
    "hoverImage" => "img/aop.JPG",
    "variants" => [
      [
        "img1" => "img/aop.webp",
        "img2" => "img/aop.JPG",
        "thumb" => "img/aop.webp",
        "title" => "All Over Print (AOP)",
        "meta" => "Custom Print Solutions"
      ]
    ]
  ],
  [
    "title" => "Embroidery Services",
    "price" => "Contact for Quote",
    "meta"  => "Exquisite Embroidery • Premium Finish",
    "mainImage" => "img/embroidery.webp",
    "hoverImage" => "img/embroidery.JPG",
    "variants" => [
      [
        "img1" => "img/embroidery.webp",
        "img2" => "img/embroidery.JPG",
        "thumb" => "img/embroidery.webp",
        "title" => "Embroidery Services",
        "meta" => "Premium Embroidery Work"
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
                    <a href="./?page=contact" class="btn btn-primary btn-sm">Get Quote</a>
                    <a href="./?page=products" class="btn btn-outline-secondary btn-sm">View Details</a>
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
    display: flex;
    align-items: center;
    justify-content: center;
}

.product-img-container::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 40px;
    height: 40px;
    border: 3px solid #79B905;
    border-top: 3px solid transparent;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    z-index: 1;
}

.product-img-container img:first-child {
    z-index: 2;
}

@keyframes spin {
    0% { transform: translate(-50%, -50%) rotate(0deg); }
    100% { transform: translate(-50%, -50%) rotate(360deg); }
}

.product-img-container img {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: opacity 0.4s ease;
    opacity: 0;
    animation: fadeIn 0.5s ease forwards;
}

@keyframes fadeIn {
    to { opacity: 1; }
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
    // Initialize product cards
    document.querySelectorAll('.product-card').forEach(card => {
        const primaryImg = card.querySelector('img.primary');
        const secondaryImg = card.querySelector('img.secondary');
        const titleEl = card.querySelector('.product-title');
        const metaEl = card.querySelector('.product-meta');
        const thumbs = card.querySelectorAll('.thumb');
        const slider = card.querySelector('.swatch-slider');
        const leftArrow = card.querySelector('.arrow.left');
        const rightArrow = card.querySelector('.arrow.right');

        // Check if all required elements exist
        if (!primaryImg || !secondaryImg || !titleEl || !metaEl) {
            console.warn('Missing required elements in product card');
            return;
        }

        let currentIndex = 0;

        function updateVariant(index) {
            if (index < 0 || index >= thumbs.length) return;
            
            thumbs.forEach(t => t.classList.remove('active'));
            thumbs[index].classList.add('active');
            
            // Update images with error handling
            const newImg1 = thumbs[index].dataset.img1;
            const newImg2 = thumbs[index].dataset.img2;
            
            if (newImg1) primaryImg.src = newImg1;
            if (newImg2) secondaryImg.src = newImg2;

            // Update text with smooth transition
            titleEl.style.opacity = 0;
            metaEl.style.opacity = 0;
            
            setTimeout(() => {
                titleEl.textContent = thumbs[index].dataset.title || 'Product';
                metaEl.textContent = thumbs[index].dataset.meta || 'Premium Quality';
                titleEl.style.opacity = 1;
                metaEl.style.opacity = 1;
            }, 150);
        }

        // Arrow navigation
        if (leftArrow && thumbs.length > 1) {
            leftArrow.addEventListener('click', (e) => {
                e.preventDefault();
                currentIndex = (currentIndex - 1 + thumbs.length) % thumbs.length;
                updateVariant(currentIndex);
                
                if (slider && thumbs[currentIndex]) {
                    const scrollLeft = Math.max(0, thumbs[currentIndex].offsetLeft - 20);
                    slider.scrollTo({ left: scrollLeft, behavior: 'smooth' });
                }
            });
        }

        if (rightArrow && thumbs.length > 1) {
            rightArrow.addEventListener('click', (e) => {
                e.preventDefault();
                currentIndex = (currentIndex + 1) % thumbs.length;
                updateVariant(currentIndex);
                
                if (slider && thumbs[currentIndex]) {
                    const scrollLeft = Math.max(0, thumbs[currentIndex].offsetLeft - 20);
                    slider.scrollTo({ left: scrollLeft, behavior: 'smooth' });
                }
            });
        }

        // Thumbnail interactions
        thumbs.forEach((thumb, i) => {
            // Hover effect
            thumb.addEventListener('mouseenter', () => {
                const img1 = thumb.dataset.img1;
                const img2 = thumb.dataset.img2;
                if (img1) primaryImg.src = img1;
                if (img2) secondaryImg.src = img2;
            });

            // Click to select
            thumb.addEventListener('click', (e) => {
                e.preventDefault();
                currentIndex = i;
                updateVariant(currentIndex);
            });
        });

        // Hide arrows if only one variant
        if (thumbs.length <= 1) {
            if (leftArrow) leftArrow.style.display = 'none';
            if (rightArrow) rightArrow.style.display = 'none';
        }
    });

    // Add loading states for images
    document.querySelectorAll('.product-card img').forEach(img => {
        img.addEventListener('load', function() {
            this.style.opacity = '1';
        });
        
        img.addEventListener('error', function() {
            console.warn('Failed to load image:', this.src);
            // You can set a placeholder image here if needed
            // this.src = 'img/placeholder.jpg';
        });
    });
});
</script>