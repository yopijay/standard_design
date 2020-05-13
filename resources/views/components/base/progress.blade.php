<div class= "p-4 mt-4 mr-4 content" id= "progress-page">
    <h4>PROGRESS</h4>
    <p class= "mb-1">Documentation and examples for using AGM custom progress bars featuring support for stacked bars, animated backgrounds, and text labels.</p>
    <hr>
    <div class= "row my-3">
        <div class= "col-md-6 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "progress mb-2">
                <div class= "progress-bar" role= "progressbar" aria-valuenow= "0" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
            <div class= "progress mb-2">
                <div class= "progress-bar" role= "progressbar" style="width: 25%" aria-valuenow= "25" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
            <div class= "progress mb-2">
                <div class= "progress-bar" role= "progressbar" style="width: 50%" aria-valuenow= "50" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
            <div class= "progress mb-2">
                <div class= "progress-bar" role= "progressbar" style="width: 75%" aria-valuenow= "75" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
            <div class= "progress mb-2">
                <div class= "progress-bar" role= "progressbar" style="width: 100%" aria-valuenow= "100" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress-bar</span>" role= "<span class= "text-danger">progressbar</span>" aria-valuenow= "<span class= "text-danger">0</span>" aria-valuemin= "<span class= "text-danger">0</span>" aria-valuemax= "<span class= "text-danger">100</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress-bar</span>" role= "<span class= "text-danger">progressbar</span>" style="<span class= "text-danger">width: 25%</span>" aria-valuenow= "<span class= "text-danger">25</span>" aria-valuemin= "<span class= "text-danger">0</span>" aria-valuemax= "<span class= "text-danger">100</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress-bar</span>" role= "<span class= "text-danger">progressbar</span>" style="<span class= "text-danger">width: 50%</span>" aria-valuenow= "<span class= "text-danger">50</span>" aria-valuemin= "<span class= "text-danger">0</span>" aria-valuemax= "<span class= "text-danger">100</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress-bar</span>" role= "<span class= "text-danger">progressbar</span>" style="<span class= "text-danger">width: 75%</span>" aria-valuenow= "<span class= "text-danger">75</span>" aria-valuemin= "<span class= "text-danger">0</span>" aria-valuemax= "<span class= "text-danger">100</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress-bar</span>" role= "<span class= "text-danger">progressbar</span>" style="<span class= "text-danger">width: 100%</span>" aria-valuenow= "<span class= "text-danger">100</span>" aria-valuemin= "<span class= "text-danger">0</span>" aria-valuemax= "<span class= "text-danger">100</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "mb-1">Bootstrap provides a handful of utilities for setting width. Depending on your needs, these may help with quickly configuring progress.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "progress">
                <div class= "progress-bar w-75" role= "progressbar" aria-valuenow= "75" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress-bar w-75</span>" role= "<span class= "text-danger">progressbar</span>" aria-valuenow= "<span class= "text-danger">75</span>" aria-valuemin= "<span class= "text-danger">0</span>" aria-valuemax= "<span class= "text-danger">100</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">LABELS</p>
    <p class= "mb-1">Add labels to your progress bars by placing text within the <span class= "text-danger">.progress-bar</span>.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "progress">
                <div class= "progress-bar" role= "progressbar" style= "width: 25%;" aria-valuenow= "25" aria-valuemin= "0" aria-valuemax= "100">25%</div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress-bar</span>" role= "<span class= "text-danger">progressbar</span>" style= "<span class= "text-danger">width: 25%;</span>" aria-valuenow= "<span class= "text-danger">25</span>" aria-valuemin= "<span class= "text-danger">0</span>" aria-valuemax= "<span class= "text-danger">100</span>" >25%< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">HEIGHT</p>
    <p class= "mb-1">We only set a <span class= "text-danger">height</span> value on the <span class= "text-danger">.progress</span>, so if you change that value the inner <span class= "text-danger">.progress-bar</span> will automatically resize accordingly.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class="progress mb-2" style="height: 1px;">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mb-2" style="height: 20px;">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress</span>" style= "<span class= "text-danger">height: 1px;</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress-bar</span>" role= "<span class= "text-danger">progressbar</span>" style= "<span class= "text-danger">width: 25%;</span>" aria-valuenow= "<span class= "text-danger">25</span>" aria-valuemin= "<span class= "text-danger">0</span>" aria-valuemax= "<span class= "text-danger">100</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress</span>" style= "<span class= "text-danger">height: 20px;</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress-bar</span>" role= "<span class= "text-danger">progressbar</span>" style= "<span class= "text-danger">width: 25%;</span>" aria-valuenow= "<span class= "text-danger">25</span>" aria-valuemin= "<span class= "text-danger">0</span>" aria-valuemax= "<span class= "text-danger">100</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">STYLES</p>
    <p class= "mb-1">Just add <span class= "text-danger">.progressbar-square</span> to make the progressbar 0 radius or <span class= "text-danger">.progressbar-pill</span> to make progressbar more rounded.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "progress progressbar-square mb-2">
                <div class= "progress-bar" role= "progressbar" style="width: 25%" aria-valuenow= "25" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
            <div class= "progress progressbar-pill mb-2">
                <div class= "progress-bar" role= "progressbar" style="width: 25%" aria-valuenow= "25" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress progressbar-square</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress-bar</span>" role= "<span class= "text-danger">progressbar</span>" style= "<span class= "text-danger">width: 25%</span>" aria-valuenow= "<span class= "text-danger">25</span>" aria-valuemin= "<span class= "text-danger">0</span>" aria-valuemax= "<span class= "text-danger">100</span>" ><<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress progressbar-pill</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress-bar</span>" role= "<span class= "text-danger">progressbar</span>" style= "<span class= "text-danger">width: 25%</span>" aria-valuenow= "<span class= "text-danger">25</span>" aria-valuemin= "<span class= "text-danger">0</span>" aria-valuemax= "<span class= "text-danger">100</span>" ><<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">BACKGROUND</p>
    <p class= "mb-1">Use <span class= "text-danger">.progressbar-* { primary | secondary | success | warning | danger | info | dark }</span> to change the background color of your progressbar.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "progress mb-2">
                <div class= "progress-bar progressbar-primary" role= "progressbar" style="width: 25%" aria-valuenow= "25" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
            <div class= "progress mb-2">
                <div class= "progress-bar progressbar-secondary" role= "progressbar" style="width: 30%" aria-valuenow= "30" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
            <div class= "progress mb-2">
                <div class= "progress-bar progressbar-success" role= "progressbar" style="width: 35%" aria-valuenow= "35" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
            <div class= "progress mb-2">
                <div class= "progress-bar progressbar-warning" role= "progressbar" style="width: 40%" aria-valuenow= "40" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
            <div class= "progress mb-2">
                <div class= "progress-bar progressbar-danger" role= "progressbar" style="width: 45%" aria-valuenow= "45" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
            <div class= "progress mb-2">
                <div class= "progress-bar progressbar-info" role= "progressbar" style="width: 45%" aria-valuenow= "45" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
            <div class= "progress mb-2">
                <div class= "progress-bar progressbar-dark" role= "progressbar" style="width: 50%" aria-valuenow= "50" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress-bar progressbar-primary</span>" role= "<span class= "text-danger">progressbar</span>" style= "<span class= "text-danger">width: 25%</span>" aria-valuenow= "<span class= "text-danger">25</span>" aria-valuemin= "<span class= "text-danger">0</span>" aria-valuemax= "<span class= "text-danger">100</span>" ><<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">MULTIPLE BARS</p>
    <p class= "mb-1">Include multiple progress bars in a progress component if you need.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "progress">
                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar progressbar-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar progressbar-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress-bar</span>" role= "<span class= "text-danger">progressbar</span>" style= "<span class= "text-danger">width: 15%;</span>" aria-valuenow= "<span class= "text-danger">15</span>" aria-valuemin= "<span class= "text-danger">0</span>" aria-valuemax= "<span class= "text-danger">100</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress-bar progressbar-success</span>" role= "<span class= "text-danger">progressbar</span>" style= "<span class= "text-danger">width: 30%;</span>" aria-valuenow= "<span class= "text-danger">30</span>" aria-valuemin= "<span class= "text-danger">0</span>" aria-valuemax= "<span class= "text-danger">100</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress-bar progressbar-info</span>" role= "<span class= "text-danger">progressbar</span>" style= "<span class= "text-danger">width: 20%;</span>" aria-valuenow= "<span class= "text-danger">20</span>" aria-valuemin= "<span class= "text-danger">0</span>" aria-valuemax= "<span class= "text-danger">100</span>" >< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
    <p class= "text-info mb-1 h5">STRIPED</p>
    <p class= "mb-1">Add <span class= "text-danger">.progress-bar-striped</span> to any <span class= "text-danger">.progress-bar</span> to apply a stripe via CSS gradient over the progress bar’s background color.</p>
    <div class= "row mt-3 mb-5">
        <div class= "col-md-6 py-3 agm-bg-light rounded">
            <p class= "text-info mb-3 h5">Preview:</p>
            <div class= "progress mb-2">
                <div class= "progress-bar progress-bar-striped progressbar-primary" role= "progressbar" style="width: 25%" aria-valuenow= "25" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
            <div class= "progress mb-2">
                <div class= "progress-bar progress-bar-striped progressbar-secondary" role= "progressbar" style="width: 30%" aria-valuenow= "30" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
            <div class= "progress mb-2">
                <div class= "progress-bar progress-bar-striped progressbar-success" role= "progressbar" style="width: 35%" aria-valuenow= "35" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
            <div class= "progress mb-2">
                <div class= "progress-bar progress-bar-striped progressbar-warning" role= "progressbar" style="width: 40%" aria-valuenow= "40" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
            <div class= "progress mb-2">
                <div class= "progress-bar progress-bar-striped progressbar-danger" role= "progressbar" style="width: 45%" aria-valuenow= "45" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
            <div class= "progress mb-2">
                <div class= "progress-bar progress-bar-striped progressbar-info" role= "progressbar" style="width: 45%" aria-valuenow= "45" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
            <div class= "progress mb-2">
                <div class= "progress-bar progress-bar-striped progressbar-dark" role= "progressbar" style="width: 50%" aria-valuenow= "50" aria-valuemin= "0" aria-valuemax= "100"></div>
            </div>
        </div>
        <div class= "col-md-6 py-3">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress</span>" ></p>
            <p class= "mb-1">&nbsp;&nbsp;&nbsp;< <span class= "text-danger">div</span> class= "<span class= "text-danger">progress-bar progress-bar-striped progressbar-primary</span>" role= "<span class= "text-danger">progressbar</span>" style= "<span class= "text-danger">width: 25%</span>" aria-valuenow= "<span class= "text-danger">25</span>" aria-valuemin= "<span class= "text-danger">0</span>" aria-valuemax= "<span class= "text-danger">100</span>" ><<span class= "text-danger"> /div</span> ></p>
            <p class= "mb-3">< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
        </div>
    </div>
</div>