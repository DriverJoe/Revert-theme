<?php
/**
 * Template Name: Home Page
 *
 * @package ReVert
 * @since 1.0.0
 */

get_header();

// --- Hero Section Fields ---
$hero_title = get_field('hero_title') ?: 'Better Crops. Lower Costs.';
$hero_subtitle = get_field('hero_subtitle') ?: 'Biological solutions that save money and grow better crops for commercial growers across Australia';
$hero_image = get_field('hero_image') ?: get_template_directory_uri() . '/assets/images/hero-agriculture.jpg';
$hero_btn_1_text = get_field('hero_button_1_text') ?: 'Explore Products';
$hero_btn_1_link = get_field('hero_button_1_link') ?: home_url('/products');
$hero_btn_2_text = get_field('hero_button_2_text') ?: 'Talk to Us';
$hero_btn_2_link = get_field('hero_button_2_link') ?: home_url('/contact');

// --- Solutions Section Fields ---
$solutions_title = get_field('solutions_title') ?: 'Our Solutions';
$solutions_subtitle = get_field('solutions_subtitle') ?: 'Programs by sector for commercial growers';

$solutions = array();
$solution_defaults = array(
    array('title' => 'Crop Solutions', 'description' => 'Advanced crop protection and nutrition', 'image' => 'crop-solutions.jpg', 'link' => home_url('/crop-solutions'), 'icon' => 'sprout'),
    array('title' => 'Horticulture', 'description' => 'Specialized horticultural solutions', 'image' => 'horticulture.jpg', 'link' => home_url('/products/horticulture'), 'icon' => 'leaf'),
    array('title' => 'Commercial Turf', 'description' => 'Golf courses, bowling greens & parks', 'image' => 'commercial-turf.jpg', 'link' => home_url('/products/commercial'), 'icon' => 'heart'),
    array('title' => 'Pasture & Livestock', 'description' => 'Pasture management and livestock care', 'image' => 'livestock.jpg', 'link' => home_url('/products/livestock'), 'icon' => 'microscope'),
);

for ($i = 1; $i <= 4; $i++) {
    $d = $solution_defaults[$i - 1];
    $img = get_field("solution_{$i}_image");
    $solutions[] = array(
        'title'       => get_field("solution_{$i}_title") ?: $d['title'],
        'description' => get_field("solution_{$i}_description") ?: $d['description'],
        'link'        => get_field("solution_{$i}_link") ?: $d['link'],
        'icon'        => get_field("solution_{$i}_icon") ?: $d['icon'],
        'image'       => $img ?: get_template_directory_uri() . '/assets/images/' . $d['image'],
    );
}

// --- Testimonials Section Fields ---
$test_title = get_field('testimonials_title') ?: 'Real Results from Real Growers';
$test_subtitle = get_field('testimonials_subtitle') ?: 'Commercial growers across Australia are seeing the difference';

$testimonials = array();
$test_defaults = array(
    array('quote' => 'Since switching to ReVert, we\'ve cut our fertilizer bill by over $40,000 a year. The soil is healthier and our yields are up. It just makes financial sense.', 'name' => 'Mark T.', 'role' => 'Broadacre Cropper', 'location' => 'Western VIC', 'stat' => '$40k+', 'stat_label' => 'Annual Savings', 'icon' => 'trending-up'),
    array('quote' => 'We were spending a fortune on conventional inputs. ReVert cut our costs and our turf quality actually improved. The greens have never looked better.', 'name' => 'Sarah K.', 'role' => 'Golf Course Superintendent', 'location' => 'Mornington Peninsula, VIC', 'stat' => '50%', 'stat_label' => 'Cost Reduction', 'icon' => 'trending-up'),
    array('quote' => 'Simple to apply with our existing boom spray. No complicated programs. Just better soil, better crops and money back in our pocket.', 'name' => 'David L.', 'role' => 'Mixed Farmer', 'location' => 'Gippsland, VIC', 'stat' => '35%', 'stat_label' => 'Yield Improvement', 'icon' => 'sprout'),
);
for ($i = 1; $i <= 3; $i++) {
    $d = $test_defaults[$i - 1];
    $testimonials[] = array(
        'quote'      => get_field("testimonial_{$i}_quote") ?: $d['quote'],
        'name'       => get_field("testimonial_{$i}_name") ?: $d['name'],
        'role'       => get_field("testimonial_{$i}_role") ?: $d['role'],
        'location'   => get_field("testimonial_{$i}_location") ?: $d['location'],
        'stat'       => get_field("testimonial_{$i}_stat") ?: $d['stat'],
        'stat_label' => get_field("testimonial_{$i}_stat_label") ?: $d['stat_label'],
        'icon'       => get_field("testimonial_{$i}_icon") ?: $d['icon'],
    );
}

