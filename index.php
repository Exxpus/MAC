<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('flex flex-col min-h-screen'); ?>>
<?php wp_body_open(); ?>

<?php
// Подключаем модули
require get_template_directory() . '/inc/components/header.php';
require get_template_directory() . '/inc/components/hero.php';
require get_template_directory() . '/inc/components/partners.php';
require get_template_directory() . '/inc/components/news.php';
require get_template_directory() . '/inc/components/footer.php';

// Выводим содержимое
mytheme_header();
?>

<main class="flex-grow">
    <?php
    mytheme_hero();
    mytheme_partners();
    mytheme_news();
    ?>
</main>

<?php
mytheme_footer();
wp_footer();
?>
</body>
</html>