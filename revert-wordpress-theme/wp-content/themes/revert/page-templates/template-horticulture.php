<?php
/**
 * Template Name: Horticulture Solutions
 *
 * Horticulture sub-category landing page — vegetables, berries, fruit trees, hydroponics.
 *
 * @package ReVert
 * @since 1.0.0
 */

get_header();

// --- Sub-category card data ---
$subcategories = array(
    array(
        'icon'        => 'sprout',
        'title'       => 'Vegetables',
        'description' => 'Healthier crops, higher yields and lower input costs for commercial vegetable growers. From leafy greens to root vegetables.',
        'anchor'      => '#vegetables',
    ),
    array(
        'icon'        => 'heart',
        'title'       => 'Berries',
        'description' => 'Improve fruit quality, shelf life and plant health for strawberry, blueberry and berry operations.',
        'anchor'      => '#berries',
    ),
    array(
        'icon'        => 'leaf',
        'title'       => 'Fruit Trees',
        'description' => 'Stronger root systems, better fruit set and reduced chemical dependency for orchards and vineyards.',
        'anchor'      => '#fruit-trees',
    ),
    array(
        'icon'        => 'droplet',
        'title'       => 'Hydroponics',
        'description' => 'Clean, effective biological solutions compatible with hydroponic and controlled environment systems.',
        'anchor'      => '#hydroponics',
    ),
);

