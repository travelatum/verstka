$(document).ready(function(){
//  filter filter__elem__options
    $('.filter__elem.f__select a').on('click',function(){
        $('.filter__elem__options', $(this).closest('.filter__elem')).slideToggle();
        return false;
    });
    $('.filter__elem__options__item').on('click',function(){
        var value = $(this).text();
        $('.tickets__input__input',$(this).closest('.filter__elem')).val(value);
        $('.filter__elem__value',$(this).closest('.filter__elem')).text(value);
        $(this).closest('.filter__elem__options').hide();
    });

    $('.f__calendar__inp').datepicker({
        showOn: 'button'
    });


//  gallery
    var horizontal_gallery = $('.gallery--horizontal');

    if (horizontal_gallery.length)
        $('.gallery__slider_wrap', horizontal_gallery).carouFredSel({
            items               : 4,
            width : 508,
            align: 'left',
            circular: true,
            auto: false,
            prev : '.gallery__btn--prev',
            next : '.gallery__btn--next',
            scroll : {
                items           : 1,
    //            easing          : "elastic",
                duration        : 600,
                pauseOnHover    : true
            }
        });

    var gallery_item = $('.gallery__slider__item');
    gallery_item.on('click', function(){
        var src = $(this).data('image');
        gallery_item.removeClass('gallery__slider__item--active');
        $(this).addClass('gallery__slider__item--active');

        var img = document.createElement("img");
        img.onload=function(){
            var $this = $(this);
            $this.appendTo('.gallery__image');
            $('img.current', $('.gallery__image')).fadeOut(300,function(){
                $(this).remove();
                $this.addClass('current');
            });

        };
        $(img).attr('src',src);

        return false;
    });

//  выбор количества билетов
    $('.tickets__input .tickets__input__btn.tickets__input__btn--select').on('click',function(){
        $('.tickets__input__options', $(this).closest('.tickets__input')).slideToggle();
        return false;
    });
    $('.tickets__input__options__item').on('click',function(){
        var value = $(this).text();
        $('.tickets__input__input',$(this).closest('.tickets__input')).val(value);
        $('.tickets__input__value',$(this).closest('.tickets__input')).text(value);
        $(this).closest('.tickets__input__options').hide();
    });
    $('.select_number').each(function(){
        var current = $('.select_number__input',$(this).parent()).val();
        $('.select_number__value',$(this)).text(current);
    });
    $('.select_number__btn--minus').on('click',function(){
        var current = $('.select_number__input',$(this).parent()).val();
        current--;
        current = (current <= 0)? 0 : current;
        $('.select_number__value',$(this).parent()).text(current);
        $('.select_number__input',$(this).parent()).val(current);

        if(current == 0){
            $(this).closest('.tickets__input').addClass('tickets__input--disable');
        }
        else {
            $(this).closest('.tickets__input').removeClass('tickets__input--disable');
        }

        return false;
    });
    $('.select_number__btn--plus').on('click',function(){
        var current = $('.select_number__input',$(this).parent()).val();
        current++;
        current = (current <= 0) ? 0 : current;
        $('.select_number__value',$(this).parent()).text(current);
        $('.select_number__input',$(this).parent()).val(current);

        if(current == 0){
            $(this).closest('.tickets__input').addClass('tickets__input--disable');
        }
        else {
            $(this).closest('.tickets__input').removeClass('tickets__input--disable');
        }

        return false;
    });

//  fullscreen image
    $(".js_fancybox").fancybox({
        width: 250,
        height: 100,
        autoSize: true,
        fitToView: true,
        titlePosition: "inside",
        transitionIn: "none",
        transitionOut: "none"});


//  blocks
    $('.masonry').masonry({
        itemSelector: '.masonry__item',
        columnWidth: 290,
        "gutter": 19
    });
    $('.blocks__button_get_more_blocks').on('click',function(){
        var append_to_block = $('.masonry',$(this).parent());


        jQuery.ajax({
            url:     	'parts/blocks.html',       		//Адрес подгружаемой страницы
            type:     	"GET",   		//Тип запроса
            dataType: 	"html",   		//Тип данных
            data: '',
            success: function(response) { 	//Если все нормально
                //append_to_block.masonry('appended', $('.masonry__item', $(response)), true );
                var bb = $(response).filter('.masonry__item');
                append_to_block.append(bb);
                append_to_block.masonry( 'appended', bb, true)


            },
            error: function(response) { 	//Если ошибка

            }
        });
        return false;
    });



//  POPUP
//  нестандартные инпуты
    $('.popup__inp_city').customCheckbox();
    $('.popup__inp_service').customCheckbox();
    $('.enter__input_checkbox').customCheckbox({wrap:true});
    $('.tickets__input_present').customCheckbox({wrap: true});

//  Отметить/отменить все
    $('.popup--services .reset_all').on('click',function(){
        var form = $(this).closest('form');
        $('input[type=checkbox]',form).prop('checked',false);
        $('label.custom_inp_active', form).removeClass('custom_inp_active');

        return false;
    });
    $('.popup--services .check_all').on('click',function(e){
        var form = $(this).closest('form');
        $('input[type=checkbox]', form).prop('checked',true);
        $('label.custom_inp_wrap', form).addClass('custom_inp_active');

        return false;
    });

//  попказать/закрыть попап
    $('.popup__close, .popup_bg').on('click',function(){closePopup(); return false;});
    $('.js-show_popup_city').on('click',function(){showPopupCity(); return false;});
    $('.js-show_popup_date').on('click',function(){showPopupDate(); return false;});
    $('.js-show_popup_service').on('click',function(){showPopupService(); return false;});

    function showPopupCity(date){
        var popup_select_city = $('.popup.popup--city');
        $('html').addClass('fancybox-margin fancybox-lock');
        $('.popup').hide();
        $('.popup__inp_date',popup_select_city).val(date);
        $('.f__calendar__btn span',popup_select_city).text(date);
        popup_select_city.show();
        $('.popup_wrap').fadeIn();
    }
    function showPopupDate(){
        $('html').addClass('fancybox-margin fancybox-lock');
        $('.popup').hide();
        $('.popup.popup--date').show();
        $('.popup_wrap').fadeIn();
        $('.calendar__days__month').each(function(){
            $(this).attr('data-top',$(this).offset().top - $(this).parent().offset().top -7)
        });
    }
    function showPopupService(){
        $('html').addClass('fancybox-margin fancybox-lock');
        $('.popup').hide();
        $('.popup.popup--services').show();
        $('.popup_wrap').fadeIn();
    }
    function closePopup(){
        $('.popup_wrap').fadeOut();
    }

    $('.popup--city .f__calendar__btn').on('click',function(){
        showPopupDate();
        return false;
    });
    $('.popup--date .popup__button').on('click',function(){
        var date = $('.popup--date input.selected_date').val();
        showPopupCity(date);
        return false;
    });

//  скролл месяцев
    $('.calendar__days__scroll').scroll(function(){
        var section = $('.calendar__days__month'),
            months = $('.calendar_months'),
            windowPosition =$(this).scrollTop();

        section.each(function () {
            var top =  $(this).data('top'),
                bottom = $(this).data('top') + $(this).height();

            if ((windowPosition >= top) && (windowPosition <= bottom)) {
                $('.calendar_months__item a',months).removeClass('active');
                months.find('li a[href~="#' + this.id + '"]').addClass('active');
            }
            if (section.parent().height() - $('.calendar__days__scroll').height()+7 == windowPosition) {
                $('.calendar_months__item a',months).removeClass('active');
                $('.calendar_months__item:last-child a',months).addClass('active');
            }

        });

    });
//  клик в месяц
    $('.calendar_months__item a').on('click',function(){
        $('.calendar__days__scroll').animate({
            scrollTop: $($(this).attr('href')).data('top') + 'px'
        }, {
            duration: 1000
        });
        return false;
    });

//  выбор даты
    $('.calendar__day a').on('click',function(){
        var dates = [];
        $(this).toggleClass('selected');
        $('.calendar__day a.selected').each(function(i, elem){
            dates[i] = $(this).data('date');
        });
        $('.selected_date').val(dates);
        return false;
    });




//  ENTER
    var bookmark = $('.enter__tabs__bookmark');
    bookmark.on('click',function(){
        var id = $(this).attr('href').slice(1);
        if ($(this).hasClass('enter__tabs__bookmark--active'))
            return false;

        bookmark.removeClass('enter__tabs__bookmark--active');
        $(this).addClass('enter__tabs__bookmark--active');

        $('.enter__tab').hide();
        $('.enter__tab#'+id).show();

        return false;
    });

    $('.enter__show_password')
        .on('mousedown',function(e){
            e.stopPropagation();
        $('input', $(this).parent()).attr('type','text');
    }).on('mouseup',function(e){
            e.stopPropagation();
        $('input', $(this).parent()).attr('type','password');
    });

    $('a.enter__remember_password').on('click',function(){
        $('.remember').show();
        return false;
    });

    $('a.remember__prev_link').on('click',function(){
        $('.enter__tab.remember'). hide();
        return false;
    });

    $('.register__item_country').on('click',function(){
        $('.register__options',$(this).parent()).slideToggle();
        return false;
    });
    $('.register__options__item').on('click',function(){
        var value = $('.register__item_country_code',$(this)).text();
        $('.register__item_country', $(this).closest('.register__item')).html($(this).html());
        $('.enter__input--phone_code').val(value);
        $(this).closest('.register__options').hide();
        return false;
    });
    $('.enter__input.enter__input--phone').mask('999 999-99-99');



//  SCROLL
    var b_nav = $('.cover__nav'),
        show_on = (b_nav.length > 0) ? b_nav.offset().top - 20 : 0;

    b_nav.wrap('<div class="cover__nav_wrap"><div class="cover__nav_fixed_on_scroll"></div></div>');

    b_nav.stickyNavbar({
        activeClass:'cover__nav__item--active'
    });

    $('.cover__nav__item').on('click',function(){
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 71  + 'px'
        }, {
            duration: 1000
        });
        return false;
    });

    $(window).scroll(function(){
        if ($(this).scrollTop() > show_on)
            $('.cover__nav_fixed_on_scroll').addClass('cover__nav_fixed_on_scroll--fixed');
        else
            $('.cover__nav_fixed_on_scroll').removeClass('cover__nav_fixed_on_scroll--fixed');
    });



