#!/bin/bash
# ReVert WordPress Content Setup Script
# Run this on your server with: bash setup-wordpress-content.sh

echo "🚀 Setting up ReVert WordPress content..."
echo ""

# Navigate to WordPress directory
cd /var/www/html

# Create Product Categories
echo "📁 Creating Product Categories..."
wp term create product_category 'Biologicals' --description='Biological solutions for soil and crop health' --allow-root
wp term create product_category 'Stimulants' --description='Plant growth stimulants and biostimulants' --allow-root
wp term create product_category 'Fertilisers & Nutrients' --description='Comprehensive nutrient solutions' --allow-root
wp term create product_category 'Specialty Products' --description='Specialized agricultural solutions' --allow-root
echo "✅ Product Categories created!"
echo ""

# Create Application Areas
echo "🎯 Creating Application Areas..."
wp term create application_area 'Horticulture' --allow-root
wp term create application_area 'Commercial' --allow-root
wp term create application_area 'Livestock' --allow-root
wp term create application_area 'Pest Management' --allow-root
echo "✅ Application Areas created!"
echo ""

# Create Reseller Regions
echo "📍 Creating Reseller Regions..."
wp term create reseller_region 'North' --allow-root
wp term create reseller_region 'South' --allow-root
wp term create reseller_region 'East' --allow-root
wp term create reseller_region 'West' --allow-root
echo "✅ Reseller Regions created!"
echo ""

# Create Sample Products
echo "🌱 Creating Sample Products..."

# Product 1: Bac 5 Liquid
PRODUCT1=$(wp post create \
  --post_type=revert_product \
  --post_title='Bac 5 Liquid' \
  --post_content='<p>Advanced biological solution combining five beneficial bacteria strains for enhanced soil health and crop vitality. Suitable for all crop types.</p><h3>Key Features:</h3><ul><li>Contains 5 beneficial bacteria strains</li><li>Improves soil structure and fertility</li><li>Enhances nutrient availability</li><li>Suitable for organic farming</li></ul>' \
  --post_status=publish \
  --porcelain \
  --allow-root)

wp post term add $PRODUCT1 product_category 'Biologicals' --allow-root
wp post term add $PRODUCT1 application_area 'Horticulture' --allow-root
wp post meta update $PRODUCT1 product_icon 'sprout' --allow-root
echo "  ✓ Bac 5 Liquid created (ID: $PRODUCT1)"

# Product 2: Seaweed Plus
PRODUCT2=$(wp post create \
  --post_type=revert_product \
  --post_title='Seaweed Plus' \
  --post_content='<p>Premium seaweed extract enriched with natural growth hormones and trace elements. Promotes vigorous growth and stress resistance.</p><h3>Benefits:</h3><ul><li>100% natural seaweed extract</li><li>Rich in growth hormones and minerals</li><li>Enhances stress tolerance</li><li>Improves crop quality and yield</li></ul>' \
  --post_status=publish \
  --porcelain \
  --allow-root)

wp post term add $PRODUCT2 product_category 'Stimulants' --allow-root
wp post term add $PRODUCT2 application_area 'Commercial' --allow-root
wp post meta update $PRODUCT2 product_icon 'leaf' --allow-root
echo "  ✓ Seaweed Plus created (ID: $PRODUCT2)"

# Product 3: BioBoost
PRODUCT3=$(wp post create \
  --post_type=revert_product \
  --post_title='BioBoost' \
  --post_content='<p>High-performance biostimulant designed to enhance nutrient uptake and improve overall plant health. Suitable for all growth stages.</p><h3>Applications:</h3><ul><li>Stimulates root development</li><li>Enhances nutrient uptake</li><li>Increases resistance to environmental stress</li><li>Suitable from seedling to harvest</li></ul>' \
  --post_status=publish \
  --porcelain \
  --allow-root)

wp post term add $PRODUCT3 product_category 'Stimulants' --allow-root
wp post term add $PRODUCT3 application_area 'Horticulture' --allow-root
wp post meta update $PRODUCT3 product_icon 'droplet' --allow-root
echo "  ✓ BioBoost created (ID: $PRODUCT3)"

# Product 4: CalciMax
PRODUCT4=$(wp post create \
  --post_type=revert_product \
  --post_title='CalciMax' \
  --post_content='<p>Premium calcium supplement designed to prevent calcium deficiencies and strengthen cell walls. Essential for fruit and vegetable crops.</p><h3>Key Benefits:</h3><ul><li>Prevents blossom end rot</li><li>Strengthens cell walls</li><li>Improves fruit quality</li><li>Highly available calcium source</li></ul>' \
  --post_status=publish \
  --porcelain \
  --allow-root)

