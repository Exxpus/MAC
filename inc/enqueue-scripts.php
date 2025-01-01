<?php
function mytheme_enqueue_styles() {
    // Подключаем основные стили WordPress
    wp_enqueue_style('style', get_stylesheet_uri());
    
    // Убедимся, что меню админки отображается
    show_admin_bar(true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

// Добавляем поддержку функций WordPress
function mytheme_setup() {
    // Добавляем поддержку заголовка
    add_theme_support('title-tag');
    
    // Добавляем поддержку меню админ-панели
    add_theme_support('admin-bar', array('callback' => '__return_true'));
}
add_action('after_setup_theme', 'mytheme_setup');
?> 