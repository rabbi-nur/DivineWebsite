<?php
/**
 * Premium Products Infinite Slider Component - Decathlon Style
 * Center-focused slider with enlarged active slide
 */

$premium_products = [
    [
        'id' => 1,
        'title' => 'Divine Knitwear Collection',
        'subtitle' => 'Most Popular',
        'rating' => 4.8,
        'reviews' => 1247,
        'description' => 'Premium knitwear made from sustainable materials with superior comfort and durability.',
        'price' => '$89.99',
        'original_price' => '$119.99',
        'discount' => 'Save 25%',
        'image' => 'img/knitting.webp',
        'category' => 'Most Popular',
        'swatches' => [
            ['color' => '#2c3e50', 'name' => 'Navy', 'image' => 'img/knitting.webp'],
            ['color' => '#27ae60', 'name' => 'Forest Green', 'image' => 'img/knitting.JPG'],
            ['color' => '#8b4513', 'name' => 'Brown', 'image' => 'img/knitting.webp']
        ]
    ],
    [
        'id' => 2,
        'title' => 'Divine Premium Fabrics',
        'subtitle' => 'Staff Pick',
        'rating' => 4.9,
        'reviews' => 892,
        'description' => 'High-quality fabrics with advanced weaving technology for premium fashion brands.',
        'price' => '$124.99',
        'original_price' => null,
        'discount' => null,
        'image' => 'img/spinning.webp',
        'category' => 'Staff Pick',
        'swatches' => [
            ['color' => '#34495e', 'name' => 'Charcoal', 'image' => 'img/spinning.webp'],
            ['color' => '#95a5a6', 'name' => 'Silver', 'image' => 'img/spinning.JPG']
        ]
    ],
    [
        'id' => 3,
        'title' => 'Divine Color Solutions',
        'subtitle' => 'Trending Now',
        'rating' => 4.7,
        'reviews' => 634,
        'description' => 'Professional dyeing services with vibrant, long-lasting colors and eco-friendly processes.',
        'price' => '$79.99',
        'original_price' => '$99.99',
        'discount' => 'Save 20%',
        'image' => 'img/dyeing.webp',
        'category' => 'Trending Now',
        'swatches' => [
            ['color' => '#e74c3c', 'name' => 'Red', 'image' => 'img/dyeing.webp'],
            ['color' => '#3498db', 'name' => 'Blue', 'image' => 'img/dyeing.JPG'],
            ['color' => '#f39c12', 'name' => 'Orange', 'image' => 'img/dyeing.webp']
        ]
    ],
    [
        'id' => 4,
        'title' => 'Divine Print Mastery',
        'subtitle' => 'Adventure Ready',
        'rating' => 4.6,
        'reviews' => 445,
        'description' => 'All-over printing technology for unlimited design possibilities on various fabric types.',
        'price' => '$159.99',
        'original_price' => null,
        'discount' => null,
        'image' => 'img/aop.webp',
        'category' => 'Adventure Ready',
        'swatches' => [
            ['color' => '#9b59b6', 'name' => 'Purple', 'image' => 'img/aop.webp'],
            ['color' => '#1abc9c', 'name' => 'Teal', 'image' => 'img/aop.JPG']
        ]
    ],
    [
        'id' => 5,
        'title' => 'Divine Embroidery Art',
        'subtitle' => 'Most Popular',
        'rating' => 4.8,
        'reviews' => 756,
        'description' => 'Exquisite embroidery work adding elegance and sophistication to premium textiles.',
        'price' => '$199.99',
        'original_price' => '$249.99',
        'discount' => 'Save 20%',
        'image' => 'img/embroidery.webp',
        'category' => 'Most Popular',
        'swatches' => [
            ['color' => '#2c3e50', 'name' => 'Navy', 'image' => 'img/embroidery.webp'],
            ['color' => '#c0392b', 'name' => 'Burgundy', 'image' => 'img/embroidery.JPG'],
            ['color' => '#f1c40f', 'name' => 'Gold', 'image' => 'img/embroidery.webp']
        ]
    ]
];
?>

