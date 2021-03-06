<div class= "px-3 mt-5 content" id= "modal-page">
    <h4>MODALS</h4>
    <p class= "mb-1">Use AGM’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content.</p>
    <hr>
    <p class= "text-info mb-1 h5">LIVE DEMO</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <button class= "btn btn-solid btn-primary" data-toggle= "modal" data-target= "#normalModal">Show Modal</button>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-4">< <span class= "text-danger">button</span> class= "<span class= "text-danger">btn btn-solid- btn-primary</span>" data-toggle= "<span class= "text-danger">modal</span>" data-target= "<span class= "text-danger">#normalModal</span>" >Show Modal< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">modal fade</span>" id= "<span class= "text-danger">normalModal</span>" tabindex= "<span class= "text-danger">-1</span>" role= "<span class= "text-danger">dialog</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">modal-dialog</span>" role= "<span class= "text-danger">document</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">modal-content</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">modal-header</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">modal-title</span>" >Modal title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">close</span>" data-dismiss= "<span class= "text-danger">modal</span>" aria-label= "<span class= "text-danger">Close</span>" >< <span class= "text-danger">i</span> class= "<span>fas fa-times align-middle</span>" >< <span class= "text-danger">/i</span> >< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">modal-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">mb-1</span>" >...< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">modal-footer</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-secondary</span>" data-dismiss= "<span class= "text-danger">modal</span>" >Close< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-primary</span>" >Save changes< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning mb-1"><i class= "fas fa-info-circle"></i>Make sure that <b>data-target</b> and <b>id</b> of the modal are the same!</p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-modal-1" copy-data= '<button class= "btn btn-solid btn-primary" data-toggle= "modal" data-target= "#normalModal">Show Modal</button><div class="modal fade" id= "normalModal" tabindex="-1" role="dialog"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Modal title</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class= "fas fa-times align-middle"></i></button></div><div class="modal-body"><p class= "mb-1">Modal body text goes here.</p></div><div class="modal-footer"><button type="button" class="btn btn-solid btn-secondary" data-dismiss="modal">Close</button><button type="button" class="btn btn-solid btn-primary">Save changes</button></div></div></div></div>'>COPY</button>
        </div>
    </div>
    <p class= "text-info mb-1 h5">SIZES</p>
    <p class= "mb-4">Use <span class= "text-danger">.modal-* {sm, lg, xl}</span> for your desired modal size.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <button class= "btn btn-solid btn-primary mb-2" data-toggle= "modal" data-target= "#smallModal">Small Modal</button>
            <button class= "btn btn-solid btn-primary mb-2" data-toggle= "modal" data-target= "#largeModal">Large Modal</button>
            <button class= "btn btn-solid btn-primary mb-2" data-toggle= "modal" data-target= "#extraLargeModal">Extra Large Modal</button>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">modal fade</span>" id= "<span class= "text-danger">normalModal</span>" tabindex= "<span class= "text-danger">-1</span>" role= "<span class= "text-danger">dialog</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">modal-dialog modal-sm</span>" role= "<span class= "text-danger">document</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">modal-content</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">modal-header</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">modal-title</span>" >Modal title< <span class= "text-danger">/h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">close</span>" data-dismiss= "<span class= "text-danger">modal</span>" aria-label= "<span class= "text-danger">Close</span>" >< <span class= "text-danger">i</span> class= "<span>fas fa-times align-middle</span>" ><<span class= "text-danger"> /i</span> >< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">modal-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">mb-1</span>" >...< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">modal-footer</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-secondary</span>" data-dismiss= "<span class= "text-danger">modal</span>" >Close< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-primary</span>" >Save changes< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning mb-1"><i class= "fas fa-info-circle"></i>Make sure that <b>data-target</b> and <b>id</b> of the modal are the same!</p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-modal-2" copy-data= '<button class= "btn btn-solid btn-primary mb-2" data-toggle= "modal" data-target= "#smallModal">Small Modal</button><div class="modal fade" id= "smallModal" tabindex="-1" role="dialog"><div class="modal-dialog modal-sm" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Modal title</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class= "fas fa-times align-middle"></i></button></div><div class="modal-body"><p class= "mb-1">Modal body text goes here.</p></div><div class="modal-footer"><button type="button" class="btn btn-solid btn-secondary" data-dismiss="modal">Close</button><button type="button" class="btn btn-solid btn-primary">Save changes</button></div></div></div></div>'>COPY</button>
        </div>
    </div>
    <p class= "text-info mb-1 h5">STYLES</p>
    <p class= "mb-4">Use <span class= "text-danger">.modal-* {success, warning, danger, info}</span> for your desired modal theme.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <button class= "btn btn-solid btn-success mb-2" data-toggle= "modal" data-target= "#successModal">Success Modal</button>
            <button class= "btn btn-solid btn-warning mb-2" data-toggle= "modal" data-target= "#warningModal">Warning Modal</button>
            <button class= "btn btn-solid btn-danger mb-2" data-toggle= "modal" data-target= "#dangerModal">Danger Modal</button>
            <button class= "btn btn-solid btn-info mb-2" data-toggle= "modal" data-target= "#infoModal">Info Modal</button>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">modal fade modal-success</span>" id= "<span class= "text-danger">normalModal</span>" tabindex= "<span class= "text-danger">-1</span>" role= "<span class= "text-danger">dialog</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">modal-dialog</span>" role= "<span class= "text-danger">document</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">modal-content</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">modal-header</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">h5</span> class= "<span class= "text-danger">modal-title</span>" >Modal title<<span class= "text-danger"> /h5</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">close</span>" data-dismiss= "<span class= "text-danger">modal</span>" aria-label= "<span class= "text-danger">Close</span>" >< <span class= "text-danger">i</span> class= "<span>fas fa-times align-middle</span>" ><<span class= "text-danger"> /i</span> >< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">modal-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">p</span> class= "<span class= "text-danger">mb-1</span>" >...< <span class= "text-danger">/p</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">modal-footer</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-secondary</span>" data-dismiss= "<span class= "text-danger">modal</span>" >Close< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-primary</span>" >Save changes< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning mb-1"><i class= "fas fa-info-circle"></i>Make sure that <b>data-target</b> and <b>id</b> of the modal are the same!</p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-modal-3" copy-data= '<button class= "btn btn-solid btn-success mb-2" data-toggle= "modal" data-target= "#successModal">Success Modal</button><div class="modal fade modal-success" id= "successModal" tabindex="-1" role="dialog"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Modal title</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class= "fas fa-times align-middle"></i></button></div><div class="modal-body"><p class= "mb-1">Modal body text goes here.</p></div><div class="modal-footer"><button type="button" class="btn btn-solid btn-secondary" data-dismiss="modal">Close</button><button type="button" class="btn btn-solid btn-success">Save changes</button></div></div></div></div>'>COPY</button>
        </div>
    </div>
</div>
@include('global.modal')