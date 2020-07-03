<div class= "px-3 mt-5 content" id= "pagination-page">
    <h4>PAGINATION</h4>
    <p class= "mb-1">Documentation and examples for showing pagination to indicate a series of related content exists across multiple pages.</p>
    <hr>
    <p class= "mb-3">We use a large block of connected links for our pagination, making links hard to miss and easily scalable—all while providing large hit areas. Pagination is built with list HTML elements so screen readers can announce the number of available links. Use a wrapping < <span class= "text-danger">nav</span> > element to identify it as a navigation section to screen readers and other assistive technologies.</p>
    <p class= "mb-1">In addition, as pages likely have more than one such navigation section, it’s advisable to provide a descriptive <span class= "text-danger">aria-label</span> for the < <span class= "text-danger">nav</span> > to reflect its purpose. For example, if the pagination component is used to navigate between a set of search results, an appropriate label could be <span class= "text-danger">aria-label="Search results pages"</span>.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> aria-label= "<span class= "text-danger">Page navigation example</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> class= "<span class= "text-danger">pagination</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >Previous< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >1< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >2< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >3< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >Next< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/nav</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-pagination-1" copy-data= '<nav aria-label="Page navigation example"><ul class="pagination"><li class="page-item"><a class="page-link" href="#">Previous</a></li><li class="page-item"><a class="page-link" href="#">1</a></li><li class="page-item"><a class="page-link" href="#">2</a></li><li class="page-item"><a class="page-link" href="#">3</a></li><li class="page-item"><a class="page-link" href="#">Next</a></li></ul></nav>'>COPY</button>
        </div>
    </div>
    <p class= "text-info mb-1 h5">WORING WITH ICONS</p>
    <p class= "mb-1">Looking to use an icon or symbol in place of text for some pagination links? Be sure to provide proper screen reader support with <span class= "text-danger">aria</span> attributes.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#" aria-label= "Previous"><span aria-hidden= "true">&laquo;</span></a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#" aria-label= "Next"><span aria-hidden= "true">&raquo;</span></a></li>
                </ul>
            </nav>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> aria-label= "<span class= "text-danger">Page navigation example</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> class= "<span class= "text-danger">pagination</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" aria-label= "<span class= "text-danger">Previous</span>" >< <span class= "text-danger">span</span> aria-hidden= "<span class= "text-danger">true</span>" >& laquo ;< <span class= "text-danger">/span</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >1< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >2< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >3< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" aria-label= "<span class= "text-danger">Next</span>" >< <span class= "text-danger">span</span> aria-hidden= "<span class= "text-danger">true</span>" >& raquo ;< <span class= "text-danger">/span</span> >< <span class= "text-danger">/a</> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/nav</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-pagination-2" copy-data= '<nav aria-label="Page navigation example"><ul class="pagination"><li class="page-item"><a class="page-link" href="#" aria-label= "Previous"><span aria-hidden= "true">&laquo;</span></a></li><li class="page-item"><a class="page-link" href="#">1</a></li><li class="page-item"><a class="page-link" href="#">2</a></li><li class="page-item"><a class="page-link" href="#">3</a></li><li class="page-item"><a class="page-link" href="#" aria-label= "Next"><span aria-hidden= "true">&raquo;</span></a></li></ul></nav>'>COPY</button>
        </div>
    </div>
    <p class= "text-info mb-1 h5">DISABLED AND ACTIVE STATES</p>
    <p class= "mb-3">Pagination links are customizable for different circumstances. Use <span class= "text-danger">.disabled</span> for links that appear un-clickable and <span class= "text-danger">.active</span> to indicate the current page.</p>
    <p class= "mb-1">While the <span class= "text-danger">.disabled</span> class uses <span class= "text-danger">pointer-events: none</span> to try to disable the link functionality of < <span class= "text-danger">a</span> >s, that CSS property is not yet standardized and doesn’t account for keyboard navigation. As such, you should always add <span class= "text-danger">tabindex="-1"</span> on disabled links and use custom JavaScript to fully disable their functionality.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex= "-1" aria-disabled= "true">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current= "page"><a class="page-link" href="#">2 <span class= "sr-only">(current)</span></a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> aria-label= "<span class= "text-danger">Page navigation example</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> class= "<span class= "text-danger">pagination</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item disabled</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" tabindex= "<span class= "text-danger">-1</span>" aria-disabled= "<span class= "text-danger">true</span>" >Previous< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >1< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item active</span>" aria-current= "<span class= "text-danger">page</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >2 < <span class= "text-danger">span</span> class= "<span class= "text-danger">sr-only</span>" >( current )< <span class= "text-danger">/span</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >3< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >Next< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/nav</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-pagination-3" copy-data= '<nav aria-label="Page navigation example"><ul class="pagination"><li class="page-item disabled"><a class="page-link" href="#" tabindex= "-1" aria-disabled= "true">Previous</a></li><li class="page-item"><a class="page-link" href="#">1</a></li><li class="page-item active" aria-current= "page"><a class="page-link" href="#">2 <span class= "sr-only">(current)</span></a></li><li class="page-item"><a class="page-link" href="#">3</a></li><li class="page-item"><a class="page-link" href="#">Next</a></li></ul></nav>'>COPY</button>
        </div>
    </div>
    <p class= "mb-1">You can optionally swap out active or disabled anchors for <span>, or omit the anchor in the case of the prev/next arrows, to remove click functionality and prevent keyboard focus while retaining intended styles.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex= "-1" aria-disabled= "true">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current= "page"><a class="page-link" href="#">2 <span class= "sr-only">(current)</span></a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> aria-label= "<span class= "text-danger">Page navigation example</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> class= "<span class= "text-danger">pagination</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item disabled</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" tabindex= "<span class= "text-danger">-1</span>" aria-disabled= "<span class= "text-danger">true</span>" >Previous< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >1< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item active</span>" aria-current= "<span class= "text-danger">page</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >2 < <span class= "text-danger">span</span> class= "<span class= "text-danger">sr-only</span>" >( current )< <span class= "text-danger">/span</span> >< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >3< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >Next< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/nav</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-pagination-4" copy-data= '<nav aria-label="Page navigation example"><ul class="pagination"><li class="page-item disabled"><a class="page-link" href="#" tabindex= "-1" aria-disabled= "true">Previous</a></li><li class="page-item"><a class="page-link" href="#">1</a></li><li class="page-item active" aria-current= "page"><a class="page-link" href="#">2 <span class= "sr-only">(current)</span></a></li><li class="page-item"><a class="page-link" href="#">3</a></li><li class="page-item"><a class="page-link" href="#">Next</a></li></ul></nav>'>COPY</button>
        </div>
    </div>
    <p class= "text-info mb-1 h5">SIZING</p>
    <p class= "mb-1">Fancy larger or smaller pagination? Add <span class= "text-danger">.pagination-lg</span> or <span class= "text-danger">.pagination-sm</span> for additional sizes.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-lg">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </nav>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> aria-label= "<span class= "text-danger">Page navigation example</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> class= "<span class= "text-danger">pagination pagination-lg</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >1< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >2< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >3< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/nav</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-pagination-5" copy-data= '<nav aria-label="Page navigation example"><ul class="pagination pagination-lg"><li class="page-item"><a class="page-link" href="#">1</a></li><li class="page-item"><a class="page-link" href="#">2</a></li><li class="page-item"><a class="page-link" href="#">3</a></li></ul></nav>'>COPY</button>
        </div>
    </div>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-sm">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </nav>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> aria-label= "<span class= "text-danger">Page navigation example</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> class= "<span class= "text-danger">pagination pagination-sm</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >1< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >2< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >3< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/nav</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-pagination-6" copy-data= '<nav aria-label="Page navigation example"><ul class="pagination pagination-sm"><li class="page-item"><a class="page-link" href="#">1</a></li><li class="page-item"><a class="page-link" href="#">2</a></li><li class="page-item"><a class="page-link" href="#">3</a></li></ul></nav>'>COPY</button>
        </div>
    </div>
    <p class= "text-info mb-1 h5">ALIGNMENT</p>
    <p class= "mb-1">Change the alignment of pagination components with flexbox utilities.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> aria-label= "<span class= "text-danger">Page navigation example</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> class= "<span class= "text-danger">pagination justify-content-center</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >Previous< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >1< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >2< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >3< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >Next< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/nav</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-pagination-7" copy-data= '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center"><li class="page-item"><a class="page-link" href="#">Previous</a></li><li class="page-item"><a class="page-link" href="#">1</a></li><li class="page-item"><a class="page-link" href="#">2</a></li><li class="page-item"><a class="page-link" href="#">3</a></li><li class="page-item"><a class="page-link" href="#">Next</a></li></ul></nav>'>COPY</button>
        </div>
    </div>
    <div class= "row my-3">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> aria-label= "<span class= "text-danger">Page navigation example</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ul</span> class= "<span class= "text-danger">pagination justify-content-end</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >Previous< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >1< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >2< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >3< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">page-item</span>" >< <span class= "text-danger">a</span> class= "<span class= "text-danger">page-link</span>" href= "<span class= "text-danger">#</span>" >Next< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ul</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/nav</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-pagination-8" copy-data= '<nav aria-label="Page navigation example"><ul class="pagination justify-content-end"><li class="page-item"><a class="page-link" href="#">Previous</a></li><li class="page-item"><a class="page-link" href="#">1</a></li><li class="page-item"><a class="page-link" href="#">2</a></li><li class="page-item"><a class="page-link" href="#">3</a></li><li class="page-item"><a class="page-link" href="#">Next</a></li></ul></nav>'>COPY</button>
        </div>
    </div>
</div>