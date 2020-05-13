<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Aktus Global Management')</title>

        <!-- CSS -->
        @include('global.style')
        <!-- Javascript -->
        @include('global.script')

    </head>
    <body class= "agm-standard">
        <div class= "container-fluid px-0">
            <div class= "row navbar navbar-light shadow-sm sticky-top px-5 w-100 mx-0">
                <div class= "col-md-3 offset-md-1 navbar-header">
                    <a href= "#">
                        <h1 class= "mt-1 mb-0"><span>A</span>GM</h1>
                    </a>
                </div>
                <div class= "col-md-8 navbar-links">
                
                </div>
            </div>
            <div class= "row mx-0">
                <div class= "col-md-3 vh-100 px-0">
                    <div class= "navbar-side navbar-side-light h-75 border rounded my-5 mx-4 shadow-sm position-fixed">
                        <ul>
                            <li class= "label"><p class= "mb-1">Menu</p></li>
                            <li class= "navbar-link list active"><a href= "#" content= "dashboard-page"><p>Dashboard</p></a></li>
                            <li class= "label"><p class= "mb-1">Themes</p></li>
                            <li class= "navbar-link list"><a href= "#" content= "color-page"><p>Colors</p></a></li>
                            <li class= "navbar-link list"><a href= "#" content= "typography-page"><p>Typography</p></a></li>
                            <li class= "label"><p class= "mb-1">Components</p></li>
                            <li class= "list">
                                <a href= "#"><p>Base <i class="fas fa-caret-right"></i></p></a>
                                <ul class= "items">
                                    <li class= "navbar-link list"><a href= "#" content= "badge-page"><p>Badges</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "breadcrumb-page"><p>Breadcrumbs</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "card-page"><p>Cards</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "dropdown-page"><p>Dropdowns</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "listgroup-page"><p>List Groups</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "pagination-page"><p>Pagination</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "popover-page"><p>Popovers</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "progress-page"><p>Progress</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "tooltip-page"><p>Tooltips</p></a></li>
                                </ul>
                            </li>
                            <li class= "list">
                                <a href= "#"><p>Buttons <i class="fas fa-caret-right"></i></p></a>
                                <ul class= "items">
                                    <li class= "navbar-link list"><a href= "#" content= "button-page"><p>Buttons</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "button-group-page"><p>Button Group</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "checkbox-page"><p>Checkboxes</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "radio-page"><p>Radio Buttons</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "toggle-page"><p>Swtich Toggles</p></a></li>
                                </ul>
                            </li>
                            <li class= "list">
                                <a href= "#"><p>Forms <i class="fas fa-caret-right"></i></p></a>
                                <ul class= "items">
                                    <li class= "navbar-link list"><a href= "#" content= "layout-page"><p>Layout</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "validation-page"><p>Form Validation</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "input-page"><p>Input Fields</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "input-group-page"><p>Input Group</p></a></li>
                                </ul>
                            </li>
                            <li class= "list">
                                <a href= "#"><p>Navs <i class= "fas fa-caret-right"></i></p></a>
                                <ul class= "items">
                                    <li class= "navbar-link list"><a href= "#" content= "nav-page"><p>Nav</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "navbar-page"><p>Navbar</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "sidenav-page"><p>Side Nav</p></a></li>
                                </ul>
                            </li>
                            <li class= "list">
                                <a href= "#"><p>Notifications <i class="fas fa-caret-right"></i></p></a>
                                <ul class= "items">
                                    <li class= "navbar-link list"><a href= "#" content= "alert-page"><p>Alerts</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "modal-page"><p>Modal</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "toaster-page"><p>Toasters</p></a></li>
                                </ul>
                            </li>
                            <li class= "list">
                                <a href= "#"><p>Tables <i class="fas fa-caret-right"></i></p></a>
                                <ul class= "items">
                                    <li class= "navbar-link list"><a href= "#" content= "standard-tbl-page"><p>Standard Tables</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "datatable-page"><p>Datatables</p></a></li>
                                </ul>
                            </li>
                            <li class= "label"><p class= "mb-1">Pages</p></li>
                            <li class= "navbar-link list"><a href= "#" content= "login-page"><p>Login Page</p></a></li>
                            <li class= "navbar-link list"><a href= "#" content= "404-page"><p>404 Page</p></a></li>
                        </ul>
                    </div>
                </div>
                <div class= "col-md-9">
                    @include('components.dashboard')
                    @include('components.themes.color')
                    @include('components.themes.typography')
                    @include('components.buttons.button')
                    @include('components.base.card')
                    @include('components.base.badge')
                    @include('components.base.breadcrumb')
                    @include('components.base.dropdown')
                    @include('components.base.listgroup')
                    @include('components.base.pagination')
                    @include('components.base.popover')
                    @include('components.base.progress')
                    @include('components.base.tooltips')
                    @include('components.notification.alert')
                    @include('components.notification.modal')
                    @include('components.notification.toaster')
                    @include('components.buttons.checkbox')
                    @include('components.buttons.button-group')
                    @include('components.buttons.radio')
                    @include('components.buttons.toggle')
                    @include('components.forms.form')
                    @include('components.forms.input')
                    @include('components.forms.input-group')
                    @include('components.forms.validation')
                    @include('components.nav.nav')
                    @include('components.table.datatable')
                    @include('components.table.standard')
                    @include('components.pages.login')
                    @include('components.pages.404')
                </div>
            </div>
        </div>
    </body>
</html>