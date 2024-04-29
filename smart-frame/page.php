<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package smart-frame
 */

get_header();
?>

<div class="flex flex-col lg:flex-row justify-between items-center mt-10 lg:mt-1">
    <div>
        <h3 class="font-bold uppercase text-white text-lg lg:text-2xl mb-4">
            <?php echo the_title(); ?>
        </h3>
    </div>

    <figure class="max-w-[80vw] w-[450px] rounded-xl overflow-hidden translate-y-[50px] xl:mr-[120px]">
        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/kontakt-image.png" alt="kontakt" />
    </figure>
</div>
</div>
</div>

<main class="w py-20 lg:py-10">

    <?php
        echo the_content();
    ?>

</main><!-- #main -->

<?php
get_footer();
