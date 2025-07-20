<?php
// Site Configuration
define('SITE_NAME', 'Divine Group');
define('SITE_URL', 'https://divinetextile.com/DG4');
define('SITE_DESCRIPTION', 'Premium textile solutions with sustainability at heart');

// Paths
define('BASE_PATH', __DIR__ . '/..');
define('INCLUDES_PATH', BASE_PATH . '/includes');
define('PAGES_PATH', BASE_PATH . '/pages');
define('ASSETS_PATH', BASE_PATH . '/assets');

// Default page settings
$default_meta = [
    'title' => SITE_NAME,
    'description' => SITE_DESCRIPTION,
    'keywords' => 'textile, sustainable fashion, divine group, knitwear',
    'image' => 'img/Divine Logo.png'
];

// Navigation menu
$navigation = [
    'home' => ['title' => 'Home', 'url' => '/', 'active' => true],
    'about' => ['title' => 'About Us', 'url' => '/about', 'active' => true],
    'products' => ['title' => 'Products', 'url' => '/products', 'active' => true],
    'process' => ['title' => 'Our Process', 'url' => '/process', 'active' => true],
    'sustainability' => ['title' => 'Sustainability', 'url' => '/sustainability', 'active' => true],
    'contact' => ['title' => 'Contact', 'url' => '/contact', 'active' => true],
    'profile' => ['title' => 'Profile', 'url' => '/profile', 'active' => true]
];
?>