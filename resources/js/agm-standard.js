$(function() {
    let list = $('.navbar-side > ul > .list');
    let links = $('.navbar-side > ul').find('.navbar-link');
    
    $('.content').css({display : 'none'});
    $('#dashboard-page').css({display : 'block'});

    sidenavFunction(list, links);
    brandButtons();
});

// Sidenav Function
function sidenavFunction(list, links) {
    for(var count = 0; count < list.length; count++) {
        list[count].addEventListener('click', function(e) {
            e.stopPropagation();

            if(this.classList.contains('active')) {
                this.classList.remove('active');
            }
            else if (this.parentElement.parentElement.classList.contains('active')) {
                this.classList.add('active');
            }
            else {
                for (var item = 0; item < list.length; item++) {
                    list[item].classList.remove('active');
                }
    
                this.classList.add('active');
            }
        });
    }
    
    for(var count = 0; count < links.length; count++) {
        links[count].addEventListener('click', function(e) {
            e.stopPropagation();
            
            if(this.classList.contains('active')) {
                this.classList.add('active');
            }
            else if (this.parentElement.parentElement.classList.contains('active')) {
                this.classList.add('active');
            }
            else {
                for (var item = 0; item < links.length; item++) {
                    links[item].classList.remove('active');
                }
    
                this.classList.add('active');
            }
        });
    }

    $(links).on('click', function() {
        let content = $(this).find('a').attr('content');
        $('.content').css({display : 'none'});
        
        switch(content) {
            case 'dashboard-page':
                $('#dashboard-page').css({display: 'block'});
            break;
            case 'colors-page':
                $('#color-page').css({display: 'block'});
            break;
            case 'typography-page':
                $('#typography-page').css({display: 'block'});
            break;
            case 'buttons-page':
                $('#button-page').css({display: 'block'});
            break;
            case 'cards-page':
                $('#card-page').css({display: 'block'});
            break;
            case 'toasters-page':
                $('#toaster-page').css({display: 'block'});
            break;
            case 'toggles-page':
                $('#toggle-page').css({display: 'block'});
            break;
            case 'login-page':
                $('#login-page').css({display: 'block'});
            break;
            case '404-page':
                $('#404-page').css({display: 'block'});
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
        googlePlus:
            "<i class='fab fa-google-plus-g'></i><span>Google Plus</span>",
        html5: "<i class='fab fa-html5'></i><span>HTML5</span>",
        instagram: "<i class='fab fa-instagram'></i><span>Instagram</span>",
        linkedin: "<i class='fab fa-linkedin-in'></i><span>LinkedIn</span>",
        openid: "<i class='fab fa-openid'></i><span>OpenID</span>",
        pinterest: "<i class='fab fa-pinterest'></i><span>Pinterest</span>",
        reddit: "<i class='fab fa-reddit'></i><span>Reddit</span>",
        spotify: "<i class='fab fa-spotify'></i><span>Spotify</span>",
        stackOverflow:
            "<i class='fab fa-stack-overflow'></i><span>Stack-Overflow</span>",
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
            if(jQuery.inArray(key1, value) == 1) {
                $(`.btn-brand.${key1}`).html(value1);
                return false;
            }
        });
    });
}