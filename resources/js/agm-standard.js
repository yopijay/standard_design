$(function() {
    // Brand buttons
    brandButtons();
    // Activate custom navbar
    $('.agm-navbar').navbar();
    $('.agm-navbar').sidenav();
    // Activate popover
    $('[data-toggle= "popover"]').popover();
    // Activate tooltip
    $('[data-toggle= "tooltip"]').tooltip();
    // Activate Mask input
    $(document.getElementsByTagName('input')).mask();
});

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
var toaster = (function() {
    var success = function(_type, _message) {
        var _toast = '<div class= "toaster ' + _type + ' toast-success" id= "toaster">' +
            '<div class= "row mx-0">' +
            '<div class= "col-2 toaster-icon px-0 text-center">' +
            '<i class= "fas fa-check"></i>' +
            '</div>' +
            '<div class= "col-8 toaster-message px-0">' +
            '<p>' + _message + '</p>' +
            '</div>' +
            '<div class= "col-2 toaster-close px-0 text-center">' +
            '<button type= "button" id= "close-btn"><i class= "fas fa-times"></i></button>' +
            '</div>' +
            '</div>' +
            '</div>';

        if (document.body.contains(document.getElementById('toaster'))) {
            document.getElementById('toaster').remove();
        }
        document.body.insertAdjacentHTML('afterbegin', _toast);

        return this;
    }
    var error = function(_type, _message) {
        var _toast = '<div class= "toaster ' + _type + ' toast-danger" id= "toaster">' +
            '<div class= "row mx-0">' +
            '<div class= "col-2 toaster-icon px-0 text-center">' +
            '<i class= "fas fa-exclamation-triangle"></i>' +
            '</div>' +
            '<div class= "col-8 toaster-message px-0">' +
            '<p>' + _message + '</p>' +
            '</div>' +
            '<div class= "col-2 toaster-close px-0 text-center">' +
            '<button type= "button" id= "close-btn"><i class= "fas fa-times"></i></button>' +
            '</div>' +
            '</div>' +
            '</div>';

        if (document.body.contains(document.getElementById('toaster'))) {
            document.getElementById('toaster').remove();
        }
        document.body.insertAdjacentHTML('afterbegin', _toast);

        return this;
    }
    var warning = function(_type, _message) {
        var _toast = '<div class= "toaster ' + _type + ' toast-warning" id= "toaster">' +
            '<div class= "row mx-0">' +
            '<div class= "col-2 toaster-icon px-0 text-center">' +
            '<i class= "fas fa-radiation"></i>' +
            '</div>' +
            '<div class= "col-8 toaster-message px-0">' +
            '<p>' + _message + '</p>' +
            '</div>' +
            '<div class= "col-2 toaster-close px-0 text-center">' +
            '<button type= "button" id= "close-btn"><i class= "fas fa-times"></i></button>' +
            '</div>' +
            '</div>' +
            '</div>';

        if (document.body.contains(document.getElementById('toaster'))) {
            document.getElementById('toaster').remove();
        }
        document.body.insertAdjacentHTML('afterbegin', _toast);

        return this;
    }
    var info = function(_type, _message) {
        var _toast = '<div class= "toaster ' + _type + ' toast-info" id= "toaster">' +
            '<div class= "row mx-0">' +
            '<div class= "col-2 toaster-icon px-0 text-center">' +
            '<i class= "fas fa-info-circle"></i>' +
            '</div>' +
            '<div class= "col-8 toaster-message px-0">' +
            '<p>' + _message + '</p>' +
            '</div>' +
            '<div class= "col-2 toaster-close px-0 text-center">' +
            '<button type= "button" id= "close-btn"><i class= "fas fa-times"></i></button>' +
            '</div>' +
            '</div>' +
            '</div>';

        if (document.body.contains(document.getElementById('toaster'))) {
            document.getElementById('toaster').remove();
        }
        document.body.insertAdjacentHTML('afterbegin', _toast);

        return this;
    }
    var show = function(_delay) {
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
        }, _delay == null ? 2000 : _delay);

        $('#close-btn').click(function() {
            toaster.remove();
        });

        return this;
    }
    return {
        success: success,
        error: error,
        warning: warning,
        info: info,
        show: show
    }
})();

