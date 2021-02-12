<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>larave-molisana</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>

        <header id="site_header">

            <div class="d-flex justify_center">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </div>

            <nav  class="d-flex justify_center">
                <a href="/">Home</a>
                <a href="products">Products</a>
                <a href="contacts">Contacts</a>    
            </nav>
        </header>

        @yield('content')

        <footer id="site_footer">
        </footer>
        
    </body>
</html>