# ReVert WordPress Theme

Custom WordPress theme for ReVert agricultural solutions, converted from the React/Vite Lovable design.

## Overview

This theme is a complete WordPress conversion of the approved React design demo. It includes:

- ✅ Custom theme with Tailwind CSS design system
- ✅ Alpine.js for interactive components
- ✅ Custom Post Types (Products, Resellers)
- ✅ Custom Taxonomies (Product Categories, Application Areas, Reseller Regions)
- ✅ ACF Pro integration for custom fields
- ✅ AJAX-powered distributor locator
- ✅ Contact form with email notifications
- ✅ Newsletter subscription form
- ✅ Responsive navigation with mobile menu
- ✅ Homepage, Contact, and Distributor Locator templates

## Requirements

- WordPress 6.0 or higher
- PHP 8.0 or higher
- ACF Pro plugin (license required)
- Node.js (for building Tailwind CSS - development only)

## Installation

### 1. Upload Theme to WordPress

```bash
# Navigate to your WordPress themes directory
cd /path/to/wordpress/wp-content/themes/

# Copy the theme
cp -r /Users/joe/Desktop/REVERT/HM\ Engineer\ App/flowfolio-design/revert-wordpress-theme/wp-content/themes/revert ./

# Or use rsync for deployment to server
rsync -avz ./revert/ user@server:/path/to/wp-content/themes/revert/
```

### 2. Install ACF Pro

