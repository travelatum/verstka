<? include 'parts/head.html'?>

<!--HEADER-->
<? include 'parts/header_no_bg.html' ?>
<!--/HEADER-->

<section class="page">

<!--ШАПКА-->
<div class="cover cover--experts">
    <div class="cover__background">
        <img src="images/content/cover_experts_bg.jpg" alt="" class="cover__background_img"/>
    </div>
    <div class="cover__content position_relative">
        <div class="page_width_1200">
            <div class="bread_crumbs bebas">
                <a href="" class="bread_crumbs__item">Эксперты</a>
                <a href="" class="bread_crumbs__item">Испания</a>
            </div>

            <h1 class="cover__title bebas">барселона</h1>

            <div class="page_width_1200 cover__buttons_share">
                <a class="cover__btn_share ico_share" href=""></a>
                <a class="cover__btn_like ico_like" href=""></a>
                <a href="" class="cover__btn_message ico_message"></a>
            </div>
        </div>
    </div>
</div>

<!--ЭКСКУРСИИ-->
<div class="page_width_1200">
    <? include 'parts/filter.html'?>

    <div class="blocks">
        <div class="masonry">

            <? include 'parts/blocks.html'?>

        </div>
        <a href="" class="blocks__button_get_more_blocks ico_get_more">
            еще <span>234</span>
        </a>
        <div class="clearfix"></div>
    </div>
</div>
</section>

<!--FOOTER-->
<? include 'parts/footer.html'?>