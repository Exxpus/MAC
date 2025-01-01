<?php
/*
Template Name: Страница новостей
*/
?>
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
    <header class="mb-8">
        <h1 class="text-4xl font-bold mb-4">Новости</h1>
    </header>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 9,
            'paged' => $paged
        );
        
        $news_query = new WP_Query($args);
        
        if ($news_query->have_posts()) :
            while ($news_query->have_posts()) :
                $news_query->the_post();
                ?>
                <article class="bg-white rounded-lg shadow-md overflow-hidden">
                    <?php if (has_post_thumbnail()): ?>
                        <a href="<?php the_permalink(); ?>" class="block">
                            <?php the_post_thumbnail('medium', ['class' => 'w-full h-48 object-cover']); ?>
                        </a>
                    <?php endif; ?>
                    
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">
                            <a href="<?php the_permalink(); ?>" class="hover:text-blue-600 transition-colors duration-200">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div class="text-gray-600 mb-4 text-sm">
                            <?php echo get_the_date(); ?>
                        </div>
                        <div class="text-gray-700 mb-4">
                            <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-200">
                            Читать далее
                        </a>
                    </div>
                </article>
                <?php
            endwhile;
            ?>
            
            <div class="col-span-full flex justify-center gap-2 mt-8">
                <?php
                echo paginate_links(array(
                    'total' => $news_query->max_num_pages,
                    'prev_text' => '&laquo; Предыдущая',
                    'next_text' => 'Следующая &raquo;'
                ));
                ?>
            </div>
            
            <?php
            wp_reset_postdata();
        else :
            echo '<p class="col-span-full text-center">Записей не найдено.</p>';
        endif;
        ?>
    </div>
</main>

<?php
// Подключаем footer
require get_template_directory() . '/inc/components/footer.php';
mytheme_footer();
wp_footer();
?>
</body>
</html> 