<div class= "px-5 mt-5 content" id= "input-page">
    <h4>INPUT FIELDS</h4>
    <p class= "mb-1">Be sure to use an appropriate <span class= "text-danger">type</span> attribute on all inputs (e.g., <span class= "text-danger">email</span> for email address or <span class= "text-danger">number</span> for numerical information) to take advantage of newer input controls like email verification, number selection, and more.</p>
    <p class= "mb-1">Here’s a quick example to demonstrate Bootstrap’s form styles. Keep reading for documentation on required classes, form layout, and more.</p>
    <hr>
    <p class= "text-info mb-1 h5">FORM CONTROLS</p>
    <p class= "mb-4">Textual form controls—like < <span class= "text-danger">input</span> >s, < <span class= "text-danger">select</span> >s, and < <span class= "text-danger">textarea</span> >s—are styled with the .form-control class. Included are styles for general appearance, focus state, sizing, and more.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <form>
                <div class="form-group mb-2">
                    <label for= "field">Text:</label>
                    <input type= "text" class= "form-control"/>
                </div>
                <div class="form-group mb-2">
                    <label for= "field">Password:</label>
                    <input type= "password" class= "form-control"/>
                </div>
                <div class="form-group mb-2">
                    <label for= "field">Number:</label>
                    <input type= "number" class= "form-control" min= "0"/>
                </div>
                <div class="form-group mb-2">
                    <label for= "field">Email:</label>
                    <input type= "email" class= "form-control" placeholder= "sample@yahoo.com"/>
                </div>
                <div class="form-group mb-2">
                    <label for= "field">Date:</label>
                    <input type= "date" class= "form-control"/>
                </div>
                <div class="form-group mb-2">
                    <label for= "field">Textarea:</label>
                    <textarea class= "form-control" rows="3"></textarea>
                </div>
                <div class="form-group mb-2">
                    <label for= "field">Select:</label>
                    <select class= "form-control">
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                    </select>
                </div>
            </form>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">form</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">field</span>" >Text:< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">text</span>" class= "<span class= "text-danger">form-control</span>" id= "<span class= "text-danger">field</span>" <span class= "text-danger">/</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">field</span>" >Password:< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">password</span>" class= "<span class= "text-danger">form-control</span>" id= "<span class= "text-danger">field</span>" <span class= "text-danger">/</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">field</span>" >Number:< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">number</span>" class= "<span class= "text-danger">form-control</span>" id= "<span class= "text-danger">field</span>" min= "<span class= "text-danger">0</span>" <span class= "text-danger">/</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">field</span>" >Email:< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">email</span>" class= "<span class= "text-danger">form-control</span>" id= "<span class= "text-danger">field</span>" placeholder= "<span class= "text-danger">sample@yahoo.com</span>" <span class= "text-danger">/</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">field</span>" >Date:< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">date</span>" class= "<span class= "text-danger">form-control</span>" id= "<span class= "text-danger">field</span>" <span class= "text-danger">/</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">field</span>" >TextArea:<<span class= "text-danger"> /label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">textarea</span> class= "<span class= "text-danger">form-control</span>" id= "<span class= "text-danger">field</span>" rows= "<span class= "text-danger">3</span>">< <span class= "text-danger">/textarea</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">field</span>" >Select:< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">select</span> class= "<span class= "text-danger">form-control</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">option</span> value= "<span class= "text-danger">1</span>" >Option 1< <span class= "text-danger">/option</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">option</span> value= "<span class= "text-danger">2</span>" >Option 2< <span class= "text-danger">/option</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/select</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/form</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">SIZING</p>
    <p class= "mb-4">Set heights using classes like <span class= "text-danger">.form-control-lg</span> and <span class= "text-danger">.form-control-sm</span>.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <form>
                <div class="form-group mb-2">
                    <label for= "field">Small Inputs:</label>
                    <input type= "text" class= "form-control form-control-sm"/>
                </div>
                <div class="form-group mb-2">
                    <label for= "field">Large Inputs:</label>
                    <input type= "text" class= "form-control form-control-lg"/>
                </div>
            </form>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">form</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">field</span>" >Small Inputs:< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">text</span>" class= "<span class= "text-danger">form-control form-control-sm</span>" id= "<span class= "text-danger">field</span>" <span class= "text-danger">/</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">field</span>" >Large Inputs:< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">text</span>" class= "<span class= "text-danger">form-control form-control-lg</span>" id= "<span class= "text-danger">field</span>" <span class= "text-danger">/</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/form</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">STYLES</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <form>
                <div class="form-group mb-2">
                    <label for= "field">Square:</label>
                    <input type= "text" class= "form-control form-square"/>
                </div>
                <div class="form-group mb-2">
                    <label for= "field">Pills:</label>
                    <input type= "text" class= "form-control form-pills"/>
                </div>
            </form>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">form</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">field</span>" >Square:< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">text</span>" class= "<span class= "text-danger">form-control form-square</span>" id= "<span class= "text-danger">field</span>" <span class= "text-danger">/</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">field</span>" >Pills:< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">text</span>" class= "<span class= "text-danger">form-control form-pills</span>" id= "<span class= "text-danger">field</span>" <span class= "text-danger">/</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/form</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "mb-1">Use <span class= "text-danger">.form-* {success, danger, warning, info}</span> for your desired input theme.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "form-group mb-2">
                <label for= "field">Success:</label>
                <input type= "text" class= "form-control form-success" id= "field"/>
            </div>
            <div class= "form-group mb-2">
                <label for= "field">Warning:</label>
                <input type= "text" class= "form-control form-warning" id= "field"/>
            </div>
            <div class= "form-group mb-2">
                <label for= "field">Danger:</label>
                <input type= "text" class= "form-control form-danger" id= "field"/>
            </div>
            <div class= "form-group mb-2">
                <label for= "field">Info:</label>
                <input type= "text" class= "form-control form-info" id= "field"/>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">form</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">field</span>" >Success:< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">text</span>" class= "<span class= "text-danger">form-control form-success</span>" id= "<span class= "text-danger">field</span>" <span class= "text-danger">/</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">field</span>" >Warning:< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">text</span>" class= "<span class= "text-danger">form-control form-warning</span>" id= "<span class= "text-danger">field</span>" <span class= "text-danger">/</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">field</span>" >Danger:< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">text</span>" class= "<span class= "text-danger">form-control form-danger</span>" id= "<span class= "text-danger">field</span>" <span class= "text-danger">/</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">field</span>" >Info:< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">text</span>" class= "<span class= "text-danger">form-control form-info</span>" id= "<span class= "text-danger">field</span>" <span class= "text-danger">/</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/form</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
</div>