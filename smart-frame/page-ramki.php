<?php
get_header();
?>

<div class="flex flex-col lg:flex-row justify-between items-center mt-10 lg:mt-1">
    <div>
        <h3 class="font-bold uppercase text-white text-lg lg:text-2xl mb-4">
            Ramki Smart Frame
        </h3>
        <p class="text-white max-w-[400px] text-sm lg:text-base">
            Du hast eine Frage oder möchtest eine unserer Dienstleistungen bestellen?
            Schreib uns, ruf an oder komm auf einen Kaffee vorbei!
        </p>
    </div>

    <figure class="max-w-[80vw] w-[450px] rounded-xl overflow-hidden translate-y-[50px] xl:mr-[120px]">
        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/ramy-main.png" alt="kontakt" />
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

            Prostota
        </h3>

        <div class="flex flex-col lg:flex-row justify-between items-center lg:items-start mt-12 lg:mt-20 gap-4">
            <div class="bg-[#D2D2D2] rounded-2xl p-4 max-w-[300px]">
                <div class="flex justify-between items-center">
                        <span class="rounded-full w-10 h-10 bg-[#22211C] text-white flex justify-center items-center text-xl">
                            1
                        </span>

                    <a href="#mobilnosc"
                       onclick="selectMobilityVideo(0)" class="w-[170px] h-10 border border-[#22211C] rounded-full p-4 pr-2 pl-6 flex justify-between items-center font-medium text-[#22211C] text-base">
                        Zobacz Film

                        <img class="w-6 h-6" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/btn-play.svg" alt="play" />
                    </a>
                </div>

                <h4 class="text-[#22211C] text-sn font-bold text-lg mt-4 mb-2">
                    Skręć ramę
                </h4>

                <p class="text-[#22211C] text-base">
                    Złóż ramę z profili aluminiowych i skręć ją w narożnikach.
                </p>

                <img class="w-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/prostota1.png" alt="ramki" />
            </div>

            <div class="bg-[#D2D2D2] rounded-2xl p-4 max-w-[300px]">
                <div class="flex justify-between items-center">
                        <span class="rounded-full w-10 h-10 bg-[#22211C] text-white flex justify-center items-center text-xl">
                            2
                        </span>

                    <a href="#mobilnosc"
                       onclick="selectMobilityVideo(1)"
                       class="w-[170px] h-10 border border-[#22211C] rounded-full p-4 pr-2 pl-6 flex justify-between items-center font-medium text-[#22211C] text-base">
                        Zobacz Film

                        <img class="w-6 h-6" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/btn-play.svg" alt="play" />
                    </a>
                </div>

                <h4 class="text-[#22211C] text-sn font-bold text-lg mt-4 mb-2">
                    Napnij tkaninę
                </h4>

                <p class="text-[#22211C] text-base">
                    Rozwiń tkaninę z grafiką i wepnij jej krawędzie w ramę.
                </p>

                <img class="w-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/prostota2.png" alt="ramki" />
            </div>

            <div class="bg-[#D2D2D2] rounded-2xl p-4 max-w-[300px]">
                <div class="flex justify-between items-center">
                        <span class="rounded-full w-10 h-10 bg-[#22211C] text-white flex justify-center items-center text-xl">
                            3
                        </span>
                </div>

                <h4 class="text-[#22211C] text-sn font-bold text-lg mt-4 mb-2">
                    Gotowe!
                </h4>

                <p class="text-[#22211C] text-base">
                    To wszystko! Teraz umieść ramę tam gdzie tylko chcesz!
                </p>

                <img class="w-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/prostota3.png" alt="ramki" />
            </div>
        </div>
    </section>

    <section class="py-12 lg:py-24" id="mobilnosc">
        <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-10">
            <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

            Mobilność
        </h3>

        <div class="mt-12 lg:mt-20 bg-black mx-auto max-w-[400px] lg:max-w-none rounded-2xl py-12 px-6 flex flex-col lg:flex-row justify-between items-center gap-8">
            <div class="w-full lg:w-1/3 flex flex-col justify-between items-start">
                <div class="flex flex-col gap-2">
                    <button class="border-b border-[#616161] py-3 w-full" onclick="selectMobilityVideo(0)">
                            <span class="mobility--header text-lg font-bold text-[#616161] pb-2">
                                Składanie ramy
                            </span>
                        <span class="mobility--description pt-1 text-sm text-white">
                                Intuicyjne i beznarzędziowe składanie profili.
                            </span>
                    </button>
                    <button class="border-b border-[#616161] py-3 w-full" onclick="selectMobilityVideo(1)">
                            <span class="mobility--header text-lg font-bold text-[#616161] pb-2">
                                Napinanie tkaniny
                            </span>
                        <span class="mobility--description pt-1 text-sm text-white">
                                Intuicyjne i beznarzędziowe składanie profili.
                            </span>
                    </button>
                    <button class="border-b border-[#616161] py-3 w-full" onclick="selectMobilityVideo(2)">
                            <span class="mobility--header text-lg font-bold text-[#616161] pb-2">
                                Podświetlenie LED
                            </span>
                        <span class="mobility--description pt-1 text-sm text-white">
                                Intuicyjne i beznarzędziowe składanie profili.
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
                <video class="mobility--video w-full rounded-2xl h-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/mobilnosc1.mp4" playsinline autoplay muted loop></video>
                <video class="mobility--video w-full rounded-2xl h-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/mobilnosc2.mp4" playsinline autoplay muted loop></video>
                <video class="mobility--video w-full rounded-2xl h-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/mobilnosc3.mp4" playsinline autoplay muted loop></video>
            </div>
        </div>
    </section>

    <section class="py-12 lg:py-24">
        <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-10">
            <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

            Realizacje
        </h3>

        <div class="carousel">
            <!-- TODO: plugin -->
        </div>

        <div class="flex justify-end items-center mt-8">
            <a href="/realizacje"
               class="btn--arrow border-black border rounded-full h-12 px-10 flex justify-center items-center gap-2 text-black text-lg font-bold">
                Pokaż więcej

                <img class="w-8" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-long-black.svg" alt="arrow" />
            </a>
        </div>
    </section>

    <section class="py-12 lg:py-24">
        <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-10">
            <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

            Rozwiązania
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
                    Ramy napinane wiszące
                </h4>

                <p class="text-white text-xs">
                    Wynajem pojedynczych, lekkich modułów Smart Frame z napinaną tkaniną.
                </p>

                <img class="w-full mt-8" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/rozwiazania1.png" alt="ramki" />
            </a>
            <a class="bg-black rounded-2xl p-4 lg:mb-8 tile" href="">
                <div class="flex justify-between items-center">
                        <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                            1
                        </span>

                    <img class="w-10 h-10" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-green.svg" alt="arrow" />
                </div>

                <h4 class="text-white text-sn font-bold text-lg mt-4 mb-2">
                    Ramy napinane wiszące
                </h4>

                <p class="text-white text-xs">
                    Wynajem pojedynczych, lekkich modułów Smart Frame z napinaną tkaniną.
                </p>

                <img class="w-full mt-8" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/rozwiazania1.png" alt="ramki" />
            </a>
            <a class="bg-black rounded-2xl p-4 lg:mb-8 tile" href="">
                <div class="flex justify-between items-center">
                        <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                            1
                        </span>

                    <img class="w-10 h-10" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-green.svg" alt="arrow" />
                </div>

                <h4 class="text-white text-sn font-bold text-lg mt-4 mb-2">
                    Ramy napinane wiszące
                </h4>

                <p class="text-white text-xs">
                    Wynajem pojedynczych, lekkich modułów Smart Frame z napinaną tkaniną.
                </p>

                <img class="w-full mt-8" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/rozwiazania1.png" alt="ramki" />
            </a>
            <a class="bg-black rounded-2xl p-4 lg:mb-8 tile" href="">
                <div class="flex justify-between items-center">
                        <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                            1
                        </span>

                    <img class="w-10 h-10" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-green.svg" alt="arrow" />
                </div>

                <h4 class="text-white text-sn font-bold text-lg mt-4 mb-2">
                    Ramy napinane wiszące
                </h4>

                <p class="text-white text-xs">
                    Wynajem pojedynczych, lekkich modułów Smart Frame z napinaną tkaniną.
                </p>

                <img class="w-full mt-8" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/rozwiazania1.png" alt="ramki" />
            </a>
            <a class="bg-black rounded-2xl p-4 lg:mb-8 tile" href="">
                <div class="flex justify-between items-center">
                        <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                            1
                        </span>

                    <img class="w-10 h-10" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-green.svg" alt="arrow" />
                </div>

                <h4 class="text-white text-sn font-bold text-lg mt-4 mb-2">
                    Ramy napinane wiszące
                </h4>

                <p class="text-white text-xs">
                    Wynajem pojedynczych, lekkich modułów Smart Frame z napinaną tkaniną.
                </p>

                <img class="w-full mt-8" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/rozwiazania1.png" alt="ramki" />
            </a>
            <div class="bg-black rounded-2xl p-4 lg:mb-8 tile">
                <div class="flex justify-between items-center">
                        <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                            6
                        </span>
                </div>

                <h4 class="text-white text-sn font-bold text-lg mt-4 mb-2">
                    Ramy napinane wiszące
                </h4>

                <p class="text-white text-xs">
                    Wynajem pojedynczych, lekkich modułów Smart Frame z napinaną tkaniną.
                </p>

                <img class="w-full mt-8" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/rozwiazania1.png" alt="ramki" />
            </div>
        </div>
    </section>
</div>

<section class="w py-20">
    <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-20">
        <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

        Pytania?
    </h3>

    <div class="relative w-full h-[400px] lg:h-64 rounded-[20px] overflow-hidden">
        <video class="relative contactVideo"
               src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/video-contact.mp4"
               playsinline autoplay muted loop>

        </video>

        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-[20px] py-10 px-8 lg:px-20 bg-white flex flex-col justify-center items-center">
            <p class="text-black text-center mb-3 font-bold">
                <span class="block">Chcesz o coś zapytac?</span>
                <span class="block">Jesteśmy dla Ciebie</span>
            </p>

            <a href="mailto:smartframe@de.pl"
               class="btn--arrow bg-black h-10 rounded-full flex justify-between items-center gap-8 text-white font-bold uppercase text-sm py-2 pl-4 lg:pl-12 pr-2 w-[150px] lg:w-auto">
                Kontakt
                <img class="h-full w-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-green.svg" alt="arrow" />
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
?>
