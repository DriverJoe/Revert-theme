<?php
/**
 * Custom Taxonomies
 *
 * @package ReVert
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Custom Taxonomies
 */
function revert_register_taxonomies() {
    // Product Category
    $product_category_labels = array(
        'name'              => _x('Product Categories', 'taxonomy general name', 'revert'),
        'singular_name'     => _x('Product Category', 'taxonomy singular name', 'revert'),
        'search_items'      => __('Search Product Categories', 'revert'),
        'all_items'         => __('All Product Categories', 'revert'),
        'parent_item'       => __('Parent Product Category', 'revert'),
        'parent_item_colon' => __('Parent Product Category:', 'revert'),
        'edit_item'         => __('Edit Product Category', 'revert'),
        'update_item'       => __('Update Product Category', 'revert'),
        'add_new_item'      => __('Add New Product Category', 'revert'),
        'new_item_name'     => __('New Product Category Name', 'revert'),
        'menu_name'         => __('Product Categories', 'revert'),
    );

    register_taxonomy('product_category', array('revert_product'), array(
        'hierarchical'      => true,
        'labels'            => $product_category_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'product-category'),
        'show_in_rest'      => true,
    ));

    // Application Area
    $application_area_labels = array(
        'name'              => _x('Application Areas', 'taxonomy general name', 'revert'),
        'singular_name'     => _x('Application Area', 'taxonomy singular name', 'revert'),
        'search_items'      => __('Search Application Areas', 'revert'),
        'all_items'         => __('All Application Areas', 'revert'),
        'edit_item'         => __('Edit Application Area', 'revert'),
        'update_item'       => __('Update Application Area', 'revert'),
        'add_new_item'      => __('Add New Application Area', 'revert'),
        'new_item_name'     => __('New Application Area Name', 'revert'),
        'menu_name'         => __('Application Areas', 'revert'),
    );

    register_taxonomy('application_area', array('revert_product'), array(
        'hierarchical'      => false,
        'labels'            => $application_area_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'application'),
        'show_in_rest'      => true,
    ));

    // Reseller Region
    $reseller_region_labels = array(
        'name'              => _x('Reseller Regions', 'taxonomy general name', 'revert'),
        'singular_name'     => _x('Reseller Region', 'taxonomy singular name', 'revert'),
        'search_items'      => __('Search Reseller Regions', 'revert'),
        'all_items'         => __('All Reseller Regions', 'revert'),
        'parent_item'       => __('Parent Reseller Region', 'revert'),
        'parent_item_colon' => __('Parent Reseller Region:', 'revert'),
        'edit_item'         => __('Edit Reseller Region', 'revert'),
        'update_item'       => __('Update Reseller Region', 'revert'),
        'add_new_item'      => __('Add New Reseller Region', 'revert'),
        'new_item_name'     => __('New Reseller Region Name', 'revert'),
        'menu_name'         => __('Reseller Regions', 'revert'),
    );

    register_taxonomy('reseller_region', array('revert_reseller'), array(
        'hierarchical'      => true,
        'labels'            => $reseller_region_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
    ));

    // Technical Sheet Category
    $tech_sheet_category_labels = array(
        'name'              => _x('Document Categories', 'taxonomy general name', 'revert'),
        'singular_name'     => _x('Document Category', 'taxonomy singular name', 'revert'),
        'search_items'      => __('Search Document Categories', 'revert'),
        'all_items'         => __('All Document Categories', 'revert'),
        'parent_item'       => __('Parent Document Category', 'revert'),
        'parent_item_colon' => __('Parent Document Category:', 'revert'),
        'edit_item'         => __('Edit Document Category', 'revert'),
        'update_item'       => __('Update Document Category', 'revert'),
        'add_new_item'      => __('Add New Document Category', 'revert'),
        'new_item_name'     => __('New Document Category Name', 'revert'),
        'menu_name'         => __('Document Categories', 'revert'),
    );

    register_taxonomy('tech_sheet_category', array('revert_tech_sheet'), array(
        'hierarchical'      => true,
        'labels'            => $tech_sheet_category_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'document-category'),
        'show_in_rest'      => true,
    ));
}
add_action('init', 'revert_register_taxonomies');
