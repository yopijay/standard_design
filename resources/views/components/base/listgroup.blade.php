<div class= "p-4 mt-4 mr-4 content" id= "listgroup-page">
    <h4>LIST GROUPS</h4>
    <p class= "mb-1">The most basic list group is an unordered list with list items and the proper classes. Build upon it with the options that follow, or with your own CSS as needed.</p>
    <hr>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <ul class= "list-group">
                <li class= "list-group-item">Item 1</li>
                <li class= "list-group-item">Item 2</li>
                <li class= "list-group-item">Item 3</li>
                <li class= "list-group-item">Item 4</li>
            </ul>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">ul</span> class= "<span class= "text-danger">list-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Item 1< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Item 2< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Item 3< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Item 4< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/ul</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">ACTIVE ITEMS</p>
    <p class= "mb-4">Add <span class= "text-danger">.active</span> to a <span class= "text-danger">.list-group-item</span> to indicate the current active selection.</p>
    <div class= "row mt-3 mb-5">        
        <div class= "col-md-6 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <ul class= "list-group">
                <li class= "list-group-item active">Item 1</li>
                <li class= "list-group-item">Item 2</li>
                <li class= "list-group-item">Item 3</li>
                <li class= "list-group-item">Item 4</li>
            </ul>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">ul</span> class= "<span class= "text-danger">list-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item active</span>" >Item 1< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Item 2< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Item 3< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Item 4< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/ul</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">LINKS AND BUTTONS</p>
    <p class= "mb-1">Use <span class= "text-danger">< a ></span>s or <span class= "text-danger">< button ></span>s to create actionable list group items with hover, disabled, and active states by adding <span class= "text-danger">.list-group-item-action</span>. We separate these pseudo-classes to ensure list groups made of non-interactive elements (like <span class= "text-danger">< li ></span>s or <span class= "text-danger">< div ></span>s) don’t provide a click or tap affordance.</p>
    <p class= "mb-4">Be sure to <b>not use the standard</b> <span class= "text-danger">.btn</span> <b>classes here.</b></p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <ul class= "list-group mb-5">
                <a class= "list-group-item list-group-hover">Item 1</a>
                <a class= "list-group-item list-group-hover">Item 2</a>
                <a class= "list-group-item list-group-hover">Item 3</a>
                <a class= "list-group-item list-group-hover">Item 4</a>
            </ul>
            <ul class= "list-group">
                <button class= "list-group-item list-group-hover">Item 1</button>
                <button class= "list-group-item list-group-hover">Item 2</button>
                <button class= "list-group-item list-group-hover">Item 3</button>
                <button class= "list-group-item list-group-hover">Item 4</button>
            </ul>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">ul</span> class= "<span class= "text-danger">list-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class= "<span class= "text-danger">list-group-item list-group-hover active</span>" >Item 1< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class= "<span class= "text-danger">list-group-item list-group-hover</span>" >Item 2< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class= "<span class= "text-danger">list-group-item list-group-hover</span>" >Item 3< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> class= "<span class= "text-danger">list-group-item list-group-hover</span>" >Item 4< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">ul</span> class= "<span class= "text-danger">list-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> class= "<span class= "text-danger">list-group-item list-group-hover active</span>" >Item 1< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> class= "<span class= "text-danger">list-group-item list-group-hover</span>" >Item 2< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> class= "<span class= "text-danger">list-group-item list-group-hover</span>" >Item 3< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> class= "<span class= "text-danger">list-group-item list-group-hover</span>" >Item 4< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/ul</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">FLUSH</p>
    <p class= "mb-4">Add <span class= "text-danger">.list-group-flush</span> to remove some borders and rounded corners to render list group items edge-to-edge in a parent container (e.g., cards).</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <ul class= "list-group list-group-flush">
                <li class= "list-group-item">Item 1</li>
                <li class= "list-group-item">Item 2</li>
                <li class= "list-group-item">Item 3</li>
                <li class= "list-group-item">Item 4</li>
            </ul>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">ul</span> class= "<span class= "text-danger">list-group list-group-flush</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Item 1< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Item 2< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Item 3< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Item 4< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/ul</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">HORIZONTAL</p>
    <p class= "mb-2">Add <span class= "text-danger">.list-group-horizontal</span> to change the layout of list group items from vertical to horizontal across all breakpoints. Alternatively, choose a responsive variant <span class= "text-danger">.list-group-horizontal-{sm|md|lg|xl}</span> to make a list group horizontal starting at that breakpoint’s <span class= "text-danger">min-width</span>. Currently <b>horizontal list groups cannot be combined with flush list groups.</b></p>
    <p class= "mb-1"><b>ProTip:</b> Want equal-width list group items when horizontal? Add <span class= "text-danger">.flex-fill</span> to each list group item.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <ul class= "list-group list-group-horizontal">
                <li class= "list-group-item">Item 1</li>
                <li class= "list-group-item">Item 2</li>
                <li class= "list-group-item">Item 3</li>
                <li class= "list-group-item">Item 4</li>
            </ul>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">ul</span> class= "<span class= "text-danger">list-group list-group-horizontal</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Item 1< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Item 2< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Item 3< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Item 4< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/ul</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">CONTEXTUAL CLASSES</p>
    <p class= "mb-4">Use contextual classes to style list items with a stateful background and color.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <ul class= "list-group">
                <li class= "list-group-item list-group-item-primary">Primary</li>
                <li class= "list-group-item list-group-item-secondary">Secondary</li>
                <li class= "list-group-item list-group-item-success">Success</li>
                <li class= "list-group-item list-group-item-warning">Warning</li>
                <li class= "list-group-item list-group-item-danger">Danger</li>
                <li class= "list-group-item list-group-item-info">Info</li>
                <li class= "list-group-item list-group-item-light">Light</li>
                <li class= "list-group-item list-group-item-dark">Dark</li>
            </ul>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">ul</span> class= "<span class= "text-danger">list-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item list-group-item-primary</span>" >Primary< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item list-group-item-secondary</span>" >Secondary< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item list-group-item-success</span>" >Success< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item list-group-item-warning</span>" >Warning< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item list-group-item-danger</span>" >Danger< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item list-group-item-info</span>" >Info< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item list-group-item-light</span>" >Light< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item list-group-item-dark</span>" >Dark< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/ul</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "mb-1">Contextual classes also work with <span class= "text-danger">.list-group-item-action</span>. Note the addition of the hover styles here not present in the previous example. Also supported is the <span class= "text-danger">.active</span> state; apply it to indicate an active selection on a contextual list group item.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <ul class= "list-group">
                <a class= "list-group-item list-group-hover list-group-item-primary">Primary</a>
                <a class= "list-group-item list-group-hover list-group-item-secondary">Secondary</a>
                <a class= "list-group-item list-group-hover list-group-item-success">Success</a>
                <a class= "list-group-item list-group-hover list-group-item-warning">Warning</a>
                <a class= "list-group-item list-group-hover list-group-item-danger">Danger</a>
                <a class= "list-group-item list-group-hover list-group-item-info">Info</a>
                <a class= "list-group-item list-group-hover list-group-item-light">Light</a>
                <a class= "list-group-item list-group-hover list-group-item-dark">Dark</a>
            </ul>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <Span class= "text-danger">ul</span> class= "<span class= "text-danger">list-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <Span class= "text-danger">a</span> class= "<span class= "text-danger">list-group-item list-group-item-primary</span>" >Primary< <Span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <Span class= "text-danger">a</span> class= "<span class= "text-danger">list-group-item list-group-item-secondary</span>" >Secondary< <Span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <Span class= "text-danger">a</span> class= "<span class= "text-danger">list-group-item list-group-item-success</span>" >Success< <Span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <Span class= "text-danger">a</span> class= "<span class= "text-danger">list-group-item list-group-item-warning</span>" >Warning< <Span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <Span class= "text-danger">a</span> class= "<span class= "text-danger">list-group-item list-group-item-danger</span>" >Danger< <Span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <Span class= "text-danger">a</span> class= "<span class= "text-danger">list-group-item list-group-item-info</span>" >Info< <Span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <Span class= "text-danger">a</span> class= "<span class= "text-danger">list-group-item list-group-item-light</span>" >Light< <Span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <Span class= "text-danger">a</span> class= "<span class= "text-danger">list-group-item list-group-item-dark</span>" >Dark< <Span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">< <Span class= "text-danger">/ul</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
</div>