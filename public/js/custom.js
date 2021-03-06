$(function() {
    let links = $('#main-header .agm-navbar-side > ul').find('.agm-side-link');
    let brandBtn = $('body').find('.btn-brand');
    let _validate = $('#input-validation');

    $('.content').css({ display: 'none' });
    $('#dashboard-page').css({ display: 'block' });

    $(links).on('click', function() {
        let content = $(this).find('a').attr('content');
        $('.content').css({ display: 'none' });

        if (document.getElementById(content)) {
            $('#' + content + '').css({ display: 'block' });
        }
    });

    $('#sample').datatable();

    $('body')
        .on('click', '#input-validate', function() {
            if (_validate.validate()) {
                toaster.success("", "Success!").show(2500);
            }
        })
        .on('click', '#toast-validate', function() {
            if (_validate.validate(true)) {
                toaster.success("", "Success!").show(2500);
            }
        })
        .on('click', '#show-toast', function() {
            let toastType = $('input[name= "toast_type"]');
            let toastTheme = $('input[name= "toast_theme"]');

            let _type = '';
            let _theme = '';
            let _message = $('textarea[name= "toast_message"]').val();
            let _delay = $('input[name= "toast_delay"]').val();
            let _icon = $('input[name= "toast_icon"]').val();
            let _code = document.getElementById('toaster-code');
            let form = $('#toastContent');

            for (var count = 0; count < toastType.length; count++) {
                if ($('#' + toastType[count].id + '').is(':checked')) {
                    _type = toastType[count].value;
                }
            }

            for (var count = 0; count < toastTheme.length; count++) {
                if ($('#' + toastTheme[count].id + '').is(':checked')) {
                    _theme = toastTheme[count].value;
                }
            }

            // if (form.validate(true)) {
            if (_theme == 'toast-success') {
                toaster.success(_type, _message).show(_delay);
                _code.innerHTML = 'toaster.success("' + _type + '", "' + _message + '").show(' + _delay + ');';
            } else if (_theme == 'toast-danger') {
                toaster.error(_type, _message).show(_delay);
                _code.innerHTML = 'toaster.error("' + _type + '", "' + _message + '").show(' + _delay + ');';
            } else if (_theme == 'toast-warning') {
                toaster.warning(_type, _message).show(_delay);
                _code.innerHTML = 'toaster.warning("' + _type + '", "' + _message + '").show(' + _delay + ');';
            } else if (_theme == 'toast-info') {
                toaster.info(_type, _message).show(_delay);
                _code.innerHTML = 'toaster.info("' + _type + '", "' + _message + '").show(' + _delay + ');';
            }
            // }
        })
        .on('keyup', '.mask-input', function() {
            let _id = $(this)[0].id;

            if(document.getElementById(_id)) {
                document.getElementById(_id + '-masked').innerHTML = $('#' + _id + '').val();
                document.getElementById(_id + '-unmasked').innerHTML = $('#' + _id + '').unmask();
            }
        })
        .on('click', '.btn-copy', function() {
            $(this).copyText();
        })
});

$.fn.copyText = function() {
    let _id = this[0].id;
    let _text = $('#' + _id + '').attr('copy-data');

    let _element = '<input id= "' + _id + '-text">';
    document.getElementById(_id).insertAdjacentHTML('afterend', _element);
    $('#' + _id + '-text').val(_text).select();
    document.execCommand('copy');
    $('#' + _id + '-text').remove();

    toaster.success('', 'Copied to clipboard!').show(2500);
}