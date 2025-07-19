# DivineWeb Project Structure

## Overview
This project is a PHP-based website for Divine Textile, using Bootstrap, custom CSS/JS, and modular assets.

## Folder Structure
```
DivineWeb/
│
├── pages/
│   ├── about.php, index.php, products.php, ...   # Main PHP pages
│   ├── carpenter-website-template.jpg, cpanel.yml, deploy.php, accordion.php
│
├── includes/
│   ├── header.php, footer.php, head.php          # Shared layout includes
│
├── css/
│   ├── bootstrap.min.css
│   └── style.css                                 # Main stylesheets
│
├── js/
│   └── main.js                                   # Main JS file
│
├── img/
│   ├── [all images]
│   ├── Concerns/                                 # Group company images
│   ├── products/
│   └── New folder/
│
├── lib/
│   ├── animate/
│   ├── counterup/
│   ├── easing/
│   ├── isotope/
│   ├── lightbox/
│   ├── owlcarousel/
│   ├── waypoints/
│   └── wow/                                      # JS libraries
│
├── scss/
│   ├── bootstrap.scss
│   └── bootstrap/                                # SASS for custom Bootstrap
│
└── assest_backup/                                # Legacy backup (safe to delete)
```

## Best Practices
- All CSS in `css/`, all JS in `js/`, all images in `img/`.
- Use SASS in `scss/` for advanced styling, compile to `css/`.
- Modularize JS and CSS for maintainability.
- Use `.gitignore` to exclude backups and build artifacts.
- Remove unused assets and libraries regularly.

## SASS Compilation
To compile SASS to CSS, use:
```powershell
sass scss/bootstrap.scss css/bootstrap.min.css --style=compressed
```

## Image Cleanup
Periodically review `img/` for unused files.

## License
See LICENSE.txt for template and usage rights.
