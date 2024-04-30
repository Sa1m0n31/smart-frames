<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
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
<div class="h-auto lg:h-[400px] relative">
    <img class="img absolute top-0 left-0 w-full h-full" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/bg-kontakt.jpg" alt="tlo" />
    <div class="w relative z-10 pt-8 lg:pt-12 pb-5 lg:pb-0">
        <div class="flex justify-between items-center">
            <div class="flex justify-start items-center gap-4 lg:gap-12">
                <a href="<?php echo home_url(); ?>"
                   class="w-24 xl:w-[250px]">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/logo.svg" alt="logo" />
                </a>

                <div class="hidden lg:flex justify-start items-center gap-3 lg:gap-10 bg-[#21221C] h-10 lg:h-12 rounded-full px-10">
                    <a href="<?php echo get_page_link(get_page_by_title('Ramki')->ID); ?>" class="text-white font-bold text-xs xl:text-base">
                        Dienstleistungen
                    </a>
                    <a href="<?php echo get_page_link(get_page_by_title('Ramki')->ID); ?>" class="text-white font-bold text-xs xl:text-base">
                        Smart Frame Rahmen
                    </a>
                    <a href="<?php echo get_page_link(get_page_by_title('Stoiska targowe')->ID); ?>" class="text-white font-bold text-xs xl:text-base">
                        Messestände
                    </a>
                    <a href="<?php echo get_page_link(get_page_by_title('Realizacje')->ID); ?>" class="text-white font-bold text-xs xl:text-base">
                        Referenzen
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

            <a href="<?php echo get_page_link(get_page_by_title('Usługi')->ID); ?>" class="header__menu__item text-white">
                Dienstleistungen
            </a>
            <a href="<?php echo get_page_link(get_page_by_title('Ramki')->ID); ?>" class="header__menu__item text-white">
                Smart Frame Rahmen
            </a>
            <a href="<?php echo get_page_link(get_page_by_title('Stoiska targowe')->ID); ?>" class="header__menu__item text-white">
                Messestände
            </a>
            <a href="<?php echo get_page_link(get_page_by_title('Realizacje')->ID); ?>" class="header__menu__item text-white">
                Referenzen
            </a>
        </div>
    </div>