1. Download ACF Pro from [advancedcustomfields.com](https://www.advancedcustomfields.com/)
2. Upload and activate the plugin in WordPress
3. Enter your license key

### 3. Activate the Theme

1. Log in to WordPress admin
2. Go to **Appearance > Themes**
3. Find "ReVert" theme and click **Activate**

### 4. Create Required Pages

Create the following pages in WordPress admin (**Pages > Add New**):

#### Homepage
- Title: "Home"
- Template: **Home Page**
- Settings > Reading > Set as "Homepage"

#### Contact Page
- Title: "Contact"
- Template: **Contact Page**
- Slug: `contact`

#### Distributor Locator
- Title: "Find A Distributor"
- Template: **Distributor Locator**
- Slug: `distributor`

#### Static Pages (use default template)
- About (slug: `about`)
- Products/Crop Solutions (slug: `products/crop-solutions`)
- Products/Horticulture (slug: `products/horticulture`)
- Products/Livestock (slug: `products/livestock`)
- Products/Pest Management (slug: `products/pest-management`)

## Configuration

### Custom Post Types

The theme automatically registers two custom post types:

#### 1. Products (`revert_product`)
- Menu location: **Products** in admin sidebar
- Supports: Title, Editor, Thumbnail, Excerpt
- ACF Fields:
  - Product Icon (select)
  - Product Features (repeater)
  - Technical Data Sheet (file upload)

#### 2. Resellers (`revert_reseller`)
- Menu location: **Resellers** in admin sidebar
- Supports: Title only
- ACF Fields:
  - Address (textarea)
  - Phone Number (text)
  - Email Address (email)
  - Website URL (url)

### Taxonomies

#### Product Category
- Hierarchical
- Suggested terms:
  - Biologicals
  - Stimulants
  - Fertilisers & Nutrients
  - Program Packs
  - Specialty Products
  - Raw Products

#### Application Area
- Non-hierarchical (tags)
- Suggested terms:
  - Horticulture
  - Commercial
  - Livestock
  - Pest Management

#### Reseller Region
- Hierarchical
- Suggested terms:
  - North
  - South
  - East
  - West
  - (Add your specific regions)

## Adding Content

### Adding a Product

1. Go to **Products > Add New**
2. Enter product title and description
3. Set featured image (recommended: 800x600px)
4. Fill in ACF fields:
   - Select product icon
   - Add product features (repeater)
   - Upload technical data sheet (PDF)
5. Assign Product Categories and Application Areas
6. Publish

### Adding a Reseller

1. Go to **Resellers > Add New**
2. Enter reseller business name as title
3. Fill in ACF fields:
   - Address
   - Phone number
   - Email address
   - Website URL (optional)
4. Assign Reseller Region
5. Publish

## Features

### Navigation

The theme includes:
- **Desktop navigation** with dropdown menus (Products submenu)
- **Mobile navigation** with slide-out menu
- Powered by Alpine.js for smooth interactions

### Contact Form

The contact form includes:
- Name, Email, Phone, Subject, Message fields
- Email notifications sent to admin email
- AJAX submission with user feedback
- Data saved to WordPress database

To customize the recipient email:
- Go to **Settings > General**
- Update **Admin Email Address**

### Distributor Locator

Features:
- Search by location (text search)
- Filter by region (dropdown)
- AJAX-powered search
- Displays reseller contact information
- Click to call/email functionality

### Newsletter Subscription

- Newsletter form in footer
- AJAX submission
- Currently saves to database only
- Ready for integration with email marketing services (Brevo, Mailchimp, etc.)

## Customization

### Colors & Design Tokens

All colors are defined using HSL values in `/assets/css/tailwind-source.css`

Main colors:
- **Primary**: `--primary: 165 18% 29%` (Dark Teal)
- **Secondary**: `--secondary: 95 41% 63%` (Light Green)
- **Accent**: `--accent: 114 39% 49%` (Medium Green)

To change colors:
1. Edit `/assets/css/tailwind-source.css`
2. Rebuild Tailwind CSS (see Development section)

### Development

If you need to modify the theme styles:

```bash
# Navigate to theme directory
cd /path/to/themes/revert

# Install dependencies
npm install

# Watch for changes (development)
npm run watch:css

# Build for production
npm run build:css
```

## Troubleshooting

### Tailwind CSS not loading

1. Ensure `/assets/css/tailwind.min.css` exists
2. Rebuild: `npm run build:css`
3. Clear WordPress cache

### ACF Fields not showing

1. Ensure ACF Pro is activated
2. Check plugin license is valid
3. Fields are defined in `/inc/acf-fields.php`

### Navigation dropdowns not working

1. Ensure Alpine.js is loading (check browser console)
2. Clear browser cache
3. Check for JavaScript errors

### AJAX forms not submitting

1. Check WordPress AJAX URL is correct
2. Verify nonce security
3. Check browser console for errors

## File Structure

```
revert/
├── assets/
│   ├── css/
│   │   ├── tailwind-source.css (source)
│   │   └── tailwind.min.css (compiled)
│   ├── js/
│   │   ├── navigation.js
│   │   └── components.js (Alpine.js components)
│   └── images/ (from React app)
├── inc/
│   ├── theme-setup.php (theme initialization)
│   ├── enqueue-scripts.php (CSS/JS loading)
│   ├── custom-post-types.php (CPTs)
│   ├── taxonomies.php (taxonomies)
│   ├── acf-fields.php (ACF field definitions)
│   └── ajax-handlers.php (AJAX endpoints)
├── template-parts/
│   ├── header/
│   │   ├── navigation.php
│   │   └── mobile-menu.php
│   └── footer/
│       └── footer-content.php
├── page-templates/
│   ├── template-home.php
│   ├── template-contact.php
│   └── template-distributor.php
├── functions.php
├── header.php
├── footer.php
├── index.php
└── style.css
```

## Support & Next Steps

### Priority Items Completed ✅

- Core pages (Home, Contact, Distributor)
- Products Custom Post Type with ACF
- Distributor locator with search
- Tailwind CSS with design tokens
- Alpine.js navigation
- Responsive design

### Future Enhancements

- About page template
- Product archive/single templates
- Additional product category pages
- n8n webhook integration for contact form
- Newsletter integration with Brevo
- Performance optimization
- SEO meta tags

## Credits

- **Design**: Based on Lovable.dev React application
- **Development**: HM Engineer
- **Client**: ReVert (Bactivate)

## License

GPL v2 or later
