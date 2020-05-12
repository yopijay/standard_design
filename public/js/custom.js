$(function() {
    let links = $('.navbar-side > ul').find('.navbar-link');
    let brandBtn = $('body').find('.btn-brand');
    let form = $('#sample-form-validation');

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
        .on('click', '#validate', function() {
            if (form.validate()) {
                toaster.success("", "Success!").show(2500);
            }
        })
        .on('click', '#validate-toast', function() {
            if (form.validate(true)) {
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
                _code.innerHTML = 'toaster.danger("' + _type + '", "' + _message + '").show(' + _delay + ');';
            } else if (_theme == 'toast-warning') {
                toaster.warning(_type, _message).show(_delay);
                _code.innerHTML = 'toaster.warning("' + _type + '", "' + _message + '").show(' + _delay + ');';
            } else if (_theme == 'toast-info') {
                toaster.info(_type, _message).show(_delay);
                _code.innerHTML = 'toaster.info("' + _type + '", "' + _message + '").show(' + _delay + ');';
            }
            // }
        })
});