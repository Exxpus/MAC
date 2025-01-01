<?php
function mytheme_support() {
    // Добавляем поддержку HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    // Добавляем поддержку заголовка
    add_theme_support('title-tag');
    
    // Добавляем поддержку миниатюр
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mytheme_support');
?> 