<?php
/**
 * Template Name: Home Page
 *
 * @package ReVert
 * @since 1.0.0
 */

get_header();

// --- Hero Section Fields ---
$hero_title = get_field('hero_title') ?: 'Innovating Agriculture for a Sustainable Future';
$hero_subtitle = get_field('hero_subtitle') ?: 'Leading the way in sustainable agricultural solutions';
$hero_image = get_field('hero_image') ?: get_template_directory_uri() . '/assets/images/hero-agriculture.jpg';
$hero_btn_1_text = get_field('hero_button_1_text') ?: 'Explore Products';
$hero_btn_1_link = get_field('hero_button_1_link') ?: home_url('/products');
$hero_btn_2_text = get_field('hero_button_2_text') ?: 'Learn More';
$hero_btn_2_link = get_field('hero_button_2_link') ?: home_url('/about');

// --- Solutions Section Fields ---
$solutions_title = get_field('solutions_title') ?: 'Our Solutions';
$solutions_subtitle = get_field('solutions_subtitle') ?: 'Comprehensive agricultural solutions designed for every aspect of modern farming';

$solutions = array();
$solution_defaults = array(
    array('title' => 'Crop Solutions', 'description' => 'Advanced crop protection and nutrition', 'image' => 'crop-solutions.jpg', 'link' => home_url('/crop-solutions'), 'icon' => 'sprout'),
    array('title' => 'Horticulture', 'description' => 'Specialized horticultural solutions', 'image' => 'horticulture.jpg', 'link' => home_url('/products/horticulture'), 'icon' => 'leaf'),
    array('title' => 'Livestock', 'description' => 'Comprehensive livestock care', 'image' => 'livestock.jpg', 'link' => home_url('/products/livestock'), 'icon' => 'heart'),
    array('title' => 'Research', 'description' => 'Innovation and case studies', 'image' => 'research.jpg', 'link' => home_url('/research/innovation'), 'icon' => 'microscope'),
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

// --- Sustainability Section Fields ---
$sust_title = get_field('sustainability_title') ?: 'Committed to Sustainable Agriculture';
$sust_desc = get_field('sustainability_description') ?: 'Our mission is to empower farmers with innovative, sustainable solutions that enhance productivity while protecting the environment.';

$sust_points = array();
$sust_point_defaults = array(
    array('icon' => 'shield', 'title' => 'Eco-Friendly Products', 'description' => 'All our products are designed with environmental sustainability in mind'),
    array('icon' => 'droplet', 'title' => 'Water Conservation', 'description' => 'Helping farms reduce water usage while maximizing crop yields'),
    array('icon' => 'sprout', 'title' => 'Soil Health', 'description' => 'Promoting long-term soil vitality and regenerative practices'),
);
for ($i = 1; $i <= 3; $i++) {
    $d = $sust_point_defaults[$i - 1];
    $sust_points[] = array(
        'icon'        => get_field("sustainability_point_{$i}_icon") ?: $d['icon'],
        'title'       => get_field("sustainability_point_{$i}_title") ?: $d['title'],
        'description' => get_field("sustainability_point_{$i}_description") ?: $d['description'],
    );
}

$stats = array();
$stat_defaults = array(
    array('label' => 'Carbon Footprint Reduction', 'value' => 85),
    array('label' => 'Customer Satisfaction', 'value' => 95),
    array('label' => 'Yield Improvement', 'value' => 72),
);
for ($i = 1; $i <= 3; $i++) {
    $d = $stat_defaults[$i - 1];
    $stats[] = array(
        'label' => get_field("stat_{$i}_label") ?: $d['label'],
        'value' => get_field("stat_{$i}_value") ?: $d['value'],
    );
}

// --- Testimonials Section Fields ---
$test_title = get_field('testimonials_title') ?: 'What Farmers Are Saying';
$test_subtitle = get_field('testimonials_subtitle') ?: 'Real results from real farmers across Australia';

$testimonials = array();
$test_defaults = array(
    array('quote' => 'Since switching to ReVert biologicals, we\'ve seen a significant improvement in soil health and our pasture quality has never been better. The results speak for themselves.', 'name' => 'Mark T.', 'role' => 'Dairy Farmer', 'location' => 'Gippsland, VIC', 'stat' => '35%', 'stat_label' => 'Yield Increase', 'icon' => 'trending-up'),
    array('quote' => 'The team at ReVert really understand soil biology. Their products have helped us reduce our chemical inputs while maintaining strong crop performance across our vegetable operation.', 'name' => 'Sarah K.', 'role' => 'Vegetable Grower', 'location' => 'Werribee, VIC', 'stat' => '40%', 'stat_label' => 'Reduced Inputs', 'icon' => 'leaf'),
    array('quote' => 'We\'ve been able to improve our soil structure dramatically. Water retention is up, erosion is down, and our livestock are thriving on healthier pastures.', 'name' => 'David L.', 'role' => 'Cattle Farmer', 'location' => 'Hamilton, VIC', 'stat' => '50%', 'stat_label' => 'Better Water Retention', 'icon' => 'droplet'),
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
$cta_title = get_field('cta_title') ?: 'Ready to Transform Your Agriculture?';
$cta_desc = get_field('cta_description') ?: 'Connect with our experts to find the perfect solutions for your farming needs';
$cta_btn_1_text = get_field('cta_button_1_text') ?: 'Get In Touch';
$cta_btn_1_link = get_field('cta_button_1_link') ?: home_url('/contact');
$cta_btn_2_text = get_field('cta_button_2_text') ?: 'Find A Distributor';
$cta_btn_2_link = get_field('cta_button_2_link') ?: home_url('/distributor');
?>

<!-- Hero + Solutions — single section, Neutrog-inspired -->
<section class="relative bg-primary overflow-hidden">
    <!-- Background image -->
    <div class="absolute inset-0 bg-cover bg-center"
         style="background-image: url('<?php echo esc_url($hero_image); ?>')">
        <div class="absolute inset-0 bg-gradient-to-b from-primary/70 via-primary/50 to-primary/80"></div>
    </div>

    <div class="container relative z-10">
        <!-- Hero text — large and prominent -->
        <div class="text-center text-primary-foreground pt-32 pb-24 md:pt-44 md:pb-32 lg:pt-52 lg:pb-36">
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 max-w-4xl mx-auto leading-tight">
                <?php echo esc_html($hero_title); ?>
            </h1>
            <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto opacity-90">
                <?php echo esc_html($hero_subtitle); ?>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url($hero_btn_1_link); ?>"
                   class="inline-flex items-center justify-center h-12 px-10 rounded-md bg-secondary text-secondary-foreground hover:bg-secondary/80 transition-colors font-medium text-lg">
                    <?php echo esc_html($hero_btn_1_text); ?>
                    <?php echo revert_get_icon('arrow-right', 'ml-2 h-5 w-5'); ?>
                </a>
                <a href="<?php echo esc_url($hero_btn_2_link); ?>"
                   class="inline-flex items-center justify-center h-12 px-10 rounded-md border border-primary-foreground/40 text-primary-foreground hover:bg-primary-foreground hover:text-primary transition-colors font-medium text-lg">
                    <?php echo esc_html($hero_btn_2_text); ?>
                </a>
            </div>
        </div>

        <!-- Solution cards with images — Neutrog glass style -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-5 pb-10">
            <?php foreach ($solutions as $product) : ?>
                <a href="<?php echo esc_url($product['link']); ?>"
                   class="group rounded-xl border border-white/25 bg-white/10 backdrop-blur-sm overflow-hidden text-primary-foreground hover:bg-white/20 transition-all duration-300">
                    <!-- Image -->
                    <div class="aspect-[4/3] overflow-hidden">
                        <img src="<?php echo esc_url($product['image']); ?>"
                             alt="<?php echo esc_attr($product['title']); ?>"
                             class="w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-300">
                    </div>
                    <!-- Label -->
                    <div class="p-4 text-center">
                        <h3 class="font-bold text-base md:text-lg">
                            <?php echo esc_html($product['title']); ?>
                        </h3>
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
                <h2 class="text-4xl font-bold mb-6"><?php echo esc_html($sust_title); ?></h2>
                <p class="text-lg text-muted-foreground mb-6">
                    <?php echo esc_html($sust_desc); ?>
                </p>
                <ul class="space-y-4">
                    <?php foreach ($sust_points as $point) : ?>
                        <li class="flex items-start gap-3">
                            <?php echo revert_get_icon($point['icon'], 'h-6 w-6 text-accent mt-1 flex-shrink-0'); ?>
                            <div>
                                <h4 class="font-semibold mb-1"><?php echo esc_html($point['title']); ?></h4>
                                <p class="text-sm text-muted-foreground"><?php echo esc_html($point['description']); ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="space-y-6">
                <?php foreach ($stats as $stat) : ?>
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="font-semibold"><?php echo esc_html($stat['label']); ?></span>
                            <span class="text-accent font-bold"><?php echo esc_html($stat['value']); ?>%</span>
                        </div>
                        <div class="w-full bg-background rounded-full h-3">
                            <div class="bg-accent h-3 rounded-full" style="width: <?php echo intval($stat['value']); ?>%"></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
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
