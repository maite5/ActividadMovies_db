<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
<link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: rgb(246, 247, 250)253, 225, 225);
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

            footer {
  background-color:#182736;
  color:white;
  align-content:center;
  
}
footer #li{
  color:white;

}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('bienvenidos')}}">Listado de pelicula</a>
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   Peliculas  
                </div>

                <div class="container">
                <div class="links">  
                    <!--Mask with wave-->
                    

                 <img src="http://es.web.img2.acsta.net/r_400_320/medias/nmedia/18/68/50/35/19502082.jpg">
                    <img src="http://es.web.img3.acsta.net/r_400_320/medias/nmedia/18/86/91/41/19870073.jpg">
                    <img src="http://es.web.img3.acsta.net/r_400_320/medias/nmedia/18/78/91/11/20136910.jpg">
                    <br>
                    <a href="https://github.com/maite5/ActividadMovies_db">GitHub</a> 
                </div>
            </div>
        </div> 
        </div>
        
         
  
    <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
  <script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>
  

    </body>
</html>
