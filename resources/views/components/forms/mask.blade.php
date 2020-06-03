<div class= "px-3 mt-5 content" id= "mask-page">
    <h4>MASK INPUTS</h4>
    <hr>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <form>
                <div class= 'table-responsive'>
                    <table class= "table table-bordered">
                        <thead>
                            <tr>
                                <th scope= "col">TYPE</th>
                                <th scope= "col">MASKED INPUT</th>
                                <th scope= "col">MASKED VALUE</th>
                                <th scope= "col">UNMASKED VALUE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Credit Card</td>
                                <td><input type= "text" class= "form-control credit-card mask-input" placeholder= "0000 0000 0000 0000" id= "credit-card-sample"></td>
                                <td id= "credit-card-sample-masked"></td>
                                <td id= "credit-card-sample-unmasked"></td>
                            </tr>
                            <tr>
                                <td>CVV / CVC</td>
                                <td><input type= "text" class= "form-control cvv-cvc mask-input" placeholder= "000" id= "cvv-cvc-sample"></td>
                                <td id= "cvv-cvc-sample-masked"></td>
                                <td id= "cvv-cvc-sample-unmasked"></td>
                            </tr>
                            <tr>
                                <td>Postal Code</td>
                                <td><input type= "text" class= "form-control postal-code mask-input" placeholder= "0000" id= "postal-code-sample"></td>
                                <td id= "postal-code-sample-masked"></td>
                                <td id= "postal-code-sample-unmasked"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
        <div class= "col-lg-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
</div>