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
            <div class= "row navbar navbar-dark shadow-sm sticky-top px-5 w-100 mx-0">
                <div class= "col-md-3 offset-md-1 navbar-header">
                    <a href= "#">
                        <h1 class= "mt-1 mb-0"><span>A</span>GM</h1>
                    </a>
                </div>
                <div class= "col-md-8 navbar-links">
                
                </div>
            </div>
            <div class= "row mx-0">
                <div class= "col-md-3 vw-100 vh-100 px-0">
                    <div class= "navbar-side navbar-side-dark h-75 w-75 border rounded my-5 mx-5 shadow-sm">
                        <ul>
                            <li class= "label"><p>Menu</p></li>
                            <li><a href= "#" class= "navbar-link" content= "dashboard-page"><p>Dashboard</p></a></li>
                            <li class= "label"><p>Themes</p></li>
                            <li><a href= "#" class= "navbar-link" content= "colors-page"><p>Colors</p></a></li>
                            <li><a href= "#" class= "navbar-link" content= "typography-page"><p>Typography</p></a></li>
                            <li class= "label"><p>Components</p></li>
                            <li><a href= "#" class= "navbar-link" content= "buttons-page"><p>Buttons</p></a></li>
                            <li><a href= "#" class= "navbar-link" content= "cards-page"><p>Cards</p></a></li>
                            <li><a href= "#" class= "navbar-link" content= "toasters-page"><p>Toasters</p></a></li>
                            <li><a href= "#" class= "navbar-link" content= "toggles-page"><p>Switch Toggles</p></a></li>
                            <!-- <li class= "list">
                                <a href= "#"><p>Buttons <i class="fas fa-caret-right"></i></p></a>
                                <ul class= "items">
                                    <li><a href= "#" class= "navbar-link" content= "normal-button-page"><p>Normal Button</p></a></li>
                                    <li><a href= "#" class= "navbar-link" content= "rounded-button-page"><p>Rounded Button</p></a></li>
                                    <li><a href= "#" class= "navbar-link" content= "icon-button-page"><p>Icon Button</p></a></li>
                                </ul>
                            </li>
                            <li class= "list">
                                <a href= "#"><p>Cards <i class="fas fa-caret-right"></i></p></a>
                                <ul class= "items">
                                    <li><a href= "#" class= "navbar-link" content= "normal-button-page"><p>Outline Card</p></a></li>
                                    <li><a href= "#" class= "navbar-link" content= "rounded-button-page"><p>Rounded Button</p></a></li>
                                    <li><a href= "#" class= "navbar-link" content= "icon-button-page"><p>Icon Button</p></a></li>
                                </ul>
                            </li> -->
                            <li class= "label"><p>Pages</p></li>
                            <li><a href= "#" class= "navbar-link" content= "login-page"><p>Login Page</p></a></li>
                            <li><a href= "#" class= "navbar-link" content= "404-page"><p>404 Page</p></a></li>
                        </ul>
                    </div>
                </div>
                <div class= "col-md-9">
                    @include('layout.dashboard')
                    @include('layout.color')
                    @include('layout.card')
                </div>
            </div>
        </div>
    </body>
</html>