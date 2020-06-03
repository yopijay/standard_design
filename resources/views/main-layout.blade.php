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
            <div class= "agm-navbar navbar-dark shadow-sm fixed-top" id= "main-header">
                <div class= "agm-navbar-brand">
                    <a href= "">
                        <h1><span>A</span>GM</h1>
                    </a>
                </div>
                <div class= "agm-navbar-nav justify-content-end ml-auto">
                    <ul>
                        <li class= "agm-nav-form"><input type= "text" class= "form-control form-control-sm form-pills" placeholder= "Search..."></li>
                        <li class= "agm-nav-link agm-nav-list"><a><i class= "fas fa-bell nav-icon"></i></a></li>
                        <li class= "agm-nav-link agm-nav-list"><a><i class= "fas fa-envelope nav-icon"></i></a></li>
                        <li class= "agm-nav-list">
                            <a><img src= "{{ asset('img/man.png') }}" class= "nav-img">psjudan@sjcgroup.ph<i class= "fas fa-caret-down nav-icon float-right"></i></a>
                            <ul class= "agm-nav-items">
                                <li class= "agm-nav-link"><a><i class= "fas fa-user nav-icon"></i>Personal Information</a></li>
                                <li class= "agm-nav-link agm-nav-list">
                                    <a><i class= "fas fa-cogs nav-icon"></i>Account Settings<i class= "fas fa-caret-down nav-icon float-right"></i></a>
                                    <ul class= "agm-nav-items">
                                        <li class= "agm-nav-link agm-nav-list"><a><i class= "far fa-bell nav-icon"></i>Notification Setting</a></li>
                                        <li class= "agm-nav-link agm-nav-list"><a><i class= "far fa-eye nav-icon"></i>Privacy Setting</a></li>
                                    </ul>
                                </li>
                                <li class= "agm-nav-link agm-nav-list"><a><i class= "fas fa-sign-out-alt nav-icon"></i>Sign out</a></li>
                            </ul>
                        </li>
                        <li class= "agm-nav-btn"><button class= "btn btn-solid btn-primary btn-pills btn-block">Register Here!</button></li>
                    </ul>
                </div>
                <div class= "agm-navbar-side">
                    <ul>
                        <li class= "agm-side-label">Menu</li>
                        <li class= "agm-side-link active"><a content= "dashboard-page">Dashboard</a></li>
                        <li class= "agm-side-label">Themes</li>
                        <li class= "agm-side-link"><a content= "color-page">Colors</a></li>
                        <li class= "agm-side-link"><a content= "typography-page">Typography</a></li>
                        <li class= "agm-side-label">Components</li>
                        <li class= "agm-side-list agm-side-dropdown">
                            <a>Base</a>
                            <ul class= "agm-nav-items">
                                <li class= "agm-side-link"><a content= "badge-page">Badges</a></li>
                                <li class= "agm-side-link"><a content= "breadcrumb-page">Breadcrumbs</a></li>
                                <li class= "agm-side-link"><a content= "card-page">Cards</a></li>
                                <li class= "agm-side-link"><a content= "dropdown-page">Dropdowns</a></li>
                                <li class= "agm-side-link"><a content= "listgroup-page">List Groups</a></li>
                                <li class= "agm-side-link"><a content= "pagination-page">Pagination</a></li>
                                <li class= "agm-side-link"><a content= "popover-page">Popovers</a></li>
                                <li class= "agm-side-link"><a content= "progress-page">Progress</a></li>
                                <li class= "agm-side-link"><a content= "tooltip-page">Tooltips</a></li>
                            </ul>
                        </li>
                        <li class= "agm-side-list agm-side-dropdown">
                            <a>Buttons</a>
                            <ul class= "agm-nav-items">
                                <li class= "agm-side-link"><a content= "button-page">Button</a></li>
                                <li class= "agm-side-link"><a content= "button-group-page">Button Group</a></li>
                                <li class= "agm-side-link"><a content= "checkbox-page">Checkbox</a></li>
                                <li class= "agm-side-link"><a content= "radio-page">Radio</a></li>
                                <li class= "agm-side-link"><a content= "toggle-page">Toggles</a></li>
                            </ul>
                        </li>
                        <li class= "agm-side-list agm-side-dropdown">
                            <a>Forms</a>
                            <ul class= "agm-nav-items">
                                <li class= "agm-side-link"><a content= "validation-page">Form Validation</a></li>
                                <li class= "agm-side-link"><a content= "input-page">Input Fields</a></li>
                                <li class= "agm-side-link"><a content= "input-group-page">Input Group</a></li>
                                <li class= "agm-side-link"><a content= "layout-page">Layout</a></li>
                                <li class= "agm-side-link"><a content= "mask-page">Mask Input</a></li>
                            </ul>
                        </li>
                        <li class= "agm-side-list agm-side-dropdown">
                            <a>Navs</a>
                            <ul class= "agm-nav-items">
                                <li class= "agm-side-link"><a content= "nav-page">Nav</a></li>
                                <li class= "agm-side-link"><a content= "navbar-page">Navbar</a></li>
                                <li class= "agm-side-link"><a content= "sidenav-page">Side Nav</a></li>
                            </ul>
                        </li>
                        <li class= "agm-side-list agm-side-dropdown">
                            <a>Notifications</a>
                            <ul class= "agm-nav-items">
                                <li class= "agm-side-link"><a content= "alert-page">Alerts</a></li>
                                <li class= "agm-side-link"><a content= "modal-page">Modal</a></li>
                                <li class= "agm-side-link"><a content= "toaster-page">Toasters</a></li>
                            </ul>
                        </li>
                        <li class= "agm-side-list agm-side-dropdown">
                            <a>Tables</a>
                            <ul class= "agm-nav-items">
                                <li class= "agm-side-link"><a content= "datatable-page">Datatables</a></li>
                                <li class= "agm-side-link"><a content= "standard-tbl-page">Standard Tables</a></li>
                            </ul>
                        </li>
                        <li class= "agm-side-label">Pages</li>
                        <li class= "agm-side-link"><a content= "login-page">Login Page</a></li>
                        <li class= "agm-side-link"><a content= "404-page">404 Page</a></li>
                    </ul>
                    <!-- <div class= "agm-side-grp">
                        <input type= "text" class= "form-control form-control-sm form-pills my-2" placeholder= "Search...">
                        <button class= "btn btn-solid btn-primary btn-pills btn-block my-2">Register Here!</button>
                    </div> -->
                </div>
            </div>
            <div class= "row mt-5 mx-0">
                <div class= "col-xl-10 offset-xl-2 col-lg-12 pt-3">
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
                    @include('components.forms.mask')
                    @include('components.forms.validation')
                    @include('components.nav.nav')
                    @include('components.nav.navbar')
                    @include('components.nav.sidenav')
                    @include('components.table.datatable')
                    @include('components.table.standard')
                    @include('components.pages.login')
                    @include('components.pages.404')
                </div>
            </div>
        </div>  
    </body>
</html>