<?php
/**
 * Main Router - Framework Entry Point
 * This file handles all page routing and uses the layout system
 */

// Include the layout system
require_once __DIR__ . '/includes/layout.php';
require_once __DIR__ . '/includes/page-helper.php';

// Get the requested page
$page = $_GET['page'] ?? 'home';

// Define available pages and their configurations
$pages = [
    'home' => [
        'title' => 'Divine Group - Premium Textile Solutions',
        'description' => 'Leading textile manufacturer specializing in sustainable knitwear, fabrics, and garment production with global reach.',
        'content_file' => __DIR__ . '/pages/home-content.php',
        'show_loader' => true
    ],
    'about' => [
        'title' => 'About Us - Divine Group',
        'description' => 'Learn about Divine Group\'s journey, leadership, and commitment to sustainable textile innovation since 1997.',
        'content_file' => __DIR__ . '/pages/about-content.php',
        'show_loader' => false,
        'styles' => ['css/about-page.css'] // Add custom styles if needed
    ],
    'products' => [
        'title' => 'Our Products - Divine Group',
        'description' => 'Explore our comprehensive range of premium textile products including spinning, knitting, dyeing, and finishing services.',
        'content_file' => __DIR__ . '/pages/products-content.php',
        'show_loader' => false
    ],
    'process' => [
        'title' => 'Our Process - Divine Group',
        'description' => 'Discover our advanced manufacturing processes and quality control systems.',
        'content_file' => __DIR__ . '/pages/process-content.php',
        'show_loader' => false
    ],
    'sustainability' => [
        'title' => 'Sustainability - Divine Group',
        'description' => 'Our commitment to sustainable practices and environmental responsibility.',
        'content_file' => __DIR__ . '/pages/sustainability-content.php',
        'show_loader' => false
    ],
    'contact' => [
        'title' => 'Contact Us - Divine Group',
        'description' => 'Get in touch with Divine Group for your textile needs and partnership opportunities.',
        'content_file' => __DIR__ . '/pages/contact-content.php',
        'show_loader' => false
    ]
];

// Check if the requested page exists
if (!array_key_exists($page, $pages)) {
    $page = 'home'; // Fallback to home page
}

$page_config = $pages[$page];

// Create layout instance with page-specific data
$layout = new Layout([
    'title' => $page_config['title'],
    'description' => $page_config['description'],
    'keywords' => $page_config['keywords'] ?? 'textile, sustainable fashion, divine group, knitwear',
    'image' => $page_config['image'] ?? 'img/Divine Logo.png'
]);

// Add page-specific styles and scripts
if (isset($page_config['styles'])) {
    foreach ($page_config['styles'] as $style) {
        $layout->addStyle($style);
    }
}

if (isset($page_config['scripts'])) {
    foreach ($page_config['scripts'] as $script) {
        $layout->addScript($script);
    }
}

// Render the complete page
$layout->render(
    $page_config['content_file'], 
    $page_config['show_loader'] ?? false
);
?>