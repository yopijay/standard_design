<div class= "px-3 mt-5 content" id= "layout-page">
    <h4>LAYOUT</h4>
    <p class= "mb-1">Since AGM applies <span class= "text-danger">display: block</span> and <span class= "text-danger">width: 100%</span> to almost all our form controls, forms will by default stack vertically. Additional classes can be used to vary this layout on a per-form basis.</p>
    <hr>
    <p class= "text-info mb-1 h5">FORM GROUPS</p>
    <p class= "mb-1">The <span class= "text-danger">.form-group</span> class is the easiest way to add some structure to forms. It provides a flexible class that encourages proper grouping of labels, controls, optional help text, and form validation messaging. By default it only applies <span class= "text-danger">margin-bottom</span>, but it picks up additional styles in <span class= "text-danger">.form-inline</span> as needed. Use it with < <span class= "text-danger">fieldset</span> >s, < <span class= "text-danger">div</span> >s, or nearly any other element.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Example label</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Another label</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                </div>
            </form>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">form</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-group</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">...</span>" >Example label< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">form-control</span>" id= "<span class= "text-danger">...</span>" placeholder= "<span class= "text-danger">...</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/form</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">FORM GRID</p>
    <p class= "mb-1">More complex forms can be built using our grid classes. Use these for form layouts that require multiple columns, varied widths, and additional alignment options.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <form>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                </div>
            </form>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">form</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">row</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">col</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">form-control</span>" placeholder= "<span class= "text-danger">...</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">col</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">form-control</span>" placeholder= "<span class= "text-danger">...</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/form</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">FORM ROW</p>
    <p class= "mb-1">You may also swap <span class= "text-danger">.row</span> for <span class= "text-danger">.form-row</span>, a variation of our standard grid row that overrides the default column gutters for tighter and more compact layouts.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <form>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                </div>
            </form>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">form</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-row</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">col</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">form-control</span>" placeholder= "<span class= "text-danger">...</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">col</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">form-control</span>" placeholder= "<span class= "text-danger">...</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/form</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "mb-1">More complex layouts can also be created with the grid system.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-12 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <form>
                <div class= "form-row">
                    <div class= "form-group col-md-6">
                        <label for= "email">Email</label>
                        <input type= "email" id= "email" name= "email" class= "form-control">
                    </div>
                    <div class= "form-group col-md-6">
                        <label for= "address">Password</label>
                        <input type= "password" id= "password" name= "password" class= "form-control">
                    </div>
                </div>
                <div class= "form-group">
                    <label for= "curaddress">Current Address</label>
                    <input type= "text" id= "curaddress" name= "curaddress" class= "form-control">
                </div>
                <div class= "form-row">
                    <div class= "form-group col-md-4">
                        <label for= "bmonth">Birthdate</label>
                        <select name= "bmonth" id= "bmonth" class= "form-control">
                            <option value= "" selected disabled>-- Select Month --</option>
                            <option value= "1">Jan</option>
                            <option value= "2">Feb</option>
                            <option value= "3">Mar</option>
                            <option value= "4">Apr</option>
                            <option value= "5">May</option>
                            <option value= "6">June</option>
                            <option value= "7">Jul</option>
                            <option value= "8">Aug</option>
                            <option value= "9">Sep</option>
                            <option value= "10">Oct</option>
                            <option value= "11">Nov</option>
                            <option value= "12">Dec</option>
                        </select>
                    </div>
                    <div class= "form-group col-md-4">
                        <label for= "bday"></label>
                        <select name= "bday" id= "bday" class= "form-control">
                            <option value= "" selected disabled>-- Select Day --</option>
                            <option value= "1">1</option>
                            <option value= "2">2</option>
                            <option value= "3">3</option>
                            <option value= "4">4</option>
                            <option value= "5">5</option>
                            <option value= "6">6</option>
                            <option value= "7">7</option>
                            <option value= "8">8</option>
                            <option value= "9">9</option>
                            <option value= "10">10</option>
                            <option value= "11">11</option>
                            <option value= "12">12</option>
                        </select>
                    </div>
                    <div class= "form-group col-md-4">
                        <label for= "byear"></label>
                        <select name= "byear" id= "byear" class= "form-control">
                            <option value= "" selected disabled>-- Select Year --</option>
                            <option value= "1991">1991</option>
                            <option value= "1992">1992</option>
                            <option value= "1993">1993</option>
                            <option value= "1994">1994</option>
                            <option value= "1995">1995</option>
                            <option value= "1996">1996</option>
                            <option value= "1997">1997</option>
                            <option value= "1998">1998</option>
                            <option value= "1999">1999</option>
                            <option value= "2000">2000</option>
                            <option value= "2001">2001</option>
                            <option value= "2002">2002</option>
                        </select>
                    </div>
                </div>
                <div class= "form-group">
                    <label for= "gender" class= "mb-2">Gender</label>
                    <div class= "form-radio">
                        <input type= "radio" id= "male" name= "gender" value= "male">
                        <span></span>
                        <label for= "male">Male</label>
                    </div>
                    <div class= "form-radio">
                        <input type= "radio" id= "female" name= "gender" value= "female">
                        <span></span>
                        <label for= "female">Female</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <p class= "text-info mb-1 h5">HORIZONTAL FORM</p>
    <p class= "mb-3">Create horizontal forms with the grid by adding the <span class= "text-danger">.row</span> class to form groups and using the <span class= "text-danger">.col-*-*</span> classes to specify the width of your labels and controls. Be sure to add <span class= "text-danger">.col-form-label</span> to your < <span class= "text-danger">label</span> >s as well so they’re vertically centered with their associated form controls.</p>
    <p class= "mb-1">At times, you maybe need to use margin or padding utilities to create that perfect alignment you need. For example, we’ve removed the <span class= "text-danger">padding-top</span> on our stacked radio inputs label to better align the text baseline.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <form>
                <div class= "form-group row">
                    <label for= "email" class= "col-md-2 col-form-label">Email</label>
                    <div class= "col-md-10">
                        <input type= "email" class= "form-control" id= "email">
                    </div>
                </div>
                <div class= "form-group row">
                    <label for= "password" class= "col-md-2 col-form-label">Password</label>
                    <div class= "col-md-10">
                        <input type= "password" class= "form-control" id= "password">
                    </div>
                </div>
                <div class= "form-group row">
                    <label for= "gender1" class= "col-md-2 col-form-label">Gender</label>
                    <div class= "col-md-10 mt-2">
                        <div class= "form-radio">
                            <input type= "radio" id= "male1" name= "gender1" value= "male">
                            <span></span>
                            <label for= "male1">Male</label>
                        </div>
                        <div class= "form-radio">
                            <input type= "radio" id= "female1" name= "gender1" value= "female">
                            <span></span>
                            <label for= "female1">Female</label>
                        </div>
                    </div>
                </div>
                <div class= "form-group row">
                    <label for= "check" class= "col-md-2 col-form-label">Check</label>
                    <div class= "col-md-10">
                        <div class= "form-checkbox checkbox-default">
                            <input type= "checkbox" id= "checkbox1">
                            <label for= "checkbox1">
                                <i class= "fas fa-check align-middle"></i>
                                <p>Just check it</p>
                            </label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">form</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">form-group row</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">label</span> for= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">col-md-2 col-form-label</span>" >Email< <span class= "text-danger">/label</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">col-md-10</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">input</span> type= "<span class= "text-danger">...</span>" class= "<span class= "text-danger">form-control</span>" placeholder= "<span class= "text-danger">...</span>" id= "<span class= "text-danger">...</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/form</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">CUSTOM FORMS</p>
    <div class= "row my-3">
        <div class= "col-lg-6 mb-3 col-12">
            <div class= "card">
                <div class= "card-header">Credit Card Form</div>
                <div class= "card-body">
                    <form>
                        <div class= "form-group">
                            <label for= "fullname">Name:</label>
                            <input type= "text" class= "form-control" id= "fullname" name= "fullname" placeholder= "Full name">
                        </div>
                        <div class= "form-group">
                            <label for= "creditcard">Credit card number:</label>
                            <input type= "text" class= "form-control credit-card" id= "creditcard" name= "creditcard">
                        </div>
                        <div class= "form-row">
                            <div class= "form-group col-4">
                                <label for= "ccmonth">Month:</label>
                                <select class= "form-control" id= "ccmonth" name= "ccmonth">
                                    <option value= "1">Jan</option>
                                    <option value= "2">Feb</option>
                                    <option value= "3">Mar</option>
                                    <option value= "4">Apr</option>
                                    <option value= "5">May</option>
                                    <option value= "6">Jun</option>
                                    <option value= "7">Jul</option>
                                    <option value= "8">Aug</option>
                                    <option value= "9">Sep</option>
                                    <option value= "10">Oct</option>
                                    <option value= "11">Nov</option>
                                    <option value= "12">Dec</option>
                                </select>
                            </div>
                            <div class= "form-group col-4">
                                <label for= "ccyear">Year:</label>
                                <select class= "form-control" id= "ccyear" name= "ccyear">
                                    <option value= "2011">2011</option>
                                    <option value= "2012">2012</option>
                                    <option value= "2013">2013</option>
                                    <option value= "2014">2014</option>
                                    <option value= "2015">2015</option>
                                    <option value= "2016">2016</option>
                                    <option value= "2017">2017</option>
                                    <option value= "2018">2018</option>
                                    <option value= "2019">2019</option>
                                    <option value= "2020">2020</option>
                                    <option value= "2021">2021</option>
                                    <option value= "2022">2022</option>
                                </select>
                            </div>
                            <div class= "form-group col-4">
                                <label for= "cvvcvc">CVV/CVC:</label>
                                <input type= "text" class= "form-control cvv-cvc" id= "cvvcvc" name= "cvvcvc">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class= "col-lg-6 mb-3 col-12">
            <div class= "card">
                <div class= "card-header">Company Form</div>
                <div class= "card-body">
                    <form>
                        <div class= "form-group">
                            <label for= "companyname">Company name:</label>
                            <input type= "text" class= "form-control" id= "companyname" name= "companyname">
                        </div>
                        <div class= "form-group">
                            <label for= "vat">VAT:</label>
                            <input type= "text" class= "form-control" id= "vat" name= "vat">
                        </div>
                        <div class= "form-group">
                            <label for= "street">Street:</label>
                            <input type= "text" class= "form-control" id= "street" name= "street">
                        </div>
                        <div class= "form-row">
                            <div class= "form-group col-8">
                                <label for= "city">City:</label>
                                <input type= "text" class= "form-control" id= "city" name= "city">
                            </div>
                            <div class= "form-group col-4">
                                <label for= "postalcode">Postal code:</label>
                                <input type= "text" class= "form-control postal-code" id= "postalcode" name= "postalcode">
                            </div>
                        </div>
                        <div class= "form-group">
                            <label for= "country">Country name:</label>
                            <input type= "text" class= "form-control" id= "country" name= "country">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class= "col-lg-5 mb-3 col-12">
            <div class= "card">
                <div class= "card-header">Login Form</div>
                <div class= "card-body">
                    <form>
                        <div class= "form-group">
                            <label for= "username">Username:</label>
                            <input type= "text" class= "form-control" id= "username" name= "username">
                        </div>
                        <div class= "form-group">
                            <label for= "password">Password:</label>
                            <input type= "text" class= "form-control" id= "password" name= "password">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class= "col-lg-7 mb-3 col-12">
            <div class= "card">
                <div class= "card-header">Registration Form</div>
                <div class= "card-body">
                    <h5 class= "card-title">Personal Information</h5>
                    <div class= "form-row">
                        <div class= "form-group col-4">
                            <label for= "fname">First name:</label>
                            <input type= "text" class= "form-control" id= "fname" name= "fname">
                        </div>
                        <div class= "form-group col-4">
                            <label for= "mname">Middle name:</label>
                            <input type= "text" class= "form-control" id= "mname" name= "mname">
                        </div>
                        <div class= "form-group col-4">
                            <label for= "lname">Last name:</label>
                            <input type= "text" class= "form-control" id= "lname" name= "lname">
                        </div>
                    </div>
                    <div class= "form-group">
                        <label for= "address">Address:</label>
                        <input type= "text" class= "form-control" id= "address" name= "address">
                    </div>
                    <h5 class= "card-title mt-5">Account Information</h5>
                    <div class= "form-group">
                        <label for= "email">Email:</label>
                        <input type= "text" class= "form-control" id= "email" name= "email">
                    </div>
                    <div class= "form-group">
                        <label for= "username">Username:</label>
                        <input type= "text" class= "form-control" id= "username" name= "username">
                    </div>
                    <div class= "form-group">
                        <label for= "password">Password:</label>
                        <input type= "password" class= "form-control" id= "password" name= "password">
                    </div>
                    <div class= "form-group">
                        <label for= "cpassword">Confirm password:</label>
                        <input type= "password" class= "form-control" id= "cpassword" name= "cpassword">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>