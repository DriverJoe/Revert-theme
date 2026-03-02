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
<section class="relative py-24 bg-primary text-primary-foreground overflow-hidden">
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
<section class="py-20 bg-background">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        Bringing generational prosperity to farmers through soil regeneration.
                    </h2>
                    <div class="w-16 h-1 bg-accent rounded mb-6"></div>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-4">
                        We use "our" on purpose. We are parents as well. We feel we should be in this together.
                    </p>
                    <p class="text-muted-foreground leading-relaxed">
                        Soil and the communities within them are the very basis for life on this planet. Soil regeneration isn't just a farming practice &mdash; it's a commitment to future generations.
                    </p>
                </div>
                <div class="relative">
                    <div class="aspect-square rounded-2xl bg-muted overflow-hidden">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                        <?php else : ?>
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-accent/20 to-secondary/20">
                                <?php echo revert_get_icon('sprout', 'h-10 w-10 text-accent/40'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- Floating stat card -->
                    <div class="absolute -bottom-6 -left-6 bg-card rounded-lg shadow-lg p-4 border">
                        <span class="text-2xl font-bold text-accent">10+</span>
                        <p class="text-xs text-muted-foreground">Years of Research</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why It Matters -->
<section class="py-20 bg-muted">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Soil Regeneration Matters</h2>
            <p class="text-lg text-muted-foreground">
                Healthy soil is the foundation of productive farming and a sustainable future
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="bg-card rounded-lg p-6 border text-center">
                <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center mx-auto mb-4">
                    <?php echo revert_get_icon('sprout', 'h-4 w-4 text-accent'); ?>
                </div>
                <h3 class="text-lg font-bold mb-2">Visible Results Fast</h3>
                <p class="text-sm text-muted-foreground">
                    Soil regeneration becomes visible in just a few months, with significant long-term benefits within a decade.
                </p>
            </div>
            <div class="bg-card rounded-lg p-6 border text-center">
                <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center mx-auto mb-4">
                    <?php echo revert_get_icon('shield', 'h-4 w-4 text-accent'); ?>
                </div>
                <h3 class="text-lg font-bold mb-2">Reduce Chemical Inputs</h3>
                <p class="text-sm text-muted-foreground">
                    Healthy, biologically active soil naturally reduces the need for synthetic fertilisers and pesticides.
                </p>
            </div>
            <div class="bg-card rounded-lg p-6 border text-center">
                <div class="w-10 h-10 rounded-full bg-accent/10 flex items-center justify-center mx-auto mb-4">
                    <?php echo revert_get_icon('leaf', 'h-4 w-4 text-accent'); ?>
                </div>
                <h3 class="text-lg font-bold mb-2">Every Soil Counts</h3>
                <p class="text-sm text-muted-foreground">
                    Home soil farmers are just as important. Every garden contributes to carbon capture and prevents chemical runoff.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Journey / Timeline -->
<section class="py-20 bg-background">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">A Decade of Soil Science</h2>
            <p class="text-lg text-muted-foreground">
                Our journey from research to real-world impact
            </p>
        </div>

        <div class="max-w-3xl mx-auto">
            <!-- Timeline items -->
            <div class="relative">
                <!-- Vertical line -->
                <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-border hidden md:block"></div>

                <!-- Item 1 -->
                <div class="flex gap-6 mb-12">
                    <div class="flex-shrink-0 w-12 h-12 rounded-full bg-accent flex items-center justify-center text-accent-foreground font-bold text-sm z-10">
                        2014
                    </div>
                    <div class="pt-3">
                        <h3 class="text-xl font-bold mb-2">The Beginning</h3>
                        <p class="text-muted-foreground">
                            Founded by a purpose-driven family passionate about soil health, ReVert began its journey into biological soil regeneration through extensive research and field trials.
                        </p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="flex gap-6 mb-12">
                    <div class="flex-shrink-0 w-12 h-12 rounded-full bg-secondary flex items-center justify-center text-secondary-foreground font-bold text-sm z-10">
                        2018
                    </div>
                    <div class="pt-3">
                        <h3 class="text-xl font-bold mb-2">Proven on Farms</h3>
                        <p class="text-muted-foreground">
                            After years of research and development, our biological products were validated across commercial farming operations throughout Victoria and beyond.
                        </p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="flex gap-6 mb-12">
                    <div class="flex-shrink-0 w-12 h-12 rounded-full bg-primary flex items-center justify-center text-primary-foreground font-bold text-sm z-10">
                        2022
                    </div>
                    <div class="pt-3">
                        <h3 class="text-xl font-bold mb-2">Certified Organic</h3>
                        <p class="text-muted-foreground">
                            Our core product range achieved organic certification, confirming what our farmers already knew &mdash; that biology-first solutions deliver real results.
                        </p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="flex gap-6">
                    <div class="flex-shrink-0 w-12 h-12 rounded-full bg-accent flex items-center justify-center text-accent-foreground font-bold text-sm z-10">
                        Now
                    </div>
                    <div class="pt-3">
                        <h3 class="text-xl font-bold mb-2">The Decade of Soil</h3>
                        <p class="text-muted-foreground">
                            We believe the next decade belongs to soil. With a growing network of farmers and distributors, ReVert is leading the charge in regenerative agriculture across Australia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="py-20 bg-primary text-primary-foreground">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">What Drives Us</h2>
            <p class="text-lg opacity-80">
                Our values guide every product we develop and every farmer we work with
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-5xl mx-auto">
            <div class="text-center p-6">
                <div class="w-10 h-10 rounded-full bg-primary-foreground/10 flex items-center justify-center mx-auto mb-4">
                    <?php echo revert_get_icon('heart', 'h-4 w-4 text-secondary'); ?>
                </div>
                <h3 class="font-bold mb-2">Family First</h3>
                <p class="text-sm opacity-80">
                    Everything we do is for the next generation of farmers and families
                </p>
            </div>
            <div class="text-center p-6">
                <div class="w-10 h-10 rounded-full bg-primary-foreground/10 flex items-center justify-center mx-auto mb-4">
                    <?php echo revert_get_icon('microscope', 'h-4 w-4 text-secondary'); ?>
                </div>
                <h3 class="font-bold mb-2">Science-Backed</h3>
                <p class="text-sm opacity-80">
                    A decade of research and field trials behind every product
                </p>
            </div>
            <div class="text-center p-6">
                <div class="w-10 h-10 rounded-full bg-primary-foreground/10 flex items-center justify-center mx-auto mb-4">
                    <?php echo revert_get_icon('sprout', 'h-4 w-4 text-secondary'); ?>
                </div>
                <h3 class="font-bold mb-2">Regenerative</h3>
                <p class="text-sm opacity-80">
                    Building soil health that lasts for generations, not just seasons
                </p>
            </div>
            <div class="text-center p-6">
                <div class="w-10 h-10 rounded-full bg-primary-foreground/10 flex items-center justify-center mx-auto mb-4">
                    <?php echo revert_get_icon('trending-up', 'h-4 w-4 text-secondary'); ?>
                </div>
                <h3 class="font-bold mb-2">Results-Driven</h3>
                <p class="text-sm opacity-80">
                    Measurable improvements in soil health, yields, and farm profitability
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-background">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Start Your Soil Journey</h2>
            <p class="text-lg text-muted-foreground mb-8">
                Whether you run a commercial farm or a backyard garden, healthier soil starts with the right biology.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url(home_url('/products')); ?>"
                   class="inline-flex items-center justify-center h-11 px-8 rounded-md bg-accent text-accent-foreground hover:bg-accent/90 transition-colors font-medium">
                    Explore Our Products
                    <?php echo revert_get_icon('arrow-right', 'ml-2 h-5 w-5'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>"
                   class="inline-flex items-center justify-center h-11 px-8 rounded-md border border-primary text-primary hover:bg-primary hover:text-primary-foreground transition-colors font-medium">
                    Get In Touch
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
