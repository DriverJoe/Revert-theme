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

}
