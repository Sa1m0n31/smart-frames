<?php
get_header();
?>

<div class="flex flex-col lg:flex-row justify-between items-center mt-10 lg:mt-8">
    <div>
        <h3 class="font-bold uppercase text-white text-lg lg:text-2xl mb-4">
            <?php echo get_field('naglowek_1'); ?>
        </h3>
        <p class="text-white max-w-[400px] text-sm lg:text-base">
            <?php echo get_field('tekst_1'); ?>
        </p>
    </div>

    <figure class="max-w-[80vw] w-[450px] rounded-xl overflow-hidden translate-y-[50px] xl:mr-[120px]">
        <img class="img" src="<?php echo get_field('zdjecie_1'); ?>" alt="kontakt" />
    </figure>
</div>
</div>
</div>

<div class="w--narrow">
    <!-- SECTION -->

    <section class="py-12 lg:py-24">
        <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-10">
            <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

            <?php echo get_field('naglowek_sekcja_1'); ?>
        </h3>

        <div class="grid gap-6 grid-cols-1 lg:grid-cols-2">
            <div class="bg-[#0C0C0C] lg:mb-2 flex gap-4 justify-between items-center p-3 rounded-2xl">
                <div class="bg-[#22211C] p-1 rounded-2xl flex justify-center items-center w-16">
                    <img class="w-full" src="<?php echo get_field('atuty_ikonka_1'); ?>" alt="img" />
                </div>

                <div class="flex flex-col gap-1 justify-start items-start">
                    <h5 class="text-white text-base font-normal">
                        <?php echo get_field('atuty_naglowek_1'); ?>
                    </h5>
                    <p class="text-white text-xs">
                        <?php echo get_field('atuty_tekst_1'); ?>
                    </p>
                </div>
            </div>
            <div class="bg-[#0C0C0C] lg:mb-2 flex gap-4 justify-between items-center p-3 rounded-2xl">
                <div class="bg-[#22211C] p-1 rounded-2xl flex justify-center items-center w-16">
                    <img class="w-full" src="<?php echo get_field('atuty_ikonka_2'); ?>" alt="img" />
                </div>

                <div class="flex flex-col gap-1 justify-start items-start">
                    <h5 class="text-white text-base font-normal">
                        <?php echo get_field('atuty_naglowek_2'); ?>
                    </h5>
                    <p class="text-white text-xs">
                        <?php echo get_field('atuty_tekst_2'); ?>
                    </p>
                </div>
            </div>
            <div class="bg-[#0C0C0C] lg:mb-2 flex gap-4 justify-between items-center p-3 rounded-2xl">
                <div class="bg-[#22211C] p-1 rounded-2xl flex justify-center items-center w-16">
                    <img class="w-full" src="<?php echo get_field('atuty_ikonka_3'); ?>" alt="img" />
                </div>

                <div class="flex flex-col gap-1 justify-start items-start">
                    <h5 class="text-white text-base font-normal">
                        <?php echo get_field('atuty_naglowek_3'); ?>
                    </h5>
                    <p class="text-white text-xs">
                        <?php echo get_field('atuty_tekst_3'); ?>
                    </p>
                </div>
            </div>
            <div class="bg-[#0C0C0C] lg:mb-2 flex gap-4 justify-between items-center p-3 rounded-2xl">
                <div class="bg-[#22211C] p-1 rounded-2xl flex justify-center items-center w-16">
                    <img class="w-full" src="<?php echo get_field('atuty_ikonka_4'); ?>" alt="img" />
                </div>

                <div class="flex flex-col gap-1 justify-start items-start">
                    <h5 class="text-white text-base font-normal">
                        <?php echo get_field('atuty_naglowek_4'); ?>
                    </h5>
                    <p class="text-white text-xs">
                        <?php echo get_field('atuty_tekst_4'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- MONTAZ STOISKA -->

    <section class="py-12 lg:py-24">
        <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-10">
            <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

            <?php echo get_field('naglowek_sekcja_5'); ?>
        </h3>

        <?php echo do_shortcode('[sp_wpcarousel id="31"]'); ?>

        <div class="flex justify-end items-center mt-8">
            <a href="/realizacje"
               class="btn--arrow border-black border rounded-full h-12 px-10 flex justify-center items-center gap-2 text-black text-lg font-bold">
                <?php echo get_field('co_robimy_button', 39); ?>

                <img class="w-8" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-long-black.svg" alt="arrow" />
            </a>
        </div>
    </section>

    <section class="">
        <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-10">
            <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

            Cechy
        </h3>

        <h4 class="mb-8">
            Najedź na kafelek i sprawdź właściwości modułu
        </h4>

        <div class="bg-[#0C0C0C] rounded-[20px] p-4 lg:p-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
            <?php
            $name = get_field('nazwa');

            $args = array(
                'post_type' => 'Cechy',
                'posts_per_page' => 50
            );

            $query = new WP_Query($args);

            if($query->have_posts()) {
                while($query->have_posts()) {
                    $query->the_post();

                    $array = explode(" ", $name);

                    if(get_field('stoisko') == end($array)) {
                        ?>

                        <div class="flex flex-col gap-3 relative group">
                            <p class="hidden group-hover:block absolute -top-[10px] left-1/2 -translate-x-1/2">
                                <?php echo get_field('tooltip'); ?>
                            </p>

                            <img class="" src="<?php echo get_field('ikona'); ?>" alt="img" />

                            <p class="text-center uppercase">
                                <?php echo get_field('naglowek'); ?>
                            </p>
                        </div>

                        <?php
                    }
                }
                wp_reset_postdata();
            }
            ?>
        </div>
    </section>
</div>

<div class="w--narrow">
    <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-20">
        <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

        Akcesoria
    </h3>

    <div class="mt-10 flex justify-between items-center flex-col lg:flex-row gap-4">
        <div class="bg-black rounded-2xl p-4 tile">
            <div class="flex justify-between items-center">
                <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                    1
                </span>
            </div>

            <h4 class="text-white text-sm font-bold text-lg mt-4 mb-2">
                <?php echo get_field('akcesoria_tytul_1', 399); ?>
            </h4>

            <p class="text-white text-xs">
                <?php echo get_field('akcesoria_tekst_1', 399); ?>
            </p>

            <img class="w-full mt-8" src="<?php echo get_field('akcesoria_zdjecie_1', 399); ?>" alt="ramki" />
        </div>

        <div class="bg-black rounded-2xl p-4 tile">
            <div class="flex justify-between items-center">
                <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                    2
                </span>
            </div>

            <h4 class="text-white text-sm font-bold text-lg mt-4 mb-2">
                <?php echo get_field('akcesoria_tytul_2', 399); ?>
            </h4>

            <p class="text-white text-xs">
                <?php echo get_field('akcesoria_tekst_2', 399); ?>
            </p>

            <img class="w-full mt-8" src="<?php echo get_field('akcesoria_zdjecie_2', 399); ?>" alt="ramki" />
        </div>

        <div class="bg-black rounded-2xl p-4 tile">
            <div class="flex justify-between items-center">
                <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                    3
                </span>
            </div>

            <h4 class="text-white text-sm font-bold text-lg mt-4 mb-2">
                <?php echo get_field('akcesoria_tytul_3', 399); ?>
            </h4>

            <p class="text-white text-xs">
                <?php echo get_field('akcesoria_tekst_3', 399); ?>
            </p>

            <img class="w-full mt-8" src="<?php echo get_field('akcesoria_zdjecie_3', 399); ?>" alt="ramki" />
        </div>

        <div class="bg-black rounded-2xl p-4 tile">
            <div class="flex justify-between items-center">
                <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                    4
                </span>
            </div>

            <h4 class="text-white text-sm font-bold text-lg mt-4 mb-2">
                <?php echo get_field('akcesoria_tytul_4', 399); ?>
            </h4>

            <p class="text-white text-xs">
                <?php echo get_field('akcesoria_tekst_4', 399); ?>
            </p>

            <img class="w-full mt-8" src="<?php echo get_field('akcesoria_zdjecie_4', 399); ?>" alt="ramki" />
        </div>
    </div>
</div>

<section class="w py-20">
    <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-20">
        <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

        <?php echo get_field('naglowek_sekcja_5', 39); ?>
    </h3>

    <div class="relative w-full h-[400px] lg:h-64 rounded-[20px] overflow-hidden">
        <video class="relative contactVideo"
               src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/video-contact.mp4"
               playsinline autoplay muted loop>

        </video>

        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-[20px] py-10 px-8 lg:px-20 bg-white flex flex-col justify-center items-center">
            <p class="text-black text-center mb-3 font-bold">
                        <span class="block">
                            <?php echo get_field('kontakt_linia_1', 39); ?>
                        </span>
                <span class="block">
                            <?php echo get_field('kontakt_linia_2', 39); ?>
                        </span>
            </p>

            <a href="/kontakt"
               class="btn--arrow bg-black h-10 rounded-full flex justify-between items-center gap-8 text-white font-bold uppercase text-sm py-2 pl-4 lg:pl-12 pr-2 w-[150px] lg:w-auto">
                <?php echo get_field('kontakt_button', 39); ?>
                <img class="h-full w-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-green.svg" alt="arrow" />
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
?>
