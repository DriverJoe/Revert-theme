<?php
/**
 * Products Archive Template
 *
 * @package ReVert
 * @since 1.0.0
 */

get_header();
?>

<section class="py-16 bg-muted">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Products</h1>
            <p class="text-xl text-muted-foreground">
                Innovative agricultural solutions for sustainable farming
            </p>
        </div>

        <!-- Category Filter -->
        <?php
        $categories = get_terms(array(
            'taxonomy' => 'product_category',
            'hide_empty' => true,
        ));
        if (!empty($categories) && !is_wp_error($categories)) :
        ?>
            <div class="flex flex-wrap justify-center gap-2 mb-12">
                <a href="<?php echo get_post_type_archive_link('revert_product'); ?>"
                   class="inline-flex items-center justify-center h-9 px-4 rounded-md border <?php echo !is_tax() ? 'bg-primary text-primary-foreground' : 'bg-background hover:bg-accent hover:text-accent-foreground'; ?>">
                    All Products
                </a>
                <?php foreach ($categories as $category) : ?>
                    <a href="<?php echo get_term_link($category); ?>"
                       class="inline-flex items-center justify-center h-9 px-4 rounded-md border <?php echo is_tax('product_category', $category->slug) ? 'bg-primary text-primary-foreground' : 'bg-background hover:bg-accent hover:text-accent-foreground'; ?>">
                        <?php echo esc_html($category->name); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Application Area Filter -->
        <?php
        $areas = get_terms(array(
            'taxonomy' => 'application_area',
            'hide_empty' => true,
        ));
        if (!empty($areas) && !is_wp_error($areas)) :
        ?>
            <div class="flex flex-wrap justify-center gap-2 mb-12">
                <span class="text-sm font-semibold text-muted-foreground mr-2">Filter by use:</span>
                <?php foreach ($areas as $area) : ?>
                    <a href="<?php echo get_term_link($area); ?>"
                       class="inline-flex items-center justify-center h-8 px-3 rounded-md text-sm border <?php echo is_tax('application_area', $area->slug) ? 'bg-accent text-accent-foreground' : 'bg-background hover:bg-muted'; ?>">
                        <?php echo esc_html($area->name); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if (have_posts()) : ?>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3 mb-12">
                <?php while (have_posts()) : the_post();
                    $product_icon = get_field('product_icon');

                    // Count features from individual fields
                    $feature_count = 0;
                    for ($i = 1; $i <= 4; $i++) {
                        if (get_field('feature_' . $i . '_title') && get_field('feature_' . $i . '_description')) {
                            $feature_count++;
                        }
                    }
                ?>
                    <a href="<?php the_permalink(); ?>"
                       class="group bg-card rounded-lg border hover:shadow-lg transition-shadow overflow-hidden flex flex-col h-full max-w-xs">
                        <!-- Product Image - Fixed small height -->
                        <div class="h-32 bg-muted overflow-hidden relative flex-shrink-0">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('thumbnail', array('class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-300')); ?>
                            <?php else : ?>
                                <div class="w-full h-full flex items-center justify-center">
                                    <?php echo revert_get_icon($product_icon ?: 'sprout', 'h-10 w-10 text-accent'); ?>
                                </div>
                            <?php endif; ?>

                            <!-- Category Badge -->
                            <?php
                            $product_categories = get_the_terms(get_the_ID(), 'product_category');
                            if ($product_categories && !is_wp_error($product_categories)) :
                            ?>
                                <div class="absolute top-1 left-1">
                                    <span class="inline-flex items-center px-1.5 py-0.5 rounded-full text-[10px] font-medium bg-primary text-primary-foreground">
                                        <?php echo esc_html($product_categories[0]->name); ?>
                                    </span>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Product Info -->
                        <div class="p-2 flex flex-col flex-grow">
                            <h3 class="text-xs font-bold mb-1 line-clamp-2"><?php the_title(); ?></h3>

                            <!-- Application Areas -->
                            <?php
                            $product_areas = get_the_terms(get_the_ID(), 'application_area');
                            if ($product_areas && !is_wp_error($product_areas)) :
                            ?>
                                <div class="flex flex-wrap gap-0.5 mb-1">
                                    <?php foreach (array_slice($product_areas, 0, 2) as $area) : ?>
                                        <span class="inline-flex items-center px-1 py-0.5 rounded text-[10px] bg-muted text-muted-foreground">
                                            <?php echo esc_html($area->name); ?>
                                        </span>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <!-- Features Count -->
                            <?php if ($feature_count > 0) : ?>
                                <div class="flex items-center text-[10px] text-muted-foreground mb-1">
                                    <?php echo revert_get_icon('sprout', 'mr-0.5 h-2.5 w-2.5'); ?>
                                    <?php echo $feature_count; ?> Features
                                </div>
                            <?php endif; ?>

                            <div class="mt-auto">
                                <span class="inline-flex items-center text-[10px] text-primary font-medium group-hover:underline">
                                    View Details
                                    <?php echo revert_get_icon('arrow-right', 'ml-0.5 h-2.5 w-2.5'); ?>
                                </span>
                            </div>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => '← Previous',
                    'next_text' => 'Next →',
                ));
                ?>
            </div>

        <?php else : ?>
            <div class="max-w-2xl mx-auto bg-card rounded-lg border p-8 text-center">
                <p class="text-muted-foreground mb-4">No products found in this category.</p>
                <a href="<?php echo get_post_type_archive_link('revert_product'); ?>"
                   class="inline-flex items-center justify-center h-10 px-6 rounded-md bg-primary text-primary-foreground hover:bg-primary/90">
                    View All Products
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
