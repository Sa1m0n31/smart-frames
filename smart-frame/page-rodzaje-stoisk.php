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

<div class="w mt-24">
    <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-20">
        <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

        Rodzaje stoisk
    </h3>

    <!-- DESKTOP -->
    <div class="hidden xl:flex justify-between items-center gap-4">
        <div class="h-[700px] flex flex-col justify-start items-start pt-3 w-[215px] max-w-[215px]">
            <img class="opacity-0 w-[156px]" src="https://smartframesolutions.de/wp-content/uploads/2024/05/Tabela_Stoiska_M100.png" alt="placeholder" />

            <div class="w-full bg-[#D2D2D2] rounded-[20px] h-[500px] pt-3 pb-5 px-3 flex flex-col justify-start items-center">
                <h4 class="text-base text-center font-bold text-[#0C0C0C] h-10 mb-3 w-full">
                    Nazwa stoiska
                </h4>

                <p class="h-14 flex justify-center items-center border-b border-[#0C0C0C] text-xs text-center w-full whitespace-nowrap">
                    Szerokość ścian
                </p>
                <p class="py-2 border-b border-[#0C0C0C] text-xs text-center w-full whitespace-nowrap">
                    Wysokość ścian
                </p>
                <p class="py-2 border-b border-[#0C0C0C] text-xs text-center w-full whitespace-nowrap">
                    Maksymalna wysokość
                </p>
                <p class="py-2 border-b border-[#0C0C0C] text-xs text-center w-full whitespace-nowrap">
                    Podświetlenie wewnętrzne
                </p>
                <p class="py-2 border-b border-[#0C0C0C] text-xs text-center w-full whitespace-nowrap">
                    Podświetlenie zewnętrzne
                </p>
                <p class="py-2 border-b border-[#0C0C0C] text-xs text-center w-full whitespace-nowrap">
                    Półki zintegrowane ze ścianami
                </p>
                <p class="py-2 border-b border-[#0C0C0C] text-xs text-center w-full whitespace-nowrap">
                    Mocowanie do TV
                </p>
                <p class="py-2 border-b border-[#0C0C0C] text-xs text-center w-full whitespace-nowrap">
                    Zaplecze zamykane
                </p>
                <p class="py-2 border-b border-[#0C0C0C] text-xs text-center w-full whitespace-nowrap">
                    Rodzaj grafiki
                </p>
                <p class="py-2 border-b border-[#0C0C0C] text-xs text-center w-full whitespace-nowrap">
                    Grafika dwustronna
                </p>
            </div>
        </div>

        <?php
        $args = array(
            'post_type' => 'Stoiska',
            'posts_per_page' => 5
        );

        $query = new WP_Query($args);

        if($query->have_posts()) {
            while($query->have_posts()) {
                $query->the_post();
                ?>

                <div class="bg-[#0C0C0C] rounded-[20px] h-[700px] p-3 w-[180px] max-w-[180px]">
                    <img class="rounded-[20px] w-full" src="<?php echo get_field('zdjecie_1'); ?>" alt="img" />

                    <h4 class="text-white text-xl text-center font-bold h-10 my-3">
                        <?php echo get_field('nazwa'); ?>
                    </h4>

                    <p class="text-white text-xs h-14 border-b border-white text-center flex items-center justify-center">
                        <?php echo get_field('szerokosc_scian'); ?>
                    </p>
                    <p class="text-white text-xs py-2 border-b border-white text-center">
                        <?php echo get_field('wysokosc_scian'); ?>
                    </p>

                    <?php
                        if(get_field('maksymalna_wysokosc')) {
                            ?>
                            <p class="text-white text-xs py-2 border-b border-white text-center">
                                <?php echo get_field('maksymalna_wysokosc'); ?>
                            </p>
                            <?php
                        }
                        else {
                            ?>
                            <p class="text-white text-xs py-2 border-b border-white text-center text-[#0C0C0C]">
                                Nie
                            </p>
                            <?php
                        }
                    ?>

                    <?php
                    if(get_field('podswietlenie_wewnetrzne')) {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center">
                            <?php echo get_field('podswietlenie_wewnetrzne'); ?>
                        </p>
                        <?php
                    }
                    else {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center text-[#0C0C0C]">
                            Nie
                        </p>
                        <?php
                    }
                    ?>

                    <?php
                    if(get_field('podswietlenie_zewnetrzne')) {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center">
                            <?php echo get_field('podswietlenie_zewnetrzne'); ?>
                        </p>
                        <?php
                    }
                    else {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center text-[#0C0C0C]">
                            Nie
                        </p>
                        <?php
                    }
                    ?>

                    <?php
                    if(get_field('polki_zintegrowane_ze_scianami')) {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center">
                            <?php echo get_field('polki_zintegrowane_ze_scianami'); ?>
                        </p>
                        <?php
                    }
                    else {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center text-[#0C0C0C]">
                            Nie
                        </p>
                        <?php
                    }
                    ?>

                    <?php
                    if(get_field('mocowanie_do_tv')) {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center">
                            <?php echo get_field('mocowanie_do_tv'); ?>
                        </p>
                        <?php
                    }
                    else {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center text-[#0C0C0C]">
                            Nie
                        </p>
                        <?php
                    }
                    ?>

                    <?php
                    if(get_field('zaplecze_zamykane')) {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center">
                            <?php echo get_field('zaplecze_zamykane'); ?>
                        </p>
                        <?php
                    }
                    else {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center text-[#0C0C0C]">
                            Nie
                        </p>
                        <?php
                    }
                    ?>

                    <p class="text-white text-xs py-2 border-b border-white text-center">
                        <?php echo get_field('rodzaj_grafiki'); ?>
                    </p>

                    <?php
                    if(get_field('grafika_dwustronna')) {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center">
                            <?php echo get_field('grafika_dwustronna'); ?>
                        </p>
                        <?php
                    }
                    else {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center text-[#0C0C0C]">
                            Nie
                        </p>
                        <?php
                    }
                    ?>

                    <?php
                        if(get_field("naglowek_1")) {
                            ?>

                            <div class="flex justify-center items-center mt-12">
                                <a href="<?php echo get_post_permalink(); ?>">
                                    <img class="w-8 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-green.svg" alt="arrow" />
                                </a>
                            </div>

                            <?php
                        }
                    ?>
                </div>

                <?php
            }
            wp_reset_postdata();
        }
        ?>
    </div>

    <!-- MOBILE -->
    <div class="flex xl:hidden flex-col items-center justify-start gap-4">
        <?php
        $args = array(
            'post_type' => 'Stoiska',
            'posts_per_page' => 5
        );

        $query = new WP_Query($args);

        if($query->have_posts()) {
            while($query->have_posts()) {
                $query->the_post();
                ?>

                <div class="bg-[#0C0C0C] rounded-[20px] h-auto p-3 pb-8 w-full max-w-[400px]">
                    <img class="rounded-[20px] w-full" src="<?php echo get_field('zdjecie_1'); ?>" alt="img" />

                    <h4 class="text-white text-xl text-center font-bold h-10 my-3">
                        <?php echo get_field('nazwa'); ?>
                    </h4>

                    <p class="text-white text-xs h-20 border-b border-white text-center flex flex-col items-center justify-center">
                        <span class="text-center block pb-1 font-bold">
                            Szerokość ścian
                        </span>
                        <?php echo get_field('szerokosc_scian'); ?>
                    </p>
                    <p class="text-white text-xs py-2 border-b border-white text-center">
                        <span class="text-center block pb-1 font-bold">
                            Wysokość ścian
                        </span>
                        <?php echo get_field('wysokosc_scian'); ?>
                    </p>

                    <?php
                    if(get_field('maksymalna_wysokosc')) {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center">
                            <span class="text-center block pb-1 font-bold">
                                Szerokość ścian
                            </span>
                            <?php echo get_field('maksymalna_wysokosc'); ?>
                        </p>
                        <?php
                    }
                    else {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center">
                            <span class="text-center block pb-1 font-bold">
                                Szerokość ścian
                            </span>
                            Nie
                        </p>
                        <?php
                    }
                    ?>

                    <?php
                    if(get_field('podswietlenie_wewnetrzne')) {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center">
                            <span class="text-center block pb-1 font-bold">
                                Podświetlenie wewnętrzne
                            </span>
                            <?php echo get_field('podswietlenie_wewnetrzne'); ?>
                        </p>
                        <?php
                    }
                    else {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center text-[#0C0C0C]">
                            <span class="text-center block pb-1 font-bold">
                                Podświetlenie wewnętrzne
                            </span>
                            Nie
                        </p>
                        <?php
                    }
                    ?>

                    <?php
                    if(get_field('podswietlenie_zewnetrzne')) {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center">
                            <span class="text-center block pb-1 font-bold">
                                Podświetlenie zewnętrzne
                            </span>
                            <?php echo get_field('podswietlenie_zewnetrzne'); ?>
                        </p>
                        <?php
                    }
                    else {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center text-[#0C0C0C]">
                            <span class="text-center block pb-1 font-bold">
                                Podświetlenie zewnętrzne
                            </span>
                            Nie
                        </p>
                        <?php
                    }
                    ?>

                    <?php
                    if(get_field('polki_zintegrowane_ze_scianami')) {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center">
                            <span class="text-center block pb-1 font-bold">
                                Półki zintegrowane ze ścianami
                            </span>
                            <?php echo get_field('polki_zintegrowane_ze_scianami'); ?>
                        </p>
                        <?php
                    }
                    else {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center text-[#0C0C0C]">
                            <span class="text-center block pb-1 font-bold">
                                Półki zintegrowane ze ścianami
                            </span>
                            Nie
                        </p>
                        <?php
                    }
                    ?>

                    <?php
                    if(get_field('mocowanie_do_tv')) {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center">
                            <span class="text-center block pb-1 font-bold">
                                Mocowanie do TV
                            </span>
                            <?php echo get_field('mocowanie_do_tv'); ?>
                        </p>
                        <?php
                    }
                    else {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center text-[#0C0C0C]">
                            <span class="text-center block pb-1 font-bold">
                                Mocowanie do TV
                            </span>
                            Nie
                        </p>
                        <?php
                    }
                    ?>

                    <?php
                    if(get_field('zaplecze_zamykane')) {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center">
                            <span class="text-center block pb-1 font-bold">
                                Zaplecze zamykane
                            </span>
                            <?php echo get_field('zaplecze_zamykane'); ?>
                        </p>
                        <?php
                    }
                    else {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center text-[#0C0C0C]">
                            <span class="text-center block pb-1 font-bold">
                                Zaplecze zamykane
                            </span>
                            Nie
                        </p>
                        <?php
                    }
                    ?>

                    <p class="text-white text-xs py-2 border-b border-white text-center">
                        <span class="text-center block pb-1 font-bold">
                            Rodzaj grafiki
                        </span>
                        <?php echo get_field('rodzaj_grafiki'); ?>
                    </p>

                    <?php
                    if(get_field('grafika_dwustronna')) {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center">
                            <span class="text-center block pb-1 font-bold">
                                Grafika dwustronna
                            </span>
                            <?php echo get_field('grafika_dwustronna'); ?>
                        </p>
                        <?php
                    }
                    else {
                        ?>
                        <p class="text-white text-xs py-2 border-b border-white text-center text-[#0C0C0C]">
                            <span class="text-center block pb-1 font-bold">
                                Grafika dwustronna
                            </span>
                            Nie
                        </p>
                        <?php
                    }
                    ?>

                    <?php
                    if(get_field("naglowek_1")) {
                        ?>

                        <div class="flex justify-center items-center mt-12">
                            <a href="<?php echo get_post_permalink(); ?>">
                                <img class="w-8 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-green.svg" alt="arrow" />
                            </a>
                        </div>

                        <?php
                    }
                    ?>
                </div>

                <?php
            }
            wp_reset_postdata();
        }
        ?>
    </div>
</div>

<div class="w--narrow flex flex-col gap-24 my-44">
    <?php
    $args = array(
        'post_type' => 'Stoiska',
        'posts_per_page' => 5
    );

    $query = new WP_Query($args);

    if($query->have_posts()) {
        while($query->have_posts()) {
            $query->the_post();
            if(get_field('naglowek_1')) {
            ?>

                <div class="flex flex-col lg:flex-row justify-between items-center gap-12">
                    <div class="w-full lg:w-1/3">
                        <h3 class="font-semibold text-2xl">
                            <?php
                                echo get_field('nazwa');
                            ?>
                        </h3>
                        <p class="mt-4">
                            <?php
                                echo get_field('opis');
                            ?>
                        </p>

                        <a class="mt-8 w-[240px] border border-[#0C0C0C] h-12 rounded-full flex justify-center items-center gap-4 text-xl font-bold"
                           href="<?php echo get_post_permalink(); ?>">
                            Sprawdź

                            <img class="w-8" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-long-black.svg" alt="img" />
                        </a>
                    </div>

                    <figure class="w-full lg:w-2/3 rounded-[20px] overflow-hidden">
                        <img class="w-full" src="<?php echo get_field('zdjecie_2'); ?>" alt="img" />
                    </figure>
                </div>

            <?php
            }
        }
        wp_reset_postdata();
    }
    ?>
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
                <?php echo get_field('akcesoria_tytul_1'); ?>
            </h4>

            <p class="text-white text-xs">
                <?php echo get_field('akcesoria_tekst_1'); ?>
            </p>

            <img class="w-full mt-8" src="<?php echo get_field('akcesoria_zdjecie_1'); ?>" alt="ramki" />
        </div>

        <div class="bg-black rounded-2xl p-4 tile">
            <div class="flex justify-between items-center">
                <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                    2
                </span>
            </div>

            <h4 class="text-white text-sm font-bold text-lg mt-4 mb-2">
                <?php echo get_field('akcesoria_tytul_2'); ?>
            </h4>

            <p class="text-white text-xs">
                <?php echo get_field('akcesoria_tekst_2'); ?>
            </p>

            <img class="w-full mt-8" src="<?php echo get_field('akcesoria_zdjecie_2'); ?>" alt="ramki" />
        </div>

        <div class="bg-black rounded-2xl p-4 tile">
            <div class="flex justify-between items-center">
                <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                    3
                </span>
            </div>

            <h4 class="text-white text-sm font-bold text-lg mt-4 mb-2">
                <?php echo get_field('akcesoria_tytul_3'); ?>
            </h4>

            <p class="text-white text-xs">
                <?php echo get_field('akcesoria_tekst_3'); ?>
            </p>

            <img class="w-full mt-8" src="<?php echo get_field('akcesoria_zdjecie_3'); ?>" alt="ramki" />
        </div>

        <div class="bg-black rounded-2xl p-4 tile">
            <div class="flex justify-between items-center">
                <span class="rounded-full w-10 h-10 bg-[#21221C] text-white flex justify-center items-center text-xl">
                    4
                </span>
            </div>

            <h4 class="text-white text-sm font-bold text-lg mt-4 mb-2">
                <?php echo get_field('akcesoria_tytul_4'); ?>
            </h4>

            <p class="text-white text-xs">
                <?php echo get_field('akcesoria_tekst_4'); ?>
            </p>

            <img class="w-full mt-8" src="<?php echo get_field('akcesoria_zdjecie_4'); ?>" alt="ramki" />
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