//  send review
    //select stars
    $('.make_review__stars__item').on({
        click: function() {
            $('.make_review__stars__item', $(this).parent()).removeClass('make_review__stars__item--select');
            $( this ).addClass( "make_review__stars__item--select").prevAll('.make_review__stars__item').addClass('make_review__stars__item--select');
            $('input[type="hidden"]',$(this).parent()).val($(this).index() + 1);
            return false
        }, mouseenter: function() {
            $( this ).addClass( "make_review__stars__item--active").prevAll('.make_review__stars__item').addClass('make_review__stars__item--active');
        }, mouseleave: function() {
            $( this ).removeClass( "make_review__stars__item--active" ).prevAll('.make_review__stars__item').removeClass('make_review__stars__item--active');
        }
    });




    //cover--index
    $('.cover--index .cover__background_img').each(function(){
        $('.cover--index .index__pagination').append('<a class="index__pagination__item" href=""></a>');
    });
    $('.cover--index .index__pagination__item:first-child').addClass('index__pagination__item--current');
    $('.cover--index .index__pagination__item').on('click',function(){
        if($(this).hasClass('index__pagination__item--current'))
            return false;

        $('.cover--index .index__pagination__item').removeClass('index__pagination__item--current');
        $(this).addClass('index__pagination__item--current');

        var num = $(this).index();




        $('.cover--index .cover__background_img').eq(num).fadeIn();
        $('.cover--index .cover__background_img--current').fadeOut(true,function(){
            $(this).removeClass('cover__background_img--current');
            $('.cover--index .cover__background_img').eq(num).addClass('cover__background_img--current');
        });

        $('.cover__title_index').removeClass('cover__title_index--active').eq(num).addClass('cover__title_index--active');

        return false;
    });













});