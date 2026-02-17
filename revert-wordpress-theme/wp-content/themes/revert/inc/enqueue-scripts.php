<?php
/**
 * Enqueue scripts and styles
 *
 * @package ReVert
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue theme assets
 */
function revert_enqueue_assets() {
    // Tailwind CSS (compiled)
    wp_enqueue_style(
        'revert-tailwind',
        get_template_directory_uri() . '/assets/css/tailwind.min.css',
        array(),
        '1.0.0'
    );

    // Alpine.js (from CDN)
    wp_enqueue_script(
        'alpine',
        'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js',
        array(),
        '3.0',
        array('strategy' => 'defer')
    );

    // Navigation JS
    wp_enqueue_script(
        'revert-navigation',
        get_template_directory_uri() . '/assets/js/navigation.js',
        array('alpine'),
        '1.0.0',
        true
    );

    // Components JS
    wp_enqueue_script(
        'revert-components',
        get_template_directory_uri() . '/assets/js/components.js',
        array('alpine'),
        '1.0.0',
        true
    );

    // Localize AJAX for components
    wp_localize_script('revert-components', 'revertAjax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('revert_ajax_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'revert_enqueue_assets');
