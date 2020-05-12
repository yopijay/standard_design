<div class= "p-4 mt-4 mr-4 content" id= "validation-page">
    <h4>FORM VALIDATION</h4>
    <hr>
    <div class= "card">
        <div class= "card-body">
            <h1 class= "card-title mb-5">FORM</h1>
            <form id= "sample-form-validation">
                <div class= "row">
                    <div class= "col-md-6">
                        <div class= "form-group">
                            <label for= "firstname" >First Name:</label>
                            <input type= "text" class= "form-control" id= "firstname" name= "firstname" input-label= "First Name" />
                        </div>
                        <div class= "form-group">
                            <label for= "middlename" >Middle Name:</label>
                            <input type= "text" class= "form-control except" id= "middlename" name= "middlename" input-label= "Middle Name" />
                        </div>
                        <div class= "form-group">
                            <label for= "lastname" >Last Name:</label>
                            <input type= "text" class= "form-control" id= "lastname" name= "lastname" input-label= "Last Name" />
                        </div>
                        <div class= "form-group">
                            <label for= "address">Address:</label>
                            <textarea class= "form-control" id= "address" name= "address" rows= "3" input-label= "Address"></textarea>
                        </div>
                    </div>
                    <div class= "col-md-6">
                        <div class= "form-group">
                            <label for= "status">Status:</label>
                            <select class= "form-control" id= "status" name= "status" input-label= "Status">
                                <option value= "" disabled selected>-- Select Civil Status --</option>
                                <option value= "single">Single</option>
                                <option value= "married">Married</option>
                                <option value= "widow">Widow</option>
                            </select>
                        </div>
                        <div class= "form-group">
                            <label for= "email" >Email:</label>
                            <input type= "email" class= "form-control" id= "email" name= "email" input-label= "Email" />
                        </div>
                        <div class= "form-group mb-5">
                            <label for= "password" >Password:</label>
                            <input type= "password" class= "form-control" id= "password" name= "password" input-label= "Password" />
                        </div>
                        <button type= "button" class= "btn btn-solid btn-success btn-block py-2" id= "validate">Validate without toast</button>
                        <button type= "button" class= "btn btn-solid btn-success btn-block py-2" id= "validate-toast">Validate with toast</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>