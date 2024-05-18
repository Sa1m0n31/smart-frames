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
        <span class="absolute invisible carousel-title"><?php echo get_field('karuzela_naglowek_2'); ?></span>
        <span class="absolute invisible carousel-title"><?php echo get_field('karuzela_naglowek_3'); ?></span>
    </h4>

    <div class="flex gap-8 justify-center items-center mb-4">
        <button class="rounded-full w-3 h-3 bg-[#D6F905] border-2 border-[#0C0C0C] carousel-dot carousel-dot-1"></button>
        <button class="rounded-full w-3 h-3 bg-[#616161] carousel-dot carousel-dot-2"></button>
        <button class="rounded-full w-3 h-3 bg-[#616161] carousel-dot carousel-dot-2"></button>
    </div>

    <div class="flex justify-between items-center gap-4 lg:gap-12 w--middle">
        <button class="w-14 min-w-[24px] bg-transparent border-none" onclick="carouselPrev()">
            <img class="w-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-prev.svg" alt="prev" />
        </button>

        <figure class="bg-[#0C0C0C] rounded-[20px] p-6">
            <img class="w-full h-auto relative carousel-image" src="<?php echo get_field('karuzela_1') ?>" alt="carousel" />
            <img class="w-full h-auto absolute invisible carousel-image" src="<?php echo get_field('karuzela_2') ?>" alt="carousel" />
            <img class="w-full h-auto absolute invisible carousel-image" src="<?php echo get_field('karuzela_3') ?>" alt="carousel" />
        </figure>

        <button class="w-14 min-w-[24px] bg-transparent border-none rotate-180" onclick="carouselNext()">
            <img class="w-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-prev.svg" alt="prev" />
        </button>
    </div>
</div>

