<?php
/**
 * Template Name: About Page
 *
 * @package ReVert
 * @since 1.0.0
 */

get_header();

// --- Hero Section Fields ---
$about_hero_tagline = get_field('about_hero_tagline') ?: 'Our Story';
$about_hero_title = get_field('about_hero_title') ?: 'Our mission starts with our sons and daughters.';
$about_hero_subtitle = get_field('about_hero_subtitle') ?: 'It\'s our succession.';

// --- Mission Section Fields ---
$about_mission_title = get_field('about_mission_title') ?: 'Bringing generational prosperity to farmers through soil regeneration.';
$about_mission_text_1 = get_field('about_mission_text_1') ?: 'We use &ldquo;our&rdquo; on purpose. We are parents as well. We feel we should be in this together.';
$about_mission_text_2 = get_field('about_mission_text_2') ?: 'Soil and the communities within them are the very basis for life on this planet. As custodians of the land, the regeneration of our soil is the most important thing we can do for the next generation.';
$about_mission_text_3 = get_field('about_mission_text_3') ?: 'If we make the choice to regenerate our soil, we believe the future will be bright. And it is not like it will take a lifetime. With ReVert we can speed up regeneration. In a few months you will begin to see the results.';
$about_stat_value = get_field('about_stat_value') ?: '10+';
$about_stat_label = get_field('about_stat_label') ?: 'Years of Farm Research';

// --- Why Soil Section Fields ---
$about_soil_title = get_field('about_soil_title') ?: 'Why Soil Regeneration Matters';
$about_soil_subtitle = get_field('about_soil_subtitle') ?: 'Healthy soil is the foundation of productive farming and a sustainable future';

$soil_cards = array();
$soil_card_defaults = array(
    array(
        'icon'  => 'sprout',
        'title' => 'Visible Results Fast',
        'text'  => 'In a few months you will begin to see results. In 10 years you will look back with relief that you began your journey to becoming a soil farmer when you did.',
    ),
    array(
        'icon'  => 'shield',
        'title' => 'Reduce Chemical Inputs',
        'text'  => 'Healthy, biologically active soil naturally reduces the need for synthetic fertilisers and pesticides. Our farmers consistently report lower input costs.',
    ),
    array(
        'icon'  => 'leaf',
        'title' => 'Every Soil Counts',
        'text'  => 'All soil counts &mdash; home soil farmers are just as important. Every backyard gardener building their soil community is contributing to a regenerative future.',
    ),
);
for ($i = 1; $i <= 3; $i++) {
    $d = $soil_card_defaults[$i - 1];
    $soil_cards[] = array(
        'icon'  => get_field('about_soil_card_' . $i . '_icon') ?: $d['icon'],
        'title' => get_field('about_soil_card_' . $i . '_title') ?: $d['title'],
        'text'  => get_field('about_soil_card_' . $i . '_text') ?: $d['text'],
    );
}

// --- Approach Section Fields ---
$about_approach_tagline = get_field('about_approach_tagline') ?: 'Our Approach';
$about_approach_title = get_field('about_approach_title') ?: 'Biology-First Soil Regeneration';
$about_approach_text_1 = get_field('about_approach_text_1') ?: 'Our programs use specific bacillus bacteria combined with targeted supplements to regenerate soil biology from the ground up. This isn\'t a quick fix &mdash; it\'s a proven system backed by over a decade of farm research.';
$about_approach_text_2 = get_field('about_approach_text_2') ?: 'From livestock pasture and vegetable production to vineyards, fruit trees, and even land restoration &mdash; our biological programs integrate into your existing operations and equipment.';

$approach_features = array();
$approach_feature_defaults = array(
    array('icon' => 'microscope', 'label' => 'Bacillus Bacteria'),
    array('icon' => 'droplet',    'label' => 'Targeted Supplements'),
    array('icon' => 'shield',     'label' => 'Certified Organic'),
    array('icon' => 'trending-up','label' => 'Proven Results'),
);
for ($i = 1; $i <= 4; $i++) {
    $d = $approach_feature_defaults[$i - 1];
    $approach_features[] = array(
        'icon'  => get_field('about_approach_feature_' . $i . '_icon') ?: $d['icon'],
        'label' => get_field('about_approach_feature_' . $i . '_label') ?: $d['label'],
    );
}

// --- Timeline Section Fields ---
$about_timeline_title = get_field('about_timeline_title') ?: 'A Decade of Soil Science';
$about_timeline_subtitle = get_field('about_timeline_subtitle') ?: 'Our journey from research to real-world impact';

