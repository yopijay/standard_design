$(function() {
    let links = $('.navbar-side > ul').find('.navbar-link');
    let brandBtn = $('body').find('.btn-brand');
    let form = $('#validate_form');

    $('.content').css({ display: 'none' });
    $('#dashboard-page').css({ display: 'block' });

    $(links).on('click', function() {
        let content = $(this).find('a').attr('content');
        $('.content').css({ display: 'none' });

        switch (content) {
            case 'dashboard-page':
                $('#dashboard-page').css({ display: 'block' });
                break;
            case 'colors-page':
                $('#color-page').css({ display: 'block' });
                break;
            case 'typography-page':
                $('#typography-page').css({ display: 'block' });
                break;
            case 'buttons-page':
                $('#button-page').css({ display: 'block' });
                break;
            case 'cards-page':
                $('#card-page').css({ display: 'block' });
                break;
            case 'toasters-page':
                $('#toaster-page').css({ display: 'block' });
                break;
            case 'badge-page':
                $('#badge-page').css({ display: 'block' });
                break;
            case 'breadcrumb-page':
                $('#breadcrumb-page').css({ display: 'block' });
                break;
            case 'dropdown-page':
                $('#dropdown-page').css({ display: 'block' });
                break;
            case 'modal-page':
                $('#modal-page').css({ display: 'block' });
                break;
            case 'radio-page':
                $('#radio-page').css({ display: 'block' });
                break;
            case 'checkbox-page':
                $('#checkbox-page').css({ display: 'block' });
                break;
            case 'toggles-page':
                $('#toggle-page').css({ display: 'block' });
                break;
            case 'input-page':
                $('#input-page').css({ display: 'block' });
                break;
            case 'standard-tbl-page':
                $('#standard-tbl-page').css({ display: 'block' });
                break;
            case 'data-tbl-page':
                $('#datatable-page').css({ display: 'block' });
                break;
            case 'login-page':
                $('#login-page').css({ display: 'block' });
                break;
            case '404-page':
                $('#404-page').css({ display: 'block' });
                break;
            case 'listgroup-page':
                $('#listgroup-page').css({ display: 'block' });
                break;
        }
    });

    $('#sample').datatable();

    $('body')
        .on('click', '#validate', function() {
            if (form.validate()[0] && form.validate()[1]) {
                toaster.toast('', 'toast-success', 'fas fa-check', 'Inputs successfully correct!').show(3000);
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