<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
<?php wp_footer(); ?>
<div id="scroll_up" class="scroll_up"></div>
 <footer class="footer__back ">
    <div class="footer__wrap">
        <div class="footer__main">
            <div class="footer__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/footer/logo.png">
                <div class="footer__logo__text">Прежде всего, существующая теория способствует.</div>
            </div>
            <div class="footer__info">
                <a href="/" class="footer__info__title">Информация</a>
                <div class="footer__info__menu">
                <a href="/" class="footer__info__item">О нас</a>
                <a href="/" class="footer__info__item">Как это работает</a>
                <a href="/" class="footer__info__item">Реферальная система</a>
                <a href="/" class="footer__info__item">Аккаунт</a>
                <a href="/" class="footer__info__item">Другие услуги</a>
                <a href="/" class="footer__info__item">Политика конфеденциальности</a>
                </div>
            </div>
            <div class="footer__contacts">
                <div class="footer__contacts__main">
                    <div class="footer__contacts__title">Контакты</div>
                    <div class="footer__contacts__wrap">
                        <div class="footer__contacts__cont">linkotop@mail.com</div>
                        <div class="footer__contacts__cont">(067) 435-74-91</div>
                    </div>
                </div>
                <div class="footer__social">
                    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/footer/social/facebook.png"></a>
                    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/footer/social/telegram.png"></a>
                    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/footer/social/instagram.png"></a>
                </div>
            </div>
        </div>
        <div class="footer__copy">
            <div class="footer__copy__line"></div>
            <div class="footer__copy__text">
                Copyright © 2020 LinkoTop All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>