$timeline_items = array();
$timeline_defaults = array(
    array(
        'year'  => '2014',
        'title' => 'The Beginning',
        'text'  => 'Founded by a purpose-driven family passionate about soil health, ReVert began over a decade of farm research into biological soil regeneration using specific bacillus bacteria combined with targeted supplements.',
    ),
    array(
        'year'  => '2018',
        'title' => 'Proven on Farms',
        'text'  => 'Our biological programs delivered measurable results across commercial farming operations &mdash; from a Tasmanian potato farmer achieving $300,000 in additional value to Victorian livestock operators reporting pastures that have never looked better.',
    ),
    array(
        'year'  => '2022',
        'title' => 'Certified Organic',
        'text'  => 'Our core product range achieved organic certification through Southern Cross Certified (SXC), confirming what our farmers already knew &mdash; that biology-first solutions deliver real results.',
    ),
    array(
        'year'  => 'Now',
        'title' => 'The Decade of Soil',
        'text'  => '10 years of farm research has brought us to the place where we believe we are just getting started. This next decade is going to be the decade of soil. Farmers will all become soil experts, and with a growing network across Australia, ReVert is leading the way.',
    ),
);
for ($i = 1; $i <= 4; $i++) {
    $d = $timeline_defaults[$i - 1];
    $timeline_items[] = array(
        'year'  => get_field('about_timeline_' . $i . '_year') ?: $d['year'],
        'title' => get_field('about_timeline_' . $i . '_title') ?: $d['title'],
        'text'  => get_field('about_timeline_' . $i . '_text') ?: $d['text'],
    );
}

// --- Results Section Fields ---
$about_results_title = get_field('about_results_title') ?: 'Real Results From Real Farms';
$about_results_subtitle = get_field('about_results_subtitle') ?: 'Our farmers speak for themselves';

$result_cards = array();
$result_defaults = array(
    array(
        'icon'     => 'trending-up',
        'stat'     => '$300k',
        'title'    => 'Additional Value',
        'text'     => 'A Tasmanian potato farmer achieved $300,000 in additional value compared to prior years using our biological program.',
        'location' => 'Potato Farming, Tasmania',
    ),
    array(
        'icon'     => 'sprout',
        'stat'     => '2x',
        'title'    => 'Silage Output Doubled',
        'text'     => 'A Victorian farmer doubled silage output within two years while reducing nitrogen inputs.',
        'location' => 'Livestock, Victoria',
    ),
    array(
        'icon'     => 'leaf',
        'stat'     => 'Since 2015',
        'title'    => 'Pastures Never Looked Better',
        'text'     => 'A Victorian livestock operator reports pastures have never looked better, with reduced fertiliser applications and improved animal health.',
        'location' => 'Dairy, Victoria',
    ),
);
for ($i = 1; $i <= 3; $i++) {
    $d = $result_defaults[$i - 1];
    $result_cards[] = array(
        'icon'     => get_field('about_result_' . $i . '_icon') ?: $d['icon'],
        'stat'     => get_field('about_result_' . $i . '_stat') ?: $d['stat'],
        'title'    => get_field('about_result_' . $i . '_title') ?: $d['title'],
        'text'     => get_field('about_result_' . $i . '_text') ?: $d['text'],
        'location' => get_field('about_result_' . $i . '_location') ?: $d['location'],
    );
}

// --- Values Section Fields ---
$about_values_title = get_field('about_values_title') ?: 'What Drives Us';
$about_values_subtitle = get_field('about_values_subtitle') ?: 'Our values guide every product we develop and every farmer we work with';

$value_cards = array();
$value_defaults = array(
    array(
        'icon'  => 'heart',
        'title' => 'Family First',
        'text'  => 'Farm succession is critical to us all. We want prosperous farmers and a new generation coming back to the family farm.',
    ),
    array(
        'icon'  => 'microscope',
        'title' => 'Science-Backed',
        'text'  => 'Our programs use specific bacillus bacteria combined with the right supplements, proven across a decade of farm research.',
    ),
    array(
        'icon'  => 'sprout',
        'title' => 'Regenerative',
        'text'  => 'Building soil health that lasts for generations, not just seasons. We are custodians of the land.',
    ),
    array(
        'icon'  => 'trending-up',
        'title' => 'Results-Driven',
        'text'  => 'From $300k additional value in potato farming to doubled silage output &mdash; our farmers see measurable results.',
    ),
);
for ($i = 1; $i <= 4; $i++) {
    $d = $value_defaults[$i - 1];
    $value_cards[] = array(
        'icon'  => get_field('about_value_' . $i . '_icon') ?: $d['icon'],
        'title' => get_field('about_value_' . $i . '_title') ?: $d['title'],
        'text'  => get_field('about_value_' . $i . '_text') ?: $d['text'],
    );
}

