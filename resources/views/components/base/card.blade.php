<div class= "px-3 mt-5 content" id= "card-page">
    <h4>CARDS</h4>
    <p class= "mb-1">AGM cards component provide a flexible and extensible container for displaying content. AGM cards are delivered with a bunch of variants and options.</p>
    <hr>
    <p class= "mb-3">Cards are built with as little markup and styles as possible, but still manage to deliver a ton of control and customization. Built with flexbox, they offer easy alignment and mix well with other Bootstrap components. They have no <span class= "text-danger">margin</span> by default, so use <a href= "#">spacing utilities</a> as needed.</p>
    <p class= "mb-1">Below is an example of a basic card with mixed content and a fixed width. Cards have no fixed width to start, so they’ll naturally fill the full width of its parent element. This is easily customized with our various <a href= "#">sizing options</a>.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class="card">
                <img src="{{ asset('img/dog.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-solid btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "text-info mb-3 h5">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">img</span> src= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">card-img-top</span>" alt= "<span class= "text-danger">...</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >Some quick example text to build on the card title and make up the bulk of the card's content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> href= "<span class= "text-danger">#</span>" class= "<span class= "text-danger">btn btn-solid btn-primary</span>" >Go somewhere< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">CONTENT TYPES</p>
    <p class= "mb-4">Cards support a wide variety of content, including images, text, list groups, links, and more. Below are examples of what’s supported.</p>
    <p class= "text-info mb-1 h5">BODY</p>
    <p class= "mb-1">The building block of a card is the <span class= "text-danger">.card-body</span>. Use it whenever you need a padded section within a card.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "card">
                <div class= "card-body">
                    This is some text within a card body.
                </div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "text-info mb-3 h5">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is some text within a card body.</p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "text-warning" id= "note"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">TITLES, TEXT AND LINKS</p>
    <p class= "mb-3">Card titles are used by adding <span class= "text-danger">.card-title</span> to a < <span class= "text-danger">h*</span> > tag. In the same way, links are added and placed next to each other by adding <span class= "text-danger">.card-link</span> to an < <span class= "text-danger">a</span> > tag.</p>
    <p class= "mb-1">Subtitles are used by adding a <span class= "text-danger">.card-subtitle</span> to a < <span class= "text-danger">h*</span> > tag. If the <span class= "text-danger">.card-title</span> and the <span class= "text-danger">.card-subtitle</span> items are placed in a <span class= "text-danger">.card-body</span> item, the card title and subtitle are aligned nicely.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "card">
                <div class= "card-body">
                    <h5 class= "card-title">Card title</h5>
                    <p class= "card-subtitle mb-2 text-muted">Card subtitle</p>
                    <p class= "card-text">Some quick example text to build on the card title and make up the bulk of the card`s content.</p>
                    <a href= "#" class= "card-link">Card link</a>
                    <a href= "#" class= "card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "text-info mb-3 h5">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>"" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-subtitle mb-2 text-muted</span>" >Card Subtitle< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >Some quick example text to build on the card title and make up the bulk of the card`s content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> href= "<span class= "text-danger">#</span>" class= "<span class= "text-danger">card-link</span>" >Card link< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> href= "<span class= "text-danger">#</span>" class= "<span class= "text-danger">card-link</span>" >Another link< <span class= "text-danger">/a</span> ></p>
            <div class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></div>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "text-warning" id= "note"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">IMAGES</p>
    <p class= "mb-1"><span class= "text-danger">.card-img-top</span> places an image to the top of the card. With <span class= "text-danger">.card-text</span>, text can be added to the card. Text within <span class= "text-danger">.card-text</span> can also be styled with the standard HTML tags.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class="card">
                <img src="{{ asset('img/dog.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "text-info mb-3 h5">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class="<span class= "text-danger">card</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">img</span> src="<span class= "text-danger">...</span>" class="<span class= "text-danger">card-img-top</span>" alt="<span class= "text-danger">...</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class="<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class="<span class= "text-danger">card-text</span>">Some quick example text to build on the card title and make up the bulk of the card's content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "text-warning" id= "note"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">LIST GROUPS</p>
    <p class= "mb-1">Create lists of content in a card with a flush list group.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class="card mb-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
            <div class="card">
                <div class= "card-header">Featured</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "text-info mb-3 h5">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> class= "<span class= "text-danger">list-group list-group-flush</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Cras justo odio< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Dapibus ac facilisis in< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Vestibulum at eros< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-4">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-header</span>" >Featured< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> class= "<span class= "text-danger">list-group list-group-flush</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Cras justo odio< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Dapibus ac facilisis in< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Vestibulum at eros< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "text-warning" id= "note"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">KITCHEN SINK</p>
    <p class= "mb-1">Mix and match multiple content types to create the card you need, or throw everything in there. Shown below are image styles, blocks, text styles, and a list group—all wrapped in a fixed-width card.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "card">
                <img src= "{{ asset('img/dog.jpg') }}" class= "card-img-top" alt= "...">
                <div class= "card-body">
                    <h5 class= "card-title">Card title</h5>
                    <p class= "card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class= "list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class= "card-body">
                    <a href= '#' class= "card-link">Card link</a>
                    <a href= '#' class= "card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "text-info mb-3 h5">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">img</span> src= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">card-img-top</span>" alt= "<span class= "text-danger">...</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >Some quick example text to build on the card title and make up the bulk of the card's content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> class= "<span class= "text-danger">list-group list-group-flush</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Cras justo odio< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Dapibus ac facilisis in< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">list-group-item</span>" >Vestibulum at eros< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> href= "<span class= "text-danger">#</span>" class= "<span class= "text-danger">card-link</span>">Card link< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> href= "<span class= "text-danger">#</span>" class= "<span class= "text-danger">card-link</span>">Another link< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "text-warning" id= "note"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">HEADER AND FOOTER</p>
    <p class= "mb-1">Add an optional header and/or footer within a card.</p>
    <div class= "row mt-3 mb-4">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class="card">
                <div class="card-header">Featured</div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-solid btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "text-info mb-3 h5">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class="<span class= "text-danger">card</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class=" <span class= "text-danger">card-header</span>" >Featured< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class=" <span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class=" <span class= "text-danger">card-title</span>" >Special title treatment< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class=" <span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> href="<span class= "text-danger">#</span>" class=" <span class= "text-danger">btn btn-solid btn-primary</span>">Go somewhere< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "text-warning" id= "note"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "mb-1">Card headers can be styled by adding <span class= "text-danger">.card-header</span> to < <span class= "text-danger">h*</span> > elements.</p>
    <div class= "row mt-3 mb-4">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class="card">
                <h5 class="card-header">Featured</h5>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-solid btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "text-info mb-3 h5">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class="<span class= "text-danger">card</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class=" <span class= "text-danger">card-header</span>" >Featured< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class=" <span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class=" <span class= "text-danger">card-title</span>" >Special title treatment< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class=" <span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> href="<span class= "text-danger">#</span>" class=" <span class= "text-danger">btn btn-solid btn-primary</span>">Go somewhere< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "text-warning" id= "note"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <div class= "row mt-3 mb-4">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class="card">
                <div class="card-header">Quote</div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "text-info mb-3 h5">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class="<span class= "text-danger">card</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class=" <span class= "text-danger">card-header</span>" >Quote< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class=" <span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">blockquote</span> class= "<span class= "text-danger">blockquote</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">footer</span> class= "<span class= "text-danger">blockquote-footer</span>" >Someone famous in < <span class= "text-danger">cite</span> title= "<span class= "text-danger">Source Title</span>" >Source Title< <span class= "text-danger">/cite</span> >< <span class= "text-danger">/footer</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/blockquote</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "text-warning" id= "note"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class="card text-center">
                <div class="card-header">Featured</div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-solid btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer text-muted">2 days ago</div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "text-info mb-3 h5">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card text-center</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-header</span>" >Featured< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>">Special title treatment< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> href= "<span class= "text-danger">#</span>" class= "<span class= "text-danger">btn btn-solid btn-primary</span>" >Go somewhere< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-footer text-muted</span>" >2 days ago< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "text-warning" id= "note"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">SIZING</p>
    <p class= "mb-3">Cards assume no specific <span class= "text-danger">width</span> to start, so they’ll be 100% wide unless otherwise stated. You can change this as needed with custom CSS, grid classes, grid Sass mixins, or utilities.</p>
    <p class= "text-info mb-1 h5">USING GRID MARKUP</p>
    <p class= "mb-1">Using the grid, wrap cards in columns and rows as needed.</p>
    <div class= "row my-3">
        <div class= "col-lg-12 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "row">
                <div class= "col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-solid btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class= "col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-solid btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class= "col-lg-12 py-3 col-12">
            <p class= "text-info mb-3 h5">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">row</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">col-md-6</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Special title treatment< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> href= "<span class= "text-danger">#</span>" class= "<span class= "text-danger">btn btn-solid btn-primary</span>" >Go somewhere< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">col-md-6</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Special title treatment< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> href= "<span class= "text-danger">#</span>" class= "<span class= "text-danger">btn btn-solid btn-primary</span>" >Go somewhere< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "text-warning" id= "note"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">USING UTILITIES</p>
    <p class= "mb-1">Use our handful of <a href= "#">available sizing utilities</a> to quickly set a card’s width.</p>
    <div class= "row my-3">
        <div class= "col-lg-12 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "card w-75 mb-3">
                <div class= "card-body">
                    <h5 class= "card-title">Card title</h5>
                    <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href= "#" class= "btn btn-solid btn-primary">Button</a>
                </div>
            </div>
            <div class= "card w-50">
                <div class= "card-body">
                    <h5 class= "card-title">Card title</h5>
                    <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href= "#" class= "btn btn-solid btn-primary">Button</a>
                </div>
            </div>
        </div>
        <div class= "col-lg-12 py-3 col-12">
            <p class= "text-info mb-3 h5">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card w-75</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> href= "<span class= "text-danger">#</span>" class= "<span class= "text-danger">btn btn-solid btn-primary</span>" >Button< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card w-50</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">a</span> href= "<span class= "text-danger">#</span>" class= "<span class= "text-danger">btn btn-solid btn-primary</span>" >Button< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "text-warning" id= "note"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">TEXT ALIGNMENT</p>
    <p class= "mb-1">You can quickly change the text alignment of any card—in its entirety or specific parts—with our <a href= "#">text align classes</a>.</p>
    <div class= "row my-3">
        <div class= "col-lg-12 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "row">
                <div class= "col-md-4">
                    <div class= "card">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href= "#" class= "btn btn-solid btn-primary">Button</a>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card text-center">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href= "#" class= "btn btn-solid btn-primary">Button</a>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card text-right">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href= "#" class= "btn btn-solid btn-primary">Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class= "col-lg-12 py-3 col-12">
            <p class= "text-info mb-3 h5">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< a href= "<span class= "text-danger">#</span>" class= "<span class= "text-danger">btn btn-solid btn-primary</span>" >Button< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card text-center</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< a href= "<span class= "text-danger">#</span>" class= "<span class= "text-danger">btn btn-solid btn-primary</span>" >Button< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card text-right</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< a href= "<span class= "text-danger">#</span>" class= "<span class= "text-danger">btn btn-solid btn-primary</span>" >Button< <span class= "text-danger">/a</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "text-warning" id= "note"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">IMAGES</p>
    <p class= "mb-3">Cards include a few options for working with images. Choose from appending “image caps” at either end of a card, overlaying images with card content, or simply embedding the image in a card.</p>
    <p class= "text-info mb-1 h5">IMAGE CAPS</p>
    <p class= "mb-1">Similar to headers and footers, cards can include top and bottom “image caps”—images at the top or bottom of a card.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview</p>
            <div class= "card mb-3">
                <img src= "{{ asset('img/dog.jpg') }}" class= "card-img-top" alt= "...">
                <div class= "card-body">
                    <h5 class= "card-title">Card title</h5>
                    <p class= "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class= "card-text"><small class= "text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class= "card">
                <div class= "card-body">
                    <h5 class= "card-title">Card title</h5>
                    <p class= "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class= "card-text"><small class= "text-muted">Last updated 3 mins ago</small></p>
                </div>
                <img src= "{{ asset('img/dog.jpg') }}" class= "card-img-top" alt= "...">
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "text-info mb-3 h5">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">img</span> src= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">card-img-top</span>" alt= "<span class= "text-danger">...</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>">< <span class= "text-danger">small</span> class= "<span class= "text-danger">text-muted</span>">Last updated 3 mins ago< <span class= "text-danger">/small</span> >< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>">< <span class= "text-danger">small</span> class= "<span class= "text-danger">text-muted</span>">Last updated 3 mins ago< <span class= "text-danger">/small</span> >< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">img</span> src= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">card-img-top</span>" alt= "<span class= "text-danger">...</span>" ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "text-warning" id= "note"><i class= "fas fa-info-circle"></i>Just remove the spaces when you use it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">IMAGE OVERLAYS</p>
    <p class= "mb-1">Turn an image into a card background and overlay your card’s text. Depending on the image, you may or may not need additional styles or utilities.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "card">
                <img src= "{{ asset('img/dog.jpg') }}" class= "card-img" alt= "...">
                <div class= "card-img-overlay">
                    <h5 class= "card-title">Card title</h5>
                    <p class= "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class= "card-text">Last updated 3 mins ago</p>
                </div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "text-info mb-3 h5">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">img</span> src= "<span class= "text-danger">#</span>" class= "<span class= "text-danger">card-img</span>" alt= "<span class= "text-danger">...</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-img-overlay</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >Last updated 3 mins ago< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "text-warning" id= "note"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">HORIZONTAL</p>
    <p class= "mb-1">Using a combination of grid and utility classes, cards can be made horizontal in a mobile-friendly and responsive way. In the example below, we remove the grid gutters with <span class= "text-danger">.no-gutters</span> and use <span class= "text-danger">.col-md-*</span> classes to make the card horizontal at the <span class= "text-danger">md</span> breakpoint. Further adjustments may be needed depending on your card content.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "card">
                <div class= "row no-gutters">
                    <div class= "col-md-4">
                        <img src= "{{ asset('img/dog.jpg') }}" class= "card-img h-100" alt= "...">
                    </div>
                    <div class= "col-md-8">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class= "card-text"><small class= "text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "text-info mb-3 h5">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">row no-gutters</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">col-md-4</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">img</span> src= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">card-img</span>" alt= "<span class= "text-danger">...</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">col-md-8</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title<<span class= "text-danger"> /h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >< <span class= "text-danger">small</span> class= "<span class= "text-danger">text-muted</span>" >Last updated 3 mins ago< <span class= "text-danger">/small</span> >< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "text-warning" id= "note"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">CARD STYLES</p>
    <p class= "mb-3">Cards include various options for customizing their backgrounds, borders, and color.</p>
    <p class= "text-info mb-1 h5">Background and color</p>
    <p class= "mb-1">Use <span class= "text-danger">.card-* { primary, secondary, success, warning, danger, info, dark, light }</span> for your desired background-color.</p>
    <div class= "row my-3">
        <div class= "col-lg-12 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "row">
                <div class= "col-md-4">
                    <div class= "card card-primary mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card card-secondary mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card card-success mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card card-warning mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card card-danger mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card card-info mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card card-light mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card card-dark mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class= "col-lg-12 py-3 col-12">
            <p class= "text-info mb-3 h5">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-primary</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-secondary</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-success</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-warning</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-danger</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-info</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-light</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-dark</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "text-warning" id= "note"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">OUTLINE CARD</p>
    <p class= "mb-1">Use <span class= "text-danger">.card-outline</span> and add <span class= "text-danger">.card-*{ primary, secondary, success, warning, danger, info, light, dark }</span> for your desired style. Note that you can put <span class= "text-danger">.text-{color}</span> classes on the parent <span class= "text-danger">.card</span> or a subset of the card’s contents as shown below.</p>
    <div class= "row my-3">
        <div class= "col-lg-12 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "row">
                <div class= "col-md-4">
                    <div class= "card card-outline card-primary mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card card-outline card-secondary mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card card-outline card-success mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card card-outline card-warning mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card card-outline card-danger mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card card-outline card-info mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card card-outline card-light mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card card-outline card-dark mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class= "col-lg-12 py-3 col-12">
            <p class= "text-info mb-3 h5">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-outline card-primary</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-outline card-secondary</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-outline card-success</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-outline card-warning</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-outline card-danger</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-outline card-info</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-outline card-light</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-outline card-dark</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "text-warning" id= "note"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">ACCENT CARD</p>
    <p class= "mb-1">Use <span class= "text-danger">.card-accent</span> and add <span class= "text-danger">.card-*{ primary, secondary, success, warning, danger, info, light, dark }</span> for your desired style. Note that you can put <span class= "text-danger">.text-{color}</span> classes on the parent <span class= "text-danger">.card</span> or a subset of the card’s contents as shown below.</p>
    <div class= "row my-3">
        <div class= "col-lg-12 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "row">
                <div class= "col-md-4">
                    <div class= "card card-accent card-primary mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card card-accent card-secondary mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card card-accent card-success mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card card-accent card-warning mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card card-accent card-danger mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card card-accent card-info mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card card-accent card-light mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class= "col-md-4">
                    <div class= "card card-accent card-dark mb-2">
                        <div class= "card-body">
                            <h5 class= "card-title">Card title</h5>
                            <p class= "card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class= "col-lg-12 py-3 col-12">
            <p class= "text-info mb-3 h5">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-accent card-primary</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-accent card-secondary</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-accent card-success</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-accent card-warning</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-accent card-danger</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-accent card-info</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-accent card-light</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">card card-accent card-dark</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">card-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">card-title</span>" >Card title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">card-text</span>" >With supporting text below as a natural lead-in to additional content.< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p class= "text-warning" id= "note"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
</div>