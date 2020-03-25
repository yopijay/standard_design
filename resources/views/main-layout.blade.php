<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'AGM Dashboard')</title>

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
                            <li class= "label"><p>Menu</p></li>
                            <li class= "navbar-link list active"><a href= "#" content= "dashboard-page"><p>Dashboard</p></a></li>
                            <li class= "label"><p>Themes</p></li>
                            <li class= "navbar-link list"><a href= "#" content= "colors-page"><p>Colors</p></a></li>
                            <li class= "navbar-link list"><a href= "#" content= "typography-page"><p>Typography</p></a></li>
                            <li class= "label"><p>Components</p></li>
                            <li class= "navbar-link list"><a href= "#" content= "buttons-page"><p>Buttons</p></a></li>
                            <li class= "navbar-link list"><a href= "#" content= "cards-page"><p>Cards</p></a></li>
                            <li class= "list">
                                <a href= "#"><p>Forms <i class="fas fa-caret-right"></i></p></a>
                                <ul class= "items">
                                    <li class= "navbar-link list"><a href= "#" content= "checkbox-page"><p>Checkboxes</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "radio-page"><p>Radio Buttons</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "toggles-page"><p>Swtich Toggles</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "input-page"><p>Input Fields</p></a></li>
                                </ul>
                            </li>
                            <li class= "list">
                                <a href= "#"><p>Notifications <i class="fas fa-caret-right"></i></p></a>
                                <ul class= "items">
                                    <li class= "navbar-link list"><a href= "#" content= "badge-page"><p>Badges</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "toasters-page"><p>Toasters</p></a></li>
                                    <li class= "navbar-link list"><a href= "#" content= "modal-page"><p>Modal</p></a></li>
                                </ul>
                            </li>
                            <li class= "label"><p>Pages</p></li>
                            <li class= "navbar-link list"><a href= "#" content= "login-page"><p>Login Page</p></a></li>
                            <li class= "navbar-link list"><a href= "#" content= "404-page"><p>404 Page</p></a></li>
                        </ul>
                    </div>
                </div>
                <div class= "col-md-9">
                    @include('layout.dashboard')
                    @include('layout.color')
                    @include('layout.typography')
                    @include('layout.button')
                    @include('layout.card')
                    @include('layout.toaster')
                    @include('layout.badge')
                    @include('layout.modal')
                    @include('layout.checkbox')
                    @include('layout.radio')
                    @include('layout.toggle')
                    @include('layout.input')
                    @include('layout.login')
                    @include('layout.404')
                </div>
            </div>
        </div>
    </body>
</html>