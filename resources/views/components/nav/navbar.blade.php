<div class= "px-3 mt-5 content py-5 mb-5" id= "navbar-page">
    <h4>NAVBAR</h4>
    <p class= "mb-1">Documentation and examples for AGM’s powerful, responsive navigation header, the navbar. Includes support for branding, navigation, and more, including support for our collapse plugin.</p>
    <hr>
    <div class= "row my-3">
        <div class= "col-md-12 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <nav class="navbar navbar-expand-lg navbar-light agm-bg-light" style= "z-index: 500;" id= "demo-1">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-demo1" aria-controls="navbar-demo1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-demo1">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline btn-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
        <div class= "col-md-12 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> class="<span class= "text-danger">navbar navbar-expand-lg navbar-light agm-bg-light</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">navbar-brand</span>" href="<span class= "text-danger">#</span>" >Navbar< /a ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> class="<span class= "text-danger">navbar-toggler</span>" type="<span class= "text-danger">button</span>" data-toggle="<span class= "text-danger">collapse</span>" data-target="<span class= "text-danger">#navbarSupportedContent</span>" aria-controls="<span class= "text-danger">navbarSupportedContent</span>" aria-expanded="<span class= "text-danger">false</span>" aria-label="<span class= "text-danger">Toggle navigation</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">span</span> class="<span class= "text-danger">navbar-toggler-icon</span>">< <span class= "text-danger">/span</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class="<span class= "text-danger">collapse navbar-collapse</span>" id="<span class= "text-danger">navbarSupportedContent</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> class="<span class= "text-danger">navbar-nav mr-auto</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class="<span class= "text-danger">nav-item active</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">nav-link</span>" href="<span class= "text-danger">#</span>" >Home < <span class= "text-danger">span</span> class="<span class= "text-danger">sr-only</span>" >(current)< <span class= "text-danger">/span</span> >< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class="<span class= "text-danger">nav-item</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">nav-link</span>" href="<span class= "text-danger">#</span>" >Link< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class="<span class= "text-danger">nav-item dropdown</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">nav-link dropdown-toggle</span>" href="<span class= "text-danger">#</span>" id="<span class= "text-danger">navbarDropdown</span>" role="<span class= "text-danger">button</span>" data-toggle="<span class= "text-danger">dropdown</span>" aria-haspopup="<span class= "text-danger">true</span>" aria-expanded="<span class= "text-danger">false</span>" >Dropdown< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class="<span class= "text-danger">dropdown-menu</span>" aria-labelledby="<span class= "text-danger">navbarDropdown</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">dropdown-item</span>" href="<span class= "text-danger">#</span>" >Action< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">dropdown-item</span>" href="<span class= "text-danger">#</span>" >Another action< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class="<span class= "text-danger">dropdown-divider</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">dropdown-item</span>" href="<span class= "text-danger">#</span>" >Something else here< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class="<span class= "text-danger">nav-item</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">nav-link disabled</span>" href="<span class= "text-danger">#</span>" tabindex="<span class= "text-danger">-1</span>" aria-disabled="<span class= "text-danger">true</span>" >Disabled< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">form</span> class="<span class= "text-danger">form-inline my-2 my-lg-0</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> class="<span class= "text-danger">form-control mr-sm-2</span>" type="<span class= "text-danger">search</span>" placeholder="<span class= "text-danger">Search</span>" aria-label="<span class= "text-danger">Search</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> class="<span class= "text-danger">btn btn-outline btn-success my-2 my-sm-0</span>" type="<span class= "text-danger">submit</span>" >Search< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/form</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/nav</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-navbar-1" copy-data= '
            <nav class="navbar navbar-expand-lg navbar-light agm-bg-light" style= "z-index: 500;" id= "demo-1"><a class="navbar-brand" href="#">Navbar</a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-demo1" aria-controls="navbar-demo1" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="navbar-demo1"><ul class="navbar-nav mr-auto"><li class="nav-item active"><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li><li class="nav-item"><a class="nav-link" href="#">Link</a></li><li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a><div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><div class="dropdown-divider"></div><a class="dropdown-item" href="#">Something else here</a></div></li><li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a></li></ul><form class="form-inline my-2 my-lg-0"><input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"><button class="btn btn-outline btn-success my-2 my-sm-0" type="submit">Search</button></form></div></nav>'>COPY</button>
        </div>
    </div>
    <p class= "mb-3">This example uses <span class= "text-primary">color</span> (<span class= "text-danger">bg-light</span>) and <span class= "text-primary">spacing</span> (<span class= "text-danger">my-2, my-lg-0, mr-sm-0, my-sm-0</span>) utility classes.</p>
    <p class= "text-info mb-1 h5">BRAND</p>
    <p class= "mb-1">The <span class= "text-danger">.navbar-brand</span> can be applied to most elements, but an anchor works best as some elements might require utility classes or custom styles.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <nav class= "navbar navbar-dark agm-bg-dark mb-2" style= "z-index: 500;" id= "demo2">
                <a class= "navbar-brand" href= "#">Navbar</a>
            </nav>
            <nav class= "navbar navbar-dark agm-bg-dark" style= "z-index: 500;" id= "demo3">
                <span class= "navbar-brand h5">Navbar</span>
            </nav>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1"><span class= "text-secondary">< !-- As a link -- ></span></p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> class= "<span class= "text-danger">navbar navbar-dark agm-bg-dark</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class= "<span class= "text-danger">navbar-brand</span>" href= "<span class= "text-danger">#</span>" >Navbar< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/nav</span> ></p>
            <p class= "mb-1"><span class= "text-secondary">< !-- As a heading -- ></span></p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> class= "<span class= "text-danger">navbar navbar-dark agm-bg-dark</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">span</span> class= "<span class= "text-danger">navbar-brand h5</span>" >Navbar< <span class= "text-danger">/span</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/nav</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-navbar-2" copy-data= '<nav class= "navbar navbar-dark agm-bg-dark mb-2" style= "z-index: 500;" id= "demo2"><a class= "navbar-brand" href= "#">Navbar</a></nav>'>COPY</button>
        </div>
    </div>
    <p class= "mb-1">Adding images to the <span class= "text-danger">.navbar-brand</span> will likely always require custom styles or utilities to properly size. Here are some examples to demonstrate.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <nav class= "navbar navbar-dark agm-bg-dark mb-2" style= "z-index: 500;" id= "demo4">
                <a class= "navbar-brand" href= "#"><img src= "{{ asset('img/man.png') }}" width= "40" height= "40"></a>
            </nav>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1"><span class= "text-secondary">< !-- Just an image -- ></span></p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> class= "<span class= "text-danger">navbar navbar-dark agm-bg-dark</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class= "<span class= "text-danger">navbar-brand</span>" href= "<span class= "text-danger">#</span>" >< <span class= "text-danger">img</span> src= "<span class= "text-danger">#</span>" width= "<span class= "text-danger">40</span>" height= "<span class= "text-danger">40</span>" >< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/nav</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-navbar-3" copy-data= '<nav class= "navbar navbar-dark agm-bg-dark mb-2" style= "z-index: 500;" id= "demo4"><a class= "navbar-brand" href= "#"><img src= "#" width= "40" height= "40"></a></nav>'>COPY</button>
        </div>
    </div>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <nav class= "navbar navbar-dark agm-bg-dark mb-2" style= "z-index: 500;" id= "demo5">
                <a class= "navbar-brand h5" href= "#"><img src= "{{ asset('img/man.png') }}" width= "40" height= "40"> AGM</a>
            </nav>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1"><span class= "text-secondary">< !-- Image and text -- ></span></p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> class= "<span class= "text-danger">navbar navbar-dark agm-bg-dark</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class= "<span class= "text-danger">navbar-brand h5</span>" href= "<span class= "text-danger">#</span>" >< <span class= "text-danger">img</span> src= "<span class= "text-danger">#</span>" width= "<span class= "text-danger">40</span>" height= "<span class= "text-danger">40</span>" > AGM< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/nav</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-navbar-4" copy-data= '<nav class= "navbar navbar-dark agm-bg-dark mb-2" style= "z-index: 500;" id= "demo5"><a class= "navbar-brand h5" href= "#"><img src= "#" width= "40" height= "40"> AGM</a></nav>'>COPY</button>
        </div>
    </div>
    <p class= "text-info mb-1 h5">NAV</p>
    <p class= "mb-3">Navbar navigation links build on our <span class= "text-danger">.nav</span> options with their own modifier class and require the use of toggler classes for proper responsive styling. <b>Navigation in navbars will also grow to occupy as much horizontal space as possible</b> to keep your navbar contents securely aligned.</p>
    <p class= "mb-1">Active states—with <span class= "text-danger">.active</span>—to indicate the current page can be applied directly to <span class= "text-danger">.nav-link</span>s or their immediate parent <span class= "text-danger">.nav-item</span>s.</p>
    <div class= "row my-3">
        <div class= "col-lg-12 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <nav class="navbar navbar-expand-lg navbar-light agm-bg-light" style= "z-index: 500;" id= "demo5">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-demo2" aria-controls="navbar-demo2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-demo2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class= "col-lg-12 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> class="<span class= "text-danger">navbar navbar-expand-lg navbar-light agm-bg-light</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">navbar-brand</span>" href="<span class= "text-danger">#</span>" >Navbar< /a ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> class="<span class= "text-danger">navbar-toggler</span>" type="<span class= "text-danger">button</span>" data-toggle="<span class= "text-danger">collapse</span>" data-target="<span class= "text-danger">#navbarSupportedContent</span>" aria-controls="<span class= "text-danger">navbarSupportedContent</span>" aria-expanded="<span class= "text-danger">false</span>" aria-label="<span class= "text-danger">Toggle navigation</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">span</span> class="<span class= "text-danger">navbar-toggler-icon</span>">< <span class= "text-danger">/span</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class="<span class= "text-danger">collapse navbar-collapse</span>" id="<span class= "text-danger">navbarSupportedContent</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> class="<span class= "text-danger">navbar-nav mr-auto</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class="<span class= "text-danger">nav-item active</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">nav-link</span>" href="<span class= "text-danger">#</span>" >Home < <span class= "text-danger">span</span> class="<span class= "text-danger">sr-only</span>" >(current)< <span class= "text-danger">/span</span> >< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class="<span class= "text-danger">nav-item</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">nav-link</span>" href="<span class= "text-danger">#</span>" >Link< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class="<span class= "text-danger">nav-item dropdown</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">nav-link dropdown-toggle</span>" href="<span class= "text-danger">#</span>" id="<span class= "text-danger">navbarDropdown</span>" role="<span class= "text-danger">button</span>" data-toggle="<span class= "text-danger">dropdown</span>" aria-haspopup="<span class= "text-danger">true</span>" aria-expanded="<span class= "text-danger">false</span>" >Dropdown< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class="<span class= "text-danger">dropdown-menu</span>" aria-labelledby="<span class= "text-danger">navbarDropdown</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">dropdown-item</span>" href="<span class= "text-danger">#</span>" >Action< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">dropdown-item</span>" href="<span class= "text-danger">#</span>" >Another action< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class="<span class= "text-danger">dropdown-divider</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">dropdown-item</span>" href="<span class= "text-danger">#</span>" >Something else here< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class="<span class= "text-danger">nav-item</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">nav-link disabled</span>" href="<span class= "text-danger">#</span>" tabindex="<span class= "text-danger">-1</span>" aria-disabled="<span class= "text-danger">true</span>" >Disabled< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/nav</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-navbar-5" copy-data= '<nav class="navbar navbar-expand-lg navbar-light agm-bg-light" style= "z-index: 500;" id= "demo5"><a class="navbar-brand" href="#">Navbar</a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-demo2" aria-controls="navbar-demo2" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="navbar-demo2"><ul class="navbar-nav mr-auto"><li class="nav-item active"><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li><li class="nav-item"><a class="nav-link" href="#">Link</a></li><li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a><div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><div class="dropdown-divider"></div><a class="dropdown-item" href="#">Something else here</a></div></li><li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a></li></ul></div></nav>'>COPY</button>
        </div>
    </div>
    <p class= "mb-1">And because we use classes for our navs, you can avoid the list-based approach entirely if you like.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-12 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <nav class="navbar navbar-expand-lg navbar-light agm-bg-light" style= "z-index: 500;" id= "demo6">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-demo3" aria-controls="navbar-demo3" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-demo3">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Features</a>
                        <a class="nav-item nav-link" href="#">Pricing</a>
                        <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class= "col-lg-12 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> class="<span class= "text-danger">navbar navbar-expand-lg navbar-light agm-bg-light</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">navbar-brand</span>" href="<span class= "text-danger">#</span>" >Navbar< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> class="<span class= "text-danger">navbar-toggler</span>" type="<span class= "text-danger">button</span>" data-toggle="<span class= "text-danger">collapse</span>" data-target="<span class= "text-danger">#navbarNavAltMarkup</span>" aria-controls="<span class= "text-danger">navbarNavAltMarkup</span>" aria-expanded="<span class= "text-danger">false</span>" aria-label="<span class= "text-danger">Toggle navigation</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">span</span> class="<span class= "text-danger">navbar-toggler-icon</span>" >< <span class= "text-danger">/span</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class="<span class= "text-danger">collapse navbar-collapse</span>" id="<span class= "text-danger">navbarNavAltMarkup</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class="<span class= "text-danger">navbar-nav</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">nav-item nav-link active</span>" href="<span class= "text-danger">#</span>" >Home < <span class= "text-danger">span</span> class="<span class= "text-danger">sr-only</span>" >(current)< <span class= "text-danger">/span</span> >< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">nav-item nav-link</span>" href="<span class= "text-danger">#</span>" >Features< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">nav-item nav-link</span>" href="<span class= "text-danger">#</span>" >Pricing< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">nav-item nav-link disabled</span>" href="<span class= "text-danger">#</span>" tabindex="<span class= "text-danger">-1</span>" aria-disabled="<span class= "text-danger">true</span>" >Disabled< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/nav</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-navbar-6" copy-data= '<nav class="navbar navbar-expand-lg navbar-light agm-bg-light" style= "z-index: 500;" id= "demo6"><a class="navbar-brand" href="#">Navbar</a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-demo3" aria-controls="navbar-demo3" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="navbar-demo3"><div class="navbar-nav"><a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a><a class="nav-item nav-link" href="#">Features</a><a class="nav-item nav-link" href="#">Pricing</a><a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a></div></div></nav>'>COPY</button>
        </div>
    </div>
    <p class= "text-info mb-1 h5">COLOR SCHEME</p>
    <p class= "mb-1">Theming the navbar has never been easier thanks to the combination of theming classes and <span class= "text-danger">background-color</span> utilities. Choose from <span class= "text-danger">.navbar-light</span> for use with light background colors, or <span class= "text-danger">.navbar-dark</span> for dark background colors. Then, customize with <span class= "text-danger">.agm-bg-*</span> utilities.</p>
    <div class= "row my-3">
        <div class= "col-lg-12 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <nav class="navbar navbar-expand-lg navbar-light agm-bg-light mb-3" style= "z-index: 500;" id= "demo7">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-demo4" aria-controls="navbar-demo4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-demo4">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline btn-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-dark agm-bg-dark mb-3" style= "z-index: 500;" id= "demo8">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-demo5" aria-controls="navbar-demo5" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-demo5">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline btn-primary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-dark agm-bg-primary mb-3" style= "z-index: 500;" id= "demo9">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-demo6" aria-controls="navbar-demo6" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-demo6">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline btn-dark my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
        <div class= "col-lg-12 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-2">< <span class= "text-danger">nav</span> class= "<span class= "text-danger">navbar navbar-expand-lg navbar-light agm-bg-light</span>" > ... < <span class= "text-danger">/nav</span> ></p>
            <p class= "mb-2">< <span class= "text-danger">nav</span> class= "<span class= "text-danger">navbar navbar-expand-lg navbar-dark agm-bg-dark</span>" > ... < <span class= "text-danger">/nav</span> ></p>
            <p class= "mb-2">< <span class= "text-danger">nav</span> class= "<span class= "text-danger">navbar navbar-expand-lg navbar-dark agm-bg-primary</span>" > ... < <span class= "text-danger">/nav</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-navbar-7" copy-data= '<nav class="navbar navbar-expand-lg navbar-light agm-bg-light mb-3" style= "z-index: 500;" id= "demo7"><a class="navbar-brand" href="#">Navbar</a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-demo4" aria-controls="navbar-demo4" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="navbar-demo4"><ul class="navbar-nav mr-auto"><li class="nav-item active"><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li><li class="nav-item"><a class="nav-link" href="#">Link</a></li><li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a><div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><div class="dropdown-divider"></div><a class="dropdown-item" href="#">Something else here</a></div></li><li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a></li></ul><form class="form-inline my-2 my-lg-0"><input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"><button class="btn btn-outline btn-success my-2 my-sm-0" type="submit">Search</button></form></div></nav>'>COPY</button>
        </div>
    </div>
    <p class= "text-info mb-1 h5">CUSTOM NAVBAR</p>
    <p class= "mb-3">Navbar requires a wrapping <span class= "text-danger">.agm-navbar</span>. This navbar may contain the navigation menu and the sidebar navigation. The sidebar navigation is optional.</p>
    <p class= "mb-1">The <span class= "text-danger">.agm-navbar-nav</span> is position on the left side by default but you can change it`s position using our default classes. And the navbar consist of classes: <span class= "text-danger">.agm-nav-form</span> (for inputs), <span class= "text-danger">.agm-nav-link</span> (for your links), <span class= "text-danger">.agm-nav-btn</span> (for buttons) and <span class= "text-danger">.agm-nav-list</span> (if you have sub-links). The <span class= "text-danger">.agm-nav-list</span> contains also classes: <span class= "text-danger">.agm-nav-items</span> (for the container of your sub-links). And the <span class= "text-danger">.nav-icon</span> is just an optional if you have an icon on your link and too lazy to manually put CSS on it, this class will give your icon a margin for both sides. and if you want to change its position just use <span class= "text-danger">.float-right</span> or <span class= "text-danger">.float-left</span> classess.</p>
    <div class= "row my-3">
        <div class= "col-lg-12 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "agm-navbar navbar-dark shadow-sm mb-3" id= "agm-navbar-1">
                <div class= "agm-navbar-nav d-lg-block d-none">
                    <ul>
                        <li class= "agm-nav-form"><input type= "text" class= "form-control form-control-sm form-pills" placeholder= "Search..."></li>
                        <li class= "agm-nav-link agm-nav-list"><a><i class= "fas fa-bell nav-icon"></i>Link</a></li>
                        <li class= "agm-nav-link agm-nav-list"><a>Link</a></li>
                        <li class= "agm-nav-list">
                            <a><img src= "{{ asset('img/man.png') }}" class= "nav-img">Link<i class= "fas fa-caret-down nav-icon float-right"></i></a>
                            <ul class= "agm-nav-items">
                                <li class= "agm-nav-link"><a><i class= "fas fa-user nav-icon"></i>Sub-link</a></li>
                                <li class= "agm-nav-link"><a><i class= "fas fa-user nav-icon"></i>Sub-link</a></li>
                            </ul>
                        </li>
                        <li class= "agm-nav-btn"><button class= "btn btn-solid btn-primary btn-pills btn-block">Button</button></li>
                    </ul>
                </div>
            </div>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Refer to the navbar on the very top of this page to see the responsive design for this navbar</p>
        </div>
        <div class= "col-lg-12 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">agm-navbar navbar-dark shadow-sm</span>" id= "<span class= "text-danger">agm-navbar-1</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">agm-navbar-nav</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">agm-nav-form</span>" >< <span class= "text-danger">input</span> type= "<span class= "text-danger">text</span>" class= "<span class= "text-danger">form-control form-control-sm form-pills</span>" placeholder= "<span class= "text-danger">Search...</span>" >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">agm-nav-link agm-nav-list</span>" >< <span class= "text-danger">a</span> >< <span class= "text-danger">i</span> class= "<span class= "text-danger">fas fa-bell nav-icon</span>" >< <span class= "text-danger">/i </span>>Link< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">agm-nav-link agm-nav-list</span>" >< <span class= "text-danger">a</span> >Link< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">agm-nav-list</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> >< <span class= "text-danger">img</span> src= "<span class= "text-danger">#</span>" class= "<span class= "text-danger">nav-img</span>" >Link< <span class= "text-danger">i</span> class= "<span class= "text-danger">fas fa-caret-down nav-icon float-right</span>" >< <span class= "text-danger">/i</span> >< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> class= "<span class= "text-danger">agm-nav-items</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">agm-nav-link</span>" >< <span class= "text-danger">a</span> >< <span class= "text-danger">i</span> class= "<span class= "text-danger">fas fa-user nav-icon</span>" ><<span class= "text-danger"> /i</span> >Sub-link< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li </span>></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">agm-nav-link</span>" >< <span class= "text-danger">a</span> >< <span class= "text-danger">i</span> class= "<span class= "text-danger">fas fa-user nav-icon</span>" ><<span class= "text-danger"> /i</span> >Sub-link< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">agm-nav-btn</span>" >< <span class= "text-danger">button</span> class= "<span class= "text-danger">btn btn-solid btn-primary btn-pills btn-block</span>" >Button< <span class= "text-danger">/button</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-navbar-8" copy-data= '<div class= "agm-navbar navbar-dark shadow-sm mb-3" id= "agm-navbar-1"><div class= "agm-navbar-nav d-lg-block d-none"><ul><li class= "agm-nav-form"><input type= "text" class= "form-control form-control-sm form-pills" placeholder= "Search..."></li><li class= "agm-nav-link agm-nav-list"><a><i class= "fas fa-bell nav-icon"></i>Link</a></li><li class= "agm-nav-link agm-nav-list"><a>Link</a></li><li class= "agm-nav-list"><a><img src= "#" class= "nav-img">Link<i class= "fas fa-caret-down nav-icon float-right"></i></a><ul class= "agm-nav-items"><li class= "agm-nav-link"><a><i class= "fas fa-user nav-icon"></i>Sub-link</a></li><li class= "agm-nav-link"><a><i class= "fas fa-user nav-icon"></i>Sub-link</a></li></ul></li><li class= "agm-nav-btn"><button class= "btn btn-solid btn-primary btn-pills btn-block">Button</button></li></ul></div></div>'>COPY</button>
        </div>
    </div>
    <p class= "text-info mb-1 h5">CUSTOM NAVBAR ALIGNMENT</p>
    <p class= "mb-1">You can use the <span class= "text-danger">.mx-auto</span> to set the position of your nav in the middle and <span class= "text-danger">.ml-auto</span> to set it on the right.</p>
    <div class= "row my-3">
        <div class= "col-lg-12 py3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "agm-navbar navbar-dark shadow-sm mb-3" id= "agm-navbar-2">
                <div class= "agm-navbar-nav d-lg-block d-none">
                    <ul>
                        <li class= "agm-nav-form"><input type= "text" class= "form-control form-control-sm form-pills" placeholder= "Search..."></li>
                        <li class= "agm-nav-link agm-nav-list"><a><i class= "fas fa-bell nav-icon"></i>Link</a></li>
                        <li class= "agm-nav-link agm-nav-list"><a>Link</a></li>
                        <li class= "agm-nav-list">
                            <a><img src= "{{ asset('img/man.png') }}" class= "nav-img">Link<i class= "fas fa-caret-down nav-icon float-right"></i></a>
                            <ul class= "agm-nav-items">
                                <li class= "agm-nav-link"><a><i class= "fas fa-user nav-icon"></i>Sub-link</a></li>
                                <li class= "agm-nav-link"><a><i class= "fas fa-user nav-icon"></i>Sub-link</a></li>
                            </ul>
                        </li>
                        <li class= "agm-nav-btn"><button class= "btn btn-solid btn-primary btn-pills btn-block">Button</button></li>
                    </ul>
                </div>
            </div>
            <div class= "agm-navbar navbar-dark shadow-sm mb-3" id= "agm-navbar-3">
                <div class= "agm-navbar-nav d-lg-block d-none mx-auto">
                    <ul>
                        <li class= "agm-nav-form"><input type= "text" class= "form-control form-control-sm form-pills" placeholder= "Search..."></li>
                        <li class= "agm-nav-link agm-nav-list"><a><i class= "fas fa-bell nav-icon"></i>Link</a></li>
                        <li class= "agm-nav-link agm-nav-list"><a>Link</a></li>
                        <li class= "agm-nav-list">
                            <a><img src= "{{ asset('img/man.png') }}" class= "nav-img">Link<i class= "fas fa-caret-down nav-icon float-right"></i></a>
                            <ul class= "agm-nav-items">
                                <li class= "agm-nav-link"><a><i class= "fas fa-user nav-icon"></i>Sub-link</a></li>
                                <li class= "agm-nav-link"><a><i class= "fas fa-user nav-icon"></i>Sub-link</a></li>
                            </ul>
                        </li>
                        <li class= "agm-nav-btn"><button class= "btn btn-solid btn-primary btn-pills btn-block">Button</button></li>
                    </ul>
                </div>
            </div>
            <div class= "agm-navbar navbar-dark shadow-sm mb-3" id= "agm-navbar-4">
                <div class= "agm-navbar-nav d-lg-block d-none ml-auto">
                    <ul>
                        <li class= "agm-nav-form"><input type= "text" class= "form-control form-control-sm form-pills" placeholder= "Search..."></li>
                        <li class= "agm-nav-link agm-nav-list"><a><i class= "fas fa-bell nav-icon"></i>Link</a></li>
                        <li class= "agm-nav-link agm-nav-list"><a>Link</a></li>
                        <li class= "agm-nav-list">
                            <a><img src= "{{ asset('img/man.png') }}" class= "nav-img">Link<i class= "fas fa-caret-down nav-icon float-right"></i></a>
                            <ul class= "agm-nav-items">
                                <li class= "agm-nav-link"><a><i class= "fas fa-user nav-icon"></i>Sub-link</a></li>
                                <li class= "agm-nav-link"><a><i class= "fas fa-user nav-icon"></i>Sub-link</a></li>
                            </ul>
                        </li>
                        <li class= "agm-nav-btn"><button class= "btn btn-solid btn-primary btn-pills btn-block">Button</button></li>
                    </ul>
                </div>
            </div>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Refer to the navbar on the very top of this page to see the responsive design for this navbar</p>
        </div>
        <div class= "col-lg-12 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">agm-navbar navbar-dark shadow-sm</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">agm-navbar-nav</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;....</p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">agm-navbar navbar-dark shadow-sm</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">agm-navbar-nav mx-auto</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;....</p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">agm-navbar navbar-dark shadow-sm</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">agm-navbar-nav ml-auto</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;....</p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-navbar-9" copy-data= '<div class= "agm-navbar navbar-dark shadow-sm mb-3" id= "agm-navbar-2"><div class= "agm-navbar-nav d-lg-block d-none"><ul><li class= "agm-nav-form"><input type= "text" class= "form-control form-control-sm form-pills" placeholder= "Search..."></li><li class= "agm-nav-link agm-nav-list"><a><i class= "fas fa-bell nav-icon"></i>Link</a></li><li class= "agm-nav-link agm-nav-list"><a>Link</a></li><li class= "agm-nav-list"><a><img src= "#" class= "nav-img">Link<i class= "fas fa-caret-down nav-icon float-right"></i></a><ul class= "agm-nav-items"><li class= "agm-nav-link"><a><i class= "fas fa-user nav-icon"></i>Sub-link</a></li><li class= "agm-nav-link"><a><i class= "fas fa-user nav-icon"></i>Sub-link</a></li></ul></li><li class= "agm-nav-btn"><button class= "btn btn-solid btn-primary btn-pills btn-block">Button</button></li></ul></div></div>'>COPY</button>
        </div>
    </div>
</div>