<?php
/**
 * Template Name: Products Overview
 *
 * Clean, visual product categories — "see it, pick it"
 *
 * @package ReVert
 * @since 1.0.0
 */

get_header();

$products_title = get_field('products_title') ?: 'Our Products';
$products_subtitle = get_field('products_subtitle') ?: 'Find the right solution for your farm';
$products_cta_title = get_field('products_cta_title') ?: 'Need Help Choosing?';
$products_cta_description = get_field('products_cta_description') ?: 'Our team can help match the right products to your farm';
$products_cta_button_1_text = get_field('products_cta_button_1_text') ?: 'Contact Us';
$products_cta_button_1_link = get_field('products_cta_button_1_link') ?: home_url('/contact');
$products_cta_button_2_text = get_field('products_cta_button_2_text') ?: 'Find A Distributor';
$products_cta_button_2_link = get_field('products_cta_button_2_link') ?: home_url('/distributor');
?>

<!-- Page Header — clean, minimal -->
<section class="py-12 bg-muted">
    <div class="container">
        <div class="max-w-2xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-3"><?php echo esc_html($products_title); ?></h1>
            <p class="text-lg text-muted-foreground"><?php echo esc_html($products_subtitle); ?></p>
        </div>
    </div>
</section>

<!-- Product Categories — large visual cards -->
<section class="py-12 bg-background">
    <div class="container">
        <?php
        $categories = get_terms(array(
            'taxonomy' => 'product_category',
            'hide_empty' => false,
            'orderby' => 'name',
            'order' => 'ASC',
        ));

        // Icon mapping for categories
        $icon_map = array(
            'biologicals' => 'sprout',
            'stimulants' => 'trending-up',
            'fertilisers-nutrients' => 'droplet',
            'fertilisers' => 'droplet',
            'nutrients' => 'droplet',
            'program-packs' => 'folder',
            'specialty-products' => 'shield',
            'raw-products' => 'leaf',
        );

        if (!empty($categories) && !is_wp_error($categories)) :
        ?>
            <div class="grid md:grid-cols-2 gap-6">
                <?php foreach ($categories as $category) :
                    $category_link = get_term_link($category);
                    $icon = isset($icon_map[$category->slug]) ? $icon_map[$category->slug] : 'sprout';
                    $count = $category->count;
                ?>
                    <a href="<?php echo esc_url($category_link); ?>"
                       class="group flex items-center gap-6 bg-card rounded-lg border p-6 hover:shadow-md transition-all duration-200">
                        <!-- Icon -->
                        <div class="flex-shrink-0 w-16 h-16 rounded-full bg-accent/10 flex items-center justify-center group-hover:bg-accent/20 transition-colors">
                            <?php echo revert_get_icon($icon, 'h-8 w-8 text-accent'); ?>
                        </div>
                        <!-- Text -->
                        <div class="flex-grow">
                            <h2 class="text-xl font-bold mb-1 group-hover:text-accent transition-colors">
                                <?php echo esc_html($category->name); ?>
                            </h2>
                            <?php if ($category->description) : ?>
                                <p class="text-sm text-muted-foreground"><?php echo esc_html($category->description); ?></p>
                            <?php endif; ?>
                            <?php if ($count > 0) : ?>
                                <p class="text-xs text-muted-foreground mt-1"><?php echo $count; ?> product<?php echo $count !== 1 ? 's' : ''; ?></p>
                            <?php endif; ?>
                        </div>
                        <!-- Arrow -->
                        <?php echo revert_get_icon('arrow-right', 'h-5 w-5 text-muted-foreground group-hover:text-accent group-hover:translate-x-1 transition-all flex-shrink-0'); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <!-- No categories yet — show the 4 main solution areas as static cards -->
            <?php
            $solutions = array(
                array('title' => 'Crop Solutions', 'desc' => 'Biologicals, nutrition and soil health for broadacre and cropping', 'icon' => 'sprout', 'link' => home_url('/crop-solutions')),
                array('title' => 'Horticulture', 'desc' => 'Targeted solutions for fruit, vegetable and vine growers', 'icon' => 'leaf', 'link' => home_url('/horticulture')),
                array('title' => 'Livestock', 'desc' => 'Pasture health, feed supplements and animal wellbeing', 'icon' => 'heart', 'link' => home_url('/livestock')),
                array('title' => 'Pest Management', 'desc' => 'Integrated pest and disease management products', 'icon' => 'shield', 'link' => home_url('/pest-management')),
            );
            ?>
            <div class="grid md:grid-cols-2 gap-6">
                <?php foreach ($solutions as $sol) : ?>
                    <a href="<?php echo esc_url($sol['link']); ?>"
                       class="group flex items-center gap-6 bg-card rounded-lg border p-6 hover:shadow-md transition-all duration-200">
                        <div class="flex-shrink-0 w-16 h-16 rounded-full bg-accent/10 flex items-center justify-center group-hover:bg-accent/20 transition-colors">
                            <?php echo revert_get_icon($sol['icon'], 'h-8 w-8 text-accent'); ?>
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-xl font-bold mb-1 group-hover:text-accent transition-colors"><?php echo esc_html($sol['title']); ?></h2>
                            <p class="text-sm text-muted-foreground"><?php echo esc_html($sol['desc']); ?></p>
                        </div>
                        <?php echo revert_get_icon('arrow-right', 'h-5 w-5 text-muted-foreground group-hover:text-accent group-hover:translate-x-1 transition-all flex-shrink-0'); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- All Products List -->
