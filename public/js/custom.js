$(function() {

    $('body')
        .on('click', '#validate', function() {
            if (validate(document.getElementById('validate_form'))) {
                toaster('', 'toast-success', 'fas fa-check', 'Inputs successfully meet!', 5000);
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

            _code.innerHTML = '$("' + _type + '", "' + _theme + '", "' + _icon + '", "' + _message + '", ' + _delay + ');';

            toaster(_type, _theme, _icon == '' ? 'fas fa-check' : _icon, _message, _delay);
        })
});