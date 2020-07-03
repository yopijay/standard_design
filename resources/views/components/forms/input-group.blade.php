<div class= "px-3 mt-5 content" id= "input-group-page">
    <h4>INPUT GROUP</h4>
    <p class= "mb-1">Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs, custom selects, and custom file inputs.</p>
    <hr>
    <p class= "mb-1">Place one add-on or button on either side of an input. You may also place one on both sides of an input. Remember to place < <span class= "text-danger">label</span> >s outside the input group.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "input-group mb-2">
                <div class= "input-group-prepend">
                    <span class= "input-group-text" id= "basic-addon1">@</span>
                </div>
                <input type= "text" class= "form-control" aria-label= "Username" aria-describedby= "basic-addon1">
            </div>
            <div class= "input-group mb-2">
                <input type= "text" class= "form-control" aria-label= "Username" aria-describedby= "basic-addon2">
                <div class= "input-group-append">
                    <span class= "input-group-text" id= "basic-addon2">@</span>
                </div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group-prepend</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">span</span> class= "<span class= "text-danger">input-group-text</span>" id= "<span class= "text-danger">...</span>" >@< <span class= "text-danger">/span</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">form-control</span>" ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">form-control</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group-append</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">span</span> class= "<span class= "text-danger">input-group-text</span>" id= "<span class= "text-danger">...</span>" >@< <span class= "text-danger">/span</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-input-group-1" copy-data= '<div class= "input-group mb-2"><div class= "input-group-prepend"><span class= "input-group-text" id= "basic-addon1">@</span></div><input type= "text" class= "form-control" aria-label= "Username" aria-describedby= "basic-addon1"></div>'>COPY</button>
        </div>
    </div>
    <p class= "text-info mb-1 h5">WRAPPING</p>
    <p class= "mb-1">Input groups wrap by default via <span class= "text-danger">flex-wrap: wrap</span> in order to accommodate custom form field validation within an input group. You may disable this with <span class= "text-danger">.flex-nowrap</span>.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "input-group flex-nowrap mb-2">
                <div class= "input-group-prepend">
                    <span class= "input-group-text" id= "basic-addon1">@</span>
                </div>
                <input type= "text" class= "form-control" aria-label= "Username" aria-describedby= "basic-addon1">
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group flex-nowrap</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group-prepend</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">span</span> class= "<span class= "text-danger">input-group-text</span>" id= "<span class= "text-danger">...</span>" >@< <span class= "text-danger">/span</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">form-control</span>" ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-input-group-2" copy-data= '<div class= "input-group flex-nowrap mb-2"><div class= "input-group-prepend"><span class= "input-group-text" id= "basic-addon1">@</span></div><input type= "text" class= "form-control" aria-label= "Username" aria-describedby= "basic-addon1"></div>'>COPY</button>
        </div>
    </div>
    <p class= "text-info mb-1 h5">SIZING</p>
    <p class= "mb-3">Add the relative form sizing classes to the <span class= "text-danger">.input-group</span> itself and contents within will automatically resize—no need for repeating the form control size classes on each element.</p>
    <p class= "mb-1"><b>Sizing on the individual input group elements isn’t supported.</b></p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "input-group input-group-sm mb-2">
                <div class= "input-group-prepend">
                    <span class= "input-group-text" id= "basic-addon1">Small</span>
                </div>
                <input type= "text" class= "form-control" aria-label= "Username" aria-describedby= "basic-addon1">
            </div>
            <div class= "input-group mb-2">
                <div class= "input-group-prepend">
                    <span class= "input-group-text" id= "basic-addon1">Default</span>
                </div>
                <input type= "text" class= "form-control" aria-label= "Username" aria-describedby= "basic-addon1">
            </div>
            <div class= "input-group input-group-lg mb-2">
                <div class= "input-group-prepend">
                    <span class= "input-group-text" id= "basic-addon1">Large</span>
                </div>
                <input type= "text" class= "form-control" aria-label= "Username" aria-describedby= "basic-addon1">
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group input-group-sm</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group-prepend</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">span</span> class= "<span class= "text-danger">input-group-text</span>" id= "<span class= "text-danger">...</span>" >Small< <span class= "text-danger">/span</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">form-control</span>" ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group-prepend</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">span</span> class= "<span class= "text-danger">input-group-text</span>" id= "<span class= "text-danger">...</span>" >Default< <span class= "text-danger">/span</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">form-control</span>" ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group input-group-lg</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group-prepend</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">span</span> class= "<span class= "text-danger">input-group-text</span>" id= "<span class= "text-danger">...</span>" >Large< <span class= "text-danger">/span</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">form-control</span>" ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-input-group-3" copy-data= '<div class= "input-group input-group-sm mb-2"><div class= "input-group-prepend"><span class= "input-group-text" id= "basic-addon1">Small</span></div><input type= "text" class= "form-control" aria-label= "Username" aria-describedby= "basic-addon1"></div>'>COPY</button>
        </div>
    </div>
    <p class= "text-info mb-1 h5">CHECKBOX AND RADIOS</p>
    <p class= "mb-1">Place any checkbox or radio option within an input group’s addon instead of text.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "input-group mb-2">
                <div class= "input-group-prepend">
                    <div class= "input-group-text">
                        <div class= "form-checkbox checkbox-default">
                            <input type= "checkbox" id= "checkbox-prepend">
                            <label for= "checkbox-prepend">
                                <i class= "fas fa-check align-middle"></i>
                            </label>
                        </div>
                    </div>
                </div>
                <input type= "text" class= "form-control">
            </div>
            <div class= "input-group mb-2">
                <div class= "input-group-prepend">
                    <div class= "input-group-text">
                        <div class= "form-radio">
                            <input type= "radio" id= "radio-default">
                            <span></span>
                        </div>
                    </div>
                </div>
                <input type= "text" class= "form-control">
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group-prepend</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group-text</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-checkbox checkbox-default</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">checkbox</span>" id= "<span class= "text-danger">...</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">...</span>" >< <span class= "text-danger">i</span> class= "<span class= "text-danger">fas fa-check align-middle</span>" >< <span class= "text-danger">/i</span> >< <span class= "text-danger">/labe</span>l ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">form-contro</span>l" ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group-prepend</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group-text</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-radio</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">radio</span>" id= "<span class= "text-danger">radio-prepend</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">span</span> >< <span class= "text-danger">/span</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">form-control</span>" ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-input-group-4" copy-data= '<div class= "input-group mb-2"><div class= "input-group-prepend"><div class= "input-group-text"><div class= "form-checkbox checkbox-default"><input type= "checkbox" id= "checkbox-prepend"><label for= "checkbox-prepend"><i class= "fas fa-check align-middle"></i></label></div></div></div><input type= "text" class= "form-control"></div>'>COPY</button>
        </div>
    </div>
    <p class= "text-info mb-1 h5">MULTIPLE INPUTS</p>
    <p class= "mb-1">While multiple < <span class= "text-danger">input</span> >s are supported visually, validation styles are only available for input groups with a single < <span class= "text-danger">input</span> >.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "input-group mb-2">
                <div class= "input-group-prepend">
                    <span class= "input-group-text" id= "basic-addon1">@</span>
                </div>
                <input type= "text" class= "form-control" aria-label= "Username" aria-describedby= "basic-addon1">
                <input type= "text" class= "form-control" aria-label= "Username" aria-describedby= "basic-addon1">
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group-prepend</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">span</span> class= "<span class= "text-danger">input-group-text</span>" id= "<span class= "text-danger">...</span>" >@< <span class= "text-danger">/span</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">form-control</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">form-control</span>" ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-input-group-5" copy-data= '<div class= "input-group mb-2"><div class= "input-group-prepend"><span class= "input-group-text" id= "basic-addon1">@</span></div><input type= "text" class= "form-control" aria-label= "Username" aria-describedby= "basic-addon1"><input type= "text" class= "form-control" aria-label= "Username" aria-describedby= "basic-addon1"></div>'>COPY</button>
        </div>
    </div>
    <p class= "text-info mb-1 h5">MULTIPLE ADDONS</p>
    <p class= "mb-1">Multiple add-ons are supported and can be mixed with checkbox and radio input versions.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "input-group mb-2">
                <div class= "input-group-prepend">
                    <span class= "input-group-text" id= "basic-addon1">@</span>
                    <span class= "input-group-text" id= "basic-addon1">@</span>
                </div>
                <input type= "text" class= "form-control" aria-label= "Username" aria-describedby= "basic-addon1">
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group-prepend</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">span</span> class= "<span class= "text-danger">input-group-text</span>" id= "<span class= "text-danger">...</span>" >@< <span class= "text-danger">/span</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">span</span> class= "<span class= "text-danger">input-group-text</span>" id= "<span class= "text-danger">...</span>" >@< <span class= "text-danger">/span</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">form-control</span>" ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-input-group-6" copy-data= '<div class= "input-group mb-2"><div class= "input-group-prepend"><span class= "input-group-text" id= "basic-addon1">@</span><span class= "input-group-text" id= "basic-addon1">@</span></div><input type= "text" class= "form-control" aria-label= "Username" aria-describedby= "basic-addon1"></div>'>COPY</button>
        </div>
    </div>
    <p class= "text-info mb-1 h5">BUTTON ADDONS</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "input-group mb-2">
                <div class= "input-group-prepend">
                    <button type= "button" class= "btn btn-solid btn-secondary">Button</button>
                </div>
                <input type= "text" class= "form-control" aria-label= "Username" aria-describedby= "basic-addon1">
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">input-group-prepend</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-secondary</span>" >Button< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">form-control</span>" ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-input-group-7" copy-data= '<div class= "input-group mb-2"><div class= "input-group-prepend"><button type= "button" class= "btn btn-solid btn-secondary">Button</button></div><input type= "text" class= "form-control" aria-label= "Username" aria-describedby= "basic-addon1"></div>'>COPY</button>
        </div>
    </div>
</div>