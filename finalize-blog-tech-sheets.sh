#!/bin/bash
# Finalize Blog and Technical Sheets Setup
# Run this on your server after fixing the PHP error

echo "🔄 Flushing WordPress rewrite rules..."
cd /var/www/html
wp rewrite flush --allow-root
echo "✅ Rewrite rules flushed!"
echo ""

echo "📁 Creating Technical Sheet Categories..."
wp term create tech_sheet_category 'Product Data Sheets' --description='Technical specifications and product information' --allow-root
wp term create tech_sheet_category 'Safety Data Sheets (SDS)' --description='Safety and handling information' --allow-root
wp term create tech_sheet_category 'Application Guides' --description='How-to guides and best practices' --allow-root
wp term create tech_sheet_category 'Research Papers' --description='Scientific research and case studies' --allow-root
wp term create tech_sheet_category 'Compliance Documents' --description='Regulatory and compliance documentation' --allow-root
echo "✅ Technical Sheet Categories created!"
echo ""

echo "📚 Creating Blog Categories..."
wp term create category 'Agriculture News' --description='Latest news in sustainable agriculture' --allow-root
wp term create category 'Product Updates' --description='New products and features' --allow-root
wp term create category 'Case Studies' --description='Success stories from our customers' --allow-root
wp term create category 'Sustainability' --description='Environmental and sustainability topics' --allow-root
wp term create category 'Tips & Guides' --description='Farming tips and how-to guides' --allow-root
echo "✅ Blog Categories created!"
echo ""

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

echo "═══════════════════════════════════════════"
echo "🎉 Setup Complete!"
echo "═══════════════════════════════════════════"
echo ""
echo "Next steps:"
echo "  1. Visit /wp-admin and check for 'Technical Sheets' in admin menu"
echo "  2. Visit /blog to see the blog archive"
echo "  3. Visit /technical-sheets to see technical documentation"
echo "  4. Start adding blog posts and technical sheets!"
echo ""
