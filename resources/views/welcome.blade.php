<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Tweeeter</title>

        <!-- Styles -->
        <style>
        </style>

        <style>
            body {
               height: 100vh;
                background-color: #121212;
            }

            .navbar {
                height: 100px;
                color: #e2e8f0;
                background-color: #1b1e21;
                text-align: center;
                justify-content: center;
            }

            .box {
                display: flex;
                /*align-items: center;*/
                /*justify-content: center;*/
                height: 100vh;
            }

            a {
                text-decoration: none;
            }
            .big-title {
                font-size: 60px;
                font-weight: bold;
                text-align: center;
                margin-top: auto;
            }
            .title-box {
                margin: auto;
            }

            .box div {
                margin: 100px auto;
                width: 600px;
                height: 400px;
                background-color: whitesmoke;
                border-radius: 22px 22px 22px 22px;
                -moz-border-radius: 22px 22px 22px 22px;
                -webkit-border-radius: 22px 22px 22px 22px;
                border: 0px solid #000000;
            }
        </style>
    </head>

    <body class="antialiased">
    <nav class="navbar navbar-light">
{{--        <span class="navbar-brand mb-0 h1">Navbar</span>--}}
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


    </nav>
    <div class="title-box"><h1 class="big-title">Comme tweeter (en moins bien)</h1></div>

    </body>
</html>
