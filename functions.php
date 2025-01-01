<?php
// Подключаем настройки темы
require get_template_directory() . '/inc/setup/enqueue.php';
require get_template_directory() . '/inc/setup/theme-support.php';
require get_template_directory() . '/inc/setup/menus.php';

// Настраиваем количество постов на странице архива
function mytheme_posts_per_page($query) {
    if (!is_admin() && $query->is_main_query() && is_archive()) {
        $query->set('posts_per_page', 9);
    }
}
add_action('pre_get_posts', 'mytheme_posts_per_page');
?>