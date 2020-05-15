<div class= "px-3 mt-5 content" id= "sidenav-page">
    <h4>SIDENAV</h4>
    <hr>
    <p class= "mb-3">Sidenav requires a wrapping <span class= "text-danger">.navbar-side</span>. Sidenav and their contents are fluid by default. Use optional containers to limit their horizontal width, and in my case i use the <span class= "text-danger">.row</span> and <span class= "text-danger">.col</span>.</p>
    <p class= "mb-1">Sidenav come with built-in support for a handful of sub-components, <span class= "text-danger">.list</span> for you to have an active state to your link when it`s clicked (<span class= "text-primary">this is just for one pager site</span>), the <span class= "text-danger">.navbar-link</span> is for your sub-link if you have one but you can still use it because this is just for active state also for your sub-links.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "row">
                <div class= "col-md-6">
                    <div class= "navbar-side navbar-side-light border rounded shadow-sm" id= "demo1">
                        <ul>
                            <li class= "navbar-link-1 list"><a><p>Link</p></a></li>
                            <li class= "navbar-link-1 list"><a><p>Link</p></a></li>
                            <li class= "navbar-link-1 list"><a><p>Link</p></a></li>
                            <li class= "navbar-link-1 list"><a><p>Link</p></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">navbar-side navbar-side-light border rounded shadow-sm</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">navbar-link list</span>" >< <span class= "text-danger">a</span> >< <span class= "text-danger">p</span> >Link< <span class= "text-danger">/p</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">navbar-link list</span>" >< <span class= "text-danger">a</span> >< <span class= "text-danger">p</span> >Link< <span class= "text-danger">/p</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">navbar-link list</span>" >< <span class= "text-danger">a</span> >< <span class= "text-danger">p</span> >Link< <span class= "text-danger">/p</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">navbar-link list</span>" >< <span class= "text-danger">a</span> >< <span class= "text-danger">p</span> >Link< <span class= "text-danger">/p</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">LINKS WITH SUB-LINKS</p>
    <p class= "mb-1">If you want to have sub-links, you must add another < <span class= "text-danger">ul</span> > and put a class named <span class= "text-danger">.items</span>, this is to identify that the next < <span class= "text-danger">ul</span> > contains the sub-links.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "row">
                <div class= "col-md-6">
                    <div class= "navbar-side navbar-side-light border rounded shadow-sm" id= "demo2">
                        <ul>
                            <li class= "navbar-link-2 list"><a><p>Link</p></a></li>
                            <li class= "navbar-link-2 list"><a><p>Link</p></a></li>
                            <li class= "navbar-link-2 list"><a><p>Link</p></a></li>
                            <li class= "list">
                                <a><p>Link <i class="fas fa-caret-right"></i></p></a>
                                <ul class= "items">
                                    <li class= "navbar-link-2 list"><a><p>Sub-link</p></a></li>
                                    <li class= "navbar-link-2 list"><a><p>Sub-link</p></a></li>
                                    <li class= "navbar-link-2 list"><a><p>Sub-link</p></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">navbar-side navbar-side-light border rounded shadow-sm</span>" id= "<span class= "text-danger">demo2</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">navbar-link list</span>" >< <span class= "text-danger">a</span> >< <span class= "text-danger">p</span> >Link< <span class= "text-danger">/p</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">navbar-link list</span>" >< <span class= "text-danger">a</span> >< <span class= "text-danger">p</span> >Link< <span class= "text-danger">/p</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">navbar-link list</span>" >< <span class= "text-danger">a</span> >< <span class= "text-danger">p</span> >Link< <span class= "text-danger">/p</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> href= "<span class= "text-danger">#</span>" >< <span class= "text-danger">p</span> >Link < <span class= "text-danger">i</span> class="<span class= "text-danger">fas fa-caret-right</span>" >< <span class= "text-danger">/i</span> >< <span class= "text-danger">/p</span> >< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> class= "<span class= "text-danger">items</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">navbar-link list</span>" >< <span class= "text-danger">a</span> >< <span class= "text-danger">p</span> >Sub-link< <span class= "text-danger">/p</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">navbar-link list</span>" >< <span class= "text-danger">a</span> >< <span class= "text-danger">p</span> >Sub-link< <span class= "text-danger">/p</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">navbar-link list</span>" >< <span class= "text-danger">a</span> >< <span class= "text-danger">p</span> >Sub-link< <span class= "text-danger">/p</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> >
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">LINKS WITH LABELS</p>
    <p class= "mb-1">Use <span class= "text-danger">.navbar-label</span> to your < <span class= "text-danger">li</span> > that you want to be like a title or header for your links.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "row">
                <div class= "col-md-6">
                    <div class= "navbar-side navbar-side-light border rounded shadow-sm" id= "demo1">
                        <ul>
                            <li class= "navbar-label"><p>Label</p></li>
                            <li class= "navbar-link-1 list"><a><p>Link</p></a></li>
                            <li class= "navbar-link-1 list"><a><p>Link</p></a></li>
                            <li class= "navbar-link-1 list"><a><p>Link</p></a></li>
                            <li class= "navbar-link-1 list"><a><p>Link</p></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">navbar-side navbar-side-light border rounded shadow-sm</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">navbar-label</span>" >< <span class= "text-danger">p</span> >Label< <span class= "text-danger">/p</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">navbar-link list</span>" >< <span class= "text-danger">a</span> >< <span class= "text-danger">p</span> >Link< <span class= "text-danger">/p</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">navbar-link list</span>" >< <span class= "text-danger">a</span> >< <span class= "text-danger">p</span> >Link< <span class= "text-danger">/p</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">navbar-link list</span>" >< <span class= "text-danger">a</span> >< <span class= "text-danger">p</span> >Link< <span class= "text-danger">/p</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">navbar-link list</span>" >< <span class= "text-danger">a</span> >< <span class= "text-danger">p</span> >Link< <span class= "text-danger">/p</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">THEMES</p>
    <p class= "mb-1">Just add <span class= "text-danger">.navbar-side-light</span> (for light theme) or <span class= "text-danger">.navbar-side-dark</span> (for dark theme).</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "row">
                <div class= "col-md-6">
                    <div class= "navbar-side navbar-side-light border rounded shadow-sm" id= "demo3">
                        <ul>
                            <li class= "navbar-link-3 list"><a><p>Home</p></a></li>
                            <li class= "navbar-link-3 list"><a><p>Profile</p></a></li>
                            <li class= "navbar-link-3 list"><a><p>About</p></a></li>
                        </ul>
                    </div>
                </div>
                <div class= "col-md-6">
                    <div class= "navbar-side navbar-side-dark border rounded shadow-sm" id= "demo4">
                        <ul>
                            <li class= "navbar-link-4 list"><a><p>Home</p></a></li>
                            <li class= "navbar-link-4 list"><a><p>Profile</p></a></li>
                            <li class= "navbar-link-4 list"><a><p>About</p></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "text-info mb-3 h5">Example Code:</p>
            <p class= "mb-1"><span class= "text-secondary">< !-- For light theme -- ></span></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">navbar-side navbar-side-light border rounded shadow-sm</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> ></p> 
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">navbar-link list</span>">< <span class= "text-danger">a</span> href= "<span class= "text-danger">#</span>" content= "<span class= "text-danger">#</span>" >< <span class= "text-danger">p</span> >Home< <span class= "text-danger">/p</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">navbar-link list</span>">< <span class= "text-danger">a</span> href= "<span class= "text-danger">#</span>" content= "#" >< <span class= "text-danger">p</span> >Profile< <span class= "text-danger">/p</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">navbar-link list</span>">< <span class= "text-danger">a</span> href= "<span class= "text-danger">#</span>" content= "<span class= "text-danger">#</span>" >< <span class= "text-danger">p</span> >About< <span class= "text-danger">/p</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> > </p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1"><span class= "text-secondary">< !-- For dark theme -- ></span></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">navbar-side navbar-side-dark border rounded shadow-sm</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> ></p> 
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">navbar-link list</span>">< <span class= "text-danger">a</span> href= "<span class= "text-danger">#</span>" content= "<span class= "text-danger">#</span>" >< <span class= "text-danger">p</span> >Home< <span class= "text-danger">/p</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">navbar-link list</span>">< <span class= "text-danger">a</span> href= "<span class= "text-danger">#</span>" content= "#" >< <span class= "text-danger">p</span> >Profile< <span class= "text-danger">/p</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">navbar-link list</span>">< <span class= "text-danger">a</span> href= "<span class= "text-danger">#</span>" content= "<span class= "text-danger">#</span>" >< <span class= "text-danger">p</span> >About< <span class= "text-danger">/p</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> > </p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
</div>