<div class= "p-4 mt-4 mr-4 content" id= "modal-page">
    <h4>MODALS</h4>
    <p class= "mb-1">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content.</p>
    <hr>
    <p class= "text-info mb-1 h5">LIVE DEMO</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-5">
            <button class= "btn btn-solid btn-primary" data-toggle= "modal" data-target= "#normalModal">Show Modal</button>
        </div>
        <div class= "col-md-7">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-4">< button class= "<span class= "text-danger">btn btn-solid- btn-primary</span>" data-toggle= "<span class= "text-danger">modal</span>" data-target= "<span class= "text-danger">#normalModal</span>" >Show Modal< /button ></p>
            <p class= "mb-1">< div class= "<span class= "text-danger">modal fade</span>" id= "<span class= "text-danger">normalModal</span>" tabindex= "<span class= "text-danger">-1</span>" role= "<span class= "text-danger">dialog</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">modal-dialog</span>" role= "<span class= "text-danger">document</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">modal-content</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">modal-header</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< h5 class= "<span class= "text-danger">modal-title</span>" >Modal title< /h5 ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< button type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">close</span>" data-dismiss= "<span class= "text-danger">modal</span>" aria-label= "<span class= "text-danger">Close</span>" >< i class= "<span>fas fa-times align-middle</span>" >< /i >< /button ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">modal-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< p class= "<span class= "text-danger">mb-1</span>" >...< /p ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">modal-footer</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< button type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-secondary</span>" data-dismiss= "<span class= "text-danger">modal</span>" >Close< /button ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< button type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-primary</span>" >Save changes< /button ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">< /div ></p>
            <p id= "note" class= "text-warning mb-1"><i class= "fas fa-info-circle"></i>Make sure that <b>data-target</b> and <b>id</b> of the modal are the same!</p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">SIZES</p>
    <p class= "mb-4">Use <span class= "text-danger">.modal-* {sm, lg, xl}</span> for your desired modal size.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-5">
            <button class= "btn btn-solid btn-primary mb-2" data-toggle= "modal" data-target= "#smallModal">Small Modal</button>
            <button class= "btn btn-solid btn-primary mb-2" data-toggle= "modal" data-target= "#largeModal">Large Modal</button>
            <button class= "btn btn-solid btn-primary mb-2" data-toggle= "modal" data-target= "#extraLargeModal">Extra Large Modal</button>
        </div>
        <div class= "col-md-7">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< div class= "<span class= "text-danger">modal fade</span>" id= "<span class= "text-danger">normalModal</span>" tabindex= "<span class= "text-danger">-1</span>" role= "<span class= "text-danger">dialog</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">modal-dialog modal-sm</span>" role= "<span class= "text-danger">document</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">modal-content</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">modal-header</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< h5 class= "<span class= "text-danger">modal-title</span>" >Modal title< /h5 ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< button type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">close</span>" data-dismiss= "<span class= "text-danger">modal</span>" aria-label= "<span class= "text-danger">Close</span>" >< i class= "<span>fas fa-times align-middle</span>" >< /i >< /button ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">modal-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< p class= "<span class= "text-danger">mb-1</span>" >...< /p ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">modal-footer</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< button type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-secondary</span>" data-dismiss= "<span class= "text-danger">modal</span>" >Close< /button ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< button type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-primary</span>" >Save changes< /button ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">< /div ></p>
            <p id= "note" class= "text-warning mb-1"><i class= "fas fa-info-circle"></i>Make sure that <b>data-target</b> and <b>id</b> of the modal are the same!</p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">STYLES</p>
    <p class= "mb-4">Use <span class= "text-danger">.modal-* {success, warning, danger, info}</span> for your desired modal theme.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-5">
            <button class= "btn btn-solid btn-success mb-2" data-toggle= "modal" data-target= "#successModal">Success Modal</button>
            <button class= "btn btn-solid btn-warning mb-2" data-toggle= "modal" data-target= "#warningModal">Warning Modal</button>
            <button class= "btn btn-solid btn-danger mb-2" data-toggle= "modal" data-target= "#dangerModal">Danger Modal</button>
            <button class= "btn btn-solid btn-info mb-2" data-toggle= "modal" data-target= "#infoModal">Info Modal</button>
        </div>
        <div class= "col-md-7">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< div class= "<span class= "text-danger">modal fade modal-success</span>" id= "<span class= "text-danger">normalModal</span>" tabindex= "<span class= "text-danger">-1</span>" role= "<span class= "text-danger">dialog</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">modal-dialog</span>" role= "<span class= "text-danger">document</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">modal-content</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">modal-header</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< h5 class= "<span class= "text-danger">modal-title</span>" >Modal title< /h5 ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< button type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">close</span>" data-dismiss= "<span class= "text-danger">modal</span>" aria-label= "<span class= "text-danger">Close</span>" >< i class= "<span>fas fa-times align-middle</span>" >< /i >< /button ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">modal-body</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< p class= "<span class= "text-danger">mb-1</span>" >...< /p ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">modal-footer</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< button type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-secondary</span>" data-dismiss= "<span class= "text-danger">modal</span>" >Close< /button ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< button type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-primary</span>" >Save changes< /button ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">< /div ></p>
            <p id= "note" class= "text-warning mb-1"><i class= "fas fa-info-circle"></i>Make sure that <b>data-target</b> and <b>id</b> of the modal are the same!</p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
</div>
@include('global.modal')