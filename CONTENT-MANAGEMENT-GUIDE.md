# ReVert WordPress Content Management Guide

This guide will help you manage content on your ReVert website through the WordPress admin panel.

## Table of Contents

1. [Accessing WordPress Admin](#accessing-wordpress-admin)
2. [Managing Products](#managing-products)
3. [Managing Resellers](#managing-resellers)
4. [Managing Blog Posts](#managing-blog-posts)
5. [Managing Technical Sheets](#managing-technical-sheets)
6. [Editing Page Content](#editing-page-content)

---

## Accessing WordPress Admin

1. Navigate to: `https://your-domain.com/wp-admin`
2. Enter your username and password
3. You'll see the WordPress Dashboard

---

## Managing Products

Products are your agricultural solutions that appear on the website.

### Adding a New Product

1. In WordPress admin, click **Products > Add New**
2. Enter the product title (e.g., "Bac 5 Liquid")
3. Add product description in the main editor
4. Set a **Featured Image** (recommended size: 800x600px)

### Product Details (ACF Fields)

Scroll down to find the **Product Details** section:

#### Product Icon
- Select an icon that represents your product
- Options: Sprout, Leaf, Heart, Microscope, Shield, Droplet

#### Product Features (Repeater)
- Click "Add Feature" to add key product benefits
- For each feature:
  - **Feature Title**: e.g., "Improves Soil Health"
  - **Feature Description**: Brief explanation
  - **Feature Icon**: Choose an icon for this feature

#### Technical Data Sheet
- Upload a PDF file with complete product specifications
- This will appear as a download button on the product page

### Product Categories

Assign one or more categories:
- Biologicals
- Stimulants
- Fertilisers & Nutrients
- Program Packs
- Specialty Products
- Raw Products

### Application Areas

Tag products with their use cases:
- Horticulture
- Commercial
- Livestock
- Pest Management

### Publishing

- Click **Publish** when ready to make the product live
- Use **Save Draft** to save without publishing

---

## Managing Resellers

Resellers are distributors displayed in the "Find A Distributor" locator.

### Adding a New Reseller

1. Click **Resellers > Add New**
2. Enter the business name as the title
3. Fill in the **Reseller Details** section:

#### Required Fields
- **Address**: Full business address (can use multiple lines)
- **Phone Number**: Contact phone number (e.g., +61 3 9876 5432)
- **Email Address**: Contact email

#### Optional Fields
- **Website URL**: Reseller's website (if applicable)

### Reseller Region

Assign the reseller to a region for filtering:
- North
- South
- East
- West
- (Or custom regions you create)

### Publishing

Click **Publish** to make the reseller appear in the distributor locator.

---

## Managing Blog Posts

Blog posts appear on the `/blog` page and help share news and insights.

### Adding a New Blog Post

1. Click **Posts > Add New**
2. Enter the post title
3. Write your content in the main editor
4. Set a **Featured Image** (appears in blog archive and post header)

### Blog Content Tips

- Use headings (H2, H3) to structure your content
- Add images within the content to break up text
- Keep paragraphs concise and readable

### Categories

Assign posts to categories:
- Agriculture News
- Product Updates
- Case Studies
- Sustainability
- Tips & Guides

You can create new categories in **Posts > Categories**.

### Tags

Add relevant tags for better organization (e.g., "organic farming", "soil health", "biostimulants").

### Excerpt

Add a short summary (2-3 sentences) that appears in the blog archive.

### Publishing

- **Publish** to make the post live immediately
- **Schedule** to publish at a future date/time
- **Save Draft** to work on it later

---

## Managing Technical Sheets

Technical sheets are downloadable PDF documents like product data sheets, safety information, and guides.

### Adding a New Technical Sheet

1. Click **Technical Sheets > Add New**
2. Enter the document title (e.g., "Bac 5 Liquid - Product Data Sheet")
3. Add document description/overview in the main editor
4. Add a brief **Excerpt** describing what the document contains

### Technical Sheet Details (ACF Fields)

#### PDF Document (Required)
- Upload the PDF file
- Accepted format: PDF only
- Recommended max size: 10MB

#### Version
- Enter the document version (e.g., "2.0", "1.5")
- Helps users know if they have the latest version

#### Last Updated
- Select the date this document was last updated
- Uses date picker for easy selection

#### File Size
- This field is automatically calculated
- Don't need to enter manually

### Document Categories

Assign to a category:
- Product Data Sheets
- Safety Data Sheets (SDS)
- Application Guides
- Research Papers
- Compliance Documents

You can create new categories in **Technical Sheets > Document Categories**.

### Publishing

Click **Publish** to make the document available for download.

### How Technical Sheets Appear on Website

- Archive page: `/technical-sheets`
- Shows document info with download button
- Category filtering available
- Search functionality
- PDF preview on single document page

---

## Editing Page Content

You can edit the content of existing pages like Home, About, Contact, etc.

### Editing a Page

1. Click **Pages** in WordPress admin
2. Find the page you want to edit
3. Click **Edit**
4. Make your changes to the content
5. Click **Update** to save

### Page Templates

Some pages use special templates (don't change these):
- **Home**: Uses "Home Page" template
- **Contact**: Uses "Contact Page" template
- **Find A Distributor**: Uses "Distributor Locator" template

For pages with special templates, you can edit the text content but the layout is controlled by the template.

### Regular Pages

Pages like About, Products sections use the default template and give you full control over content.

---

## Media Library

### Uploading Images

1. Click **Media > Add New**
2. Drag and drop images or click "Select Files"
3. Recommended image sizes:
   - Featured images: 1200x800px
   - Product images: 800x600px
   - Blog content images: 800px wide minimum

### Image Optimization Tips

- Use JPG for photos
- Use PNG for graphics with transparency
- Compress images before uploading (use tools like TinyPNG)
- Use descriptive filenames (e.g., "bac-5-liquid-product.jpg")

---

## General Tips

### SEO Best Practices

- Use descriptive titles (60 characters or less)
- Write unique content for each product/post
- Use headings to structure content
- Add alt text to images
- Keep URLs clean and readable

### Content Organization

- Use categories consistently
- Tag content for better discoverability
- Regular publish schedule for blog posts
- Keep technical sheets up to date

### Getting Help

If you need assistance:
1. Check this guide first
2. Contact your website developer
3. WordPress has extensive documentation at wordpress.org/support

---

## Quick Reference

| Content Type | Location in Admin | Archive Page | Purpose |
|-------------|------------------|--------------|---------|
| Products | Products > Add New | /products | Agricultural solutions |
| Resellers | Resellers > Add New | /distributor | Distributor locator |
| Blog Posts | Posts > Add New | /blog | News and articles |
| Technical Sheets | Technical Sheets > Add New | /technical-sheets | Downloadable PDFs |
| Pages | Pages | Various | Static content pages |

---

## Need More Help?

Contact your website administrator or developer for:
- Custom functionality requests
- Technical issues
- Advanced customization
- User permission changes

---

**Last Updated**: February 2024
**Version**: 1.0
