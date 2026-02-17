<?php
/**
 * The main template file
 *
 * This is the fallback template
 *
 * @package ReVert
 * @since 1.0.0
 */

get_header();
?>

<main class="container py-16">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="text-4xl font-bold mb-4"><?php the_title(); ?></h1>
                <div class="prose prose-lg max-w-none">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
    else :
        ?>
        <p class="text-muted-foreground">No content found.</p>
        <?php
    endif;
    ?>
</main>

<?php get_footer(); ?>
