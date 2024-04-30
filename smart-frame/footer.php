<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package smart-frame
 */

?>
<footer class="bg-[#18161B] py-10 lg:py-20">
    <div class="w flex flex-col lg:flex-row justify-between items-start">
        <div>
            <a href="<?php echo home_url(); ?>"
               class="w-[220px] block mb-12">
                <img class="w-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/logo.svg" alt="logo" />
            </a>

            <a href="tel:+4901723477621" class="contact__main__left__item flex flex--start text-white-imp font-bold text-base">
                <img class="filter img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/telephone.svg" alt="phone-number" />
                +49 01723477621
            </a>
            <a href="mailto:kontakt@smartframe.de" class="contact__main__left__item flex flex--start text-white-imp font-bold text-base">
                <img class="img filter" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/email.svg" alt="email" />
                kontakt@smartframe.de
            </a>
            <div class="contact__main__left__item flex flex--start text-white-imp font-bold text-base">
                <img class="img filter" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/location-pin.svg" alt="location" />
                Langenberger Str. 141,<br/>
                42551 Velbert
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-4 justify-end items-start">
            <div class="bg-[#202020] rounded-2xl py-10 px-8 flex flex-col justify-start items-start gap-4">
                <a href="<?php echo home_url(); ?>" class="text-white font-bold text-sm lg:text-base">Startseite</a>
                <a href="<?php echo get_page_link(get_page_by_title('Ramki')->ID); ?>" class="text-white font-bold text-sm lg:text-base">Dienstleistungen</a>
                <a href="<?php echo get_page_link(get_page_by_title('Ramki')->ID); ?>" class="text-white font-bold text-sm lg:text-base">Smart Frame Rahmen</a>
                <a href="<?php echo get_page_link(get_page_by_title('Stoiska targowe')->ID); ?>" class="text-white font-bold text-sm lg:text-base">Messestände</a>
                <a href="<?php echo get_page_link(get_page_by_title('Realizacje')->ID); ?>" class="text-white font-bold text-sm lg:text-base">Referenzen</a>
            </div>

            <div class="flex flex-col gap-4">
                <div class="bg-[#202020] rounded-2xl py-10 px-8 flex flex-col justify-start items-start gap-4">
                    <a href="<?php echo get_page_link(get_page_by_title('Datenschutzerklärung')->ID); ?>" class="text-white text-sm">Datenschutzerklärung</a>
                    <a href="<?php echo get_page_link(get_page_by_title('Impressum')->ID); ?>" class="text-white text-sm">Impressum</a>
                </div>

                <div class="w-full bg-[#202020] rounded-2xl py-10 px-8 flex flex-col justify-center items-center gap-4">
                    <a href="<?php echo get_page_link(get_page_by_title('Kontakt')->ID); ?>"
                       class="btn--arrow flex justify-start items-center gap-3 text-white text-lg font-bold">
                        Kontakt
                        <img class="img--arrow filter" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/arrow-long-black.svg" alt="arrow" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
