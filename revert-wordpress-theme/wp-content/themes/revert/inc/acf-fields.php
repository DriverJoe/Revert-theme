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

}
