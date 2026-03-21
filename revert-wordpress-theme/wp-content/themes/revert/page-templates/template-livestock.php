<?php
/**
 * Template Name: Livestock Solutions
 *
 * Livestock sub-category landing page — pasture management, feed supplements, animal wellbeing.
 * Backend page for later release (save as draft, not published).
 *
 * @package ReVert
 * @since 1.0.0
 */

get_header();

// --- Sub-category card data ---
$subcategories = array(
    array(
        'icon'        => 'sprout',
        'title'       => 'Pasture Management',
        'description' => 'Build healthier, more productive pastures that carry more stock with lower input costs. Better soil means better feed.',
        'anchor'      => '#pasture',
    ),
    array(
        'icon'        => 'heart',
        'title'       => 'Feed Supplements',
        'description' => 'Biological feed additives that improve gut health, nutrient absorption and overall animal performance.',
        'anchor'      => '#feed-supplements',
    ),
    array(
        'icon'        => 'shield',
        'title'       => 'Animal Wellbeing',
        'description' => 'Support immune function and reduce reliance on chemical treatments with proven biological programs.',
        'anchor'      => '#animal-wellbeing',
    ),
);

// --- Detail section data ---
$detail_sections = array(
    array(
        'id'          => 'pasture',
        'title'       => 'Pasture Management',
        'description' => 'Healthy pastures start with healthy soil. Our biological programs rebuild soil biology, improve nutrient cycling and increase pasture density — meaning more feed per hectare and lower supplementary feed costs.',
        'benefits'    => array(
            array('icon' => 'trending-up', 'text' => 'Increase carrying capacity without increasing inputs'),
            array('icon' => 'sprout',      'text' => 'Improved soil structure and water retention'),
            array('icon' => 'droplet',     'text' => 'Compatible with standard spreading equipment'),
        ),
        'products'    => array(
            array(
                'name'        => 'Bac 5',
                'description' => '5-strain biological blend for soil regeneration and pasture performance',
                'link'        => '/products/bac-5',
                'benefits'    => array('Rebuild soil biology for stronger pastures', 'Reduce fertiliser costs by up to 50%', 'Available in liquid, powder and granule'),
            ),
            array(
                'name'        => 'Pasture Blend',
                'description' => 'Purpose-built biological blend for improved pasture density and growth',
                'link'        => '/products/pasture-blend',
                'benefits'    => array('Increase pasture density and feed quality', 'Better nutrient cycling in the root zone', 'Easy application with existing equipment'),
            ),
            array(
                'name'        => 'Seaweed',
                'description' => 'Organic seaweed fertiliser for root growth and plant resilience',
                'link'        => '/products/seaweed',
                'benefits'    => array('Improved stress tolerance in pastures', 'Enhanced root zone activity', 'Compatible with all spray programs'),
            ),
        ),
    ),
    array(
        'id'          => 'feed-supplements',
        'title'       => 'Feed Supplements',
        'description' => 'Give your livestock the biological edge. Our feed supplement range supports gut health and nutrient uptake, leading to better weight gain, improved fertility and reduced veterinary costs.',
        'benefits'    => array(
            array('icon' => 'trending-up', 'text' => 'Better feed conversion and weight gain'),
            array('icon' => 'sprout',      'text' => 'Reduced reliance on chemical treatments'),
            array('icon' => 'droplet',     'text' => 'Easy to integrate with existing feed programs'),
        ),
        'products'    => array(
            array(
                'name'        => 'BioBoost',
                'description' => 'Biological stimulant that supports gut health and nutrient absorption in livestock',
                'link'        => '/products/bioboost',
                'benefits'    => array('Improved feed conversion efficiency', 'Better weight gain and animal condition', 'Simple to add to existing feed rations'),
            ),
            array(
                'name'        => 'Seaweed + Guano',
                'description' => 'Nutrient-rich biological supplement combining seaweed and guano for livestock vitality',
                'link'        => '/products/seaweed-guano',
                'benefits'    => array('Broad-spectrum mineral and nutrient support', 'Improved gut health and digestion', 'Natural, chemical-free formulation'),
            ),
            array(
                'name'        => 'BB5',
                'description' => 'Concentrated biological blend for enhanced livestock performance',
                'link'        => '/products/bb5',
                'benefits'    => array('Support healthy gut microbiome', 'Reduce veterinary treatment costs', 'Compatible with all feed delivery systems'),
            ),
        ),
    ),
    array(
        'id'          => 'animal-wellbeing',
        'title'       => 'Animal Wellbeing',
        'description' => 'Proactive biological support for livestock health. Strengthen immune response, reduce stress and keep your animals performing at their best — without the chemical dependency.',
        'benefits'    => array(
            array('icon' => 'trending-up', 'text' => 'Stronger immune function and disease resistance'),
            array('icon' => 'sprout',      'text' => 'Lower veterinary and chemical input costs'),
            array('icon' => 'droplet',     'text' => 'Suitable for all livestock types'),
        ),
        'products'    => array(
            array(
                'name'        => 'Bioprotect',
                'description' => 'Biological livestock protector for immune support and overall animal health',
                'link'        => '/products/bioprotect',
                'benefits'    => array('Strengthen natural immune response', 'Reduce reliance on chemical treatments', 'Safe for all livestock classes'),
            ),
            array(
                'name'        => 'Guard',
                'description' => 'Biological protection program for healthier, more resilient livestock',
                'link'        => '/products/guard',
                'benefits'    => array('Proactive disease prevention', 'Lower chemical and veterinary spend', 'Easy to administer across herds'),
            ),
            array(
                'name'        => 'Bac 5',
                'description' => '5-strain biological blend supporting gut health and animal performance',
                'link'        => '/products/bac-5',
                'benefits'    => array('Promote healthy gut biology', 'Improved nutrient absorption', 'Proven across cattle, sheep and poultry'),
            ),
        ),
    ),
);

