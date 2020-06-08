<div class= "px-3 mt-5 content" id= "mask-page">
    <h4>MASK INPUTS</h4>
    <hr>
    <p class= "mb-1">Masked inputs are use to set a specific format for your inputs. Here are some classes that you can use to put some format to your inputs depend on what data you want to get. I suggest that if you are using format classes to your inputs, make sure that the type of your input is set to "<span class= "text-danger">text</span>" becase some of the formats has a string value which is not compatible to input type "<span class= "text-danger">number</span>".</p>
    <p class= "mb-1">Also, remember that the default value of your masked input is the formatted one. To remove the format of the value of your input, use this javascript line of code: <b>$("<span class= "text-danger">id</span>").<span class= "text-primary">unmask</span>();</b>.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <form>
                <div class= 'table-responsive'>
                    <table class= "table table-bordered">
                        <thead>
                            <tr>
                                <th scope= "col">CLASSES</th>
                                <th scope= "col">TYPE</th>
                                <th scope= "col">MASKED INPUT</th>
                                <th scope= "col">MASKED VALUE</th>
                                <th scope= "col">UNMASKED VALUE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class= "text-danger">.credit-card</span></td>
                                <td>Credit Card</td>
                                <td><input type= "text" class= "form-control credit-card mask-input" id= "credit-card-sample"></td>
                                <td id= "credit-card-sample-masked"></td>
                                <td id= "credit-card-sample-unmasked"></td>
                            </tr>
                            <tr>
                                <td><span class= "text-danger">.cvv-cvc</span></td>
                                <td>CVV / CVC</td>
                                <td><input type= "text" class= "form-control cvv-cvc mask-input" id= "cvv-cvc-sample"></td>
                                <td id= "cvv-cvc-sample-masked"></td>
                                <td id= "cvv-cvc-sample-unmasked"></td>
                            </tr>
                            <tr>
                                <td><span class= "text-danger">.postal-code</span></td>
                                <td>Postal Code</td>
                                <td><input type= "text" class= "form-control postal-code mask-input" id= "postal-code-sample"></td>
                                <td id= "postal-code-sample-masked"></td>
                                <td id= "postal-code-sample-unmasked"></td>
                            </tr>
                            <tr>
                                <td><span class= "text-danger">.mobile-no</span></td>
                                <td>Mobile no. (Philippines)</td>
                                <td><input type= "text" class= "form-control mobile-no mask-input" id= "mobile-no-sample"></td>
                                <td id= "mobile-no-sample-masked"></td>
                                <td id= "mobile-no-sample-unmasked"></td>
                            </tr>
                            <tr>
                                <td><span class= "text-danger">.currency</span></td>
                                <td>Currency</td>
                                <td><input type= "text" class= "form-control currency mask-input" id= "currency-sample" currency-symbol= "$"></td>
                                <td id= "currency-sample-masked"></td>
                                <td id= "currency-sample-unmasked"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
        <div class= "col-lg-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">input</span> type= "<span class= "text-danger">text</span>" class= "<span class= "text-danger">form-control credit-card</span>" ></p>
            <p class= "mb-1">< <span class= "text-danger">input</span> type= "<span class= "text-danger">text</span>" class= "<span class= "text-danger">form-control cvv-cvc</span>" ></p>
            <p class= "mb-1">< <span class= "text-danger">input</span> type= "<span class= "text-danger">text</span>" class= "<span class= "text-danger">form-control postal-code</span>" ></p>
            <p class= "mb-1">< <span class= "text-danger">input</span> type= "<span class= "text-danger">text</span>" class= "<span class= "text-danger">form-control mobile-no</span>" ></p>
            <p class= "mb-1">< <span class= "text-danger">input</span> type= "<span class= "text-danger">text</span>" class= "<span class= "text-danger">form-control currency</span>" currency-symbol= "<span class= "text-danger">$</span>"</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
</div>