<div class="decathlon-slider-section py-5">
    <div class="container-fluid">
        <!-- Navigation Arrows -->
        <button class="decathlon-nav-btn decathlon-nav-left" aria-label="Previous">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="decathlon-nav-btn decathlon-nav-right" aria-label="Next">
            <i class="fas fa-chevron-right"></i>
        </button>

        <!-- Slider Container -->
        <div class="decathlon-slider-container">
            <div class="decathlon-slider-track" id="decathlonSliderTrack">
                <?php 
                // Triple the products for infinite scroll
                $all_products = array_merge($premium_products, $premium_products, $premium_products);
                foreach($all_products as $index => $product): 
                ?>
                <div class="decathlon-slide" data-product-id="<?= $product['id'] ?>" data-index="<?= $index ?>">
                    <!-- Background Image -->
                    <div class="slide-bg-container">
                        <img src="<?= $product['image'] ?>" 
                             alt="<?= htmlspecialchars($product['title']) ?>"
                             class="slide-bg-image">
                        
                        <!-- Category Badge -->
                        <div class="slide-category-badge">
                            <?= htmlspecialchars($product['category']) ?>
                        </div>
                        
                        <!-- Discount Badge -->
                        <?php if($product['discount']): ?>
                        <div class="slide-discount-badge">
                            <?= htmlspecialchars($product['discount']) ?>
                        </div>
                        <?php endif; ?>
                        
                        <!-- Overlay Title -->
                        <div class="slide-title-overlay">
                            <h3><?= htmlspecialchars($product['subtitle']) ?></h3>
                        </div>
                    </div>

                    <!-- Product Info Card -->
                    <div class="slide-info-card">
                        <!-- Product Thumbnail -->
                        <div class="product-thumbnail">
                            <img src="<?= $product['image'] ?>" 
                                 alt="<?= htmlspecialchars($product['title']) ?>"
                                 class="thumbnail-image">
                        </div>

                        <!-- Color Swatches -->
                        <div class="product-swatches">
                            <?php foreach($product['swatches'] as $swatch_index => $swatch): ?>
                            <button class="color-swatch <?= $swatch_index === 0 ? 'active' : '' ?>" 
                                    style="background-color: <?= $swatch['color'] ?>"
                                    data-image="<?= $swatch['image'] ?>"
                                    data-color="<?= htmlspecialchars($swatch['name']) ?>"
                                    title="<?= htmlspecialchars($swatch['name']) ?>">
                            </button>
                            <?php endforeach; ?>
                        </div>

                        <!-- Product Details -->
                        <div class="product-details">
                            <h4 class="product-title"><?= htmlspecialchars($product['title']) ?></h4>
                            
                            <div class="product-rating">
                                <span class="stars">★ <?= $product['rating'] ?></span>
                                <span class="reviews">(<?= number_format($product['reviews']) ?>)</span>
                            </div>
                            
                            <p class="product-description"><?= htmlspecialchars($product['description']) ?></p>
                            
                            <div class="product-price">
                                <span class="price-current"><?= htmlspecialchars($product['price']) ?></span>
                                <?php if($product['original_price']): ?>
                                <span class="price-original"><?= htmlspecialchars($product['original_price']) ?></span>
                                <?php endif; ?>
                            </div>
                            
                            <button class="choose-options-btn">
                                Choose options
                            </button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Pagination Dots -->
        <div class="decathlon-pagination">
            <?php for($i = 0; $i < count($premium_products); $i++): ?>
            <button class="pagination-dot <?= $i === 0 ? 'active' : '' ?>" data-slide="<?= $i ?>"></button>
            <?php endfor; ?>
        </div>
    </div>
</div>

<style>
.decathlon-slider-section {
    position: relative;
    background: #f8f9fa;
    overflow: hidden;
    padding: 60px 0;
}

.decathlon-nav-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 50px;
    height: 50px;
    border: none;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.95);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    z-index: 100;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #333;
    font-size: 18px;
    transition: all 0.3s ease;
}

