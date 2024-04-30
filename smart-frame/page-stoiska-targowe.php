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
        <img class="img" src=" <?php echo get_field('zdjecie_1'); ?>" alt="kontakt" />
    </figure>
</div>
</div>
</div>

<div class="w--narrow">
    <div class="py-16 lg:pt-48 lg:h-120">
        <video class="w-full h-auto rounded-2xl"
               playsinline
               muted
               autoplay>
            <source src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/stoiska-video.mp4" type="video/mp4">
        </video>
    </div>

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

    <section class="pt-12 lg:py-24">
        <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-10">
            <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

            <?php echo get_field('naglowek_sekcja_2'); ?>
        </h3>

        <div class="rounded-2xl mt-10 lg:mt-14 bg-[#0C0C0C] w-full p-4 lg:p-8">
            <div class="flex flex-col lg:flex-row justify-between items-start gap-4">
                <div class="w-full lg:w-3/5">
                    <h3 class="text-white font-bold text-xl">
                        <?php echo get_field('dowolnosc_naglowek'); ?>
                    </h3>
                    <div class="mt-3 text-white text-justify">
                        <?php echo get_field('dowolnosc_tekst'); ?>
                    </div>
                </div>
                <div class="w-full lg:w-2/5 flex justify-center lg:justify-end my-6 lg:my-0">
                    <a href="<?php echo get_field('dowolnosc_button_link'); ?>"
                       class="max-w-[250px] btn--arrow bg-[#D6F905] h-12 rounded-full flex justify-between items-center gap-8 text-black uppercase text-xs 2xl:text-sm py-2 pl-8 pr-2 font-medium">
                        <?php echo get_field('dowolnosc_button'); ?>
                        <img class="h-full w-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-black.svg" alt="arrow" />
                    </a>
                </div>
            </div>

            <figure class="mt-8 w-full">
                <img class="w-full" src="<?php echo get_field('dowolnosc_zdjecie'); ?>" alt="img" />
            </figure>
        </div>
    </section>

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


    <section class="py-12 lg:py-24" id="mobilnosc">
        <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-10">
            <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

            <?php echo get_field('naglowek_sekcja_4'); ?>
        </h3>

        <div class="mt-12 lg:mt-20 bg-black mx-auto max-w-[400px] lg:max-w-none rounded-2xl py-12 px-6 flex flex-col lg:flex-row justify-between items-center gap-8">
            <div class="w-full lg:w-1/3 flex flex-col justify-between items-start">
                <div class="flex flex-col gap-2">
                    <button class="border-b border-[#616161] py-3 w-full" onclick="selectMobilityVideo(0)">
                            <span class="mobility--header text-lg font-bold text-[#616161] pb-2">
                                <?php echo get_field('przewaga_naglowek_1'); ?>
                            </span>
                        <span class="mobility--description pt-1 text-sm text-white">
                                <?php echo get_field('przewaga_tekst_1'); ?>
                            </span>
                    </button>
                    <button class="border-b border-[#616161] py-3 w-full" onclick="selectMobilityVideo(1)">
                            <span class="mobility--header text-lg font-bold text-[#616161] pb-2">
                                <?php echo get_field('przewaga_naglowek_2'); ?>
                            </span>
                        <span class="mobility--description pt-1 text-sm text-white">
                                <?php echo get_field('przewaga_tekst_2'); ?>
                            </span>
                    </button>
                    <button class="border-b border-[#616161] py-3 w-full" onclick="selectMobilityVideo(2)">
                            <span class="mobility--header text-lg font-bold text-[#616161] pb-2">
                                <?php echo get_field('przewaga_naglowek_3'); ?>
                            </span>
                        <span class="mobility--description pt-1 text-sm text-white">
                                <?php echo get_field('przewaga_tekst_3'); ?>
                            </span>
                    </button>
                </div>

                <div class="flex justify-start items-center gap-2 mt-16">
                        <span class="mobility--dot block w-16 h-4 rounded-full bg-[#D3F103]">

                        </span>
                    <span class="mobility--dot block w-16 h-4 rounded-full bg-[#616161]">

                        </span>
                    <span class="mobility--dot block w-16 h-4 rounded-full bg-[#616161]">

                        </span>
                </div>
            </div>

            <div class="w-full lg:w-2/3 h-[150px] lg:h-[400px] relative">
                <video class="mobility--video w-full rounded-2xl h-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/przewaga1.mp4" playsinline autoplay muted loop></video>
                <video class="mobility--video w-full rounded-2xl h-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/przewaga2.mp4" playsinline autoplay muted loop></video>
                <video class="mobility--video w-full rounded-2xl h-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/przewaga3.mp4" playsinline autoplay muted loop></video>
            </div>
        </div>
    </section>

    <section class="py-12 lg:py-24">
        <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-10">
            <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

            <?php echo get_field('naglowek_sekcja_5'); ?>
        </h3>

        <a href="<?php echo get_field('systemy_link'); ?>"
           class="btn--arrow max-w-[300px] border-black border rounded-full h-12 px-10 mx-auto my-6 flex justify-center items-center gap-2 text-black text-lg font-bold">
            <?php echo get_field('systemy_button'); ?>

            <img class="w-8" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-long-black.svg" alt="arrow" />
        </a>

        <div class="grid grid-cols-1 lg:grid-cols-3 items-center justify-center justify-items-center gap-4 mt-12">
            <a class="bg-black rounded-2xl p-4 lg:mb-8 tile" href="">
                <div class="flex justify-between items-center">
                        <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                            1
                        </span>

                    <img class="w-10 h-10" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-green.svg" alt="arrow" />
                </div>

                <h4 class="text-white text-sn font-bold text-lg mt-4 mb-2">
                    <?php echo get_field('systemy_naglowek_1'); ?>
                </h4>

                <p class="text-white text-xs">
                    <?php echo get_field('systemy_tekst_1'); ?>
                </p>

                <img class="w-full mt-8" src="<?php echo get_field('systemy_zdjecie_1'); ?>" alt="ramki" />
            </a>
            <a class="bg-black rounded-2xl p-4 lg:mb-8 tile" href="">
                <div class="flex justify-between items-center">
                        <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                            2
                        </span>

                    <img class="w-10 h-10" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-green.svg" alt="arrow" />
                </div>

                <h4 class="text-white text-sn font-bold text-lg mt-4 mb-2">
                    <?php echo get_field('systemy_naglowek_2'); ?>
                </h4>

                <p class="text-white text-xs">
                    <?php echo get_field('systemy_tekst_2'); ?>
                </p>

                <img class="w-full mt-8" src="<?php echo get_field('systemy_zdjecie_2'); ?>" alt="ramki" />
            </a>
            <a class="bg-black rounded-2xl p-4 lg:mb-8 tile" href="">
                <div class="flex justify-between items-center">
                        <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                            3
                        </span>

                    <img class="w-10 h-10" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-green.svg" alt="arrow" />
                </div>

                <h4 class="text-white text-sn font-bold text-lg mt-4 mb-2">
                    <?php echo get_field('systemy_naglowek_3'); ?>
                </h4>

                <p class="text-white text-xs">
                    <?php echo get_field('systemy_tekst_3'); ?>
                </p>

                <img class="w-full mt-8" src="<?php echo get_field('systemy_zdjecie_3'); ?>" alt="ramki" />
            </a>
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
