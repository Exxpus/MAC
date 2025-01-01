<?php
function mytheme_menus() {
    // Регистрируем меню
    register_nav_menus(array(
        'header-menu' => 'Меню в шапке',
        'footer-menu' => 'Меню в подвале'
    ));
}
add_action('after_setup_theme', 'mytheme_menus');
?> 