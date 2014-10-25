jQuery.event.fixHooks.drop = { props: [ "dataTransfer" ] };

$("document").ready(function(){
    var dropZone = $('.dropzone');

    function handleFileSelect(e) {
        e.stopPropagation();
        e.preventDefault();

        var files = e.dataTransfer && e.dataTransfer.files || e.target && e.target.files || [];

        var output = [];

        $(e.target).parent().find(".error").remove();

        for (var i = 0, f; f = files[i]; i++) {
            if ((f.type != 'image/jpeg' && f.type != 'image/png') || f.size > 5242880) {
                $('<div class="error">Разрешено загружать файлы в формате<br />JPG, PNG не более 2 мб.</div>').insertAfter(e.target);
                dropZone.find('.dropzone__control').blur();
                return false;
            }
            output.push('<div class="dropzone__attached">', escape(f.name) + '<div class="dropzone__remove">&times;</div></div>');
        }

        if (!dropZone.find('.dropzone__attached-files').length) {
            dropZone.append('<div class="dropzone__attached-files"></div>');
        }

        dropZone.find('.dropzone__attached-files').html(output);
        dropZone.find('.dropzone__control').blur();

        $(e.target.form).trigger("submit");
    }

    function addClass() {
        dropZone.addClass('dropzone_hovered_yes');
    }

    function removeClass() {
        dropZone.removeClass('dropzone_hovered_yes');
    }

    if (window.File && window.FileReader && window.FileList && window.Blob) {
        dropZone.removeClass('dropzone_html5_no').addClass('dropzone_html5_yes');

        /*
         dropZone.on('drop', function(e) {
         handleFileSelect(e);
         });
         */

        dropZone.on('dragover', function(e) {
            e.preventDefault();
            addClass();
        });

        dropZone.on('dragleave', function() {
            removeClass();
        });

        $(document).on('change', '.dropzone__control', function(e) {
            handleFileSelect(e);
        });

        $(document).on('click focus', '.dropzone__control', function() {
            addClass();
        });

        $(document).on('blur', '.dropzone__control', function() {
            removeClass();
        });

        $(document).on('click', '.dropzone__remove', function(e) {
            e.stopPropagation();
            e.preventDefault();

            var control = dropZone.find('.dropzone__control');

            var name = control.attr('name');
            control.remove();
            dropZone.append('<input type="file" name="' + name + '" class="dropzone__control">');
            $('.dropzone__attached-files').html('');
        });
    }
});