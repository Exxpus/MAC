<?php
function mytheme_footer() {
    ?>
    <footer class="bg-gray-800 text-white p-4">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Все права защищены.</p>
                <nav class="footer-nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'container' => false,
                        'menu_class' => 'flex space-x-4',
                        'fallback_cb' => false
                    ));
                    ?>
                </nav>
            </div>
        </div>
    </footer>
    <?php
}
?> 