// Sidenav Function
$.fn.sidenav = function() {
    for(var count = 0; count < this.length; count++) {
        let _id = this[count].id; // Id of the navbar
        let _headerHeight = this[count].offsetHeight; // Height of the header
        
        if($('#' + _id + '').find('.agm-navbar-side').length != 0) {
            let _sidenavWidth = $('#' + _id + ' .agm-navbar-side')[0].offsetWidth; // Width of the sidenav

            // Icons to be added
            let _dropdownIcon = '<i class= "fas fa-caret-right side-icon"></i>'; // Icon for link that has sub-links
            let _toggleIcon = '<div class= "agm-toggle-menu" id= "' + _id + '-toggle"><i class= "fas fa-chevron-right"></i></div>'; // Icon for toggle button for sidenav

            // Sidenav class functionality
            let _link = $('#' + _id + ' .agm-navbar-side > ul > li');
            let _subLink = $('#' + _id + ' .agm-navbar-side > ul').find('.agm-side-link');

            // Finding elements
            let _dropdown = $('#' + _id + ' .agm-navbar-side').find('.agm-side-dropdown > a'); // Get all link that has a class agm-side-dropdown
            let _toggle = $('#' + _id + '').find('.agm-navbar-side'); // Get all navbar that has sidenavs

            _toggle[0].insertAdjacentHTML('beforebegin', _toggleIcon);
            $('#' + _id + '-toggle').css({ top: (_headerHeight + 5) + 'px', left: '0' });
            $('#' + _id + '-toggle').on('click', function() {
                if($(this).hasClass('active')) {
                    $(this).removeClass('active');
                    $('#' + _id + ' .agm-navbar-side').css({ left: '-' + _sidenavWidth + 'px', transition: 'all 0.2s ease-in-out' });
                    $(this).css({ left: '0', transition: 'all 0.2s ease-in-out' });
                }
                else {
                    $(this).addClass('active');
                    $('#' + _id + ' .agm-navbar-side').css({ left: '0', transition: 'all 0.2s ease-in-out' });
                    $(this).css({ left: _sidenavWidth + 'px', transition: 'all 0.2s ease-in-out' });
                }
            });

            for(var index = 0; index < _dropdown.length; index++) {
                _dropdown[index].insertAdjacentHTML('beforeend', _dropdownIcon);
            }

            $(_link).on('click', function() {
                $(_link).removeClass('active');
                $(this).addClass('active');
            });
        
            $(_subLink).on('click', function() {
                $(_subLink).removeClass('active');
                $(this).addClass('active');
            });

            responsive();
            $('#' + _id + ' .agm-navbar-side').css({ top: _headerHeight + 'px', height:  ($(window).height() - _headerHeight) + 'px' });

            $(window).resize(function() {
                responsive();
                $('#' + _id + ' .agm-navbar-side').css({ top: _headerHeight + 'px', height:  ($(this).height() - _headerHeight) + 'px' });
            });

            function responsive() {
                if(this.matchMedia('(max-width: 1024px)').matches) {
                    $('#' + _id + ' .agm-navbar-side').css({ left: '-' + _sidenavWidth + 'px', transition: 'all 0.2s ease-in-out' });
                    $('#' + _id + '-toggle').css({ display: 'block' });
                
                    $(_subLink).on('click', function() {
                        $('#' + _id + '-toggle').removeClass('active');
                        $('#' + _id + ' .agm-navbar-side').css({ left: '-' + _sidenavWidth + 'px', transition: 'all 0.2s ease-in-out' });
                        $('#' + _id + '-toggle').css({ left: '0', transition: 'all 0.2s ease-in-out' });
                    });
                }
                else {
                    $('#' + _id + ' .agm-navbar-side').css({ left: '0', transition: 'all 0.2s ease-in-out' });
                    $('#' + _id + '-toggle').css({ display: 'none' });
                
                    $(_subLink).on('click', function() {
                        $('#' + _id + ' .agm-navbar-side').css({ left: '0', transition: 'all 0.2s ease-in-out' });
                    });
                }
            }
        }
    }
    return this;
}

