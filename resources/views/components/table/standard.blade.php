<div class= "px-3 mt-5 content" id= "standard-tbl-page">
    <h4>STANDARD TABLE</h4>
    <hr>
    <p class= "text-info mb-1 h5">SIMPLE TABLE</p>
    <p class= "mb-1">Just add the base class <span class= "text-danger">.table</span> to any <span class= "text-danger">< table ></span>, then extend with custom styles or various included modifier classes.</p>
    <p class= "mb-4">You can also invert the colors—with light text on dark backgrounds—with <span class= "text-danger">.table-dark</span>.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <table class="table mb-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><p class= "agm-badge-success mb-1">Success</p></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td><p class= "agm-badge-danger mb-1">Danger</p></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td><p class= "agm-badge-warning mb-1">Warning</p></td>
                    </tr>
                </tbody>
            </table>
            <table class="table mb-5 table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><p class= "agm-badge-success mb-1">Success</p></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td><p class= "agm-badge-danger mb-1">Danger</p></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td><p class= "agm-badge-warning mb-1">Warning</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">table</span>  class= "<span class= "text-danger">table</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">thead</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/thead</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">tbody</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/tbody</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/table</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-tbl-1" copy-data= '<table class= "table"><thead><tr><th scope= "col">..</th><th scope= "col">..</th><th scope= "col">..</th><th scope= "col">..</th></tr></thead><tbody><tr><td>...</td><td>...</td><td>...</td><td>...</td></tr></tbody></table>'>COPY</button>
        </div>
    </div>
    <p class= "text-info mb-1 h5">TABLE HEAD OPTIONS</p>
    <p class= "mb-4">Similar to tables and dark tables, use the modifier classes <span class= "text-danger">.thead-light</span> or <span class= "text-danger">.thead-dark</span> to make <span class= "text-danger">< thead ></span>s appear light or dark gray.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <table class="table mb-5">
                <thead class= "thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><p class= "agm-badge-success mb-1">Success</p></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td><p class= "agm-badge-danger mb-1">Danger</p></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td><p class= "agm-badge-warning mb-1">Warning</p></td>
                    </tr>
                </tbody>
            </table>
            <table class="table">
                <thead class= "thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><p class= "agm-badge-success mb-1">Success</p></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td><p class= "agm-badge-danger mb-1">Danger</p></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td><p class= "agm-badge-warning mb-1">Warning</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">table</span>  class= "<span class= "text-danger">table</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">thead</span> class= "<span class= "text-danger">thead-light</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/thead</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">tbody</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/tbody</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/table</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-tbl-2" copy-data= '<table class= "table"><thead class= "thead-light"><tr><th scope= "col">..</th><th scope= "col">..</th><th scope= "col">..</th><th scope= "col">..</th></tr></thead><tbody><tr><td>...</td><td>...</td><td>...</td><td>...</td></tr></tbody></table>'>COPY</button>
        </div>
    </div>
    <p class= "text-info mb-1 h5">STRIPPED TABLE</p>
    <p class= "mb-4">Use <span class= "text-danger">.table-striped</span> to add zebra-striping to any table row within the <span class= "text-danger">< tbody ></span>.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <table class="table mb-5 table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><p class= "agm-badge-success mb-1">Success</p></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td><p class= "agm-badge-danger mb-1">Danger</p></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td><p class= "agm-badge-warning mb-1">Warning</p></td>
                    </tr>
                </tbody>
            </table>
            <table class="table mb-5 table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><p class= "agm-badge-success mb-1">Success</p></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td><p class= "agm-badge-danger mb-1">Danger</p></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td><p class= "agm-badge-warning mb-1">Warning</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">table</span>  class= "<span class= "text-danger">table table-striped</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">thead</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/thead</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">tbody</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/tbody</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/table</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-tbl-3" copy-data= '<table class= "table table-striped"><thead><tr><th scope= "col">..</th><th scope= "col">..</th><th scope= "col">..</th><th scope= "col">..</th></tr></thead><tbody><tr><td>...</td><td>...</td><td>...</td><td>...</td></tr></tbody></table>'>COPY</button>
        </div>
    </div>
    <p class= "text-info mb-1 h5">BORDERED TABLE</p>
    <p class= "mb-4">Add <span class= "text-danger">.table-bordered</span> for borders on all sides of the table and cells.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <table class="table mb-5 table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><p class= "agm-badge-success mb-1">Success</p></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td><p class= "agm-badge-danger mb-1">Danger</p></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td><p class= "agm-badge-warning mb-1">Warning</p></td>
                    </tr>
                </tbody>
            </table>
            <table class="table mb-5 table-dark table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><p class= "agm-badge-success mb-1">Success</p></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td><p class= "agm-badge-danger mb-1">Danger</p></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td><p class= "agm-badge-warning mb-1">Warning</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">table</span>  class= "<span class= "text-danger">table table-bordered</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">thead</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/thead</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">tbody</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/tbody</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/table</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-tbl-4" copy-data= '<table class= "table table-bordered"><thead><tr><th scope= "col">..</th><th scope= "col">..</th><th scope= "col">..</th><th scope= "col">..</th></tr></thead><tbody><tr><td>...</td><td>...</td><td>...</td><td>...</td></tr></tbody></table>'>COPY</button>
        </div>
    </div>
    <p class= "text-info mb-1 h5">BORDERLESS TABLE</p>
    <p class= "mb-4">Add <span class= "text-danger">.table-borderless</span> for a table without borders.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <table class="table mb-5 table-borderless">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><p class= "agm-badge-success mb-1">Success</p></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td><p class= "agm-badge-danger mb-1">Danger</p></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td><p class= "agm-badge-warning mb-1">Warning</p></td>
                    </tr>
                </tbody>
            </table>
            <table class="table mb-5 table-dark table-borderless">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><p class= "agm-badge-success mb-1">Success</p></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td><p class= "agm-badge-danger mb-1">Danger</p></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td><p class= "agm-badge-warning mb-1">Warning</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">table</span>  class= "<span class= "text-danger">table table-borderless</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">thead</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/thead</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">tbody</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/tbody</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/table</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-tbl-5" copy-data= '<table class= "table table-borderless"><thead><tr><th scope= "col">..</th><th scope= "col">..</th><th scope= "col">..</th><th scope= "col">..</th></tr></thead><tbody><tr><td>...</td><td>...</td><td>...</td><td>...</td></tr></tbody></table>'>COPY</button>
        </div>
    </div>
    <p class= "text-info mb-1 h5">HOVERABLE ROWS</p>
    <p class= "mb-4">Add <span class= "text-danger">.table-hover</span> to enable a hover state on table rows within a <span class= "text-danger">< tbody ></span>.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 py-3 agm-bg-light rounded col-12">
            <p class= "text-info mb-3 h5">Preview:</p>
            <table class="table mb-5 table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><p class= "agm-badge-success mb-1">Success</p></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td><p class= "agm-badge-danger mb-1">Danger</p></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td><p class= "agm-badge-warning mb-1">Warning</p></td>
                    </tr>
                </tbody>
            </table>
            <table class="table mb-5 table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><p class= "agm-badge-success mb-1">Success</p></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td><p class= "agm-badge-danger mb-1">Danger</p></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td><p class= "agm-badge-warning mb-1">Warning</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">table</span>  class= "<span class= "text-danger">table table-hover</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">thead</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">th</span> scope= "<span class= "text-danger">col</span>" >..< <span class= "text-danger">/th</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/thead</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">tbody</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">td</span> >...< <span class= "text-danger">/td</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/tr</span> ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">/tbody</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/table</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-tbl-6" copy-data= '<table class= "table table-hover"><thead><tr><th scope= "col">..</th><th scope= "col">..</th><th scope= "col">..</th><th scope= "col">..</th></tr></thead><tbody><tr><td>...</td><td>...</td><td>...</td><td>...</td></tr></tbody></table>'>COPY</button>
        </div>
    </div>
</div>