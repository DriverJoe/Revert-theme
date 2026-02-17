<!-- Mobile Sheet Menu -->
<div x-show="mobileMenuOpen"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     @click.self="mobileMenuOpen = false"
     class="fixed inset-0 z-50 lg:hidden"
     style="display: none;">

    <!-- Overlay -->
    <div class="fixed inset-0 bg-black/80"></div>

    <!-- Sheet Content -->
    <div x-show="mobileMenuOpen"
         x-transition:enter="transition ease-out duration-300 transform"
         x-transition:enter-start="translate-x-full"
         x-transition:enter-end="translate-x-0"
         x-transition:leave="transition ease-in duration-200 transform"
         x-transition:leave-start="translate-x-0"
         x-transition:leave-end="translate-x-full"
         class="fixed right-0 top-0 h-full w-[300px] bg-background p-6 shadow-lg border-l">

        <!-- Close Button -->
        <button @click="mobileMenuOpen = false" class="absolute right-4 top-4 p-2" aria-label="Close menu">
            <?php echo revert_get_icon('x', 'h-6 w-6'); ?>
        </button>

        <!-- Mobile Navigation -->
        <nav class="flex flex-col gap-4 mt-12">
            <a href="<?php echo esc_url(home_url('/')); ?>"
               class="text-lg font-semibold hover:text-primary transition-colors"
               @click="mobileMenuOpen = false">
                Home
            </a>

            <div class="flex flex-col gap-2">
                <span class="text-sm font-semibold text-muted-foreground">Products</span>
                <a href="<?php echo esc_url(home_url('/products/crop-solutions')); ?>"
                   class="text-sm pl-4 hover:text-primary transition-colors"
                   @click="mobileMenuOpen = false">
                    Crop Solutions
                </a>
                <a href="<?php echo esc_url(home_url('/products/horticulture')); ?>"
                   class="text-sm pl-4 hover:text-primary transition-colors"
                   @click="mobileMenuOpen = false">
                    Horticulture
                </a>
                <a href="<?php echo esc_url(home_url('/products/livestock')); ?>"
                   class="text-sm pl-4 hover:text-primary transition-colors"
                   @click="mobileMenuOpen = false">
                    Livestock
                </a>
                <a href="<?php echo esc_url(home_url('/products/pest-management')); ?>"
                   class="text-sm pl-4 hover:text-primary transition-colors"
                   @click="mobileMenuOpen = false">
                    Pest Management
                </a>
            </div>

            <a href="<?php echo esc_url(home_url('/distributor')); ?>"
               class="text-lg font-semibold hover:text-primary transition-colors"
               @click="mobileMenuOpen = false">
                Find A Distributor
            </a>

            <a href="<?php echo esc_url(home_url('/about')); ?>"
               class="text-lg font-semibold hover:text-primary transition-colors"
               @click="mobileMenuOpen = false">
                About Us
            </a>

            <a href="<?php echo esc_url(home_url('/contact')); ?>"
               class="text-lg font-semibold hover:text-primary transition-colors"
               @click="mobileMenuOpen = false">
                Contact Us
            </a>
        </nav>
    </div>
</div>