// --- Detail section data ---
$detail_sections = array(
    array(
        'id'          => 'vegetables',
        'title'       => 'Vegetables',
        'description' => 'Commercial vegetable growers need reliable results season after season. Our biological programs help reduce fertiliser costs while improving soil health, plant vigour and marketable yield. Whether you grow leafy greens, brassicas or root vegetables, the goal is the same — better crops for less money.',
        'benefits'    => array(
            array('icon' => 'trending-up', 'text' => 'Lower input costs without sacrificing yield or quality'),
            array('icon' => 'sprout',      'text' => 'Healthier soil biology for stronger, more resilient plants'),
            array('icon' => 'droplet',     'text' => 'Compatible with drip, overhead and boom spray application'),
        ),
        'products'    => array(
            array(
                'name'        => 'Bac 5',
                'description' => '5-strain biological blend for soil regeneration and crop performance',
                'link'        => '/products/bac-5',
                'benefits'    => array('Reduce fertiliser costs by up to 50%', 'Improved soil health and structure', 'Available in liquid, powder and granule'),
            ),
            array(
                'name'        => 'Rappid',
                'description' => 'Fast-acting biological stimulant for rapid crop establishment and growth',
                'link'        => '/products/rappid',
                'benefits'    => array('Accelerate early crop establishment', 'Stronger root development from day one', 'Works across all vegetable types'),
            ),
            array(
                'name'        => 'Seaweed',
                'description' => 'Organic seaweed fertiliser for root growth and plant resilience',
                'link'        => '/products/seaweed',
                'benefits'    => array('Improved crop stress tolerance', 'Enhanced root zone activity', 'Compatible with all spray programs'),
            ),
        ),
    ),
    array(
        'id'          => 'berries',
        'title'       => 'Berries',
        'description' => 'Berry operations demand consistent fruit quality and reliable plant health. Our programs support stronger root systems, better fruit set and improved shelf life — all while reducing your reliance on expensive conventional inputs. Proven across strawberry, blueberry and mixed berry operations.',
        'benefits'    => array(
            array('icon' => 'trending-up', 'text' => 'Improved fruit quality and longer shelf life'),
            array('icon' => 'sprout',      'text' => 'Stronger, healthier plants with better disease resistance'),
            array('icon' => 'droplet',     'text' => 'Easy integration with existing fertigation systems'),
        ),
        'products'    => array(
            array(
                'name'        => 'BioBoost',
                'description' => 'Plant carbon stimulant that feeds soil biology and boosts crop performance',
                'link'        => '/products/bioboost',
                'benefits'    => array('Maximise nutrient uptake efficiency', 'Stronger root development', 'Better fruit set and quality'),
            ),
            array(
                'name'        => 'Guard',
                'description' => 'Biological crop protection for healthier plants and reduced chemical use',
                'link'        => '/products/guard',
                'benefits'    => array('Reduce chemical spray frequency', 'Strengthen natural plant defences', 'Safe for beneficial insects'),
            ),
            array(
                'name'        => 'Calci Max',
                'description' => 'Highly available calcium for improved fruit firmness and shelf life',
                'link'        => '/products/calci-max',
                'benefits'    => array('Improved fruit firmness and quality', 'Better shelf life and reduced waste', 'Fast plant uptake'),
            ),
        ),
    ),
    array(
        'id'          => 'fruit-trees',
        'title'       => 'Fruit Trees',
        'description' => 'Orchards and vineyards are long-term investments. Our biological programs build soil health over time, leading to stronger root systems, better fruit set and reduced chemical dependency. Growers report lower input costs and improved fruit quality within the first season.',
        'benefits'    => array(
            array('icon' => 'trending-up', 'text' => 'Reduce chemical inputs while improving fruit quality'),
            array('icon' => 'sprout',      'text' => 'Build long-term soil health for sustained orchard performance'),
            array('icon' => 'droplet',     'text' => 'Apply via existing irrigation or spray equipment'),
        ),
        'products'    => array(
            array(
                'name'        => 'Bac 5',
                'description' => '5-strain biological blend for soil regeneration and crop performance',
                'link'        => '/products/bac-5',
                'benefits'    => array('Reduce fertiliser costs by up to 50%', 'Improved soil health and structure', 'Available in liquid, powder and granule'),
            ),
            array(
                'name'        => 'Seaweed',
                'description' => 'Organic seaweed fertiliser for root growth and plant resilience',
                'link'        => '/products/seaweed',
                'benefits'    => array('Improved crop stress tolerance', 'Enhanced root zone activity', 'Compatible with all spray programs'),
            ),
            array(
                'name'        => 'BioBoost',
                'description' => 'Plant carbon stimulant that feeds soil biology and boosts crop performance',
                'link'        => '/products/bioboost',
                'benefits'    => array('Maximise nutrient uptake efficiency', 'Stronger root development', 'Better fruit set and quality'),
            ),
        ),
    ),
    array(
        'id'          => 'hydroponics',
        'title'       => 'Hydroponics',
        'description' => 'Controlled environment growers need clean, compatible inputs that work with recirculating systems. Our biological products are designed for hydroponic and CEA applications — improving nutrient uptake, root health and overall plant performance without clogging or residue issues.',
        'benefits'    => array(
            array('icon' => 'trending-up', 'text' => 'Improved nutrient uptake and reduced waste in recirculating systems'),
            array('icon' => 'sprout',      'text' => 'Healthier root zones and stronger plant growth'),
            array('icon' => 'droplet',     'text' => 'Clean formulations that won\'t clog drippers or emitters'),
        ),
        'products'    => array(
            array(
                'name'        => 'Bac 5 Liquid',
                'description' => 'Liquid biological blend optimised for fertigation and hydroponic systems',
                'link'        => '/products/bac-5-liquid',
                'benefits'    => array('Purpose-built for liquid application', 'Clean formulation for drip systems', 'Improved root zone biology'),
            ),
            array(
                'name'        => 'Seaweed',
                'description' => 'Organic seaweed fertiliser for root growth and plant resilience',
                'link'        => '/products/seaweed',
                'benefits'    => array('Improved crop stress tolerance', 'Enhanced root zone activity', 'Compatible with hydroponic systems'),
            ),
            array(
                'name'        => 'Rappid K',
                'description' => 'Potassium-rich biological stimulant for fruit quality and plant health',
                'link'        => '/products/rappid-k',
                'benefits'    => array('Boost potassium availability', 'Improve fruit quality and size', 'Clean liquid formulation'),
            ),
        ),
    ),
);

