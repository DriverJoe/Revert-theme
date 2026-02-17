<?php
/**
 * AJAX Handlers
 *
 * @package ReVert
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Search Distributors AJAX Handler
 */
function revert_search_distributors() {
    // Verify nonce
    check_ajax_referer('revert_ajax_nonce', 'nonce');

    // Get search parameters
    $search = isset($_POST['search']) ? sanitize_text_field($_POST['search']) : '';
    $region = isset($_POST['region']) ? sanitize_text_field($_POST['region']) : '';

    // Build query arguments
    $args = array(
        'post_type'      => 'revert_reseller',
        'posts_per_page' => -1,
        'orderby'        => 'title',
        'order'          => 'ASC',
    );

    // Add region filter if specified
    if (!empty($region)) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'reseller_region',
                'field'    => 'slug',
                'terms'    => $region,
            ),
        );
    }

    // Add search term if specified
    if (!empty($search)) {
        $args['s'] = $search;
    }

    // Execute query
    $query = new WP_Query($args);

    // Start output buffering
    ob_start();

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();

            // Get ACF fields
            $address = get_field('reseller_address');
            $phone = get_field('reseller_phone');
            $email = get_field('reseller_email');
            $website = get_field('reseller_website');

            // Get region terms
            $region_terms = wp_get_post_terms(get_the_ID(), 'reseller_region');
            $region_name = !empty($region_terms) && !is_wp_error($region_terms) ? $region_terms[0]->name : '';
            ?>

            <div class="bg-card rounded-lg border p-6">
                <h3 class="text-xl font-bold mb-1"><?php the_title(); ?></h3>
                <?php if ($region_name): ?>
                    <p class="text-sm text-muted-foreground mb-4"><?php echo esc_html($region_name); ?> Region</p>
                <?php endif; ?>

                <div class="space-y-3">
                    <?php if ($address): ?>
                        <div class="flex items-start gap-3 text-sm">
                            <?php echo revert_get_icon('map-pin', 'h-5 w-5 text-accent mt-0.5 flex-shrink-0'); ?>
                            <span><?php echo nl2br(esc_html($address)); ?></span>
                        </div>
                    <?php endif; ?>

                    <?php if ($phone): ?>
                        <div class="flex items-center gap-3 text-sm">
                            <?php echo revert_get_icon('phone', 'h-5 w-5 text-accent flex-shrink-0'); ?>
                            <a href="tel:<?php echo esc_attr($phone); ?>" class="hover:text-primary">
                                <?php echo esc_html($phone); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <?php if ($email): ?>
                        <div class="flex items-center gap-3 text-sm">
                            <?php echo revert_get_icon('mail', 'h-5 w-5 text-accent flex-shrink-0'); ?>
                            <a href="mailto:<?php echo esc_attr($email); ?>" class="hover:text-primary">
                                <?php echo esc_html($email); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>

                <?php if ($email): ?>
                    <a href="mailto:<?php echo esc_attr($email); ?>"
                       class="mt-4 w-full h-10 inline-flex items-center justify-center rounded-md border border-input bg-background hover:bg-accent hover:text-accent-foreground transition-colors">
                        Contact Distributor
                    </a>
                <?php endif; ?>
            </div>

            <?php
        }
    } else {
        echo '<p class="col-span-2 text-center text-muted-foreground py-8">No distributors found. Try adjusting your search criteria.</p>';
    }

    wp_reset_postdata();

    // Get buffered output
    $html = ob_get_clean();

    // Send JSON response
    wp_send_json_success(array('html' => $html));
}
add_action('wp_ajax_search_distributors', 'revert_search_distributors');
add_action('wp_ajax_nopriv_search_distributors', 'revert_search_distributors');

/**
 * Contact Form Submission Handler
 */
function revert_handle_contact_form() {
    // Verify nonce
    check_ajax_referer('revert_contact_form', 'contact_nonce');

    // Sanitize and validate inputs
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);

    // Validate required fields
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        wp_send_json_error(array('message' => 'Please fill in all required fields.'));
    }

    // Validate email
    if (!is_email($email)) {
        wp_send_json_error(array('message' => 'Please enter a valid email address.'));
    }

    // Prepare email
    $to = get_option('admin_email');
    $email_subject = sprintf('[Contact Form] %s', $subject);
    $email_body = sprintf(
        "Name: %s\nEmail: %s\nPhone: %s\nSubject: %s\n\nMessage:\n%s",
        $name,
        $email,
        $phone,
        $subject,
        $message
    );
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        sprintf('Reply-To: %s <%s>', $name, $email),
    );

    // Send email
    $sent = wp_mail($to, $email_subject, $email_body, $headers);

    if ($sent) {
        wp_send_json_success(array('message' => 'Thank you for your message! We will get back to you within 24 hours.'));
    } else {
        wp_send_json_error(array('message' => 'Sorry, there was an error sending your message. Please try again later.'));
    }
}
add_action('wp_ajax_revert_contact', 'revert_handle_contact_form');
add_action('wp_ajax_nopriv_revert_contact', 'revert_handle_contact_form');

/**
 * Newsletter Subscription Handler
 */
function revert_newsletter_subscribe() {
    // Verify nonce
    check_ajax_referer('revert_ajax_nonce', 'nonce');

    // Sanitize and validate email
    $email = sanitize_email($_POST['email']);

    if (empty($email) || !is_email($email)) {
        wp_send_json_error(array('message' => 'Please enter a valid email address.'));
    }

    // Here you can integrate with your newsletter service (Brevo, Mailchimp, etc.)
    // For now, we'll just send a success message

    wp_send_json_success(array('message' => 'Thank you for subscribing to our newsletter!'));
}
add_action('wp_ajax_newsletter_subscribe', 'revert_newsletter_subscribe');
add_action('wp_ajax_nopriv_newsletter_subscribe', 'revert_newsletter_subscribe');
