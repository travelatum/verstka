/**
 * Author: pzhemchugov
 * Date: 11.12.13
 */
(function($){
	jQuery.fn.customCheckbox = function(options){
		options = $.extend({
			//Базовые настройки
			labelClass			:	'custom_inp_wrap', 		//класс создаваемого label
			labelRadioClass 	: 	'custom_inp_radio',		//класс для label (type radio)
			labelToggleClass 	: 	'custom_inp_active',	//класс для выделенного обьекта
			inputClass 			: 	'custom_inp',		    //класс для input
            wrap                :   false                 //оборачивать инпут или нет

		}, options);

		function replacement(){
			$(this).addClass(options.inputClass);

//			if($(this).attr('type') == 'checkbox')
            if (options.wrap)
			    $(this).wrap('<label class="'+options.labelClass+'" for="'+this.id+'"></label>').after('<i></i>');

			if($(this).attr('type') == 'radio')
				$(this).parent().addClass(options.labelRadioClass);

			if($(this).is(':checked'))
				$(this).parent().addClass(options.labelToggleClass);

			$(this).unbind('change').bind('change',function(){
				$('label.'+options.labelClass+':not(:checked)').removeClass(options.labelToggleClass);
				$('input.'+options.inputClass+':checked').parent().addClass(options.labelToggleClass);
			});
		}
		return this.each(replacement);
	};
})(jQuery);