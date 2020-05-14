<div class= "px-5 mt-5 content" id= "tooltip-page">
    <h4>TOOLTIPS</h4>
    <p class= "mb-1">Documentation and examples for adding custom AGM tooltips with CSS and JavaScript using CSS3 for animations and data-attributes for local title storage.</p>
    <hr>
    <p class= "text-info mb-1 h5">EXAMPLE: ENABLE TOOLTIPS EVERYWHERE</p>
    <p class= "mb-1">One way to initialize all tooltips on a page would be to select them by their <span class= "text-danger">data-toggle</span> attribute:</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-12 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <p class= "mb-1">$(<span class= "text-primary">function</span>() {</p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;$('<span class= "text-danger">[data-toggle= "tooltip"]</span>').tooltip()</p>
            <p class= "mb-1">})</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">EXAMPLE</p>
    <p class= "mb-1">Hover over the links below to see tooltips:</p>
    <div class= "row my-3">
        <div class= "col-lg-12 py-3 agm-bg-light rounded col-12">
            <p>Tight pants next level keffiyeh <a href= "#" data-toggle= "tooltip" data-original-title= "Default tooltip">you probably</a> haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a href= "#" data-toggle= "tooltip" data-original-title= "Another tooltip">have a</a> terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a href= "#" data-toggle= "tooltip" data-original-title= "Another one here too">whatever keytar</a>, scenester farm-to-table banksy Austin <a href= "#" data-toggle= "tooltip" data-original-title= "The last tip!">twitter handle</a> freegan cred raw denim single-origin coffee viral.</p>
        </div>
    </div>
    <p class= "mb-1">Hover over the buttons below to see the four tooltips directions: top, right, bottom, and left.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <button type= "button" class= "btn btn-solid btn-secondary mb-1" data-toggle= "tooltip" data-placement= "top" title= "Tooltip on top">Tooltip on top</button>
            <button type= "button" class= "btn btn-solid btn-secondary mb-1" data-toggle= "tooltip" data-placement= "right" title= "Tooltip on right">Tooltip on right</button>
            <button type= "button" class= "btn btn-solid btn-secondary mb-1" data-toggle= "tooltip" data-placement= "bottom" title= "Tooltip on bottom">Tooltip on bottom</button>
            <button type= "button" class= "btn btn-solid btn-secondary mb-1" data-toggle= "tooltip" data-placement= "left" title= "Tooltip on left">Tooltip on left</button>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-3">< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-secondary</span>" data-toggle= "<span class= "text-danger">tooltip</span>" data-placement= "<span class= "text-danger">top</span>" title= "<span class= "text-danger">Tooltip on top</span>">Tooltip on top< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-secondary</span>" data-toggle= "<span class= "text-danger">tooltip</span>" data-placement= "<span class= "text-danger">right</span>" title= "<span class= "text-danger">Tooltip on right</span>">Tooltip on right< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-secondary</span>" data-toggle= "<span class= "text-danger">tooltip</span>" data-placement= "<span class= "text-danger">bottom</span>" title= "<span class= "text-danger">Tooltip on bottom</span>">Tooltip on bottom< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-secondary</span>" data-toggle= "<span class= "text-danger">tooltip</span>" data-placement= "<span class= "text-danger">left</span>" title= "<span class= "text-danger">Tooltip on left</span>">Tooltip on left< <span class= "text-danger">/button</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
</div>