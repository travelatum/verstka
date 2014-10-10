<? include 'parts/head.html'?>

<!--HEADER-->
<? include 'parts/header_1.html' ?>
<!--/HEADER-->

<section class="page">
    <!--ШАПКА-->
    <div class="cover">
        <div class="cover__background">
            <img src="images/content/cover_bg.jpg" alt="" class="cover__background_img"/>
        </div>
        <div class="cover__content page_width_1200">


            <h1 class="cover__title bebas">Всплывающие окна</h1>


                <a href="" class="js-show_popup_city">Выберите город</a>
                <a href="" class="js-show_popup_date">Выберите даты</a>
                <a href="" class="js-show_popup_service">Выберите типы услуг</a>

        </div>
    </div>
</section>

<div class="popup_wrap">
    <div class="popup_bg"></div>
    <? include 'parts/popup_city.html'?>
    <? include 'parts/popup_date.html'?>
    <? include 'parts/popup_service.html'?>
</div>

<!--FOOTER-->
<? include 'parts/footer.html'?>