// Navbar Function
$.fn.navbar = function() {
    for(var count = 0; count < this.length; count++) {
        let _id = this[count].id;
        let _headerHeight = this[count].offsetHeight; // Height of the header
        
        if($('#' + _id + '').find('.agm-navbar-nav').length != 0) {
            let _link = $('#' + _id + ' .agm-navbar-nav > ul > li');
            let _subLink = $('#' + _id + ' .agm-navbar-nav > ul').find('.agm-nav-link');

            let _toggleIcon = '<div class= "agm-toggle-dots" id= "' + _id + '-nav-toggle"><i class= "fas fa-ellipsis-v"></i></div>';

            let _toggle = $('#' + _id + '').find('.agm-navbar-nav');
            _toggle[0].insertAdjacentHTML('beforebegin', _toggleIcon);

            let _toggleHeight = $('#' + _id + '-nav-toggle')[0].offsetHeight;

            $('#' + _id + ' .agm-navbar-nav').css({ top: _headerHeight + 'px' });

            $(_link).on('click', function() {
                $(_link).removeClass('active');
                $(this).addClass('active');
            });
            $(_subLink).on('click', function() {
                $(_subLink).removeClass('active');
                $(this).addClass('active');
            });

            $('#' + _id + '-nav-toggle').on('click', function() {
                if($(this).hasClass('active')) {
                    $(this).removeClass('active');
                    $('#' + _id + ' .agm-navbar-nav').css({ right: '-' + $('#' + _id + ' .agm-navbar-nav')[0].offsetWidth + 'px', transition: 'all 0.2s ease-in-out' });
                }
                else {
                    $(this).addClass('active');
                    $('#' + _id + ' .agm-navbar-nav').css({ right: '0', transition: 'all 0.2s ease-in-out' });
                }
            });

            responsive();
            $(window).resize(function() {
                responsive();
            });

            function responsive() {
                if(this.matchMedia('(max-width: 1024px)').matches) {
                    $('#' + _id + '-nav-toggle').css({ display: 'block' });
                    var _linkHeight = $('#' + _id + ' .agm-navbar-nav > ul').find('.agm-nav-link')[0].offsetHeight - 20;

                    $('#' + _id + ' .agm-navbar-nav > ul > li > ul').css({ padding: _linkHeight + 'px 0 0 0' });
                    $('#' + _id + ' .agm-navbar-nav').css({ right: '-' + $('#' + _id + ' .agm-navbar-nav')[0].offsetWidth + 'px', transition: 'all 0.2s ease-in-out' });

                    $(_subLink).on('click', function() {
                        $('#' + _id + '-nav-toggle').removeClass('active');
                        $('#' + _id + ' .agm-navbar-nav').css({ right: '-' + $('#' + _id + ' .agm-navbar-nav')[0].offsetWidth + 'px', transition: 'all 0.2s ease-in-out' });
                    });
                }
                else {
                    $('#' + _id + '-nav-toggle').css({ display: 'none' });
                    var _linkHeight = $('#' + _id + ' .agm-navbar-nav')[0].offsetHeight;
                    $('#' + _id + ' .agm-navbar-nav > ul > li > ul').css({ padding: _linkHeight + 'px 0 0 0' });
                    // $(_subLink).on('click', function() {
                    //     $('#' + _id + ' .agm-navbar-nav ul > li > ul').css({ display: 'none' });
                    // });
                }
            }
        }
    }
}

