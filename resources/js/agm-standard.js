$(function() {
    let list = $('.navbar-side > ul > .list');
    let links = $('.navbar-side > ul >').find('.navbar-link');
    
    $('.content').css({display : 'none'});
    $('#color-page').css({display : 'block'});

    sidenavFunction(list, links);
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

    $(links).on('click', function() {
        let content = $(this).attr('content');
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
                $('#typography-page').css({display: 'block'});
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
        }
    });
}