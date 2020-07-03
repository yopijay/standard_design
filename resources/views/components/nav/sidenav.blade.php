<div class= "px-3 mt-5 content" id= "sidenav-page">
    <h4>SIDENAV</h4>
    <hr>
    <p class= "mb-3">To enable the sidenav bar you need to craete a container and put a class <span class= "text-danger">.agm-navbar-side</span>. The sidenav is position on the right side of the page. The position is <b>fixed</b>. And this sidenav contains a classes: <span class= "text-danger">.agm-side-link</span> (for your links), <span class= "text-danger">.agm-side-label</span> (if you want to put a label on every link you have), and <span class= "text-danger">.agm-side-list</span> (it used if you have sub-links).</p>
    <p class= "mb-1">If you use the <span class= "text-danger">.agm-side-list</span>, you can also add <span class= "text-danger">.agm-side-dropdown</span> (it is optional) to put an icon on the right side of your link to inform the user that it has a sub-links. And inside the <span class= "text-danger">.agm-side-list</span> container, you need to use the <span class= "text-danger">.agm-nav-items</span> class for the container of your sub-links.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-12 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <p class= 'text-warning'>Just refer to the sidenav bar of this page to see the actual design of the code below.</p>
        </div>
        <div class= "col-md-12 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">agm-navbar navbar-dark shadow-sm</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">agm-navbar-brand</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class= "text-danger">....</span></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">agm-navbar-side</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">agm-side-label</span>" >Label< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">agm-side-link active</span>" >< <span class= "text-danger">a</span> >Link< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">agm-side-label</span>" >Label< <span class= "text-danger">/li </span>></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">agm-side-link</span>" >< <span class= "text-danger">a</span> >Link<<span class= "text-danger"> /a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">agm-side-link</span>" >< <span class= "text-danger">a</span> >Link< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">agm-side-label</span>" >Label<<span class= "text-danger"> /li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">agm-side-list agm-side-dropdown</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> >Dropdown< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> class= "<span class= "text-danger">agm-nav-items</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">agm-side-link</span>" >< <span class= "text-danger">a</span> >Sub Link< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">agm-side-link</span>" >< <span class= "text-danger">a</span> >Sub Link< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-sidenav" copy-data= '<div class= "agm-navbar navbar-dark shadow-sm"><div class= "agm-navbar-brand">....</div><div class= "agm-navbar-side"><ul><li class= "agm-side-label">Label</li><li class= "agm-side-link active"><a>Link</a></li><li class= "agm-side-label">Label</li><li class= "agm-side-link"><a>Link</a></li><li class= "agm-side-link"><a>Link</a></li><li class= "agm-side-label">Label</li><li class= "agm-side-list agm-side-dropdown"><a>Dropdown</a><ul class= "agm-nav-items"><li class= "agm-side-link"><a>Sub Link</a></li><li class= "agm-side-link"><a>Sub Link</a></li></ul></li></ul></div></div>'>COPY</button>
        </div>
    </div>    
</div>