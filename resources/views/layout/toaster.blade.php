<div class= "p-4 my-5 mr-4 border rounded shadow-sm content bg-light" id= "toaster-page">
    <h4 class= "mb-5">TOASTERS</h4>
    <div class="row">
        <div class="col-md-4">
            <p class= "font-weight-bold text-uppercase text-info">Toast Type</p>
            <div class= "radio radio-dark">
                <input type= "radio" id= "toast_default" name= "toast_type" checked value= "">
                <span></span>
                <label for= "toast_default">Default</label>
            </div>
            <div class= "radio radio-dark">
                <input type= "radio" id= "toast_default-square" name= "toast_type" value= "toast-square">
                <span></span>
                <label for= "toast_default-square">Default - Square</label>
            </div>
            <div class= "radio radio-dark">
                <input type= "radio" id= "toast_default_pills" name= "toast_type" value= "toast-pills">
                <span></span>
                <label for= "toast_default_pills">Default - Pills</label>
            </div>
            <div class= "radio radio-dark">
                <input type= "radio" id= "toast_outline" name= "toast_type" value= "toast-outline">
                <span></span>
                <label for= "toast_outline">Outline</label>
            </div>
            <div class= "radio radio-dark">
                <input type= "radio" id= "toast_outline_square" name= "toast_type" value= "toast-outline toast-square">
                <span></span>
                <label for= "toast_outline_square">Outline - Square</label>
            </div>
            <div class= "radio radio-dark">
                <input type= "radio" id= "toast_outline_pills" name= "toast_type" value= "toast-outline toast-pills">
                <span></span>
                <label for= "toast_outline_pills">Outline - Pills</label>
            </div>
        </div>
        <div class= "col-md-3">
            <p class= "font-weight-bold text-uppercase text-info">Toast Theme</p>
            <div class= "radio radio-dark">
                <input type= "radio" id= "toast_success" name= "toast_theme" checked value= "toast-success">
                <span></span>
                <label for= "toast_success" class= "text-success">Success</label>
            </div>
            <div class= "radio radio-dark">
                <input type= "radio" id= "toast_warning" name= "toast_theme" value= "toast-warning">
                <span></span>
                <label for= "toast_warning" class= "text-warning">Warning</label>
            </div>
            <div class= "radio radio-dark">
                <input type= "radio" id= "toast_danger" name= "toast_theme" value= "toast-danger">
                <span></span>
                <label for= "toast_danger" class= "text-danger">Danger</label>
            </div>
            <div class= "radio radio-dark">
                <input type= "radio" id= "toast_info" name= "toast_theme" value= "toast-info">
                <span></span>
                <label for= "toast_info" class= "text-info">Info</label>
            </div>
        </div>
        <div class="col-md-5">
            <p class= "font-weight-bold text-uppercase text-info">Other Content</p>
            <form action="">
                <div class="form-group mb-2">
                    <label for= "field">Message:</label>
                    <textarea class= "form-control" rows="3" name= "toast_message" id= "toast-message"></textarea>
                </div>
                <div class="form-group mb-2">
                    <label for= "field">Delay:</label>
                    <input type= "number" class= "form-control" name= "toast_delay" id= "toast-delay" min= "500" value= "500"/>
                </div>
                <div class="form-group mb-2">
                    <label for= "field">Icon:</label>
                    <input type= "text" class= "form-control" name= "toast_icon" id= "toast-icon"/>
                </div>
            </form>
        </div>
        <div class= "col-md-12 mt-5">
            <div class= "row">
                <div class= "col-md-6">
                    <p class= "align-middle" id= "toaster-code">$('', '', '', '', 0);</p>
                </div>
                <div class= "col-md-6">
                    <button type= "button" class= "btn btn-solid btn-primary" id= "show-toast">Show Toast</button>
                </div>
            </div>
        </div>
    </div>
</div>