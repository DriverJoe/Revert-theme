<?php
/**
 * Template Name: Home Page
 *
 * @package ReVert
 * @since 1.0.0
 */

get_header();
?>

<!-- Hero Section -->
<section class="relative h-[600px] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center"
         style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-agriculture.jpg')">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-primary/60"></div>
    </div>
    <div class="container relative z-10 text-center text-primary-foreground">
        <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 animate-fade-in">
            Innovating Agriculture for a Sustainable Future
        </h1>
        <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto opacity-95">
            Leading the way in sustainable agricultural solutions
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?php echo esc_url(home_url('/products')); ?>"
               class="inline-flex items-center justify-center h-11 px-8 rounded-md bg-secondary text-secondary-foreground hover:bg-secondary/80 transition-colors">
                Explore Products
                <?php echo revert_get_icon('arrow-right', 'ml-2 h-5 w-5'); ?>
            </a>
            <a href="<?php echo esc_url(home_url('/about')); ?>"
               class="inline-flex items-center justify-center h-11 px-8 rounded-md border border-primary-foreground text-primary-foreground hover:bg-primary-foreground hover:text-primary transition-colors">
                Learn More
            </a>
        </div>
    </div>
</section>

<!-- Products Overview -->
<section class="py-20 bg-background">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">Our Solutions</h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                Comprehensive agricultural solutions designed for every aspect of modern farming
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            $products = array(
                array(
                    'title' => 'Crop Solutions',
                    'description' => 'Advanced crop protection and nutrition',
                    'image' => 'crop-solutions.jpg',
                    'link' => home_url('/products/crop-solutions'),
                    'icon' => 'sprout',
                ),
                array(
                    'title' => 'Horticulture',
                    'description' => 'Specialized horticultural solutions',
                    'image' => 'horticulture.jpg',
                    'link' => home_url('/products/horticulture'),
                    'icon' => 'leaf',
                ),
                array(
                    'title' => 'Livestock',
                    'description' => 'Comprehensive livestock care',
                    'image' => 'livestock.jpg',
                    'link' => home_url('/products/livestock'),
                    'icon' => 'heart',
                ),
                array(
                    'title' => 'Research',
                    'description' => 'Innovation and case studies',
                    'image' => 'research.jpg',
                    'link' => home_url('/research/innovation'),
                    'icon' => 'microscope',
                ),
            );

            foreach ($products as $product) :
            ?>
                <a href="<?php echo esc_url($product['link']); ?>"
                   class="group bg-card rounded-lg border shadow-sm hover:shadow-lg transition-shadow">
                    <div class="aspect-video overflow-hidden rounded-t-lg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo esc_attr($product['image']); ?>"
                             alt="<?php echo esc_attr($product['title']); ?>"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6">
                        <h3 class="flex items-center gap-2 text-xl font-bold mb-2">
                            <?php echo revert_get_icon($product['icon'], 'h-5 w-5 text-accent'); ?>
                            <?php echo esc_html($product['title']); ?>
                        </h3>
                        <p class="text-muted-foreground"><?php echo esc_html($product['description']); ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Sustainability Section -->
<section class="py-20 bg-muted">
    <div class="container">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold mb-6">Committed to Sustainable Agriculture</h2>
                <p class="text-lg text-muted-foreground mb-6">
                    Our mission is to empower farmers with innovative, sustainable solutions that enhance productivity while protecting the environment.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <?php echo revert_get_icon('shield', 'h-6 w-6 text-accent mt-1 flex-shrink-0'); ?>
                        <div>
                            <h4 class="font-semibold mb-1">Eco-Friendly Products</h4>
                            <p class="text-sm text-muted-foreground">All our products are designed with environmental sustainability in mind</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <?php echo revert_get_icon('droplet', 'h-6 w-6 text-accent mt-1 flex-shrink-0'); ?>
                        <div>
                            <h4 class="font-semibold mb-1">Water Conservation</h4>
                            <p class="text-sm text-muted-foreground">Helping farms reduce water usage while maximizing crop yields</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <?php echo revert_get_icon('sprout', 'h-6 w-6 text-accent mt-1 flex-shrink-0'); ?>
                        <div>
                            <h4 class="font-semibold mb-1">Soil Health</h4>
                            <p class="text-sm text-muted-foreground">Promoting long-term soil vitality and regenerative practices</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="space-y-6">
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold">Carbon Footprint Reduction</span>
                        <span class="text-accent font-bold">85%</span>
                    </div>
                    <div class="w-full bg-background rounded-full h-3">
                        <div class="bg-accent h-3 rounded-full" style="width: 85%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold">Customer Satisfaction</span>
                        <span class="text-accent font-bold">95%</span>
                    </div>
                    <div class="w-full bg-background rounded-full h-3">
                        <div class="bg-accent h-3 rounded-full" style="width: 95%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold">Yield Improvement</span>
                        <span class="text-accent font-bold">72%</span>
                    </div>
                    <div class="w-full bg-background rounded-full h-3">
                        <div class="bg-accent h-3 rounded-full" style="width: 72%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials / Social Proof -->
