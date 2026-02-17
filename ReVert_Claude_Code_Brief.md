# ReVert Website Project Brief

## Project Overview

Build a commercial agricultural products website for **ReVert** (part of Bactivate). The client (Mark & Stephanie) has approved the design demo and confirmed the **Ultimate Package** ($5,600-$7,000 AUD).

**Demo approved:** https://flowfolio-design.lovable.app/

---

## Tech Stack

| Component | Technology |
|-----------|------------|
| CMS | WordPress |
| Hosting | AWS Lightsail (4GB instance, ~$24/month) |
| Server Management | EasyPanel (Docker-based) |
| Theme | Custom theme, GitHub-managed |
| Deployment | GitHub Actions → rsync to Lightsail |
| Automation | n8n (self-hosted on same instance) |
| Custom Fields | ACF Pro |
| Version Control | Git (theme-only repository) |

---

## Client Requirements

### From the Website Brief

**Landing Page:**
- Vivid plant image/video (fast loading)
- Dual navigation: Retail Products → external link | Commercial Products → main site

**Main Site Structure:**
1. **Homepage** — Hero section, tagline "Empowering Sustainable Agriculture", CTA buttons
2. **Products** — Categories with 30+ products, technical sheet downloads
3. **Find A Reseller** — Location-based search with regional filtering
4. **About Us** — Mission statement, sustainability goals, key statistics
5. **Contact Us** — Form with custom fields, company info
6. **Newsletter Signup** — Email capture

**Product Categories:**
- Biologicals (Liquids, Granules, Powders)
- Stimulants
- Fertilisers & Nutrients (Bactivate Max Range, ReVert range coming 2026)
- Program Packs
- Specialty Products
- Raw Products

**Products to include (30+):**
- Bac 5 (Liq, Powder, Granule), Biocult, Biocult Seed Coating, Bioprotect
- Seaweed, Seaweed + Guano, BioBoost, Bioboost +N, Guard, Pasture Blend
- Rappid, Rappid K, BB5, KMax, Man Max, Calci Max, Mag Max, Zinc Max, CU Max
- SA1000, Sequest
- Castings, Diatomaceous Earth, Revert Granulated Fert, Bio Char, Guano

**Application Areas:**
- Horticulture (Vegetables, Berries, Fruit Trees, Hydroponics)
- Commercial (Turf, Golf Courses, Bowling Greens, Regeneration Projects)
- Livestock (backend page for later release)
- Pest Management (backend page for later release)

---

## WordPress Architecture

### Custom Post Types

```php
// Products CPT
'revert_product' => [
    'public' => true,
    'has_archive' => true,
    'supports' => ['title', 'editor', 'thumbnail'],
    'menu_icon' => 'dashicons-archive'
]

// Resellers CPT
'revert_reseller' => [
    'public' => true,
    'has_archive' => true,
    'supports' => ['title', 'editor', 'thumbnail'],
    'menu_icon' => 'dashicons-location'
]
```

### Taxonomies

```php
// Product Category
'product_category' => [
    'hierarchical' => true,
    'post_types' => ['revert_product'],
    // Terms: Biologicals, Stimulants, Nutrients, Program Packs, Specialty, Raw Products
]

// Application Area
'application_area' => [
    'hierarchical' => true,
    'post_types' => ['revert_product'],
    // Terms: Horticulture, Commercial, Livestock, Pest Management
]

// Region (for Resellers)
'reseller_region' => [
    'hierarchical' => true,
    'post_types' => ['revert_reseller'],
    // Terms: North, South, East, West
]
```

### ACF Field Groups

**Product Fields:**
- `product_tagline` (text)
- `product_form` (select: Liquid, Granule, Powder, Other)
- `product_gallery` (gallery)
- `product_highlights` (repeater: highlight text)
- `product_technical_docs` (repeater: doc_title, doc_type, doc_file)
- `product_specifications` (repeater: spec_name, spec_value)

**Reseller Fields:**
- `reseller_address` (text)
- `reseller_phone` (text)
- `reseller_email` (email)
- `reseller_website` (url)
- `reseller_location` (google_map) — or separate lat/lng fields
- `reseller_latitude` (number)
- `reseller_longitude` (number)

---

## Theme Structure

```
revert-theme/
├── style.css
├── functions.php
├── index.php
├── front-page.php
├── page.php
├── single.php
├── archive.php
├── header.php
├── footer.php
├── sidebar.php
├── searchform.php
│
├── template-parts/
│   ├── content-product.php
│   ├── content-reseller.php
│   ├── hero.php
│   └── cta-section.php
│
├── templates/
│   ├── template-landing.php      ← Dual navigation landing page
│   ├── template-about.php
│   ├── template-contact.php
│   └── template-reseller-locator.php
│
├── inc/
│   ├── custom-post-types.php
│   ├── taxonomies.php
│   ├── acf-fields.php
│   ├── enqueue.php
│   └── helpers.php
│
├── assets/
│   ├── css/
│   │   └── main.css
│   ├── js/
│   │   └── main.js
│   └── images/
│
├── acf-json/                     ← ACF Local JSON (version controlled)
│
└── .github/
    └── workflows/
        └── deploy.yml
```

