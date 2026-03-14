<?php
/**
 * Template Name: Distributor Locator
 *
 * @package ReVert
 * @since 1.0.0
 */

get_header();
?>

<?php $distributor_title = get_field('distributor_title') ?: 'Find A Distributor'; ?>
<?php $distributor_subtitle = get_field('distributor_subtitle') ?: 'Connect with authorized ReVert distributors in your area'; ?>
<?php $distributor_search_title = get_field('distributor_search_title') ?: 'Search for Distributors'; ?>
<?php $distributor_search_subtitle = get_field('distributor_search_subtitle') ?: 'Filter by region to find distributors near you'; ?>

<section class="py-16 bg-muted" x-data="distributorLocator()">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4"><?php echo esc_html($distributor_title); ?></h1>
            <p class="text-xl text-muted-foreground">
                <?php echo esc_html($distributor_subtitle); ?>
            </p>
        </div>

        <!-- Region Filter -->
        <div class="max-w-md mx-auto mb-12">
            <div class="bg-card rounded-lg border p-6 text-center">
                <h3 class="text-xl font-bold mb-2"><?php echo esc_html($distributor_search_title); ?></h3>
                <p class="text-muted-foreground mb-4"><?php echo esc_html($distributor_search_subtitle); ?></p>

                <select x-model="selectedRegion"
                        @change="searchDistributors()"
                        class="w-full h-10 rounded-md border border-input bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-ring">
                    <option value="">All Regions</option>
                    <?php
                    $regions = get_terms(array(
                        'taxonomy' => 'reseller_region',
                        'hide_empty' => false,
                    ));
                    if (!is_wp_error($regions) && !empty($regions)) {
                        foreach ($regions as $region) {
                            echo '<option value="' . esc_attr($region->slug) . '">' . esc_html($region->name) . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>
        </div>

        <!-- Results -->
        <div class="grid md:grid-cols-2 gap-6" id="distributor-results">
            <p class="col-span-2 text-center text-muted-foreground py-8">Use the search above to find distributors</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
