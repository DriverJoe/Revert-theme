<?php
/**
 * Template Name: Products Overview
 *
 * Displays all product categories
 *
 * @package ReVert
 * @since 1.0.0
 */

get_header();
?>

<?php $products_title = get_field('products_title') ?: 'Our Products'; ?>
<?php $products_subtitle = get_field('products_subtitle') ?: 'Explore our range of innovative agricultural solutions designed for sustainable farming'; ?>
<?php $products_featured_title = get_field('products_featured_title') ?: 'Featured Products'; ?>
<?php $products_featured_subtitle = get_field('products_featured_subtitle') ?: 'Our most popular agricultural solutions'; ?>
<?php $products_cta_title = get_field('products_cta_title') ?: 'Need Help Choosing?'; ?>
<?php $products_cta_description = get_field('products_cta_description') ?: 'Our experts are here to help you find the perfect solution for your agricultural needs'; ?>
<?php $products_cta_button_1_text = get_field('products_cta_button_1_text') ?: 'Contact Us'; ?>
<?php $products_cta_button_1_link = get_field('products_cta_button_1_link') ?: home_url('/contact'); ?>
<?php $products_cta_button_2_text = get_field('products_cta_button_2_text') ?: 'Find A Distributor'; ?>
<?php $products_cta_button_2_link = get_field('products_cta_button_2_link') ?: home_url('/distributor'); ?>

<!-- Page Hero -->
<section class="py-16 bg-muted">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4"><?php echo esc_html($products_title); ?></h1>
            <p class="text-xl text-muted-foreground">
                <?php echo esc_html($products_subtitle); ?>
            </p>
        </div>
    </div>
</section>

<!-- Product Categories Grid -->
<section class="py-16 bg-background">
    <div class="container">
        <?php
        // Get all product categories
        $categories = get_terms(array(
            'taxonomy' => 'product_category',
            'hide_empty' => false,
            'orderby' => 'name',
            'order' => 'ASC',
        ));

        if (!empty($categories) && !is_wp_error($categories)) :
        ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($categories as $category) :
                    // Get products count
                    $product_count = $category->count;

                    // Get the category link
                    $category_link = get_term_link($category);

                    // Get icon for category (you can customize this mapping)
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

                    $slug = $category->slug;
                    $icon = isset($icon_map[$slug]) ? $icon_map[$slug] : 'sprout';
                ?>
                    <a href="<?php echo esc_url($category_link); ?>"
                       class="group bg-card rounded-lg border shadow-sm hover:shadow-lg transition-all duration-300">
                        <!-- Category Icon/Image Area -->
                        <div class="aspect-video bg-gradient-to-br from-accent/10 to-primary/10 rounded-t-lg flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-accent/5 group-hover:bg-accent/10 transition-colors"></div>
                            <?php echo revert_get_icon($icon, 'h-12 w-12 text-accent relative z-10 group-hover:scale-110 transition-transform duration-300'); ?>
                        </div>

                        <!-- Category Info -->
                        <div class="p-6">
                            <div class="flex items-start justify-between mb-2">
                                <h3 class="text-2xl font-bold group-hover:text-accent transition-colors">
                                    <?php echo esc_html($category->name); ?>
                                </h3>
                                <span class="inline-flex items-center justify-center h-6 px-2 rounded-full text-xs font-medium bg-accent/10 text-accent">
                                    <?php echo $product_count; ?> <?php echo $product_count === 1 ? 'Product' : 'Products'; ?>
                                </span>
                            </div>

                            <?php if ($category->description) : ?>
                                <p class="text-muted-foreground mb-4">
                                    <?php echo esc_html($category->description); ?>
                                </p>
                            <?php else : ?>
                                <p class="text-muted-foreground mb-4">
                                    Explore our range of <?php echo strtolower(esc_html($category->name)); ?> products
                                </p>
                            <?php endif; ?>

                            <div class="flex items-center text-sm text-primary font-medium group-hover:gap-2 transition-all">
                                <span>View Products</span>
                                <?php echo revert_get_icon('arrow-right', 'h-4 w-4 group-hover:translate-x-1 transition-transform'); ?>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

        <?php else : ?>
            <div class="max-w-2xl mx-auto bg-card rounded-lg border p-8 text-center">
                <p class="text-muted-foreground mb-4">No product categories found.</p>
                <a href="<?php echo esc_url(home_url('/')); ?>"
                   class="inline-flex items-center justify-center h-10 px-6 rounded-md bg-primary text-primary-foreground hover:bg-primary/90">
                    Return Home
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Featured Products Section (Optional) -->
<section class="py-16 bg-muted">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4"><?php echo esc_html($products_featured_title); ?></h2>
            <p class="text-muted-foreground"><?php echo esc_html($products_featured_subtitle); ?></p>
        </div>

        <?php
        // Get featured products (you can add a custom field or just show recent products)
        $featured_products = new WP_Query(array(
            'post_type' => 'revert_product',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
        ));

        if ($featured_products->have_posts()) :
        ?>
            <div class="grid md:grid-cols-3 gap-6">
                <?php while ($featured_products->have_posts()) : $featured_products->the_post();
                    $product_icon = get_field('product_icon');
                ?>
                    <a href="<?php the_permalink(); ?>"
                       class="group bg-card rounded-lg border hover:shadow-lg transition-shadow">
                        <div class="aspect-square bg-muted rounded-t-lg overflow-hidden">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-300')); ?>
                            <?php else : ?>
                                <div class="w-full h-full flex items-center justify-center">
                                    <?php echo revert_get_icon($product_icon ?: 'sprout', 'h-16 w-16 text-accent'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold mb-2"><?php the_title(); ?></h3>
                            <p class="text-sm text-primary hover:underline">
                                Learn More →
                            </p>
                        </div>
                    </a>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-primary text-primary-foreground">
    <div class="container text-center">
        <h2 class="text-3xl font-bold mb-4"><?php echo esc_html($products_cta_title); ?></h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto opacity-90">
            <?php echo esc_html($products_cta_description); ?>
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
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
