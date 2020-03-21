$(function() {
    let list = $('.navbar-side > ul > .list');
    let links = $('.navbar-side > ul').find('.navbar-link');

    $('.content').css({ display: 'none' });
    $('#dashboard-page').css({ display: 'block' });

    sidenavFunction(list, links);
    brandButtons();
});

// Sidenav Function
function sidenavFunction(list, links) {
    for (var count = 0; count < list.length; count++) {
        list[count].addEventListener('click', function(e) {
            e.stopPropagation();

            if (this.classList.contains('active')) {
                this.classList.remove('active');
            } else if (this.parentElement.parentElement.classList.contains('active')) {
                this.classList.add('active');
            } else {
                for (var item = 0; item < list.length; item++) {
                    list[item].classList.remove('active');
                }

                this.classList.add('active');
            }
        });
    }

    for (var count = 0; count < links.length; count++) {
        links[count].addEventListener('click', function(e) {
            e.stopPropagation();

            if (this.classList.contains('active')) {
                this.classList.add('active');
            } else if (this.parentElement.parentElement.classList.contains('active')) {
                this.classList.add('active');
            } else {
                for (var item = 0; item < links.length; item++) {
                    links[item].classList.remove('active');
                }

                this.classList.add('active');
            }
        });
    }

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
            case 'login-page':
                $('#login-page').css({ display: 'block' });
                break;
            case '404-page':
                $('#404-page').css({ display: 'block' });
                break;
        }
    });
}

// Branded Buttons
function brandButtons() {
    var brandlist = {
        behance: "<i class='fab fa-behance'></i><span>Behance</span>",
        css3: "<i class='fab fa-css3'></i><span>CSS3</span>",
        dribbble: "<i class='fab fa-dribbble'></i><span>Dribble</span>",
        dropbox: "<i class='fab fa-dropbox'></i><span>Dropbox</span>",
        facebook: "<i class='fab fa-facebook-f'></i><span>Facebook</span>",
        flickr: "<i class='fab fa-flickr'></i><span>Flickr</span>",
        github: "<i class='fab fa-github'></i><span>Github</span>",
        googlePlus: "<i class='fab fa-google-plus-g'></i><span>Google Plus</span>",
        html5: "<i class='fab fa-html5'></i><span>HTML5</span>",
        instagram: "<i class='fab fa-instagram'></i><span>Instagram</span>",
        linkedin: "<i class='fab fa-linkedin-in'></i><span>LinkedIn</span>",
        openid: "<i class='fab fa-openid'></i><span>OpenID</span>",
        pinterest: "<i class='fab fa-pinterest'></i><span>Pinterest</span>",
        reddit: "<i class='fab fa-reddit'></i><span>Reddit</span>",
        spotify: "<i class='fab fa-spotify'></i><span>Spotify</span>",
        stackOverflow: "<i class='fab fa-stack-overflow'></i><span>Stack-Overflow</span>",
        tumblr: "<i class='fab fa-tumblr'></i><span>Tumblr</span>",
        twitter: "<i class='fab fa-twitter'></i><span>Twitter</span>",
        vimeo: "<i class='fab fa-vimeo-v'></i><span>Vimeo</span>",
        vk: "<i class='fab fa-vk'></i><span>VK</span>",
        xing: "<i class='fab fa-xing'></i><span>Xing</span>",
        yahoo: "<i class='fab fa-yahoo'></i><span>Yahoo</span>",
        youtube: "<i class='fab fa-youtube'></i><span>Youtube</span>"
    };

    var brandbtnclass = [];

    $('.btn-brand').each(function() {
        brandbtnclass.push(
            $(this).attr('class').split(' ')
        );
    });

    $.each(brandbtnclass, function(key, value) {
        $.each(brandlist, function(key1, value1) {
            if (jQuery.inArray(key1, value) == 1) {
                $(`.btn-brand.${key1}`).html(value1);
                return false;
            }
        });
    });
}

// Toaster Function
function toaster(_type, _theme, _icon, _message, _delay) {
    var _toast = '<div class= "toaster ' + _type + ' ' + _theme + '" id= "toaster">' +
        '<div class= "row mx-0">' +
        '<div class= "col-md-2 toaster-icon px-0 text-center">' +
        '<i class= "' + _icon + '"></i>' +
        '</div>' +
        '<div class= "col-md-8 toaster-message px-0">' +
        '<p>' + _message + '</p>' +
        '</div>' +
        '<div class= "col-md-2 toaster-close px-0 text-center">' +
        '<button type= "button" id= "close-btn"><i class= "fas fa-times"></i></button>' +
        '</div>' +
        '</div>' +
        '</div>';

    document.body.insertAdjacentHTML('afterbegin', _toast);
    showToast();

    function showToast() {
        const toaster = $('body').find('#toaster');
        let toastWidth = screen.width - 320;

        toaster.css({
            'display': 'block',
            'width': 300,
            'left': toastWidth,
            'top': 10
        });

        setTimeout(function() {
            toaster.remove();
        }, _delay);
    }

    $('#close-btn').click(function() {
        $('#toaster').delay(2000).remove();
    });
}

// Validations
function validate(form) {
    let inputs = form.getElementsByClassName('form-control');
    let result = true;

    let validEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let validPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])+(?=.*[^a-zA-Z0-9])(?!.*\s).{6,30}$/;

    let _value = '';
    let _type = '';
    let _label = '';
    let _message = '';

    toastValidation();
    inputValidation();

    function toastValidation() {
        for (var count = 0; count < inputs.length; count++) {
            if (inputs[count].tagName == 'INPUT') {
                const _id = inputs[count].id;

                _value = inputs[count].value;
                _type = inputs[count].type;
                _label = $('#' + _id + '').attr('input-label');
                _message = '';

                if (_value == '') {
                    _message = _label + ' must not be empty!';
                    toaster('', 'toast-danger', 'fas fa-exclamation-triangle', _message, 5000);
                    return false;
                } else if (_type == 'email' && !validEmail.test(_value)) {
                    _message = 'Invalid ' + _label + ' format!';
                    toaster('', 'toast-danger', 'fas fa-exclamation-triangle', _message, 5000);
                    return false;
                } else if (_type == 'password' && !_value.match(validPassword)) {
                    _message = _label + ' must have at least 6 character with UPPERCASE, lowercase, number and a Special Characters!';
                    toaster('', 'toast-danger', 'fas fa-exclamation-triangle', _message, 5000);
                    return false;
                }

            }
        }
        return true;
    }

    function inputValidation() {
        for (var count = 0; count < inputs.length; count++) {
            if (inputs[count].tagName == 'INPUT') {
                const _id = inputs[count].id;

                _value = inputs[count].value;
                _type = inputs[count].type;
                _label = $('#' + _id + '').attr('input-label');
                _message = '';

                if (_value == '') {
                    $('#' + _id + '').addClass('form-danger');
                    result = false;
                } else if (_type == 'email' && !validEmail.test(_value)) {
                    $('#' + _id + '').removeClass('form-danger');
                    $('#' + _id + '').addClass('form-warning');
                    result = false;
                } else if (_type == 'password' && !_value.match(validPassword)) {
                    $('#' + _id + '').removeClass('form-danger');
                    $('#' + _id + '').addClass('form-warning');
                    result = false;
                } else {
                    $('#' + _id + '').removeClass('form-danger');
                    $('#' + _id + '').removeClass('form-warning');
                }
            }
        }
    }
    return result;
}