// --- CTA Section Fields ---
$cta_title = get_field('cta_title') ?: 'Ready to Cut Costs and Grow Better Crops?';
$cta_desc = get_field('cta_description') ?: 'Talk to our team about the right program for your operation';
$cta_btn_1_text = get_field('cta_button_1_text') ?: 'Get In Touch';
$cta_btn_1_link = get_field('cta_button_1_link') ?: home_url('/contact');
$cta_btn_2_text = get_field('cta_button_2_text') ?: 'Find A Distributor';
$cta_btn_2_link = get_field('cta_button_2_link') ?: home_url('/distributor');
?>

<!-- Hero + Solutions — single combined section -->
<section class="relative bg-primary overflow-hidden">
    <!-- Background image -->
    <div class="absolute inset-0 bg-cover bg-center"
         style="background-image: url('<?php echo esc_url($hero_image); ?>')">
        <div class="absolute inset-0" style="background: linear-gradient(to bottom, hsla(155,16%,26%,0.80) 0%, hsla(155,16%,26%,0.60) 40%, hsla(155,16%,26%,0.88) 100%);"></div>
    </div>

    <div class="container relative z-10">
        <!-- Hero title at the top -->
        <div class="text-center text-primary-foreground" style="padding-top: 8rem; padding-bottom: 3rem;">
            <h1 class="font-bold max-w-4xl mx-auto leading-tight" style="font-size: clamp(2.5rem, 6vw, 5rem); margin-bottom: 1.5rem; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">
                <?php echo esc_html($hero_title); ?>
            </h1>
            <p class="max-w-3xl mx-auto" style="font-size: clamp(1.1rem, 2.5vw, 1.5rem); opacity: 0.95; margin-bottom: 2.5rem; text-shadow: 0 1px 10px rgba(0,0,0,0.2);">
                <?php echo esc_html($hero_subtitle); ?>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url($hero_btn_1_link); ?>"
                   class="inline-flex items-center justify-center rounded-md bg-secondary text-secondary-foreground hover:bg-secondary/80 transition-colors font-medium text-lg"
                   style="padding: 0.85rem 2.75rem;">
                    <?php echo esc_html($hero_btn_1_text); ?>
                    <?php echo revert_get_icon('arrow-right', 'ml-2 h-5 w-5'); ?>
                </a>
                <a href="<?php echo esc_url($hero_btn_2_link); ?>"
                   class="inline-flex items-center justify-center rounded-md border border-primary-foreground/40 text-primary-foreground hover:bg-primary-foreground hover:text-primary transition-colors font-medium text-lg"
                   style="padding: 0.85rem 2.75rem;">
                    <?php echo esc_html($hero_btn_2_text); ?>
                </a>
            </div>
            <div style="margin-top: 2rem;">
                <a href="tel:+61XXXXXXXXX" class="inline-flex items-center gap-2 text-primary-foreground font-medium" style="font-size: 1.1rem; opacity: 0.9; text-decoration: none; text-shadow: 0 1px 6px rgba(0,0,0,0.15);">
                    <?php echo revert_get_icon('phone', 'h-5 w-5'); ?> Call us: 1300 XXX XXX
                </a>
            </div>
        </div>

        <!-- Our Solutions title -->
        <div class="text-center" style="padding-top: 2rem; padding-bottom: 1.5rem;">
            <h2 class="font-bold text-primary-foreground" style="font-size: clamp(1.5rem, 3vw, 2.25rem); margin-bottom: 0.5rem; text-shadow: 0 1px 10px rgba(0,0,0,0.2);"><?php echo esc_html($solutions_title); ?></h2>
            <p style="font-size: 1rem; opacity: 0.85; max-width: 640px; margin: 0 auto; color: hsl(90,12%,95%); text-shadow: 0 1px 6px rgba(0,0,0,0.15);"><?php echo esc_html($solutions_subtitle); ?></p>
        </div>

        <!-- Solution cards at the bottom -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8" style="padding-bottom: 3.5rem;">
            <?php foreach ($solutions as $product) : ?>
                <a href="<?php echo esc_url($product['link']); ?>"
                   class="group bg-card rounded-2xl border shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden" style="display: flex; flex-direction: column;">
                    <div class="overflow-hidden" style="height: 180px; flex-shrink: 0;">
                        <img src="<?php echo esc_url($product['image']); ?>"
                             alt="<?php echo esc_attr($product['title']); ?>"
                             class="w-full object-cover group-hover:scale-105 transition-transform duration-300"
                             style="width: 100%; height: 180px; object-fit: cover;">
                    </div>
                    <div class="text-center" style="padding: 1rem 1.25rem; flex-grow: 1; display: flex; flex-direction: column; justify-content: center;">
                        <h3 class="font-bold text-lg text-foreground group-hover:text-accent transition-colors" style="margin-bottom: 0.25rem;">
                            <?php echo esc_html($product['title']); ?>
                        </h3>
                        <p class="text-sm text-muted-foreground" style="margin: 0;"><?php echo esc_html($product['description']); ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why ReVert -->
