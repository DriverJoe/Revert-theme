<?php
/**
 * Template Name: Home Page
 *
 * @package ReVert
 * @since 1.0.0
 */

get_header();

// --- Hero Section Fields ---
$hero_title = get_field('hero_title') ?: 'Sustainable Solutions for Australian Agriculture';
$hero_subtitle = get_field('hero_subtitle') ?: 'Biological products that improve soil health, boost yields and reduce chemical inputs';
$hero_image = get_field('hero_image') ?: get_template_directory_uri() . '/assets/images/hero-agriculture.jpg';
$hero_btn_1_text = get_field('hero_button_1_text') ?: 'View Products';
$hero_btn_1_link = get_field('hero_button_1_link') ?: home_url('/products');
$hero_btn_2_text = get_field('hero_button_2_text') ?: 'Find A Distributor';
$hero_btn_2_link = get_field('hero_button_2_link') ?: home_url('/distributor');

// --- Solutions Section Fields ---
$solutions_title = get_field('solutions_title') ?: 'Our Solutions';
$solutions_subtitle = get_field('solutions_subtitle') ?: '';

$solutions = array();
$solution_defaults = array(
    array('title' => 'Crop Solutions', 'description' => 'Nutrition & soil health for broadacre', 'image' => 'crop-solutions.jpg', 'link' => home_url('/crop-solutions'), 'icon' => 'sprout'),
    array('title' => 'Horticulture', 'description' => 'For fruit, veg & vine growers', 'image' => 'horticulture.jpg', 'link' => home_url('/horticulture'), 'icon' => 'leaf'),
    array('title' => 'Livestock', 'description' => 'Pasture & animal health', 'image' => 'livestock.jpg', 'link' => home_url('/livestock'), 'icon' => 'heart'),
    array('title' => 'Pest Management', 'description' => 'Integrated pest & disease control', 'image' => 'pest-management.jpg', 'link' => home_url('/pest-management'), 'icon' => 'shield'),
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

// --- Why ReVert Section ---
$sust_title = get_field('sustainability_title') ?: 'Why ReVert?';
$sust_desc = get_field('sustainability_description') ?: 'Science-backed biological products trusted by Australian farmers';

$sust_points = array();
$sust_point_defaults = array(
    array('icon' => 'microscope', 'title' => 'Research-Driven', 'description' => 'Backed by science and field-tested across Australia'),
    array('icon' => 'sprout', 'title' => 'Soil Health Focus', 'description' => 'Build long-term soil biology, not short-term fixes'),
    array('icon' => 'shield', 'title' => 'Reduce Chemical Inputs', 'description' => 'Lower costs while improving results'),
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
    array('quote' => 'Since switching to ReVert biologicals, our soil health and pasture quality has never been better.', 'name' => 'Mark T.', 'role' => 'Dairy Farmer', 'location' => 'Gippsland, VIC', 'stat' => '35%', 'stat_label' => 'Yield Increase', 'icon' => 'trending-up'),
    array('quote' => 'Their products helped us reduce chemical inputs while maintaining strong crop performance.', 'name' => 'Sarah K.', 'role' => 'Vegetable Grower', 'location' => 'Werribee, VIC', 'stat' => '40%', 'stat_label' => 'Reduced Inputs', 'icon' => 'leaf'),
    array('quote' => 'Water retention is up, erosion is down, and our livestock are thriving on healthier pastures.', 'name' => 'David L.', 'role' => 'Cattle Farmer', 'location' => 'Hamilton, VIC', 'stat' => '50%', 'stat_label' => 'Better Water Retention', 'icon' => 'droplet'),
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
$cta_title = get_field('cta_title') ?: 'Ready to Get Started?';
$cta_desc = get_field('cta_description') ?: 'Talk to our team or find a distributor near you';
$cta_btn_1_text = get_field('cta_button_1_text') ?: 'Contact Us';
$cta_btn_1_link = get_field('cta_button_1_link') ?: home_url('/contact');
$cta_btn_2_text = get_field('cta_button_2_text') ?: 'Find A Distributor';
$cta_btn_2_link = get_field('cta_button_2_link') ?: home_url('/distributor');
?>

<!-- Hero + Solutions — one cohesive section -->
<section class="relative overflow-hidden">
    <!-- Hero background -->
    <div class="relative h-[420px] md:h-[460px] flex items-center">
        <div class="absolute inset-0 bg-cover bg-center"
             style="background-image: url('<?php echo esc_url($hero_image); ?>')">
            <div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-primary/60"></div>
        </div>
        <div class="container relative z-10 text-primary-foreground">
            <div class="max-w-2xl">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 leading-tight">
                    <?php echo esc_html($hero_title); ?>
                </h1>
                <p class="text-lg mb-6 opacity-90 max-w-xl">
                    <?php echo esc_html($hero_subtitle); ?>
                </p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="<?php echo esc_url($hero_btn_1_link); ?>"
                       class="inline-flex items-center justify-center h-11 px-8 rounded-md bg-secondary text-secondary-foreground hover:bg-secondary/80 transition-colors font-medium">
                        <?php echo esc_html($hero_btn_1_text); ?>
                        <?php echo revert_get_icon('arrow-right', 'ml-2 h-4 w-4'); ?>
                    </a>
                    <a href="<?php echo esc_url($hero_btn_2_link); ?>"
                       class="inline-flex items-center justify-center h-11 px-8 rounded-md border border-primary-foreground/50 text-primary-foreground hover:bg-primary-foreground hover:text-primary transition-colors font-medium">
                        <?php echo revert_get_icon('map-pin', 'mr-2 h-4 w-4'); ?>
                        <?php echo esc_html($hero_btn_2_text); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Solution cards — overlapping the hero bottom -->
    <div class="container relative z-10 -mt-16 pb-16">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
            <?php foreach ($solutions as $product) : ?>
                <a href="<?php echo esc_url($product['link']); ?>"
                   class="group bg-card rounded-lg border shadow-md hover:shadow-lg transition-all duration-200 p-5">
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center flex-shrink-0 group-hover:bg-accent/20 transition-colors">
                            <?php echo revert_get_icon($product['icon'], 'h-5 w-5 text-accent'); ?>
                        </div>
                        <h3 class="font-bold group-hover:text-accent transition-colors">
                            <?php echo esc_html($product['title']); ?>
                        </h3>
                    </div>
                    <p class="text-sm text-muted-foreground"><?php echo esc_html($product['description']); ?></p>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why ReVert -->
<section class="py-16 bg-muted">
    <div class="container">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-3"><?php echo esc_html($sust_title); ?></h2>
                <p class="text-muted-foreground mb-6"><?php echo esc_html($sust_desc); ?></p>
                <ul class="space-y-4">
                    <?php foreach ($sust_points as $point) : ?>
                        <li class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <?php echo revert_get_icon($point['icon'], 'h-4 w-4 text-accent'); ?>
                            </div>
                            <div>
                                <h4 class="font-semibold"><?php echo esc_html($point['title']); ?></h4>
                                <p class="text-sm text-muted-foreground"><?php echo esc_html($point['description']); ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="space-y-5">
                <?php foreach ($stats as $stat) : ?>
                    <div>
                        <div class="flex justify-between mb-1.5">
                            <span class="text-sm font-medium"><?php echo esc_html($stat['label']); ?></span>
                            <span class="text-sm text-accent font-bold"><?php echo esc_html($stat['value']); ?>%</span>
                        </div>
                        <div class="w-full bg-background rounded-full h-2.5">
                            <div class="bg-accent h-2.5 rounded-full" style="width: <?php echo intval($stat['value']); ?>%"></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-16 bg-background">
    <div class="container">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold mb-2"><?php echo esc_html($test_title); ?></h2>
            <?php if ($test_subtitle) : ?>
                <p class="text-muted-foreground"><?php echo esc_html($test_subtitle); ?></p>
            <?php endif; ?>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <?php foreach ($testimonials as $testimonial) : ?>
                <div class="bg-card rounded-lg border p-5">
                    <div class="flex items-center gap-3 mb-3 pb-3 border-b">
                        <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center flex-shrink-0">
                            <?php echo revert_get_icon($testimonial['icon'], 'h-5 w-5 text-accent'); ?>
                        </div>
                        <div>
                            <span class="text-xl font-bold text-accent"><?php echo esc_html($testimonial['stat']); ?></span>
                            <p class="text-xs text-muted-foreground"><?php echo esc_html($testimonial['stat_label']); ?></p>
                        </div>
                    </div>
                    <blockquote class="text-sm text-muted-foreground mb-4 leading-relaxed">
                        &ldquo;<?php echo esc_html($testimonial['quote']); ?>&rdquo;
                    </blockquote>
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-primary-foreground font-bold text-xs flex-shrink-0">
                            <?php echo esc_html(substr($testimonial['name'], 0, 1)); ?>
                        </div>
                        <div>
                            <p class="font-medium text-sm"><?php echo esc_html($testimonial['name']); ?></p>
                            <p class="text-xs text-muted-foreground"><?php echo esc_html($testimonial['role']); ?>, <?php echo esc_html($testimonial['location']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-12 bg-primary text-primary-foreground">
    <div class="container text-center">
        <h2 class="text-3xl font-bold mb-3"><?php echo esc_html($cta_title); ?></h2>
        <p class="text-lg mb-6 opacity-90"><?php echo esc_html($cta_desc); ?></p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
            <a href="<?php echo esc_url($cta_btn_1_link); ?>"
               class="inline-flex items-center justify-center h-11 px-8 rounded-md bg-secondary text-secondary-foreground hover:bg-secondary/80">
                <?php echo esc_html($cta_btn_1_text); ?>
            </a>
            <a href="<?php echo esc_url($cta_btn_2_link); ?>"
               class="inline-flex items-center justify-center h-11 px-8 rounded-md border border-primary-foreground text-primary-foreground hover:bg-primary-foreground hover:text-primary">
                <?php echo revert_get_icon('map-pin', 'mr-2 h-4 w-4'); ?>
                <?php echo esc_html($cta_btn_2_text); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
