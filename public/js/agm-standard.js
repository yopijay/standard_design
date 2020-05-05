$(function() {
    // Brand buttons
    brandButtons();
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
            '<div class= "col-md-2 toaster-icon px-0 text-center">' +
            '<i class= "fas fa-check"></i>' +
            '</div>' +
            '<div class= "col-md-8 toaster-message px-0">' +
            '<p>' + _message + '</p>' +
            '</div>' +
            '<div class= "col-md-2 toaster-close px-0 text-center">' +
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
            '<div class= "col-md-2 toaster-icon px-0 text-center">' +
            '<i class= "fas fa-exclamation-triangle"></i>' +
            '</div>' +
            '<div class= "col-md-8 toaster-message px-0">' +
            '<p>' + _message + '</p>' +
            '</div>' +
            '<div class= "col-md-2 toaster-close px-0 text-center">' +
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
            '<div class= "col-md-2 toaster-icon px-0 text-center">' +
            '<i class= "fas fa-radiation"></i>' +
            '</div>' +
            '<div class= "col-md-8 toaster-message px-0">' +
            '<p>' + _message + '</p>' +
            '</div>' +
            '<div class= "col-md-2 toaster-close px-0 text-center">' +
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
            '<div class= "col-md-2 toaster-icon px-0 text-center">' +
            '<i class= "fas fa-info-circle"></i>' +
            '</div>' +
            '<div class= "col-md-8 toaster-message px-0">' +
            '<p>' + _message + '</p>' +
            '</div>' +
            '<div class= "col-md-2 toaster-close px-0 text-center">' +
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
$.fn.sidenav = function(submenu) {
    let _list = this;
    let _links = submenu;

    for (var count = 0; count < _list.length; count++) {
        _list[count].addEventListener('click', function(e) {
            e.stopPropagation();

            if (this.classList.contains('active')) {
                this.classList.remove('active');
            } else if (this.parentElement.parentElement.classList.contains('active')) {
                this.classList.add('active');
            } else {
                for (var item = 0; item < _list.length; item++) {
                    _list[item].classList.remove('active');
                }

                this.classList.add('active');
            }
        });
    }

    for (var count = 0; count < _links.length; count++) {
        _links[count].addEventListener('click', function(e) {
            e.stopPropagation();

            if (this.classList.contains('active')) {
                this.classList.add('active');
            } else if (this.parentElement.parentElement.classList.contains('active')) {
                this.classList.add('active');
            } else {
                for (var item = 0; item < _links.length; item++) {
                    _links[item].classList.remove('active');
                }

                this.classList.add('active');
            }
        });
    }
    return this;
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
        } else if (inputs[count].tagName == 'TEXTAREA') {
            const _id = inputs[count].id;

            _value = inputs[count].value;
            _type = inputs[count].type;
            _label = $('#' + _id + '').attr('input-label');

            if (_value == '') {
                $('#' + _id + '').addClass('form-danger');
                result = false;
            } else {
                $('#' + _id + '').removeClass('form-danger');
                $('#' + _id + '').removeClass('form-warning');
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

            if (_value == '') {
                _message = _label + ' must not be empty!';
                toaster.error('', _message).show();
                return false;
            } else if (_type == 'email' && !validEmail.test(_value)) {
                _message = _label + ' format is invalid!';
                toaster.warning('', _message).show();
                return false;
            } else if (_type == 'password' && !_value.match(validPassword)) {
                _message = _label + ' must have at least 6 characters with uppercase, lowercase, numbers and a special character!';
                toaster.warning('', _message).show();
                return false;
            }
        } else if (inputs[count].tagName == 'TEXTAREA') {
            const _id = inputs[count].id;

            let _value = inputs[count].value;
            let _type = inputs[count].type;
            let _label = $('#' + _id + '').attr('input-label');
            let _message = '';

            if (_value == '') {
                _message = _label + ' must not be empty!';
                toaster.error('', _message).show();
                return false;
            }
        }
    }
    return true;
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
        '<ul class= "pagination">' +
        '</ul>' +
        '</nav>' +
        '</div>' +
        '</div>';

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
            $('.pagination').html('');

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
                console.log(_searchItems.length);

                for (var index = 1; index <= _pagenum;) {
                    $('.pagination').append('<li class= "page-item" data-page= "' + index + '">\<a class= "page-link">' + index++ + ' <span class= "sr-only">(current)</span></a>\</li>').show();
                }
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

            $('.pagination li:first-child').addClass('active');
            $('.pagination li').on('click', function() {
                var _page = $(this).attr('data-page');
                var _trindex = 0;

                $('.pagination li').removeClass('active');
                $(this).addClass('active');

                $('#' + _id + ' tr:gt(0)').each(function() {

                    if (_searchItems.includes($(this)[0].attributes['data-index'].value)) {
                        _trindex++;

                        if (_trindex > (_maxRow * _page) || _trindex <= ((_maxRow * _page) - _maxRow)) {
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
            $('.pagination').html('');
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
                    $('.pagination').append('<li class= "page-item" data-page= "' + index + '">\<a class= "page-link">' + index++ + ' <span class= "sr-only">(current)</span></a>\</li>').show();
                }
            }
            // Page-link functionality
            $('.pagination li:first-child').addClass('active');
            $('.pagination li').on('click', function() {
                var _page = $(this).attr('data-page');
                var _index = 0;

                $('.pagination li').removeClass('active');
                $(this).addClass('active');

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