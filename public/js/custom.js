$(function() {

    $('body')
        .on('click', '#validate', function() {
            let form = document.getElementById('validate_form');
            if (validate(form) == 0) {
                toaster('', 'toast-success', 'fas fa-check', 'Successfully Login', 5000);
            } else {
                toaster('', 'toast-danger', 'fas fa-exclamation-triangle', 'Make sure that all fields are filled up!', 5000);
            }
        })
});