<div class= "px-3 mt-5 content" id= "validation-page">
    <h4>FORM VALIDATION</h4>
    <hr>
    <div class= "row mx-0">
        <div class= "col-lg-6 col-md-12">
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
    </div>
</div>