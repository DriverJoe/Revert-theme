<?php
/**
 * Template Name: Distributor Locator
 *
 * @package ReVert
 * @since 1.0.0
 */

get_header();
?>

<section class="py-16 bg-muted" x-data="distributorLocator()">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Find A Distributor</h1>
            <p class="text-xl text-muted-foreground">
                Connect with authorized ReVert distributors in your area
            </p>
        </div>

        <!-- Search Filter -->
        <div class="max-w-2xl mx-auto mb-12">
            <div class="bg-card rounded-lg border p-6">
                <h3 class="text-xl font-bold mb-2">Search for Distributors</h3>
                <p class="text-muted-foreground mb-4">Filter by region to find distributors near you</p>

                <div class="grid md:grid-cols-2 gap-4">
                    <input type="text"
                           x-model="searchTerm"
                           placeholder="Enter your location"
                           class="w-full h-10 rounded-md border border-input bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-ring">

                    <select x-model="selectedRegion"
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

                <button @click="searchDistributors()"
                        :disabled="loading"
                        class="w-full mt-4 h-10 rounded-md bg-primary text-primary-foreground hover:bg-primary/90 transition-colors disabled:opacity-50">
                    <span x-show="!loading">Search</span>
                    <span x-show="loading">Searching...</span>
                </button>
            </div>
        </div>

        <!-- Results -->
        <div class="grid md:grid-cols-2 gap-6" id="distributor-results">
            <p class="col-span-2 text-center text-muted-foreground py-8">Use the search above to find distributors</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
