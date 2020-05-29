<div class= "px-3 mt-5 content" id= "popover-page">
    <h4>POPOVER</h4>
    <p class= "mb-1">Documentation and examples for adding AGM popovers, like those found in iOS, to any element on your site.</p>
    <hr>
    <p class= "text-info mb-1 h5">EXAMPLE: ENABLE POPOVERS ANYWHERE</p>
    <p class= "mb-1">One way to initialize all popovers on a page would be to select them by their <span class= "text-danger">data-toggle</span> attribute:</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-12 py-3 agm-bg-light rounded col-12">
            <p class= "mb-1">$(<span class= "text-primary">function</span>() {</p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;$('<span class= "text-danger">[data-toggle= "popover"]</span>').popover()</p>
            <p class= "mb-1">})</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">EXAMPLE: USING THE <span class= "text-danger">CONTAINER</span> OPTION</p>
    <p class= "mb-1">When you have some styles on a parent element that interfere with a popover, you’ll want to specify a custom <span class= "text-danger">container</span> so that the popover’s HTML appears within that element instead.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-12 py-3 agm-bg-light rounded col-12">
            <p class= "mb-1">$(<span class= "text-primary">function</span>() {</p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;$('<span class= "text-danger">.example-popover</span>').popover({</p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class= "text-primary">container</span>: '<span class= "text-danger">body</span></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;})</p>
            <p class= "mb-1">})</p>
        </div>
    </div>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <button type= "button" class= "btn btn-solid btn-danger" data-toggle= "popover" title= "Popover Title" data-content= "And here's some amazing content. It's very engaging. Right?" data-trigger= "focus">Click to toggle popover</button>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-danger</span>" data-toggle= "<span class= "text-danger">popover</span>" title= "<span class= "text-danger">Popover Title</span>" data-content= "<span class= "text-danger">And here's some amazing content. It's very engaging. Right?</span>" >Click to toggle popover< <span class= "text-danger">/button</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">FOUR DIRECTIONS</p>
    <p class= "mb-1">Four options are available: top, right, bottom, and left aligned.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <button type= "button" class= "btn btn-solid btn-secondary mb-1" data-container= "body" data-toggle= "popover" data-placement= "top" data-content= "Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-trigger= "focus">Popover on top</button>
            <button type= "button" class= "btn btn-solid btn-secondary mb-1" data-container= "body" data-toggle= "popover" data-placement= "right" data-content= "Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-trigger= "focus">Popover on right</button>
            <button type= "button" class= "btn btn-solid btn-secondary mb-1" data-container= "body" data-toggle= "popover" data-placement= "bottom" data-content= "Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-trigger= "focus">Popover on bottom</button>
            <button type= "button" class= "btn btn-solid btn-secondary mb-1" data-container= "body" data-toggle= "popover" data-placement= "left" data-content= "Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-trigger= "focus">Popover on left</button>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-3">< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-secondary mb-1</span>" data-container= "<span class= "text-danger">body</span>" data-toggle= "<span class= "text-danger">popover</span>" data-placement= "<span class= "text-danger">top</span>" data-content= "<span class= "text-danger">Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</span>">Popover on top<<span class= "text-danger"> /button</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-secondary mb-1</span>" data-container= "<span class= "text-danger">body</span>" data-toggle= "<span class= "text-danger">popover</span>" data-placement= "<span class= "text-danger">right</span>" data-content= "<span class= "text-danger">Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</span>">Popover on right<<span class= "text-danger"> /button</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-secondary mb-1</span>" data-container= "<span class= "text-danger">body</span>" data-toggle= "<span class= "text-danger">popover</span>" data-placement= "<span class= "text-danger">bottom</span>" data-content= "<span class= "text-danger">Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</span>">Popover on bottom<<span class= "text-danger"> /button</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-secondary mb-1</span>" data-container= "<span class= "text-danger">body</span>" data-toggle= "<span class= "text-danger">popover</span>" data-placement= "<span class= "text-danger">left</span>" data-content= "<span class= "text-danger">Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</span>">Popover on left<<span class= "text-danger"> /button</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">DISMISS ON NEXT CLICK</p>
    <p class= "mb-1">Use the <span class= "text-danger">focus</span> trigger to dismiss popovers on the user’s next click of a different element than the toggle element.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <a tabindex= "0" role= "button" class= "btn btn-solid btn-danger" data-toggle= "popover" title= "Popover Title" data-content= "And here's some amazing content. It's very engaging. Right?" data-trigger= "focus">Dismissible popover</a>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">a</span> tabindex= "<span class= "text-danger">0</span>" role= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-danger</span>" data-toggle= "<span class= "text-danger">popover</span>" title= "<span class= "text-danger">Popover Title</span>" data-content= "<span class= "text-danger">And here's some amazing content. It's very engaging. Right?</span>" data-trigger= "<span class= "text-danger">focus</span>" >Dismissible popover< <span class= "text-danger">/a</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">DISABLED ELEMENTS</p>
    <p class= "mb-3">Elements with the <span class= "text-danger">disabled</span> attribute aren’t interactive, meaning users cannot hover or click them to trigger a popover (or tooltip). As a workaround, you’ll want to trigger the popover from a wrapper < <span class= "text-danger">div</span> > or < <span class= "text-danger">span</span> > and override the pointer-events on the disabled element.</p>
    <p class= "mb-3">For disabled popover triggers, you may also prefer <span class= "text-danger">data-trigger="hover"</span> so that the popover appears as immediate visual feedback to your users as they may not expect to click on a disabled element.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <span class= "d-inline-block" data-toggle= "popover" data-content= "Disabled popover">
                <button type= "button" class= "btn btn-solid btn-primary" style= "pointer-events: none;" disabled>Disabled button</button>
            </span>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">span</span> class= "<span class= "text-danger">d-inline-block</span>" data-toggle= "<span class= "text-danger">popover</span>" data-content= "<span class= "text-danger">Disabled popover</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-primary</span>" style= "<span class= "text-danger">pointer-events: none;</span>" <span class= "text-danger">disabled</span> >DIsabled button< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/span</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
</div>