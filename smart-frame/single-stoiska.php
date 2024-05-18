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

<div class="w--middle flex flex-col justify-start items-center mt-32 mb-24">
    <h4 class="bg-[#0C0C0C] rounded-[20px] px-16 py-6 flex justify-center items-center mb-14">
        <span class="relative carousel-title"><?php echo get_field('slider_tytul_1'); ?></span>
        <span class="absolute invisible carousel-title"><?php echo get_field('slider_tytul_2'); ?></span>
        <span class="absolute invisible carousel-title"><?php echo get_field('slider_tytul_3'); ?></span>
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
            <img class="w-full h-auto relative carousel-image" src="<?php echo get_field('slider_zdjecie_1') ?>" alt="carousel" />
            <img class="w-full h-auto absolute invisible carousel-image" src="<?php echo get_field('slider_zdjecie_2') ?>" alt="carousel" />
            <img class="w-full h-auto absolute invisible carousel-image" src="<?php echo get_field('slider_zdjecie_3') ?>" alt="carousel" />
        </figure>

        <button class="w-14 min-w-[24px] bg-transparent border-none rotate-180" onclick="carouselNext()">
            <img class="w-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-prev.svg" alt="prev" />
        </button>
    </div>
</div>

<div class="w--narrow">
    <section class="py-12 lg:py-24">
        <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-10">
            <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

            Atuty
        </h3>

        <div class="grid gap-6 grid-cols-1 lg:grid-cols-2">
            <div class="bg-[#0C0C0C] lg:mb-2 flex gap-4 justify-between items-center p-3 rounded-2xl">
                <div class="bg-[#22211C] p-1 rounded-2xl flex justify-center items-center w-16">
                    <img class="w-full" src="<?php echo get_field('atuty_ikonka_1'); ?>" alt="img" />
                </div>

                <div class="flex flex-col gap-1 justify-start items-start">
                    <h5 class="text-white text-base font-normal">
                        <?php echo get_field('atuty_tytul_1'); ?>
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
                        <?php echo get_field('atuty_tytul_2'); ?>
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
                        <?php echo get_field('atuty_tytul_3'); ?>
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
                        <?php echo get_field('atuty_tytul_4'); ?>
                    </h5>
                    <p class="text-white text-xs">
                        <?php echo get_field('atuty_tekst_4'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="w--middle py-12 lg:py-24">
    <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-10">
        <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

        Montaż stoiska
    </h3>

    <div class="flex justify-between items-center gap-4 lg:gap-12 w--middle">
        <button class="w-14 min-w-[24px] bg-transparent border-none" onclick="montagePrev()">
            <img class="w-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-prev.svg" alt="prev" />
        </button>

        <div class="bg-[#0C0C0C] rounded-[20px] py-12 px-6">
            <?php
            $name = get_field('nazwa');
            $i = 0;

            $args = array(
                'post_type' => 'Montaz',
                'posts_per_page' => 150,
                'meta_key' => 'krok',
                'orderby' => 'meta_value',
                'order' => 'ASC'
            );

            $query = new WP_Query($args);

            if($query->have_posts()) {
                while($query->have_posts()) {
                    $query->the_post();

                    $array = explode(" ", $name);

                    if(get_field('stoisko') == end($array)) {
                        ?>

                        <div class="montage montage--<?php echo $i; ?> flex flex-col lg:flex-row justify-between gap-5 <?php if($i == 0) {
                            echo 'relative';
                        } else {
                            echo 'absolute invisible';
                        }?>">
                            <div class="w-full lg:w-1/3 flex flex-col justify-between items-center lg:items-start">
                                <div>
                                    <h3 class="text-center lg:text-left text-white uppercase font-bold text-base lg:text-xl">
                                        <?php echo get_field('krok'); ?>
                                    </h3>
                                    <h4 class="text-center lg:text-left text-white font-bold text-sm mt-4 mb-6">
                                        <?php echo get_field('naglowek'); ?>
                                    </h4>
                                    <p class="text-center lg:text-left text-white text-sm">
                                        <?php echo get_field('opis'); ?>
                                    </p>
                                </div>

                                <div class="mt-8 lg:mt-24 flex justify-center lg:justify-start items-center gap-4">
                                    <?php
                                    $innerArgs = array(
                                        'post_type' => 'Montaz',
                                        'posts_per_page' => 150
                                    );

                                    $j = 0;
                                    $innerQuery = new WP_Query($innerArgs);

                                    if($innerQuery->have_posts()) {
                                        while($innerQuery->have_posts()) {
                                            $innerQuery->the_post();

                                            $innerArray = explode(" ", $name);

                                            if(get_field('stoisko') == end($innerArray)) {
                                                ?>

                                                <span class="block w-2 h-2 rounded-full <?php if($i == $j) {
                                                    echo 'bg-[#d6f905]';
                                                } else {
                                                    echo 'bg-[#616161]';
                                                }?>">

                                                </span>

                                                <?php
                                                $j++;
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="w-full lg:w-2/3 rounded-[20px] overflow-hidden">
                                <img class="w-full" src="<?php echo get_field('zdjecie') ?>" alt="img" />
                            </div>
                        </div>

                        <?php
                        $i++;
                    }
                }
                wp_reset_postdata();
            }
            ?>
        </div>

        <button class="w-14 min-w-[24px] bg-transparent border-none rotate-180" onclick="montageNext()">
            <img class="w-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-prev.svg" alt="prev" />
        </button>
    </div>
</section>

<div class="w--narrow">
    <section class="py-12 lg:py-24">
        <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-10">
            <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

            Realizacje
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

    <section class="my-24">
        <h3 class="flex justify-center items-center gap-6 uppercase text-black font-bold text-2xl lg:text-4xl mb-10">
            <img class="w-6 h-auto" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-header.svg" alt="arrow" />

            Cechy
        </h3>

        <h4 class="mb-8 font-bold text-center">
            Najedź na kafelek i sprawdź właściwości modułu
        </h4>

        <div class="bg-[#0C0C0C] rounded-[20px] px-4 py-12 lg:px-12 lg:py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-16 justify-items-center">
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

                        <div class="flex flex-col justify-start gap-3 relative max-w-[120px] group">
                            <p class="hidden group-hover:block absolute -top-[10px] left-1/2 -translate-y-full -translate-x-1/2 bg-[#616161] text-white p-4 rounded-[8px] text-center">
                                <?php echo get_field('tooltip'); ?>
                            </p>

                            <img class="" src="<?php echo get_field('ikona'); ?>" alt="img" />

                            <p class="text-center text-white text-sm uppercase">
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
