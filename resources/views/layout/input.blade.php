<div class= "p-4 my-5 mr-4 border rounded shadow-sm content" id= "input-page">
    <h4 class= "mb-5">INPUT FIELDS</h4>
    <div class= "row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">Basic Form Elements</div>
                <div class="card-body">
                    <form action="">
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
                            <input type= "number" class= "form-control"/>
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
            </div>
        </div>
        <div class="col-md-6">
            <div class= "card card-accent card-info mb-5">
                <div class= "card-body">
                    <p class= "card-title">Input Style</p>
                    <div class= "form-group">
                        <input type= "text" class= "form-control mb-3" placeholder= ".form-control">
                        <input type= "text" class= "form-control form-square mb-3" placeholder= ".form-control .form-square">
                        <input type= "text" class= "form-control form-pills" placeholder= ".form-control .form-pills">
                    </div>
                </div>
            </div>
            <div class= "card card-accent card-info mb-5">
                <div class= "card-body">
                    <p class="card-title">Input Validation</p>
                    <div class= "form-group">
                        <input type= "text" class= "form-control form-success mb-3" placeholder= ".form-success">
                        <input type= "text" class= "form-control form-warning mb-3" placeholder= ".form-warning">
                        <input type= "text" class= "form-control form-danger mb-3" placeholder= ".form-danger">
                        <input type= "text" class= "form-control form-info mb-3" placeholder= ".form-info">
                    </div>
                </div>
            </div>
        </div>
        <div class= "col-md-6">
            <div class= "card mb-5">
                <div class= "card-header">Form Validation</div>
                <div class= "card-body">
                    <form id= "validate_form">
                        <div class= "form-group">
                            <label for= "email">Email:</label>
                            <input type= "email" id= "email" class= "form-control"/>
                        </div>
                        <div class= "form-group">
                            <label for= "password">Password:</label>
                            <input type= "password" id= "password" class= "form-control"/>
                        </div>
                    </form>
                    <button type= "button" class= "btn btn-solid btn-square btn-primary btn-block mt-4" id= "validate">Login</button>
                </div>
            </div>
        </div>
    </div>
</div>