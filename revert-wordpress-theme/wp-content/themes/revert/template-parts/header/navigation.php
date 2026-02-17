<nav class="container flex h-16 items-center justify-between" x-data="{ openMenu: null }">
    <!-- Logo -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center space-x-2">
        <span class="text-2xl font-bold text-primary">ReVert</span>
    </a>

    <!-- Desktop Navigation -->
    <div class="hidden lg:flex items-center gap-1">
        <!-- Products Dropdown -->
        <div class="relative"
             @mouseenter="openMenu = 'products'"
             @mouseleave="openMenu = null">
            <button class="inline-flex h-9 items-center justify-center rounded-md px-4 py-2 text-sm font-medium hover:bg-accent hover:text-accent-foreground transition-colors">
                Products
                <svg class="ml-1 h-3 w-3 transition-transform" :class="{ 'rotate-180': openMenu === 'products' }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m6 9 6 6 6-6"/>
                </svg>
            </button>
            <div x-show="openMenu === 'products'"
                 x-transition:enter="transition ease-out duration-100"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-75"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="absolute left-0 top-full mt-1.5 w-[500px] rounded-md border bg-card p-4 shadow-lg"
                 style="display: none;">
                <ul class="grid grid-cols-2 gap-3">
                    <li>
                        <a href="<?php echo esc_url(home_url('/products/crop-solutions')); ?>"
                           class="block rounded-md p-3 hover:bg-accent hover:text-accent-foreground transition-colors">
                            <div class="text-sm font-medium">Crop Solutions</div>
                            <p class="text-sm text-muted-foreground">Advanced crop protection and nutrition</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/products/horticulture')); ?>"
                           class="block rounded-md p-3 hover:bg-accent hover:text-accent-foreground transition-colors">
                            <div class="text-sm font-medium">Horticulture</div>
                            <p class="text-sm text-muted-foreground">Specialized horticultural solutions</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/products/livestock')); ?>"
                           class="block rounded-md p-3 hover:bg-accent hover:text-accent-foreground transition-colors">
                            <div class="text-sm font-medium">Livestock</div>
                            <p class="text-sm text-muted-foreground">Comprehensive livestock care</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/products/pest-management')); ?>"
                           class="block rounded-md p-3 hover:bg-accent hover:text-accent-foreground transition-colors">
                            <div class="text-sm font-medium">Pest Management</div>
                            <p class="text-sm text-muted-foreground">Integrated pest solutions</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Find A Distributor -->
        <a href="<?php echo esc_url(home_url('/distributor')); ?>"
           class="inline-flex h-9 items-center justify-center rounded-md px-4 py-2 text-sm font-medium hover:bg-accent hover:text-accent-foreground transition-colors">
            Find A Distributor
        </a>

        <!-- About -->
        <a href="<?php echo esc_url(home_url('/about')); ?>"
           class="inline-flex h-9 items-center justify-center rounded-md px-4 py-2 text-sm font-medium hover:bg-accent hover:text-accent-foreground transition-colors">
            About Us
        </a>

        <!-- Contact -->
        <a href="<?php echo esc_url(home_url('/contact')); ?>"
           class="inline-flex h-11 items-center justify-center rounded-md bg-primary px-8 text-sm font-medium text-primary-foreground hover:bg-primary/90 transition-colors">
            Contact Us
        </a>
    </div>

    <!-- Mobile Menu Toggle -->
    <button @click="mobileMenuOpen = true" class="lg:hidden p-2" aria-label="Open menu">
        <?php echo revert_get_icon('menu', 'h-6 w-6'); ?>
    </button>
</nav>