.decathlon-nav-btn:hover {
    background: white;
    box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
    transform: translateY(-50%) scale(1.1);
}

.decathlon-nav-left {
    left: 20px;
}

.decathlon-nav-right {
    right: 20px;
}

.decathlon-slider-container {
    width: 100%;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 500px;
}

.decathlon-slider-track {
    display: flex;
    align-items: center;
    transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    will-change: transform;
}

.decathlon-slide {
    flex: 0 0 auto;
    width: 300px;
    margin: 0 15px;
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    position: relative;
    opacity: 0.6;
    transform: scale(0.8);
    filter: blur(2px);
}

/* CENTER/ACTIVE SLIDE - This is the key! */
.decathlon-slide.center-active {
    width: 420px;
    opacity: 1;
    transform: scale(1);
    filter: blur(0);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    z-index: 10;
}

.decathlon-slide:hover {
    opacity: 0.8;
    transform: scale(0.85);
}

.decathlon-slide.center-active:hover {
    transform: scale(1.02);
}

.slide-bg-container {
    position: relative;
    height: 200px;
    overflow: hidden;
    transition: all 0.6s ease;
}

.decathlon-slide.center-active .slide-bg-container {
    height: 260px;
}

.slide-bg-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}

.decathlon-slide.center-active .slide-bg-image {
    transform: scale(1.05);
}

.slide-category-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    background: rgba(121, 185, 5, 0.95);
    color: white;
    padding: 6px 12px;
    border-radius: 15px;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    backdrop-filter: blur(10px);
}

.slide-discount-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: linear-gradient(135deg, #ff6b6b, #ee5a24);
    color: white;
    padding: 6px 10px;
    border-radius: 12px;
    font-size: 10px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    animation: pulse 2s infinite;
}

.slide-title-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
    padding: 30px 20px 15px;
    color: white;
}

.slide-title-overlay h3 {
    font-size: 20px;
    font-weight: 700;
    margin: 0;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    transition: all 0.6s ease;
}

.decathlon-slide.center-active .slide-title-overlay h3 {
    font-size: 24px;
}

.slide-info-card {
    padding: 20px;
    transition: all 0.6s ease;
}

.decathlon-slide.center-active .slide-info-card {
    padding: 25px;
}

.product-thumbnail {
    width: 70px;
    height: 70px;
    border-radius: 12px;
    overflow: hidden;
    margin-bottom: 15px;
    border: 2px solid #f1f1f1;
    transition: all 0.6s ease;
}

.decathlon-slide.center-active .product-thumbnail {
    width: 90px;
    height: 90px;
    border-radius: 16px;
    border: 3px solid #e2e8f0;
}

.thumbnail-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.6s ease;
}

.product-swatches {
    display: flex;
    gap: 6px;
    margin-bottom: 15px;
    align-items: center;
}

.color-swatch {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    border: 2px solid transparent;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
}

.decathlon-slide.center-active .color-swatch {
    width: 24px;
    height: 24px;
}

.color-swatch:hover,
.color-swatch.active {
    border-color: #333;
    transform: scale(1.1);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}

.color-swatch.active::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: white;
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2);
}

.decathlon-slide.center-active .color-swatch.active::after {
    width: 8px;
    height: 8px;
}

.product-details {
    flex: 1;
}

.product-title {
    font-size: 14px;
    font-weight: 700;
    color: #333;
    margin-bottom: 8px;
    line-height: 1.3;
    transition: all 0.6s ease;
}

.decathlon-slide.center-active .product-title {
    font-size: 16px;
    margin-bottom: 10px;
}

.product-rating {
    display: flex;
    align-items: center;
    gap: 6px;
    margin-bottom: 10px;
    transition: all 0.6s ease;
}

.stars {
    color: #ffc107;
    font-size: 12px;
    font-weight: 600;
}

.decathlon-slide.center-active .stars {
    font-size: 14px;
}

