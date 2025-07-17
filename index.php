<?php
// Simple front controller for DivineWeb
$page = $_GET['page'] ?? 'home';
$allowed = [
    'home' => 'index.php',
    'about' => 'about.php',
    'products' => 'products.php',
    'accordion' => 'accordion.php',
    'deploy' => 'deploy.php'
];
if (array_key_exists($page, $allowed)) {
    include __DIR__ . '/pages/' . $allowed[$page];
} else {
    include __DIR__ . '/pages/index.php'; // fallback to home
}
?>
