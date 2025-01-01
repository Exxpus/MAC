<?php
function mytheme_news() {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
    ?>
        <section class="py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold mb-8">Новости</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php
                    while ($query->have_posts()) :
                        $query->the_post();
                        ?>
                        <article class="bg-white rounded-lg shadow-md overflow-hidden">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="aspect-w-16 aspect-h-9">
                                    <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-full object-cover']); ?>
                                </div>
                            <?php endif; ?>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-3">
                                    <a href="<?php the_permalink(); ?>" class="hover:text-blue-600 transition-colors duration-200">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                <div class="text-gray-600 mb-4">
                                    <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-500">
                                        <?php echo get_the_date(); ?>
                                    </span>
                                    <a href="<?php the_permalink(); ?>" class="text-blue-600 hover:text-blue-700 transition-colors duration-200">
                                        Читать далее →
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="text-center mt-8">
                    <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" 
                       class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors duration-200">
                        Все новости
                    </a>
                </div>
            </div>
        </section>
    <?php
    endif;
}
?> 