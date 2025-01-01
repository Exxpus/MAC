<?php
function mytheme_enqueue_styles() {
    // Подключаем основные стили WordPress
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');
?> 