<section class="py-20" style="background-color: hsl(90,12%,95%);">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3rem;">
            <h2 class="text-4xl font-bold" style="margin-bottom: 0.75rem;">Why ReVert?</h2>
            <p class="text-lg text-muted-foreground" style="max-width: 600px; margin: 0 auto;">Practical results for commercial growers</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-card rounded-lg border p-6 text-center">
                <div style="display: flex; justify-content: center; margin-bottom: 0;">
                    <?php echo revert_get_icon('trending-up', 'h-8 w-8 text-accent'); ?>
                </div>
                <h3 class="font-bold text-lg" style="margin: 1rem 0 0.5rem;">Cost Effective</h3>
                <p class="text-sm text-muted-foreground">Cut fertilizer costs by up to 50% with biological alternatives that deliver real savings</p>
            </div>
            <div class="bg-card rounded-lg border p-6 text-center">
                <div style="display: flex; justify-content: center; margin-bottom: 0;">
                    <?php echo revert_get_icon('sprout', 'h-8 w-8 text-accent'); ?>
                </div>
                <h3 class="font-bold text-lg" style="margin: 1rem 0 0.5rem;">Proven Results</h3>
                <p class="text-sm text-muted-foreground">Better yields, healthier soil and stronger crops backed by real-world commercial trials</p>
            </div>
            <div class="bg-card rounded-lg border p-6 text-center">
                <div style="display: flex; justify-content: center; margin-bottom: 0;">
                    <?php echo revert_get_icon('shield', 'h-8 w-8 text-accent'); ?>
                </div>
                <h3 class="font-bold text-lg" style="margin: 1rem 0 0.5rem;">Australian Made</h3>
                <p class="text-sm text-muted-foreground">Manufactured right here in Australia for Australian conditions and Australian growers</p>
            </div>
            <div class="bg-card rounded-lg border p-6 text-center">
                <div style="display: flex; justify-content: center; margin-bottom: 0;">
                    <?php echo revert_get_icon('droplet', 'h-8 w-8 text-accent'); ?>
                </div>
                <h3 class="font-bold text-lg" style="margin: 1rem 0 0.5rem;">Easy to Use</h3>
                <p class="text-sm text-muted-foreground">Apply with standard boom spray equipment — no special gear or complicated programs needed</p>
            </div>
        </div>
    </div>
</section>

