# Divine Group Website Framework

## Overview
This framework provides a clean, organized structure for the Divine Group website that separates content from layout, making it easy to create new pages and maintain consistency across the site.

## Framework Structure

```
├── config/
│   └── config.php              # Site configuration and settings
├── includes/
│   ├── layout.php              # Main layout class
│   ├── page-helper.php         # Helper functions for pages
│   ├── header.php              # Site header
│   ├── footer.php              # Site footer
│   └── components/             # Reusable components
│       ├── about-section.php
│       ├── sustainability-section.php
│       ├── clients-section.php
│       └── certifications-section.php
├── pages/
│   ├── home-content.php        # Home page content only
│   ├── about-content.php       # About page content only
│   ├── products-content.php    # Products page content only
│   └── contact-content.php     # Contact page content only
├── index-new.php               # Main router (NEW ENTRY POINT)
└── css/, js/, img/             # Assets (unchanged)
```

## How to Use

### 1. Access the New Framework
Use `index-new.php` as your main entry point:
- `index-new.php` - Home page
- `index-new.php?page=about` - About page
- `index-new.php?page=products` - Products page
- `index-new.php?page=contact` - Contact page

### 2. Creating a New Page

To create a new page (e.g., "services"), follow these simple steps:

#### Step 1: Create the content file
Create `pages/services-content.php`:

```php
<?php
/**
 * Services Page Content
 * Only contains the body content - layout is handled by framework
 */

// Include page helpers
require_once __DIR__ . '/../includes/page-helper.php';
?>

<!-- Your page content here -->
<section class="py-5">
    <div class="container">
        <?php render_section_title('Our Services', 'Comprehensive textile solutions'); ?>
        
        <div class="row">
            <div class="col-lg-6">
                <h3>Service 1</h3>
                <p>Description of your service...</p>
            </div>
            <div class="col-lg-6">
                <h3>Service 2</h3>
                <p>Description of your service...</p>
            </div>
        </div>
        
        <?php render_cta_button('Contact Us', '/contact'); ?>
    </div>
</section>
```

#### Step 2: Add the page to the router
Edit `index-new.php` and add your page to the `$pages` array:

```php
$pages = [
    // ... existing pages ...
    'services' => [
        'title' => 'Our Services - Divine Group',
        'description' => 'Comprehensive textile services for all your needs.',
        'content_file' => __DIR__ . '/pages/services-content.php',
        'show_loader' => false
    ]
];
```

#### Step 3: Access your new page
Visit: `index-new.php?page=services`

That's it! Your new page will automatically have:
- Consistent header and footer
- All CSS and JavaScript includes
- SEO meta tags
- Responsive layout

### 3. Available Helper Functions

#### `render_section_title($title, $subtitle, $show_icon)`
Creates a consistent section title with the Divine Group styling:
```php
<?php render_section_title('Our Products', 'Premium quality textiles'); ?>
```

#### `render_cta_button($text, $url, $icon)`
Creates a styled CTA button:
```php
<?php render_cta_button('Learn More', '/about', 'fa-solid fa-arrow-right'); ?>
```

#### `render_hero_slider($slides)`
Renders the hero slider (mainly for home page):
```php
<?php render_hero_slider(); ?>
```

#### `include_component($component_name, $data)`
Includes reusable components:
```php
<?php include_component('sustainability-section'); ?>
<?php include_component('clients-section'); ?>
```

### 4. Adding Custom Styles or Scripts

For page-specific styles or scripts, add them to the page configuration:

```php
'about' => [
    'title' => 'About Us - Divine Group',
    'description' => 'Learn about Divine Group...',
    'content_file' => __DIR__ . '/pages/about-content.php',
    'styles' => ['css/about-custom.css'],
    'scripts' => ['js/about-custom.js']
]
```

### 5. Customizing Components

Components are in `includes/components/`. You can:
- Modify existing components
- Create new components
- Pass data to components

Example of using a component with custom data:
```php
<?php 
$custom_sustainability_cards = [
    ['number' => '01', 'icon' => 'custom-icon.svg', 'title' => 'Custom Title', 'description' => 'Custom description']
];
include_component('sustainability-section', ['sustainability_cards' => $custom_sustainability_cards]); 
?>
```

## Benefits of This Framework

1. **Separation of Concerns**: Content is separate from layout
2. **Consistency**: All pages use the same header, footer, and styling
3. **Easy Maintenance**: Update header/footer once, affects all pages
4. **SEO Friendly**: Each page can have custom meta tags
5. **Fast Development**: Create new pages in minutes
6. **Reusable Components**: Common sections can be reused across pages
7. **Clean URLs**: Easy to implement URL rewriting later

## Migration from Old Structure

Your existing files are preserved. The new framework works alongside them:
- `index.php` - Old home page (still works)
- `index2.php` - Old alternative home page (still works)
- `index-new.php` - New framework entry point

You can gradually migrate pages to the new framework or use both systems simultaneously.

## Next Steps

1. Test the new framework with `index-new.php`
2. Create additional pages as needed
3. Customize components for your specific needs
4. Consider implementing URL rewriting for cleaner URLs
5. Add any missing pages (process, sustainability, etc.)

The framework is designed to be simple yet powerful, making website maintenance and expansion much easier!