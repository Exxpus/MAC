<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
// Подключаем header
require get_template_directory() . '/inc/components/header.php';
mytheme_header();
?>

<main class="container mx-auto px-4 py-8">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
    ?>
        <article class="max-w-4xl mx-auto">
            <header class="mb-8">
                <h1 class="text-4xl font-bold mb-4"><?php the_title(); ?></h1>
                <div class="text-gray-600">
                    Опубликовано: <?php the_date(); ?> 
                    Автор: <?php the_author(); ?>
                </div>
            </header>

            <?php if (has_post_thumbnail()): ?>
                <div class="mb-8">
                    <?php the_post_thumbnail('large', ['class' => 'w-full h-auto rounded-lg']); ?>
                </div>
            <?php endif; ?>

            <div class="prose max-w-none">
                <?php the_content(); ?>
            </div>

            <footer class="mt-8 pt-4 border-t border-gray-200">
                <div class="flex flex-wrap gap-2">
                    <?php
                    $categories = get_the_category();
                    if ($categories) {
                        foreach ($categories as $category) {
                            echo '<span class="bg-gray-100 px-3 py-1 rounded-full text-sm">' . esc_html($category->name) . '</span>';
                        }
                    }
                    ?>
                </div>
            </footer>
        </article>
    <?php
        endwhile;
    endif;
    ?>
</main>

<?php
// Подключаем footer
require get_template_directory() . '/inc/components/footer.php';
mytheme_footer();
wp_footer();
?>
</body>
</html> 