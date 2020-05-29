<div class= "px-3 mt-5 content" id= "validation-page">
    <h4>FORM VALIDATION</h4>
    <hr>
    <div class= "row mx-0 my-3">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "card">
                <div class= "card-body">
                    <h1 class= "card-title mb-5">FORM INPUT VALIDATION</h1>
                    <form id= "input-validation">
                        <div class= "form-row">
                            <div class= "col form-group">
                                <label for= "firstname" >First Name:</label>
                                <input type= "text" class= "form-control" id= "firstname" name= "firstname" input-label= "First Name" />
                            </div>
                            <div class= "col form-group">
                                <label for= "middlename" >Middle Name:</label>
                                <input type= "text" class= "form-control except" id= "middlename" name= "middlename" input-label= "Middle Name" />
                            </div>
                            <div class= "col form-group">
                                <label for= "lastname" >Last Name:</label>
                                <input type= "text" class= "form-control" id= "lastname" name= "lastname" input-label= "Last Name" />
                            </div>
                        </div>
                        <div class= "form-group">
                            <label for= "address20">Address:</label>
                            <textarea class= "form-control" id= "address20" name= "address20" rows= "3" input-label= "Address"></textarea>
                        </div>
                        <div class= "form-group">
                            <label for= "status20">Status:</label>
                            <select class= "form-control" id= "status20" name= "status20" input-label= "Status">
                                <option value= "" disabled selected>-- Select Civil Status --</option>
                                <option value= "single">Single</option>
                                <option value= "married">Married</option>
                                <option value= "widow">Widow</option>
                            </select>
                        </div>
                        <div class= "form-group">
                            <label for= "email20" >Email:</label>
                            <input type= "email" class= "form-control" id= "email20" name= "email20" input-label= "Email" />
                        </div>
                        <div class= "form-group mb-5">
                            <label for= "password20" >Password:</label>
                            <input type= "password" class= "form-control" id= "password20" name= "password20" input-label= "Password" />
                        </div>
                        <button type= "button" class= "btn btn-solid btn-success btn-block my-2 py-2" id= "input-validate">Validate</button>
                        <button type= "button" class= "btn btn-solid btn-success btn-block my-2 py-2" id= "toast-validate">Validate w/ Toast</button>
                    </form>
                </div>
            </div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">form</span> id= "<span class= "text-danger">input-validation</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-row</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">col form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">firstname</span>" >First Name:< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">text</span>" class= "<span class= "text-danger">form-control</span>" id= "<span class= "text-danger">firstname</span>" name= "<span class= "text-danger">firstname</span>" input-label= "<span class= "text-danger">First Name</span>" / ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">col form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< label for= "<span class= "text-danger">middlename</span>" >Middle Name:< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">text</span>" class= "<span class= "text-danger">form-control except</span>" id= "<span class= "text-danger">middlename</span>" name= "<span class= "text-danger">middlename</span>" input-label= "<span class= "text-danger">Middle Name</span>" / ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">col form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< label for= "<span class= "text-danger">lastname</span>" >Last Name:< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">text</span>" class= "<span class= "text-danger">form-control</span>" id= "<span class= "text-danger">lastname</span>" name= "<span class= "text-danger">lastname</span>" input-label= "<span class= "text-danger">Last Name</span>" / ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">address20</span>" >Address:< <span class= "text-danger">/labe</span>l ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">textarea</span> class= "<span class= "text-danger">form-control</span>" id= "<span class= "text-danger">address20</span>" name= "<span class= "text-danger">address20</span>" rows= "<span class= "text-danger">3</span>" input-label= "<span class= "text-danger">Address</span>" >< <span class= "text-danger">/textarea</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">status20</span>" >Status:< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">select</span> class= "<span class= "text-danger">form-control</span>" id= "<span class= "text-danger">status20</span>" name= "<span class= "text-danger">status20</span>" input-label= "<span class= "text-danger">Status</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">option</span> value= "" <span class= "text-danger">disabled selected</span> >-- Select Civil Status --< <span class= "text-danger">/option</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">option</span> value= "<span class= "text-danger">single</span>" >Single< <span class= "text-danger">/option</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">option</span> value= "<span class= "text-danger">married</span>" >Married< <span class= "text-danger">/option</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">option</span> value= "<span class= "text-danger">widow</span>" >Widow< <span class= "text-danger">/option</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/select</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">email20</span>" >Email:< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">email</span>" class= "<span class= "text-danger">form-control</span>" id= "<span class= "text-danger">email20</span>" name= "<span class= "text-danger">email20</span>" input-label= "<span class= "text-danger">Email</span>" / ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-group mb-5</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">password20</span>" >Password:< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">password</span>" class= "<span class= "text-danger">form-control</span>" id= "<span class= "text-danger">password20</span>" name= "<span class= "text-danger">password20</span>" input-label= "<span class= "text-danger">Password</span>" / ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-success btn-block my-2 py-2</span>" id= "<span class= "text-danger">input-validate</span>" >Validate< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">button</span> type= "<span class= "text-danger">button</span>" class= "<span class= "text-danger">btn btn-solid btn-success btn-block my-2 py-2</span>" id= "<span class= "text-danger">toast-validate</span>" >Validate w/ Toast< <span class= "text-danger">/button</span> ></p>
            <p class= "mb-5">< <span class= "text-danger">/form</span> ></p>
            <p class= "mb-1 text-secondary">// The way to activate the validation function is to set the form by getting the ID of the form and use it like this</p>
            <p class= "mb-1">< <span class= "text-danger">script</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;$(<span class= "text-primary">function</span>() {</p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$("<span class= "text-danger">#input-validate</span>").on("<span class= "text-danger">click</span>", <span class= "text-primary">function</span>() {</p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$("<span class= "text-danger">#input-validation</span>").validate(); <span class= "text-secondary">// Input validation without toast when it has an error.</span></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});</p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$("<span class= "text-danger">#toast-validate</span>").on("<span class= "text-danger">click</span>", <span class= "text-primary">function</span>() {</p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$("<span class= "text-danger">#input-validation</span>").validate(<span class= "text-danger">true</span>); <span class= "text-secondary">// Use this line of code if you want to use toaster when there is an error on your inputs</span></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});</p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;});</p>
            <p class= "mb-1">< <span class= "text-danger">/script</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
</div>