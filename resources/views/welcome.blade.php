<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pro Viviendas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">    
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>

                    @else
                        <a href="{{ route('login') }}">Ingresar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

    <div class="body"></div>
    <div class="grad"></div>
    <div class="header">
      <div>Bievenido a </div> <br>
      <div>Pro <span>Viviendas</span></div>
      

    </div>
    </body>
<!-- <a href="{{ url('/home') }}">Home</a> -->
  <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                position: static;
                top: -20px;
                left: -20px;
                right: -40px;
                bottom: -40px;
                width: auto;
                height: auto;
                background-image: url(http://ginva.com/wp-content/uploads/2012/07/city-skyline-wallpapers-008.jpg);
                /*background-image: url(C:/laragon/www/blog/resources/views/city.jpg);*/
                background-size: cover;
               
                z-index: 0;

            }
            
            .grad{
                top: -20px;
                left: -20px;
                right: -40px;
                bottom: -40px;
                width: auto;
                height: auto;
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
                z-index: 1;
                opacity: 0.7;
                }
                .header{
                position: absolute;
                top: calc(44% - 35px);
                z-index: 2;
                }
                .header div{
                float: left;
                color: #fff;
                font-family: 'Exo', sans-serif;
                font-size: 40px;
                font-weight: 200;
                }
                .header div span{
                color: #157424 !important;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
</html>