// Validations
$.fn.validate = function(hasToast) {
    let inputs = this[0].elements;
    let result = true;

    let validEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let validPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])+(?=.*[^a-zA-Z0-9])(?!.*\s).{6,30}$/;

    for (var count = 0; count < inputs.length; count++) {
        if (inputs[count].tagName == 'INPUT') {
            const _id = inputs[count].id;

            let _value = inputs[count].value;
            let _type = inputs[count].type;
            let _label = $('#' + _id + '').attr('input-label');

            if (!($('#' + _id + '').hasClass('except'))) {
                if (_value == '') {
                    $('#' + _id + '').addClass('form-danger');
                    if (document.body.contains(document.getElementById(_id + '-form-message'))) {
                        document.getElementById(_id + '-form-message').remove();
                    }
                    let _message = '<p class= "form-message text-danger" id= "' + _id + '-form-message">This must not be empty.</p>';
                    document.getElementById(_id).insertAdjacentHTML('afterend', _message);
                    result = false;
                } else if (_type == 'email' && !validEmail.test(_value)) {
                    $('#' + _id + '').removeClass('form-danger');
                    $('#' + _id + '').addClass('form-warning');
                    if (document.body.contains(document.getElementById(_id + '-form-message'))) {
                        document.getElementById(_id + '-form-message').remove();
                    }
                    let _message = '<p class= "form-message text-warning" id= "' + _id + '-form-message">Invalid email format.</p>';
                    document.getElementById(_id).insertAdjacentHTML('afterend', _message);
                    result = false;
                } else if (_type == 'password' && !_value.match(validPassword)) {
                    $('#' + _id + '').removeClass('form-danger');
                    $('#' + _id + '').addClass('form-warning');
                    if (document.body.contains(document.getElementById(_id + '-form-message'))) {
                        document.getElementById(_id + '-form-message').remove();
                    }
                    let _message = '<p class= "form-message text-warning" id= "' + _id + '-form-message">Password must have at least 6 characters contains 1 Uppercase, lowercase, symbol and numbers.</p>';
                    document.getElementById(_id).insertAdjacentHTML('afterend', _message);
                    result = false;
                } else {
                    $('#' + _id + '').removeClass('form-danger');
                    $('#' + _id + '').removeClass('form-warning');
                    if (document.body.contains(document.getElementById(_id + '-form-message'))) {
                        document.getElementById(_id + '-form-message').remove();
                    }
                }
            }
        } else if (inputs[count].tagName == 'TEXTAREA') {
            const _id = inputs[count].id;

            _value = inputs[count].value;
            _type = inputs[count].type;
            _label = $('#' + _id + '').attr('input-label');

            if (!($('#' + _id + '').hasClass('except'))) {
                if (_value == '') {
                    $('#' + _id + '').addClass('form-danger');
                    if (document.body.contains(document.getElementById(_id + '-form-message'))) {
                        document.getElementById(_id + '-form-message').remove();
                    }
                    let _message = '<p class= "form-message text-danger" id= "' + _id + '-form-message">This must not be empty.</p>';
                    document.getElementById(_id).insertAdjacentHTML('afterend', _message);
                    result = false;
                } else {
                    $('#' + _id + '').removeClass('form-danger');
                    $('#' + _id + '').removeClass('form-warning');
                    if (document.body.contains(document.getElementById(_id + '-form-message'))) {
                        document.getElementById(_id + '-form-message').remove();
                    }
                }
            }
        } else if (inputs[count].tagName == 'SELECT') {
            const _id = inputs[count].id;

            _value = inputs[count].value;
            _type = inputs[count].type;
            _label = $('#' + _id + '').attr('input-label');

            if (!($('#' + _id + '').hasClass('except'))) {
                if (_value == '') {
                    $('#' + _id + '').addClass('form-danger');
                    if (document.body.contains(document.getElementById(_id + '-form-message'))) {
                        document.getElementById(_id + '-form-message').remove();
                    }
                    let _message = '<p class= "form-message text-danger" id= "' + _id + '-form-message">This must not be empty.</p>';
                    document.getElementById(_id).insertAdjacentHTML('afterend', _message);
                    result = false;
                } else {
                    $('#' + _id + '').removeClass('form-danger');
                    $('#' + _id + '').removeClass('form-warning');
                    if (document.body.contains(document.getElementById(_id + '-form-message'))) {
                        document.getElementById(_id + '-form-message').remove();
                    }
                }
            }
        }
    }

    if (hasToast == true) {
        this.hasToast();
    }

    return result;
}