.reviews {
    font-size: 11px;
    color: #666;
}

.decathlon-slide.center-active .reviews {
    font-size: 12px;
}

.product-description {
    font-size: 12px;
    color: #666;
    line-height: 1.4;
    margin-bottom: 15px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    transition: all 0.6s ease;
}

.decathlon-slide.center-active .product-description {
    font-size: 13px;
    -webkit-line-clamp: 3;
    margin-bottom: 18px;
}

.product-price {
    margin-bottom: 15px;
    transition: all 0.6s ease;
}

.price-current {
    font-size: 16px;
    font-weight: 700;
    color: #79B905;
    transition: all 0.6s ease;
}

.decathlon-slide.center-active .price-current {
    font-size: 20px;
}

.price-original {
    font-size: 12px;
    color: #999;
    text-decoration: line-through;
    margin-left: 8px;
}

.decathlon-slide.center-active .price-original {
    font-size: 14px;
}

.choose-options-btn {
    width: 100%;
    background: #4a5568;
    color: white;
    border: none;
    padding: 8px 14px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 12px;
    cursor: pointer;
    transition: all 0.6s ease;
}

.decathlon-slide.center-active .choose-options-btn {
    padding: 12px 18px;
    border-radius: 10px;
    font-size: 14px;
    background: #2563eb;
}

.choose-options-btn:hover {
    background: #2d3748;
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(74, 85, 104, 0.3);
}

.decathlon-slide.center-active .choose-options-btn:hover {
    background: #1d4ed8;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(37, 99, 235, 0.4);
}

.decathlon-pagination {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-top: 40px;
}

.pagination-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    border: none;
    background: #cbd5e0;
    cursor: pointer;
    transition: all 0.3s ease;
}

.pagination-dot.active {
    background: #4a5568;
    transform: scale(1.3);
}

.pagination-dot:hover {
    background: #79B905;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .decathlon-slide {
        width: 250px;
        margin: 0 10px;
    }
    
    .decathlon-slide.center-active {
        width: 320px;
    }
    
    .decathlon-nav-btn {
        width: 40px;
        height: 40px;
        font-size: 14px;
    }
    
    .slide-bg-container {
        height: 160px;
    }
    
    .decathlon-slide.center-active .slide-bg-container {
        height: 200px;
    }
}

