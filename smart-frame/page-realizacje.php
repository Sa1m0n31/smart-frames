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
        <?php
        $args = array(
            'post_type' => 'Slider',
            'posts_per_page' => 99
        );

        function get_category_id($name) {
            switch($name) {
                case 'Ramy Smart Frame':
                    return 0;
                case 'Stoiska targowe':
                    return 1;
                case 'Wydruki wielkoformatowe':
                    return 2;
                default:
                    return 3;
            }
        }

        $query = new WP_Query($args);

        if($query->have_posts()) {
            while($query->have_posts()) {
                $query->the_post();
                ?>

                <img class="rounded-2xl portfolio portfolio--<?php echo get_category_id(get_field('kategoria')); ?>"
                     src="<?php echo get_field('zdjecie'); ?>" alt="kontakt" />

                <?php
            }
            wp_reset_postdata();
        }
        ?>

    </div>
</div>

<?php
get_footer();
?>
