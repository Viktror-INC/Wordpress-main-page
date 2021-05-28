<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= wp_get_document_title('') ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>

<body>

<header>
    <div class="container__menu__wrap">
        <div class="container__menu__grid">
            <div class="container__div__img">
                <img class="container__img active__container__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/header/logo1.png">
            </div>
            <div class="container__menu">
                <div><a class="container__menu__link" href="#section1">О нас</a></div>
                <div><a class="container__menu__link" href="/">Блог</a></div>
                <div><a class="container__menu__link" href="/">Wiki</a></div>
                <div><a class="container__menu__link container__menu__link__last" href="/">Другие услуги</a></div>
            </div>
            <div class="container__id">
                <div><a href="/" class="container__id__login">Вход</a></div>
                <div><a href="/" class="container__id__reg">Регистрация</a></div>
            </div>
        </div>
        <div id="container__mobile__items" class="container__mobile__items">
            <div class="container__div__img">
                <img class="container__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/header/logo1.png">
            </div>
            <div id="menu__button" class="menu__button"></div>
            <div class="container__menu__mobile__wrap">
                <div class="container__menu__items">
                    <div class="container__menu__mobile">
                        <a id="section1__link" class="container__menu__link" href="#section1">О нас</a>
                        <a class="container__menu__link" href="/">Блог</a>
                        <a class="container__menu__link" href="/">Wiki</a>
                        <a class="container__menu__link container__menu__link__last" href="/">Другие услуги</a>
                    </div>
                    <div class="container__line"></div>
                    <div class="container__auth">
                        <div class="container__enter">Вход в аккаунт</div>
                        <div class="container__reg">Регистрация</div>
                    </div>
                    <div class="container__social">
                        <a class="container__social__img" href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/footer/social/facebook.png"></a>
                        <a class="container__social__img" href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/footer/social/telegram.png"></a>
                        <a class="container__social__img" href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/footer/social/instagram.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
