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

<div class="w--narrow mt-20">
    <div class="contact__main flex">
        <div class="contact__main__left">
            <a href="tel:+4901723477621" class="contact__main__left__item flex flex--start">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/telephone.svg" alt="phone-number" />
                01723477621
            </a>
            <a href="mailto:kontakt@smartframe.de" class="contact__main__left__item flex flex--start">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/email.svg" alt="email" />
                kontakt@smartframe.de
            </a>
            <div class="contact__main__left__item flex flex--start">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/location-pin.svg" alt="location" />
                Langenberger Str. 141,<br/>
                42551 Velbert
            </div>
        </div>
        <div class="contact__main__right">
            <?php echo do_shortcode('[contact-form-7 id="e57f2e9" title="Formularz 1"]'); ?>
        </div>
    </div>
</div>

<div class="w">
    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
            src="https://www.openstreetmap.org/export/embed.html?bbox=7.057160139083863%2C51.33755609466935%2C7.071322202682496%2C51.343681894745&amp;layer=mapnik&amp;marker=51.34061909704347%2C7.064241170883179"
            style="border: 1px solid black"></iframe>
</div>

<?php
get_footer();
?>
