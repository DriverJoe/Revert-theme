#!/bin/bash
# ReVert Blog and Technical Sheets Setup Script
# Run this on your server with: bash setup-blog-technical-sheets.sh

echo "🚀 Setting up Blog and Technical Sheets..."
echo ""

# Navigate to WordPress directory
cd /var/www/html

# Create Technical Sheet Categories
echo "📁 Creating Technical Sheet Categories..."
wp term create tech_sheet_category 'Product Data Sheets' --description='Technical specifications and product information' --allow-root
wp term create tech_sheet_category 'Safety Data Sheets (SDS)' --description='Safety and handling information' --allow-root
wp term create tech_sheet_category 'Application Guides' --description='How-to guides and best practices' --allow-root
wp term create tech_sheet_category 'Research Papers' --description='Scientific research and case studies' --allow-root
wp term create tech_sheet_category 'Compliance Documents' --description='Regulatory and compliance documentation' --allow-root
echo "✅ Technical Sheet Categories created!"
echo ""

# Create Blog Categories
echo "📚 Creating Blog Categories..."
wp term create category 'Agriculture News' --description='Latest news in sustainable agriculture' --allow-root
wp term create category 'Product Updates' --description='New products and features' --allow-root
wp term create category 'Case Studies' --description='Success stories from our customers' --allow-root
wp term create category 'Sustainability' --description='Environmental and sustainability topics' --allow-root
wp term create category 'Tips & Guides' --description='Farming tips and how-to guides' --allow-root
echo "✅ Blog Categories created!"
echo ""

# Create Blog Page
echo "📄 Creating Blog Page..."
BLOG_PAGE=$(wp post create \
  --post_type=page \
  --post_title='Blog' \
  --post_status=publish \
  --porcelain \
  --allow-root)

# Set Blog Page as Posts Page
wp option update page_for_posts $BLOG_PAGE --allow-root
echo "✅ Blog page created and configured (ID: $BLOG_PAGE)"
echo ""

# Create Sample Blog Post
echo "✍️ Creating Sample Blog Post..."
BLOG_POST=$(wp post create \
  --post_type=post \
  --post_title='Welcome to the ReVert Blog' \
  --post_content='<p>Welcome to the ReVert blog! Here we share insights, tips, and news about sustainable agriculture and our innovative products.</p><h2>Our Mission</h2><p>At ReVert, we are committed to providing farmers with the most effective and environmentally friendly agricultural solutions. Our blog is your resource for staying informed about the latest developments in sustainable farming.</p><h2>What to Expect</h2><ul><li>Product updates and announcements</li><li>Case studies from successful farmers</li><li>Tips for improving crop yields sustainably</li><li>Research findings and industry news</li></ul><p>Stay tuned for regular updates!</p>' \
  --post_status=publish \
  --post_category='Agriculture News' \
  --porcelain \
  --allow-root)
echo "  ✓ Sample blog post created (ID: $BLOG_POST)"
echo ""

# Create Sample Technical Sheets
echo "📑 Creating Sample Technical Sheets..."

# Technical Sheet 1: Bac 5 Liquid Data Sheet
TECHSHEET1=$(wp post create \
  --post_type=revert_tech_sheet \
  --post_title='Bac 5 Liquid - Product Data Sheet' \
  --post_content='<p>Complete technical specifications for Bac 5 Liquid biological solution.</p><h3>Product Overview</h3><p>Bac 5 Liquid is an advanced biological solution combining five beneficial bacteria strains for enhanced soil health and crop vitality.</p><h3>Technical Specifications</h3><ul><li>Active Ingredients: 5 beneficial bacteria strains</li><li>Concentration: 1x10^9 CFU/ml</li><li>pH Range: 6.5-7.5</li><li>Storage: Store in cool, dry place</li><li>Shelf Life: 24 months from manufacture date</li></ul>' \
  --post_excerpt='Technical specifications and application guidelines for Bac 5 Liquid' \
  --post_status=publish \
  --porcelain \
  --allow-root)

wp post term add $TECHSHEET1 tech_sheet_category 'Product Data Sheets' --allow-root
wp post meta update $TECHSHEET1 tech_sheet_version '2.0' --allow-root
wp post meta update $TECHSHEET1 tech_sheet_date '2024-01-15' --allow-root
echo "  ✓ Bac 5 Liquid Data Sheet created (ID: $TECHSHEET1)"

# Technical Sheet 2: Seaweed Plus Application Guide
TECHSHEET2=$(wp post create \
  --post_type=revert_tech_sheet \
  --post_title='Seaweed Plus - Application Guide' \
  --post_content='<p>Comprehensive application guide for Seaweed Plus biostimulant.</p><h3>Application Rates</h3><ul><li>Foliar Application: 2-4 L/ha diluted in 200-400L water</li><li>Soil Application: 5-10 L/ha</li><li>Fertigation: 3-5 L/ha per application</li></ul><h3>Timing</h3><p>Apply at key growth stages for maximum benefit: seedling, vegetative, flowering, and fruit development.</p>' \
  --post_excerpt='Application rates and timing for optimal Seaweed Plus performance' \
  --post_status=publish \
  --porcelain \
  --allow-root)

wp post term add $TECHSHEET2 tech_sheet_category 'Application Guides' --allow-root
wp post meta update $TECHSHEET2 tech_sheet_version '1.5' --allow-root
wp post meta update $TECHSHEET2 tech_sheet_date '2024-02-01' --allow-root
echo "  ✓ Seaweed Plus Application Guide created (ID: $TECHSHEET2)"

echo "✅ Sample Technical Sheets created!"
echo ""

# Summary
echo "═══════════════════════════════════════════"
echo "🎉 Setup Complete!"
echo "═══════════════════════════════════════════"
echo ""
echo "Created:"
echo "  • 5 Technical Sheet Categories"
echo "  • 5 Blog Categories"
echo "  • 1 Blog Page (set as posts page)"
echo "  • 1 Sample Blog Post"
echo "  • 2 Sample Technical Sheets"
echo ""
echo "Next steps:"
echo "  1. Visit /blog to see the blog archive"
echo "  2. Visit /technical-sheets to see technical documentation"
echo "  3. Add real blog posts in WordPress admin"
echo "  4. Upload PDF files to technical sheets"
echo "  5. Configure blog sidebar/widgets if needed"
echo ""
echo "Your ReVert CMS is now fully configured! 🚀"
