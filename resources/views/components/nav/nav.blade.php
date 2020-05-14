<div class= "px-5 mt-5 content" id= "nav-page">
    <h4>NAVS</h4>
    <p class= "mb-1">Documentation and examples for how to use AGM’s included navigation components.</p>
    <hr>
    <p class= "text-info mb-1 h5">BASE NAV</p>
    <p class= "mb-3">Navigation available in Bootstrap share general markup and styles, from the base <span class= "text-danger">.nav</span> class to the active and disabled states. Swap modifier classes to switch between each style.</p>
    <p class= "mb-1">The base <span class= "text-danger">.nav</span> component is built with flexbox and provide a strong foundation for building all types of navigation components. It includes some style overrides (for working with lists), some link padding for larger hit areas, and basic disabled styling.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <ul class= "nav">
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Active</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Link</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Link</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link disabled" href= "#" tabindex= "-1" aria-disabled= "true">Disabled</a>
                </li>
            </ul>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">ul</span> class= "<span class= "text-danger">nav</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">nav-item</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class= "<span class= "text-danger">nav-link</span>" >...< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/ul</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "mb-1">Classes are used throughout, so your markup can be super flexible. Use < <span class= "text-danger">ul</span> >s like above, < <span class= "text-danger">ol</span> > if the order of your items is important, or roll your own with a < <span class= "text-danger">nav</span> > element. Because the <span class= "text-danger">.nav</span> uses <span class= "text-danger">display: flex</span>, the nav links behave the same as nav items would, but without the extra markup.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <ul class= "nav">
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Active</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Link</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Link</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link disabled" href= "#" tabindex= "-1" aria-disabled= "true">Disabled</a>
                </li>
            </ul>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">ul</span> class= "<span class= "text-danger">nav</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">nav-item</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class= "<span class= "text-danger">nav-link</span>" >...< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/ul</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">AVAILABLE STYLES</p>
    <p class= "mb-3">Change the style of <span class= "text-danger">.nav</span>s component with modifiers and utilities. Mix and match as needed, or build your own.</p>
    <p class= "text-info mb-1 h5">HORIZONTAL ALIGNMENT</p>
    <p class= "mb-2">Change the horizontal alignment of your nav with flexbox utilities. By default, navs are left-aligned, but you can easily change them to center or right aligned.</p>
    <p class= "mb-1">Centered with <span class= "text-danger">.justify-content-center</span>:</p>
    <div class= "row my-3">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <ul class= "nav justify-content-center">
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Active</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Link</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Link</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link disabled" href= "#" tabindex= "-1" aria-disabled= "true">Disabled</a>
                </li>
            </ul>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">ul</span> class= "<span class= "text-danger">nav justify-content-center</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">nav-item</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class= "<span class= "text-danger">nav-link</span>" >...< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/ul</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "mb-1">Right-aligned with <span class= "text-danger">.justify-content-end</span>:</p>
    <div class= "row my-3">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <ul class= "nav justify-content-end">
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Active</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Link</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Link</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link disabled" href= "#" tabindex= "-1" aria-disabled= "true">Disabled</a>
                </li>
            </ul>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">ul</span> class= "<span class= "text-danger">nav justify-content-end</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">nav-item</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class= "<span class= "text-danger">nav-link</span>" >...< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/ul</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">VERTICAL</p>
    <p class= "mb-1">Stack your navigation by changing the flex item direction with the <span class= "text-danger">.flex-column</span> utility. Need to stack them on some viewports but not others? Use the responsive versions (e.g., <span class= "text-danger">.flex-sm-column</span>).</p>
    <div class= "row my-3">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <ul class= "nav flex-column">
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Active</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Link</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Link</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link disabled" href= "#" tabindex= "-1" aria-disabled= "true">Disabled</a>
                </li>
            </ul>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">ul</span> class= "<span class= "text-danger">nav flex-column</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">nav-item</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class= "<span class= "text-danger">nav-link</span>" >...< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/ul</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "mb-1">As always, vertical navigation is possible without < <span class= "text-danger">ul</span> >s, too.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <nav class= "nav flex-column">
                <a class= "nav-link" href= "#">Active</a>
                <a class= "nav-link" href= "#">Link</a>
                <a class= "nav-link" href= "#">Link</a>
                <a class= "nav-link disabled" href= "#" tabindex= "-1" aria-disabled= "true">Disabled</a>
            </nav>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> class= "<span class= "text-danger">nav flex-column</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> href= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">nav-link</span>" >...< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/nav</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">TABS</p>
    <p class= "mb-1">Takes the basic nav from above and adds the <span class= "text-danger">.nav-tabs</span> class to generate a tabbed interface. Use them to create tabbable regions with our tab JavaScript plugin.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <ul class= "nav nav-tabs">
                <li class= "nav-item">
                    <a class= "nav-link active" href= "#">Active</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Link</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Link</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link disabled" href= "#" tabindex= "-1" aria-disabled= "true">Disabled</a>
                </li>
            </ul>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">ul</span> class= "<span class= "text-danger">nav nav-tabs</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">nav-item</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class= "<span class= "text-danger">nav-link</span>" >...< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/ul</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">PILLS</p>
    <p class= "mb-1">Take that same HTML, but use <span class= "text-danger">.nav-pills</span> instead:</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <ul class= "nav nav-pills">
                <li class= "nav-item">
                    <a class= "nav-link active" href= "#">Active</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Link</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Link</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link disabled" href= "#" tabindex= "-1" aria-disabled= "true">Disabled</a>
                </li>
            </ul>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">ul</span> class= "<span class= "text-danger">nav nav-pills</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">nav-item</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class= "<span class= "text-danger">nav-link</span>" >...< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/ul</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">FILL AND JUSTIFY</p>
    <p class= "mb-1">Force your <span class= "text-danger">.nav</span>’s contents to extend the full available width one of two modifier classes. To proportionately fill all available space with your <span class= "text-danger">.nav-item</span>s, use <span class= "text-danger">.nav-fill</span>. Notice that all horizontal space is occupied, but not every nav item has the same width.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <ul class= "nav nav-pills nav-fill">
                <li class= "nav-item">
                    <a class= "nav-link active" href= "#">Active</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Link</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Link</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link disabled" href= "#" tabindex= "-1" aria-disabled= "true">Disabled</a>
                </li>
            </ul>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">ul</span> class= "<span class= "text-danger">nav nav-pills nav-fill</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">nav-item</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class= "<span class= "text-danger">nav-link</span>" >...< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/ul</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "mb-1">When using a < <span class= "text-danger">nav</span> >-based navigation, be sure to include <span class= "text-danger">.nav-item</span> on the anchors.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <nav class= "nav nav-pills nav-fill">
                <a class= "nav-item nav-link active" href= "#">Active</a>
                <a class= "nav-item nav-link" href= "#">Link</a>
                <a class= "nav-item nav-link" href= "#">Link</a>
                <a class= "nav-item nav-link disabled" href= "#" tabindex= "-1" aria-disabled= "true">Disabled</a>
            </nav>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> class= "<span class= "text-danger">nav nav-pills nav-fill</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> href= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">nav-item nav-link</span>" >...< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/nav</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "mb-1">For equal-width elements, use <span class= "text-danger">.nav-justified</span>. All horizontal space will be occupied by nav links, but unlike the <span class= "text-danger">.nav-fill</span> above, every nav item will be the same width.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <ul class= "nav nav-pills nav-justified">
                <li class= "nav-item">
                    <a class= "nav-link active" href= "#">Active</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Link</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Link</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link disabled" href= "#" tabindex= "-1" aria-disabled= "true">Disabled</a>
                </li>
            </ul>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">ul</span> class= "<span class= "text-danger">nav nav-pills nav-justified</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">nav-item</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class= "<span class= "text-danger">nav-link</span>" >...< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/ul</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "mb-1">Similar to the <span class= "text-danger">.nav-fill</span> example using a < <span class= "text-danger">nav</span> >-based navigation, be sure to include <span class= "text-danger">.nav-item</span> on the anchors.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <nav class= "nav nav-pills nav-justified">
                <a class= "nav-item nav-link active" href= "#">Active</a>
                <a class= "nav-item nav-link" href= "#">Link</a>
                <a class= "nav-item nav-link" href= "#">Link</a>
                <a class= "nav-item nav-link disabled" href= "#" tabindex= "-1" aria-disabled= "true">Disabled</a>
            </nav>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> class= "<span class= "text-danger">nav nav-pills nav-justified</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> href= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">nav-item nav-link</span>" >...< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/nav</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-2 h5">USING DROPDOWNS</p>
    <p class= "text-info mb-1 h5">TABS WITH DROPDOWNS</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <ul class= "nav nav-tabs">
                <li class= "nav-item">
                    <a class= "nav-link active" href= "#">Active</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link dropdown-toggle" href= "#" data-toggle= "dropdown" role= "button" aria-haspopup= "true" aria-expanded= "false">Dropdown</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Link</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link disabled" href= "#" tabindex= "-1" aria-disabled= "true">Disabled</a>
                </li>
            </ul>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">ul</span> class= "<span class= "text-danger">nav nav-tabs</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">nav-item</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class= "<span class= "text-danger">nav-link</span>" >...< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">nav-item</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class= "<span class= "text-danger">nav-link dropdown-toggle</span>" data-toggle= "<span class= "text-danger">dropdown</span>" role= "<span class= "text-danger">button</span>" aria-haspopup= "<span class= "text-danger">true</span>" aria-expanded= "<span class= "text-danger">false</span>" >...< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">dropdown-menu</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/ul</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">PILLS WITH DROPDOWNS</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <ul class= "nav nav-pills">
                <li class= "nav-item">
                    <a class= "nav-link active" href= "#">Active</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link dropdown-toggle" href= "#" data-toggle= "dropdown" role= "button" aria-haspopup= "true" aria-expanded= "false">Dropdown</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link" href= "#">Link</a>
                </li>
                <li class= "nav-item">
                    <a class= "nav-link disabled" href= "#" tabindex= "-1" aria-disabled= "true">Disabled</a>
                </li>
            </ul>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">ul</span> class= "<span class= "text-danger">nav nav-pills</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">nav-item</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class= "<span class= "text-danger">nav-link</span>" >...< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">nav-item</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class= "<span class= "text-danger">nav-link dropdown-toggle</span>" data-toggle= "<span class= "text-danger">dropdown</span>" role= "<span class= "text-danger">button</span>" aria-haspopup= "<span class= "text-danger">true</span>" aria-expanded= "<span class= "text-danger">false</span>" >...< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">dropdown-menu</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/ul</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">DYNAMIC TABS</p>
    <p class= "mb-3">Dynamic tabbed interfaces, as described in the WAI ARIA Authoring Practices, require <span class= "text-danger">role="tablist"</span>, <span class= "text-danger">role="tab"</span>, <span class= "text-danger">role="tabpanel"</span>, and additional aria- attributes in order to convey their structure, functionality and current state to users of assistive technologies (such as screen readers).</p>
    <p class= "mb-1">Note that dynamic tabbed interfaces should not contain dropdown menus, as this causes both usability and accessibility issues. From a usability perspective, the fact that the currently displayed tab’s trigger element is not immediately visible (as it’s inside the closed dropdown menu) can cause confusion. From an accessibility point of view, there is currently no sensible way to map this sort of construct to a standard WAI ARIA pattern, meaning that it cannot be easily made understandable to users of assistive technologies.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><p class= "mt-3">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p></div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><p class= "mt-3">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p></div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><p class= "mt-3">Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p></div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">ul</span> class="<span class= "text-danger">nav nav-tabs</span>" id="<span class= "text-danger">...</span>" role="<span class= "text-danger">tablist</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">nav-item</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">nav-link active</span>" id="<span class= "text-danger">...</span>" data-toggle="<span class= "text-danger">tab</span>" href="<span class= "text-danger">...</span>" role="<span class= "text-danger">tab</span>" aria-controls="<span class= "text-danger">...</span>" aria-selected="<span class= "text-danger">true</span>" >... < <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class="<span class= "text-danger">tab-content</span>" id="<span class= "text-danger">...</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">tab-pane fade</span>" id= "<span class= "text-danger">...</span>" role= "<span class= "text-danger">tabpanel</span>" aria-labelledby= "<span class= "text-danger">...</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "mb-1">To help fit your needs, this works with < <span class= "text-danger">ul</span> >-based markup, as shown above, or with any arbitrary “roll your own” markup. Note that if you’re using < <span class= "text-danger">nav</span> >, you shouldn’t add <span class= "text-danger">role="tablist"</span> directly to it, as this would override the element’s native role as a navigation landmark. Instead, switch to an alternative element (in the example below, a simple < <span class= "text-danger">div</span> >) and wrap the < <span class= "text-danger">nav</span> > around it.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <nav>
                <div class="nav nav-tabs" id="myTab" role="tablist">
                    <a class="nav-link nav-item active" id="home-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home" aria-selected="true">Home</a>
                    <a class="nav-link nav-item" id="profile-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                    <a class="nav-link nav-item" id="contact-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                </div>
            </nav>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab"><p class= "mt-3">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p></div>
                <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab"><p class= "mt-3">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p></div>
                <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab"><p class= "mt-3">Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p></div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class="<span class= "text-danger">nav nav-tabs</span>" id="<span class= "text-danger">...</span>" role="<span class= "text-danger">tablist</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">nav-item nav-link active</span>" id="<span class= "text-danger">...</span>" data-toggle="<span class= "text-danger">tab</span>" href="<span class= "text-danger">...</span>" role="<span class= "text-danger">tab</span>" aria-controls="<span class= "text-danger">...</span>" aria-selected="<span class= "text-danger">true</span>" >... < <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/nav</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class="<span class= "text-danger">tab-content</span>" id="<span class= "text-danger">...</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">tab-pane fade</span>" id= "<span class= "text-danger">...</span>" role= "<span class= "text-danger">tabpanel</span>" aria-labelledby= "<span class= "text-danger">...</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "mb-1">The tabs plugin also works with pills.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <ul class="nav nav-pills" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact3" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab"><p class= "mt-3">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p></div>
                <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab"><p class= "mt-3">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p></div>
                <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab"><p class= "mt-3">Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p></div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">ul</span> class="<span class= "text-danger">nav nav-pills</span>" id="<span class= "text-danger">...</span>" role="<span class= "text-danger">tablist</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">nav-item</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class="<span class= "text-danger">nav-link active</span>" id="<span class= "text-danger">...</span>" data-toggle="<span class= "text-danger">tab</span>" href="<span class= "text-danger">...</span>" role="<span class= "text-danger">tab</span>" aria-controls="<span class= "text-danger">...</span>" aria-selected="<span class= "text-danger">true</span>" >... < <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class="<span class= "text-danger">tab-content</span>" id="<span class= "text-danger">...</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">tab-pane fade</span>" id= "<span class= "text-danger">...</span>" role= "<span class= "text-danger">tabpanel</span>" aria-labelledby= "<span class= "text-danger">...</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
</div>