<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package smart-frame
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">

        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="w-full ctr">
        <div class="h-auto relative">
            <img class="img absolute top-0 left-0 w-full h-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/bg-main.jpg" alt="tlo" />
            <div class="w relative z-10 pt-8 lg:pt-12">
                <div class="flex justify-between items-center">
                    <div class="flex justify-start items-center gap-4 lg:gap-12">
                        <a href="<?php echo home_url(); ?>"
                           class="w-24 xl:w-[250px]">
                            <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/logo.svg" alt="logo" />
                        </a>

                        <div class="hidden lg:flex justify-start items-center gap-3 lg:gap-10 bg-[#21221C] h-10 lg:h-12 rounded-full px-10">
                            <a href="<?php echo get_page_link(get_page_by_title('Ramki')->ID); ?>" class="text-white font-bold text-xs xl:text-base">
                                Usługi
                            </a>
                            <a href="<?php echo get_page_link(get_page_by_title('Ramki')->ID); ?>" class="text-white font-bold text-xs xl:text-base">
                                Ramki
                            </a>
                            <a href="<?php echo get_page_link(get_page_by_title('Stoiska targowe')->ID); ?>" class="text-white font-bold text-xs xl:text-base">
                                Stoiska targowe
                            </a>
                            <a href="<?php echo get_page_link(get_page_by_title('Realizacje')->ID); ?>" class="text-white font-bold text-xs xl:text-base">
                                Realizacje
                            </a>
                        </div>
                    </div>

                    <div class="hidden lg:flex justify-end items-center gap-4">
                        <!--                    <div class="lgPicker">-->
                        <!--                        -->
                        <!--                    </div>-->

                        <a href="<?php echo get_page_link(get_page_by_title('Kontakt')->ID); ?>"
                           class="bg-white text-black w-24 lg:w-[120px] h-10 lg:h-12 rounded-full flex justify-center items-center font-bold text-xs xl:text-base">
                            Kontakt
                        </a>
                    </div>

                    <button class="header__menuBtn lg:hidden" onclick="openMenu()">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/menu.svg" alt="menu" />
                    </button>
                    <div class="mobileMenu">
                        <button class="mobileMenu__close filter" onclick="closeMenu()">
                            &times;
                        </button>

                        <div class="mobileMenu__header">
                            <img class="w-24" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/logo.svg" alt="logo" />
                        </div>

                        <a href="<?php echo get_page_link(get_page_by_title('Ramki')->ID); ?>" class="header__menu__item text-white">
                            Usługi
                        </a>
                        <a href="<?php echo get_page_link(get_page_by_title('Ramki')->ID); ?>" class="header__menu__item text-white">
                            Ramki
                        </a>
                        <a href="<?php echo get_page_link(get_page_by_title('Stoiska targowe')->ID); ?>" class="header__menu__item text-white">
                            Stoiska targowe
                        </a>
                        <a href="<?php echo get_page_link(get_page_by_title('Realizacje')->ID); ?>" class="header__menu__item text-white">
                            Realizacje
                        </a>
                    </div>
                </div>
            </div>

            <div class="w relative mt-8 lg:mt-20 flex flex-col lg:flex-row justify-between items-center gap-12 lg:gap-16 pb-28">
                <div class="w-full lg:w-2/5 flex flex-col justify-center items-center lg:block">
                    <h1 class="text-white font-bold text-3xl lg:text-4xl max-w-[400px] text-center lg:text-left">
                        Modułowe ramki Smart Frame
                    </h1>
                    <h2 class="text-white font-normal text-base lg:text-lg mt-5 mb-10 max-w-[400px] text-center lg:text-left">
                        Idealne do budowy stoisk targowych, wyposażeń sklepowych oraz reklamy.
                    </h2>
                    <div class="flex flex-col xl:flex-row justify-start items-center lg:items-start xl:items-center gap-4">
                        <a href="<?php echo get_page_link(get_page_by_title('Kontakt')->ID); ?>"
                           class="btn--arrow bg-[#D6F905] h-12 rounded-full flex justify-between items-center gap-8 text-black uppercase text-xs 2xl:text-sm py-2 pl-12 pr-2 font-medium">
                            Zamów
                            <img class="h-full w-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-black.svg" alt="arrow" />
                        </a>
                        <a href="<?php echo get_page_link(get_page_by_title('Ramki')->ID); ?>"
                           class="bg-black border border-white h-12 rounded-full flex justify-center items-center text-white uppercase text-xs 2xl:text-sm px-8">
                            Dowiedz się więcej
                        </a>
                    </div>
                </div>
                <div class="w-full lg:w-3/5 rounded-[20px] overflow-hidden">
                    <video class="w-full"
                           muted
                           autoplay
                           playsinline
                           loop
                           src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/main.mp4">

                    </video>
                </div>
            </div>
        </div>

        <section class="w py-20">
            <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-10">
                <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

                Co robimy
            </h3>

            <div class="flex flex-col lg:flex-row justify-between items-center gap-3">
                <a class="bg-black rounded-2xl p-4 tile" href="">
                    <div class="flex justify-between items-center">
                    <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                        1
                    </span>

                        <img class="w-10 h-10" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-green.svg" alt="arrow" />
                    </div>

                    <h4 class="text-white text-sn font-bold text-lg mt-4 mb-2">
                        Ramki Smart Frame
                    </h4>

                    <p class="text-white text-xs">
                        Wynajem pojedynczych, lekkich modułów Smart Frame z napinaną tkaniną.
                    </p>

                    <img class="w-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/tiles1.png" alt="ramki" />
                </a>
                <a class="bg-black rounded-2xl p-4 tile" href="">
                    <div class="flex justify-between items-center">
                    <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                        2
                    </span>

                        <img class="w-10 h-10" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-green.svg" alt="arrow" />
                    </div>

                    <h4 class="text-white text-sm font-bold text-lg mt-4 mb-2">
                        Stoiska targowe
                    </h4>

                    <p class="text-white text-xs">
                        Budowane modułowo z wykorzystaniem technologii ramek Smart Frame.
                    </p>

                    <img class="w-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/tiles2.png" alt="ramki" />
                </a>
                <div class="bg-black rounded-2xl p-4 tile">
                    <div class="flex justify-between items-center">
                    <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                        3
                    </span>
                    </div>

                    <h4 class="text-white text-sm font-bold text-lg mt-4 mb-2">
                        Druk wielkoformatowy
                    </h4>

                    <p class="text-white text-xs">
                        Zadruk materiałów i tkanin wielkoformatowych, będących elementem Smart Frame.
                    </p>

                    <img class="w-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/tiles3.png" alt="ramki" />
                </div>
                <div class="bg-black rounded-2xl p-4 tile">
                    <div class="flex justify-between items-center">
                    <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                        4
                    </span>
                    </div>

                    <h4 class="text-white text-sm font-bold text-lg mt-4 mb-2">
                        Zawiesia
                    </h4>

                    <p class="text-white text-xs">
                        Efektowne podwieszenia sufitowe z nadrukiem i opcją podświetlenia.
                    </p>

                    <img class="w-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/tiles4.png" alt="ramki" />
                </div>
                <div class="bg-black rounded-2xl p-4 tile">
                    <div class="flex justify-between items-center">
                    <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                        5
                    </span>
                    </div>

                    <h4 class="text-white text-sm font-bold text-lg mt-4 mb-2">
                        Akcesoria
                    </h4>

                    <p class="text-white text-xs">
                        Zadruk materiałów i tkanin wielkoformatowych, będących elementem Smart Frame.
                    </p>

                    <img class="w-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/tiles5.png" alt="ramki" />
                </div>
            </div>

            <div class="flex justify-end items-center mt-8">
                <a href=""
                   class="btn--arrow border-black border rounded-full h-12 px-10 flex justify-center items-center gap-2 text-black text-lg font-bold">
                    Pokaż więcej

                    <img class="w-8" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-long-black.svg" alt="arrow" />
                </a>
            </div>
        </section>

        <section class="w py-20">
            <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-lg lg:text-4xl mb-20">
                <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

                Przykładowe branże
            </h3>

            <div class="flex flex-col lg:flex-row gap-8 justify-between items-center">
                <div class="w-full lg:w-1/3 order-10 lg:-order-1">
                    <button onclick="selectTab(0)"
                            class="w-full flex justify-between items-center text-black font-bold text-lg py-4 border-b border-black">
                        <span>Witryny sklepowe</span>
                        <span class="tabs__sign">-</span>
                    </button>
                    <button onclick="selectTab(1)"
                            class="w-full flex justify-between items-center text-black font-bold text-lg py-4 border-b border-black">
                        <span>Stoiska targowe</span>
                        <span class="tabs__sign">+</span>
                    </button>
                    <button onclick="selectTab(2)"
                            class="w-full flex justify-between items-center text-black font-bold text-lg py-4 border-b border-black">
                        <span>Wyposażenie sklepów</span>
                        <span class="tabs__sign">+</span>
                    </button>
                    <button onclick="selectTab(3)"
                            class="w-full flex justify-between items-center text-black font-bold text-lg py-4 border-b border-black">
                        <span>Sale konferencyjne</span>
                        <span class="tabs__sign">+</span>
                    </button>
                    <button onclick="selectTab(4)"
                            class="w-full flex justify-between items-center text-black font-bold text-lg py-4 border-b border-black">
                        <span>Reklama</span>
                        <span class="tabs__sign">+</span>
                    </button>
                </div>

                <div class="w-full lg:w-2/3">
                    <figure class="w-full bg-black rounded-[20px] overflow-hidden relative py-10">
                        <img class="tabs__image w-[95%] h-auto relative mx-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/witryny-sklepowe.jpg" alt="img" />
                        <img class="tabs__image w-[95%] h-auto absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/witryny-sklepowe.jpg" alt="img" />
                        <img class="tabs__image w-[95%] h-auto absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/witryny-sklepowe.jpg" alt="img" />
                        <img class="tabs__image w-[95%] h-auto absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/witryny-sklepowe.jpg" alt="img" />
                        <img class="tabs__image w-[95%] h-auto absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/witryny-sklepowe.jpg" alt="img" />
                    </figure>
                </div>
            </div>
        </section>

        <section class="w py-20">
            <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-20">
                <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

                4 powody
            </h3>

            <div class="grid gap-4 grid-cols-1 md:grid-cols-2 max-w-[600px] mx-auto justify-items-center">
                <div class="box bg-[#0C0C0C] rounded-xl p-6">
                    <div class="flex gap-2 items-center justify-start">
                    <span class="flex justify-center items-center border border-white w-10 h-10 rounded-full text-white font-bold text-lg">
                        01
                    </span>

                        <span class="text-white text-base font-normal max-w-[150px]">
                        Dowolnie konfiguruj
                    </span>
                    </div>

                    <div class="relative w-full mt-4 h-44 flex justify-center items-center">
                        <p class="box__text opacity-0 text-white text-center">
                            Lorem ipsum dolor sit amet. Dowolnie konfiguruj swoje elementy.
                        </p>

                        <img class="absolute top-0 left-1/2 -translate-x-1/2 gif" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/Powody_1.gif" alt="powody" />
                    </div>
                </div>

                <div class="box bg-[#0C0C0C] rounded-xl p-6">
                    <div class="flex gap-2 items-center justify-start">
                    <span class="flex justify-center items-center border border-white w-10 h-10 rounded-full text-white font-bold text-lg">
                        02
                    </span>

                        <span class="text-white text-base font-normal max-w-[100px]">
                        Przyciągnij uwagę
                    </span>
                    </div>

                    <div class="relative w-full mt-4 h-44 flex justify-center items-center">
                        <p class="box__text opacity-0 text-white text-center">
                            Lorem ipsum dolor sit amet. Dowolnie konfiguruj swoje elementy.
                        </p>

                        <img class="absolute top-0 left-1/2 -translate-x-1/2 gif" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/Powody_2.gif" alt="powody" />
                    </div>
                </div>

                <div class="box bg-[#0C0C0C] rounded-xl p-6">
                    <div class="flex gap-2 items-center justify-start">
                    <span class="flex justify-center items-center border border-white w-10 h-10 rounded-full text-white font-bold text-lg">
                        03
                    </span>

                        <span class="text-white text-base font-normal max-w-[130px]">
                        Oszczędzaj czas i pieniądze
                    </span>
                    </div>

                    <div class="relative w-full mt-4 h-44 flex justify-center items-center">
                        <p class="box__text opacity-0 text-white text-center">
                            Lorem ipsum dolor sit amet. Dowolnie konfiguruj swoje elementy.
                        </p>

                        <img class="absolute top-0 left-1/2 -translate-x-1/2 gif" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/Powody_3.gif" alt="powody" />
                    </div>
                </div>

                <div class="box bg-[#0C0C0C] rounded-xl p-6">
                    <div class="flex gap-2 items-center justify-start">
                    <span class="flex justify-center items-center border border-white w-10 h-10 rounded-full text-white font-bold text-lg">
                        04
                    </span>

                        <span class="text-white text-base font-normal max-w-[150px]">
                        Wielokrotnie używaj
                    </span>
                    </div>

                    <div class="relative w-full mt-4 h-44 flex justify-center items-center">
                        <p class="box__text opacity-0 text-white text-center">
                            Lorem ipsum dolor sit amet. Dowolnie konfiguruj swoje elementy.
                        </p>

                        <img class="absolute top-0 left-1/2 -translate-x-1/2 gif" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/Powody_4.gif" alt="powody" />
                    </div>
                </div>
            </div>
        </section>

        <section class="w--narrow py-20">
            <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-lg lg:text-4xl mb-20">
                <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

                Sprawdź rozwiązania
            </h3>

            <div class="flex flex-col lg:flex-row justify-center items-center lg:items-start gap-4">
                <div class="bg-[#0C0C0C] rounded-[20px] p-5 max-w-[400px]">
                    <div class="flex flex-col md:flex-row justify-between items-center gap-3">
                        <h5 class="text-white font-bold text-lg text-center md:text-left">
                            Ramy<br/>
                            SMART FRAME
                        </h5>

                        <a href="mailto:smartframe@de.pl"
                           class="btn--arrow bg-[#D6F905] h-12 rounded-full flex justify-between items-center gap-8 text-black uppercase text-sm py-2 pl-12 pr-2 font-medium">
                            Sprawdź
                            <img class="h-full w-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-black.svg" alt="arrow" />
                        </a>
                    </div>

                    <p class="text-white text-sm mt-4 mb-6 text-center md:text-left">
                        Smart Frame to innowacyjny system z lekkimi aluminiowymi ramionami i elastyczną tkaniną,
                        umożliwiający prosty montaż i szybką zmianę wydruku.
                    </p>

                    <img class="w-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/solution1.png" alt="solution" />
                </div>

                <div class="bg-[#0C0C0C] rounded-[20px] p-5 max-w-[400px]">
                    <div class="flex flex-col md:flex-row justify-between items-center gap-3">
                        <h5 class="text-white font-bold text-lg text-center md:text-left">
                            Modułowe<br/>
                            Stoiska Targowe
                        </h5>

                        <a href="mailto:smartframe@de.pl"
                           class="btn--arrow bg-[#D6F905] h-12 rounded-full flex justify-between items-center gap-8 text-black uppercase text-sm py-2 pl-12 pr-2 font-medium">
                            Sprawdź
                            <img class="h-full w-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-black.svg" alt="arrow" />
                        </a>
                    </div>

                    <p class="text-white text-sm mt-4 mb-6 text-center md:text-left">
                        Wygodne systemy wystawiennicze - od projektu po realizację. Twórz niepowtarzalne stoiska
                        dopasowane do indywidualnych potrzeb.
                    </p>

                    <img class="w-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/solution2.png" alt="solution" />
                </div>
            </div>
        </section>

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
