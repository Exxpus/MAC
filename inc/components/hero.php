<?php
function mytheme_hero() {
    ?>
    <section class="bg-gray-900 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                <div class="lg:w-1/2">
                    <h1 class="text-5xl font-bold mb-6">
                        Международная<br>
                        академия <span class="text-[#FBC214]">связи</span>
                    </h1>
                    <p class="text-xl text-gray-300 mb-8">Подзаголовок</p>
                    <div class="flex gap-4">
                        <a href="#" class="inline-block bg-[#FBC214] text-gray-900 px-8 py-3 rounded-lg font-semibold hover:bg-[#ffd24d] transition-colors duration-200">
                            Кнопка 1
                        </a>
                        <a href="#" class="inline-block bg-transparent border-2 border-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-gray-900 transition-colors duration-200">
                            Кнопка 2
                        </a>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/Main.svg" 
                        alt="МАС Логотип" 
                        class="w-full max-w-[500px] mx-auto"
                    >
                </div>
            </div>
        </div>
    </section>
    <?php
}
?> 