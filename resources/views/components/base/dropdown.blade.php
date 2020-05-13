<div class= "p-4 mt-4 mr-4 content" id= "dropdown-page">
    <h4>DROPDOWNS</h4>
    <p class= "mb-1">Toggle contextual overlays for displaying lists of links and more with the AGM dropdown plugin.</p>
    <hr>
    <p class= "mb-3">Wrap the dropdown’s toggle (your button or link) and the dropdown menu within <span class= "text-danger">.dropdown</span>, or another element that declares <span class= "text-danger">position: relative;</span>. Dropdowns can be triggered from < <span class= "text-danger">a</span> > or < <span class= "text-danger">button</span> > elements to better fit your potential needs.</p>
    <p class= "text-info mb-1 h5">SIGLE BUTTON</p>
    <p class= "mb-1">Any single <span class= "text-danger">.btn</span> can be turned into a dropdown toggle with some markup changes. Here’s how you can put them to work with either < <span class= "text-danger">button</span> > elements:</p>
    <div class= "row my-3">
        <div class= "col-md-6 agm-bg-light py-3 rounded">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class="dropdown">
                <button class="btn btn-solid btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">button</span> class= "<span class="text-danger">btn btn-solid btn-secondary dropdown-toggle</span>" type= "<span class="text-danger">button</span>" id= "<span class="text-danger">dropdownMenuButton</span>" data-toggle= "<span class="text-danger">dropdown</span>" aria-haspopup= "<span class="text-danger">true</span>" aria-expanded= "<span class="text-danger">false</span>" >Dropdown button< <span class="text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown-menu</span>" aria-labelledby= "<span class="text-danger">dropdownMenuButton</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Another Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Something else here< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class="text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "mb-1">And with < <span class= "text-danger">a</span> > elements:</p>
    <div class= "row my-3">
        <div class= "col-md-6 agm-bg-light py-3 rounded">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class="dropdown">
                <a class="btn btn-solid btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">btn btn-solid btn-secondary dropdown-toggle</span>" role= "<span class="text-danger">button</span>" id= "<span class="text-danger">dropdownMenuLink</span>" data-toggle= "<span class="text-danger">dropdown</span>" aria-haspopup= "<span class="text-danger">true</span>" aria-expanded= "<span class="text-danger">false</span>" >Dropdown link< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown-menu</span>" aria-labelledby= "<span class="text-danger">dropdownMenuLink</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Another Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Something else here< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class="text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "mb-1">The best part is you can do this with any button variant, too:</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 agm-bg-light py-3 rounded">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class="btn-group mb-1">
                <button class="btn btn-solid btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Primary
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class= "dropdown-divider"></div>
                    <a class= "dropdown-item" href= "#">Separated link</a>
                </div>
            </div>
            <div class="btn-group mb-1">
                <button class="btn btn-solid btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Secondary
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class= "dropdown-divider"></div>
                    <a class= "dropdown-item" href= "#">Separated link</a>
                </div>
            </div>
            <div class="btn-group mb-1">
                <button class="btn btn-solid btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Success
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class= "dropdown-divider"></div>
                    <a class= "dropdown-item" href= "#">Separated link</a>
                </div>
            </div>
            <div class="btn-group mb-1">
                <button class="btn btn-solid btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Warning
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class= "dropdown-divider"></div>
                    <a class= "dropdown-item" href= "#">Separated link</a>
                </div>
            </div>
            <div class="btn-group mb-1">
                <button class="btn btn-solid btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Danger
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class= "dropdown-divider"></div>
                    <a class= "dropdown-item" href= "#">Separated link</a>
                </div>
            </div>
            <div class="btn-group mb-1">
                <button class="btn btn-solid btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Info
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class= "dropdown-divider"></div>
                    <a class= "dropdown-item" href= "#">Separated link</a>
                </div>
            </div>
            <div class="btn-group mb-1">
                <button class="btn btn-solid btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Light
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class= "dropdown-divider"></div>
                    <a class= "dropdown-item" href= "#">Separated link</a>
                </div>
            </div>
            <div class="btn-group mb-1">
                <button class="btn btn-solid btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dark
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class= "dropdown-divider"></div>
                    <a class= "dropdown-item" href= "#">Separated link</a>
                </div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class="text-danger">div</span> class= "<span class="text-danger">btn-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">button</span> class= "<span class="text-danger">btn btn-solid btn-primary dropdown-toggle</span>" type= "<span class="text-danger">button</span>" id= "<span class="text-danger">dropdownMenuButton</span>" data-toggle= "<span class="text-danger">dropdown</span>" aria-haspopup= "<span class="text-danger">true</span>" aria-expanded= "<span class="text-danger">false</span>" >Dropdown link< <span class="text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown-menu</span>" aria-labelledby= "<span class="text-danger">dropdownMenuButton</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Another Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Something else here< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">dropdown-divider</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Separated link< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class="text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">SPLIT BUTTON</p>
    <p class= "mb-3">Similarly, create split button dropdowns with virtually the same markup as single button dropdowns, but with the addition of <span class= "text-danger">.dropdown-toggle-split</span> for proper spacing around the dropdown caret.</p>
    <p class= "mb-1">We use this extra class to reduce the horizontal <span class= "text-danger">padding</span> on either side of the caret by 25% and remove the <span class= "text-danger">margin-left</span> that’s added for regular button dropdowns. Those extra changes keep the caret centered in the split button and provide a more appropriately sized hit area next to the main button.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class="btn-group mb-1">
                <button type="button" class="btn btn-solid btn-primary">Primary</button>
                <button type="button" class="btn btn-solid btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
            <div class="btn-group mb-1">
                <button type="button" class="btn btn-solid btn-secondary">Secondary</button>
                <button type="button" class="btn btn-solid btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
            <div class="btn-group mb-1">
                <button type="button" class="btn btn-solid btn-success">Success</button>
                <button type="button" class="btn btn-solid btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
            <div class="btn-group mb-1">
                <button type="button" class="btn btn-solid btn-warning">Warning</button>
                <button type="button" class="btn btn-solid btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
            <div class="btn-group mb-1">
                <button type="button" class="btn btn-solid btn-danger">Danger</button>
                <button type="button" class="btn btn-solid btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
            <div class="btn-group mb-1">
                <button type="button" class="btn btn-solid btn-info">Info</button>
                <button type="button" class="btn btn-solid btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
            <div class="btn-group mb-1">
                <button type="button" class="btn btn-solid btn-light">Light</button>
                <button type="button" class="btn btn-solid btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
            <div class="btn-group mb-1">
                <button type="button" class="btn btn-solid btn-dark">Dark</button>
                <button type="button" class="btn btn-solid btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class="text-danger">div</span> class= "<span class="text-danger">btn-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-primary</span>" >Primary< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">button</span> class= "<span class="text-danger">btn btn-solid btn-primary dropdown-toggle dropdown-toggle-split</span>" type= "<span class="text-danger">button</span>" id= "<span class="text-danger">dropdownMenuButton</span>" data-toggle= "<span class="text-danger">dropdown</span>" aria-haspopup= "<span class="text-danger">true</span>" aria-expanded= "<span class="text-danger">false</span>" >< <span class= "text-danger">span</span> class= "<span class= "text-danger">sr-only</span>" >Toggle Dropdown< <span class= "text-danger">/span</span> >< <span class="text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown-menu</span>" aria-labelledby= "<span class="text-danger">dropdownMenuButton</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Another Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Something else here< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">dropdown-divider</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Separated link< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class="text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">SIZING</p>
    <p class= "mb-1">Button dropdowns work with buttons of all sizes, including default and split dropdown buttons.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "btn-group mb-1">
                <button class="btn btn-solid btn-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Large button</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <div class= "btn-group mb-1">
                <button class= "btn btn-solid btn-secondary btn-lg" type= "button">Large split button</button>
                <button class="btn btn-solid btn-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class= "sr-only">Dropdown Toggle</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <div class= "btn-group mb-1">
                <button class="btn btn-solid btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Large button</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <div class= "btn-group mb-1">
                <button class= "btn btn-solid btn-secondary btn-sm" type= "button">Large split button</button>
                <button class="btn btn-solid btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class= "sr-only">Dropdown Toggle</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class="text-danger">div</span> class= "<span class="text-danger">btn-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">button</span> class= "<span class="text-danger">btn btn-solid btn-primary btn-lg dropdown-toggle</span>" type= "<span class="text-danger">button</span>" id= "<span class="text-danger">dropdownMenuButton</span>" data-toggle= "<span class="text-danger">dropdown</span>" aria-haspopup= "<span class="text-danger">true</span>" aria-expanded= "<span class="text-danger">false</span>" >Dropdown link< <span class="text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown-menu</span>" aria-labelledby= "<span class="text-danger">dropdownMenuButton</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Another Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Something else here< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">dropdown-divider</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Separated link< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class="text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class="text-danger">div</span> class= "<span class="text-danger">btn-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-primary btn-lg</span>" >Primary< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">button</span> class= "<span class="text-danger">btn btn-solid btn-primary btn-lg dropdown-toggle dropdown-toggle-split</span>" type= "<span class="text-danger">button</span>" id= "<span class="text-danger">dropdownMenuButton</span>" data-toggle= "<span class="text-danger">dropdown</span>" aria-haspopup= "<span class="text-danger">true</span>" aria-expanded= "<span class="text-danger">false</span>" >< <span class= "text-danger">span</span> class= "<span class= "text-danger">sr-only</span>" >Toggle Dropdown< <span class= "text-danger">/span</span> >< <span class="text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown-menu</span>" aria-labelledby= "<span class="text-danger">dropdownMenuButton</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Another Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Something else here< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">dropdown-divider</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Separated link< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class="text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-3 h5">DIRECTIONS</p>
    <p class= "text-info mb-1 h5">DROPUP</p>
    <p class= "mb-1">Trigger dropdown menus above elements by adding <span class= "text-danger">.dropup</span> to the parent element.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "btn-group dropup mb-1">
                <button class="btn btn-solid btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropup</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <div class= "btn-group dropup mb-1">
                <button class= "btn btn-solid btn-secondary" type= "button">Dropup</button>
                <button class="btn btn-solid btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class= "sr-only">Toggle Dropup</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class="text-danger">div</span> class= "<span class="text-danger">btn-group dropup</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">button</span> class= "<span class="text-danger">btn btn-solid btn-primary dropdown-toggle</span>" type= "<span class="text-danger">button</span>" id= "<span class="text-danger">dropdownMenuButton</span>" data-toggle= "<span class="text-danger">dropdown</span>" aria-haspopup= "<span class="text-danger">true</span>" aria-expanded= "<span class="text-danger">false</span>" >Dropup< <span class="text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown-menu</span>" aria-labelledby= "<span class="text-danger">dropdownMenuButton</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Another Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Something else here< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">dropdown-divider</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Separated link< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class="text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class="text-danger">div</span> class= "<span class="text-danger">btn-group dropup</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-primary</span>" >Dropup< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">button</span> class= "<span class="text-danger">btn btn-solid btn-primary dropdown-toggle dropdown-toggle-split</span>" type= "<span class="text-danger">button</span>" id= "<span class="text-danger">dropdownMenuButton</span>" data-toggle= "<span class="text-danger">dropdown</span>" aria-haspopup= "<span class="text-danger">true</span>" aria-expanded= "<span class="text-danger">false</span>" >< <span class= "text-danger">span</span> class= "<span class= "text-danger">sr-only</span>" >Toggle Dropup< <span class= "text-danger">/span</span> >< <span class="text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown-menu</span>" aria-labelledby= "<span class="text-danger">dropdownMenuButton</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Another Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Something else here< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">dropdown-divider</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Separated link< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class="text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">DROPRIGHT</p>
    <p class= "mb-1">Trigger dropdown menus at the right of the elements by adding <span class= "text-danger">.dropright</span> to the parent element.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "btn-group dropright mb-1">
                <button class="btn btn-solid btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropright</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <div class= "btn-group dropright mb-1">
                <button class= "btn btn-solid btn-secondary" type= "button">Dropright</button>
                <button class="btn btn-solid btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class= "sr-only">Toggle Dropright</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class="text-danger">div</span> class= "<span class="text-danger">btn-group dropright</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">button</span> class= "<span class="text-danger">btn btn-solid btn-primary dropdown-toggle</span>" type= "<span class="text-danger">button</span>" id= "<span class="text-danger">dropdownMenuButton</span>" data-toggle= "<span class="text-danger">dropdown</span>" aria-haspopup= "<span class="text-danger">true</span>" aria-expanded= "<span class="text-danger">false</span>" >Dropright< <span class="text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown-menu</span>" aria-labelledby= "<span class="text-danger">dropdownMenuButton</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Another Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Something else here< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">dropdown-divider</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Separated link< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class="text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class="text-danger">div</span> class= "<span class="text-danger">btn-group dropright</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-primary</span>" >Dropright< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">button</span> class= "<span class="text-danger">btn btn-solid btn-primary dropdown-toggle dropdown-toggle-split</span>" type= "<span class="text-danger">button</span>" id= "<span class="text-danger">dropdownMenuButton</span>" data-toggle= "<span class="text-danger">dropdown</span>" aria-haspopup= "<span class="text-danger">true</span>" aria-expanded= "<span class="text-danger">false</span>" >< <span class= "text-danger">span</span> class= "<span class= "text-danger">sr-only</span>" >Toggle Dropright< <span class= "text-danger">/span</span> >< <span class="text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown-menu</span>" aria-labelledby= "<span class="text-danger">dropdownMenuButton</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Another Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Something else here< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">dropdown-divider</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Separated link< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class="text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">DROPLEFT</p>
    <p class= "mb-1">Trigger dropdown menus at the left of the elements by adding <span class= "text-danger">.dropleft</span> to the parent element.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "btn-group dropleft mb-1">
                <button class="btn btn-solid btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropleft</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <div class= "btn-group mb-1">
                <div class= "btn-group dropleft" role= "group">
                    <button class="btn btn-solid btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class= "sr-only">Toggle Dropleft</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <button class= "btn btn-solid btn-secondary" type= "button">Dropleft</button>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class="text-danger">div</span> class= "<span class="text-danger">btn-group dropleft</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">button</span> class= "<span class="text-danger">btn btn-solid btn-primary dropdown-toggle</span>" type= "<span class="text-danger">button</span>" id= "<span class="text-danger">dropdownMenuButton</span>" data-toggle= "<span class="text-danger">dropdown</span>" aria-haspopup= "<span class="text-danger">true</span>" aria-expanded= "<span class="text-danger">false</span>" >Dropleft< <span class="text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown-menu</span>" aria-labelledby= "<span class="text-danger">dropdownMenuButton</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Another Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Something else here< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">dropdown-divider</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Separated link< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class="text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class="text-danger">div</span> class= "<span class="text-danger">btn-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">btn-group dropleft</span>" role= "<span class= "text-danger">group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">button</span> class= "<span class="text-danger">btn btn-solid btn-primary dropdown-toggle dropdown-toggle-split</span>" type= "<span class="text-danger">button</span>" id= "<span class="text-danger">dropdownMenuButton</span>" data-toggle= "<span class="text-danger">dropdown</span>" aria-haspopup= "<span class="text-danger">true</span>" aria-expanded= "<span class="text-danger">false</span>" >< <span class= "text-danger">span</span> class= "<span class= "text-danger">sr-only</span>" >Toggle Dropleft< <span class= "text-danger">/span</span> >< <span class="text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown-menu</span>" aria-labelledby= "<span class="text-danger">dropdownMenuButton</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Another Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Something else here< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">dropdown-divider</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Separated link< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-primary</span>" >Dropleft< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">< <span class="text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">MENU ITEMS</p>
    <p class= "mb-1">Historically dropdown menu contents had to be links, but that’s no longer the case with v4. Now you can optionally use < <span class= "text-danger">button</span> > elements in your dropdowns instead of just < <span class= "text-danger">a</span> >s.</p>
    <div class= "row my-3">
        <div class= "col-md-6 agm-bg-light py-3 rounded">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class="dropdown">
                <button class="btn btn-solid btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <button class="dropdown-item" type="button">Action</button>
                    <button class="dropdown-item" type="button">Another action</button>
                    <button class="dropdown-item" type="button">Something else here</button>
                </div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">button</span> class= "<span class="text-danger">btn btn-solid btn-secondary dropdown-toggle</span>" type= "<span class="text-danger">button</span>" id= "<span class="text-danger">dropdownMenuButton</span>" data-toggle= "<span class="text-danger">dropdown</span>" aria-haspopup= "<span class="text-danger">true</span>" aria-expanded= "<span class="text-danger">false</span>" >Dropdown button< <span class="text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown-menu</span>" aria-labelledby= "<span class="text-danger">dropdownMenuButton</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">button</span> class= "<span class="text-danger">dropdown-item</span>" type= "<span class="text-danger">button</span>" >Action< <span class="text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">button</span> class= "<span class="text-danger">dropdown-item</span>" type= "<span class="text-danger">button</span>" >Another Action< <span class="text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">button</span> class= "<span class="text-danger">dropdown-item</span>" type= "<span class="text-danger">button</span>" >Something else here< <span class="text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class="text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "mb-1">You can also create non-interactive dropdown items with <span class= "text-danger">.dropdown-item-text</span>. Feel free to style further with custom CSS or text utilities.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 agm-bg-light py-3 rounded">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class="dropdown">
                <button class="btn btn-solid btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">          
                    <span class="dropdown-item-text">Dropdown item text</span>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">button</span> class= "<span class="text-danger">btn btn-solid btn-secondary dropdown-toggle</span>" type= "<span class="text-danger">button</span>" id= "<span class="text-danger">dropdownMenuButton</span>" data-toggle= "<span class="text-danger">dropdown</span>" aria-haspopup= "<span class="text-danger">true</span>" aria-expanded= "<span class="text-danger">false</span>" >Dropdown button< <span class="text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown-menu</span>" aria-labelledby= "<span class="text-danger">dropdownMenuButton</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">span</span> class= "<span class= "text-danger">dropdown-item-text</span>" >Dropdown item text< <span class= "text-danger">/span</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Another Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Something else here< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class="text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">ACTIVE</p>
    <p class= "mb-1">Add <span class= "text-danger">.active</span> to items in the dropdown to <b>.active</b>.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 agm-bg-light py-3 rounded">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class="dropdown">
                <button class="btn btn-solid btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> 
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item active" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">button</span> class= "<span class="text-danger">btn btn-solid btn-secondary dropdown-toggle</span>" type= "<span class="text-danger">button</span>" id= "<span class="text-danger">dropdownMenuButton</span>" data-toggle= "<span class="text-danger">dropdown</span>" aria-haspopup= "<span class="text-danger">true</span>" aria-expanded= "<span class="text-danger">false</span>" >Dropdown button< <span class="text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown-menu</span>" aria-labelledby= "<span class="text-danger">dropdownMenuButton</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item active</span>" href= "<span class="text-danger">#</span>" >Another Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Something else here< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class="text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">DISABLED</p>
    <p class= "mb-1">Add <span class= "text-danger">.disabled</span> to items in the dropdown to <b>style them as disabled</b>.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 agm-bg-light py-3 rounded">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class="dropdown">
                <button class="btn btn-solid btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> 
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item disabled" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">button</span> class= "<span class="text-danger">btn btn-solid btn-secondary dropdown-toggle</span>" type= "<span class="text-danger">button</span>" id= "<span class="text-danger">dropdownMenuButton</span>" data-toggle= "<span class="text-danger">dropdown</span>" aria-haspopup= "<span class="text-danger">true</span>" aria-expanded= "<span class="text-danger">false</span>" >Dropdown button< <span class="text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown-menu</span>" aria-labelledby= "<span class="text-danger">dropdownMenuButton</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item disabled</span>" href= "<span class="text-danger">#</span>" >Another Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Something else here< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class="text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">MENU ALIGNMENT</p>
    <p class= "mb-1">By default, a dropdown menu is automatically positioned 100% from the top and along the left side of its parent. Add <span class= "text-danger">.dropdown-menu-right</span> to a <span class= "text-danger">.dropdown-menu</span> to right align the dropdown menu.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 agm-bg-light py-3 rounded">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class="dropdown">
                <button class="btn btn-solid btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Right-aligned menu
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> 
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">button</span> class= "<span class="text-danger">btn btn-solid btn-secondary dropdown-toggle</span>" type= "<span class="text-danger">button</span>" id= "<span class="text-danger">dropdownMenuButton</span>" data-toggle= "<span class="text-danger">dropdown</span>" aria-haspopup= "<span class="text-danger">true</span>" aria-expanded= "<span class="text-danger">false</span>" >Right-aligned menu< <span class="text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown-menu dropdown-menu-right</span>" aria-labelledby= "<span class="text-danger">dropdownMenuButton</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Another Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Something else here< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class="text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">RESPONSIVE ALIGNMENT</p>
    <p class= "mb-3">If you want to use responsive alignment, disable dynamic positioning by adding the <span class= "text-danger">data-display="static"</span> attribute and use the responsive variation classes.</p>
    <p class= "mb-1">To align <b>right</b> the dropdown menu with the given breakpoint or larger, add <span class= "text-danger">.dropdown-menu{-sm|-md|-lg|-xl}-right</span>.</p>
    <div class= "row my-3">
        <div class= "col-md-6 agm-bg-light py-3 rounded">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class="btn-group">
                <button class="btn btn-solid btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-display= "static" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Left-aligned but right aligned when large screen
                </button>
                <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="dropdownMenuButton"> 
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class="text-danger">div</span> class= "<span class="text-danger">btn-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">button</span> class= "<span class="text-danger">btn btn-solid btn-secondary dropdown-toggle</span>" type= "<span class="text-danger">button</span>" id= "<span class="text-danger">dropdownMenuButton</span>" data-display= "<span class= "text-danger">static</span>" data-toggle= "<span class="text-danger">dropdown</span>" aria-haspopup= "<span class="text-danger">true</span>" aria-expanded= "<span class="text-danger">false</span>" >Left-aligned but right aligned when large screen< <span class="text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown-menu dropdown-menu-lg-right</span>" aria-labelledby= "<span class="text-danger">dropdownMenuButton</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Another Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Something else here< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class="text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "mb-1">To align <b>left</b> the dropdown menu with the given breakpoint or larger, add <span class= "text-danger">.dropdown-menu-right</span> and <span class= "text-danger">.dropdown-menu{-sm|-md|-lg|-xl}-left</span>.</p>
    <div class= "row my-3">
        <div class= "col-md-6 agm-bg-light py-3 rounded">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class="btn-group">
                <button class="btn btn-solid btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-display= "static" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Right-aligned but left aligned when large screen
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton"> 
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class="text-danger">div</span> class= "<span class="text-danger">btn-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">button</span> class= "<span class="text-danger">btn btn-solid btn-secondary dropdown-toggle</span>" type= "<span class="text-danger">button</span>" id= "<span class="text-danger">dropdownMenuButton</span>" data-display= "<span class= "text-danger">static</span>" data-toggle= "<span class="text-danger">dropdown</span>" aria-haspopup= "<span class="text-danger">true</span>" aria-expanded= "<span class="text-danger">false</span>" >Right-aligned but left aligned when large screen< <span class="text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">div</span> class= "<span class="text-danger">dropdown-menu dropdown-menu-right dropdown-menu-lg-left</span>" aria-labelledby= "<span class="text-danger">dropdownMenuButton</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Another Action< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class="text-danger">a</span> class= "<span class="text-danger">dropdown-item</span>" href= "<span class="text-danger">#</span>" >Something else here< <span class="text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class="text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class="text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
</div>