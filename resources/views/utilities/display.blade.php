<div class= "px-4 mt-5 content" id= "display-page">
    <h4>DISPLAY PROPERTY</h4>
    <p class= "mb-1">Quickly and responsively toggle the display value of components and more with our display utilities. Includes support for some of the more common values, as well as some extras for controlling display when printing.</p>
    <hr>
    <p class= "mb-3">Change the value of the <span class= "text-primary">display property</span> with our responsive display utility classes. We purposely support only a subset of all possible values for <span class= "text-danger">display</span>. Classes can be combined for various effects as you need.</p>
    <p class= "mb-2">Display utility classes that apply to all <span class= "text-primary">breakpoints</span>, from <span class= "text-danger">xs</span> to <span class= "text-danger"|>xl</span>, have no breakpoint abbreviation in them. This is because those classes are applied from <span class= "text-danger">min-width : 0;</span> and up, and thus are not bound by a media query. The remaining breakpoints, however, do include a breakpoint abbreviation.</p>
    <p class= "mb-1">As such, the classes are named using the format:</p>
    <ul>
        <li><span class= "text-danger">.d-{value}</span> for <span class= "text-danger">xs</span></li>
        <li><span class= "text-danger">.d-{breakpoint}-{value}</span> for <span class= "text-danger">sm, md, lg, </span> and <span class= "text-danger">xl</span></li>
    </ul>
    <p class= "mb-1">Where value is one of:</p>
    <ul>
        <li><span class= "text-danger">none</span></li>
        <li><span class= "text-danger">inline</span></li>
        <li><span class= "text-danger">inline-block</span></li>
        <li><span class= "text-danger">block</span></li>
        <li><span class= "text-danger">table</span></li>
        <li><span class= "text-danger">table-cell</span></li>
        <li><span class= "text-danger">table-row</span></li>
        <li><span class= "text-danger">flex</span></li>
        <li><span class= "text-danger">inline-flex</span></li>
    </ul>
    <p class= "mb-1">The dispaly values can be altered  by changing the <span class= "text-danger">$displays</span> variable and recompiling the SCSS.</p>
    <p class= "mb-1">The media queries effect screen width with the given breakpoint or larger. For example, <span class= "text-danger">.d-lg-none</span> sets <span class= "text-danger">display: none;</span> both <span class= "text-danger">lg</span> and <span class= "text-danger">xl</span> screens.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "agm-bg-primary d-inline p-2 text-white">d-inline</div>
            <div class= "agm-bg-dark d-inline p-2 text-white">d-inline</div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">agm-bg-primary d-inline p-2 text-white</span>" >d-inline< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">agm-bg-dark d-inline p-2 text-white</span>" >d-inline< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-display-1" copy-data= '<div class= "agm-bg-primary d-inline p-2 text-white">d-inline</div>'>COPY</button>
        </div>
    </div>
    <div class= "row my-3">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "agm-bg-primary d-block p-2 text-white">d-block</div>
            <div class= "agm-bg-dark d-block p-2 text-white">d-block</div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">agm-bg-primary d-block p-2 text-white</span>" >d-block< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">agm-bg-dark d-block p-2 text-white</span>" >d-block< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-display-2" copy-data= '<div class= "agm-bg-primary d-block p-2 text-white">d-block</div>'>COPY</button>
        </div>
    </div>
    <p class= "mb-1 text-info h5">HIDING ELEMENTS</p>
    <p class= "mb-2">For faster mobile-friendly environment, use responsive display classes for showing and hiding elements by device. Avoid creating entirely different versions of the same site, instead hide elements responsively for each screen size.</p>
    <p class= "mb-2">To hide elements simply use the <span class= "text-danger">.d-none</span> class or one of the <span class= "text-danger">.d-{sm, md, lg, xl}-none</span> classes for any responsive screen variation.</p>
    <p class= "mb-1">To show an element only on a given interval of screen sizes you can combine one <span class= "text-danger">.d-*-none</span> class with a <span class= "text-danger">.d-*-*</span> class, for example <span class= "text-danger">.d-none .d-md-block .d-xl-none</span> will hide the element for all screen sizes except on medium and large devices.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 col-12">
            <table class= "table table-bordered mt-3 mb-5">
                <thead>
                    <tr>
                        <th>Screen Size</th>
                        <th>Class</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hidden on all</td>
                        <td class= "text-danger">.d-none</td>
                    </tr>
                    <tr>
                        <td>Hidden only on xs</td>
                        <td class= "text-danger">.d-none .d-sm-block</td>
                    </tr>
                    <tr>
                        <td>Hidden only on sm</td>
                        <td class= "text-danger">.d-sm-none .d-md-block</td>
                    </tr>
                    <tr>
                        <td>Hidden only on md</td>
                        <td class= "text-danger">.d-md-none .d-lg-block</td>
                    </tr>
                    <tr>
                        <td>Hidden only on lg</td>
                        <td class= "text-danger">.d-lg-none .d-xl-block</td>
                    </tr>
                    <tr>
                        <td>Hidden only on xl</td>
                        <td class= "text-danger">.d-xl-none</td>
                    </tr>
                    <tr>
                        <td>Visible on all</td>
                        <td class= "text-danger">.d-block</td>
                    </tr>
                    <tr>
                        <td>Visible only on xs</td>
                        <td class= "text-danger">.d-block .d-sm-none</td>
                    </tr>
                    <tr>
                        <td>Visible only on sm</td>
                        <td class= "text-danger">.d-none .d-sm-block .d-md-none</td>
                    </tr>
                    <tr>
                        <td>Visible only on md</td>
                        <td class= "text-danger">.d-none .d-md-block .d-lg-none</td>
                    </tr>
                    <tr>
                        <td>Visible only on lg</td>
                        <td class= "text-danger">.d-none .d-lg-block .d-xl-none</td>
                    </tr>
                    <tr>
                        <td>Visible only on xl</td>
                        <td class= "text-danger">.d-none .d-xl-block</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-lg-none">hide on lg and wider screens</div>
            <div class= "d-none d-lg-block">hide on screens smaller than lg</div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-lg-none</span>" >hide on lg and wider screens< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-none d-lg-block</span>" >hide on screens smaller than lg< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-display-3" copy-data= '<div class= "d-lg-none">hide on lg and wider screens</div><div class= "d-none d-lg-block">hide on screens smaller than lg</div>'>COPY</button>
        </div>
    </div>
    <p class= "mb-1 text-info h5">DISPLAY IN PRINT</p>
    <p class= "mb-1">Change the <span class= "text-danger">display</span> value of elements when printing with our print display utility classes. Includes support for the same <span class= "text-danger">display</span> values as our responsive <span class= "text-danger">.d-*</span> utilities.</p>
    <ul>
        <li><span class= "text-danger">.d-print-none</span></li>
        <li><span class= "text-danger">.d-print-inline</span></li>
        <li><span class= "text-danger">.d-print-inline-block</span></li>
        <li><span class= "text-danger">.d-print-block</span></li>
        <li><span class= "text-danger">.d-print-table</span></li>
        <li><span class= "text-danger">.d-print-table-cell</span></li>
        <li><span class= "text-danger">.d-print-table-row</span></li>
        <li><span class= "text-danger">.d-print-flex</span></li>
        <li><span class= "text-danger">.d-print-inline-flex</span></li>
    </ul>
    <p class= "mb-1">The print and display classes can be combined.</p>
    <div class= "row my-3">
        <div class= "col-lg-6 col-12">
            <table class= "table table-bordered mt-3 mb-5">
                <thead>
                    <tr>
                        <th>Screen Size</th>
                        <th>Class</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hidden on all</td>
                        <td class= "text-danger">.d-none</td>
                    </tr>
                    <tr>
                        <td>Hidden only on xs</td>
                        <td class= "text-danger">.d-none .d-sm-block</td>
                    </tr>
                    <tr>
                        <td>Hidden only on sm</td>
                        <td class= "text-danger">.d-sm-none .d-md-block</td>
                    </tr>
                    <tr>
                        <td>Hidden only on md</td>
                        <td class= "text-danger">.d-md-none .d-lg-block</td>
                    </tr>
                    <tr>
                        <td>Hidden only on lg</td>
                        <td class= "text-danger">.d-lg-none .d-xl-block</td>
                    </tr>
                    <tr>
                        <td>Hidden only on xl</td>
                        <td class= "text-danger">.d-xl-none</td>
                    </tr>
                    <tr>
                        <td>Visible on all</td>
                        <td class= "text-danger">.d-block</td>
                    </tr>
                    <tr>
                        <td>Visible only on xs</td>
                        <td class= "text-danger">.d-block .d-sm-none</td>
                    </tr>
                    <tr>
                        <td>Visible only on sm</td>
                        <td class= "text-danger">.d-none .d-sm-block .d-md-none</td>
                    </tr>
                    <tr>
                        <td>Visible only on md</td>
                        <td class= "text-danger">.d-none .d-md-block .d-lg-none</td>
                    </tr>
                    <tr>
                        <td>Visible only on lg</td>
                        <td class= "text-danger">.d-none .d-lg-block .d-xl-none</td>
                    </tr>
                    <tr>
                        <td>Visible only on xl</td>
                        <td class= "text-danger">.d-none .d-xl-block</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class= "row mt-3 mb-5">
        <div class= "col-lg-6 agm-bg-light py-3 rounded col-12">
            <p class= "h5 text-info mb-3">Preview:</p>
            <div class= "d-print-none">Screen Only (Hide on print only)</div>
            <div class= "d-none d-print-block">Print Only (Hide on screen only)</div>
            <div class= "d-none d-lg-block d-print-block">Hide up to large on screen, but always show on print</div>
        </div>
        <div class= "col-lg-6 py-3 col-12">
            <p class= "h5 text-info mb-3">Example Code:</p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-print-none</span>" >Screen Only (Hide on print only)< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-none d-print-block</span>" >Print Only (Hide on print only)< <span class= "text-danger">/div</span> ></p>
            <p class= "mb-1">< <span class= "text-danger">div</span> class= "<span class= "text-danger">d-none d-lg-block d-print-block</span>" >Hide up to large screen, but always show on print< <span class= "text-danger">/div</span> ></p>
            <p id= "note" class= "text-warning"><i class= "fas fa-info-circle"></i>Just remove the spaces when you copy it!</p>
            <button type= "button" class= "btn btn-solid btn-primary float-right mt-5 btn-copy" id= "copy-display-4" copy-data= '<div class= "d-print-none">Screen Only (Hide on print only)</div><div class= "d-none d-print-block">Print Only (Hide on screen only)</div><div class= "d-none d-lg-block d-print-block">Hide up to large on screen, but always show on print</div>'>COPY</button>
        </div>
    </div>
</div>