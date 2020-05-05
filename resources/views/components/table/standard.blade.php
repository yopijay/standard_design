<div class= "p-4 mt-4 mr-4 content" id= "standard-tbl-page">
    <h4>STANDARD TABLE</h4>
    <hr>
    <p class= "text-info mb-1 h5">SIMPLE TABLE</p>
    <p class= "mb-1">Just add the base class <span class= "text-danger">.table</span> to any <span class= "text-danger">< table ></span>, then extend with custom styles or various included modifier classes.</p>
    <p class= "mb-4">You can also invert the colors—with light text on dark backgrounds—with <span class= "text-danger">.table-dark</span>.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6">
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
        <div class= "col-md-6">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< table  class= "<span class= "text-danger">table</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< thead ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /thead ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< tbody ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /tbody ></p>
            <p class= "mb-1">< /table ></p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">TABLE HEAD OPTIONS</p>
    <p class= "mb-4">Similar to tables and dark tables, use the modifier classes <span class= "text-danger">.thead-light</span> or <span class= "text-danger">.thead-dark</span> to make <span class= "text-danger">< thead ></span>s appear light or dark gray.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6">
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
        <div class= "col-md-6">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< table  class= "<span class= "text-danger">table</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< thead class= "<span class= "text-danger">thead-light</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /thead ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< tbody ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /tbody ></p>
            <p class= "mb-1">< /table ></p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">STRIPPED TABLE</p>
    <p class= "mb-4">Use <span class= "text-danger">.table-striped</span> to add zebra-striping to any table row within the <span class= "text-danger">< tbody ></span>.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6">
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
        <div class= "col-md-6">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< table  class= "<span class= "text-danger">table table-striped</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< thead ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /thead ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< tbody ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /tbody ></p>
            <p class= "mb-1">< /table ></p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">BORDERED TABLE</p>
    <p class= "mb-4">Add <span class= "text-danger">.table-bordered</span> for borders on all sides of the table and cells.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6">
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
        <div class= "col-md-6">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< table  class= "<span class= "text-danger">table table-bordered</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< thead ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /thead ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< tbody ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /tbody ></p>
            <p class= "mb-1">< /table ></p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">BORDERLESS TABLE</p>
    <p class= "mb-4">Add <span class= "text-danger">.table-borderless</span> for a table without borders.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6">
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
        <div class= "col-md-6">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< table  class= "<span class= "text-danger">table table-borderless</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< thead ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /thead ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< tbody ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /tbody ></p>
            <p class= "mb-1">< /table ></p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">HOVERABLE ROWS</p>
    <p class= "mb-4">Add <span class= "text-danger">.table-hover</span> to enable a hover state on table rows within a <span class= "text-danger">< tbody ></span>.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6">
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
        <div class= "col-md-6">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< table  class= "<span class= "text-danger">table table-hover</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< thead ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< th scope= "<span class= "text-danger">col</span>" >..< /th ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /thead ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< tbody ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< td >...< /td ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< /tr ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< /tbody ></p>
            <p class= "mb-1">< /table ></p>
        </div>
    </div>
</table>