<div class="w--narrow">
    <section class="py-12 lg:py-24" id="mobilnosc">
        <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-10">
            <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

            Zalety
        </h3>

        <div class="mt-12 lg:mt-20 bg-black mx-auto max-w-[400px] lg:max-w-none rounded-2xl py-12 px-6 flex flex-col lg:flex-row justify-between items-center gap-8">
            <div class="w-full lg:w-1/3 flex flex-col justify-between items-start">
                <div class="flex flex-col gap-2">
                    <button class="border-b border-[#616161] py-3 w-full cursor-default">
                            <span class="mobility--header text-lg font-bold text-[#616161] pb-2">
                                <?php echo get_field('mobilnosc_naglowek_1', 10); ?>
                            </span>
                        <span class="mobility--description pt-1 text-sm text-white">
                                <?php echo get_field('mobilnosc_tekst_1', 10); ?>
                            </span>
                    </button>
                    <button class="border-b border-[#616161] py-3 w-full cursor-default">
                            <span class="mobility--header text-lg font-bold text-[#616161] pb-2">
                                <?php echo get_field('mobilnosc_naglowek_2', 10); ?>
                            </span>
                        <span class="mobility--description pt-1 text-sm text-white">
                                <?php echo get_field('mobilnosc_tekst_2', 10); ?>
                            </span>
                    </button>
                    <button class="border-b border-[#616161] py-3 w-full cursor-default">
                            <span class="mobility--header text-lg font-bold text-[#616161] pb-2">
                                <?php echo get_field('mobilnosc_naglowek_3', 10); ?>
                            </span>
                        <span class="mobility--description pt-1 text-sm text-white">
                                <?php echo get_field('mobilnosc_tekst_3', 10); ?>
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
        <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-2">
            <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

            Profile
        </h3>
        <h4 class="text-center font-bold text-base lg:text-xl">
            Aluminiowe do ram ściennych
        </h4>

        <div class="flex flex-col lg:flex-row gap-4 justify-center items-center mt-12 max-w-[1100px]">
            <?php
            $args = array(
                'post_type' => 'Profile',
                'posts_per_page' => 5
            );

            $pageName = get_the_title();

            $query = new WP_Query($args);

            if($query->have_posts()) {
                $i = 1;

                while($query->have_posts()) {
                    $query->the_post();
                    if(get_field('ramy') == $pageName) {
                        ?>

                        <!-- Popup -->
                        <div class="profilePopup modal modal--transparent modal--<?php echo $i; ?>">
                            <div class="w-[90%] max-w-[1400px] rounded-[20px] relative p-8 md:p-20 modal__inner">
                                <button onclick="closePopup()"
                                        class="text-white font-bold text-2xl lg:text-6xl absolute top-2 right-4 bg-transparent">
                                    &times;
                                </button>

                                <div class="flex justify-between items-center">
                                    <div class="w-full md:w-1/3">
                                        <h4 class="text-white font-bold text-xl mb-6">
                                            <?php echo get_field('tytul'); ?>
                                        </h4>

                                        <div class="text-white text-sm mb-6">
                                            <?php echo get_field('content'); ?>
                                        </div>

                                        <div class="flex flex-col md:flex-row justify-start items-start gap-6">
                                            <div>
                                                <a href="<?php echo get_field('specyfikacja'); ?>"
                                                   class="text-white text-xs block">
                                                    Specyfikacja >
                                                </a>
                                                <a href="<?php echo get_field('karta_katalogowa'); ?>"
                                                   class="text-white text-xs block">
                                                    Karta katalogowa >
                                                </a>
                                            </div>
                                            <div>
                                                <a href="<?php echo get_field('instrukcja'); ?>"
                                                   class="text-white text-xs block">
                                                    Instrukcja >
                                                </a>
                                                <a href="<?php echo get_field('przekroj_profilu'); ?>"
                                                   class="text-white text-xs block">
                                                    Przekrój profilu >
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden md:flex w-2/3 gap-8 justify-between items-center">
                                        <div class="w-1/2 flex flex-col gap-4 justify-center items-center">
                                            <h4 class="text-white text-center relative uppercase font-bold text-sm">
                                                <span class="popupCarouselHeader relative"><?php echo get_field('karuzela_naglowek_1'); ?></span>
                                                <span class="popupCarouselHeader absolute invisible"><?php echo get_field('karuzela_naglowek_2'); ?></span>
                                                <span class="popupCarouselHeader absolute invisible"><?php echo get_field('karuzela_naglowek_3'); ?></span>
                                            </h4>

                                            <figure class="relative">
                                                <img class="popupCarouselImage relative" src="<?php echo get_field('karuzela_zdjecie_1'); ?>" alt="img" />
                                                <img class="popupCarouselImage absolute invisible" src="<?php echo get_field('karuzela_zdjecie_2'); ?>" alt="img" />
                                                <img class="popupCarouselImage absolute invisible" src="<?php echo get_field('karuzela_zdjecie_3'); ?>" alt="img" />
                                            </figure>

                                            <div class="flex justify-center items-center gap-5">
                                                <button class="popupCarouselDot w-4 h-4 rounded-full bg-[#d6f905]" onclick="changePopupCarousel(0)"></button>
                                                <button class="popupCarouselDot w-4 h-4 rounded-full bg-white" onclick="changePopupCarousel(1)"></button>
                                                <button class="popupCarouselDot w-4 h-4 rounded-full bg-white" onclick="changePopupCarousel(2)"></button>
                                            </div>
                                        </div>

                                        <figure class="w-1/2">
                                            <img class="w-full" src="<?php echo get_field('zdjecie_2'); ?>" alt="img" />
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tile -->
                        <div onclick="displayPopup(<?php echo $i; ?>)"
                             class="bg-black rounded-2xl p-4 tile max-w-[240px] cursor-pointer">
                            <div class="flex justify-between items-center">
                                <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                                    <?php echo $i; ?>
                                </span>

                                <img class="w-10 h-10" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-up-green.svg" alt="up" />
                            </div>

                            <h4 class="text-white text-sm font-bold text-lg mt-4 mb-2">
                                <?php echo get_field('tytul'); ?>
                            </h4>

                            <p class="text-white text-xs">
                                <?php echo get_field('tekst'); ?>
                            </p>

                            <img class="w-full mt-8" src="<?php echo get_field('zdjecie'); ?>" alt="ramki" />
                        </div>

                        <?php
                        $i++;
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
