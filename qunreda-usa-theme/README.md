# QUNREDA USA - Premium B2B WordPress Theme

A premium, dark-themed WordPress theme designed specifically for QUNREDA USA, LLC - the exclusive North American logistics and distribution partner for high-performance RC cars.

## 🚀 Features

### Design & Aesthetics
- **Premium Dark Theme**: Sophisticated dark slate blue (#0F172A) with vibrant amber/gold accents (#FBBF24)
- **Modern Typography**: Inter font family with strong weight hierarchy
- **Glass Morphism Effects**: Semi-transparent cards with backdrop blur
- **Responsive Design**: Fully responsive across all devices
- **Smooth Animations**: CSS animations and transitions for enhanced UX

### Business-Focused Features
- **B2B Lead Generation**: Optimized for wholesale distributor applications
- **Professional Credibility**: Trust signals and social proof elements
- **Amazon Integration**: Direct links to official Amazon product pages
- **Multi-Page Structure**: Complete website with all required pages
- **Form Handling**: AJAX-powered contact and application forms

### Technical Features
- **WordPress Standards**: Follows WordPress coding standards
- **SEO Optimized**: Built-in SEO meta tags and structured data
- **Security Enhanced**: Security headers and best practices
- **Performance Optimized**: Efficient CSS and JavaScript
- **Custom Page Templates**: Pre-designed templates for all pages

## 📁 File Structure

```
qunreda-usa-theme/
├── style.css                 # Main stylesheet with theme info
├── index.php                 # Homepage template
├── header.php                # Header template
├── footer.php                # Footer template
├── functions.php             # Theme functions and features
├── page-wholesale.php        # Wholesale partnership page
├── page-about.php            # About us page
├── page-products.php         # Products catalog page
├── page-contact.php          # Contact page
├── page-privacy.php          # Privacy policy page
├── assets/
│   ├── css/                  # Additional CSS files
│   ├── js/
│   │   └── main.js          # Main JavaScript file
│   └── images/              # Theme images (placeholder)
├── inc/                     # Include files
├── template-parts/          # Template parts
├── page-templates/          # Custom page templates
└── README.md               # This file
```

## 🛠️ Installation

### Method 1: Direct Upload
1. Download the theme files
2. Upload the `qunreda-usa-theme` folder to `/wp-content/themes/`
3. Activate the theme in WordPress Admin → Appearance → Themes

### Method 2: WordPress Admin
1. Go to WordPress Admin → Appearance → Themes → Add New
2. Click "Upload Theme"
3. Choose the theme ZIP file
4. Click "Install Now" and then "Activate"

## 📋 Required Pages Setup

After activating the theme, create the following pages:

### 1. Homepage
- **Page Title**: Home
- **Template**: Default Template
- **Content**: The homepage content is hardcoded in `index.php`

### 2. About Us Page
- **Page Title**: About Us
- **Template**: About Us Page
- **URL**: `/about`

### 3. Products Page
- **Page Title**: Products
- **Template**: Products Page
- **URL**: `/products`

### 4. Wholesale Partnership Page
- **Page Title**: Wholesale
- **Template**: Wholesale Partnership Page
- **URL**: `/wholesale`

### 5. Contact Page
- **Page Title**: Contact
- **Template**: Contact Page
- **URL**: `/contact`

### 6. Privacy Policy Page
- **Page Title**: Privacy Policy
- **Template**: Privacy Policy Page
- **URL**: `/privacy`

## 🎨 Customization

### Colors
The theme uses CSS custom properties for easy color customization. Edit the `:root` section in `style.css`:

```css
:root {
  --color-primary: #0F172A;      /* Main background */
  --color-secondary: #1E293B;    /* Secondary background */
  --color-accent: #FBBF24;       /* Accent color */
  --color-text-primary: #CBD5E1; /* Primary text */
  /* ... other colors */
}
```

### Typography
The theme uses Inter font family. To change fonts, update the `--font-primary` variable and import the new font.

### Images
Replace placeholder images in the `assets/images/` directory:
- `hero-bg.jpg` - Hero section background
- `our-story.jpg` - About us section image
- `product-*.jpg` - Product images
- `team-*.jpg` - Team member photos
- `logo.png` - Company logo

## 📧 Form Configuration

### Contact Form
The contact form automatically sends emails to the WordPress admin email. To customize:
1. Edit the `qunreda_usa_handle_contact_form()` function in `functions.php`
2. Update email recipients, subject lines, or add additional processing

### Wholesale Application Form
The wholesale form sends applications to the admin email. Customize in `functions.php`:
1. Edit the `qunreda_usa_handle_wholesale_form()` function
2. Add database storage, CRM integration, or custom email templates

## 🔧 Advanced Customization

### Adding Custom Fields
Use the built-in meta boxes for page customization:
- Hero Title
- Hero Subtitle
- Hide Page Header option

### Custom Post Types
To add custom post types (e.g., for products), add to `functions.php`:

```php
function qunreda_usa_custom_post_types() {
    register_post_type('products', array(
        'labels' => array(
            'name' => 'Products',
            'singular_name' => 'Product'
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    ));
}
add_action('init', 'qunreda_usa_custom_post_types');
```

### Widget Areas
The theme includes three footer widget areas. Add widgets in WordPress Admin → Appearance → Widgets.

## 📱 Mobile Optimization

The theme is fully responsive with:
- Mobile-first design approach
- Touch-friendly navigation
- Optimized forms for mobile devices
- Responsive images and grids
- Mobile-specific CSS optimizations

## 🔒 Security Features

- Security headers (X-Content-Type-Options, X-Frame-Options, X-XSS-Protection)
- WordPress version hiding
- XML-RPC disabled
- Form nonce verification
- Input sanitization and validation

## 📈 SEO Features

- Semantic HTML structure
- Open Graph meta tags
- Twitter Card meta tags
- Schema markup ready
- Optimized heading hierarchy
- Fast loading times

## 🚀 Performance Optimization

- Minified CSS and JavaScript
- Optimized images (WebP ready)
- Efficient database queries
- Caching-friendly structure
- Lazy loading support

## 🐛 Troubleshooting

### Common Issues

1. **Forms not working**
   - Check if AJAX is enabled
   - Verify nonce is being generated
   - Check browser console for JavaScript errors

2. **Images not displaying**
   - Ensure images are uploaded to `assets/images/`
   - Check file permissions
   - Verify image paths in templates

3. **Mobile menu not working**
   - Check if jQuery is loaded
   - Verify JavaScript file is enqueued
   - Check for JavaScript conflicts

### Debug Mode
Enable WordPress debug mode in `wp-config.php`:
```php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
```

## 📞 Support

For theme support and customization requests:
- **Email**: info@qunredausa.com
- **Documentation**: This README file
- **WordPress.org**: Theme support forums

## 📄 License

This theme is proprietary software developed for QUNREDA USA, LLC. All rights reserved.

## 🔄 Updates

To update the theme:
1. Backup your current theme
2. Download the latest version
3. Replace theme files
4. Test functionality
5. Update any customizations

## 📊 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Internet Explorer 11+

## 🎯 Business Goals Alignment

This theme is specifically designed to:
- Generate B2B leads for wholesale distribution
- Establish credibility and trust
- Direct retail customers to Amazon
- Provide professional business presence
- Support partnership applications

---

**QUNREDA USA, LLC** - Exclusive North American Distribution Partner