// --- CTA Section Fields ---
$about_cta_title = get_field('about_cta_title') ?: 'Start Your Soil Journey';
$about_cta_description = get_field('about_cta_description') ?: 'Whether you\'re a broadacre farmer, hobby grower, or backyard gardener &mdash; all soil counts, and healthier soil starts with the right biology.';
$about_cta_button_1_text = get_field('about_cta_button_1_text') ?: 'Explore Our Products';
$about_cta_button_1_link = get_field('about_cta_button_1_link') ?: home_url('/products');
$about_cta_button_2_text = get_field('about_cta_button_2_text') ?: 'Get In Touch';
$about_cta_button_2_link = get_field('about_cta_button_2_link') ?: home_url('/contact');
?>

<!-- Hero Section -->
<section class="relative py-20 md:py-28 bg-primary text-primary-foreground overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-gradient-to-br from-accent/30 to-transparent"></div>
    </div>
    <div class="container relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <p class="text-sm font-semibold uppercase tracking-wider text-secondary mb-4"><?php echo esc_html($about_hero_tagline); ?></p>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                <?php echo esc_html($about_hero_title); ?>
            </h1>
            <p class="text-xl md:text-2xl opacity-90 font-light">
                <?php echo esc_html($about_hero_subtitle); ?>
            </p>
        </div>
    </div>
</section>

