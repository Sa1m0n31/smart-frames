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

<div class="w--middle flex flex-col justify-start items-center my-24">
    <h4 class="bg-[#0C0C0C] rounded-[20px] px-16 py-6 flex justify-center items-center mb-14">
        <span class="relative carousel-title"><?php echo get_field('karuzela_naglowek_1'); ?></span>
        <span class="absolute carousel-title"><?php echo get_field('karuzela_naglowek_2'); ?></span>
        <span class="absolute carousel-title"><?php echo get_field('karuzela_naglowek_3'); ?></span>
    </h4>

    <div class="flex gap-8 justify-center items-center">
        <button class="rounded-full w-3 h-3 bg-[#616161] carousel-dot carousel-dot-1"></button>
        <button class="rounded-full w-3 h-3 bg-[#616161] carousel-dot carousel-dot-2"></button>
        <button class="rounded-full w-3 h-3 bg-[#616161] carousel-dot carousel-dot-2"></button>
    </div>

    <div class="flex justify-between items-center gap-12 w--middle">
        <button class="w-8 bg-transparent border-none" onclick="carouselPrev()">
            <img class="w-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-prev.svg" alt="prev" />
        </button>

        <figure class="bg-[#0C0C0C] rounded-[20px] p-6">
            <img class="w-full h-auto relative carousel-image" src="<?php echo get_field('karuzela_1') ?>" alt="carousel" />
            <img class="w-full h-auto absolute carousel-image" src="<?php echo get_field('karuzela_2') ?>" alt="carousel" />
            <img class="w-full h-auto absolute carousel-image" src="<?php echo get_field('karuzela_3') ?>" alt="carousel" />
        </figure>

        <button class="w-8 bg-transparent border-none rotate-180" onclick="carouselNext()">
            <img class="w-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-prev.svg" alt="prev" />
        </button>
    </div>
</div>

<div class="w-narrow">
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

    <section class="py-12 lg:py-24" id="mobilnosc">
        <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-10">
            <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

            Profile
        </h3>
        <h4 class="text-center font-bold text-base lg:text-xl">
            Aluminiowe do ram ściennych
        </h4>

        <div class="flex flex-col lg:flex-row gap-4 justify-between items-start">

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
