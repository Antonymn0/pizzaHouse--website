<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PizzaHouse</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

                
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
</head>
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 54px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 20px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 5px;
            }
            .i{
                font-size: 1.7rem;
                margin-bottom: 50px;
               
            }
        </style>
    </head>
    <body>
        <div class="flex-center row position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right float-left mr-5 links">
                    @auth
                    <a href="{{ url('/') }}">Home</a>
                    <a href="/about">About us</a>
                    <a href="/contact">Contacts</a>
                    <a href="/blog">Blog</a>
                    <a href="{{ route('login') }}">Dashboard</a>


                    @else
                    <a href="{{ url('/') }}">Home</a>
                        <a href="/about">About us</a>
                        <a href="/contact">Contacts</a>
                        <a href="/blog">Blog</a>
                        <a href="{{ route('login') }}">Dashboard</a>

                     <span class="border p-1 rounded">
                        <a href="{{ route('login') }}" class="mr-3">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                     </span>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   Welcome to PizzaHouse 
                </div>
                <div class="i m-b-md">
                   <i class="i">  everything Pizzas  </i>
                </div>

               <a href="/createPizza"> <button  class="btn btn-l btn-success px-2 mt-5"> Order a pizza</button> </a>
                 </div>
        </div>
    </body>
</html>