// --- Why ReVert for Horticulture data ---
$why_revert = array(
    array(
        'icon'        => 'trending-up',
        'title'       => 'Cost Effective',
        'description' => 'Reduce input costs while maintaining or improving yields',
    ),
    array(
        'icon'        => 'sprout',
        'title'       => 'Proven Results',
        'description' => 'Trusted by commercial horticultural operations across Australia',
    ),
    array(
        'icon'        => 'droplet',
        'title'       => 'Easy Application',
        'description' => 'Compatible with existing irrigation and spray equipment',
    ),
    array(
        'icon'        => 'shield',
        'title'       => 'Expert Support',
        'description' => 'Our team helps you build the right program for your crops',
    ),
);
?>

<!-- Hero Section -->
<section class="relative bg-primary overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center"
         style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/horticulture-hero.jpg'); ?>')">
        <div class="absolute inset-0" style="background: linear-gradient(to bottom, hsla(155,16%,26%,0.80) 0%, hsla(155,16%,26%,0.60) 40%, hsla(155,16%,26%,0.88) 100%);"></div>
    </div>

    <div class="container relative z-10">
        <div class="text-center text-primary-foreground" style="padding-top: 8rem; padding-bottom: 5rem;">
            <h1 class="font-bold max-w-4xl mx-auto leading-tight" style="font-size: clamp(2.5rem, 6vw, 5rem); margin-bottom: 1.5rem; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">
                <?php echo esc_html('Horticulture Solutions'); ?>
            </h1>
            <p class="max-w-3xl mx-auto" style="font-size: clamp(1.1rem, 2.5vw, 1.5rem); opacity: 0.95; margin-bottom: 2.5rem; text-shadow: 0 1px 10px rgba(0,0,0,0.2);">
                <?php echo esc_html('Targeted biological solutions for fruit, vegetable and specialty crop growers. Better yields, lower input costs.'); ?>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url(home_url('/contact')); ?>"
                   class="inline-flex items-center justify-center rounded-md bg-secondary text-secondary-foreground hover:bg-secondary/80 transition-colors font-medium text-lg"
                   style="padding: 0.85rem 2.75rem;">
                    <?php echo esc_html('Get Started'); ?>
                    <?php echo revert_get_icon('arrow-right', 'ml-2 h-5 w-5'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/distributor')); ?>"
                   class="inline-flex items-center justify-center rounded-md border border-primary-foreground/40 text-primary-foreground hover:bg-primary-foreground hover:text-primary transition-colors font-medium text-lg"
                   style="padding: 0.85rem 2.75rem;">
                    <?php echo esc_html('Find A Distributor'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Sub-category Cards Grid -->
<section class="py-20" style="background-color: hsl(90,12%,95%);">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3rem;">
            <h2 class="text-4xl font-bold" style="margin-bottom: 0.75rem;">Solutions by Crop Type</h2>
            <p class="text-lg text-muted-foreground" style="max-width: 600px; margin: 0 auto;">Find the right program for your operation</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 max-w-4xl mx-auto">
            <?php foreach ($subcategories as $subcat) : ?>
                <a href="<?php echo esc_url($subcat['anchor']); ?>"
                   class="group bg-card rounded-2xl border shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden" style="display: flex; flex-direction: column;">
                    <div class="text-center" style="padding: 2rem 1.5rem; flex-grow: 1; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                        <div class="flex items-center justify-center w-14 h-14 rounded-full bg-accent/10 group-hover:bg-accent/20 transition-colors" style="margin-bottom: 1rem;">
                            <?php echo revert_get_icon($subcat['icon'], 'h-7 w-7 text-accent'); ?>
                        </div>
                        <h3 class="font-bold text-xl text-foreground group-hover:text-accent transition-colors" style="margin-bottom: 0.5rem;">
                            <?php echo esc_html($subcat['title']); ?>
                        </h3>
                        <p class="text-sm text-muted-foreground" style="margin: 0;"><?php echo esc_html($subcat['description']); ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Detail Sections -->
<?php foreach ($detail_sections as $index => $section) :
    $bg_class = $index % 2 === 0 ? 'bg-background' : 'bg-muted';
?>
<section id="<?php echo esc_attr($section['id']); ?>" class="py-16 md:py-20 <?php echo esc_attr($bg_class); ?>">
    <div class="container">
        <div class="max-w-5xl mx-auto">
            <!-- Section Header -->
            <div style="margin-bottom: 2.5rem;">
                <h2 class="text-3xl md:text-4xl font-bold" style="margin-bottom: 0.75rem;"><?php echo esc_html($section['title']); ?></h2>
                <p class="text-lg text-muted-foreground" style="max-width: 700px;">
                    <?php echo esc_html($section['description']); ?>
                </p>
            </div>

            <!-- Key Benefits -->
            <div style="margin-bottom: 3rem;">
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <?php foreach ($section['benefits'] as $benefit) : ?>
                        <li class="text-base" style="padding: 0.5rem 0; display: flex; align-items: flex-start; gap: 0.75rem;">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center" style="margin-top: 0.1rem;">
                                <?php echo revert_get_icon($benefit['icon'], 'h-4 w-4 text-accent'); ?>
                            </div>
                            <span><?php echo esc_html($benefit['text']); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Recommended Products -->
            <h3 class="text-xl font-bold" style="margin-bottom: 1.5rem;">Recommended Products</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <?php foreach ($section['products'] as $product) : ?>
                    <div class="bg-card rounded-lg border p-6">
                        <h4 class="font-bold text-xl" style="margin-bottom: 0.75rem;"><?php echo esc_html($product['name']); ?></h4>
                        <p class="text-sm text-muted-foreground" style="margin-bottom: 1rem;"><?php echo esc_html($product['description']); ?></p>
                        <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0;">
                            <?php
                            $benefit_icons = array('trending-up', 'sprout', 'droplet');
                            foreach ($product['benefits'] as $bi => $prod_benefit) : ?>
                                <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                                    <?php echo revert_get_icon($benefit_icons[$bi], 'h-4 w-4 text-accent'); ?>
                                    <span><?php echo esc_html($prod_benefit); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="<?php echo esc_url(home_url($product['link'])); ?>" class="text-sm font-semibold text-accent" style="text-decoration: none;">
                            <?php echo esc_html('View Product'); ?> &rarr;
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endforeach; ?>

<!-- Why ReVert for Horticulture -->
<section class="py-20" style="background-color: hsl(90,12%,95%);">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3rem;">
            <h2 class="text-4xl font-bold" style="margin-bottom: 0.75rem;">Why ReVert for Horticulture?</h2>
            <p class="text-lg text-muted-foreground" style="max-width: 600px; margin: 0 auto;">Practical results for commercial growers</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php foreach ($why_revert as $item) : ?>
                <div class="bg-card rounded-lg border p-6 text-center">
                    <div style="display: flex; justify-content: center; margin-bottom: 0;">
                        <?php echo revert_get_icon($item['icon'], 'h-8 w-8 text-accent'); ?>
                    </div>
                    <h3 class="font-bold text-lg" style="margin: 1rem 0 0.5rem;"><?php echo esc_html($item['title']); ?></h3>
                    <p class="text-sm text-muted-foreground"><?php echo esc_html($item['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-primary text-primary-foreground">
    <div class="container text-center">
        <h2 class="text-4xl font-bold mb-6"><?php echo esc_html('Ready to Improve Your Horticultural Operation?'); ?></h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
            <?php echo esc_html('Talk to our team about a tailored program for your crops'); ?>
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?php echo esc_url(home_url('/contact')); ?>"
               class="inline-flex items-center justify-center h-11 px-8 rounded-md bg-secondary text-secondary-foreground hover:bg-secondary/80 transition-colors">
                <?php echo esc_html('Get Started'); ?>
            </a>
            <a href="<?php echo esc_url(home_url('/distributor')); ?>"
               class="inline-flex items-center justify-center h-11 px-8 rounded-md border border-primary-foreground text-primary-foreground hover:bg-primary-foreground hover:text-primary transition-colors">
                <?php echo esc_html('Find A Distributor'); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
