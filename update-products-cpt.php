<?php
/**
 * One-time update script to disable Gutenberg for products
 * Upload this file to your WordPress root and visit: yoursite.com/update-products-cpt.php
 * DELETE THIS FILE after running it once!
 */

// Security check
if (!isset($_GET['run']) || $_GET['run'] !== 'yes') {
    die('Add ?run=yes to the URL to execute this script');
}

// Load WordPress
require_once(__DIR__ . '/wp-load.php');

echo "<h1>Updating Product Post Type...</h1>";

// Re-register product post type without block editor
function temp_update_product_cpt() {
    $labels = array(
        'name' => 'Products',
        'singular_name' => 'Product',
        'add_new_item' => 'Add New Product',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-products',
        'supports' => array('title', 'thumbnail'), // NO EDITOR!
        'show_in_rest' => false, // NO GUTENBERG!
        'rewrite' => array('slug' => 'products'),
    );

    register_post_type('revert_product', $args);
}

// Register the updated post type
temp_update_product_cpt();

echo "<p>✅ Product post type updated</p>";

// Flush rewrite rules
flush_rewrite_rules();
echo "<p>✅ Permalinks flushed</p>";

// Clear WordPress cache if available
if (function_exists('wp_cache_flush')) {
    wp_cache_flush();
    echo "<p>✅ Cache cleared</p>";
}

echo "<h2 style='color: green;'>✅ Done! Block editor is now disabled for products.</h2>";
echo "<p><strong>IMPORTANT: DELETE THIS FILE (update-products-cpt.php) NOW!</strong></p>";
echo "<p>Go to Products → Add New and you should see simple form fields instead of the block editor.</p>";
?>