<!-- Mission Statement -->
<section class="py-16 md:py-20 bg-background">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        <?php echo esc_html($about_mission_title); ?>
                    </h2>
                    <div class="w-24 h-1.5 bg-accent rounded mb-6"></div>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-4">
                        <?php echo wp_kses_post($about_mission_text_1); ?>
                    </p>
                    <p class="text-muted-foreground leading-relaxed mb-4">
                        <?php echo wp_kses_post($about_mission_text_2); ?>
                    </p>
                    <p class="text-muted-foreground leading-relaxed">
                        <?php echo wp_kses_post($about_mission_text_3); ?>
                    </p>
                </div>
                <div class="relative">
                    <div class="aspect-video rounded-2xl bg-muted overflow-hidden">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                        <?php else : ?>
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-accent/20 to-secondary/20">
                                <?php echo revert_get_icon('sprout', 'h-10 w-10 text-accent/40'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- Floating stat card -->
                    <div class="hidden md:block absolute -bottom-6 -left-6 bg-card rounded-lg shadow-lg p-4 border">
                        <span class="text-2xl font-bold text-accent"><?php echo esc_html($about_stat_value); ?></span>
                        <p class="text-xs text-muted-foreground"><?php echo esc_html($about_stat_label); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Soil Regeneration Matters -->
<section class="py-16 md:py-20 bg-muted">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4"><?php echo esc_html($about_soil_title); ?></h2>
            <p class="text-lg text-muted-foreground">
                <?php echo esc_html($about_soil_subtitle); ?>
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <?php foreach ($soil_cards as $card) : ?>
            <div class="bg-card rounded-lg p-6 border shadow-sm hover:shadow-lg transition-shadow">
                <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center mb-4">
                    <?php echo revert_get_icon($card['icon'], 'h-5 w-5 text-accent'); ?>
                </div>
                <h3 class="text-lg font-bold mb-2"><?php echo esc_html($card['title']); ?></h3>
                <p class="text-sm text-muted-foreground">
                    <?php echo wp_kses_post($card['text']); ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Our Approach -->
<section class="py-16 md:py-20 bg-background">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <div class="bg-card rounded-lg border p-8 md:p-12">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-wider text-accent mb-3"><?php echo esc_html($about_approach_tagline); ?></p>
                        <h2 class="text-2xl md:text-3xl font-bold mb-4"><?php echo esc_html($about_approach_title); ?></h2>
                        <p class="text-muted-foreground leading-relaxed mb-4">
                            <?php echo wp_kses_post($about_approach_text_1); ?>
                        </p>
                        <p class="text-muted-foreground leading-relaxed">
                            <?php echo wp_kses_post($about_approach_text_2); ?>
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <?php foreach ($approach_features as $feature) : ?>
                        <div class="bg-muted rounded-lg p-4 text-center">
                            <?php echo revert_get_icon($feature['icon'], 'h-5 w-5 text-accent mx-auto mb-2'); ?>
                            <p class="text-xs font-medium"><?php echo esc_html($feature['label']); ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Journey / Timeline -->
<section class="py-16 md:py-20 bg-muted">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4"><?php echo esc_html($about_timeline_title); ?></h2>
            <p class="text-lg text-muted-foreground">
                <?php echo esc_html($about_timeline_subtitle); ?>
            </p>
        </div>

        <div class="max-w-3xl mx-auto">
            <div class="relative">
                <!-- Vertical line -->
                <div class="absolute left-6 top-0 bottom-0 w-0.5 bg-border hidden md:block"></div>

                <?php
                $timeline_colors = array('bg-accent', 'bg-secondary', 'bg-primary', 'bg-accent');
                $timeline_text_colors = array('text-accent-foreground', 'text-secondary-foreground', 'text-primary-foreground', 'text-accent-foreground');
                ?>
                <?php foreach ($timeline_items as $index => $item) : ?>
                <div class="flex gap-4 md:gap-6<?php echo $index < count($timeline_items) - 1 ? ' mb-10' : ''; ?>">
                    <div class="flex-shrink-0 w-12 h-12 rounded-full <?php echo $timeline_colors[$index]; ?> flex items-center justify-center <?php echo $timeline_text_colors[$index]; ?> font-bold text-xs z-10">
                        <?php echo esc_html($item['year']); ?>
                    </div>
                    <div class="pt-2">
                        <h3 class="text-lg font-bold mb-2"><?php echo esc_html($item['title']); ?></h3>
                        <p class="text-sm text-muted-foreground">
                            <?php echo wp_kses_post($item['text']); ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Farmer Results -->
<section class="py-16 md:py-20 bg-background">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4"><?php echo esc_html($about_results_title); ?></h2>
            <p class="text-lg text-muted-foreground">
                <?php echo esc_html($about_results_subtitle); ?>
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <?php foreach ($result_cards as $result) : ?>
            <div class="bg-card rounded-lg border p-6 shadow-sm">
                <div class="flex items-center gap-3 mb-4">
                    <?php echo revert_get_icon($result['icon'], 'h-5 w-5 text-accent'); ?>
                    <span class="text-2xl font-bold text-accent"><?php echo esc_html($result['stat']); ?></span>
                </div>
                <p class="text-sm font-semibold mb-1"><?php echo esc_html($result['title']); ?></p>
                <p class="text-sm text-muted-foreground mb-3">
                    <?php echo wp_kses_post($result['text']); ?>
                </p>
                <p class="text-xs text-muted-foreground"><?php echo esc_html($result['location']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Values -->
<section class="py-16 md:py-20 bg-primary text-primary-foreground">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4"><?php echo esc_html($about_values_title); ?></h2>
            <p class="text-lg opacity-80">
                <?php echo esc_html($about_values_subtitle); ?>
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-5xl mx-auto">
            <?php foreach ($value_cards as $value) : ?>
            <div class="rounded-lg border border-primary-foreground/10 bg-primary-foreground/5 text-center p-6">
                <div class="w-10 h-10 rounded-full bg-primary-foreground/10 flex items-center justify-center mx-auto mb-4">
                    <?php echo revert_get_icon($value['icon'], 'h-5 w-5 text-secondary'); ?>
                </div>
                <h3 class="font-bold mb-2"><?php echo esc_html($value['title']); ?></h3>
                <p class="text-sm opacity-80">
                    <?php echo wp_kses_post($value['text']); ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Trust Badges -->
        <div class="flex flex-wrap justify-center gap-6 mt-12 max-w-3xl mx-auto">
            <div class="flex items-center gap-2 text-sm opacity-80">
                <?php echo revert_get_icon('shield', 'h-4 w-4 text-secondary'); ?>
                <span>SXC Certified Organic</span>
            </div>
            <div class="flex items-center gap-2 text-sm opacity-80">
                <?php echo revert_get_icon('leaf', 'h-4 w-4 text-secondary'); ?>
                <span>Australian Made</span>
            </div>
            <div class="flex items-center gap-2 text-sm opacity-80">
                <?php echo revert_get_icon('microscope', 'h-4 w-4 text-secondary'); ?>
                <span>Scientifically Proven</span>
            </div>
            <div class="flex items-center gap-2 text-sm opacity-80">
                <?php echo revert_get_icon('heart', 'h-4 w-4 text-secondary'); ?>
                <span>Family Owned</span>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16 md:py-20 bg-background">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4"><?php echo esc_html($about_cta_title); ?></h2>
            <p class="text-lg text-muted-foreground mb-8">
                <?php echo wp_kses_post($about_cta_description); ?>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url($about_cta_button_1_link); ?>"
                   class="inline-flex items-center justify-center h-11 px-8 rounded-md bg-accent text-accent-foreground hover:bg-accent/80 transition-all font-medium shadow-sm hover:shadow-md">
                    <?php echo esc_html($about_cta_button_1_text); ?>
                    <?php echo revert_get_icon('arrow-right', 'ml-2 h-4 w-4'); ?>
                </a>
                <a href="<?php echo esc_url($about_cta_button_2_link); ?>"
                   class="inline-flex items-center justify-center h-11 px-8 rounded-md border border-primary text-primary hover:bg-primary hover:text-primary-foreground transition-all font-medium">
                    <?php echo esc_html($about_cta_button_2_text); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