@media (max-width: 480px) {
    .decathlon-slide {
        width: 220px;
        margin: 0 8px;
    }
    
    .decathlon-slide.center-active {
        width: 280px;
    }
    
    .decathlon-nav-btn {
        display: none;
    }
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sliderSection = document.querySelector('.decathlon-slider-section');
    if (!sliderSection) return;

    const sliderTrack = document.getElementById('decathlonSliderTrack');
    const slides = sliderSection.querySelectorAll('.decathlon-slide');
    const leftBtn = sliderSection.querySelector('.decathlon-nav-left');
    const rightBtn = sliderSection.querySelector('.decathlon-nav-right');
    const dots = sliderSection.querySelectorAll('.pagination-dot');
    const swatchBtns = sliderSection.querySelectorAll('.color-swatch');
    const actionBtns = sliderSection.querySelectorAll('.choose-options-btn');

    let currentIndex = 0;
    let isTransitioning = false;
    const slideWidth = 330; // 300px + 30px margin
    const originalProductCount = Math.floor(slides.length / 3);
    
    // Start from middle set for infinite scroll
    currentIndex = originalProductCount;
    
    // Center the slider
    function centerSlider() {
        const containerWidth = sliderSection.offsetWidth;
        const centerOffset = containerWidth / 2 - slideWidth / 2;
        return centerOffset - currentIndex * slideWidth;
    }
    
    // Update active slide
    function updateActiveSlide() {
        const realIndex = currentIndex % originalProductCount;
        
        // Update dots
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === realIndex);
        });
        
        // Update center active slide
        slides.forEach((slide, index) => {
            slide.classList.remove('center-active');
        });
        
        // Find the slide that should be active (closest to current index)
        const activeSlide = slides[currentIndex];
        if (activeSlide) {
            activeSlide.classList.add('center-active');
        }
    }
    
    // Slide to specific index
    function slideTo(index, smooth = true) {
        if (isTransitioning) return;
        
        isTransitioning = true;
        currentIndex = index;
        
        if (smooth) {
            sliderTrack.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
        } else {
            sliderTrack.style.transition = 'none';
        }
        
        sliderTrack.style.transform = `translateX(${centerSlider()}px)`;
        updateActiveSlide();
        
        setTimeout(() => {
            isTransitioning = false;
            
            // Handle infinite loop
            if (currentIndex >= slides.length - originalProductCount) {
                currentIndex = originalProductCount;
                sliderTrack.style.transition = 'none';
                sliderTrack.style.transform = `translateX(${centerSlider()}px)`;
                updateActiveSlide();
            } else if (currentIndex < originalProductCount) {
                currentIndex = slides.length - originalProductCount - 1;
                sliderTrack.style.transition = 'none';
                sliderTrack.style.transform = `translateX(${centerSlider()}px)`;
                updateActiveSlide();
            }
        }, smooth ? 600 : 0);
    }

    // Navigation
    if (leftBtn) {
        leftBtn.addEventListener('click', () => slideTo(currentIndex - 1));
    }

    if (rightBtn) {
        rightBtn.addEventListener('click', () => slideTo(currentIndex + 1));
    }

    // Pagination dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            const targetIndex = originalProductCount + index;
            slideTo(targetIndex);
        });
    });

    // Color swatches
    swatchBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const slide = this.closest('.decathlon-slide');
            const thumbnailImage = slide.querySelector('.thumbnail-image');
            const newImage = this.dataset.image;
            
            slide.querySelectorAll('.color-swatch').forEach(s => s.classList.remove('active'));
            this.classList.add('active');
            
            if (thumbnailImage && newImage) {
                thumbnailImage.style.opacity = '0';
                setTimeout(() => {
                    thumbnailImage.src = newImage;
                    thumbnailImage.style.opacity = '1';
                }, 150);
            }
        });
    });

    // Action buttons
    actionBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            window.location.href = '/?page=products';
        });
    });

    // Touch support
    let startX = 0;
    let currentX = 0;
    let isDragging = false;

    sliderTrack.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
        isDragging = true;
        sliderTrack.style.transition = 'none';
    });

    sliderTrack.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        e.preventDefault();
        currentX = e.touches[0].clientX;
        const diff = currentX - startX;
        sliderTrack.style.transform = `translateX(${centerSlider() + diff}px)`;
    });

    sliderTrack.addEventListener('touchend', () => {
        if (!isDragging) return;
        isDragging = false;
        
        const diff = currentX - startX;
        const threshold = slideWidth * 0.3;
        
        if (Math.abs(diff) > threshold) {
            if (diff > 0) {
                slideTo(currentIndex - 1);
            } else {
                slideTo(currentIndex + 1);
            }
        } else {
            slideTo(currentIndex);
        }
    });

    // Auto-play
    let autoPlayInterval;
    
    function startAutoPlay() {
        autoPlayInterval = setInterval(() => {
            if (!isTransitioning && !isDragging) {
                slideTo(currentIndex + 1);
            }
        }, 4000);
    }
    
    function stopAutoPlay() {
        clearInterval(autoPlayInterval);
    }
    
    startAutoPlay();
    
    sliderSection.addEventListener('mouseenter', stopAutoPlay);
    sliderSection.addEventListener('mouseleave', startAutoPlay);

    // Initialize
    sliderTrack.style.transform = `translateX(${centerSlider()}px)`;
    updateActiveSlide();
    
    // Handle resize
    window.addEventListener('resize', () => {
        sliderTrack.style.transition = 'none';
        sliderTrack.style.transform = `translateX(${centerSlider()}px)`;
        setTimeout(() => {
            sliderTrack.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
        }, 100);
    });
});
</script>