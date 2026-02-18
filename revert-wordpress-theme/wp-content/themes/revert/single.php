<?php
/**
 * Single Blog Post Template
 *
 * @package ReVert
 * @since 1.0.0
 */

get_header();
?>

<?php while (have_posts()) : the_post(); ?>

<article class="py-16">
    <!-- Featured Image -->
    <?php if (has_post_thumbnail()) : ?>
        <div class="w-full h-[400px] relative mb-8">
            <?php the_post_thumbnail('full', array('class' => 'w-full h-full object-cover')); ?>
            <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
        </div>
    <?php endif; ?>

    <div class="container">
        <div class="max-w-4xl mx-auto">
            <!-- Meta -->
            <div class="flex items-center gap-4 text-sm text-muted-foreground mb-6">
                <time datetime="<?php echo get_the_date('c'); ?>">
                    <?php echo revert_get_icon('calendar', 'inline h-4 w-4 mr-1'); ?>
                    <?php echo get_the_date(); ?>
                </time>
                <?php if (has_category()) : ?>
                    <span>
                        <?php echo revert_get_icon('folder', 'inline h-4 w-4 mr-1'); ?>
                        <?php the_category(', '); ?>
                    </span>
                <?php endif; ?>
                <?php if (has_tag()) : ?>
                    <span>
                        <?php echo revert_get_icon('tag', 'inline h-4 w-4 mr-1'); ?>
                        <?php the_tags('', ', '); ?>
                    </span>
                <?php endif; ?>
            </div>

            <!-- Title -->
            <h1 class="text-4xl md:text-5xl font-bold mb-6"><?php the_title(); ?></h1>

            <!-- Content -->
            <div class="prose prose-lg max-w-none mb-12">
                <?php the_content(); ?>
            </div>

            <!-- Post Navigation -->
            <div class="border-t border-b py-8 mb-8">
                <div class="grid md:grid-cols-2 gap-6">
                    <?php
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();
                    ?>

                    <?php if ($prev_post) : ?>
                        <a href="<?php echo get_permalink($prev_post); ?>"
                           class="flex items-start gap-3 p-4 rounded-lg border hover:bg-accent hover:text-accent-foreground transition-colors">
                            <?php echo revert_get_icon('arrow-left', 'h-5 w-5 mt-1 flex-shrink-0'); ?>
                            <div>
                                <div class="text-sm text-muted-foreground mb-1">Previous Post</div>
                                <div class="font-semibold"><?php echo get_the_title($prev_post); ?></div>
                            </div>
                        </a>
                    <?php endif; ?>

                    <?php if ($next_post) : ?>
                        <a href="<?php echo get_permalink($next_post); ?>"
                           class="flex items-start gap-3 p-4 rounded-lg border hover:bg-accent hover:text-accent-foreground transition-colors md:ml-auto md:text-right">
                            <div class="md:order-2">
                                <?php echo revert_get_icon('arrow-right', 'h-5 w-5 mt-1 flex-shrink-0'); ?>
                            </div>
                            <div class="md:order-1">
                                <div class="text-sm text-muted-foreground mb-1">Next Post</div>
                                <div class="font-semibold"><?php echo get_the_title($next_post); ?></div>
                            </div>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Back to Blog -->
            <div class="text-center">
                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>"
                   class="inline-flex items-center justify-center h-11 px-8 rounded-md bg-primary text-primary-foreground hover:bg-primary/90 transition-colors">
                    <?php echo revert_get_icon('arrow-left', 'mr-2 h-5 w-5'); ?>
                    Back to Blog
                </a>
            </div>
        </div>
    </div>
</article>

<?php endwhile; ?>

<?php get_footer(); ?>
