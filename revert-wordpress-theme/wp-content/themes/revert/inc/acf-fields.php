<?php
/**
 * ACF Field Groups
 *
 * @package ReVert
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

if (function_exists('acf_add_local_field_group')) {

    /**
     * Product Details Field Group
     */
    acf_add_local_field_group(array(
        'key' => 'group_product_details',
        'title' => 'Product Details',
        'fields' => array(
            array(
                'key' => 'field_product_tagline',
                'label' => 'Product Tagline',
                'name' => 'product_tagline',
                'type' => 'text',
                'instructions' => 'A short tagline or headline for this product',
            ),
            array(
                'key' => 'field_product_form',
                'label' => 'Product Form',
                'name' => 'product_form',
                'type' => 'select',
                'instructions' => 'The physical form of this product',
                'choices' => array(
                    'liquid'  => 'Liquid',
                    'granule' => 'Granule',
                    'powder'  => 'Powder',
                    'other'   => 'Other',
                ),
                'default_value' => 'liquid',
                'allow_null' => 0,
                'return_format' => 'value',
            ),
            array(
                'key' => 'field_product_description',
                'label' => 'Product Description',
                'name' => 'product_description',
                'type' => 'wysiwyg',
                'instructions' => 'Main product description (what it does, benefits, usage)',
                'required' => 1,
                'tabs' => 'visual',
                'toolbar' => 'basic',
                'media_upload' => 0,
            ),
            array(
                'key' => 'field_product_icon',
                'label' => 'Product Icon',
                'name' => 'product_icon',
                'type' => 'select',
                'instructions' => 'Icon shown on product card and page',
                'choices' => array(
                    'sprout'      => '🌱 Sprout',
                    'leaf'        => '🍃 Leaf',
                    'heart'       => '❤️ Heart',
                    'microscope'  => '🔬 Microscope',
                    'shield'      => '🛡️ Shield',
                    'droplet'     => '💧 Droplet',
                ),
                'default_value' => 'sprout',
                'allow_null' => 0,
                'return_format' => 'value',
            ),
            // Feature 1
            array(
                'key' => 'field_feature_1_title',
                'label' => 'Feature 1 - Title',
                'name' => 'feature_1_title',
                'type' => 'text',
                'instructions' => 'First key feature or benefit',
            ),
            array(
                'key' => 'field_feature_1_description',
                'label' => 'Feature 1 - Description',
                'name' => 'feature_1_description',
                'type' => 'textarea',
                'rows' => 2,
            ),
            array(
                'key' => 'field_feature_1_icon',
                'label' => 'Feature 1 - Icon',
                'name' => 'feature_1_icon',
                'type' => 'select',
                'choices' => array(
                    'shield'       => 'Shield',
                    'droplet'      => 'Droplet',
                    'sprout'       => 'Sprout',
                    'trending-up'  => 'Trending Up',
                    'leaf'         => 'Leaf',
                    'heart'        => 'Heart',
                ),
                'default_value' => 'sprout',
            ),

            // Feature 2
            array(
                'key' => 'field_feature_2_title',
                'label' => 'Feature 2 - Title',
                'name' => 'feature_2_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_feature_2_description',
                'label' => 'Feature 2 - Description',
                'name' => 'feature_2_description',
                'type' => 'textarea',
                'rows' => 2,
            ),
            array(
                'key' => 'field_feature_2_icon',
                'label' => 'Feature 2 - Icon',
                'name' => 'feature_2_icon',
                'type' => 'select',
                'choices' => array(
                    'shield'       => 'Shield',
                    'droplet'      => 'Droplet',
                    'sprout'       => 'Sprout',
                    'trending-up'  => 'Trending Up',
                    'leaf'         => 'Leaf',
                    'heart'        => 'Heart',
                ),
                'default_value' => 'shield',
            ),

            // Feature 3
            array(
                'key' => 'field_feature_3_title',
                'label' => 'Feature 3 - Title',
                'name' => 'feature_3_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_feature_3_description',
                'label' => 'Feature 3 - Description',
                'name' => 'feature_3_description',
                'type' => 'textarea',
                'rows' => 2,
            ),
            array(
                'key' => 'field_feature_3_icon',
                'label' => 'Feature 3 - Icon',
                'name' => 'feature_3_icon',
                'type' => 'select',
                'choices' => array(
                    'shield'       => 'Shield',
                    'droplet'      => 'Droplet',
                    'sprout'       => 'Sprout',
                    'trending-up'  => 'Trending Up',
                    'leaf'         => 'Leaf',
                    'heart'        => 'Heart',
                ),
                'default_value' => 'leaf',
            ),

            // Feature 4
            array(
                'key' => 'field_feature_4_title',
                'label' => 'Feature 4 - Title',
                'name' => 'feature_4_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_feature_4_description',
                'label' => 'Feature 4 - Description',
                'name' => 'feature_4_description',
                'type' => 'textarea',
                'rows' => 2,
            ),
            array(
                'key' => 'field_feature_4_icon',
                'label' => 'Feature 4 - Icon',
                'name' => 'feature_4_icon',
                'type' => 'select',
                'choices' => array(
                    'shield'       => 'Shield',
                    'droplet'      => 'Droplet',
                    'sprout'       => 'Sprout',
                    'trending-up'  => 'Trending Up',
                    'leaf'         => 'Leaf',
                    'heart'        => 'Heart',
                ),
                'default_value' => 'trending-up',
            ),
            array(
                'key' => 'field_product_technical_sheet',
                'label' => 'Technical Data Sheet',
                'name' => 'product_technical_sheet',
                'type' => 'file',
                'instructions' => 'Upload the technical data sheet (PDF)',
                'return_format' => 'array',
                'library' => 'all',
                'mime_types' => 'pdf',
            ),

            // Product Gallery
            array(
                'key' => 'field_product_gallery_1',
                'label' => 'Gallery Image 1',
                'name' => 'product_gallery_1',
                'type' => 'image',
                'instructions' => 'Additional product image',
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array(
                'key' => 'field_product_gallery_2',
                'label' => 'Gallery Image 2',
                'name' => 'product_gallery_2',
                'type' => 'image',
                'instructions' => 'Additional product image',
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array(
                'key' => 'field_product_gallery_3',
                'label' => 'Gallery Image 3',
                'name' => 'product_gallery_3',
                'type' => 'image',
                'instructions' => 'Additional product image',
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array(
                'key' => 'field_product_gallery_4',
                'label' => 'Gallery Image 4',
                'name' => 'product_gallery_4',
                'type' => 'image',
                'instructions' => 'Additional product image',
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
            ),

            // Product Specifications
            // Specification 1
            array(
                'key' => 'field_product_spec_1_name',
                'label' => 'Specification 1 Name',
                'name' => 'product_spec_1_name',
                'type' => 'text',
                'instructions' => 'e.g., Application Rate, Active Ingredients, pH Range',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_product_spec_1_value',
                'label' => 'Specification 1 Value',
                'name' => 'product_spec_1_value',
                'type' => 'text',
                'instructions' => 'The specification value',
                'wrapper' => array('width' => '50'),
            ),
            // Specification 2
            array(
                'key' => 'field_product_spec_2_name',
                'label' => 'Specification 2 Name',
                'name' => 'product_spec_2_name',
                'type' => 'text',
                'instructions' => 'e.g., Application Rate, Active Ingredients, pH Range',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_product_spec_2_value',
                'label' => 'Specification 2 Value',
                'name' => 'product_spec_2_value',
                'type' => 'text',
                'instructions' => 'The specification value',
                'wrapper' => array('width' => '50'),
            ),
            // Specification 3
            array(
                'key' => 'field_product_spec_3_name',
                'label' => 'Specification 3 Name',
                'name' => 'product_spec_3_name',
                'type' => 'text',
                'instructions' => 'e.g., Application Rate, Active Ingredients, pH Range',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_product_spec_3_value',
                'label' => 'Specification 3 Value',
                'name' => 'product_spec_3_value',
                'type' => 'text',
                'instructions' => 'The specification value',
                'wrapper' => array('width' => '50'),
            ),
            // Specification 4
            array(
                'key' => 'field_product_spec_4_name',
                'label' => 'Specification 4 Name',
                'name' => 'product_spec_4_name',
                'type' => 'text',
                'instructions' => 'e.g., Application Rate, Active Ingredients, pH Range',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_product_spec_4_value',
                'label' => 'Specification 4 Value',
                'name' => 'product_spec_4_value',
                'type' => 'text',
                'instructions' => 'The specification value',
                'wrapper' => array('width' => '50'),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'revert_product',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'acf_after_title',
        'style' => 'seamless',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
    ));

    /**
     * Reseller Details Field Group
     */
    acf_add_local_field_group(array(
        'key' => 'group_reseller_details',
        'title' => 'Reseller Details',
        'fields' => array(
            array(
                'key' => 'field_reseller_address',
                'label' => 'Address',
                'name' => 'reseller_address',
                'type' => 'textarea',
                'instructions' => 'Enter the full business address',
                'rows' => 3,
                'required' => 1,
            ),
            array(
                'key' => 'field_reseller_phone',
                'label' => 'Phone Number',
                'name' => 'reseller_phone',
                'type' => 'text',
                'instructions' => 'Enter the contact phone number',
                'required' => 1,
            ),
            array(
                'key' => 'field_reseller_email',
                'label' => 'Email Address',
                'name' => 'reseller_email',
                'type' => 'email',
                'instructions' => 'Enter the contact email address',
                'required' => 1,
            ),
            array(
                'key' => 'field_reseller_website',
                'label' => 'Website URL',
                'name' => 'reseller_website',
                'type' => 'url',
                'instructions' => 'Enter the reseller website URL (optional)',
                'required' => 0,
            ),
            array(
                'key' => 'field_reseller_latitude',
                'label' => 'Latitude',
                'name' => 'reseller_latitude',
                'type' => 'number',
                'instructions' => 'GPS latitude coordinate (e.g., -37.8136)',
                'step' => 0.000001,
            ),
            array(
                'key' => 'field_reseller_longitude',
                'label' => 'Longitude',
                'name' => 'reseller_longitude',
                'type' => 'number',
                'instructions' => 'GPS longitude coordinate (e.g., 144.9631)',
                'step' => 0.000001,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'revert_reseller',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
    ));

    /**
     * Technical Sheet Details Field Group
     */
    acf_add_local_field_group(array(
        'key' => 'group_tech_sheet_details',
        'title' => 'Technical Sheet Details',
        'fields' => array(
            array(
                'key' => 'field_tech_sheet_file',
                'label' => 'PDF Document',
                'name' => 'tech_sheet_file',
                'type' => 'file',
                'instructions' => 'Upload the technical sheet PDF document',
                'required' => 1,
                'return_format' => 'array',
                'library' => 'all',
                'mime_types' => 'pdf',
            ),
            array(
                'key' => 'field_tech_sheet_version',
                'label' => 'Version',
                'name' => 'tech_sheet_version',
                'type' => 'text',
                'instructions' => 'Document version (e.g., 1.0, 2.1)',
                'placeholder' => '1.0',
            ),
            array(
                'key' => 'field_tech_sheet_date',
                'label' => 'Last Updated',
                'name' => 'tech_sheet_date',
                'type' => 'date_picker',
                'instructions' => 'Date this document was last updated',
                'display_format' => 'd/m/Y',
                'return_format' => 'Y-m-d',
            ),
            array(
                'key' => 'field_tech_sheet_size',
                'label' => 'File Size',
                'name' => 'tech_sheet_size',
                'type' => 'text',
                'instructions' => 'File size (e.g., 2.3 MB) - will be auto-calculated',
                'readonly' => 1,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'revert_tech_sheet',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
    ));

    /**
     * Homepage Content Field Group
     */
    acf_add_local_field_group(array(
        'key' => 'group_homepage_content',
        'title' => 'Homepage Content',
        'fields' => array(

            // --- Hero Section ---
            array(
                'key' => 'field_hero_tab',
                'label' => 'Hero Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
                'instructions' => 'Main headline on the homepage',
                'placeholder' => 'Innovating Agriculture for a Sustainable Future',
            ),
            array(
                'key' => 'field_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
                'instructions' => 'Short description below the headline',
                'rows' => 2,
                'placeholder' => 'Leading the way in sustainable agricultural solutions',
            ),
            array(
                'key' => 'field_hero_image',
                'label' => 'Hero Background Image',
                'name' => 'hero_image',
                'type' => 'image',
                'instructions' => 'Background image for the hero section (recommended: 1920x1080)',
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array(
                'key' => 'field_hero_button_1_text',
                'label' => 'Button 1 Text',
                'name' => 'hero_button_1_text',
                'type' => 'text',
                'placeholder' => 'Explore Products',
            ),
            array(
                'key' => 'field_hero_button_1_link',
                'label' => 'Button 1 Link',
                'name' => 'hero_button_1_link',
                'type' => 'url',
            ),
            array(
                'key' => 'field_hero_button_2_text',
                'label' => 'Button 2 Text',
                'name' => 'hero_button_2_text',
                'type' => 'text',
                'placeholder' => 'Learn More',
            ),
            array(
                'key' => 'field_hero_button_2_link',
                'label' => 'Button 2 Link',
                'name' => 'hero_button_2_link',
                'type' => 'url',
            ),

            // --- Solutions Section ---
            array(
                'key' => 'field_solutions_tab',
                'label' => 'Solutions Section',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_solutions_title',
                'label' => 'Section Title',
                'name' => 'solutions_title',
                'type' => 'text',
                'placeholder' => 'Our Solutions',
            ),
            array(
                'key' => 'field_solutions_subtitle',
                'label' => 'Section Subtitle',
                'name' => 'solutions_subtitle',
                'type' => 'textarea',
                'rows' => 2,
            ),
            // Solution Cards 1-4
            array('key' => 'field_solution_1_title', 'label' => 'Solution 1 - Title', 'name' => 'solution_1_title', 'type' => 'text', 'placeholder' => 'Crop Solutions', 'wrapper' => array('width' => '50')),
            array('key' => 'field_solution_1_description', 'label' => 'Solution 1 - Description', 'name' => 'solution_1_description', 'type' => 'text', 'placeholder' => 'Advanced crop protection and nutrition', 'wrapper' => array('width' => '50')),
            array('key' => 'field_solution_1_link', 'label' => 'Solution 1 - Link', 'name' => 'solution_1_link', 'type' => 'url', 'wrapper' => array('width' => '33')),
            array('key' => 'field_solution_1_icon', 'label' => 'Solution 1 - Icon', 'name' => 'solution_1_icon', 'type' => 'select', 'choices' => array('sprout' => 'Sprout', 'leaf' => 'Leaf', 'heart' => 'Heart', 'microscope' => 'Microscope', 'shield' => 'Shield', 'droplet' => 'Droplet'), 'default_value' => 'sprout', 'wrapper' => array('width' => '33')),
            array('key' => 'field_solution_1_image', 'label' => 'Solution 1 - Image', 'name' => 'solution_1_image', 'type' => 'image', 'return_format' => 'url', 'preview_size' => 'thumbnail', 'wrapper' => array('width' => '33')),

            array('key' => 'field_solution_2_title', 'label' => 'Solution 2 - Title', 'name' => 'solution_2_title', 'type' => 'text', 'placeholder' => 'Horticulture', 'wrapper' => array('width' => '50')),
            array('key' => 'field_solution_2_description', 'label' => 'Solution 2 - Description', 'name' => 'solution_2_description', 'type' => 'text', 'placeholder' => 'Specialized horticultural solutions', 'wrapper' => array('width' => '50')),
            array('key' => 'field_solution_2_link', 'label' => 'Solution 2 - Link', 'name' => 'solution_2_link', 'type' => 'url', 'wrapper' => array('width' => '33')),
            array('key' => 'field_solution_2_icon', 'label' => 'Solution 2 - Icon', 'name' => 'solution_2_icon', 'type' => 'select', 'choices' => array('sprout' => 'Sprout', 'leaf' => 'Leaf', 'heart' => 'Heart', 'microscope' => 'Microscope', 'shield' => 'Shield', 'droplet' => 'Droplet'), 'default_value' => 'leaf', 'wrapper' => array('width' => '33')),
            array('key' => 'field_solution_2_image', 'label' => 'Solution 2 - Image', 'name' => 'solution_2_image', 'type' => 'image', 'return_format' => 'url', 'preview_size' => 'thumbnail', 'wrapper' => array('width' => '33')),

            array('key' => 'field_solution_3_title', 'label' => 'Solution 3 - Title', 'name' => 'solution_3_title', 'type' => 'text', 'placeholder' => 'Livestock', 'wrapper' => array('width' => '50')),
            array('key' => 'field_solution_3_description', 'label' => 'Solution 3 - Description', 'name' => 'solution_3_description', 'type' => 'text', 'placeholder' => 'Comprehensive livestock care', 'wrapper' => array('width' => '50')),
            array('key' => 'field_solution_3_link', 'label' => 'Solution 3 - Link', 'name' => 'solution_3_link', 'type' => 'url', 'wrapper' => array('width' => '33')),
            array('key' => 'field_solution_3_icon', 'label' => 'Solution 3 - Icon', 'name' => 'solution_3_icon', 'type' => 'select', 'choices' => array('sprout' => 'Sprout', 'leaf' => 'Leaf', 'heart' => 'Heart', 'microscope' => 'Microscope', 'shield' => 'Shield', 'droplet' => 'Droplet'), 'default_value' => 'heart', 'wrapper' => array('width' => '33')),
            array('key' => 'field_solution_3_image', 'label' => 'Solution 3 - Image', 'name' => 'solution_3_image', 'type' => 'image', 'return_format' => 'url', 'preview_size' => 'thumbnail', 'wrapper' => array('width' => '33')),

            array('key' => 'field_solution_4_title', 'label' => 'Solution 4 - Title', 'name' => 'solution_4_title', 'type' => 'text', 'placeholder' => 'Research', 'wrapper' => array('width' => '50')),
            array('key' => 'field_solution_4_description', 'label' => 'Solution 4 - Description', 'name' => 'solution_4_description', 'type' => 'text', 'placeholder' => 'Innovation and case studies', 'wrapper' => array('width' => '50')),
            array('key' => 'field_solution_4_link', 'label' => 'Solution 4 - Link', 'name' => 'solution_4_link', 'type' => 'url', 'wrapper' => array('width' => '33')),
            array('key' => 'field_solution_4_icon', 'label' => 'Solution 4 - Icon', 'name' => 'solution_4_icon', 'type' => 'select', 'choices' => array('sprout' => 'Sprout', 'leaf' => 'Leaf', 'heart' => 'Heart', 'microscope' => 'Microscope', 'shield' => 'Shield', 'droplet' => 'Droplet'), 'default_value' => 'microscope', 'wrapper' => array('width' => '33')),
            array('key' => 'field_solution_4_image', 'label' => 'Solution 4 - Image', 'name' => 'solution_4_image', 'type' => 'image', 'return_format' => 'url', 'preview_size' => 'thumbnail', 'wrapper' => array('width' => '33')),

            // --- Sustainability Section ---
            array('key' => 'field_sustainability_tab', 'label' => 'Sustainability Section', 'type' => 'tab'),
            array('key' => 'field_sustainability_title', 'label' => 'Section Title', 'name' => 'sustainability_title', 'type' => 'text', 'placeholder' => 'Committed to Sustainable Agriculture'),
            array('key' => 'field_sustainability_description', 'label' => 'Section Description', 'name' => 'sustainability_description', 'type' => 'textarea', 'rows' => 3),
            // Bullet points
            array('key' => 'field_sustainability_point_1_icon', 'label' => 'Point 1 - Icon', 'name' => 'sustainability_point_1_icon', 'type' => 'select', 'choices' => array('shield' => 'Shield', 'droplet' => 'Droplet', 'sprout' => 'Sprout', 'leaf' => 'Leaf', 'heart' => 'Heart'), 'default_value' => 'shield', 'wrapper' => array('width' => '20')),
            array('key' => 'field_sustainability_point_1_title', 'label' => 'Point 1 - Title', 'name' => 'sustainability_point_1_title', 'type' => 'text', 'placeholder' => 'Eco-Friendly Products', 'wrapper' => array('width' => '30')),
            array('key' => 'field_sustainability_point_1_description', 'label' => 'Point 1 - Description', 'name' => 'sustainability_point_1_description', 'type' => 'text', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sustainability_point_2_icon', 'label' => 'Point 2 - Icon', 'name' => 'sustainability_point_2_icon', 'type' => 'select', 'choices' => array('shield' => 'Shield', 'droplet' => 'Droplet', 'sprout' => 'Sprout', 'leaf' => 'Leaf', 'heart' => 'Heart'), 'default_value' => 'droplet', 'wrapper' => array('width' => '20')),
            array('key' => 'field_sustainability_point_2_title', 'label' => 'Point 2 - Title', 'name' => 'sustainability_point_2_title', 'type' => 'text', 'placeholder' => 'Water Conservation', 'wrapper' => array('width' => '30')),
            array('key' => 'field_sustainability_point_2_description', 'label' => 'Point 2 - Description', 'name' => 'sustainability_point_2_description', 'type' => 'text', 'wrapper' => array('width' => '50')),
            array('key' => 'field_sustainability_point_3_icon', 'label' => 'Point 3 - Icon', 'name' => 'sustainability_point_3_icon', 'type' => 'select', 'choices' => array('shield' => 'Shield', 'droplet' => 'Droplet', 'sprout' => 'Sprout', 'leaf' => 'Leaf', 'heart' => 'Heart'), 'default_value' => 'sprout', 'wrapper' => array('width' => '20')),
            array('key' => 'field_sustainability_point_3_title', 'label' => 'Point 3 - Title', 'name' => 'sustainability_point_3_title', 'type' => 'text', 'placeholder' => 'Soil Health', 'wrapper' => array('width' => '30')),
            array('key' => 'field_sustainability_point_3_description', 'label' => 'Point 3 - Description', 'name' => 'sustainability_point_3_description', 'type' => 'text', 'wrapper' => array('width' => '50')),
            // Stats
            array('key' => 'field_stat_1_label', 'label' => 'Stat 1 - Label', 'name' => 'stat_1_label', 'type' => 'text', 'placeholder' => 'Carbon Footprint Reduction', 'wrapper' => array('width' => '50')),
            array('key' => 'field_stat_1_value', 'label' => 'Stat 1 - Value (%)', 'name' => 'stat_1_value', 'type' => 'number', 'min' => 0, 'max' => 100, 'wrapper' => array('width' => '50')),
            array('key' => 'field_stat_2_label', 'label' => 'Stat 2 - Label', 'name' => 'stat_2_label', 'type' => 'text', 'placeholder' => 'Customer Satisfaction', 'wrapper' => array('width' => '50')),
            array('key' => 'field_stat_2_value', 'label' => 'Stat 2 - Value (%)', 'name' => 'stat_2_value', 'type' => 'number', 'min' => 0, 'max' => 100, 'wrapper' => array('width' => '50')),
            array('key' => 'field_stat_3_label', 'label' => 'Stat 3 - Label', 'name' => 'stat_3_label', 'type' => 'text', 'placeholder' => 'Yield Improvement', 'wrapper' => array('width' => '50')),
            array('key' => 'field_stat_3_value', 'label' => 'Stat 3 - Value (%)', 'name' => 'stat_3_value', 'type' => 'number', 'min' => 0, 'max' => 100, 'wrapper' => array('width' => '50')),

            // --- Testimonials Section ---
            array('key' => 'field_testimonials_tab', 'label' => 'Testimonials', 'type' => 'tab'),
            array('key' => 'field_testimonials_title', 'label' => 'Section Title', 'name' => 'testimonials_title', 'type' => 'text', 'placeholder' => 'What Farmers Are Saying'),
            array('key' => 'field_testimonials_subtitle', 'label' => 'Section Subtitle', 'name' => 'testimonials_subtitle', 'type' => 'textarea', 'rows' => 2),
            // Testimonial 1
            array('key' => 'field_testimonial_1_quote', 'label' => 'Testimonial 1 - Quote', 'name' => 'testimonial_1_quote', 'type' => 'textarea', 'rows' => 3),
            array('key' => 'field_testimonial_1_name', 'label' => 'Name', 'name' => 'testimonial_1_name', 'type' => 'text', 'wrapper' => array('width' => '25')),
            array('key' => 'field_testimonial_1_role', 'label' => 'Role', 'name' => 'testimonial_1_role', 'type' => 'text', 'wrapper' => array('width' => '25')),
            array('key' => 'field_testimonial_1_location', 'label' => 'Location', 'name' => 'testimonial_1_location', 'type' => 'text', 'wrapper' => array('width' => '25')),
            array('key' => 'field_testimonial_1_stat', 'label' => 'Stat', 'name' => 'testimonial_1_stat', 'type' => 'text', 'wrapper' => array('width' => '12')),
            array('key' => 'field_testimonial_1_stat_label', 'label' => 'Stat Label', 'name' => 'testimonial_1_stat_label', 'type' => 'text', 'wrapper' => array('width' => '13')),
            array('key' => 'field_testimonial_1_icon', 'label' => 'Icon', 'name' => 'testimonial_1_icon', 'type' => 'select', 'choices' => array('trending-up' => 'Trending Up', 'leaf' => 'Leaf', 'droplet' => 'Droplet', 'sprout' => 'Sprout'), 'default_value' => 'trending-up'),
            // Testimonial 2
            array('key' => 'field_testimonial_2_quote', 'label' => 'Testimonial 2 - Quote', 'name' => 'testimonial_2_quote', 'type' => 'textarea', 'rows' => 3),
            array('key' => 'field_testimonial_2_name', 'label' => 'Name', 'name' => 'testimonial_2_name', 'type' => 'text', 'wrapper' => array('width' => '25')),
            array('key' => 'field_testimonial_2_role', 'label' => 'Role', 'name' => 'testimonial_2_role', 'type' => 'text', 'wrapper' => array('width' => '25')),
            array('key' => 'field_testimonial_2_location', 'label' => 'Location', 'name' => 'testimonial_2_location', 'type' => 'text', 'wrapper' => array('width' => '25')),
            array('key' => 'field_testimonial_2_stat', 'label' => 'Stat', 'name' => 'testimonial_2_stat', 'type' => 'text', 'wrapper' => array('width' => '12')),
            array('key' => 'field_testimonial_2_stat_label', 'label' => 'Stat Label', 'name' => 'testimonial_2_stat_label', 'type' => 'text', 'wrapper' => array('width' => '13')),
            array('key' => 'field_testimonial_2_icon', 'label' => 'Icon', 'name' => 'testimonial_2_icon', 'type' => 'select', 'choices' => array('trending-up' => 'Trending Up', 'leaf' => 'Leaf', 'droplet' => 'Droplet', 'sprout' => 'Sprout'), 'default_value' => 'leaf'),
            // Testimonial 3
            array('key' => 'field_testimonial_3_quote', 'label' => 'Testimonial 3 - Quote', 'name' => 'testimonial_3_quote', 'type' => 'textarea', 'rows' => 3),
            array('key' => 'field_testimonial_3_name', 'label' => 'Name', 'name' => 'testimonial_3_name', 'type' => 'text', 'wrapper' => array('width' => '25')),
            array('key' => 'field_testimonial_3_role', 'label' => 'Role', 'name' => 'testimonial_3_role', 'type' => 'text', 'wrapper' => array('width' => '25')),
            array('key' => 'field_testimonial_3_location', 'label' => 'Location', 'name' => 'testimonial_3_location', 'type' => 'text', 'wrapper' => array('width' => '25')),
            array('key' => 'field_testimonial_3_stat', 'label' => 'Stat', 'name' => 'testimonial_3_stat', 'type' => 'text', 'wrapper' => array('width' => '12')),
            array('key' => 'field_testimonial_3_stat_label', 'label' => 'Stat Label', 'name' => 'testimonial_3_stat_label', 'type' => 'text', 'wrapper' => array('width' => '13')),
            array('key' => 'field_testimonial_3_icon', 'label' => 'Icon', 'name' => 'testimonial_3_icon', 'type' => 'select', 'choices' => array('trending-up' => 'Trending Up', 'leaf' => 'Leaf', 'droplet' => 'Droplet', 'sprout' => 'Sprout'), 'default_value' => 'droplet'),

            // --- CTA Section ---
            array('key' => 'field_cta_tab', 'label' => 'Call to Action', 'type' => 'tab'),
            array('key' => 'field_cta_title', 'label' => 'CTA Title', 'name' => 'cta_title', 'type' => 'text', 'placeholder' => 'Ready to Transform Your Agriculture?'),
            array('key' => 'field_cta_description', 'label' => 'CTA Description', 'name' => 'cta_description', 'type' => 'textarea', 'rows' => 2),
            array('key' => 'field_cta_button_1_text', 'label' => 'Button 1 Text', 'name' => 'cta_button_1_text', 'type' => 'text', 'placeholder' => 'Get In Touch', 'wrapper' => array('width' => '25')),
            array('key' => 'field_cta_button_1_link', 'label' => 'Button 1 Link', 'name' => 'cta_button_1_link', 'type' => 'url', 'wrapper' => array('width' => '25')),
            array('key' => 'field_cta_button_2_text', 'label' => 'Button 2 Text', 'name' => 'cta_button_2_text', 'type' => 'text', 'placeholder' => 'Find A Distributor', 'wrapper' => array('width' => '25')),
            array('key' => 'field_cta_button_2_link', 'label' => 'Button 2 Link', 'name' => 'cta_button_2_link', 'type' => 'url', 'wrapper' => array('width' => '25')),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/template-home.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
    ));

    /**
     * About Page Content Field Group
     */
    acf_add_local_field_group(array(
        'key' => 'group_about_content',
        'title' => 'About Page Content',
        'fields' => array(

            // --- Hero Section ---
            array('key' => 'field_about_hero_tab', 'label' => 'Hero', 'type' => 'tab'),
            array('key' => 'field_about_hero_tagline', 'label' => 'Hero Tagline', 'name' => 'about_hero_tagline', 'type' => 'text', 'placeholder' => 'Our Story'),
            array('key' => 'field_about_hero_title', 'label' => 'Hero Title', 'name' => 'about_hero_title', 'type' => 'text', 'placeholder' => 'Our mission starts with our sons and daughters.'),
            array('key' => 'field_about_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'about_hero_subtitle', 'type' => 'text', 'placeholder' => 'It\'s our succession.'),

            // --- Mission Section ---
            array('key' => 'field_about_mission_tab', 'label' => 'Mission', 'type' => 'tab'),
            array('key' => 'field_about_mission_title', 'label' => 'Mission Title', 'name' => 'about_mission_title', 'type' => 'text', 'placeholder' => 'Bringing generational prosperity to farmers through soil regeneration.'),
            array('key' => 'field_about_mission_text_1', 'label' => 'Mission Text 1', 'name' => 'about_mission_text_1', 'type' => 'textarea', 'rows' => 3),
            array('key' => 'field_about_mission_text_2', 'label' => 'Mission Text 2', 'name' => 'about_mission_text_2', 'type' => 'textarea', 'rows' => 3),
            array('key' => 'field_about_mission_text_3', 'label' => 'Mission Text 3', 'name' => 'about_mission_text_3', 'type' => 'textarea', 'rows' => 3),
            array('key' => 'field_about_stat_value', 'label' => 'Stat Value', 'name' => 'about_stat_value', 'type' => 'text', 'placeholder' => '10+'),
            array('key' => 'field_about_stat_label', 'label' => 'Stat Label', 'name' => 'about_stat_label', 'type' => 'text', 'placeholder' => 'Years of Farm Research'),

            // --- Why Soil Section ---
            array('key' => 'field_about_soil_tab', 'label' => 'Why Soil', 'type' => 'tab'),
            array('key' => 'field_about_soil_title', 'label' => 'Section Title', 'name' => 'about_soil_title', 'type' => 'text', 'placeholder' => 'Why Soil Regeneration Matters'),
            array('key' => 'field_about_soil_subtitle', 'label' => 'Section Subtitle', 'name' => 'about_soil_subtitle', 'type' => 'text'),
            // Soil Card 1
            array('key' => 'field_about_soil_card_1_icon', 'label' => 'Card 1 - Icon', 'name' => 'about_soil_card_1_icon', 'type' => 'select', 'choices' => array('sprout' => 'Sprout', 'shield' => 'Shield', 'leaf' => 'Leaf', 'heart' => 'Heart', 'microscope' => 'Microscope', 'droplet' => 'Droplet', 'trending-up' => 'Trending Up'), 'default_value' => 'sprout'),
            array('key' => 'field_about_soil_card_1_title', 'label' => 'Card 1 - Title', 'name' => 'about_soil_card_1_title', 'type' => 'text', 'placeholder' => 'Visible Results Fast'),
            array('key' => 'field_about_soil_card_1_text', 'label' => 'Card 1 - Text', 'name' => 'about_soil_card_1_text', 'type' => 'textarea', 'rows' => 3),
            // Soil Card 2
            array('key' => 'field_about_soil_card_2_icon', 'label' => 'Card 2 - Icon', 'name' => 'about_soil_card_2_icon', 'type' => 'select', 'choices' => array('sprout' => 'Sprout', 'shield' => 'Shield', 'leaf' => 'Leaf', 'heart' => 'Heart', 'microscope' => 'Microscope', 'droplet' => 'Droplet', 'trending-up' => 'Trending Up'), 'default_value' => 'shield'),
            array('key' => 'field_about_soil_card_2_title', 'label' => 'Card 2 - Title', 'name' => 'about_soil_card_2_title', 'type' => 'text', 'placeholder' => 'Reduce Chemical Inputs'),
            array('key' => 'field_about_soil_card_2_text', 'label' => 'Card 2 - Text', 'name' => 'about_soil_card_2_text', 'type' => 'textarea', 'rows' => 3),
            // Soil Card 3
            array('key' => 'field_about_soil_card_3_icon', 'label' => 'Card 3 - Icon', 'name' => 'about_soil_card_3_icon', 'type' => 'select', 'choices' => array('sprout' => 'Sprout', 'shield' => 'Shield', 'leaf' => 'Leaf', 'heart' => 'Heart', 'microscope' => 'Microscope', 'droplet' => 'Droplet', 'trending-up' => 'Trending Up'), 'default_value' => 'leaf'),
            array('key' => 'field_about_soil_card_3_title', 'label' => 'Card 3 - Title', 'name' => 'about_soil_card_3_title', 'type' => 'text', 'placeholder' => 'Every Soil Counts'),
            array('key' => 'field_about_soil_card_3_text', 'label' => 'Card 3 - Text', 'name' => 'about_soil_card_3_text', 'type' => 'textarea', 'rows' => 3),

            // --- Approach Section ---
            array('key' => 'field_about_approach_tab', 'label' => 'Approach', 'type' => 'tab'),
            array('key' => 'field_about_approach_tagline', 'label' => 'Approach Tagline', 'name' => 'about_approach_tagline', 'type' => 'text', 'placeholder' => 'Our Approach'),
            array('key' => 'field_about_approach_title', 'label' => 'Approach Title', 'name' => 'about_approach_title', 'type' => 'text', 'placeholder' => 'Biology-First Soil Regeneration'),
            array('key' => 'field_about_approach_text_1', 'label' => 'Approach Text 1', 'name' => 'about_approach_text_1', 'type' => 'textarea', 'rows' => 3),
            array('key' => 'field_about_approach_text_2', 'label' => 'Approach Text 2', 'name' => 'about_approach_text_2', 'type' => 'textarea', 'rows' => 3),
            // Approach Feature 1
            array('key' => 'field_about_approach_feature_1_icon', 'label' => 'Feature 1 - Icon', 'name' => 'about_approach_feature_1_icon', 'type' => 'select', 'choices' => array('sprout' => 'Sprout', 'shield' => 'Shield', 'leaf' => 'Leaf', 'heart' => 'Heart', 'microscope' => 'Microscope', 'droplet' => 'Droplet', 'trending-up' => 'Trending Up'), 'default_value' => 'microscope', 'wrapper' => array('width' => '25')),
            array('key' => 'field_about_approach_feature_1_label', 'label' => 'Feature 1 - Label', 'name' => 'about_approach_feature_1_label', 'type' => 'text', 'placeholder' => 'Bacillus Bacteria', 'wrapper' => array('width' => '25')),
            // Approach Feature 2
            array('key' => 'field_about_approach_feature_2_icon', 'label' => 'Feature 2 - Icon', 'name' => 'about_approach_feature_2_icon', 'type' => 'select', 'choices' => array('sprout' => 'Sprout', 'shield' => 'Shield', 'leaf' => 'Leaf', 'heart' => 'Heart', 'microscope' => 'Microscope', 'droplet' => 'Droplet', 'trending-up' => 'Trending Up'), 'default_value' => 'droplet', 'wrapper' => array('width' => '25')),
            array('key' => 'field_about_approach_feature_2_label', 'label' => 'Feature 2 - Label', 'name' => 'about_approach_feature_2_label', 'type' => 'text', 'placeholder' => 'Targeted Supplements', 'wrapper' => array('width' => '25')),
            // Approach Feature 3
            array('key' => 'field_about_approach_feature_3_icon', 'label' => 'Feature 3 - Icon', 'name' => 'about_approach_feature_3_icon', 'type' => 'select', 'choices' => array('sprout' => 'Sprout', 'shield' => 'Shield', 'leaf' => 'Leaf', 'heart' => 'Heart', 'microscope' => 'Microscope', 'droplet' => 'Droplet', 'trending-up' => 'Trending Up'), 'default_value' => 'shield', 'wrapper' => array('width' => '25')),
            array('key' => 'field_about_approach_feature_3_label', 'label' => 'Feature 3 - Label', 'name' => 'about_approach_feature_3_label', 'type' => 'text', 'placeholder' => 'Certified Organic', 'wrapper' => array('width' => '25')),
            // Approach Feature 4
            array('key' => 'field_about_approach_feature_4_icon', 'label' => 'Feature 4 - Icon', 'name' => 'about_approach_feature_4_icon', 'type' => 'select', 'choices' => array('sprout' => 'Sprout', 'shield' => 'Shield', 'leaf' => 'Leaf', 'heart' => 'Heart', 'microscope' => 'Microscope', 'droplet' => 'Droplet', 'trending-up' => 'Trending Up'), 'default_value' => 'trending-up', 'wrapper' => array('width' => '25')),
            array('key' => 'field_about_approach_feature_4_label', 'label' => 'Feature 4 - Label', 'name' => 'about_approach_feature_4_label', 'type' => 'text', 'placeholder' => 'Proven Results', 'wrapper' => array('width' => '25')),

            // --- Timeline Section ---
            array('key' => 'field_about_timeline_tab', 'label' => 'Timeline', 'type' => 'tab'),
            array('key' => 'field_about_timeline_title', 'label' => 'Timeline Title', 'name' => 'about_timeline_title', 'type' => 'text', 'placeholder' => 'A Decade of Soil Science'),
            array('key' => 'field_about_timeline_subtitle', 'label' => 'Timeline Subtitle', 'name' => 'about_timeline_subtitle', 'type' => 'text'),
            // Timeline Item 1
            array('key' => 'field_about_timeline_1_year', 'label' => 'Item 1 - Year', 'name' => 'about_timeline_1_year', 'type' => 'text', 'placeholder' => '2014', 'wrapper' => array('width' => '15')),
            array('key' => 'field_about_timeline_1_title', 'label' => 'Item 1 - Title', 'name' => 'about_timeline_1_title', 'type' => 'text', 'placeholder' => 'The Beginning', 'wrapper' => array('width' => '35')),
            array('key' => 'field_about_timeline_1_text', 'label' => 'Item 1 - Text', 'name' => 'about_timeline_1_text', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50')),
            // Timeline Item 2
            array('key' => 'field_about_timeline_2_year', 'label' => 'Item 2 - Year', 'name' => 'about_timeline_2_year', 'type' => 'text', 'placeholder' => '2018', 'wrapper' => array('width' => '15')),
            array('key' => 'field_about_timeline_2_title', 'label' => 'Item 2 - Title', 'name' => 'about_timeline_2_title', 'type' => 'text', 'placeholder' => 'Proven on Farms', 'wrapper' => array('width' => '35')),
            array('key' => 'field_about_timeline_2_text', 'label' => 'Item 2 - Text', 'name' => 'about_timeline_2_text', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50')),
            // Timeline Item 3
            array('key' => 'field_about_timeline_3_year', 'label' => 'Item 3 - Year', 'name' => 'about_timeline_3_year', 'type' => 'text', 'placeholder' => '2022', 'wrapper' => array('width' => '15')),
            array('key' => 'field_about_timeline_3_title', 'label' => 'Item 3 - Title', 'name' => 'about_timeline_3_title', 'type' => 'text', 'placeholder' => 'Certified Organic', 'wrapper' => array('width' => '35')),
            array('key' => 'field_about_timeline_3_text', 'label' => 'Item 3 - Text', 'name' => 'about_timeline_3_text', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50')),
            // Timeline Item 4
            array('key' => 'field_about_timeline_4_year', 'label' => 'Item 4 - Year', 'name' => 'about_timeline_4_year', 'type' => 'text', 'placeholder' => 'Now', 'wrapper' => array('width' => '15')),
            array('key' => 'field_about_timeline_4_title', 'label' => 'Item 4 - Title', 'name' => 'about_timeline_4_title', 'type' => 'text', 'placeholder' => 'The Decade of Soil', 'wrapper' => array('width' => '35')),
            array('key' => 'field_about_timeline_4_text', 'label' => 'Item 4 - Text', 'name' => 'about_timeline_4_text', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50')),

            // --- Results Section ---
            array('key' => 'field_about_results_tab', 'label' => 'Results', 'type' => 'tab'),
            array('key' => 'field_about_results_title', 'label' => 'Results Title', 'name' => 'about_results_title', 'type' => 'text', 'placeholder' => 'Real Results From Real Farms'),
            array('key' => 'field_about_results_subtitle', 'label' => 'Results Subtitle', 'name' => 'about_results_subtitle', 'type' => 'text'),
            // Result Card 1
            array('key' => 'field_about_result_1_icon', 'label' => 'Result 1 - Icon', 'name' => 'about_result_1_icon', 'type' => 'select', 'choices' => array('sprout' => 'Sprout', 'shield' => 'Shield', 'leaf' => 'Leaf', 'heart' => 'Heart', 'microscope' => 'Microscope', 'droplet' => 'Droplet', 'trending-up' => 'Trending Up'), 'default_value' => 'trending-up', 'wrapper' => array('width' => '15')),
            array('key' => 'field_about_result_1_stat', 'label' => 'Result 1 - Stat', 'name' => 'about_result_1_stat', 'type' => 'text', 'placeholder' => '$300k', 'wrapper' => array('width' => '15')),
            array('key' => 'field_about_result_1_title', 'label' => 'Result 1 - Title', 'name' => 'about_result_1_title', 'type' => 'text', 'placeholder' => 'Additional Value', 'wrapper' => array('width' => '30')),
            array('key' => 'field_about_result_1_text', 'label' => 'Result 1 - Text', 'name' => 'about_result_1_text', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '40')),
            array('key' => 'field_about_result_1_location', 'label' => 'Result 1 - Location', 'name' => 'about_result_1_location', 'type' => 'text', 'placeholder' => 'Potato Farming, Tasmania'),
            // Result Card 2
            array('key' => 'field_about_result_2_icon', 'label' => 'Result 2 - Icon', 'name' => 'about_result_2_icon', 'type' => 'select', 'choices' => array('sprout' => 'Sprout', 'shield' => 'Shield', 'leaf' => 'Leaf', 'heart' => 'Heart', 'microscope' => 'Microscope', 'droplet' => 'Droplet', 'trending-up' => 'Trending Up'), 'default_value' => 'sprout', 'wrapper' => array('width' => '15')),
            array('key' => 'field_about_result_2_stat', 'label' => 'Result 2 - Stat', 'name' => 'about_result_2_stat', 'type' => 'text', 'placeholder' => '2x', 'wrapper' => array('width' => '15')),
            array('key' => 'field_about_result_2_title', 'label' => 'Result 2 - Title', 'name' => 'about_result_2_title', 'type' => 'text', 'placeholder' => 'Silage Output Doubled', 'wrapper' => array('width' => '30')),
            array('key' => 'field_about_result_2_text', 'label' => 'Result 2 - Text', 'name' => 'about_result_2_text', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '40')),
            array('key' => 'field_about_result_2_location', 'label' => 'Result 2 - Location', 'name' => 'about_result_2_location', 'type' => 'text'),
            // Result Card 3
            array('key' => 'field_about_result_3_icon', 'label' => 'Result 3 - Icon', 'name' => 'about_result_3_icon', 'type' => 'select', 'choices' => array('sprout' => 'Sprout', 'shield' => 'Shield', 'leaf' => 'Leaf', 'heart' => 'Heart', 'microscope' => 'Microscope', 'droplet' => 'Droplet', 'trending-up' => 'Trending Up'), 'default_value' => 'leaf', 'wrapper' => array('width' => '15')),
            array('key' => 'field_about_result_3_stat', 'label' => 'Result 3 - Stat', 'name' => 'about_result_3_stat', 'type' => 'text', 'placeholder' => 'Since 2015', 'wrapper' => array('width' => '15')),
            array('key' => 'field_about_result_3_title', 'label' => 'Result 3 - Title', 'name' => 'about_result_3_title', 'type' => 'text', 'placeholder' => 'Pastures Never Looked Better', 'wrapper' => array('width' => '30')),
            array('key' => 'field_about_result_3_text', 'label' => 'Result 3 - Text', 'name' => 'about_result_3_text', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '40')),
            array('key' => 'field_about_result_3_location', 'label' => 'Result 3 - Location', 'name' => 'about_result_3_location', 'type' => 'text'),

            // --- Values Section ---
            array('key' => 'field_about_values_tab', 'label' => 'Values', 'type' => 'tab'),
            array('key' => 'field_about_values_title', 'label' => 'Values Title', 'name' => 'about_values_title', 'type' => 'text', 'placeholder' => 'What Drives Us'),
            array('key' => 'field_about_values_subtitle', 'label' => 'Values Subtitle', 'name' => 'about_values_subtitle', 'type' => 'text'),
            // Value Card 1
            array('key' => 'field_about_value_1_icon', 'label' => 'Value 1 - Icon', 'name' => 'about_value_1_icon', 'type' => 'select', 'choices' => array('sprout' => 'Sprout', 'shield' => 'Shield', 'leaf' => 'Leaf', 'heart' => 'Heart', 'microscope' => 'Microscope', 'droplet' => 'Droplet', 'trending-up' => 'Trending Up'), 'default_value' => 'heart', 'wrapper' => array('width' => '25')),
            array('key' => 'field_about_value_1_title', 'label' => 'Value 1 - Title', 'name' => 'about_value_1_title', 'type' => 'text', 'placeholder' => 'Family First', 'wrapper' => array('width' => '25')),
            array('key' => 'field_about_value_1_text', 'label' => 'Value 1 - Text', 'name' => 'about_value_1_text', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50')),
            // Value Card 2
            array('key' => 'field_about_value_2_icon', 'label' => 'Value 2 - Icon', 'name' => 'about_value_2_icon', 'type' => 'select', 'choices' => array('sprout' => 'Sprout', 'shield' => 'Shield', 'leaf' => 'Leaf', 'heart' => 'Heart', 'microscope' => 'Microscope', 'droplet' => 'Droplet', 'trending-up' => 'Trending Up'), 'default_value' => 'microscope', 'wrapper' => array('width' => '25')),
            array('key' => 'field_about_value_2_title', 'label' => 'Value 2 - Title', 'name' => 'about_value_2_title', 'type' => 'text', 'placeholder' => 'Science-Backed', 'wrapper' => array('width' => '25')),
            array('key' => 'field_about_value_2_text', 'label' => 'Value 2 - Text', 'name' => 'about_value_2_text', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50')),
            // Value Card 3
            array('key' => 'field_about_value_3_icon', 'label' => 'Value 3 - Icon', 'name' => 'about_value_3_icon', 'type' => 'select', 'choices' => array('sprout' => 'Sprout', 'shield' => 'Shield', 'leaf' => 'Leaf', 'heart' => 'Heart', 'microscope' => 'Microscope', 'droplet' => 'Droplet', 'trending-up' => 'Trending Up'), 'default_value' => 'sprout', 'wrapper' => array('width' => '25')),
            array('key' => 'field_about_value_3_title', 'label' => 'Value 3 - Title', 'name' => 'about_value_3_title', 'type' => 'text', 'placeholder' => 'Regenerative', 'wrapper' => array('width' => '25')),
            array('key' => 'field_about_value_3_text', 'label' => 'Value 3 - Text', 'name' => 'about_value_3_text', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50')),
            // Value Card 4
            array('key' => 'field_about_value_4_icon', 'label' => 'Value 4 - Icon', 'name' => 'about_value_4_icon', 'type' => 'select', 'choices' => array('sprout' => 'Sprout', 'shield' => 'Shield', 'leaf' => 'Leaf', 'heart' => 'Heart', 'microscope' => 'Microscope', 'droplet' => 'Droplet', 'trending-up' => 'Trending Up'), 'default_value' => 'trending-up', 'wrapper' => array('width' => '25')),
            array('key' => 'field_about_value_4_title', 'label' => 'Value 4 - Title', 'name' => 'about_value_4_title', 'type' => 'text', 'placeholder' => 'Results-Driven', 'wrapper' => array('width' => '25')),
            array('key' => 'field_about_value_4_text', 'label' => 'Value 4 - Text', 'name' => 'about_value_4_text', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50')),

            // --- CTA Section ---
            array('key' => 'field_about_cta_tab', 'label' => 'CTA', 'type' => 'tab'),
            array('key' => 'field_about_cta_title', 'label' => 'CTA Title', 'name' => 'about_cta_title', 'type' => 'text', 'placeholder' => 'Start Your Soil Journey'),
            array('key' => 'field_about_cta_description', 'label' => 'CTA Description', 'name' => 'about_cta_description', 'type' => 'textarea', 'rows' => 2),
            array('key' => 'field_about_cta_button_1_text', 'label' => 'Button 1 Text', 'name' => 'about_cta_button_1_text', 'type' => 'text', 'placeholder' => 'Explore Our Products', 'wrapper' => array('width' => '25')),
            array('key' => 'field_about_cta_button_1_link', 'label' => 'Button 1 Link', 'name' => 'about_cta_button_1_link', 'type' => 'url', 'wrapper' => array('width' => '25')),
            array('key' => 'field_about_cta_button_2_text', 'label' => 'Button 2 Text', 'name' => 'about_cta_button_2_text', 'type' => 'text', 'placeholder' => 'Get In Touch', 'wrapper' => array('width' => '25')),
            array('key' => 'field_about_cta_button_2_link', 'label' => 'Button 2 Link', 'name' => 'about_cta_button_2_link', 'type' => 'url', 'wrapper' => array('width' => '25')),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/template-about.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
    ));

    /**
     * Contact Page Content Field Group
     */
    acf_add_local_field_group(array(
        'key' => 'group_contact_content',
        'title' => 'Contact Page Content',
        'fields' => array(

            // --- Page Header ---
            array('key' => 'field_contact_header_tab', 'label' => 'Page Header', 'type' => 'tab'),
            array('key' => 'field_contact_title', 'label' => 'Page Title', 'name' => 'contact_title', 'type' => 'text', 'placeholder' => 'Contact Us'),
            array('key' => 'field_contact_subtitle', 'label' => 'Page Subtitle', 'name' => 'contact_subtitle', 'type' => 'text'),

            // --- Contact Info ---
            array('key' => 'field_contact_info_tab', 'label' => 'Contact Info', 'type' => 'tab'),
            array('key' => 'field_contact_email', 'label' => 'Email Address', 'name' => 'contact_email', 'type' => 'email', 'placeholder' => 'info@bactivate.example.com', 'instructions' => 'Business email address'),
            array('key' => 'field_contact_phone', 'label' => 'Phone Number', 'name' => 'contact_phone', 'type' => 'text', 'placeholder' => '+1 (555) 012-3456'),
            array('key' => 'field_contact_location', 'label' => 'Location', 'name' => 'contact_location', 'type' => 'text', 'placeholder' => 'Australia'),

            // --- Form Settings ---
            array('key' => 'field_contact_form_tab', 'label' => 'Form Settings', 'type' => 'tab'),
            array('key' => 'field_contact_form_title', 'label' => 'Form Title', 'name' => 'contact_form_title', 'type' => 'text', 'placeholder' => 'Send Us A Message'),
            array('key' => 'field_contact_form_subtitle', 'label' => 'Form Subtitle', 'name' => 'contact_form_subtitle', 'type' => 'text', 'placeholder' => 'Fill out the form below and we\'ll get back to you within 24 hours'),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/template-contact.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
    ));

    /**
     * Products Overview Content Field Group
     */
    acf_add_local_field_group(array(
        'key' => 'group_products_content',
        'title' => 'Products Overview Content',
        'fields' => array(

            // --- Page Header ---
            array('key' => 'field_products_header_tab', 'label' => 'Page Header', 'type' => 'tab'),
            array('key' => 'field_products_title', 'label' => 'Page Title', 'name' => 'products_title', 'type' => 'text', 'placeholder' => 'Our Products'),
            array('key' => 'field_products_subtitle', 'label' => 'Page Subtitle', 'name' => 'products_subtitle', 'type' => 'textarea', 'rows' => 2),

            // --- Featured Section ---
            array('key' => 'field_products_featured_tab', 'label' => 'Featured Section', 'type' => 'tab'),
            array('key' => 'field_products_featured_title', 'label' => 'Featured Title', 'name' => 'products_featured_title', 'type' => 'text', 'placeholder' => 'Featured Products'),
            array('key' => 'field_products_featured_subtitle', 'label' => 'Featured Subtitle', 'name' => 'products_featured_subtitle', 'type' => 'text'),

            // --- CTA Section ---
            array('key' => 'field_products_cta_tab', 'label' => 'CTA', 'type' => 'tab'),
            array('key' => 'field_products_cta_title', 'label' => 'CTA Title', 'name' => 'products_cta_title', 'type' => 'text', 'placeholder' => 'Need Help Choosing?'),
            array('key' => 'field_products_cta_description', 'label' => 'CTA Description', 'name' => 'products_cta_description', 'type' => 'textarea', 'rows' => 2),
            array('key' => 'field_products_cta_button_1_text', 'label' => 'Button 1 Text', 'name' => 'products_cta_button_1_text', 'type' => 'text', 'placeholder' => 'Contact Us', 'wrapper' => array('width' => '25')),
            array('key' => 'field_products_cta_button_1_link', 'label' => 'Button 1 Link', 'name' => 'products_cta_button_1_link', 'type' => 'url', 'wrapper' => array('width' => '25')),
            array('key' => 'field_products_cta_button_2_text', 'label' => 'Button 2 Text', 'name' => 'products_cta_button_2_text', 'type' => 'text', 'placeholder' => 'Find A Distributor', 'wrapper' => array('width' => '25')),
            array('key' => 'field_products_cta_button_2_link', 'label' => 'Button 2 Link', 'name' => 'products_cta_button_2_link', 'type' => 'url', 'wrapper' => array('width' => '25')),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/template-products-overview.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
    ));

    /**
     * Distributor Page Content Field Group
     */
    acf_add_local_field_group(array(
        'key' => 'group_distributor_content',
        'title' => 'Distributor Page Content',
        'fields' => array(

            // --- Page Header ---
            array('key' => 'field_distributor_header_tab', 'label' => 'Page Header', 'type' => 'tab'),
            array('key' => 'field_distributor_title', 'label' => 'Page Title', 'name' => 'distributor_title', 'type' => 'text', 'placeholder' => 'Find A Distributor'),
            array('key' => 'field_distributor_subtitle', 'label' => 'Page Subtitle', 'name' => 'distributor_subtitle', 'type' => 'text'),

            // --- Search UI ---
            array('key' => 'field_distributor_search_tab', 'label' => 'Search UI', 'type' => 'tab'),
            array('key' => 'field_distributor_search_title', 'label' => 'Search Title', 'name' => 'distributor_search_title', 'type' => 'text', 'placeholder' => 'Search for Distributors'),
            array('key' => 'field_distributor_search_subtitle', 'label' => 'Search Subtitle', 'name' => 'distributor_search_subtitle', 'type' => 'text', 'placeholder' => 'Filter by region to find distributors near you'),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/template-distributor.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
    ));

}
