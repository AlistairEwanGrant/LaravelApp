<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{asset('favicon/fav.png')}}">  
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config("app.name", "LSAPP")}}</title>
        

    </head>
    <body>
        @include('inc.navbar')

        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>

    </body>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
   
</html>