$.fn.hasToast = function() {
    let inputs = this[0].elements;
    let result = true;

    let validEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let validPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])+(?=.*[^a-zA-Z0-9])(?!.*\s).{6,30}$/;

    for (var count = 0; count < inputs.length; count++) {
        if (inputs[count].tagName == 'INPUT') {
            const _id = inputs[count].id;

            let _value = inputs[count].value;
            let _type = inputs[count].type;
            let _label = $('#' + _id + '').attr('input-label');
            let _message = '';
            if (!($('#' + _id + '').hasClass('except'))) {
                if (_value == '') {
                    // _message = _label + ' must not be empty!';
                    // toaster.error('', _message).show();
                    // toaster.error("", "Something went wrong").show(3000);
                    // return false;
                    result = false;
                } else if (_type == 'email' && !validEmail.test(_value)) {
                    // _message = _label + ' format is invalid!';
                    // toaster.warning('', _message).show();
                    // toaster.error("", "Invalid inputs").show(3000);
                    // return false;
                    result = false;
                } else if (_type == 'password' && !_value.match(validPassword)) {
                    // _message = _label + ' must have at least 6 characters with uppercase, lowercase, numbers and a special character!';
                    // toaster.warning('', _message).show();
                    // toaster.error("", "Invalid inputs").show(3000);
                    // return false;
                    result = false;
                }
            }
        } else if (inputs[count].tagName == 'TEXTAREA') {
            const _id = inputs[count].id;

            let _value = inputs[count].value;
            let _type = inputs[count].type;
            let _label = $('#' + _id + '').attr('input-label');
            let _message = '';

            if (!($('#' + _id + '').hasClass('except'))) {
                if (_value == '') {
                    // _message = _label + ' must not be empty!';
                    // toaster.error('', _message).show();
                    // toaster.error("", "Something went wrong").show(3000);
                    // return false;
                    result = false;
                }
            }
        } else if (inputs[count].tagName == 'SELECT') {
            const _id = inputs[count].id;

            let _value = inputs[count].value;
            let _type = inputs[count].type;
            let _label = $('#' + _id + '').attr('input-label');
            let _message = '';

            if (!($('#' + _id + '').hasClass('except'))) {
                if (_value == '') {
                    // _message = _label + ' must not be empty!';
                    // toaster.error('', _message).show();
                    // toaster.error("", "Something went wrong").show(3000);
                    // return false;
                    result = false;
                }
            }
        }
    }
    return (result == false) ? toaster.error('', "Something went wrong").show(3000) : true;
}

