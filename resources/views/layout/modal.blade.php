<div class= "p-4 my-5 mr-4 border rounded shadow-sm content bg-light" id= "modal-page">
    <h4 class= "mb-5">MODALS</h4>
    <div class= "card card-accent card-primary">
        <div class= "row">
            <div class= "col-md-12">
                <div class= "card-body">
                    <p class= "card-title mb-4">Modal - Sizes</p>
                    <button class= "btn btn-solid mx-2" data-toggle= "modal" data-target= "#normalModal">Normal Modal</button>
                    <button class= "btn btn-solid mx-2" data-toggle= "modal" data-target= "#smallModal">Small Modal</button>
                    <button class= "btn btn-solid mx-2" data-toggle= "modal" data-target= "#largeModal">Large Modal</button>
                    <button class= "btn btn-solid mx-2" data-toggle= "modal" data-target= "#extraLargeModal">Extra Large Modal</button>
                </div>
            </div>
            <div class= "col-md-12">
                <div class= "card-body">
                    <p class= "card-title mb-4">Styles</p>
                    <button class= "btn btn-solid btn-primary mx-2" data-target= "#primaryModal" data-toggle= "modal">Primary Modal</button>
                    <button class= "btn btn-solid btn-success mx-2" data-target= "#successModal" data-toggle= "modal">Success Modal</button>
                    <button class= "btn btn-solid btn-warning mx-2" data-target= "#warningModal" data-toggle= "modal">Warning Modal</button>
                    <button class= "btn btn-solid btn-danger mx-2" data-target= "#dangerModal" data-toggle= "modal">Danger Modal</button>
                    <button class= "btn btn-solid btn-info mx-2" data-target= "#infoModal" data-toggle= "modal">Info Modal</button>
                </div>
            </div>
        </div>
    </div>
</div>
@include('global.modal')