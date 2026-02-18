<?php
/**
 * Custom Post Types
 *
 * @package ReVert
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Products Custom Post Type
 */
function revert_register_products_cpt() {
    $labels = array(
        'name'                  => _x('Products', 'Post type general name', 'revert'),
        'singular_name'         => _x('Product', 'Post type singular name', 'revert'),
        'menu_name'             => _x('Products', 'Admin Menu text', 'revert'),
        'name_admin_bar'        => _x('Product', 'Add New on Toolbar', 'revert'),
        'add_new'               => __('Add New', 'revert'),
        'add_new_item'          => __('Add New Product', 'revert'),
        'new_item'              => __('New Product', 'revert'),
        'edit_item'             => __('Edit Product', 'revert'),
        'view_item'             => __('View Product', 'revert'),
        'all_items'             => __('All Products', 'revert'),
        'search_items'          => __('Search Products', 'revert'),
        'not_found'             => __('No products found.', 'revert'),
        'not_found_in_trash'    => __('No products found in Trash.', 'revert'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'products'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-products',
        'supports'           => array('title', 'thumbnail'),
        'show_in_rest'       => false, // Disable Gutenberg block editor
    );

    register_post_type('revert_product', $args);
}
add_action('init', 'revert_register_products_cpt');

/**
 * Register Resellers Custom Post Type
 */
function revert_register_resellers_cpt() {
    $labels = array(
        'name'                  => _x('Resellers', 'Post type general name', 'revert'),
        'singular_name'         => _x('Reseller', 'Post type singular name', 'revert'),
        'menu_name'             => _x('Resellers', 'Admin Menu text', 'revert'),
        'add_new'               => __('Add New', 'revert'),
        'add_new_item'          => __('Add New Reseller', 'revert'),
        'new_item'              => __('New Reseller', 'revert'),
        'edit_item'             => __('Edit Reseller', 'revert'),
        'view_item'             => __('View Reseller', 'revert'),
        'all_items'             => __('All Resellers', 'revert'),
        'search_items'          => __('Search Resellers', 'revert'),
        'not_found'             => __('No resellers found.', 'revert'),
        'not_found_in_trash'    => __('No resellers found in Trash.', 'revert'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 21,
        'menu_icon'          => 'dashicons-location',
        'supports'           => array('title'),
        'show_in_rest'       => true,
    );

    register_post_type('revert_reseller', $args);
}
add_action('init', 'revert_register_resellers_cpt');

/**
 * Register Technical Sheets Custom Post Type
 */
function revert_register_technical_sheets_cpt() {
    $labels = array(
        'name'                  => _x('Technical Sheets', 'Post type general name', 'revert'),
        'singular_name'         => _x('Technical Sheet', 'Post type singular name', 'revert'),
        'menu_name'             => _x('Technical Sheets', 'Admin Menu text', 'revert'),
        'add_new'               => __('Add New', 'revert'),
        'add_new_item'          => __('Add New Technical Sheet', 'revert'),
        'new_item'              => __('New Technical Sheet', 'revert'),
        'edit_item'             => __('Edit Technical Sheet', 'revert'),
        'view_item'             => __('View Technical Sheet', 'revert'),
        'all_items'             => __('All Technical Sheets', 'revert'),
        'search_items'          => __('Search Technical Sheets', 'revert'),
        'not_found'             => __('No technical sheets found.', 'revert'),
        'not_found_in_trash'    => __('No technical sheets found in Trash.', 'revert'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'technical-sheets'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 22,
        'menu_icon'          => 'dashicons-media-document',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'       => true,
    );

    register_post_type('revert_tech_sheet', $args);
}
add_action('init', 'revert_register_technical_sheets_cpt');
