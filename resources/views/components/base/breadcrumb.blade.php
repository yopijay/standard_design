<div class= "px-5 mt-5 content" id= "breadcrumb-page">
    <h4>BREADCRUMB</h4>
    <p class= "mb-1">Indicate the current page’s location within a navigational hierarchy that automatically adds separators via CSS.</p>
    <hr>
    <p class= "mb-1">Use the <span class= "text-danger">.breadcrumb-square</span> modifier class to make the breadcrumb corners set to 0(Sets border-radius to 0). And <span class= "text-danger">.breadcrumb-pill</span> to make the breadcrumb corners more rounded</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
            </nav>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-square">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-pill">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> aria-label= "<span class= "text-danger">breadcrumb</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ol</span> class= "<span class= "text-danger">breadcrumb</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">breadcrumb-item active</span>" aria-current= "<span class= "text-danger">page</span>" >< a href= <span class= "text-danger">"#"</span> >Home< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ol</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/nav</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> aria-label= "<span class= "text-danger">breadcrumb</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ol</span> class= "<span class= "text-danger">breadcrumb breadcrumb-square</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">breadcrumb-item</span>" >< a href= <span class= "text-danger">"#"</span> >Home< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">breadcrumb-item active</span>" aria-current= "<span class= "text-danger">page</span>" >< a href= <span class= "text-danger">"#"</span> >Library< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ol</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/nav</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">nav</span> aria-label= "<span class= "text-danger">breadcrumb</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">ol</span> class= "<span class= "text-danger">breadcrumb breadcrumb-pill</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">breadcrumb-item</span>" >< a href= <span class= "text-danger">"#"</span> >Home< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">breadcrumb-item</span>" >< a href= <span class= "text-danger">"#"</span> >Library< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">li</span> class= "<span class= "text-danger">breadcrumb-item active</span>" aria-current= "<span class= "text-danger">page</span>" >< a href= <span class= "text-danger">"#"</span> >Data< <span class= "text-danger">/a</span> >< <span class= "text-danger">/li</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/ol</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/nav</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
</div>