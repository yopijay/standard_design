<div class= "px-3 mt-5 content" id= "toaster-page">
    <h4>TOASTERS</h4>
    <p class= "mb-1">Toasts are lightweight notifications designed to mimic the push notifications that have been popularized by mobile and desktop operating systems. They’re built with flexbox, so they’re easy to align and position.</p>
    <hr>
    <div class="row my-5">
        <div class="col-lg-4 col-12">
            <p class= "font-weight-bold text-uppercase text-info mb-4">Toast Type</p>
            <div class= "form-radio radio radio-dark">
                <input type= "radio" id= "toast_default" name= "toast_type" checked value= "">
                <span></span>
                <label for= "toast_default">Default</label>
            </div>
            <div class= "form-radio radio-dark">
                <input type= "radio" id= "toast_default-square" name= "toast_type" value= "toast-square">
                <span></span>
                <label for= "toast_default-square">Default - Square</label>
            </div>
            <div class= "form-radio radio-dark">
                <input type= "radio" id= "toast_default_pills" name= "toast_type" value= "toast-pills">
                <span></span>
                <label for= "toast_default_pills">Default - Pills</label>
            </div>
            <div class= "form-radio radio-dark">
                <input type= "radio" id= "toast_outline" name= "toast_type" value= "toast-outline">
                <span></span>
                <label for= "toast_outline">Outline</label>
            </div>
            <div class= "form-radio radio-dark">
                <input type= "radio" id= "toast_outline_square" name= "toast_type" value= "toast-outline toast-square">
                <span></span>
                <label for= "toast_outline_square">Outline - Square</label>
            </div>
            <div class= "form-radio radio-dark">
                <input type= "radio" id= "toast_outline_pills" name= "toast_type" value= "toast-outline toast-pills">
                <span></span>
                <label for= "toast_outline_pills">Outline - Pills</label>
            </div>
        </div>
        <div class= "col-lg-3 col-12">
            <p class= "font-weight-bold text-uppercase text-info mb-4">Toast Theme</p>
            <div class= "form-radio radio-dark">
                <input type= "radio" id= "toast_success" name= "toast_theme" checked value= "toast-success">
                <span></span>
                <label for= "toast_success" class= "text-success">Success</label>
            </div>
            <div class= "form-radio radio-dark">
                <input type= "radio" id= "toast_warning" name= "toast_theme" value= "toast-warning">
                <span></span>
                <label for= "toast_warning" class= "text-warning">Warning</label>
            </div>
            <div class= "form-radio radio-dark">
                <input type= "radio" id= "toast_danger" name= "toast_theme" value= "toast-danger">
                <span></span>
                <label for= "toast_danger" class= "text-danger">Danger</label>
            </div>
            <div class= "form-radio radio-dark">
                <input type= "radio" id= "toast_info" name= "toast_theme" value= "toast-info">
                <span></span>
                <label for= "toast_info" class= "text-info">Info</label>
            </div>
        </div>
        <div class="col-lg-5 col-12">
            <p class= "font-weight-bold text-uppercase text-info mb-4">Other Content</p>
            <form action="" id= "toastContent">
                <div class="form-group mb-2">
                    <label for= "field">Message:</label>
                    <textarea class= "form-control" rows="3" name= "toast_message" id= "toast-message" input-label= "Message"></textarea>
                </div>
                <div class="form-group mb-2">
                    <label for= "field">Delay:</label>
                    <input type= "number" class= "form-control" name= "toast_delay" id= "toast-delay" min= "500" value= "500" input-label= "Delay"/>
                </div>
            </form>
        </div>
        <div class= "col-lg-12 mt-5 col-12">
            <div class= "row">
                <div class= "col-md-6">
                    <p class= "align-middle" id= "toaster-code">toaster.success("", "").show(0);</p>
                </div>
                <div class= "col-md-6">
                    <button type= "button" class= "btn btn-solid btn-primary" id= "show-toast">Show Toast</button>
                </div>
            </div>
        </div>
    </div>
</div>