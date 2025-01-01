<?php
function mytheme_header() {
    ?>
    <header class="bg-[#1B1F2B] text-white">
        <div class="container mx-auto px-4">
            <div class="flex items-center h-20">
                <!-- Логотип -->
                <a href="<?php echo home_url(); ?>" class="flex items-center gap-3 w-[200px]">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/Main.svg" 
                        alt="<?php bloginfo('name'); ?>" 
                        class="w-10 h-10"
                    >
                    <span class="font-bold text-xl">MAC</span>
                </a>

                <!-- Основное меню (по центру) -->
                <nav class="hidden md:block flex-1">
                    <div class="flex justify-center">
                        <div class="inline-flex items-center bg-[#252935] rounded-full">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'header-menu',
                                'container' => false,
                                'menu_class' => 'header-nav-menu',
                                'fallback_cb' => false,
                                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                                'link_before' => '<span>',
                                'link_after' => '</span>'
                            ));
                            ?>
                        </div>
                    </div>
                </nav>

                <!-- Пустой блок для баланса -->
                <div class="w-[200px] flex justify-end">
                    <button class="md:hidden p-2" id="mobile-menu-button">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Мобильное меню -->
            <div class="md:hidden hidden" id="mobile-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container' => false,
                    'menu_class' => 'py-4 space-y-2',
                    'fallback_cb' => false
                ));
                ?>
            </div>
        </div>
    </header>

    <script>
        document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
            document.getElementById('mobile-menu')?.classList.toggle('hidden');
        });
    </script>
    <?php
}
?> 