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
                        <ul class= "horizontal">
                            <li class= "label"><p>Menu</p></li>
                            <li><a href= "#" class= "active"><p>Dashboard</p></a></li>
                            <li class= "label"><p>Themes</p></li>
                            <li><a href= "#"><p>Colors</p></a></li>
                            <li><a href= "#"><p>Typography</p></a></li>
                            <li class= "label"><p>Components</p></li>
                            <li class= "list">
                                <a href= "#"><p>Buttons</p></a>
                                <ul class= "items">
                                    <li><a href= "#"><p>Normal Button</p></a></li>
                                    <li><a href= "#"><p>Rounded Button</p></a></li>
                                    <li><a href= "#"><p>Icon Button</p></a></li>
                                </ul>
                            </li>
                            <li class= "label"><p>Pages</p></li>
                            <li><a href= "#"><p>Login Page</p></a></li>
                            <li><a href= "#"><p>404 Page</p></a></li>
                        </ul>
                    </div>
                </div>
                <div class= "col-md-9">
                    <div class= "p-5 my-5 mr-4 border rounded shadow-sm">

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>