<div class= "p-4 my-5 mr-4 content" id= "input-page">
    <h4>INPUT FIELDS</h4>
    <p class= "mb-1">Be sure to use an appropriate <span class= "text-danger">type</span> attribute on all inputs (e.g., <span class= "text-danger">email</span> for email address or <span class= "text-danger">number</span> for numerical information) to take advantage of newer input controls like email verification, number selection, and more.</p>
    <p class= "mb-1">Here’s a quick example to demonstrate Bootstrap’s form styles. Keep reading for documentation on required classes, form layout, and more.</p>
    <hr>
    <p class= "text-info mb-1 h5">FORM CONTROLS</p>
    <p class= "mb-4">Textual form controls—like < <span class= "text-danger">input</span> >s, < <span class= "text-danger">select</span> >s, and < <span class= "text-danger">textarea</span> >s—are styled with the .form-control class. Included are styles for general appearance, focus state, sizing, and more.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-5">
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
        <div class= "col-md-7">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< form ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< label for= "<span class= "text-danger">field</span>" >Text:< /label ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< input type= "<span class= "text-danger">text</span>" class= "<span class= "text-danger">form-control</span>" id= "<span class= "text-danger">field</span>" / ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< label for= "<span class= "text-danger">field</span>" >Password:< /label ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< input type= "<span class= "text-danger">password</span>" class= "<span class= "text-danger">form-control</span>" id= "<span class= "text-danger">field</span>" / ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< label for= "<span class= "text-danger">field</span>" >Number:< /label ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< input type= "<span class= "text-danger">number</span>" class= "<span class= "text-danger">form-control</span>" id= "<span class= "text-danger">field</span>" min= "<span class= "text-danger">0</span>" / ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< label for= "<span class= "text-danger">field</span>" >Email:< /label ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< input type= "<span class= "text-danger">email</span>" class= "<span class= "text-danger">form-control</span>" id= "<span class= "text-danger">field</span>" placeholder= "<span class= "text-danger">sample@yahoo.com</span>" / ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< label for= "<span class= "text-danger">field</span>" >Date:< /label ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< input type= "<span class= "text-danger">date</span>" class= "<span class= "text-danger">form-control</span>" id= "<span class= "text-danger">field</span>" / ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< label for= "<span class= "text-danger">field</span>" >TextArea:< /label ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< textarea class= "<span class= "text-danger">form-control</span>" id= "<span class= "text-danger">field</span>" rows= "<span class= "text-danger">3</span>">< /textarea ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< label for= "<span class= "text-danger">field</span>" >Select:< /label ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< select class= "<span class= "text-danger">form-control</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< option value= "<span class= "text-danger">1</span>" >Option 1< /option ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< option value= "<span class= "text-danger">2</span>" >Option 2< /option ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /select ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">< /form ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">SIZING</p>
    <p class= "mb-4">Set heights using classes like <span class= "text-danger">.form-control-lg</span> and <span class= "text-danger">.form-control-sm</span>.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-5">
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
        <div class= "col-md-7">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< form ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< label for= "<span class= "text-danger">field</span>" >Small Inputs:< /label ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< input type= "<span class= "text-danger">text</span>" class= "<span class= "text-danger">form-control form-control-sm</span>" id= "<span class= "text-danger">field</span>" / ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< div class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< label for= "<span class= "text-danger">field</span>" >Large Inputs:< /label ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< input type= "<span class= "text-danger">text</span>" class= "<span class= "text-danger">form-control form-control-lg</span>" id= "<span class= "text-danger">field</span>" / ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /div ></p>
            <p class= "mb-1">< /form ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
</div>