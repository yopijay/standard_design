<div class= "px-4 mt-5 content" id= "clearfix-page">
    <h4>CLEARFIX</h4>
    <p class= "mb-1">Quickly and easily floated content within a container by adding a clearfix utility.</p>
    <hr>
    <p class= "mb-1">Easily clear <span class= "text-danger">float</span>s by adding <span class= "text-danger">.clearfix</span> <b>to the parent element</b>. Can also be used as a mixin.</p>
    <div class= "row my-3">
        <div class= "col-lg-12 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <p class= "mb-5">< <span class= "text-danger">div</span> class= "<span class= "text-danger">clearfix</span>" >...< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1"><p class= "text-secondary">// Mixin itself</p></p>
            <p class= "mb-1">@<span class= "text-primary">mixin</span> <span class= "text-danger">clearfix</span>() {</p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<span class= "text-danger">&::after</span> {</p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class= "text-info">display</span>: block;</p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class= "text-info">content</span>: "";</p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class= "text-info">clear</span>: both;</p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;}</p>
            <p class= "mb-1">}</p>
            <p class= "mb-1"><p class= "text-secondary">// Usage as a mixin</p></p>
            <p class= "mb-1"><span class= "text-info">.element</span> {</p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;<span class= "text-primary">@ include</span> <span class= "text-danger">clearfix</span>;</p>
            <p class= "mb-1">}</p>
        </div>
    </div>
    <p class= "mb-1">The following example shows how the clearfix cam be used. Without the clearfix the wrapping div would not span around the buttons which would cause a broken layout.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "agm-bg-info clearfix">
                <button type= "button" class= "btn btn-solid btn-secondary float-left">Example button floated left</button>
                <button type= "button" class= "btn btn-solid btn-secondary float-right">Example button floated right</button>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">agm-bg-info clearfix</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-secondary float-left</span>" >Example button floated left< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-secondary float-right</span>" >Example button floated right< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p><button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-clearfix" copy-data= '<div class= "agm-bg-info clearfix"><button type= "button" class= "btn btn-solid btn-secondary float-left">Example button floated left</button><button type= "button" class= "btn btn-solid btn-secondary float-right">Example button floated right</button></div>'>COPY</button>
        </div>
    </div>
</div>