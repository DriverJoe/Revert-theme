<?php
/**
 * Template Name: Commercial Applications
 *
 * @package ReVert
 * @since 1.0.0
 */

get_header();
?>

<!-- Hero Section -->
<section class="relative bg-primary overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-gradient-to-br from-accent/30 to-transparent"></div>
    </div>

    <div class="container relative z-10">
        <div class="text-center text-primary-foreground" style="padding-top: 8rem; padding-bottom: 5rem;">
            <h1 class="font-bold max-w-4xl mx-auto leading-tight" style="font-size: clamp(2.5rem, 6vw, 5rem); margin-bottom: 1.5rem; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">
                <?php echo esc_html('Commercial Applications'); ?>
            </h1>
            <p class="max-w-3xl mx-auto" style="font-size: clamp(1.1rem, 2.5vw, 1.5rem); opacity: 0.95; margin-bottom: 2.5rem; text-shadow: 0 1px 10px rgba(0,0,0,0.2);">
                <?php echo esc_html('Professional-grade biological solutions for turf management, sports surfaces and land restoration. Lower costs, better results.'); ?>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url(home_url('/contact')); ?>"
                   class="inline-flex items-center justify-center rounded-md bg-secondary text-secondary-foreground hover:bg-secondary/80 transition-colors font-medium text-lg"
                   style="padding: 0.85rem 2.75rem;">
                    <?php echo esc_html('Get Started'); ?>
                    <?php echo revert_get_icon('arrow-right', 'ml-2 h-5 w-5'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/distributor')); ?>"
                   class="inline-flex items-center justify-center rounded-md border border-primary-foreground/40 text-primary-foreground hover:bg-primary-foreground hover:text-primary transition-colors font-medium text-lg"
                   style="padding: 0.85rem 2.75rem;">
                    <?php echo esc_html('Find A Distributor'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Sub-category Cards Grid -->
<section class="py-20 bg-background">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3rem;">
            <h2 class="text-4xl font-bold" style="margin-bottom: 0.75rem;">Commercial Solutions</h2>
            <p class="text-lg text-muted-foreground" style="max-width: 600px; margin: 0 auto;">Programs built for turf professionals, golf courses and restoration projects</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            <!-- Turf Card -->
            <a href="#turf"
               class="group bg-card rounded-2xl border shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden" style="display: flex; flex-direction: column;">
                <div class="text-center" style="padding: 2rem 1.5rem; flex-grow: 1; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                    <div class="w-14 h-14 rounded-full bg-accent/10 flex items-center justify-center group-hover:bg-accent/20 transition-colors" style="margin-bottom: 1.25rem;">
                        <?php echo revert_get_icon('sprout', 'h-7 w-7 text-accent'); ?>
                    </div>
                    <h3 class="font-bold text-xl text-foreground group-hover:text-accent transition-colors" style="margin-bottom: 0.5rem;">
                        <?php echo esc_html('Turf'); ?>
                    </h3>
                    <p class="text-sm text-muted-foreground" style="margin: 0;">
                        <?php echo esc_html('Commercial turf management solutions that reduce chemical inputs and deliver healthier, more resilient playing surfaces.'); ?>
                    </p>
                </div>
            </a>

            <!-- Golf Courses & Bowling Greens Card -->
            <a href="#golf-courses"
               class="group bg-card rounded-2xl border shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden" style="display: flex; flex-direction: column;">
                <div class="text-center" style="padding: 2rem 1.5rem; flex-grow: 1; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                    <div class="w-14 h-14 rounded-full bg-accent/10 flex items-center justify-center group-hover:bg-accent/20 transition-colors" style="margin-bottom: 1.25rem;">
                        <?php echo revert_get_icon('shield', 'h-7 w-7 text-accent'); ?>
                    </div>
                    <h3 class="font-bold text-xl text-foreground group-hover:text-accent transition-colors" style="margin-bottom: 0.5rem;">
                        <?php echo esc_html('Golf Courses & Bowling Greens'); ?>
                    </h3>
                    <p class="text-sm text-muted-foreground" style="margin: 0;">
                        <?php echo esc_html('Maintain premium playing surfaces with biological programs that cut costs and improve turf health year-round.'); ?>
                    </p>
                </div>
            </a>

            <!-- Regeneration & Restoration Card -->
            <a href="#regeneration"
               class="group bg-card rounded-2xl border shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden" style="display: flex; flex-direction: column;">
                <div class="text-center" style="padding: 2rem 1.5rem; flex-grow: 1; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                    <div class="w-14 h-14 rounded-full bg-accent/10 flex items-center justify-center group-hover:bg-accent/20 transition-colors" style="margin-bottom: 1.25rem;">
                        <?php echo revert_get_icon('leaf', 'h-7 w-7 text-accent'); ?>
                    </div>
                    <h3 class="font-bold text-xl text-foreground group-hover:text-accent transition-colors" style="margin-bottom: 0.5rem;">
                        <?php echo esc_html('Regeneration & Restoration Projects'); ?>
                    </h3>
                    <p class="text-sm text-muted-foreground" style="margin: 0;">
                        <?php echo esc_html('Rebuild degraded soils and establish healthy ecosystems faster with proven biological soil treatments.'); ?>
                    </p>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Detail Section: Turf -->
<section id="turf" class="py-16 md:py-20" style="background-color: hsl(90,12%,95%);">
    <div class="container">
        <div class="max-w-4xl mx-auto" style="margin-bottom: 3rem;">
            <div class="flex items-center gap-3" style="margin-bottom: 1rem;">
                <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center">
                    <?php echo revert_get_icon('sprout', 'h-5 w-5 text-accent'); ?>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold"><?php echo esc_html('Turf'); ?></h2>
            </div>
            <p class="text-lg text-muted-foreground" style="max-width: 700px;">
                <?php echo esc_html('Keep commercial turf in top condition while cutting your chemical spend. Our biological programs build stronger root systems and healthier soil, so your turf handles traffic, heat and drought better.'); ?>
            </p>

            <!-- Key Benefits -->
            <ul style="list-style: none; padding: 0; margin: 1.5rem 0 0 0;">
                <li class="text-sm" style="padding: 0.5rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                    <?php echo revert_get_icon('trending-up', 'h-4 w-4 text-accent'); ?>
                    <span>Reduce chemical fertiliser and pesticide costs across your turf program</span>
                </li>
                <li class="text-sm" style="padding: 0.5rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                    <?php echo revert_get_icon('sprout', 'h-4 w-4 text-accent'); ?>
                    <span>Stronger root development and improved stress tolerance</span>
                </li>
                <li class="text-sm" style="padding: 0.5rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                    <?php echo revert_get_icon('droplet', 'h-4 w-4 text-accent'); ?>
                    <span>Apply with standard spray equipment — no special gear needed</span>
                </li>
            </ul>
        </div>

        <!-- Recommended Products -->
        <h3 class="text-2xl font-bold" style="margin-bottom: 1.5rem;">Recommended Products</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-card rounded-lg border p-6">
                <h4 class="font-bold text-xl" style="margin-bottom: 0.75rem;"><?php echo esc_html('Bac 5'); ?></h4>
                <p class="text-sm text-muted-foreground" style="margin-bottom: 1rem;">5-strain biological blend for soil regeneration and turf performance</p>
                <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0;">
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('trending-up', 'h-4 w-4 text-accent'); ?>
                        <span>Reduce fertiliser costs significantly</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('sprout', 'h-4 w-4 text-accent'); ?>
                        <span>Improved soil biology and structure</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('droplet', 'h-4 w-4 text-accent'); ?>
                        <span>Available in liquid and granule formats</span>
                    </li>
                </ul>
                <a href="<?php echo esc_url(home_url('/products/bac-5')); ?>" class="text-sm font-semibold text-accent" style="text-decoration: none;"><?php echo esc_html('View Product'); ?> &rarr;</a>
            </div>
            <div class="bg-card rounded-lg border p-6">
                <h4 class="font-bold text-xl" style="margin-bottom: 0.75rem;"><?php echo esc_html('Seaweed'); ?></h4>
                <p class="text-sm text-muted-foreground" style="margin-bottom: 1rem;">Organic seaweed fertiliser for root growth and plant resilience</p>
                <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0;">
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('trending-up', 'h-4 w-4 text-accent'); ?>
                        <span>Improved stress tolerance in turf</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('sprout', 'h-4 w-4 text-accent'); ?>
                        <span>Enhanced root zone activity</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('droplet', 'h-4 w-4 text-accent'); ?>
                        <span>Compatible with all spray programs</span>
                    </li>
                </ul>
                <a href="<?php echo esc_url(home_url('/products/seaweed')); ?>" class="text-sm font-semibold text-accent" style="text-decoration: none;"><?php echo esc_html('View Product'); ?> &rarr;</a>
            </div>
            <div class="bg-card rounded-lg border p-6">
                <h4 class="font-bold text-xl" style="margin-bottom: 0.75rem;"><?php echo esc_html('BioBoost'); ?></h4>
                <p class="text-sm text-muted-foreground" style="margin-bottom: 1rem;">Plant carbon stimulant that feeds soil biology and boosts turf performance</p>
                <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0;">
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('trending-up', 'h-4 w-4 text-accent'); ?>
                        <span>Maximise nutrient uptake efficiency</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('sprout', 'h-4 w-4 text-accent'); ?>
                        <span>Stronger root development</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('droplet', 'h-4 w-4 text-accent'); ?>
                        <span>Easy application via boom spray</span>
                    </li>
                </ul>
                <a href="<?php echo esc_url(home_url('/products/bioboost')); ?>" class="text-sm font-semibold text-accent" style="text-decoration: none;"><?php echo esc_html('View Product'); ?> &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- Detail Section: Golf Courses & Bowling Greens -->
<section id="golf-courses" class="py-16 md:py-20 bg-background">
    <div class="container">
        <div class="max-w-4xl mx-auto" style="margin-bottom: 3rem;">
            <div class="flex items-center gap-3" style="margin-bottom: 1rem;">
                <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center">
                    <?php echo revert_get_icon('shield', 'h-5 w-5 text-accent'); ?>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold"><?php echo esc_html('Golf Courses & Bowling Greens'); ?></h2>
            </div>
            <p class="text-lg text-muted-foreground" style="max-width: 700px;">
                <?php echo esc_html('Premium playing surfaces demand consistent results. Our biological programs help superintendents maintain top-quality greens and fairways while reducing reliance on expensive synthetic inputs.'); ?>
            </p>

            <!-- Key Benefits -->
            <ul style="list-style: none; padding: 0; margin: 1.5rem 0 0 0;">
                <li class="text-sm" style="padding: 0.5rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                    <?php echo revert_get_icon('trending-up', 'h-4 w-4 text-accent'); ?>
                    <span>Cut turf management costs without compromising playing quality</span>
                </li>
                <li class="text-sm" style="padding: 0.5rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                    <?php echo revert_get_icon('sprout', 'h-4 w-4 text-accent'); ?>
                    <span>Healthier greens with improved disease resistance year-round</span>
                </li>
                <li class="text-sm" style="padding: 0.5rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                    <?php echo revert_get_icon('droplet', 'h-4 w-4 text-accent'); ?>
                    <span>Integrates into existing spray and granular programs</span>
                </li>
            </ul>
        </div>

        <!-- Recommended Products -->
        <h3 class="text-2xl font-bold" style="margin-bottom: 1.5rem;">Recommended Products</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-card rounded-lg border p-6">
                <h4 class="font-bold text-xl" style="margin-bottom: 0.75rem;"><?php echo esc_html('Bac 5 Granule'); ?></h4>
                <p class="text-sm text-muted-foreground" style="margin-bottom: 1rem;">Granular biological for easy broadcast application on greens and fairways</p>
                <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0;">
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('trending-up', 'h-4 w-4 text-accent'); ?>
                        <span>Reduce synthetic fertiliser spend</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('sprout', 'h-4 w-4 text-accent'); ?>
                        <span>Consistent, even coverage across playing surfaces</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('droplet', 'h-4 w-4 text-accent'); ?>
                        <span>Works with standard broadcast spreaders</span>
                    </li>
                </ul>
                <a href="<?php echo esc_url(home_url('/products/bac-5-granule')); ?>" class="text-sm font-semibold text-accent" style="text-decoration: none;"><?php echo esc_html('View Product'); ?> &rarr;</a>
            </div>
            <div class="bg-card rounded-lg border p-6">
                <h4 class="font-bold text-xl" style="margin-bottom: 0.75rem;"><?php echo esc_html('Guard'); ?></h4>
                <p class="text-sm text-muted-foreground" style="margin-bottom: 1rem;">Biological turf protector for disease suppression and plant health</p>
                <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0;">
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('trending-up', 'h-4 w-4 text-accent'); ?>
                        <span>Lower fungicide costs</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('sprout', 'h-4 w-4 text-accent'); ?>
                        <span>Stronger natural disease resistance</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('droplet', 'h-4 w-4 text-accent'); ?>
                        <span>Safe for greens and fine turf</span>
                    </li>
                </ul>
                <a href="<?php echo esc_url(home_url('/products/guard')); ?>" class="text-sm font-semibold text-accent" style="text-decoration: none;"><?php echo esc_html('View Product'); ?> &rarr;</a>
            </div>
            <div class="bg-card rounded-lg border p-6">
                <h4 class="font-bold text-xl" style="margin-bottom: 0.75rem;"><?php echo esc_html('Sequest'); ?></h4>
                <p class="text-sm text-muted-foreground" style="margin-bottom: 1rem;">Soil conditioner that improves nutrient availability and soil structure</p>
                <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0;">
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('trending-up', 'h-4 w-4 text-accent'); ?>
                        <span>Unlock tied-up nutrients in the soil</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('sprout', 'h-4 w-4 text-accent'); ?>
                        <span>Improved soil structure and drainage</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('droplet', 'h-4 w-4 text-accent'); ?>
                        <span>Compatible with existing turf programs</span>
                    </li>
                </ul>
                <a href="<?php echo esc_url(home_url('/products/sequest')); ?>" class="text-sm font-semibold text-accent" style="text-decoration: none;"><?php echo esc_html('View Product'); ?> &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- Detail Section: Regeneration & Restoration -->
<section id="regeneration" class="py-16 md:py-20" style="background-color: hsl(90,12%,95%);">
    <div class="container">
        <div class="max-w-4xl mx-auto" style="margin-bottom: 3rem;">
            <div class="flex items-center gap-3" style="margin-bottom: 1rem;">
                <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center">
                    <?php echo revert_get_icon('leaf', 'h-5 w-5 text-accent'); ?>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold"><?php echo esc_html('Regeneration & Restoration'); ?></h2>
            </div>
            <p class="text-lg text-muted-foreground" style="max-width: 700px;">
                <?php echo esc_html('Whether you are rehabilitating mine sites, restoring degraded farmland or establishing native vegetation, our biological soil treatments accelerate the process and deliver measurable results faster.'); ?>
            </p>

            <!-- Key Benefits -->
            <ul style="list-style: none; padding: 0; margin: 1.5rem 0 0 0;">
                <li class="text-sm" style="padding: 0.5rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                    <?php echo revert_get_icon('trending-up', 'h-4 w-4 text-accent'); ?>
                    <span>Speed up soil recovery and reduce project timelines</span>
                </li>
                <li class="text-sm" style="padding: 0.5rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                    <?php echo revert_get_icon('sprout', 'h-4 w-4 text-accent'); ?>
                    <span>Establish healthy soil biology from the ground up</span>
                </li>
                <li class="text-sm" style="padding: 0.5rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                    <?php echo revert_get_icon('droplet', 'h-4 w-4 text-accent'); ?>
                    <span>Scalable application for large-area restoration projects</span>
                </li>
            </ul>
        </div>

        <!-- Recommended Products -->
        <h3 class="text-2xl font-bold" style="margin-bottom: 1.5rem;">Recommended Products</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-card rounded-lg border p-6">
                <h4 class="font-bold text-xl" style="margin-bottom: 0.75rem;"><?php echo esc_html('Bac 5'); ?></h4>
                <p class="text-sm text-muted-foreground" style="margin-bottom: 1rem;">5-strain biological blend to kickstart soil biology in degraded soils</p>
                <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0;">
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('trending-up', 'h-4 w-4 text-accent'); ?>
                        <span>Fast-track soil recovery</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('sprout', 'h-4 w-4 text-accent'); ?>
                        <span>Rebuild microbial populations</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('droplet', 'h-4 w-4 text-accent'); ?>
                        <span>Liquid format for large-area spraying</span>
                    </li>
                </ul>
                <a href="<?php echo esc_url(home_url('/products/bac-5')); ?>" class="text-sm font-semibold text-accent" style="text-decoration: none;"><?php echo esc_html('View Product'); ?> &rarr;</a>
            </div>
            <div class="bg-card rounded-lg border p-6">
                <h4 class="font-bold text-xl" style="margin-bottom: 0.75rem;"><?php echo esc_html('Bio Char'); ?></h4>
                <p class="text-sm text-muted-foreground" style="margin-bottom: 1rem;">Carbon-rich soil amendment for long-term soil structure improvement</p>
                <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0;">
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('trending-up', 'h-4 w-4 text-accent'); ?>
                        <span>Improve water and nutrient retention</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('sprout', 'h-4 w-4 text-accent'); ?>
                        <span>Long-lasting soil carbon addition</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('droplet', 'h-4 w-4 text-accent'); ?>
                        <span>Ideal for degraded and compacted soils</span>
                    </li>
                </ul>
                <a href="<?php echo esc_url(home_url('/products/bio-char')); ?>" class="text-sm font-semibold text-accent" style="text-decoration: none;"><?php echo esc_html('View Product'); ?> &rarr;</a>
            </div>
            <div class="bg-card rounded-lg border p-6">
                <h4 class="font-bold text-xl" style="margin-bottom: 0.75rem;"><?php echo esc_html('Castings'); ?></h4>
                <p class="text-sm text-muted-foreground" style="margin-bottom: 1rem;">Worm castings concentrate for establishing beneficial soil organisms</p>
                <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0;">
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('trending-up', 'h-4 w-4 text-accent'); ?>
                        <span>Introduce diverse beneficial microbes</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('sprout', 'h-4 w-4 text-accent'); ?>
                        <span>Improve soil fertility naturally</span>
                    </li>
                    <li class="text-sm" style="padding: 0.35rem 0; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <?php echo revert_get_icon('droplet', 'h-4 w-4 text-accent'); ?>
                        <span>Works alongside Bac 5 and Bio Char</span>
                    </li>
                </ul>
                <a href="<?php echo esc_url(home_url('/products/castings')); ?>" class="text-sm font-semibold text-accent" style="text-decoration: none;"><?php echo esc_html('View Product'); ?> &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- Why ReVert for Commercial -->
<section class="py-20" style="background-color: white;">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3rem;">
            <h2 class="text-4xl font-bold" style="margin-bottom: 0.75rem;">Why ReVert for Commercial?</h2>
            <p class="text-lg text-muted-foreground" style="max-width: 600px; margin: 0 auto;">Practical results for turf professionals and restoration projects</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-card rounded-lg border p-6 text-center">
                <div style="display: flex; justify-content: center; margin-bottom: 0;">
                    <?php echo revert_get_icon('trending-up', 'h-8 w-8 text-accent'); ?>
                </div>
                <h3 class="font-bold text-lg" style="margin: 1rem 0 0.5rem;">Cost Effective</h3>
                <p class="text-sm text-muted-foreground">Significantly reduce chemical input costs across your operation</p>
            </div>
            <div class="bg-card rounded-lg border p-6 text-center">
                <div style="display: flex; justify-content: center; margin-bottom: 0;">
                    <?php echo revert_get_icon('sprout', 'h-8 w-8 text-accent'); ?>
                </div>
                <h3 class="font-bold text-lg" style="margin: 1rem 0 0.5rem;">Proven Performance</h3>
                <p class="text-sm text-muted-foreground">Trusted by golf courses, councils and turf professionals Australia-wide</p>
            </div>
            <div class="bg-card rounded-lg border p-6 text-center">
                <div style="display: flex; justify-content: center; margin-bottom: 0;">
                    <?php echo revert_get_icon('droplet', 'h-8 w-8 text-accent'); ?>
                </div>
                <h3 class="font-bold text-lg" style="margin: 1rem 0 0.5rem;">Easy Integration</h3>
                <p class="text-sm text-muted-foreground">Works with standard spray and spreading equipment</p>
            </div>
            <div class="bg-card rounded-lg border p-6 text-center">
                <div style="display: flex; justify-content: center; margin-bottom: 0;">
                    <?php echo revert_get_icon('shield', 'h-8 w-8 text-accent'); ?>
                </div>
                <h3 class="font-bold text-lg" style="margin: 1rem 0 0.5rem;">Expert Support</h3>
                <p class="text-sm text-muted-foreground">Tailored programs designed with your turf or restoration goals in mind</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-primary text-primary-foreground">
    <div class="container text-center">
        <h2 class="text-4xl font-bold mb-6"><?php echo esc_html('Ready to Upgrade Your Commercial Program?'); ?></h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
            <?php echo esc_html('Talk to our team about a tailored solution for your operation'); ?>
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?php echo esc_url(home_url('/contact')); ?>"
               class="inline-flex items-center justify-center h-11 px-8 rounded-md bg-secondary text-secondary-foreground hover:bg-secondary/80 transition-colors">
                <?php echo esc_html('Get Started'); ?>
            </a>
            <a href="<?php echo esc_url(home_url('/distributor')); ?>"
               class="inline-flex items-center justify-center h-11 px-8 rounded-md border border-primary-foreground text-primary-foreground hover:bg-primary-foreground hover:text-primary transition-colors">
                <?php echo esc_html('Find A Distributor'); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
