<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();?>
<div id="main" class="main">
    <div class="main__linco">
        <div class="container">
            <div class="container__text">
                <div class="container__title">Биржа <span class="container__orange">вечных</span> гостевых постов и пресс-релизов</div>
                <div class="container__des">Лучший инструмент для рекламодателей и веб-мастеров</div>
            </div>
            <div class="container__but__reg">
                <a href="" class="but__reg">Зарегестрироваться</a>
            </div>
            <div class="container__mouse">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/header/mouse.png">
            </div>
        </div>
    </div>
</div>
<div id="section1" class="background">
    <div class="middle">
        <div class="middle__header">
            <div class="middle__about">
                <div class="middle__line"></div>
                <div class="middle__about__text">О НАС</div>
                <div class="middle__line"></div>
            </div>
            <div class="middle__why">Почему нас выбирают</div>
        </div>
        <div class="middle__cart">
            <div class="middle__cart__item">
                <div class="middle__cart__num">01</div>
                <div class="middle__cart__line"></div>
                <div class="middle__cart__text">
                    <div class="middle__cart__title">Большая выборка доноров</div>
                    <div class="middle__cart__descr">На данный момент в базе 5000к доноров под разные потребности, мы еженедельно обновляем базу
                        и добавляем новых вебмастеров в биржу.</div>
                </div>
            </div>
            <div class="middle__cart__item">
                <div class="middle__cart__num">02</div>
                <div class="middle__cart__line"></div>
                <div class="middle__cart__text">
                    <div class="middle__cart__title">Большая выборка доноров</div>
                    <div class="middle__cart__descr">На данный момент в базе 5000к доноров под разные потребности, мы еженедельно обновляем базу
                        и добавляем новых вебмастеров в биржу.</div>
                </div>
            </div>
            <div class="middle__cart__item">
                <div class="middle__cart__num">03</div>
                <div class="middle__cart__line"></div>
                <div class="middle__cart__text">
                    <div class="middle__cart__title">Большая выборка доноров</div>
                    <div class="middle__cart__descr">На данный момент в базе 5000к доноров под разные потребности, мы еженедельно обновляем базу
                        и добавляем новых вебмастеров в биржу.</div>
                </div>
            </div>
            <div class="middle__cart__item">
                <div class="middle__cart__num">04</div>
                <div class="middle__cart__line"></div>
                <div class="middle__cart__text">
                    <div class="middle__cart__title">Большая выборка доноров</div>
                    <div class="middle__cart__descr">На данный момент в базе 5000к доноров под разные потребности, мы еженедельно обновляем базу
                        и добавляем новых вебмастеров в биржу.</div>
                </div>
            </div>
            <div class="middle__cart__item">
                <div class="middle__cart__num">05</div>
                <div class="middle__cart__line"></div>
                <div class="middle__cart__text">
                    <div class="middle__cart__title">Большая выборка доноров</div>
                    <div class="middle__cart__descr">На данный момент в базе 5000к доноров под разные потребности, мы еженедельно обновляем базу
                        и добавляем новых вебмастеров в биржу.</div>
                </div>
            </div>
            <div class="middle__cart__item">
                <div class="middle__cart__num">06</div>
                <div class="middle__cart__line"></div>
                <div class="middle__cart__text">
                    <div class="middle__cart__title">Большая выборка доноров</div>
                    <div class="middle__cart__descr">На данный момент в базе 5000к доноров под разные потребности, мы еженедельно обновляем базу
                        и добавляем новых вебмастеров в биржу.</div>
                </div>
            </div>
        </div>
        <div class="middle__cart__bottom">
            <div class="middle__cart__but">Пройти регистрацию</div>
        </div>
    </div>
    <div class="exchange__wrap">
        <div class="exchange">
            <div class="exchange__text">
                <div class="exchange__about">
                    <div class="exchange__title">
                        <div class="exchange__line"></div>
                        <div class="exchange__about__text">О НАС</div>
                    </div>
                    <div>
                        <div class="exchange__use">Применение биржи</div>
                    </div>
                </div>
                <div class="exchange__descr">
                    <div class="exchange__descr__item">
                        <div>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/front-page/exchange/analytics.png">
                        </div>
                        <div class="exchange__descr__wrap">
                            <div class="exchange__descr__title">Search Engine Optimization</div>
                            <div class="exchange__descr__text">
                                Cтатьевые ссылки обеспечивают рост молодых и трастовых ресурсов. В нашей бирже есть доноры практически под все популярные регионы, а базу мы...
                            </div>
                        </div>
                    </div>
                    <div class="exchange__descr__item">
                        <div>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/front-page/exchange/megaphone.png">
                        </div>
                        <div class="exchange__descr__wrap">
                            <div class="exchange__descr__title">Public Relations</div>
                            <div class="exchange__descr__text">
                                Повышайте узнаваемость своего бренда, информируйте пользователей о новом товаре либо услуге, увеличивайте объемы продаж - с помощью пресс релизов и гостевых...
                            </div>
                        </div>
                    </div>
                    <div class="exchange__descr__item">
                        <div>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/front-page/exchange/emblem.png">
                        </div>
                        <div class="exchange__descr__wrap">
                            <div class="exchange__descr__title">Search Engine Reputation Management</div>
                            <div class="exchange__descr__text">
                                Устраняйте негативные статьи в топе (по средствам размещения статей на более трастовых ресурсах), формируйте положительный/отрицательный имидж своих...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="exchange__img">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/front-page/exchange/macbook.png">
            </div>
        </div>
    </div>
    <div class="static__wrap">
        <div class="static">
            <div class="static__item">
                <div class="static__num">1367</div>
                <div class="static__text">доноров в наличии</div>
            </div>
            <div class="static__item">
                <div class="static__num">382</div>
                <div class="static__text">добавлено за последний месяц</div>
            </div>
            <div class="static__item">
                <div class="static__num">927</div>
                <div class="static__text">пользователей LinkoTop</div>
            </div>
        </div>
    </div>
    <div class="how__wrap">
        <div class="how">
            <div class="how__exchange">
                <div class="how__title">
                    <div class="how__line"></div>
                    <div class="how__about__text">БИРЖА</div>
                </div>
                <div class="how__work">Как это работает</div>
            </div>
            <div class="how__static">
                <div id="how__adv" class="how__table__adv how__table__hide">
                    <div class="how__column__adv">
                        <div class="how__rows">
                            <div class="how__text">Зарегестрируйтесь</div>
                            <div class="how__num">1</div>
                            <div class="how__static__line"></div>
                            <div class="how__round__circle">
                            </div>
                        </div>
                        <div class="how__rows how__rows__short">
                            <div class="how__text">Создайте проект</div>
                            <div class="how__num">2</div>
                            <div class="how__static__line how__static__line__short"></div>
                            <div class="how__round__circle">
                            </div>
                        </div>
                        <div class="how__rows">
                            <div class="how__text">Добавьте статьи для размещения</div>
                            <div class="how__num">3</div>
                            <div class="how__static__line"></div>
                            <div class="how__round__circle">
                            </div>
                        </div>
                        <div class="how__rows how__rows__short">
                            <div class="how__text">Получайте и обрабатывйте заказы</div>
                            <div class="how__num">4</div>
                            <div class="how__static__line how__static__line__short"></div>
                            <div class="how__round__circle">
                            </div>
                        </div>
                        <div class="how__rows">
                            <div class="how__text">Выводите заработанные средства</div>
                            <div class="how__num">5</div>
                            <div class="how__static__line"></div>
                            <div class="how__round__circle">
                            </div>
                        </div>
                        <div class="how__rows how__rows__short">
                            <div class="how__text">Получайте и обрабатывйте заказы</div>
                            <div class="how__num">6</div>
                            <div class="how__static__line how__static__line__short"></div>
                            <div class="how__round__circle">
                            </div>
                        </div>
                    </div>
                    <div class="how__round__line"></div>
                </div>
                <div id="how__web" class="how__table__web">
                    <div class="how__column__web">
                        <div class="how__rows">
                            <div class="how__text">Зарегестрируйтесь</div>
                            <div class="how__num">1</div>
                            <div class="how__static__line"></div>
                            <div class="how__round__circle">
                            </div>
                        </div>
                        <div class="how__rows how__rows__short">
                            <div class="how__text">Добавьте свой сайт</div>
                            <div class="how__num">2</div>
                            <div class="how__static__line how__static__line__short"></div>
                            <div class="how__round__circle">
                            </div>
                        </div>
                        <div class="how__rows">
                            <div class="how__text">Пройдите модерацию</div>
                            <div class="how__num">3</div>
                            <div class="how__static__line"></div>
                            <div class="how__round__circle">
                            </div>
                        </div>
                        <div class="how__rows how__rows__short">
                            <div class="how__text">Получайте и обрабатывйте заказы</div>
                            <div class="how__num">4</div>
                            <div class="how__static__line how__static__line__short"></div>
                            <div class="how__round__circle">
                            </div>
                        </div>
                        <div class="how__rows">
                            <div class="how__text">Выводите заработанные средства</div>
                            <div class="how__num">5</div>
                            <div class="how__static__line"></div>
                            <div class="how__round__circle">
                            </div>
                        </div>
                    </div>
                    <div class="how__round__line"></div>
                </div>
                <div class="how__buttons">
                    <button id="but__adv" class="how__button">Рекламадателю</button>
                    <button id="but__web" class="how__button how__button__active">Вебмастеру</button>
                </div>
            </div>
            <div class="how__static__mobile">
                <div id="how__static__panel__adv" class="how__static__panel how__static__panel__active">
                    <div class="how__mobile">
                        <div class="how__adv__line">
                            <div class="how__adv__round"></div>
                            <div class="how__adv__round"></div>
                            <div class="how__adv__round"></div>
                            <div class="how__adv__round"></div>
                            <div class="how__adv__round"></div>
                            <div class="how__adv__round"></div>
                            <div class="how__adv__round"></div>
                        </div>
                        <div class="how__adv__table">
                            <div class="how__adv__row">
                                <div class="how__adv__row__line">
                                    <div class="how__adv__row__lin"></div>
                                    <div class="how__adv__row__num">1</div>
                                </div>
                                <div class="how__adv__row__text">Зарегестрируйтесь</div>
                            </div>
                            <div class="how__adv__row how__adv__line__short">
                                <div class="how__adv__row__line">
                                    <div class="how__adv__row__lin"></div>
                                    <div class="how__adv__row__num">2</div>
                                </div>
                                <div class="how__adv__row__text">Создайте проект</div>
                            </div>
                            <div class="how__adv__row">
                                <div class="how__adv__row__line">
                                    <div class="how__adv__row__lin"></div>
                                    <div class="how__adv__row__num">3</div>
                                </div>
                                <div class="how__adv__row__text">Добавьте статьи для размещения</div>
                            </div>
                            <div class="how__adv__row how__adv__line__short">
                                <div class="how__adv__row__line">
                                    <div class="how__adv__row__lin"></div>
                                    <div class="how__adv__row__num">4</div>
                                </div>
                                <div class="how__adv__row__text">Выберите доноры</div>
                            </div>
                            <div class="how__adv__row">
                                <div class="how__adv__row__line">
                                    <div class="how__adv__row__lin"></div>
                                    <div class="how__adv__row__num">5</div>
                                </div>
                                <div class="how__adv__row__text">Отправьте заявки на публикацю</div>
                            </div>
                            <div class="how__adv__row how__adv__line__short">
                                <div class="how__adv__row__line">
                                    <div class="how__adv__row__lin"></div>
                                    <div class="how__adv__row__num">6</div>
                                </div>
                                <div class="how__adv__row__text">Подтвердите опубликованную статью</div>
                            </div>
                            <div class="how__adv__row">
                                <div class="how__adv__row__line">
                                    <div class="how__adv__row__lin"></div>
                                    <div class="how__adv__row__num">7</div>
                                </div>
                                <div class="how__adv__row__text">Получите результат</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="how__static__panel__web" class="how__static__panel__web">
                    <div class="how__mobile">
                        <div class="how__adv__line">
                            <div class="how__adv__round"></div>
                            <div class="how__adv__round"></div>
                            <div class="how__adv__round"></div>
                            <div class="how__adv__round"></div>
                            <div class="how__adv__round"></div>
                            <div class="how__adv__round"></div>
                            <div class="how__adv__round"></div>
                        </div>
                        <div class="how__adv__table">
                            <div class="how__adv__row">
                                <div class="how__adv__row__line">
                                    <div class="how__adv__row__lin"></div>
                                    <div class="how__adv__row__num">1</div>
                                </div>
                                <div class="how__adv__row__text">Зарегестрируйтесь</div>
                            </div>
                            <div class="how__adv__row how__adv__line__short">
                                <div class="how__adv__row__line">
                                    <div class="how__adv__row__lin"></div>
                                    <div class="how__adv__row__num">2</div>
                                </div>
                                <div class="how__adv__row__text">Добавьте свой сайт</div>
                            </div>
                            <div class="how__adv__row">
                                <div class="how__adv__row__line">
                                    <div class="how__adv__row__lin"></div>
                                    <div class="how__adv__row__num">3</div>
                                </div>
                                <div class="how__adv__row__text">Пройдите модерацию</div>
                            </div>
                            <div class="how__adv__row how__adv__line__short">
                                <div class="how__adv__row__line">
                                    <div class="how__adv__row__lin"></div>
                                    <div class="how__adv__row__num">4</div>
                                </div>
                                <div class="how__adv__row__text">Получайте и обрабатывйте заказы</div>
                            </div>
                            <div class="how__adv__row">
                                <div class="how__adv__row__line">
                                    <div class="how__adv__row__lin"></div>
                                    <div class="how__adv__row__num">5</div>
                                </div>
                                <div class="how__adv__row__text">Выводите заработанные средства</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="how__buttons">
                    <button id="but__adv__mob" class="how__button how__button__active">Рекламадателю</button>
                    <button id="but__web__mob" class="how__button">Вебмастеру</button>
                </div>
            </div>
            <div class="how__footer">
                <div class="how__footer__text">
                    Видишь как все просто?
                    <br>Просто попробуй сам и убедишься!
                </div>
                <a href="/" class="how__footer__button">Попробовать сейчас</a>
            </div>
        </div>
    </div>
    <div class="best__ref__wrap">
        <div class="best__ref">
            <div class="best__ref__header">
                <div class="best__ref__title">Лучшая реферальная система</div>
                <div class="best__ref__des">Мы предлагаем трехуровневую реферальную систему, если вы приводите клиента по реферальной ссылке вы получаете</div>
            </div>
            <div class="best__ref__cards">
                <div class="best__ref__card best__ref__bgc__1">
                    <div class="best__ref__per">20%</div>
                    <div class="best__ref__about">
                        От дохода бирж
                        с реферала 1 уровня
                    </div>
                </div>
                <div class="best__ref__card best__ref__bgc__2">
                    <div class="best__ref__per">6%</div>
                    <div class="best__ref__about">
                        От дохода бирж
                        с реферала 2 уровня
                    </div>
                </div>
                <div class="best__ref__card best__ref__bgc__3">
                    <div class="best__ref__per">4%</div>
                    <div class="best__ref__about">
                        От дохода бирж
                        с реферала 3 уровня
                    </div>
                </div>
            </div>
            <a href="/" class="best__ref__button">Привести клиента</a>
        </div>
    </div>
    <div class="review__wrap">
        <div class="review__header">
            <div class="review__about">
                <div class="review__line"></div>
                <div class="review__about__text">ОТЗЫВЫ</div>
                <div class="review__line"></div>
            </div>
            <div class="review__descr">Что говорят пользователи</div>
        </div>
        <div class="review__cards__wrap">
            <div class="review__slider__inner" >
                <div class="review__card">
                    <div class="review__card__header">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/front-page/review/Ellipse%2049.png">
                        <div class="review__card__info">
                            <div class="review__card__name">Маргарита Иванова</div>
                            <div class="review__card__work">Great Company, SEO</div>
                        </div>
                    </div>
                    <div class="review__card__descr">
                        Таким образом, постоянное информационно-пропагандистское обеспечение нашей деятельности создаёт необходимость включения в производственный план целого ряда внеочередных.
                    </div>
                </div>
                <div  class="review__card">
                    <div class="review__card__header">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/front-page/review/Ellipse%2048.png">
                        <div class="review__card__info">
                            <div class="review__card__name">Максим Андреев</div>
                            <div class="review__card__work">Great Company, SEO</div>
                        </div>
                    </div>
                    <div class="review__card__descr">
                        Таким образом, постоянное информационно-пропагандистское обеспечение нашей деятельности создаёт необходимость включения в производственный план целого ряда внеочередных.
                    </div>
                </div>
                <div class="review__card">
                    <div class="review__card__header">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/front-page/review/Ellipse%2049.png">
                        <div class="review__card__info">
                            <div class="review__card__name">Маргарита Иванова</div>
                            <div class="review__card__work">Great Company, SEO</div>
                        </div>
                    </div>
                    <div class="review__card__descr">
                        Таким образом, постоянное информационно-пропагандистское обеспечение нашей деятельности создаёт необходимость включения в производственный план целого ряда внеочередных.
                    </div>
                </div>
                <div class="review__card">
                    <div class="review__card__header">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/front-page/review/Ellipse%2048.png">
                        <div class="review__card__info">
                            <div class="review__card__name">Максим Андреев</div>
                            <div class="review__card__work">Great Company, SEO</div>
                        </div>
                    </div>
                    <div class="review__card__descr">
                        Таким образом, постоянное информационно-пропагандистское обеспечение нашей деятельности создаёт необходимость включения в производственный план целого ряда внеочередных.
                    </div>
                </div>
                <div class="review__card">
                    <div class="review__card__header">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/front-page/review/Ellipse%2049.png">
                        <div class="review__card__info">
                            <div class="review__card__name">Маргарита Иванова</div>
                            <div class="review__card__work">Great Company, SEO</div>
                        </div>
                    </div>
                    <div class="review__card__descr">
                        Таким образом, постоянное информационно-пропагандистское обеспечение нашей деятельности создаёт необходимость включения в производственный план целого ряда внеочередных.
                    </div>
                </div>
                <div class="review__card">
                    <div class="review__card__header">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/front-page/review/Ellipse%2048.png">
                        <div class="review__card__info">
                            <div class="review__card__name">Максим Андреев</div>
                            <div class="review__card__work">Great Company, SEO</div>
                        </div>
                    </div>
                    <div class="review__card__descr">
                        Таким образом, постоянное информационно-пропагандистское обеспечение нашей деятельности создаёт необходимость включения в производственный план целого ряда внеочередных.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
