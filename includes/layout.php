<?php
/**
 * Main Layout Template
 * This file handles the complete page structure
 */

// Include configuration
require_once __DIR__ . '/../config/config.php';

class Layout {
    private $page_data = [];
    private $scripts = [];
    private $styles = [];
    
    public function __construct($page_data = []) {
        global $default_meta;
        $this->page_data = array_merge($default_meta, $page_data);
    }
    
    public function addScript($script) {
        $this->scripts[] = $script;
    }
    
    public function addStyle($style) {
        $this->styles[] = $style;
    }
    
    public function renderHead() {
        ?>
        <head>
            <meta charset="utf-8">
            <title><?= htmlspecialchars($this->page_data['title']) ?></title>
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta content="<?= htmlspecialchars($this->page_data['keywords']) ?>" name="keywords">
            <meta content="<?= htmlspecialchars($this->page_data['description']) ?>" name="description">
            
            <!-- Open Graph Meta Tags -->
            <meta property="og:title" content="<?= htmlspecialchars($this->page_data['title']) ?>">
            <meta property="og:description" content="<?= htmlspecialchars($this->page_data['description']) ?>">
            <meta property="og:image" content="<?= htmlspecialchars($this->page_data['image']) ?>">
            <meta property="og:type" content="website">
            
            <!-- Favicon -->
            <link href="img/favicon.png" rel="icon">
            
            <!-- Fonts -->
            <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap' rel='stylesheet'>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
            
            <!-- Icon Libraries -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
            
            <!-- Bootstrap -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
            
            <!-- Libraries -->
            <link href="lib/animate/animate.min.css" rel="stylesheet">
            <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
            <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
            
            <!-- Custom Styles -->
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
            <link href="css/edgy.css" rel="stylesheet">
            
            <?php foreach($this->styles as $style): ?>
            <link rel="stylesheet" href="<?= $style ?>">
            <?php endforeach; ?>
        </head>
        <?php
    }
    
    public function renderHeader() {
        include INCLUDES_PATH . '/header.php';
    }
    
    public function renderFooter() {
        include INCLUDES_PATH . '/footer.php';
    }
    
    public function renderScripts() {
        ?>
        <!-- Core JavaScript Libraries -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js" defer></script>
        
        <!-- Custom Scripts -->
        <script src="js/main.js" defer></script>
        <script src="js/edgy.js" defer></script>
        
        <?php foreach($this->scripts as $script): ?>
        <script src="<?= $script ?>" defer></script>
        <?php endforeach; ?>
        <?php
    }
    
    public function render($content_file, $show_loader = false) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <?php $this->renderHead(); ?>
        <body>
            <?php if($show_loader): ?>
            <!-- Loader -->
            <div id="loader-wrapper">
                <div class="loader-logo">
                    <img src="img/Divine Logo.png" alt="Divine Logo" />
                </div>
            </div>
            <?php endif; ?>
            
            <?php $this->renderHeader(); ?>
            
            <main>
                <?php 
                if(file_exists($content_file)) {
                    include $content_file;
                } else {
                    echo "<div class='container'><h1>Page not found</h1></div>";
                }
                ?>
            </main>
            
            <?php $this->renderFooter(); ?>
            <?php $this->renderScripts(); ?>
        </body>
        </html>
        <?php
    }
}
?>