wp post term add $PRODUCT4 product_category 'Fertilisers & Nutrients' --allow-root
wp post term add $PRODUCT4 application_area 'Horticulture' --allow-root
wp post meta update $PRODUCT4 product_icon 'shield' --allow-root
echo "  ✓ CalciMax created (ID: $PRODUCT4)"

# Product 5: Pasture Blend
PRODUCT5=$(wp post create \
  --post_type=revert_product \
  --post_title='Pasture Blend' \
  --post_content='<p>Complete biological solution specifically formulated for pasture improvement and livestock nutrition. Enhances soil health and pasture quality.</p><h3>Features:</h3><ul><li>Specially formulated for pastures</li><li>Improves forage quality</li><li>Enhances soil microbial activity</li><li>Safe for livestock grazing</li></ul>' \
  --post_status=publish \
  --porcelain \
  --allow-root)

wp post term add $PRODUCT5 product_category 'Biologicals' --allow-root
wp post term add $PRODUCT5 application_area 'Livestock' --allow-root
wp post meta update $PRODUCT5 product_icon 'heart' --allow-root
echo "  ✓ Pasture Blend created (ID: $PRODUCT5)"

echo "✅ 5 Sample Products created!"
echo ""

# Create Sample Resellers
echo "🏢 Creating Sample Resellers..."

# Reseller 1
RESELLER1=$(wp post create \
  --post_type=revert_reseller \
  --post_title='Green Valley Supplies' \
  --post_status=publish \
  --porcelain \
  --allow-root)

wp post term add $RESELLER1 reseller_region 'North' --allow-root
wp post meta update $RESELLER1 reseller_address '123 Agricultural Drive
Green Valley, VIC 3000
Australia' --allow-root
wp post meta update $RESELLER1 reseller_phone '+61 3 9876 5432' --allow-root
wp post meta update $RESELLER1 reseller_email 'info@greenvalleysupplies.com.au' --allow-root
wp post meta update $RESELLER1 reseller_website 'https://greenvalleysupplies.com.au' --allow-root
echo "  ✓ Green Valley Supplies created (ID: $RESELLER1)"

# Reseller 2
RESELLER2=$(wp post create \
  --post_type=revert_reseller \
  --post_title='Australian AgriSolutions' \
  --post_status=publish \
  --porcelain \
  --allow-root)

wp post term add $RESELLER2 reseller_region 'South' --allow-root
wp post meta update $RESELLER2 reseller_address '456 Farm Road
Adelaide, SA 5000
Australia' --allow-root
wp post meta update $RESELLER2 reseller_phone '+61 8 8765 4321' --allow-root
wp post meta update $RESELLER2 reseller_email 'contact@ausagrisolutions.com.au' --allow-root
wp post meta update $RESELLER2 reseller_website 'https://ausagrisolutions.com.au' --allow-root
echo "  ✓ Australian AgriSolutions created (ID: $RESELLER2)"

# Reseller 3
RESELLER3=$(wp post create \
  --post_type=revert_reseller \
  --post_title='Coastal Agriculture Supplies' \
  --post_status=publish \
  --porcelain \
  --allow-root)

wp post term add $RESELLER3 reseller_region 'East' --allow-root
wp post meta update $RESELLER3 reseller_address '789 Coastal Highway
Brisbane, QLD 4000
Australia' --allow-root
wp post meta update $RESELLER3 reseller_phone '+61 7 7654 3210' --allow-root
wp post meta update $RESELLER3 reseller_email 'sales@coastalag.com.au' --allow-root
wp post meta update $RESELLER3 reseller_website 'https://coastalag.com.au' --allow-root
echo "  ✓ Coastal Agriculture Supplies created (ID: $RESELLER3)"

echo "✅ 3 Sample Resellers created!"
echo ""

# Summary
echo "═══════════════════════════════════════════"
echo "🎉 Setup Complete!"
echo "═══════════════════════════════════════════"
echo ""
echo "Created:"
echo "  • 4 Product Categories"
echo "  • 4 Application Areas"
echo "  • 4 Reseller Regions"
echo "  • 5 Sample Products"
echo "  • 3 Sample Resellers"
echo ""
echo "Next steps:"
echo "  1. Visit your website homepage"
echo "  2. Check Products menu in WordPress admin"
echo "  3. Test the Distributor Locator"
echo "  4. Install ACF Pro to edit product fields"
echo ""
echo "Your ReVert WordPress site is ready! 🚀"
