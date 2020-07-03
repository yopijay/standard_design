<div class= "px-4 mt-5 content" id= "flex-page">
    <h4>FLEX</h4>
    <p class= "mb-1">Quickly manage the layout, alignment, and sizing of grid columns, navigation, components, and more with a full suite of responsive flexbox utilities. For more complex implementations, custom CSS may be necessary.</p>
    <hr>
    <p class= "mb-1 text-info h5">ENABLE FLEX BEHAVIORS</p>
    <p class= "mb-1">Apply <span class= "text-danger">display</span> utilities to create a flexbox container and transform <b>direct children elements</b> into flex items. Flex containers and items are able to be modified further with additional flex properties.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-flex p-2 agm-bg-secondary text-white mb-2">I`m a flexbox container!</div>
            <div class= "d-inline-flex p-2 agm-bg-secondary text-white">I`m an inline flexbox container!</div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex p-2 agm-bg-secondary text-white</span>" >I`m a flexbox container!< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-inline-flex p-2 agm-bg-secondary text-white</span>" >I`m an inline flexbox container!< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-flex-1" copy-data= '<div class= "d-flex p-2 agm-bg-secondary text-white mb-2">I`m a flexbox container!</div>'>COPY</button>
        </div>
    </div>
    <p class= "mb-1">Responsive variations also exist for <span class= "text-danger">.d-flex</span> and <span class= "text-danger">.d-infline-flex</span>.</p>
    <ul class= "mb-5">
        <li><span class= "text-danger">.d-flex</span></li>
        <li><span class= "text-danger">.d-inline-flex</span></li>
        <li><span class= "text-danger">.d-sm-flex</span></li>
        <li><span class= "text-danger">.d-sm-inline-flex</span></li>
        <li><span class= "text-danger">.d-md-flex</span></li>
        <li><span class= "text-danger">.d-md-inline-flex</span></li>
        <li><span class= "text-danger">.d-lg-flex</span></li>
        <li><span class= "text-danger">.d-lg-inline-flex</span></li>
        <li><span class= "text-danger">.d-xl-flex</span></li>
        <li><span class= "text-danger">.d-xl-inline-flex</span></li>
    </ul>
    <p class= "mb-1 text-info h5">DIRECTIONS</p>
    <p class= "mb-2">Set the direction of flex items in a flex container with direction utilities. In most cases you can omit the horizontal class here as the browser default is <span class= "text-danger">row</span>. However, you may encounter situations where you needed to explicitly set the value (like responsive layouts).</p>
    <p class= "mb-1">Use <span class= "text-danger">.flex-row</span> to set a horizontal direction (the browser default), or <span class= "text-danger">.flex-row-reverse</span> to start the horizontal direction from the opposite side.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-flex flex-row agm-bg-secondary mb-2">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item 1</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item 2</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item 3</div>
            </div>
            <div class= "d-flex flex-row-reverse agm-bg-secondary">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item 1</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item 2</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item 3</div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex flex-row agm-bg-secondary</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item 1< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item 2< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item 3< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex flex-row-reverse agm-bg-secondary</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item 1< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item 2< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item 3< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-flex-2" copy-data= '<div class= "d-flex flex-row agm-bg-secondary mb-2"><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item 1</div><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item 2</div><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item 3</div></div>'>COPY</button>
        </div>
    </div>
    <p class= "mb-1">Use <span class= "text-danger">.flex-column</span> to set a vertical direction, or <span class= "text-danger">.flex-column-reverse</span> to start the vertical direction from the opposite side.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-flex flex-column agm-bg-secondary mb-2">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item 1</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item 2</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item 3</div>
            </div>
            <div class= "d-flex flex-column-reverse agm-bg-secondary">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item 1</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item 2</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item 3</div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex flex-column agm-bg-secondary</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item 1< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item 2< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item 3< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex flex-column-reverse agm-bg-secondary</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item 1< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item 2< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item 3< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-flex-3" copy-data= '<div class= "d-flex flex-column agm-bg-secondary mb-2"><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item 1</div><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item 2</div><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item 3</div></div>'>COPY</button>
        </div>
    </div>
    <p class= "mb-1">Responsive variations also exist for <span class= "text-danger">flex-direction</span>.</p>
    <ul class= "mb-5">
        <li><span class= "text-danger">.flex-row</span></li>
        <li><span class= "text-danger">.flex-row-reverse</span></li>
        <li><span class= "text-danger">.flex-column</span></li>
        <li><span class= "text-danger">.flex-column-reverse</span></li>
        <li><span class= "text-danger">.flex-sm-row</span></li>
        <li><span class= "text-danger">.flex-sm-row-reverse</span></li>
        <li><span class= "text-danger">.flex-sm-column</span></li>
        <li><span class= "text-danger">.flex-sm-column-reverse</span></li>
        <li><span class= "text-danger">.flex-md-row</span></li>
        <li><span class= "text-danger">.flex-md-row-reverse</span></li>
        <li><span class= "text-danger">.flex-md-column</span></li>
        <li><span class= "text-danger">.flex-md-column-reverse</span></li>
        <li><span class= "text-danger">.flex-lg-row</span></li>
        <li><span class= "text-danger">.flex-lg-row-reverse</span></li>
        <li><span class= "text-danger">.flex-lg-column</span></li>
        <li><span class= "text-danger">.flex-lg-column-reverse</span></li>
        <li><span class= "text-danger">.flex-xl-row</span></li>
        <li><span class= "text-danger">.flex-xl-row-reverse</span></li>
        <li><span class= "text-danger">.flex-xl-column</span></li>
        <li><span class= "text-danger">.flex-xl-column-reverse</span></li>
    </ul>
    <p class= "mb-1 text-info h5">JUSTIFY CONTENT</p>
    <p class= "mb-1">Use <span class= "text-danger">justify-content</span> utilities on flexbox containers to change the alignment of flex items on the main axis (the x-axis to start, y-axis if <span class= "text-danger">flex-direction: column</span>). Choose from <span class= "text-danger">start</span> (browser default), <span class= "text-danger">end</span>, <span clas= "text-danger">center</span>, <span class= "text-danger">between</span>, or <span class= "text-danger">around</span>.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-flex justify-content-start agm-bg-secondary mb-2">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
            <div class= "d-flex justify-content-end agm-bg-secondary mb-2">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
            <div class= "d-flex justify-content-center agm-bg-secondary mb-2">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
            <div class= "d-flex justify-content-between agm-bg-secondary mb-2">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
            <div class= "d-flex justify-content-around agm-bg-secondary">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex justify-content-start</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex justify-content-end</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex justify-content-center</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex justify-content-between</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex justify-content-arround</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-flex-4" copy-data= '<div class= "d-flex justify-content-start agm-bg-secondary mb-2"><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div></div>'>COPY</button>
        </div>
    </div>
    <p class= "mb-1">Responsive variations also exist for <span class= "text-danger">justify-content</span>.</p>
    <ul class= "mb-5">
        <li><span class= "text-danger">.justify-content-start</span></li>
        <li><span class= "text-danger">.justify-content-end</span></li>
        <li><span class= "text-danger">.justify-content-center</span></li>
        <li><span class= "text-danger">.justify-content-between</span></li>
        <li><span class= "text-danger">.justify-content-around</span></li>
        <li><span class= "text-danger">.justify-content-sm-start</span></li>
        <li><span class= "text-danger">.justify-content-sm-end</span></li>
        <li><span class= "text-danger">.justify-content-sm-center</span></li>
        <li><span class= "text-danger">.justify-content-sm-between</span></li>
        <li><span class= "text-danger">.justify-content-sm-around</span></li>
        <li><span class= "text-danger">.justify-content-md-start</span></li>
        <li><span class= "text-danger">.justify-content-md-end</span></li>
        <li><span class= "text-danger">.justify-content-md-center</span></li>
        <li><span class= "text-danger">.justify-content-md-between</span></li>
        <li><span class= "text-danger">.justify-content-md-around</span></li>
        <li><span class= "text-danger">.justify-content-lg-start</span></li>
        <li><span class= "text-danger">.justify-content-lg-end</span></li>
        <li><span class= "text-danger">.justify-content-lg-center</span></li>
        <li><span class= "text-danger">.justify-content-lg-between</span></li>
        <li><span class= "text-danger">.justify-content-lg-around</span></li>
        <li><span class= "text-danger">.justify-content-xl-start</span></li>
        <li><span class= "text-danger">.justify-content-xl-end</span></li>
        <li><span class= "text-danger">.justify-content-xl-center</span></li>
        <li><span class= "text-danger">.justify-content-xl-between</span></li>
        <li><span class= "text-danger">.justify-content-xl-around</span></li>
    </ul>
    <p class= "mb-1 text-info h5">ALIGN ITEMS</p>
    <p class= "mb-1">Use <span class= "text-danger">align-items</span> utilites on flexbox containers to change the alignment of flex items on the cross axis (the y-axis to start, x-axis if <span class= "text-danger">flex-direction: column</span>). Choose from <span class= "text-danger">start</span>, <span class= "text-danger">end</span>, <span class= "text-danger">baseline</span>, or <span class= "text-danger">stretch</span> (browser default).</p>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-flex align-items-start agm-bg-secondary mb-2" style= "height: 100px;">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
            <div class= "d-flex align-items-end agm-bg-secondary mb-2" style= "height: 100px;">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
            <div class= "d-flex align-items-center agm-bg-secondary mb-2" style= "height: 100px;">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
            <div class= "d-flex align-items-baseline agm-bg-secondary mb-2" style= "height: 100px;">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
            <div class= "d-flex align-items-stretch agm-bg-secondary" style= "height: 100px;">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex align-items-start</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex align-items-end</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex align-items-center</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex align-items-between</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex align-items-arround</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-flex-5" copy-data= '<div class= "d-flex align-items-start agm-bg-secondary mb-2" style= "height: 100px;"><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div></div>'>COPY</button>
        </div>
    </div>
    <p class= "mb-1">Responsive variations also exist for <span class= "text-danger">align-items</span>.</p>
    <ul class= "mb-5">
        <li><span class= "text-danger">.align-items-start</span></li>
        <li><span class= "text-danger">.align-items-end</span></li>
        <li><span class= "text-danger">.align-items-center</span></li>
        <li><span class= "text-danger">.align-items-baseline</span></li>
        <li><span class= "text-danger">.align-items-stretch</span></li>
        <li><span class= "text-danger">.align-items-sm-start</span></li>
        <li><span class= "text-danger">.align-items-sm-end</span></li>
        <li><span class= "text-danger">.align-items-sm-center</span></li>
        <li><span class= "text-danger">.align-items-sm-baseline</span></li>
        <li><span class= "text-danger">.align-items-sm-stretch</span></li>
        <li><span class= "text-danger">.align-items-md-start</span></li>
        <li><span class= "text-danger">.align-items-md-end</span></li>
        <li><span class= "text-danger">.align-items-md-center</span></li>
        <li><span class= "text-danger">.align-items-md-baseline</span></li>
        <li><span class= "text-danger">.align-items-md-stretch</span></li>
        <li><span class= "text-danger">.align-items-lg-start</span></li>
        <li><span class= "text-danger">.align-items-lg-end</span></li>
        <li><span class= "text-danger">.align-items-lg-center</span></li>
        <li><span class= "text-danger">.align-items-lg-baseline</span></li>
        <li><span class= "text-danger">.align-items-lg-stretch</span></li>
        <li><span class= "text-danger">.align-items-xl-start</span></li>
        <li><span class= "text-danger">.align-items-xl-end</span></li>
        <li><span class= "text-danger">.align-items-xl-center</span></li>
        <li><span class= "text-danger">.align-items-xl-baseline</span></li>
        <li><span class= "text-danger">.align-items-xl-stretch</span></li>
    </ul>
    <p class= "mb-1 text-info h5">ALIGN SELF</p>
    <p class= "mb-1">Use <span class= "text-danger">align-self</span> utilities on flexbox items to individually change their alignment on the cross axis (the y-axis to start, x-axis if <span class= "text-danger">flex-direction: column</span>). Choose from the same options are <span class= "text-danger">align-items: start</span>, <span class= "text-danger">end</span>, <span class= "text-danger">center</span>, <span class= "text-danger">baseline</span>, or <span class= "text-danger">stretch</span> (browser default).</p>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-flex agm-bg-secondary mb-2" style= "height: 100px;">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "align-self-start p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
            <div class= "d-flex agm-bg-secondary mb-2" style= "height: 100px;">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "align-self-end p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
            <div class= "d-flex agm-bg-secondary mb-2" style= "height: 100px;">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "align-self-center p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
            <div class= "d-flex agm-bg-secondary mb-2" style= "height: 100px;">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "align-self-baseline p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
            <div class= "d-flex agm-bg-secondary" style= "height: 100px;">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "align-self-stretch p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">align-self-start</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">align-self-end</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">align-self-center</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">align-self-baseline</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">align-self-stretch</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-flex-6" copy-data= '<div class= "d-flex agm-bg-secondary mb-2" style= "height: 100px;"><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div><div class= "align-self-start p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div></div>'>COPY</button>
        </div>
    </div>
    <p class= "mb-1">Responsive variations also exist for <span class= "text-danger">align-self</span>.</p>
    <ul class= "mb-5">
        <li><span class= "text-danger">.align-self-start</span></li>
        <li><span class= "text-danger">.align-self-end</span></li>
        <li><span class= "text-danger">.align-self-center</span></li>
        <li><span class= "text-danger">.align-self-baseline</span></li>
        <li><span class= "text-danger">.align-self-stretch</span></li>
        <li><span class= "text-danger">.align-self-sm-start</span></li>
        <li><span class= "text-danger">.align-self-sm-end</span></li>
        <li><span class= "text-danger">.align-self-sm-center</span></li>
        <li><span class= "text-danger">.align-self-sm-baseline</span></li>
        <li><span class= "text-danger">.align-self-sm-stretch</span></li>
        <li><span class= "text-danger">.align-self-md-start</span></li>
        <li><span class= "text-danger">.align-self-md-end</span></li>
        <li><span class= "text-danger">.align-self-md-center</span></li>
        <li><span class= "text-danger">.align-self-md-baseline</span></li>
        <li><span class= "text-danger">.align-self-md-stretch</span></li>
        <li><span class= "text-danger">.align-self-lg-start</span></li>
        <li><span class= "text-danger">.align-self-lg-end</span></li>
        <li><span class= "text-danger">.align-self-lg-center</span></li>
        <li><span class= "text-danger">.align-self-lg-baseline</span></li>
        <li><span class= "text-danger">.align-self-lg-stretch</span></li>
        <li><span class= "text-danger">.align-self-xl-start</span></li>
        <li><span class= "text-danger">.align-self-xl-end</span></li>
        <li><span class= "text-danger">.align-self-xl-center</span></li>
        <li><span class= "text-danger">.align-self-xl-baseline</span></li>
        <li><span class= "text-danger">.align-self-xl-stretch</span></li>
    </ul>
    <p class= "mb-1 text-info h5">FILL</p>
    <p class= "mb-1">Use the <span class= "text-danger">.flex-fill</span> class on a series of sibling elements to force them into widths equal to their content (or equal widths if their content does not surpass their border-boxes) while taking up all available horizontal space.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-flex agm-bg-secondar">
                <div class= "p-2 flex-fill agm-bg-info agm-border agm-border-light text-white">Flex item with a lot of content</div>
                <div class= "p-2 flex-fill agm-bg-info agm-border agm-border-light text-white">Flex item</div>
                <div class= "p-2 flex-fill agm-bg-info agm-border agm-border-light text-white">Flex item</div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 flex-fill</span>" >Flex item with a lot of content< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 flex-fill</span>" >Flex item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 flex-fill</span>" >Flex item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-flex-7" copy-data= '<div class= "d-flex agm-bg-secondar"><div class= "p-2 flex-fill agm-bg-info agm-border agm-border-light text-white">Flex item with a lot of content</div><div class= "p-2 flex-fill agm-bg-info agm-border agm-border-light text-white">Flex item</div><div class= "p-2 flex-fill agm-bg-info agm-border agm-border-light text-white">Flex item</div></div>'>COPY</button>
        </div>
    </div>
    <p class= "mb-1">Responsive variation also exist for <span class= "text-danger">flex-fill</span>.</p>
    <ul class= "mb-5">
        <li><span class= "text-danger">.flex-fill</span></li>
        <li><span class= "text-danger">.flex-sm-fill</span></li>
        <li><span class= "text-danger">.flex-md-fill</span></li>
        <li><span class= "text-danger">.flex-lg-fill</span></li>
        <li><span class= "text-danger">.flex-xl-fill</span></li>
    </ul>
    <p class= "mb-1 text-info h5">GWORING AND SHRINK</p>
    <p class= "mb-1">Use <span class= "text-danger">.flex-grow-*</span> utilities to toggle a flex item`s ability to grow to fill available space. In the example, the <span class= "text-danger">.flex-grow-1</span> elements uses all available space it can, while allowing the remaining two flex items their necessary sapce.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-flex agm-bg-secondar">
                <div class= "p-2 flex-grow-1 agm-bg-info agm-border agm-border-light text-white">Flex item</div>
                <div class= "p-2 agm-bg-info agm-border agm-border-light text-white">Flex item</div>
                <div class= "p-2 agm-bg-info agm-border agm-border-light text-white">Third flex item</div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">flex-grow-1 p-2</span>" >Flex item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2</span>" >Flex item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2</span>" >Third flex item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-flex-8" copy-data= '<div class= "d-flex agm-bg-secondar"><div class= "p-2 flex-grow-1 agm-bg-info agm-border agm-border-light text-white">Flex item</div><div class= "p-2 agm-bg-info agm-border agm-border-light text-white">Flex item</div><div class= "p-2 agm-bg-info agm-border agm-border-light text-white">Third flex item</div></div>'>COPY</button>
        </div>
    </div>
    <p class= "mb-1">Use <span class= "text-danger">.flex-shrink-*</span> utilities to toggle a flex item`s ability to shrink if necessary. In the example, the second flex item with <span class= "text-danger">.flex-shrink-1</span> is forced to wrap its content to a new line, "shrinking" to allow more space for the previous flex item with <span class= "text-danger">.w-100</span>.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-flex agm-bg-secondar">
                <div class= "w-100 p-2 agm-bg-info agm-border agm-border-light text-white">Flex item</div>
                <div class= "flex-shrink-1 p-2 agm-bg-info agm-border agm-border-light text-white">Flex item</div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">w-100 p-2</span>" >Flex item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">flex-shrink-1 p-2</span>" >Flex item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-flex-9" copy-data= '<div class= "d-flex agm-bg-secondar"><div class= "w-100 p-2 agm-bg-info agm-border agm-border-light text-white">Flex item</div><div class= "flex-shrink-1 p-2 agm-bg-info agm-border agm-border-light text-white">Flex item</div></div>'>COPY</button>
        </div>
    </div>
    <p class= "mb-1">Responsive variations also exist for <span class= "text-danger">flex-grow</span> and <span class= "text-danger">flex-shrink</span>.</p>
    <ul class= "mb-5">
        <li><span class= "text-danger">.flex-{grow | shrink}-0</span></li>
        <li><span class= "text-danger">.flex-{grow | shrink}-1</span></li>
        <li><span class= "text-danger">.flex-sm-{grow | shrink}-0</span></li>
        <li><span class= "text-danger">.flex-sm-{grow | shrink}-1</span></li>
        <li><span class= "text-danger">.flex-md-{grow | shrink}-0</span></li>
        <li><span class= "text-danger">.flex-md-{grow | shrink}-1</span></li>
        <li><span class= "text-danger">.flex-lg-{grow | shrink}-0</span></li>
        <li><span class= "text-danger">.flex-lg-{grow | shrink}-1</span></li>
        <li><span class= "text-danger">.flex-xl-{grow | shrink}-0</span></li>
        <li><span class= "text-danger">.flex-xl-{grow | shrink}-1</span></li>
    </ul>
    <p class= "mb-1 text-info h5">AUTO MARGINS</p>
    <p class= "mb-2">Flexbox can do some pretty awesome things when you mix flex alignments with auto margins. Three examples of controlling flex items via auto margin: default (no auto margin), pushing two items to the right (<span class= "text-danger">.mr-auto</span>), and pushing two items to the left (<span class= "text-danger">.ml-auto</span>).</p>
    <p class= "mb-1"><b>Unfortunately, IE10 and IE11 do not properly support auto margins on flex items whose parent has a non-default <span class= "text-danger">justify-content</span> value.</b></p>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-flex agm-bg-secondary mb-2">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
            <div class= "d-flex agm-bg-secondary mb-2">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light mr-auto">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
            <div class= "d-flex agm-bg-secondary">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light ml-auto">Flex item</div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex agm-bg-secondary</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex agm-bg-secondary</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white mr-auto</span>" >Flext item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex agm-bg-secondary</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white ml-auto</span>" >Flext item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-flex-10" copy-data= '<div class= "d-flex agm-bg-secondary mb-2"><div class= "p-2 agm-bg-info text-white agm-border agm-border-light mr-auto">Flex item</div><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div></div>'>COPY</button>
        </div>
    </div>
    <p class= "mb-1 text-info h5">WITH ALIGN-ITEMS</p>
    <p class= "mb-1">Vertically move one flex item to the top or bottom of a container by mixing <span class= "text-danger">align-items</span>, <span class= "text-danger">flex-direction: column</span>, and <span class= "text-danger">margin-top: auto</span> or <span class= "text-danger">marign-bottom: auto</span>.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-flex agm-bg-secondary mb-2 align-items-start flex-column" style= "height: 150px;">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light mb-auto">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
            <div class= "d-flex agm-bg-secondary align-items-end flex-column" style= "height: 150px;">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light mt-auto">Flex item</div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex agm-bg-secondary align-items-start flex-column</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white mb-auto</span>" >Flext item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex agm-bg-secondary align-items-end flex-column</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white</span>" >Flext item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">p-2 agm-bg-info agm-border agm-border-light text-white mt-auto</span>" >Flext item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-flex-11" copy-data= '<div class= "d-flex agm-bg-secondary mb-2 align-items-start flex-column" style= "height: 150px;"><div class= "p-2 agm-bg-info text-white agm-border agm-border-light mb-auto">Flex item</div><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div></div>'>COPY</button>
        </div>
    </div>
    <p class= "mb-1 text-info h5">WRAP</p>
    <p class= "mb-1">Change how flex items wrap in a flex container. Choose from no wrapping at all (the browser default) with <span class= "text-danger">.flex-nowrap</span>, wrapping with <span class= "text-danger">.flex-wrap</span>, or reverse wrapping with <span class= "text-danger">.flex-wrap-reverse</span>.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-flex flex-nowrap agm-bg-secondary mb-2" style= "width: 200px;">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex flex-nowrap</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-flex-12" copy-data= '<div class= "d-flex flex-nowrap agm-bg-secondary mb-2" style= "width: 200px;"><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div></div>'>COPY</button>
        </div>
    </div>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-flex flex-wrap agm-bg-secondary mb-2">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex flex-wrap</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-flex-13" copy-data= '<div class= "d-flex flex-wrap agm-bg-secondary mb-2"><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div></div>'>COPY</button>
        </div>
    </div>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-flex flex-wrap-reverse agm-bg-secondary mb-2">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex flex-wrap-reverse</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-flex-14" copy-data= '<div class= "d-flex flex-wrap-reverse agm-bg-secondary mb-2"><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div></div>'>COPY</button>
        </div>
    </div>
    <p class= "mb-1">Responsive variations also exist for <span class= "text-danger">flex-wrap</span>.</p>
    <ul class= "mb-5">
        <li><span class= "text-danger">.flex-nowrap</span></li>
        <li><span class= "text-danger">.flex-wrap</span></li>
        <li><span class= "text-danger">.flex-wrap-reverse</span></li>
        <li><span class= "text-danger">.flex-sm-nowrap</span></li>
        <li><span class= "text-danger">.flex-sm-wrap</span></li>
        <li><span class= "text-danger">.flex-sm-wrap-reverse</span></li>
        <li><span class= "text-danger">.flex-md-nowrap</span></li>
        <li><span class= "text-danger">.flex-md-wrap</span></li>
        <li><span class= "text-danger">.flex-md-wrap-reverse</span></li>
        <li><span class= "text-danger">.flex-lg-nowrap</span></li>
        <li><span class= "text-danger">.flex-lg-wrap</span></li>
        <li><span class= "text-danger">.flex-lg-wrap-reverse</span></li>
        <li><span class= "text-danger">.flex-xl-nowrap</span></li>
        <li><span class= "text-danger">.flex-xl-wrap</span></li>
        <li><span class= "text-danger">.flex-xl-wrap-reverse</span></li>
    </ul>
    <p class= "mb-1 text-info h5">ORDER</p>
    <p class= "mb-1">Change the visual order of specific flex items with a handful of <span class= "text-danger">order</span> utilities. We only provide options for making an item first or last, as well as a reset to use the DOM order. As <span class= "text-danger">order</span> takes any integer value (e.g., 5), add custom CSS for any additional values needed.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-flex flex-nowrap agm-bg-secondary mb-2">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light order-3">First flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light order-2">Second flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light order-1">Third flex item</div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex flex-nowrap</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">order-3 p-2</span>" >First flex item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">order-2 p-2</span>" >Second flex item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">order-1 p-2</span>" >Third flex item< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-flex-15" copy-data= '<div class= "d-flex flex-nowrap agm-bg-secondary mb-2"><div class= "p-2 agm-bg-info text-white agm-border agm-border-light order-3">First flex item</div><div class= "p-2 agm-bg-info text-white agm-border agm-border-light order-2">Second flex item</div><div class= "p-2 agm-bg-info text-white agm-border agm-border-light order-1">Third flex item</div></div>'>COPY</button>
        </div>
    </div>
    <p class= "mb-1">Responsive variations also exist for <span class= "text-danger">order</span>.</p>
    <ul class= "mb-5">
        <li><span class= "text-danger">.order-0</span></li>
        <li><span class= "text-danger">.order-1</span></li>
        <li><span class= "text-danger">.order-2</span></li>
        <li><span class= "text-danger">.order-3</span></li>
        <li><span class= "text-danger">.order-4</span></li>
        <li><span class= "text-danger">.order-5</span></li>
        <li><span class= "text-danger">.order-6</span></li>
        <li><span class= "text-danger">.order-7</span></li>
        <li><span class= "text-danger">.order-8</span></li>
        <li><span class= "text-danger">.order-9</span></li>
        <li><span class= "text-danger">.order-10</span></li>
        <li><span class= "text-danger">.order-11</span></li>
        <li><span class= "text-danger">.order-12</span></li>
        <li><span class= "text-danger">.order-sm-0</span></li>
        <li><span class= "text-danger">.order-sm-1</span></li>
        <li><span class= "text-danger">.order-sm-2</span></li>
        <li><span class= "text-danger">.order-sm-3</span></li>
        <li><span class= "text-danger">.order-sm-4</span></li>
        <li><span class= "text-danger">.order-sm-5</span></li>
        <li><span class= "text-danger">.order-sm-6</span></li>
        <li><span class= "text-danger">.order-sm-7</span></li>
        <li><span class= "text-danger">.order-sm-8</span></li>
        <li><span class= "text-danger">.order-sm-9</span></li>
        <li><span class= "text-danger">.order-sm-10</span></li>
        <li><span class= "text-danger">.order-sm-11</span></li>
        <li><span class= "text-danger">.order-sm-12</span></li>
        <li><span class= "text-danger">.order-md-0</span></li>
        <li><span class= "text-danger">.order-md-1</span></li>
        <li><span class= "text-danger">.order-md-2</span></li>
        <li><span class= "text-danger">.order-md-3</span></li>
        <li><span class= "text-danger">.order-md-4</span></li>
        <li><span class= "text-danger">.order-md-5</span></li>
        <li><span class= "text-danger">.order-md-6</span></li>
        <li><span class= "text-danger">.order-md-7</span></li>
        <li><span class= "text-danger">.order-md-8</span></li>
        <li><span class= "text-danger">.order-md-9</span></li>
        <li><span class= "text-danger">.order-md-10</span></li>
        <li><span class= "text-danger">.order-md-11</span></li>
        <li><span class= "text-danger">.order-md-12</span></li>
        <li><span class= "text-danger">.order-lg-0</span></li>
        <li><span class= "text-danger">.order-lg-1</span></li>
        <li><span class= "text-danger">.order-lg-2</span></li>
        <li><span class= "text-danger">.order-lg-3</span></li>
        <li><span class= "text-danger">.order-lg-4</span></li>
        <li><span class= "text-danger">.order-lg-5</span></li>
        <li><span class= "text-danger">.order-lg-6</span></li>
        <li><span class= "text-danger">.order-lg-7</span></li>
        <li><span class= "text-danger">.order-lg-8</span></li>
        <li><span class= "text-danger">.order-lg-9</span></li>
        <li><span class= "text-danger">.order-lg-10</span></li>
        <li><span class= "text-danger">.order-lg-11</span></li>
        <li><span class= "text-danger">.order-lg-12</span></li>
        <li><span class= "text-danger">.order-xl-0</span></li>
        <li><span class= "text-danger">.order-xl-1</span></li>
        <li><span class= "text-danger">.order-xl-2</span></li>
        <li><span class= "text-danger">.order-xl-3</span></li>
        <li><span class= "text-danger">.order-xl-4</span></li>
        <li><span class= "text-danger">.order-xl-5</span></li>
        <li><span class= "text-danger">.order-xl-6</span></li>
        <li><span class= "text-danger">.order-xl-7</span></li>
        <li><span class= "text-danger">.order-xl-8</span></li>
        <li><span class= "text-danger">.order-xl-9</span></li>
        <li><span class= "text-danger">.order-xl-10</span></li>
        <li><span class= "text-danger">.order-xl-11</span></li>
        <li><span class= "text-danger">.order-xl-12</span></li>
    </ul>
    <p class= "mb-1 text-info h5">ALIGN CONTENT</p>
    <p class= "mb-1">Use <span class= "text-danger">align-content</span> utilities on flexbox containers to align flex items together on the cross axis. Choose from <span class= "text-danger">start</span> (browser default), <span class= "text-danger">end</span>, <span class= "text-danger">center</span>, <span class= "text-danger">between</span>, <span class= "text-danger">around</span>, or <span class= "text-danger">stretch</span>. To demonstrate these utilities, we’ve enforced <span class= "text-danger">flex-wrap: wrap</span> and increased the number of flex items.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-flex flex-wrap align-content-start agm-bg-secondary mb-2" style= "height: 200px;">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex flex-wrap align-content-start</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-flex-16" copy-data= '<div class= "d-flex flex-wrap align-content-start agm-bg-secondary mb-2" style= "height: 200px;"><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div></div>'>COPY</button>
        </div>
    </div>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-flex flex-wrap align-content-end agm-bg-secondary mb-2" style= "height: 200px;">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex flex-wrap align-content-end</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-flex-17" copy-data= '<div class= "d-flex flex-wrap align-content-end agm-bg-secondary mb-2" style= "height: 200px;"><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div></div>'>COPY</button>
        </div>
    </div>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-flex flex-wrap align-content-center agm-bg-secondary mb-2" style= "height: 200px;">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex flex-wrap align-content-center</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-flex-18" copy-data= '<div class= "d-flex flex-wrap align-content-center agm-bg-secondary mb-2" style= "height: 200px;"><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div></div>'>COPY</button>
        </div>
    </div>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-flex flex-wrap align-content-between agm-bg-secondary mb-2" style= "height: 200px;">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex flex-wrap align-content-between</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-flex-19" copy-data= '<div class= "d-flex flex-wrap align-content-between agm-bg-secondary mb-2" style= "height: 200px;"><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div></div>'>COPY</button>
        </div>
    </div>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-flex flex-wrap align-content-around agm-bg-secondary mb-2" style= "height: 200px;">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex flex-wrap align-content-around</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-flex-20" copy-data= '<div class= "d-flex flex-wrap align-content-around agm-bg-secondary mb-2" style= "height: 200px;"><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div></div>'>COPY</button>
        </div>
    </div>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-flex flex-wrap align-content-stretch agm-bg-secondary mb-2" style= "height: 200px;">
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
                <div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-flex flex-wrap align-content-stretch</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-flex-21" copy-data= '<div class= "d-flex flex-wrap align-content-stretch agm-bg-secondary mb-2" style= "height: 200px;"><div class= "p-2 agm-bg-info text-white agm-border agm-border-light">Flex item</div></div>'>COPY</button>
        </div>
    </div>
    <ul class= "mb-5">
        <li><span class= "text-danger">.align-content-start</span></li>
        <li><span class= "text-danger">.align-content-end</span></li>
        <li><span class= "text-danger">.align-content-center</span></li>
        <li><span class= "text-danger">.align-content-between</span></li>
        <li><span class= "text-danger">.align-content-around</span></li>
        <li><span class= "text-danger">.align-content-stretch</span></li>
        <li><span class= "text-danger">.align-content-sm-start</span></li>
        <li><span class= "text-danger">.align-content-sm-end</span></li>
        <li><span class= "text-danger">.align-content-sm-center</span></li>
        <li><span class= "text-danger">.align-content-sm-between</span></li>
        <li><span class= "text-danger">.align-content-sm-around</span></li>
        <li><span class= "text-danger">.align-content-sm-stretch</span></li>
        <li><span class= "text-danger">.align-content-md-start</span></li>
        <li><span class= "text-danger">.align-content-md-end</span></li>
        <li><span class= "text-danger">.align-content-md-center</span></li>
        <li><span class= "text-danger">.align-content-md-between</span></li>
        <li><span class= "text-danger">.align-content-md-around</span></li>
        <li><span class= "text-danger">.align-content-md-stretch</span></li>
        <li><span class= "text-danger">.align-content-lg-start</span></li>
        <li><span class= "text-danger">.align-content-lg-end</span></li>
        <li><span class= "text-danger">.align-content-lg-center</span></li>
        <li><span class= "text-danger">.align-content-lg-between</span></li>
        <li><span class= "text-danger">.align-content-lg-around</span></li>
        <li><span class= "text-danger">.align-content-lg-stretch</span></li>
        <li><span class= "text-danger">.align-content-xl-start</span></li>
        <li><span class= "text-danger">.align-content-xl-end</span></li>
        <li><span class= "text-danger">.align-content-xl-center</span></li>
        <li><span class= "text-danger">.align-content-xl-between</span></li>
        <li><span class= "text-danger">.align-content-xl-around</span></li>
        <li><span class= "text-danger">.align-content-xl-stretch</span></li>
    </ul>
</div>