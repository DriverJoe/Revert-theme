<?php
/**
 * Template Name: About Page
 *
 * @package ReVert
 * @since 1.0.0
 */

get_header();
?>

<!-- Hero Section -->
<section class="relative py-20 md:py-28 bg-primary text-primary-foreground overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-gradient-to-br from-accent/30 to-transparent"></div>
    </div>
    <div class="container relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <p class="text-sm font-semibold uppercase tracking-wider text-secondary mb-4">Our Story</p>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                Our mission starts with our sons and daughters.
            </h1>
            <p class="text-xl md:text-2xl opacity-90 font-light">
                It's our succession.
            </p>
        </div>
    </div>
</section>

<!-- Mission Statement -->
<section class="py-16 md:py-20 bg-background">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        Bringing generational prosperity to farmers through soil regeneration.
                    </h2>
                    <div class="w-24 h-1.5 bg-accent rounded mb-6"></div>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-4">
                        We use "our" on purpose. We are parents as well. We feel we should be in this together.
                    </p>
                    <p class="text-muted-foreground leading-relaxed mb-4">
                        Soil and the communities within them are the very basis for life on this planet. As custodians of the land, the regeneration of our soil is the most important thing we can do for the next generation.
                    </p>
                    <p class="text-muted-foreground leading-relaxed">
                        If we make the choice to regenerate our soil, we believe the future will be bright. And it is not like it will take a lifetime. With ReVert we can speed up regeneration. In a few months you will begin to see the results.
                    </p>
                </div>
                <div class="relative">
                    <div class="aspect-video rounded-2xl bg-muted overflow-hidden">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                        <?php else : ?>
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-accent/20 to-secondary/20">
                                <?php echo revert_get_icon('sprout', 'h-10 w-10 text-accent/40'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- Floating stat card -->
                    <div class="hidden md:block absolute -bottom-6 -left-6 bg-card rounded-lg shadow-lg p-4 border">
                        <span class="text-2xl font-bold text-accent">10+</span>
                        <p class="text-xs text-muted-foreground">Years of Farm Research</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Soil Regeneration Matters -->
<section class="py-16 md:py-20 bg-muted">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Soil Regeneration Matters</h2>
            <p class="text-lg text-muted-foreground">
                Healthy soil is the foundation of productive farming and a sustainable future
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <div class="bg-card rounded-lg p-6 border shadow-sm hover:shadow-lg transition-shadow">
                <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center mb-4">
                    <?php echo revert_get_icon('sprout', 'h-5 w-5 text-accent'); ?>
                </div>
                <h3 class="text-lg font-bold mb-2">Visible Results Fast</h3>
                <p class="text-sm text-muted-foreground">
                    In a few months you will begin to see results. In 10 years you will look back with relief that you began your journey to becoming a soil farmer when you did.
                </p>
            </div>
            <div class="bg-card rounded-lg p-6 border shadow-sm hover:shadow-lg transition-shadow">
                <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center mb-4">
                    <?php echo revert_get_icon('shield', 'h-5 w-5 text-accent'); ?>
                </div>
                <h3 class="text-lg font-bold mb-2">Reduce Chemical Inputs</h3>
                <p class="text-sm text-muted-foreground">
                    Healthy, biologically active soil naturally reduces the need for synthetic fertilisers and pesticides. Our farmers consistently report lower input costs.
                </p>
            </div>
            <div class="bg-card rounded-lg p-6 border shadow-sm hover:shadow-lg transition-shadow">
                <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center mb-4">
                    <?php echo revert_get_icon('leaf', 'h-5 w-5 text-accent'); ?>
                </div>
                <h3 class="text-lg font-bold mb-2">Every Soil Counts</h3>
                <p class="text-sm text-muted-foreground">
                    All soil counts &mdash; home soil farmers are just as important. Every backyard gardener building their soil community is contributing to a regenerative future.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Our Approach -->
<section class="py-16 md:py-20 bg-background">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <div class="bg-card rounded-lg border p-8 md:p-12">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-wider text-accent mb-3">Our Approach</p>
                        <h2 class="text-2xl md:text-3xl font-bold mb-4">Biology-First Soil Regeneration</h2>
                        <p class="text-muted-foreground leading-relaxed mb-4">
                            Our programs use specific bacillus bacteria combined with targeted supplements to regenerate soil biology from the ground up. This isn't a quick fix &mdash; it's a proven system backed by over a decade of farm research.
                        </p>
                        <p class="text-muted-foreground leading-relaxed">
                            From livestock pasture and vegetable production to vineyards, fruit trees, and even land restoration &mdash; our biological programs integrate into your existing operations and equipment.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-muted rounded-lg p-4 text-center">
                            <?php echo revert_get_icon('microscope', 'h-5 w-5 text-accent mx-auto mb-2'); ?>
                            <p class="text-xs font-medium">Bacillus Bacteria</p>
                        </div>
                        <div class="bg-muted rounded-lg p-4 text-center">
                            <?php echo revert_get_icon('droplet', 'h-5 w-5 text-accent mx-auto mb-2'); ?>
                            <p class="text-xs font-medium">Targeted Supplements</p>
                        </div>
                        <div class="bg-muted rounded-lg p-4 text-center">
                            <?php echo revert_get_icon('shield', 'h-5 w-5 text-accent mx-auto mb-2'); ?>
                            <p class="text-xs font-medium">Certified Organic</p>
                        </div>
                        <div class="bg-muted rounded-lg p-4 text-center">
                            <?php echo revert_get_icon('trending-up', 'h-5 w-5 text-accent mx-auto mb-2'); ?>
                            <p class="text-xs font-medium">Proven Results</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Journey / Timeline -->
<section class="py-16 md:py-20 bg-muted">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">A Decade of Soil Science</h2>
            <p class="text-lg text-muted-foreground">
                Our journey from research to real-world impact
            </p>
        </div>

        <div class="max-w-3xl mx-auto">
            <div class="relative">
                <!-- Vertical line -->
                <div class="absolute left-6 top-0 bottom-0 w-0.5 bg-border hidden md:block"></div>

                <!-- Item 1 -->
                <div class="flex gap-4 md:gap-6 mb-10">
                    <div class="flex-shrink-0 w-12 h-12 rounded-full bg-accent flex items-center justify-center text-accent-foreground font-bold text-xs z-10">
                        2014
                    </div>
                    <div class="pt-2">
                        <h3 class="text-lg font-bold mb-2">The Beginning</h3>
                        <p class="text-sm text-muted-foreground">
                            Founded by a purpose-driven family passionate about soil health, ReVert began over a decade of farm research into biological soil regeneration using specific bacillus bacteria combined with targeted supplements.
                        </p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="flex gap-4 md:gap-6 mb-10">
                    <div class="flex-shrink-0 w-12 h-12 rounded-full bg-secondary flex items-center justify-center text-secondary-foreground font-bold text-xs z-10">
                        2018
                    </div>
                    <div class="pt-2">
                        <h3 class="text-lg font-bold mb-2">Proven on Farms</h3>
                        <p class="text-sm text-muted-foreground">
                            Our biological programs delivered measurable results across commercial farming operations &mdash; from a Tasmanian potato farmer achieving $300,000 in additional value to Victorian livestock operators reporting pastures that have never looked better.
                        </p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="flex gap-4 md:gap-6 mb-10">
                    <div class="flex-shrink-0 w-12 h-12 rounded-full bg-primary flex items-center justify-center text-primary-foreground font-bold text-xs z-10">
                        2022
                    </div>
                    <div class="pt-2">
                        <h3 class="text-lg font-bold mb-2">Certified Organic</h3>
                        <p class="text-sm text-muted-foreground">
                            Our core product range achieved organic certification through Southern Cross Certified (SXC), confirming what our farmers already knew &mdash; that biology-first solutions deliver real results.
                        </p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="flex gap-4 md:gap-6">
                    <div class="flex-shrink-0 w-12 h-12 rounded-full bg-accent flex items-center justify-center text-accent-foreground font-bold text-xs z-10">
                        Now
                    </div>
                    <div class="pt-2">
                        <h3 class="text-lg font-bold mb-2">The Decade of Soil</h3>
                        <p class="text-sm text-muted-foreground">
                            10 years of farm research has brought us to the place where we believe we are just getting started. This next decade is going to be the decade of soil. Farmers will all become soil experts, and with a growing network across Australia, ReVert is leading the way.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Farmer Results -->
<section class="py-16 md:py-20 bg-background">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Real Results From Real Farms</h2>
            <p class="text-lg text-muted-foreground">
                Our farmers speak for themselves
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <div class="bg-card rounded-lg border p-6 shadow-sm">
                <div class="flex items-center gap-3 mb-4">
                    <?php echo revert_get_icon('trending-up', 'h-5 w-5 text-accent'); ?>
                    <span class="text-2xl font-bold text-accent">$300k</span>
                </div>
                <p class="text-sm font-semibold mb-1">Additional Value</p>
                <p class="text-sm text-muted-foreground mb-3">
                    A Tasmanian potato farmer achieved $300,000 in additional value compared to prior years using our biological program.
                </p>
                <p class="text-xs text-muted-foreground">Potato Farming, Tasmania</p>
            </div>

            <div class="bg-card rounded-lg border p-6 shadow-sm">
                <div class="flex items-center gap-3 mb-4">
                    <?php echo revert_get_icon('sprout', 'h-5 w-5 text-accent'); ?>
                    <span class="text-2xl font-bold text-accent">2x</span>
                </div>
                <p class="text-sm font-semibold mb-1">Silage Output Doubled</p>
                <p class="text-sm text-muted-foreground mb-3">
                    A Victorian farmer doubled silage output within two years while reducing nitrogen inputs.
                </p>
                <p class="text-xs text-muted-foreground">Livestock, Victoria</p>
            </div>

            <div class="bg-card rounded-lg border p-6 shadow-sm">
                <div class="flex items-center gap-3 mb-4">
                    <?php echo revert_get_icon('leaf', 'h-5 w-5 text-accent'); ?>
                    <span class="text-2xl font-bold text-accent">Since 2015</span>
                </div>
                <p class="text-sm font-semibold mb-1">Pastures Never Looked Better</p>
                <p class="text-sm text-muted-foreground mb-3">
                    A Victorian livestock operator reports pastures have never looked better, with reduced fertiliser applications and improved animal health.
                </p>
                <p class="text-xs text-muted-foreground">Dairy, Victoria</p>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="py-16 md:py-20 bg-primary text-primary-foreground">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">What Drives Us</h2>
            <p class="text-lg opacity-80">
                Our values guide every product we develop and every farmer we work with
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-5xl mx-auto">
            <div class="rounded-lg border border-primary-foreground/10 bg-primary-foreground/5 text-center p-6">
                <div class="w-10 h-10 rounded-full bg-primary-foreground/10 flex items-center justify-center mx-auto mb-4">
                    <?php echo revert_get_icon('heart', 'h-5 w-5 text-secondary'); ?>
                </div>
                <h3 class="font-bold mb-2">Family First</h3>
                <p class="text-sm opacity-80">
                    Farm succession is critical to us all. We want prosperous farmers and a new generation coming back to the family farm.
                </p>
            </div>
            <div class="rounded-lg border border-primary-foreground/10 bg-primary-foreground/5 text-center p-6">
                <div class="w-10 h-10 rounded-full bg-primary-foreground/10 flex items-center justify-center mx-auto mb-4">
                    <?php echo revert_get_icon('microscope', 'h-5 w-5 text-secondary'); ?>
                </div>
                <h3 class="font-bold mb-2">Science-Backed</h3>
                <p class="text-sm opacity-80">
                    Our programs use specific bacillus bacteria combined with the right supplements, proven across a decade of farm research.
                </p>
            </div>
            <div class="rounded-lg border border-primary-foreground/10 bg-primary-foreground/5 text-center p-6">
                <div class="w-10 h-10 rounded-full bg-primary-foreground/10 flex items-center justify-center mx-auto mb-4">
                    <?php echo revert_get_icon('sprout', 'h-5 w-5 text-secondary'); ?>
                </div>
                <h3 class="font-bold mb-2">Regenerative</h3>
                <p class="text-sm opacity-80">
                    Building soil health that lasts for generations, not just seasons. We are custodians of the land.
                </p>
            </div>
            <div class="rounded-lg border border-primary-foreground/10 bg-primary-foreground/5 text-center p-6">
                <div class="w-10 h-10 rounded-full bg-primary-foreground/10 flex items-center justify-center mx-auto mb-4">
                    <?php echo revert_get_icon('trending-up', 'h-5 w-5 text-secondary'); ?>
                </div>
                <h3 class="font-bold mb-2">Results-Driven</h3>
                <p class="text-sm opacity-80">
                    From $300k additional value in potato farming to doubled silage output &mdash; our farmers see measurable results.
                </p>
            </div>
        </div>

        <!-- Trust Badges -->
        <div class="flex flex-wrap justify-center gap-6 mt-12 max-w-3xl mx-auto">
            <div class="flex items-center gap-2 text-sm opacity-80">
                <?php echo revert_get_icon('shield', 'h-4 w-4 text-secondary'); ?>
                <span>SXC Certified Organic</span>
            </div>
            <div class="flex items-center gap-2 text-sm opacity-80">
                <?php echo revert_get_icon('leaf', 'h-4 w-4 text-secondary'); ?>
                <span>Australian Made</span>
            </div>
            <div class="flex items-center gap-2 text-sm opacity-80">
                <?php echo revert_get_icon('microscope', 'h-4 w-4 text-secondary'); ?>
                <span>Scientifically Proven</span>
            </div>
            <div class="flex items-center gap-2 text-sm opacity-80">
                <?php echo revert_get_icon('heart', 'h-4 w-4 text-secondary'); ?>
                <span>Family Owned</span>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16 md:py-20 bg-background">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Start Your Soil Journey</h2>
            <p class="text-lg text-muted-foreground mb-8">
                Whether you're a broadacre farmer, hobby grower, or backyard gardener &mdash; all soil counts, and healthier soil starts with the right biology.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url(home_url('/products')); ?>"
                   class="inline-flex items-center justify-center h-11 px-8 rounded-md bg-accent text-accent-foreground hover:bg-accent/80 transition-all font-medium shadow-sm hover:shadow-md">
                    Explore Our Products
                    <?php echo revert_get_icon('arrow-right', 'ml-2 h-4 w-4'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>"
                   class="inline-flex items-center justify-center h-11 px-8 rounded-md border border-primary text-primary hover:bg-primary hover:text-primary-foreground transition-all font-medium">
                    Get In Touch
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
