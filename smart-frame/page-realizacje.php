<?php
get_header();
?>

<div class="flex flex-col lg:flex-row justify-between items-center mt-10 lg:mt-1">
    <div>
        <h3 class="font-bold uppercase text-white text-lg lg:text-2xl mb-4">
            Realizacje
        </h3>
        <p class="text-white max-w-[400px] text-sm lg:text-base">
            Du hast eine Frage oder möchtest eine unserer Dienstleistungen bestellen?
            Schreib uns, ruf an oder komm auf einen Kaffee vorbei!
        </p>
    </div>

    <figure class="max-w-[80vw] w-[450px] rounded-xl overflow-hidden translate-y-[50px] xl:mr-[120px]">
        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/kontakt-image.png" alt="kontakt" />
    </figure>
</div>
</div>
</div>

<div class="w flex flex-col lg:flex-row justify-between items-start gap-8 py-24 lg:py-48">
    <div class="w-full lg:w-1/4">
        <button onclick="selectPortfolio(0)"
                class="portfolioBtn w-full text-base lg:text-lg font-bold bg-transparent border-b border-[#0C0C0C] pl-3 py-4 text-left">
            Ramy Smart Frame
        </button>
        <button onclick="selectPortfolio(1)"
                class="portfolioBtn w-full text-base lg:text-lg font-bold bg-transparent border-b border-[#0C0C0C] pl-3 py-4 text-left">
            Stoiska targowe
        </button>
        <button onclick="selectPortfolio(2)"
                class="portfolioBtn w-full text-base lg:text-lg font-bold bg-transparent border-b border-[#0C0C0C] pl-3 py-4 text-left">
            Wydruki wielkoformatowe
        </button>
        <button onclick="selectPortfolio(3)"
                class="portfolioBtn w-full text-base lg:text-lg font-bold bg-transparent border-b border-[#0C0C0C] pl-3 py-4 text-left">
            Akcesoria
        </button>
    </div>
    <div class="w-full lg:w-3/4 grid grid-cols-1 lg:grid-cols-3 gap-4">
        <img class="rounded-2xl portfolio portfolio--0" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/kontakt-image.png" alt="kontakt" />
        <img class="rounded-2xl portfolio portfolio--0" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/kontakt-image.png" alt="kontakt" />
        <img class="rounded-2xl portfolio portfolio--1" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/kontakt-image.png" alt="kontakt" />
        <img class="rounded-2xl portfolio portfolio--1" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/kontakt-image.png" alt="kontakt" />
        <img class="rounded-2xl portfolio portfolio--2" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/kontakt-image.png" alt="kontakt" />
    </div>
</div>

<?php
get_footer();
?>