---

## GitHub Actions Deployment

```yaml
# .github/workflows/deploy.yml
name: Deploy Theme

on:
  push:
    branches: [production]

jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4
      
      - name: Setup Node
        uses: actions/setup-node@v4
        with:
          node-version: '20'
      
      - name: Install & Build
        run: |
          npm ci
          npm run build
      
      - name: Backup Current Theme
        uses: appleboy/ssh-action@master
        with:
          host: ${{ secrets.HOST }}
          username: ${{ secrets.USERNAME }}
          key: ${{ secrets.SSH_KEY }}
          script: |
            cd /var/www/html/wp-content/themes
            tar -czf revert-theme-backup-$(date +%Y%m%d-%H%M%S).tar.gz revert-theme/
      
      - name: Deploy via Rsync
        uses: burnett01/rsync-deployments@6.0.0
        with:
          switches: -avzr --delete --exclude='.git'
          path: ./
          remote_path: /var/www/html/wp-content/themes/revert-theme/
          remote_host: ${{ secrets.HOST }}
          remote_user: ${{ secrets.USERNAME }}
          remote_key: ${{ secrets.SSH_KEY }}
```

---

## n8n Automation Workflows

### 1. Contact Form → Notification + CRM
- Trigger: Webhook from Contact Form 7 or WPForms
- Actions: 
  - Send email notification to team
  - Add row to Google Sheet (or future CRM)
  - Send auto-responder to customer

### 2. Newsletter Signup → Brevo
- Trigger: Webhook from newsletter form
- Action: Add contact to Brevo list

### 3. High-Value Lead Alert
- Trigger: Contact form with specific criteria (e.g., "commercial" selected)
- Action: SMS via Twilio + Slack notification

### 4. Reseller Enquiry Routing
- Trigger: "Find a Reseller" form submission
- Action: Forward to nearest reseller based on location

---

## Reseller Locator Implementation

**Option 1: Plugin (Recommended)**
- Agile Store Locator Pro ($49/year)
- Handles map display, search, filtering, directions

**Option 2: Custom ACF + Google Maps**
- ACF Google Map field for each reseller
- Custom proximity search using Haversine formula
- Google Maps API for display

**Google Maps API Notes:**
- 10,000 free map loads/month
- Set billing alerts at $10, $25, $50
- Alternative: OpenStreetMap via WP Maps Pro ($39 one-time, zero API fees)

---

## Document Library

**Plugin:** Document Library Pro ($149-199/year)

**Features needed:**
- Technical sheets, SDS documents, brochures
- Link documents to products
- Drag-drop bulk upload
- CSV import
- Download tracking (optional)

---

## Brand Guidelines

**From Bactivate brand guide:**
- Follow existing Bactivate colour scheme and fonts
- Use brand guidelines document provided by client
- High-quality agricultural/sustainability imagery

---

## Security Checklist

- [ ] DISALLOW_FILE_EDIT in wp-config.php
- [ ] FORCE_SSL_ADMIN enabled
- [ ] WP_POST_REVISIONS set to 5
- [ ] File permissions: directories 755, files 644, wp-config.php 600
- [ ] Lightsail firewall: restrict SSH to specific IP only
- [ ] Wordfence (free) installed
- [ ] Cloudflare free tier for WAF
- [ ] Fail2ban configured
- [ ] 2FA on all admin accounts

---

## Timeline

| Week | Tasks |
|------|-------|
| 1 | Server setup (Lightsail + EasyPanel + WordPress) |
| 2-3 | Core website development (theme, pages, navigation) |
| 3-4 | Product catalog (CPTs, ACF fields, templates, 30+ products) |
| 4-5 | Advanced features (reseller locator, document library, newsletter) |
| 5 | n8n automation workflows |
| 6 | Testing, refinements, launch |

---

## Deliverables

1. AWS Lightsail server configured with EasyPanel
2. WordPress installed with custom theme
3. All pages built per brief
4. Product catalog with 30+ products entered
5. Reseller locator functional
6. Document library for technical sheets
7. Newsletter signup integrated
8. n8n workflows configured
9. Full admin access + documentation
10. GitHub repository with deployment pipeline

---

## Client Contact

- **Mark** — Owner
- **Stephanie** — Sales & Marketing (stephanie@revertagri.com.au)

---

## Notes

- Phase 2: Driver CRM integration (leads from website → CRM)
- Livestock and Pest Management pages are backend-only for later release
- ReVert fertiliser range launching 2026
- Client prefers WhatsApp for communication
