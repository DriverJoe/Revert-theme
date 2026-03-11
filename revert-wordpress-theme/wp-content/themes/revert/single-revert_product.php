<?php
/**
 * Single Product Template
 *
 * @package ReVert
 * @since 1.0.0
 */

get_header();
?>

<?php while (have_posts()) : the_post();
    $product_icon = get_field('product_icon');
    $product_description = get_field('product_description');
    $product_tagline = get_field('product_tagline');
    $product_form = get_field('product_form');

    // Build features array from individual fields
    $features = array();
    for ($i = 1; $i <= 4; $i++) {
        $title = get_field('feature_' . $i . '_title');
        $description = get_field('feature_' . $i . '_description');
        $icon = get_field('feature_' . $i . '_icon');

        if ($title && $description) {
            $features[] = array(
                'feature_title' => $title,
                'feature_description' => $description,
                'feature_icon' => $icon,
            );
        }
    }
?>

<section class="py-16">
    <div class="container">
        <div class="max-w-5xl mx-auto">
            <!-- Back Button -->
            <a href="<?php echo get_post_type_archive_link('revert_product'); ?>"
               class="inline-flex items-center text-sm text-muted-foreground hover:text-primary mb-8">
                <?php echo revert_get_icon('arrow-left', 'mr-2 h-4 w-4'); ?>
                Back to Products
            </a>

            <!-- Product Header -->
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <!-- Product Image -->
                <div class="bg-muted rounded-lg overflow-hidden aspect-square">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                    <?php else : ?>
                        <div class="w-full h-full flex items-center justify-center">
                            <?php echo revert_get_icon($product_icon ?: 'sprout', 'h-32 w-32 text-accent'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Product Info -->
                <div class="flex flex-col justify-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4"><?php the_title(); ?></h1>

                    <!-- Product Tagline -->
                    <?php if ($product_tagline) : ?>
                        <p class="text-lg text-muted-foreground mb-4"><?php echo esc_html($product_tagline); ?></p>
                    <?php endif; ?>

                    <!-- Categories & Product Form -->
                    <?php
                    $categories = get_the_terms(get_the_ID(), 'product_category');
                    if (($categories && !is_wp_error($categories)) || $product_form) :
                    ?>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <?php if ($categories && !is_wp_error($categories)) : ?>
                                <?php foreach ($categories as $category) : ?>
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-accent/10 text-accent">
                                        <?php echo esc_html($category->name); ?>
                                    </span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <?php if ($product_form) : ?>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-primary/10 text-primary font-medium">
                                    <?php echo esc_html($product_form); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Product Description -->
                    <?php if ($product_description) : ?>
                        <div class="prose prose-lg mb-6">
                            <?php echo wp_kses_post($product_description); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Application Areas -->
                    <?php
                    $areas = get_the_terms(get_the_ID(), 'application_area');
                    if ($areas && !is_wp_error($areas)) :
                    ?>
                        <div class="mb-6">
                            <h3 class="text-sm font-semibold text-muted-foreground mb-2">Application Areas:</h3>
                            <div class="flex flex-wrap gap-2">
                                <?php foreach ($areas as $area) : ?>
                                    <span class="inline-flex items-center px-2 py-1 rounded text-xs bg-muted">
                                        <?php echo esc_html($area->name); ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap gap-4">
                        <a href="<?php echo home_url('/contact'); ?>"
                           class="inline-flex items-center justify-center h-11 px-8 rounded-md bg-primary text-primary-foreground hover:bg-primary/90">
                            Contact Us
                        </a>
                        <a href="<?php echo home_url('/distributor'); ?>"
                           class="inline-flex items-center justify-center h-11 px-8 rounded-md border border-input bg-background hover:bg-accent hover:text-accent-foreground">
                            <?php echo revert_get_icon('map-pin', 'mr-2 h-4 w-4'); ?>
                            Find A Distributor
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Gallery -->
            <?php
            $gallery_images = array();
            for ($g = 1; $g <= 4; $g++) {
                $gallery_img = get_field('product_gallery_' . $g);
                if ($gallery_img) {
                    $gallery_images[] = $gallery_img;
                }
            }
            if (!empty($gallery_images)) :
            ?>
                <div class="mb-12">
                    <h2 class="text-3xl font-bold mb-6">Product Gallery</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <?php foreach ($gallery_images as $gallery_img) : ?>
                            <div class="bg-muted rounded-lg overflow-hidden aspect-square">
                                <?php if (is_array($gallery_img) && !empty($gallery_img['url'])) : ?>
                                    <img src="<?php echo esc_url($gallery_img['url']); ?>"
                                         alt="<?php echo esc_attr($gallery_img['alt'] ?? get_the_title() . ' gallery image'); ?>"
                                         class="w-full h-full object-cover" />
                                <?php elseif (is_numeric($gallery_img)) : ?>
                                    <?php echo wp_get_attachment_image($gallery_img, 'medium_large', false, array('class' => 'w-full h-full object-cover')); ?>
                                <?php else : ?>
                                    <img src="<?php echo esc_url($gallery_img); ?>"
                                         alt="<?php echo esc_attr(get_the_title() . ' gallery image'); ?>"
                                         class="w-full h-full object-cover" />
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Product Features -->
            <?php if ($features && is_array($features)) : ?>
                <div class="bg-card rounded-lg border p-8 mb-12">
                    <h2 class="text-3xl font-bold mb-8">Key Features</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <?php foreach ($features as $feature) : ?>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0">
                                    <?php echo revert_get_icon($feature['feature_icon'] ?: 'sprout', 'h-8 w-8 text-accent'); ?>
                                </div>
                                <div>
                                    <h3 class="font-bold mb-2"><?php echo esc_html($feature['feature_title']); ?></h3>
                                    <p class="text-sm text-muted-foreground"><?php echo esc_html($feature['feature_description']); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Product Specifications -->
            <?php
            $specs = array();
            for ($s = 1; $s <= 4; $s++) {
                $spec_name = get_field('product_spec_' . $s . '_name');
                $spec_value = get_field('product_spec_' . $s . '_value');
                if ($spec_name) {
                    $specs[] = array(
                        'name' => $spec_name,
                        'value' => $spec_value ?: '—',
                    );
                }
            }
            if (!empty($specs)) :
            ?>
                <div class="bg-card rounded-lg border p-8 mb-12">
                    <h2 class="text-3xl font-bold mb-6">Specifications</h2>
                    <div class="grid md:grid-cols-2 gap-4">
                        <?php foreach ($specs as $spec) : ?>
                            <div class="flex justify-between items-center py-3 px-4 bg-muted rounded-lg">
                                <span class="text-sm font-semibold text-muted-foreground"><?php echo esc_html($spec['name']); ?></span>
                                <span class="text-sm font-medium"><?php echo esc_html($spec['value']); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Technical Data Sheet -->
            <?php
            $tech_sheet = get_field('product_technical_sheet');
            if ($tech_sheet) :
            ?>
                <div class="bg-muted rounded-lg p-8 mb-12">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-bold mb-2">Technical Data Sheet</h3>
                            <p class="text-sm text-muted-foreground">Download complete product specifications</p>
                        </div>
                        <a href="<?php echo esc_url($tech_sheet['url']); ?>"
                           download
                           class="inline-flex items-center justify-center h-10 px-6 rounded-md bg-primary text-primary-foreground hover:bg-primary/90">
                            <?php echo revert_get_icon('download', 'mr-2 h-4 w-4'); ?>
                            Download PDF
                        </a>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Related Products -->
            <?php
            $related_args = array(
                'post_type' => 'revert_product',
                'posts_per_page' => 3,
                'post__not_in' => array(get_the_ID()),
            );

            if ($categories && !is_wp_error($categories)) {
                $related_args['tax_query'] = array(
                    array(
                        'taxonomy' => 'product_category',
                        'field' => 'term_id',
                        'terms' => wp_list_pluck($categories, 'term_id'),
                    ),
                );
            }

            $related_query = new WP_Query($related_args);

            if ($related_query->have_posts()) :
            ?>
                <div class="mt-12">
                    <h2 class="text-2xl font-bold mb-6">Related Products</h2>
                    <div class="grid md:grid-cols-3 gap-6">
                        <?php while ($related_query->have_posts()) : $related_query->the_post();
                            $related_icon = get_field('product_icon');
                        ?>
                            <a href="<?php the_permalink(); ?>"
                               class="group bg-card rounded-lg border hover:shadow-lg transition-shadow">
                                <div class="aspect-square bg-muted rounded-t-lg overflow-hidden">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-300')); ?>
                                    <?php else : ?>
                                        <div class="w-full h-full flex items-center justify-center">
                                            <?php echo revert_get_icon($related_icon ?: 'sprout', 'h-16 w-16 text-accent'); ?>
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
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>
