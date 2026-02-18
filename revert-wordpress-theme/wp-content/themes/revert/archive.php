<?php
/**
 * Blog Archive Template
 *
 * @package ReVert
 * @since 1.0.0
 */

get_header();
?>

<section class="py-16 bg-muted">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <?php
                if (is_category()) {
                    single_cat_title();
                } elseif (is_tag()) {
                    single_tag_title();
                } elseif (is_author()) {
                    the_author();
                } elseif (is_day()) {
                    echo get_the_date();
                } elseif (is_month()) {
                    echo get_the_date('F Y');
                } elseif (is_year()) {
                    echo get_the_date('Y');
                } else {
                    echo 'Blog';
                }
                ?>
            </h1>
            <?php if (is_category() || is_tag()) : ?>
                <p class="text-xl text-muted-foreground">
                    <?php echo term_description(); ?>
                </p>
            <?php else : ?>
                <p class="text-xl text-muted-foreground">
                    Insights, updates, and expertise from the ReVert team
                </p>
            <?php endif; ?>
        </div>

        <?php if (have_posts()) : ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="bg-card rounded-lg border shadow-sm hover:shadow-lg transition-shadow">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" class="block aspect-video overflow-hidden rounded-t-lg">
                                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover hover:scale-105 transition-transform duration-300')); ?>
                            </a>
                        <?php endif; ?>

                        <div class="p-6">
                            <div class="flex items-center gap-2 text-sm text-muted-foreground mb-3">
                                <time datetime="<?php echo get_the_date('c'); ?>">
                                    <?php echo get_the_date(); ?>
                                </time>
                                <?php if (has_category()) : ?>
                                    <span>•</span>
                                    <span><?php the_category(', '); ?></span>
                                <?php endif; ?>
                            </div>

                            <h2 class="text-xl font-bold mb-2">
                                <a href="<?php the_permalink(); ?>" class="hover:text-primary transition-colors">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <?php if (has_excerpt()) : ?>
                                <p class="text-muted-foreground mb-4">
                                    <?php echo get_the_excerpt(); ?>
                                </p>
                            <?php endif; ?>

                            <a href="<?php the_permalink(); ?>"
                               class="inline-flex items-center text-sm font-medium text-primary hover:underline">
                                Read More
                                <?php echo revert_get_icon('arrow-right', 'ml-1 h-4 w-4'); ?>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <?php
            the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => '← Previous',
                'next_text' => 'Next →',
                'class'     => 'flex justify-center gap-2',
            ));
            ?>

        <?php else : ?>
            <div class="max-w-2xl mx-auto bg-card rounded-lg border p-8 text-center">
                <p class="text-muted-foreground">No posts found.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
