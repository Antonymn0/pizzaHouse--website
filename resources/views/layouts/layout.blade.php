<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">
        
    </head>
    <body>
           
        {{-- content goes in here --}}

        @yield('content')


    <footer class="p-5 bg-primary text-center btn jumbotron"> 
        Copyright  2020  Antonymn
    </footer>
    </body>
    </html>