// --- Why ReVert for Livestock data ---
$why_revert = array(
    array(
        'icon'        => 'trending-up',
        'title'       => 'Cost Effective',
        'description' => 'Reduce feed and treatment costs while improving animal performance',
    ),
    array(
        'icon'        => 'sprout',
        'title'       => 'Proven Results',
        'description' => 'Trusted by livestock producers across Australia',
    ),
    array(
        'icon'        => 'droplet',
        'title'       => 'Easy Application',
        'description' => 'Simple integration with existing feed and pasture programs',
    ),
    array(
        'icon'        => 'shield',
        'title'       => 'Expert Support',
        'description' => 'Our team helps design the right program for your operation',
    ),
);
?>

<!-- Hero Section -->
<section class="relative bg-primary overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center"
         style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/livestock-hero.jpg'); ?>')">
        <div class="absolute inset-0" style="background: linear-gradient(to bottom, hsla(155,16%,26%,0.80) 0%, hsla(155,16%,26%,0.60) 40%, hsla(155,16%,26%,0.88) 100%);"></div>
    </div>

    <div class="container relative z-10">
        <div class="text-center text-primary-foreground" style="padding-top: 8rem; padding-bottom: 5rem;">
            <h1 class="font-bold max-w-4xl mx-auto leading-tight" style="font-size: clamp(2.5rem, 6vw, 5rem); margin-bottom: 1.5rem; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">
                <?php echo esc_html('Livestock Solutions'); ?>
            </h1>
            <p class="max-w-3xl mx-auto" style="font-size: clamp(1.1rem, 2.5vw, 1.5rem); opacity: 0.95; margin-bottom: 2.5rem; text-shadow: 0 1px 10px rgba(0,0,0,0.2);">
                <?php echo esc_html('Comprehensive health management to promote optimal livestock wellbeing. Healthier animals, better returns.'); ?>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url(home_url('/technical-sheets')); ?>"
                   class="inline-flex items-center justify-center rounded-md bg-secondary text-secondary-foreground hover:bg-secondary/80 transition-colors font-medium text-lg"
                   style="padding: 0.85rem 2.75rem;">
                    <?php echo esc_html('View Case Studies'); ?>
                    <?php echo revert_get_icon('arrow-right', 'ml-2 h-5 w-5'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>"
                   class="inline-flex items-center justify-center rounded-md border border-primary-foreground/40 text-primary-foreground hover:bg-primary-foreground hover:text-primary transition-colors font-medium text-lg"
                   style="padding: 0.85rem 2.75rem;">
                    <?php echo esc_html('Talk to Us'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Sub-category Cards Grid -->
<section class="py-20" style="background-color: hsl(90,12%,95%);">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3rem;">
            <h2 class="text-4xl font-bold" style="margin-bottom: 0.75rem;">Solutions by Category</h2>
            <p class="text-lg text-muted-foreground" style="max-width: 600px; margin: 0 auto;">Find the right program for your livestock operation</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 max-w-5xl mx-auto">
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

<!-- Why ReVert for Livestock -->
<section class="py-20" style="background-color: hsl(90,12%,95%);">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3rem;">
            <h2 class="text-4xl font-bold" style="margin-bottom: 0.75rem;">Why ReVert for Livestock?</h2>
            <p class="text-lg text-muted-foreground" style="max-width: 600px; margin: 0 auto;">Practical results for livestock producers</p>
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
        <h2 class="text-4xl font-bold mb-6"><?php echo esc_html('Ready to Improve Your Livestock Operation?'); ?></h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
            <?php echo esc_html('Talk to our team about a tailored program for your stock'); ?>
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?php echo esc_url(home_url('/technical-sheets')); ?>"
               class="inline-flex items-center justify-center h-11 px-8 rounded-md bg-secondary text-secondary-foreground hover:bg-secondary/80 transition-colors">
                <?php echo esc_html('View Case Studies'); ?>
            </a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>"
               class="inline-flex items-center justify-center h-11 px-8 rounded-md border border-primary-foreground text-primary-foreground hover:bg-primary-foreground hover:text-primary transition-colors">
                <?php echo esc_html('Talk to Us'); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
