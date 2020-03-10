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
            <div class= "py-2 shadow-sm sticky-top">
                <h1 class= "text-secondary">AGM Standard</h1>
            </div>
        </div>
    </body>
</html>