<section class="py-20 bg-background">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">What Farmers Are Saying</h2>
            <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                Real results from real farmers across Australia
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 mb-12">
            <?php
            $testimonials = array(
                array(
                    'quote' => 'Since switching to ReVert biologicals, we\'ve seen a significant improvement in soil health and our pasture quality has never been better. The results speak for themselves.',
                    'name' => 'Mark T.',
                    'role' => 'Dairy Farmer',
                    'location' => 'Gippsland, VIC',
                    'stat' => '35%',
                    'stat_label' => 'Yield Increase',
                    'icon' => 'trending-up',
                ),
                array(
                    'quote' => 'The team at ReVert really understand soil biology. Their products have helped us reduce our chemical inputs while maintaining strong crop performance across our vegetable operation.',
                    'name' => 'Sarah K.',
                    'role' => 'Vegetable Grower',
                    'location' => 'Werribee, VIC',
                    'stat' => '40%',
                    'stat_label' => 'Reduced Inputs',
                    'icon' => 'leaf',
                ),
                array(
                    'quote' => 'We\'ve been able to improve our soil structure dramatically. Water retention is up, erosion is down, and our livestock are thriving on healthier pastures.',
                    'name' => 'David L.',
                    'role' => 'Cattle Farmer',
                    'location' => 'Hamilton, VIC',
                    'stat' => '50%',
                    'stat_label' => 'Better Water Retention',
                    'icon' => 'droplet',
                ),
            );

            foreach ($testimonials as $testimonial) :
            ?>
                <div class="bg-card rounded-lg border p-6 flex flex-col h-full">
                    <!-- Stat Highlight -->
                    <div class="flex items-center gap-3 mb-4 pb-4 border-b">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-accent/10">
                            <?php echo revert_get_icon($testimonial['icon'], 'h-6 w-6 text-accent'); ?>
                        </div>
                        <div>
                            <span class="text-2xl font-bold text-accent"><?php echo esc_html($testimonial['stat']); ?></span>
                            <p class="text-xs text-muted-foreground"><?php echo esc_html($testimonial['stat_label']); ?></p>
                        </div>
                    </div>

                    <!-- Quote -->
                    <blockquote class="text-sm text-muted-foreground mb-6 flex-grow leading-relaxed">
                        &ldquo;<?php echo esc_html($testimonial['quote']); ?>&rdquo;
                    </blockquote>

                    <!-- Attribution -->
                    <div class="flex items-center gap-3 mt-auto pt-4 border-t">
                        <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-primary-foreground font-bold text-sm">
                            <?php echo esc_html(substr($testimonial['name'], 0, 1)); ?>
                        </div>
                        <div>
                            <p class="font-semibold text-sm"><?php echo esc_html($testimonial['name']); ?></p>
                            <p class="text-xs text-muted-foreground"><?php echo esc_html($testimonial['role']); ?> &mdash; <?php echo esc_html($testimonial['location']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Trust Badges -->
        <div class="flex flex-wrap justify-center gap-8 items-center pt-8 border-t">
            <div class="flex items-center gap-2 text-muted-foreground">
                <?php echo revert_get_icon('shield', 'h-5 w-5 text-accent'); ?>
                <span class="text-sm font-medium">Certified Organic</span>
            </div>
            <div class="flex items-center gap-2 text-muted-foreground">
                <?php echo revert_get_icon('sprout', 'h-5 w-5 text-accent'); ?>
                <span class="text-sm font-medium">Australian Made</span>
            </div>
            <div class="flex items-center gap-2 text-muted-foreground">
                <?php echo revert_get_icon('microscope', 'h-5 w-5 text-accent'); ?>
                <span class="text-sm font-medium">Scientifically Proven</span>
            </div>
            <div class="flex items-center gap-2 text-muted-foreground">
                <?php echo revert_get_icon('heart', 'h-5 w-5 text-accent'); ?>
                <span class="text-sm font-medium">Trusted by 500+ Farmers</span>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-primary text-primary-foreground">
    <div class="container text-center">
        <h2 class="text-4xl font-bold mb-6">Ready to Transform Your Agriculture?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
            Connect with our experts to find the perfect solutions for your farming needs
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?php echo esc_url(home_url('/contact')); ?>"
               class="inline-flex items-center justify-center h-11 px-8 rounded-md bg-secondary text-secondary-foreground hover:bg-secondary/80 transition-colors">
                Get In Touch
            </a>
            <a href="<?php echo esc_url(home_url('/distributor')); ?>"
               class="inline-flex items-center justify-center h-11 px-8 rounded-md border border-primary-foreground text-primary-foreground hover:bg-primary-foreground hover:text-primary transition-colors">
                Find A Distributor
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