<!-- Product Spotlight -->
<section class="py-20" style="background-color: white;">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3rem;">
            <h2 class="text-4xl font-bold" style="margin-bottom: 0.75rem;">Featured Products</h2>
            <p class="text-lg text-muted-foreground" style="max-width: 600px; margin: 0 auto;">Trusted by commercial growers Australia-wide</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-card rounded-lg border p-6">
                <h3 class="font-bold text-xl" style="margin-bottom: 0.75rem;">Bac 5</h3>
                <p class="text-sm text-muted-foreground" style="margin-bottom: 1rem;">5-strain biological blend for soil regeneration and crop performance</p>
                <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0;">
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('trending-up', 'h-4 w-4 text-accent'); ?>
                        <span>Reduce fertilizer costs by up to 50%</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('sprout', 'h-4 w-4 text-accent'); ?>
                        <span>Improved soil health and structure</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('droplet', 'h-4 w-4 text-accent'); ?>
                        <span>Available in liquid, powder and granule</span>
                    </li>
                </ul>
                <a href="<?php echo esc_url(home_url('/products/bac-5')); ?>" class="text-sm font-semibold text-accent" style="text-decoration: none;">View Product →</a>
            </div>
            <div class="bg-card rounded-lg border p-6">
                <h3 class="font-bold text-xl" style="margin-bottom: 0.75rem;">BioBoost</h3>
                <p class="text-sm text-muted-foreground" style="margin-bottom: 1rem;">Plant carbon stimulant that feeds soil biology and boosts crop performance</p>
                <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0;">
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('trending-up', 'h-4 w-4 text-accent'); ?>
                        <span>Maximise nutrient uptake efficiency</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('sprout', 'h-4 w-4 text-accent'); ?>
                        <span>Stronger root development</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('droplet', 'h-4 w-4 text-accent'); ?>
                        <span>Easy application via boom spray</span>
                    </li>
                </ul>
                <a href="<?php echo esc_url(home_url('/products/bioboost')); ?>" class="text-sm font-semibold text-accent" style="text-decoration: none;">View Product →</a>
            </div>
            <div class="bg-card rounded-lg border p-6">
                <h3 class="font-bold text-xl" style="margin-bottom: 0.75rem;">Seaweed</h3>
                <p class="text-sm text-muted-foreground" style="margin-bottom: 1rem;">Organic seaweed fertilizer for root growth and plant resilience</p>
                <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0;">
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('trending-up', 'h-4 w-4 text-accent'); ?>
                        <span>Improved crop stress tolerance</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('sprout', 'h-4 w-4 text-accent'); ?>
                        <span>Enhanced root zone activity</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('droplet', 'h-4 w-4 text-accent'); ?>
                        <span>Compatible with all spray programs</span>
                    </li>
                </ul>
                <a href="<?php echo esc_url(home_url('/products/seaweed')); ?>" class="text-sm font-semibold text-accent" style="text-decoration: none;">View Product →</a>
            </div>
        </div>
        <div class="text-center" style="margin-top: 2.5rem;">
            <a href="<?php echo esc_url(home_url('/products')); ?>" class="inline-flex items-center justify-center rounded-md bg-primary text-primary-foreground font-medium" style="padding: 0.75rem 2rem; text-decoration: none;">
                View All Products
            </a>
        </div>
    </div>
</section>

<!-- Find a Reseller -->
<section class="py-16 bg-primary text-primary-foreground">
    <div class="container text-center">
        <h2 class="text-3xl font-bold" style="margin-bottom: 0.75rem;">Find Your Local Reseller</h2>
        <p style="font-size: 1.1rem; opacity: 0.9; max-width: 500px; margin: 0 auto 2rem;">Get ReVert products from a reseller near you</p>
        <a href="<?php echo esc_url(home_url('/distributor')); ?>" class="inline-flex items-center justify-center rounded-md bg-secondary text-secondary-foreground font-medium" style="padding: 0.85rem 2.5rem; text-decoration: none; font-size: 1.05rem;">
            Find a Reseller
        </a>
    </div>
</section>

<!-- Testimonials / Social Proof -->
<section class="py-20 bg-background">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4"><?php echo esc_html($test_title); ?></h2>
            <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                <?php echo esc_html($test_subtitle); ?>
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 mb-12">
            <?php foreach ($testimonials as $testimonial) : ?>
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
                <span class="text-sm font-medium">Proven on Commercial Farms</span>
            </div>
            <div class="flex items-center gap-2 text-muted-foreground">
                <?php echo revert_get_icon('heart', 'h-5 w-5 text-accent'); ?>
                <span class="text-sm font-medium">Trusted by Commercial Growers</span>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-primary text-primary-foreground">
    <div class="container text-center">
        <h2 class="text-4xl font-bold mb-6"><?php echo esc_html($cta_title); ?></h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
            <?php echo esc_html($cta_desc); ?>
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?php echo esc_url($cta_btn_1_link); ?>"
               class="inline-flex items-center justify-center h-11 px-8 rounded-md bg-secondary text-secondary-foreground hover:bg-secondary/80 transition-colors">
                <?php echo esc_html($cta_btn_1_text); ?>
            </a>
            <a href="<?php echo esc_url($cta_btn_2_link); ?>"
               class="inline-flex items-center justify-center h-11 px-8 rounded-md border border-primary-foreground text-primary-foreground hover:bg-primary-foreground hover:text-primary transition-colors">
                <?php echo esc_html($cta_btn_2_text); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
