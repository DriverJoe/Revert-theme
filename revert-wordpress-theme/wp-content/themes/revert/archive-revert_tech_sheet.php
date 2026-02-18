<?php
/**
 * Technical Sheets Archive Template
 *
 * @package ReVert
 * @since 1.0.0
 */

get_header();
?>

<section class="py-16 bg-muted">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Technical Documentation</h1>
            <p class="text-xl text-muted-foreground">
                Download product specifications, safety data sheets, and technical guides
            </p>
        </div>

        <!-- Category Filter -->
        <?php
        $categories = get_terms(array(
            'taxonomy' => 'tech_sheet_category',
            'hide_empty' => true,
        ));
        if (!empty($categories) && !is_wp_error($categories)) :
        ?>
            <div class="flex flex-wrap justify-center gap-2 mb-12">
                <a href="<?php echo get_post_type_archive_link('revert_tech_sheet'); ?>"
                   class="inline-flex items-center justify-center h-9 px-4 rounded-md border <?php echo !is_tax() ? 'bg-primary text-primary-foreground' : 'bg-background hover:bg-accent hover:text-accent-foreground'; ?>">
                    All Documents
                </a>
                <?php foreach ($categories as $category) : ?>
                    <a href="<?php echo get_term_link($category); ?>"
                       class="inline-flex items-center justify-center h-9 px-4 rounded-md border <?php echo is_tax('tech_sheet_category', $category->slug) ? 'bg-primary text-primary-foreground' : 'bg-background hover:bg-accent hover:text-accent-foreground'; ?>">
                        <?php echo esc_html($category->name); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if (have_posts()) : ?>
            <div class="max-w-4xl mx-auto">
                <div class="space-y-4">
                    <?php while (have_posts()) : the_post();
                        $file = get_field('tech_sheet_file');
                        $version = get_field('tech_sheet_version');
                        $date = get_field('tech_sheet_date');
                        $file_size = $file ? size_format(filesize(get_attached_file($file['ID'])), 2) : '';
                    ?>
                        <div class="bg-card rounded-lg border p-6 hover:shadow-lg transition-shadow">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                                <div class="flex-1">
                                    <div class="flex items-start gap-3 mb-2">
                                        <?php echo revert_get_icon('file-text', 'h-6 w-6 text-accent flex-shrink-0 mt-1'); ?>
                                        <div>
                                            <h2 class="text-xl font-bold mb-1"><?php the_title(); ?></h2>

                                            <?php if (has_excerpt()) : ?>
                                                <p class="text-sm text-muted-foreground mb-3">
                                                    <?php echo get_the_excerpt(); ?>
                                                </p>
                                            <?php endif; ?>

                                            <div class="flex flex-wrap gap-4 text-sm text-muted-foreground">
                                                <?php if ($version) : ?>
                                                    <span>Version: <?php echo esc_html($version); ?></span>
                                                <?php endif; ?>

                                                <?php if ($date) : ?>
                                                    <span>Updated: <?php echo date('d/m/Y', strtotime($date)); ?></span>
                                                <?php endif; ?>

                                                <?php if ($file_size) : ?>
                                                    <span>Size: <?php echo $file_size; ?></span>
                                                <?php endif; ?>

                                                <?php
                                                $terms = get_the_terms(get_the_ID(), 'tech_sheet_category');
                                                if ($terms && !is_wp_error($terms)) :
                                                ?>
                                                    <span>Category: <?php echo esc_html($terms[0]->name); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex gap-2">
                                    <a href="<?php the_permalink(); ?>"
                                       class="inline-flex items-center justify-center h-10 px-4 rounded-md border border-input bg-background hover:bg-accent hover:text-accent-foreground transition-colors">
                                        View Details
                                    </a>

                                    <?php if ($file) : ?>
                                        <a href="<?php echo esc_url($file['url']); ?>"
                                           download
                                           class="inline-flex items-center justify-center h-10 px-4 rounded-md bg-primary text-primary-foreground hover:bg-primary/90 transition-colors">
                                            <?php echo revert_get_icon('download', 'mr-2 h-4 w-4'); ?>
                                            Download
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
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
            </div>

        <?php else : ?>
            <div class="max-w-2xl mx-auto bg-card rounded-lg border p-8 text-center">
                <p class="text-muted-foreground">No technical sheets found.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
