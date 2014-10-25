<? include 'parts/head.html'?>

<!--HEADER-->
<? include 'parts/header_1.html' ?>
<!--/HEADER-->

<section class="page page--white_bg">
    <!--ШАПКА-->
    <div class="cover">
        <div class="cover__background">
            <img src="images/content/cover_bg.jpg" alt="" class="cover__background_img"/>
        </div>
        <div class="cover__content page_width_1200">
            <div class="bread_crumbs bebas">
                <a href="" class="bread_crumbs__item">Впечатления</a>
                <a href="" class="bread_crumbs__item">Испания</a>
                <a href="" class="bread_crumbs__item">Барселона</a>
                <a href="" class="bread_crumbs__item">Достопримечательности</a>
            </div>

            <h1 class="cover__title bebas">Храм святого семейства в Барселоне</h1>

            <nav class="cover__nav bebas">
                <ul class="nav navbar-nav">
                    <li><a href="#b_description" class="cover__nav__item cover__nav__item--active">Описание</a></li>
                    <li><a href="#b_map" class="cover__nav__item">На карте</a></li>
                    <li><a href="#b_tours" class="cover__nav__item">Экскурсии</a></li>
                    <li><a href="#b_experts" class="cover__nav__item">Эксперты</a></li>
                    <li><a href="#b_reviews" class="cover__nav__item">Отзывы <span class="cover__nav__counter">3</span></a></li>
                </ul>
            </nav>
            <div class="position_relative">
                <a class="cover__btn_share ico_share" href=""></a>
                <a class="cover__btn_like ico_like" href=""></a>
                <a class="cover__btn_message ico_message" href=""></a>

                <div class="gallery gallery--horizontal">
                    <div class="gallery__image">
                        <img src="images/content/gallery_image.jpg" alt=""/>
                    </div>
                    <div class="gallery__slider">
                        <div class="gallery__slider_wrap">
                            <a href="" class="gallery__slider__item"><img src="images/content/gallery_slider_image_1.jpg" alt=""/></a>
                            <a href="" class="gallery__slider__item"><img src="images/content/gallery_slider_image_2.jpg" alt=""/></a>
                            <a href="" class="gallery__slider__item"><img src="images/content/gallery_slider_image_3.jpg" alt=""/></a>
                            <a href="" class="gallery__slider__item"><img src="images/content/gallery_slider_image_1.jpg" alt=""/></a>
                            <a href="" class="gallery__slider__item"><img src="images/content/gallery_slider_image_2.jpg" alt=""/></a>
                            <a href="" class="gallery__slider__item"><img src="images/content/gallery_slider_image_3.jpg" alt=""/></a>
                        </div>
                        <a class="gallery__btn gallery__btn--prev" href=""></a>
                        <a class="gallery__btn gallery__btn--next" href=""></a>
                    </div>
                </div>

                <div class="tickets bebas">
                    <div class="tickets__item">
                        <span class="tickets__label">Когда</span>
                        <div class="tickets__input">
                            <a href="" class="tickets__input__btn tickets__input__btn--calendar"></a>
                            12 Апреля 2014 12:00 GMT+2

                        </div>
                    </div>

                    <div class="tickets__item">
                        <span class="tickets__label">Количество</span>
                        <div class="tickets__input">
                            <div class="select_number">
                                <span class="select_number__value">1</span>
                                <a class="select_number__btn select_number__btn--minus" href=""><!-- +1 --></a>
                                <a class="select_number__btn select_number__btn--plus" href=""><!-- -1 --></a>
                                <input type="hidden" class="select_number__input" name="tickets_num" value="1"/>
                            </div>
                            Взрослый 14,8 €
                        </div>
                        <div class="tickets__input tickets__input--disable">
                            <div class="select_number">
                                <span class="select_number__value">1</span>
                                <a class="select_number__btn select_number__btn--minus" href=""><!-- +1 --></a>
                                <a class="select_number__btn select_number__btn--plus" href=""><!-- -1 --></a>
                                <input type="hidden" class="select_number__input" name="children_tickets_num" value="1"/>
                            </div>
                            Детский  0 €
                        </div>
                    </div>
                    <div class="tickets__item">
                        <span class="tickets__label">Забронировать впечатление</span>
                        <div class="tickets__reservation">
                            <p class="tickets__reservation__text">
                                Вы можете заказать экскурсию внеся
                                только 15% ее стоимости заранее.
                            </p>
                            <a class="tickets__reservation_button" href="">
                                <small class="tickets__reservation_currency">€</small>
                                <span class="tickets__reservation_total">14,8</span>
                                КУПИТЬ БИЛЕТЫ
                            </a>
                            <div class="tickets__to_present">
                                <input type="checkbox" class="tickets__input_present" id="present" name="present"/>
                                <label for="present">в подарок</label>
                                <span class="tip" title="Подсказка"><img src="images/tip.png" alt=""/></span>
                            </div>
                        </div>
                        <div class="tickets__return_policy">
                            <a href="">Условия возврата</a>
                        </div>
                    </div>
                    <a class="tickets__advance" href="">Зачем покупать билеты заранее?</a>
                </div>

                <div class="object_info bebas">
                    <div class="object_info__item">
                        <span class="object_info__label">Услугу оказывает</span>
                        <figure class="object_info__photo">
                            <img src="images/content/object_info__photo.jpg" alt=""/>
                            <figcaption class="object_info__photo_title">
                                <a href="" class="object_info__photo_message_send ico_message ico_message--small"></a>
                                <span class="object_info__photo_name">ЮЛИЯ МАЛКОВА</span>
                                <span class="object_info__photo_post">ИСКУССТВОВЕД</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="object_info__item">
                        <span class="object_info__label">Тип</span>
                        <span>Пешеходная экскурсия</span>
                    </div>
                    <div class="object_info__item">
                        <span class="object_info__label">Место встречи</span>
                        <span>По договоренности</span>
                    </div>
                    <div class="object_info__item">
                        <span class="object_info__label">Языки</span>
                        <span>русский, итальянский, английский, французский</span>
                    </div>
                    <div class="object_info__item">
                        <span class="object_info__label">Продолжительность</span>
                        <span>4 часа</span>
                    </div>

                    <div class="object_info__id">
                        id 74311
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--ОПИСАНИЕ-->
    <div id="b_description" class="scrollto page_width_1200">
        <div class="right_column right_column--wide">
            <div class="right_column__left">
                <h3 class="title bebas">В экскурсию входит</h3>
                <ul class="bullet_list">
                    <li class="bullet_list__item">
                        <h4 class="bullet_list__title">Вы - приоритиет №1 для нас</h4>
                    </li>
                    <li class="bullet_list__item">
                        <h4 class="bullet_list__title">Вы будете гарантировано удовлетворены</h4>
                    </li>
                    <li class="bullet_list__item">
                        <h4 class="bullet_list__title">Передумали?</h4>

                    </li>
                </ul>

                <h3 class="title bebas">В экскурсию входит</h3>
                <ul class="bullet_list">
                    <li class="bullet_list__item">
                        <h4 class="bullet_list__title">Вы - приоритиет №1 для нас</h4>
                    </li>
                    <li class="bullet_list__item">
                        <h4 class="bullet_list__title">Вы будете гарантировано удовлетворены</h4>
                    </li>
                    <li class="bullet_list__item">
                        <h4 class="bullet_list__title">Передумали?</h4>

                    </li>
                </ul>
            </div>
            <div class="right_column__right">
                <h3 class="title bebas">
                    Travelatum гарантирует
                </h3>
                <ul class="bullet_list">
                    <li class="bullet_list__item">
                        <h4 class="bullet_list__title">Вы - приоритиет №1 для нас</h4>
                        We're absolutely dedicated to helping you discover local experiences, getaways, and the gear you need to get out there.
                    </li>
                    <li class="bullet_list__item">
                        <h4 class="bullet_list__title">Вы будете гарантировано удовлетворены</h4>
                        100% of your money back if you don't love your experience.
                    </li>
                    <li class="bullet_list__item">
                        <h4 class="bullet_list__title">Передумали?</h4>
                        We're happy to give you a refund if requested within
                        10 days of purchase.
                    </li>
                </ul>
            </div>
        </div>
        <h3 class="title bebas">Описание</h3>
        <div class="description">
            <p>
                Саграда Фамилия (полное название «Искупительный храм Святого Семейства») – творение известного мэтра архитектуры Испании Антонио Гауди, который работал над проектированием и строительством здания на протяжении 43 лет. Храм должен был воплотить, по замыслу мастера, главенствующие идеи Нового Завета. Но – увы! Увидеть воочию величайший проект своей жизни Гауди так и не удалось: умер он в 1926 году, а полное завершение работ приурочено лишь к 2024 году – на сто лет позже его смерти.
            </p>
            <p>
                Таким образом Саграда Фамилия является по факту одним из самых известных в мире долгостроев.  Причина такого долгостроя заключается в том, что Саграда Фамилия строится исключительно на пожертвования прихожан. При этом  скорому окончанию строительства препятствует сложность изготовления каменных блоков, формирующих эксцентричные формы сооружения. Согласно компьютерной модели, каждый из них требует индивидуальной обработки и подгонки.
            </p>
            <p>
                В архитектуре здания смешались стили неоготики и модерна. Строгие, симметричные детали здания, покрытые витиеватыми узорами, витражи, скульптурные композиции.
            </p>
            <p>
                А четыре изящные башни, озаренные мерцающей подсветкой, давно уже выступают в роли самого культового изображения Барселоны.  Храм опирается на такие же колонны и своды, что и жилые дома, построенные Гауди.
            </p>
            <p>
                В разгар сезона у дверей церкви нередко выстраивается очередь и желающих посмотреть на ее фантастическое убранство – поэтому мы рекомендуем бронировать билеты заранее, так как это позволит избежать необходимости стоять в очереди.
            </p>
            <p>
                Внутри церкви Вас ожидает, помимо прочего, музей Гауди и смотровая площадка с захватывающим видом на сказочную Барселону. Вы можете выбрать одну из башен с видом, либо на центр Барселоны, либо на восточную часть города.
            </p>
        </div>
    </div>

    <!--КАРТА-->
    <? include 'parts/map.html' ?>

    <!--ЭКСКУРСИИ-->
    <div id="b_tours" class="scrollto page_width_1200">
        <h3 class="title bebas">
            Экскурсии, включающие посещение ХРАМА святого семейтва
        </h3>
        <div class="blocks">
            <div class="masonry">
                <a href="" class="masonry__item block block_width_1 block_height_1">
                    <div class="block__img">
                        <img src="images/content/blocks_item_1.jpg" alt=""/>
                    </div>

                    <div class="block__views">4312</div>

                    <div class="block__info">
                        <div class="block__stars"></div>
                        <div>
                            <div class="block__time_price">
                                <div class="block__time">
                                    <span class="block__time__value">8</span> часов
                                </div>
                                <div class="block__price">
                                    250 €
                                </div>
                            </div>

                            <div class="block__type">Экскурсия</div>
                            <h4 class="block_title">Саграда Фамилия со служебного входа</h4>
                        </div>
                    </div>
                </a>

                <a href="" class="masonry__item block block_width_2 block_height_1 block--info_top">
                    <div class="block__img">
                        <img src="images/content/blocks_item_2.jpg" alt=""/>
                    </div>

                    <div class="block__views">514</div>

                    <div class="block__info">
                        <div class="block__stars"></div>
                        <div>
                            <div class="block__time_price">
                                <div class="block__time">
                                    <span class="block__time__value">5</span> часов
                                </div>
                                <div class="block__price">
                                    120 €
                                </div>
                            </div>

                            <div class="block__type">Экскурсия</div>
                            <h4 class="block_title">барселона панорамная</h4>
                        </div>
                    </div>
                </a>

                <a href="" class="masonry__item block block_width_2 block_height_2 block--info_top">
                    <div class="block__img">
                        <img src="images/content/blocks_item_3.jpg" alt=""/>
                    </div>

                    <div class="block__views">1256</div>

                    <div class="block__info">
                        <div class="block__stars"></div>
                        <div>
                            <div class="block__time_price">
                                <div class="block__time">
                                    <span class="block__time__value">5</span> часов
                                </div>
                                <div class="block__price">
                                    120 €
                                </div>
                            </div>

                            <div class="block__type">Экскурсия</div>
                            <h4 class="block_title">современная архитектура барселоны</h4>
                        </div>
                    </div>
                </a>

                <a href="" class="masonry__item block block_width_2 block_height_1 block--info_top">
                    <div class="block__img">
                        <img src="images/content/blocks_item_4.jpg" alt=""/>
                    </div>

                    <div class="block__views">242</div>

                    <div class="block__info">
                        <div class="block__stars"></div>
                        <div>
                            <div class="block__time_price">
                                <div class="block__time">
                                    <span class="block__time__value">5</span> часов
                                </div>
                                <div class="block__price">
                                    120 €
                                </div>
                            </div>

                            <div class="block__type">Экскурсия</div>
                            <h4 class="block_title">обзорная экскурсия на велосипеде</h4>
                        </div>
                    </div>
                </a>

                <a href="" class="masonry__item block block_width_1 block_height_1">
                    <div class="block__img">
                        <img src="images/content/blocks_item_5.jpg" alt=""/>
                    </div>
                    <div class="block__views">514</div>

                    <div class="block__info">
                        <div class="block__stars"></div>
                        <div>
                            <div class="block__time_price">
                                <div class="block__time">
                                    <span class="block__time__value">5</span> часов
                                </div>
                                <div class="block__price">
                                    120 €
                                </div>
                            </div>

                            <div class="block__type">Экскурсия</div>
                            <h4 class="block_title">ВСЯ ГОТИКА БАРСЕЛОНЫ ЗА один день</h4>
                        </div>
                    </div>
                </a>
            </div>
            <a href="" class="blocks__button_get_more_blocks ico_get_more">
                еще <span>9</span>
            </a>
            <div class="clearfix"></div>
        </div>
    </div>

    <!--ЭКСПЕРТЫ-->
    <div id="b_experts" class="scrollto page_width_1200">
        <h3 class="title bebas">
            ЭКСПЕРТЫ, готовые провести экскурсии по ХРАМУ святого семейтва
        </h3>
        <div class="blocks">
            <div class="masonry">
                <a href="" class="masonry__item block block_width_1 block_height_1">
                    <div class="block__img">
                        <img src="images/content/blocks_expert_1.jpg" alt=""/>
                    </div>

                    <div class="block__views">4312</div>

                    <div class="block__info">
                        <div class="block__stars block__stars--2"></div>
                        <div>
                            <div class="block__time_price">
                                <div class="block__time">
                                    <span class="block__time__value">8</span> часов
                                </div>
                                <div class="block__price">
                                    250 €
                                </div>
                            </div>

                            <div class="block__type">Экскурсия</div>
                            <h4 class="block_title">алексей зотов</h4>
                        </div>
                    </div>
                </a>

                <a href="" class="masonry__item block block_width_2 block_height_1">
                    <div class="block__img">
                        <img src="images/content/blocks_expert_2.jpg" alt=""/>
                    </div>

                    <div class="block__views">514</div>

                    <div class="block__info">
                        <div class="block__stars block__stars--4"></div>
                        <div>
                            <div class="block__time_price">
                                <div class="block__time">
                                    <span class="block__time__value">5</span> часов
                                </div>
                                <div class="block__price">
                                    120 €
                                </div>
                            </div>

                            <div class="block__type">Экскурсия</div>
                            <h4 class="block_title">алексей злобин</h4>
                        </div>
                    </div>
                </a>

                <a href="" class="masonry__item block block_width_2 block_height_2 block--info_top">
                    <div class="block__img">
                        <img src="images/content/blocks_expert_3.jpg" alt=""/>
                    </div>

                    <div class="block__views">1256</div>

                    <div class="block__info">
                        <div class="block__stars block__stars--3"></div>
                        <div>
                            <div class="block__time_price">
                                <div class="block__time">
                                    <span class="block__time__value">5</span> часов
                                </div>
                                <div class="block__price">
                                    120 €
                                </div>
                            </div>

                            <div class="block__type">Экскурсия</div>
                            <h4 class="block_title">кира кисилева</h4>
                        </div>
                    </div>
                </a>

                <a href="" class="masonry__item block block_width_2 block_height_1">
                    <div class="block__img">
                        <img src="images/content/blocks_expert_4.jpg" alt=""/>
                    </div>

                    <div class="block__views">242</div>

                    <div class="block__info">
                        <div class="block__stars block__stars--1"></div>
                        <div>
                            <div class="block__time_price">
                                <div class="block__time">
                                    <span class="block__time__value">5</span> часов
                                </div>
                                <div class="block__price">
                                    120 €
                                </div>
                            </div>

                            <div class="block__type">Экскурсия</div>
                            <h4 class="block_title">Александра Середа</h4>
                        </div>
                    </div>
                </a>

                <a href="" class="masonry__item block block_width_2 block_height_1">
                    <div class="block__img">
                        <img src="images/content/blocks_expert_5.jpg" alt=""/>
                    </div>
                    <div class="block__views">514</div>

                    <div class="block__info">
                        <div class="block__stars"></div>
                        <div>
                            <div class="block__time_price">
                                <div class="block__time">
                                    <span class="block__time__value">5</span> часов
                                </div>
                                <div class="block__price">
                                    120 €
                                </div>
                            </div>

                            <div class="block__type">Экскурсия</div>
                            <h4 class="block_title">Александр кудасов</h4>
                        </div>
                    </div>
                </a>

                <a href="" class="masonry__item block block_width_2 block_height_1">
                    <div class="block__img">
                        <img src="images/content/blocks_expert_6.jpg" alt=""/>
                    </div>
                    <div class="block__views">514</div>

                    <div class="block__info">
                        <div class="block__stars"></div>
                        <div>
                            <div class="block__time_price">
                                <div class="block__time">
                                    <span class="block__time__value">5</span> часов
                                </div>
                                <div class="block__price">
                                    120 €
                                </div>
                            </div>

                            <div class="block__type">Экскурсия</div>
                            <h4 class="block_title">жанна станевич</h4>
                        </div>
                    </div>
                </a>
            </div>
            <a href="" class="blocks__button_get_more_blocks ico_get_more">
                еще <span>9</span>
            </a>
            <div class="clearfix"></div>
        </div>
    </div>

    <!--ОТЗЫВЫ-->
    <? include 'parts/reviews.html'?>
</section>

<!--FOOTER-->
<? include 'parts/footer.html'?>