<?php
$all_products = new WP_Query(array(
    'post_type' => 'revert_product',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC',
));

if ($all_products->have_posts()) :
?>
<section class="py-12 bg-muted">
    <div class="container">
        <h2 class="text-2xl font-bold mb-6">All Products</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php while ($all_products->have_posts()) : $all_products->the_post(); ?>
                <a href="<?php the_permalink(); ?>"
                   class="group flex items-center gap-4 bg-card rounded-lg border p-4 hover:shadow-sm transition-shadow">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="flex-shrink-0 w-14 h-14 rounded-md overflow-hidden">
                            <?php the_post_thumbnail('thumbnail', array('class' => 'w-full h-full object-cover')); ?>
                        </div>
                    <?php else : ?>
                        <div class="flex-shrink-0 w-14 h-14 rounded-md bg-accent/10 flex items-center justify-center">
                            <?php echo revert_get_icon('sprout', 'h-6 w-6 text-accent'); ?>
                        </div>
                    <?php endif; ?>
                    <div>
                        <h3 class="font-semibold group-hover:text-accent transition-colors"><?php the_title(); ?></h3>
                        <?php
                        $cats = wp_get_post_terms(get_the_ID(), 'product_category');
                        if (!empty($cats) && !is_wp_error($cats)) :
                        ?>
                            <p class="text-xs text-muted-foreground"><?php echo esc_html($cats[0]->name); ?></p>
                        <?php endif; ?>
                    </div>
                </a>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- CTA — simple, clean -->
<section class="py-12 bg-primary text-primary-foreground">
    <div class="container text-center">
        <h2 class="text-3xl font-bold mb-3"><?php echo esc_html($products_cta_title); ?></h2>
        <p class="text-lg mb-6 max-w-xl mx-auto opacity-90"><?php echo esc_html($products_cta_description); ?></p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
            <a href="<?php echo esc_url($products_cta_button_1_link); ?>"
               class="inline-flex items-center justify-center h-11 px-8 rounded-md bg-secondary text-secondary-foreground hover:bg-secondary/80">
                <?php echo esc_html($products_cta_button_1_text); ?>
            </a>
            <a href="<?php echo esc_url($products_cta_button_2_link); ?>"
               class="inline-flex items-center justify-center h-11 px-8 rounded-md border border-primary-foreground text-primary-foreground hover:bg-primary-foreground hover:text-primary">
                <?php echo revert_get_icon('map-pin', 'mr-2 h-4 w-4'); ?>
                <?php echo esc_html($products_cta_button_2_text); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
