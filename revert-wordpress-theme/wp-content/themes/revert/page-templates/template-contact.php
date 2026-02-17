<?php
/**
 * Template Name: Contact Page
 *
 * @package ReVert
 * @since 1.0.0
 */

get_header();
?>

<section class="py-16 bg-muted">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
            <p class="text-xl text-muted-foreground">
                Get in touch with our team. We're here to help with any questions.
            </p>
        </div>

        <!-- Contact Info Cards -->
        <div class="grid md:grid-cols-3 gap-6 mb-12">
            <div class="bg-card rounded-lg border p-6 text-center">
                <?php echo revert_get_icon('mail', 'h-12 w-12 text-accent mx-auto mb-4'); ?>
                <h3 class="text-xl font-bold mb-2">Email</h3>
                <a href="mailto:info@revertagri.com.au" class="text-muted-foreground hover:text-primary transition-colors">
                    info@revertagri.com.au
                </a>
            </div>

            <div class="bg-card rounded-lg border p-6 text-center">
                <?php echo revert_get_icon('phone', 'h-12 w-12 text-accent mx-auto mb-4'); ?>
                <h3 class="text-xl font-bold mb-2">Phone</h3>
                <a href="tel:+61234567890" class="text-muted-foreground hover:text-primary transition-colors">
                    +61 2 3456 7890
                </a>
            </div>

            <div class="bg-card rounded-lg border p-6 text-center">
                <?php echo revert_get_icon('map-pin', 'h-12 w-12 text-accent mx-auto mb-4'); ?>
                <h3 class="text-xl font-bold mb-2">Location</h3>
                <p class="text-muted-foreground">
                    Australia
                </p>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="max-w-2xl mx-auto bg-card rounded-lg border p-8" x-data="contactForm()">
            <h3 class="text-2xl font-bold mb-2">Send Us A Message</h3>
            <p class="text-muted-foreground mb-6">
                Fill out the form below and we'll get back to you within 24 hours
            </p>

            <form @submit.prevent="submitForm" class="space-y-6">
                <?php wp_nonce_field('revert_contact_form', 'contact_nonce'); ?>

                <div class="grid md:grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label for="name" class="text-sm font-medium">Full Name *</label>
                        <input type="text"
                               id="name"
                               name="name"
                               x-model="formData.name"
                               required
                               class="w-full h-10 rounded-md border border-input bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-ring">
                    </div>
                    <div class="space-y-2">
                        <label for="email" class="text-sm font-medium">Email *</label>
                        <input type="email"
                               id="email"
                               name="email"
                               x-model="formData.email"
                               required
                               class="w-full h-10 rounded-md border border-input bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-ring">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label for="phone" class="text-sm font-medium">Phone</label>
                        <input type="tel"
                               id="phone"
                               name="phone"
                               x-model="formData.phone"
                               class="w-full h-10 rounded-md border border-input bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-ring">
                    </div>
                    <div class="space-y-2">
                        <label for="subject" class="text-sm font-medium">Subject *</label>
                        <select id="subject"
                                name="subject"
                                x-model="formData.subject"
                                required
                                class="w-full h-10 rounded-md border border-input bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-ring">
                            <option value="">Select a subject</option>
                            <option value="product-inquiry">Product Inquiry</option>
                            <option value="technical-support">Technical Support</option>
                            <option value="distributor">Become a Distributor</option>
                            <option value="partnership">Partnership Opportunity</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <div class="space-y-2">
                    <label for="message" class="text-sm font-medium">Message *</label>
                    <textarea id="message"
                              name="message"
                              x-model="formData.message"
                              required
                              rows="6"
                              class="w-full rounded-md border border-input bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-ring"></textarea>
                </div>

                <button type="submit"
                        :disabled="loading"
                        class="w-full h-11 rounded-md bg-primary text-primary-foreground hover:bg-primary/90 transition-colors disabled:opacity-50">
                    <span x-show="!loading">Send Message</span>
                    <span x-show="loading">Sending...</span>
                </button>

                <div x-show="responseMessage" class="p-4 rounded-md" :class="success ? 'bg-accent/10 text-accent' : 'bg-destructive/10 text-destructive'">
                    <p x-text="responseMessage"></p>
                </div>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>
