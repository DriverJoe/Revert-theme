<?php
/**
 * Single Technical Sheet Template
 *
 * @package ReVert
 * @since 1.0.0
 */

get_header();
?>

<?php while (have_posts()) : the_post();
    $file = get_field('tech_sheet_file');
    $version = get_field('tech_sheet_version');
    $date = get_field('tech_sheet_date');
    $file_size = $file ? size_format(filesize(get_attached_file($file['ID'])), 2) : '';
?>

<section class="py-16">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <!-- Back Button -->
            <a href="<?php echo get_post_type_archive_link('revert_tech_sheet'); ?>"
               class="inline-flex items-center text-sm text-muted-foreground hover:text-primary mb-8">
                <?php echo revert_get_icon('arrow-left', 'mr-2 h-4 w-4'); ?>
                Back to Technical Sheets
            </a>

            <!-- Header -->
            <div class="bg-card rounded-lg border p-8 mb-8">
                <div class="flex items-start gap-4 mb-6">
                    <?php echo revert_get_icon('file-text', 'h-12 w-12 text-accent flex-shrink-0'); ?>
                    <div class="flex-1">
                        <h1 class="text-3xl md:text-4xl font-bold mb-2"><?php the_title(); ?></h1>

                        <div class="flex flex-wrap gap-4 text-sm text-muted-foreground">
                            <?php if ($version) : ?>
                                <span class="inline-flex items-center">
                                    <?php echo revert_get_icon('tag', 'mr-1 h-4 w-4'); ?>
                                    Version <?php echo esc_html($version); ?>
                                </span>
                            <?php endif; ?>

                            <?php if ($date) : ?>
                                <span class="inline-flex items-center">
                                    <?php echo revert_get_icon('calendar', 'mr-1 h-4 w-4'); ?>
                                    Updated <?php echo date('d/m/Y', strtotime($date)); ?>
                                </span>
                            <?php endif; ?>

                            <?php if ($file_size) : ?>
                                <span class="inline-flex items-center">
                                    <?php echo revert_get_icon('hard-drive', 'mr-1 h-4 w-4'); ?>
                                    <?php echo $file_size; ?>
                                </span>
                            <?php endif; ?>

                            <?php
                            $terms = get_the_terms(get_the_ID(), 'tech_sheet_category');
                            if ($terms && !is_wp_error($terms)) :
                            ?>
                                <span class="inline-flex items-center">
                                    <?php echo revert_get_icon('folder', 'mr-1 h-4 w-4'); ?>
                                    <?php echo esc_html($terms[0]->name); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php if ($file) : ?>
                        <a href="<?php echo esc_url($file['url']); ?>"
                           download
                           class="inline-flex items-center justify-center h-11 px-8 rounded-md bg-primary text-primary-foreground hover:bg-primary/90 transition-colors">
                            <?php echo revert_get_icon('download', 'mr-2 h-5 w-5'); ?>
                            Download PDF
                        </a>
                    <?php endif; ?>
                </div>

                <?php if (has_excerpt()) : ?>
                    <p class="text-lg text-muted-foreground">
                        <?php echo get_the_excerpt(); ?>
                    </p>
                <?php endif; ?>
            </div>

            <!-- Content -->
            <?php if (get_the_content()) : ?>
                <div class="bg-muted rounded-lg p-8 mb-8">
                    <h2 class="text-2xl font-bold mb-4">Document Information</h2>
                    <div class="prose prose-lg max-w-none">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- PDF Preview (if file exists) -->
            <?php if ($file) : ?>
                <div class="bg-card rounded-lg border p-8">
                    <h2 class="text-2xl font-bold mb-4">Document Preview</h2>
                    <div class="aspect-[8.5/11] bg-muted rounded-lg overflow-hidden">
                        <iframe src="<?php echo esc_url($file['url']); ?>#toolbar=0"
                                class="w-full h-full border-0"
                                title="PDF Preview"></iframe>
                    </div>

                    <div class="mt-6 flex justify-center gap-4">
                        <a href="<?php echo esc_url($file['url']); ?>"
                           target="_blank"
                           class="inline-flex items-center justify-center h-10 px-6 rounded-md border border-input bg-background hover:bg-accent hover:text-accent-foreground transition-colors">
                            <?php echo revert_get_icon('external-link', 'mr-2 h-4 w-4'); ?>
                            Open in New Tab
                        </a>

                        <a href="<?php echo esc_url($file['url']); ?>"
                           download
                           class="inline-flex items-center justify-center h-10 px-6 rounded-md bg-primary text-primary-foreground hover:bg-primary/90 transition-colors">
                            <?php echo revert_get_icon('download', 'mr-2 h-4 w-4'); ?>
                            Download PDF
                        </a>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Related Technical Sheets -->
            <?php
            $related_args = array(
                'post_type' => 'revert_tech_sheet',
                'posts_per_page' => 3,
                'post__not_in' => array(get_the_ID()),
            );

            if ($terms && !is_wp_error($terms)) {
                $related_args['tax_query'] = array(
                    array(
                        'taxonomy' => 'tech_sheet_category',
                        'field' => 'term_id',
                        'terms' => $terms[0]->term_id,
                    ),
                );
            }

            $related_query = new WP_Query($related_args);

            if ($related_query->have_posts()) :
            ?>
                <div class="mt-12">
                    <h2 class="text-2xl font-bold mb-6">Related Technical Sheets</h2>
                    <div class="grid md:grid-cols-3 gap-4">
                        <?php while ($related_query->have_posts()) : $related_query->the_post();
                            $related_file = get_field('tech_sheet_file');
                        ?>
                            <a href="<?php the_permalink(); ?>"
                               class="bg-card rounded-lg border p-4 hover:shadow-lg transition-shadow">
                                <?php echo revert_get_icon('file-text', 'h-8 w-8 text-accent mb-3'); ?>
                                <h3 class="font-semibold mb-2"><?php the_title(); ?></h3>
                                <?php if ($related_file) : ?>
                                    <span class="text-sm text-primary hover:underline">
                                        Download →
                                    </span>
                                <?php endif; ?>
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
