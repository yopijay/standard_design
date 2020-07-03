<div class= "px-3 mt-5 content" id= "login-page">
    <h4>LOGIN PAGES</h4>
    <hr>
    <div class= "card py-4 px-2 mb-5">
        <div class= "card-body">
            <form>
                <div class= "row">
                    <div class= "col-md-4 offset-md-4 col-sm-8 offset-sm-2 mb-5">
                        <img src= "{{ asset('img/man.png') }}" class= "img-fluid mx-auto d-block" style= "width: 170px; height: 170px;"/>
                    </div>
                    <div class= "col-md-4 offset-md-4 col-sm-8 offset-sm-2">
                        <div class="form-group">
                            <label for= "username" class= "float-left">Username:</label>
                            <input type= "text" class= "form-control form-pills" name= "username" id= "username"/>
                        </div>
                    </div>
                    <div class= "col-md-4 offset-md-4 col-sm-8 offset-sm-2">
                        <div class="form-group">
                            <label for= "password"  class= "float-left">Password:</label>
                            <input type= "password" class= "form-control form-pills" name= "password" id= "password"/>
                        </div>
                    </div>
                    <div class= "col-md-4 offset-md-4 col-sm-8 offset-sm-2">
                        <button class= "btn btn-solid btn-primary btn-pills btn-block">LOGIN</button>
                        <p class= "mt-1">Don`t have an account? <a href= "#" class= "text-primary">Register Here!</a></p>
                    </div>
                    <div class= "col-md-4 offset-md-4 col-sm-8 offset-sm-2 mt-2">
                        <hr>
                    </div>
                    <div class= "col-md-4 offset-md-4 col-sm-8 offset-sm-2">
                        <p>Sign in with:</p>
                        <button class= "btn facebook btn-brand mb-1 w-100"></button>
                        <button class= "btn googlePlus btn-brand mb-1 w-100"></button>
                    </div>
                </div>
            </form>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-login-1" copy-data= '<form><div class= "row"><div class= "col-md-4 offset-md-4 col-sm-8 offset-sm-2"><img src= "#" class= "img-fluid mx-auto d-block mb-5" style= "width: 170px; height: 170px;"/></div><div class= "col-md-4 offset-md-4 col-sm-8 offset-sm-2"><div class="form-group"><label for= "username" class= "float-left">Username:</label><input type= "text" class= "form-control form-pills" name= "username" id= "username"/></div></div><div class= "col-md-4 offset-md-4 col-sm-8 offset-sm-2"><div class="form-group"><label for= "password"  class= "float-left">Password:</label><input type= "password" class= "form-control form-pills" name= "password" id= "password"/></div></div><div class= "col-md-4 offset-md-4 col-sm-8 offset-sm-2"><button class= "btn btn-solid btn-primary btn-pills btn-block">LOGIN</button><p class= "mt-1">Don`t have an account? <a href= "#" class= "text-primary">Register Here!</a></p></div><div class= "col-md-4 offset-md-4 col-sm-8 offset-sm-2 mt-2"><hr></div><div class= "col-md-4 offset-md-4 col-sm-8 offset-sm-2"><p>Sign in with:</p><button class= "btn facebook btn-brand mb-1 w-100"></button><button class= "btn googlePlus btn-brand mb-1 w-100"></button></div></div></form>'>COPY</button>
        </div>
    </div>
    <div class= "card px-2 py-5 mb-5">
        <div class= "card-body">
            <div class= "row">
                <div class= "card col-md-6 offset-md-3 py-5">
                    <div class= "card-body">
                        <form>
                            <div class= "row">
                                <div class= "col-md-8 offset-md-2 mb-5 col-sm-10 offset-sm-1">
                                    <img src= "{{ asset('img/man.png') }}" class= "img-fluid mx-auto d-block" style= "width: 150px; height: 150px;"/>
                                </div>
                                <div class= "col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                                    <div class="form-group">
                                        <label for= "username" class= "float-left">Username:</label>
                                        <input type= "text" class= "form-control form-pills" name= "username" id= "username"/>
                                    </div>
                                </div>
                                <div class= "col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                                    <div class="form-group">
                                        <label for= "password"  class= "float-left">Password:</label>
                                        <input type= "password" class= "form-control form-pills" name= "password" id= "password"/>
                                    </div>
                                </div>
                                <div class= "col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                                    <button class= "btn btn-solid btn-primary btn-pills btn-block">LOGIN</button>
                                    <p class= "mt-1">Don`t have an account? <a href= "#" class= "text-primary">Register Here!</a></p>
                                </div>
                                <div class= "col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                                    <hr>
                                </div>
                                <div class= "col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                                    <p>Sign in with:</p>
                                    <button class= "btn facebook btn-brand mb-1 w-100"></button>
                                    <button class= "btn googlePlus btn-brand mb-1 w-100"></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-login-2" copy-data= '<div class= "row"><div class= "card col-md-6 offset-md-3 py-5"><div class= "card-body"><form><div class= "row"><div class= "col-md-8 offset-md-2 mb-5 col-sm-10 offset-sm-1"><img src= "#" class= "img-fluid mx-auto d-block" style= "width: 150px; height: 150px;"/></div><div class= "col-md-8 offset-md-2 col-sm-10 offset-sm-1"><div class="form-group"><label for= "username" class= "float-left">Username:</label><input type= "text" class= "form-control form-pills" name= "username" id= "username"/></div></div><div class= "col-md-8 offset-md-2 col-sm-10 offset-sm-1"><div class="form-group"><label for= "password"  class= "float-left">Password:</label><input type= "password" class= "form-control form-pills" name= "password" id= "password"/></div></div><div class= "col-md-8 offset-md-2 col-sm-10 offset-sm-1"><button class= "btn btn-solid btn-primary btn-pills btn-block">LOGIN</button><p class= "mt-1">Don`t have an account? <a href= "#" class= "text-primary">Register Here!</a></p></div><div class= "col-md-8 offset-md-2 col-sm-10 offset-sm-1"><hr></div><div class= "col-md-8 offset-md-2 col-sm-10 offset-sm-1"><p>Sign in with:</p><button class= "btn facebook btn-brand mb-1 w-100"></button><button class= "btn googlePlus btn-brand mb-1 w-100"></button></div></div></form></div></div></div>'>COPY</button>
        </div>
    </div>
    <div class= "card px-2 py-5 mb-5">
        <div class= "row">
            <div class= "card col-md-8 offset-md-2" style= "height: 450px;">
                <div class= "row">
                    <div class= "col-md-6 agm-bg-info vh-100 py-5">
                        <div class= "row">
                            <div class= "col-md-8 offset-md-2">
                                <img src= "{{ asset('img/man.png') }}" class= "img-fluid mx-auto d-block mt-5" style= "width: 150px; height: 150px;"/>
                            </div>
                            <div class= "col-md-8 offset-md-2">
                                <p class= "text-white mt-5 text-center">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                                <hr class= "agm-bg-white">
                            </div>
                        </div>
                    </div>
                    <div class= "col-md-6 pt-5">
                        <div class= "row">
                            <div class= "col-12 mt-4">
                                <h3 class= "agm-text-info ml-3">LOGIN</h3>
                            </div>
                            <div class= "col-12 mt-5">
                                <div class="form-group mx-3">
                                    <label for= "username" class= "float-left">Username:</label>
                                    <input type= "text" class= "form-control form-pills" name= "username" id= "username"/>
                                </div>
                            </div>
                            <div class= "col-12">
                                <div class="form-group mx-3">
                                    <label for= "password"  class= "float-left">Password:</label>
                                    <input type= "password" class= "form-control form-pills" name= "password" id= "password"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>