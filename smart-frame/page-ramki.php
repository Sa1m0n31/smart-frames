<?php
get_header();
?>

<div class="modal modal--1">
    <button class="absolute top-[20px] right-[20px] color-white font-bold text-4xl lg:text-6xl border-none cursor-pointer text-white"
            onclick="hidePopup()">
        &times;
    </button>

    <video class="h-[50vh] max-h-[180px] lg:max-h-[500px] w-auto"
           controls
           src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/ramy-video.mp4">

    </video>
</div>

<div class="modal modal--2">
    <button class="absolute top-[20px] right-[20px] color-white font-bold text-4xl lg:text-6xl border-none cursor-pointer text-white"
            onclick="hidePopup()">
        &times;
    </button>

    <video class="h-[50vh] max-h-[180px] lg:max-h-[500px] w-auto"
           controls
           src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/ramy-video.mp4">

    </video>
</div>

<div class="flex flex-col lg:flex-row justify-between items-center mt-10 lg:mt-1">
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
    <div class="py-12 lg:pt-48 lg:h-120">
        <video class="w-full h-auto rounded-2xl"
               muted
               autoplay
               loop
               playsinline
               src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/ramy-video.mp4">

        </video>
    </div>

    <section class="py-12 lg:py-24">
        <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-10">
            <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

            <?php echo get_field('naglowek_sekcja_1'); ?>
        </h3>

        <div class="flex flex-col lg:flex-row justify-between items-center lg:items-start mt-12 lg:mt-20 gap-4">
            <div class="bg-[#D2D2D2] rounded-2xl p-4 max-w-[300px]">
                <div class="flex justify-between items-center">
                        <span class="rounded-full w-10 h-10 bg-[#22211C] text-white flex justify-center items-center text-xl">
                            1
                        </span>

                    <button onclick="showPopup(1)"
                            class="w-[170px] h-10 border border-[#22211C] rounded-full p-4 pr-2 pl-6 flex justify-between items-center font-medium text-[#22211C] text-base">
                        Zobacz Film

                        <img class="w-6 h-6" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/btn-play.svg" alt="play" />
                    </button>
                </div>

                <h4 class="text-[#22211C] text-sn font-bold text-lg mt-4 mb-2">
                    <?php echo get_field('prostota_naglowek_1'); ?>
                </h4>

                <p class="text-[#22211C] text-base">
                    <?php echo get_field('prostota_tekst_1'); ?>
                </p>

                <img class="w-full" src="<?php echo get_field('prostota_zdjecie_1'); ?>" alt="ramki" />
            </div>

            <div class="bg-[#D2D2D2] rounded-2xl p-4 max-w-[300px]">
                <div class="flex justify-between items-center">
                        <span class="rounded-full w-10 h-10 bg-[#22211C] text-white flex justify-center items-center text-xl">
                            2
                        </span>

                    <a onclick="showPopup(2)"
                       class="w-[170px] h-10 border border-[#22211C] rounded-full p-4 pr-2 pl-6 flex justify-between items-center font-medium text-[#22211C] text-base">
                        Zobacz Film

                        <img class="w-6 h-6" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/btn-play.svg" alt="play" />
                    </a>
                </div>

                <h4 class="text-[#22211C] text-sn font-bold text-lg mt-4 mb-2">
                    <?php echo get_field('prostota_naglowek_2'); ?>
                </h4>

                <p class="text-[#22211C] text-base">
                    <?php echo get_field('prostota_tekst_2'); ?>
                </p>

                <img class="w-full" src="<?php echo get_field('prostota_zdjecie_2'); ?>" alt="ramki" />
            </div>

            <div class="bg-[#D2D2D2] rounded-2xl p-4 max-w-[300px]">
                <div class="flex justify-between items-center">
                        <span class="rounded-full w-10 h-10 bg-[#22211C] text-white flex justify-center items-center text-xl">
                            3
                        </span>
                </div>

                <h4 class="text-[#22211C] text-sn font-bold text-lg mt-4 mb-2">
                    <?php echo get_field('prostota_naglowek_3'); ?>
                </h4>

                <p class="text-[#22211C] text-base">
                    <?php echo get_field('prostota_tekst_3'); ?>
                </p>

                <img class="w-full" src="<?php echo get_field('prostota_zdjecie_3'); ?>" alt="ramki" />
            </div>
        </div>
    </section>

    <section class="py-12 lg:py-24" id="mobilnosc">
        <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-10">
            <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

            <?php echo get_field('naglowek_sekcja_2'); ?>
        </h3>

        <div class="mt-12 lg:mt-20 bg-black mx-auto max-w-[400px] lg:max-w-none rounded-2xl py-12 px-6 flex flex-col lg:flex-row justify-between items-center gap-8">
            <div class="w-full lg:w-1/3 flex flex-col justify-between items-start">
                <div class="flex flex-col gap-2">
                    <button class="border-b border-[#616161] py-3 w-full cursor-default">
                            <span class="mobility--header text-lg font-bold text-[#616161] pb-2">
                                <?php echo get_field('mobilnosc_naglowek_1'); ?>
                            </span>
                        <span class="mobility--description pt-1 text-sm text-white">
                                <?php echo get_field('mobilnosc_tekst_1'); ?>
                            </span>
                    </button>
                    <button class="border-b border-[#616161] py-3 w-full cursor-default">
                            <span class="mobility--header text-lg font-bold text-[#616161] pb-2">
                                <?php echo get_field('mobilnosc_naglowek_2'); ?>
                            </span>
                        <span class="mobility--description pt-1 text-sm text-white">
                                <?php echo get_field('mobilnosc_tekst_2'); ?>
                            </span>
                    </button>
                    <button class="border-b border-[#616161] py-3 w-full cursor-default">
                            <span class="mobility--header text-lg font-bold text-[#616161] pb-2">
                                <?php echo get_field('mobilnosc_naglowek_3'); ?>
                            </span>
                        <span class="mobility--description pt-1 text-sm text-white">
                                <?php echo get_field('mobilnosc_tekst_3'); ?>
                            </span>
                    </button>
                </div>

                <div class="flex justify-start items-center gap-2 mt-16">
                    <span class="mobility--dot block w-16 h-2 rounded-full bg-[#616161] overflow-hidden">
                        <span class="mobility--dot__inner block bg-[#D3F103] w-0 h-full"></span>
                    </span>
                    <span class="mobility--dot block w-16 h-2 rounded-full bg-[#616161] overflow-hidden">
                        <span class="mobility--dot__inner block bg-[#D3F103] w-0 h-full"></span>
                    </span>
                    <span class="mobility--dot block w-16 h-2 rounded-full bg-[#616161] overflow-hidden">
                        <span class="mobility--dot__inner block bg-[#D3F103] w-0 h-full"></span>
                    </span>
                </div>
            </div>

            <div class="w-full lg:w-2/3 h-[150px] lg:h-[400px] relative">
                <video class="mobility--video w-full rounded-2xl h-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/mobilnosc1.mp4" playsinline muted></video>
                <video class="mobility--video w-full rounded-2xl h-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/mobilnosc2.mp4" playsinline muted></video>
                <video class="mobility--video w-full rounded-2xl h-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/mobilnosc3.mp4" playsinline muted></video>
            </div>
        </div>
    </section>

    <section class="py-12 lg:py-24">
        <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-10">
            <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

            <?php echo get_field('naglowek_sekcja_3'); ?>
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

    <section class="py-12 lg:py-24">
        <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-10">
            <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

            <?php echo get_field('naglowek_sekcja_4'); ?>
        </h3>

        <div class="grid grid-cols-1 lg:grid-cols-3 items-center justify-center justify-items-center gap-4 mt-12">
            <a class="bg-black rounded-2xl p-4 lg:mb-8 tile" href="">
                <div class="flex justify-between items-center">
                        <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                            1
                        </span>

                    <img class="w-10 h-10" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-green.svg" alt="arrow" />
                </div>

                <h4 class="text-white text-sn font-bold text-lg mt-4 mb-2">
                    <?php echo get_field('rozwiazania_naglowek_1'); ?>
                </h4>

                <p class="text-white text-xs">
                    <?php echo get_field('rozwiazania_tekst_1'); ?>
                </p>

                <img class="w-full mt-8" src="<?php echo get_field('rozwiazania_zdjecie_1'); ?>" alt="ramki" />
            </a>
            <a class="bg-black rounded-2xl p-4 lg:mb-8 tile" href="">
                <div class="flex justify-between items-center">
                        <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                            2
                        </span>

                    <img class="w-10 h-10" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-green.svg" alt="arrow" />
                </div>

                <h4 class="text-white text-sn font-bold text-lg mt-4 mb-2">
                    <?php echo get_field('rozwiazania_naglowek_2'); ?>
                </h4>

                <p class="text-white text-xs">
                    <?php echo get_field('rozwiazania_tekst_2'); ?>
                </p>

                <img class="w-full mt-8" src="<?php echo get_field('rozwiazania_zdjecie_2'); ?>" alt="ramki" />
            </a>
            <a class="bg-black rounded-2xl p-4 lg:mb-8 tile" href="">
                <div class="flex justify-between items-center">
                        <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                            3
                        </span>

                    <img class="w-10 h-10" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-green.svg" alt="arrow" />
                </div>

                <h4 class="text-white text-sn font-bold text-lg mt-4 mb-2">
                    <?php echo get_field('rozwiazania_naglowek_3'); ?>
                </h4>

                <p class="text-white text-xs">
                    <?php echo get_field('rozwiazania_tekst_3'); ?>
                </p>

                <img class="w-full mt-8" src="<?php echo get_field('rozwiazania_zdjecie_3'); ?>" alt="ramki" />
            </a>
            <a class="bg-black rounded-2xl p-4 lg:mb-8 tile" href="">
                <div class="flex justify-between items-center">
                        <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                            4
                        </span>

                    <img class="w-10 h-10" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-green.svg" alt="arrow" />
                </div>

                <h4 class="text-white text-sn font-bold text-lg mt-4 mb-2">
                    <?php echo get_field('rozwiazania_naglowek_4'); ?>
                </h4>

                <p class="text-white text-xs">
                    <?php echo get_field('rozwiazania_tekst_4'); ?>
                </p>

                <img class="w-full mt-8" src="<?php echo get_field('rozwiazania_zdjecie_4'); ?>" alt="ramki" />
            </a>
            <a class="bg-black rounded-2xl p-4 lg:mb-8 tile" href="">
                <div class="flex justify-between items-center">
                        <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                            5
                        </span>

                    <img class="w-10 h-10" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-green.svg" alt="arrow" />
                </div>

                <h4 class="text-white text-sn font-bold text-lg mt-4 mb-2">
                    <?php echo get_field('rozwiazania_naglowek_5'); ?>
                </h4>

                <p class="text-white text-xs">
                    <?php echo get_field('rozwiazania_tekst_5'); ?>
                </p>

                <img class="w-full mt-8" src="<?php echo get_field('rozwiazania_zdjecie_5'); ?>" alt="ramki" />
            </a>
            <div class="bg-black rounded-2xl p-4 lg:mb-8 tile">
                <div class="flex justify-between items-center">
                        <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                            6
                        </span>
                </div>

                <h4 class="text-white text-sn font-bold text-lg mt-4 mb-2">
                    <?php echo get_field('rozwiazania_naglowek_6'); ?>
                </h4>

                <p class="text-white text-xs">
                    <?php echo get_field('rozwiazania_tekst_6'); ?>
                </p>

                <img class="w-full mt-8" src="<?php echo get_field('rozwiazania_zdjecie_6'); ?>" alt="ramki" />
            </div>
        </div>
    </section>
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
