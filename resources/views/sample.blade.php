<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel= "manifest" href= "{{ asset('manifest.json') }}"/>
        <title>@yield('title', 'Aktus Global Management')</title>

        <!-- CSS -->
        @include('global.style')
        <!-- Javascript -->
        @include('global.script')

    </head>
    <body class= "agm-standard">
        <div class= "row mx-0">
            <img src= "{{ asset('img/bg1.jpg') }}" class= "vh-100 vw-100"/>
            <div class= "col-lg-4 offset-lg-1 position-absolute py-5">
                <h1 class= "agm-text-white my-5">WELCOME!</h1>
                <p class= "my-5 agm-text-white">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <a href= "#" class= "btn btn-outline btn-light mt-5 px-5 py-2 float-right btn-pills mx-1">MORE</a>
                <a href= "#" class= "btn btn-solid btn-light mt-5 px-5 py-2 float-right btn-pills mx-1">ABOUT US</a>
            </div>
            <div class= "col-lg-3 offset-9 position-absolute py-5 mt-5">
                <div class= "card px-2 py-5" style= "height: 500px;">
                </div>
            </div>
        </div>
    </body>
</html>