// Datatables
$.fn.datatable = function() {
    let _id = this[0].id; // Get the id of the table
    let _table = document.getElementById(_id); // Get the table
    let _row = _table.getElementsByTagName('tbody')[0].children; // Get the rows or data of the table body
    let _colspan = _table.getElementsByTagName('thead')[0].children[0].cells; // Count the columns

    // Design for Max row dropdown and search box
    let _tableHeader = '<div class= "row">' +
        '<div class= "col-md-8">' +
        '<div class= "form-group w-25">' +
        '<select class= "form-control" id= "' + _id + 'Row">' +
        '<option value= "10" selected>10</option>' +
        '<option value= "15">15</option>' +
        '<option value= "20">20</option>' +
        '</select>' +
        '</div>' +
        '</div>' +
        '<div class= "col-md-4">' +
        '<div class= "form-group">' +
        '<input type= "text" class= "form-control form-pills px-3" placeholder= "Search..." id= "' + _id + 'Search">' +
        '</div>' +
        '</div>' +
        '</div>';

    // Design for pagination
    let _tableFooter = '<div class= "row">' +
        '<div class= "col-md-8">' +
        // '<p>Showing 1 to <span id= "maxRow"></span> of ' + _row.length + ' entries</p>' +
        '</div>' +
        '<div class= "col-md-4">' +
        '<nav class= "float-right">' +
        '<ul class= "pagination" id= "' + _id + 'Pagination">' +
        '</ul>' +
        '</nav>' +
        '</div>' +
        '</div>';
    // First and prev button for pagination
    let _prevBtn = '<li class= "page-item" id= "firstpage"><a class= "page-link"><i class= "fas fa-angle-double-left"></i></a></li>' +
        '<li class= "page-item" id= "prevpage"><a class= "page-link"><i class= "fas fa-angle-left"></i></a></li>';

    // Last and next button for pagination
    let _nextBtn = '<li class= "page-item" id= "nextpage"><a class= "page-link"><i class= "fas fa-angle-right"></i></a></li>' +
        '<li class= "page-item" id= "lastpage"><a class= "page-link"><i class= "fas fa-angle-double-right"></i></a></li>';

    let _empty = '<tr data-index= "0" id= "' + _id + 'Empty"><td colspan= "' + _colspan.length + '" class= "text-center">No item found</td></tr>'; // For empty tables

    document.getElementById(_id).insertAdjacentHTML('beforebegin', _tableHeader); // Automatically add Max row dropdown and a search box
    document.getElementById(_id).insertAdjacentHTML('afterend', _tableFooter); // Automatically add pagination

    if (_row.length != 0) {
        let _rowCount = 1; // Start of data-index value for each row
        let _rowData = [];
        // Set values to data-index attribute
        $('#' + _id + ' tr:gt(0)').each(function() {
            $(this)[0].setAttribute('data-index', _rowCount++);
            _rowData.push($(this)[0].attributes['data-index'].value);
        });
        setRowLimit($('#' + _id + 'Row').val()); // Set row limit on load
        // Set row limit on change
        $('#' + _id + 'Row').on('change', function() {
            setRowLimit($(this).val());
        });
        // Search function
        $('#' + _id + 'Search').on('keyup', function() {
            let _txt = $(this).val().toLowerCase();
            let _searchItems = [];
            let _count = 0;
            let _maxRow = $('#' + _id + 'Row').val();
            $('#' + _id + 'Pagination').html('');

            $('#' + _id + ' tr:gt(0)').each(function() {
                if ($(this)[0].id != _id + 'Empty') {
                    let _data = $(this)[0].cells;
                    let _result = [];
                    _count++;

                    if (_count > _maxRow) {
                        $(this).hide();
                    }

                    if (_count <= _maxRow) {
                        $(this).show();
                    }

                    for (var columnCount = 0; columnCount < _data.length; columnCount++) {
                        if (_data[columnCount]) {
                            let _value = _data[columnCount].textContent || _data[columnCount].innerText;

                            if (_value.toLowerCase().indexOf(_txt) >= 0) {
                                _result.push(1);
                            } else {
                                _result.push(0);
                            }
                        }
                    }

                    if (_result.includes(1)) {
                        _searchItems.push($(this)[0].attributes['data-index'].value);
                        if (_searchItems.includes($(this)[0].attributes['data-index'].value)) {
                            if (_searchItems.length <= _maxRow) {
                                $(this).show();
                            }
                        } else {
                            $(this).hide();
                        }
                    } else {
                        $(this).hide();
                    }
                }
            });

            if (_searchItems.length > _maxRow) {
                var _pagenum = Math.ceil(_searchItems.length / _maxRow);

                for (var index = 1; index <= _pagenum;) {
                    $('#' + _id + 'Pagination').append('<li class= "page-item" data-page= "' + index + '">\<a class= "page-link">' + index++ + ' <span class= "sr-only">(current)</span></a>\</li>').show();
                }

                document.getElementById(_id + 'Pagination').insertAdjacentHTML('afterbegin', _prevBtn);
                document.getElementById(_id + 'Pagination').insertAdjacentHTML('beforeend', _nextBtn);
            }

            if (_searchItems.length == 0) {
                if (document.body.contains(document.getElementById(_id + 'Empty'))) {
                    document.getElementById(_id + 'Empty').remove();
                }
                $('#' + _id + '>tbody').html();
                $('#' + _id + '>tbody').append(_empty).show();
            } else {
                if (document.body.contains(document.getElementById(_id + 'Empty'))) {
                    document.getElementById(_id + 'Empty').remove();
                }
            }

            $('#' + _id + 'Pagination li:nth-child(3)').addClass('active');
            let _pageActive = $('.page-item').closest('#' + _id + 'Pagination').children('.active')[0].attributes['data-page'].value;
            $('#' + _id + 'Pagination li').on('click', function() {
                var _page = $(this).attr('data-page');
                _pageActive = $('.page-item').closest('#' + _id + 'Pagination').children('.active')[0].attributes['data-page'].value;
                var _index = 0;

                $('#' + _id + 'Pagination li').removeClass('active');
                $(this).addClass('active');

                if ($(this)[0].id == 'firstpage') {
                    $(this).removeClass('active');
                    $('[data-page= 1]').addClass('active');
                    _page = 1;
                }

                if ($(this)[0].id == "prevpage") {
                    $(this).removeClass('active');
                    _pageActive--;
                    if (_pageActive <= 1) {
                        _page = 1;
                    } else {
                        _page = _pageActive;
                    }
                    $('[data-page= ' + _page + ']').addClass('active');
                }

                if ($(this)[0].id == 'lastpage') {
                    $(this).removeClass('active');
                    $('[data-page= ' + _pagenum + ']').addClass('active');
                    _page = _pagenum;
                }

                if ($(this)[0].id == 'nextpage') {
                    $(this).removeClass('active');
                    _pageActive++;
                    if (_pageActive >= _pagenum) {
                        _page = _pagenum;
                    } else {
                        _page = _pageActive;
                    }
                    $('[data-page= ' + _page + ']').addClass('active');
                }

                $('#' + _id + ' tr:gt(0)').each(function() {
                    if (_searchItems.includes($(this)[0].attributes['data-index'].value)) {
                        _index++;

                        if (_index > (_maxRow * _page) || _index <= ((_maxRow * _page) - _maxRow)) {
                            $(this).hide();
                        } else {
                            $(this).show();
                        }
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
        // Set row limit and pagination
        function setRowLimit(maxRow) {
            $('#' + _id + 'Pagination').html('');
            let _count = 0;

            $('#' + _id + ' tr:gt(0)').each(function() {
                _count++;
                // Hide all data that exeeds to row limit
                if (_count > maxRow) {
                    $(this).hide();
                }
                // Display all data depends on set limit
                if (_count <= maxRow) {
                    $(this).show();
                }
            });
            // Automatically create page-link button
            if (_row.length > maxRow) {
                var _pagenum = Math.ceil(_row.length / maxRow); // Set number of page link

                for (var index = 1; index <= _pagenum;) {
                    $('#' + _id + 'Pagination').append('<li class= "page-item" data-page= "' + index + '">\<a class= "page-link">' + index++ + ' <span class= "sr-only">(current)</span></a>\</li>').show();
                }

                document.getElementById(_id + 'Pagination').insertAdjacentHTML('afterbegin', _prevBtn);
                document.getElementById(_id + 'Pagination').insertAdjacentHTML('beforeend', _nextBtn);
            }
            // Page-link functionality
            $('#' + _id + 'Pagination li:nth-child(3)').addClass('active');
            let _pageActive = $('.page-item').closest('#' + _id + 'Pagination').children('.active')[0].attributes['data-page'].value;
            $('#' + _id + 'Pagination li').on('click', function() {
                var _page = $(this).attr('data-page');
                _pageActive = $('.page-item').closest('#' + _id + 'Pagination').children('.active')[0].attributes['data-page'].value;
                var _index = 0;

                $('#' + _id + 'Pagination li').removeClass('active');
                $(this).addClass('active');

                if ($(this)[0].id == 'firstpage') {
                    $(this).removeClass('active');
                    $('[data-page= 1]').addClass('active');
                    _page = 1;
                }

                if ($(this)[0].id == "prevpage") {
                    $(this).removeClass('active');
                    _pageActive--;
                    if (_pageActive <= 1) {
                        _page = 1;
                    } else {
                        _page = _pageActive;
                    }
                    $('[data-page= ' + _page + ']').addClass('active');
                }

                if ($(this)[0].id == 'lastpage') {
                    $(this).removeClass('active');
                    $('[data-page= ' + _pagenum + ']').addClass('active');
                    _page = _pagenum;
                }

                if ($(this)[0].id == 'nextpage') {
                    $(this).removeClass('active');
                    _pageActive++;
                    if (_pageActive >= _pagenum) {
                        _page = _pagenum;
                    } else {
                        _page = _pageActive;
                    }
                    $('[data-page= ' + _page + ']').addClass('active');
                }

                $('#' + _id + ' tr:gt(0)').each(function() {
                    if (_rowData.includes($(this)[0].attributes['data-index'].value)) {
                        _index++;

                        if (_index > (maxRow * _page) || _index <= ((maxRow * _page) - maxRow)) {
                            $(this).hide();
                        } else {
                            $(this).show();
                        }
                    } else {
                        $(this).hide();
                    }
                });
            });
        }
    } else {
        $('#' + _id + '>tbody').html();
        $('#' + _id + '>tbody').append(_empty).show();
    }
}

// Input Masking
$.fn.mask = function() {
    for (var _count = 0; _count < this.length; _count++) {
        if(this[_count].classList.contains('credit-card')) {
            $('' + this[_count].tagName.toLowerCase() + '.credit-card').attr('placeholder', ('0000000000000000').replace(/(\d{4})(\d{4})(\d{4})(\d{4})/,"$1 $2 $3 $4"));
            $('' + this[_count].tagName.toLowerCase() + '.credit-card').on('keyup', function() {
                let _value = $(this).val();
                this.value = (_value.replace(/\D/g, '').substring(0, 16)).replace(/(\d{4})(\d{4})(\d{4})(\d{4})/,"$1 $2 $3 $4");
            });
        }
        else if(this[_count].classList.contains('cvv-cvc')) {
            $('' + this[_count].tagName.toLowerCase() + '.cvv-cvc').attr('placeholder', ('000').replace(/(\d{3})/,"$1"));
            $('' + this[_count].tagName.toLowerCase() + '.cvv-cvc').on('keyup', function() {
                let _value = $(this).val();
                this.value = (_value.replace(/\D/g, '').substring(0, 3)).replace(/(\d{3})/,"$1");
            });
        }
        else if(this[_count].classList.contains('postal-code')) {
            $('' + this[_count].tagName.toLowerCase() + '.postal-code').attr('placeholder', ('0000').replace(/(\d{4})/,"$1"));
            $('' + this[_count].tagName.toLowerCase() + '.postal-code').on('keyup', function() {
                let _value = $(this).val();
                this.value = (_value.replace(/\D/g, '').substring(0, 4)).replace(/(\d{4})/,"$1");
            });
        }
        else if(this[_count].classList.contains('mobile-no')) {
            $('' + this[_count].tagName.toLowerCase() + '.mobile-no').attr('placeholder', ('630000000000').replace(/(\d{2})(\d{3})(\d{3})(\d{4})/,"+$1 $2 $3 $4"));
            $('' + this[_count].tagName.toLowerCase() + '.mobile-no').on('keyup', function() {
                let _value = $(this).val();
                this.value = (_value.replace(/\D/g, '').substring(0, 12)).replace(/(\d{2})(\d{3})(\d{3})(\d{4})/,"+$1 $2 $3 $4");

                if($(this).val().length === 0) {
                    $(this).val('63');
                }
            });
            $('' + this[_count].tagName.toLowerCase() + '.mobile-no').on('click', function() {
                $(this).val('63');
            });
        }
        else if(this[_count].classList.contains('currency')) {
            let _symbol = $('' + this[_count].tagName.toLowerCase() + '.currency').attr('currency-symbol');
            $('' + this[_count].tagName.toLowerCase() + '.currency').attr('placeholder', _symbol + ' 0');
            $('' + this[_count].tagName.toLowerCase() + '.currency').on('keyup', function() {
                let _value = $(this).val();
                let _masked = parseFloat(_value.replace(/\D/g,''),10).toLocaleString();

                this.value = _symbol + ' ' + _masked;

                if($(this).val() === _symbol + ' NaN') {
                    $(this).val(_symbol + ' 0');
                }
            });
        }
    }
}

// Input Unmasking
$.fn.unmask = function() {
    return (this[0].value).replace(/\D/g, '');
}